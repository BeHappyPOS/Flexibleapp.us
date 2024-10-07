<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'producs';
    protected $fillable = ['id','category','name','picture','price','content','status','note','created_at','update_at'];
}
