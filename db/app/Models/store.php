<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $table = 'store';
    protected $fillable = ['id','name','logo','phone','email','address','active','note'];
}
