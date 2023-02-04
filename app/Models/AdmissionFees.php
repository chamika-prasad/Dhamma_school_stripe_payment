<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionFees extends Model
{
    use HasFactory;

    protected $fillable = [

        'grade',
        'amount'

    ];

}
