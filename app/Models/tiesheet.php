<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiesheet extends Model
{
    use HasFactory;
    protected $table='tiesheets';
    protected $fillable=['tiesheet'];
}
