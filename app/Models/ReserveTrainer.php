<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserveTrainer extends Model
{
    use HasFactory;

    protected $table = 'trainerreservations';
    protected $guarded = [];
    protected $casts = [
        'date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship with trainer
    public function trainer()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }
}
