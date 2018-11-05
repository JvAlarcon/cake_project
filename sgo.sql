-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2018 às 12:34
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `calls`
--

CREATE TABLE `calls` (
  `call_id` int(11) NOT NULL,
  `call_occurrence` text NOT NULL,
  `call_requester` int(11) NOT NULL,
  `call_responsible` int(11) NOT NULL,
  `situation_id` int(11) NOT NULL,
  `call_creation` date NOT NULL,
  `call_closure` date DEFAULT NULL,
  `priority_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(2, 'Recursos Humanos'),
(3, 'TI - SUPORTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_cpf` varchar(15) NOT NULL,
  `employee_email` varchar(50) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `employee_boss` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `employee_cpf`, `employee_email`, `department_id`, `employee_boss`) VALUES
(1, 'João Alarcón', '47732461894', 'joao.alarcon@test.com', 3, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logins`
--

CREATE TABLE `logins` (
  `login_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20181104170927, 'Initial', '2018-11-04 19:09:31', '2018-11-04 19:09:31', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `priorities`
--

CREATE TABLE `priorities` (
  `priority_id` int(11) NOT NULL,
  `priority_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `priorities`
--

INSERT INTO `priorities` (`priority_id`, `priority_description`) VALUES
(1, 'Baixa'),
(2, 'Média'),
(3, 'Alta'),
(4, 'Urgente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situations`
--

CREATE TABLE `situations` (
  `situation_id` int(11) NOT NULL,
  `situation_description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `situations`
--

INSERT INTO `situations` (`situation_id`, `situation_description`) VALUES
(1, 'Criada'),
(2, 'Em Andamento'),
(3, 'Em espera'),
(4, 'Concluída');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`call_id`),
  ADD KEY `Fk_CodFunc_Solicitante` (`call_requester`),
  ADD KEY `Fk_CodFunc_Responsavel` (`call_responsible`),
  ADD KEY `Fk_CodPri_CodPrio` (`priority_id`),
  ADD KEY `Fk_StatusId_StatusID` (`situation_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `CPF` (`employee_cpf`),
  ADD KEY `Fk_CodDpto_CodDpto` (`department_id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `priorities`
--
ALTER TABLE `priorities`
  ADD PRIMARY KEY (`priority_id`);

--
-- Indexes for table `situations`
--
ALTER TABLE `situations`
  ADD PRIMARY KEY (`situation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `call_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `priorities`
--
ALTER TABLE `priorities`
  MODIFY `priority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `situations`
--
ALTER TABLE `situations`
  MODIFY `situation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `calls`
--
ALTER TABLE `calls`
  ADD CONSTRAINT `Fk_CodFunc_Responsavel` FOREIGN KEY (`call_responsible`) REFERENCES `employees` (`employee_id`),
  ADD CONSTRAINT `Fk_CodFunc_Solicitante` FOREIGN KEY (`call_requester`) REFERENCES `employees` (`employee_id`),
  ADD CONSTRAINT `Fk_CodPri_CodPrio` FOREIGN KEY (`priority_id`) REFERENCES `priorities` (`priority_id`),
  ADD CONSTRAINT `Fk_StatusId_StatusID` FOREIGN KEY (`situation_id`) REFERENCES `situations` (`situation_id`);

--
-- Limitadores para a tabela `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `Fk_CodDpto_CodDpto` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
