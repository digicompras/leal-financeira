-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Máquina: localhost:3306
-- Data de Criação: 17-Fev-2016 às 20:17
-- Versão do servidor: 5.5.47-cll
-- versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `grupofazendinha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade_sistema`
--

CREATE TABLE IF NOT EXISTS `mensalidade_sistema` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `operacao` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `vencto` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pagto` varchar(50) NOT NULL,
  `banco` varchar(50) NOT NULL,
  `ag` varchar(50) NOT NULL,
  `op` varchar(50) NOT NULL,
  `conta` varchar(50) NOT NULL,
  `num_parcela` varchar(50) NOT NULL,
  `obs` text NOT NULL,
  `vencto_date` date NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `mensalidade_sistema`
--

INSERT INTO `mensalidade_sistema` (`codigo`, `operacao`, `valor`, `vencto`, `status`, `pagto`, `banco`, `ag`, `op`, `conta`, `num_parcela`, `obs`, `vencto_date`) VALUES
(15, 'IMPLANTACAO INICIAL DO SISTEMA', '1500.00', '12-08-2015', 'Pago', '13-08-2015', 'BRADESCO', '263-1', '', '83012-7', 'UNICA', 'TAXA UNICA DE IMPLANTACAO. \n', '2015-08-12'),
(22, 'Manutencao de Sistema<br> 1 S.M.F.', '788.00', '12-09-2015', 'Pago', '14-09-2015', 'Bradesco', '263-1', '', '83012-7', '1', '', '2015-09-12'),
(23, 'Manutencao de Sistema<br> 1 S.M.F.', '788.00', '12-10-2015', 'Pago', '26-10-2015', 'BRADESCO', '263-1', '', '83012-7', '2', '', '2015-10-12'),
(24, 'Manutencao de Sistema<br> 1 S.M.F.', '788.00', '12-11-2015', 'Pago', '17-11-2015', 'BRADESCO', '263-1', '', '83012-7', '3', '', '2015-11-12'),
(25, 'Manutencao de Sistema<br> 1 S.M.F.', '788.00', '12-12-2015', 'Pago', '16-12-2015', 'BRADESCO', '263-1', '', '83012-7', '4', '', '2015-12-12'),
(26, 'Manutencao de Sistema<br> 1 S.M.F.', '880.00', '12-01-2016', 'Pago', '16-01-2016', 'BRADESCO', '263-1', '', '83012-7', '1/2016', '', '2016-01-12'),
(27, 'Manutencao de Sistema<br> 1 S.M.F.', '880.00', '12-02-2016', 'Em Aberto', '', 'BRADESCO', '263-1', '', '83012-7', '2/2016', '1 Salario Minimo ate 5 empresas', '2016-02-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
