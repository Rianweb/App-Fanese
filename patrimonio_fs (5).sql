-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2021 às 15:32
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `patrimonio_fs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bens`
--

CREATE TABLE `tb_bens` (
  `id` int(11) NOT NULL,
  `num_patrimonio` int(11) NOT NULL,
  `name_item` varchar(240) NOT NULL,
  `tb_item` int(11) NOT NULL,
  `desc_item` varchar(40) NOT NULL,
  `marca_item` varchar(240) NOT NULL,
  `tb_situacao` int(11) NOT NULL,
  `date_aquisi` date NOT NULL,
  `num_serie` int(11) NOT NULL,
  `value_item` varchar(240) NOT NULL,
  `date_lan` date NOT NULL,
  `date_comp` date NOT NULL,
  `date_garant` date NOT NULL,
  `tb_company` int(11) NOT NULL,
  `tb_setor` int(11) NOT NULL,
  `obs` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_bens`
--

INSERT INTO `tb_bens` (`id`, `num_patrimonio`, `name_item`, `tb_item`, `desc_item`, `marca_item`, `tb_situacao`, `date_aquisi`, `num_serie`, `value_item`, `date_lan`, `date_comp`, `date_garant`, `tb_company`, `tb_setor`, `obs`) VALUES
(1, 0, '', 1, '', '', 1, '0000-00-00', 0, '', '2021-06-23', '0000-00-00', '0000-00-00', 2, 20, ''),
(2, 123456, 'Computador', 1, 'nlfsdanlsdf', '123', 1, '2021-06-23', 123456, '3.000', '2021-06-23', '2021-06-23', '2021-06-23', 2, 20, 'djkasdbkja'),
(3, 123, 'Computador', 1, 'dsadasdasd', 'Dell', 1, '2021-06-23', 123, '3.00', '2021-06-23', '2021-06-23', '2021-06-26', 2, 20, 'asdsadas'),
(4, 1234, 'Computador', 1, 'hdfsaojsdobfsdofbosdf', 'Dell', 1, '2021-06-23', 123, '3.000', '2021-06-23', '2021-06-23', '2021-06-26', 2, 20, 'sadiopashdohashdoi'),
(5, 123, 'Computador', 1, 'dsadsadasd', 'Dell', 1, '2021-06-23', 123, '1', '2021-06-23', '2021-06-23', '2021-06-26', 2, 20, 'dadsadas'),
(6, 123213, 'COMPUTADOR', 1, 'dasdasdsadasd', 'Dell', 1, '2021-06-23', 123, '3.000', '2021-06-23', '2021-06-23', '2021-06-23', 2, 20, 'dasdasdsa'),
(7, 0, '', 1, 'wqewqewqewq', '', 1, '0000-00-00', 0, '', '2021-06-23', '0000-00-00', '0000-00-00', 2, 20, 'wqewqe'),
(13, 0, '', 1, '', '', 1, '0000-00-00', 0, '', '2021-06-23', '0000-00-00', '0000-00-00', 2, 20, ''),
(14, 123, 'COMPUTADOR', 1, 'dasdsadsadsa', 'Dell', 1, '2021-06-23', 123, '3.000', '2021-06-23', '2021-06-23', '2021-06-23', 2, 20, 'dasdsadas'),
(15, 132, 'Compu', 1, 'dasdsadsad', 'Samsung', 1, '2021-06-23', 3, '3.000', '2021-06-23', '2021-06-20', '2025-12-24', 2, 29, 'adsdasdsadas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_company`
--

CREATE TABLE `tb_company` (
  `id` int(11) NOT NULL,
  `name_company` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_company`
--

INSERT INTO `tb_company` (`id`, `name_company`) VALUES
(2, 'Fanese');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_item`
--

CREATE TABLE `tb_item` (
  `id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `tb_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_item`
--

INSERT INTO `tb_item` (`id`, `name`, `tb_company`) VALUES
(1, 'Monitor', 2),
(2, 'Teclado', 2),
(3, 'Mouse', 2),
(4, 'Gabinete', 2),
(5, 'Impressora', 2),
(6, 'Cadeira', 2),
(7, 'Mesa', 2),
(8, 'Rádio', 2),
(9, 'Celular', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_setor`
--

CREATE TABLE `tb_setor` (
  `id` int(11) NOT NULL,
  `name_setor` varchar(240) NOT NULL,
  `tb_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_setor`
--

INSERT INTO `tb_setor` (`id`, `name_setor`, `tb_company`) VALUES
(20, 'Dtec', 2),
(21, 'Secretaria', 2),
(22, 'Financeiro', 2),
(23, 'Tesouraria', 2),
(24, 'Infraestrutura', 2),
(25, 'Suporte', 2),
(26, 'Serviços Gerais', 2),
(27, 'Call Center', 2),
(28, 'Marketing', 2),
(29, 'Diretoria', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_situacao`
--

CREATE TABLE `tb_situacao` (
  `id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `tb_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_situacao`
--

INSERT INTO `tb_situacao` (`id`, `name`, `tb_company`) VALUES
(1, 'Bom', 2),
(2, 'Ruim', 2),
(3, 'quebrado', 2),
(4, 'regular', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `user_usuario` varchar(240) NOT NULL,
  `user_email` varchar(240) NOT NULL,
  `password_usuario` int(11) NOT NULL,
  `name_usuario` varchar(240) NOT NULL,
  `tb_company` int(11) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `user_usuario`, `user_email`, `password_usuario`, `name_usuario`, `tb_company`, `nivel`) VALUES
(5, 'Danielfaro', 'Danielfaro@hotmail.com', 123, 'Danielfaro', 2, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_bens`
--
ALTER TABLE `tb_bens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_company` (`tb_company`) USING BTREE,
  ADD KEY `id_setor` (`tb_setor`) USING BTREE;

--
-- Índices para tabela `tb_company`
--
ALTER TABLE `tb_company`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_company` (`tb_company`);

--
-- Índices para tabela `tb_setor`
--
ALTER TABLE `tb_setor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_company` (`tb_company`);

--
-- Índices para tabela `tb_situacao`
--
ALTER TABLE `tb_situacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`tb_company`) USING BTREE;

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_usuario` (`tb_company`),
  ADD UNIQUE KEY `company_usuario_2` (`tb_company`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_bens`
--
ALTER TABLE `tb_bens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_company`
--
ALTER TABLE `tb_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_setor`
--
ALTER TABLE `tb_setor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tb_situacao`
--
ALTER TABLE `tb_situacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_bens`
--
ALTER TABLE `tb_bens`
  ADD CONSTRAINT `company` FOREIGN KEY (`tb_company`) REFERENCES `tb_company` (`id`),
  ADD CONSTRAINT `setor` FOREIGN KEY (`tb_setor`) REFERENCES `tb_setor` (`id`);

--
-- Limitadores para a tabela `tb_setor`
--
ALTER TABLE `tb_setor`
  ADD CONSTRAINT `fk_tb_company` FOREIGN KEY (`tb_company`) REFERENCES `tb_company` (`id`);

--
-- Limitadores para a tabela `tb_situacao`
--
ALTER TABLE `tb_situacao`
  ADD CONSTRAINT `name` FOREIGN KEY (`tb_company`) REFERENCES `tb_company` (`id`);

--
-- Limitadores para a tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_company` FOREIGN KEY (`tb_company`) REFERENCES `tb_company` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
