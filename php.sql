-- ======================================
-- Banco de dados - Locadora de Veiculos
-- ======================================

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

CREATE TABLE `clientes`(
  `id` int(11) NOT NULL,
  `cliente` varchar(80) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `clientes` (`id`, `cliente`, `nome`, `senha`) VALUES
(1, 'thiago', 'thigas', '123'),
(2, 'luiza', 'luizinha', '123');

-- --------------------------------------------------------