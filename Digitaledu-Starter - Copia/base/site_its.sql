-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 24/10/2022 às 19h57min
-- Versão do Servidor: 8.0.29
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `site_its`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id_cadastro` int NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `obs` int NOT NULL,
  PRIMARY KEY (`id_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `usuario`, `nome`, `email`, `login`, `senha`, `obs`) VALUES
(1, 'luckcri', 'Luciano B. Fernandes', 'luckcri@jhsgdbsd.com.br', 'luckcri', '202cb962ac59075b964b07152d234b70', 0),
(2, 'dani', 'Daniela Da Silva de Souza', 'dani@dani.com.br', 'dani', '202cb962ac59075b964b07152d234b70', 0),
(3, 'pedro', 'Pedro Onde Vc Vai eu TB Vou', 'pedro@pedro.com.br', 'pedro', '202cb962ac59075b964b07152d234b70', 0),
(14, 'admin', 'Daniela', 'danielacardoso2506@gmail.com', 'admin', '123', 0),
(36, 'Danie', 'Dani', 'danie', 'Danie', '202cb962ac59075b964b07152d234b70', 0),
(48, 'd', 'dd', 'dd', 'd', '1aabac6d068eef6a7bad3fdf50a05cc8', 0),
(351, 'e', 'ee', 'ee', 'e', '123', 0),
(417, 'e', 'eeeee', 'dasda', 'e', 'dasd', 0),
(421, 'd', '2', '231', 'd', '123', 0),
(549, 'd', '2', '231', 'd', 'dasdas', 0),
(803, 'e', 'e', 'e', 'e', '123', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE IF NOT EXISTS `conteudo` (
  `id_conteudo` int NOT NULL,
  `id_disciplina` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id_conteudo`),
  KEY `id_disciplina` (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id_conteudo`, `id_disciplina`, `nome`) VALUES
(1, 3, 'Animais'),
(2, 3, 'Obesidade'),
(3, 3, 'Musica'),
(4, 3, 'Cultura'),
(5, 3, 'Cartum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disciplina` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id_disciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome`) VALUES
(1, 'Portugues'),
(2, 'Literatura'),
(3, 'Ingles'),
(4, 'Matematica'),
(5, 'Física');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE IF NOT EXISTS `instituicao` (
  `id_instituicao` int NOT NULL,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id_instituicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id_instituicao`, `nome`) VALUES
(1, 'UNESC'),
(2, 'ENEM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE IF NOT EXISTS `pergunta` (
  `id_pergunta` int NOT NULL,
  `descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_prova` int NOT NULL,
  `id_conteudo` int NOT NULL,
  `obs` varchar(10) NOT NULL,
  `foto_pergunta` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id_pergunta`),
  KEY `id_prova` (`id_prova`),
  KEY `id_conteudo` (`id_conteudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`id_pergunta`, `descricao`, `id_prova`, `id_conteudo`, `obs`, `foto_pergunta`) VALUES
(1, 'Ao discutir sobre a influência de animais de estimação no bem-estar do ser humano, a autora, a fim de fortalecer seus argumentos, utiliza palavras e expressões como research, a growing number of research e several studies com o objetivo de', 1, 1, '#Animais', 'images_provas/Ingles_2019/questao_1_Ingles_2019.png'),
(2, 'Ao abordar o assunto “obesidade”, em uma seção de  jornal, o autor', 1, 2, '#Obesidade', 'images_provas/Ingles_2019/questao_2_Ingles_2019.png'),
(3, 'A canção, muitas vezes, é uma forma de manifestar  sentimentos e emoções da vida cotidiana. Por exemplo,  o sofrimento retratado nessa canção foi causado', 1, 3, '#Musica', 'images_provas/Ingles_2019/questao_3_Ingles_2019.png'),
(4, 'Valores culturais de um povo revelam sua forma de ser,  agir e pensar. Na concepção da autora, as diferentes  formas de educar crianças nos Estados Unidos  confirmam que as crianças', 1, 4, '#Cultura', 'images_provas/Ingles_2019/questao_4_Ingles_2019.png'),
(5, 'No cartum, o estudante faz uma pergunta usando turn  this thing on por', 1, 3, '#Cartum', 'images_provas/Ingles_2019/questao_5_Ingles_2019.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

CREATE TABLE IF NOT EXISTS `prova` (
  `id_prova` int NOT NULL,
  `id_instituicao` int NOT NULL,
  `data` year NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_prova`),
  KEY `id_instituicao` (`id_instituicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `prova`
--

INSERT INTO `prova` (`id_prova`, `id_instituicao`, `data`, `status`) VALUES
(1, 2, 2019, '1'),
(2, 2, 2019, '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE IF NOT EXISTS `resposta` (
  `id_resposta` int NOT NULL,
  `id_pergunta` int NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id_resposta`),
  KEY `id_pergunta` (`id_pergunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`id_resposta`, `id_pergunta`, `descricao`, `status`) VALUES
(1, 1, ' mostrar que animais de estimação ajudam na cura  de doenças como alergias e asma.', 'F'),
(2, 1, ' convencer sobre os benefícios da adoção de animais  de estimação para a saúde.', 'T'),
(3, 1, 'fornecer dados sobre os impactos de animais de  estimação nas relações amorosas', 'F'),
(4, 1, ' explicar como o contato com animais de estimação  pode prevenir ataques cardíacos.', 'F'),
(5, 1, 'esclarecer sobre o modo como idosos devem se  relacionar com animais de estimação.', 'F');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
