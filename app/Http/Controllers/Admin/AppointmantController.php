<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AppointmantController extends Controller
{
    public function index(Request $request)
    {
        if(auth()->user()->user_type == '2'){
            $upComingAppointments = Appointment::where('doctor_id', auth()->user()->id)
                ->whereDate('date', '>=', Carbon::now()->toDateString())->get();

            $previousAppointments = Appointment::where('doctor_id', auth()->user()->id)
                ->whereBetween('date', [
                    Carbon::now()->subMonth()->startOfMonth()->toDateString(), // Start of previous month
                    Carbon::now()->subMonth()->endOfMonth()->toDateString(),   // End of previous month
                ])
                ->get();


            return view('admin.appointments.index', compact('upComingAppointments','previousAppointments'));

        } else {
            if ($request->ajax()) {
                // Eager load the 'doctor' relationship to avoid N+1 queries
                $data = Appointment::with('doctor')->where('patient_id', auth()->user()->id);

                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('patientName', function(Appointment $data) {
                        // Use the doctor's first and last name from the eager-loaded relationship
                        $name = $data->doctor->first_name .' '. $data->doctor->last_name;
                        return $name;
                    })
                    ->addColumn('action', function(Appointment $data) {
                        // Serialize user data to JSON format
                        $userData = json_encode($data);

                        // Add action button (Edit)
                        $btn = '<div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="text-body edit-city"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditCity" data-user=\''.$userData.'\' >
                                        <i class="ti ti-edit ti-sm me-2"></i>
                                    </a>
                                </div>';
                        return $btn;
                    })
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('search'))) {
                            $instance->where(function ($query) use ($request) {
                                $search = $request->get('search');
                                $query->orWhere('id', 'LIKE', "%$search%")
                                      ->orWhere('name', 'LIKE', "%$search%"); // Consider adjusting 'name' if needed
                            });
                        }

                        if (!empty($request->get('name'))) {
                            $instance->where(function ($query) use ($request) {
                                $name = $request->get('name');
                                $query->orWhere('name', 'LIKE', "%$name%"); // Again, make sure 'name' exists in your model
                            });
                        }
                    })
                    ->rawColumns(['patientName','action'])
                    ->make(true);
            }


            return view('admin.appointments.patients.index');
        }

    }

    public function create()
    {
        $doctors = User::where('user_type',2)->get();
        return view('admin.appointments.patients.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'mobile' => 'required',
            'doctor' => 'required',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'appointment_date' => 'required|date',
            'from' => 'required|date_format:H:i',
            'to' => 'required|date_format:H:i',
            'treatment' => 'nullable|string|max:255',
            'certificate' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048', // Max 2MB
        ]);

        // Handle file upload
        if ($request->hasFile('certificate')) {
            $validatedData['certificate'] = $request->file('certificate')->store('certificates', 'public');
        }

        // Save the data to the database (assuming you have a model)
        $appointment = new \App\Models\Appointment();
        $appointment->doctor_id = $validatedData['doctor'];
        $appointment->patient_id = auth()->user()->id;
        $appointment->first_name = $validatedData['first_name'];
        $appointment->last_name = $validatedData['last_name'];
        $appointment->gender = $validatedData['gender'];
        $appointment->mobile = $validatedData['mobile'];
        $appointment->email = $validatedData['email'];
        $appointment->address = $validatedData['address'];
        $appointment->date = $validatedData['appointment_date'];
        $appointment->from = $validatedData['from'];
        $appointment->to = $validatedData['to'];
        $appointment->treatment = $validatedData['treatment'] ?? null;
        $appointment->certificate = $validatedData['certificate'] ?? null;
        $appointment->save();


        return redirect()->route('admin.appointment.index')->with('success', 'Appointment completed successfully!');
    }

    public function prescription(Request $request)
    {
        return view('admin.appointments.prescription');
    }
}
