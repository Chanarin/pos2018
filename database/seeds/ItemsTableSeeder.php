<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'item_code' => 'ច1',
                'title' => 'ចិញ្ចៀនប្រុស',
                'description' => NULL,
                'image' => '["images\\/items\\/99489_1505132695_4547.png"]',
                'unit' => '5',
                'price' => 1200.0,
                'created_at' => '2017-09-11 01:43:20',
                'updated_at' => '2017-09-11 12:24:55',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 13,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'description' => NULL,
                'image' => '["images\\/items\\/54137_1505132914_4882.png"]',
                'unit' => '1',
                'price' => 25.0,
                'created_at' => '2017-09-11 01:43:20',
                'updated_at' => '2017-09-11 12:28:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 16,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'description' => NULL,
                'image' => '["images\\/items\\/38199_1505132933_1634.png"]',
                'unit' => '3',
                'price' => 125.0,
                'created_at' => '2017-09-11 01:43:20',
                'updated_at' => '2017-09-11 12:28:53',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 10,
                'item_code' => 'ក្រ1',
                'title' => 'ក្រវិល',
                'description' => NULL,
                'image' => '["images\\/items\\/96019_1505132973_2582.png"]',
                'unit' => '6',
                'price' => 2100.0,
                'created_at' => '2017-09-11 01:48:07',
                'updated_at' => '2017-09-11 12:29:33',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 13,
                'item_code' => 'ព2',
                'title' => 'ពេជ្រ 6លី',
                'description' => NULL,
                'image' => '["images\\/items\\/47640_1505132998_3612.png"]',
                'unit' => '1',
                'price' => 1200.0,
                'created_at' => '2017-09-11 01:48:07',
                'updated_at' => '2017-09-11 12:29:58',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 1,
                'item_code' => 'ច2',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/20220_1505133019_4689.png"]',
                'unit' => '5',
                'price' => 3520.0,
                'created_at' => '2017-09-11 01:53:36',
                'updated_at' => '2017-09-11 12:30:19',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 13,
                'item_code' => 'ព3',
                'title' => 'ពេជ្រ 5លី',
                'description' => NULL,
                'image' => '["images\\/items\\/70459_1505133043_4325.png"]',
                'unit' => '1',
                'price' => 800.0,
                'created_at' => '2017-09-11 01:53:36',
                'updated_at' => '2017-09-11 12:30:43',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 1,
                'item_code' => 'ច4',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/15466_1505133077_1476.png"]',
                'unit' => '5',
                'price' => 850.0,
                'created_at' => '2017-09-11 02:03:23',
                'updated_at' => '2017-09-11 12:31:17',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 1,
                'item_code' => 'ច5',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/92208_1505133119_4077.png"]',
                'unit' => '5',
                'price' => 500.0,
                'created_at' => '2017-09-11 02:03:23',
                'updated_at' => '2017-09-11 12:31:59',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 1,
                'item_code' => 'ច6',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/66082_1505133148_3670.png"]',
                'unit' => '5',
                'price' => 1000.0,
                'created_at' => '2017-09-11 02:03:23',
                'updated_at' => '2017-09-11 12:32:28',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 1,
                'item_code' => 'ច8',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/18747_1505133175_1476.png"]',
                'unit' => '5',
                'price' => 908.0,
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:32:55',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 1,
                'item_code' => 'ច9',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/20189_1505133934_4498.png"]',
                'unit' => '5',
                'price' => 7000.0,
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:45:34',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 1,
                'item_code' => 'ច10',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/17723_1505133962_2456.png"]',
                'unit' => '5',
                'price' => 900.0,
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:46:02',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 1,
                'item_code' => 'ច11',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/53859_1505133988_3418.png"]',
                'unit' => '5',
                'price' => 1200.0,
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:46:28',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 1,
                'item_code' => 'ច12',
                'title' => 'ចិញ្ចៀនស្រី',
                'description' => NULL,
                'image' => '["images\\/items\\/56075_1505134020_4082.png"]',
                'unit' => '5',
                'price' => 1200.0,
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:47:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}