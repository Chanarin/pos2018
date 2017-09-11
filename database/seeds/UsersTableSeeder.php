<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'role_id' => NULL,
                'name' => 'pos',
                'username' => NULL,
                'email' => 'pos@gmail.com',
                'phone' => NULL,
                'password' => '$2y$10$LJqmEFgthKOEYYj.Y/4WIOQXsAhFRAQlmmNjGbZI2Vbn7lw5GG9ja',
                'confirmed' => 0,
                'confirmation_code' => NULL,
                'photo' => NULL,
                'status' => 1,
                'create_by' => 0,
                'update_by' => 0,
                'remember_token' => NULL,
                'created_at' => '2017-09-11 12:13:34',
                'updated_at' => '2017-09-11 12:13:34',
            ),
        ));
        
        
    }
}