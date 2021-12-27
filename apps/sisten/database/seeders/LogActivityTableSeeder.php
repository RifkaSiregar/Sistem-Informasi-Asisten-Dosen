<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LogActivity;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LogActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //log activity table
        // DB::table('log_activity')->insert([
        //     'semester_id' => 1,
        //     'schedule_id' => 1,
        //     'attendance' => 60,
        //     'activity_type' => 'Practicum',
        //     'date_time' => '2021-04-10 08:00:00',
        //     'description' => 'Practicum for week 1 discussing the Theory of Probability',
        //     'activityreport' => 'all in good condition',
        //     'status' => 'approve',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('log_activity')->insert([
        //     'semester_id' => 1,
        //     'schedule_id' => 2,
        //     'attendance' => 54,
        //     'activity_type' => 'Practicum',
        //     'date_time' => '2021-04-17 08:00:00',
        //     'description' => 'Practicum for week 1 discussing the Theory of Statistic',
        //     'activityreport' => 'Mei Panjaitan not present because of sick, the other is Calvin Lumban Gaol, Christopher Hutabarat, Ahinraze Sihaloho, Renhard Simatupang and Paulus Richardo are absent',
        //     'status' => 'unapprove',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('log_activity')->insert([
        //     'semester_id' => 3,
        //     'schedule_id' => 4,
        //     'attendance' => 60,
        //     'activity_type' => 'Practicum',
        //     'date_time' => Carbon::now(),
        //     'description' => 'Doing SQL Server instalation',
        //     'activityreport' => 'all in good condition',
        //     'status' => 'unapprove',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('log_activity')->insert([
        //     'semester_id' => 3,
        //     'schedule_id' => 5,
        //     'attendance' => 59,
        //     'activity_type' => 'Practicum',
        //     'date_time' => Carbon::now(),
        //     'description' => 'Explaining the SQL Server basic usage',
        //     'activityreport' => 'Mei Panjaitan not present because of sick',
        //     'status' => 'unapprove',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('log_activity')->insert([
        //     'semester_id' => 4,
        //     'schedule_id' => 6,
        //     'attendance' => 59,
        //     'activity_type' => 'Practicum',
        //     'date_time' => Carbon::now(),
        //     'description' => 'Discussing the Concept of Algebra',
        //     'activityreport' => 'Alda Lumban Gaol not present because of sick',
        //     'status' => 'approve',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('log_activity')->insert([
        //     'semester_id' => 5,
        //     'schedule_id' => 7,
        //     'attendance' => 58,
        //     'activity_type' => 'Practicum',
        //     'date_time' => Carbon::now(),
        //     'description' => 'Linux Installation',
        //     'activityreport' => 'Christopher Hutabarat and Paulus Richardo are absent',
        //     'status' => 'unapprove',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('log_activity')->insert([
        //     'semester_id' => 6,
        //     'schedule_id' => 8,
        //     'attendance' => 60,
        //     'activity_type' => 'Practicum',
        //     'date_time' => Carbon::now(),
        //     'description' => 'The 4 type of Project Elicitation',
        //     'activityreport' => 'all in good condition',
        //     'status' => 'unapprove',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('log_activity')->insert([
        //     'semester_id' => 7,
        //     'schedule_id' => 9,
        //     'attendance' => 60,
        //     'activity_type' => 'Practicum',
        //     'date_time' => Carbon::now(),
        //     'description' => 'Creating simple java project in Netbeans',
        //     'activityreport' => 'All present',
        //     'status' => 'approve',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        DB::table('log_activity')->insert([
            'semester_id' => 1,
            'schedule_id' => 1,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-20 10:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('log_activity')->insert([
            'semester_id' => 2,
            'schedule_id' => 4,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-20 10:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('log_activity')->insert([
            'semester_id' => 3,
            'schedule_id' => 7,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-10 08:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('log_activity')->insert([
            'semester_id' => 4,
            'schedule_id' => 10,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-10 08:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('log_activity')->insert([
            'semester_id' => 5,
            'schedule_id' => 13,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-17 13:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('log_activity')->insert([
            'semester_id' => 6,
            'schedule_id' => 16,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-17 13:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('log_activity')->insert([
            'semester_id' => 7,
            'schedule_id' => 19,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-17 15:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('log_activity')->insert([
            'semester_id' => 8,
            'schedule_id' => 22,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-17 08:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('log_activity')->insert([
            'semester_id' => 9,
            'schedule_id' => 25,
            'attendance' => 22,
            'activity_type' => 'Practicum',
            'date_time' => '2021-04-17 08:00:00',
            'description' => 'Practicum for week 1',
            'activityreport' => 'Nothing',
            'status' => 'unapprove',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
