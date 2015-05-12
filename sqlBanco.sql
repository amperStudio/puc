-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 11, 2015 at 09:57 PM
-- Server version: 5.1.73-community
-- PHP Version: 5.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pucminas`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Cidade` varchar(60) DEFAULT NULL,
  `ES` varchar(60) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `Descricao` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`id`, `Nome`, `Cidade`, `ES`, `foto`, `Descricao`) VALUES
(1, 'João Paulo da Silva C Martine', 'Cachoeiro de Itapemirim', 'ES', 'jp.jpg', 'Sou mineiro, mas acabei me mudando para o ES ainda muito jovem. Sempre gostei de tecnologia e descobrir como algo funciona. (até hoje me pego desmontando alguma coisa, e para monta de volta sempre sobram algumas coisinhas kkk). Sou bacharel em sistemas de informação, fundei junto com um amigo uma empresa de  soluções web, que tem dado muito certo.Amo muito o que eu faço e sinto a necessidade de continuar aprendendo.'),
(2, 'Paulo Humberto Rezende', 'Poço Fundo', 'MG', 'paulo_rezende.jpg', 'Sou licenciado em Computação no ano de 2013,   atualmente trabalho como servidor público no setor de desenvolvimento de sistemas do IFSULDEMINAS.'),
(3, 'Fernando de Araújo Gama', 'Barra de São Francisco', 'ES', '20131016_112217 (250x320).jpg', 'Tenho 28 anos, sou formado em Análise e Desenvolvimento de Sistemas desde 2007, MBA em Gestão Empresarial no ano de 2011 e agora faço essa especialização com intuito de agregar valor ao meu trabalho. Já trabalhei como programador Delphi, mas hoje trabalho em uma empresa que desenvolve  sistemas para empresas do varejo, te. Como hobbies pratico boxe e gosto muito de viajar para outros lugares conhecendo pessoas, línguas e culturas diferentes. '),
(4, 'Elizangela Mattos Faria da Silva', 'Campo Grande', 'MS', 'elizangela.jpg', 'Formada em Análise de Sistemas pela Universidade Federal de MS, trabalho como coordenadora de informática em uma escola particular (Colégio Alexander Fleming). Sou apaixonada por boa música, livros e filmes. '),
(5, 'Fernanda Ramos de Carvalho', 'Machado', 'MG', 'Fernanda.jpg', 'Formada em Ciência da Computação pela Universidade José do Rosário Vellano. Trabalho na área administrativa. Gosto muito de leitura, filmes e uma boa música.'),
(7, 'Gabriel Paes Pinho', 'Itaituba ', 'PA', 'GabrielPinho.jpg', 'Graduado em Ciências Contábeis e graduando em Análise e Desenvolvimento de Sistemas.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
