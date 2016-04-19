SET time_zone = `+00:00`;

CREATE DATABASE IF NOT EXISTS `phprush00` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE phprush00;

CREATE TABLE `articles` (
	  `id` int NOT NULL PRIMARY KEY,
	  `category_id` int NOT NULL,
	  `name` varchar(256) CHARACTER SET utf8 NOT NULL,
	  `description` text CHARACTER SET utf8 NOT NULL,
	  `unit_price` int NOT NULL
);

CREATE TABLE `basket` (
	  `id` int NOT NULL PRIMARY KEY,
	  `uid` int NOT NULL,
	  `articles_tab` text CHARACTER SET utf8 NOT NULL
);

CREATE TABLE `categories` (
	  `id` int NOT NULL PRIMARY KEY,
	  `name` varchar(256) NOT NULL
);

CREATE TABLE `users` (
	  `uid` int NOT NULL PRIMARY KEY,
	  `admin` tinyint DEFAULT NULL,
	  `login` varchar(8) CHARACTER SET utf8 NOT NULL UNIQUE KEY,
	  `passwd` varchar(256) CHARACTER SET utf8 NOT NULL,
	  `email` varchar(256) CHARACTER SET utf8 NOT NULL
);
