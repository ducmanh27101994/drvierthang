<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'first_name' => "Đinh",
            'last_name' => "Viết Thắng",
            'email' => "drvietthang@gmail.com",
            'password' => 'drvietthang',
            'status' => "2"
        ]);
    }
}
