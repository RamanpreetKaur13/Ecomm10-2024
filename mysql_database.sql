-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 07:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm10`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `type`, `mobile`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ramanpreet', 'admin', '1234567890', 'admin@gmail.com', '$2y$10$0ItAij47hSJFndkMmADtZeHAqSqg6gYCo7xK1ewtblHnNrUXzMVJu', 'avatar2.png', 1, NULL, '2023-11-07 07:04:47'),
(2, 'Raman', 'subadmin', '1234567891', 'raman@gmail.com', '$2a$12$OCF4gIHHAm8R8fUOohIGS.JnZOFwzIJ.8M5Kf8kOtqd8HEETkNEFa', '', 1, NULL, '2023-10-23 00:59:04'),
(3, 'Simran', 'subadmin', '1234567891', 'simran@gmail.com', '$2y$10$Mzwj.nJnrxknetTECfHzX.lV1zPs80WnT5U87tBkXBLi7wMwynmZi', 'avatar.png', 1, NULL, '2023-11-07 07:02:46'),
(13, 'Xyla Baxter', 'Qui in qui voluptate', '676767', 'ryses@mailinator.com', '$2y$10$IF9T7YbFEmBgw/ynXnYDue3zCCCwgeCuzWNBT0/7VkKPzeCgxAA1y', 'avatar.png', 1, '2023-11-07 07:03:51', '2023-11-07 07:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subadmin_id` int(11) NOT NULL,
  `module` varchar(255) NOT NULL,
  `view_access` varchar(255) NOT NULL,
  `edit_access` varchar(255) NOT NULL,
  `full_access` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `subadmin_id`, `module`, `view_access`, `edit_access`, `full_access`, `created_at`, `updated_at`) VALUES
(95, 2, '_token', '0', '0', '0', '2024-01-11 13:22:40', '2024-01-11 13:22:40'),
(96, 2, 'subadmin_id', '0', '0', '0', '2024-01-11 13:22:40', '2024-01-11 13:22:40'),
(97, 2, 'cms_page', '1', '1', '1', '2024-01-11 13:22:40', '2024-01-11 13:22:40'),
(98, 2, 'categories', '1', '0', '0', '2024-01-11 13:22:40', '2024-01-11 13:22:40'),
(99, 2, 'family_colors', '1', '1', '1', '2024-01-11 13:22:40', '2024-01-11 13:22:40'),
(100, 2, 'products', '1', '1', '1', '2024-01-11 13:22:40', '2024-01-11 13:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_logo` varchar(255) DEFAULT NULL,
  `brand_image` varchar(255) DEFAULT NULL,
  `brand_discount` double(8,2) DEFAULT NULL,
  `brand_description` text DEFAULT NULL,
  `brand_url` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `brand_image`, `brand_discount`, `brand_description`, `brand_url`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Allen Solly test', 'IceCream-Light.png', '', 20.00, 'test Allen Solly is a popular brand that specializes in casual and smart casual wear for men and women.', 'allen-solly tetst', 'Allen Solly tst', 'Allen Solly test', 'Allen Solly test', 1, NULL, '2024-01-11 13:07:11'),
(2, 'Peter England', '', '', 0.00, 'One of India s most trusted apparel brands, Peter England specializes in mens clothing and considered among the famous fashion brands in India.', 'peter-england', 'Peter England', 'Peter England', 'Peter England', 0, NULL, '2024-01-10 12:50:59'),
(3, 'Tommy Hilfiger', '', '', 0.00, 'Although Tommy Hilfiger was founded in 1985, it took a long time for it to make its debut in Indian stores. The first Tommy Hilfiger store in India opened only ...', 'tommy-hilfiger', 'Tommy Hilfiger', 'Tommy Hilfiger', 'Tommy Hilfiger', 0, NULL, '2023-11-24 05:28:30'),
(4, 'Biba', '', '', 0.00, 'Biba is an Indian fashion clothing brand best recognized for its designs for ladies and girls. In India, it has more than 150 stores and 250 multi-brand outlets .', 'biba', 'Biba', 'Biba', 'Biba', 1, NULL, NULL),
(5, 'Zara', '', '', 0.00, 'Zara was started by Ortega Gaona and Rosalia Mera and is currently one of India s most popular clothing brands. It is a subsidiary of the Inditex Group and ...', 'zara', 'Zara', 'Zara', 'Zara', 1, NULL, NULL),
(7, 'Basil Boone', 'adrian-curiel-_GPDUfIlooM-unsplash.jpg', 'cleveland_browns_custom_white_jersey_75th_anniversary_patch_-_mens_um00qp9n9u.jpg', 19.00, 'Fugiat id ullamco mo', 'Quaerat rerum eiusmo', 'Facere voluptas quia', 'Impedit iusto debit', 'Quo numquam ex omnis', 1, '2023-11-24 05:49:51', '2023-11-24 05:49:51'),
(8, 'Ulric Vance', NULL, NULL, 15.00, 'Minim doloribus faci', 'Consequatur Eum sim', 'Pariatur Aut verita', 'Unde nulla nisi non', 'Doloribus velit ali', 1, '2023-11-24 06:13:19', '2023-11-24 06:13:19'),
(9, 'Joel Bond', NULL, NULL, NULL, 'Libero id rerum eos', 'Alias non ut quo dol', 'Do quis ex ea tempor', 'Animi officia et qu', 'Iusto laborum quis a', 1, '2023-11-24 06:13:34', '2023-11-24 06:13:34'),
(10, 'testraman', '', '', 50.00, 'testraman', 'testraman', 'testtestraman', 'testtestraman', 'testramantest', 1, '2024-01-10 12:51:45', '2024-01-11 13:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `category_discount` double(8,2) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `category_name`, `category_image`, `category_discount`, `description`, `url`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Clothing test', 'jacket.jpg', 0.00, 'Clothing', 'clothing', 'Clothing', 'Clothing', 'Clothing', 1, NULL, '2023-11-07 06:07:52'),
(2, 0, 'Electronics', '', 0.00, 'Electronics', 'electronics', 'electronics', 'electronics', 'electronics', 1, NULL, '2023-10-23 03:45:36'),
(3, 0, 'Appliances', '', 0.00, 'Appliances', 'appliances', 'appliances', 'appliances', 'appliances', 1, NULL, '2023-10-19 06:21:27'),
(4, 1, 'Men', '', 50.00, 'Men', 'men', 'Men', 'Men', 'Men', 1, NULL, '2024-01-12 13:24:19'),
(5, 1, 'Women', '', 60.00, 'Women', 'women', 'Women', 'Women', 'Women', 1, NULL, '2024-01-12 13:24:46'),
(13, 4, 'Shirts', NULL, 1.00, 'Shirts', 'Shirts', 'Shirts', 'Shirts', 'Shirts', 1, '2023-10-20 06:05:44', '2023-10-20 06:05:44'),
(14, 5, 'T-shirts', 'home_page_6 1.png', 0.00, 'T-shirts', 'T-shirts', 'T-shirts', 'T-shirts', 'T-shirts', 1, '2023-10-20 06:09:22', '2023-10-20 07:31:12'),
(18, 4, 'Yen Benson', NULL, 8.00, 'Velit dolor ut incid', 'Ullam necessitatibus', 'Perspiciatis sed ne', 'Quos et sit maxime o', 'Aliquid nostrum minu', 1, '2023-11-07 06:00:06', '2023-11-07 06:02:31'),
(19, 5, 'Donovan Johnson', 'shop.png', 987.00, 'Quis elit voluptate', 'Adipisci dolorem bla', 'Dolore enim dicta qu', 'Iste deleniti et exc', 'Voluptatem ullamco d', 1, '2023-11-07 06:11:36', '2023-11-07 07:00:25'),
(20, 19, 'Kane Hess', NULL, 5.00, 'Est dolore eum facil', 'Exercitationem volup', 'Autem quae temporibu', 'Ut minus magni ut au', 'Atque et blanditiis', 1, '2023-11-15 00:21:31', '2023-11-15 00:21:31'),
(21, 5, 'Yolanda Johnston', '', 3.00, 'Voluptate commodo la', 'Dignissimos eveniet', 'Eum quia voluptatem', 'Fugiat voluptatem', 'Repudiandae nihil re', 1, '2023-11-15 00:24:11', '2023-11-15 00:24:31'),
(22, 0, 'Kim Petersen', NULL, 98.00, 'Est facilis praesen', 'Perferendis beatae m', 'A architecto vitae c', 'Aute repellendus Re', 'Duis nostrud consequ', 1, '2023-11-15 00:27:02', '2023-11-15 00:27:02'),
(23, 14, 'Carol Sexton', NULL, 2.00, 'At error quo omnis e', 'Anim itaque illo lau', 'Et cupiditate accusa', 'Velit reprehenderit', 'Nam mollit veniam u', 1, '2023-11-15 00:29:19', '2023-11-15 00:29:19'),
(24, 2, 'Penelope Sherman', 'laptop.webp', 63.00, 'Nam assumenda quisqu', 'Eum in praesentium e', 'Accusamus irure ea s', 'Fuga Libero volupta', 'Iusto ad asperiores', 1, '2023-11-15 00:57:17', '2023-11-15 00:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `title`, `url`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'about-us', 'about us content', 'about us', 'about us', 'about us content', 0, NULL, '2023-10-13 00:34:54'),
(2, 'Terms and Conditions', 'terms-and-conditions', 'Terms and Conditions', 'Terms and Conditions', 'Terms and Conditions', 'Terms and Conditions', 1, NULL, '2023-11-07 01:07:46'),
(3, 'Privacy Policy', 'privacy-policy', 'Privacy Policy', 'privacy-policy', 'privacy-policy', 'Privacy Policy', 1, NULL, '2023-11-08 05:47:39'),
(27, 'test eststt', 'testest estest', 'test estests', 'teststestestttgd', 'tdsttsrt', 'trtrtrgf', 1, '2023-11-15 00:03:16', '2023-11-15 00:03:29'),
(28, 'Nostrud et qui bland', 'Officiis consequatur', 'Eos minus ut animi', 'Sed aliquid Nam volu', 'Cupiditate beatae hi', 'Et ratione voluptate', 1, '2023-11-15 00:20:54', '2023-11-15 00:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family_colors`
--

CREATE TABLE `family_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_code` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_colors`
--

INSERT INTO `family_colors` (`id`, `color_name`, `color_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'White', '#FFFFFF', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(2, 'Silver', '#C0C0C0', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(3, 'Gray', '#808080', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(4, 'Black', '#000000', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(5, 'Red', '#FF0000', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(6, 'Maroon', '#800000', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(7, 'Yellow', '#FFFF00', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(8, 'Olive', '#808000', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(9, 'Lime', '#00FF00', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(10, 'Green', '#008000', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(11, 'Aqua', '#00FFFF', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(12, 'Teal', '#008080', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(13, 'Blue', '#0000FF', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(14, 'Navy', '#000080', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(15, 'Fuchsia', '#FF00FF', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(16, 'Purple', '#FF00FF', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43'),
(17, 'Pink', '#FFC0CB', 1, '2023-11-15 02:03:43', '2023-11-15 02:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_10_095352_create_admins_table', 1),
(6, '2023_10_11_100658_create_cms_pages_table', 2),
(7, '2023_10_17_072650_create_admin_roles_table', 3),
(8, '2023_10_18_122123_create_categories_table', 4),
(10, '2023_10_23_110618_create_products_table', 5),
(11, '2023_10_27_114350_create_family_colors_table', 6),
(12, '2023_10_30_120218_create_product_images_table', 7),
(13, '2023_11_15_072459_create_product_attributes_table', 8),
(14, '2023_11_24_101930_create_brands_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_discount` int(11) DEFAULT 0,
  `discount_type` varchar(255) DEFAULT NULL,
  `final_price` double(8,2) DEFAULT NULL,
  `product_description` text NOT NULL,
  `product_video` varchar(255) DEFAULT NULL,
  `product_weight` varchar(255) DEFAULT NULL,
  `product_color` varchar(255) DEFAULT NULL,
  `family_color` varchar(255) DEFAULT NULL,
  `group_code` varchar(255) DEFAULT NULL,
  `wash_care` text DEFAULT NULL,
  `search_keywords` varchar(255) DEFAULT NULL,
  `fabric` varchar(255) DEFAULT NULL,
  `pattern` varchar(255) DEFAULT NULL,
  `sleeve` varchar(255) DEFAULT NULL,
  `fit` varchar(255) DEFAULT NULL,
  `occassion` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `is_featured` enum('No','Yes') NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_code`, `product_price`, `product_discount`, `discount_type`, `final_price`, `product_description`, `product_video`, `product_weight`, `product_color`, `family_color`, `group_code`, `wash_care`, `search_keywords`, `fabric`, `pattern`, `sleeve`, `fit`, `occassion`, `meta_title`, `meta_keyword`, `meta_description`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'W for Woman Blue Solid Kurta with Embroidery On Yoke', 'B09VSRXS7Y', 1899.00, NULL, '', 1899.00, 'Peacoat blue straight kurta in round neckline with button closure. Trailored to give comfort fit, the kurta also flatters embroidery on yoke and shoulders.', '', '400', 'Peacoat Blue', 'Blue', 'WK001', 'machine wash', 'W for Woman Blue Solid Kurta with Embroidery On Yoke', 'Cotton', 'Solid', 'Regular', 'Regular', 'Casual', 'W for Woman Blue Solid Kurta with Embroidery On Yoke', 'W for Woman Blue Solid Kurta with Embroidery On Yoke', 'W for Woman Blue Solid Kurta with Embroidery On Yoke', 'Yes', 1, '2023-11-22 23:34:45', '2024-01-12 13:10:29'),
(2, 18, 1, 'Blake Moses', 'Deserunt proident e', 736.00, 6, '', 736.00, 'Et sequi impedit do', NULL, NULL, NULL, NULL, 'Eaque sapiente iste', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Quasi dolor fuga Di', 'Accusamus atque labo', 'Quibusdam ad quisqua', 'No', 1, '2023-11-23 23:17:10', '2023-11-24 06:49:42'),
(3, 19, 7, 'Karina Baxter', 'At magni illum exer', 342.00, 4, 'product', 328.32, 'Et ut eos quisquam', NULL, NULL, NULL, '0', 'Repellendus Nulla f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rem molestiae quo au', 'Cillum in corporis q', 'Fugiat tempor harum', 'Yes', 1, '2023-11-24 07:07:06', '2023-11-24 07:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `size`, `sku`, `price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'M', 'BLKurta-M', 1000.00, 2, 0, '2023-11-22 23:45:03', '2023-11-24 04:44:04'),
(4, 1, 's', 'BLKurta-S', 2000.00, 4, 1, '2023-11-24 03:52:28', '2023-11-24 04:44:04'),
(5, 1, 'XL', 'BLKurta-XL', 3000.00, 2, 1, '2023-11-24 03:53:57', '2023-11-24 04:44:04'),
(8, 1, 'XXL', 'BLKurta-XXL', 1700.00, 4, 1, '2023-11-24 05:27:21', '2023-11-24 05:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_sort` int(11) DEFAULT 0,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `image_sort`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'product-2064-women_kurta_2.jpg', 0, 1, '2023-11-22 23:34:47', '2024-01-12 13:10:29'),
(2, 1, 'product-3173-women_kurta_3.jpg', 0, 1, '2023-11-22 23:34:47', '2024-01-12 13:10:29'),
(3, 1, 'product-3965-women_kurta_4.jpg', 0, 1, '2023-11-22 23:34:48', '2024-01-12 13:10:29'),
(4, 1, 'product-6861-women_kurta_5.jpg', 0, 1, '2023-11-22 23:34:48', '2024-01-12 13:10:29'),
(5, 1, 'product-6329-women_kurta_6.jpg', 0, 1, '2023-11-22 23:34:49', '2024-01-12 13:10:29'),
(6, 1, 'product-6575-women_kurta1.jpg', 0, 1, '2023-11-22 23:34:49', '2024-01-12 13:10:29'),
(7, 3, 'product-5089-IceCream-Dark.png', 0, 1, '2023-11-24 07:07:07', '2023-11-24 07:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `family_colors`
--
ALTER TABLE `family_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_colors`
--
ALTER TABLE `family_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
