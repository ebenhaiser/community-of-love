<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MasterUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('code', 'MASTER')->firstOrFail();

        User::withTrashed()->updateOrCreate(
            [
                'username' => 'master',
            ],
            [
                'role_id' => $role->id,
                'name' => 'Master Administrator',
                'email' => 'master@gbi-salemba.local',
                'password' => Hash::make('a123456!'),
                'phone' => null,
                'status' => 'ACTIVE',
                'deleted_at' => null,
            ]
        );
    }
}
