<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoolMembership extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cool_id',
        'member_id',
        'started_at',
        'ended_at',
        'status',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'started_at' => 'date',
            'ended_at' => 'date',
        ];
    }

    public function cool()
    {
        return $this->belongsTo(Cool::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
