-- ======================================
-- Banco de dados - Locadora de Veiculos
-- ======================================

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO clientes (cliente, senha) VALUES ('usuario1', 'senha123');

-- --------------------------------------------------------