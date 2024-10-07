<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['id','fullname','nick_name','password','skill','picture','gender','birthday','phone','email','SSN','address','active','note','created_at','update_at'];

    protected $hidden =[
        'password'
    ];
}
