<?php

namespace Database\Seeders;

use App\Models\RefSetting;
use Illuminate\Database\Seeder;

class RefSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'member.default_password',
                'value' => 'COOLKeren',
                'type' => 'STRING',
                'description' => 'Password default saat akun anggota COOL dibuat.',
                'is_active' => true,
            ],
            [
                'key' => 'member.password_change_required',
                'value' => 'true',
                'type' => 'BOOLEAN',
                'description' => 'Menentukan apakah anggota wajib mengganti password saat login pertama.',
                'is_active' => true,
            ],
            [
                'key' => 'member.id_prefix',
                'value' => 'COOL',
                'type' => 'STRING',
                'description' => 'Prefix default untuk Member ID.',
                'is_active' => true,
            ],
            [
                'key' => 'cool.pin_length',
                'value' => '6',
                'type' => 'INTEGER',
                'description' => 'Jumlah digit PIN untuk akses COOL.',
                'is_active' => true,
            ],
            [
                'key' => 'cool.access_session_minutes',
                'value' => '60',
                'type' => 'INTEGER',
                'description' => 'Durasi session akses halaman COOL melalui QR dan PIN.',
                'is_active' => true,
            ],
            [
                'key' => 'file.max_size_mb',
                'value' => '10',
                'type' => 'INTEGER',
                'description' => 'Ukuran maksimum attachment dalam MB.',
                'is_active' => true,
            ],
            [
                'key' => 'file.allowed_extensions',
                'value' => 'pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png',
                'type' => 'STRING',
                'description' => 'Extension file yang diperbolehkan untuk attachment.',
                'is_active' => true,
            ],
        ];

        foreach ($settings as $setting) {
            RefSetting::withTrashed()->updateOrCreate(
                ['key' => $setting['key']],
                array_merge($setting, [
                    'deleted_at' => null,
                ])
            );
        }
    }
}
