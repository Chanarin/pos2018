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
                'image' => '["images\\/item_categories\\/74699_1505096266_4415.png"]',
                'description' => 'ចិញ្ចៀន',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:17:46',
                'updated_at' => '2017-09-11 02:17:46',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'title' => 'កងដៃ',
                'image' => '["images\\/item_categories\\/84952_1505096289_1382.png"]',
                'description' => 'កងដៃ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:18:09',
                'updated_at' => '2017-09-11 02:18:09',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'title' => 'នាឡិកា',
                'image' => '["images\\/item_categories\\/45090_1505096307_2455.png"]',
                'description' => 'នាឡិកា',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:18:27',
                'updated_at' => '2017-09-11 02:18:27',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'title' => 'ខ្សែជើង',
                'image' => '["images\\/item_categories\\/61747_1505096330_1590.png"]',
                'description' => 'ខ្សែជើង',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:18:50',
                'updated_at' => '2017-09-11 02:18:50',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => NULL,
                'title' => 'កងជើង',
                'image' => '["images\\/item_categories\\/75724_1505096351_4188.png"]',
                'description' => 'កងជើង',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:19:12',
                'updated_at' => '2017-09-11 02:19:12',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => NULL,
                'title' => 'ខ្សែចង្កេះ',
                'image' => '["images\\/item_categories\\/37631_1505096363_2150.png"]',
                'description' => 'ខ្សែចង្កេះ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:19:23',
                'updated_at' => '2017-09-11 02:19:23',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => NULL,
                'title' => 'ខ្សែក',
                'image' => '["images\\/item_categories\\/66972_1505096377_4322.png"]',
                'description' => 'ខ្សែក',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:19:37',
                'updated_at' => '2017-09-11 02:19:37',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => NULL,
                'title' => 'ខ្សែកស្វារ៉េ',
                'image' => '["images\\/item_categories\\/13183_1505096389_3637.png"]',
                'description' => 'ខ្សែកស្វារ៉េ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:19:49',
                'updated_at' => '2017-09-11 02:19:49',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => NULL,
                'title' => 'បន្តោងខ្សែក',
                'image' => '["images\\/item_categories\\/64918_1505096407_1558.png"]',
                'description' => 'បន្តោងខ្សែក',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:20:07',
                'updated_at' => '2017-09-11 02:20:07',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => NULL,
                'title' => 'ក្រវិល',
                'image' => '["images\\/item_categories\\/22422_1505096421_1352.png"]',
                'description' => 'ក្រវិល',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:20:21',
                'updated_at' => '2017-09-11 02:20:21',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => NULL,
                'title' => 'សីុញ',
                'image' => '["images\\/item_categories\\/29923_1505096445_1578.png"]',
                'description' => 'សីុញ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:20:45',
                'updated_at' => '2017-09-11 02:20:45',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => NULL,
                'title' => 'ដង្កៀប',
                'image' => '["images\\/item_categories\\/54652_1505096455_3784.png"]',
                'description' => 'ដង្កៀប',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:20:55',
                'updated_at' => '2017-09-11 02:20:55',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => NULL,
                'title' => 'ពេជ្រ',
                'image' => '["images\\/item_categories\\/81436_1505096488_2004.png"]',
                'description' => 'ពេជ្រ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:21:28',
                'updated_at' => '2017-09-11 02:21:28',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => NULL,
                'title' => 'ត្បូងស្នាយ',
                'image' => '["images\\/item_categories\\/55413_1505096503_2489.png"]',
                'description' => 'ត្បូងស្នាយ',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:21:43',
                'updated_at' => '2017-09-11 02:21:43',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => NULL,
                'title' => 'ត្បូងពណ៏',
                'image' => '["images\\/item_categories\\/20031_1505096513_2822.png"]',
                'description' => 'ត្បូងពណ៏',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:21:53',
                'updated_at' => '2017-09-11 02:21:53',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => NULL,
                'title' => 'ផ្លាទីន',
                'image' => '["images\\/item_categories\\/28200_1505096537_3481.png"]',
                'description' => 'ផ្លាទីន',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:22:17',
                'updated_at' => '2017-09-11 02:22:17',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => NULL,
                'title' => 'មាស',
                'image' => '["images\\/item_categories\\/49391_1505096547_4279.png"]',
                'description' => 'មាស',
                'status' => 'ACTIVE',
                'created_at' => '2017-09-11 02:22:27',
                'updated_at' => '2017-09-11 02:22:27',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}