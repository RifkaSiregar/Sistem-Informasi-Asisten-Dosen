<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentTableSeeder extends Seeder
{
    public function run()
    {
        // DB::table('comment')->insert([
        //     'user_registration_number' => '0117069202',
        //     'log_number' => 2,
        //     'text' => 'Tolong kirimkan lampiran berupa lembar absensi, saya tunggu perbaikannya jam 2 siang ini!!',
        //     'send_date' => Carbon::now(),
        // ]);
        // DB::table('comment')->insert([
        //     'user_registration_number' => '0117069202',
        //     'log_number' => 2,
        //     'text' => 'sudah selesai belum?',
        //     'send_date' => Carbon::now(),
        // ]);
        // DB::table('comment')->insert([
        //     'user_registration_number' => '0121058503',
        //     'log_number' => 1,
        //     'text' => 'Tolong lampirannya dilengkapi ya',
        //     'send_date' => Carbon::now(),
        // ]);
        // DB::table('comment')->insert([
        //     'user_registration_number' => '0130058501',
        //     'log_number' => 3,
        //     'text' => 'Tolong nanti jumpai saya ya di kantor setelah makan siang',
        //     'send_date' => Carbon::now(),
        // ]);
    }
}
