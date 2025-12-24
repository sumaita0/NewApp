<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'icon','is_active'
    ];

    public function subservices()
{
    return $this->hasMany(Sub_Service::class, 'service_id');
}

}
