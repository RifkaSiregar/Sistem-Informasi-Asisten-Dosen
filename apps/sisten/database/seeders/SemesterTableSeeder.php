<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semester;
use Illuminate\Support\Facades\DB;

class SemesterTableSeeder extends Seeder
{
    public function run()
    {
        // PROBSTAT
        //PROBSTAT SI
        DB::table('semester')->insert([ //1
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13SI1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([ //2
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 26,
            'class_name' => '13SI2',
            'ta_seats' => 2,
        ]);
        //PROBSTAT TI
        DB::table('semester')->insert([ //3
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13TI1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([ //4
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13TI2',
            'ta_seats' => 2,
        ]);
        //PROBSTAT MR
        DB::table('semester')->insert([ //5
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 29,
            'class_name' => '13MR1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([ //6
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 28,
            'class_name' => '13MR2',
            'ta_seats' => 2,
        ]);
        //PROBSTAT BP
        DB::table('semester')->insert([ //7
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 16,
            'class_name' => '13BP1',
            'ta_seats' => 2,
        ]);
        //PROBSTAT TE
        DB::table('semester')->insert([
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 21,
            'class_name' => '13TE1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '1',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 20,
            'class_name' => '13TE2',
            'ta_seats' => 2,
        ]);
        //IMK
        //IMK SI
        DB::table('semester')->insert([
            'course_id' => '2',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13SI1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '2',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 26,
            'class_name' => '13SI2',
            'ta_seats' => 2,
        ]);
        //IMK TI
        DB::table('semester')->insert([
            'course_id' => '2',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13TI1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '2',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13TI2',
            'ta_seats' => 2,
        ]);
        // MADAS1
        // MADAS1 SI
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13SI1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 26,
            'class_name' => '13SI2',
            'ta_seats' => 2,
        ]);
        // MADAS1 TI
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13TI1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13TI2',
            'ta_seats' => 2,
        ]);
        // MADAS1 MR
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 29,
            'class_name' => '13MR1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 28,
            'class_name' => '13MR2',
            'ta_seats' => 2,
        ]);
        // MADAS1 BP
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 16,
            'class_name' => '13BP1',
            'ta_seats' => 2,
        ]);
        // MADAS1 TE
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 21,
            'class_name' => '13TE1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '18',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 20,
            'class_name' => '13TE2',
            'ta_seats' => 2,
        ]);

        // //MADAS II
        // // MADAS1 SI
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 27,
        //     'class_name' => '13SI1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 26,
        //     'class_name' => '13SI2',
        //     'ta_seats' => 2,
        // ]);
        // // MADAS1 TI
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 27,
        //     'class_name' => '13TI1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 27,
        //     'class_name' => '13TI2',
        //     'ta_seats' => 2,
        // ]);
        // // MADAS1 MR
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 29,
        //     'class_name' => '13MR1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 28,
        //     'class_name' => '13MR2',
        //     'ta_seats' => 2,
        // ]);
        // // MADAS1 BP
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 16,
        //     'class_name' => '13BP1',
        //     'ta_seats' => 2,
        // ]);
        // // MADAS1 TE
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 21,
        //     'class_name' => '13TE1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '19',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 20,
        //     'class_name' => '13TE2',
        //     'ta_seats' => 2,
        // ]);

        // //FISDAS SI
        // DB::table('semester')->insert([
        //     'course_id' => '20',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 27,
        //     'class_name' => '13SI1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '20',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 26,
        //     'class_name' => '13SI2',
        //     'ta_seats' => 2,
        // ]);

        // //FISDAS IB
        // // FISDAS IB TI
        // DB::table('semester')->insert([
        //     'course_id' => '21',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 27,
        //     'class_name' => '13TI1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '21',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 27,
        //     'class_name' => '13TI2',
        //     'ta_seats' => 2,
        // ]);
        // // FISDAS IB MR
        // DB::table('semester')->insert([
        //     'course_id' => '21',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 29,
        //     'class_name' => '13MR1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '21',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 28,
        //     'class_name' => '13MR2',
        //     'ta_seats' => 2,
        // ]);
        // // FISDAS IB BP
        // DB::table('semester')->insert([
        //     'course_id' => '21',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 16,
        //     'class_name' => '13BP1',
        //     'ta_seats' => 2,
        // ]);
        // // FISDAS IB TE
        // DB::table('semester')->insert([
        //     'course_id' => '21',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 21,
        //     'class_name' => '13TE1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '21',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 20,
        //     'class_name' => '13TE2',
        //     'ta_seats' => 2,
        // ]);
        // //FISDAS IIB
        // //FISDAS IIB TI
        // DB::table('semester')->insert([
        //     'course_id' => '22',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 27,
        //     'class_name' => '13TI1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '22',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 27,
        //     'class_name' => '13TI2',
        //     'ta_seats' => 2,
        // ]);
        // //FISDAS IIB MR
        // DB::table('semester')->insert([
        //     'course_id' => '22',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 29,
        //     'class_name' => '13MR1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '22',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 28,
        //     'class_name' => '13MR2',
        //     'ta_seats' => 2,
        // ]);
        // //FISDAS IIB BP
        // DB::table('semester')->insert([
        //     'course_id' => '22',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 16,
        //     'class_name' => '13BP1',
        //     'ta_seats' => 2,
        // ]);
        // //FISDAS IIB TE
        // DB::table('semester')->insert([
        //     'course_id' => '22',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 21,
        //     'class_name' => '13TE1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '22',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 20,
        //     'class_name' => '13TE2',
        //     'ta_seats' => 2,
        // ]);
        //BASDAT
        // BASDAT SI
        DB::table('semester')->insert([
            'course_id' => '3',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13SI1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '3',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 26,
            'class_name' => '13SI2',
            'ta_seats' => 2,
        ]);
        // BASDAT TI
        DB::table('semester')->insert([
            'course_id' => '3',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13TI1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '3',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 27,
            'class_name' => '13TI2',
            'ta_seats' => 2,
        ]);
        // // BASDAT MR
        // DB::table('semester')->insert([
        //     'course_id' => '3',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 29,
        //     'class_name' => '13MR1',
        //     'ta_seats' => 2,
        // ]);
        // DB::table('semester')->insert([
        //     'course_id' => '3',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 28,
        //     'class_name' => '13MR2',
        //     'ta_seats' => 2,
        // ]);
        // // BASDAT BP
        // DB::table('semester')->insert([
        //     'course_id' => '3',
        //     'academic_year' => '2020/2021',
        //     'semester_name' => 'odd',
        //     'number_of_students' => 16,
        //     'class_name' => '13BP1',
        //     'ta_seats' => 2,
        // ]);
        // BASDAT TE
        DB::table('semester')->insert([
            'course_id' => '3',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 21,
            'class_name' => '13TE1',
            'ta_seats' => 2,
        ]);
        DB::table('semester')->insert([
            'course_id' => '3',
            'academic_year' => '2020/2021',
            'semester_name' => 'odd',
            'number_of_students' => 20,
            'class_name' => '13TE2',
            'ta_seats' => 2,
        ]);
    }
}
