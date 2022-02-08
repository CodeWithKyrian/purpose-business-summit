<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    const BASIC_CODE = 'PBS-BSC-';
    const SILVER_CODE = 'PBS-SLV-';
    const GOLD_CODE = 'PBS-GLD-';

    protected $fillable = ['name', 'price', 'features'];

    protected $casts = [
        'features' => 'array'
    ];

    public function users() : HasMany 
    {
        return $this->hasMany(User::class);
    }
}
