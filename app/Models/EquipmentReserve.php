<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentReserve extends Model
{
    use HasFactory;

    protected $table = 'equipment_reservations';
    protected $guarded = [];
}
