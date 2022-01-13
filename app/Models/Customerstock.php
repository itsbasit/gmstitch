<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customerstock extends Model
{
    use HasFactory;
    protected $table = "stockcustomer";
    protected $fillable = ['name' , 'brand' , 'brandtype' , 'quantity' , 'price' , 'totalprice'];
}
