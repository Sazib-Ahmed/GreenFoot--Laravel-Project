-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2023 at 04:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenfoot`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `cover`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Bags', 'bags', NULL, NULL, '2022-11-25 04:33:13', '2022-11-25 04:33:13'),
(2, 'Cutlery', 'cutlery', NULL, NULL, '2022-11-27 13:23:24', '2022-11-27 13:23:24'),
(3, 'Toiletries', 'toiletries', NULL, NULL, '2022-11-27 13:35:24', '2022-11-27 13:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `ecoshops`
--

CREATE TABLE `ecoshops` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `area` varchar(100) NOT NULL,
  `map` text NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecoshops`
--

INSERT INTO `ecoshops` (`id`, `name`, `address`, `image`, `area`, `map`, `description`, `created_at`, `updated`) VALUES
(1, 'Genius Shopping Center', '\r\n24/4/A, Basundhara R/A Main Road, Dhaka - 1229', '', 'Bashundhara', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14600.731537036534!2d90.4224533!3d23.8120949!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1bf9a1cec1e2c34!2sGenius%20Shopping%20Center!5e0!3m2!1sen!2sbd!4v1669448961181!5m2!1sen!2sbd', 'Nice supershop offering affordable prices in Bashundhara R/A. Nearly all day to day products can be purchased from here.\r\n\r\nPricing is better than other mega super shops.', '2022-11-26 08:45:22', '2022-11-26 08:45:22'),
(2, 'Prince Bazar Ltd.', '30 Ring Rd, Shyamoli, Dhaka', '', 'Shyamoli', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14605.02541330086!2d90.3620191!3d23.773884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf08a09dc617bf77f!2sPrince%20Bazar%20Ltd.!5e0!3m2!1sen!2sbd!4v1669449060738!5m2!1sen!2sbd', 'It\'s the food and groceries you love, delivered within minutes. What are you hungry for today? Download the foodpanda app now and get inspired. Easy ordering process.', '2022-11-26 08:50:52', '2022-11-26 08:50:52'),
(3, 'Agora', '37, RM Center, Plot-5, 101 Gulshan Ave, Dhaka 1212', '', 'Gulshan', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.8411478059857!2d90.41397741534523!3d23.78867039322937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a197edc16f%3A0x70410d00b7ecb6a2!2sAgora!5e0!3m2!1sen!2sbd!4v1669449339604!5m2!1sen!2sbd', 'This is one of the best super shops chains in the country. Though the place is congested, they have a great collection of products.', '2022-11-26 08:54:49', '2022-11-26 08:54:49'),
(4, 'Shwapno', ' V9FR+W99, Gareeb-e-Nawaz Ave, Dhaka 1230', '', 'Uttara', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14593.673028719522!2d90.3909903!3d23.8747829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc26fd61703a356!2sShwapno!5e0!3m2!1sen!2sbd!4v1669449700856!5m2!1sen!2sbd', 'Discover a world of freshness, warm service and value.\r\nWith over 60 outlets, Shwapno is the largest grocery chain in Bangladesh and Best Retail Brand in the country. As part of the Shwapno family, your satisfaction and wellbeing are what we work diligently to ensure.', '2022-11-26 08:59:15', '2022-11-26 08:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foodprints`
--

CREATE TABLE `foodprints` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `upc` varchar(1000) NOT NULL,
  `amount` int(100) NOT NULL,
  `emission` int(100) NOT NULL,
  `impact` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodprints`
--

INSERT INTO `foodprints` (`id`, `name`, `upc`, `amount`, `emission`, `impact`, `image`) VALUES
(1, 'Beef', '020357122682', 5, 36, 'High', 'beef.jpg'),
(2, 'Cheese', '987654321098', 2, 10, 'Average', 'cheese.png'),
(3, 'Drinks', '8941100619452', 1, 15, 'High', 'coke.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Category', 1, '42593206-4b2d-437e-9590-62a8a418f279', 'photo', '638099e01baae_Jute-Bags-Market', '638099e01baae_Jute-Bags-Market.jpg', 'image/jpeg', 'public', 'public', 26855, '[]', '[]', '[]', '[]', 1, '2022-11-25 04:33:14', '2022-11-25 04:33:14'),
(2, 'App\\Models\\Product', 1, '2e904cb7-7b95-4eb1-9403-bfb584b1ec29', 'gallery', '63809be360545_Jute-bag-No-Plastic', '63809be360545_Jute-bag-No-Plastic.jpg', 'image/jpeg', 'public', 'public', 151275, '[]', '[]', '[]', '[]', 1, '2022-11-25 04:41:40', '2022-11-25 04:41:40'),
(3, 'App\\Models\\Category', 2, '4269959c-55d2-4316-8f13-dff2beb4218e', 'photo', '6383b928341b0_ezgif.com-gif-maker (13)', '6383b928341b0_ezgif.com-gif-maker-(13).jpg', 'image/jpeg', 'public', 'public', 482987, '[]', '[]', '[]', '[]', 1, '2022-11-27 13:23:25', '2022-11-27 13:23:25'),
(4, 'App\\Models\\Product', 2, 'c5e7e79e-f478-4265-8095-434a70653b81', 'gallery', '6383ba842a09d_8cac34f6675dcd10e90a859a25d45116', '6383ba842a09d_8cac34f6675dcd10e90a859a25d45116.jpg', 'image/jpeg', 'public', 'public', 33192, '[]', '[]', '[]', '[]', 1, '2022-11-27 13:29:35', '2022-11-27 13:29:35'),
(5, 'App\\Models\\Product', 2, 'd28e4338-e60f-4aa1-995c-9172e902e0d3', 'gallery', '6383ba8b660a5_giant_138218', '6383ba8b660a5_giant_138218.jpg', 'image/jpeg', 'public', 'public', 60999, '[]', '[]', '[]', '[]', 2, '2022-11-27 13:29:35', '2022-11-27 13:29:35'),
(6, 'App\\Models\\Category', 3, '5e2fa42d-a0bf-4b5a-a282-be43656efad4', 'photo', '6383bbf7a6da6_set-sustainable-toiletries-bathroom-products-pink-background-eco-friendly-zero-waste-concept-copy-space-flat-lay-193316417', '6383bbf7a6da6_set-sustainable-toiletries-bathroom-products-pink-background-eco-friendly-zero-waste-concept-copy-space-flat-lay-193316417.jpg', 'image/jpeg', 'public', 'public', 35581, '[]', '[]', '[]', '[]', 1, '2022-11-27 13:35:24', '2022-11-27 13:35:24');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_30_011648_create_categories_table', 1),
(6, '2022_04_19_071658_create_media_table', 1),
(7, '2022_04_27_063355_create_tags_table', 1),
(8, '2022_04_28_210054_create_products_table', 1),
(9, '2022_05_05_055458_create_product_tag_table', 1),
(10, '2022_08_15_055828_create_orders_table', 1),
(11, '2022_08_16_053218_create_order_items_table', 1),
(12, '2022_08_16_053450_create_shipments_table', 1),
(13, '2022_08_16_053945_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` datetime NOT NULL,
  `payment_due` datetime NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_total_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` decimal(16,2) NOT NULL DEFAULT 0.00,
  `grand_total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_city_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_province_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_postcode` int(11) DEFAULT NULL,
  `shipping_courier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `cancelled_by` bigint(20) UNSIGNED DEFAULT NULL,
  `cancelled_at` datetime DEFAULT NULL,
  `cancellation_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payloads` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`payloads`)),
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `va_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biller_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` decimal(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `quantity`, `description`, `details`, `weight`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Jute Grocery Bag', 'jute-grocery-bag', 200, 100, 'Our Sustainable Plain Jute Shopping Bags are highly stylish and Reusable to allow all customers the comfort of style as well as reliability when our customers use it.\r\n\r\nIn addition to our range of jute bags, we also specialize in printing Jute Bags that come in a wide variety of shapes and sizes.\r\n\r\nWe love to use our jute shopping bags for purchasing to the high street as they are durable and capable of carrying many items due to their large side and bottom gussets.', 'Our eco-friendly Jute bags have a tighter and softer weave than Cotton Bags from other wholesale jute bag suppliers, making them suitable for screen printing.', '100.00', 1, '2022-11-25 04:41:40', '2022-11-25 04:41:40'),
(2, 'Bamboo Cooking Spoon 4 pieces set with Holder (11.5×1.5×0.25 Inches)', 'bamboo-cooking-spoon-4-pieces-set-with-holder-11-5-1-5-0-25-inches', 227, 100, 'Made of natural Bamboo spoon.\r\nDemotion per Spoons 11.5×1.5×0.25 inches.\r\n4 pieces set in a packed with spoon holder.\r\nBring Asian cuisine into your kitchen.\r\nPerfect for nonstick cookware including wok.\r\nIdeal for stir-frying, sauteing, deep frying, steaming and parboiling, scooping rice and more.\r\nincluded components: 4 Piece Spoon Set.\r\nBamboo is the fastest growing plant in the world and belongs to grass, not trees.\r\nWelcome to COOK with the hard and light grass.\r\nBamboo is a kind of long-term use.\r\nWear - resistant product.\r\nlight Product.\r\nAnti - pollution and anti - odor environmental protection natural material product.', 'Safe and Natural Choice – This cooking utensils set made from 100% natural bamboo. These are hand crafted, made from a single piece of bamboo, not laminated pieces and no harmful chemicals. Eco-friendly and extremely sustainable. Absolutely safe and healthy for your family and love ones. Set Includes: A Curved Spatula, A Slotted Spoon, A Solid Spatula, A Spoon Fork, A Solid Spoon with A Bamboo Holder.Durable and Light Weight – These bamboo wooden spoons for cooking are long-lasting and extremely durable than other wooden and plastic utensils. These are lightweight, functional and comfortable to use. Handles of utensils are easy to grip. Your hands wont get tired from all of that stirring/mixing while cooking/baking.Perfect for Nonstick Cookware – The cooking spatulas are gentle on nonstick surfaces. They don’t scratch and damage your nonstick pots and pans. They don’t harm your finest and expensive cooking pots. Thus, will extend the life of all your kitchen cookware.Space Saving – Organize your utensils in our classy must have bamboo utensil holder. Keeping all utensils in one holder allows you to get the required tool while cooking conveniently. This bamboo holder takes less space on the shelf/cabinet. Moreover, each spatula/spoon has hanging hole handle so you can hang up the utensils to save space.Heat & Odor Resistance – This bamboo utensil set is heat, stain and odor resistant. Bamboni products are easy to clean. Hand wash with mild soap and water and then let them dry.', '100.00', 2, '2022-11-27 13:29:35', '2022-11-27 13:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `area` varchar(100) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `address`, `image`, `area`, `map`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Wooden Spoon', '304/7 NSU Main Campus Rd, Dhaka 1229', '', 'Bashundhara', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.117332465926!2d90.42302901534555!3d23.814426392243462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a541d1c745%3A0xb5488f9cb16988dd!2sWooden%20Spoon!5e0!3m2!1sen!2sbd!4v1669440524594!5m2!1sen!2sbd    &q=Space+Needle,Seattle+WA', 'Escape the world with our signature cakes,artisan bread, fresh out-of-the-oven croissants or even sourdough pizzas.', '2022-11-25 21:09:20', '2022-11-25 21:09:20'),
(2, 'Seasonal Tastes', 'The Westin, Main Gulshan Ave, Dhaka 1212', '', 'Gulshan', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7092543938547!2d90.4146485!3d23.793365599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b5c7fd929d%3A0x6ba7f3ac5654648e!2sSeasonal%20Tastes!5e0!3m2!1sen!2sbd!4v1669440450207!5m2!1sen!2sbd', 'Pan-Asian a la carte & buffet options offered in a relaxed setting inside The Westin Dhaka hotel.', '2022-11-25 21:13:37', '2022-11-25 21:13:37'),
(4, 'NORTH END Coffee Roasters', '\r\nKHA-47-1 Pragati Sharani Badda, Dhaka City Bangladesh', '', 'Badda', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14602.804687176169!2d90.4241273!3d23.7936533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7114793d522be880!2sNORTH%20END%20Coffee%20Roasters!5e0!3m2!1sen!2sbd!4v1669442772766!5m2!1sen!2sbd', 'North End Coffee Roasters is a great source for fresh-roasted coffee in Bangladesh. “North End” alludes to both to their location in the North part of Dhaka and their roots in the famous Italian-American “North End” of Boston. Begun in 2011, they offer both premium quality single-origin coffees from around the world and locally-grown blends.', '2022-11-26 07:05:07', '2022-11-26 07:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `track_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_weight` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `shipped_at` datetime DEFAULT NULL,
  `shipped_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Budget Item', 'budget-item', '2022-11-25 04:40:13', '2022-11-25 04:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `trees`
--

CREATE TABLE `trees` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `number_of_tree` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `address`, `address2`, `province_id`, `city_id`, `postcode`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$10$lBRRUcq3.MXsRphjH/b57.c3u9Vkr34ZkCg/3PGwOaG5oPbWKxPge', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'bkrBRO1REgn3YYQNnPsnAZkMHJFy73AJWp2tHp5uwbDU35Yr0znCTistgpwr', NULL, NULL),
(2, 'Sazib Ahmed', 'sazibahmed9@gmail.com', NULL, '$2y$10$8bQWUJbQjgQC7UkF0CeXuOdOa7e0/mwLxTbfR93pFvMlXrsv2Hp.q', 0, NULL, NULL, NULL, NULL, NULL, NULL, '4mEajlEKl0vxSu22ijhF6h2HaiYL15kky39IweCftfVZ2D8Mdam162XkKS5O', '2022-11-24 09:07:19', '2022-11-24 09:07:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `ecoshops`
--
ALTER TABLE `ecoshops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foodprints`
--
ALTER TABLE `foodprints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

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
  ADD UNIQUE KEY `orders_code_unique` (`code`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_approved_by_foreign` (`approved_by`),
  ADD KEY `orders_cancelled_by_foreign` (`cancelled_by`),
  ADD KEY `orders_payment_token_index` (`payment_token`),
  ADD KEY `orders_code_index` (`code`),
  ADD KEY `orders_code_order_date_index` (`code`,`order_date`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_number_unique` (`number`),
  ADD KEY `payments_order_id_foreign` (`order_id`),
  ADD KEY `payments_number_index` (`number`),
  ADD KEY `payments_method_index` (`method`),
  ADD KEY `payments_token_index` (`token`),
  ADD KEY `payments_payment_type_index` (`payment_type`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tag_product_id_foreign` (`product_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_user_id_foreign` (`user_id`),
  ADD KEY `shipments_order_id_foreign` (`order_id`),
  ADD KEY `shipments_shipped_by_foreign` (`shipped_by`),
  ADD KEY `shipments_track_number_index` (`track_number`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `trees`
--
ALTER TABLE `trees`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ecoshops`
--
ALTER TABLE `ecoshops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodprints`
--
ALTER TABLE `foodprints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trees`
--
ALTER TABLE `trees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_cancelled_by_foreign` FOREIGN KEY (`cancelled_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `shipments_shipped_by_foreign` FOREIGN KEY (`shipped_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `shipments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
