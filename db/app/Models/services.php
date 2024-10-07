<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $table = 'services';
    protected $fillable = ['id','category','name','picture','price','content','status','note','created_at','update_at'];
}
