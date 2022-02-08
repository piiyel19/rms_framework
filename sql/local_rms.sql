-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 01:57 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `controller_function_dtls`
--

CREATE TABLE `controller_function_dtls` (
  `id` int(11) NOT NULL,
  `id_form` varchar(255) NOT NULL,
  `function_file` varchar(255) NOT NULL,
  `function_name` varchar(255) NOT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `return_view` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `controller_function_dtls`
--

INSERT INTO `controller_function_dtls` (`id`, `id_form`, `function_file`, `function_name`, `model_name`, `return_view`) VALUES
(1, '626922034', 'Create', 'register_user', 'user', 'admin'),
(2, '626922034', 'Create', 'edit_user', 'user', 'admin'),
(3, '850635925', 'Create', 'insert_admin', 'admin', 'admin'),
(4, '850635925', 'Edit', 'edit_admin', 'admin', 'admin'),
(5, '850635925', 'Delete', 'delete_admin', 'admin', 'admin'),
(6, '850635925', 'List', 'list_admin', 'admin', 'admin'),
(7, '136725758', 'Create', 'Admin', 'Admin', 'Admin'),
(8, '136725758', 'Edit', 'createUser', 'Admin', 'Admin'),
(9, '136725758', 'Delete', 'deleteUser', 'Admin', 'Admin'),
(10, '136725758', 'List', 'listUser', 'Admin', 'Admin'),
(11, '1117451457', 'Create', 'create_admin', 'admin', 'admin.view'),
(12, '1117451457', 'Edit', 'edit_admin', 'admin', 'admin.view'),
(13, '1117451457', 'Edit', 'delete_admin', 'admin', 'admin.view'),
(14, '1117451457', 'List', 'list_admin', 'admin', 'admin.view'),
(15, '2096374819', 'Create', 'create_test', 'test', 'test.view'),
(16, '760006923', 'Create', 'cretae_test', 'test', 'test.view'),
(17, '1069193227', 'Create', 'create_1', 'tesst', 'test.view'),
(18, '1069193227', 'Edit', 'edit_1', 'tesst', 'test.view'),
(19, '1705415665', 'Create', 'tesy', 'tesy', 'tesy.view'),
(20, '333001365', 'Create', 'a', 'A', 'A'),
(21, '833310204', 'Create', 'st', 'a', 'a'),
(22, '1123745800', 'Create', 'a', 'a', 'a'),
(23, '572638589', 'Create', 'a', 'a', 'a'),
(28, '1273126012', 'List', 'archieve', NULL, 'archieve.first_row'),
(29, '1916457954', 'List', 'list', NULL, 'bpa.list'),
(32, '61154095', 'Create', 'create', 'bpa', 'bpa.create'),
(33, '61154095', 'List', 'list', 'bpa', 'bpa.list'),
(34, '1431910825', 'List', 'list', NULL, 'rr.list'),
(35, '786846775', 'List', 'list', NULL, 'rap.list'),
(36, '529965916', 'List', 'list', NULL, 'audit_trail.list');

-- --------------------------------------------------------

--
-- Table structure for table `controller_hdrs`
--

CREATE TABLE `controller_hdrs` (
  `id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `controller_path` varchar(255) NOT NULL,
  `id_form` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `controller_hdrs`
--

INSERT INTO `controller_hdrs` (`id`, `class_name`, `controller_path`, `id_form`) VALUES
(1, 'test_class', 'folder', '626922034'),
(2, 'UserTest', 'User', '2058721043'),
(3, 'UserTest', 'User', '2058721043'),
(4, 'UserTest', 'User', '2058721043'),
(5, 'Admin', '\\Admin', '850635925'),
(6, 'Admin', '\\Admin', '850635925'),
(7, 'Admin', '\\Admin', '850635925'),
(8, 'Admin', '\\Admin', '850635925'),
(9, 'Admin', '\\Admin', '850635925'),
(10, 'Admin', '\\Admin', '850635925'),
(11, 'Admin', '\\Admin', '850635925'),
(12, 'Admin', '\\Admin', '850635925'),
(13, 'UsrAdmin', 'Admin', '136725758'),
(14, 'Admin', '\\Admin', '1117451457'),
(15, 'RiskDocument', '\\Archieve', '1273126012'),
(16, 'BPA', '\\BPA', '61154095'),
(17, 'RRController', '\\RR', '1431910825'),
(18, 'RAPController', '\\RAP', '786846775'),
(19, 'AuditLogsController', '\\AuditTrails', '529965916');

-- --------------------------------------------------------

--
-- Table structure for table `controller_parameter_dtls`
--

CREATE TABLE `controller_parameter_dtls` (
  `id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `id_form` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `controller_parameter_dtls`
--

INSERT INTO `controller_parameter_dtls` (`id`, `field_name`, `id_form`) VALUES
(1, 'test', '626922034'),
(2, 'test2', '626922034'),
(3, 'nama', '850635925'),
(4, 'alamat', '850635925'),
(5, 'ic', '850635925'),
(6, 'nama', '136725758'),
(7, 'test', '136725758'),
(8, 'user', '136725758'),
(9, 'nama', '1117451457'),
(10, 'alamat', '1117451457'),
(11, 'no_tel', '1117451457'),
(12, 'test', '1069193227'),
(13, 'test', '1142384461'),
(14, 'test2', '1142384461'),
(15, 'ok', '1705415665'),
(16, 'a', '1869582677'),
(17, 'a', '1879629362'),
(19, 'bpa', '1916457954'),
(20, 'bpa', '61154095'),
(21, 'division', '61154095'),
(22, 'department', '61154095'),
(23, 'business_process', '61154095'),
(24, 'created_by', '61154095'),
(25, 'date_created', '61154095'),
(26, 'bpa_completed', '61154095'),
(27, 'endorsed_by_hodv', '61154095');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_hdrs`
--

CREATE TABLE `model_hdrs` (
  `id` int(11) NOT NULL,
  `id_form` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `model_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model_hdrs`
--

INSERT INTO `model_hdrs` (`id`, `id_form`, `class_name`, `model_path`) VALUES
(1, '258329640', 'testOK', 'ok'),
(2, '1634465880', 'ArchieveData', 'Archieve'),
(3, '1374790048', 'Archieve', '\\Archieve');

-- --------------------------------------------------------

--
-- Table structure for table `model_parameter_dtls`
--

CREATE TABLE `model_parameter_dtls` (
  `id` int(11) NOT NULL,
  `id_form` varchar(255) NOT NULL,
  `field_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model_parameter_dtls`
--

INSERT INTO `model_parameter_dtls` (`id`, `id_form`, `field_name`) VALUES
(1, '1207083664', 'a'),
(3, '946940494', 'test'),
(4, '946940494', 'test2'),
(5, '562118157', 'test'),
(6, '562118157', 'tests'),
(7, '258329640', 'test'),
(8, '258329640', 'test2'),
(9, '1634465880', 'test1'),
(10, '1634465880', 'test2'),
(11, '1374790048', 'test1'),
(12, '1374790048', 'test2'),
(13, '472304189', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `page_color`
--

CREATE TABLE `page_color` (
  `id` int(11) NOT NULL,
  `segment_a_bg_val` varchar(255) DEFAULT NULL,
  `segment_a_font_val` varchar(255) DEFAULT NULL,
  `segment_a_bg_nav_val` varchar(255) DEFAULT NULL,
  `segment_a_font_nav_val` varchar(255) DEFAULT NULL,
  `segment_b_bg_val` varchar(255) DEFAULT NULL,
  `segment_b_font_val` varchar(255) DEFAULT NULL,
  `segment_b_bg_nav_val` varchar(255) DEFAULT NULL,
  `segment_b_font_nav_val` varchar(255) DEFAULT NULL,
  `segment_c_bg_val` varchar(255) DEFAULT NULL,
  `segment_c_bg_header_val` varchar(255) DEFAULT NULL,
  `segment_c_bg_contain_val` varchar(255) DEFAULT NULL,
  `segment_c_font_val` varchar(255) DEFAULT NULL,
  `segment_d_bg_val` varchar(255) DEFAULT NULL,
  `segment_d_bg_contain_val` varchar(255) DEFAULT NULL,
  `segment_d_font_title_val` varchar(255) DEFAULT NULL,
  `segment_e_bg_val` varchar(255) DEFAULT NULL,
  `segment_e_font_val` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_color`
--

INSERT INTO `page_color` (`id`, `segment_a_bg_val`, `segment_a_font_val`, `segment_a_bg_nav_val`, `segment_a_font_nav_val`, `segment_b_bg_val`, `segment_b_font_val`, `segment_b_bg_nav_val`, `segment_b_font_nav_val`, `segment_c_bg_val`, `segment_c_bg_header_val`, `segment_c_bg_contain_val`, `segment_c_font_val`, `segment_d_bg_val`, `segment_d_bg_contain_val`, `segment_d_font_title_val`, `segment_e_bg_val`, `segment_e_font_val`) VALUES
(1, '#468ed5', '#ffffff', '#468ed5', '#ffffff', '#cedfea', '#6b0000', '#2e5c89', '#fff', '#ffffff', '#00366b', '#376ea6', '#ffffff', '#F5F9FD', '#f76464', '#990000', '#2a2a2a', '#ffffff');

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
-- Table structure for table `route_hdrs`
--

CREATE TABLE `route_hdrs` (
  `id` int(11) NOT NULL,
  `id_form` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `route_name` varchar(255) NOT NULL,
  `directory` varchar(255) DEFAULT NULL,
  `className` varchar(255) NOT NULL,
  `function_name` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route_hdrs`
--

INSERT INTO `route_hdrs` (`id`, `id_form`, `method`, `route_name`, `directory`, `className`, `function_name`, `label`) VALUES
(1, '199890623', 'POST', 'Test', 'Tets', 'Test', 'Test', 'Test'),
(2, '2133165843', 'POST', 'Test2', 'test', 'test', 'tetst', 'test'),
(3, '2133165843', 'POST', 'Test2', 'test', 'test', 'tetst', 'test'),
(4, '2133165843', 'POST', 'Test2', 'test', 'test', 'tetst', 'test'),
(5, '2133165843', 'POST', 'Test2', 'test', 'test', 'tetst', 'test'),
(6, '2133165843', 'POST', 'Test2', 'test', 'test', 'tetst', 'test'),
(7, '2133165843', 'POST', 'Test2', 'test', 'test', 'tetst', 'test'),
(8, '2133165843', 'POST', 'Test2', 'test', 'test', 'tetst', 'test'),
(9, '1362051351', 'POST', 'Route', 'Directory', 'ClassName', 'FunctionName', 'Label'),
(10, '1362051351', 'POST', 'Route', 'Directory', 'ClassName', 'FunctionName', 'Label'),
(11, '1362051351', 'POST', 'Route', 'Directory', 'ClassName', 'FunctionName', 'Label'),
(12, '1362051351', 'POST', 'Route', 'Directory', 'ClassName', 'FunctionName', 'Label'),
(13, '791071929', 'GET', 'Route', 'Directory', 'ClassName', 'FunctionName', 'Label'),
(14, '1382928671', 'POST', 'RouteName', 'Directory', 'ClassName', 'FunctionName', 'Label'),
(15, '781391168', 'GET', 'Route', 'Directory', 'ClassName', 'FunctionName', 'Label'),
(16, '955017454', 'POST', 'RouteDirect', NULL, 'ClassName', 'Function', 'Label'),
(17, '955017454', 'POST', 'RouteDirect', NULL, 'ClassName', 'Function', 'Label'),
(18, '1449652535', 'POST', 'routeClear', NULL, 'AutomateCmdLine', 'routeClear', 'routeClear'),
(19, '1831135034', 'POST', 'routeCache', NULL, 'AutomateCmdLine', 'routeCache', 'routeCache'),
(20, '1206115208', 'POST', 'viewClear', NULL, 'AutomateCmdLine', 'viewClear', 'viewClear'),
(21, '2101561720', 'POST', 'viewCache', NULL, 'AutomateCmdLine', 'viewCache', 'viewCache'),
(22, '1437469784', 'POST', 'bpa_list', 'BPA', 'BPAController', 'list', 'list'),
(23, '1822619148', 'GET', 'bpa_create', 'BPA', 'BPAController', 'create', 'bpa_create'),
(24, '563025684', 'GET', 'rr_list', '\\RR', 'RRController', 'list', 'rr_list'),
(25, '46242070', 'GET', 'rap_list', '\\RAP', 'RAPController', 'list', 'rap_list'),
(26, '790051342', 'GET', 'audit_logs', 'AuditTrails', 'AuditLogsController', 'list', 'audit_logs');

-- --------------------------------------------------------

--
-- Table structure for table `route_parameter`
--

CREATE TABLE `route_parameter` (
  `id` int(11) NOT NULL,
  `id_form` varchar(255) NOT NULL,
  `route_parameter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route_parameter`
--

INSERT INTO `route_parameter` (`id`, `id_form`, `route_parameter`) VALUES
(1, '2133165843', 'param1'),
(2, '2133165843', 'param2'),
(3, '2133165843', 'param1'),
(4, '2133165843', 'param2'),
(5, '1362051351', 'Parameter');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `view_hdrs`
--

CREATE TABLE `view_hdrs` (
  `id` int(11) NOT NULL,
  `id_form` varchar(255) NOT NULL,
  `title_page` varchar(255) NOT NULL,
  `function_file` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `view_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_hdrs`
--

INSERT INTO `view_hdrs` (`id`, `id_form`, `title_page`, `function_file`, `class_name`, `view_path`) VALUES
(1, '38707951', '', 'Create', 'test', '\\test'),
(2, '2041600628', 'TestPage', 'Create', 'testclass', 'test'),
(3, '2016268168', 'PageList', 'List', 'PageList', '\\PageList'),
(4, '2016268168', 'PageList', 'List', 'PageList', '\\PageList'),
(5, '218073014', 'testpage', 'Action', 'test_page', '\\testpage'),
(6, '218073014', 'testpage', 'Action', 'test_page', '\\testpage'),
(7, '1352086429', 'PageTitle', 'Action', 'testClass', '\\Test'),
(8, '36569758', 'Title Page', 'Action', 'ClassName', '\\FolderPath'),
(9, '1472183775', 'Test Action', 'Action', 'ClassName', '\\TestAction'),
(10, '498807692', 'Form Create', 'Create', 'ClassCreate', '\\FormCreate'),
(11, '256699561', 'Risk Document', 'List', 'Archieve', '\\archieve'),
(12, '256699561', 'Risk Document', 'List', 'Archieve', '\\archieve'),
(13, '1251810470', 'List of Business Process Analysis (BPA)', 'List', 'BPA', '\\bpa'),
(14, '1586677483', 'New BPA', 'Create', 'create', '\\bpa'),
(15, '365428667', 'List of Risk Register (RR)', 'List', 'list', '\\rr'),
(16, '226021328', 'List of Risk Action Plan (RAP)', 'List', 'list', '\\rap'),
(17, '362128239', 'Activity Logs', 'List', 'list', '\\audit_trail');

-- --------------------------------------------------------

--
-- Table structure for table `view_parameter_dtls`
--

CREATE TABLE `view_parameter_dtls` (
  `id` int(11) NOT NULL,
  `label_name` varchar(255) NOT NULL,
  `id_form` varchar(255) NOT NULL,
  `field_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_parameter_dtls`
--

INSERT INTO `view_parameter_dtls` (`id`, `label_name`, `id_form`, `field_name`) VALUES
(1, '', '38707951', 'ok'),
(3, 'test', '283684840', 'test_field'),
(5, 'ok', '48684842', 'ok'),
(6, 'test', '2041600628', 'test'),
(7, 'thead 1', '2016268168', 'th1'),
(8, 'thead 2', '2016268168', 'th2'),
(9, 'thead 3', '2016268168', 'th3'),
(10, 'test', '218073014', 'test1'),
(11, 'test 2', '218073014', 'test2'),
(12, 'Test', '1352086429', 'test'),
(13, 'test 2', '1352086429', 'test2'),
(14, 'label', '36569758', 'field'),
(15, 'label 2', '36569758', 'field2'),
(16, 'label 1', '1472183775', 'field1'),
(17, 'label 2', '1472183775', 'field2'),
(18, 'field', '498807692', 'field1'),
(19, 'field 2', '498807692', 'field2'),
(20, 'BPA ID', '256699561', 'bpa_id'),
(21, 'Risk Register ID', '256699561', 'risk_register_id'),
(22, 'RAP ID', '256699561', 'rap_id'),
(23, 'Risk Event', '256699561', 'risk_event'),
(24, 'Additional Control', '256699561', 'additional_control'),
(25, 'Date Submitted/Submitted By', '256699561', 'date_submitted_or_submitted_by'),
(26, 'Action', '256699561', 'action'),
(27, 'BPA', '1251810470', 'bpa'),
(28, 'Division', '1251810470', 'division'),
(29, 'Department', '1251810470', 'department'),
(30, 'Business Process', '1251810470', 'business_process'),
(31, 'Created By', '1251810470', 'created_by'),
(32, 'Date Created', '1251810470', 'date_created'),
(33, 'BPA Completed', '1251810470', 'bpa_completed'),
(34, 'Endorsed By HODv', '1251810470', 'endorsed_by_hodv'),
(35, 'Division', '1586677483', 'division'),
(36, 'Department', '1586677483', 'department'),
(37, 'HoD', '1586677483', 'hod'),
(38, 'Business Process', '1586677483', 'business_process'),
(39, 'Process Objectives', '1586677483', 'process_objectives'),
(40, 'Inputs', '1586677483', 'inputs'),
(41, 'Process Flow', '1586677483', 'process_flow'),
(42, 'Outputs', '1586677483', 'outputs'),
(43, 'Systems', '1586677483', 'systems'),
(44, 'Classes of Transaction Routine', '1586677483', 'routine'),
(45, 'Classes of Transaction Non Routine', '1586677483', 'non_routine'),
(46, 'Critical Success Factors (CSFs)', '1586677483', 'csfs'),
(47, 'Risks which Threatens Objectives', '1586677483', 'objectives'),
(48, 'Is BPA Completed?', '1586677483', 'bpa_completed'),
(49, 'BPA ID', '365428667', 'bpa_id'),
(50, 'Risk Register ID', '365428667', 'risk_register_id'),
(51, 'Business Process', '365428667', 'business_process'),
(52, 'Risk Event', '365428667', 'risk_event'),
(53, 'Created By', '365428667', 'created_by'),
(54, 'Date Created', '365428667', 'date_created'),
(55, 'RR Completed?', '365428667', 'rr_completed'),
(56, 'BPA ID', '226021328', 'bpa_id'),
(57, 'Risk Register ID', '226021328', 'risk_register_id'),
(58, 'RAP ID', '226021328', 'rap_id'),
(59, 'Business Process', '226021328', 'business_process'),
(60, 'Risk Event', '226021328', 'risk_event'),
(61, 'Additional Control', '226021328', 'additional_control'),
(62, 'Created By / Date', '226021328', 'created_by_date'),
(63, 'Submitted By', '226021328', 'submitted_by'),
(64, 'Date Submitted', '226021328', 'date_submitted'),
(65, 'Action', '226021328', 'action'),
(66, 'Activity', '362128239', 'activity'),
(67, 'Date', '362128239', 'date');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controller_function_dtls`
--
ALTER TABLE `controller_function_dtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controller_hdrs`
--
ALTER TABLE `controller_hdrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controller_parameter_dtls`
--
ALTER TABLE `controller_parameter_dtls`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `model_hdrs`
--
ALTER TABLE `model_hdrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_parameter_dtls`
--
ALTER TABLE `model_parameter_dtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_color`
--
ALTER TABLE `page_color`
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
-- Indexes for table `route_hdrs`
--
ALTER TABLE `route_hdrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_parameter`
--
ALTER TABLE `route_parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `view_hdrs`
--
ALTER TABLE `view_hdrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_parameter_dtls`
--
ALTER TABLE `view_parameter_dtls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controller_function_dtls`
--
ALTER TABLE `controller_function_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `controller_hdrs`
--
ALTER TABLE `controller_hdrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `controller_parameter_dtls`
--
ALTER TABLE `controller_parameter_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `model_hdrs`
--
ALTER TABLE `model_hdrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `model_parameter_dtls`
--
ALTER TABLE `model_parameter_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `page_color`
--
ALTER TABLE `page_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_hdrs`
--
ALTER TABLE `route_hdrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `route_parameter`
--
ALTER TABLE `route_parameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `view_hdrs`
--
ALTER TABLE `view_hdrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `view_parameter_dtls`
--
ALTER TABLE `view_parameter_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
