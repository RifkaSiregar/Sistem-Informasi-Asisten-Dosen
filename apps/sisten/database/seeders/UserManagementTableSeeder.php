<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserManagementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usermanagement = [
            [
                'name' => "Rifka",
                'email' => "rifka@gmail.com",
                'status' => "Active",
                'role' => "Mahasiswa",
            ],
            [
                'name' => "Budi",
                'email' => "budi@gmail.com",
                'status' => "Disable",
                'role' => "Asisten Dosen",
           
            ],
            ];
            \DB::table('usermanagement')->insert($usermanagement);
    }
}
