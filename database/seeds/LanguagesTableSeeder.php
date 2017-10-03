<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'customer',
                'en' => 'Customer ',
                'km' => 'អតិថិជន',
                'created_at' => '2017-08-31 01:42:11',
                'updated_at' => '2017-08-31 01:42:11',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'purchase',
                'en' => 'Purchase',
                'km' => 'ទិញចូល',
                'created_at' => '2017-08-31 01:42:11',
                'updated_at' => '2017-08-31 01:42:11',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'profit',
                'en' => 'Profit',
                'km' => 'ចំណេញ',
                'created_at' => '2017-08-31 01:42:11',
                'updated_at' => '2017-08-31 01:42:11',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'list_sale',
                'en' => 'List Sale',
                'km' => 'បញ្ជីនៃការលក់',
                'created_at' => '2017-08-31 01:42:11',
                'updated_at' => '2017-08-31 01:42:11',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'today_sale',
                'en' => 'Today Sale',
                'km' => 'លក់ថ្ងៃនេះ',
                'created_at' => '2017-08-31 01:42:11',
                'updated_at' => '2017-08-31 01:42:11',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'login',
                'en' => 'Login ',
                'km' => 'ចូលគណនី',
                'created_at' => '2017-08-31 01:42:11',
                'updated_at' => '2017-08-31 01:42:11',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'register',
                'en' => 'Register',
                'km' => 'ចុះឈ្មោះ',
                'created_at' => '2017-08-31 01:42:11',
                'updated_at' => '2017-08-31 01:42:11',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'pos',
                'en' => 'POS',
                'km' => 'ផ្ទាំងលក់',
                'created_at' => '2017-08-31 01:42:21',
                'updated_at' => '2017-08-31 01:42:21',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'open_item',
                'en' => 'Open Item',
                'km' => 'បើកស្តុកដើមគ្រា',
                'created_at' => '2017-08-31 01:42:21',
                'updated_at' => '2017-08-31 01:42:21',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'checklist',
                'en' => 'Checklist',
                'km' => 'ពិនិត្រទំនិញ',
                'created_at' => '2017-08-31 01:42:21',
                'updated_at' => '2017-08-31 01:42:21',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'dashboard',
                'en' => 'Dashboard',
                'km' => 'ផ្ទាំងគ្រប់គ្រង',
                'created_at' => '2017-08-31 01:42:47',
                'updated_at' => '2017-08-31 01:42:47',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'login_status',
                'en' => 'Login Status',
                'km' => 'ស្ថានភាពចូល',
                'created_at' => '2017-08-31 01:42:47',
                'updated_at' => '2017-08-31 01:42:47',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'invoice',
                'en' => 'Invoice',
                'km' => 'វិក្កយបត្រ',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'report',
                'en' => 'Report',
                'km' => 'របាយការណ៍',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'open_stock',
                'en' => 'Open Stock',
                'km' => 'បើកស្តុក',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'production',
                'en' => 'Production',
                'km' => 'ការផលិតផល',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'check_list',
                'en' => 'Checklist',
                'km' => 'ពិនិត្រទំនិញ',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'area_chart',
                'en' => 'Area Chart',
                'km' => 'គំនូសតាងផ្ទៃ',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'logout',
                'en' => 'Logout',
                'km' => 'ចាកចេញ
',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'online',
                'en' => 'Online',
                'km' => 'Online',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'table_report',
                'en' => 'Table Report',
                'km' => 'តារាងរបាយការណ៍',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'product',
                'en' => 'Product',
                'km' => 'ផលិតផល',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'product_category',
                'en' => 'Product Category',
                'km' => 'ប្រភេទ​ផលិតផល',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'unit',
                'en' => 'Unit',
                'km' => 'ឯកតា',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'checklist_stock',
                'en' => 'Checklist Stock',
                'km' => 'ផ្ទៀងផ្ទាត់​ ទំនិញ',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'file_manager',
                'en' => 'File Manager',
                'km' => 'គ្រប់គ្រងឯកសារ',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'settings',
                'en' => 'Settings',
                'km' => 'ការកំណត់',
                'created_at' => '2017-08-31 01:42:48',
                'updated_at' => '2017-08-31 01:42:48',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'open_items',
                'en' => 'Open Items',
                'km' => 'ស្តុកដើមគ្រា',
                'created_at' => '2017-08-31 01:42:53',
                'updated_at' => '2017-08-31 01:42:53',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'open_number',
                'en' => 'Open Number',
                'km' => 'លេខសំគាល់',
                'created_at' => '2017-08-31 01:42:54',
                'updated_at' => '2017-08-31 01:42:54',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'open_date',
                'en' => 'Open Date',
                'km' => 'កាលបរិច្ឆេទ',
                'created_at' => '2017-08-31 01:42:54',
                'updated_at' => '2017-08-31 01:42:54',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'description',
                'en' => 'Description',
                'km' => 'ការពិពណ៌នា',
                'created_at' => '2017-08-31 01:42:54',
                'updated_at' => '2017-08-31 01:42:54',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'user',
                'en' => 'User',
                'km' => 'អ្នក​ប្រើ',
                'created_at' => '2017-08-31 01:42:54',
                'updated_at' => '2017-08-31 01:42:54',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'created_at',
                'en' => 'Created at',
                'km' => 'ថ្ងៃបង្កើត',
                'created_at' => '2017-08-31 01:42:54',
                'updated_at' => '2017-08-31 01:42:54',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'item_detail',
                'en' => 'Item Detail',
                'km' => 'លំអិតធាតុផ្សុំផលិតផល',
                'created_at' => '2017-08-31 01:42:57',
                'updated_at' => '2017-08-31 01:42:57',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'item_id',
                'en' => 'Item ID',
                'km' => 'លេខ',
                'created_at' => '2017-08-31 01:42:57',
                'updated_at' => '2017-08-31 01:42:57',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'code',
                'en' => 'Code',
                'km' => 'កូដ',
                'created_at' => '2017-08-31 01:42:58',
                'updated_at' => '2017-08-31 01:42:58',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'title',
                'en' => 'Name',
                'km' => 'ឈ្មោះ',
                'created_at' => '2017-08-31 01:42:58',
                'updated_at' => '2017-08-31 01:42:58',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'qty',
                'en' => 'Qty',
                'km' => 'ចំនួន',
                'created_at' => '2017-08-31 01:42:58',
                'updated_at' => '2017-08-31 01:42:58',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'cost',
                'en' => 'Cost',
                'km' => 'ថ្លៃដើម',
                'created_at' => '2017-08-31 01:42:58',
                'updated_at' => '2017-08-31 01:42:58',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'price',
                'en' => 'Price',
                'km' => 'តម្លៃ',
                'created_at' => '2017-08-31 01:42:58',
                'updated_at' => '2017-08-31 01:42:58',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'discount',
                'en' => 'Discount',
                'km' => 'បញ្ចុះតម្លៃ',
                'created_at' => '2017-08-31 01:42:58',
                'updated_at' => '2017-08-31 01:42:58',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'note',
                'en' => 'Note',
                'km' => 'ចំណាំ',
                'created_at' => '2017-08-31 01:42:58',
                'updated_at' => '2017-08-31 01:42:58',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'purchases',
                'en' => 'Purchases',
                'km' => 'ទិញចូល',
                'created_at' => '2017-08-31 01:43:32',
                'updated_at' => '2017-08-31 01:43:32',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'purchase_number',
                'en' => 'Purchase Number',
                'km' => 'លេខសំគាល់',
                'created_at' => '2017-08-31 01:43:32',
                'updated_at' => '2017-08-31 01:43:32',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'customer_purchase',
                'en' => 'Customer Purchase',
                'km' => 'ឈ្មោះអតិថិជន',
                'created_at' => '2017-08-31 01:43:32',
                'updated_at' => '2017-08-31 01:43:32',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'reference',
                'en' => 'Reference',
                'km' => 'សេចក្តីយោង',
                'created_at' => '2017-08-31 01:43:32',
                'updated_at' => '2017-08-31 01:43:32',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'purchase_date',
                'en' => 'Purchase Date',
                'km' => 'កាលបរិច្ឆេទ',
                'created_at' => '2017-08-31 01:43:34',
                'updated_at' => '2017-08-31 01:43:34',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'purchase_reference',
                'en' => 'Purchase Reference',
                'km' => 'សេចក្តីយោង',
                'created_at' => '2017-08-31 01:43:34',
                'updated_at' => '2017-08-31 01:43:34',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'productions',
                'en' => 'Productions ',
                'km' => 'ផលិតកម្ម',
                'created_at' => '2017-08-31 02:03:11',
                'updated_at' => '2017-08-31 02:03:11',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'production_number',
                'en' => 'Production Number',
                'km' => 'លេខសំគាល់',
                'created_at' => '2017-08-31 02:03:11',
                'updated_at' => '2017-08-31 02:03:11',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'production_date',
                'en' => 'Production Date',
                'km' => 'កាលបរិច្ឆេទ',
                'created_at' => '2017-08-31 02:03:11',
                'updated_at' => '2017-08-31 02:03:11',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'customer_production',
                'en' => 'Customer Production ',
                'km' => 'ផលិតកម្មអតិថិជន',
                'created_at' => '2017-08-31 02:03:11',
                'updated_at' => '2017-08-31 02:03:11',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'production_reference',
                'en' => 'Production Reference',
                'km' => 'សេចក្តីយោង',
                'created_at' => '2017-08-31 02:03:13',
                'updated_at' => '2017-08-31 02:03:13',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'units',
                'en' => 'Units',
                'km' => 'ឯកតា',
                'created_at' => '2017-08-31 02:04:27',
                'updated_at' => '2017-08-31 02:04:27',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'name',
                'en' => 'Name',
                'km' => 'ឈ្មោះ',
                'created_at' => '2017-08-31 02:04:27',
                'updated_at' => '2017-08-31 02:04:27',
            ),
            55 => 
            array (
                'id' => 57,
                'key' => 'list',
                'en' => 'List',
                'km' => 'បញ្ជី',
                'created_at' => '2017-08-31 02:05:08',
                'updated_at' => '2017-08-31 02:05:08',
            ),
            56 => 
            array (
                'id' => 58,
                'key' => 'detail',
                'en' => 'Detail',
                'km' => 'លំអិត',
                'created_at' => '2017-08-31 02:05:08',
                'updated_at' => '2017-08-31 02:05:08',
            ),
            57 => 
            array (
                'id' => 59,
                'key' => 'purchase_item',
                'en' => 'Purchase Item ',
                'km' => 'ទំនិញទិញចូល',
                'created_at' => '2017-08-31 02:05:08',
                'updated_at' => '2017-08-31 02:05:08',
            ),
            58 => 
            array (
                'id' => 60,
                'key' => 'production_item',
                'en' => 'Prduction Item ',
                'km' => 'ទំនិញទិញផលិត',
                'created_at' => '2017-08-31 02:05:08',
                'updated_at' => '2017-08-31 02:05:08',
            ),
            59 => 
            array (
                'id' => 61,
                'key' => 'sale_invoice',
                'en' => 'Sale Invoice',
                'km' => 'វិក័យប័ត្រលក់',
                'created_at' => '2017-08-31 02:05:08',
                'updated_at' => '2017-08-31 02:05:08',
            ),
            60 => 
            array (
                'id' => 62,
                'key' => 'item',
                'en' => 'Item ',
                'km' => 'ទំនិញទិញ',
                'created_at' => '2017-08-31 02:05:32',
                'updated_at' => '2017-08-31 02:05:32',
            ),
            61 => 
            array (
                'id' => 63,
                'key' => 'items',
                'en' => 'Items ',
                'km' => 'ទំនិញទិញ',
                'created_at' => '2017-08-31 02:05:32',
                'updated_at' => '2017-08-31 02:05:32',
            ),
            62 => 
            array (
                'id' => 64,
                'key' => 'category',
                'en' => 'Category',
                'km' => 'ប្រភេទ',
                'created_at' => '2017-08-31 02:05:32',
                'updated_at' => '2017-08-31 02:05:32',
            ),
            63 => 
            array (
                'id' => 65,
                'key' => 'image',
                'en' => 'Image',
                'km' => 'រូបភាព',
                'created_at' => '2017-08-31 02:05:32',
                'updated_at' => '2017-08-31 02:05:32',
            ),
            64 => 
            array (
                'id' => 66,
                'key' => 'item_category',
                'en' => 'Item Category',
                'km' => 'ប្រភេទទំនិញទិញ',
                'created_at' => '2017-08-31 02:05:33',
                'updated_at' => '2017-08-31 02:05:33',
            ),
            65 => 
            array (
                'id' => 67,
                'key' => 'item_categories',
                'en' => 'Item Categories',
                'km' => 'ប្រភេទទំនិញទិញ',
                'created_at' => '2017-08-31 02:05:33',
                'updated_at' => '2017-08-31 02:05:33',
            ),
            66 => 
            array (
                'id' => 68,
                'key' => 'status',
                'en' => 'Status',
                'km' => 'ស្ថានភាព',
                'created_at' => '2017-08-31 02:05:33',
                'updated_at' => '2017-08-31 02:05:33',
            ),
            67 => 
            array (
                'id' => 69,
                'key' => 'parent',
                'en' => 'Parent',
                'km' => 'Parent',
                'created_at' => '2017-08-31 02:05:35',
                'updated_at' => '2017-08-31 02:05:35',
            ),
            68 => 
            array (
                'id' => 70,
                'key' => 'item_code',
                'en' => 'Item Code',
                'km' => 'លេខកូដ',
                'created_at' => '2017-08-31 02:05:37',
                'updated_at' => '2017-08-31 02:05:37',
            ),
            69 => 
            array (
                'id' => 71,
                'key' => 'num_qty',
                'en' => 'Size',
                'km' => 'ទំហំ',
                'created_at' => '2017-08-31 07:04:51',
                'updated_at' => '2017-08-31 07:04:51',
            ),
            70 => 
            array (
                'id' => 72,
                'key' => 'checklists',
                'en' => 'Checklists',
                'km' => 'ពិនិត្រទំនិញ',
                'created_at' => '2017-08-31 07:45:16',
                'updated_at' => '2017-08-31 07:45:16',
            ),
            71 => 
            array (
                'id' => 73,
                'key' => 'checklist_number',
                'en' => 'Checklist Number',
                'km' => 'លេខសំគាល់',
                'created_at' => '2017-08-31 07:45:16',
                'updated_at' => '2017-08-31 07:45:16',
            ),
            72 => 
            array (
                'id' => 74,
                'key' => 'checklist_date',
                'en' => 'Checklist Date',
                'km' => 'កាលបរិច្ឆេទ',
                'created_at' => '2017-08-31 07:45:16',
                'updated_at' => '2017-08-31 07:45:16',
            ),
            73 => 
            array (
                'id' => 75,
                'key' => 'invoices',
                'en' => 'Invoices',
                'km' => 'វិក្កយបត្រ',
                'created_at' => '2017-08-31 07:46:07',
                'updated_at' => '2017-08-31 07:46:07',
            ),
            74 => 
            array (
                'id' => 76,
                'key' => 'invoice_number',
                'en' => 'Invoice Number',
                'km' => 'លេខសំគាល់',
                'created_at' => '2017-08-31 07:46:07',
                'updated_at' => '2017-08-31 07:46:07',
            ),
            75 => 
            array (
                'id' => 77,
                'key' => 'deposit',
                'en' => 'Deposit',
                'km' => 'ប្រាក់កក់',
                'created_at' => '2017-08-31 07:46:07',
                'updated_at' => '2017-08-31 07:46:07',
            ),
            76 => 
            array (
                'id' => 78,
                'key' => 'complete_date',
                'en' => 'Complete Date',
                'km' => 'កាលបរិច្ឆេទ កំណត់',
                'created_at' => '2017-08-31 07:46:07',
                'updated_at' => '2017-08-31 07:46:07',
            ),
            77 => 
            array (
                'id' => 79,
                'key' => 'complete_price',
                'en' => 'Complete Price',
                'km' => 'តម្លៃបង្គ្រប់',
                'created_at' => '2017-08-31 07:46:07',
                'updated_at' => '2017-08-31 07:46:07',
            ),
            78 => 
            array (
                'id' => 80,
                'key' => 'customers',
                'en' => 'Customers',
                'km' => 'អតិថិជន',
                'created_at' => '2017-08-31 07:56:02',
                'updated_at' => '2017-08-31 07:56:02',
            ),
            79 => 
            array (
                'id' => 81,
                'key' => 'gender',
                'en' => 'Gender',
                'km' => 'ភេទ',
                'created_at' => '2017-08-31 07:56:02',
                'updated_at' => '2017-08-31 07:56:02',
            ),
            80 => 
            array (
                'id' => 82,
                'key' => 'phone',
                'en' => 'Phone',
                'km' => 'ទូរស័ព្ទលេខ',
                'created_at' => '2017-08-31 07:56:02',
                'updated_at' => '2017-08-31 07:56:02',
            ),
            81 => 
            array (
                'id' => 83,
                'key' => 'select_report_type',
                'en' => 'Select Report Type',
                'km' => 'ប្រភេទរបាយការណ៍',
                'created_at' => '2017-08-31 08:38:26',
                'updated_at' => '2017-08-31 08:38:26',
            ),
            82 => 
            array (
                'id' => 84,
                'key' => 'reports',
                'en' => 'Reports',
                'km' => 'របាយការណ៍',
                'created_at' => '2017-08-31 08:38:27',
                'updated_at' => '2017-08-31 08:38:27',
            ),
            83 => 
            array (
                'id' => 85,
                'key' => 'invoice_date',
                'en' => 'Invoice Date',
                'km' => 'កាលបរិច្ឆេទវិក្កយបត្រ',
                'created_at' => '2017-08-31 08:38:56',
                'updated_at' => '2017-08-31 08:38:56',
            ),
            84 => 
            array (
                'id' => 86,
                'key' => 'customer_invoice',
                'en' => 'Customer Invoice',
                'km' => 'វិក័យប័ត្រអតិថិជន',
                'created_at' => '2017-08-31 08:38:56',
                'updated_at' => '2017-08-31 08:38:56',
            ),
            85 => 
            array (
                'id' => 87,
                'key' => 'amount',
                'en' => 'Amount',
                'km' => 'សរុប',
                'created_at' => '2017-08-31 14:08:13',
                'updated_at' => '2017-08-31 14:08:13',
            ),
            86 => 
            array (
                'id' => 88,
                'key' => 'first_page_you_see',
                'en' => 'First page you see',
                'km' => 'ទំព័រទីមួយដែលអ្នកឃើញ',
                'created_at' => '2017-09-01 12:18:12',
                'updated_at' => '2017-09-01 12:18:12',
            ),
            87 => 
            array (
                'id' => 89,
                'key' => 'logged_in',
                'en' => 'Logged in',
                'km' => 'បានចូល',
                'created_at' => '2017-09-01 12:18:12',
                'updated_at' => '2017-09-01 12:18:12',
            ),
            88 => 
            array (
                'id' => 90,
                'key' => 'administration',
                'en' => 'Administration',
                'km' => 'រដ្ឋបាល
',
                'created_at' => '2017-09-01 12:18:13',
                'updated_at' => '2017-09-01 12:18:13',
            ),
            89 => 
            array (
                'id' => 91,
                'key' => 'all',
                'en' => 'All',
                'km' => '>',
                'created_at' => '2017-09-01 12:25:40',
                'updated_at' => '2017-09-01 12:25:40',
            ),
            90 => 
            array (
                'id' => 92,
                'key' => 'in_the_database',
                'en' => 'In the database',
                'km' => 'នៅក្នុងមូលដ្ឋានទិន្នន័យ',
                'created_at' => '2017-09-01 12:25:40',
                'updated_at' => '2017-09-01 12:25:40',
            ),
            91 => 
            array (
                'id' => 93,
                'key' => 'admin',
                'en' => 'Admin',
                'km' => 'អ្នកគ្រប់គ្រង',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            92 => 
            array (
                'id' => 94,
                'key' => 'add',
                'en' => 'Add',
                'km' => 'បន្ថែម',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            93 => 
            array (
                'id' => 95,
                'key' => 'actions',
                'en' => 'Actions',
                'km' => 'សកម្មភាព',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            94 => 
            array (
                'id' => 96,
                'key' => 'emptytable',
                'en' => 'Empty Table',
                'km' => 'តារាងទទេ',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            95 => 
            array (
                'id' => 97,
                'key' => 'info',
                'en' => 'Info',
                'km' => 'ព័ត៌មាន',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            96 => 
            array (
                'id' => 98,
                'key' => 'infoempty',
                'en' => 'Info Empty',
                'km' => 'មិនមានព័ត៌មាន ',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            97 => 
            array (
                'id' => 99,
                'key' => 'infofiltered',
                'en' => 'Info Filtered',
                'km' => 'ព័ត៌មាន Filtered',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            98 => 
            array (
                'id' => 100,
                'key' => 'infopostfix',
                'en' => 'Info Postfix',
                'km' => 'ព័ត៌មាន Postfix',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            99 => 
            array (
                'id' => 101,
                'key' => 'thousands',
                'en' => 'Thousands',
                'km' => ' ខ្ទង់ពាន់',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            100 => 
            array (
                'id' => 102,
                'key' => 'lengthmenu',
                'en' => 'Length Menu',
                'km' => 'ម៉ឺនុយប្រវែង',
                'created_at' => '2017-09-01 12:25:41',
                'updated_at' => '2017-09-01 12:25:41',
            ),
            101 => 
            array (
                'id' => 103,
                'key' => 'loadingrecords',
                'en' => 'Loading Records',
                'km' => 'កំពុងផ្ទុកកំណត់ត្រា',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            102 => 
            array (
                'id' => 104,
                'key' => 'processing',
                'en' => 'Processing',
                'km' => 'កំពុងដំណើរការ',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            103 => 
            array (
                'id' => 105,
                'key' => 'search',
                'en' => 'Search',
                'km' => 'ស្វែងរក',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            104 => 
            array (
                'id' => 106,
                'key' => 'zerorecords',
                'en' => 'Zero Records',
                'km' => 'កំណត់ត្រាសូន្យ',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            105 => 
            array (
                'id' => 107,
                'key' => 'first',
                'en' => 'First',
                'km' => 'ដំបូង',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            106 => 
            array (
                'id' => 108,
                'key' => 'last',
                'en' => 'Last',
                'km' => 'ចុងក្រោយ',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            107 => 
            array (
                'id' => 109,
                'key' => 'next',
                'en' => 'Next',
                'km' => 'បន្ទាប់',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            108 => 
            array (
                'id' => 110,
                'key' => 'previous',
                'en' => 'Previous',
                'km' => 'ពីមុន',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            109 => 
            array (
                'id' => 111,
                'key' => 'sortascending',
                'en' => 'Sort Ascending',
                'km' => 'តម្រៀបតាមលំដាប់ឡើង',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            110 => 
            array (
                'id' => 112,
                'key' => 'sortdescending',
                'en' => 'Sort Descending',
                'km' => 'តម្រៀបតាមលំដាប់ចុះក្រោម',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            111 => 
            array (
                'id' => 113,
                'key' => 'copy',
                'en' => 'Copy',
                'km' => 'ច្បាប់ចម្លង',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            112 => 
            array (
                'id' => 114,
                'key' => 'excel',
                'en' => 'Excel',
                'km' => 'Excel',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            113 => 
            array (
                'id' => 115,
                'key' => 'csv',
                'en' => 'CSV',
                'km' => 'CSV',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            114 => 
            array (
                'id' => 116,
                'key' => 'pdf',
                'en' => 'PDF',
                'km' => 'PDF',
                'created_at' => '2017-09-01 12:25:42',
                'updated_at' => '2017-09-01 12:25:42',
            ),
            115 => 
            array (
                'id' => 117,
                'key' => 'print',
                'en' => 'Print',
                'km' => 'បោះពុម្ព',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            116 => 
            array (
                'id' => 118,
                'key' => 'column_visibility',
                'en' => 'Column Visibility',
                'km' => 'មើលឃើញជួរឈរ',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            117 => 
            array (
                'id' => 119,
                'key' => 'delete_confirm',
                'en' => 'Delete Confirm',
                'km' => 'លុបការអះអាង',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            118 => 
            array (
                'id' => 120,
                'key' => 'delete_confirmation_title',
                'en' => 'Delete Confirmation Title',
                'km' => 'លុបការបញ្ជាក់ចំណងជើង',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            119 => 
            array (
                'id' => 121,
                'key' => 'delete_confirmation_message',
                'en' => 'Delete Confirmation Message',
                'km' => 'លុបសារបញ្ជាក់',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            120 => 
            array (
                'id' => 122,
                'key' => 'delete_confirmation_not_title',
                'en' => 'Delete Confirmation Not Title',
                'km' => 'លុបការបញ្ជាក់មិនមានចំណងជើង',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            121 => 
            array (
                'id' => 123,
                'key' => 'delete_confirmation_not_message',
                'en' => 'Delete Confirmation Not Message',
                'km' => 'លុបការបញ្ជាក់សារមិនពិត',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            122 => 
            array (
                'id' => 124,
                'key' => 'delete_confirmation_not_deleted_title',
                'en' => 'Delete Confirmation Note Deleted Title',
                'km' => 'លុបសេចក្តីបញ្ជាក់ចំណាំចំណងជើង',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            123 => 
            array (
                'id' => 125,
                'key' => 'delete_confirmation_not_deleted_message',
                'en' => 'Delete Confirmation Not Delete Message',
                'km' => 'លុបការអះអាងមិនលុបសារ',
                'created_at' => '2017-09-01 12:25:43',
                'updated_at' => '2017-09-01 12:25:43',
            ),
            124 => 
            array (
                'id' => 126,
                'key' => 'edit',
                'en' => 'Edit',
                'km' => 'កែសម្រួល',
                'created_at' => '2017-09-01 12:25:45',
                'updated_at' => '2017-09-01 12:25:45',
            ),
            125 => 
            array (
                'id' => 127,
                'key' => 'delete',
                'en' => 'Delete',
                'km' => 'លុប',
                'created_at' => '2017-09-01 12:25:45',
                'updated_at' => '2017-09-01 12:25:45',
            ),
            126 => 
            array (
                'id' => 128,
                'key' => 'back_to_all',
                'en' => 'Back to All',
                'km' => 'ត្រលប់ទៅទាំងអស់',
                'created_at' => '2017-09-01 12:28:06',
                'updated_at' => '2017-09-01 12:28:06',
            ),
            127 => 
            array (
                'id' => 129,
                'key' => 'add_a_new',
                'en' => 'Add a New',
                'km' => 'បន្ថែមថ្មី',
                'created_at' => '2017-09-01 12:28:07',
                'updated_at' => '2017-09-01 12:28:07',
            ),
            128 => 
            array (
                'id' => 132,
                'key' => 'sign_in_to_start_your_session',
                'en' => 'Sign in to start your session',
                'km' => 'បំពេញនូវអ៊ីមែល និង ពាក្យសម្ងាត់ ដើម្បីចូលទៅកានផ្ទាំងលក់',
                'created_at' => '2017-09-02 02:16:22',
                'updated_at' => '2017-09-02 02:16:22',
            ),
            129 => 
            array (
                'id' => 133,
                'key' => 'email',
                'en' => 'Email',
                'km' => 'អ៊ីមែល',
                'created_at' => '2017-09-02 02:16:22',
                'updated_at' => '2017-09-02 02:16:22',
            ),
            130 => 
            array (
                'id' => 134,
                'key' => 'password',
                'en' => 'Password',
                'km' => 'ពាក្យសម្ងាត់',
                'created_at' => '2017-09-02 02:16:22',
                'updated_at' => '2017-09-02 02:16:22',
            ),
            131 => 
            array (
                'id' => 135,
                'key' => 'remember_me',
                'en' => 'Remember Me',
                'km' => 'ចងចាំខ្ញុំ',
                'created_at' => '2017-09-02 02:16:22',
                'updated_at' => '2017-09-02 02:16:22',
            ),
            132 => 
            array (
                'id' => 136,
                'key' => 'stock_',
                'en' => 'Stock',
                'km' => 'ការគ្រប់គ្រង',
                'created_at' => '2017-09-02 02:18:38',
                'updated_at' => '2017-09-02 02:18:38',
            ),
            133 => 
            array (
                'id' => 137,
                'key' => 'management_',
                'en' => 'Management',
                'km' => 'ស្តុក',
                'created_at' => '2017-09-02 02:18:38',
                'updated_at' => '2017-09-02 02:18:38',
            ),
            134 => 
            array (
                'id' => 138,
                'key' => 'email_address',
                'en' => 'Email Address',
                'km' => 'អាស័យដ្ឋានអ៊ីមែល',
                'created_at' => '2017-09-02 02:24:44',
                'updated_at' => '2017-09-02 02:24:44',
            ),
            135 => 
            array (
                'id' => 139,
                'key' => 'confirm_password',
                'en' => 'Confirm Password',
                'km' => 'បញ្ជាក់ពាក្យសម្ងាត់',
                'created_at' => '2017-09-02 02:24:44',
                'updated_at' => '2017-09-02 02:24:44',
            ),
            136 => 
            array (
                'id' => 140,
                'key' => 'search_here',
                'en' => 'Search Here',
                'km' => 'ស្វែងរកនៅទីនេះ',
                'created_at' => '2017-09-02 02:30:43',
                'updated_at' => '2017-09-02 02:30:43',
            ),
            137 => 
            array (
                'id' => 141,
                'key' => 'transaction',
                'en' => 'Transaction',
                'km' => 'ប្រតិបត្តិការ
',
                'created_at' => '2017-09-02 13:32:09',
                'updated_at' => '2017-09-02 13:32:09',
            ),
            138 => 
            array (
                'id' => 142,
                'key' => 'user_manager',
                'en' => 'User Mananger',
                'km' => 'គ្រប់គ្រងអ្នកប្រើ',
                'created_at' => '2017-09-02 13:36:52',
                'updated_at' => '2017-09-02 13:36:52',
            ),
            139 => 
            array (
                'id' => 143,
                'key' => 'choose_file',
                'en' => 'Choose file',
                'km' => 'ជ្រើសរើស​រូបភាព',
                'created_at' => '2017-09-11 13:42:06',
                'updated_at' => '2017-09-11 13:42:06',
            ),
            140 => 
            array (
                'id' => 144,
                'key' => 'close',
                'en' => 'Close',
                'km' => 'បិទ',
                'created_at' => '2017-09-13 02:23:37',
                'updated_at' => '2017-09-13 02:23:37',
            ),
            141 => 
            array (
                'id' => 145,
                'key' => 'finalize_sale',
                'en' => 'Finalize Sale',
                'km' => 'បញ្ចប់ការលក់',
                'created_at' => '2017-09-13 02:23:37',
                'updated_at' => '2017-09-13 02:23:37',
            ),
            142 => 
            array (
                'id' => 146,
                'key' => 'date',
                'en' => 'Date',
                'km' => 'កាលបរិច្ឆេទ',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            143 => 
            array (
                'id' => 147,
                'key' => 'yyyy-mm-dd',
                'en' => 'yyyy-mm-dd',
                'km' => 'ឆ្នាំ-ខែ-ថ្ងៃ',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            144 => 
            array (
                'id' => 149,
                'key' => 'customer_name',
                'en' => 'Customer Name',
                'km' => 'ឈ្មោះ​អតិថិជន
',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            145 => 
            array (
                'id' => 150,
                'key' => 'total_items',
                'en' => 'Total Items',
                'km' => 'ផលិតផលសរុប',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            146 => 
            array (
                'id' => 151,
                'key' => 'currency',
                'en' => 'Currency',
                'km' => 'រូបិយប័ណ្ណ',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            147 => 
            array (
                'id' => 152,
                'key' => 'usd',
                'en' => 'USD',
                'km' => 'ដុល្លារ',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            148 => 
            array (
                'id' => 153,
                'key' => 'khm',
                'en' => 'KHM',
                'km' => 'រៀល',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            149 => 
            array (
                'id' => 154,
                'key' => 'total',
                'en' => 'Total',
                'km' => 'សរុប',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            150 => 
            array (
                'id' => 155,
                'key' => 'total_payable',
                'en' => 'Total Payable',
                'km' => 'សរុបលុយបង់',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            151 => 
            array (
                'id' => 156,
                'key' => 'paid',
                'en' => 'Paid',
                'km' => 'បង់លុយ',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            152 => 
            array (
                'id' => 157,
                'key' => 'remaining',
                'en' => 'Remaining',
                'km' => 'លុយអាប់',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            153 => 
            array (
                'id' => 158,
                'key' => 'change',
                'en' => 'Change',
                'km' => 'លុយដូរ',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            154 => 
            array (
                'id' => 159,
                'key' => 'payment_note',
                'en' => 'Payment Note',
                'km' => 'ការទូទាត់ចំណាំ',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            155 => 
            array (
                'id' => 160,
                'key' => 'quick_cash',
                'en' => 'Quick Cash',
                'km' => 'សាច់ប្រាក់រហ័ស',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            156 => 
            array (
                'id' => 161,
                'key' => 'clear',
                'en' => 'Clear',
                'km' => 'លុប',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            157 => 
            array (
                'id' => 162,
                'key' => 'save',
                'en' => 'Save',
                'km' => 'រក្សាទុក',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            158 => 
            array (
                'id' => 163,
                'key' => 'update',
                'en' => 'Update',
                'km' => 'កែប្រែ',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            159 => 
            array (
                'id' => 164,
                'key' => 'cancel',
                'en' => 'Cancel',
                'km' => 'បោះបង់',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            160 => 
            array (
                'id' => 165,
                'key' => 'customer_list',
                'en' => 'Customer List',
                'km' => 'បញ្ជីអតិថិជន',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            161 => 
            array (
                'id' => 166,
                'key' => 'edit_customer',
                'en' => 'Edit Customer',
                'km' => 'កែសម្រួលអតិថិជន',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            162 => 
            array (
                'id' => 167,
                'key' => 'male',
                'en' => 'Male',
                'km' => 'ប្រុស',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            163 => 
            array (
                'id' => 168,
                'key' => 'female',
                'en' => 'Female',
                'km' => 'ស្រី',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            164 => 
            array (
                'id' => 169,
                'key' => 'submit',
                'en' => 'Submit',
                'km' => 'បញ្ចូន',
                'created_at' => '2017-09-13 02:23:38',
                'updated_at' => '2017-09-13 02:23:38',
            ),
            165 => 
            array (
                'id' => 170,
                'key' => 'num.qty',
                'en' => 'Num.Qty',
                'km' => 'ចំនួនឯកតា',
                'created_at' => '2017-09-13 02:43:39',
                'updated_at' => '2017-09-13 02:43:39',
            ),
            166 => 
            array (
                'id' => 171,
                'key' => 'rate',
                'en' => 'Rate',
                'km' => 'អត្រាប្តូរប្រាក់',
                'created_at' => '2017-09-13 03:14:26',
                'updated_at' => '2017-09-13 03:14:26',
            ),
            167 => 
            array (
                'id' => 172,
                'key' => 'print_order',
                'en' => 'Print Order',
                'km' => 'ព្រីនការកម្មង់',
                'created_at' => '2017-09-13 03:14:26',
                'updated_at' => '2017-09-13 03:14:26',
            ),
            168 => 
            array (
                'id' => 173,
                'key' => 'print_bill',
                'en' => 'Print Bill',
                'km' => 'ព្រីនវិក្កយបត្រ',
                'created_at' => '2017-09-13 03:14:26',
                'updated_at' => '2017-09-13 03:14:26',
            ),
            169 => 
            array (
                'id' => 174,
                'key' => 'payment',
                'en' => 'Payment',
                'km' => 'ការទូទាត់',
                'created_at' => '2017-09-13 03:14:26',
                'updated_at' => '2017-09-13 03:14:26',
            ),
            170 => 
            array (
                'id' => 175,
                'key' => 'edit_order_discount',
                'en' => 'Edit Order Discount',
                'km' => 'កែប្រែការបញ្ចុះតម្លៃ',
                'created_at' => '2017-09-13 03:14:26',
                'updated_at' => '2017-09-13 03:14:26',
            ),
            171 => 
            array (
                'id' => 176,
                'key' => 'order_discount',
            'en' => 'Order Discount($)',
            'km' => 'បញ្ចុះតម្លៃ​ ($)',
                'created_at' => '2017-09-13 03:14:26',
                'updated_at' => '2017-09-13 03:14:26',
            ),
            172 => 
            array (
                'id' => 177,
                'key' => 'invoice_no',
                'en' => 'Invoice No',
                'km' => 'លេខ​វិ​ក័​យ​ប័ត្រ
',
                'created_at' => '2017-09-13 03:15:27',
                'updated_at' => '2017-09-13 03:15:27',
            ),
            173 => 
            array (
                'id' => 178,
                'key' => 'ok',
                'en' => 'OK',
                'km' => 'យល់ព្រម',
                'created_at' => '2017-09-13 03:21:07',
                'updated_at' => '2017-09-13 03:21:07',
            ),
            174 => 
            array (
                'id' => 179,
                'key' => 'are_you_sure?',
                'en' => 'Are you sure?',
                'km' => 'តើ​អ្នក​ប្រាកដ​ឬ​អត់?
',
                'created_at' => '2017-09-13 03:23:26',
                'updated_at' => '2017-09-13 03:23:26',
            ),
            175 => 
            array (
                'id' => 180,
                'key' => 'search_product_by_code',
                'en' => 'Search product by item code',
                'km' => 'ស្វែងរកផលិតផលតាមលេខកូដ',
                'created_at' => '2017-09-13 03:24:22',
                'updated_at' => '2017-09-13 03:24:22',
            ),
            176 => 
            array (
                'id' => 181,
                'key' => 'add_customer',
                'en' => 'Add Customer',
                'km' => 'បន្ថែមអតិថិជន',
                'created_at' => '2017-09-13 03:27:24',
                'updated_at' => '2017-09-13 03:27:24',
            ),
            177 => 
            array (
                'id' => 182,
                'key' => 'please_fill_in_the_information_below._the_field_labels_marked_with_*_are_required_input_fields.',
                'en' => 'Please fill in the information below. The field lavels marked with * are required input fields.',
                'km' => 'សូមបំពេញព័ត៌មានខាងក្រោម, ឈ្មោះ ដែលសម្គាល់ដោយសញ្ញា * តម្រូវអោយរវាយបញ្ចូល.',
                'created_at' => '2017-09-13 03:31:01',
                'updated_at' => '2017-09-13 03:31:01',
            ),
            178 => 
            array (
                'id' => 183,
                'key' => 'select_gender',
                'en' => 'Select Gender',
                'km' => 'ជ្រើសរើសភេទ',
                'created_at' => '2017-09-13 03:31:01',
                'updated_at' => '2017-09-13 03:31:01',
            ),
            179 => 
            array (
                'id' => 184,
                'key' => 'search_filter',
                'en' => 'Search Filter',
                'km' => 'ស្វែងរក
',
                'created_at' => '2017-09-13 03:31:01',
                'updated_at' => '2017-09-13 03:31:01',
            ),
            180 => 
            array (
                'id' => 185,
                'key' => 'exchange_rate',
                'en' => 'Exchange Rate',
                'km' => 'អត្រា​ប្តូ​រ​ប្រាក់
',
                'created_at' => '2017-09-18 02:41:21',
                'updated_at' => '2017-09-18 02:41:21',
            ),
            181 => 
            array (
                'id' => 186,
                'key' => 'history',
                'en' => 'History',
                'km' => 'ប្រវត្តិនៃការទិញ',
                'created_at' => '2017-09-18 02:41:42',
                'updated_at' => '2017-09-18 02:41:42',
            ),
            182 => 
            array (
                'id' => 187,
                'key' => 'customer_information',
                'en' => 'Customer Information',
                'km' => 'ព័ត៌មានអតិថិជន',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            183 => 
            array (
                'id' => 188,
                'key' => 'customer_record',
                'en' => 'Customer Record',
                'km' => 'កំណត់ត្រាអតិថិជន',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            184 => 
            array (
                'id' => 189,
                'key' => 'member_date',
                'en' => 'Member Date',
                'km' => 'កាលបរិច្ឆេទសមាជិក',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            185 => 
            array (
                'id' => 190,
                'key' => 'invoice_history',
                'en' => 'Invoice History',
                'km' => 'ប្រវត្តិវិក្កយបត្រ',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            186 => 
            array (
                'id' => 191,
                'key' => 'customer_invoice_record',
                'en' => 'Customer Invoice Record',
                'km' => 'កំណត់ត្រាវិក្កយបត្រអតិថិជន',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            187 => 
            array (
                'id' => 192,
                'key' => 'invoice_due',
                'en' => 'Invoice Due',
                'km' => 'ថ្ងៃទី',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            188 => 
            array (
                'id' => 193,
                'key' => 'no',
                'en' => 'No',
                'km' => 'ល.រ',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            189 => 
            array (
                'id' => 194,
                'key' => 'total_discount',
                'en' => 'Total Discount',
                'km' => 'បញ្ចុះតម្លៃសរុប',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            190 => 
            array (
                'id' => 195,
                'key' => 'grand_total',
                'en' => 'Grand Total',
                'km' => 'តំលៃ​បូក​សរុប
',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            191 => 
            array (
                'id' => 196,
                'key' => 'total_paid',
                'en' => 'Total Paid',
                'km' => 'ការបង់ប្រាក់សរុប',
                'created_at' => '2017-09-18 02:41:45',
                'updated_at' => '2017-09-18 02:41:45',
            ),
            192 => 
            array (
                'id' => 197,
                'key' => 'exchange_rates',
                'en' => 'Exchange Rates',
                'km' => 'អត្រា​ប្តូ​រ​ប្រាក់
',
                'created_at' => '2017-09-18 03:01:00',
                'updated_at' => '2017-09-18 03:01:00',
            ),
            193 => 
            array (
                'id' => 198,
                'key' => 'dollar',
                'en' => 'Dollar',
                'km' => 'ដុល្លារ',
                'created_at' => '2017-09-18 03:01:00',
                'updated_at' => '2017-09-18 03:01:00',
            ),
            194 => 
            array (
                'id' => 199,
                'key' => 'riel',
                'en' => 'Riel',
                'km' => 'រៀល',
                'created_at' => '2017-09-18 03:01:00',
                'updated_at' => '2017-09-18 03:01:00',
            ),
            195 => 
            array (
                'id' => 200,
                'key' => 'buyer',
                'en' => 'Buyer',
                'km' => 'អ្នកទិញ',
                'created_at' => '2017-09-22 04:11:54',
                'updated_at' => '2017-09-22 04:11:54',
            ),
            196 => 
            array (
                'id' => 201,
                'key' => 'seller',
                'en' => 'Seller',
                'km' => 'អ្នកលក់',
                'created_at' => '2017-09-22 04:11:54',
                'updated_at' => '2017-09-22 04:11:54',
            ),
            197 => 
            array (
                'id' => 203,
                'key' => 'invoice_list_report',
                'en' => 'Invoice List Report',
                'km' => 'បញ្ជីរបាយការណ៍វិក័យប័ត្រ',
                'created_at' => '2017-09-23 06:36:07',
                'updated_at' => '2017-09-23 06:36:07',
            ),
            198 => 
            array (
                'id' => 204,
                'key' => 'form_date',
                'en' => 'From Date',
                'km' => 'ចាប់ពីថ្ងៃទី',
                'created_at' => '2017-09-23 06:36:07',
                'updated_at' => '2017-09-23 06:36:07',
            ),
            199 => 
            array (
                'id' => 205,
                'key' => 'to_date',
                'en' => 'To Date',
                'km' => 'ដល់ថ្ងៃទី',
                'created_at' => '2017-09-23 06:36:07',
                'updated_at' => '2017-09-23 06:36:07',
            ),
            200 => 
            array (
                'id' => 206,
                'key' => 'tel',
                'en' => 'Tel',
                'km' => 'ទូរស័ព្ទលេខ',
                'created_at' => '2017-09-23 06:36:07',
                'updated_at' => '2017-09-23 06:36:07',
            ),
            201 => 
            array (
                'id' => 207,
                'key' => 'subtotal',
                'en' => 'Subtotal ',
                'km' => 'សរុប',
                'created_at' => '2017-09-23 06:36:07',
                'updated_at' => '2017-09-23 06:36:07',
            ),
            202 => 
            array (
                'id' => 208,
                'key' => 'production_list_report',
                'en' => 'Production List Report',
                'km' => 'បញ្ជីរបាយការណ៍ផលិតកម្ម',
                'created_at' => '2017-09-23 06:38:15',
                'updated_at' => '2017-09-23 06:38:15',
            ),
            203 => 
            array (
                'id' => 209,
                'key' => 'not_record_found',
                'en' => 'Not Record Found',
                'km' => 'មិនមានកំណត់ត្រា',
                'created_at' => '2017-09-23 06:38:15',
                'updated_at' => '2017-09-23 06:38:15',
            ),
            204 => 
            array (
                'id' => 210,
                'key' => 'open_list_report',
                'en' => 'Open List Report',
                'km' => 'បញ្ជីរបាយការណ៍បើកស្តុក',
                'created_at' => '2017-09-23 06:38:20',
                'updated_at' => '2017-09-23 06:38:20',
            ),
            205 => 
            array (
                'id' => 211,
                'key' => 'total_qty',
                'en' => 'Total Qty',
                'km' => 'ចំនួនសរុប',
                'created_at' => '2017-09-23 06:38:20',
                'updated_at' => '2017-09-23 06:38:20',
            ),
            206 => 
            array (
                'id' => 212,
                'key' => 'total_cost',
                'en' => 'Total Cost',
                'km' => 'ថ្លៃដើមសរុប',
                'created_at' => '2017-09-23 06:38:20',
                'updated_at' => '2017-09-23 06:38:20',
            ),
            207 => 
            array (
                'id' => 213,
                'key' => 'checked_by',
                'en' => 'Checked By',
                'km' => 'ពិនិត្រដោយ',
                'created_at' => '2017-09-23 06:38:20',
                'updated_at' => '2017-09-23 06:38:20',
            ),
            208 => 
            array (
                'id' => 214,
                'key' => 'reported_by',
                'en' => 'Reported By',
                'km' => 'រៀបចំរបាយការណ័ដោយ',
                'created_at' => '2017-09-23 06:38:20',
                'updated_at' => '2017-09-23 06:38:20',
            ),
            209 => 
            array (
                'id' => 215,
                'key' => 'between',
                'en' => 'Between',
                'km' => 'ចន្លោះ',
                'created_at' => '2017-09-23 06:45:30',
                'updated_at' => '2017-09-23 06:45:30',
            ),
            210 => 
            array (
                'id' => 216,
                'key' => 'production_history',
                'en' => 'Production History',
                'km' => 'ប្រវត្តិផលិតកម្ម',
                'created_at' => '2017-09-23 06:52:46',
                'updated_at' => '2017-09-23 06:52:46',
            ),
            211 => 
            array (
                'id' => 217,
                'key' => 'customer_production_record',
                'en' => 'Customer Production Record',
                'km' => 'កំណត់ត្រាផលិតកម្មអតិថិជន',
                'created_at' => '2017-09-23 06:52:46',
                'updated_at' => '2017-09-23 06:52:46',
            ),
            212 => 
            array (
                'id' => 218,
                'key' => 'production_due',
                'en' => 'Production Due',
                'km' => 'ថ្ងៃទី',
                'created_at' => '2017-09-23 06:52:46',
                'updated_at' => '2017-09-23 06:52:46',
            ),
            213 => 
            array (
                'id' => 219,
                'key' => 'purchase_history',
                'en' => 'Purchase History',
                'km' => 'ប្រវត្តិការទិញចូល',
                'created_at' => '2017-09-23 06:57:38',
                'updated_at' => '2017-09-23 06:57:38',
            ),
            214 => 
            array (
                'id' => 220,
                'key' => 'customer_purchase_record',
                'en' => 'Customer Purchase Record',
                'km' => 'កំណត់ត្រាការទិញចូលពីអតិថិជន',
                'created_at' => '2017-09-23 06:57:38',
                'updated_at' => '2017-09-23 06:57:38',
            ),
            215 => 
            array (
                'id' => 221,
                'key' => 'purchase_due',
                'en' => 'Purchase Due',
                'km' => 'ថ្ងៃទី',
                'created_at' => '2017-09-23 06:57:38',
                'updated_at' => '2017-09-23 06:57:38',
            ),
            216 => 
            array (
                'id' => 222,
                'key' => 'open_detail_report',
                'en' => 'Open Detail Report',
                'km' => 'របាយការណ៍បើកស្តុកលម្អិត',
                'created_at' => '2017-09-23 07:11:03',
                'updated_at' => '2017-09-23 07:11:03',
            ),
            217 => 
            array (
                'id' => 223,
                'key' => 'open_due',
                'en' => 'Open Due',
                'km' => 'ថ្ងៃទី',
                'created_at' => '2017-09-23 07:11:03',
                'updated_at' => '2017-09-23 07:11:03',
            ),
            218 => 
            array (
                'id' => 225,
                'key' => 'purchase_detail_report',
                'en' => 'Purchase Detail Report',
                'km' => 'របាយការណ៍លម្អិតនៃការទិញចូល',
                'created_at' => '2017-09-23 07:13:12',
                'updated_at' => '2017-09-23 07:13:12',
            ),
            219 => 
            array (
                'id' => 227,
                'key' => 'invoice_print',
                'en' => 'Invoice Print',
                'km' => 'ព្រីនវិក្កយបត្រ',
                'created_at' => '2017-09-25 07:28:08',
                'updated_at' => '2017-09-25 07:28:08',
            ),
            220 => 
            array (
                'id' => 228,
                'key' => 'invoice_detail_report',
                'en' => 'Invoice Detail Report',
                'km' => 'របាយការណ៍វិក្កយបត្រលម្អិត',
                'created_at' => '2017-09-25 08:15:38',
                'updated_at' => '2017-09-25 08:15:38',
            ),
            221 => 
            array (
                'id' => 229,
                'key' => 'sale_today',
                'en' => 'Sale Today',
                'km' => 'លក់ថ្ងៃនេះ',
                'created_at' => '2017-09-25 09:01:13',
                'updated_at' => '2017-09-25 09:01:13',
            ),
            222 => 
            array (
                'id' => 230,
                'key' => 'total_sale_today',
                'en' => 'Total Sale Today',
                'km' => 'សរុបការលក់ថ្ងៃនេះ',
                'created_at' => '2017-09-25 09:01:30',
                'updated_at' => '2017-09-25 09:01:30',
            ),
            223 => 
            array (
                'id' => 231,
                'key' => 'purchase_no',
                'en' => 'Purchase No',
                'km' => 'លេខសំគាល់',
                'created_at' => '2017-09-27 02:47:26',
                'updated_at' => '2017-09-27 02:47:26',
            ),
            224 => 
            array (
                'id' => 232,
                'key' => 'production_no',
                'en' => 'Production No',
                'km' => 'លេខសំគាល់',
                'created_at' => '2017-09-27 07:15:35',
                'updated_at' => '2017-09-27 07:15:35',
            ),
            225 => 
            array (
                'id' => 233,
                'key' => 'production_detail_report',
                'en' => 'Production Detail Report',
                'km' => 'របាយការណ៍លម្អិតនៃផលិតកម្ម',
                'created_at' => '2017-09-27 07:15:41',
                'updated_at' => '2017-09-27 07:15:41',
            ),
            226 => 
            array (
                'id' => 235,
                'key' => 'daily_sales_report',
                'en' => 'Daily Sales Report ',
                'km' => 'របាយការណ៍លក់ប្រចាំថ្ងៃ',
                'created_at' => '2017-09-28 01:59:23',
                'updated_at' => '2017-09-28 01:59:23',
            ),
            227 => 
            array (
                'id' => 253,
                'key' => 'sale_list',
                'en' => 'Sale List',
                'km' => 'បញ្ជីលក់',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            228 => 
            array (
                'id' => 254,
                'key' => 'sale_detail',
                'en' => 'Sale Detail',
                'km' => 'ពត៌មានលំអិតពីការលក់',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            229 => 
            array (
                'id' => 255,
                'key' => 'sale_profit',
                'en' => 'Sale Profit',
                'km' => 'ប្រាក់ចំណេញ',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            230 => 
            array (
                'id' => 256,
                'key' => 'sale_daily',
                'en' => 'Sale Daily',
                'km' => 'លក់ប្រចាំថ្ងៃ',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            231 => 
            array (
                'id' => 257,
                'key' => 'sale_monthly',
                'en' => 'Sale Monthly',
                'km' => 'លក់ប្រចាំខែ',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            232 => 
            array (
                'id' => 258,
                'key' => 'sale_discount',
                'en' => 'Sale Discount',
                'km' => 'លក់បញ្ចុះតម្លៃ',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            233 => 
            array (
                'id' => 259,
                'key' => 'production_list',
                'en' => 'Production List',
                'km' => 'បញ្ជីផលិតកម្ម',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            234 => 
            array (
                'id' => 260,
                'key' => 'production_detail',
                'en' => 'Production Detail ',
                'km' => 'ព័ត៌មានអំពីផលិតកម្ម',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            235 => 
            array (
                'id' => 261,
                'key' => 'purchase_list',
                'en' => 'Purchase List',
                'km' => 'បញ្ជីទិញ',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            236 => 
            array (
                'id' => 262,
                'key' => 'purchase_detail',
                'en' => 'Purchase Detail ',
                'km' => 'ព័ត៌មានលម្អិតការទិញ',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            237 => 
            array (
                'id' => 263,
                'key' => 'open_list',
                'en' => 'Open List',
                'km' => 'បញ្ជីបើកស្តុក',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            238 => 
            array (
                'id' => 264,
                'key' => 'open_detail',
                'en' => 'Open Detail ',
                'km' => 'ព័ត៌មានលម្អិតការបើកស្តុក',
                'created_at' => '2017-09-28 08:36:02',
                'updated_at' => '2017-09-28 08:36:02',
            ),
            239 => 
            array (
                'id' => 265,
                'key' => 'open_item_list',
                'en' => 'Open Item List',
                'km' => 'បញ្ជីបើកស្តុក',
                'created_at' => '2017-09-28 08:36:18',
                'updated_at' => '2017-09-28 08:36:18',
            ),
            240 => 
            array (
                'id' => 266,
                'key' => 'sale_report',
                'en' => 'Sale Report',
                'km' => 'របាយការណ៍លក់',
                'created_at' => '2017-09-28 08:36:18',
                'updated_at' => '2017-09-28 08:36:18',
            ),
            241 => 
            array (
                'id' => 267,
                'key' => 'customer_report',
                'en' => 'Customer Report',
                'km' => 'របាយការណ៍អតិថិជន',
                'created_at' => '2017-09-28 08:36:18',
                'updated_at' => '2017-09-28 08:36:18',
            ),
            242 => 
            array (
                'id' => 268,
                'key' => 'production_report',
                'en' => 'Production Report',
                'km' => 'របាយការណ៍ផលិតកម្ម',
                'created_at' => '2017-09-28 08:36:18',
                'updated_at' => '2017-09-28 08:36:18',
            ),
            243 => 
            array (
                'id' => 269,
                'key' => 'purchase_report',
                'en' => 'Purchase Report',
                'km' => 'របាយការណ៍ទិញចូល',
                'created_at' => '2017-09-28 08:36:18',
                'updated_at' => '2017-09-28 08:36:18',
            ),
            244 => 
            array (
                'id' => 270,
                'key' => 'open_report',
                'en' => 'Open Report',
                'km' => 'របាយការណ៍បើកស្តុក',
                'created_at' => '2017-09-28 08:36:18',
                'updated_at' => '2017-09-28 08:36:18',
            ),
            245 => 
            array (
                'id' => 271,
                'key' => 'sale_report_detail',
                'en' => 'Sale Report Detail ',
                'km' => 'របាយការណ៍លំអិតពីការលក់',
                'created_at' => '2017-09-28 08:55:02',
                'updated_at' => '2017-09-28 08:55:02',
            ),
            246 => 
            array (
                'id' => 272,
                'key' => 'total_deposit',
                'en' => 'Total Deposit',
                'km' => 'សរុបប្រាក់កក់',
                'created_at' => '2017-09-28 08:55:02',
                'updated_at' => '2017-09-28 08:55:02',
            ),
            247 => 
            array (
                'id' => 273,
                'key' => 'total_complete_price',
                'en' => 'Total Complete Price',
                'km' => 'សរុបប្រាក់បង់បង្គ្រប់',
                'created_at' => '2017-09-28 08:55:02',
                'updated_at' => '2017-09-28 08:55:02',
            ),
            248 => 
            array (
                'id' => 274,
                'key' => 'total_remaining',
                'en' => 'Total Remaining ',
                'km' => 'សរុបប្រាក់អាប់',
                'created_at' => '2017-09-28 08:55:02',
                'updated_at' => '2017-09-28 08:55:02',
            ),
            249 => 
            array (
                'id' => 275,
                'key' => 'action',
                'en' => 'Action ',
                'km' => 'សកម្មភាព',
                'created_at' => '2017-09-28 10:21:44',
                'updated_at' => '2017-09-28 10:21:44',
            ),
            250 => 
            array (
                'id' => 276,
                'key' => 'total_price',
                'en' => 'Total Price',
                'km' => 'តម្លៃ​សរុប
',
                'created_at' => '2017-09-29 01:13:46',
                'updated_at' => '2017-09-29 01:13:46',
            ),
            251 => 
            array (
                'id' => 279,
                'key' => 'open_item_detail',
                'en' => 'Open Item Detail ',
                'km' => 'ព័ត៌មានអំពីការបើកស្តុក',
                'created_at' => '2017-09-29 01:55:38',
                'updated_at' => '2017-09-29 01:55:38',
            ),
            252 => 
            array (
                'id' => 282,
                'key' => 'product_report',
                'en' => 'Product Report',
                'km' => 'របាយការណ៍អំពីផលិតផល',
                'created_at' => '2017-09-30 04:43:35',
                'updated_at' => '2017-09-30 04:43:35',
            ),
            253 => 
            array (
                'id' => 283,
                'key' => 'products_in/out',
                'en' => 'Products In/Out',
                'km' => 'ស្តុក ចូល/ចេញ',
                'created_at' => '2017-09-30 04:43:35',
                'updated_at' => '2017-09-30 04:43:35',
            ),
            254 => 
            array (
                'id' => 286,
                'key' => 'product_in/out_stock',
                'en' => 'Product In/Out Stock',
                'km' => 'ស្តុក ចូល/ចេញ',
                'created_at' => '2017-10-03 02:24:56',
                'updated_at' => '2017-10-03 02:24:56',
            ),
            255 => 
            array (
                'id' => 287,
                'key' => 'begin',
                'en' => 'Begin',
                'km' => 'ចាប់ផ្តើមស្តុក',
                'created_at' => '2017-10-03 02:24:58',
                'updated_at' => '2017-10-03 02:24:58',
            ),
            256 => 
            array (
                'id' => 288,
                'key' => 'total_in',
                'en' => 'Total In',
                'km' => 'សរុបស្តុកចូល',
                'created_at' => '2017-10-03 02:24:58',
                'updated_at' => '2017-10-03 02:24:58',
            ),
            257 => 
            array (
                'id' => 289,
                'key' => 'total_out',
                'en' => 'Total Out',
                'km' => 'សរុបស្តុកចេញ',
                'created_at' => '2017-10-03 02:24:58',
                'updated_at' => '2017-10-03 02:24:58',
            ),
            258 => 
            array (
                'id' => 290,
                'key' => 'balance',
                'en' => 'Balance',
                'km' => 'តុល្យភាព',
                'created_at' => '2017-10-03 02:24:58',
                'updated_at' => '2017-10-03 02:24:58',
            ),
            259 => 
            array (
                'id' => 291,
                'key' => 'profit_report',
                'en' => NULL,
                'km' => NULL,
                'created_at' => '2017-10-03 02:32:00',
                'updated_at' => '2017-10-03 02:32:00',
            ),
        ));
        
        
    }
}