<?php

use Illuminate\Database\Seeder;

class ExchangeRatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exchange_rates')->delete();
        
        \DB::table('exchange_rates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'en' => 1.0,
                'kh' => 4000.0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}