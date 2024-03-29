-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 07:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arthbodh`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1711020316.Arthbodh_Logo_Colour-03.png', 'A Commitment to Your Financial Freedom', 'Arthbodh is managed by an investment team having more than 60 Years of combined experience headed by Mr. Bhushan Mahajan, who has spent three decades in equity & amp; debt markets & amp; is considered an authority in stocks and mutual funds. He has excellent network with fund managers, stock market stalwarts and analysts, due to his position as Ex-President of Pune Stock Exchange. He writes a weekly column in SAKAL covering stocks and investments (More than 1300 articles published so far).', '2023-07-03 15:27:33', '2024-03-21 11:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `aboutpage`
--

CREATE TABLE `aboutpage` (
  `id` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutpage`
--

INSERT INTO `aboutpage` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Arthbodh is a leading financial Advisory and wealth management firm. \'ARTH\' in Sanskrit means Finance and \'BODH\' means awakening with knowledge. In Arthbodh, we strive to offer complete and transparent information before recommending a product to suit the client.</p><p><span style=\"color: rgb(103, 103, 103); font-family: Roboto, sans-serif; background-color: rgb(255, 251, 249);\">Our LOGO symbolizes a honeybee structure promoting accumulation of wealth and a leaf from \'Kalpavriksha\' tree (symbolized in Indian mythology as a tree fulfilling your dreams, when you take shelter). Kalpavriksha inspires us to offer our best services to realize your every dream, once you associate with Team Arthbodh. We have capability and network to offer products to suit every risk profile and time horizon.</span><br></p>', '2023-07-04 16:20:32', '2024-03-22 07:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-04-03 04:50:44', 'e6e061838856bf47e1de730719fb2609', NULL, '2023-04-03 04:50:44', '2023-10-17 07:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, '95476939.png', 'Celebrating 6 Decades of Growth & Trust', 'With a rich legacy of providing exceptional financial services, building enduring client relationships, and consistently delivering reliable results, Kirtane & Pandit showcases our commitment to excellence, expertise, and a proven track record of success, instilling confidence in our clients to entrust us with their financial matters.', 1, '2023-07-03 14:42:03', '2023-07-11 07:02:57'),
(3, '39662646.png', 'Adding Value to your Success', 'We believe in being a trusted partner who consistently adds value to our clients\' endeavours. Our primary objective is to go beyond routine accounting and auditing services by providing strategic insights and tailored financial solutions that enhance our clients\' success. By understanding their unique business needs, we can offer valuable advice, proactive planning, and innovative ideas that contribute directly to their growth, profitability, and long-term prosperity.', 1, '2023-07-03 14:43:03', '2023-07-03 09:13:03'),
(4, '35933067.png', 'Partnering your Success', 'We strive to form strong partnerships with our clients, where we actively collaborate to achieve their goals and aspirations. By working closely with our clients, we help them navigate complex financial landscapes, capitalize on market trends, make informed decisions, and ultimately propel their success forward. Our success lies in being an integral part of their journey towards achieving their objectives.', 1, '2023-07-03 14:44:34', '2023-07-03 09:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `short_description`, `description`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, '1711104542.2 (5).jpg', 'Covid-19 threatens the next generation of smartphones', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla. Interactively transform magnetic growth strategies whereas prospective \"outside the box\" thinking.', '<span style=\"color: rgb(103, 103, 103); font-family: Roboto, sans-serif;\">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</span>\" required>We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</span>\" required><span style=\"color: rgb(103, 103, 103); font-family: Roboto, sans-serif;\">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</span>', '2024-03-22', 1, '2023-07-05 10:54:09', '2024-03-22 10:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '87698620.png', 'Open Door Policy', 'We come together wherever we are – across time zones, regions, offices and screens. You will receive support from your teammates anytime and anywhere.', '2023-07-05 11:52:30', '2023-07-11 07:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'CEM Electromech', '16411458.png', '2023-04-04 11:46:17', '2023-04-04 23:22:22'),
(2, 'Bharat Forge', '37215828.png', '2023-04-05 04:53:30', '2023-04-04 23:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `location`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Chennai Office', 'No. 11, 2nd Floor Rosy Tower, 7 Nungambakkam High Road, Chennai – 600 034, India', '09916466614', 'kpcabengaluru@kirtanepandit.com', '2023-07-13 12:28:35', '2023-07-13 06:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `core`
--

CREATE TABLE `core` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `core`
--

INSERT INTO `core` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Honesty and Integrity', 'Our company exists to help merchants sell more. We make every decision and measure every outcome based on how well it serves our customers.', '2023-07-04 17:22:24', '2023-07-11 07:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Ganesh Visarjan', '86241993.jpg', '2023-04-05 06:15:51', '2023-04-05 00:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `expo`
--

CREATE TABLE `expo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expo`
--

INSERT INTO `expo` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PROCHEMTECH EXPO', '4417480.jpg', '2023-04-05 06:20:05', '2023-04-05 00:50:05');

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangalore Seminar', 1, '2023-07-11 14:47:04', '2023-07-11 12:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` date NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `image`, `title`, `description`, `date`, `pdf`, `created_at`, `updated_at`) VALUES
(3, '46588128.jpg', 'Future of Consumer Durables in India', 'With rising disposable incomes, evolving consumer preferences, and technological advancements, the future of consumer durables in India looks promising, marked by a growing demand for innovative and energy-efficient products that enhance convenience and quality of life.', '2023-05-29', '168844794987759.pdf', '2023-07-04 10:49:10', '2023-07-04 05:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `current_ctc` varchar(255) NOT NULL,
  `expect_ctc` varchar(255) NOT NULL,
  `ref_by` varchar(255) DEFAULT NULL,
  `resume` varchar(255) NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `job_id`, `name`, `email`, `phone`, `qualification`, `experience`, `address`, `current_ctc`, `expect_ctc`, `ref_by`, `resume`, `source`, `created_at`, `updated_at`) VALUES
(1, 1, 'manoj', 'manoj@ycstech.in', '9879879879', 'bcs', '1', 'kothrud', '2.7', '4.5', 'Friend', '1689182895-ravi-pandit.jpg', 'FB', '2023-07-12 22:58:15', '2023-07-12 17:37:17');

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
(5, '2023_04_03_041823_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Kirtane & Pandit celebrates its 68th Foundation Day', NULL, '0000-00-00 00:00:00', '2023-07-13 05:36:43'),
(2, 'ICAI commences 75th year celebrations ', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Kirtane & Pandit starts incubator for startups at Bengaluru office', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'We opened our Chennai Office for regular operations', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'We our Mumbai office shifted base to a new centrally located office in Dadar', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL,
  `designation_name` varchar(255) NOT NULL,
  `job_description` mediumtext NOT NULL,
  `location` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opportunities`
--

INSERT INTO `opportunities` (`id`, `designation_name`, `job_description`, `location`, `qualification`, `experience`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Finance Manager', 'Seamless importing and round-tripping of Microsoft Project plans, Excel files & CSV files.', 'Baner, Pune', 'Test', '2 Years', 'kpca@kirtanepandit.com', 1, '2023-07-05 12:37:29', '2023-07-13 05:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `partners_cat_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partners_category`
--

CREATE TABLE `partners_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners_category`
--

INSERT INTO `partners_category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Advisory Board', 1, '2023-07-11 13:17:09', '2023-07-11 11:17:43');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `service_content` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_cat_id`, `title`, `image`, `description`, `service_content`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Attest & Assurance', '1688119502.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', '<p class=\"font-md color-grey-500 mb-30\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(61, 86, 95); font-family: Manrope, sans-serif; margin-bottom: 30px !important; line-height: 24px !important;\">In an ever-evolving audit and assurance function, we have been constantly ensuring high-quality, independent financial statement audits for our clients. We also strive to unlock valuable insights and solutions based on an in-depth understanding of an organization’s business and industry, the regulatory framework applicable to the organization and innovative audit methodologies and procedures. Our team includes experienced and professional chartered accountants and other professionals. Our team members carry formal certifications in relevant service areas. Our engagement team comprises an optimum mix of senior resources and subject matter experts.</p><h6 class=\"color-brand-1 font-md-bold\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-weight: 700; line-height: 24px; font-size: 16px; padding: 0px; border: 0px; vertical-align: baseline; font-family: Manrope, sans-serif; color: rgb(1, 53, 86) !important;\">Spectrum of our Audit &amp; Assurance Services includes:</h6><ul class=\"list-number\" style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border: 0px; font-size: 14px; vertical-align: baseline; list-style: decimal; color: rgb(33, 37, 41); font-family: Manrope, sans-serif;\"><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Attest Services – Statutory Audits</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Attest Services – Audits under the Income Tax Act, 1961</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Annual Reviews of statements of US GAAP / IFRS adjustments</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Advisory and Implementation Support for transition to Ind AS, IFRS, US GAAP</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Due Diligence &amp; Valuation Services</a></li></ul><h6 class=\"color-brand-1 font-md-bold mt-30\" style=\"margin-bottom: 0px; font-weight: 700; line-height: 24px; font-size: 16px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: Manrope, sans-serif; margin-top: 30px !important; color: rgb(1, 53, 86) !important;\">We endeavor to achieve high standards of audit by:</h6><ul class=\"list-number\" style=\"padding: 0px 0px 0px 15px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border: 0px; font-size: 14px; vertical-align: baseline; list-style: decimal; color: rgb(33, 37, 41); font-family: Manrope, sans-serif;\"><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Carefully studying and planning the audit assignment to surpass client expectations</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Effectively Managing an engagement</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Continuous and effective communication with the client</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Adopting a solution-oriented approach during the audit</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Advising client on mitigation of compliance and operational risks</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Deploying Kirtane &amp; Pandit – Value Analytics which is our in-house designed CAAT</a></li><li style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; vertical-align: baseline;\"><a style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; transition: all 0.3s ease 0s; line-height: 32px;\">Providing value-adding services to clients</a></li></ul>', 1, '2023-06-30 15:35:02', '2023-07-07 07:26:28'),
(3, 1, 'IND - AS, I GAAP, IFRS Advisory', '1688120747.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-06-30 15:55:47', '2023-07-03 06:41:03'),
(4, 1, 'Internal Audit & Risk Management', '1688120890.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-06-30 15:58:10', '2023-07-07 07:58:46'),
(5, 1, 'IFC Advisory', '1688120973.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-06-30 15:59:33', '2023-07-03 06:41:03'),
(6, 2, 'Direct Taxation', '1688121076.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-06-30 16:01:16', '2023-07-03 06:41:03'),
(10, 2, 'Indirect Taxation', '1688359201.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:10:01', '2023-07-03 06:41:03'),
(11, 2, 'Litigation', '1688359262.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:11:02', '2023-07-03 06:41:03'),
(12, 3, 'Statutory Audits', '1688359348.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:12:28', '2023-07-03 06:41:03'),
(13, 3, 'Internal Audits', '1688359445.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:14:05', '2023-07-03 06:41:03'),
(14, 3, 'Concurrent Audits', '1688359523.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-07-03 10:15:23', '2023-07-03 06:41:03'),
(15, 3, 'Treasury Audits', '1688359583.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:16:23', '2023-07-03 06:41:03'),
(16, 3, 'Fund Accounting', '1688359638.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-07-03 10:17:18', '2023-07-03 06:41:03'),
(17, 3, 'Risk Management', '1688359685.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:18:05', '2023-07-03 06:41:03'),
(18, 3, 'Forensic', '1688359737.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-07-03 10:18:57', '2023-07-03 06:41:03'),
(19, 3, 'Derivative Process AuditsC Advisory', '1688359814.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:20:14', '2023-07-03 06:41:03'),
(20, 4, 'Forensic & Fraud Investigations', '1688359870.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:21:10', '2023-07-03 06:41:03'),
(21, 4, 'Transaction Advisory', '1688359953.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:22:33', '2023-07-03 06:41:03'),
(22, 4, 'Due diligence, Mergers & Acquisitions', '1688359995.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-07-03 10:23:15', '2023-07-03 06:41:03'),
(23, 4, 'Sustainability Advisory & ESG', '1688360064.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:24:24', '2023-07-03 06:41:03'),
(24, 4, 'Advisory Solutions', '1688360113.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:25:13', '2023-07-03 06:41:03'),
(25, 5, 'Security Audit', '1688360171.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:26:11', '2023-07-03 06:41:03'),
(26, 5, 'Consulting', '1688360236.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:27:16', '2023-07-03 06:41:03'),
(27, 5, 'Testing', '1688360310.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-07-03 10:28:30', '2023-07-03 06:42:37'),
(28, 5, 'Data Security & Privacy', '1688360417.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:30:17', '2023-07-03 06:41:03'),
(29, 5, 'Governance & Risk', '1688360504.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den.', NULL, 1, '2023-07-03 10:31:44', '2023-07-03 06:42:56'),
(30, 6, 'Accounting & Compliances', '1688360580.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:33:00', '2023-07-03 06:41:03'),
(31, 6, 'Payroll Processing', '1688360643.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:34:03', '2023-07-03 06:41:03'),
(32, 6, 'Reconciliation', '1688360741.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-07-03 10:35:41', '2023-07-03 06:41:03'),
(33, 6, 'Resource Augmentation / Co Sourcing', '1688360796.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-07-03 10:36:36', '2023-07-03 06:41:03'),
(34, 6, 'Inventory Verification', '1688360848.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:37:28', '2023-07-03 06:41:03'),
(35, 6, 'Fixed Asset Verification', '1688360926.png', 'Discover powerful features to boost your productivity.', NULL, 1, '2023-07-03 10:38:46', '2023-07-03 06:41:06'),
(36, 6, 'Audit Support Services', '1688360964.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:39:24', '2023-07-03 06:41:00'),
(37, 6, 'Virtual CFO', '1688361006.png', 'Discover powerful features to boost your productivity. You are always welcome to visit our little den', NULL, 1, '2023-07-03 10:40:06', '2023-07-03 06:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Audit & Assurance', 1, '2023-06-30 11:54:21', '2023-06-30 09:55:05'),
(2, 'Tax', 1, '2023-06-30 11:54:21', '2023-06-30 09:55:05'),
(3, 'BFSI & NBFCs', 1, '2023-06-30 11:55:07', '2023-06-30 09:55:32'),
(4, 'Consulting & Advisory', 1, '2023-06-30 11:55:07', '2023-06-30 09:55:32'),
(5, 'IT & Cyber Security', 1, '2023-06-30 11:55:34', '2023-06-30 09:55:55'),
(6, 'Outsourcing', 1, '2023-06-30 11:55:34', '2023-06-30 09:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `spread`
--

CREATE TABLE `spread` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spread`
--

INSERT INTO `spread` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, '1689068897-we-do3.png', 'Auto Ancillary', '2023-07-11 15:18:17', '2023-07-11 09:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `count` varchar(10) NOT NULL,
  `prefix` varchar(4) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `count`, `prefix`, `title`, `created_at`, `updated_at`) VALUES
(1, '500', '+', 'HAPPY CLIENTS', '2023-07-03 16:05:54', '2024-03-22 06:51:55'),
(2, '115', '+', 'ASSETS UNDER MANAGEMENT', '2023-07-03 16:06:39', '2024-03-22 06:52:08'),
(3, '100', '+', 'EXPERT PEOPLE', '2023-07-03 16:06:53', '2024-03-22 06:52:18'),
(4, '920', 'K', 'ARTICLE', '2023-07-03 16:07:03', '2024-03-22 06:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '86278784.png', 'Empowering Enterprises to Succeed in a Challenging Worl', 'Led by over 700+ employees across the globe, Kirtane & Pandit provides qualified services in the areas of Assurance, Audits, Tax Advisory, Accounting, Forensic Audits, Risk Management Systems, and more. Kirtane & Pandit continuously endeavours to identify and develop new areas of services to assist enterprises to succeed in today’s challenging environment.', '2023-07-04 16:46:41', '2023-07-11 07:21:37');

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

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `vision` mediumtext NOT NULL,
  `mission` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `vision`, `mission`, `created_at`, `updated_at`) VALUES
(1, 'To value and reciprocate the trust of our clients and strive to be their financial partners for life.', 'We aim to be the preferred resource for our customers, leading the way in spreading financial literacy among women and youth. We are dedicated to being socially responsible and accountable in all our endeavors.', '2023-07-04 18:10:45', '2024-03-22 06:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `whyarthbodh`
--

CREATE TABLE `whyarthbodh` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whyarthbodh`
--

INSERT INTO `whyarthbodh` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '29386.png', 'Future-Oriented Approach', 'Our firm with unwavering commitment to ethics, upholding high values in every aspect of our work. We consistently exceed client expectations while maintaining integrity as our guiding principle.', '2023-07-03 17:34:04', '2024-03-22 05:56:54'),
(2, '1711087979-2 (22).png', 'Personalized Solutions', '', '2024-03-22 11:42:59', '2024-03-22 06:12:59'),
(3, '1711087988-3 (20).png', 'Diverse Product Range', '', '2024-03-22 11:43:08', '2024-03-22 06:13:08'),
(4, '1711087999-4 (23).png', 'Retirement Planning', '', '2024-03-22 11:43:19', '2024-03-22 06:13:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutpage`
--
ALTER TABLE `aboutpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expo`
--
ALTER TABLE `expo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gcat_fkey` (`cat_id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners_category`
--
ALTER TABLE `partners_category`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spread`
--
ALTER TABLE `spread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyarthbodh`
--
ALTER TABLE `whyarthbodh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutpage`
--
ALTER TABLE `aboutpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core`
--
ALTER TABLE `core`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expo`
--
ALTER TABLE `expo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners_category`
--
ALTER TABLE `partners_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spread`
--
ALTER TABLE `spread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whyarthbodh`
--
ALTER TABLE `whyarthbodh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gcat_fkey` FOREIGN KEY (`cat_id`) REFERENCES `gallery_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
