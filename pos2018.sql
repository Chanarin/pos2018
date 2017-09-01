/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : pos2018

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2017-09-01 00:46:09
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of checklists
-- ----------------------------

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
  `num_qty` double(255,0) DEFAULT NULL,
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
  KEY `checklist_detail_ref_id_index` (`ref_id`),
  KEY `checklist_detail_item_id_index` (`item_id`),
  KEY `checklist_detail_title_index` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of checklist_detail
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('2', '1', 'R00001', 'Ring for Man', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/87990_1504196264_4988.png\"]', '4', '10000', '2017-08-31 14:32:47', '2017-08-31 16:17:58', null);
INSERT INTO `items` VALUES ('3', '9', 'D00001', 'Diamond1.5li', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/46293_1504192693_2671.png\"]', '1', '1000', '2017-08-31 14:32:47', '2017-08-31 16:10:23', null);
INSERT INTO `items` VALUES ('4', '14', 'CS00001', 'Crystal', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/15370_1504192708_3010.png\"]', '1', '10000', '2017-08-31 14:32:47', '2017-08-31 16:17:00', null);
INSERT INTO `items` VALUES ('5', '12', 'PT00001', 'Platinum 75%', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/63699_1504192749_1156.png\"]', '3', '1000', '2017-08-31 14:32:47', '2017-08-31 16:33:23', null);
INSERT INTO `items` VALUES ('6', '4', 'E00001', 'Earring', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/33271_1504192767_1037.png\"]', '4', '1000', '2017-08-31 14:51:15', '2017-08-31 16:33:33', null);
INSERT INTO `items` VALUES ('7', '9', 'D00003', 'Diamond3li', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/37831_1504192786_4649.png\"]', '1', '1000', '2017-08-31 14:56:44', '2017-08-31 16:33:42', null);
INSERT INTO `items` VALUES ('8', '1', 'R00002', 'Ring For Man', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/70765_1504194222_4065.png\"]', '4', '1000', '2017-08-31 15:41:06', '2017-08-31 16:33:50', null);
INSERT INTO `items` VALUES ('9', '1', 'D00002', 'Diamond4li', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/87515_1504194246_3993.png\"]', '1', '1000', '2017-08-31 15:41:06', '2017-08-31 16:34:00', null);
INSERT INTO `items` VALUES ('10', '1', 'D00004', 'Diamond3li', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/64903_1504194270_2679.png\"]', '1', '1000', '2017-08-31 15:41:07', '2017-08-31 16:34:10', null);
INSERT INTO `items` VALUES ('11', '1', 'R00003', 'Ring For Man', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/70963_1504194295_1295.png\"]', '4', '1000', '2017-08-31 15:41:07', '2017-08-31 16:34:19', null);
INSERT INTO `items` VALUES ('12', '1', 'R00004', 'Ring For Man', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/40731_1504194315_2650.png\"]', '4', '1000', '2017-08-31 15:41:07', '2017-08-31 16:34:30', null);
INSERT INTO `items` VALUES ('13', '1', 'D00005', 'Diamond5li', null, '[\"http:\\/\\/127.0.0.1:8000\\/images\\/items\\/47291_1504194329_1654.png\"]', '1', '1000', '2017-08-31 15:41:07', '2017-08-31 16:34:38', null);
INSERT INTO `items` VALUES ('14', '1', 'PT00002', 'Platinum70%', null, '[\"images\\/items\\/30264_1504194344_4608.png\"]', '3', '1000', '2017-08-31 15:41:07', '2017-08-31 15:45:44', null);
INSERT INTO `items` VALUES ('15', '1', 'R00005', 'Ring For Man', null, '[\"images\\/items\\/60590_1504194358_1319.png\"]', '4', '1000', '2017-08-31 15:41:08', '2017-08-31 15:45:58', null);
INSERT INTO `items` VALUES ('16', '1', 'R00006', 'Ring For Man', null, '[\"images\\/items\\/36402_1504194372_3310.png\"]', '4', '1000', '2017-08-31 15:41:08', '2017-08-31 15:46:12', null);
INSERT INTO `items` VALUES ('17', '1', 'R00007', 'Ring For Man', null, '[\"images\\/items\\/37500_1504194386_2646.png\"]', '4', '1000', '2017-08-31 15:41:08', '2017-08-31 15:46:26', null);
INSERT INTO `items` VALUES ('18', '1', 'R00008', 'Ring For Man', null, '[\"images\\/items\\/44524_1504194400_3294.png\"]', '4', '1000', '2017-08-31 15:41:08', '2017-08-31 15:46:40', null);
INSERT INTO `items` VALUES ('19', '1', 'R00009', 'Ring For Man', null, '[\"images\\/items\\/18643_1504194419_2549.png\"]', '4', '1000', '2017-08-31 15:41:09', '2017-08-31 15:46:59', null);
INSERT INTO `items` VALUES ('20', '1', 'R000010', 'Ring For Man', null, '[\"images\\/items\\/95295_1504194434_2660.png\"]', '4', '1000', '2017-08-31 15:41:09', '2017-08-31 15:47:14', null);
INSERT INTO `items` VALUES ('21', '1', 'R000011', 'Ring For Man', null, '[\"images\\/items\\/62957_1504194448_4668.png\"]', '4', '1000', '2017-08-31 15:41:09', '2017-08-31 15:47:28', null);
INSERT INTO `items` VALUES ('22', '1', 'R000012', 'Ring For Man', null, '[\"images\\/items\\/46415_1504194465_3981.png\"]', '4', '1000', '2017-08-31 15:41:09', '2017-08-31 15:47:45', null);
INSERT INTO `items` VALUES ('23', '1', 'R000014', 'Ring For Man', null, '[\"images\\/items\\/37745_1504194479_4441.png\"]', '4', '1000', '2017-08-31 15:41:10', '2017-08-31 15:47:59', null);
INSERT INTO `items` VALUES ('24', '1', 'R000015', 'Ring For Man', null, '[\"images\\/items\\/16706_1504194494_4077.png\"]', '4', '1000', '2017-08-31 15:41:10', '2017-08-31 15:48:14', null);
INSERT INTO `items` VALUES ('25', '1', 'R000016', 'Ring For Man', null, '[\"images\\/items\\/40894_1504194510_1184.png\"]', '4', '1000', '2017-08-31 15:41:10', '2017-08-31 15:48:30', null);

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
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_qty` double DEFAULT NULL,
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
  KEY `items_transaction_qty_index` (`qty`),
  KEY `items_transaction_cost_index` (`cost`),
  KEY `items_transaction_price_index` (`price`),
  KEY `items_transaction_discount_index` (`discount`),
  KEY `items_transaction_tran_date_index` (`tran_date`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of items_transaction
-- ----------------------------
INSERT INTO `items_transaction` VALUES ('7', '2', 'open_items', '2', '4', '0', '1', '365', '0', '0', '2017-08-31', '2017-08-31 14:42:20', '2017-08-31 14:42:20');
INSERT INTO `items_transaction` VALUES ('14', '3', 'open_items', '2', '4', '1', '2', '120', '0', '0', '2017-08-31', '2017-08-31 14:56:44', '2017-08-31 14:56:44');
INSERT INTO `items_transaction` VALUES ('15', '3', 'open_items', '3', '1', '2', '5', '10', '0', '0', '2017-08-31', '2017-08-31 14:56:44', '2017-08-31 14:56:44');
INSERT INTO `items_transaction` VALUES ('16', '3', 'open_items', '6', '4', '0', '1', '480', '0', '0', '2017-08-31', '2017-08-31 14:56:44', '2017-08-31 14:56:44');
INSERT INTO `items_transaction` VALUES ('32', '4', 'open_items', '8', '4', '0', '1', '928', '0', '0', '2017-08-31', '2017-08-31 15:41:52', '2017-08-31 15:41:52');
INSERT INTO `items_transaction` VALUES ('33', '4', 'open_items', '11', '4', '0', '2', '120', '0', '0', '2017-08-31', '2017-08-31 15:41:52', '2017-08-31 15:41:52');
INSERT INTO `items_transaction` VALUES ('34', '4', 'open_items', '12', '4', '0', '1', '814', '0', '0', '2017-08-31', '2017-08-31 15:41:52', '2017-08-31 15:41:52');
INSERT INTO `items_transaction` VALUES ('35', '4', 'open_items', '15', '4', '0', '1', '240', '0', '0', '2017-08-31', '2017-08-31 15:41:52', '2017-08-31 15:41:52');
INSERT INTO `items_transaction` VALUES ('36', '4', 'open_items', '16', '4', '0', '1', '240', '0', '0', '2017-08-31', '2017-08-31 15:41:53', '2017-08-31 15:41:53');
INSERT INTO `items_transaction` VALUES ('37', '4', 'open_items', '17', '4', '0', '1', '240', '0', '0', '2017-08-31', '2017-08-31 15:41:53', '2017-08-31 15:41:53');
INSERT INTO `items_transaction` VALUES ('38', '4', 'open_items', '18', '4', '0', '1', '240', '0', '0', '2017-08-31', '2017-08-31 15:41:53', '2017-08-31 15:41:53');
INSERT INTO `items_transaction` VALUES ('39', '4', 'open_items', '19', '4', '0', '1', '360', '0', '0', '2017-08-31', '2017-08-31 15:41:53', '2017-08-31 15:41:53');
INSERT INTO `items_transaction` VALUES ('40', '4', 'open_items', '20', '4', '0', '1', '480', '0', '0', '2017-08-31', '2017-08-31 15:41:53', '2017-08-31 15:41:53');
INSERT INTO `items_transaction` VALUES ('41', '4', 'open_items', '21', '4', '0', '1', '600', '0', '0', '2017-08-31', '2017-08-31 15:41:53', '2017-08-31 15:41:53');
INSERT INTO `items_transaction` VALUES ('42', '4', 'open_items', '22', '4', '0', '1', '720', '0', '0', '2017-08-31', '2017-08-31 15:41:53', '2017-08-31 15:41:53');
INSERT INTO `items_transaction` VALUES ('43', '4', 'open_items', '4', '1', '1', '3', '0.5', '0', '0', '2017-08-31', '2017-08-31 15:41:54', '2017-08-31 15:41:54');
INSERT INTO `items_transaction` VALUES ('44', '4', 'open_items', '23', '4', '0', '1', '360', '0', '0', '2017-08-31', '2017-08-31 15:41:54', '2017-08-31 15:41:54');
INSERT INTO `items_transaction` VALUES ('45', '4', 'open_items', '24', '4', '0', '1', '960', '0', '0', '2017-08-31', '2017-08-31 15:41:54', '2017-08-31 15:41:54');
INSERT INTO `items_transaction` VALUES ('46', '4', 'open_items', '25', '4', '0', '1', '480', '0', '0', '2017-08-31', '2017-08-31 15:41:54', '2017-08-31 15:41:54');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of item_categories
-- ----------------------------
INSERT INTO `item_categories` VALUES ('1', null, 'ចិញ្ចៀន', '[\"images\\/item_categories\\/67952_1504145337_2386.png\"]', null, 'ACTIVE', '2017-08-31 02:08:58', '2017-08-31 02:08:58', null);
INSERT INTO `item_categories` VALUES ('2', null, 'កងដៃ', '[\"images\\/item_categories\\/84433_1504148951_2711.png\"]', null, 'ACTIVE', '2017-08-31 02:09:15', '2017-08-31 03:09:11', null);
INSERT INTO `item_categories` VALUES ('3', null, 'ខ្សែក', '[\"images\\/item_categories\\/20909_1504148968_1831.png\"]', null, 'ACTIVE', '2017-08-31 02:09:32', '2017-08-31 03:09:28', null);
INSERT INTO `item_categories` VALUES ('4', null, 'ក្រវិល', '[\"images\\/item_categories\\/91409_1504148987_3004.png\"]', null, 'ACTIVE', '2017-08-31 02:09:49', '2017-08-31 03:09:47', null);
INSERT INTO `item_categories` VALUES ('5', null, 'ដង្កៀប', '[\"images\\/item_categories\\/35843_1504145414_2344.png\"]', null, 'ACTIVE', '2017-08-31 02:10:14', '2017-08-31 02:10:14', null);
INSERT INTO `item_categories` VALUES ('6', null, 'បន្តោង', '[\"images\\/item_categories\\/79412_1504149000_2362.png\"]', null, 'ACTIVE', '2017-08-31 02:10:31', '2017-08-31 03:10:00', null);
INSERT INTO `item_categories` VALUES ('7', null, 'ខ្សែជើង', '[\"images\\/item_categories\\/16709_1504145466_3430.png\"]', null, 'ACTIVE', '2017-08-31 02:11:06', '2017-08-31 02:11:06', null);
INSERT INTO `item_categories` VALUES ('8', null, 'ខ្សែចង្កេះ', '[\"images\\/item_categories\\/36364_1504145488_2617.png\"]', null, 'ACTIVE', '2017-08-31 02:11:28', '2017-08-31 02:11:28', null);
INSERT INTO `item_categories` VALUES ('9', null, 'ពេជ្រ', '[\"images\\/item_categories\\/82177_1504145607_1548.png\"]', null, 'ACTIVE', '2017-08-31 02:13:27', '2017-08-31 02:13:27', null);
INSERT INTO `item_categories` VALUES ('10', null, 'ត្បូងពណ៏', '[\"images\\/item_categories\\/84723_1504145633_4869.png\"]', null, 'ACTIVE', '2017-08-31 02:13:53', '2017-08-31 02:13:53', null);
INSERT INTO `item_categories` VALUES ('11', null, 'មាស', '[\"images\\/item_categories\\/80176_1504145648_2095.png\"]', null, 'ACTIVE', '2017-08-31 02:14:08', '2017-08-31 02:14:08', null);
INSERT INTO `item_categories` VALUES ('12', null, 'ផ្លាទីន', '[\"images\\/item_categories\\/77698_1504145666_3522.png\"]', null, 'ACTIVE', '2017-08-31 02:14:26', '2017-08-31 02:14:26', null);
INSERT INTO `item_categories` VALUES ('13', null, 'នាឡិកា', '[\"images\\/item_categories\\/80389_1504145689_3868.png\"]', null, 'ACTIVE', '2017-08-31 02:14:50', '2017-08-31 02:14:50', null);
INSERT INTO `item_categories` VALUES ('14', null, 'ត្បូងស្នាយ', '[\"images\\/item_categories\\/71053_1504145726_1707.png\"]', null, 'ACTIVE', '2017-08-31 02:15:26', '2017-08-31 02:15:26', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
INSERT INTO `languages` VALUES ('24', 'unit', 'Unit', 'ឯកតា', '2017-08-31 01:42:48', '2017-08-31 01:42:48');
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
INSERT INTO `languages` VALUES ('54', 'units', 'Units', 'ឯកតា', '2017-08-31 02:04:27', '2017-08-31 02:04:27');
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

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2015_08_04_131614_create_settings_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_07_28_090816_create_items_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_07_28_091022_create_item_categories_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_07_28_091525_create_customers_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_07_28_092103_create_open_items_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_07_28_092709_create_open_items_detail_table', '1');
INSERT INTO `migrations` VALUES ('9', '2017_07_28_094725_create_purchase_table', '1');
INSERT INTO `migrations` VALUES ('10', '2017_07_28_124724_create_items_detail_table', '1');
INSERT INTO `migrations` VALUES ('11', '2017_07_28_131251_create_items_transaction_table', '1');
INSERT INTO `migrations` VALUES ('12', '2017_07_28_132627_create_purchase_detail_table', '1');
INSERT INTO `migrations` VALUES ('13', '2017_07_28_133140_create_invoice_table', '1');
INSERT INTO `migrations` VALUES ('14', '2017_07_28_134724_create_invoice_detail_table', '1');
INSERT INTO `migrations` VALUES ('15', '2017_08_16_141216_create_production_table', '1');
INSERT INTO `migrations` VALUES ('16', '2017_08_16_142321_create_production_detail_table', '1');
INSERT INTO `migrations` VALUES ('17', '2017_08_22_093239_create_checklists_table', '1');
INSERT INTO `migrations` VALUES ('18', '2017_08_22_093318_create_checklist_detail_table', '1');
INSERT INTO `migrations` VALUES ('19', '2017_08_23_062245_create_sessions_table', '1');
INSERT INTO `migrations` VALUES ('20', '2017_08_28_132015_create_units_table', '1');
INSERT INTO `migrations` VALUES ('21', '2017_08_30_151921_create_languages_table', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of open_items
-- ----------------------------
INSERT INTO `open_items` VALUES ('2', 'ON00001', '2017-08-31', 'open 1', null, '2017-08-31 14:32:46', '2017-08-31 14:42:20', null);
INSERT INTO `open_items` VALUES ('3', 'ON00002', '2017-08-31', 'open 2', null, '2017-08-31 14:51:14', '2017-08-31 14:54:45', null);
INSERT INTO `open_items` VALUES ('4', 'OP00003', '2017-08-31', 'open 3', null, '2017-08-31 15:41:06', '2017-08-31 15:41:51', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of open_items_detail
-- ----------------------------
INSERT INTO `open_items_detail` VALUES ('7', '2', '2', 'R00001', 'Ring for Man', '4', '0', '1', '365', '0', '0', '', '[{\"item_code\":\"D00001\",\"title\":\"Diamond\",\"description\":\"\",\"unit\":\"1\",\"num_qty\":\"2\",\"qty\":\"6\",\"cost\":\"20\",\"note\":\"\",\"item_id\":\"3\"},{\"item_code\":\"CS00001\",\"title\":\"Crystal1\",\"description\":\"\",\"unit\":\"1\",\"num_qty\":\"2\",\"qty\":\"10\",\"cost\":\"0.5\",\"note\":\"\",\"item_id\":\"4\"},{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"1\",\"qty\":\"2\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 14:42:20', '2017-08-31 14:42:20', null);
INSERT INTO `open_items_detail` VALUES ('14', '3', '2', 'R00001', 'Ring for Man', '4', '1', '2', '120', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"2\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 14:56:44', '2017-08-31 14:56:44', null);
INSERT INTO `open_items_detail` VALUES ('15', '3', '3', 'D00001', 'Diamond1.5li', '1', '2', '5', '10', '0', '0', '', '[]', '2017-08-31 14:56:44', '2017-08-31 14:56:44', null);
INSERT INTO `open_items_detail` VALUES ('16', '3', '6', 'E00001', 'Earring', '4', '0', '1', '480', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"2\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"},{\"item_code\":\"D00003\",\"title\":\"Diamond3li\",\"description\":\"\",\"unit\":\"1\",\"num_qty\":\"3\",\"qty\":\"4\",\"cost\":\"60\",\"note\":\"\",\"item_id\":7}]', '2017-08-31 14:56:44', '2017-08-31 14:56:44', null);
INSERT INTO `open_items_detail` VALUES ('32', '4', '8', 'R00002', 'Ring For Man', '4', '0', '1', '928', '0', '0', '', '[{\"item_code\":\"D00002\",\"title\":\"Diamond4li\",\"description\":\"\",\"unit\":\"1\",\"num_qty\":\"6\",\"qty\":\"1\",\"cost\":\"800\",\"note\":\"\",\"item_id\":\"9\"},{\"item_code\":\"D00004\",\"title\":\"Diamond3li\",\"description\":\"\",\"unit\":\"1\",\"num_qty\":\"3\",\"qty\":\"4\",\"cost\":\"32\",\"note\":\"\",\"item_id\":\"10\"}]', '2017-08-31 15:41:52', '2017-08-31 15:41:52', null);
INSERT INTO `open_items_detail` VALUES ('33', '4', '11', 'R00003', 'Ring For Man', '4', '0', '2', '120', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"2\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:52', '2017-08-31 15:41:52', null);
INSERT INTO `open_items_detail` VALUES ('34', '4', '12', 'R00004', 'Ring For Man', '4', '0', '1', '814', '0', '0', '', '[{\"item_code\":\"D00005\",\"title\":\"Diamond5li\",\"description\":\"\",\"unit\":\"1\",\"num_qty\":\"5\",\"qty\":\"1\",\"cost\":\"600\",\"note\":\"\",\"item_id\":\"13\"},{\"item_code\":\"PT00002\",\"title\":\"Platinum70%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"0\",\"qty\":\"2\",\"cost\":\"107\",\"note\":\"\",\"item_id\":\"14\"}]', '2017-08-31 15:41:52', '2017-08-31 15:41:52', null);
INSERT INTO `open_items_detail` VALUES ('35', '4', '15', 'R00005', 'Ring For Man', '4', '0', '1', '240', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"2\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:52', '2017-08-31 15:41:52', null);
INSERT INTO `open_items_detail` VALUES ('36', '4', '16', 'R00006', 'Ring For Man', '4', '0', '1', '240', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"2\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:53', '2017-08-31 15:41:53', null);
INSERT INTO `open_items_detail` VALUES ('37', '4', '17', 'R00007', 'Ring For Man', '4', '0', '1', '240', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"2\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:53', '2017-08-31 15:41:53', null);
INSERT INTO `open_items_detail` VALUES ('38', '4', '18', 'R00008', 'Ring For Man', '4', '0', '1', '240', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"2\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:53', '2017-08-31 15:41:53', null);
INSERT INTO `open_items_detail` VALUES ('39', '4', '19', 'R00009', 'Ring For Man', '4', '0', '1', '360', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"3\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:53', '2017-08-31 15:41:53', null);
INSERT INTO `open_items_detail` VALUES ('40', '4', '20', 'R000010', 'Ring For Man', '4', '0', '1', '480', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"4\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:53', '2017-08-31 15:41:53', null);
INSERT INTO `open_items_detail` VALUES ('41', '4', '21', 'R000011', 'Ring For Man', '4', '0', '1', '600', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"5\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:53', '2017-08-31 15:41:53', null);
INSERT INTO `open_items_detail` VALUES ('42', '4', '22', 'R000012', 'Ring For Man', '4', '0', '1', '720', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"6\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:53', '2017-08-31 15:41:53', null);
INSERT INTO `open_items_detail` VALUES ('43', '4', '4', 'CS00001', 'Crystal', '1', '1', '3', '0.5', '0', '0', '', '[]', '2017-08-31 15:41:53', '2017-08-31 15:41:53', null);
INSERT INTO `open_items_detail` VALUES ('44', '4', '23', 'R000014', 'Ring For Man', '4', '0', '1', '360', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"3\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:54', '2017-08-31 15:41:54', null);
INSERT INTO `open_items_detail` VALUES ('45', '4', '24', 'R000015', 'Ring For Man', '4', '0', '1', '960', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"8\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:54', '2017-08-31 15:41:54', null);
INSERT INTO `open_items_detail` VALUES ('46', '4', '25', 'R000016', 'Ring For Man', '4', '0', '1', '480', '0', '0', '', '[{\"item_code\":\"PT00001\",\"title\":\"Platinum 75%\",\"description\":\"\",\"unit\":\"3\",\"num_qty\":\"\",\"qty\":\"4\",\"cost\":\"120\",\"note\":\"\",\"item_id\":\"5\"}]', '2017-08-31 15:41:54', '2017-08-31 15:41:54', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of purchase
-- ----------------------------
INSERT INTO `purchase` VALUES ('1', null, null, null, null, null, null, null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES ('1', 'លី', '1', null, '2017-08-31 02:04:42', '2017-08-31 02:04:42', null);
INSERT INTO `units` VALUES ('2', 'ក្រាដ', '1', null, '2017-08-31 02:16:05', '2017-08-31 02:17:12', null);
INSERT INTO `units` VALUES ('3', 'ជី', '1', null, '2017-08-31 02:17:01', '2017-08-31 02:17:01', null);
INSERT INTO `units` VALUES ('4', 'ឯកតា', '1', null, '2017-08-31 02:17:40', '2017-08-31 02:17:40', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'admin@gmail.com', '$2y$10$TgiyGV76N1Jz41OD9dKeEuDSWrYlGmSMAqWbJjqr/3V0me7PjMA0q', null, '2017-08-31 01:42:47', '2017-08-31 01:42:47');
