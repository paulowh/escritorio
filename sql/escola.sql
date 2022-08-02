-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2020 às 20:26
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aulas`
--

CREATE TABLE `tb_aulas` (
  `id` int(11) NOT NULL,
  `diaAula` varchar(100) NOT NULL,
  `turma` varchar(100) NOT NULL,
  `professor` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `objetivo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `recurso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id`, `descricao`) VALUES
(5, 'Papelaria'),
(7, 'Eletrônico'),
(8, 'Moveis'),
(9, 'Bunitin'),
(10, 'Secretaria ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materias`
--

CREATE TABLE `tb_materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `carga_horaria` varchar(10) NOT NULL,
  `ementa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_materias`
--

INSERT INTO `tb_materias` (`id`, `materia`, `carga_horaria`, `ementa`) VALUES
(3, 'Matemática ', '80', 'Aulas de cálculos básicos ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professores`
--

CREATE TABLE `tb_professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_professores`
--

INSERT INTO `tb_professores` (`id`, `nome`, `email`, `telefone`, `facebook`, `nascimento`, `usuario`, `senha`) VALUES
(2, 'Paulo Henrique dos Santos', 'ph744915@gmail.com', '19.99263-2392', '', '1999-06-24', 'pauloH', 'enox'),
(3, 'Anderson', 'andpassos@gmail.com', '19.99988-7766', '', '1991-10-04', 'AndPassos', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_recursos`
--

CREATE TABLE `tb_recursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_recursos`
--

INSERT INTO `tb_recursos` (`id`, `nome`, `quantidade`, `categoria`) VALUES
(2, 'Lápis', 12, 'Papelaria'),
(3, 'Caneta', 9, 'Papelaria'),
(4, 'Projetor', 3, 'Eletronico'),
(5, 'Boletim escolar', 1, 'Secretaria'),
(6, '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE `tb_turma` (
  `id` int(11) NOT NULL,
  `sala` varchar(30) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `horarioInicio` varchar(10) NOT NULL,
  `horarioFim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_turma`
--

INSERT INTO `tb_turma` (`id`, `sala`, `periodo`, `horarioInicio`, `horarioFim`) VALUES
(1, '1-A', 'Noturno', '19:00', '22:30'),
(2, '3-A', 'Diurno Matutino', '07:00', '12:20'),
(3, '2-A', 'Diurno Vespertino', '13:00', '18:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_aulas`
--
ALTER TABLE `tb_aulas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_materias`
--
ALTER TABLE `tb_materias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_professores`
--
ALTER TABLE `tb_professores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_recursos`
--
ALTER TABLE `tb_recursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_aulas`
--
ALTER TABLE `tb_aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_materias`
--
ALTER TABLE `tb_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_professores`
--
ALTER TABLE `tb_professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_recursos`
--
ALTER TABLE `tb_recursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
