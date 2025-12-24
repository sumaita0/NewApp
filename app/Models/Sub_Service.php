<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Service extends Model
{
    use HasFactory;

    // Add this line
    protected $table = 'sub_services'; // correct table name

    protected $fillable = [
        'service_id',
        'title',
        'description',
        'icon',
        'price',
        'discount_price',
        'quantity',
        'is_active',
    ];


    protected $casts = [
    'price' => 'decimal:2',
    'discount_price' => 'decimal:2',
    'is_active' => 'boolean',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
