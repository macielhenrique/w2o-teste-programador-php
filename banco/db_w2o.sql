-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Dez-2021 às 03:55
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_w2o`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_colaborador`
--

CREATE TABLE `tb_colaborador` (
  `id_colaborador` int(11) NOT NULL,
  `colab_nome` varchar(255) NOT NULL,
  `colab_telefone` varchar(15) NOT NULL,
  `colab_email` varchar(255) NOT NULL,
  `colab_senha` varchar(255) NOT NULL,
  `data_nasc` date NOT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT current_timestamp(),
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_colaborador`
--

INSERT INTO `tb_colaborador` (`id_colaborador`, `colab_nome`, `colab_telefone`, `colab_email`, `colab_senha`, `data_nasc`, `criadoEm`, `profile_id`) VALUES
(2, 'maciel henrique', '085985291079', 'henrique@email.com', '123', '1999-07-06', '2021-12-20 01:43:52', 0),
(3, 'henrique teste', '123456789', 'teste@email.com', '1234', '1999-07-06', '2021-12-20 01:53:38', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id_empresa` int(11) NOT NULL,
  `empresa_razao` varchar(100) NOT NULL,
  `empresa_cnpj` varchar(20) NOT NULL,
  `empresa_email` varchar(60) NOT NULL,
  `empresa_telefone` varchar(30) NOT NULL,
  `empresa_cep` varchar(10) NOT NULL,
  `empresa_endereco` varchar(100) NOT NULL,
  `empresa_numero` varchar(10) NOT NULL,
  `empresa_bairro` varchar(30) NOT NULL,
  `empresa_estado` varchar(10) NOT NULL,
  `empresa_cidade` varchar(25) NOT NULL,
  `empresa_criadoEm` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_empresa`
--

INSERT INTO `tb_empresa` (`id_empresa`, `empresa_razao`, `empresa_cnpj`, `empresa_email`, `empresa_telefone`, `empresa_cep`, `empresa_endereco`, `empresa_numero`, `empresa_bairro`, `empresa_estado`, `empresa_cidade`, `empresa_criadoEm`) VALUES
(3, 'IZZY WAY', '28.236.686/0001-33', 'izzyway@email.com', '(85) 4102-8705', ' 60813620', 'Rua Caetano Ximenes Aragão', '665', 'Engenheiro Luciano Cavalcante', 'CE', 'Fortaleza', '2021-12-20 00:07:27'),
(4, 'Geração sistemas', '32.330.913/0001-62', 'geracaosistemas@gmail.com', '8591612689', ' 60813620', 'Rua Caetano Ximenes Aragão', '665', 'Engenheiro Luciano Cavalcante', 'CE', 'Fortaleza', '2021-12-20 02:17:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_profiles`
--

CREATE TABLE `tb_profiles` (
  `id_profile` int(1) NOT NULL,
  `profile_name` varchar(20) NOT NULL,
  `profile_desc` varchar(255) NOT NULL,
  `profile_page` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_profiles`
--

INSERT INTO `tb_profiles` (`id_profile`, `profile_name`, `profile_desc`, `profile_page`) VALUES
(1, 'Administrador', 'adm', 'admin.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'Administrador', 'admin@admin.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_colaborador`
--
ALTER TABLE `tb_colaborador`
  ADD PRIMARY KEY (`id_colaborador`);

--
-- Índices para tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices para tabela `tb_profiles`
--
ALTER TABLE `tb_profiles`
  ADD PRIMARY KEY (`id_profile`);

--
-- Índices para tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_colaborador`
--
ALTER TABLE `tb_colaborador`
  MODIFY `id_colaborador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_profiles`
--
ALTER TABLE `tb_profiles`
  MODIFY `id_profile` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
