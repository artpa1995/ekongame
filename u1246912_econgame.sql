-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 17 2021 г., 11:49
-- Версия сервера: 5.7.27-30
-- Версия PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u1246912_econgame`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `created_at`) VALUES
(5, 0, 'hghg', '2018-12-18 10:20:38'),
(8, 0, 'lifehack', '2018-12-14 17:47:31'),
(9, 0, 'music', '2018-12-14 17:50:05'),
(10, 9, 'nature', '2018-12-14 17:53:04'),
(11, 9, 'fitness', '2018-12-14 17:55:01'),
(12, 9, 'marketing', '2018-12-14 17:55:27'),
(13, 0, 'life', '2018-12-14 18:00:20'),
(14, 0, 'health', '2018-12-14 18:18:59'),
(15, 0, 'sport', '2018-12-14 18:35:18'),
(16, 15, 'football', '2018-12-20 10:44:13'),
(17, 15, 'fitness', '2018-12-20 10:44:21');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `name`, `status`, `created_at`) VALUES
(60, 86, '5c10e28c29247mercedes-benz_cls-500__199530513fx-150953084684nkg-250x250.jpg', 1, '2018-12-12 09:27:24'),
(61, 86, '5c123d56a47bd11.png', 1, '2018-12-13 11:07:02'),
(62, 86, '5c123d56a56e3crop.png', 1, '2018-12-13 11:07:02'),
(63, 86, '5c123d56a5d24Logo.png', 1, '2018-12-13 11:07:02'),
(65, 86, '5c123d99e08edbg2.jpg', 1, '2018-12-13 11:08:09'),
(66, 86, '5c123d99e0f50bg3.jpg', 1, '2018-12-13 11:08:09'),
(67, 86, '5c123d99e14edbg4.jpg', 1, '2018-12-13 11:08:09'),
(68, 86, '5c123d99e1b18bg5.jpg', 1, '2018-12-13 11:08:09'),
(69, 86, '5c123d99e20a3child_parent.png', 1, '2018-12-13 11:08:09'),
(70, 86, '5c1b5ec8a5bd5browser.png', 1, '2018-12-20 09:20:08'),
(71, 86, '5c1b5ec8e302dBubble-sort-example.gif', 1, '2018-12-20 09:20:08'),
(72, 86, '5c1b5ec8e4157child_parent.png', 1, '2018-12-20 09:20:08');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `shop_id` int(64) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` varchar(64) CHARACTER SET utf8 NOT NULL,
  `tame` varchar(64) CHARACTER SET utf8 NOT NULL,
  `type_order` varchar(64) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `brand_name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `shop_id`, `product_id`, `date`, `tame`, `type_order`, `product_name`, `brand_name`, `first_name`, `last_name`, `email`, `phone`) VALUES
(1, 135, 480, '23.08.2021', '12:01:09', 'ÐžÐ¿Ñ€Ð¾Ñ', 'gr', 'ew', 'vig', 'uuu', 'test1@mail.ru', '+37455115511'),
(2, 135, 478, '23.08.2021', '12:01:55', 'ÐžÐ¿Ñ€Ð¾Ñ', 'efwf', 'feeg', 'ufhweu', 'uhuh', 'test2@mail.ru', '+37491999999'),
(3, 135, 482, '23.08.2021', '12:02:49', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'eded', 'de', 'wfwf', 'fref', 'test3@mail.ru', '+37455115511'),
(4, 135, 481, '23.08.2021', '12:03:33', 'ÐžÐ¿Ñ€Ð¾Ñ', 'de', 'ed', 'test', 'wefwef', 'test4@mail.ru', '+37441414141'),
(5, 135, 476, '23.08.2021', '12:04:02', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'pppppp', 'pppp', 'vig', 'wefwef', 'test5@mail.ru', '+37455115511'),
(6, 137, 537, '24.08.2021', '11:14:24', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'bmw', 'avto', 'lastprodukt', 'arts', 'artpa1995@mail.ru', '+37455115152'),
(7, 159, 591, '09.09.2021', '16:05:34', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'uuu', 'test@mail.ru', '+37455115511'),
(8, 159, 591, '09.09.2021', '17:57:26', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'eg', 'erg', 'rer@mail.ru', '+37455115511'),
(9, 159, 591, '09.09.2021', '17:58:46', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'gerger', 'regerg', 'reg@mail.ru', '+37455115511'),
(10, 159, 591, '10.09.2021', '06:49:10', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(11, 159, 591, '10.09.2021', '06:50:25', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(12, 159, 591, '10.09.2021', '06:55:51', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(13, 159, 591, '10.09.2021', '06:56:51', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(14, 159, 591, '10.09.2021', '06:57:16', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(15, 159, 591, '10.09.2021', '06:58:02', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(16, 159, 591, '10.09.2021', '06:59:54', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(17, 159, 591, '10.09.2021', '07:01:37', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(18, 159, 591, '10.09.2021', '07:03:04', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(19, 159, 591, '10.09.2021', '09:15:25', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(20, 159, 591, '10.09.2021', '09:17:12', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'fgbfgbfg', 'vbg', 'vig', 'fwfwef', 'test@mail.ru', '+37455115511'),
(21, 159, 695, '10.09.2021', '13:14:01', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'sdgsdg', 'dvsdgs', 'Test', 'Hskdj', 'artpa1995@mail.ru', '044473738'),
(22, 159, 692, '10.09.2021', '13:15:09', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'test2', 'test2', 'sdvsdv', 'sdvsdv', 'efsdfsdfd@mail.ru', '425253645'),
(23, 159, 691, '10.09.2021', '13:16:37', 'Ð¥Ð¾Ñ‡Ñƒ ÑÑ‚Ñƒ Ð¼Ð¾Ð´ÐµÐ»ÑŒ!', 'test1', 'test1', 'Fhdhd', 'Hfhddh', 'Test@mail.ru', '300003333');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` mediumtext,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `category_id`, `content`, `img`, `created_at`) VALUES
(21, 86, 'dfgdfg', 5, 'dfgdfgdfg', '5c1239db4b55bcrop.png', '2018-12-13 10:52:11'),
(22, 86, 'dsfdsfdsfdsf', 1, 'dsfdsfdsgfgfsgsfdsf', '5c123a0952452Logo.png', '2018-12-13 10:52:57'),
(23, 86, 'dfgdfgdfgdfg', 7, 'dfgdfgdsfdsf', '5c123a5b0c5ddcrop.png', '2018-12-13 10:54:19'),
(24, 86, 'Composers Of 20th Centuary', 9, 'During the early 20th century, many composers experimented with rhythm, gained inspiration from folk music and assessed their views on tonality. Composers of this time period were more willing to experiment with new music forms and used technology to enhance their compositions.\r\n\r\nThese experimentations baffled listeners, and composers either received support or were rejected by their audience. This resulted in a shift in how music was composed, performed and appreciated.\r\n\r\nTo learn more about the music of this period, check out the profiles of the following 54 famous 20th-century composers.', '5c13f1197ff76composers.jpg', '2018-12-14 18:06:17'),
(25, 86, 'Armenian Musical Instruments', 9, 'Music is an important  part of the culture. Armenia as one of the most ancient countries with rich history has a rich cultural heritage, including folk music. Armenian folk music is the face of the people, and musical instruments are weapons for people to fight against the merger.\r\n\r\nArmenian music became world-famous thanks to the velvety sound of the duduk. In recent years, duduk began to be used as soundtracks for blockbusters. However, not everyone knows the history of Armenian musical instruments. In this article we will talk about Armenian duduk and other musical instruments.', '5c13f2b035970ArmMus.jpg', '2018-12-14 18:13:04'),
(26, 86, 'Morning Stretches', 11, 'Gentle dynamic stretches can be your best friend during a morning routine. Static stretches are best saved for when your body has generated a bit more flexibility for the activities of the day. So, what is the difference between dynamic and static stretching and why does it matter?[1] Let’s find out.\r\n\r\nDynamic stretches offer your body gentle, repetitive motion. This helps redistribute fluid, blood, and nutrients that may have succumb to gravity’s command as you slept. On the other hand, static stretches are held longer and offer a more stationary position for each set of muscles. We are not saying that static stretches are bad. If you have a few favorites, enjoy them any time of day!\r\n\r\nHowever, the movement of dynamic stretches is far more beneficial as you seek to get your mind and body moving after rest.[2] Your brain and body are designed to regularly distribute fluid, nutrients and oxygen. Dynamic movements help to make this happen evenly and more naturally.', '5c13fa1f4d599monringStretch.jpg', '2018-12-14 18:44:47'),
(27, 86, 'Nature', 10, 'Nature, in the broadest sense, is the natural, physical, or material world or universe. \"Nature\" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the only, part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.\r\n\r\nThe word nature is derived from the Latin word natura, or \"essential qualities, innate disposition\", and in ancient times, literally meant \"birth\".[1] Natura is a Latin translation of the Greek word physis (φύσις), which originally related to the intrinsic characteristics that plants, animals, and other features of the world develop of their own accord.[2][3] The concept of nature as a whole, the physical universe, is one of several expansions of the original notion; it began with certain core applications of the word φύσις by pre-Socratic philosophers, and has steadily gained currency ever since. This usage continued during the advent of modern scientific method in the last several centuries.', '5c17d962723b3Hopetoun_falls.jpg', '2018-12-17 17:14:10'),
(28, 86, 'Marketing Research', 12, 'Marketing research is the function that links the consumer, customer, and public to the marketer through information--information used to identify and define marketing opportunities and problems; generate, refine, and evaluate marketing actions; monitor marketing performance; and improve understanding of marketing as a process. Marketing research specifies the information required to address these issues, designs the method for collecting information, manages and implements the data collection process, analyzes the results, and communicates the findings and their implications. (Approved October 2004)\r\n\r\n', '5c17d9d8a6581download.jpg', '2018-12-17 17:16:08');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `brand_name` varchar(64) DEFAULT NULL,
  `product_name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `user_id`, `image`, `brand_name`, `product_name`) VALUES
(691, 159, '613b6caee8b8b.png', 'test1', 'test1'),
(692, 159, '613b23193035dÐ¡Ð½Ð¸Ð¼Ð¾Ðº ÑÐºÑ€Ð°Ð½Ð° (59).png', 'test2', 'test2'),
(693, 159, '613b2b5888867.png', 'rfergerg', 'ergreg'),
(694, 159, '613b23e56fb47Ð¡Ð½Ð¸Ð¼Ð¾Ðº ÑÐºÑ€Ð°Ð½Ð° (58).png', 'reg', 'ergre'),
(695, 159, '613b23fcdb9d6Ð¡Ð½Ð¸Ð¼Ð¾Ðº ÑÐºÑ€Ð°Ð½Ð° (57).png', 'dvsdgs', 'sdgsdg'),
(696, 159, '613b6c8cf0d0d.png', 'zvsdvsd', 'sdvsdv'),
(697, 159, '613b3f2ae7808.png', 'sdgsdg', 'sdgsdg'),
(698, 159, '613b3f163ea0a.png', 'gsdgsfg', 'sdgsdgsdg'),
(712, 159, '613b452dce54eÐ¡Ð½Ð¸Ð¼Ð¾Ðº ÑÐºÑ€Ð°Ð½Ð° (57).png', NULL, NULL),
(713, 159, '613b456a961b3Ð¡Ð½Ð¸Ð¼Ð¾Ðº ÑÐºÑ€Ð°Ð½Ð° (58).png', NULL, NULL),
(714, 159, '613b45cd4688bÐ¡Ð½Ð¸Ð¼Ð¾Ðº ÑÐºÑ€Ð°Ð½Ð° (67).png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `id` int(64) NOT NULL,
  `user_id` int(255) NOT NULL,
  `metta_key` varchar(64) NOT NULL,
  `metta_value` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `metta_key`, `metta_value`) VALUES
(1, 120, 'email', 'test@mail.ru'),
(3, 131, 'name', 'efwefwef'),
(4, 131, 'email', 'ergerger@mail.com'),
(5, 131, 'email', 'artpa1995@mail.ru'),
(6, 131, 'pass_verfic_cod', '21035022'),
(7, 120, 'pass_verfic_cod', '58630828'),
(8, 120, 'pass_verfic_cod', '80745556'),
(9, 120, 'pass_verfic_cod', '90274770'),
(10, 131, 'pass_verfic_cod', '43060083'),
(11, 120, 'pass_verfic_cod', '06227335'),
(12, 131, 'pass_verfic_cod', '91414705'),
(13, 131, 'pass_verfic_cod', '16704190'),
(14, 120, 'pass_verfic_cod', '79355666'),
(15, 120, 'pass_verfic_cod', '38384854'),
(16, 120, 'pass_verfic_cod', '47625538'),
(17, 132, 'email', 'test2@mail.ru'),
(18, 132, 'pass_verfic_cod', '28869093'),
(19, 132, 'email', ''),
(20, 132, 'email', ''),
(21, 132, 'email', 'test2@mail.ru'),
(22, 132, 'company_name', 'dqwdwqd'),
(23, 132, 'otrasl', 'qwdqw'),
(24, 132, 'rol_in_company', 'qwd'),
(25, 132, 'adres', 'qwd'),
(26, 132, 'company_name', 'dqwdwqd'),
(27, 132, 'otrasl', 'qwdqw'),
(28, 132, 'rol_in_company', 'qwd'),
(29, 132, 'adres', 'qwd'),
(30, 132, 'company_name', 'erverv'),
(31, 132, 'otrasl', 'erverv'),
(32, 132, 'rol_in_company', 'ervervre'),
(33, 132, 'adres', 'evve'),
(34, 132, 'project_adres', 'erverv'),
(35, 132, 'email', 'ervre'),
(36, 132, 'email2', 'erverv'),
(37, 132, 'company_name', 'ewfwef'),
(38, 132, 'otrasl', 'ewfwefwef'),
(39, 132, 'rol_in_company', 'wefwef'),
(40, 132, 'adres', '33e33333'),
(41, 132, 'company_name', 'ewfwef'),
(42, 132, 'otrasl', 'ewfwefwef'),
(43, 132, 'rol_in_company', 'wefwef'),
(44, 132, 'adres', '33e33333'),
(45, 132, 'company_name', 'vdfvdf'),
(46, 132, 'otrasl', 'dfvdfv'),
(47, 132, 'rol_in_company', 'dfvdfv'),
(48, 132, 'adres', 'dfvdfv'),
(49, 132, 'company_name', 'fwefwef'),
(50, 132, 'otrasl', 'wefwefwe'),
(51, 132, 'rol_in_company', 'efwefw'),
(52, 132, 'adres', 'wefwef'),
(53, 132, 'company_name', 'fwefwef'),
(54, 132, 'otrasl', 'wefwefwe'),
(55, 132, 'rol_in_company', 'efwefw'),
(56, 132, 'adres', 'wefwef'),
(57, 132, 'company_name', 'dwefwef'),
(58, 132, 'otrasl', 'wefwefw'),
(59, 132, 'rol_in_company', 'wefwef'),
(60, 132, 'adres', 'wef'),
(61, 132, 'company_name', 'dwefwef'),
(62, 132, 'otrasl', 'wefwefw'),
(63, 132, 'rol_in_company', 'wefwef'),
(64, 132, 'adres', 'wef'),
(65, 132, 'project_adres', 'rgerg'),
(66, 132, 'email', 'ergergerg'),
(67, 132, 'email2', 'egerger'),
(68, 132, 'company_name', ''),
(69, 132, 'otrasl', ''),
(70, 132, 'rol_in_company', ''),
(71, 132, 'adres', ''),
(72, 132, 'project_adres', ''),
(73, 132, 'email', ''),
(74, 132, 'email2', ''),
(75, 132, 'company_name', ''),
(76, 132, 'otrasl', ''),
(77, 132, 'rol_in_company', ''),
(78, 132, 'adres', ''),
(79, 132, 'company_name', 'ikidfktest'),
(80, 132, 'otrasl', ''),
(81, 132, 'rol_in_company', ''),
(82, 132, 'adres', ''),
(83, 132, 'company_name', 'ikidfktest'),
(84, 132, 'otrasl', 'erjjerj'),
(85, 132, 'rol_in_company', 'jujfuwjeufju'),
(86, 132, 'adres', 'jujfuwjeufjewu'),
(87, 132, 'company_name', 'ujuju'),
(88, 132, 'otrasl', 'ju'),
(89, 132, 'rol_in_company', 'juj'),
(90, 132, 'adres', 'juju'),
(91, 132, 'company_name', ''),
(92, 132, 'otrasl', ''),
(93, 132, 'rol_in_company', ''),
(94, 132, 'adres', ''),
(95, 132, 'company_name', 'efwfwef'),
(96, 132, 'otrasl', ''),
(97, 132, 'rol_in_company', 'wefwef'),
(98, 132, 'adres', 'fefwef'),
(99, 132, 'company_name', ''),
(100, 132, 'otrasl', ''),
(101, 132, 'rol_in_company', ''),
(102, 132, 'adres', ''),
(103, 132, 'company_name', 'sdkvwoefk'),
(104, 132, 'otrasl', 'продажа одежды'),
(105, 132, 'rol_in_company', 'okoefk'),
(106, 132, 'adres', 'kokfo'),
(107, 132, 'company_name', ''),
(108, 132, 'otrasl', 'продажа одежды'),
(109, 132, 'rol_in_company', ''),
(110, 132, 'adres', ''),
(111, 132, 'company_name', 'efw'),
(112, 132, 'otrasl', 'продажа игрушек'),
(113, 132, 'rol_in_company', 'зам директора'),
(114, 132, 'adres', 'wefw'),
(115, 132, 'project_adres', 'fefwef'),
(116, 132, 'email', 'efwef'),
(117, 132, 'email2', 'test'),
(118, 132, 'company_name', 'ewfwef'),
(119, 132, 'otrasl', 'продажа одежды'),
(120, 132, 'rol_in_company', 'директор '),
(121, 132, 'adres', 'efwefef'),
(122, 132, 'opros1', 'opros1_ok'),
(123, 132, 'project_adres', ''),
(124, 132, 'email', 'test2@mail.ru'),
(125, 132, 'email2', ''),
(126, 132, 'project_adres', ''),
(127, 132, 'email', 'test2@mail.ru'),
(128, 132, 'email2', ''),
(129, 132, 'project_adres', ''),
(130, 132, 'email', 'test2@mail.ru'),
(131, 132, 'email2', ''),
(132, 132, 'project_adres', ''),
(133, 132, 'email', 'test2@mail.ru'),
(134, 132, 'email2', ''),
(135, 132, 'project_adres', ''),
(136, 132, 'email', 'test@mail.ru'),
(137, 132, 'email2', ''),
(138, 132, 'project_adres', ''),
(139, 132, 'email', 'test@mail.ru'),
(140, 132, 'email2', ''),
(141, 132, 'project_adres', ''),
(142, 132, 'email', 'vig@mail.com'),
(143, 132, 'email2', ''),
(144, 132, 'project_adres', ''),
(145, 132, 'email', 'vig@mail.com'),
(146, 132, 'email2', ''),
(147, 132, 'project_adres', ''),
(148, 132, 'email', 'efwefwef'),
(149, 132, 'email2', ''),
(150, 132, 'project_adres', ''),
(151, 132, 'email2', ''),
(152, 132, 'project_adres', ''),
(153, 132, 'email2', ''),
(154, 132, 'project_adres', 'test2'),
(155, 132, 'email2', 'test@mail.ru'),
(163, 132, 'image', '610d277a4bd21610d26bb4e854610d21c630ebe1628162377150_25 (2).jpeg'),
(164, 132, 'image', '610d27a43aa97610d2107e92c71628165695969_verev.jpeg'),
(165, 132, 'image', '610d27a44287f610d202851f151628165695969_verev.jpeg'),
(166, 132, 'image', '610d27a46c912610d269683e86610d21c630ebe1628162377150_25 (2).jpeg'),
(167, 132, 'image', '610d27a480af1610d2028517edverev.jpg'),
(168, 132, 'image', '610d27a4a1541610d261c69b14610d21c630ebe1628162377150_25 (2).jpeg'),
(169, 134, 'company_name', 'test'),
(170, 134, 'otrasl', 'продажа одежды'),
(171, 134, 'rol_in_company', 'директор '),
(172, 134, 'adres', 'https://www.youtube.com/'),
(173, 134, 'opros1', 'opros1_ok'),
(174, 134, 'project_adres', 'test.ru'),
(175, 134, 'email2', 'test2@mail.ru'),
(176, 134, 'email', 'test11@mail.ru'),
(177, 134, 'email2', 'test111@mail.ru'),
(178, 134, 'project_adres', 'test.ru'),
(179, 134, 'email2', 'test111@mail.ru'),
(180, 134, 'opros1', 'opros2_ok'),
(181, 134, 'pass_verfic_cod', '90187696'),
(182, 134, 'project_adres', ''),
(183, 134, 'email2', ''),
(184, 134, 'project_adres', ''),
(185, 134, 'email2', ''),
(186, 134, 'project_adres', ''),
(187, 134, 'email2', ''),
(188, 134, 'project_adres', ''),
(189, 134, 'email2', ''),
(190, 134, 'project_adres', ''),
(191, 134, 'email2', ''),
(192, 134, 'project_adres', ''),
(193, 134, 'email2', ''),
(194, 134, 'project_adres', 'cadvdvd'),
(195, 134, 'email2', 'vsdvsdvsdv'),
(196, 134, 'project_adres', ''),
(197, 134, 'email2', ''),
(198, 134, 'project_adres', 'sdvsdvsd'),
(199, 134, 'email2', 'dvsdvsdvsd'),
(200, 134, 'opros3', 'opros3_ok'),
(201, 134, 'opros3', 'opros3_ok'),
(202, 134, 'opros3', 'opros3_ok'),
(203, 134, 'opros3', 'opros3_ok'),
(204, 134, 'opros3', 'opros3_ok'),
(205, 134, 'opros3', 'opros3_ok'),
(206, 134, 'opros3', 'opros3_ok'),
(207, 134, 'opros3', 'opros3_ok'),
(208, 134, 'opros3', 'opros3_ok'),
(209, 134, 'opros3', 'opros3_ok'),
(210, 134, 'opros3', 'opros3_ok'),
(211, 134, 'opros3', 'opros3_ok'),
(212, 134, 'opros3', 'opros3_ok'),
(213, 134, 'opros3', 'opros3_ok'),
(214, 134, 'opros3', 'opros3_ok'),
(215, 134, 'opros3', 'opros3_ok'),
(216, 134, 'opros3', 'opros3_ok'),
(217, 134, 'opros3', 'opros3_ok'),
(218, 134, 'opros3', 'opros3_ok'),
(219, 134, 'company_name', 'JustCode'),
(220, 134, 'otrasl', 'продажа одежды'),
(221, 134, 'rol_in_company', 'директор '),
(222, 134, 'adres', ''),
(223, 134, 'opros1', 'opros1_ok'),
(224, 134, 'project_adres', 'justcode'),
(225, 134, 'email2', 'test2@mail.ru'),
(226, 134, 'email', 'justcode@gmail.com'),
(227, 134, 'email2', 'justcode@gmail.com'),
(228, 134, 'project_adres', 'justcode@gmail.com'),
(229, 134, 'email2', 'justcode@gmail.com'),
(230, 134, 'opros2', 'opros2_ok'),
(231, 134, 'opros3', 'opros3_ok'),
(232, 134, 'project_adres', 'fferferfer'),
(233, 134, 'email2', 'test2@mail.ru'),
(234, 134, 'project_adres', 'rererer'),
(235, 134, 'email2', 'test2@mail.ru'),
(236, 134, 'project_adres', 'wfferferg'),
(237, 134, 'email2', 'test2@mail.ru'),
(238, 135, 'company_name', 'paruyr'),
(239, 135, 'otrasl', 'продажа игрушек'),
(240, 135, 'rol_in_company', 'управляющий'),
(241, 135, 'adres', 'http://justcode.u1246912.cp.regruhosting.ru/'),
(242, 135, 'opros1', 'opros1_ok'),
(243, 135, 'project_adres', 'paruyr'),
(250, 135, 'email2', 'artpa4@mail.ru'),
(251, 135, 'email', 'artpa@mail.ru'),
(252, 135, 'email2', 'artpa2@mail.ru'),
(254, 135, 'opros2', 'opros2_ok'),
(255, 135, 'opros3', 'opros3_ok'),
(256, 135, 'opros3', 'opros3_ok'),
(257, 135, 'opros3', 'opros3_ok'),
(258, 135, 'opros3', 'opros3_ok'),
(259, 135, 'opros3', 'opros3_ok'),
(260, 135, 'opros3', 'opros3_ok'),
(262, 135, 'otrasl', 'продажа одежды'),
(263, 135, 'rol_in_company', 'директор '),
(264, 135, 'adres', 'jujfuwjeufjewu'),
(265, 135, 'opros1', 'opros1_ok'),
(266, 135, 'pass_verfic_cod', '02391256'),
(268, 135, 'opros3', 'opros3_ok'),
(269, 135, 'opros3', 'opros3_ok'),
(270, 135, 'company_name', ''),
(271, 135, 'otrasl', 'Отрасль'),
(272, 135, 'rol_in_company', 'Роль в компании'),
(273, 135, 'adres', ''),
(274, 135, 'opros1', 'opros1_ok'),
(275, 135, 'project_adres', ''),
(276, 135, 'project_adres', ''),
(277, 135, 'project_adres', ''),
(279, 131, 'pass_verfic_cod', '62735595'),
(280, 131, 'pass_verfic_cod', '99875482'),
(281, 135, 'opros3', 'opros3_ok'),
(282, 135, 'opros3', 'opros3_ok'),
(283, 135, 'company_name', ''),
(284, 135, 'otrasl', 'ÐžÑ‚Ñ€Ð°ÑÐ»ÑŒ'),
(285, 135, 'rol_in_company', 'Ð Ð¾Ð»ÑŒ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸'),
(286, 135, 'adres', ''),
(287, 135, 'opros1', 'opros1_ok'),
(288, 135, 'project_adres', ''),
(289, 135, 'project_adres', ''),
(290, 135, 'project_adres', ''),
(291, 137, 'company_name', 'bigbody'),
(292, 137, 'otrasl', 'Ð¿Ñ€Ð¾Ð´Ð°Ð¶Ð° Ñ‚ÐµÑ…Ð½Ð¸ÐºÐ¸'),
(293, 137, 'rol_in_company', 'Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€ '),
(294, 137, 'adres', ''),
(295, 137, 'opros1', 'opros1_ok'),
(296, 137, 'email', 'paruyr.kirakosyan1995@gmail.com'),
(297, 137, 'email2', 'testart@mail.ru'),
(298, 137, 'project_adres', 'bigbody'),
(299, 137, 'opros2', 'opros2_ok'),
(300, 137, 'opros3', 'opros3_ok'),
(301, 138, 'company_name', 'DAOB'),
(302, 138, 'otrasl', 'ÐžÑ‚Ñ€Ð°ÑÐ»ÑŒ'),
(303, 138, 'rol_in_company', 'Ð Ð¾Ð»ÑŒ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸'),
(304, 138, 'adres', ''),
(305, 138, 'opros1', 'opros1_ok'),
(306, 138, 'email', 'fnk@daob.ru'),
(307, 138, 'project_adres', 'game.daob.ru'),
(308, 138, 'opros2', 'opros2_ok'),
(309, 137, 'opros3', 'opros3_ok'),
(310, 151, 'company_name', 'tres'),
(311, 151, 'otrasl', 'Ð¿Ñ€Ð¾Ð´Ð°Ð¶Ð° Ð¾Ð´ÐµÐ¶Ð´Ñ‹'),
(312, 151, 'rol_in_company', 'Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€ '),
(313, 151, 'adres', 'bsbsfbs'),
(314, 151, 'opros1', 'opros1_ok'),
(315, 151, 'email', 'teeee@mail.ru'),
(316, 151, 'project_adres', 'erevan'),
(317, 151, 'opros2', 'opros2_ok'),
(318, 151, 'opros3', 'opros3_ok'),
(319, 151, 'opros3', 'opros3_ok'),
(320, 151, 'opros3', 'opros3_ok'),
(321, 151, 'opros3', 'opros3_ok'),
(322, 151, 'opros3', 'opros3_ok'),
(323, 156, 'company_name', ''),
(324, 156, 'otrasl', 'ÐžÑ‚Ñ€Ð°ÑÐ»ÑŒ'),
(325, 156, 'rol_in_company', 'Ð Ð¾Ð»ÑŒ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸'),
(326, 156, 'adres', ''),
(327, 156, 'opros1', 'opros1_ok'),
(328, 156, 'project_adres', ''),
(329, 156, 'project_adres', ''),
(330, 156, 'project_adres', ''),
(331, 156, 'project_adres', ''),
(332, 156, 'project_adres', ''),
(333, 156, 'otrasl', 'ÐžÑ‚Ñ€Ð°ÑÐ»ÑŒ'),
(334, 156, 'rol_in_company', 'Ð Ð¾Ð»ÑŒ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸'),
(335, 156, 'adres', ''),
(336, 156, 'otrasl', 'ÐžÑ‚Ñ€Ð°ÑÐ»ÑŒ'),
(337, 156, 'rol_in_company', 'Ð Ð¾Ð»ÑŒ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸'),
(338, 156, 'otrasl', 'ÐžÑ‚Ñ€Ð°ÑÐ»ÑŒ'),
(339, 156, 'rol_in_company', 'Ð Ð¾Ð»ÑŒ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸'),
(340, 156, 'otrasl', 'ÐžÑ‚Ñ€Ð°ÑÐ»ÑŒ'),
(341, 156, 'rol_in_company', 'Ð Ð¾Ð»ÑŒ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸'),
(342, 156, 'company_name', 'eee'),
(343, 156, 'otrasl', 'Ð¿Ñ€Ð¾Ð´Ð°Ð¶Ð° Ð¾Ð´ÐµÐ¶Ð´Ñ‹'),
(344, 156, 'rol_in_company', 'Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€ '),
(345, 156, 'adres', '33e33333'),
(346, 156, 'opros1', 'opros1_ok'),
(347, 156, 'project_adres', ''),
(348, 156, 'project_adres', ''),
(349, 156, 'project_adres', ''),
(350, 156, 'project_adres', ''),
(351, 159, 'otrasl', 'ÐžÑ‚Ñ€Ð°ÑÐ»ÑŒ'),
(352, 159, 'rol_in_company', 'Ð Ð¾Ð»ÑŒ Ð² ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸'),
(353, 159, 'project_adres', 'testerr'),
(354, 159, 'email', 'artpa199@mail.ru'),
(355, 159, 'project_adres', 'testt'),
(356, 159, 'opros2', 'opros2_ok'),
(357, 159, 'opros3', 'opros3_ok'),
(358, 159, 'project_adres', 'acscas'),
(359, 159, 'project_adres', 'sdgsdgsdg'),
(361, 159, 'project_adres', 'ascac'),
(362, 159, 'opros2', 'opros2_ok'),
(365, 159, 'project_adres', 'wvsdvsdv'),
(366, 159, 'opros2', 'opros2_ok'),
(368, 159, 'project_adres', 'vsdvsd'),
(369, 159, 'opros2', 'opros2_ok'),
(370, 159, 'email2', 'test3@mail.ru'),
(371, 159, 'email2', 'test2@mail.ru'),
(372, 159, 'email2', 'test1@mail.ru'),
(373, 159, 'email2', 'test3@mail.ru'),
(374, 159, 'email2', 'test2@mail.ru'),
(375, 159, 'email2', 'test1@mail.ru'),
(376, 159, 'project_adres', ''),
(377, 159, 'email2', 'artpa1995@mail.ru'),
(378, 159, 'email2', 'test2@mail.ru'),
(379, 159, 'email2', 'test1@gmail.com'),
(380, 159, 'email2', 'test3@mail.ru'),
(381, 159, 'email2', 'test2@mail.ru'),
(382, 159, 'email2', 'test1@gmail.com'),
(383, 159, 'project_adres', ''),
(384, 159, 'opros3', 'opros3_ok'),
(385, 159, 'opros3', 'opros3_ok'),
(386, 159, 'opros3', 'opros3_ok'),
(387, 159, 'opros3', 'opros3_ok');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(24) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `code` varchar(11) NOT NULL,
  `emailcode` varchar(64) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `password`, `code`, `emailcode`, `status`) VALUES
(132, 'test22', 'test22', '+37497979797', '$1$kin.qJIU$98RiALmQOKR.Ba1rX1KQj/', '204687', '', '1'),
(133, 'test', 'test', '987987987', '$1$SCfPhkJI$EJOvvkoeIog2s668fl3TG1', '490527', '', '0'),
(134, 'test', 'test', '+37495959595', '$1$BcyJWxk8$2LOQivK1BKHEkbD5FzDb6.', '237714', '', '1'),
(135, 'pash', 'kir', '+37455555555', '$1$DeKAXpOw$CxedF0r2KLCcJiTZpUaFx/', '548561', '', '1'),
(136, 'art', 'kir', '+37498010232', '$1$p3IICru3$oa8L93bhlXOu6VxB79BTV.', '590628', '', '0'),
(137, 'art', 'kir', '+37455095950', '$1$1Gr39UgA$SW47PK9OSl6Uf2oMEgyEx0', '512721', '', '1'),
(138, 'ÐÐ¸ÐºÐ¸Ñ‚Ð°', 'Ð¤Ð»Ð¾Ñ€Ð¸Ð½ÑÐºÐ¸Ð¹', '+79037654753', '$1$hl2.WTPJ$cCNzVb24IUXBcUVszyksi0', '668723', '', '1'),
(147, 'tyom', 'tyom', '+37493581835', '$1$xuR8nwmp$TpDrTdQ4o3ynMmUK3x98q.', '969054', '', '1'),
(151, 'rth', 'tr', '+37455115511', '$1$/AHEjO4H$v6x7E7K9pDK9boxsJkIMw/', '109464', '', '1'),
(152, 'Artem', 'Hakobjanyan', '37493217779', '$1$W.s9aVHM$F0egWPuyfL4rpUNIh.j.91', '917852', '', '1'),
(153, 'thrt', 'rth', '+37498899889', '$1$EQsjOxxA$TpJQrfwHywv4tw6VK6HWr/', '195238', '195238', '1'),
(154, 'weg', 'dgn', '+37498989874', '$1$xus6L0sl$GfhRIrKEkV9CIZDQ8XHNZ1', '729762', '729762', '0'),
(155, 'qq', 'qq', '+37498456221', '$1$wWpBxYcF$A1M2MeWdJGU/qWxBX/D.y1', '419717', '419717', '0'),
(156, 'vig', 'ver', '+37455115514', '$1$Cm2QsBWa$aZoBigFjB8oVODC00zM8S0', '612906', '612906', '1'),
(157, 'dw', 'dw', '+37498565652', '$1$lWOwPRQt$VZZraMizovwnDCzdh2nbS0', '662944', '662944', '0'),
(158, 'ssq', 'sqsq', '+37496568555', '$1$RH02mel4$XgaiDAMyTGJW5xcLpHivK1', '073445', '073445', '1'),
(159, 'test', 'es', '+37477774441', '$1$9WtmXXp5$0TTATpA8g2SbOu.eHUjY//', '772205', '772205', '1'),
(160, 'vig', 'sa', '+37498855441', '$1$MZCDRcGr$V0KAiITJYZyNirkIZEhc7.', '103822', '103822', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;

--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
