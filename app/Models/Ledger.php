<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    use HasFactory;
    protected $table = "ledger";
    protected $fillable = ['purpose1' , 'purpose2' , 'purpose3' , 'debit' , 'credit' , 'savings' , 'date'];
}
