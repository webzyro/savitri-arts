<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_active',
        'sub_title',
        'sub_desc',
        'process_text',
    ];

    public function features()
    {
        return $this->hasMany(ServiceFeature::class);
    }
}
