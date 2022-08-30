-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 07:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lilshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 6, 0, '2022-03-13 02:47:52', '2022-03-13 08:10:12'),
(2, 6, 0, '2022-03-13 09:20:14', '2022-03-13 10:15:24'),
(3, 6, 1, '2022-03-13 12:53:04', '2022-03-13 12:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_product`
--

INSERT INTO `cart_product` (`id`, `product_id`, `cart_id`, `count`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 2, NULL, NULL),
(4, 14, 1, 1, NULL, NULL),
(6, 3, 2, 1, NULL, NULL),
(7, 2, 2, 1, NULL, NULL),
(9, 11, 3, 2, NULL, NULL),
(10, 3, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pants', NULL, NULL),
(2, 'Shirts', NULL, NULL),
(3, 'Jackets & Coats', NULL, NULL),
(4, 'Skirts', NULL, NULL),
(5, 'Cardigans & Sweaters', NULL, NULL),
(6, 'Jumpsuits & Dresses', NULL, NULL),
(7, 'Jeans', NULL, NULL),
(8, 'Blazers', NULL, NULL),
(9, 'Tops', NULL, NULL),
(10, 'Bottoms', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 2, 8, NULL, NULL),
(2, 3, 6, NULL, NULL),
(3, 4, 1, NULL, NULL),
(5, 6, 3, NULL, NULL),
(6, 8, 2, NULL, NULL),
(7, 9, 4, NULL, NULL),
(8, 10, 1, NULL, NULL),
(9, 11, 9, NULL, NULL),
(10, 12, 5, NULL, NULL),
(11, 13, 5, NULL, NULL),
(12, 14, 2, NULL, NULL),
(13, 15, 1, NULL, NULL),
(14, 16, 5, NULL, NULL),
(15, 4, 10, NULL, NULL),
(16, 10, 10, NULL, NULL),
(17, 16, 9, NULL, NULL),
(18, 13, 9, NULL, NULL),
(20, 21, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Beige', NULL, NULL),
(2, 'Black', NULL, NULL),
(3, 'Blue', NULL, NULL),
(4, 'Brown', NULL, NULL),
(5, 'Gray', NULL, NULL),
(6, 'Green', NULL, NULL),
(7, 'Orange', NULL, NULL),
(8, 'Pink', NULL, NULL),
(9, 'Purple', NULL, NULL),
(10, 'White', NULL, NULL),
(11, 'Red', NULL, NULL),
(12, 'Yellow', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(2, 3, 2, NULL, NULL),
(3, 4, 1, NULL, NULL),
(5, 6, 3, NULL, NULL),
(6, 8, 2, NULL, NULL),
(7, 9, 2, NULL, NULL),
(8, 10, 3, NULL, NULL),
(9, 11, 2, NULL, NULL),
(10, 12, 9, NULL, NULL),
(11, 13, 2, NULL, NULL),
(12, 14, 10, NULL, NULL),
(13, 15, 1, NULL, NULL),
(14, 16, 2, NULL, NULL),
(16, 2, 2, NULL, NULL),
(18, 21, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `name`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'ivamilkovski44@gmail.com', 'Iva Milkovski', 'Pitanje', 'Imam pitaje', 0, '2022-03-13 00:36:17', '2022-03-13 00:36:17'),
(2, 'ivamilkovski44@gmail.com', 'Iva Milkovski', 'Pitanje', 'Imam pitaje', 0, '2022-03-13 00:39:15', '2022-03-13 00:39:15'),
(3, 'ivamilkovski44@gmail.com', 'Iva Milkovski', 'Pitanje', 'Imam pitaje', 0, '2022-03-13 00:40:09', '2022-03-13 00:40:09'),
(4, 'ivamilkovski99@gmail.com', 'Iva Milkovski', 'Pitanje', 'Imamm poruku', 0, '2022-03-13 00:42:36', '2022-03-13 00:42:36'),
(5, 'ivamilkovski99@gmail.com', 'Iva Milkovski', 'Pitanje', 'Imamm poruku', 0, '2022-03-13 00:43:11', '2022-03-13 00:43:11'),
(6, 'ivamilkovski99@gmail.com', 'Iva Milkovski', 'Pitanje', 'Imamm poruku', 0, '2022-03-13 00:44:39', '2022-03-13 00:44:39'),
(7, 'ivamilkovski99@gmail.com', 'Iva Milkovski', 'Pitanje', 'Imamm poruku', 0, '2022-03-13 00:46:41', '2022-03-13 00:46:41'),
(8, 'korisnik@gmail.com', 'Korisnik Milkovski', 'Pitanje', 'Imam nekolko pitanja.', 0, '2022-03-13 10:19:45', '2022-03-13 10:19:45'),
(9, 'korisnik@gmail.com', 'Korisnik Milkovski', 'Pitanje', 'Imam nekolko pitanja.', 0, '2022-03-13 10:20:27', '2022-03-13 10:20:27'),
(10, 'korisnik@gmail.com', 'Korisnik Milkovski', 'Pitanje', 'Imam nekolko pitanja.', 0, '2022-03-13 10:20:45', '2022-03-13 10:20:45'),
(11, 'annaanic44@gmail.com', 'Ana Anic', 'Pitanje', 'Pitanje jedno', 0, '2022-03-13 10:21:38', '2022-03-13 10:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `url`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 0, NULL, NULL),
(2, 'About', 'about', 1, NULL, NULL),
(3, 'Shop', 'products.index', 2, NULL, NULL),
(4, 'Contact', 'contact.create', 3, NULL, NULL),
(5, 'Register', 'register.create', 4, NULL, NULL),
(6, 'Login', 'login.create', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_03_07_115318_create_tabel_menus', 1),
(4, '2022_03_07_143037_create_table_slider_images', 2),
(5, '2022_03_07_192313_create_products_table', 3),
(6, '2022_03_07_193158_create_prices_table', 3),
(7, '2022_03_07_193537_create_categories_table', 3),
(8, '2022_03_07_194018_create_colors_table', 3),
(9, '2022_03_07_194114_create_product_color_table', 3),
(10, '2022_03_09_113420_create_sizes_table', 4),
(11, '2022_03_09_113520_create_product_size_table', 4),
(12, '2022_03_09_212540_create_roles_table', 5),
(13, '2022_03_10_121153_create_products_table', 6),
(14, '2022_03_10_163614_create_product_color_table', 7),
(15, '2022_03_10_164248_create_product_size_table', 8),
(16, '2022_03_11_090924_create_users_table', 9),
(17, '2022_03_11_232414_create_product_size_table', 10),
(18, '2022_03_12_172619_create_product_color_table', 11),
(19, '2022_03_12_174612_create_color_product_table', 12),
(20, '2022_03_12_185558_create_category_product_table', 13),
(21, '2022_03_13_003034_create_contacts_table', 14),
(22, '2022_03_13_003319_create_user_activities_table', 15),
(23, '2022_03_13_022112_create_carts_table', 16),
(24, '2022_03_13_022314_create_cart_product_table', 17),
(25, '2022_03_13_022608_create_orders_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cart_id`, `postal_code`, `city`, `country`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 1, '19210', 'Bor', 'Serbia', '0676667734', '2022-03-13 08:10:12', '2022-03-13 08:10:12'),
(2, 2, '11030', 'Beograd', 'Serbia', '972716523', '2022-03-13 10:15:24', '2022-03-13 10:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(20) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `product_id`, `price`, `created_at`, `updated_at`) VALUES
(2, 2, '45.00', NULL, '2022-03-12 16:58:12'),
(3, 3, '32.00', NULL, NULL),
(4, 4, '15.00', NULL, NULL),
(6, 6, '150.00', NULL, NULL),
(8, 8, '20.00', NULL, NULL),
(9, 9, '30.00', NULL, NULL),
(10, 10, '40.00', NULL, NULL),
(11, 11, '10.00', NULL, NULL),
(12, 12, '35.00', NULL, NULL),
(13, 13, '27.00', NULL, NULL),
(14, 14, '23.00', NULL, NULL),
(15, 15, '18.00', NULL, NULL),
(16, 16, '21.00', NULL, NULL),
(17, 17, '19.00', NULL, NULL),
(18, 0, '28.00', NULL, NULL),
(19, 0, '25.00', NULL, NULL),
(20, 0, '27.00', NULL, NULL),
(21, 0, '30.00', NULL, NULL),
(22, 0, '14.00', NULL, NULL),
(29, 21, '24.00', '2022-03-13 09:01:24', '2022-03-13 09:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_price` bigint(20) UNSIGNED NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `id_price`, `featured`, `created_at`, `updated_at`) VALUES
(2, 'Single breasted  jacket', 'lil(2).jpg', 'Relaxed-fit, single-breasted jacket in twill. Vent at back. Lined.', 2, 0, NULL, '2022-03-12 16:58:12'),
(3, 'Tie-belt Jumpsuit', 'lil(3).jpg', 'Jumpsuit in woven fabric. Narrow, detachable, adjustable shoulder straps, sweetheart neckline at front with pleats, and seam at waist with removable tie belt. Straight, wide legs with pleats at top, diagonal side pockets, and a concealed zipper at one side. Lined at top.', 3, 0, NULL, NULL),
(4, 'Dress Pants', 'lil(4).jpg', 'Pants in woven fabric. High waist, pleats at front, and zip fly with hook-and-eye fastener. Side pockets, mock back pockets, and tapered, ankle-length legs with creases. Polyester content is partly recycled.', 4, 0, NULL, NULL),
(6, 'Double-breasted Wool-blend Coat', 'lil(6).jpg', 'Handmade, double-breasted, calf-length coat in a soft, felted wool blend. Oversized with a straight silhouette. Notched lapels, dropped shoulders, and welt front pockets. Unlined.', 6, 1, NULL, NULL),
(8, 'V-neck Blouse', 'lil(8).jpg', 'V-neck blouse in woven fabric with a sheen. Collar, buttons at front, and long sleeves with a sleeve placket and button at cuffs. Rounded hem.', 8, 0, NULL, NULL),
(9, 'Short Twill Skirt', 'lil(9).jpg', 'Short, slim-fit, skirt in cotton twill. Regular waist with buttons. Unlined.', 9, 0, NULL, NULL),
(10, 'Ribbed Velour Pants', 'lil(10).jpg', 'Pants in ribbed velour. High waist, waistband with covered elastic, and flared legs.', 10, 0, NULL, NULL),
(11, 'Crop Tank Top', 'lil(11).jpg', 'Fitted, sleeveless crop top in soft jersey.', 11, 0, NULL, NULL),
(12, 'Ribbed Turtleneck Sweater', 'lil(12).jpg', 'Relaxed-fit, turtleneck sweater in soft, rib-knit fabric with wool content. Long raglan sleeves.', 12, 1, NULL, NULL),
(13, 'Fleece Turtleneck Sweater', 'lil(13).jpg', 'Turtleneck sweater in soft fleece. Elasticized drawstring at neck, gently dropped shoulders, and long sleeves. Narrow trim at cuffs and hem.', 13, 0, NULL, NULL),
(14, 'Short-sleeved Blouse', 'lil(14).jpg', 'Blouse in a softly draped woven fabric. Round neckline with pleats for a softly draped effect and V-neck opening at front. Wide raglan sleeves ending just above elbows. Unlined.', 14, 0, NULL, NULL),
(15, 'Slit-hem Leggings', 'lil(15).jpg', 'Leggings in jersey with a high waist. Concealed, elasticized waistband, stitched creases at front, and slit at hems for added volume', 15, 0, NULL, NULL),
(16, 'Rhinestone-embellished Ribbed Cardigan', 'lil(16).jpg', 'Short cardigan in a soft rib knit. V-neck, buttons at front, and decorative rhinestones.', 16, 1, NULL, NULL),
(21, 'Skirt', 'lil(17).jpg', 'Long Black skirt.Fitted.', 29, 0, '2022-03-13 09:01:24', '2022-03-13 09:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(4, 2, 1, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 3, 1, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 3, 3, NULL, NULL),
(9, 4, 1, NULL, NULL),
(10, 4, 2, NULL, NULL),
(11, 4, 3, NULL, NULL),
(12, 2, 3, NULL, NULL),
(13, 8, 2, NULL, NULL),
(14, 8, 3, NULL, NULL),
(15, 9, 1, NULL, NULL),
(16, 9, 2, NULL, NULL),
(17, 10, 1, NULL, NULL),
(18, 10, 2, NULL, NULL),
(19, 10, 3, NULL, NULL),
(20, 11, 1, NULL, NULL),
(21, 16, 2, NULL, NULL),
(22, 16, 3, NULL, NULL),
(23, 9, 3, NULL, NULL),
(24, 13, 1, NULL, NULL),
(25, 13, 2, NULL, NULL),
(26, 13, 3, NULL, NULL),
(27, 12, 1, NULL, NULL),
(28, 12, 2, NULL, NULL),
(29, 12, 3, NULL, NULL),
(33, 21, 2, NULL, NULL),
(34, 21, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Small', NULL, NULL),
(2, 'Medium', NULL, NULL),
(3, 'Large', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subheader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image`, `alt`, `header`, `subheader`, `text`, `active`, `created_at`, `updated_at`) VALUES
(1, 'banner1.jpg', 'banner1 image', 'Lil\'Shop', 'A little shop for all you need', 'Try our clothes that can feat in any closet and discover the comfort of having a small number of pieces but infinite combinations.', 1, NULL, NULL),
(2, 'banner2.jpg', 'banner2 image', 'Classic Pieces', 'Everything you need', 'One color cloths that can be wore any year and still go with any current trend. Classic colors and designs.', 1, NULL, NULL),
(3, 'banner3.jpg', 'banner3 image', 'Free Worldwide Shipping', 'Get it quick and wear it anyway any day.', 'High quality clothing for a great price and free worldwide shipping all in one place.Find what you need and get it on your address in just a couple of days.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Iva', 'Milkovski', 'ivamilkovski44@gmail.com', '6efe0addccc5fb6d1dbf627f1e89fe6f', 1, NULL, NULL),
(2, 'Pera', 'Peric', 'peraperic@gmail.com', '98a4a0d0dac6e479ee08b363d8ed11ad', 2, NULL, NULL),
(3, 'Nina', 'Ristic', 'ninaristic@gmail.com', '25939e7d8fd23714c72af5b6d7deb4d9', 2, '2022-03-11 08:57:01', '2022-03-11 08:57:01'),
(4, 'Mina', 'Minic', 'mina999@gmail.com', 'e347111b44bdc15f2816fa9e78fdb615', 2, '2022-03-11 09:27:18', '2022-03-11 09:27:18'),
(5, 'Ratko', 'Ratkic', 'ratkoratkic@gmail.com', '82fa85d3d9568e8f346026a2896f16f0', 2, '2022-03-11 09:29:41', '2022-03-11 09:29:41'),
(6, 'Korisnik', 'Milkovski', 'korisnik@gmail.com', '60c5b02d7e7c682f4d56a64d99b9731a', 2, '2022-03-12 10:11:10', '2022-03-12 10:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_activities`
--

CREATE TABLE `user_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_activities`
--

INSERT INTO `user_activities` (`id`, `ip_address`, `user_id`, `activity`, `date`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 09:20:17', NULL, NULL),
(2, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 09:21:31', NULL, NULL),
(3, '127.0.0.1', 6, ' Removed item from Cart page.	', '2022-03-13 09:21:34', NULL, NULL),
(4, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 09:44:31', NULL, NULL),
(5, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 10:14:07', NULL, NULL),
(6, '127.0.0.1', 6, 'User is on order page.	', '2022-03-13 10:14:10', NULL, NULL),
(7, '127.0.0.1', 6, 'User has ordered from the site.	', '2022-03-13 10:14:37', NULL, NULL),
(8, '127.0.0.1', 6, 'User is on order page.	', '2022-03-13 10:14:38', NULL, NULL),
(9, '127.0.0.1', 6, 'User has ordered from the site.	', '2022-03-13 10:15:24', NULL, NULL),
(10, '127.0.0.1', 6, 'User has contacted the admin.	', '2022-03-13 10:21:38', NULL, NULL),
(11, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 12:53:07', NULL, NULL),
(12, '127.0.0.1', 6, 'User is on order page.	', '2022-03-13 12:53:15', NULL, NULL),
(13, '127.0.0.1', 1, ' Admin entered dashboard	', '2022-03-13 12:53:41', NULL, NULL),
(14, '127.0.0.1', 1, ' Admin entered dashboard	', '2022-03-13 13:09:15', NULL, NULL),
(15, '127.0.0.1', 1, 'User has logged out.	', '2022-03-13 14:16:34', NULL, NULL),
(16, '127.0.0.1', 6, 'login', '2022-03-13 14:31:06', NULL, NULL),
(17, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 14:31:40', NULL, NULL),
(18, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 14:32:56', NULL, NULL),
(19, '127.0.0.1', 6, ' Removed item from Cart page.	', '2022-03-13 14:33:04', NULL, NULL),
(20, '127.0.0.1', 6, 'User is on order page.	', '2022-03-13 14:33:07', NULL, NULL),
(21, '127.0.0.1', 6, 'User has logged out.	', '2022-03-13 14:33:27', NULL, NULL),
(22, '127.0.0.1', 6, 'login', '2022-03-13 16:47:55', NULL, NULL),
(23, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 16:48:06', NULL, NULL),
(24, '127.0.0.1', 6, 'User is on order page.	', '2022-03-13 16:51:14', NULL, NULL),
(25, '127.0.0.1', 6, 'User has logged out.	', '2022-03-13 16:52:38', NULL, NULL),
(26, '127.0.0.1', 1, 'login', '2022-03-13 16:52:54', NULL, NULL),
(27, '127.0.0.1', 1, ' Admin entered dashboard	', '2022-03-13 16:52:54', NULL, NULL),
(28, '127.0.0.1', 1, 'User has logged out.	', '2022-03-13 16:59:09', NULL, NULL),
(29, '127.0.0.1', 6, 'login', '2022-03-13 16:59:21', NULL, NULL),
(30, '127.0.0.1', 6, ' visited Cart page.	', '2022-03-13 16:59:24', NULL, NULL),
(31, '127.0.0.1', 6, 'User is on order page.	', '2022-03-13 16:59:28', NULL, NULL),
(32, '127.0.0.1', 6, 'User is on order page.	', '2022-03-13 17:12:09', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_product_product_id_foreign` (`product_id`),
  ADD KEY `cart_product_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_product_product_id_foreign` (`product_id`),
  ADD KEY `color_product_color_id_foreign` (`color_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `orders_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_size_product_id_foreign` (`product_id`),
  ADD KEY `product_size_size_id_foreign` (`size_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_activities`
--
ALTER TABLE `user_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD CONSTRAINT `cart_product_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `color_product`
--
ALTER TABLE `color_product`
  ADD CONSTRAINT `color_product_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `color_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);

--
-- Constraints for table `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product_size_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
