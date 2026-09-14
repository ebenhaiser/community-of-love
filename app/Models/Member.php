<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'member_code',
        'name',
        'email',
        'phone',
        'gender',
        'birth_date',
        'address',
        'status',
        'joined_church_at',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'joined_church_at' => 'date',
        ];
    }

    /**
     * @return HasMany<CoolMembership, $this>
     */
    public function memberships(): HasMany
    {
        return $this->hasMany(CoolMembership::class);
    }

    /**
     * @return HasOne<MemberAccount, $this>
     */
    public function account(): HasOne
    {
        return $this->hasOne(MemberAccount::class);
    }

    /**
     * @return HasMany<Attendance, $this>
     */
    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    /**
     * @return HasMany<Message, $this>
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
