<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeerecord extends Model
{
    use HasFactory;
    protected $table = "employeerecord";
    protected $fillable = ['name' , 'date' , 'mobile' , 'total_price'];
}
