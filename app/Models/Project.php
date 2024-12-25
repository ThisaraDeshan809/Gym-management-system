<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'mainimage',
        'project_title',
        'project_description',
        'client',
        'web',
        'start_month',
        'end_month',
        'profile_id',
    ];
    

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function sub_images()
    {
        return $this->hasMany(SubImage::class);
    }
}
