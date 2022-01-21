-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 06:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategories`
--

CREATE TABLE `addcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Brand_name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addcategories`
--

INSERT INTO `addcategories` (`id`, `Category`, `Brand_name`, `created_at`, `updated_at`) VALUES
(5, 'Napa', 'Square', '2022-01-09 03:41:02', '2022-01-09 03:41:02'),
(6, 'paracetamol', 'Square', '2022-01-09 04:29:50', '2022-01-09 04:29:50'),
(7, 'paracetamol', 'Aci', '2022-01-09 04:30:18', '2022-01-09 04:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Id` int(11) NOT NULL,
  `Brand_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Id`, `Brand_name`) VALUES
(1, 'Aci'),
(2, 'Square'),
(3, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Id` int(11) NOT NULL,
  `Company_name` varchar(250) DEFAULT NULL,
  `Sort_name` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `City` varchar(250) DEFAULT NULL,
  `State` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `Customer_name` varchar(250) DEFAULT NULL,
  `Customer_phone` varchar(11) DEFAULT NULL,
  `Customer_email` varchar(250) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Customer_type` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Customer_name`, `Customer_phone`, `Customer_email`, `Address`, `Customer_type`) VALUES
(4, 'Abdus Samad', '01845891962', 'abdussamad018@gmail.com', 'Danmondi', 'Foreign'),
(5, 'Kamrul Isam', '01726772016', 'kamrul@gmail.com', '15/556, Rupnagar Tinshed,', 'Foreign'),
(6, 'dfdf', 'fdf', 'dfd', 'fddf', 'Wholesale');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `Id` int(11) NOT NULL,
  `Expense_catagory` varchar(255) DEFAULT NULL,
  `Expense_description` varchar(255) DEFAULT NULL,
  `Expense_date` date DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`Id`, `Expense_catagory`, `Expense_description`, `Expense_date`, `Amount`) VALUES
(2, NULL, 'Tea Cost', '2022-01-11', '120.00'),
(3, NULL, 'Tea Cost', '2022-01-12', '120.00');

-- --------------------------------------------------------

--
-- Table structure for table `expenseitem`
--

CREATE TABLE `expenseitem` (
  `Id` int(11) NOT NULL,
  `Item_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenseitem`
--

INSERT INTO `expenseitem` (`Id`, `Item_name`) VALUES
(1, 'Rent'),
(2, 'House');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_12_29_095433_create_addcategories_table', 1);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Brand_name` varchar(255) DEFAULT NULL,
  `Category_name` varchar(255) DEFAULT NULL,
  `Product_name` varchar(255) DEFAULT NULL,
  `Purchase_price` decimal(10,2) DEFAULT NULL,
  `Retails_price` decimal(10,2) DEFAULT NULL,
  `Whole_sale_price` decimal(10,2) DEFAULT NULL,
  `Unit_name` varchar(255) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Supplier` varchar(255) DEFAULT NULL,
  `Expire_date` date NOT NULL,
  `Picture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Brand_name`, `Category_name`, `Product_name`, `Purchase_price`, `Retails_price`, `Whole_sale_price`, `Unit_name`, `Quantity`, `Supplier`, `Expire_date`, `Picture`) VALUES
(1, 'Square', 'paracetamol', 'Apple', '50.00', '55.00', '45.00', NULL, 45, 'Box', '2022-01-11', NULL),
(2, 'Aci', 'paracetamol', 'Banna', '50.00', '55.00', '45.00', 'Box', 45, 'Abdus samad', '2022-01-09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Id` int(11) NOT NULL,
  `Supplier` varchar(255) DEFAULT NULL,
  `Purchase_date` date DEFAULT NULL,
  `Creation_date` date DEFAULT NULL,
  `Medicine_name` varchar(255) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Unit_name` varchar(255) DEFAULT NULL,
  `Tax_percent` int(10) DEFAULT NULL,
  `Tax_amount` decimal(10,2) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `Amount_with_tax` decimal(10,2) DEFAULT NULL,
  `Sub_total` decimal(10,2) DEFAULT NULL,
  `Due` decimal(10,2) DEFAULT NULL,
  `Paid` decimal(10,2) DEFAULT NULL,
  `Grand_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Id` int(11) NOT NULL,
  `Customer_name` varchar(255) DEFAULT NULL,
  `Sales_date` date DEFAULT NULL,
  `Creation_date` date DEFAULT NULL,
  `Sales_type` varchar(255) DEFAULT NULL,
  `Medicine_name` varchar(255) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Unit_name` varchar(255) DEFAULT NULL,
  `Tax_percent` int(10) DEFAULT NULL,
  `Tax_amount` decimal(10,2) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `Amount_with_tax` decimal(10,2) DEFAULT NULL,
  `Sub_total` decimal(10,2) DEFAULT NULL,
  `Due` decimal(10,2) DEFAULT NULL,
  `Paid` decimal(10,2) DEFAULT NULL,
  `Grand_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Id` int(11) NOT NULL,
  `Supplier_name` varchar(250) DEFAULT NULL,
  `Supplier_phone` varchar(11) DEFAULT NULL,
  `Supplier_email` varchar(250) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Supplier_type` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Id`, `Supplier_name`, `Supplier_phone`, `Supplier_email`, `Address`, `Supplier_type`) VALUES
(4, 'Abdus samad', '01845891962', 'abdussamad018@gmail.com', 'Danmondi', 'Foreign');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `Id` int(11) NOT NULL,
  `Unit_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`Id`, `Unit_name`) VALUES
(1, 'Box'),
(2, 'Piece');

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `Id` int(11) NOT NULL,
  `Role_name` varchar(250) DEFAULT NULL,
  `Permission` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`Id`, `Role_name`, `Permission`, `Status`) VALUES
(1, 'Admin', NULL, 'Active'),
(2, 'Sales Man', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `User_name` varchar(250) DEFAULT NULL,
  `FULL_name` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `Role` varchar(250) DEFAULT NULL,
  `Creation_date` date DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `User_name`, `FULL_name`, `Email`, `Phone`, `Password`, `Role`, `Creation_date`, `Status`) VALUES
(1, 'abdus.samad018', 'Abdus Samad', 'abdussamad018@gmail.com', '01845891962', '123456', 'Retail', '2022-01-10', 'Active'),
(2, 'kamrul.islam018', 'Kamrul Islam', 'kamrul@gmail.com', '01726772016', '123456', 'Sales Man', '2022-01-11', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcategories`
--
ALTER TABLE `addcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `expenseitem`
--
ALTER TABLE `expenseitem`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcategories`
--
ALTER TABLE `addcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenseitem`
--
ALTER TABLE `expenseitem`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
