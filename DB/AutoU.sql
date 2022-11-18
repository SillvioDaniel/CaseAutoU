-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18-Nov-2022 às 05:45
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `AutoU`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Funcionario`
--

CREATE TABLE `Funcionario` (
  `matricula` int(4) NOT NULL,
  `email` varchar(28) DEFAULT NULL,
  `nome` varchar(8) DEFAULT NULL,
  `sobrenome` varchar(10) DEFAULT NULL,
  `departamento` varchar(11) DEFAULT NULL,
  `cargo` varchar(13) DEFAULT NULL,
  `foto_colaborador` varchar(10) DEFAULT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Funcionario`
--

INSERT INTO `Funcionario` (`matricula`, `email`, `nome`, `sobrenome`, `departamento`, `cargo`, `foto_colaborador`, `senha`) VALUES
(1318, 'leonardo.lima@cliente.com', 'Leonardo', 'Lima', 'Materiais', 'Transportador', '10.png', '12'),
(1694, 'alvaro.souza@cliente.com', 'Alvaro', 'Souza', 'Suprimentos', 'Analista', '17.png', '12'),
(1827, 'nathalia.garcia@cliente.com', 'Nathalia', 'Garcia', 'Materiais', 'Transportador', '9.png', '12'),
(1996, 'thales.ferreira@cliente.com', 'Thales', 'Ferreira', 'Carga', 'Transportador', '15.png', '12'),
(2014, 'teste@teste.com', 'Carlos', 'Miguel', 'Logística', 'Transportador', '0.jpg', '12'),
(2049, 'anna.alves@cliente.com', 'Anna', 'Alves', 'Carga', 'Transportador', '16.png', '12'),
(2482, 'pedro.lima@cliente.com', 'Pedro', 'Lima', 'Logistica', 'Transportador', '2.png', '12'),
(2710, 'ana.oliveira@cliente.com', 'Ana', 'Oliveira', 'Carga', 'Transportador', '19.png', '12'),
(2749, 'kevin.restom@cliente.com', 'Kevin', 'Restom', 'Logistica', 'Transportador', '4.png', '12'),
(3564, 'giulia.scarppa@cliente.com', 'Giulia', 'Scarppa', 'Materiais', 'Manutenção', '11.png', '12'),
(3748, 'lucas.fernandes@cliente.com', 'Lucas', 'Fernandes', 'Financeiro', 'Analista', '1.png', '12'),
(4128, 'amanda.amorim@cliente.com', 'Amanda', 'Amorim', 'Suprimentos', 'Operador', '5.png', '12'),
(4879, 'pedro.matos@cliente.com', 'Pedro', 'Matos', 'Suprimentos', 'Almoxarife', '8.png', '12'),
(5723, 'otávio.costa@cliente.com', 'Otávio', 'Costa', 'Financeiro', 'Analista', '14.png', '12'),
(5945, 'carla.pereira@cliente.com', 'Carla', 'Pereira', 'Suprimentos', 'Almoxarife', '7.png', '12'),
(6449, 'maria.julianelli@cliente.com', 'Maria', 'Julianelli', 'Logistica', 'Planejador', '3.png', '12'),
(6870, 'natan.franco@cliente.com', 'Natan', 'Franco', 'Materiais', 'Operador', '13.png', '12'),
(8120, 'marcela.santos@cliente.com', 'Marcela', 'Santos', 'Logistica', 'Analista', '18.png', '12'),
(9178, 'michael.pereira@cliente.com', 'Michael', 'Pereira', 'Materiais', 'Manutenção', '12.png', '12'),
(9252, 'fernanda.silva@cliente.com', 'Fernanda', 'Silva', 'Suprimentos', 'Operador', '6.png', '12');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `leaderboard`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `leaderboard` (
`nome` varchar(8)
,`departamento` varchar(11)
,`cargo` varchar(13)
,`foto_colaborador` varchar(10)
,`email` varchar(28)
,`cont_reacao` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Reacao`
--

CREATE TABLE `Reacao` (
  `id` int(11) NOT NULL,
  `comentario` varchar(50) DEFAULT NULL,
  `data` date NOT NULL DEFAULT current_timestamp(),
  `id_elogia` int(11) NOT NULL,
  `id_elogiado` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Reacao`
--

INSERT INTO `Reacao` (`id`, `comentario`, `data`, `id_elogia`, `id_elogiado`, `id_tipo`) VALUES
(1, 'Muito Bom', '2022-11-17', 5945, 6449, 1),
(2, 'Like', '2022-11-17', 9178, 1827, 3),
(3, 'Obrigado', '2022-11-17', 1318, 1827, 2),
(4, 'Obrigado', '2022-11-17', 1694, 1827, 2),
(5, 'Bom trabalho', '2022-11-17', 1694, 1827, 1),
(7, 'Obrigado', '2022-11-17', 1694, 2749, 3),
(10, 'Muito Legal', '2022-11-17', 1694, 1694, 1);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `reacoes`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `reacoes` (
`nome` varchar(8)
,`data` date
,`id` int(11)
,`tipo` varchar(45)
,`comentario` varchar(50)
,`foto_colaborador` varchar(10)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Tipo_reacao`
--

CREATE TABLE `Tipo_reacao` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `Tipo_reacao`
--

INSERT INTO `Tipo_reacao` (`id`, `tipo`) VALUES
(1, 'Like'),
(2, 'Orgulho'),
(3, 'Colaboração'),
(4, 'Excelente Trabalho');

-- --------------------------------------------------------

--
-- Estrutura para vista `leaderboard`
--
DROP TABLE IF EXISTS `leaderboard`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `leaderboard`  AS SELECT `f`.`nome` AS `nome`, `f`.`departamento` AS `departamento`, `f`.`cargo` AS `cargo`, `f`.`foto_colaborador` AS `foto_colaborador`, `f`.`email` AS `email`, count(`r`.`id`) AS `cont_reacao` FROM (`Funcionario` `f` join `Reacao` `r` on(`f`.`matricula` = `r`.`id_elogiado`)) GROUP BY `f`.`nome``nome`  ;

-- --------------------------------------------------------

--
-- Estrutura para vista `reacoes`
--
DROP TABLE IF EXISTS `reacoes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reacoes`  AS SELECT `f`.`nome` AS `nome`, `r`.`data` AS `data`, `r`.`id` AS `id`, `tp`.`tipo` AS `tipo`, `r`.`comentario` AS `comentario`, `f`.`foto_colaborador` AS `foto_colaborador` FROM ((`Funcionario` `f` join `Reacao` `r` on(`f`.`matricula` = `r`.`id_elogiado`)) join `Tipo_reacao` `tp` on(`tp`.`id` = `r`.`id_tipo`))  ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Funcionario`
--
ALTER TABLE `Funcionario`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `Reacao`
--
ALTER TABLE `Reacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_elogia` (`id_elogia`),
  ADD KEY `id_elogiado` (`id_elogiado`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Índices para tabela `Tipo_reacao`
--
ALTER TABLE `Tipo_reacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Reacao`
--
ALTER TABLE `Reacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `Tipo_reacao`
--
ALTER TABLE `Tipo_reacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `Reacao`
--
ALTER TABLE `Reacao`
  ADD CONSTRAINT `id_elogia` FOREIGN KEY (`id_elogia`) REFERENCES `Funcionario` (`matricula`),
  ADD CONSTRAINT `id_elogiado` FOREIGN KEY (`id_elogiado`) REFERENCES `Funcionario` (`matricula`),
  ADD CONSTRAINT `id_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `Tipo_reacao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
