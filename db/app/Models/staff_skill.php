<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_skill extends Model
{
    protected $table ='staff_skill';
    protected $fillable =[
        'id',
        'name'
    ];
}
