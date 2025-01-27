<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientDetailController extends Controller
{
     public function view()
    {
        $patients = Patient::all(); // Fetch all records from the `patients` table
        return view('admin.patient.view', compact('patients'));
    }
}
