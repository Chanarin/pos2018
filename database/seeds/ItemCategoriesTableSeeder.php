<?php

use Illuminate\Database\Seeder;

class ItemCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_categories')->delete();
        
        \DB::table('item_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'title' => 'ចិញ្ចៀន',
                'image' => '["images\\/item_categories\\/57699_1506242228_4758.png"]',
                'description' => 'ចិញ្ចៀន',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:17:46',
                'updated_at' => '2017-09-24 08:37:08',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'title' => 'កងដៃ',
                'image' => '["images\\/item_categories\\/12025_1506242257_1286.png"]',
                'description' => 'កងដៃ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:18:09',
                'updated_at' => '2017-09-24 08:37:37',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'title' => 'នាឡិកា',
                'image' => '["images\\/item_categories\\/39858_1506242277_3903.png"]',
                'description' => 'នាឡិកា',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:18:27',
                'updated_at' => '2017-09-24 08:37:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'title' => 'ខ្សែជើង',
                'image' => '["images\\/item_categories\\/28792_1506242536_3621.png"]',
                'description' => 'ខ្សែជើង',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:18:50',
                'updated_at' => '2017-09-24 08:42:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'parent_id' => NULL,
                'title' => 'ខ្សែចង្កេះ',
                'image' => '["images\\/item_categories\\/69341_1506242972_2952.png"]',
                'description' => 'ខ្សែចង្កេះ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:19:23',
                'updated_at' => '2017-09-24 08:49:32',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'parent_id' => NULL,
                'title' => 'ខ្សែក',
                'image' => '["images\\/item_categories\\/31799_1506243305_1096.png"]',
                'description' => 'ខ្សែក',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:19:37',
                'updated_at' => '2017-09-24 08:55:05',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'parent_id' => NULL,
                'title' => 'ខ្សែកស្វារ៉េ',
                'image' => '["images\\/item_categories\\/72598_1506243349_3356.png"]',
                'description' => 'ខ្សែកស្វារ៉េ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:19:49',
                'updated_at' => '2017-09-24 08:55:49',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'parent_id' => NULL,
                'title' => 'បន្តោងខ្សែក',
                'image' => '["images\\/item_categories\\/56786_1506243446_3195.png"]',
                'description' => 'បន្តោងខ្សែក',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:20:07',
                'updated_at' => '2017-09-24 08:57:26',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'parent_id' => NULL,
                'title' => 'ក្រវិល',
                'image' => '["images\\/item_categories\\/95338_1506243495_4592.png"]',
                'description' => 'ក្រវិល',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:20:21',
                'updated_at' => '2017-09-24 08:58:15',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'parent_id' => NULL,
                'title' => 'សីុញ',
                'image' => '["images\\/item_categories\\/72443_1506244476_1401.png"]',
                'description' => 'សីុញ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:20:45',
                'updated_at' => '2017-09-24 09:14:37',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'parent_id' => NULL,
                'title' => 'ដង្កៀប',
                'image' => '["images\\/item_categories\\/90312_1506245246_4985.png"]',
                'description' => 'ដង្កៀប',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:20:55',
                'updated_at' => '2017-09-24 09:27:26',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'parent_id' => NULL,
                'title' => 'ពេជ្រ',
                'image' => '["images\\/item_categories\\/34683_1506245425_2664.png"]',
                'description' => 'ពេជ្រ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:21:28',
                'updated_at' => '2017-09-24 09:30:25',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'parent_id' => NULL,
                'title' => 'ត្បូងស្នាយ',
                'image' => '["images\\/item_categories\\/97613_1506245440_1124.png"]',
                'description' => 'ត្បូងស្នាយ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:21:43',
                'updated_at' => '2017-09-24 09:30:40',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'parent_id' => NULL,
                'title' => 'ត្បូងពណ៏',
                'image' => '["images\\/item_categories\\/25453_1506245460_2708.png"]',
                'description' => 'ត្បូងពណ៏',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:21:53',
                'updated_at' => '2017-09-24 09:31:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'parent_id' => NULL,
                'title' => 'ផ្លាទីន',
                'image' => '["images\\/item_categories\\/88395_1506245605_3228.png"]',
                'description' => 'ផ្លាទីន',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:22:17',
                'updated_at' => '2017-09-24 09:33:25',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'parent_id' => NULL,
                'title' => 'មាស',
                'image' => '["images\\/item_categories\\/42077_1506245593_3263.png"]',
                'description' => 'មាស',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:22:27',
                'updated_at' => '2017-09-24 09:33:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}