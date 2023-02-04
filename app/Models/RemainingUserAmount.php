<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemainingUserAmount extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'userName',
        'grade',
        'total_amount',
        'paid_amount',
        'remaining_amount'

    ];

    public function user(){ //whatever function name
        return $this->belongsTo(User::class,'id');//Model name
    }
}
