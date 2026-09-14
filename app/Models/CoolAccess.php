<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoolAccess extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cool_id',
        'token',
        'pin_hash',
        'status',
        'last_regenerated_at',
    ];

    protected $hidden = [
        'pin_hash',
    ];

    protected function casts(): array
    {
        return [
            'last_regenerated_at' => 'datetime',
        ];
    }

    /**
     * @return BelongsTo<Cool, $this>
     */
    public function cool(): BelongsTo
    {
        return $this->belongsTo(Cool::class);
    }
}
