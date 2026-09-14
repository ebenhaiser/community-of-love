<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'role_id',
        'name',
        'username',
        'email',
        'password',
        'phone',
        'status',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'last_login_at' => 'datetime',
        ];
    }

    /**
     * @return BelongsTo<Role, $this>
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return HasMany<CoolGembala, $this>
     */
    public function coolGembalas(): HasMany
    {
        return $this->hasMany(CoolGembala::class);
    }

    /**
     * @return HasMany<Event, $this>
     */
    public function createdEvents(): HasMany
    {
        return $this->hasMany(Event::class, 'created_by');
    }

    /**
     * @return HasMany<Event, $this>
     */
    public function updatedEvents(): HasMany
    {
        return $this->hasMany(Event::class, 'updated_by');
    }

    /**
     * @return HasMany<Attendance, $this>
     */
    public function recordedAttendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'recorded_by');
    }

    /**
     * @return HasMany<Attachment, $this>
     */
    public function createdAttachments(): HasMany
    {
        return $this->hasMany(Attachment::class, 'created_by');
    }

    /**
     * @return HasMany<Message, $this>
     */
    public function readMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'read_by');
    }

    /**
     * @return HasMany<AuditTrail, $this>
     */
    public function auditTrails(): HasMany
    {
        return $this->hasMany(AuditTrail::class);
    }
}
