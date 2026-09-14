<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoolGembala extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cool_id',
        'user_id',
        'started_at',
        'ended_at',
        'status',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
