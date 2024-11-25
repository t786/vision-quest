<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AppointmantController extends Controller
{
    public function index(Request $request)
    {
        $doctors = User::where('user_type',2)->get();
        if(auth()->user()->user_type == '2'){
            $appointments = Appointment::where('doctor_id',auth()->user()->id);
            return view('admin.appointments.index', compact('doctors','appointments'));

        } else {
            $doctors = User::where('user_type',2)->get();
            $data = Appointment::where('patient_id',auth()->user()->id);
        
            return view('admin.appointments.patients.index', compact('doctors'));
        }

    }

    // public function store(Request $request)
    // {

    //     $rules = [
    //         'date' => 'required',
    //         'doctor_id' => 'required',
    //     ];

    //     $validate = Validator::validate($request->all(),$rules);

    //     $data = [
    //         'date' => $request->input('date'),
    //         'doctor_id' => $request->input('doctor_id'),
    //         'patient_id' => auth()->user()->id,
    //     ];

    //     Appointment::create($data);

    //     return response()->json([
    //         'status' => 1,
    //         'message' => 'Appointment created successfully',
    //         'redirect_url' => route('admin.appointment.index'),
    //     ]);
    // }

    public function store(Request $request)
    {

        // dd($request->all());
        // Validate the form input
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'mobile' => 'required',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'appointment_date' => 'required|date',
            'from' => 'required|date_format:H:i',
            'to' => 'required|date_format:H:i',
            'doctor' => 'nullable|string',
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
        $appointment->doctor = $validatedData['doctor'] ?? null;
        $appointment->treatment = $validatedData['treatment'] ?? null;
        $appointment->certificate = $validatedData['certificate'] ?? null;
        $appointment->save();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Appointment has been successfully created.');
    }


    public function update(Request $request, string $id)
    {
        $city = City::find($id);
        if($city == null){
            return response()->json([
                'status' => 2,
                'message' => 'Record not found',
            ]);
        }

        $rules = [
            'name' => 'required|string|max:255',
            'country_id' => 'required',
            'status' => 'required',
        ];

        $validate = Validator::validate($request->all(),$rules);

        $data = [
            'name' => $request->input('name'),
            'country_id' => $request->input('country_id'),
            'status' => $request->input('status')
        ];

        $city->update($data);

        return response()->json([
            'status' => 1,
            'message' => 'city updated successfully',
            'redirect_url' => route('admin.cities.index'),
        ]);
    }
}
