<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_categories extends Model
{
    protected $table = 'produc-categories';
    protected $fillable = ['id','name','created_at','update_at'];
}
