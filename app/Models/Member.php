<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;

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

    public function memberships()
    {
        return $this->hasMany(CoolMembership::class);
    }

    public function account()
    {
        return $this->hasOne(MemberAccount::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
