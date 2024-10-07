<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['id','fullname','nick_name','picture','gender','birthday','phone','email','address','active','note','created_at','update_at'];
}
