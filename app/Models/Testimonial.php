<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'author',
        'position',
        'feedback',
        'author_img',
        'banner_img',
    ];
}
