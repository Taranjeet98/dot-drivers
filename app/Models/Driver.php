<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [

        'name',

        'email',

        'phone',

        'status',

        'dob',

        'cdl',

        'state',

        'license_expiry',

        'medical_expiry',

        'hire_date'

    ];
}