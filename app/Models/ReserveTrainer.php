<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserveTrainer extends Model
{
    use HasFactory;

    protected $table = 'trainerreservations';
    protected $guarded = [];
}
