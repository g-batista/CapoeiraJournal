-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 05, 2022 at 06:43 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `capoeira`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `picture_id` int(2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approved` tinyint(2) NOT NULL DEFAULT '0',
  `picture` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `picture_id`, `user_id`, `name`, `title`, `msg`, `date`, `approved`, `picture`) VALUES
(33, 0, 1, '', 'Mestre Pastinha', 'Pastinha was born to José Pastinha (born Pastiña), a poor Spanish immigrant who worked as a pedlar and Eugênia Maria de Carvalho Ferreira, a black Bahian homemaker. He was exposed to Capoeira at the age of 8 by an African named Benedito. The story goes that an older and stronger boy from Pastinha\'s neighborhood would often bully and beat him up. One day Benedito saw the aggression, then told Pastinha to stop by his house because he was going to teach him a few things. In his next encounter with the bully, Pastinha defeated him so quickly that the older boy became his admirer. From then on, Pastinha had a happy and modest childhood. In the mornings he would take art classes at the Liceu de Artes e Ofício school where he learned to paint; afternoons were spent playing with kites and practicing Capoeira. He continued his training with Benedito for three more years. Later, he joined a sailor school by his father wish, which would not support the capoeira practice. At the school, he use to teach capoeira to his friends. At the age of 21, he left the sailor school to become a professional painter. During the spare time he would practice capoeira stealthily, since it was still illegal at that time.', '2022-10-28 20:05:21', 1, 'mPastinha.jpeg'),
(34, 0, 1, '', 'Mestre Joao Grande', 'João Oliveira dos Santos, better known as Mestre João Grande, is a Grão-Mestre of the Afro-Brazilian martial art of capoeira angola who has contributed to the spread of this art throughout the world. He was a student of the \"father of Angola\", Mestre Pastinha, and has an academy in New York City.', '2022-10-28 20:49:38', 1, 'mJoaoGrande.jpeg'),
(35, 0, 1, '', 'Mestre Joao Pequeno', 'João Pereira dos Santos or Mestre João Pequeno de Pastinha as he was known within capoeira circles. He began his life in Capoeira as a student of Mestre Gilvenson and later became a disciple of Mestre Pastinha - the father of contemporary Capoeira Angola.', '2022-10-28 20:49:34', 1, 'mestreJoaoPequeno.jpeg'),
(36, 0, 1, '', 'Mestre Moraes', 'Pedro Moraes Trindade, commonly known as Mestre Moraes, is a master of capoeira. Moraes began his training in Capoeira de Angola at the age of eight. His father was also a Capoeirista, or practitioner of Capoeira Angola, the traditional style of Capoeira in Bahia, Brazil.', '2022-10-28 20:55:53', 1, 'mestreMoraes.jpeg'),
(37, 0, 1, '', 'Mestre Caiçara', 'Antonio Carlos Moraes known as Mestre Caicara was born on May 8, 1924 in Cachoeira de São Félix, son of Adélia Maria da Conceição.\r\n\r\nIn 1938 he began to learn Capoeira with Mestre Aberré de Santo Amaro (Antônio Rufino dos Santos). He later learned with Mestre Waldemar. In 1954 he had an important participation in the film “Vadiação” by Alexandre Robatto Jr. along with other important Capoeirstas such as Traira, Curió, Bimba and Waldemar.', '2022-10-28 21:02:29', 1, 'mestreCaicara.jpeg'),
(38, 0, 1, '', 'Mestre Cobrinha Verde', 'Rafael Alves França, known in the world of Capoeira as Mestre Cobrinha Verde, was born in 1908 in the city of Santo Amaro da purificación, the cradle of Capoeira from Bahia. He claimed to be a cousin of the legendary capoerista Besouro Mangangá; from whom he began to learn capoeira at the age of 4 in 1912. Mestre Cobrinha Verde would become one of the most feared and respected capoeristas of his time.', '2022-12-02 00:26:28', 1, 'mestreCobrinhaVerde.jpeg'),
(39, 0, 1, '', 'Mestre Canjiquinha', 'Foi um visionário da capoeira, dizia sempre aos seus alunos\" A capoeira não tem credo, não tem cor, não tem bandeira, ela é do povo, vai correr o mundo\". Tinha uma característica toda própria de tocar o berimbau, instrumento que segurava com a mão direita e tocava com a vaqueta na mão esquerda, mantendo o berimbau a altura do peito. Canjiquinha na sua ascensão, mesmo não tendo sido aluno do Mestre Pastinha foi Contra Mestre na academia deste. Ao sair fundou, já como Mestre, a sua própria academia. ASS. De capoeira Canjiquinha e seus', '2022-11-30 17:42:42', 1, 'mestreCanjiquinha.jpeg'),
(40, 0, 1, '', 'Mestre Waldemar', 'In old age, mestre Waldemar suffered from Parkinson\'s disease, despite this he remained active in Capoeira, recording his famous capoeira album with his good friend Mestre Canjiquinha in 1984. Mestre Waldemar died in 1990 and is remembered as one of the greatest and most influential Mestres in the history of Capoeira.', '2022-11-30 18:29:09', 1, 'mestreWaldemar.jpeg'),
(77, 0, 17, '', 'ZASDa', 'aqdsADS', '2022-12-02 00:37:15', 1, 'foto p: perfil.jpg'),
(78, 0, 17, '', 'khng,gfh', 'fhjkhjkfj', '2022-12-02 01:34:25', 1, 'foto p: perfil1.jpg'),
(125, 0, 17, '', '44444', 'rrrrrrr', '2022-12-02 21:38:39', 1, 'babaumPics.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
