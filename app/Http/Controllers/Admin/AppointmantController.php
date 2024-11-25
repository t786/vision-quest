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
            if ($request->ajax()) {
                $data = Appointment::where('doctor_id',auth()->user()->id);
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('patientName', function(Appointment $data) {
                        $name = $data->patient->first_name .' '. $data->patient->last_name;
                        return $name;
                        
                    })
                    ->addColumn('action', function(Appointment $data) {
                        // Serialize user data to JSON format
                        $userData = json_encode($data);
                        
                        $btn = '<div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="text-body edit-city"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditCity" data-user=\''.$userData.'\'>
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
                                    ->orWhere('name', 'LIKE', "%$search%");
                            });
                        }

                        if (!empty($request->get('name'))) {
                            $instance->where(function ($query) use ($request) {
                                $name = $request->get('name');
                                $query->orWhere('name', 'LIKE', "%$name%");
                            });
                        }
                    })
                    ->rawColumns(['patientName','action'])
                    ->make(true);
            }

            return view('admin.appointments.index', compact('doctors'));

        } else {
            if ($request->ajax()) {
                $data = Appointment::where('patient_id',auth()->user()->id);
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('patientName', function(Appointment $data) {
                        $name = $data->doctor->first_name .' '. $data->doctor->last_name;
                        return $name;
                        
                    })
                    ->addColumn('action', function(Appointment $data) {
                        // Serialize user data to JSON format
                        $userData = json_encode($data);
                        
                        $btn = '<div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="text-body edit-city"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditCity" data-user=\''.$userData.'\'>
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
                                    ->orWhere('name', 'LIKE', "%$search%");
                            });
                        }

                        if (!empty($request->get('name'))) {
                            $instance->where(function ($query) use ($request) {
                                $name = $request->get('name');
                                $query->orWhere('name', 'LIKE', "%$name%");
                            });
                        }
                    })
                    ->rawColumns(['patientName','action'])
                    ->make(true);
            }
            return view('admin.appointments.index', compact('doctors'));
        }
        

        
    }

    public function store(Request $request)
    {

        $rules = [
            'date' => 'required',
            'doctor_id' => 'required',
        ];

        $validate = Validator::validate($request->all(),$rules);

        $data = [
            'date' => $request->input('date'),
            'doctor_id' => $request->input('doctor_id'),
            'patient_id' => auth()->user()->id,
        ];

        Appointment::create($data);

        return response()->json([
            'status' => 1,
            'message' => 'Appointment created successfully',
            'redirect_url' => route('admin.appointment.index'),
        ]);
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
