<?php

use Illuminate\Database\Seeder;

class OpenItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('open_items')->delete();
        
        \DB::table('open_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'open_number' => 'បស1',
                '_date_' => '2017-09-11',
                'description' => 'បស1',
                'user_id' => NULL,
                'created_at' => '2017-09-11 01:43:20',
                'updated_at' => '2017-09-11 01:43:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'open_number' => 'បស2',
                '_date_' => '2017-09-11',
                'description' => 'បស2',
                'user_id' => NULL,
                'created_at' => '2017-09-11 01:48:07',
                'updated_at' => '2017-09-11 01:48:07',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'open_number' => 'បស3',
                '_date_' => '2017-09-11',
                'description' => 'បស3',
                'user_id' => NULL,
                'created_at' => '2017-09-11 01:53:36',
                'updated_at' => '2017-09-11 01:53:36',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'open_number' => 'បស4',
                '_date_' => '2017-09-11',
                'description' => 'បស4',
                'user_id' => NULL,
                'created_at' => '2017-09-11 02:03:23',
                'updated_at' => '2017-09-11 02:03:23',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'open_number' => 'បស5',
                '_date_' => '2017-09-11',
                'description' => 'បស5',
                'user_id' => NULL,
                'created_at' => '2017-09-11 12:23:22',
                'updated_at' => '2017-09-11 12:24:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}