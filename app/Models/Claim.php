<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = ['old_claim','claim_freq','claim_amount','claim_flag'];
    use HasFactory;
}