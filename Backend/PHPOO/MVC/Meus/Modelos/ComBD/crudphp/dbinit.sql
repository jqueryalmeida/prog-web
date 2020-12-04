--
-- Database: `crudphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `pass` varchar(45) NOT NULL,
  `age` varchar(3) DEFAULT NULL,
  `blocked` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Extraindo dados da tabela `users` SENHA PADRÃO "crud"
--

INSERT INTO `users` (`id`, `username`, `name`, `pass`, `age`, `blocked`) VALUES
(1, 'crud', 'Crud User', 'Y3J1ZA==', '99', 'N');
