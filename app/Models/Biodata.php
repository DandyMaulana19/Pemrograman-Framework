<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public static $rules = [
        'nim' => 'required|unique:biodatas',
    ];
}