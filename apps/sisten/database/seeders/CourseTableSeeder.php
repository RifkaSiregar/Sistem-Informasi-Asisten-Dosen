<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PROBSTAT, MADAS1, MADAS2, FISDAS SI, FISDAS I, FISDAS II
        //Semester 3
        DB::table('course')->insert([
            'id' => 1,
            'course_code' => 'MAS2001',
            'course_initial' => 'PROBSTAT',
            'name' => 'Probabilitas dan Statistika',
            'credit' => 3,
            'course_owner_id' => '1',//Fakultas SI-TI-TE-MR
        ]);

        DB::table('course')->insert([
            'id' => 2,
            'course_code' => '11S1213',
            'course_initial' => 'IMK',
            'name' => 'Interaksi Manusia Komputer',
            'credit' => 3,
            'course_owner_id' => '9',//SI 
        ]);

        DB::table('course')->insert([
            'id' => 3,
            'course_code' => '12S2102',
            'course_initial' => 'BASDAT',
            'name' => 'Basis Data',
            'credit' => 4,
            'course_owner_id' => '2',//FITE
        ]);

        DB::table('course')->insert([
            'id' => 4,
            'course_code' => '10S2201',
            'course_initial' => 'ALJALI',
            'name' => 'Aljabar Linear',
            'credit' => 3,
            'course_owner_id' => '1',//Fakultas
        ]);

        DB::table('course')->insert([
            'id' => 5,
            'course_code' => '10S2203',
            'course_initial' => 'SISOP',
            'name' => 'Sistem Operasi',
            'credit' => 3,
            'course_owner_id' => '2',//FITE SI-TI-TE
        ]);

        DB::table('course')->insert([
            'id' => 6,
            'course_code' => '12S2201',
            'course_initial' => 'ADS',
            'name' => 'Analisis dan Desain Sistem',
            'credit' => 3,
            'course_owner_id' => '9',//SI
        ]);

        DB::table('course')->insert([
            'id' => 7,
            'course_code' => '12S2203',
            'course_initial' => 'PBO',
            'name' => 'Pemrograman Berorientasi Objek',
            'credit' => 3,
            'course_owner_id' => '9',//SI
        ]);

        DB::table('course')->insert([
            'id' => 8,
            'course_code' => '12S3101',
            'course_initial' => 'PPW',
            'name' => 'Pemrograman dan Pengujian Aplikasi Web',
            'credit' => 4,
            'course_owner_id' => '9',//SI
        ]);

        DB::table('course')->insert([
            'id' => 9,
            'course_code' => '12S3203',
            'course_initial' => 'PSI',
            'name' => 'Proyek Sistem Informasi',
            'credit' => 4,
            'course_owner_id' => '9',//SI
        ]);

        DB::table('course')->insert([
            'id' => 10,
            'course_code' => 'KUS093',
            'course_initial' => 'CITDIG',
            'name' => 'Citra Digital',
            'credit' => 3,
            'course_owner_id' => '2',//FITE
        ]);

        DB::table('course')->insert([
            'id' => 11,
            'course_code' => 'KUS094',
            'course_initial' => 'STA',
            'name' => 'Sains Technology & Art',
            'credit' => 2,
            'course_owner_id' => '1',//Fakultas
        ]);

        Course::create([
            'course_code' => 'KUS1202',
            'course_initial' => 'PDR',
            'name' => 'Pengantar Desain & Rekayasa',
            'credit' => 2,
            'course_owner_id' => '1',//Fakultas
        ]);

        Course::create([
            'course_code' => '11S1213',
            'course_initial' => 'RPL',
            'name' => 'Rekayasa Perangkat Lunak',
            'credit' => 3,
            'course_owner_id' => '2',//FITE
        ]);

        Course::create([
            'course_code' => '10S2202',
            'course_initial' => 'JARKOM',
            'name' => 'Jaringan Komputer',
            'credit' => 3,
            'course_owner_id' => '2',//FITE
        ]);

        Course::create([
            'course_code' => '11S2110',
            'course_initial' => 'PBO',
            'name' => 'Pemrograman Berorientasi Objek',
            'credit' => 4,
            'course_owner_id' => '8',//TI
        ]);

        Course::create([
            'course_code' => '11S2203',
            'course_initial' => 'IMK',
            'name' => 'Interaksi Manusia Komputer',
            'credit' => 3,
            'course_owner_id' => '8',//TI
        ]);

        Course::create([
            'course_code' => '12S4081',
            'course_initial' => 'PBD SI',
            'name' => 'Pengenalan Basis Data dan Sistem Informasi',
            'credit' => 4,
            'course_owner_id' => '7',//MR
        ]);

        Course::create([
            'course_code' => 'MAS1101',
            'course_initial' => 'MADAS I',
            'name' => 'Matematika Dasar I',
            'credit' => 4,
            'course_owner_id' => '1',//Fakultas SI-TI-TE-MR-BP
        ]);

        Course::create([
            'course_code' => 'MAS1201',
            'course_initial' => 'MADAS II',
            'name' => 'Matematika Dasar II',
            'credit' => 4,
            'course_owner_id' => '1',//Fakultas
        ]);

        Course::create([
            'course_code' => 'FIS1103',
            'course_initial' => 'FISDAS',
            'name' => 'Fisika Dasar',
            'credit' => 4,
            'course_owner_id' => '9',//SI
        ]);

        Course::create([
            'course_code' => 'FIS1102',
            'course_initial' => 'FISDAS IB',
            'name' => 'Fisika Dasar IB',
            'credit' => 4,
            'course_owner_id' => '1',//Fakultas
        ]);

        Course::create([
            'course_code' => 'FIS1202',
            'course_initial' => 'FISDAS IIB',
            'name' => 'Fisika Dasar IIB',
            'credit' => 4,
            'course_owner_id' => '1',//Fakultas
        ]);

        Course::create([
            'course_code' => 'TIS1101',
            'course_initial' => 'INDIG',
            'name' => 'Inovasi Digital',
            'credit' => 2,
            'course_owner_id' => '1',//Fakultas
        ]);

        Course::create([
            'course_code' => '14S2103',
            'course_initial' => 'RE',
            'name' => 'Rangkaian Elektrik',
            'credit' => 2,
            'course_owner_id' => '6',//Elektro
        ]);
    }
}
