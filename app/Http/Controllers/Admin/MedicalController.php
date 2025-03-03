<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prescriptions = Prescription::orderBy('id', 'desc')
            ->get();

        return view('admin.medical-record.index', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function download($appointment_id)
    {
        // Fetch appointment details with related data
        $appointment = Appointment::with(['patient', 'prescription', 'labTests'])
            ->where('id', $appointment_id)
            ->first();

        if (!$appointment) {
            return abort(404, 'Appointment not found');
        }

        // Load the PDF view and pass data
        $pdf = Pdf::loadView('pdf.appointment', compact('appointment'));

        // Optionally, save the PDF in storage (optional)
        $pdfPath = "public/pdfs/appointment_{$appointment->id}.pdf";
        Storage::put($pdfPath, $pdf->output());

        // Download the PDF
        return $pdf->download("appointment_{$appointment->id}.pdf");
    }
}
