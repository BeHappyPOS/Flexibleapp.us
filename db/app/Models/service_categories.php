<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_categories extends Model
{
    protected $table = 'service-categories';
    protected $fillable = ['id','name','created_at','update_at'];
}
