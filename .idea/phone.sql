SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `mark` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `phone` (`id`, `mark`, `price`) VALUES
(1, 'Iphone', '60000'),
(2, 'Galaxy', '56568'),
(3, 'Iphone', '52125');

ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;