-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lis 2022, 22:20
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
  `moc` smallint(4) NOT NULL,
  `opis` text COLLATE utf8mb4_polish_ci NOT NULL,
  `id_wlasciciela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id`, `marka`, `model`, `stan`, `przebieg`, `cena`, `rocznik`, `rodzaj_paliwa`, `moc`, `opis`, `id_wlasciciela`) VALUES
(1, 'Mercedes-Benz', 'Klasa S', 'Używane', 87000, 299000, 2015, 'Benzyna', 465, '', 0),
(2, 'Kia', 'Magentis 2.0 CRDi', 'Używane', 276000, 18400, 2009, 'Diesel', 149, '', 0),
(3, 'Audi', 'Q5 2.0 TDI Quattro', 'Powypadkowe', 87000, 94700, 2015, 'Diesel', 190, '', 0),
(4, 'Hyundai', 'I10 1.0', 'Używane', 118775, 26700, 2014, 'Benzyna', 67, '', 0),
(5, 'BMW', 'Seria 4 440i Gran Coupe XDrive', 'Używane', 149921, 149000, 2017, 'Benzyna', 326, '', 0),
(6, 'Audi', 'A8 L 55 TFSI MHEV Quattro Tiptr', 'Używany', 55000, 289000, 2017, 'Benzyna', 340, '', 0),
(7, 'Porsche', 'Panamera Turbo PDK', 'Używany', 73000, 250000, 2013, 'Benzyna', 520, '', 0),
(8, 'Chevrolet', 'Camaro', 'Używany', 11000, 319000, 2018, 'Benzyna', 432, '', 0),
(9, 'Mercedes-Benz', 'Klasa C AMG 43 4-Matic', 'Używany', 52000, 233825, 2018, 'Benzyna', 367, '', 0),
(10, 'Ford', 'Ranger Autm', 'Używany', 81000, 60000, 2017, 'Diesel', 200, '', 0),
(13, 'Toyota ', 'Corolla 1.6 Comfort MS', 'Uzywane', 51500, 40590, 2016, 'Benzyna', 132, '', 0),
(14, 'Audi ', 'R8 Spyder V10 Performance 5.2', 'Nowy', 10, 900000, 2022, 'Benzyna', 570, '', 0),
(15, 'Mercedes-Benz', 'GLC 350 E 4-Matic', 'Nowy', 136, 70000, 2017, 'Elektryk', 211, '', 0),
(16, 'Bentley', 'Continental Flying Spur W12', 'Uzywane', 10605, 369, 2013, 'Benzyna', 625, '', 0),
(26, '123', '412', 'Nowy', 123, 123, 0000, 'Elektryk', 123, '', 0),
(27, '123', '412', 'Nowy', 123, 123, 0000, 'Elektryk', 123, '', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `created_at` varchar(40) COLLATE utf8mb4_polish_ci DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(225, '111', '$2y$10$UkSXjzBsQgaCULT8uQXTmOAz/I/fNnCt.sXw/qusE.lRVwmBhnLgy', '2022-11-26 00:52:52');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
