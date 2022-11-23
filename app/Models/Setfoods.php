<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setfoods extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'detail',
        'price',
    ];

    protected $primaryKey = 'setfoods_id';
}
