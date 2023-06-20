--
-- Base de données : `PFA_2`
--

CREATE TABLE `user` (
  `username` int(11) NOT NULL PRIMARY KEY,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL DEFAULT '2',
  `status` varchar(255) NOT NULL,
  `tick_num` int(11) NOT NULL DEFAULT 0,
  `speciality` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
);

INSERT INTO `user` (`username`, `password`, `name`, `email`, `profile`, `status`, `tick_num`, `speciality`, `position`, `image`) VALUES
(1, 'hadil', 'hadil yahiaoui', 'hadilyahiaoui02@gmail.com', '0', '0', 1, '', '', 'admin.jpeg'),
(2, 'nabil', 'nabil kouki', 'koukinabil@gmail.com', '1', '1', 1, 'Superior Technician', 'Supervisor', 'male2.png'),
(3, '123', 'nada zammit chatti', 'nadaz@outlook.fr', '1\r\n', '0', 2, 'Software Engineer', 'Project Manager', 'female2.png'),
(4, 'tyuio', 'amin bachka', 'bachkamohamed1@gmail.com', '2', '0', 2, '', '', 'male1.png'),
(5, 'azerty', 'roua bettaieb', 'rouabettaieb@gmail.com', '2', '1', 2, '', '', 'female1.png');



CREATE TABLE `ticket` (
  `num` int(11) NOT NULL PRIMARY KEY,
  `object` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `reply` text NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `id_client` int(11) DEFAULT NULL,
  `id_tech` int(11) DEFAULT NULL,
  FOREIGN KEY (`id_client`) REFERENCES `user`(`username`),
  FOREIGN KEY (`id_tech`) REFERENCES `user`(`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `ticket` (`num`, `object`, `msg`, `reply`, `state`, `id_client`, `id_tech`) VALUES
(15, 'Internet Connection Issue', 
    'Hi, I\'m experiencing frequent disconnections with my internet connection. 
    It keeps dropping every few minutes, making it difficult to work. 
    Can you please assist me in resolving this issue? Thank you.', '', 0, 5, NULL),
(16, 'Printer Not Working', 
    'Hello, I\'m having trouble with my printer. 
    Whenever I send a print command, nothing happens. 
    I have checked the printer connections and made sure it has paper and ink. 
    Could you please help me get the printer working again? Your assistance is greatly appreciated.', 
    'Thank you for reporting the printer issue. Our technicians will assist you in diagnosing and fixing 
    the problem. We\'ll work together to get your printer up and running smoothly again. 
    Thank you for your understanding.', 2, 5, 3),
(17, 'Email Not Sending', 'Hello, I\'ve been trying to send emails from my account, 
    but they are not going through. I have checked the recipient\'s email address,
    and it is correct. Could you please look into this and help me resolve the problem? Thanks.', '', 0, 4, 2),
(18, 'Software Installation Error', 
    'Hi, I\'m trying to install a software program on my computer, but I keep encountering an error during the installation process. 
    The error message says \'Error code XYZ.\' I would appreciate your assistance in troubleshooting and resolving this issue. 
    Thank you.', 'We\'re sorry to hear about the installation error you encountered. 
    Our technical experts will analyze the issue and guide you through the troubleshooting steps to resolve it. 
    We appreciate your cooperation.', 1, 4, 3);
