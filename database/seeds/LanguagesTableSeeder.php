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
                'km' => 'អ្នក​ប្រើ
អ្នក​ប្រើ
អ្នក​ប្រើ',
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
                'km' => 'ការដាក់ប្រាក់',
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
                'km' => 'តម្លៃពេញ',
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
        ));
        
        
    }
}