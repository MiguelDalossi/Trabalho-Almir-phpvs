-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/06/2024 às 00:45
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `supermercado`
--
CREATE DATABASE IF NOT EXISTS `supermercado` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `supermercado`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `descricao` varchar(55) NOT NULL,
  `salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `cargo`
--

INSERT INTO `cargo` (`id`, `nome`, `descricao`, `salario`) VALUES
(1, 'Repositor', 'Reposição, organização e limpeza das prateleiras, contr', 1800),
(2, 'Operadora de Caixa', 'Registro de vendas, atendimento ao cliente, manuseio de', 1900),
(3, 'Fiscal de Caixa', 'Supervisão de caixas, apoio, resolução de problemas e c', 2000),
(4, 'Empacotador', 'Empacotamento de compras, atendimento ao cliente, organ', 1300),
(5, 'Conferente', 'Verificação de mercadorias, controle de qualidade e atu', 2100),
(6, 'Recepcionista', 'Atendimento ao público, gerenciamento de telefonemas e ', 1900),
(7, 'Açougueiro', 'Preparo, corte e exposição de carnes frescas e embutido', 2000),
(8, 'Gerente Operacional', 'Coordenação de operações, gestão de equipe e implementa', 4500),
(9, 'Encarregado de mercearia', 'Supervisão de estoque, organização de produtos e gestão', 2500),
(10, 'Encarregado de hortifruit', 'Supervisão de frutas, legumes e verduras, gestão de equ', 2500),
(11, 'Encarregado de açougue', 'Coordena equipe, assegura qualidade e operações eficien', 2700);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `telefone`) VALUES
(1, 'Sandra Oliveira', 1111111111, 1111111111),
(2, 'Alex Camargo', 1753246891, 1753246891),
(3, 'Samira Santos', 1234567891, 1234567891),
(4, 'Luan Araújo', 1789456231, 1789456231),
(5, 'Douglas Bueno', 1456789231, 1456789231),
(6, 'Matheus Prado', 1928374650, 1982736451),
(7, 'João Victor', 1298374652, 1092837465),
(8, 'Giovanna Santos', 1982736451, 1092837465),
(9, 'Micael Inácio', 1928374650, 1045762834),
(10, 'Isis Valverde', 2049173658, 2013928475);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `cpf`, `cargo_id`, `telefone`) VALUES
(2, 'Anderson Marques', 1532678450, 8, 0),
(3, 'Júlio Batista', 2065412390, 9, 0),
(4, 'Cristian Oliveira', 2067890120, 10, 0),
(5, 'José Matos', 1987654321, 11, 0),
(6, 'Felipe Motta', 1345678901, 1, 0),
(7, 'Hugo Pimentel', 1234567890, 1, 0),
(8, 'Gabriel Paulista', 1765432109, 1, 0),
(9, 'Nelson Mandela', 1543210987, 1, 0),
(10, 'Jackson Santos', 1321098765, 7, 0),
(11, 'Marcos Muniz', 1901234567, 7, 0),
(12, 'Raquel Coelho', 2013928475, 2, 0),
(13, 'Aline Santana', 1045762834, 2, 0),
(14, 'Gabrielle Gomes', 1983746520, 6, 0),
(15, 'Úrsula Santana', 1092837465, 3, 0),
(16, 'Moacir Martins', 1982374650, 5, 0),
(17, 'Eduardo Stoppa', 2049173658, 4, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `valor` float NOT NULL,
  `validade` date NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `nome`, `valor`, `validade`, `quantidade`) VALUES
(1, 'Amaciante', 7.99, '2025-06-03', 20),
(2, 'Detergente', 2.39, '2025-06-12', 20),
(3, 'Sabão em pó', 16, '2025-08-04', 20),
(4, 'Desinfetante', 7.5, '2024-12-21', 20),
(5, 'Arroz', 29, '2024-07-18', 20),
(6, 'Feijão', 5.45, '2024-08-19', 20),
(7, 'Óleo de soja', 5.8, '2024-06-30', 20),
(8, 'Açúcar', 5.99, '2024-07-01', 20),
(9, 'Refrigerante', 4.99, '2024-08-12', 20),
(10, 'Cerveja', 3.99, '2024-07-15', 20);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funcionario_cargo` (`cargo_id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
