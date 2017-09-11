<?php

use Illuminate\Database\Seeder;

class ProductionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('production')->delete();
        
        
        
    }
}