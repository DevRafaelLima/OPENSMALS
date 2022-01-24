-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24-Jan-2022 às 21:41
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `opensmals`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estrategias`
--

CREATE TABLE `tb_estrategias` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `qual_estrategia` text NOT NULL,
  `principais_ganhos` text NOT NULL,
  `organizar_alunos` text NOT NULL,
  `etapas` text NOT NULL,
  `implementar_estrutura` text NOT NULL,
  `artigos` text NOT NULL,
  `classificacao` text NOT NULL,
  `referencias` text NOT NULL,
  `status_estrategia` int(11) DEFAULT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `preRequisito` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_estrategias`
--

INSERT INTO `tb_estrategias` (`cod`, `nome`, `qual_estrategia`, `principais_ganhos`, `organizar_alunos`, `etapas`, `implementar_estrutura`, `artigos`, `classificacao`, `referencias`, `status_estrategia`, `cod_usuario`, `preRequisito`) VALUES
(1, 'Estratégia', 'Texto que explica qual é a estratégia.', 'Os principais ganhos para realizar essa estratégia', 'Maneiras de organizar os alunos', 'quais são as etapas', 'Tempo para aplicar a estratégia', 'Artigos relacionados a está estratégias', 'classificação desta estratégia', 'Referencias', 0, 1, 'Quais são os pre requisitos'),
(3, 'Estratégia professor', 'uma estrategia qualquer', 'testes', 'testes', 'lafjlasdjf', 'alsdkjfladjs', 'rfljasdlfkjal', 'alsdkfjladks', 'falsdkfjaldfjs', 0, 2, 'fasdfjalsd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `tipoUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`cod`, `nome`, `email`, `senha`, `tipoUsuario`) VALUES
(1, 'RAFAEL', 'teste@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'prof', 'prof@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_estrategias`
--
ALTER TABLE `tb_estrategias`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_estrategias`
--
ALTER TABLE `tb_estrategias`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_estrategias`
--
ALTER TABLE `tb_estrategias`
  ADD CONSTRAINT `tb_estrategias_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `tb_usuarios` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
