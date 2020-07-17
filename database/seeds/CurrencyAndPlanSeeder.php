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
        DB::table('currencies')->insert(array(
            array('id' => '1','name' => 'Us Dollar','symbol' => '$','iso' => 'USD','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'Pound Sterling','symbol' => '£','iso' => 'GPB','created_at' => '2020-07-12 16:42:41','updated_at' => '2020-07-12 16:42:41'),
            array('id' => '3','name' => 'Nigerian Niaria','symbol' => '₦','iso' => 'NGN','created_at' => '2020-07-12 16:43:19','updated_at' => '2020-07-12 16:43:19')
          ));

        DB::table('plans')->insert([
            'name'=>'Silver',
            'price'=>'1000'
        ]);
    }
}
