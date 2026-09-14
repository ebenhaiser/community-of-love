<?php

namespace Database\Seeders;

use App\Models\EventType;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventTypes = [
            [
                'name' => 'Ibadah',
                'code' => 'IBADAH',
                'description' => 'Kegiatan ibadah.',
            ],
            [
                'name' => 'Fellowship',
                'code' => 'FELLOWSHIP',
                'description' => 'Kegiatan fellowship atau kebersamaan anggota.',
            ],
            [
                'name' => 'Doa',
                'code' => 'DOA',
                'description' => 'Kegiatan doa bersama.',
            ],
            [
                'name' => 'Retreat',
                'code' => 'RETREAT',
                'description' => 'Kegiatan retreat.',
            ],
            [
                'name' => 'Pelayanan',
                'code' => 'PELAYANAN',
                'description' => 'Kegiatan pelayanan.',
            ],
            [
                'name' => 'Lainnya',
                'code' => 'LAINNYA',
                'description' => 'Jenis kegiatan lainnya.',
            ],
        ];

        foreach ($eventTypes as $eventType) {
            EventType::withTrashed()->updateOrCreate(
                ['code' => $eventType['code']],
                array_merge($eventType, [
                    'deleted_at' => null,
                ])
            );
        }
    }
}
