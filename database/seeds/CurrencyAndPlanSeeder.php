<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencyAndPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
                'name'=>'Us Dollar',
                'symbol'=>'$',
                'iso' => 'USD'
        ]);

        DB::table('plans')->insert([
            'name'=>'Silver',
            'price'=>'1000'
        ]);
    }
}
