-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2020 às 23:12
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `consumidor_consciente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_message` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_message`, `post_date`) VALUES
(1, 'O \"orgulho português\" de Costa', '<p class=\"t-article-content-intro-1 selectionShareable\" style=\"text-align: left;\"><span style=\"color: #3598db;\"><em><span style=\"background-color: #c2e0f4;\"><strong>\"Em tempos dif&iacute;ceis e de incerteza\" importa celebrar \"o orgulho de ser portugu&ecirc;s\", disse Ant&oacute;nio Costa, manifestando esperan&ccedil;a de poder voltar a comemorar o 10 de Junho junto das comunidades na di&aacute;spora em 2021.</strong></span></em></span></p>\r\n<p class=\"t-article-content-intro-1 selectionShareable\" style=\"text-align: left;\">&nbsp;</p>\r\n<div id=\"artigotexto_12298366\" style=\"text-align: left;\">&nbsp;</div>\r\n<p class=\"selectionShareable\" style=\"text-align: left;\"><em>\"Em tempos dif&iacute;ceis e de incerteza, importa celebrar - ainda que por via digital - o orgulho de ser portugu&ecirc;s\", come&ccedil;ou por dizer o primeiro-ministro num v&iacute;deo publicado nas redes sociais, assinalando o Dia de Portugal, de Cam&otilde;es e das Comunidades Portuguesas. Dirigindo-se \"de modo particular &agrave;s comunidades portuguesas no estrangeiro\", recordou a import&acirc;ncia da di&aacute;spora para justificar a decis&atilde;o, conjunta com Presidente da Rep&uacute;blica, de comemorar o 10 de Junho tamb&eacute;m junto das comunidades portuguesas no estrangeiro, como foi em Fran&ccedil;a em 2016, no Brasil em 2017, nos Estados Unidos em 2018 e em Cabo Verde em 2019.</em></p>\r\n<p class=\"selectionShareable\" style=\"text-align: left;\">&nbsp;</p>\r\n<p class=\"selectionShareable\" style=\"text-align: left;\"><strong>\"Este ano, t&iacute;nhamos previsto participar nas celebra&ccedil;&otilde;es oficiais na Madeira e junto da comunidade portuguesa na &Aacute;frica do Sul. Infelizmente, a situa&ccedil;&atilde;o vivida ao n&iacute;vel internacional, em resultado da pandemia, n&atilde;o nos permitiu que esse encontro se realizasse de imediato, mas esperamos poder celebrar de novo esse dia junto das comunidades portuguesas em 2021\", antecipou, assinalado que muitos portugueses sa&iacute;ram do pa&iacute;s \"em circunst&acirc;ncias dif&iacute;ceis\" e que, com \"esfor&ccedil;o\", conseguiram \"construir projetos de vida bem-sucedidos\".</strong></p>', '2020-06-10 21:01:11'),
(2, 'Marcelo vai condecorar profissionais que trataram o primeiro doente', '<p class=\"t-article-content-intro-1 selectionShareable\"><span style=\"background-color: #fbeeb8; color: #2dc26b;\"><strong>Neste 10 de Junho diferente, Marcelo Rebelo de Sousa anunciou que vai condecorar os profissionais do Servi&ccedil;o Nacional de Sa&uacute;de que trataram o primeiro doente de covid-19.</strong></span></p>\r\n<p class=\"selectionShareable\"><em>\"Tempos ingratos e decisivos\" obrigaram a mudar os planos das comemora&ccedil;&otilde;es do 10 de Junho, que passaram da Madeira e &Aacute;frica do Sul para o Mosteiro dos Jer&oacute;nimos, em Lisboa. Falando depois do cardeal D. Tolentino de Mendon&ccedil;a, o Presidente da Rep&uacute;blica centrou o habitual discurso do Dia de Cam&otilde;es, de Portugal e das Comunidades Portugueses na crise pand&eacute;mica e financeira que o pa&iacute;s atravessa, alertando que n&atilde;o &eacute; poss&iacute;vel que as \"solu&ccedil;&otilde;es de ontem sejam as solu&ccedil;&otilde;es de amanh&atilde;\".</em></p>\r\n<aside class=\"t-article-float-media-1\" style=\"margin-top: 0px;\">\r\n<div class=\"t-article-quote-1 selectionShareable\">\r\n<p>Portugal n&atilde;o pode fingir que n&atilde;o existiu ou n&atilde;o existe pandemia, como n&atilde;o pode fingir que n&atilde;o existe crise financeira</p>\r\n</div>\r\n</aside>\r\n<p class=\"selectionShareable\">\"Percebemos mesmo aquilo que falhou?\" - na sa&uacute;de, no privado, no setor social - e que \"temos nos meses pr&oacute;ximos uma oportunidade &uacute;nica para mudar o que temos de mudar?\", questionou o chefe de Estado, elogiando o sentido de uni&atilde;o dos cidad&atilde;os e servi&ccedil;os. \"Portugal n&atilde;o pode fingir que n&atilde;o existiu ou n&atilde;o existe pandemia, como n&atilde;o pode fingir que n&atilde;o existe brutal crise econ&oacute;mica e financeira. E este 10 de junho de 2020 &eacute; o momento para acordarmos todos para essa realidade\".</p>\r\n<p class=\"selectionShareable\"><strong>\"Her&oacute;is da sa&uacute;de\" condecorados</strong></p>\r\n<h3 class=\"selectionShareable\">\"Todas as vidas contam\", afirmou Marcelo Rebelo de Sousa, recordando os cerca de 1500 mortos, os milhares de infetados, desempregados e em layoff. \"A pandemia ainda n&atilde;o terminou e a economia e &agrave; sociedade est&atilde;o longe de arrancar\".</h3>\r\n<p class=\"selectionShareable\">\"&Eacute; justo que nos unamos para homenagear os her&oacute;is da sa&uacute;de em Portugal\", disse ainda o Presidente da Rep&uacute;blica, que, simbolicamente, vai condecorar os profissionais de sa&uacute;de (um m&eacute;dico, um enfermeiro, um terapeuta e um t&eacute;cnico operacional) que trataram o primeiro doente de covid-19 em Portugal.</p>', '2020-06-10 21:03:16'),
(3, 'Paulo Vasconcelos acaba projecto de Back-end ', '<h4><em><span style=\"color: #f8cac6; background-color: #3598db;\">Paulo </span><span style=\"background-color: #bfedd2;\">Vasconcelos </span>finalmente entrega o seu projecto de back-end ap&oacute;s algum atraso, parece impossivel.</em></h4>', '2020-06-10 21:05:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(10) UNSIGNED NOT NULL,
  `subscriber_name` varchar(100) NOT NULL,
  `subscriber_email` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `subscriber_name`, `subscriber_email`) VALUES
(1, 'Artur Vasconcelos', 'paulo.artur.vasconcelos@gmail.com'),
(2, 'Paulo Afonseca', 'paulo_aav@hotmail.com'),
(3, 'Paulo Bem Grave', 'Paulo_grave@msn.pt'),
(4, 'Alexandre Antunes', 'alexandre_andre@phonehouse.pt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_name` varchar(10) NOT NULL,
  `user_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_name`, `user_password`) VALUES
('admin', 'admin2020');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Índices para tabela `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
