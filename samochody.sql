-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lis 2022, 15:58
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `samochody`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id` int(11) NOT NULL,
  `marka` text COLLATE utf8mb4_polish_ci NOT NULL,
  `model` text COLLATE utf8mb4_polish_ci NOT NULL,
  `stan` text COLLATE utf8mb4_polish_ci NOT NULL,
  `przebieg` mediumint(9) NOT NULL,
  `cena` mediumint(9) NOT NULL,
  `rocznik` year(4) NOT NULL,
  `rodzaj_paliwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `moc` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id`, `marka`, `model`, `stan`, `przebieg`, `cena`, `rocznik`, `rodzaj_paliwa`, `moc`) VALUES
(1, 'Mercedes-Benz', 'Klasa S', 'Używane', 87000, 299000, 2015, 'Benzyna', 465),
(2, 'Kia', 'Magentis 2.0 CRDi', 'Używane', 276000, 18400, 2009, 'Diesel', 149),
(3, 'Audi', 'Q5 2.0 TDI Quattro', 'Powypadkowe', 87000, 94700, 2015, 'Diesel', 190),
(4, 'Hyundai', 'I10 1.0', 'Używane', 118775, 26700, 2014, 'Benzyna', 67),
(5, 'BMW', 'Seria 4 440i Gran Coupe XDrive', 'Używane', 149921, 149000, 2017, 'Benzyna', 326),
(6, 'Audi', 'A8 L 55 TFSI MHEV Quattro Tiptr', 'Używany', 55000, 289000, 2017, 'Benzyna', 340),
(7, 'Porsche', 'Panamera Turbo PDK', 'Używany', 73000, 250000, 2013, 'Benzyna', 520),
(8, 'Chevrolet', 'Camaro', 'Używany', 11000, 319000, 2018, 'Benzyna', 432),
(9, 'Mercedes-Benz', 'Klasa C AMG 43 4-Matic', 'Używany', 52000, 233825, 2018, 'Benzyna', 367),
(10, 'Ford', 'Ranger Autm', 'Używany', 81000, 60000, 2017, 'Diesel', 200),
(13, 'Toyota ', 'Corolla 1.6 Comfort MS', 'Uzywane', 51500, 40590, 2016, 'Benzyna', 132);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(63, 'kurwo', '$2y$10$gdc/X1w7N5qdvldLegPWE.Fu1knVzgR1Xv/pI2DqtgWWZcB85YkZG', '2022-11-19 12:43:03'),
(64, '', '$2y$10$lp2x7I.S1QtgvgI8z.or6ul34EXXERPmpfeMA5m4JVg3brVZk20IG', '2022-11-19 15:46:22'),
(67, 'dupa', '$2y$10$/GY9vJYC2PFpldogUJ737eDE02TKgy8iLnaD0is2kVXjmiUlg//1u', '2022-11-19 15:47:08'),
(70, '3465346w', '$2y$10$VtFdxEBq5/HvRNFX998GmOlrebQKb4y/TsPqtlOlK2V0KOFA8/6Wa', '2022-11-19 15:53:46'),
(73, '2123312', '$2y$10$lImdQ6YBqEbqrkkls87UIeQ5tc4IsQ6JfkpFrfzqIV4Cv5DTkc606', '2022-11-19 15:54:00'),
(79, '69696969', '$2y$10$jxuWcYcNE/HKcXKWAHJhnuZlVQqatcGsSzBksxYKEuKfAU6YbVLti', '2022-11-19 16:43:05'),
(88, 'maciek2006', '$2y$10$sO.dhc64GIJ8aeFLA/2wJe/9qIMXP1hRuhfdwL9LXxLE9q1snFqrC', '2022-11-19 17:39:40');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
