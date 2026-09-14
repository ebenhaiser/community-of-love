<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cool extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'description',
        'address',
        'status',
    ];

    /**
     * @return HasMany<CoolGembala, $this>
     */
    public function gembalas(): HasMany
    {
        return $this->hasMany(CoolGembala::class);
    }

    /**
     * @return HasOne<CoolGembala, $this>
     */
    public function activeGembala(): HasOne
    {
        return $this->hasOne(CoolGembala::class)
            ->where('status', 'ACTIVE')
            ->latestOfMany();
    }

    /**
     * @return HasOne<CoolAccess, $this>
     */
    public function access(): HasOne
    {
        return $this->hasOne(CoolAccess::class);
    }

    /**
     * @return HasMany<CoolMembership, $this>
     */
    public function memberships(): HasMany
    {
        return $this->hasMany(CoolMembership::class);
    }

    /**
     * @return BelongsToMany<Event, $this>
     */
    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'event_cools');
    }

    /**
     * @return HasMany<Message, $this>
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
