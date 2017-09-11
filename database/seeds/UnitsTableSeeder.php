<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('units')->delete();
        
        \DB::table('units')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '​លី',
                'unit' => 1.0,
                'note' => '​លី',
                'created_at' => '2017-09-11 01:38:04',
                'updated_at' => '2017-09-11 01:38:04',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ហ៊ុន',
                'unit' => 1.0,
                'note' => 'ហ៊ុន',
                'created_at' => '2017-09-11 01:38:17',
                'updated_at' => '2017-09-11 01:38:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ជី',
                'unit' => 1.0,
                'note' => 'ជី',
                'created_at' => '2017-09-11 01:38:34',
                'updated_at' => '2017-09-11 01:38:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'តម្លឹង',
                'unit' => 1.0,
                'note' => 'តម្លឹង',
                'created_at' => '2017-09-11 01:38:46',
                'updated_at' => '2017-09-11 01:38:46',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'វង់',
                'unit' => 1.0,
                'note' => 'វង់',
                'created_at' => '2017-09-11 01:39:06',
                'updated_at' => '2017-09-11 01:39:06',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'គូ',
                'unit' => 1.0,
                'note' => 'គូ',
                'created_at' => '2017-09-11 01:39:20',
                'updated_at' => '2017-09-11 01:39:20',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ឯកតា',
                'unit' => 1.0,
                'note' => 'ឯកតា',
                'created_at' => '2017-09-11 01:39:42',
                'updated_at' => '2017-09-11 01:39:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}