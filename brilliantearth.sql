-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 11:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brilliantearth`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Rings', 'rings', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(2, 'Necklaces', 'necklaces', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(3, 'Bracelets', 'bracelets', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(4, 'Earrings', 'earrings', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(5, 'Churies', 'churies', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(6, 'Jewellery Sets', 'jewellery', '2019-07-24 07:32:48', '2019-07-24 07:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 4, NULL, NULL),
(12, 13, 4, NULL, NULL),
(13, 14, 4, NULL, NULL),
(14, 15, 4, NULL, NULL),
(15, 16, 2, NULL, NULL),
(16, 16, 3, NULL, NULL),
(17, 17, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) DEFAULT NULL,
  `percent_off` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent_off`, `created_at`, `updated_at`) VALUES
(1, 'ABC123', 'fixed', 3000, NULL, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(2, 'DEF456', 'percent', NULL, 50, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(3, 'Coupon', 'percent', NULL, 10, '2019-07-24 15:17:00', '2019-07-24 15:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '{}', 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(24, 4, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(25, 4, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(27, 4, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(28, 4, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(29, 4, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(30, 4, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(31, 4, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(32, 4, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(33, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(34, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(35, 4, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(36, 4, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(37, 5, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(38, 5, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(39, 5, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(40, 5, 'details', 'text', 'Details', 0, 1, 1, 1, 1, 1, '{}', 4),
(41, 5, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 5),
(42, 5, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 6),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{\"on\":\"Yes\",\"off\":\"No\"}', 7),
(44, 5, 'quantity', 'number', 'Quantity', 1, 1, 1, 1, 1, 1, '{}', 8),
(45, 5, 'new_trend', 'checkbox', 'New Trend', 1, 1, 1, 1, 1, 1, '{}', 9),
(46, 5, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, '{}', 10),
(47, 5, 'status_desc', 'text', 'Status Desc', 0, 1, 1, 1, 1, 1, '{}', 11),
(48, 5, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 12),
(49, 5, 'images', 'multiple_images', 'Images', 0, 1, 1, 1, 1, 1, '{}', 13),
(50, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 1, 1, '{}', 14),
(51, 5, 'updated_at', 'timestamp', 'Updated At', 0, 1, 1, 1, 1, 1, '{}', 15),
(52, 6, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(53, 6, 'product_id', 'hidden', 'Product Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(54, 6, 'sku', 'text', 'Sku', 0, 1, 1, 1, 1, 1, '{}', 3),
(55, 6, 'size', 'text', 'Size', 0, 1, 1, 1, 1, 1, '{}', 4),
(56, 6, 'gemstone', 'text', 'Gemstone', 0, 1, 1, 1, 1, 1, '{}', 5),
(57, 6, 'colour', 'text', 'Colour', 0, 1, 1, 1, 1, 1, '{}', 6),
(58, 6, 'quantity', 'number', 'Quantity', 1, 1, 1, 1, 1, 1, '{}', 7),
(59, 6, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 8),
(60, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(61, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(62, 7, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(63, 7, 'code', 'text', 'Code', 1, 1, 1, 1, 1, 1, '{}', 2),
(64, 7, 'type', 'select_dropdown', 'Type', 1, 1, 1, 1, 1, 1, '{\"default\":\"fixed\",\"options\":{\"fixed\":\"Fixed Value\",\"percent\":\"Percent Off\"}}', 3),
(65, 7, 'value', 'text', 'Value', 0, 1, 1, 1, 1, 1, '{\"null\":\"\"}', 4),
(66, 7, 'percent_off', 'number', 'Percent Off', 0, 1, 1, 1, 1, 1, '{\"null\":\"\"}', 5),
(67, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(68, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(69, 8, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(70, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(71, 8, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(72, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 4),
(73, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(79, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(80, 10, 'product_id', 'number', 'Product Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(81, 10, 'category_id', 'number', 'Category Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(82, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 4),
(83, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(84, 11, 'id', 'hidden', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(85, 11, 'user_id', 'number', 'User Id', 0, 1, 1, 0, 0, 0, '{}', 2),
(86, 11, 'billing_email', 'text', 'Billing Email', 0, 1, 1, 1, 1, 0, '{}', 3),
(87, 11, 'billing_name', 'text', 'Billing Name', 0, 1, 1, 1, 1, 0, '{}', 4),
(88, 11, 'billing_address', 'text', 'Billing Address', 0, 1, 1, 1, 1, 0, '{}', 5),
(89, 11, 'billing_city', 'text', 'Billing City', 0, 1, 1, 1, 1, 0, '{}', 6),
(91, 11, 'billing_postalcode', 'text', 'Billing Postalcode', 0, 0, 1, 1, 1, 0, '{}', 8),
(92, 11, 'billing_phone', 'text', 'Billing Phone', 0, 0, 1, 1, 1, 0, '{}', 9),
(93, 11, 'billing_name_on_card', 'text', 'Billing Name On Card', 0, 1, 1, 1, 1, 0, '{}', 10),
(94, 11, 'billing_discount', 'number', 'Billing Discount', 1, 0, 1, 0, 0, 0, '{}', 11),
(95, 11, 'billing_discount_code', 'text', 'Billing Discount Code', 0, 0, 1, 0, 0, 0, '{}', 12),
(96, 11, 'billing_subtotal', 'text', 'Billing Subtotal', 1, 1, 1, 0, 0, 0, '{}', 13),
(97, 11, 'billing_tax', 'text', 'Billing Tax', 1, 1, 1, 1, 1, 1, '{}', 14),
(98, 11, 'billing_total', 'text', 'Billing Total', 1, 1, 1, 0, 0, 0, '{}', 15),
(99, 11, 'payment_gateway', 'text', 'Payment Gateway', 1, 0, 1, 0, 0, 0, '{}', 16),
(100, 11, 'shipped', 'checkbox', 'Shipped', 1, 1, 1, 1, 0, 0, '{\"on\":\"Yes\",\"off\":\"No\"}', 17),
(101, 11, 'error', 'text', 'Error', 0, 1, 1, 0, 0, 0, '{}', 18),
(102, 11, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 19),
(103, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 20),
(104, 11, 'billing_state', 'text', 'Billing State', 0, 0, 1, 1, 1, 0, '{}', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-07-24 07:32:48', '2019-07-24 14:40:18'),
(4, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-07-24 07:32:48', '2019-07-24 14:39:33'),
(5, 'products', 'products', 'Product', 'Products', 'voyager-bag', 'App\\Product', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-24 13:55:28', '2019-08-06 04:20:57'),
(6, 'product_attribute', 'product-attribute', 'Product Attribute', 'Product Attributes', 'voyager-window-list', 'App\\ProductAttribute', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-24 14:09:25', '2019-07-24 15:29:38'),
(7, 'coupons', 'coupons', 'Coupon', 'Coupons', 'voyager-dollar', 'App\\Coupon', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-24 14:11:22', '2019-07-24 15:26:51'),
(8, 'category', 'category', 'Category', 'Categories', 'voyager-tag', 'App\\Category', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-24 14:13:28', '2019-07-24 15:27:51'),
(10, 'category_product', 'category-product', 'Category Product', 'Category Products', 'voyager-tag', 'App\\CategoryProduct', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-07-24 15:49:58', '2019-07-24 15:52:55'),
(11, 'orders', 'orders', 'Order', 'Orders', 'voyager-documentation', 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-08-06 03:21:37', '2019-08-06 04:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(2, 'main', '2019-07-24 16:05:04', '2019-07-24 16:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-07-24 07:32:48', '2019-07-24 07:32:48', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 10, '2019-07-24 07:32:48', '2019-08-06 03:22:05', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 9, '2019-07-24 07:32:48', '2019-08-06 03:22:05', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 8, '2019-07-24 07:32:48', '2019-08-06 03:22:05', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 12, '2019-07-24 07:32:48', '2019-08-06 03:22:05', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-07-24 07:32:48', '2019-07-24 14:03:41', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-07-24 07:32:48', '2019-07-24 14:03:41', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-07-24 07:32:48', '2019-07-24 14:03:41', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-07-24 07:32:48', '2019-07-24 14:03:41', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 13, '2019-07-24 07:32:48', '2019-08-06 03:22:05', 'voyager.settings.index', NULL),
(11, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 11, '2019-07-24 07:32:48', '2019-08-06 03:22:05', 'voyager.posts.index', NULL),
(12, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-07-24 07:33:14', '2019-07-24 14:03:41', 'voyager.hooks', NULL),
(13, 1, 'Products', '', '_self', 'voyager-bag', '#000000', NULL, 3, '2019-07-24 13:55:28', '2019-08-06 03:22:05', 'voyager.products.index', 'null'),
(14, 1, 'Product Attributes', '', '_self', 'voyager-window-list', '#000000', NULL, 4, '2019-07-24 14:09:25', '2019-08-06 03:22:05', 'voyager.product-attribute.index', 'null'),
(15, 1, 'Coupons', '', '_self', 'voyager-dollar', '#000000', NULL, 7, '2019-07-24 14:11:22', '2019-08-06 03:22:05', 'voyager.coupons.index', 'null'),
(16, 1, 'Categories', '', '_self', 'voyager-tag', '#000000', NULL, 5, '2019-07-24 14:13:28', '2019-08-06 03:22:05', 'voyager.category.index', 'null'),
(18, 1, 'Category Products', '', '_self', 'voyager-categories', '#000000', NULL, 6, '2019-07-24 15:49:58', '2019-08-06 03:22:05', 'voyager.category-product.index', 'null'),
(19, 2, 'Shop', '', '_self', NULL, '#000000', NULL, 2, '2019-07-24 16:07:06', '2019-07-24 23:48:46', 'shop.index', NULL),
(20, 2, 'Home', '', '_self', NULL, '#000000', NULL, 1, '2019-07-24 16:34:51', '2019-07-24 23:48:46', 'landing-page', NULL),
(21, 2, 'Rings', '/shop?category=rings', '_self', NULL, '#000000', NULL, 3, '2019-07-24 16:37:18', '2019-07-24 16:38:13', NULL, ''),
(22, 2, 'Necklaces', '/shop?category=necklaces', '_self', NULL, '#000000', NULL, 4, '2019-07-24 16:38:06', '2019-07-24 17:28:59', NULL, ''),
(23, 2, 'Bracelets', '/shop?category=bracelets', '_self', NULL, '#000000', NULL, 5, '2019-07-24 16:38:31', '2019-07-24 16:40:28', NULL, ''),
(24, 2, 'Earrings', '/shop?category=earrings', '_self', NULL, '#000000', NULL, 6, '2019-07-24 16:38:44', '2019-07-24 16:40:28', NULL, ''),
(25, 1, 'Orders', '', '_self', 'voyager-documentation', '#000000', NULL, 2, '2019-08-06 03:21:37', '2019-08-06 03:23:15', 'voyager.orders.index', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_03_31_191025_create_products_table', 1),
(28, '2019_04_21_160732_create_category_table', 1),
(29, '2019_04_21_160844_create_category_product_table', 1),
(30, '2019_04_21_161048_create_orders_table', 1),
(31, '2019_04_21_161115_create_order_products_table', 1),
(32, '2019_04_21_164419_create_coupons_table', 1),
(33, '2019_04_25_124604_add_image_to_products_table', 1),
(34, '2019_04_25_124715_add_images_to_products_table', 1),
(35, '2019_04_28_183135_add_quantity_to_products_table', 1),
(36, '2019_04_28_183431_add_new_trend_to_products_table', 1),
(37, '2019_04_28_184818_add_status_to_products_table', 1),
(38, '2019_04_28_190520_add_status_desc_to_products_table', 1),
(39, '2019_05_06_221743_create_product_attribute_table', 1),
(40, '2019_07_18_102057_create_payment_table', 1),
(41, '2019_08_06_055546_create_orders_table', 2),
(42, '2019_08_06_062854_create_order_product_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `billing_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_postalcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_name_on_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_discount` int(11) NOT NULL DEFAULT '0',
  `billing_discount_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_subtotal` int(11) NOT NULL,
  `billing_tax` int(11) NOT NULL,
  `billing_total` int(11) NOT NULL,
  `payment_gateway` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'stripe',
  `shipped` tinyint(1) NOT NULL DEFAULT '0',
  `error` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `billing_email`, `billing_name`, `billing_address`, `billing_city`, `billing_state`, `billing_postalcode`, `billing_phone`, `billing_name_on_card`, `billing_discount`, `billing_discount_code`, `billing_subtotal`, `billing_tax`, `billing_total`, `payment_gateway`, `shipped`, `error`, `created_at`, `updated_at`) VALUES
(3, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 00:18:46', '2019-08-06 00:18:46'),
(4, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 00:22:45', '2019-08-06 00:22:45'),
(5, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 00:23:56', '2019-08-06 00:23:56'),
(6, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 00:49:10', '2019-08-06 00:49:10'),
(7, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', NULL, 0, NULL, 9900, 594, 10494, 'stripe', 0, NULL, '2019-08-06 00:49:52', '2019-08-06 00:49:52'),
(8, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 00:53:47', '2019-08-06 00:53:47'),
(9, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 00:58:27', '2019-08-06 00:58:27'),
(10, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 01:33:45', '2019-08-06 01:33:45'),
(11, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 9900, 594, 10494, 'stripe', 0, NULL, '2019-08-06 01:34:42', '2019-08-06 01:34:42'),
(12, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 02:36:16', '2019-08-06 02:36:16'),
(13, NULL, 'farhan@gmail.com', NULL, 'No 12, Taman Desa Idaman', 'Durian Tunggal', NULL, NULL, '0176391471', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-06 02:38:05', '2019-08-06 02:38:05'),
(14, NULL, 'ezrina@gmail.com', NULL, 'No 13, Taman Desa Idaman, Taman Desa Idaman', 'Durian Tunggal', NULL, NULL, '0134257795', 'Ezrina Yahya', 4950, 'DEF456', 4950, 297, 5247, 'stripe', 0, NULL, '2019-08-06 02:39:21', '2019-08-06 02:39:21'),
(15, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 3000, 'ABC123', 13900, 834, 14734, 'stripe', 0, 'Your card has expired.', '2019-08-06 03:18:38', '2019-08-06 03:18:38'),
(16, NULL, 'bisyairi@gmail.com', NULL, 'No. 38, Taman Seberang Jaya, Fasa 1, Jalan Seberang Jaya 11', 'Kuala Perlis', NULL, NULL, '0182968823', 'Bisyairi Mohamad Hasbi', 0, NULL, 19700, 1182, 20882, 'stripe', 0, NULL, '2019-08-07 08:56:05', '2019-08-07 08:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 3, NULL, 1, '2019-08-06 00:18:46', '2019-08-06 00:18:46'),
(3, 5, NULL, 1, '2019-08-06 00:23:56', '2019-08-06 00:23:56'),
(4, 6, 1, 1, '2019-08-06 00:49:10', '2019-08-06 00:49:10'),
(5, 7, 16, 1, '2019-08-06 00:49:52', '2019-08-06 00:49:52'),
(6, 8, NULL, 1, '2019-08-06 00:53:47', '2019-08-06 00:53:47'),
(7, 9, NULL, 1, '2019-08-06 00:58:27', '2019-08-06 00:58:27'),
(8, 10, NULL, 1, '2019-08-06 01:33:45', '2019-08-06 01:33:45'),
(9, 11, NULL, 1, '2019-08-06 01:34:42', '2019-08-06 01:34:42'),
(10, 12, NULL, 1, '2019-08-06 02:36:16', '2019-08-06 02:36:16'),
(11, 13, 1, 1, '2019-08-06 02:38:05', '2019-08-06 02:38:05'),
(12, 14, 20, 1, '2019-08-06 02:39:21', '2019-08-06 02:39:21'),
(13, 15, 6, 1, '2019-08-06 03:18:38', '2019-08-06 03:18:38'),
(14, 16, 1, 1, '2019-08-07 08:56:05', '2019-08-07 08:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(2, 'browse_bread', NULL, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(3, 'browse_database', NULL, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(4, 'browse_media', NULL, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(5, 'browse_compass', NULL, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(6, 'browse_menus', 'menus', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(7, 'read_menus', 'menus', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(8, 'edit_menus', 'menus', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(9, 'add_menus', 'menus', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(10, 'delete_menus', 'menus', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(11, 'browse_roles', 'roles', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(12, 'read_roles', 'roles', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(13, 'edit_roles', 'roles', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(14, 'add_roles', 'roles', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(15, 'delete_roles', 'roles', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(16, 'browse_users', 'users', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(17, 'read_users', 'users', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(18, 'edit_users', 'users', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(19, 'add_users', 'users', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(20, 'delete_users', 'users', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(21, 'browse_settings', 'settings', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(22, 'read_settings', 'settings', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(23, 'edit_settings', 'settings', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(24, 'add_settings', 'settings', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(25, 'delete_settings', 'settings', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(26, 'browse_posts', 'posts', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(27, 'read_posts', 'posts', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(28, 'edit_posts', 'posts', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(29, 'add_posts', 'posts', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(30, 'delete_posts', 'posts', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(31, 'browse_hooks', NULL, '2019-07-24 07:33:14', '2019-07-24 07:33:14'),
(32, 'browse_products', 'products', '2019-07-24 13:55:28', '2019-07-24 13:55:28'),
(33, 'read_products', 'products', '2019-07-24 13:55:28', '2019-07-24 13:55:28'),
(34, 'edit_products', 'products', '2019-07-24 13:55:28', '2019-07-24 13:55:28'),
(35, 'add_products', 'products', '2019-07-24 13:55:28', '2019-07-24 13:55:28'),
(36, 'delete_products', 'products', '2019-07-24 13:55:28', '2019-07-24 13:55:28'),
(37, 'browse_product_attribute', 'product_attribute', '2019-07-24 14:09:25', '2019-07-24 14:09:25'),
(38, 'read_product_attribute', 'product_attribute', '2019-07-24 14:09:25', '2019-07-24 14:09:25'),
(39, 'edit_product_attribute', 'product_attribute', '2019-07-24 14:09:25', '2019-07-24 14:09:25'),
(40, 'add_product_attribute', 'product_attribute', '2019-07-24 14:09:25', '2019-07-24 14:09:25'),
(41, 'delete_product_attribute', 'product_attribute', '2019-07-24 14:09:25', '2019-07-24 14:09:25'),
(42, 'browse_coupons', 'coupons', '2019-07-24 14:11:22', '2019-07-24 14:11:22'),
(43, 'read_coupons', 'coupons', '2019-07-24 14:11:22', '2019-07-24 14:11:22'),
(44, 'edit_coupons', 'coupons', '2019-07-24 14:11:22', '2019-07-24 14:11:22'),
(45, 'add_coupons', 'coupons', '2019-07-24 14:11:22', '2019-07-24 14:11:22'),
(46, 'delete_coupons', 'coupons', '2019-07-24 14:11:22', '2019-07-24 14:11:22'),
(47, 'browse_category', 'category', '2019-07-24 14:13:28', '2019-07-24 14:13:28'),
(48, 'read_category', 'category', '2019-07-24 14:13:28', '2019-07-24 14:13:28'),
(49, 'edit_category', 'category', '2019-07-24 14:13:28', '2019-07-24 14:13:28'),
(50, 'add_category', 'category', '2019-07-24 14:13:28', '2019-07-24 14:13:28'),
(51, 'delete_category', 'category', '2019-07-24 14:13:28', '2019-07-24 14:13:28'),
(57, 'browse_category_product', 'category_product', '2019-07-24 15:49:58', '2019-07-24 15:49:58'),
(58, 'read_category_product', 'category_product', '2019-07-24 15:49:58', '2019-07-24 15:49:58'),
(59, 'edit_category_product', 'category_product', '2019-07-24 15:49:58', '2019-07-24 15:49:58'),
(60, 'add_category_product', 'category_product', '2019-07-24 15:49:58', '2019-07-24 15:49:58'),
(61, 'delete_category_product', 'category_product', '2019-07-24 15:49:58', '2019-07-24 15:49:58'),
(62, 'browse_orders', 'orders', '2019-08-06 03:21:37', '2019-08-06 03:21:37'),
(63, 'read_orders', 'orders', '2019-08-06 03:21:37', '2019-08-06 03:21:37'),
(64, 'edit_orders', 'orders', '2019-08-06 03:21:37', '2019-08-06 03:21:37'),
(65, 'add_orders', 'orders', '2019-08-06 03:21:37', '2019-08-06 03:21:37'),
(66, 'delete_orders', 'orders', '2019-08-06 03:21:37', '2019-08-06 03:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2019-07-24 07:32:48', '2019-07-24 07:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `new_trend` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `description`, `featured`, `quantity`, `new_trend`, `status`, `status_desc`, `image`, `images`, `created_at`, `updated_at`) VALUES
(1, 'SERPENTINE RING', 'serpentine-ring', 'in stock', 19800, '<p>Ring for your beautiful soul.</p>\r\n<p>With the design of faceted gemstones, easily create an elegant look for your day.</p>\r\n<ul>\r\n<li>Material: 925 Sterling Silver</li>\r\n<li>Plating: Rhodium or Rose Gold</li>\r\n<li>Featuring natural, faceted Amethyst, Citrine, Blue Topaz or Peridot</li>\r\n<li>Tarnish-resistant</li>\r\n<li>Safe to wear for sensitive skin</li>\r\n<li>Suitable for daily wear</li>\r\n<li>100% quality assurance and satisfaction guaranteed!</li>\r\n</ul>', 1, 10, 0, 'sale', 'Sale', 'products/dummy/GR00035-PA6_1583x.jpg', '[\"products\\/dummy\\/GR00035-RB5_1583x.jpg\",\"products\\/dummy\\/GR00035-RP4_9e862982-1d30-49a4-93ee-61a11bdf8032_1583x.png\", \"products\\/dummy\\/GR00035-YY3_1583x.jpg\"]', '2019-07-24 07:32:00', '2019-07-24 13:57:04'),
(2, 'LOVE KNOT ROSE RING PENDANT', 'loveknot-rose-ring-pendant', 'in stock', 24900, '<p>LOVE ME KNOT collection - Let her know your love for her never ends, she is your sunshine as she brightens up your life everday.</p>\n            <p>This latest collection is a two piece – both a ring and a pendant in one, featuring natural diamond which represents determination and forever. It can be worn in two ways, as a pendant on a chain or flip the piece around, as a ring.</p>\n            <p>This Diamond collection is designed to look effortlessly shiny and stylish on her.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium and Rose Gold</li>\n                <li>Featuring a natural Diamond in the center which mined from Botswana and Australia. </li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n                <li>Chain not included</li>\n            </ul>', 1, 10, 1, 'new', 'New', 'products/dummy/DR000_1583x.png', '[\"products\\/dummy\\/MG_6715_1583x.png\",\"products\\/dummy\\/MG_6734_0dfe4d63-f1ba-4189-9da3-3ca7dcef34fc_1583x.png\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(3, 'HEART SPARKS RING', 'heart-sparks-ring', 'in stock', 12200, '<p>Heart Sparks Ring features a shimmering Heart Shape Cubic Zirconia stone as the center piece.</p>\n            <p>A modern and elegant design that enhances the beauty of your look.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium or Rose Gold</li>\n                <li>Embellished with Cubic Zirconia stones</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed! </li>\n            </ul>', 1, 10, 0, 'offer', '-20%', 'products/dummy/SR00044-RZ_silver_front_1583x.jpg', '[\"products\\/dummy\\/SR00044-PZ5_rose_gold_front_1583x.jpg\",\"products\\/dummy\\/SR00044-RZ5_silver_model_1583x.jpg\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(4, 'BEADS OF WISDOM RING', 'beads-of-wisdom-ring', 'in stock', 9900, '<p>Be a lady of wisdom.</p>\n            <p>A design that is both feminine and sophisticated, this unique ring is the perfect complement for parties with bubbly drinks, and lace-edged outfits.</p>\n            <ul>\n                <li>made of sterling silver, plated with rose gold or rhodium or yellow gold</li>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium, Rose Gold or Yellow Gold</li>\n                <li>Featuring natural gemstones: Yellow Sapphire, Blue Topaz, Tsavorite Garnet, Amethyst, or Garnet</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 10, 1, 'new', 'Hot', 'products/dummy/GR00005-PA6_1583x.jpg', '[\"products\\/dummy\\/GR00005-RV4_1583x.jpg\",\"products\\/dummy\\/GR00005-RS3_1583x.jpg\",\"products\\/dummy\\/GR00005-YG1_1583x.jpg \"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(5, 'FYB TOPAZ RING', 'fyb-topaz-ring', 'in stock', 18800, '<p>Follow after what fuels you to be a better, happier person.</p>\n            <p>It will only lead you to discover doors that open to infinite possibilities.</p>\n            <p>This Blue Topaz ring represents Honesty and Communication.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium</li>\n                <li>Featuring natural, faceted Blue Topazes and White Topazes</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 10, 0, '', '', 'products/dummy/FYB-Topaz-Ring-2_1583x.jpg', '[\"products\\/dummy\\/FYB-Topaz-Ring-1_1583x.jpg\",\"products\\/dummy\\/FYB-Topaz-Ring-3_1583x.jpg\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(6, 'KHREE RING', 'darling-enlight-diamond-ring', 'in stock', 15900, '<p>Ring for your beautiful soul.</p>\n            <p>With the design of faceted heart shape gemstones, easily create an elegant look for your day.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium or Rose Gold</li>\n                <li>Featuring natural, faceted Amethyst, Citrine, Blue Topaz or Peridot</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 10, 1, '', '', 'products/dummy/GR00034-RP4_1583x.jpg', '[\"products\\/dummy\\/GR00034-PA6_1583x.jpg\",\"products\\/dummy\\/GR00034-RB5_1583x.jpg\", \"products\\/dummy\\/GR00034-YY3_1583x.jpg\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(7, 'CLAW-PINCHED RING', 'claw-pinched-ring', 'in stock', 24400, '<p>This modern interpretation of a tension-set ring is enforced with two thick, solid claws gripping a natural gemstone.</p>\n            <p>This ring favours bold and lively young women. Rock this look with sharp slacks or a sleek LBD, and don’t forget your smart stilettos.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium or Rose Gold</li>\n                <li>Choose between these natural gems: Amethyst, Red Garnet, Blue Topaz or Citrine</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 10, 0, '', '', 'products/dummy/GR00002-PA6_1583x.jpg', '[\"products\\/dummy\\/GR00002-PG6_1583x.jpg\",\"products\\/dummy\\/GR00002-RB5_1583x.jpg\",\" products\\/dummy\\/GR00002-YY2_1583x.png\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(8, 'VISION RING', 'vision-ring', 'in stock', 14900, '<p><strong>Vision ring</strong> features shimmering Cubic Zirconia stones. A symbol of eternity.</p>\r\n<p>Simple yet elegant. A modern design that enhances the beauty of your look.</p>\r\n<p>You can wear the ring with any position you like, with the arrow up or down.</p>\r\n<ul>\r\n<li>Material: 925 Sterling Silver</li>\r\n<li>Plating: Rhodium</li>\r\n<li>Embellished with Cubic Zirconia stones</li>\r\n<li>Tarnish-resistant</li>\r\n<li>Safe to wear for sensitive skin</li>\r\n<li>Suitable for daily wear</li>\r\n<li>100% quality assurance and satisfaction guaranteed!</li>\r\n</ul>', 1, 10, 1, NULL, NULL, 'products/dummy/SR00045-RZ5_1583x.png', '[\"products\\/dummy\\/Vision-Ring-1_1583x.png\",\"products\\/dummy\\/Model-_CZ-Vision-Ring_1583x.jpg\"]', '2019-07-24 07:32:00', '2019-07-24 14:02:02'),
(9, 'MINI CABOCHON SOLITAIRE RING', 'mini-cabochon-solitaire-ring', 'in stock', 9900, '<p>Less can do more, as observed in the trends of miniskirts and macarons.</p>\n            <p>This ring is a tease—a dainty but bright natural gemstone, cute as a button, in a classic four-claw setting.</p>\n            <p>An effortless nip of fun that you can bring to any outfit. Stack them together to create a miniature candy land.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium, Rose Gold or Yellow Gold</li>\n                <li>Featuring a cabochon-cut natural gemstone: Amethyst, Pink Tourmaline, Blue Topaz, Garnet, or Citrine</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 10, 0, '', '', 'products/dummy/GR00006-RB5_1583x.jpg', '[\"products\\/dummy\\/GR00006-RG1_1583x.jpg\",\"products\\/dummy\\/GR00006-YY3_1583x.jpg\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(10, 'FYB SAPPHIRE RING', 'fyb-sapphire-ring', 'in stock', 19700, '<p>Follow after what fuels you to be a better, happier person.</p>\n            <p>It will only lead you to discover doors that open to infinite possibilities.</p>\n            <p>This Sapphire ring represents Peace and Joy.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium</li>\n                <li>Featuring natural, faceted Blue Sapphires and White Topazes</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 10, 1, '', '', 'products/dummy/FYB-Sapphire-Ring-2_1583x.jpg', '[\"products\\/dummy\\/FYB-Sapphire-Ring-1_1600x.jpg\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(11, 'Sapphire Rose Earrings', 'sapphire-rose-earrings', 'in stock', 24900, '<p>SAPPHIRE ROSE earrings with Pink Sapphire in the heart of the flower and Emerald leaves symbolise gratitude, grace, admiration, and joy.</p>\n            <p>Ladylike floral designs inspired by delicate flowers from the secret garden because every girl is like a flower - a soul blossoming in nature.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium and Rose Gold</li>\n                <li>Featuring a pair of natural, faceted Pink Sappire and a pair of Emerald</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 18, 0, '', '', 'products/dummy/Diamond-Rose-Earrings_2_1349x.png', '[\"products\\/dummy\\/Diamond-Flora-Model-_6_1349x.png\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(12, 'Diamond Sakura Earrings', 'diamond-sakura-earrings', 'in stock', 27900, '<p>DIAMOND SAKURA earrings set with single Diamonds represents the fragility and the beauty of life.</p><br><p>Ladylike floral designs inspired by delicate flowers from the secret garden because every girl is like a flower - a soul blossoming in nature.</p>\n            <p>Sold in limited pieces.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium and Rose Gold</li>\n                <li>Featuring a pair of natural, faceted Diamonds </li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n            </ul>', 1, 5, 1, '', '', 'products/dummy/Diamond-Sakura-Earrings-3_1349x.png', '[\"products\\/dummy\\/Diamond-Flora-Model-_5_1349x.png\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(13, 'Topaz Love Earrings', 'topaz-love-earrings', 'in stock', 29900, '<p>Petite Paradise is a collection with classic pieces designed for the ambitious, passionately fearless woman.</p><p>Twinkling Blue Topaz in the shade of a London Blue is a darker cobalt shade. Its electric blue colour makes it attractive and easy to match with everyday outfits.  So make love, not war, the Blue Topaz represents creativity to conquer everyday challenges.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium</li>\n                <li>Featuring natural Blue Topaz</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n            </ul>', 1, 11, 0, '', '', 'products/dummy/Topaz-Love-Earrings_1349x.png', '[\"products\\/dummy\\/Petite-Paradise-Model-WEB-_5_aa3b4dd9-11a5-4a17-b40e-8fa578de4ec5_1349x.png\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(14, 'Garnet Love Earrings', 'garnet-love-earrings', 'in stock', 23900, '<p>Petite Paradise is a collection with classic pieces designed for the ambitious, passionately fearless woman.</p>\n            <p>They say the prettiest people are the ones who are in love. The Red Garnet represents positivity and surrounded by a star-like twinkle of sparkling stones, this piece will attract all the love you need.</p><br>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium</li>\n                <li>Featuring natural Garnet</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n            </ul>', 1, 14, 0, '', '', 'products/dummy/Garnet-Love-Earrings_68b48174-6c20-42f2-abcf-8aab4ac5c40e_1349x.png', '[\"products\\\\dummy\\\\Petite-Paradise-Model-WEB-_3_1349x.png\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(15, 'Origami Princess Earrings', 'origami-princess-earrings', 'in stock', 16900, '<p>Inspired by the Japanese papercraft, this collection plays with angles, transforming origami inspirations into wearable, chic pieces of art.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 20, 0, '', '', 'products/dummy/PE00037-RZ0_1349x.jpg', '[\"products\\\\dummy\\\\PE00037-RZ0_frontside_1349x.jpg\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(16, 'Diamond Angel Pendant', 'diamond-angel-pendant', 'in stock', 19900, '<p>A happy, chubby creature in a rose gold dress, she holds a shining natural Diamond in her hands, wishing you a safe and loving holiday season.</p>\n            <p>It is also a wonderful present for someone you care enough about them to want an angel to watch over and guarding them forever.</p>\n            <p>Diamond Angel Pendant is a dual-function piece – it may be worn as a pendant on a necklace or as a charm on a bracelet or bangle.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver, featuring 1 faceted colourless Diamond</li>\n                <li>Plating: Rhodium and Rose Gold</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n                <li>No chain included</li>\n            </ul>', 1, 15, 0, '', '', 'products/dummy/Diamond_Angel_1349x.png', '[\"products\\\\dummy\\\\elaine_1_1349x.jpg\"]', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(17, 'Mesh Chain 45cm', 'mesh-chain-45cm', 'in stock', 10300, '<p>Get this chain to match with any of your favourite pendants.</p>\n            <ul>\n                <li>Material: 925 Sterling Silver</li>\n                <li>Plating: Rhodium</li>\n                <li>Tarnish-resistant</li>\n                <li>Safe to wear for sensitive skin</li>\n                <li>Suitable for daily wear</li>\n                <li>100% quality assurance and satisfaction guaranteed!</li>\n            </ul>', 1, 12, 1, '', '', 'products/dummy/PA00022-RZ0_1349x.jpg', '', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(18, 'new product', 'new-product', 'details here', 3999, '<p>dsadasdas</p>', 0, 1, 0, NULL, NULL, 'products\\July2019\\Eq4qYvTrVwVjTNroa9S7.jpg', '[\"products\\\\July2019\\\\7jWUDWWgeXwaVVich6po.jpg\",\"products\\\\July2019\\\\EbK6A0t62NumpjjYfLBw.png\"]', '2019-07-24 15:33:00', '2019-07-25 08:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gemstone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colour` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `product_id`, `sku`, `size`, `gemstone`, `colour`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'SKU-SRCitrine-9', '9', 'Citrine', '', 10, 19700, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(2, 1, 'SKU-SRCitrine-11', '11', 'Citrine', '', 10, 19700, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(3, 1, 'SKU-SRCitrine-13', '13', 'Citrine', '', 10, 19700, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(4, 1, 'SKU-SRPeridot-9', '9', 'Peridot', '', 10, 16900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(5, 1, 'SKU-SRPeridot-11', '11', 'Peridot', '', 10, 16900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(6, 1, 'SKU-SRPeridot-13', '13', 'Peridot', '', 10, 16900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(7, 1, 'SKU-SRBlueTopaz-9', '9', 'BlueTopaz', '', 10, 15900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(8, 1, 'SKU-SRBlueTopaz-11', '11', 'BlueTopaz', '', 10, 15900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(9, 1, 'SKU-SRAmethyst-9', '9', 'Amethyst', '', 10, 17800, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(10, 1, 'SKU-SRAmethyst-11', '11', 'Amethyst', '', 10, 17800, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(11, 2, 'SKU-LoveknotRose-11', '11', '', '', 10, 24900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(12, 2, 'SKU-LoveknotRose-13', '13', '', '', 10, 24900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(13, 2, 'SKU-LoveknotRose-15', '15', '', '', 10, 24900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(14, 2, 'SKU-LoveknotRose-17', '17', '', '', 10, 24900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(15, 3, 'SKU-HeartSpark', '15', '', 'Rose Gold', 10, 12200, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(16, 4, 'SKU-BeadsofWisdom-8', '8', '', 'Tsavorite Garnet', 10, 9900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(17, 4, 'SKU-BeadsofWisdom-10-Amethyst', '10', '', 'Amethyst', 10, 9900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(18, 4, 'SKU-BeadsofWisdom-10-TG', '10', '', 'Tsavorite Garnet', 10, 9900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(19, 4, 'SKU-BeadsofWisdom-8-YS', '10', '', 'Yellow Sapphire', 10, 9900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(20, 4, 'SKU-BeadsofWisdom-12-TG', '12', '', 'Tsavorite Garnet', 10, 9900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(21, 4, 'SKU-BeadsofWisdom-12-YS', '12', '', 'Yellow Sapphire', 10, 9900, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(22, 5, 'SKU-FYBTopaz-10.5', '10.5', '', '', 10, 18800, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(23, 5, 'SKU-FYBTopaz-13', '13', '', '', 10, 18800, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(24, 5, 'SKU-FYBTopaz-14', '14', '', '', 10, 18800, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(25, 5, 'SKU-FYBTopaz-16.5', '16.5', '', '', 10, 18800, '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(26, 5, 'SKU-FYBTopaz-19', '10.5', '', '', 10, 18800, '2019-07-24 07:32:48', '2019-07-24 07:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-07-24 07:32:48', '2019-07-24 07:32:48'),
(2, 'user', 'Normal User', '2019-07-24 07:32:48', '2019-07-24 07:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\July2019\\NwotweqgaxAmH46AZcBg.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'BrilliantEarth E-commerce System', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Admin', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 4, 'pt', 'Post', '2019-07-24 07:32:48', '2019-07-24 07:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\July2019\\Q8M7dq3GMGSKcKg8s2kG.png', '$2y$10$H1ddFNDtNKbziYfexzSXHu./d14/pep9EGhWqCGOUBThIYO74hPji', 'YaMVIAsC2Aix56J0RIAf7gTE3k0WTawsbH5F799LgXhFynmRIRbHtVy5L7KL', '{\"locale\":\"en\"}', '2019-07-24 07:32:48', '2019-07-26 10:28:27'),
(2, 2, 'user1', 'user1@user.com', 'users/default.png', '$2y$10$wSimrZb5HS4rvOg77JtOy.wfepfFWeDFGcYuoLPR0wLNiBvxl0fgy', '8321iGH6egTzPx9tqUUNEDpgTGhoATtp3p2WroEtSsi8LtIte72xAMvbMcqK', NULL, '2019-07-25 11:26:05', '2019-08-05 21:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attribute_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product_attribute` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `product_attribute_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
