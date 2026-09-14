<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventCool extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'event_id',
        'cool_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function cool()
    {
        return $this->belongsTo(Cool::class);
    }
}
