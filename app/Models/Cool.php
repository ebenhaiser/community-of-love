<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cool extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'description',
        'address',
        'status',
    ];

    public function gembalas()
    {
        return $this->hasMany(CoolGembala::class);
    }

    public function activeGembala()
    {
        return $this->hasOne(CoolGembala::class)
            ->where('status', 'ACTIVE')
            ->latestOfMany();
    }

    public function access()
    {
        return $this->hasOne(CoolAccess::class);
    }

    public function memberships()
    {
        return $this->hasMany(CoolMembership::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_cools');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
