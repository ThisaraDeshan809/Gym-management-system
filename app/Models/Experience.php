<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experiences';

    protected $fillable = [

        'profile_id',
        'company_name',
        'position',
        'description',
        'year',

    ];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
