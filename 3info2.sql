-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 07-Jun-2018 às 16:22
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3info2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(60) NOT NULL,
  `descricao_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`, `descricao_categoria`) VALUES
(1, 'Espadas', 'Para arrancar a cabeça dos inimigos com estilo. '),
(2, 'Meio de transporte', 'Para você se locomover com estilo. '),
(4, 'Taças ', 'Para beber a lagrimas dos inimigos com estilo. '),
(5, 'Tronos ', 'Para sentar com estilo. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(60) NOT NULL,
  `descricao_produto` varchar(255) NOT NULL,
  `foto_produto` varchar(255) NOT NULL,
  `preco_produto` float NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao_produto`, `foto_produto`, `preco_produto`, `id_categoria`) VALUES
(1, 'Trono de Ferro', 'O Trono de Ferro é o trono no qual o Rei dos Sete Reinos senta, localizado em uma sala na Fortaleza Vermelha, na cidade do Porto Real. ', '', 759, 1),
(2, 'Taça Helga Hufflepuff ', 'Pertenceu a uma das quatro fundadoras de Hogwarts, objeto de valor inimaginável.', '', 699, 1),
(3, 'Varinha da Varinhas', '\r\nÉ dita como sendo a varinha mais poderosa que já existiu, capaz de realizar proezas que normalmente seriam consideradas impossíveis, como remendar uma outra varinha danificada (ou até mesmo quebrada).', '', 3199, 1),
(4, 'Espada Vorpal', 'A Espada Vorpal é o inimigo de Jaguadarte.\r\n\r\n', '', 949, 2),
(6, 'Pérolas de Perséfone', '\r\nAcreditava-se que o único modo de entrar e sair do submundo era através de pérolas que a Deusa Perséfone espalhava pelo mundo em busca de novos visitantes.', '', 1799, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
