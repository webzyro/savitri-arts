<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'caption',
        'is_active',
        'image',
    ];


    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
