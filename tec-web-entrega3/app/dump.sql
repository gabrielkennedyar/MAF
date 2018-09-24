SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5554108_database_maf`
--
CREATE DATABASE IF NOT EXISTS `id5554108_database_maf` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id5554108_database_maf`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `cpf`, `email`, `data_nascimento`, `senha`, `created_at`, `updated_at`) VALUES
(1, 'AMANDA', 'ALVES', '00000000001', 'amanda.rhodes.a@gmail.com', '1995-03-27', '123456', '0000-00-00 00:00:00', '2018-04-29 14:09:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id` int(10) NOT NULL,
  `taxa_rendimento` double DEFAULT NULL,
  `taxa_administracao` double DEFAULT NULL,
  `saldo_atual` double NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`id`, `taxa_rendimento`, `taxa_administracao`, `saldo_atual`, `cliente_id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 0.07, NULL, 0, 1, '', '0000-00-00 00:00:00', '2018-04-28 02:42:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resposta` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamento`
--

CREATE TABLE `lancamento` (
  `id` int(10) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `saldo_anterior` double NOT NULL,
  `saldo_atual` double NOT NULL,
  `data_lancamento` date NOT NULL,
  `comentario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conta_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `lancamento`
--

INSERT INTO `lancamento` (`id`, `nome`, `valor`, `categoria`, `tipo`, `saldo_anterior`, `saldo_atual`, `data_lancamento`, `comentario`, `conta_id`, `created_at`, `updated_at`) VALUES
(1, 'teste', 500, 'RECEITA', 'salario', 0, 500, '2018-04-29', NULL, 1, '0000-00-00 00:00:00', '2018-04-28 03:58:16'),
(4, 'arthur', 30, 'RECEITA', 'salário', 0, 0, '0000-00-00', 'oi', 1, '0000-00-00 00:00:00', '2018-04-29 19:02:35'),
(5, 'salario', 100, '', 'mesada', 0, 0, '2017-11-30', 'testando', 1, '0000-00-00 00:00:00', '2018-04-29 19:08:52'),
(6, 'amanda só dorme', 150, '', 'mesada', 0, 0, '2016-11-30', 'Amanda está com sono', 1, '0000-00-00 00:00:00', '2018-04-29 19:11:35'),
(7, 'Kennedy só reclama', 200, 'RECEITA', 'mesada', 0, 0, '2017-12-30', 'Kennedy está bravo', 1, '0000-00-00 00:00:00', '2018-04-29 19:13:50'),
(8, '', 0, 'RECEITA', 'naoinformado', 0, 0, '0000-00-00', '', 1, '0000-00-00 00:00:00', '2018-04-29 21:00:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `meta`
--

CREATE TABLE `meta` (
  `id` int(10) NOT NULL,
  `meta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vencimento` datetime NOT NULL,
  `situacao` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

CREATE TABLE `notificacao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sonho`
--

CREATE TABLE `sonho` (
  `id` int(10) NOT NULL,
  `sonho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `poupanca_mensal` int(10) NOT NULL,
  `situacao` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conta_fk0` (`cliente_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lancamento`
--
ALTER TABLE `lancamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lancamento_fk0` (`conta_id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meta_fk0` (`cliente_id`);

--
-- Indexes for table `notificacao`
--
ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sonho`
--
ALTER TABLE `sonho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sonho_fk0` (`cliente_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conta`
--
ALTER TABLE `conta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lancamento`
--
ALTER TABLE `lancamento`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notificacao`
--
ALTER TABLE `notificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sonho`
--
ALTER TABLE `sonho`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `conta_fk0` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);

--
-- Limitadores para a tabela `lancamento`
--
ALTER TABLE `lancamento`
  ADD CONSTRAINT `lancamento_fk0` FOREIGN KEY (`conta_id`) REFERENCES `conta` (`id`);

--
-- Limitadores para a tabela `meta`
--
ALTER TABLE `meta`
  ADD CONSTRAINT `meta_fk0` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);

--
-- Limitadores para a tabela `sonho`
--
ALTER TABLE `sonho`
  ADD CONSTRAINT `sonho_fk0` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
