-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2020 às 00:27
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tem_vaga_ai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(1, 'https://images.pexels.com/photos/681331/pexels-photo-681331.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
(2, 'https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'),
(3, 'https://images.pexels.com/photos/1370704/pexels-photo-1370704.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');

-- --------------------------------------------------------

--
-- Estrutura da tabela `immobile`
--

CREATE TABLE `immobile` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `rooms` int(11) NOT NULL,
  `value_daily` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `immobile`
--

INSERT INTO `immobile` (`id`, `title`, `image1`, `image2`, `state`, `city`, `rooms`, `value_daily`, `phone`, `description`) VALUES
(1, 'Apartamento 1', 'https://images.pexels.com/photos/1575939/pexels-photo-1575939.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'https://images.pexels.com/photos/463996/pexels-photo-463996.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'Rondônia', 'Cabixi', 3, 299, '27923322233', 'O empenho em analisar o aumento do diálogo entre os diferentes setores produtivos é uma das consequências do investimento em reciclagem técnica'),
(2, 'Apartamento 2', 'https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'https://images.pexels.com/photos/1446378/pexels-photo-1446378.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'Rondônia', 'Cabixi', 2, 200, '23922227322', 'A certificação de metodologias que nos auxiliam a lidar com a adoção de políticas descentralizadoras facilita a criação dos métodos utilizados na avaliação de resultados.'),
(3, 'Apartamento 3', 'https://images.pexels.com/photos/1743227/pexels-photo-1743227.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'https://images.pexels.com/photos/1428348/pexels-photo-1428348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'Rondônia', 'Cabixi', 4, 300, '32992232273', 'No mundo atual, a revolução dos costumes garante a contribuição de um grupo importante na determinação das novas proposições.'),
(4, 'Casa 1', 'https://images.pexels.com/photos/1396132/pexels-photo-1396132.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'https://images.pexels.com/photos/842711/pexels-photo-842711.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'Rondônia', 'Cabixi', 4, 100, '23122113322', 'A certificação de metodologias que nos auxiliam a lidar com o surgimento do comércio virtual estende o alcance e a importância do orçamento setorial.\r\n'),
(6, 'Apartamento 4', 'https://images.pexels.com/photos/4913425/pexels-photo-4913425.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'https://images.pexels.com/photos/2079234/pexels-photo-2079234.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'Rondônia', 'Cabixi', 8, 250, '23667239388', 'É importante questionar o quanto o consenso sobre a necessidade de qualificação exige a precisão e a definição do impacto na agilidade decisória.\r\n'),
(7, 'Apartamento São Francisco', 'https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'https://images.pexels.com/photos/323705/pexels-photo-323705.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'Minas Gerais', 'Rio Paranaíba', 2, 200, '37923233122', 'Acima de tudo, é fundamental ressaltar que a crescente influência da mídia oferece uma interessante oportunidade para verificação do sistema de participação geral.\r\n'),
(8, 'Dormitório', 'https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'https://images.pexels.com/photos/439391/pexels-photo-439391.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'Minas Gerais', 'Rio Paranaíba', 1, 50, '34832234433', 'Gostaria de enfatizar que a valorização de fatores subjetivos auxilia a preparação e a composição dos métodos utilizados na avaliação de resultados.\r\n');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `immobile`
--
ALTER TABLE `immobile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `immobile`
--
ALTER TABLE `immobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
