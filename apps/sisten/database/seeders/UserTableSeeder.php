<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // User table
    public function run()
    {
        //Admin
        $user = User::create([
            'first_name' => 'Yoke',
            'middle_name' => 'Aprilia',
            'last_name' => 'Purba',
            'email' => 'yoke@del.ac.id',
            'username' => 'yoke',
            'phone_number' => '0812123123',
            'registration_number' => 'ifs14001',
            'status' => 'active',
            'initial' => 'YKE',
            'role' => 4,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('baak');

        //Teacher
        $user = User::create([
            'first_name' => 'Parmonangan',
            'middle_name' => 'Rotua',
            'last_name' => 'Togatorop',
            'email' => 'parmonangan@del.ac.id',
            'username' => 'parmonangan',
            'phone_number' => '0812123123',
            'registration_number' => '0130058501',
            'status' => 'active',
            'initial' => 'PAT',
            'role' => 3,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('lecturer');

        $user = User::create([
            'first_name' => 'Junita',
            'last_name' => 'Amalia',
            'email' => 'junita@del.ac.id',
            'username' => 'junita',
            'phone_number' => '0812123123',
            'registration_number' => '0117069202',
            'status' => 'active',
            'initial' => 'JUN',
            'role' => 3,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('lecturer');

        $user = User::create([
            'first_name' => 'Tiurma',
            'last_name' => 'Lumban Gaol',
            'email' => 'tiurma@del.ac.id',
            'username' => 'tiurma',
            'phone_number' => '0812123123',
            'registration_number' => '0108037605',
            'status' => 'active',
            'initial' => 'TLG',
            'role' => 3,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('lecturer');

        $user = User::create([
            'first_name' => 'Sari',
            'middle_name' => 'Muthia',
            'last_name' => 'Silalahi',
            'email' => 'sari.silalahi@del.ac.id',
            'username' => 'sarisilalahi',
            'phone_number' => '0812123123',
            'registration_number' => '0117109301',
            'status' => 'active',
            'initial' => 'MSL',
            'role' => 3,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('lecturer');

        $user = User::create([
            'first_name' => 'Riyanthi',
            'middle_name' => 'Angrainy',
            'last_name' => 'Sianturi',
            'email' => 'riyanthi@del.ac.id',
            'username' => 'riyanthi',
            'phone_number' => '0812123123',
            'registration_number' => '0121058503',
            'status' => 'active',
            'initial' => 'RIS',
            'role' => 3,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('lecturer');

        $user = User::create([
            'first_name' => 'Tennov',
            'middle_name' => ' ',
            'last_name' => 'Simanjuntak',
            'email' => 'tennov@del.ac.id',
            'username' => 'tennov',
            'phone_number' => '0812123123',
            'registration_number' => '0110117601',
            'status' => 'active',
            'initial' => 'TEN',
            'role' => 3,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('lecturer');

        $user = User::create([
            'first_name' => 'Mario',
            'middle_name' => 'E',
            'last_name' => 'Simaremare',
            'email' => 'mario@del.ac.id',
            'username' => 'mario',
            'phone_number' => '0812123123',
            'registration_number' => '0128058805',
            'status' => 'active',
            'initial' => 'MSS',
            'role' => 3,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('lecturer');

        //Student
        $user = User::create([
            'first_name' => 'Paulus',
            'middle_name' => 'Richardo',
            'last_name' => 'Simanjuntak',
            'email' => 'iss18068@del.ac.id',
            'username' => 'iss18068',
            'phone_number' => '0812123123',
            'registration_number' => '12S18068',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Paulus001',
            'role' => 1,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('student');

        //Teaching Assistant
        $user = User::create([
            'first_name' => 'Christopher',
            'middle_name' => 'Alfred',
            'last_name' => 'Hutabarat',
            'email' => 'iss18027@del.ac.id',
            'username' => 'iss18027',
            'phone_number' => '0812123123',
            'registration_number' => '12S18027',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Christopher001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Raja',
            'middle_name' => 'Muda Gading Tulen',
            'last_name' => 'Sihite',
            'email' => 'iss18055@del.ac.id',
            'username' => 'iss18055',
            'phone_number' => '0812123123',
            'registration_number' => '12S18055',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Raja001',
            'role' => 1,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('student');

        $user = User::create([
            'first_name' => 'Sarah',
            'middle_name' => 'Hillary',
            'last_name' => 'Siahaan',
            'email' => '12S18032@del.ac.id',
            'username' => 'iss18032',
            'phone_number' => '0812123123',
            'registration_number' => '12S18032',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Sarah001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Rifka',
            'middle_name' => 'Uli',
            'last_name' => 'Siregar',
            'email' => '12S18048@del.ac.id',
            'username' => 'iss18048',
            'phone_number' => '0812123123',
            'registration_number' => '12S18048',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Rifka001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Wiranda',
            'middle_name' => 'Megawati',
            'last_name' => 'Siahaan',
            'email' => '12S18002@del.ac.id',
            'username' => 'iss18002',
            'phone_number' => '0812123123',
            'registration_number' => '12S18002',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Wiranda001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Della',
            'middle_name' => 'Cenovita',
            'last_name' => 'Tarigan',
            'email' => '12S18015@del.ac.id',
            'username' => 'iss18015',
            'phone_number' => '0812123123',
            'registration_number' => '12S18015',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Della001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Ulion',
            'middle_name' => 'Alberto Perkasa',
            'last_name' => 'Pardede',
            'email' => '12S18047@del.ac.id',
            'username' => 'iss18047',
            'phone_number' => '0812123123',
            'registration_number' => '12S18047',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Ulion001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Yohanes',
            'middle_name' => 'Ray Febriyanto',
            'last_name' => 'Silitonga',
            'email' => '12S18026@del.ac.id',
            'username' => 'iss18026',
            'phone_number' => '0812123123',
            'registration_number' => '12S18026',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Yohanes001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Andika',
            'middle_name' => 'Meidy Fransius',
            'last_name' => 'Tarigan',
            'email' => '12S18037@del.ac.id',
            'username' => 'iss18037',
            'phone_number' => '0812123123',
            'registration_number' => '12S18037',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Andika001',
            'role' => 1,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('student');

        $user = User::create([
            'first_name' => 'Dennito',
            'middle_name' => 'Gilbert',
            'last_name' => 'Gultom',
            'email' => '12S18066@del.ac.id',
            'username' => 'iss18066',
            'phone_number' => '0812123123',
            'registration_number' => '12S18066',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Information System',
            'initial' => 'Dennito001',
            'role' => 1,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('student');

        $user = User::create([
            'first_name' => 'Surya',
            'middle_name' => 'Ferary',
            'last_name' => 'Nainggolan',
            'email' => 'ifs18061@del.ac.id',
            'username' => 'ifs18061',
            'phone_number' => '0812123123',
            'registration_number' => '11S18061',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Informatics Engineering',
            'initial' => 'Surya001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Imam',
            'middle_name' => 'Aprido',
            'last_name' => 'Simarmata',
            'email' => 'ifs18034@del.ac.id',
            'username' => 'ifs18034',
            'phone_number' => '0812123123',
            'registration_number' => '11S18034',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Informatics Engineering',
            'initial' => 'Imam001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Devi',
            'middle_name' => 'Wahyuni',
            'last_name' => 'Silitonga',
            'email' => 'ifs18022@del.ac.id',
            'username' => 'ifs18022',
            'phone_number' => '0812123123',
            'registration_number' => '11S18022',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Informatics Engineering',
            'initial' => 'Devi001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Auro',
            'middle_name' => 'Daniel Ersa',
            'last_name' => 'Silalahi',
            'email' => 'ifs18051@del.ac.id',
            'username' => 'ifs18051',
            'phone_number' => '0812123123',
            'registration_number' => '11S18051',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Informatics Engineering',
            'initial' => 'Auro001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Irvandi',
            'middle_name' => 'Amir Hamzah',
            'last_name' => 'Sihombing',
            'email' => 'ifs18067@del.ac.id',
            'username' => 'ifs18067',
            'phone_number' => '0812123123',
            'registration_number' => '11S18067',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '071123123',
            'status' => 'active',
            'study_program' => 'Informatics Engineering',
            'initial' => 'Irvandi001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //1 MR
            'first_name' => 'Manaris',
            'middle_name' => 'Gerald',
            'last_name' => 'Silaban',
            'email' => 'mrs18067@del.ac.id',
            'username' => 'mrs18067',
            'phone_number' => '085733667835',
            'registration_number' => '21S18067',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '1110004590474',
            'status' => 'active',
            'study_program' => 'Engineering Management',
            'initial' => 'Manaris001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //2 MR
            'first_name' => 'Grace',
            'middle_name' => 'Manzoya',
            'last_name' => 'Tampubolon',
            'email' => 'mrs18066@del.ac.id',
            'username' => 'mrs18066',
            'phone_number' => '085730777835',
            'registration_number' => '21S18066',
            'batch' => '2018',
            'bank_name' => 'BRI',
            'bank_account_number' => '011101057361507',
            'status' => 'active',
            'study_program' => 'Engineering Management',
            'initial' => 'Grace001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //3 MR
            'first_name' => 'Yessi',
            'middle_name' => 'Annaria',
            'last_name' => 'Naibaho',
            'email' => 'mrs18062@del.ac.id',
            'username' => 'mrs18062',
            'phone_number' => '085730887835',
            'registration_number' => '21S18062',
            'batch' => '2018',
            'bank_name' => 'BCA',
            'bank_account_number' => '0329009710',
            'status' => 'active',
            'study_program' => 'Engineering Management',
            'initial' => 'Yessi001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //1 TE
            'first_name' => 'Kevin',
            'middle_name' => 'Gerald',
            'last_name' => 'Sitanggang',
            'email' => 'els18053@del.ac.id',
            'username' => 'els18053',
            'phone_number' => '085730997835',
            'registration_number' => '14S18053',
            'batch' => '2018',
            'bank_name' => 'BCA',
            'bank_account_number' => '0329009779',
            'status' => 'active',
            'study_program' => 'Electrical Engineering',
            'initial' => 'Kevin001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //2 TE
            'first_name' => 'Rio',
            'middle_name' => 'Frans Hegen',
            'last_name' => 'Hutasoit',
            'email' => 'els18050@del.ac.id',
            'username' => 'els18050',
            'phone_number' => '085730007835',
            'registration_number' => '14S18050',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '1110004590475',
            'status' => 'active',
            'study_program' => 'Electrical Engineering',
            'initial' => 'Rio001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //3 TE
            'first_name' => 'Juvensen',
            'middle_name' => 'Immanuel',
            'last_name' => 'Tambunan',
            'email' => 'els18046@del.ac.id',
            'username' => 'els18046',
            'phone_number' => '085730667835',
            'registration_number' => '14S18046',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '1110004590476',
            'status' => 'active',
            'study_program' => 'Electrical Engineering',
            'initial' => 'Juvensen001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //1 BP
            'first_name' => 'Intan',
            'middle_name' => 'Sani',
            'last_name' => 'Siahaan',
            'email' => 'bps18027@del.ac.id',
            'username' => 'bps18027',
            'phone_number' => '085730667345',
            'registration_number' => '31S18027',
            'batch' => '2018',
            'bank_name' => 'BNI',
            'bank_account_number' => '1110004590888',
            'status' => 'active',
            'study_program' => 'Bioprocess Engineering',
            'initial' => 'Intan001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //2 BP
            'first_name' => 'Naomi',
            'middle_name' => 'Cynthia Mempawati',
            'last_name' => 'Siringo',
            'email' => 'bps18020@del.ac.id',
            'username' => 'bps18020',
            'phone_number' => '081230667835',
            'registration_number' => '31S18020',
            'batch' => '2018',
            'bank_name' => 'Mandiri',
            'bank_account_number' => '0700001855999',
            'status' => 'active',
            'study_program' => 'Bioprocess Engineering',
            'initial' => 'Naomi001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([ //3 BP
            'first_name' => 'Yason',
            'middle_name' => '',
            'last_name' => 'Manullang',
            'email' => 'bps18028@del.ac.id',
            'username' => 'bps18028',
            'phone_number' => '085730667123',
            'registration_number' => '31S18028',
            'batch' => '2018',
            'bank_name' => 'BRI',
            'bank_account_number' => '011101057361009',
            'status' => 'active',
            'study_program' => 'Bioprocess Engineering',
            'initial' => 'Yason001',
            'role' => 2,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('teaching_assistant');

        $user = User::create([
            'first_name' => 'Anggiat',
            'middle_name' => '',
            'last_name' => 'Tambunan',
            'email' => 'anggiat@del.ac.id',
            'username' => 'anggiat',
            'phone_number' => '0812123123',
            'registration_number' => 'ifs14002',
            'status' => 'active',
            'initial' => 'AGT',
            'role' => 4,
            'password' => Hash::make('123456', [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2,
            ]),
        ]);

        $user->assignRole('baak');
    }
}
