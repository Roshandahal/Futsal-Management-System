<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tournmententry extends Model
{
    use HasFactory;
    protected $table='tournmententries';
    protected $fillable=['name','contact','location'];
}
