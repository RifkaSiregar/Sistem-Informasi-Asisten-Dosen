<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserLogActivity;
use DB;
use Carbon\Carbon;

class UserLogActivityTableSeeder extends Seeder
{
    public function run()
    {
        UserLogActivity::create([
            'initial' => 'Dev-Team',
            'activity' => 'Sisten deployed',
        ]);
    }
}
