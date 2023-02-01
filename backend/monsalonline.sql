

CREATE TABLE `appointement` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `appointement` (`id`, `date`, `client_id`) VALUES
(6, '2023-02-09 10:00:00', 1);


CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `ref` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `client` (`id`, `first_name`, `last_name`, `phone`, `ref`) VALUES
(1, 'Oussama', 'Haddi', '0606060606', 'GkjnzfgtZRF');


ALTER TABLE `appointement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `appointement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



ALTER TABLE `appointement`
  ADD CONSTRAINT `appointement_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
