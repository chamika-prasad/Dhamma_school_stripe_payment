<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeApplication extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'name',
        'description',
        'approved'

    ];

    public function user(){ //whatever function name
        return $this->belongsTo(User::class,'id');//Model name
    }
}
