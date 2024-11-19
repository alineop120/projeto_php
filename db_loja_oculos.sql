-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2024 às 17:27
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
-- Banco de dados: `db_loja_oculos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_fun` int(11) NOT NULL,
  `nome_fun` varchar(45) NOT NULL,
  `natualidade_fun` varchar(45) NOT NULL,
  `nacionalidade_fun` varchar(45) NOT NULL,
  `cpf_fun` varchar(45) NOT NULL,
  `rg_fun` varchar(45) NOT NULL,
  `telefone_fun` varchar(45) NOT NULL,
  `data_fun` varchar(45) NOT NULL,
  `endereco_fun` varchar(45) NOT NULL,
  `login_fun` varchar(45) NOT NULL,
  `senha_fun` varchar(45) NOT NULL,
  `funcao_fun` varchar(45) NOT NULL,
  `status_fun` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_fun`, `nome_fun`, `natualidade_fun`, `nacionalidade_fun`, `cpf_fun`, `rg_fun`, `telefone_fun`, `data_fun`, `endereco_fun`, `login_fun`, `senha_fun`, `funcao_fun`, `status_fun`) VALUES
(1, 'Administrador do Sistema', 'São Paulo/SP', 'Brasileiro', '052.923.470-00', '37.659.381-7', '(83) 2145-8057', '17/11/2024', 'Rua das Tecnologias, 250 - Apto 301', 'admin', '1', 'administrador', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `oculos`
--

CREATE TABLE `oculos` (
  `id_ocls` int(11) NOT NULL,
  `nome_ocls` varchar(45) NOT NULL,
  `marca_ocls` varchar(45) NOT NULL,
  `tipo_ocls` varchar(45) NOT NULL,
  `modelo_ocls` varchar(45) NOT NULL,
  `cor_armacao_ocls` varchar(45) NOT NULL,
  `material_armacao_ocls` varchar(45) NOT NULL,
  `cor_lente_ocls` varchar(45) NOT NULL,
  `tipo_lente_ocls` varchar(45) NOT NULL,
  `preco_olcs` decimal(10,2) NOT NULL,
  `imagem_ocls` varchar(255) NOT NULL,
  `fila_compra_ocls` varchar(1) NOT NULL,
  `vendas_id_ven` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_ven` int(11) NOT NULL,
  `data_ven` varchar(45) NOT NULL,
  `pagamento_ven` varchar(45) NOT NULL,
  `status_ven` varchar(45) NOT NULL,
  `descontos_ven` varchar(45) NOT NULL,
  `funcionarios_id_fun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_fun`);

--
-- Índices de tabela `oculos`
--
ALTER TABLE `oculos`
  ADD PRIMARY KEY (`id_ocls`),
  ADD KEY `fk_oculos_vendas1_idx` (`vendas_id_ven`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_ven`),
  ADD KEY `fk_vendas_funcionarios_idx` (`funcionarios_id_fun`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_fun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `oculos`
--
ALTER TABLE `oculos`
  MODIFY `id_ocls` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_ven` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `oculos`
--
ALTER TABLE `oculos`
  ADD CONSTRAINT `fk_oculos_vendas1` FOREIGN KEY (`vendas_id_ven`) REFERENCES `vendas` (`id_ven`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_vendas_funcionarios` FOREIGN KEY (`funcionarios_id_fun`) REFERENCES `funcionarios` (`id_fun`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
