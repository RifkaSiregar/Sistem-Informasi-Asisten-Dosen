<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CourseTableSeeder::class,
            CourseOwnerTableSeeder::class,
            SemesterTableSeeder::class,
            ScheduleTableSeeder::class,
            UserTableSeeder::class,
            UserSemesterTableSeeder::class,
            UserLogActivityTableSeeder::class,
            ApplicationTableSeeder::class,
            VacancyTableSeeder::class,
            LogActivityTableSeeder::class,
            CommentTableSeeder::class,
        ]);
    }
}
