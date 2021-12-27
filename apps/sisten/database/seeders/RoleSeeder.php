<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::Create([
            'name' => 'baak',
            'guard_name' => 'web',
        ]);

        Role::Create([
            'name' => 'lecturer',
            'guard_name' => 'web',
        ]);

        Role::Create([
            'name' => 'teaching_assistant',
            'guard_name' => 'web',
        ]);

        Role::Create([
            'name' => 'student',
            'guard_name' => 'web',
        ]);

        Role::Create([
            'name' => 'unauthorized',
            'guard_name' => 'web',
        ]);
    }
}
