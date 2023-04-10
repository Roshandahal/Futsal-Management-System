<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class updateprice extends Model
{
    use HasFactory;
    protected $table='updateprices';
    protected $fillable=['fivemenprice','sevenmenprice','timeduration'];
}
