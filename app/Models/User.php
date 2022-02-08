<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname', 'lastname',  'email', 'phone', 'gender', 'password', 'ticket_id',
        'ticket_code', 'ticket_access', 'referrer_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    public function referrer() : BelongsTo
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }

    public function referrals() : HasMany
    {
        return $this->hasMany(User::class, 'referrer_id');
    }


    public function transactions() 
    {
        return $this->hasMany(Transaction::class);
    }

    public function scopeFromOnline(Builder $query): Builder
    {
        return $query->where('ticket_access', 'online');
    }

    public function scopeFromOffline(Builder $query): Builder
    {
        return $query->where('ticket_access', 'offline');
    }

    public function getFullnameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}
