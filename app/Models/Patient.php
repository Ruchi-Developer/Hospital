<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'opd_id',
        'patient_name',
        'gender',
        'age',
        'father_husband_name',
        'mobile_no',
        'address',
        'disease',
        'area',
        'caste',
        'mlc_pmlc',
        'charges',
        'charge_amount',
    ];
}
