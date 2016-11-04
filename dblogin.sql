-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblogin`
--

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(65, 'Ivan', 'ivan@abv.bg', '$2y$10$zqrhypJ5EuitC3nUWowjaeIdY5xsMLREr2HEioBOj.8KtqojWSidK'),
(44, 'ddddd', 'proletinnn@abv.bg', '$2y$10$Oijs1q7pniUGKReDw5bqr.xkziOMqNfNgc2bD1js6RhPrSqcC4PL.'),
(43, 'darina', 'dary_andreeva@abv.bg', '$2y$10$6lxGIPB5G85dO2cx9DS71.6PTvppM6/QOttAI50cMUSNWof57/vZG'),
(41, 'admin', 'admin@abv.bg', '$2y$10$UGlOIO1qp0nNvrLy3Qe./OXN2kpKc08r7Nl3dpKYjDVO4XEW06hWS'),
(42, 'Donald', 'dragan@abv.bg', '$2y$10$ybVcMnADUpP5ztzwcvfXmu9WHXV1EBfIXe8dPDqJ0Jj8zqD79DSzW'),
(58, 'rady', 'rady@abv.bg', '$2y$10$U/6zFM6i3qSbyrzN4/NL5OQG2sKnv4UUzLfck6a2OFrcsFjkfhgoK'),
(57, 'Stoqn', 'stoqn@abv.bg', '$2y$10$WUQhZoXrsotcRf7VtI6fB.9dqTtbH8iJpWBYg3JcQsLyesUn1ne9G'),
(59, 'dostoevski', 'dostoevski@abv.bg', '$2y$10$ufBEIuAXwnoTuZxZdE5bFO0gV4MqsWEkt2FUxZAK8LNpsHkj9Zh4S'),
(60, 'Strashnikov', 'strashnikov@abv.bg', '$2y$10$BJRYEKbsuiqP6cq/25ma9.4QoyRpLHcF9yLXpqm3Jvn8mfKnykfby'),
(61, 'stanislava', 'stanislava@abv.bg', '$2y$10$S.DVNNzedd1ZEUX7veISD..RcodxJG.Wotiy0QBFeZeSxmm8ZTbtW'),
(62, 'galq', 'galq@abv.bg', '$2y$10$lH1hSJ9Drl/J4jaTy4xjk.5rZIF7rpmPoatlpvurhmjRZkRqcAeRq'),
(63, 'sonq', 'sonq@abv.bg', '$2y$10$zP8f/vmSp083MOPbkilF0Oa4h4.F3vFAC3KZEeFK/bYP8VqU0l9D6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
