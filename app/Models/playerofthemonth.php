<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playerofthemonth extends Model
{
    use HasFactory;
    protected $table ='playerofthemonths';
    protected $fillable=['playerofthemonth'];
}
