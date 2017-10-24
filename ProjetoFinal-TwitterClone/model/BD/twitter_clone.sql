-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Out-2017 às 18:43
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter_clone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tweet`
--

DROP TABLE IF EXISTS `tb_tweet`;
CREATE TABLE IF NOT EXISTS `tb_tweet` (
  `id_tweet` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `tweet` varchar(140) NOT NULL,
  `data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tweet`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_tweet`
--

INSERT INTO `tb_tweet` (`id_tweet`, `id_usuario`, `tweet`, `data_inclusao`) VALUES
(1, 1, 'Teste de inclusão de tweet', '2017-10-10 22:01:37'),
(2, 1, 'Teste de inclusão de tweet', '2017-10-10 22:02:31'),
(3, 1, 'Teste de inclusão de Tweet 2', '2017-10-10 22:04:56'),
(4, 1, 'Teste de inclusão de tweet', '2017-10-10 22:05:22'),
(5, 1, 'Tes', '2017-10-10 22:07:17'),
(6, 2, 'Teste de inclusão de tweet 2', '2017-10-10 22:09:36'),
(7, 5, 'Teste de inclusão de tweet', '2017-10-10 22:10:08'),
(8, 5, 'Teste de Tweet', '2017-10-10 22:12:06'),
(9, 5, 'Teste de inclusão de tweet', '2017-10-10 22:12:55'),
(10, 5, 'Outro tweet', '2017-10-10 22:21:24'),
(11, 5, 'Outro tweet 2', '2017-10-10 22:21:55'),
(12, 1, 'Fazendo a listagem dos Tweets (TESTE)', '2017-10-17 16:56:41'),
(13, 2, 'Novo tweet', '2017-10-19 19:11:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome_usuario`, `email`, `senha`) VALUES
(1, 'Guilherme Brandão', 'guilherme@123.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Satialis Anjo', 'satianjo@123.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Tatiana Guilger', 'tatiana@123.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Ricardo Henrique', 'ricardo@123.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Jhonny Messias', 'jhonny@123.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Silvana Augusta', 'silvana@123.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_seguidor`
--

DROP TABLE IF EXISTS `tb_usuario_seguidor`;
CREATE TABLE IF NOT EXISTS `tb_usuario_seguidor` (
  `id_usuario_seguidor` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `seguindo_id_usuario` int(11) NOT NULL,
  `data_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario_seguidor`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario_seguidor`
--

INSERT INTO `tb_usuario_seguidor` (`id_usuario_seguidor`, `id_usuario`, `seguindo_id_usuario`, `data_registro`) VALUES
(1, 2, 1, '2017-10-22 20:07:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
