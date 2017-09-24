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
                'password' => '$2y$10$E79YQwLwtmI8.7qlO8aXVO2/kC2UC2UC9ZPZtU.65NImhTbdHb14e',
                'confirmed' => 0,
                'confirmation_code' => NULL,
                'photo' => NULL,
                'status' => 1,
                'create_by' => 0,
                'update_by' => 0,
                'remember_token' => 'NXHLfyOA61YKbFe7ZhJVChanCEAJK5GoLFuQLCCf2tNLwNPaCP0d5io1Qd2j',
                'created_at' => '2017-09-24 08:03:24',
                'updated_at' => '2017-09-24 08:03:24',
            ),
        ));
        
        
    }
}