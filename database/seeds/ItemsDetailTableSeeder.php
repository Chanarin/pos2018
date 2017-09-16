<?php

use Illuminate\Database\Seeder;

class ItemsDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items_detail')->delete();
        
        \DB::table('items_detail')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ref_id' => 1,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => 2.0,
                'description' => '',
                'image' => NULL,
                'qty' => 100.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 01:43:21',
                'updated_at' => '2017-09-11 01:43:21',
            ),
            1 => 
            array (
                'id' => 2,
                'ref_id' => 1,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 01:43:21',
                'updated_at' => '2017-09-11 01:43:21',
            ),
            2 => 
            array (
                'id' => 3,
                'ref_id' => 4,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => 2.0,
                'description' => '',
                'image' => NULL,
                'qty' => 200.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 01:48:08',
                'updated_at' => '2017-09-11 01:48:08',
            ),
            3 => 
            array (
                'id' => 4,
                'ref_id' => 4,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 01:48:08',
                'updated_at' => '2017-09-11 01:48:08',
            ),
            4 => 
            array (
                'id' => 6,
                'ref_id' => 6,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => 2.0,
                'description' => '',
                'image' => NULL,
                'qty' => 260.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 01:53:36',
                'updated_at' => '2017-09-11 01:53:36',
            ),
            5 => 
            array (
                'id' => 7,
                'ref_id' => 6,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 8.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 01:53:36',
                'updated_at' => '2017-09-11 01:53:36',
            ),
            6 => 
            array (
                'id' => 8,
                'ref_id' => 6,
                'item_id' => 7,
                'item_code' => 'ព3',
                'title' => 'ពេជ្រ 5លី',
                'unit' => '1',
                'num_qty' => 5.0,
                'description' => '',
                'image' => NULL,
                'qty' => 4.0,
                'cost' => 650.0,
                'note' => '',
                'created_at' => '2017-09-11 01:53:36',
                'updated_at' => '2017-09-11 01:53:36',
            ),
            7 => 
            array (
                'id' => 9,
                'ref_id' => 8,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 02:03:23',
                'updated_at' => '2017-09-11 02:03:23',
            ),
            8 => 
            array (
                'id' => 10,
                'ref_id' => 9,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 8.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 02:03:23',
                'updated_at' => '2017-09-11 02:03:23',
            ),
            9 => 
            array (
                'id' => 11,
                'ref_id' => 1,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 100.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 02:22:52',
                'updated_at' => '2017-09-11 02:22:52',
            ),
            10 => 
            array (
                'id' => 12,
                'ref_id' => 1,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 02:22:52',
                'updated_at' => '2017-09-11 02:22:52',
            ),
            11 => 
            array (
                'id' => 13,
                'ref_id' => 4,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 200.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 02:28:34',
                'updated_at' => '2017-09-11 02:28:34',
            ),
            12 => 
            array (
                'id' => 14,
                'ref_id' => 4,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 02:28:34',
                'updated_at' => '2017-09-11 02:28:34',
            ),
            13 => 
            array (
                'id' => 16,
                'ref_id' => 6,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 260.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 02:29:22',
                'updated_at' => '2017-09-11 02:29:22',
            ),
            14 => 
            array (
                'id' => 17,
                'ref_id' => 6,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 8.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 02:29:22',
                'updated_at' => '2017-09-11 02:29:22',
            ),
            15 => 
            array (
                'id' => 18,
                'ref_id' => 6,
                'item_id' => 7,
                'item_code' => 'ព3',
                'title' => 'ពេជ្រ 5លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 4.0,
                'cost' => 650.0,
                'note' => '',
                'created_at' => '2017-09-11 02:29:22',
                'updated_at' => '2017-09-11 02:29:22',
            ),
            16 => 
            array (
                'id' => 19,
                'ref_id' => 8,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 02:30:04',
                'updated_at' => '2017-09-11 02:30:04',
            ),
            17 => 
            array (
                'id' => 20,
                'ref_id' => 9,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 8.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 02:30:32',
                'updated_at' => '2017-09-11 02:30:32',
            ),
            18 => 
            array (
                'id' => 21,
                'ref_id' => 11,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 4.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:23:23',
            ),
            19 => 
            array (
                'id' => 22,
                'ref_id' => 12,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 2.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:23:23',
            ),
            20 => 
            array (
                'id' => 23,
                'ref_id' => 13,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:23:23',
            ),
            21 => 
            array (
                'id' => 24,
                'ref_id' => 14,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 2.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:23:23',
                'updated_at' => '2017-09-11 12:23:23',
            ),
            22 => 
            array (
                'id' => 25,
                'ref_id' => 15,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => 0.0,
                'description' => '',
                'image' => NULL,
                'qty' => 4.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:23:24',
                'updated_at' => '2017-09-11 12:23:24',
            ),
            23 => 
            array (
                'id' => 26,
                'ref_id' => 1,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 100.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 12:24:56',
                'updated_at' => '2017-09-11 12:24:56',
            ),
            24 => 
            array (
                'id' => 27,
                'ref_id' => 1,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:24:56',
                'updated_at' => '2017-09-11 12:24:56',
            ),
            25 => 
            array (
                'id' => 28,
                'ref_id' => 1,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 100.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 12:24:56',
                'updated_at' => '2017-09-11 12:24:56',
            ),
            26 => 
            array (
                'id' => 29,
                'ref_id' => 1,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:24:56',
                'updated_at' => '2017-09-11 12:24:56',
            ),
            27 => 
            array (
                'id' => 30,
                'ref_id' => 4,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 200.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 12:29:34',
                'updated_at' => '2017-09-11 12:29:34',
            ),
            28 => 
            array (
                'id' => 31,
                'ref_id' => 4,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:29:34',
                'updated_at' => '2017-09-11 12:29:34',
            ),
            29 => 
            array (
                'id' => 32,
                'ref_id' => 4,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 200.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 12:29:34',
                'updated_at' => '2017-09-11 12:29:34',
            ),
            30 => 
            array (
                'id' => 33,
                'ref_id' => 4,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:29:34',
                'updated_at' => '2017-09-11 12:29:34',
            ),
            31 => 
            array (
                'id' => 34,
                'ref_id' => 4,
                'item_id' => 5,
                'item_code' => 'ព2',
                'title' => 'ពេជ្រ 6លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 1.0,
                'cost' => 800.0,
                'note' => '',
                'created_at' => '2017-09-11 12:29:34',
                'updated_at' => '2017-09-11 12:29:34',
            ),
            32 => 
            array (
                'id' => 35,
                'ref_id' => 6,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 260.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 12:30:20',
                'updated_at' => '2017-09-11 12:30:20',
            ),
            33 => 
            array (
                'id' => 36,
                'ref_id' => 6,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 8.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:30:20',
                'updated_at' => '2017-09-11 12:30:20',
            ),
            34 => 
            array (
                'id' => 37,
                'ref_id' => 6,
                'item_id' => 7,
                'item_code' => 'ព3',
                'title' => 'ពេជ្រ 5លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 4.0,
                'cost' => 650.0,
                'note' => '',
                'created_at' => '2017-09-11 12:30:20',
                'updated_at' => '2017-09-11 12:30:20',
            ),
            35 => 
            array (
                'id' => 38,
                'ref_id' => 6,
                'item_id' => 2,
                'item_code' => 'ព1',
                'title' => 'ពេជ្រ 2លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 260.0,
                'cost' => 20.0,
                'note' => '',
                'created_at' => '2017-09-11 12:30:20',
                'updated_at' => '2017-09-11 12:30:20',
            ),
            36 => 
            array (
                'id' => 39,
                'ref_id' => 6,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 8.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:30:20',
                'updated_at' => '2017-09-11 12:30:20',
            ),
            37 => 
            array (
                'id' => 40,
                'ref_id' => 6,
                'item_id' => 7,
                'item_code' => 'ព3',
                'title' => 'ពេជ្រ 5លី',
                'unit' => '1',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 4.0,
                'cost' => 650.0,
                'note' => '',
                'created_at' => '2017-09-11 12:30:20',
                'updated_at' => '2017-09-11 12:30:20',
            ),
            38 => 
            array (
                'id' => 41,
                'ref_id' => 8,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:31:17',
                'updated_at' => '2017-09-11 12:31:17',
            ),
            39 => 
            array (
                'id' => 42,
                'ref_id' => 8,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:31:17',
                'updated_at' => '2017-09-11 12:31:17',
            ),
            40 => 
            array (
                'id' => 43,
                'ref_id' => 9,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 8.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:31:59',
                'updated_at' => '2017-09-11 12:31:59',
            ),
            41 => 
            array (
                'id' => 44,
                'ref_id' => 9,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 8.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:31:59',
                'updated_at' => '2017-09-11 12:31:59',
            ),
            42 => 
            array (
                'id' => 45,
                'ref_id' => 11,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 4.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:32:55',
                'updated_at' => '2017-09-11 12:32:55',
            ),
            43 => 
            array (
                'id' => 46,
                'ref_id' => 12,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 2.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:45:34',
                'updated_at' => '2017-09-11 12:45:34',
            ),
            44 => 
            array (
                'id' => 47,
                'ref_id' => 13,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 6.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:46:02',
                'updated_at' => '2017-09-11 12:46:02',
            ),
            45 => 
            array (
                'id' => 48,
                'ref_id' => 14,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 2.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:46:28',
                'updated_at' => '2017-09-11 12:46:28',
            ),
            46 => 
            array (
                'id' => 49,
                'ref_id' => 15,
                'item_id' => 3,
                'item_code' => 'ផ1',
                'title' => 'ផ្លាទីន 75%',
                'unit' => '3',
                'num_qty' => NULL,
                'description' => NULL,
                'image' => NULL,
                'qty' => 4.0,
                'cost' => 120.0,
                'note' => '',
                'created_at' => '2017-09-11 12:47:00',
                'updated_at' => '2017-09-11 12:47:00',
            ),
        ));
        
        
    }
}