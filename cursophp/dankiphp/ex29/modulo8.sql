-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/08/2024 às 18:20
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
-- Banco de dados: `modulo8`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Geral'),
(2, 'Esportes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `momento_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `momento_registro`) VALUES
(1, 'Pedro', 'Maciel', '2024-08-01 13:09:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `categoria_id`, `conteudo`) VALUES
(1, 'Minha notícia geral', 1, 'Meu texto de exemplo da categoria geral.'),
(2, 'Minha notícia geral 2', 1, 'Meu segundo texto de exemplo da categoria geral.'),
(3, 'Notícia de esporte', 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste aut ullam commodi quidem eaque quo illum facilis atque libero sapiente ea excepturi repellendus assumenda harum non nulla, explicabo impedit perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat officiis suscipit sint officia neque fugit quam nulla, illum sapiente perspiciatis voluptas adipisci reiciendis impedit, assumenda a harum. Tempora, consectetur iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit repellat, accusamus cupiditate quam dolore alias ipsa incidunt consequatur fuga quis quasi, maxime quod dolores cumque voluptatem officiis praesentium similique quos'),
(4, 'Minha outra notícia de esporte', 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste aut ullam commodi quidem eaque quo illum facilis atque libero sapiente ea excepturi repellendus assumenda harum non nulla, explicabo impedit perspiciatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat officiis suscipit sint officia neque fugit quam nulla, illum sapiente perspiciatis voluptas adipisci reiciendis impedit, assumenda a harum. Tempora, consectetur iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit repellat, accusamus cupiditate quam dolore alias ipsa incidunt consequatur fuga quis quasi, maxime quod dolores cumque voluptatem officiis praesentium similique quos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
