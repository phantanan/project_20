<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'detail',
        'price',
    ];
    protected $primaryKey = 'food_id';
}
