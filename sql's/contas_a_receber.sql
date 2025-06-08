-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Máquina: localhost:3306
-- Data de Criação: 20-Abr-2016 às 05:40
-- Versão do servidor: 5.5.48-cll
-- versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `angulo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_a_receber`
--

CREATE TABLE IF NOT EXISTS `contas_a_receber` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `num_proposta` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `datacadastro` date DEFAULT NULL,
  `horacadastro` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nome` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `cpf` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `obs` text CHARACTER SET latin1,
  `valor_a_receber` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `vencto` date DEFAULT NULL,
  `quant_parc` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `modo_pagto` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `juros_diarios` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `valor_recebido` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `quitacao` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `operador` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `cel_operador` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email_operador` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `estabelecimento` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `cidade_estabelecimento` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tel_estabelecimento` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email_estabelecimento` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `dataalteracao` date DEFAULT NULL,
  `horaalteracao` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `operador_alterou` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `cel_operador_alterou` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email_operador_alterou` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `estabelecimento_alterou` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `cidade_estabelecimento_alterou` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tel_estabelecimento_alterou` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email_estabelecimento_alterou` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `historico` text CHARACTER SET latin1,
  `num_mensalidade` int(50) NOT NULL,
  `bco_operacao` varchar(50) CHARACTER SET latin1 NOT NULL,
  `daterecebimento` date NOT NULL,
  `titulo_proposta` varchar(50) CHARACTER SET latin1 NOT NULL,
  `valor_credito` varchar(50) CHARACTER SET latin1 NOT NULL,
  `valor_total` varchar(50) CHARACTER SET latin1 NOT NULL,
  `valor_liquido_cliente` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6237 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
