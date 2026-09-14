<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Master',
                'code' => 'MASTER',
                'description' => 'Administrator yang memiliki akses penuh ke seluruh sistem.',
            ],
            [
                'name' => 'Gembala COOL',
                'code' => 'GEMBALA_COOL',
                'description' => 'Gembala yang memiliki akses terhadap COOL yang digembalakannya.',
            ],
        ];

        foreach ($roles as $role) {
            Role::withTrashed()->updateOrCreate(
                ['code' => $role['code']],
                array_merge($role, [
                    'deleted_at' => null,
                ])
            );
        }
    }
}
