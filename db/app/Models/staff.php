<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table='staff';
    protected $fillable =[
        'id',
        'name',
        'nick_name',
        'phone',
        'email',
        'SSN',
        'address',
        'staff_skills',
        'staff_status'
    ];

}
