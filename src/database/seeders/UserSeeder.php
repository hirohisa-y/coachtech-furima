<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // 直接挿入
        DB::table('users')->insert([
            'name' => 'テストユーザー',
            'email' => 'test@example.com',
            'password' => bcrypt('hoge1234'),
        ]); //
    }
}
