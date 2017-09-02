/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : pos2018

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2017-09-02 17:16:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for checklists
-- ----------------------------
DROP TABLE IF EXISTS `checklists`;
CREATE TABLE `checklists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `checklist_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_date_` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of checklists
-- ----------------------------
INSERT INTO `checklists` VALUES ('1', 'Check List One', '2017-08-29', '2017-09-02 06:49:02', '2017-09-02 07:07:08');

-- ----------------------------
-- Table structure for checklist_detail
-- ----------------------------
DROP TABLE IF EXISTS `checklist_detail`;
CREATE TABLE `checklist_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_qty` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `count_qty` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `checklist_detail_ref_id_index` (`ref_id`),
  KEY `checklist_detail_item_id_index` (`item_id`),
  KEY `checklist_detail_title_index` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of checklist_detail
-- ----------------------------
INSERT INTO `checklist_detail` VALUES ('6', '1', '1', 'PT00001', 'Platinum 75%', '5', '2', '2', '2', '0', '0', '0', 'aaa', '[]', '2017-09-02 07:07:08', '2017-09-02 07:07:08', null);
INSERT INTO `checklist_detail` VALUES ('7', '1', '2', 'D00001', 'Diamond 2li', '2', '100', '200', '122', '0', '0', '0', 'bb', '[]', '2017-09-02 07:07:08', '2017-09-02 07:07:08', null);
INSERT INTO `checklist_detail` VALUES ('8', '1', '3', 'PT00002', 'Platinum 75%', '4', '3', '4', '3', '0', '0', '0', 'cc', '[]', '2017-09-02 07:07:08', '2017-09-02 07:07:08', null);
INSERT INTO `checklist_detail` VALUES ('9', '1', '4', 'R00001', 'Ring For Man', '7', '2', '2', '2', '0', '0', '0', 'dd', '[]', '2017-09-02 07:07:08', '2017-09-02 07:07:08', null);
INSERT INTO `checklist_detail` VALUES ('10', '1', '5', 'R00002', 'Ring Form Women', '7', '3', '4', '3', '0', '0', '0', 'ee', '[]', '2017-09-02 07:07:08', '2017-09-02 07:07:08', null);

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of customers
-- ----------------------------

-- ----------------------------
-- Table structure for invoice
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_date_` date DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` double DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` enum('PENDING','COMPLETE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `complete_date` date DEFAULT NULL,
  `complete_price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of invoice
-- ----------------------------

-- ----------------------------
-- Table structure for invoice_detail
-- ----------------------------
DROP TABLE IF EXISTS `invoice_detail`;
CREATE TABLE `invoice_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_qty` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoice_detail_ref_id_index` (`ref_id`),
  KEY `invoice_detail_item_id_index` (`item_id`),
  KEY `invoice_detail_title_index` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of invoice_detail
-- ----------------------------

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_title_index` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', null, 'PT00001', 'Platinum 75%', null, null, '5', null, '2017-09-02 04:18:53', '2017-09-02 04:18:53', null);
INSERT INTO `items` VALUES ('2', null, 'D00001', 'Diamond 2li', null, null, '2', null, '2017-09-02 04:18:53', '2017-09-02 04:18:53', null);
INSERT INTO `items` VALUES ('3', null, 'PT00002', 'Platinum 75%', null, '', '4', null, '2017-09-02 04:21:00', '2017-09-02 04:22:10', null);
INSERT INTO `items` VALUES ('4', '1', 'R00001', 'Ring For Man', null, '[\"images\\/items\\/15327_1504328349_3249.png\"]', '7', '3000', '2017-09-02 04:56:18', '2017-09-02 04:59:09', null);
INSERT INTO `items` VALUES ('5', '1', 'R00002', 'Ring Form Women', null, '[\"images\\/items\\/68908_1504328365_3451.png\"]', '7', '5000', '2017-09-02 04:56:18', '2017-09-02 04:59:25', null);

-- ----------------------------
-- Table structure for items_detail
-- ----------------------------
DROP TABLE IF EXISTS `items_detail`;
CREATE TABLE `items_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_qty` double DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_detail_ref_id_index` (`ref_id`),
  KEY `items_detail_item_id_index` (`item_id`),
  KEY `items_detail_title_index` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of items_detail
-- ----------------------------

-- ----------------------------
-- Table structure for items_transaction
-- ----------------------------
DROP TABLE IF EXISTS `items_transaction`;
CREATE TABLE `items_transaction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `ref_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_qty` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `tran_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_transaction_ref_id_index` (`ref_id`),
  KEY `items_transaction_ref_type_index` (`ref_type`),
  KEY `items_transaction_item_id_index` (`item_id`),
  KEY `items_transaction_unit_index` (`unit`),
  KEY `items_transaction_num_qty_index` (`num_qty`),
  KEY `items_transaction_qty_index` (`qty`),
  KEY `items_transaction_cost_index` (`cost`),
  KEY `items_transaction_price_index` (`price`),
  KEY `items_transaction_discount_index` (`discount`),
  KEY `items_transaction_tran_date_index` (`tran_date`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of items_transaction
-- ----------------------------
INSERT INTO `items_transaction` VALUES ('1', '1', 'open_items', '1', '5', '0', '2', '1200', '0', '0', '2017-10-02', '2017-09-02 04:18:53', '2017-09-02 04:18:53');
INSERT INTO `items_transaction` VALUES ('2', '1', 'open_items', '2', '2', '2', '200', '20', '0', '0', '2017-10-02', '2017-09-02 04:18:53', '2017-09-02 04:18:53');
INSERT INTO `items_transaction` VALUES ('6', '2', 'open_items', '3', '4', '0', '4', '120', '0', '0', '2017-10-02', '2017-09-02 04:25:18', '2017-09-02 04:25:18');
INSERT INTO `items_transaction` VALUES ('7', '3', 'open_items', '4', '7', '0', '2', '1360', '0', '0', '2017-09-02', '2017-09-02 04:56:18', '2017-09-02 04:56:18');
INSERT INTO `items_transaction` VALUES ('8', '3', 'open_items', '5', '7', '0', '4', '1240', '0', '0', '2017-09-02', '2017-09-02 04:56:18', '2017-09-02 04:56:18');
INSERT INTO `items_transaction` VALUES ('14', '1', 'checklists', '1', '5', '2', '2', '0', '0', '0', '2017-08-29', '2017-09-02 07:07:08', '2017-09-02 07:07:08');
INSERT INTO `items_transaction` VALUES ('15', '1', 'checklists', '2', '2', '100', '200', '0', '0', '0', '2017-08-29', '2017-09-02 07:07:08', '2017-09-02 07:07:08');
INSERT INTO `items_transaction` VALUES ('16', '1', 'checklists', '3', '4', '3', '4', '0', '0', '0', '2017-08-29', '2017-09-02 07:07:08', '2017-09-02 07:07:08');
INSERT INTO `items_transaction` VALUES ('17', '1', 'checklists', '4', '7', '2', '2', '0', '0', '0', '2017-08-29', '2017-09-02 07:07:08', '2017-09-02 07:07:08');
INSERT INTO `items_transaction` VALUES ('18', '1', 'checklists', '5', '7', '3', '4', '0', '0', '0', '2017-08-29', '2017-09-02 07:07:09', '2017-09-02 07:07:09');

-- ----------------------------
-- Table structure for item_categories
-- ----------------------------
DROP TABLE IF EXISTS `item_categories`;
CREATE TABLE `item_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of item_categories
-- ----------------------------
INSERT INTO `item_categories` VALUES ('1', null, 'ចិញ្ចៀន', '[\"images\\/item_categories\\/85984_1504320643_2911.png\"]', 'ចិញ្ចៀន', 'ACTIVE', '2017-09-02 02:50:43', '2017-09-02 02:50:43', null);
INSERT INTO `item_categories` VALUES ('2', null, 'កងដៃ', '[\"images\\/item_categories\\/59268_1504320663_4250.png\"]', 'កងដៃ', 'ACTIVE', '2017-09-02 02:51:03', '2017-09-02 02:51:03', null);
INSERT INTO `item_categories` VALUES ('3', null, 'ខ្សែដៃ', '[\"images\\/item_categories\\/46344_1504320704_3553.png\"]', 'ខ្សែដៃ', 'ACTIVE', '2017-09-02 02:51:44', '2017-09-02 02:51:44', null);
INSERT INTO `item_categories` VALUES ('4', null, 'ខ្សែក', '[\"images\\/item_categories\\/52523_1504320741_4768.png\"]', 'ខ្សែក', 'ACTIVE', '2017-09-02 02:52:21', '2017-09-02 02:52:21', null);
INSERT INTO `item_categories` VALUES ('5', null, 'ខ្សែកស្វារ៉េ', '[\"images\\/item_categories\\/99496_1504320777_2413.png\"]', 'ខ្សែកស្វារ៉េ', 'ACTIVE', '2017-09-02 02:52:57', '2017-09-02 02:52:57', null);
INSERT INTO `item_categories` VALUES ('6', null, 'បន្តោងខ្សែក', '[\"images\\/item_categories\\/18155_1504322115_2448.png\"]', 'បន្តោងខ្សែក', 'ACTIVE', '2017-09-02 03:15:15', '2017-09-02 03:15:15', null);
INSERT INTO `item_categories` VALUES ('7', null, 'ក្រវិល', '[\"images\\/item_categories\\/97001_1504322137_3227.png\"]', 'ក្រវិល', 'ACTIVE', '2017-09-02 03:15:37', '2017-09-02 03:15:37', null);
INSERT INTO `item_categories` VALUES ('8', null, 'សីុញ', '[\"images\\/item_categories\\/42464_1504322176_3891.png\"]', 'សីុញ', 'ACTIVE', '2017-09-02 03:16:16', '2017-09-02 03:16:16', null);
INSERT INTO `item_categories` VALUES ('9', null, 'ដង្កៀប', '[\"images\\/item_categories\\/59486_1504322190_4451.png\"]', 'ដង្កៀប', 'ACTIVE', '2017-09-02 03:16:30', '2017-09-02 03:16:30', null);
INSERT INTO `item_categories` VALUES ('10', null, 'ខ្សែជើង', '[\"images\\/item_categories\\/29065_1504322265_3892.png\"]', 'ខ្សែជើង', 'ACTIVE', '2017-09-02 03:17:45', '2017-09-02 03:17:45', null);
INSERT INTO `item_categories` VALUES ('11', null, 'ខ្សែចង្កេះ', '[\"images\\/item_categories\\/60937_1504322305_1018.png\"]', 'ខ្សែចង្កេះ', 'ACTIVE', '2017-09-02 03:18:25', '2017-09-02 03:18:25', null);
INSERT INTO `item_categories` VALUES ('15', null, 'នាឡិកា', '[\"images\\/item_categories\\/87797_1504322418_1512.png\"]', 'នាឡិកា', 'ACTIVE', '2017-09-02 03:20:18', '2017-09-02 03:20:18', null);
INSERT INTO `item_categories` VALUES ('16', null, 'ត្បូងពេជ្រ', '[\"http:\\/\\/127.0.0.1:8000\\/images\\/item_categories\\/48096_1504322481_4262.png\"]', 'ត្បូងពេជ្រ', 'ACTIVE', '2017-09-02 03:21:22', '2017-09-02 03:22:29', null);
INSERT INTO `item_categories` VALUES ('17', null, 'ត្បូងស្នាយ', '[\"http:\\/\\/127.0.0.1:8000\\/images\\/item_categories\\/79775_1504322497_4656.png\"]', 'ត្បូងស្នាយ', 'ACTIVE', '2017-09-02 03:21:37', '2017-09-02 03:22:07', null);
INSERT INTO `item_categories` VALUES ('18', null, 'ត្បូងពណ៏', '[\"images\\/item_categories\\/93446_1504322510_3430.png\"]', 'ត្បូងពណ៏', 'ACTIVE', '2017-09-02 03:21:50', '2017-09-02 03:21:50', null);
INSERT INTO `item_categories` VALUES ('19', null, 'ផ្លុក', '[\"images\\/item_categories\\/31426_1504322596_3896.png\"]', 'ផ្លុក', 'ACTIVE', '2017-09-02 03:23:16', '2017-09-02 03:23:16', null);

-- ----------------------------
-- Table structure for languages
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` text COLLATE utf8mb4_unicode_ci,
  `en` text COLLATE utf8mb4_unicode_ci,
  `km` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of languages
-- ----------------------------
INSERT INTO `languages` VALUES ('1', 'customer', 'Customer ', 'អតិថិជន', '2017-08-31 01:42:11', '2017-08-31 01:42:11');
INSERT INTO `languages` VALUES ('2', 'purchase', 'Purchase', 'ទិញចូល', '2017-08-31 01:42:11', '2017-08-31 01:42:11');
INSERT INTO `languages` VALUES ('3', 'profit', 'Profit', 'ចំណេញ', '2017-08-31 01:42:11', '2017-08-31 01:42:11');
INSERT INTO `languages` VALUES ('4', 'list_sale', 'List Sale', 'បញ្ជីនៃការលក់', '2017-08-31 01:42:11', '2017-08-31 01:42:11');
INSERT INTO `languages` VALUES ('5', 'today_sale', 'Today Sale', 'លក់ថ្ងៃនេះ', '2017-08-31 01:42:11', '2017-08-31 01:42:11');
INSERT INTO `languages` VALUES ('6', 'login', 'Login ', 'ចូលគណនី', '2017-08-31 01:42:11', '2017-08-31 01:42:11');
INSERT INTO `languages` VALUES ('7', 'register', 'Register', 'ចុះឈ្មោះ', '2017-08-31 01:42:11', '2017-08-31 01:42:11');
INSERT INTO `languages` VALUES ('8', 'pos', 'POS', 'ផ្ទាំងលក់', '2017-08-31 01:42:21', '2017-08-31 01:42:21');
INSERT INTO `languages` VALUES ('9', 'open_item', 'Open Item', 'បើកស្តុកដើមគ្រា', '2017-08-31 01:42:21', '2017-08-31 01:42:21');
INSERT INTO `languages` VALUES ('10', 'checklist', 'Checklist', 'ពិនិត្រទំនិញ', '2017-08-31 01:42:21', '2017-08-31 01:42:21');
INSERT INTO `languages` VALUES ('11', 'dashboard', 'Dashboard', 'ផ្ទាំងគ្រប់គ្រង', '2017-08-31 01:42:47', '2017-08-31 01:42:47');
INSERT INTO `languages` VALUES ('12', 'login_status', 'Login Status', 'ស្ថានភាពចូល', '2017-08-31 01:42:47', '2017-08-31 01:42:47');
INSERT INTO `languages` VALUES ('13', 'invoice', 'Invoice', 'វិក្កយបត្រ', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('14', 'report', 'Report', 'របាយការណ៍', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('15', 'open_stock', 'Open Stock', 'បើកស្តុក', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('16', 'production', 'Production', 'ការផលិតផល', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('17', 'check_list', 'Checklist', 'ពិនិត្រទំនិញ', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('18', 'area_chart', 'Area Chart', 'គំនូសតាងផ្ទៃ', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('19', 'logout', 'Logout', 'ចាកចេញ\r\n', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('20', 'online', 'Online', 'Online', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('21', 'table_report', 'Table Report', 'តារាងរបាយការណ៍', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('22', 'product', 'Product', 'ផលិតផល', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('23', 'product_category', 'Product Category', 'ប្រភេទ​ផលិតផល', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('24', 'unit', 'Unit', 'ខ្នាត', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('25', 'checklist_stock', 'Checklist Stock', 'ផ្ទៀងផ្ទាត់​ ទំនិញ', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('26', 'file_manager', 'File Manager', 'គ្រប់គ្រងឯកសារ', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('27', 'settings', 'Settings', 'ការកំណត់', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
INSERT INTO `languages` VALUES ('28', 'open_items', 'Open Items', 'ស្តុកដើមគ្រា', '2017-08-31 01:42:53', '2017-08-31 01:42:53');
INSERT INTO `languages` VALUES ('29', 'open_number', 'Open Number', 'លេខសំគាល់', '2017-08-31 01:42:54', '2017-08-31 01:42:54');
INSERT INTO `languages` VALUES ('30', 'open_date', 'Open Date', 'កាលបរិច្ឆេទ', '2017-08-31 01:42:54', '2017-08-31 01:42:54');
INSERT INTO `languages` VALUES ('31', 'description', 'Description', 'ការពិពណ៌នា', '2017-08-31 01:42:54', '2017-08-31 01:42:54');
INSERT INTO `languages` VALUES ('32', 'user', 'User', 'អ្នក​ប្រើ', '2017-08-31 01:42:54', '2017-08-31 01:42:54');
INSERT INTO `languages` VALUES ('33', 'created_at', 'Created at', 'ថ្ងៃបង្កើត', '2017-08-31 01:42:54', '2017-08-31 01:42:54');
INSERT INTO `languages` VALUES ('34', 'item_detail', 'Item Detail', 'លំអិតធាតុផ្សុំផលិតផល', '2017-08-31 01:42:57', '2017-08-31 01:42:57');
INSERT INTO `languages` VALUES ('35', 'item_id', 'Item ID', 'លេខ', '2017-08-31 01:42:57', '2017-08-31 01:42:57');
INSERT INTO `languages` VALUES ('36', 'code', 'Code', 'កូដ', '2017-08-31 01:42:58', '2017-08-31 01:42:58');
INSERT INTO `languages` VALUES ('37', 'title', 'Name', 'ឈ្មោះ', '2017-08-31 01:42:58', '2017-08-31 01:42:58');
INSERT INTO `languages` VALUES ('38', 'qty', 'Qty', 'ចំនួន', '2017-08-31 01:42:58', '2017-08-31 01:42:58');
INSERT INTO `languages` VALUES ('39', 'cost', 'Cost', 'ថ្លៃដើម', '2017-08-31 01:42:58', '2017-08-31 01:42:58');
INSERT INTO `languages` VALUES ('40', 'price', 'Price', 'តម្លៃ', '2017-08-31 01:42:58', '2017-08-31 01:42:58');
INSERT INTO `languages` VALUES ('41', 'discount', 'Discount', 'បញ្ចុះតម្លៃ', '2017-08-31 01:42:58', '2017-08-31 01:42:58');
INSERT INTO `languages` VALUES ('42', 'note', 'Note', 'ចំណាំ', '2017-08-31 01:42:58', '2017-08-31 01:42:58');
INSERT INTO `languages` VALUES ('43', 'purchases', 'Purchases', 'ទិញចូល', '2017-08-31 01:43:32', '2017-08-31 01:43:32');
INSERT INTO `languages` VALUES ('44', 'purchase_number', 'Purchase Number', 'លេខសំគាល់', '2017-08-31 01:43:32', '2017-08-31 01:43:32');
INSERT INTO `languages` VALUES ('45', 'customer_purchase', 'Customer Purchase', 'ឈ្មោះអតិថិជន', '2017-08-31 01:43:32', '2017-08-31 01:43:32');
INSERT INTO `languages` VALUES ('46', 'reference', 'Reference', 'សេចក្តីយោង', '2017-08-31 01:43:32', '2017-08-31 01:43:32');
INSERT INTO `languages` VALUES ('47', 'purchase_date', 'Purchase Date', 'កាលបរិច្ឆេទ', '2017-08-31 01:43:34', '2017-08-31 01:43:34');
INSERT INTO `languages` VALUES ('48', 'purchase_reference', 'Purchase Reference', 'សេចក្តីយោង', '2017-08-31 01:43:34', '2017-08-31 01:43:34');
INSERT INTO `languages` VALUES ('49', 'productions', 'Productions ', 'ផលិតកម្ម', '2017-08-31 02:03:11', '2017-08-31 02:03:11');
INSERT INTO `languages` VALUES ('50', 'production_number', 'Production Number', 'លេខសំគាល់', '2017-08-31 02:03:11', '2017-08-31 02:03:11');
INSERT INTO `languages` VALUES ('51', 'production_date', 'Production Date', 'កាលបរិច្ឆេទ', '2017-08-31 02:03:11', '2017-08-31 02:03:11');
INSERT INTO `languages` VALUES ('52', 'customer_production', 'Customer Production ', 'ផលិតកម្មអតិថិជន', '2017-08-31 02:03:11', '2017-08-31 02:03:11');
INSERT INTO `languages` VALUES ('53', 'production_reference', 'Production Reference', 'សេចក្តីយោង', '2017-08-31 02:03:13', '2017-08-31 02:03:13');
INSERT INTO `languages` VALUES ('54', 'units', 'Units', 'ខ្នាត', '2017-08-31 02:04:27', '2017-08-31 02:04:27');
INSERT INTO `languages` VALUES ('55', 'name', 'Name', 'ឈ្មោះ', '2017-08-31 02:04:27', '2017-08-31 02:04:27');
INSERT INTO `languages` VALUES ('57', 'list', 'List', 'បញ្ជី', '2017-08-31 02:05:08', '2017-08-31 02:05:08');
INSERT INTO `languages` VALUES ('58', 'detail', 'Detail', 'លំអិត', '2017-08-31 02:05:08', '2017-08-31 02:05:08');
INSERT INTO `languages` VALUES ('59', 'purchase_item', 'Purchase Item ', 'ទំនិញទិញចូល', '2017-08-31 02:05:08', '2017-08-31 02:05:08');
INSERT INTO `languages` VALUES ('60', 'production_item', 'Prduction Item ', 'ទំនិញទិញផលិត', '2017-08-31 02:05:08', '2017-08-31 02:05:08');
INSERT INTO `languages` VALUES ('61', 'sale_invoice', 'Sale Invoice', 'វិក័យប័ត្រលក់', '2017-08-31 02:05:08', '2017-08-31 02:05:08');
INSERT INTO `languages` VALUES ('62', 'item', 'Item ', 'ទំនិញទិញ', '2017-08-31 02:05:32', '2017-08-31 02:05:32');
INSERT INTO `languages` VALUES ('63', 'items', 'Items ', 'ទំនិញទិញ', '2017-08-31 02:05:32', '2017-08-31 02:05:32');
INSERT INTO `languages` VALUES ('64', 'category', 'Category', 'ប្រភេទ', '2017-08-31 02:05:32', '2017-08-31 02:05:32');
INSERT INTO `languages` VALUES ('65', 'image', 'Image', 'រូបភាព', '2017-08-31 02:05:32', '2017-08-31 02:05:32');
INSERT INTO `languages` VALUES ('66', 'item_category', 'Item Category', 'ប្រភេទទំនិញទិញ', '2017-08-31 02:05:33', '2017-08-31 02:05:33');
INSERT INTO `languages` VALUES ('67', 'item_categories', 'Item Categories', 'ប្រភេទទំនិញទិញ', '2017-08-31 02:05:33', '2017-08-31 02:05:33');
INSERT INTO `languages` VALUES ('68', 'status', 'Status', 'ស្ថានភាព', '2017-08-31 02:05:33', '2017-08-31 02:05:33');
INSERT INTO `languages` VALUES ('69', 'parent', 'Parent', 'Parent', '2017-08-31 02:05:35', '2017-08-31 02:05:35');
INSERT INTO `languages` VALUES ('70', 'item_code', 'Item Code', 'លេខកូដ', '2017-08-31 02:05:37', '2017-08-31 02:05:37');
INSERT INTO `languages` VALUES ('71', 'num_qty', 'Size', 'ទំហំ', '2017-08-31 07:04:51', '2017-08-31 07:04:51');
INSERT INTO `languages` VALUES ('72', 'checklists', 'Checklists', 'ពិនិត្រទំនិញ', '2017-08-31 07:45:16', '2017-08-31 07:45:16');
INSERT INTO `languages` VALUES ('73', 'checklist_number', 'Checklist Number', 'លេខសំគាល់', '2017-08-31 07:45:16', '2017-08-31 07:45:16');
INSERT INTO `languages` VALUES ('74', 'checklist_date', 'Checklist Date', 'កាលបរិច្ឆេទ', '2017-08-31 07:45:16', '2017-08-31 07:45:16');
INSERT INTO `languages` VALUES ('75', 'invoices', 'Invoices', 'វិក្កយបត្រ', '2017-08-31 07:46:07', '2017-08-31 07:46:07');
INSERT INTO `languages` VALUES ('76', 'invoice_number', 'Invoice Number', 'លេខសំគាល់', '2017-08-31 07:46:07', '2017-08-31 07:46:07');
INSERT INTO `languages` VALUES ('77', 'deposit', 'Deposit', 'ការដាក់ប្រាក់', '2017-08-31 07:46:07', '2017-08-31 07:46:07');
INSERT INTO `languages` VALUES ('78', 'complete_date', 'Complete Date', 'កាលបរិច្ឆេទ កំណត់', '2017-08-31 07:46:07', '2017-08-31 07:46:07');
INSERT INTO `languages` VALUES ('79', 'complete_price', 'Complete Price', 'តម្លៃពេញ', '2017-08-31 07:46:07', '2017-08-31 07:46:07');
INSERT INTO `languages` VALUES ('80', 'customers', 'Customers', 'អតិថិជន', '2017-08-31 07:56:02', '2017-08-31 07:56:02');
INSERT INTO `languages` VALUES ('81', 'gender', 'Gender', 'ភេទ', '2017-08-31 07:56:02', '2017-08-31 07:56:02');
INSERT INTO `languages` VALUES ('82', 'phone', 'Phone', 'ទូរស័ព្ទលេខ', '2017-08-31 07:56:02', '2017-08-31 07:56:02');
INSERT INTO `languages` VALUES ('83', 'select_report_type', 'Select Report Type', 'ប្រភេទរបាយការណ៍', '2017-08-31 08:38:26', '2017-08-31 08:38:26');
INSERT INTO `languages` VALUES ('84', 'reports', 'Reports', 'របាយការណ៍', '2017-08-31 08:38:27', '2017-08-31 08:38:27');
INSERT INTO `languages` VALUES ('85', 'invoice_date', 'Invoice Date', 'កាលបរិច្ឆេទវិក្កយបត្រ', '2017-08-31 08:38:56', '2017-08-31 08:38:56');
INSERT INTO `languages` VALUES ('86', 'customer_invoice', 'Customer Invoice', 'វិក័យប័ត្រអតិថិជន', '2017-08-31 08:38:56', '2017-08-31 08:38:56');
INSERT INTO `languages` VALUES ('87', 'amount', 'Amount', 'សរុប', '2017-08-31 14:08:13', '2017-08-31 14:08:13');
INSERT INTO `languages` VALUES ('88', 'first_page_you_see', 'First page you see', 'ទំព័រទីមួយដែលអ្នកឃើញ', '2017-09-01 12:18:12', '2017-09-01 12:18:12');
INSERT INTO `languages` VALUES ('89', 'logged_in', 'Logged in', 'បានចូល', '2017-09-01 12:18:12', '2017-09-01 12:18:12');
INSERT INTO `languages` VALUES ('90', 'administration', 'Administration', 'រដ្ឋបាល\r\n', '2017-09-01 12:18:13', '2017-09-01 12:18:13');
INSERT INTO `languages` VALUES ('91', 'all', 'All', '>', '2017-09-01 12:25:40', '2017-09-01 12:25:40');
INSERT INTO `languages` VALUES ('92', 'in_the_database', 'In the database', 'នៅក្នុងមូលដ្ឋានទិន្នន័យ', '2017-09-01 12:25:40', '2017-09-01 12:25:40');
INSERT INTO `languages` VALUES ('93', 'admin', 'Admin', 'អ្នកគ្រប់គ្រង', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('94', 'add', 'Add', 'បន្ថែម', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('95', 'actions', 'Actions', 'សកម្មភាព', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('96', 'emptytable', 'Empty Table', 'តារាងទទេ', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('97', 'info', 'Info', 'ព័ត៌មាន', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('98', 'infoempty', 'Info Empty', 'មិនមានព័ត៌មាន ', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('99', 'infofiltered', 'Info Filtered', 'ព័ត៌មាន Filtered', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('100', 'infopostfix', 'Info Postfix', 'ព័ត៌មាន Postfix', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('101', 'thousands', 'Thousands', ' ខ្ទង់ពាន់', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('102', 'lengthmenu', 'Length Menu', 'ម៉ឺនុយប្រវែង', '2017-09-01 12:25:41', '2017-09-01 12:25:41');
INSERT INTO `languages` VALUES ('103', 'loadingrecords', 'Loading Records', 'កំពុងផ្ទុកកំណត់ត្រា', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('104', 'processing', 'Processing', 'កំពុងដំណើរការ', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('105', 'search', 'Search', 'ស្វែងរក', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('106', 'zerorecords', 'Zero Records', 'កំណត់ត្រាសូន្យ', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('107', 'first', 'First', 'ដំបូង', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('108', 'last', 'Last', 'ចុងក្រោយ', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('109', 'next', 'Next', 'បន្ទាប់', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('110', 'previous', 'Previous', 'ពីមុន', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('111', 'sortascending', 'Sort Ascending', 'តម្រៀបតាមលំដាប់ឡើង', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('112', 'sortdescending', 'Sort Descending', 'តម្រៀបតាមលំដាប់ចុះក្រោម', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('113', 'copy', 'Copy', 'ច្បាប់ចម្លង', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('114', 'excel', 'Excel', 'Excel', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('115', 'csv', 'CSV', 'CSV', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('116', 'pdf', 'PDF', 'PDF', '2017-09-01 12:25:42', '2017-09-01 12:25:42');
INSERT INTO `languages` VALUES ('117', 'print', 'Print', 'បោះពុម្ព', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('118', 'column_visibility', 'Column Visibility', 'មើលឃើញជួរឈរ', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('119', 'delete_confirm', 'Delete Confirm', 'លុបការអះអាង', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('120', 'delete_confirmation_title', 'Delete Confirmation Title', 'លុបការបញ្ជាក់ចំណងជើង', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('121', 'delete_confirmation_message', 'Delete Confirmation Message', 'លុបសារបញ្ជាក់', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('122', 'delete_confirmation_not_title', 'Delete Confirmation Not Title', 'លុបការបញ្ជាក់មិនមានចំណងជើង', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('123', 'delete_confirmation_not_message', 'Delete Confirmation Not Message', 'លុបការបញ្ជាក់សារមិនពិត', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('124', 'delete_confirmation_not_deleted_title', 'Delete Confirmation Note Deleted Title', 'លុបសេចក្តីបញ្ជាក់ចំណាំចំណងជើង', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('125', 'delete_confirmation_not_deleted_message', 'Delete Confirmation Not Delete Message', 'លុបការអះអាងមិនលុបសារ', '2017-09-01 12:25:43', '2017-09-01 12:25:43');
INSERT INTO `languages` VALUES ('126', 'edit', 'Edit', 'កែសម្រួល', '2017-09-01 12:25:45', '2017-09-01 12:25:45');
INSERT INTO `languages` VALUES ('127', 'delete', 'Delete', 'លុប', '2017-09-01 12:25:45', '2017-09-01 12:25:45');
INSERT INTO `languages` VALUES ('128', 'back_to_all', 'Back to All', 'ត្រលប់ទៅទាំងអស់', '2017-09-01 12:28:06', '2017-09-01 12:28:06');
INSERT INTO `languages` VALUES ('129', 'add_a_new', 'Add a New', 'បន្ថែមថ្មី', '2017-09-01 12:28:07', '2017-09-01 12:28:07');
INSERT INTO `languages` VALUES ('132', 'sign_in_to_start_your_session', 'Sign in to start your session', 'បំពេញនូវអ៊ីមែល និង ពាក្យសម្ងាត់ ដើម្បីចូលទៅកានផ្ទាំងលក់', '2017-09-02 02:16:22', '2017-09-02 02:16:22');
INSERT INTO `languages` VALUES ('133', 'email', 'Email', 'អ៊ីមែល', '2017-09-02 02:16:22', '2017-09-02 02:16:22');
INSERT INTO `languages` VALUES ('134', 'password', 'Password', 'ពាក្យសម្ងាត់', '2017-09-02 02:16:22', '2017-09-02 02:16:22');
INSERT INTO `languages` VALUES ('135', 'remember_me', 'Remember Me', 'ចងចាំខ្ញុំ', '2017-09-02 02:16:22', '2017-09-02 02:16:22');
INSERT INTO `languages` VALUES ('136', 'stock_', 'Stock', 'ការគ្រប់គ្រង', '2017-09-02 02:18:38', '2017-09-02 02:18:38');
INSERT INTO `languages` VALUES ('137', 'management_', 'Management', 'ស្តុក', '2017-09-02 02:18:38', '2017-09-02 02:18:38');
INSERT INTO `languages` VALUES ('138', 'email_address', 'Email Address', 'អាស័យដ្ឋានអ៊ីមែល', '2017-09-02 02:24:44', '2017-09-02 02:24:44');
INSERT INTO `languages` VALUES ('139', 'confirm_password', 'Confirm Password', 'បញ្ជាក់ពាក្យសម្ងាត់', '2017-09-02 02:24:44', '2017-09-02 02:24:44');
INSERT INTO `languages` VALUES ('140', 'search_here', null, null, '2017-09-02 02:30:43', '2017-09-02 02:30:43');
INSERT INTO `languages` VALUES ('141', 'choose_file', null, null, '2017-09-02 02:43:17', '2017-09-02 02:43:17');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('22', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('23', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('24', '2015_08_04_131614_create_settings_table', '1');
INSERT INTO `migrations` VALUES ('25', '2017_07_28_090816_create_items_table', '1');
INSERT INTO `migrations` VALUES ('26', '2017_07_28_091022_create_item_categories_table', '1');
INSERT INTO `migrations` VALUES ('27', '2017_07_28_091525_create_customers_table', '1');
INSERT INTO `migrations` VALUES ('28', '2017_07_28_092103_create_open_items_table', '1');
INSERT INTO `migrations` VALUES ('29', '2017_07_28_092709_create_open_items_detail_table', '1');
INSERT INTO `migrations` VALUES ('30', '2017_07_28_094725_create_purchase_table', '1');
INSERT INTO `migrations` VALUES ('31', '2017_07_28_124724_create_items_detail_table', '1');
INSERT INTO `migrations` VALUES ('32', '2017_07_28_131251_create_items_transaction_table', '1');
INSERT INTO `migrations` VALUES ('33', '2017_07_28_132627_create_purchase_detail_table', '1');
INSERT INTO `migrations` VALUES ('34', '2017_07_28_133140_create_invoice_table', '1');
INSERT INTO `migrations` VALUES ('35', '2017_07_28_134724_create_invoice_detail_table', '1');
INSERT INTO `migrations` VALUES ('36', '2017_08_16_141216_create_production_table', '1');
INSERT INTO `migrations` VALUES ('37', '2017_08_16_142321_create_production_detail_table', '1');
INSERT INTO `migrations` VALUES ('38', '2017_08_22_093239_create_checklists_table', '1');
INSERT INTO `migrations` VALUES ('39', '2017_08_22_093318_create_checklist_detail_table', '1');
INSERT INTO `migrations` VALUES ('40', '2017_08_23_062245_create_sessions_table', '1');
INSERT INTO `migrations` VALUES ('41', '2017_08_28_132015_create_units_table', '1');
INSERT INTO `migrations` VALUES ('42', '2017_08_30_151921_create_languages_table', '1');

-- ----------------------------
-- Table structure for open_items
-- ----------------------------
DROP TABLE IF EXISTS `open_items`;
CREATE TABLE `open_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `open_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_date_` date DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of open_items
-- ----------------------------
INSERT INTO `open_items` VALUES ('1', 'OP00001', '2017-10-02', 'open one', null, '2017-09-02 04:18:53', '2017-09-02 04:18:53', null);
INSERT INTO `open_items` VALUES ('2', 'OP00002', '2017-10-02', 'open two', null, '2017-09-02 04:21:00', '2017-09-02 04:21:00', null);
INSERT INTO `open_items` VALUES ('3', 'OP00003', '2017-09-02', 'open three', null, '2017-09-02 04:56:17', '2017-09-02 04:56:17', null);

-- ----------------------------
-- Table structure for open_items_detail
-- ----------------------------
DROP TABLE IF EXISTS `open_items_detail`;
CREATE TABLE `open_items_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_qty` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `open_items_detail_ref_id_index` (`ref_id`),
  KEY `open_items_detail_item_id_index` (`item_id`),
  KEY `open_items_detail_title_index` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of open_items_detail
-- ----------------------------
INSERT INTO `open_items_detail` VALUES ('1', '1', '1', 'PT00001', 'Platinum 75%', '5', '0', '2', '1200', '0', '0', '', '[]', '2017-09-02 04:18:53', '2017-09-02 04:18:53', null);
INSERT INTO `open_items_detail` VALUES ('2', '1', '2', 'D00001', 'Diamond 2li', '2', '2', '200', '20', '0', '0', '', '[]', '2017-09-02 04:18:53', '2017-09-02 04:18:53', null);
INSERT INTO `open_items_detail` VALUES ('6', '2', '3', 'PT00002', 'Platinum 75%', '4', '0', '4', '120', '0', '0', '', '[]', '2017-09-02 04:25:18', '2017-09-02 04:25:18', null);
INSERT INTO `open_items_detail` VALUES ('7', '3', '4', 'R00001', 'Ring For Man', '7', '0', '2', '1360', '0', '0', '', '[{\"item_code\":\"D00001\",\"title\":\"Diamond 2li\",\"description\":\"\",\"unit\":\"2\",\"num_qty\":\"\",\"qty\":\"100\",\"cost\":\"20\",\"note\":\"\",\"item_id\":\"2\"},{\"item_code\":\"PT00002\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"4\",\"num_qty\":\"\",\"qty\":\"6\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"3\"}]', '2017-09-02 04:56:18', '2017-09-02 04:56:18', null);
INSERT INTO `open_items_detail` VALUES ('8', '3', '5', 'R00002', 'Ring Form Women', '7', '0', '4', '1240', '0', '0', '', '[{\"item_code\":\"D00001\",\"title\":\"Diamond 2li\",\"description\":\"\",\"unit\":\"2\",\"num_qty\":\"2\",\"qty\":\"200\",\"cost\":\"20\",\"note\":\"\",\"item_id\":\"2\"},{\"item_code\":\"PT00002\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"4\",\"num_qty\":\"\",\"qty\":\"8\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"3\"}]', '2017-09-02 04:56:18', '2017-09-02 04:56:18', null);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for production
-- ----------------------------
DROP TABLE IF EXISTS `production`;
CREATE TABLE `production` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `production_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_date_` date DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of production
-- ----------------------------

-- ----------------------------
-- Table structure for production_detail
-- ----------------------------
DROP TABLE IF EXISTS `production_detail`;
CREATE TABLE `production_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_qty` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `production_detail_ref_id_index` (`ref_id`),
  KEY `production_detail_item_id_index` (`item_id`),
  KEY `production_detail_title_index` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of production_detail
-- ----------------------------

-- ----------------------------
-- Table structure for purchase
-- ----------------------------
DROP TABLE IF EXISTS `purchase`;
CREATE TABLE `purchase` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `purchase_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_date_` date DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of purchase
-- ----------------------------

-- ----------------------------
-- Table structure for purchase_detail
-- ----------------------------
DROP TABLE IF EXISTS `purchase_detail`;
CREATE TABLE `purchase_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_qty` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchase_detail_ref_id_index` (`ref_id`),
  KEY `purchase_detail_item_id_index` (`item_id`),
  KEY `purchase_detail_title_index` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of purchase_detail
-- ----------------------------

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sessions
-- ----------------------------

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` double DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES ('1', 'សីុ', '1', null, '2017-09-02 02:42:31', '2017-09-02 02:47:23', null);
INSERT INTO `units` VALUES ('2', 'លី', '1', null, '2017-09-02 02:42:50', '2017-09-02 02:47:41', null);
INSERT INTO `units` VALUES ('3', 'ហ៊ុន', '1', null, '2017-09-02 02:44:43', '2017-09-02 02:47:59', null);
INSERT INTO `units` VALUES ('4', 'ជី', '1', null, '2017-09-02 02:45:50', '2017-09-02 02:48:15', null);
INSERT INTO `units` VALUES ('5', 'តម្លឹង', '1', null, '2017-09-02 02:46:34', '2017-09-02 02:46:34', null);
INSERT INTO `units` VALUES ('6', 'ក្រាដ', '1', null, '2017-09-02 02:46:54', '2017-09-02 02:48:37', null);
INSERT INTO `units` VALUES ('7', 'ឯកតា', '1', null, '2017-09-02 02:48:58', '2017-09-02 02:48:58', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@gmail.com', '$2y$10$WzzwGA6DbsFMVUEeIgunMOnphM5vhrzQlga1eCTbvzVpqH.mbQeMq', 'NXLkXlR98DxG7gph3is5DDntGE3xYSgi9d6FnnlOaVqDkKLIA3U9RXlDrxsx', '2017-09-02 02:28:42', '2017-09-02 02:28:42');
