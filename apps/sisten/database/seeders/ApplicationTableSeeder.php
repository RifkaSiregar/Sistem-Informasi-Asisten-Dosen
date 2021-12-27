<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Teaching assistan for PROBSTAT SI-1
        DB::table('application')->insert([
            'participant_registration_number' => '12S18027',
            'vacancy_id' => 1,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '12S18055',
            'vacancy_id' => 1,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);

        //Teaching assistan for PROBSTAT SI-2
        DB::table('application')->insert([
            'participant_registration_number' => '12S18032',
            'vacancy_id' => 2,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '12S18048',
            'vacancy_id' => 2,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);

        //Teaching assistan for PROBSTAT TI-1
        DB::table('application')->insert([
            'participant_registration_number' => '12S18002',
            'vacancy_id' => 3,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '12S18015',
            'vacancy_id' => 3,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);

        //Teaching assistan for PROBSTAT TI-2
        DB::table('application')->insert([
            'participant_registration_number' => '12S18047',
            'vacancy_id' => 4,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '12S18026',
            'vacancy_id' => 4,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);

        //Teaching assistan for PROBSTAT MR-1
        DB::table('application')->insert([
            'participant_registration_number' => '11S18061',
            'vacancy_id' => 5,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '11S18034',
            'vacancy_id' => 5,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);

        //Teaching assistan for PROBSTAT MR-2
        DB::table('application')->insert([
            'participant_registration_number' => '11S18022',
            'vacancy_id' => 6,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '11S18051',
            'vacancy_id' => 6,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);

        //Teaching assistan for PROBSTAT BP
        DB::table('application')->insert([
            'participant_registration_number' => '11S18067',
            'vacancy_id' => 7,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '21S18067',
            'vacancy_id' => 7,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);

        //Teaching assistan for PROBSTAT TE-1
        DB::table('application')->insert([
            'participant_registration_number' => '21S18066',
            'vacancy_id' => 8,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '21S18062',
            'vacancy_id' => 8,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);

        //Teaching assistan for PROBSTAT TE-2
        DB::table('application')->insert([
            'participant_registration_number' => '14S18053',
            'vacancy_id' => 9,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
        DB::table('application')->insert([
            'participant_registration_number' => '14S18050',
            'vacancy_id' => 9,
            'send_date' => Carbon::now(),
            'score' => 'A',
            'decision' => 1,
            'decision_date' => Carbon::now(),
            'motivation' => "Want to teach and become a student who makes money",
            'created_at' => Carbon::now(),
        ]);
    }
}
