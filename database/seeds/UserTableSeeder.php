<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('secret');
        DB::table('users')->insert([
            [
                'firstname'=>'Perekpo',
                'lastname' => 'Emmanuel',
                'email' => 'admin@lottrades.com',
                'phone' => '3833939393',
                'is_admin'=>1,
                'currency_id'=>1,
                'plan_id'=>1,
                'password'=>$password
            ],
            [
                'firstname'=>'Perekpo',
                'lastname' => 'Emmanuel',
                'email' => 'user1@lottrades.com',
                'phone' => '3833939393',
                'is_admin'=>0,
                'currency_id'=>1,
                'plan_id'=>1,
                'password'=>$password
            ],
        ]);
    }
}
