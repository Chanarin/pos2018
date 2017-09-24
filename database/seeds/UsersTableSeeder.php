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
                'id' => 1,
                'role_id' => 4,
                'name' => 'pos',
                'username' => NULL,
                'email' => 'pos@gmail.com',
                'phone' => NULL,
                'password' => '$2y$10$kH5FtnXge/nxuLBKjpYfROUF4ZuYaXy64d6TkYYb97QcrFqLsQf2m',
                'confirmed' => 0,
                'confirmation_code' => NULL,
                'photo' => NULL,
                'status' => 1,
                'create_by' => 0,
                'update_by' => 0,
                'remember_token' => '2r5ZbE2ItUbK543U6JmH66lqKky0X1AdBEZyzkFA9PCNFrkPKxyNiE2Lso4K',
                'created_at' => '2017-09-24 12:03:31',
                'updated_at' => '2017-09-24 12:03:31',
            ),
        ));
        
        
    }
}