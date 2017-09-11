<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MengeangHak',
                'gender' => 'male',
                'phone' => '098794242',
                'description' => NULL,
                'created_at' => '2017-09-11 02:48:57',
                'updated_at' => '2017-09-11 02:48:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}