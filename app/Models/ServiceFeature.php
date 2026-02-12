<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceFeature extends Model
{
    protected $fillable = [
        'service_id',
        'title',
        'description',
        'icon',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
