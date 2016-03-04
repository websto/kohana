-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 04 2016 г., 13:30
-- Версия сервера: 5.5.47-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kohana`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `parent_id` int(5) NOT NULL,
  `sort` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`, `meta_d`, `meta_k`, `img`, `parent_id`, `sort`) VALUES
(1, 'Отопление', '', '', '', 0, ''),
(2, 'Раковины', '', '', '', 0, ''),
(3, 'Ванные', '', '', '', 0, ''),
(4, 'Смесители', '', '', '', 0, ''),
(5, 'Cinier', '', '', '', 1, ''),
(6, 'AdHoc', '', '', '', 1, ''),
(10, 'Плитка', '', '', '', 0, ''),
(14, 'Uni', '', '', '', 0, 'a:9:{i:0;s:1:"1";i:1;s:1:"3";i:2;s:1:"4";i:3;s:1:"5";i:4;s:1:"6";i:5;s:1:"7";i:6;s:1:"8";i:7;s:1:"9";i:8;s:2:"10";}');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `post` int(6) NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) NOT NULL,
  `cat` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post`, `author`, `text`, `date`, `cat`) VALUES
(1, 2, 'hdjd', 'dkkdkd', '31-01-2013 11:04', '2'),
(2, 6, 'xxxxxxjkskskks', 'xjjsj\\nsslsxmx,x,,xx\\nxx,,x,,x,x,,x,x,,x', '31-01-2013 12:17', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cat` int(5) NOT NULL,
  `desc` text NOT NULL,
  `text` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `slider` text NOT NULL,
  `zip` varchar(255) NOT NULL,
  `main` int(1) NOT NULL DEFAULT '0',
  `sort` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `sort` (`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=54 ;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `title`, `meta_d`, `meta_k`, `img`, `cat`, `desc`, `text`, `price`, `slider`, `zip`, `main`, `sort`) VALUES
(1, 'Bambou clair', '', '', '1337839482.jpg', 5, 'Cinier Bambou clair Мастера Cinier – главные специалисты по производству современных приборов для обогрева высокого качества. Девиз компании Cinier – стиль, комфорт и совершенство технологии. Каждый прибор выполнен вручную, похож на настоящую скульптуру, а отличные технологические показатели обеспечивают комфорт обогрева. Дизайн-радиаторы Cinier делаются из камня Olycale, который добывают во Франции в Пиренеях.', 'Cinier Bambou clair Мастера Cinier – главные специалисты по производству современных приборов для обогрева высокого качества. Девиз компании Cinier – стиль, комфорт и совершенство технологии. Каждый прибор выполнен вручную, похож на настоящую скульптуру, а отличные технологические показатели обеспечивают комфорт обогрева. Дизайн-радиаторы Cinier делаются из камня Olycale, который добывают во Франции в Пиренеях. Скульптурные изображения можно подобрать к абсолютно разному стилистическому оформлению комнат. Жить в окружении красивых вещей – это образ жизни. Каждый видит красоту по-своему, и каждая деталь имеет смысл. Большая площадь поверхности не пересушивает воздух, поддерживает уровень влажности, а значит, что обладатель такого радиатора получит здоровое и приятное дыхание. Тепло равномерно распределяется от пола и до потолка за счет термоэффекта камня Olycale. Также Cinier существенно экономится потребление электроэнергии: из 24 часов только 7 уходит на расход энергии, а остальное время помещение отапливается аккумулированным теплом. Cinier подарит уникальную тишину при отличном функционировании. Cinier Bambou clair.', '250', '', '', 0, ''),
(2, 'Bambou rouge', '', '', '1337839545.jpg', 5, 'Cinier Bambou rouge. Мастера Cinier – главные специалисты по производству современных приборов для обогрева высокого качества. Девиз компании Cinier – стиль, комфорт и совершенство технологии. Каждый прибор выполнен вручную, похож на настоящую скульптуру, а отличные технологические показатели обеспечивают комфорт обогрева.', 'Cinier Bambou rouge. Мастера Cinier – главные специалисты по производству современных приборов для обогрева высокого качества. Девиз компании Cinier – стиль, комфорт и совершенство технологии. Каждый прибор выполнен вручную, похож на настоящую скульптуру, а отличные технологические показатели обеспечивают комфорт обогрева. Дизайн-радиаторы Cinier делаются из камня Olycale, который добывают во Франции в Пиренеях. Скульптурные изображения можно подобрать к абсолютно разному стилистическому оформлению комнат. Жить в окружении красивых вещей – это образ жизни. Каждый видит красоту по-своему, и каждая деталь имеет смысл. Большая площадь поверхности не пересушивает воздух, поддерживает уровень влажности, а значит, что обладатель такого радиатора получит здоровое и приятное дыхание. Тепло равномерно распределяется от пола и до потолка за счет термоэффекта камня Olycale. Также Cinier существенно экономится потребление электроэнергии: из 24 часов только 7 уходит на расход энергии, а остальное время помещение отапливается аккумулированным теплом. Cinier подарит уникальную тишину при отличном функционировании. Cinier Bambou rouge', '300', '', '', 0, ''),
(3, 'Baron', '', '', '1337839663.jpg', 5, '	\r\nCinier Baron. Мастера Cinier – главные специалисты по производству современных приборов для обогрева высокого качества. Девиз компании Cinier – стиль, комфорт и совершенство технологии. Каждый прибор выполнен вручную, похож на настоящую скульптуру, а отличные технологические показатели обеспечивают комфорт обогрева.', '', '200', '', '', 0, ''),
(4, 'Charles', '', '', '1337839875.jpg', 5, 'Cinier Charles. Мастера Cinier – главные специалисты по производству современных приборов для обогрева высокого качества. Девиз компании Cinier – стиль, комфорт и совершенство технологии. Каждый прибор выполнен вручную, похож на настоящую скульптуру, а отличные технологические показатели обеспечивают комфорт обогрева. Дизайн-радиаторы Cinier делаются из камня Olycale, который добывают во Франции в Пиренеях.', '', '230', '', '', 1, ''),
(5, 'Charles plus', '', '', '1337839939.jpg', 5, 'Cinier Charles plus. Мастера Cinier – главные специалисты по производству современных приборов для обогрева высокого качества. Девиз компании Cinier – стиль, комфорт и совершенство технологии. Каждый прибор выполнен вручную, похож на настоящую скульптуру, а отличные технологические показатели обеспечивают комфорт обогрева. Дизайн-радиаторы Cinier делаются из камня Olycale, который добывают во Франции в Пиренеях.', '', '500', '', '', 1, ''),
(6, 'Ecume bain', '', '', '1337840001.jpg', 5, 'Cinier Ecume bain. Мастера Cinier – главные специалисты по производству современных приборов для обогрева высокого качества. Девиз компании Cinier – стиль, комфорт и совершенство технологии. Каждый прибор выполнен вручную, похож на настоящую скульптуру, а отличные технологические показатели обеспечивают комфорт обогрева. Дизайн-радиаторы Cinier делаются из камня Olycale, который добывают во Франции в Пиренеях. Скульптурные изображения можно подобрать к абсолютно разному стилистическому оформлению комнат. Жить в окружении красивых вещей – это образ жизни. Каждый видит красоту по-своему, и каждая деталь имеет смысл.', '', '100', '', '', 1, ''),
(7, 'Brem', '', '', '130125123650.jpg', 2, '<p>\n	Продукция фабрики Brem это радиаторы и полотенцесущителей из стальных труб. Товары компании Брем занимают одно из лидирующих мест на рынке, благодаря высокому уровню качества продукции и изысканному дизайну.</p>\n', '<p>\n	Продукция фабрики Brem это радиаторы и полотенцесущителей из стальных труб. Товары компании Брем занимают одно из лидирующих мест на рынке, благодаря высокому уровню качества продукции и изысканному дизайну. Именно дизайн, изящный и одновременно сдержанный дает возможность радиаторам Брем приспособиться к абсолютно любой архитектурной атмосфере, при этом пере<strong>давая эмоции и чувства, как э</strong>то свойственно отличному проекту. Дизайнерские радиаторы Brem - это не только предмет обогрева, но и так же неотъемлемая часть интерьера, которая может как создать, так и разделить пространство. Предоставляется обширный выбор форм и размеров, а так же есть возможность п<strong>роизводить радиаторы на заказ для абсолютно любых потребностей как помещения, так и его жителей. Brem предлагает цветовую палитру, которая состоит из 80 металлизированных, сатинированных или блестящих, а также некоторые модели могут быть</strong> в хромированной отделке. Для ванной комнаты Brem реализует полотенцесущители, которые не только обогревают помещение, но так же могут сушить полотенца и одежду. Радиаторы Brem созданы в соответствии со всеми эстетическими и функциональными требованиями архитекторов: могут быть размещены в любом пространстве, и в любом необходимом размере. Превосходство Брем в возможности создать любую модель в необходимом размере, иногда изменяя оригинальную структуру радиатора, всегда в высшем стандартном качестве лакирования, сварки и материалов.</p>\n', '150', 'a:5:{i:0;s:21:"S__tmp_php368_tmp.jpg";i:1;s:21:"S__tmp_php369_tmp.jpg";i:2;s:21:"S__tmp_php36A_tmp.jpg";i:3;s:21:"S__tmp_php3BE_tmp.jpg";i:4;s:21:"S__tmp_php215_tmp.jpg";}', '', 0, ''),
(8, 'Brem2', '', '', '130125130529.jpg', 2, '<p>\n	<strong>Lorem ipsum dolor sit amet, consectetur adipi</strong>scing elit.</p>\n<p>\n	&nbsp;</p>\n<p>\n	Vivamus sit amet ornare lacus. Curabitur et lacus ligula.</p>\n', '<p style="text-align: center;">\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ornare lacus. Curabitur et lacus ligula. Sed euismod lacinia magna tincidunt semper. M<em>orbi accumsan, lacus ut euismod lacinia, orci arcu ultricies diam, vel blandit magna diam sed lectus. Viv</em>amus egestas commodo imperdiet. Nullam tempor risus vel nisi auctor aliquam. Phasellus quis nunc at ante posuere auctor non semper nisl.</p>\n', '190', 'a:5:{i:0;s:21:"S__tmp_php3E7_tmp.jpg";i:1;s:21:"S__tmp_php3E8_tmp.jpg";i:2;s:20:"S__tmp_phpBB_tmp.jpg";i:3;s:20:"S__tmp_phpBC_tmp.jpg";i:4;s:20:"S__tmp_phpBD_tmp.jpg";}', '', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `path`, `desc`) VALUES
(1, 'kjdjkkjdskjsd', '130211142412.jpg', 'slkdsklkdlslkddds'),
(3, 'kjdjkkjdskjsdxslklkdkldd', '130211142435.jpg', 'slkdsklkdlslkddds\nxjxkkjxjkx\nxkxlxkxxkxxx'),
(4, 'kjdjkkjdskjsdxslklkdkldd', '130211142449.jpg', 'slkdsklkdlslkddds\nxjxkkjxjkx\nxkxlxkxxkxxx\nsjskksks'),
(5, 'kjdjkkjdskjsdxslklkdkldd', '130211142504.jpg', 'slkdsklkdlslkddds\nxjxkkjxjkx\nxkxlxkxxkxxx\nsjskksks\ndjkkjdskjdsjkjkdkjds');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `cat` int(1) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `cat`, `img`, `date`, `meta_k`, `meta_d`) VALUES
(2, 'jsjkkks skkskkssks ssslslls', '<p>\n	skkskkss</p>\n<p>\n	sksllkss</p>\n<p>\n	skskksks</p>\n', 0, '130204122652.jpg', '30-01-2013', 'ssss', 'sss');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `path`, `desc`, `href`) VALUES
(5, '130129213140.jpg', '<p>\n	ajakaka</p>\n', 'http://leks/5/Charles-plus'),
(2, '130129211859.jpg', '<p>\n	asjjs</p>\n<p>\n	skskskskks</p>\n', ''),
(3, '130129212727.jpg', '<p>\n	mmxmxm</p>\n<p>\n	sksks</p>\n', 'category/5/Cinier');

-- --------------------------------------------------------

--
-- Структура таблицы `sort`
--

CREATE TABLE IF NOT EXISTS `sort` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `parent_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `sort`
--

INSERT INTO `sort` (`id`, `category`, `parent_id`) VALUES
(1, 'Бренды', 0),
(11, 'Cinier', 1),
(3, 'Страна', 0),
(4, 'Тип', 0),
(5, 'Материал', 0),
(6, 'Покрытие', 0),
(7, 'Цвет', 0),
(8, 'Стиль', 0),
(9, 'Вид исполнения', 0),
(10, 'Дополнительные  опции', 0),
(12, 'USA', 3),
(13, 'white', 7),
(14, 'Вес', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `ulogins`
--

CREATE TABLE IF NOT EXISTS `ulogins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `network` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identity` (`identity`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `reset_token` varchar(245) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `tell` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`, `reset_token`, `profession`, `tell`) VALUES
(1, 'websto3@ukr.net', 'admin', '975c23cb830bc8b1694d0fc69d513b833dab2fc5de3816d08aa8c1fb5492d768', 159, 1372839418, '', '', ''),
(7, 'weee@hhh.ddd', 'hfjfkkfkf', '975c23cb830bc8b1694d0fc69d513b833dab2fc5de3816d08aa8c1fb5492d768', 0, NULL, '', '', ''),
(8, 'websto1@ukr.net', 'qqqqqqqq', '975c23cb830bc8b1694d0fc69d513b833dab2fc5de3816d08aa8c1fb5492d768', 15, 1359984868, '', '', ''),
(9, 'wewbsto2@ukr.net', 'weee', '412ef30320da0fac4779e9658c8bf2173827c8a103be2d32ffe9c3ed7616ac89', 0, NULL, '', '', ''),
(10, 'webswwto2@ukr.net', 'цууцкцк', '975c23cb830bc8b1694d0fc69d513b833dab2fc5de3816d08aa8c1fb5492d768', 0, NULL, '', 'Монтажник', '233--3-3-3-'),
(11, 'wewwwwbsto2@ukr.net', 'djjdjdkdd', '975c23cb830bc8b1694d0fc69d513b833dab2fc5de3816d08aa8c1fb5492d768', 0, NULL, '', 'Профессия', '<script></script>"Select * from data"'),
(12, 'weqqbsto2@ukr.net', 'ededeeed', '975c23cb830bc8b1694d0fc69d513b833dab2fc5de3816d08aa8c1fb5492d768', 0, NULL, '', 'Архитектор', 'INSERT INTO [ mysql.user (user, host, password) VALUES (''newadmin'', PASSWORD(''passwd'')), ''a'', ''b'',''c'')/* ] VALUES (''antichat'',''WWW'',''PHP'',''SQL'',''XSS'');'),
(13, 'weqbwwsto2@ukr.net', 'erteyeyyee', '975c23cb830bc8b1694d0fc69d513b833dab2fc5de3816d08aa8c1fb5492d768', 0, NULL, '', 'Архитектор', 'INSERT INTO table VALUES (''antichat'',''WWW'',''PHP'','' [ '' OR BENCHMARK(10000000,BENCHMARK(10000000,md5(now()))) , ''DIE!'') /* ] '',''XSS'');');

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `user_agent`, `token`, `type`, `created`, `expires`) VALUES
(2, 1, '09bfd1d7e55b239310b52e0df77db5554361eaac', '191fc2b323f70c8b998a5bb057e50faf7da918cd', '', 1353679756, 1354889356),
(4, 1, 'a4207393f8da2e51fa181e5ff40453c40857e86b', '95c828af026f15916338754f3f8afb4266d07917', '', 1354189616, 1355399216),
(5, 1, '5d7ade9b8d9569443e629301bd312b5d4589e816', '7e3fea5477a52550e45c3cc492552b812bcdcfc7', '', 1354440118, 1355649718),
(7, 1, '5d7ade9b8d9569443e629301bd312b5d4589e816', 'ea619c2ebd363e43ed64359fbafd4bbe029f1ef2', '', 1354611212, 1355820812),
(8, 1, 'a59e414c72ad373e8d858a39c84abf05317e6130', '2ec00ba2b63109fde52537af99b8359651161d5e', '', 1354611399, 1355820999),
(9, 1, '268c9bd19fac964519ebef2fdd116575ca3afe7b', 'd3e2abaf02f70d7ba132a77e247c047cda7f9f31', '', 1355407310, 1356616910),
(11, 1, '268c9bd19fac964519ebef2fdd116575ca3afe7b', '5dbd8be44dbd4cab13e8e2ce82168393e62b2050', '', 1356877389, 1358086989),
(12, 1, 'd8260d1b70e4b95ffca02d33dd4239b0c44af676', '6bf8edcc108af3f203b09127322231f0c8bb9c32', '', 1356877467, 1358087067),
(13, 1, '268c9bd19fac964519ebef2fdd116575ca3afe7b', 'fc363c472ca40d4cba83624b10184e3f89259dd4', '', 1357476453, 1358686053),
(14, 1, '268c9bd19fac964519ebef2fdd116575ca3afe7b', 'c1f68b99690e542568d95c15fe80842366a73e4c', '', 1357633226, 1358842826),
(15, 1, 'd7c2a3c4c3545e23e499ab61be427860f3f9d570', '44674f5d84bd230f0ffcff9e143ee2ed0c019da5', '', 1358193724, 1359403324),
(17, 1, 'b5af4214e92a628ad8a9cde9f069c5dbb7f5b2ae', 'b4b1441dac6c89cc7752bd762ffa31f7167e8adb', '', 1359103106, 1360312706),
(18, 1, '661ff85d29b556d76fc349e0881b6872e147f8ce', '445fbfd1b0506d31da07537a59372f701560b8b8', '', 1359103280, 1360312880),
(19, 1, '8820df2ccedfe0c75421a471c8de5541ec68aaa0', 'd80cfca84ab9d8799111f165c6e08b1ee5e207b7', '', 1359989823, 1361199423),
(20, 1, '8820df2ccedfe0c75421a471c8de5541ec68aaa0', '12eb4f12bc95a6255ea0f3ae5472b4d706cc1a03', '', 1360010495, 1361220095),
(21, 1, '7cffab9d07facadff2ab7071e2f9c11d0b82cfa9', '99927b22fc08c2066a414966733ddee2b853c089', '', 1360138477, 1361348076),
(22, 1, '7cffab9d07facadff2ab7071e2f9c11d0b82cfa9', '870af13ebf0c89abff3108845fd9db0ab335addb', '', 1361100537, 1362310137),
(23, 1, 'e21b62cac9e6d6888d16a70996494c55ce068091', 'd421dbea4d1c3b2d58e51744fc5b4150be2815ee', '', 1365256580, 1366466180),
(24, 1, '56a86d2c30f3e57fa5529579cbc0082217183f5e', '1d2c34d49690a4b7cdf09df23a8a381994fb8308', '', 1372839418, 1374049018);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
