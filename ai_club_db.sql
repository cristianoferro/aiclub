-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Dez-2017 às 18:46
-- Versão do servidor: 5.5.38-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.5
--
-- Código para criar base de dados gerado automaticamente pelo phpMyAdmin

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `ai_club_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_artigo` text NOT NULL,
  `titulo` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `nome_artigo`, `titulo`, `texto`, `imagem`) VALUES
(1, '', 'AI vai ser "a melhor ou pior coisa" para a humanidade', 'Stephen Hawking diz que "os potenciais benefícios de criar inteligência são enormes" e que\r\n  "não podemos prever o que poderemos alcançar quando as nossas mentes forem aplificadas\r\n  pela inteligência artificial. Talvez com as ferramentas desta nova revolução tecnológica,\r\n  seremos capazes de desfazer alguns danos causados ao mundo natural pela última, a industrialização.\r\n  E certamente tentaremos eradicar finalmente a doença e a pobreza."\r\n  "Cada aspeto das nossas vidas será transformado. Em suma, o sucesso na criação de AI\r\npoderia ser o maior evento da história da nossa civilização.”', 'Stephen_Hawking.jpg'),
(2, '', 'Um ataque de AI na internet é "apenas uma questão de tempo', 'Inteligência Artificial está a tornar-se omnipresente nas nossas vidas\r\n      Tem contribuido para o desenvolvimento da medicina, dos transportes, da informática e do entretenimento.\r\n      A tecnologia massiva, no entanto, é um grande força que pode tanto ajudar, bem como causar danos.\r\n      Parece que a Inteligência Artificial continuará a florescer, e cabe a cientistas responsáveis e utilizadores comuns\r\n       manter a sua aceleração num caminho que que adira à melhoria das vidas.\r\n      A cibersegurança também está a reforçar o uso de AI. Mas  se ambos os lados detêm AIs avançados,\r\n      Musk diz que isso pode acabar em grandes guerras on-line.', 'ElonMusk.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos_app`
--

CREATE TABLE IF NOT EXISTS `artigos_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `artigos_app`
--

INSERT INTO `artigos_app` (`id`, `titulo`, `texto`, `imagem`) VALUES
(1, 'Auto Draw', 'Uma ferramenta que facilita o desenho,\r\n          ajudando a identificar formas dos traços durante o processo.', 'auto_draw.png'),
(2, 'Siri', 'Uma app no estilo de assistente pessoal Pode enviar mensagens,\r\n          efetuar chamadas, consultar o calendário e muito mais.', 'siri.jpg'),
(3, 'Lyrebird', 'Ferramenta que copia a voz de qualquer pessoa ao utilizar um algoritmo de imitação.\r\n           Ao analisar a voz de uma pessoa, é possível transformar texto escrito em som,\r\n           com uma voz idêntica.', 'lyrebird.png'),
(4, 'Motion AI', 'Motion AI é uma ferramente cujo propósito consiste em está a ajudar a torna a inteligência artificial acessível para qualquer pessoa, através da construção de chatbots.', 'motion AI.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos_futuro`
--

CREATE TABLE IF NOT EXISTS `artigos_futuro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `artigos_futuro`
--

INSERT INTO `artigos_futuro` (`id`, `titulo`, `texto`, `imagem`) VALUES
(1, 'Kernel está a desenvolver a primeira prótese neural, um computador para o nosso cérebro.', 'A nossa biologia e genética estão a tornar-se crescentemente programáveis. O nosso código neurológico é o próximo na fila. Doenças como Alzheimer tiram-nos a nossas memórias, mas Bryan Johnson, CEO da Kernel, acredita que isso pode ser resolvido e anunciou um investimento de 100 milhões de dólares para desbloquear o poder do cérebro humano e fazer o nosso código neurológico programável.', 'cyborg.jpg'),
(2, 'Pode, na verdade libertar-nos para usarmos a nossas habilidades humanas', 'Há um desconforto global de que a tecnologia possa deixar muitos de nós sem emprego, à medida que os empregos vão sendo assumidos por computadores. Mas pode, na verdade, libertar-nos para usarmos as nossas habilidades humanas de criar conhecimento, resolução de problemas e trabalho colaborativo. Empregos que não são rotineiros como os que envolvem cuidar de crianças e idosos está a mostrar sinais de crescimento. Então, de certo modo, as pessoas vão precisar de aprender como ser uma pessoa "completa", num mundo onde o trabalho esta a mudar e vai continuar a mudar durante as nossas vidas.', 'hand_robot.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `brain`
--

CREATE TABLE IF NOT EXISTS `brain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `brain`
--

INSERT INTO `brain` (`id`, `imagem`) VALUES
(1, 'Stephen_Hawking_r.png'),
(2, 'ElonMusk_r.png'),
(3, 'cyborg_r.png'),
(4, 'hand_robot_r.png'),
(5, 'apps_icon.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `webgrafia`
--

CREATE TABLE IF NOT EXISTS `webgrafia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `site` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `webgrafia`
--

INSERT INTO `webgrafia` (`id`, `nome`, `site`) VALUES
(1, 'The Guardian', 'https://www.theguardian.com/science/2016/oct/19/stephen-hawking-ai-best-or-worst-thing-for-humanity-cambridge'),
(2, 'The University of Melbourne', 'https://pursuit.unimelb.edu.au/articles/human-vs-computer-becoming-more-employable-than-an-algorithm'),
(7, 'Futurism', 'https://futurism.com/not-just-a-state-of-mind-scientists-locate-the-physical-source-of-depression-in-the-brain/'),
(8, 'Product Hunt', 'https://www.producthunt.com/@astro/collections/artificial-intelligence-for-all');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
