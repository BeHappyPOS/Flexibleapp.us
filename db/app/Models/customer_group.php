<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_group extends Model
{
    protected $table = 'customer_group';
    protected $fillable = ['id','name','created_at','update_at'];
}
