<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tournmentdetails extends Model
{
    use HasFactory;
    protected $table='tournmentdetails';
    protected $fillable=['entryfee','winnerprice','runnerup'];
}
