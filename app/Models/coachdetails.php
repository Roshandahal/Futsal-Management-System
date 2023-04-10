<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coachdetails extends Model
{
    use HasFactory;
    protected $table='coachdetails';
    protected $fillable=['name','coachtime','club'];
}
