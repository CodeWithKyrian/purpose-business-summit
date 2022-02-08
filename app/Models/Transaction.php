<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'confirmed', 'meta', 'uuid', 'ip_address', 'paid_at'];

    protected $casts = [
        'confirmed' => 'bool',
        'meta' => 'json',
        'paid_at' => 'datetime'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
