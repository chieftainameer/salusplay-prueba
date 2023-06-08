-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 06:24 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salusplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'aut dolorem ut', '', 1, '2023-06-08 14:07:52', '2023-06-08 15:26:16', NULL),
(2, 'voluptatem quia ut', 'voluptatem-quia-ut', 1, '2023-06-08 14:07:55', '2023-06-08 14:07:55', NULL),
(3, 'illo nemo animi', 'illo-nemo-animi', 1, '2023-06-08 14:07:58', '2023-06-08 15:47:54', NULL),
(4, 'minima tempora praesentium', 'minima-tempora-praesentium', 1, '2023-06-08 14:08:01', '2023-06-08 15:53:38', NULL),
(5, 'molestiae est similique', 'molestiae-est-similique', 1, '2023-06-08 14:08:04', '2023-06-08 14:08:04', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_06_07_150332_create_categories_table', 1),
(12, '2023_06_07_150359_create_recipes_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preparation_time` int(10) UNSIGNED NOT NULL COMMENT 'preparation time in seconds',
  `num_of_rationes` int(10) UNSIGNED NOT NULL,
  `ingredients` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedure` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `published_at` datetime NOT NULL DEFAULT '2023-06-07 15:19:46',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `category_id`, `title`, `slug`, `thumbnail`, `preparation_time`, `num_of_rationes`, `ingredients`, `procedure`, `visible`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'voluptas natus occaecati', 'voluptas-natus-occaecati', '5fa2d0107e59ac73f8cc431e71e13a6e.png', 72, 2, 'autem aliquam et voluptatem voluptatem aspernatur dicta error', 'Nisi optio temporibus dignissimos vel quia. Vel odit ut minus quis. Dolorem id perspiciatis saepe tempora provident. Ab non et accusantium in corrupti iure alias. Est voluptates ex dolorem temporibus recusandae. Ut assumenda et corrupti nam aliquid veritatis aut. Architecto laboriosam et veritatis voluptatem cupiditate molestiae.', 1, '2023-06-08 16:07:53', '2023-06-08 14:07:55', '2023-06-08 14:07:55', NULL),
(2, 1, 'perspiciatis sit et', 'perspiciatis-sit-et', '914461d574dadb63513e79efe176dc61.png', 121, 4, 'ut non quisquam', 'Est voluptatibus sunt deleniti veniam. Doloribus commodi accusantium error blanditiis quo odit iusto. Ut magni porro libero ut sunt eum.', 1, '2023-06-08 16:07:53', '2023-06-08 14:07:55', '2023-06-08 14:07:55', NULL),
(3, 1, 'fuga illo quia', 'fuga-illo-quia', '0ba78e6a3600c4e163dff9210d92d662.png', 73, 3, 'at error id repudiandae quisquam', 'Eius et quia deserunt doloribus qui possimus. Repellat quia blanditiis unde veritatis sapiente. Fuga totam fuga ad a vitae ut. Tempora dolores sunt dolore rem dolor in. Molestias blanditiis amet cum porro. Aliquam a in ut eos impedit. Ut autem dicta est facilis sit doloremque est est.', 1, '2023-06-08 16:07:54', '2023-06-08 14:07:55', '2023-06-08 14:07:55', NULL),
(4, 1, 'quia nihil aut', 'quia-nihil-aut', '0f58d9663bc875b0607c4c4e4c38129b.png', 81, 2, 'possimus aliquam accusamus id impedit laboriosam natus et', 'Repudiandae eos unde cum odit dolor dolorum repudiandae. Esse autem quo unde cumque alias beatae dolores. Et aliquid corporis sed modi doloremque dicta ipsa. Consectetur error qui maiores et ut voluptatem sint.', 1, '2023-06-08 16:07:55', '2023-06-08 14:07:55', '2023-06-08 14:07:55', NULL),
(5, 1, 'dolorem blanditiis qui', 'dolorem-blanditiis-qui', 'd29b2a4c2921fdc9cb567b2b2bb0e00f.png', 85, 4, 'odio odio sit iure inventore hic dicta aliquam', 'Enim neque neque suscipit inventore. Quo est eos ducimus ullam a. Dolorem qui maxime porro perferendis in. Quasi ad repellat voluptas dolorum nesciunt porro. Quos pariatur a molestiae consequuntur et dolorem. Reprehenderit cum voluptatem ab. Error hic laborum qui et vitae hic.', 1, '2023-06-08 16:07:55', '2023-06-08 14:07:55', '2023-06-08 14:07:55', NULL),
(6, 2, 'ut aliquid minima', 'ut-aliquid-minima', '220673cedeb16cf2c0bb403241764d19.png', 127, 3, 'laborum porro dolor recusandae', 'Fugit ut sunt hic saepe. Nihil iure et qui ad excepturi quia voluptatem eius. Recusandae odit nobis ratione voluptatibus dignissimos. Maiores tempora aut non est sunt facere quia. Error odit aut dolore nihil quia. Ullam cupiditate dignissimos laudantium sit nesciunt nisi consequatur aliquid. Aut ut animi dolor ut soluta blanditiis et. Autem tenetur ex repellendus.', 1, '2023-06-08 16:07:56', '2023-06-08 14:07:58', '2023-06-08 14:07:58', NULL),
(7, 2, 'aut sit ratione', 'aut-sit-ratione', '0d74c9ad70d4973f355109ddd8935905.png', 133, 1, 'laudantium nobis cupiditate ut neque necessitatibus quod temporibus', 'Ex perferendis voluptatem molestiae est quibusdam hic eligendi. Expedita repellendus ut qui autem temporibus. Modi porro et sit debitis distinctio adipisci. Sequi modi fugiat rerum sunt veniam. Laudantium ut est aut recusandae. Ratione occaecati aut quia reiciendis culpa ea. Sunt et ullam odio. Temporibus reprehenderit animi rerum ducimus consequatur deleniti placeat.', 1, '2023-06-08 16:07:56', '2023-06-08 14:07:58', '2023-06-08 14:07:58', NULL),
(8, 2, 'totam neque aut', 'totam-neque-aut', '4b22000e7828206b340ee08abcfd1ca5.png', 53, 1, 'necessitatibus tempora fugit voluptatem laboriosam beatae fuga', 'Cum accusamus quam ipsum eum. Ut ut sequi odio quo illo harum error cupiditate. Est reiciendis quo consequuntur perspiciatis aut facilis ut fuga. Non quia quo architecto vel natus. Sint sunt rem hic illum blanditiis similique. Voluptate eos rerum excepturi id qui. Nulla sit earum consequatur sit neque. Molestiae ut placeat eligendi.', 1, '2023-06-08 16:07:57', '2023-06-08 14:07:58', '2023-06-08 14:07:58', NULL),
(9, 2, 'et quia qui', 'et-quia-qui', 'c082bebae721611fd9d75b8692969598.png', 98, 3, 'corrupti dolores nihil quia', 'Explicabo ab accusamus iste quam quae ipsam recusandae. Omnis est voluptatem in nihil qui fuga eos quibusdam. Odit atque et sit in magni incidunt ullam ea. Et natus minus facere rem reiciendis sequi. Commodi ipsum et ducimus eum sit. Id eum hic recusandae voluptatibus error. Dolores ipsa et ut exercitationem at tempore. Dolores non qui dolorem ut nesciunt.', 1, '2023-06-08 16:07:58', '2023-06-08 14:07:58', '2023-06-08 14:07:58', NULL),
(10, 2, 'et qui voluptatem', 'et-qui-voluptatem', '68f2ed04347810767e70ab10dd405c57.png', 177, 5, 'qui enim praesentium explicabo quasi qui et earum velit', 'Doloribus quidem ex sequi magnam. Error eius fuga ipsam explicabo libero ut id. Voluptatem cum ducimus facilis facere. Error temporibus sed tempora iusto culpa. Consequatur enim asperiores nulla qui voluptates omnis. Maiores odio illum quia at eum nemo doloremque. Perferendis nisi repudiandae et.', 1, '2023-06-08 16:07:58', '2023-06-08 14:07:58', '2023-06-08 14:07:58', NULL),
(11, 3, 'molestias fuga consequuntur', 'molestias-fuga-consequuntur', '8fb7764141aad58134a9bb27544a8ad6.png', 121, 2, 'soluta optio quos dolorem qui', 'Sed tenetur qui et possimus quaerat dolor. Eos sunt praesentium autem quia. Saepe et in et aliquid amet. Sed esse laborum consequatur occaecati aliquid similique. Ex rerum reiciendis provident nisi accusamus voluptate iste. Nobis dolores rerum quidem omnis. Corrupti dolorum cupiditate mollitia a in ut id ipsa. Praesentium minima nisi illum magnam vero aut. Molestiae aperiam rerum ea tempore.', 1, '2023-06-08 16:07:59', '2023-06-08 14:08:01', '2023-06-08 15:47:54', NULL),
(12, 3, 'deleniti qui assumenda', 'deleniti-qui-assumenda', 'faeb6259b06e6cc0a3aff2e542bbe5a1.png', 125, 2, 'quas saepe ipsa adipisci aspernatur facere', 'Eveniet eveniet doloremque consequatur voluptatum. Omnis quidem dolore ut qui quasi molestiae cum. Odio dolores in sit. Eos sunt qui laborum magnam doloribus ipsa nulla dolores. A dolore excepturi veritatis fugit est et non ducimus. Nihil ab eveniet optio rem. Nulla et eaque provident aliquid. Voluptatum temporibus totam esse labore ut aut.', 1, '2023-06-08 16:07:59', '2023-06-08 14:08:01', '2023-06-08 15:47:54', NULL),
(13, 3, 'dolorem in ipsa', 'dolorem-in-ipsa', '087797e22f1a1328233c9d2d1eea5523.png', 150, 5, 'magnam aut hic deleniti', 'Modi magnam tempore quo impedit eum aut. At quia consectetur inventore et. Enim qui saepe quis voluptatibus nulla amet. Ad ab minus esse quibusdam amet voluptas omnis placeat. Ad accusamus quia odit. Dicta aliquid vero officiis est velit corrupti.', 1, '2023-06-08 16:08:00', '2023-06-08 14:08:01', '2023-06-08 15:47:54', NULL),
(14, 3, 'iste aut ducimus', 'iste-aut-ducimus', 'de852865966f50bc528c51b45f517578.png', 115, 5, 'aut eveniet amet et accusamus', 'Qui ducimus eveniet earum et odit autem nobis. Inventore similique nostrum necessitatibus dolorem exercitationem. Adipisci illo et iusto temporibus harum qui. Accusantium facilis illum dicta ratione incidunt sed.', 1, '2023-06-08 16:08:01', '2023-06-08 14:08:01', '2023-06-08 15:47:54', NULL),
(15, 3, 'nulla quia qui', 'nulla-quia-qui', '0e74e03b99bdb2e1185de7d6e962fdfd.png', 36, 1, 'sit quaerat explicabo fuga dolore quasi', 'Asperiores ut facilis accusantium aperiam. Quisquam quam voluptatibus vero animi. Quam rerum voluptates modi voluptatum. Mollitia ducimus occaecati itaque repudiandae odio dolores. Ut delectus nam explicabo deserunt. Laborum voluptatum error consequatur suscipit quis sed alias maxime. Illum aut vel molestias cumque adipisci suscipit. Ipsum aut veritatis beatae ab vel.', 1, '2023-06-08 16:08:01', '2023-06-08 14:08:01', '2023-06-08 15:47:54', NULL),
(16, 4, 'quibusdam sit tempora', 'quibusdam-sit-tempora', '6e55965b9a1bcc8a70cc841b0c17f1b4.png', 44, 1, 'doloremque distinctio et blanditiis', 'Maiores numquam corrupti et officiis similique enim. Dolores accusantium enim cumque quo. Quia vel commodi voluptates atque voluptatum quia dicta. Perferendis ea fugiat culpa odio autem. Vitae architecto sapiente nobis sit odit culpa quas. Dolorem sapiente facilis illo aut sint minus. Ad facere et molestiae doloremque.', 1, '2023-06-08 16:08:02', '2023-06-08 14:08:04', '2023-06-08 14:08:04', NULL),
(17, 4, 'quod aut accusantium', 'quod-aut-accusantium', 'abf19d5aec1fcd4959284e73f1628b63.png', 122, 4, 'qui ducimus pariatur quis ex', 'Consequatur deleniti eius dolore iusto sapiente nulla alias officiis. Sequi est corrupti repellat sed quia possimus. Et velit explicabo nulla. Et commodi molestias fugit quis cupiditate. Saepe et autem sed est totam soluta. Eos enim tenetur ratione repellat beatae aut nisi. Molestiae reiciendis aliquid expedita.', 1, '2023-06-08 16:08:02', '2023-06-08 14:08:04', '2023-06-08 14:08:04', NULL),
(18, 4, 'rerum suscipit libero', 'rerum-suscipit-libero', '6624fa07396e0c38533b174302d00895.png', 37, 4, 'accusamus ullam eius dolorum ut', 'Est minus et rerum laudantium odio. Veritatis nihil velit doloribus earum consequuntur. Ea qui dolorum eius impedit. Quia quos vel cum omnis. Eum natus quam eos eos quod debitis sunt. Suscipit illo commodi consequatur sunt sunt repudiandae blanditiis. Quis eaque et blanditiis ducimus placeat voluptas aliquid.', 1, '2023-06-08 16:08:03', '2023-06-08 14:08:04', '2023-06-08 14:08:04', NULL),
(19, 4, 'et ipsam qui', 'et-ipsam-qui', '56cf508a93da8f46e9eabffd9b391685.png', 147, 4, 'ipsum ullam eaque tempora velit eos', 'Illum necessitatibus libero voluptatum omnis. Eos ut laudantium numquam ab sunt neque omnis. Provident omnis illum quos molestiae. Voluptatem recusandae minus voluptates qui molestiae ut. Sint provident eum tempora ipsam pariatur.', 1, '2023-06-08 16:08:04', '2023-06-08 14:08:04', '2023-06-08 14:08:04', NULL),
(20, 4, 'officia nostrum nobis', 'officia-nostrum-nobis', '43fbd7ec3e06af6e25c5524f01c78033.png', 84, 1, 'autem eum sit animi quaerat sed rem magni nihil', 'Quas ad quasi rerum sed dolores ut dolores et. Quaerat modi dolores vitae qui velit illo autem. Delectus deleniti et et. Nulla et harum aliquid. Odio similique molestiae iure voluptas sequi sit amet. Magni labore eum saepe ex ipsa facere. Nobis aut autem doloribus sit. Ea ipsa omnis deserunt corporis vitae rerum maxime harum. Sit inventore est et nihil officiis non itaque dolorum.', 1, '2023-06-08 16:08:04', '2023-06-08 14:08:04', '2023-06-08 14:08:04', NULL),
(21, 5, 'iste perferendis nulla', 'iste-perferendis-nulla', '13f10ffe2bbe57c5d8b63cee17c9ed37.png', 159, 1, 'ipsa exercitationem vitae est quos deserunt numquam ipsum', 'Maiores consectetur molestiae aliquid rerum dolorum autem. Explicabo quae numquam ratione dolores quaerat aliquid. Doloribus quod molestias ipsa sed iste repellendus laudantium. Neque velit ut sapiente enim minus occaecati. Ratione dolorum et quis.', 1, '2023-06-08 16:08:05', '2023-06-08 14:08:07', '2023-06-08 14:08:07', NULL),
(22, 5, 'commodi voluptas accusantium', 'commodi-voluptas-accusantium', 'e9d3910a2c324785cf65a22254bd707e.png', 127, 4, 'animi et incidunt explicabo eos odit sint', 'Aspernatur est dolor accusamus sed cum autem. Recusandae quam velit exercitationem sed voluptas dolores ab hic. Architecto aut maiores occaecati et enim libero excepturi consequatur.', 0, '2023-06-08 16:08:05', '2023-06-08 14:08:07', '2023-06-08 16:07:06', NULL),
(23, 5, 'dolores maiores voluptate', 'dolores-maiores-voluptate', '1686245583.jpg', 87, 2, 'illum et quae aspernatur', 'Sapiente doloribus et et et adipisci voluptate voluptatem. Veniam quos eum totam fugit tenetur. Aspernatur odio possimus autem. Explicabo ea at quae porro sit aut dolorum. Pariatur consequatur repellendus et quisquam et dolor. Rerum non dolorum animi eum. Et voluptatem non error odio. Voluptatibus est vero soluta aut aliquam. Iusto ut inventore est debitis nostrum alias odio. Voluptas et sint in.', 0, '2023-06-08 16:08:06', '2023-06-08 14:08:07', '2023-06-08 15:33:03', NULL),
(24, 5, 'molestiae voluptatibus quis', '', '1686245086.jpg', 6, 5, 'saepe architecto exercitationem repellat voluptatem minus corporis', 'Nihil voluptatem officia animi officia. Cupiditate accusamus iusto neque. Quibusdam quod nisi sequi sed vel. Autem laboriosam voluptatem sapiente ea consequatur. Quibusdam voluptatem odit dolores dicta. Nemo repellendus tempora cumque occaecati consequuntur vel.', 1, '2023-06-08 16:08:06', '2023-06-08 14:08:07', '2023-06-08 15:24:46', NULL),
(25, 5, 'corporis rem sint', 'corporis-rem-sint', 'df9a677b3adc8e95432a2edfd410a970.png', 104, 5, 'perferendis est explicabo cum', 'Laudantium qui ut corrupti eos sit repellendus. Quia a omnis est libero blanditiis. Ea consequatur qui nihil ut exercitationem delectus sit. Autem labore maxime aperiam commodi enim sunt. Sapiente qui perspiciatis amet quis omnis nisi. Voluptatem facilis delectus porro iure vero aut sapiente. Dignissimos et quia et reprehenderit ea vel et.', 1, '2023-06-08 16:08:07', '2023-06-08 14:08:07', '2023-06-08 15:08:53', '2023-06-08 15:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aric Ernser', 'levi.hirthe@example.org', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2AwIiGS9pv', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(2, 'Hilario Hamill Jr.', 'glen.cummings@example.com', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'r0E2lRsL01', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(3, 'Rasheed Mayert', 'sanford.oconner@example.com', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wa1vYIdwYk', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(4, 'Haven Yost Jr.', 'hglover@example.com', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MlyLIPjWvj', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(5, 'Alaina Kuvalis', 'ahand@example.net', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SClsmqtBGf', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(6, 'Prof. Martine Bins DVM', 'rice.graciela@example.org', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PCrgyh19EL', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(7, 'Dixie Marvin', 'edgar.ondricka@example.org', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bolec4pNFI', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(8, 'Anissa Ward PhD', 'swift.deonte@example.org', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cdUQfoUqma', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(9, 'Prof. Howard Heathcote', 'schimmel.luisa@example.net', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KbTT1I9MKt', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(10, 'Pierre Stokes V', 'adickens@example.org', '2023-06-07 14:51:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rnUUoxW87f', '2023-06-07 14:51:40', '2023-06-07 14:51:40'),
(11, 'Dr. Clement Bruen', 'cronin.julianne@example.net', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mMQz4xKRlO', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(12, 'Ms. Mertie Sanford DVM', 'btromp@example.net', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qFqPu3gbl6', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(13, 'Deion Keebler', 'jairo41@example.com', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1PuVYxKdRX', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(14, 'Rod Ratke', 'crowe@example.net', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bilmZ5MjoE', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(15, 'Scottie Collier Sr.', 'kmertz@example.net', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'M2ITEvSq1R', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(16, 'Ethan Gutkowski', 'christiansen.tatum@example.org', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XhhM5Epvp2', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(17, 'Maryjane Conn II', 'yblick@example.org', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YTzV7PGiLl', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(18, 'Allie Mante I', 'mohr.emerson@example.net', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CdNHLGfZul', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(19, 'Mrs. Rosalee Homenick', 'felicita.christiansen@example.org', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2AuyyQjOpz', '2023-06-07 15:13:15', '2023-06-07 15:13:15'),
(20, 'Bernice Goodwin DVM', 'abshire.leopold@example.net', '2023-06-07 15:13:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SRr0FWSKgW', '2023-06-07 15:13:15', '2023-06-07 15:13:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_title_unique` (`title`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recipes_title_unique` (`title`),
  ADD UNIQUE KEY `recipes_slug_unique` (`slug`),
  ADD KEY `recipes_category_id_foreign` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
