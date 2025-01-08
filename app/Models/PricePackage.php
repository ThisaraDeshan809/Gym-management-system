<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePackage extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'package_name',
        'package_description',
        'price',
    ];
}
