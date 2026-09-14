<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventCool extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'event_id',
        'cool_id',
    ];

    /**
     * @return BelongsTo<Event, $this>
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * @return BelongsTo<Cool, $this>
     */
    public function cool(): BelongsTo
    {
        return $this->belongsTo(Cool::class);
    }
}
