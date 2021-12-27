<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;

class ScheduleTableSeeder extends Seeder
{
    public function run()
    {
        //Schedule for PROBSTAT SI-1
        DB::table('schedule')->insert([
            'semester_id' => 1,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-20 10:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 1,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-27 10:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 1,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-04 10:00:00',
        ]);

        //Schedule for PROBSTAT SI-2
        DB::table('schedule')->insert([
            'semester_id' => 2,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-20 10:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 2,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-27 10:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 2,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-04 10:00:00',
        ]);

        //Schedule for PROBSTAT TI-1
        DB::table('schedule')->insert([
            'semester_id' => 3,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-17 10:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 3,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-24 10:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 3,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-01 10:00:00',
        ]);

        //Schedule for PROBSTAT TI-2
        DB::table('schedule')->insert([
            'semester_id' => 4,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-17 10:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 4,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-24 10:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 4,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-01 10:00:00',
        ]);

        //Schedule for PROBSTAT MR-1
        DB::table('schedule')->insert([
            'semester_id' => 5,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-17 13:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 5,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-24 13:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 5,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-01 13:00:00',
        ]);

        //Schedule for PROBSTAT MR-2
        DB::table('schedule')->insert([
            'semester_id' => 6,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-17 13:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 6,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-24 13:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 6,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-01 13:00:00',
        ]);

        //Schedule for PROBSTAT BP
        DB::table('schedule')->insert([
            'semester_id' => 7,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-17 15:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 7,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-24 15:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 7,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-01 15:00:00',
        ]);

        //Schedule for PROBSTAT TE-1
        DB::table('schedule')->insert([
            'semester_id' => 8,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-17 08:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 8,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-24 08:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 8,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-01 08:00:00',
        ]);

        //Schedule for PROBSTAT TE-2
        DB::table('schedule')->insert([
            'semester_id' => 9,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '1',
            'date_time' => '2021-04-17 08:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 9,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '2',
            'date_time' => '2021-04-24 08:00:00',
        ]);
        DB::table('schedule')->insert([
            'semester_id' => 9,
            'session_name' => 'Practicum',
            'duration' => '2',
            'week' => '3',
            'date_time' => '2021-05-01 08:00:00',
        ]);
    }
}
