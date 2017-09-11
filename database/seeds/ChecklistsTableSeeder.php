<?php

use Illuminate\Database\Seeder;

class ChecklistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('checklists')->delete();
        
        
        
    }
}