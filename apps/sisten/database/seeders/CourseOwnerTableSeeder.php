<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseOwner;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CourseOwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_owner')->insert([//1
            'name' => 'Institute',
            'curriculum' => 'DEL-2019',
            'level' => 'Institute',
            'description' => ' ',
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
        DB::table('course_owner')->insert([//2
            'name' => 'Faculty of Informatics and Electrical Engineering',
            'curriculum' => 'FITE-2019',
            'level' => 'Faculty',
            'description' => ' ',
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
        DB::table('course_owner')->insert([//3
            'name' => 'Faculty of Biotechnology',
            'curriculum' => 'FB-2019',
            'level' => 'Faculty',
            'description' => ' ',
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
        DB::table('course_owner')->insert([//4
            'name' => 'Faculty of Industrial Engineering',
            'curriculum' => 'FTI-2019',
            'level' => 'Faculty',
            'description' => ' ',
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
        DB::table('course_owner')->insert([//5
            'name' => 'Bachelor of Information System',
            'curriculum' => 'S1SI-2014',
            'level' => 'Study-Program',
            'description' => ' ',
            'status' => 'inactive',
            'created_at' => Carbon::now(),
        ]);
        DB::table('course_owner')->insert([//6
            'name' => 'Bachelor of Electrical Engineering',
            'curriculum' => 'S1TE-2019',
            'level' => 'Study-Program',
            'description' => ' ',
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
        DB::table('course_owner')->insert([//7
            'name' => 'Bachelor of Management Engineering',
            'curriculum' => 'S1MR-2019',
            'level' => 'Study-Program',
            'description' => ' ',
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
        DB::table('course_owner')->insert([//8
            'name' => 'Bachelor of Informatics Engineering',
            'curriculum' => 'S1IF-2019',
            'level' => 'Study-Program',
            'description' => ' ',
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
        DB::table('course_owner')->insert([//9
            'name' => 'Bachelor of Information System',
            'curriculum' => 'S1SI-2019',
            'level' => 'Study-Program',
            'description' => ' ',
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
    }
}
