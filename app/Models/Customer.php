<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $fillable = ['name' , 'mobile' , 'email' , 'type' , 'size' , 'currentdate' ,'returndate' , 'stitcher'];

    protected $casts = [
        'type1' => 'array',
        // 'type1' => DataCollection::class.':'.SongData::class,
    ];
}
