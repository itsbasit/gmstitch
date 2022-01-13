<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = ['id' , 'no_of_suit' , 'suit_type' , 'delivered' , 'total_price' , 'paid_price' , 'booking_date' , 'delivery_date'];
}
