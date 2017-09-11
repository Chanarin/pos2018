<?php

use Illuminate\Database\Seeder;

class OpenItemsDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('open_items_detail')->delete();
        
        \DB::table('open_items_detail')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ref_id' => 1,
                'item_id' => 1,
                'item_code' => 'ច1',
                'title' => 'ចិញ្ចៀនប្រុស',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 2.0,
                'cost' => 1360.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17961","title":"\\u1796\\u17c1\\u1787\\u17d2\\u179a 2\\u179b\\u17b8","description":"","unit":"1","num_qty":"2","qty":"100","cost":"20","note":"","item_id":2},{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"6","cost":"120","note":"","item_id":3}]',
                'created_at' => '2017-09-11 01:43:20',
                'updated_at' => '2017-09-11 01:43:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ref_id' => 2,
                'item_id' => 4,
                'item_code' => 'ក្រ1',
                'title' => 'ក្រវិល',
                'unit' => '6',
                'num_qty' => 0.0,
                'qty' => 2.0,
                'cost' => 2760.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17961","title":"\\u1796\\u17c1\\u1787\\u17d2\\u179a 2\\u179b\\u17b8","description":"","unit":"1","num_qty":"2","qty":"200","cost":"20","note":"","item_id":"2"},{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"6","cost":"120","note":"","item_id":"3"},{"item_code":"\\u17962","title":"\\u1796\\u17c1\\u1787\\u17d2\\u179a 6\\u179b\\u17b8","description":"","unit":"1","num_qty":"6","qty":"1","cost":"800","note":"","item_id":5}]',
                'created_at' => '2017-09-11 01:48:08',
                'updated_at' => '2017-09-11 01:48:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ref_id' => 3,
                'item_id' => 6,
                'item_code' => 'ច2',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 4.0,
                'cost' => 2190.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17961","title":"\\u1796\\u17c1\\u1787\\u17d2\\u179a 2\\u179b\\u17b8","description":"","unit":"1","num_qty":"2","qty":"260","cost":"20","note":"","item_id":"2"},{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"8","cost":"120","note":"","item_id":"3"},{"item_code":"\\u17963","title":"\\u1796\\u17c1\\u1787\\u17d2\\u179a 5\\u179b\\u17b8","description":"","unit":"1","num_qty":"5","qty":"4","cost":"650","note":"","item_id":7}]',
                'created_at' => '2017-09-11 01:53:36',
                'updated_at' => '2017-09-11 01:53:36',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'ref_id' => 4,
                'item_id' => 8,
                'item_code' => 'ច4',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 2.0,
                'cost' => 360.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"6","cost":"120","note":"","item_id":"3"}]',
                'created_at' => '2017-09-11 02:14:10',
                'updated_at' => '2017-09-11 02:14:10',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'ref_id' => 4,
                'item_id' => 9,
                'item_code' => 'ច5',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 3.0,
                'cost' => 320.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"8","cost":"120","note":"","item_id":"3"}]',
                'created_at' => '2017-09-11 02:14:10',
                'updated_at' => '2017-09-11 02:14:10',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'ref_id' => 4,
                'item_id' => 10,
                'item_code' => 'ច6',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 1.0,
                'cost' => 120.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"4,5","cost":"120","note":"","item_id":"3"}]',
                'created_at' => '2017-09-11 02:14:10',
                'updated_at' => '2017-09-11 02:14:10',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'ref_id' => 5,
                'item_id' => 11,
                'item_code' => 'ច8',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 1.0,
                'cost' => 480.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"4","cost":"120","note":"","item_id":"3"}]',
                'created_at' => '2017-09-11 12:24:01',
                'updated_at' => '2017-09-11 12:24:01',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 16,
                'ref_id' => 5,
                'item_id' => 12,
                'item_code' => 'ច9',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 1.0,
                'cost' => 240.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"2","cost":"120","note":"","item_id":"3"}]',
                'created_at' => '2017-09-11 12:24:01',
                'updated_at' => '2017-09-11 12:24:01',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 17,
                'ref_id' => 5,
                'item_id' => 13,
                'item_code' => 'ច10',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 2.0,
                'cost' => 360.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"6","cost":"120","note":"","item_id":"3"}]',
                'created_at' => '2017-09-11 12:24:01',
                'updated_at' => '2017-09-11 12:24:01',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 18,
                'ref_id' => 5,
                'item_id' => 14,
                'item_code' => 'ច11',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 3.0,
                'cost' => 80.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"2","cost":"120","note":"","item_id":"3"}]',
                'created_at' => '2017-09-11 12:24:01',
                'updated_at' => '2017-09-11 12:24:01',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 19,
                'ref_id' => 5,
                'item_id' => 15,
                'item_code' => 'ច12',
                'title' => 'ចិញ្ចៀនស្រី',
                'unit' => '5',
                'num_qty' => 0.0,
                'qty' => 2.0,
                'cost' => 240.0,
                'price' => 0.0,
                'discount' => 0.0,
                'note' => '',
                'item_detail' => '[{"item_code":"\\u17951","title":"\\u1795\\u17d2\\u179b\\u17b6\\u1791\\u17b8\\u1793 75%","description":"","unit":"3","num_qty":"","qty":"4","cost":"120","note":"","item_id":"3"}]',
                'created_at' => '2017-09-11 12:24:01',
                'updated_at' => '2017-09-11 12:24:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}