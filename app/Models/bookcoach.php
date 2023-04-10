<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookcoach extends Model
{
    use HasFactory;
    protected $table='bookcoaches';
    protected $fillable=['coachname','playername','contact'];
}
