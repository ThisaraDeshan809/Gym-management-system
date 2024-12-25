<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_image',
        'project_id',
    ];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
