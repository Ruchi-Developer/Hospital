<?php

namespace App\Http\Controllers\Auth\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function create()
    {
        return view('auth.patient.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'opd_id' => 'required|unique:patients',
            'patient_name' => 'required',
            'gender' => 'required',
            'age' => 'nullable|integer',
            'mobile_no' => 'nullable|digits:10',
            'charge_amount' => 'required|numeric',
        ]);

        Patient::create($request->all());

        return redirect()->back()->with('success', 'Patient record saved successfully!');
    }
}
