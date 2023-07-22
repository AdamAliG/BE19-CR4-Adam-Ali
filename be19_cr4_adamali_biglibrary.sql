-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jul 2023 um 17:07
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be19_cr4_adamali_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `description` varchar(150) NOT NULL,
  `type` varchar(30) NOT NULL,
  `author_first_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(100) NOT NULL,
  `publish_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`media_id`, `title`, `image`, `ISBN`, `description`, `type`, `author_first_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(1, 'Tess of the Road', 'https://images.squarespace-cdn.com/content/v1/5c53112d5b409bb1f2f337dc/1563478871878-LDSXUFIL3JVID8HUW32L/91%2BtKDwDQFL.jpg?format=1000w', '121314', '\"Tess of the Road\" is a fantasy novel written by Rachel Hartman, published in 2018. Set in the same world as her previous books, \"Seraphina\" and \"Shad', 'book', 'Adam Ali', 'Rachel Hartman', 'Karl Heinz Straße 67', '18.03.2023'),
(2, 'The Dark Deception', 'https://www.creativeparamita.com/wp-content/uploads/2023/02/The-Dark-Deception-442x705.jpg', '1212452', 'In the small, secluded town of Ravenbrook, a haunting secret lies buried beneath the surface. When a series of unexplainable events shrouds the commun', 'book', 'Adam Ali', 'Josef Hitman', 'Altmannsdorfer Straße', '25.01.2000'),
(3, 'MEMORY', 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/contemporary-fiction-night-time-book-cover-design-template-1be47835c3058eb42211574e0c4ed8bf_screen.jpg?ts=1637012564', '464758345', 'In Purgatory He Has to Piece Together his jumbled memories.', 'book', 'Adam Ali', 'Angelina Aludo', 'entengasse 50', '15.09.2003'),
(4, 'SECRET WISDOM', 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/law-of-attraction-book-cover-template-design-0c17ed6a9092a4034447d6e012aaa655_screen.jpg?ts=1636980591', '36367345', 'A Law of attraction guide', 'book', 'Adam Ali', 'Peter Cash', 'ernst-wagner Straße 11', '15.05.2005'),
(5, 'NEVER ENDING SKY', 'https://templates.mediamodifier.com/5db698f47c3dc9731647a4e9/fiction-novel-book-cover-template.jpg', '7493823', 'New York Times Best seller', 'book', 'Adam Ali', 'Peter Cash', 'Peter Cash', '14.04.2005'),
(6, 'The PAST IS RISING', 'https://i.pinimg.com/564x/f7/c8/12/f7c812c9b0296cd9f119e33a06d9a256.jpg', '74584578', 'Follow the Water for good luck', 'book', 'Adam Ali', 'Angelina Aludo', 'bernhof-gasse 5', '21.06.2022'),
(7, 'The CRYING FOREST', 'https://covers.bookcoverzone.com/slir/w450/png24-front/bookcover0009288.jpg', '657383', 'Here comes the first time of the hook of the book And here we have the second line of the book of this book', 'book', 'Adam Ali', 'Nicholas Jackson', 'papagei straße 13', '10.05.2009'),
(8, 'LEAR', 'https://images.squarespace-cdn.com/content/v1/563890dce4b0facc12851d8f/1518946622193-O7MD1082UC2NNF9M722O/Lear+Front.jpg', '534263', 'The Shakespear Company plays Lear at Babylon', 'book', 'Adam Ali', 'Rachel Hartman', 'Altmannsdorfer Straße', '15.05.2005'),
(9, 'To SLEEP', 'https://blog-cdn.reedsy.com/directories/admin/attachments/large_ce5d4ed6f53d69535c1893a3e14cb41e.jpg', '63727348', 'Fall from the edge on the ground and feeling pain', 'Video', 'Adam Ali', 'Peter Cash', 'neudorf 365', '18.03.2023'),
(10, 'MORE MIRACLE THAN BIRD', 'https://media.graphcms.com/J8yddzHqT1m4PJEX9ABj', '856743783', 'Stunning and interesting, how the human mind is able to process certain informations', 'DVD', 'Adam Ali', 'Josef Hitman', 'Karl Heinz Straße 67/7/22', '15.09.2003');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
