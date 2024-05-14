<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable=['driver_id','kidsdriv','age','income','mstatus','gender','education','occupation'];
    // use HasFactory;
}