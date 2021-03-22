-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22-Mar-2021 às 10:26
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `politi07_politizeesocialize`
--
CREATE DATABASE IF NOT EXISTS `politi07_politizeesocialize` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `politi07_politizeesocialize`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assinantes`
--

CREATE TABLE `assinantes` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assinantes`
--

INSERT INTO `assinantes` (`id`, `email`, `status`) VALUES
(1, 'trukma123@aol.com', 1),
(2, 'vmsa03@gmail.com', 1),
(3, 'andrew.mcfadzen@hotmail.com', 1),
(4, 'coldare10@gmail.com', 1),
(5, 'tiffanyprincess15@yahoo.com', 1),
(6, 'born2bake@yahoo.com', 1),
(7, 'bitmixbiz@protonmail.com', 1),
(8, 'cmichellepainter@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nome_normal` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `tags` varchar(450) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `nome_normal`, `descricao`, `tags`) VALUES
(1, 'politica', 'Política', 'Saiba tudo sobre Política no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Política, Bolsonaro, Lula, Mourão, Palácio do Planalto, Dilma, PT, PSL, PSOL'),
(2, 'televisao', 'Televisão', 'Saiba tudo sobre Televisão no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Anitta, Pablo Vittar, Luísa Sonza, Gustavo Lima, Globo, MTV, Record, UOL, G1'),
(3, 'esportes', 'Esportes', 'Saiba tudo sobre Esportes no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Flamengo, Corinthians, São Paulo, Brasileirão, Copa do Brasil, Libertadores, Champions League, Internacional'),
(4, 'saude', 'Saúde', 'Saiba tudo sobre Saúde no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Covi-19, Coronavírus, Pandemia, Gripe, OMS, Sistema de Saúde Pública, SUS, Ministério da Saúde'),
(5, 'economia', 'Economia', 'Saiba tudo sobre Economia no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Dólar, Real, Preço do Arroz, Inflação, Criptomoedas, Bitcoins, Mercado Financeiro, Trader Forex'),
(6, 'games', 'Games', 'Saiba tudo sobre Games no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Cyberpunk 2077, GTA V, Red Dead Redemption 2, FIFA 21, PES 21, Left 4 Dead, Preço dos Jogos'),
(7, 'musica', 'Música', 'Saiba tudo sobre Música no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Anitta, Luísa Sonza, Ludmilla, U2, Novo Álbum, Disco novo, Novas Músicas'),
(8, 'educacao', 'Educação', 'Saiba tudo sobre Educação no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Enem 2021, MEC, Vestibular, USP, Descomplica, Universidade Federal, Universidade Estadual, Greve'),
(9, 'recentes', 'Recentes', 'Todas as notícias Recentes de Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Bolsonaro, Flamengo, Anitta, Rede Globo, Coronavírus, Política, Saúde, Covid-19, Dólar, Alta do dólar, Enem, MEC, Cyberpunk 2077');

-- --------------------------------------------------------

--
-- Estrutura da tabela `competicoes`
--

CREATE TABLE `competicoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) CHARACTER SET latin1 NOT NULL,
  `alcunha` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` text CHARACTER SET latin1 NOT NULL,
  `organizadora` varchar(250) CHARACTER SET latin1 NOT NULL,
  `logotipo` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `competicoes`
--

INSERT INTO `competicoes` (`id`, `nome`, `alcunha`, `descricao`, `organizadora`, `logotipo`) VALUES
(1, 'Brasileirao', 'Brasileirao', 'Competição anual dos 20 times da elite do futebol brasileiro.', 'CBF', 'brasileirao.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes`
--

CREATE TABLE `equipes` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `alcunha` varchar(150) NOT NULL,
  `escudo` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipes`
--

INSERT INTO `equipes` (`id`, `nome`, `alcunha`, `escudo`) VALUES
(1, 'Flamengo', 'FLA', '60146e3e5bed0.png'),
(2, 'SÃ£o Paulo', 'SAO', '60146e9995c1f.png'),
(3, 'Palmeiras', 'PAL', '60146f248adb6.png'),
(4, 'Santos', 'SAN', '60146f7455292.png'),
(5, 'Vasco', 'VAS', '60149216d7ed6.png'),
(6, 'Corinthians ', 'COR', '60159bd4187ac.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `time_casa` varchar(250) NOT NULL,
  `time_fora` varchar(250) NOT NULL,
  `campeonato` varchar(250) NOT NULL,
  `fase` varchar(350) NOT NULL,
  `placar` varchar(250) NOT NULL,
  `status_jogo` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `tags` varchar(450) NOT NULL,
  `url` varchar(500) NOT NULL,
  `arquivo` varchar(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `legenda` text NOT NULL,
  `lances` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `id_usuario`, `categoria_id`, `time_casa`, `time_fora`, `campeonato`, `fase`, `placar`, `status_jogo`, `titulo`, `descricao`, `tags`, `url`, `arquivo`, `tipo`, `legenda`, `lances`, `data`, `status`) VALUES
(4, 9, 3, 'SÃ£o Paulo', 'Flamengo', 'Brasileirao', '38Âª rodada', '2-1', 'Fim de jogo', 'SÃ£o Paulo vs Flamengo', 'Jogo vÃ¡lido pela fase 38Âª rodada do campeonato Brasileirao entre SÃ£o Paulo e Flamengo. A data oficial do jogo Ã© 2021-02-25T20:30', 'Flamengo, Flamengo, Brasileirao, 2021-02-25T20:30, Esportes 38Âª rodada', 'sao-paulo-vs-flamengo-2021-02-26', '6039858c16908.jpg', 'imagem', 'Flamengo vs SÃ£o Paulo.', '<p>FLAMENGO PERDE POR 2 A 1, MAS &Eacute; CAMPE&Atilde;O BRASILEIRO.</p>\n\n<h3>90&#39; FIM DE PAPO</h3>\n\n<h3>58&#39; PABLOOOOOO!</h3>\n\n<p>Segundo gol do S&atilde;o Paulo, Pablo aproveita p&eacute;ssima sa&iacute;da de bola de Hugo e marca para o S&atilde;o Paulo</p>\n\n<h3>51&#39; BRUNOOOOO!</h3>\n\n<p>Flamengo empata jogo com cabe&ccedil;ada fatal de Bruno Henrique, 1 a 1.</p>\n\n<h3>INICIO DE SEGUNDO&nbsp;TEMPO!</h3>\n\n<h3>INTERVALO</h3>\n\n<h3>FINAL DE PRIMEIRO TEMPO!</h3>\n\n<h3>50&#39; LUCIANOOOO!</h3>\n\n<p>Com bela cobran&ccedil;a de falta e erro de Hugo, S&atilde;o Paulo abre o marcador.</p>\n\n<h3>INICIO DE JOGO!</h3>\n', '2021-02-25 20:30:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `tags` varchar(450) NOT NULL,
  `url` varchar(500) NOT NULL,
  `arquivo` varchar(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `legenda` text NOT NULL,
  `postagem` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `id_usuario`, `categoria_id`, `titulo`, `descricao`, `tags`, `url`, `arquivo`, `tipo`, `legenda`, `postagem`, `data`, `status`) VALUES
(1, 9, 3, 'Flamengo bate GrÃªmio jogando fora e campeonato fica vivo', 'O Flamengo conseguiu vencer o GrÃªmio fora de casa ontem (28) pela 23Â° rodada atrasada do Brasileiro, agora o Flamengo encosta no lÃ­der Internacional e empata em pontos com o SÃ£o Paulo, GrÃªmio fica com 51 pontos na 6 posiÃ§Ã£o.', 'Flamengo, GrÃªmio, BrasileirÃ£o, Flamengo vs GrÃªmio', 'flamengo-bate-gremio-jogando-fora-e-campeonato-fica-vivo-2021-01-29', '601437eecd032.jpg', 'imagem', 'Foto / Google', '<p>O Flamengo conseguiu vencer o Gr&ecirc;mio fora de casa ontem (28) pela 23&deg; rodada atrasada do Brasileiro, agora o Flamengo encosta no l&iacute;der Internacional e empata em pontos com o S&atilde;o Paulo, Gr&ecirc;mio fica com 51 pontos na 6 posi&ccedil;&atilde;o.</p>\n\n<h2>O jogo</h2>\n\n<p>O Flamengo come&ccedil;ou mal a primeira etapa, perdendo por um zero, mas criando chances sem convers&otilde;es, as melhores chances vieram com Gabigol, ap&oacute;s belo passe de Everton Ribeiro e Arrascaeta, mas nada de gol para o Meng&atilde;o.</p>\n\n<p>O placar foi aberto aos 40 minutos do primeiro tempo, Diego Souza de cabe&ccedil;a consegue escapar da zaga do Flamengo e marcar um belo gol de cabe&ccedil;a, tirando a bola de Hugo Souza, jovem goleiro do Flamengo.</p>\n\n<p>J&aacute; no segundo tempo o Flamengo conseguiu desencantar, Gabigol inspirado carrega o time para um bela virada sobre o time tricolor, aos 57 minutos do segundo tempo Gabigol cruza baixo na segunda trave e Everton Ribeiro de primeira empata o jogo.&nbsp;</p>\n\n<p>E menos de 5 minutos depois, Gabigol, o nome da partida, em belo chute colocado vira o jogo para o meng&atilde;o, e menos de 7 minutos depois o Flamengo marca mais um, em grande explos&atilde;o de Gabigol que toca curto dentro da pequena &aacute;rea para Arrascaeta livre marcar o terceiro para o Flamengo.</p>\n\n<p>O Gr&ecirc;mio ainda respirou um pouco com um gola&ccedil;o de falta de Diego Souza, Hugo fica indeciso com a curva da bola que entra no canto direito do gol do Meng&atilde;o, tr&ecirc;s a dois. Por fim, Isla completa a fila de gols do Flamengo, placar final: 4 a 2.</p>\n\n<h2>Gabigol comanda Flamengo</h2>\n\n<p>O nome do jogo foi Gabigol, Gabriel Barbosa, com um gol e duas assist&ecirc;ncias no segundo tempo, colocando fogo pela briga no topo da tabela e mantendo viva as brigas pelo t&iacute;tulo e garantindo o trabalho do t&eacute;cnico Rog&eacute;rio Ceni.</p>\n', '2021-01-29 13:29:34', 1),
(2, 9, 3, 'Diego Souza sente a perna apÃ³s grande noite contra Flamengo', 'Nesta quinta-feira (28) o Flamengo visitou o GrÃªmio e garantiu uma vitÃ³ria tranquila sobre o tricolor gaÃºcho por 4 a 2.', 'Flamengo, GrÃªmio, Flamengo vs GrÃªmio', 'diego-souza-sente-a-perna-apos-grande-noite-contra-flamengo-2021-01-29', '60143dc1ee67f.mp4', 'video', 'Vídeo / Youtube', '<p>Nesta quinta-feira (28) o Flamengo visitou o Gr&ecirc;mio e garantiu uma vit&oacute;ria tranquila sobre o tricolor ga&uacute;cho por 4 a 2, o nome da noite do Meng&atilde;o foi Gabigol, e do lado gremista Diego Souza, que marcou dois gols e um deles um gola&ccedil;o de falta, mesmo com noite perfeita de Diego a preocupa&ccedil;&atilde;o sobre o jogador aumenta, j&aacute; que este sentiu a perna ap&oacute;s chute forte no jogo.</p>\n\n<p>Diego Souza garantiu dois gols contra o Flamengo, do lado do Gr&ecirc;mio, o artilheiro deixou os seus gols na Arena, um de cabe&ccedil;a e outro de falta, em uma bela cobran&ccedil;a sem chances para Hugo Souza, goleiro da base do Flamengo, mesmo assim a derrota veio amarga, e uma preocupa&ccedil;&atilde;o a mais para o Gr&ecirc;mio, j&aacute; que Diego Souza deixou o campo com dores na perna, e &eacute; d&uacute;vida para pr&oacute;ximo duelo do tricolor, no domingo (31).</p>\n\n<p>Diego Souza tem 35 anos e mesmo com a idade, n&atilde;o deixa de ser goleador e decisivo, faz seu nome em partidas de grande intensidade e tamanho, foi o autor do gol da classifica&ccedil;&atilde;o do Gr&ecirc;mio para a final da Copa do Brasil e vem tendo grandes atua&ccedil;&otilde;es no campeonato brasileiro.</p>\n\n<p>O Gr&ecirc;mio enfrenta o Coritiba domingo, dia 31 deste m&ecirc;s, e espera-se uma vit&oacute;ria sobre o time na zona da degola, o Gr&ecirc;mio continua brigando por uma vaga na fase de grupos da Libertadores.</p>\n', '2021-01-29 13:54:25', 1),
(5, 9, 3, 'SÃ£o Paulo demite Diniz; RaÃ­ tambÃ©m deixa clube', 'O SÃ£o Paulo comunicou ontem (1) pela tarde a demissÃ£o do treinador Fernando Diniz, que estava no clube desde 2019 e comandou o tricolor por altos e baixos desde entÃ£o.', 'Fernando Diniz, SÃ£o Paulo, SPFC', 'sao-paulo-demite-diniz-rai-tambem-deixa-clube-2021-02-02', '60196d57d9244.jpg', 'imagem', 'Foto / Google.', '<p>O S&atilde;o Paulo comunicou ontem (1) pela tarde a demiss&atilde;o do treinador Fernando Diniz, que estava no clube desde 2019 e comandou o tricolor por altos e baixos desde ent&atilde;o. Ra&iacute;, diretor do clube, tamb&eacute;m deixou a institui&ccedil;&atilde;o junto a Diniz, que segundo o pr&oacute;prio S&atilde;o Paulo, Ra&iacute; pediu para sair ap&oacute;s demiss&atilde;o do companheiro e treinador.</p>\n\n<p>A s&eacute;rie de resultados e as cr&iacute;ticas sobre o t&eacute;cnico Fernando Diniz, pressionaram-o no cargo de treinador da equipe, que sofreu uma s&eacute;rie de derrotas nos &uacute;ltimos 10 jogos, sendo a mais expressiva contra o Internacional, onde a equipe de Diniz perdeu por 5 a 1 jogando no Morumbi.</p>\n\n<p>Diniz foi eliminado de absolutamente todas as competi&ccedil;&otilde;es que disputou com o S&atilde;o Paulo, sua primeira derrota e vexame, contra o Mirassol, pelo campeonato paulista, o time de Diniz perdeu por 3 a 2 da equipe que foi unida poucos dias antes do jogo contra o S&atilde;o Paulo. Sua segunda elimina&ccedil;&atilde;o foi a precoce queda na Libertadores, ainda na fase de grupos, a equipe perdeu para o Binacional tamb&eacute;m, ainda na mesma fase.</p>\n\n<p>Ap&oacute;s cair da Libertadores, o S&atilde;o Paulo tamb&eacute;m saiu da Sul-Americana para o Lan&uacute;s, a equipe tomou um gol no &uacute;ltimo minuto e caiu mais uma vez. Pela Copa do Brasil o time at&eacute; fez uma boa campanha, mas n&atilde;o conseguiu vencer o Gr&ecirc;mio pelas semifinais e deu adeus a competi&ccedil;&atilde;o. O S&atilde;o Paulo disputa agora o brasileiro apenas, e est&aacute; a 7 pontos atr&aacute;s do l&iacute;der.</p>\n\n<p>Marcos Vizolli assume interinamente a equipe at&eacute; a chegada de um novo t&eacute;cnico.</p>\n', '2021-02-02 12:18:47', 1),
(4, 9, 3, 'Palmeiras bate Santos por 1 a 0 e Ã© campeÃ£o da Libertadores', 'O Palmeiras Ã© campeÃ£o da AmÃ©rica apÃ³s jogo pouco movimentado contra Rival Santos.', 'Palmeiras, Santos, Libertadores', 'palmeiras-bate-santos-por-1-a-0-e-e-campeao-da-libertadores-2021-01-30', '6015f0aba383a.mp4', 'video', 'Video / Youtube.', '<p>O Palmeiras &eacute; campe&atilde;o da Am&eacute;rica ap&oacute;s jogo pouco movimentado contra Rival Santos, o jogo aconteceu nesta tarde (30) e o placar foi justo, 1 a 0, com este resultado e com a conquista do t&iacute;tulo, o Palmeiras j&aacute; tem vaga garantida na Copa do Mundo de Clubes da FIFA e na Recopa Sul-Americana, que acontecem neste ano.</p>\n\n<p>O Verd&atilde;o sagrou-se campe&atilde;o da Copa Libertadores da Am&eacute;rica ap&oacute;s bater o Santos por 1 a 0, os dois times paulistas entregaram pouco na final&iacute;ssima mesmo com os times de ambos os lados, completos, o Palmeiras teve como destaque positivo o contra ataque, j&aacute; que ofensivamente os dois times n&atilde;o praticaram muito.</p>\n\n<h2>A Final&nbsp;</h2>\n\n<p>O jogo n&atilde;o teve uma movimenta&ccedil;&atilde;o esperada, j&aacute; que pelo n&iacute;vel t&eacute;cnico de ambas as equipes era esperado um pouco mais intensidade de ambas as partes, mas apesar de ter destaques negativos por ser um jogo pouco movimentado na frente, o t&aacute;tico foi muito bem trabalhado, as duas equipes se posicionaram muito bem defensivamente, com poucas aberturas durante toda a partida.</p>\n\n<p>J&aacute; perto do fim, Cuca, t&eacute;cnico do Santos, foi expulso por tentar segurar a bola na lateral do campo, que foi atropelado por Marcos Rocha, que recebeu cart&atilde;o amarelo. E menos de 4 minutos ap&oacute;s isso, Rony rouba a bola e lan&ccedil;a-a em dire&ccedil;&atilde;o da &aacute;rea do Santos, Par&aacute; sobe pouco e Breno, aposta de Abel Ferreira sobe mais alto para marcar o gol do t&iacute;tulo do verd&atilde;o.</p>\n\n<h2>O que vem agora?</h2>\n\n<p>Do lado verde, o Palmeiras tem pela frente mais uma decis&atilde;o: a Copa do Brasil contra o Gr&ecirc;mio, que tem seu jogo de ida dia 11 de fevereiro, mas antes deste confronto as semifinais do Mundial de Clubes da Fifa.</p>\n\n<p>Do lado santista, contas! O Santos consegue acabar o ano bem (premia&ccedil;&atilde;o de vice-campe&atilde;o), mas com uma baixa no time j&aacute; confirmada e baixa importante: Lucas Ver&iacute;ssimo, que segue para Portugal, pedido de Jorge Jesus.</p>\n', '2021-01-30 20:50:03', 1),
(6, 5, 2, 'Karol ConkÃ¡ Ã© repudiada por assÃ©dio a brother no BBB', 'A participante foi repudiada pela assessoria do prÃ³prio brother, que diz que o que Karol fez Ã© um comportamento invasivo e pode se concretizar como assÃ©dio sexual e moral.', 'Big Brother, BBB, Karol ConkÃ¡', 'karol-conka-e-repudiada-por-assedio-a-brother-no-bbb-2021-02-04', '601c00f4dc1a1.jpg', 'imagem', 'Foto / Google.', '<p>A participante foi repudiada pela assessoria do pr&oacute;prio brother, que diz que o que Karol fez &eacute; um comportamento invasivo e pode se concretizar como ass&eacute;dio sexual e moral. Conk&aacute; foi notada ap&oacute;s a tarde de ontem (4) quando deitou ao lado de Arcrebiano, participante do BBB, enquanto o mesmo dormia no jardim da casa.</p>\n\n<p>&ldquo;Ap&oacute;s os acontecimentos desta tarde, na casa onde &eacute; gravado o reality show Big Brother Brasil, da Rede Globo, n&oacute;s da MMM Estrat&eacute;gia de Imagem viemos esclarecer que repudiamos qualquer tipo de comportamento invasivo, que pode ser considerado, inclusive, como ass&eacute;dio moral e sexual&rdquo;. MMM Estrat&eacute;gia de Imagem.</p>\n\n<p>A situa&ccedil;&atilde;o aconteceu quando Karol Conk&aacute; ap&oacute;s o almo&ccedil;o afirmou que iria deitar ao lado do brother para Lumena, outra participante do BBB, a Rapper foi at&eacute; Bill e se deitou a seu lado, de conchinha, mostrando a situa&ccedil;&atilde;o para os outros brother, Bill no entanto reagiu at&eacute; que de acordo com a situa&ccedil;&atilde;o.</p>\n\n<p>O BBB &eacute; o reality show oficial da Rede Globo apresentado pelo apresentador Tiago Leifert.</p>\n', '2021-02-04 11:13:08', 1),
(7, 6, 7, 'Anitta lanÃ§a Loco, nova mÃºsica da cantora', 'Anitta lanÃ§ou a mÃºsica no dia 29 de janeiro, este Ã© o primeiro single da cantora em trÃªs anos, desde Veneno e NÃ£o perco meu tempo, ambos lanÃ§ados em 2018.', 'Anitta, Loco, MÃºsica, Brasil', 'anitta-lanca-loco-nova-musica-da-cantora-2021-02-06', '601f23587a6c1.jpg', 'imagem', 'Foto / Google.', '<p>Anitta lan&ccedil;ou a m&uacute;sica no dia <strong>29 de janeiro</strong>, este &eacute; o primeiro single da cantora em tr&ecirc;s anos, desde <em>Veneno </em>e<em> N&atilde;o perco meu tempo</em>, ambos lan&ccedil;ados em 2018. Loco &eacute; uma m&uacute;sica in&eacute;dita que foi filmada nos Estados Unidos, Aspen, cidade no Colorado.</p>\n\n<p>M&uacute;sica foi produzida por Ryan Tedder com participa&ccedil;&atilde;o de nomes como Andr&eacute; Torres e Maur&iacute;cio Rengifo. Escute a m&uacute;sica pelo link abaixo.</p>\n\n<p>Veja o videoclipe clicando <a href=\"https://www.youtube.com/watch?v=7LLKQhwazhI\">aqui!</a></p>\n', '2021-02-06 20:16:40', 1),
(8, 2, 1, 'Haddad se posiciona sobre candidatura em 2022 com apoio de Lula', 'Fernando Haddad â€” ex-ministro e ex-prefeito de SÃ£o Paulo disse que recebeu orientaÃ§Ãµes de Lula, Luiz InÃ¡cio da Silva, ex-presidente do Brasil, para se posicionar como candidato pelo PT (Partido dos Trabalhadores) em 2022, quando acontecerÃ£o as prÃ³ximas eleiÃ§Ãµes presidenciais. ', 'Haddad, Lula, PT, EleiÃ§Ãµes 2022', 'haddad-se-posiciona-sobre-candidatura-em-2022-com-apoio-de-lula-2021-02-07', '602018894a927.jpg', 'imagem', 'Foto / Google.', '<p>Fernando Haddad &mdash; ex-ministro e ex-prefeito de S&atilde;o Paulo disse que recebeu orienta&ccedil;&otilde;es de Lula, Luiz In&aacute;cio da Silva, ex-presidente do Brasil, para se posicionar como candidato pelo PT (Partido dos Trabalhadores) em 2022, quando acontecer&atilde;o as pr&oacute;ximas elei&ccedil;&otilde;es presidenciais. Lula n&atilde;o pode se eleger devido &agrave; lei &ldquo;Ficha Limpa&rdquo;.</p>\n\n<p>Em entrevista ao site <em>Brasil 247, </em>Haddad deixou bem claro a vontade de Lula para que ele se apresentasse como candidato &agrave; presid&ecirc;ncia pelo Partido dos Trabalhadores: &ldquo;O Lula me disse que n&atilde;o temos mais tempo para esperar&hellip; Ele me pediu para colocar o &lsquo;bloco na rua e eu aceitei&rsquo;&rdquo;.</p>\n\n<p>Lula n&atilde;o pode se candidatar ao cargo de presidente do Brasil depois de duas acusa&ccedil;&otilde;es pela Lava Jato por corrup&ccedil;&atilde;o passiva e lavagem de dinheiro ainda quando era presidente do pa&iacute;s.&nbsp;</p>\n\n<p>Lula, por&eacute;m, recorreu a sua Defesa Petista para que fosse reavaliado a autonomia de S&eacute;rgio Moro, juiz que condenou o ex-presidente, nos casos da Lava Jato, caso o STF (Supremo Tribunal Federal) reconhe&ccedil;a que Moro agiu com parcialidade, Lula pode ter seus direitos pol&iacute;ticos de volta.</p>\n\n<p>Haddad concorreu &agrave; presid&ecirc;ncia em 2018, quando foi para o segundo turno contra Bolsonaro e saiu derrotado, com pouco de 47 milh&otilde;es de votos. O petista declarou tamb&eacute;m que pretende fazer agendas para viagens, com o objetivo de aumentar o grau de conhecimento entre os eleitores.</p>\n', '2021-02-07 13:42:49', 1),
(9, 2, 1, 'Lula defende que SÃ©rgio Moro foi parcial em sua condenaÃ§Ã£o', 'A defesa do ex-presidente estava perto de utilizar mensagens hackeadas em aÃ§Ã£o contra Moro no STF, mensagens acusavam o juiz SÃ©rgio Moro de ter tomado decisÃµes parciais nos processos contra o ex-presidente Lula, pela operaÃ§Ã£o â€œLava Jatoâ€, Moro desconhece veracidade das informaÃ§Ãµes.', 'Lula, Lava jato, SÃ©rgio Moro, STF', 'lula-defende-que-sergio-moro-foi-parcial-em-sua-condenacao-2021-02-10', '602415a446bb2.jpg', 'imagem', 'Foto / Google.', '<p>A defesa do ex-presidente estava perto de utilizar mensagens hackeadas em a&ccedil;&atilde;o contra Moro no STF, mensagens acusavam o juiz S&eacute;rgio Moro de ter tomado decis&otilde;es parciais nos processos contra o ex-presidente Lula, pela opera&ccedil;&atilde;o <strong>&ldquo;Lava Jato&rdquo;</strong>, Moro desconhece veracidade das informa&ccedil;&otilde;es.</p>\n\n<p>Todo o caso foi motivado por uma decis&atilde;o de Lula sobre sua condena&ccedil;&atilde;o na Lava Jato (Nove anos de pris&atilde;o), Lula tomou o debate ap&oacute;s S&eacute;rgio Moro entrar na pol&iacute;tica, e segundo o ex-presidente isso mostra o qu&atilde;o Moro foi parcial no seu julgamento, caso seja verdade, o julgamento e uma nova an&aacute;lise devem levar mais tempo.</p>\n\n<p>Zanin Martins, advogado de Lula, afirmou que <em>&ldquo;j&aacute; existem provas mais que suficientes&rdquo;</em> para a defesa contra S&eacute;rgio Moro, e que o julgamento em 2018 deveria ter sido retomado o mais breve poss&iacute;vel, sem que houvesse novas discuss&otilde;es acerca do caso. As mensagens em quest&atilde;o, segundo Zanin, j&aacute; s&atilde;o utilizadas em outros processos, e por isso, tamb&eacute;m, resolveu &ldquo;encolher&rdquo; o assunto neste momento.</p>\n\n<p>Caso o STF reconhe&ccedil;a uma verdadeira decis&atilde;o parcial por parte de S&eacute;rgio Moro, as condena&ccedil;&otilde;es sobre Lula podem vir a cair. Lula &eacute; condenado em dois processos: o caso &ldquo;Tr&iacute;plex&rdquo; e o do &ldquo;S&iacute;tio&rdquo;, sendo assim, Lula poderia voltar a disputar as elei&ccedil;&otilde;es presidenciais, j&aacute; que ainda continua impedido de se candidatar, j&aacute; que a lei &ldquo;Ficha Limpa&rdquo; o restringe disso.</p>\n', '2021-02-10 14:19:32', 1),
(10, 4, 4, 'Nova variante do coronavÃ­rus pode infectar pessoas vacinadas', 'Segundo cientistas britÃ¢nicos, por meio de informaÃ§Ãµes divulgadas nesta quinta-feira (11), a nova variante do covid-19, chamada de Bristol, pode infectar pessoas que jÃ¡ foram vacinadas ou pessoas que jÃ¡ tiveram contÃ¡gio pela doenÃ§a.', 'Covid-19, CoronavÃ­rus, variante do coronavÃ­rus, cientistas britÃ¢nicos', 'nova-variante-do-coronavirus-pode-infectar-pessoas-vacinadas-2021-02-12', '6026b5753fe79.jpg', 'imagem', 'Foto / Google.', '<p>Segundo cientistas brit&acirc;nicos, por meio de informa&ccedil;&otilde;es divulgadas nesta quinta-feira (11), a nova variante do covid-19, chamada de Bristol, pode infectar pessoas que j&aacute; foram vacinadas ou pessoas que j&aacute; tiveram cont&aacute;gio pela doen&ccedil;a.</p>\n\n<p>Mesmo sem saber se a nova variante &eacute; mais agressiva que a anterior, tamb&eacute;m no Reino Unido, &eacute; quase certo que ela est&aacute; diretamente relacionada &agrave;s variantes encontradas na &Aacute;frica do Sul e no Brasil, mas que de acordo com o Ministro de Sa&uacute;de do Reino Unido, o pa&iacute;s est&aacute; completamente comprometido em rastrear infectados e monitorar a propaga&ccedil;&atilde;o dessa variante.</p>\n\n<ul>\n	<li><a href=\"https://g1.globo.com/mundo/noticia/2021/02/12/franca-detecta-mais-de-300-casos-de-covid-ligados-as-variantes-brasileira-e-sul-africana-do-coronavirus.ghtml\">Fran&ccedil;a detecta casos ligados a variante do covid-19 da &Aacute;frica do Sul e Brasil</a></li>\n</ul>\n\n<p>At&eacute; o momento os cientistas defendem que as variantes conseguem quebrar a imuniza&ccedil;&atilde;o pela vacina ou pelo cont&aacute;gio anterior a doen&ccedil;a, e que podem tamb&eacute;m reduzir pela metade a efic&aacute;cia da imuniza&ccedil;&atilde;o.</p>\n', '2021-02-12 14:05:57', 1),
(11, 2, 1, 'Bolsonaro e Joe Biden jÃ¡ tÃªm data de encontro, e queimadas na AmazÃ´nia deve ser assunto', 'ApÃ³s quatro anos de Trump no governo estadunidense e com boas relaÃ§Ãµes com Bolsonaro, Ã© a vez do presidente Jair Bolsonaro se encontrar com Joe Biden, novo presidente dos Estados Unidos, com data marcada para 22 de abril.', 'Jair Bolsonaro, Bolsonaro, Joe Biden, EUA', 'bolsonaro-e-joe-biden-ja-tem-data-de-encontro-e-queimadas-na-amazonia-deve-ser-assunto-2021-02-14', '60297cc66ffcc.jpg', 'imagem', 'Foto / Google.', '<p>Ap&oacute;s quatro anos de Trump no governo estadunidense e com boas rela&ccedil;&otilde;es com Bolsonaro, &eacute; a vez do presidente Jair Bolsonaro se encontrar com Joe Biden, novo presidente dos Estados Unidos, com data marcada para <strong>22 de abril</strong>. O tema n&atilde;o atrai nada a aten&ccedil;&atilde;o de Bolsonaro: <strong>queimadas na Amaz&ocirc;nia</strong>.</p>\n\n<p>O encontro deve ser virtual e com um tema bastante complicado, que o Brasil enfrentou mais agressivamente entre 2018 e 2020, as queimadas na Amaz&ocirc;nia. Bolsonaro por sua vez n&atilde;o declarou nada a respeito, mas este poder&aacute; ser seu primeiro encontro com o democrata Joe Biden, ap&oacute;s o presidente americano assumir a Casa Branca.</p>\n\n<p>Bolsonaro e Biden n&atilde;o conseguiram, ainda, se encaixar nos modelos um do outro, o presidente brasileiro ajudou e apoiou Donald Trump durante as elei&ccedil;&otilde;es estadunidenses, tamb&eacute;m muito estremecidas por uma intensa demora na apura&ccedil;&atilde;o dos votos e amea&ccedil;as de Trump a Biden, alegando que houve uma manipula&ccedil;&atilde;o de votos durante as apura&ccedil;&otilde;es.</p>\n\n<p>Para Jair Bolsonaro, <strong>os inc&ecirc;ndios florestais n&atilde;o devem ter interven&ccedil;&atilde;o de outros pa&iacute;ses</strong>, n&atilde;o s&oacute; neste caso, mas para parte dos bens brasileiros.&nbsp;</p>\n', '2021-02-14 16:40:54', 1),
(12, 5, 2, 'BBB: Caio pensa em deixar programa!', 'Caio Afiune conversarÃ¡ com a produÃ§Ã£o do reality e com a psicÃ³loga, alÃ©m de ter opiniÃµes do brother Sarah e Rodolfo, dependendo do que tire de conclusÃ£o ele deve sair do reality.', 'BBB, Caio BBB, TelevisÃ£o', 'bbb-caio-pensa-em-deixar-programa-2021-02-14', '602989e843f9d.jpg', 'imagem', 'Foto / Google.', '<p>Caio Afiune conversar&aacute; com a produ&ccedil;&atilde;o do reality e com a psic&oacute;loga, al&eacute;m de ter opini&otilde;es do brother Sarah e Rodolfo, dependendo do que tire de conclus&atilde;o ele deve sair do reality. Depois do almo&ccedil;o o brother fez suas malas e d&aacute; a entender de que pode sim estar deixando o programa.</p>\n\n<p>&quot;Minha fam&iacute;lia sempre foi o primeiro lugar na minha vida e sempre vai ser, n&atilde;o tem nada que vai mudar isso. Eu n&atilde;o me dou conta de ficar vivendo as coisas boas que isso nos traz sabendo que l&aacute; fora alguma coisa pode estar rolando. Podem me julgar, falar que eu fui frouxo, mas eu n&atilde;o estou nem a&iacute;.&quot;</p>\n\n<p>Tudo come&ccedil;ou quando Caio foi o anjo da semana, e pode ver sua fam&iacute;lia, por&eacute;m ele se demonstrou bastante preocupado com sua esposa, que parecia estranha, afirmando conhecer muito bem ela: &quot;Achei a Wal&eacute;ria estranha, isso &eacute; pira? Eu conhe&ccedil;o ela&quot;.</p>\n\n<p>Novas informa&ccedil;&otilde;es ser&atilde;o divulgadas logo.</p>\n', '2021-02-14 17:36:56', 1),
(13, 5, 2, 'FÃ³rmula 1 na Band, Globo abre mÃ£o apÃ³s 40 anos de parceria', 'A Band assume transmissÃ£o da FÃ³rmula 1 apÃ³s 40 de anos da Globo ser a principal transmissora no paÃ­s que tinha os direitos do esporte automobilÃ­stico.', 'FÃ³rmula 1, Band, Globo TV, TelevisÃ£o', 'formula-1-na-band-globo-abre-mao-apos-40-anos-de-parceria-2021-02-14', '60299e64dfd8a.jpg', 'imagem', 'Foto / Google.', '<p>A Band assume transmiss&atilde;o da F&oacute;rmula 1 ap&oacute;s 40 de anos da Globo ser a principal transmissora no pa&iacute;s que tinha os direitos do esporte automobil&iacute;stico. As corridas come&ccedil;am a ser transmitidas em mar&ccedil;o, al&eacute;m da emissora exibir a categoria mais importante do automobilismo, as provas ser&atilde;o exibidas tamb&eacute;m em um streaming pr&oacute;prio.</p>\n\n<h2>Band e F&oacute;rmula 1</h2>\n\n<p>A Band fez o an&uacute;ncio da compra dos direitos de transmiss&atilde;o da F&oacute;rmula 1 na ter&ccedil;a-feira (11), junto ao acordo, a previs&atilde;o de 23 corridas &eacute; certa e deve passar nos canais abertos, j&aacute; os treinos classificat&oacute;rios devem ser transmitidos pela canal pago BandSports, que tamb&eacute;m exibir&aacute; a F&oacute;rmula 2 e F&oacute;rmula 3.</p>\n\n<p>Reginaldo Leme ser&aacute; o comentarista e Mariana Becker ser&aacute; rep&oacute;rter, o narrador segue indefinido, mas Sergio Mauricio do SporTV &eacute; o nome cotado para o cargo. O primeiro grande pr&ecirc;mio de F&oacute;rmula 1 ser&aacute; disputado no dia 28 de mar&ccedil;o.</p>\n', '2021-02-14 19:04:20', 1),
(14, 2, 1, 'ApÃ³s audiÃªncia, Daniel Silveira segue preso!', 'Daniel Silveira segue preso apÃ³s decisÃ£o do juiz AÃ­rton Vieira, do STF (Supremo Tribunal Federal), nesta quinta-feira (18).', 'Caso Daniel Silveira, STF, CÃ¢mara dos Deputados.', 'apos-audiencia-daniel-silveira-segue-preso-2021-02-18', '602eee0ca52cd.jpg', 'imagem', 'Foto / Google.', '<p>Daniel Silveira segue preso ap&oacute;s decis&atilde;o do juiz A&iacute;rton Vieira, do STF (Supremo Tribunal Federal), nesta quinta-feira (18). Daniel foi preso na ter&ccedil;a-feira por fazer um v&iacute;deo de &oacute;dio e com apologia &agrave; ditadura militar, criticando tamb&eacute;m os integrantes da corte. Daniel deve esperar por uma palavra final da C&acirc;mara, que decidir&aacute; sobre seu futuro.</p>\n\n<p>Caber&aacute; aos deputados decidir se a pris&atilde;o ser&aacute; mantida ou n&atilde;o, que ser&aacute; tomada por maioria absoluta dos parlamentares. Com isto, Silveira ter&aacute; de esperar at&eacute; amanh&atilde; (19), &agrave;s 17 horas (hor&aacute;rio de Bras&iacute;lia), uma defini&ccedil;&atilde;o da C&acirc;mara dos Deputados. Ontem, a corte manteve por unanimidade a pris&atilde;o de Daniel.</p>\n\n<p>Silveira foi preso na noite de ter&ccedil;a-feira (16) por fazer amea&ccedil;as ao ministro do STF, com apologias &agrave; ditadura militar, citando o AI-5, o Ato Institucional que aumentou a repress&atilde;o da ditadura em 1968.</p>\n', '2021-02-18 19:45:32', 1),
(15, 10, 1, 'Bolsonaro: o maior aliado global do coronavÃ­rus', 'O Presidente da RepÃºblica nÃ£o se conserta e insiste em ser contra tudo que Ã© eficaz no combate Ã  pandemia', 'Bolsonaro, PolÃ­tica, Brasil', 'bolsonaro-o-maior-aliado-global-do-coronavirus-2021-02-26', '60398a61e6f0a.jpg', 'imagem', 'Fonte https://diariodonordeste.verdesmares.com.br/politica/bolsonaro-confirma-auxilio-emergencial-por-mais-alguns-meses-durante-visita-ao-ceara-1.3052828', '<p>O Presidente do Brasil, Jair Messias Bolsonaro, &eacute;, provavelmente, <strong>o maior &quot;negacionista&quot; da pandemia que o mundo conhece</strong>.</p>\n\n<p>Ele n&atilde;o se corrige, n&atilde;o se conserta e n&atilde;o evolui.</p>\n\n<p>N&atilde;o pode ver uma oportunidade, um boato ou uma &quot;opini&atilde;o&quot; sem qualquer base cient&iacute;fica que j&aacute; reproduz.</p>\n\n<p>Em seu universo dist&oacute;pico, a discuss&atilde;o sobre a efic&aacute;cia de medidas que visam evitar o cont&aacute;gio do coronav&iacute;rus &eacute; mera quest&atilde;o de &quot;gosto pessoal&quot;, de &quot;opini&atilde;o&quot;, demonstrando ser detentor de uma ignor&acirc;ncia &iacute;mpar e de uma completa falta de no&ccedil;&atilde;o de ao menos entender o que significa e para que serve o posto que ocupa.</p>\n\n<p>Exigir que ele saiba o que &eacute; e para que serve a ci&ecirc;ncia parece ser demais para sua limitad&iacute;ssima capacidade, j&aacute; que&nbsp;ele prefere ter a &quot;opini&atilde;o&quot; que lhe &eacute; mais conveniente.</p>\n\n<p>Com mais de 250 mil mortos por COVID-19 no Brasil, nosso pa&iacute;s tem lamentavelmente batido recorde di&aacute;rio de &oacute;bitos.</p>\n\n<p>E o que Bolsonaro faz?</p>\n\n<p>Resolve tomar vergonha na cara e buscar incansavelmente adquirir em larga escala vacinas necess&aacute;rias para imunizar em massa a popula&ccedil;&atilde;o brasileira?</p>\n\n<p>Obviamente que n&atilde;o, esse problema a&iacute; &eacute; com o &quot;especialista em log&iacute;stica&quot; do Minist&eacute;rio da Sa&uacute;de que confunde Amap&aacute; com Amazonas. Bolsonaro finge que n&atilde;o tem nada a ver com isso.</p>\n\n<p><strong>Se fosse para dar um palpite aleat&oacute;rio</strong>, eu diria que Bolsonaro provavelmente teria recomendando cloroquina/invermectica pela milion&eacute;sima vez, apesar de j&aacute; ser clara a inefic&aacute;cia desses medicamentos e do tal &quot;tratamento precoce&quot;, como atesta a <a href=\"https://www.poder360.com.br/coronavirus/sociedade-de-infectologia-contraindica-tratamento-precoce-para-covid-19/\" target=\"_blank\">Sociedade Brasileira de Infectologia</a>, a&nbsp;<a href=\"https://amb.org.br/noticias/amb/nota-relevante-orientacao-da-associacao-medica-brasileira-e-da-sociedade-brasileira-de-infectologia-sobre-vacinacao-e-tratamento-farmacologico-preventivo/\" target=\"_blank\">Associa&ccedil;&atilde;o M&eacute;dica Brasileira</a>&nbsp;e pela <a href=\"https://www.istoedinheiro.com.br/em-votos-anvisa-refuta-existencia-de-tratamento-precoce/\" target=\"_blank\">Anvisa</a>.</p>\n\n<p>Mas dessa vez a baboseira dita foi outra e foi em s&eacute;rie.</p>\n\n<p>Na quinta-feira (25/02), dia em que o Brasil bateu o recorde di&aacute;rio de mortes por Covid-19, Bolsonaro fez a sua tradicional&nbsp;<em>live </em>e&nbsp;<a href=\"https://noticias.uol.com.br/saude/ultimas-noticias/redacao/2021/02/25/no-dia-mais-letal-da-covid-19-bolsonaro-questiona-mascara-e-isolamento.htm\" target=\"_blank\">focou suas falas na cr&iacute;tica ao&nbsp;uso e &agrave;&nbsp;efic&aacute;cia das&nbsp;m&aacute;scaras</a>.</p>\n\n<p>Vacinas? N&atilde;o tenho nada a ver com isso, talkey?</p>\n\n<p>Para complementar, na sexta-feira (26/02), em visita ao Cear&aacute; - que est&aacute; no auge da segunda onda de cont&aacute;gio de Covid-19 -, Bolsonaro aglomerou, n&atilde;o usou m&aacute;scara&nbsp;e mandou uma &quot;lacra&ccedil;&atilde;o&quot; que deixa a popula&ccedil;&atilde;o com pensamento cr&iacute;tico descrente no futuro da humanidade, mas que faz os bolsonaristas delirarem: &quot;<a href=\"https://www.cnnbrasil.com.br/politica/2021/02/26/em-evento-no-ceara-bolsonaro-volta-a-defender-fim-das-medidas-restritivas\" target=\"_blank\">O povo n&atilde;o consegue mais ficar dentro de casa. O povo quer trabalhar. Esses que fecham tudo e fecham empregos est&atilde;o na contram&atilde;o daquilo que seu povo quer</a>&quot;.</p>\n\n<p>A fala lembrou bastante o discurso mais bizarro j&aacute; dado por Bolsonaro desde que a pandemia chegou ao Brasil, em que ele defendeu, em mar&ccedil;o/2020, a <a href=\"https://g1.globo.com/politica/noticia/2020/03/24/bolsonaro-pede-na-tv-volta-a-normalidade-e-fim-do-confinamento-em-massa.ghtml\" target=\"_blank\">&quot;volta &agrave; normalidade&quot; quando est&aacute;vamos come&ccedil;ando a primeira onda do coronav&iacute;rus</a>.</p>\n\n<p>Bolsonaro, como bom negacionista, fala como se n&atilde;o existisse a pandemia.</p>\n\n<p><strong>Defende o fim de qualquer medida de distanciamento social e, no lugar, n&atilde;o prop&otilde;e&nbsp;absolutamente nada</strong>.</p>\n\n<p>&Eacute; &oacute;bvio que as medidas de distanciamento prejudicam as rela&ccedil;&otilde;es econ&ocirc;micas e sociais e &eacute; &oacute;bvio que o ideal era efetivamente podermos voltar &agrave; normalidade.</p>\n\n<p>Mas essas provid&ecirc;ncias excepcionais s&atilde;o cientificamente eficazes (vide estudos que podem ser acessados <a href=\"https://www.uerj.br/noticia/11078/\" target=\"_blank\">AQUI</a>, <a href=\"https://www.scielo.br/scielo.php?pid=S0102-311X2020001005006&amp;script=sci_arttext\" target=\"_blank\">AQUI</a> e&nbsp;<a href=\"https://www.nature.com/articles/s41562-020-01009-0\" target=\"_blank\">AQUI</a>) e se justificam diante do quase exaurimento do nosso sistema de sa&uacute;de.</p>\n\n<p>N&atilde;o adianta nada pregar o retorno a uma normalidade que n&atilde;o existe.&nbsp;Ou ser&aacute; que Bolsonaro acha normal estarmos h&aacute; mais de 30 dias com m&eacute;dia m&oacute;vel superior a mil mortes di&aacute;rias por coronav&iacute;rus?</p>\n\n<p><strong>A incompet&ecirc;ncia do governo federal em adquirir vacinas na quantidade necess&aacute;ria para superarmos com a maior brevidade essa infeliz pandemia viabilizou a chegada da segunda onda de contamina&ccedil;&otilde;es e mortes. Por outro lado, a&nbsp;conduta pessoal de Bolsonaro de minimizar a gravidade da pandemia, vender a ideia de que h&aacute; cura para a doen&ccedil;a (e n&atilde;o h&aacute;), n&atilde;o usar m&aacute;scaras e aglomerar incentiva seus seguidores fan&aacute;ticos a reproduzirem as mesmas posturas e, posteriormente, acabar contaminando inocentes que nada tem a ver com essa ideologia t&atilde;o hostil &agrave; ci&ecirc;ncia e ao racioc&iacute;nio.</strong></p>\n\n<p>Naturalmente, isso n&atilde;o quer dizer que governos estaduais ou municipais n&atilde;o tenham falhado na gest&atilde;o dessa crise. Mas ficar reproduzindo discursos bolsonaristas gen&eacute;ricos que culpam uma corrup&ccedil;&atilde;o generalizada dos governos locais&nbsp;&eacute; de uma grande irresponsabilidade e, acima de tudo, falta de no&ccedil;&atilde;o da realidade.&nbsp;</p>\n\n<p>Ah, e se voc&ecirc; acha que o Bolsonaro n&atilde;o tem responsabilidade nenhuma pela pandemia porque&nbsp;o STF &quot;proibiu&quot; ele de agir&nbsp;&eacute; preciso se informar melhor (ver resumex <a href=\"https://www.nenoticias.com.br/wp-content/uploads/2021/01/stf-governo-covid-materia.jpg\" target=\"_blank\">AQUI</a>). Al&eacute;m disso, se&nbsp;a gest&atilde;o da pandemia tivesse ficado a cargo integralmente do governo federal, o que teria mudado?&nbsp;<strong>Ter&iacute;amos ainda mais mortes, j&aacute; que nenhuma medida de isolamento social teria sido adotada, uma vez que o Bolsonaro &eacute; contra todas elas</strong>.</p>\n\n<p>Cercado de apoiadores fan&aacute;ticos ou oportunistas, Bolsonaro &eacute; cegado pelo pr&oacute;prio c&acirc;ncer que criou: o bolsonarismo (uma mistura de ideias aleat&oacute;rias que defende&nbsp;armas, fam&iacute;lia Bolsonaro, cloroquina, coronav&iacute;rus, ultraliberalismo econ&ocirc;mico, militarismo, conservadorismo moral, terra plana e&nbsp;&oacute;dio &agrave; ci&ecirc;ncia). O homem m&eacute;dio que nada compreende de pol&iacute;tica agora se v&ecirc; habilitado a opinar sobre temas sobre os quais n&atilde;o tem nenhum dom&iacute;nio e &eacute; capaz de defender at&eacute; a morte a opini&atilde;o que ele teve depois de ver uma imagem em um grupo de Whatsapp.</p>\n\n<p>Tudo isso faz do negacionista Bolsonaro o maior aliado global do coronav&iacute;rus. E quem paga o pre&ccedil;o disso &eacute; o povo brasileiro.</p>\n', '2021-02-26 20:55:13', 1),
(16, 2, 1, 'MourÃ£o estÃ¡ insatisfeito com vacinaÃ§Ã£o contra o CoronavÃ­rus', 'Vice-presidente da repÃºblica ä¸€ Hamilton MourÃ£o ä¸€ Falou nesta terÃ§a-feira (2) que existem fatores importantes a respeito da vacinaÃ§Ã£o contra a covid-19: â€NÃ£o adianta impor medidasâ€, em relaÃ§Ã£o a Carta da Conass, que sugeriu medidas a serem tomadas durante o tratamento da pandemia no Brasil.', 'MourÃ£o, PolÃ­tica, Bolsonaro, COvid-19, SaÃºde.', 'mourao-esta-insatisfeito-com-vacinacao-contra-o-coronavirus-2021-03-02', '603ee07182548.jpg', 'imagem', 'Hamilton MourÃ£o, vice-presidente do Brasil, Foto / Google.', '<p>Vice-presidente da rep&uacute;blica ä¸€ Hamilton Mour&atilde;o ä¸€ Falou nesta ter&ccedil;a-feira <strong>(2)</strong> que existem fatores importantes a respeito da vacina&ccedil;&atilde;o contra a covid-19: &rdquo;N&atilde;o adianta impor medidas&rdquo;, em rela&ccedil;&atilde;o a <a href=\"https://www.conass.org.br/carta-dos-secretarios-estaduais-de-saude-a-nacao-brasileira/\">Carta da Conass</a>, que sugeriu medidas a serem tomadas durante o tratamento da pandemia no Brasil.</p>\n\n<ul>\n	<li><a href=\"https://www.politizeesocialize.com/home/noticia/bolsonaro-o-maior-aliado-global-do-coronavirus-2021-02-26\">Leia aqui a opini&atilde;o de Charles Bruxel sobre Bolsonaro de m&atilde;os dadas com a Covid-19.</a></li>\n</ul>\n\n<p>Mour&atilde;o n&atilde;o gostou da carta escrita pelo <strong>Conselho Nacional de Secret&aacute;rios de Sa&uacute;de</strong>, que sugeria mudan&ccedil;as imediatas a respeito do colapso das redes p&uacute;blicas e privadas de sa&uacute;de. Uma dessas medidas foi justamente um toque de recolher nacional das 20 horas da noite at&eacute; &agrave;s 6 horas da manh&atilde;.</p>\n\n<p>&ldquo;Cada popula&ccedil;&atilde;o tem sua caracter&iacute;stica, se voc&ecirc; analisar, o pa&iacute;s s&atilde;o cinco pa&iacute;ses em um s&oacute;, impor algo? N&atilde;o somos uma ditadura, se fosse uma seria muito f&aacute;cil, saia dando bangornada em todo mundo&rdquo;, disse Hamilton Mour&atilde;o em entrevista. Al&eacute;m disso, Mour&atilde;o segue afirmando que <a href=\"https://valorinveste.globo.com/mercados/brasil-e-politica/noticia/2021/03/02/vacinacao-em-massa-e-a-coisa-mais-importante-agora-diz-guedes.ghtml\">a vacina&ccedil;&atilde;o precisa ser em &ldquo;rebanho&rdquo;</a>.</p>\n\n<p>&ldquo;Acho que tem que haver uma campanha em todos os n&iacute;veis de conscientiza&ccedil;&atilde;o da popula&ccedil;&atilde;o. &Eacute; por a&iacute;, conseguir acelerar as vacinas. Acelerando as vacinas a coisa anda de forma boa&rdquo;, afirmou Mour&atilde;o.</p>\n', '2021-03-02 22:03:45', 1),
(17, 2, 1, 'ComplÃ´ de mandantes Ã© hipÃ³tese no assassinato de Marielle Franco', 'A possÃ­vel tese Ã© estudo do Departamento de HomicÃ­dios do Rio de Janeiro, segundo ela o assassinato da vereadora Marielle Franco e de seu motorista, Anderson Gomes, teria sido um grande complÃ´ que envolvia mandantes e intermiadiÃ¡rios.', 'Marielle Franco, PolÃ­tica, Anderson Gomes, Caso Marielle Franco', 'complo-de-mandantes-e-hipotese-no-assassinato-de-marielle-franco-2021-03-06', '604410a880242.jpg', 'imagem', 'Marielle Franco / Foto MÃ­dia Ninja', '<p>A poss&iacute;vel tese &eacute; estudo do <strong>Departamento de Homic&iacute;dios do Rio de Janeiro</strong>, segundo ela o assassinato da vereadora <strong>Marielle Franco</strong> e de seu motorista, <strong>Anderson Gomes</strong>, teria sido um grande compl&ocirc; que envolvia mandantes e intermedi&aacute;rios. Os assassinatos ocorreram no dia 14 de mar&ccedil;o de 2018 e foi ponto de muitas manifesta&ccedil;&otilde;es culturais e art&iacute;sticas no Brasil.&nbsp;</p>\n\n<p>O crime que j&aacute; vai completar tr&ecirc;s anos, ainda segue aberto e &eacute; classificado como um dos <strong>crimes mais complexos do pa&iacute;s</strong>, tem a hip&oacute;tese levada &agrave; pauta por motivos relacionados a uma vingan&ccedil;a contra o <strong>PSOL</strong> (Partido Socialismo e Liberdade). Marcelo Freixo, amigo de Marielle Franco, disse que seu assassinato foi fruto de uma &ldquo;vingan&ccedil;a que chegou sem amea&ccedil;as&rdquo;.</p>\n\n<p>&mdash; <strong>Marielle foi fruto de uma vingan&ccedil;a que chegou sem amea&ccedil;a</strong>. Uma vingan&ccedil;a brutal e inaceit&aacute;vel, uma interrup&ccedil;&atilde;o da democracia. S&oacute; que n&atilde;o sabiam quem era a Marielle e o mundo est&aacute; respondendo &mdash; afirmou Freixo.</p>\n\n<ul>\n	<li><a href=\"https://extra.globo.com/casos-de-policia/marielle-foi-fruto-de-uma-vinganca-brutal-que-chegou-sem-ameaca-diz-freixo-22508279.html\">Leia mais sobre a entrevista de Marcelo Freixo aqui.</a></li>\n</ul>\n\n<p>A pol&iacute;cia declara que o inqu&eacute;rito est&aacute; em est&aacute;gio avan&ccedil;ado, mas ainda n&atilde;o podem dar uma data precisa sobre quando os trabalhos se encerram. Os r&eacute;us at&eacute; o momento do caso s&atilde;o: <strong>Ronnie Lessa</strong>, sargento reformado da PM, conhecido por ser um ex&iacute;mio atirador e muito frio; e <strong>&Eacute;lcio Queiroz</strong>, ex-PM.&nbsp;</p>\n\n<p>Lessa foi incorporado em 1992 &agrave; Pol&iacute;cia Militar do Rio e at&eacute; o caso em espec&iacute;fico era Ficha Limpa, mas j&aacute; &eacute; sabido pelo Minist&eacute;rio P&uacute;blico que <strong>Ronnie era dedo no gatilho e possu&iacute;a muita frieza</strong> na realiza&ccedil;&atilde;o dos seus servi&ccedil;os prestados. &Eacute;lcio por outro lado, que foi acusado de dirigir o Cobalt prata usado na emboscada, j&aacute; tem problemas anteriores na justi&ccedil;a.&nbsp;</p>\n\n<p>&Eacute;lcio foi expulso da Pol&iacute;cia Militar por ter sido preso na chamada Opera&ccedil;&atilde;o Guilhotina. <strong>&Eacute;lcio foi levantado como suspeito por sua antiga profiss&atilde;o de escoltador de cargas</strong>.</p>\n\n<ul>\n	<li><a href=\"https://oglobo.globo.com/rio/pm-ronnie-lessa-preso-acusado-de-matar-marielle-conhecido-por-ser-eximio-atirador-por-sua-frieza-23514910\">Leia mais sobre &Eacute;lcio e Ronnie aqui</a></li>\n</ul>\n\n<p>Esta not&iacute;cia possui fortes inspira&ccedil;&otilde;es na mat&eacute;ria do site Veja. Leia seguindo <a href=\"https://veja.abril.com.br/politica/policia-trabalha-com-tese-de-complo-de-mandantes-na-morte-de-marielle/\">este link</a>.</p>\n', '2021-03-06 20:30:48', 1),
(18, 2, 1, 'AnulaÃ§Ã£o de condenaÃ§Ãµes de Lula pÃµe ex-presidente na briga pela presidÃªncia em 2022', 'Edson Fachin, na Ãºltima segunda-feira (8), tomou a decisÃ£o de devolver os direitos polÃ­ticos de Lula, condenado nos casos do sÃ­tio de Atibaia, no caso TrÃ­plex e Instituto Lula. Para Fachin, a 13a Vara Federal Criminal de Curitiba nÃ£o tem competÃªncia para julgar os processos do ex-presidente Lula, decretando a anulaÃ§Ã£o das suas condenaÃ§Ãµes.', 'Edson Fachin, STF, Lula, Bolsonaro, SÃ©rgio Moro, eleiÃ§Ãµes 2022.', 'anulacoes-de-condenacoes-de-lula-poe-ex-presidente-na-briga-pela-presidencia-em-2022-2021-03-13', '604cdd010168b.jpg', 'imagem', 'Luiz InÃ¡cio Lula da SIlva. Foto / Google. Sujeita a Copyright.', '<p><strong>Edson Fachin</strong>, na &uacute;ltima <strong>segunda-feira (8)</strong>, tomou a decis&atilde;o de devolver os direitos pol&iacute;ticos de <strong>Lula</strong>, condenado nos casos do s&iacute;tio de Atibaia, no caso Tr&iacute;plex e Instituto Lula. Para Fachin, a 13a Vara Federal Criminal de Curitiba n&atilde;o tem compet&ecirc;ncia para julgar os processos do ex-presidente Lula, decretando a anula&ccedil;&atilde;o das suas condena&ccedil;&otilde;es. Com isso, Lula pode pintar como candidato na disputa pela presid&ecirc;ncia do pa&iacute;s em 2022.</p>\n\n<p>Fachin refor&ccedil;ou a decis&atilde;o frente ao Plen&aacute;rio da Corte nesta <strong>sexta-feira (12)</strong> de anular as condena&ccedil;&otilde;es do ex-presidente Luiz In&aacute;cio Lula da Silva (presidente do Brasil em duas ocasi&otilde;es e envolvido em v&aacute;rios processos criminais que remetem ao tempo que o mesmo era presidente) e ressaltou a incapacidade da 13&ordf; Vara Federal Criminal do Paran&aacute; de tratar dos processos de Lula.</p>\n\n<p>&ldquo;A verdade &eacute; que, ao longo dos &uacute;ltimos anos, a Segunda Turma avan&ccedil;ou na jurisprud&ecirc;ncia que j&aacute; havia sido estabelecida pelo plen&aacute;rio e ampliou a redu&ccedil;&atilde;o da compet&ecirc;ncia n&atilde;o s&oacute; da 13&ordf; Vara, como tamb&eacute;m da Justi&ccedil;a Federal nos delitos em que, no entender da maioria, poderia haver conex&atilde;o com a Justi&ccedil;a Eleitoral&rdquo; ã…¡ Disse Edson Fachin em <strong>entrevista ao UOL.</strong></p>\n\n<ul>\n	<li><a href=\"https://noticias.uol.com.br/politica/ultimas-noticias/2021/03/12/nao-posso-negar-a-lula-tratamento-diferente-de-outros-politicos-diz-fachin.htm\">Leia mais sobre a entrevista de Fachin ao UOL.</a></li>\n</ul>\n\n<h2>Ataques a Fachin</h2>\n\n<p>Ap&oacute;s tomar a decis&atilde;o de anular as condena&ccedil;&otilde;es do ex-presidente e restaurar seus direitos pol&iacute;ticos, <strong>Edson Fachin ã…¡ ministro do Supremo ã…¡ foi alvo de manifesta&ccedil;&otilde;es em frente a sua casa</strong>, no Jardim Social, bairro nobre de Curitiba. Fachin n&atilde;o sofreu qualquer ataque f&iacute;sico e est&aacute; em seguran&ccedil;a refor&ccedil;ada pelo STF (Supremo Tribunal Federal).</p>\n\n<p>&quot;A Suprema Corte ressalta que &eacute; inaceit&aacute;vel qualquer ato de viol&ecirc;ncia por contrariedade a decis&otilde;es judiciais. A Constitui&ccedil;&atilde;o e as leis asseguram a independ&ecirc;ncia de todos os magistrados. E, no Estado Democr&aacute;tico de Direito, o questionamento &agrave;s decis&otilde;es devem se dar nas vias recursais pr&oacute;prias&rdquo; ã…¡ Declara&ccedil;&atilde;o do STF sobre ataques a Fachin.</p>\n\n<p>Alguns pol&iacute;ticos e amigos mostraram solidariedade ap&oacute;s ataques a Fachin nas redes sociais, um deles foi S&eacute;rgio Moro, que disse o seguinte em sua conta oficial do Twitter: &quot;Rep&uacute;dio &agrave;s ofensas e ataques pessoais ao Ministro Edson Fachin do STF, magistrado t&eacute;cnico e com atua&ccedil;&atilde;o destacada na Opera&ccedil;&atilde;o Lava Jato. Qualquer discord&acirc;ncia quanto &agrave; decis&atilde;o deve ser objeto de recurso, n&atilde;o de persegui&ccedil;&atilde;o&rdquo;.</p>\n\n<p>O STF afirmou que a medida de refor&ccedil;ar a seguran&ccedil;a foi motivada pelos poss&iacute;veis questionamentos quanto &agrave;s decis&otilde;es recentes do ministro do Supremo, a respeito das anula&ccedil;&otilde;es e decis&otilde;es sobre os processos do ex-presidente Lula.</p>\n\n<ul>\n	<li><a href=\"https://diariodopoder.com.br/brasil-e-regioes/supremo-aumenta-seguranca-de-fachin-apos-tentativas-de-intimidacao\">Leia mais sobre os ataques sofridos por Fachin</a></li>\n</ul>\n\n<h2>Lula na corrida presidencial</h2>\n\n<p>Com todas as decis&otilde;es recentes de Fachin, <strong>Lula tem um caminho limpo para disputar as elei&ccedil;&otilde;es presidenciais em 2022 </strong>e j&aacute; aparece em dados como poss&iacute;vel candidato a bater de frente com Bolsonaro, segundo pesquisas da <strong>consultoria Atlas,</strong> se as elei&ccedil;&otilde;es fossem hoje, Lula e Bolsonaro iriam para decidir no segundo turno a faixa de presidente do pa&iacute;s.</p>\n\n<p><strong>Bolsonaro</strong> aparece com 32,7% das inten&ccedil;&otilde;es de voto, contra 27,4% de Lula, formando o primeiro pelot&atilde;o isolado â€• o presidente oscilou para baixo e Lula subiu cinco pontos em rela&ccedil;&atilde;o &agrave; pesquisa de janeiro. S&eacute;rgio Moro tamb&eacute;m aparece com inten&ccedil;&atilde;o de 9,7% de votos, mesmo o juiz ainda n&atilde;o decidindo sobre seu futuro como pol&iacute;tico.</p>\n\n<p>Ademais, Bolsonaro tamb&eacute;m estaria em apuros no segundo turno, podendo, neste momento, perder para o ex-presidente Lula, que aparece com 44,9% contra 36,9% de Bolsonaro, 8 pontos de diferen&ccedil;a â€•a disputa com <strong>Haddad</strong> seria mais apertada (43% a 39,4%), mas o petista tamb&eacute;m ganharia.</p>\n\n<p>&ldquo;Com tantos candidatos vencendo Bolsonaro no segundo turno, diria que nunca foi mais prov&aacute;vel do que neste momento que o presidente perdesse em 2022. Mas a vida d&aacute; voltas. O Brasil pode sair da pandemia neste ano. Em 2022, o Governo pode fazer assist&ecirc;ncia social e Bolsonaro ainda pode se recuperar&rdquo;, afirma <strong>Andrei Roman, CEO da Atlas.</strong></p>\n\n<ul>\n	<li><a href=\"https://brasil.elpais.com/brasil/2021-03-11/lula-ciro-e-mandetta-bateriam-bolsonaro-no-segundo-turno-em-2022-mostra-pesquisa-atlas.html\">Leia mais sobre estes dados fornecidos pela Atlas e trabalhados na mat&eacute;ria do site El Pais.</a></li>\n</ul>\n\n<p>Cabe nos pr&oacute;ximos dias saber se a decis&atilde;o ser&aacute; continuada ou n&atilde;o, j&aacute; que a PGR (Procuradoria Geral da Rep&uacute;blica) quer que o plen&aacute;rio do Supremo reveja a decis&atilde;o do ministro Edson Fachin.</p>\n\n<ul>\n	<li><a href=\"https://g1.globo.com/politica/noticia/2021/03/12/pgr-recorre-de-decisao-que-anulou-condenacoes-do-ex-presidente-lula-na-lava-jato.ghtml\">Leia mais sobre o assunto</a></li>\n</ul>\n', '2021-03-13 12:40:49', 1),
(19, 2, 1, 'Ciro Gomes estÃ¡ sendo investigado por PF apÃ³s criticar Bolsonaro', 'InquÃ©rito foi motivado pelo ministro da justiÃ§a depois de Ciro Gomes, adversÃ¡rio de Bolsonaro nas eleiÃ§Ãµes de 2018, criticar o presidente chamando-o de â€œladrÃ£oâ€.', 'Ciro Gomes, Bolsonaro, AndrÃ© MendonÃ§a, polÃ­tica', 'ciro-gomes-esta-sendo-investigado-por-pf-apos-criticar-bolsonaro-2021-03-20', '605642b21b9db.mp4', 'video', 'VÃ­deo removido do canal oficial de Ciro Gomes.', '<p>Inqu&eacute;rito foi motivado pelo ministro da justi&ccedil;a depois de <strong>Ciro Gomes</strong>, advers&aacute;rio de <strong>Bolsonaro</strong> nas elei&ccedil;&otilde;es de 2018, criticar o presidente chamando-o de &ldquo;ladr&atilde;o&rdquo;.</p>\n\n<p>A PF diz que n&atilde;o ir&aacute; comentar sobre o caso conceituado como crime &agrave; honra de Jair Bolsonaro.</p>\n\n<p>O crime &eacute; tipificado no artigo 145 do c&oacute;digo penal, segundo o pr&oacute;prio artigo ele s&oacute; deve ser aberto pelo pr&oacute;prio ministro da justi&ccedil;a. Na ocasi&atilde;o, foi o ministro <strong>Andr&eacute; Mendon&ccedil;a</strong> quem pediu para que fosse aberto o inqu&eacute;rito sobre o crime supostamente cometido por Ciro Gomes.</p>\n\n<p>Ciro Gomes disse possivelmente isso em uma entrevista dada pelo mesmo em novembro do ano passado &agrave; <strong>r&aacute;dio Tupinamb&aacute; de Sobral no Cear&aacute;</strong>. Ciro chamou Bolsonaro de ladr&atilde;o e que n&atilde;o tinha capacidade de administrar a economia do pa&iacute;s. Lembrou tamb&eacute;m das rachadinhas e como o ex-juiz S&eacute;rgio Moro foi omisso na ocasi&atilde;o.</p>\n\n<ul>\n	<li><a href=\"https://www.youtube.com/watch?v=T6rMtIvILvY\">Veja o v&iacute;deo da entrevista aqui</a>.</li>\n</ul>\n\n<p>O Ministro Andr&eacute; Mendon&ccedil;a intermediou o pedido &agrave; <strong>Pol&iacute;cia Federal</strong> e o pr&oacute;prio presidente assinou o documento enviado ao ministro, j&aacute; que &eacute; previsto pela lei que pedidos contra crimes a honra do presidente cabe ao ministro da justi&ccedil;a.</p>\n\n<ul>\n	<li><a href=\"https://g1.globo.com/politica/noticia/2021/03/20/pf-abre-inquerito-para-investigar-ciro-gomes-por-crime-contra-a-honra-de-bolsonaro.ghtml\">Mat&eacute;ria baseada fortemente na not&iacute;cia do G1.</a></li>\n</ul>\n', '2021-03-20 15:45:06', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opinioes`
--

CREATE TABLE `opinioes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `tags` varchar(450) NOT NULL,
  `url` varchar(500) NOT NULL,
  `arquivo` varchar(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `legenda` text NOT NULL,
  `postagem` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `opinioes`
--

INSERT INTO `opinioes` (`id`, `id_usuario`, `categoria_id`, `titulo`, `descricao`, `tags`, `url`, `arquivo`, `tipo`, `legenda`, `postagem`, `data`, `status`) VALUES
(1, 9, 3, 'RogÃ©rio Ceni vs Domenec: Quem Ã© pior?', 'RogÃ©rio Ceni Ã© o segundo tÃ©cnico que fica na sombra de Jorge Jesus, mas comparado a Domenec, ele Ã© ainda pior.', 'RogÃ©rio Ceni, Flamengo, BrasileirÃ£o', 'rogerio-ceni-vs-domenec-quem-e-pior-2021-01-29', '601461da089b2.jpg', 'imagem', 'Foto / Google.', '<p>Rog&eacute;rio Ceni &eacute; o segundo t&eacute;cnico que fica na sombra de Jorge Jesus, mas comparado a Domenec, ele &eacute; ainda pior. Para isso trouxemos um pequeno levantamento de Domenec Torrent e Rog&eacute;rio Ceni, vale lembrar que Ceni ainda comanda o clube do rio, logo, poder&aacute; mudar suas estat&iacute;sticas ao decorrer desta temporada.</p>\n\n<h2>Domenec Torrent (2020-2020)</h2>\n\n<p>Come&ccedil;amos pelo treinador espanhol Domenec Torrent, que n&atilde;o teve uma passagem longa pelo ninho do Urubu, e nem &eacute; bem lembrado por ela, o treinador foi o primeiro t&eacute;cnico a assumir o time do Flamengo ap&oacute;s a sa&iacute;da de Jorge Jesus.</p>\n\n<p>Destaques para o time ofensivo de Torrent, com Pedro matador e Everton Ribeiro liso, o Flamengo de Domenec no ataque parecia ser o time mais letal do campeonato brasileiro, mas mesmo com show de bola em muitos jogos a defesa deixava a desejar, foi o time que mais sofreu gols, junto com o S&atilde;o Paulo, e n&atilde;o conseguiu alcan&ccedil;ar a primeira posi&ccedil;&atilde;o do campeonato.</p>\n\n<p>Mas Torrent com certeza vai ser lembrado pelas goleadas sofridas, sim, sofreu muitas! A primeira, para o Independiente Del Valle, pela fase de grupos da Libertadores, o Flamengo foi massacrado jogando na altitude, e rendeu bons memes. Mas apanhou ainda mais, pelo Brasileiro perdeu duas vezes de forma desastrosa, uma contra o S&atilde;o Paulo, por 4 a 1, e outra para o galo, por 4 a 0.</p>\n\n<p>Mas mesmo com os resultados quase inconsistentes, o Flamengo voltou a se destacar, e chegou a uma fase de 12 vit&oacute;rias seguidas, se classificou para o mata-mata da Libertadores, estava vivo no brasileiro, e na copa do brasil estava nas quartas de final.</p>\n\n<h2>Rog&eacute;rio Ceni (2020-atualmente)</h2>\n\n<p>Rog&eacute;rio Ceni foi a resposta da diretoria do Flamengo ap&oacute;s a demiss&atilde;o do t&eacute;cnico espanhol, Domenec, aquela altura Rog&eacute;rio era o nome mais falado pela imprensa, chegando a ser tratado como o melhor t&eacute;cnico brasileiro, e segundo ele mesmo, quando o Flamengo chama &eacute; quase imposs&iacute;vel de recusar, o treinador abandona seus projetos no Fortaleza e chega ao ninho do urubu.</p>\n\n<p>E chegou bem, treinando a equipe um dia antes contra o jogo v&aacute;lido pelas quartas de final da Copa do Brasil contra o seu ex-time, quando era jogador, e &iacute;dolo, S&atilde;o Paulo, o Flamengo perdeu por 2 a 1 com ajuda bizarra de Hugo Souza mesmo o Flamengo tendo sido o melhor time em campo.</p>\n\n<p>Mas que come&ccedil;o duro, dessa derrota at&eacute; agora, Rog&eacute;rio acumula elimina&ccedil;&otilde;es, o t&eacute;cnico saiu da Copa do Brasil de modo horr&iacute;vel, perdendo no Morumbi por 3 a 0, e da Libertadores nos p&ecirc;naltis para o Racing, e o time de Rog&eacute;rio ainda briga por um t&iacute;tulo de brasileiro na reta final do Brasileir&atilde;o 2020/2021.</p>\n\n<p>Destaques ao time do Rog&eacute;rio &eacute; a defesa mais organizada e menos vazada do que a de Torrent, e o meio campo produtivo e uma queda de rendimento no ataque, com gols perdidos de formas absurdas pelos atacantes do Flamengo.&nbsp;</p>\n\n<p>Rog&eacute;rio luta pelo t&iacute;tulo brasileiro, que ainda est&aacute; vivo ap&oacute;s golear o Gr&ecirc;mio jogando fora por 4 a 2.</p>\n', '2021-01-29 16:28:26', 1),
(2, 9, 3, 'SÃ£o Paulo, devolva o Juanfran', 'Jogador do SÃ£o Paulo protagoniza lances bizarros contra o Coritiba e soma sÃ©rie de erros no brasileiro.', 'SÃ£o Paulo, BrasileirÃ£o, Juanfran', 'sao-paulo-devolva-o-juanfran-2021-01-29', '60146317a5eb4.mp4', 'video', 'Video / Youtube.', '<p>Jogador do S&atilde;o Paulo protagoniza lances bizarros contra o Coritiba e soma s&eacute;rie de erros no brasileiro.</p>\n\n<p>Parecia que o S&atilde;o Paulo ia se resolver com Juanfran na defesa, vixi! Passou foi longe, o jogador at&eacute; tenta, se esfor&ccedil;a para correr, mas no fim d&aacute; na mesma, morto em campo, errando tudo que &eacute; lance, sem consist&ecirc;ncia, os cofres do S&atilde;o Paulo choram ap&oacute;s perder tanto dinheiro em um jogador mediano como Juanfran vem se mostrando ser.</p>\n\n<p>Veja lances acima.</p>\n', '2021-01-29 16:33:43', 1),
(4, 9, 3, 'DemissÃ£o de Diniz Ã© mais problema que soluÃ§Ã£o', 'O treinador dÃ¡ adeus ao SÃ£o Paulo Futebol Clube depois de quase dois anos no cargo e no zero de sempre do SPFC, mas demissÃ£o de Diniz mostra ainda mais que SÃ£o Paulo Ã© um time quebrado e que tem muitos problemas para solucionar.', 'SÃ£o Paulo, BrasileirÃ£o, Diniz', 'demissao-de-diniz-e-mais-problema-que-solucao-2021-02-02', '601975772a329.jpg', 'imagem', 'Foto / Google.', '<p>O treinador d&aacute; adeus ao S&atilde;o Paulo Futebol Clube depois de quase dois anos no cargo e no zero de sempre do SPFC, mas demiss&atilde;o de Diniz mostra ainda mais que S&atilde;o Paulo &eacute; um time quebrado e que tem muitos problemas para solucionar, muito mais que apenas demitir um treinador com resultados inconsistentes.&nbsp;</p>\n\n<p>Ontem (1) o SPFC comunicou a demiss&atilde;o do treinador Diniz, que vinha tendo resultados horripilantes no cargo de t&eacute;cnico no clube, Diniz chegou a uma s&eacute;rie de derrotas e a press&atilde;o foi gigante, resultado na sua sa&iacute;da mais do que tarde do clube (deveria ter sido demitido ainda no paulist&atilde;o).</p>\n\n<h2>E quem disse que isso ajuda em alguma coisa?&nbsp;</h2>\n\n<p>Uma coisa &eacute; certa, sua demiss&atilde;o n&atilde;o deve ser comemorada, muito menos aplaudida, ele foi demitido tarde, teve resultados ruins, mas isso s&oacute; mostra o desespero do S&atilde;o Paulo em buscar resultados r&aacute;pidos com &ldquo;solu&ccedil;&otilde;es pequenas&rdquo;, certo, o treinador j&aacute; foi, o Ra&iacute; tamb&eacute;m se mandou, como proceder? Falta mandar alguns embora sim.</p>\n\n<p>Sim, os jogadores, n&atilde;o podemos mandar a culpa apenas para as costas de Diniz, j&aacute; que meia d&uacute;zia de jogadores do time titular n&atilde;o jogam como deveriam, n&eacute; Sr. Daniel Alvez? Pregui&ccedil;osos, n&atilde;o correm, sim, demitir Diniz foi um passo, Ra&iacute; tamb&eacute;m, mas e os perebas que continuam jogando todo dia?</p>\n\n<p>Casares, voc&ecirc; tem coragem de mandar 6 jogadores titulares embora? Tem coragem de subir mais da base? Esse &eacute; o momento de mostrar como vai ser seu tempo na presid&ecirc;ncia resumida em poucas semanas.</p>\n', '2021-02-02 12:53:27', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `social` varchar(550) DEFAULT NULL,
  `biografia` varchar(150) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `permissoes` varchar(550) DEFAULT NULL,
  `nivel` varchar(250) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `foto`, `social`, `biografia`, `email`, `senha`, `permissoes`, `nivel`, `categoria_id`, `status`) VALUES
(1, 'Victor Miguel ', 'victor.jpg', '{\"instagram\":\"\",\"facebook\":\"\",\"youtube\":\"\",\"linkedin\":\"\"}', 'O autista nÃ£o Ã© de um mundo a parte, e sim deste.', 'vmsa03@gmail.com', '963f30b9950bf6599e751e87caf65874', 'ADD,EDIT', 'adm', 1, 1),
(2, 'PolÃ­tica', '6012d98038035.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'O Brasil se desenvolve a noite, quando os polÃ­ticos estÃ£o dormindo.', 'suporte@politizeesocialize.com', '6d765184685ad1ca3849dd920eff3a61', 'ADD,EDIT', 'escritor', 1, 1),
(3, 'Economia', '6011fe2810b93.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'Com trabalho, inteligÃªncia e economia sÃ³ Ã© pobre quem nÃ£o quer ser rico.', 'suporte@politizeesocialize.com', '9e836ee6e498e1b713d4e370a8aa436f', 'ADD,EDIT', 'escritor', 5, 1),
(4, 'SaÃºde', '6012da432d958.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'O CoronavÃ­rus ensinou, que somos incapazes de sobreviver por mais 1000 anos.', 'suporte@politizeesocialize.com', '7469364eedf4dc103372023e71a5f34d', 'ADD,EDIT', 'escritor', 4, 1),
(5, 'TelevisÃ£o', '6012dbd07579d.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'A televisÃ£o nÃ£o Ã© retrocesso, Ã© o avanÃ§o mais precioso do sÃ©culo.', 'suporte@politizeesocialize.com', '1f305bd88c3f23f46e656ee5bf6e4663', 'ADD,EDIT', 'escritor', 2, 1),
(6, 'MÃºsica', '6012dc5b666ca.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'A mÃºsica Ã© a emoÃ§Ã£o expressa em letras e sons.', 'suporte@politizeesocialize.com', 'b450e07c1c30a9d17bb4c629b79377ab', 'ADD,EDIT', 'escritor', 7, 1),
(7, 'EducaÃ§Ã£o', '6012dce170c12.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'Por que o Brasil nÃ£o avanÃ§a? A resposta estÃ¡ na educaÃ§Ã£o.', 'suporte@politizeesocialize.com', 'a748fbadf1e4adb4e81e1ad1343631f8', 'ADD,EDIT', 'escritor', 8, 1),
(8, 'Games', '6012dd505547b.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'GTA V Ã© o melhor jogo do sÃ©culo atÃ© o momento.', 'suporte@politizeesocialize.com', 'a4e9c4b6c02323ee5685c7012ac8f165', 'ADD,EDIT', 'escritor', 6, 1),
(9, 'Esportes', '6012de6ebd604.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'Quem nÃ£o faz leva, a bola pune.', 'suporte@politizeesocialize.com', '386dc845af859069d34045fa6d40183b', 'ADD,EDIT', 'escritor', 3, 1),
(10, 'Charles Bruxel', '60342ecdb75ea.jpeg', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/charles.bruxel\\/\",\"facebook\":\"https:\\/\\/www.facebook.com\\/bruxelcharles\",\"youtube\":\"\",\"linkedin\":\"\"}', '', 'charles.bruxel@gmail.com', 'c9d3144c0aac01a6d4b6275e3afe319d', 'ADD,EDIT', 'escritor', 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `assinantes`
--
ALTER TABLE `assinantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `competicoes`
--
ALTER TABLE `competicoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `opinioes`
--
ALTER TABLE `opinioes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assinantes`
--
ALTER TABLE `assinantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `competicoes`
--
ALTER TABLE `competicoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `opinioes`
--
ALTER TABLE `opinioes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Banco de dados: `politi07_politizeesocialize`
--
CREATE DATABASE IF NOT EXISTS `politi07_politizeesocialize` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `politi07_politizeesocialize`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assinantes`
--

CREATE TABLE `assinantes` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assinantes`
--

INSERT INTO `assinantes` (`id`, `email`, `status`) VALUES
(1, 'trukma123@aol.com', 1),
(2, 'vmsa03@gmail.com', 1),
(3, 'andrew.mcfadzen@hotmail.com', 1),
(4, 'coldare10@gmail.com', 1),
(5, 'tiffanyprincess15@yahoo.com', 1),
(6, 'born2bake@yahoo.com', 1),
(7, 'bitmixbiz@protonmail.com', 1),
(8, 'cmichellepainter@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nome_normal` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `tags` varchar(450) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `nome_normal`, `descricao`, `tags`) VALUES
(1, 'politica', 'Política', 'Saiba tudo sobre Política no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Política, Bolsonaro, Lula, Mourão, Palácio do Planalto, Dilma, PT, PSL, PSOL'),
(2, 'televisao', 'Televisão', 'Saiba tudo sobre Televisão no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Anitta, Pablo Vittar, Luísa Sonza, Gustavo Lima, Globo, MTV, Record, UOL, G1'),
(3, 'esportes', 'Esportes', 'Saiba tudo sobre Esportes no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Flamengo, Corinthians, São Paulo, Brasileirão, Copa do Brasil, Libertadores, Champions League, Internacional'),
(4, 'saude', 'Saúde', 'Saiba tudo sobre Saúde no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Covi-19, Coronavírus, Pandemia, Gripe, OMS, Sistema de Saúde Pública, SUS, Ministério da Saúde'),
(5, 'economia', 'Economia', 'Saiba tudo sobre Economia no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Dólar, Real, Preço do Arroz, Inflação, Criptomoedas, Bitcoins, Mercado Financeiro, Trader Forex'),
(6, 'games', 'Games', 'Saiba tudo sobre Games no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Cyberpunk 2077, GTA V, Red Dead Redemption 2, FIFA 21, PES 21, Left 4 Dead, Preço dos Jogos'),
(7, 'musica', 'Música', 'Saiba tudo sobre Música no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Anitta, Luísa Sonza, Ludmilla, U2, Novo Álbum, Disco novo, Novas Músicas'),
(8, 'educacao', 'Educação', 'Saiba tudo sobre Educação no Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Enem 2021, MEC, Vestibular, USP, Descomplica, Universidade Federal, Universidade Estadual, Greve'),
(9, 'recentes', 'Recentes', 'Todas as notícias Recentes de Politize e socialize. Assine a newsletter e receba gratuitamente nosso conteúdo no seu e-mail.', 'Bolsonaro, Flamengo, Anitta, Rede Globo, Coronavírus, Política, Saúde, Covid-19, Dólar, Alta do dólar, Enem, MEC, Cyberpunk 2077');

-- --------------------------------------------------------

--
-- Estrutura da tabela `competicoes`
--

CREATE TABLE `competicoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) CHARACTER SET latin1 NOT NULL,
  `alcunha` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` text CHARACTER SET latin1 NOT NULL,
  `organizadora` varchar(250) CHARACTER SET latin1 NOT NULL,
  `logotipo` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `competicoes`
--

INSERT INTO `competicoes` (`id`, `nome`, `alcunha`, `descricao`, `organizadora`, `logotipo`) VALUES
(1, 'Brasileirao', 'Brasileirao', 'Competição anual dos 20 times da elite do futebol brasileiro.', 'CBF', 'brasileirao.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes`
--

CREATE TABLE `equipes` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `alcunha` varchar(150) NOT NULL,
  `escudo` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipes`
--

INSERT INTO `equipes` (`id`, `nome`, `alcunha`, `escudo`) VALUES
(1, 'Flamengo', 'FLA', '60146e3e5bed0.png'),
(2, 'SÃ£o Paulo', 'SAO', '60146e9995c1f.png'),
(3, 'Palmeiras', 'PAL', '60146f248adb6.png'),
(4, 'Santos', 'SAN', '60146f7455292.png'),
(5, 'Vasco', 'VAS', '60149216d7ed6.png'),
(6, 'Corinthians ', 'COR', '60159bd4187ac.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `time_casa` varchar(250) NOT NULL,
  `time_fora` varchar(250) NOT NULL,
  `campeonato` varchar(250) NOT NULL,
  `fase` varchar(350) NOT NULL,
  `placar` varchar(250) NOT NULL,
  `status_jogo` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `tags` varchar(450) NOT NULL,
  `url` varchar(500) NOT NULL,
  `arquivo` varchar(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `legenda` text NOT NULL,
  `lances` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `id_usuario`, `categoria_id`, `time_casa`, `time_fora`, `campeonato`, `fase`, `placar`, `status_jogo`, `titulo`, `descricao`, `tags`, `url`, `arquivo`, `tipo`, `legenda`, `lances`, `data`, `status`) VALUES
(4, 9, 3, 'SÃ£o Paulo', 'Flamengo', 'Brasileirao', '38Âª rodada', '2-1', 'Fim de jogo', 'SÃ£o Paulo vs Flamengo', 'Jogo vÃ¡lido pela fase 38Âª rodada do campeonato Brasileirao entre SÃ£o Paulo e Flamengo. A data oficial do jogo Ã© 2021-02-25T20:30', 'Flamengo, Flamengo, Brasileirao, 2021-02-25T20:30, Esportes 38Âª rodada', 'sao-paulo-vs-flamengo-2021-02-26', '6039858c16908.jpg', 'imagem', 'Flamengo vs SÃ£o Paulo.', '<p>FLAMENGO PERDE POR 2 A 1, MAS &Eacute; CAMPE&Atilde;O BRASILEIRO.</p>\n\n<h3>90&#39; FIM DE PAPO</h3>\n\n<h3>58&#39; PABLOOOOOO!</h3>\n\n<p>Segundo gol do S&atilde;o Paulo, Pablo aproveita p&eacute;ssima sa&iacute;da de bola de Hugo e marca para o S&atilde;o Paulo</p>\n\n<h3>51&#39; BRUNOOOOO!</h3>\n\n<p>Flamengo empata jogo com cabe&ccedil;ada fatal de Bruno Henrique, 1 a 1.</p>\n\n<h3>INICIO DE SEGUNDO&nbsp;TEMPO!</h3>\n\n<h3>INTERVALO</h3>\n\n<h3>FINAL DE PRIMEIRO TEMPO!</h3>\n\n<h3>50&#39; LUCIANOOOO!</h3>\n\n<p>Com bela cobran&ccedil;a de falta e erro de Hugo, S&atilde;o Paulo abre o marcador.</p>\n\n<h3>INICIO DE JOGO!</h3>\n', '2021-02-25 20:30:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `tags` varchar(450) NOT NULL,
  `url` varchar(500) NOT NULL,
  `arquivo` varchar(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `legenda` text NOT NULL,
  `postagem` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `id_usuario`, `categoria_id`, `titulo`, `descricao`, `tags`, `url`, `arquivo`, `tipo`, `legenda`, `postagem`, `data`, `status`) VALUES
(1, 9, 3, 'Flamengo bate GrÃªmio jogando fora e campeonato fica vivo', 'O Flamengo conseguiu vencer o GrÃªmio fora de casa ontem (28) pela 23Â° rodada atrasada do Brasileiro, agora o Flamengo encosta no lÃ­der Internacional e empata em pontos com o SÃ£o Paulo, GrÃªmio fica com 51 pontos na 6 posiÃ§Ã£o.', 'Flamengo, GrÃªmio, BrasileirÃ£o, Flamengo vs GrÃªmio', 'flamengo-bate-gremio-jogando-fora-e-campeonato-fica-vivo-2021-01-29', '601437eecd032.jpg', 'imagem', 'Foto / Google', '<p>O Flamengo conseguiu vencer o Gr&ecirc;mio fora de casa ontem (28) pela 23&deg; rodada atrasada do Brasileiro, agora o Flamengo encosta no l&iacute;der Internacional e empata em pontos com o S&atilde;o Paulo, Gr&ecirc;mio fica com 51 pontos na 6 posi&ccedil;&atilde;o.</p>\n\n<h2>O jogo</h2>\n\n<p>O Flamengo come&ccedil;ou mal a primeira etapa, perdendo por um zero, mas criando chances sem convers&otilde;es, as melhores chances vieram com Gabigol, ap&oacute;s belo passe de Everton Ribeiro e Arrascaeta, mas nada de gol para o Meng&atilde;o.</p>\n\n<p>O placar foi aberto aos 40 minutos do primeiro tempo, Diego Souza de cabe&ccedil;a consegue escapar da zaga do Flamengo e marcar um belo gol de cabe&ccedil;a, tirando a bola de Hugo Souza, jovem goleiro do Flamengo.</p>\n\n<p>J&aacute; no segundo tempo o Flamengo conseguiu desencantar, Gabigol inspirado carrega o time para um bela virada sobre o time tricolor, aos 57 minutos do segundo tempo Gabigol cruza baixo na segunda trave e Everton Ribeiro de primeira empata o jogo.&nbsp;</p>\n\n<p>E menos de 5 minutos depois, Gabigol, o nome da partida, em belo chute colocado vira o jogo para o meng&atilde;o, e menos de 7 minutos depois o Flamengo marca mais um, em grande explos&atilde;o de Gabigol que toca curto dentro da pequena &aacute;rea para Arrascaeta livre marcar o terceiro para o Flamengo.</p>\n\n<p>O Gr&ecirc;mio ainda respirou um pouco com um gola&ccedil;o de falta de Diego Souza, Hugo fica indeciso com a curva da bola que entra no canto direito do gol do Meng&atilde;o, tr&ecirc;s a dois. Por fim, Isla completa a fila de gols do Flamengo, placar final: 4 a 2.</p>\n\n<h2>Gabigol comanda Flamengo</h2>\n\n<p>O nome do jogo foi Gabigol, Gabriel Barbosa, com um gol e duas assist&ecirc;ncias no segundo tempo, colocando fogo pela briga no topo da tabela e mantendo viva as brigas pelo t&iacute;tulo e garantindo o trabalho do t&eacute;cnico Rog&eacute;rio Ceni.</p>\n', '2021-01-29 13:29:34', 1),
(2, 9, 3, 'Diego Souza sente a perna apÃ³s grande noite contra Flamengo', 'Nesta quinta-feira (28) o Flamengo visitou o GrÃªmio e garantiu uma vitÃ³ria tranquila sobre o tricolor gaÃºcho por 4 a 2.', 'Flamengo, GrÃªmio, Flamengo vs GrÃªmio', 'diego-souza-sente-a-perna-apos-grande-noite-contra-flamengo-2021-01-29', '60143dc1ee67f.mp4', 'video', 'Vídeo / Youtube', '<p>Nesta quinta-feira (28) o Flamengo visitou o Gr&ecirc;mio e garantiu uma vit&oacute;ria tranquila sobre o tricolor ga&uacute;cho por 4 a 2, o nome da noite do Meng&atilde;o foi Gabigol, e do lado gremista Diego Souza, que marcou dois gols e um deles um gola&ccedil;o de falta, mesmo com noite perfeita de Diego a preocupa&ccedil;&atilde;o sobre o jogador aumenta, j&aacute; que este sentiu a perna ap&oacute;s chute forte no jogo.</p>\n\n<p>Diego Souza garantiu dois gols contra o Flamengo, do lado do Gr&ecirc;mio, o artilheiro deixou os seus gols na Arena, um de cabe&ccedil;a e outro de falta, em uma bela cobran&ccedil;a sem chances para Hugo Souza, goleiro da base do Flamengo, mesmo assim a derrota veio amarga, e uma preocupa&ccedil;&atilde;o a mais para o Gr&ecirc;mio, j&aacute; que Diego Souza deixou o campo com dores na perna, e &eacute; d&uacute;vida para pr&oacute;ximo duelo do tricolor, no domingo (31).</p>\n\n<p>Diego Souza tem 35 anos e mesmo com a idade, n&atilde;o deixa de ser goleador e decisivo, faz seu nome em partidas de grande intensidade e tamanho, foi o autor do gol da classifica&ccedil;&atilde;o do Gr&ecirc;mio para a final da Copa do Brasil e vem tendo grandes atua&ccedil;&otilde;es no campeonato brasileiro.</p>\n\n<p>O Gr&ecirc;mio enfrenta o Coritiba domingo, dia 31 deste m&ecirc;s, e espera-se uma vit&oacute;ria sobre o time na zona da degola, o Gr&ecirc;mio continua brigando por uma vaga na fase de grupos da Libertadores.</p>\n', '2021-01-29 13:54:25', 1),
(5, 9, 3, 'SÃ£o Paulo demite Diniz; RaÃ­ tambÃ©m deixa clube', 'O SÃ£o Paulo comunicou ontem (1) pela tarde a demissÃ£o do treinador Fernando Diniz, que estava no clube desde 2019 e comandou o tricolor por altos e baixos desde entÃ£o.', 'Fernando Diniz, SÃ£o Paulo, SPFC', 'sao-paulo-demite-diniz-rai-tambem-deixa-clube-2021-02-02', '60196d57d9244.jpg', 'imagem', 'Foto / Google.', '<p>O S&atilde;o Paulo comunicou ontem (1) pela tarde a demiss&atilde;o do treinador Fernando Diniz, que estava no clube desde 2019 e comandou o tricolor por altos e baixos desde ent&atilde;o. Ra&iacute;, diretor do clube, tamb&eacute;m deixou a institui&ccedil;&atilde;o junto a Diniz, que segundo o pr&oacute;prio S&atilde;o Paulo, Ra&iacute; pediu para sair ap&oacute;s demiss&atilde;o do companheiro e treinador.</p>\n\n<p>A s&eacute;rie de resultados e as cr&iacute;ticas sobre o t&eacute;cnico Fernando Diniz, pressionaram-o no cargo de treinador da equipe, que sofreu uma s&eacute;rie de derrotas nos &uacute;ltimos 10 jogos, sendo a mais expressiva contra o Internacional, onde a equipe de Diniz perdeu por 5 a 1 jogando no Morumbi.</p>\n\n<p>Diniz foi eliminado de absolutamente todas as competi&ccedil;&otilde;es que disputou com o S&atilde;o Paulo, sua primeira derrota e vexame, contra o Mirassol, pelo campeonato paulista, o time de Diniz perdeu por 3 a 2 da equipe que foi unida poucos dias antes do jogo contra o S&atilde;o Paulo. Sua segunda elimina&ccedil;&atilde;o foi a precoce queda na Libertadores, ainda na fase de grupos, a equipe perdeu para o Binacional tamb&eacute;m, ainda na mesma fase.</p>\n\n<p>Ap&oacute;s cair da Libertadores, o S&atilde;o Paulo tamb&eacute;m saiu da Sul-Americana para o Lan&uacute;s, a equipe tomou um gol no &uacute;ltimo minuto e caiu mais uma vez. Pela Copa do Brasil o time at&eacute; fez uma boa campanha, mas n&atilde;o conseguiu vencer o Gr&ecirc;mio pelas semifinais e deu adeus a competi&ccedil;&atilde;o. O S&atilde;o Paulo disputa agora o brasileiro apenas, e est&aacute; a 7 pontos atr&aacute;s do l&iacute;der.</p>\n\n<p>Marcos Vizolli assume interinamente a equipe at&eacute; a chegada de um novo t&eacute;cnico.</p>\n', '2021-02-02 12:18:47', 1),
(4, 9, 3, 'Palmeiras bate Santos por 1 a 0 e Ã© campeÃ£o da Libertadores', 'O Palmeiras Ã© campeÃ£o da AmÃ©rica apÃ³s jogo pouco movimentado contra Rival Santos.', 'Palmeiras, Santos, Libertadores', 'palmeiras-bate-santos-por-1-a-0-e-e-campeao-da-libertadores-2021-01-30', '6015f0aba383a.mp4', 'video', 'Video / Youtube.', '<p>O Palmeiras &eacute; campe&atilde;o da Am&eacute;rica ap&oacute;s jogo pouco movimentado contra Rival Santos, o jogo aconteceu nesta tarde (30) e o placar foi justo, 1 a 0, com este resultado e com a conquista do t&iacute;tulo, o Palmeiras j&aacute; tem vaga garantida na Copa do Mundo de Clubes da FIFA e na Recopa Sul-Americana, que acontecem neste ano.</p>\n\n<p>O Verd&atilde;o sagrou-se campe&atilde;o da Copa Libertadores da Am&eacute;rica ap&oacute;s bater o Santos por 1 a 0, os dois times paulistas entregaram pouco na final&iacute;ssima mesmo com os times de ambos os lados, completos, o Palmeiras teve como destaque positivo o contra ataque, j&aacute; que ofensivamente os dois times n&atilde;o praticaram muito.</p>\n\n<h2>A Final&nbsp;</h2>\n\n<p>O jogo n&atilde;o teve uma movimenta&ccedil;&atilde;o esperada, j&aacute; que pelo n&iacute;vel t&eacute;cnico de ambas as equipes era esperado um pouco mais intensidade de ambas as partes, mas apesar de ter destaques negativos por ser um jogo pouco movimentado na frente, o t&aacute;tico foi muito bem trabalhado, as duas equipes se posicionaram muito bem defensivamente, com poucas aberturas durante toda a partida.</p>\n\n<p>J&aacute; perto do fim, Cuca, t&eacute;cnico do Santos, foi expulso por tentar segurar a bola na lateral do campo, que foi atropelado por Marcos Rocha, que recebeu cart&atilde;o amarelo. E menos de 4 minutos ap&oacute;s isso, Rony rouba a bola e lan&ccedil;a-a em dire&ccedil;&atilde;o da &aacute;rea do Santos, Par&aacute; sobe pouco e Breno, aposta de Abel Ferreira sobe mais alto para marcar o gol do t&iacute;tulo do verd&atilde;o.</p>\n\n<h2>O que vem agora?</h2>\n\n<p>Do lado verde, o Palmeiras tem pela frente mais uma decis&atilde;o: a Copa do Brasil contra o Gr&ecirc;mio, que tem seu jogo de ida dia 11 de fevereiro, mas antes deste confronto as semifinais do Mundial de Clubes da Fifa.</p>\n\n<p>Do lado santista, contas! O Santos consegue acabar o ano bem (premia&ccedil;&atilde;o de vice-campe&atilde;o), mas com uma baixa no time j&aacute; confirmada e baixa importante: Lucas Ver&iacute;ssimo, que segue para Portugal, pedido de Jorge Jesus.</p>\n', '2021-01-30 20:50:03', 1),
(6, 5, 2, 'Karol ConkÃ¡ Ã© repudiada por assÃ©dio a brother no BBB', 'A participante foi repudiada pela assessoria do prÃ³prio brother, que diz que o que Karol fez Ã© um comportamento invasivo e pode se concretizar como assÃ©dio sexual e moral.', 'Big Brother, BBB, Karol ConkÃ¡', 'karol-conka-e-repudiada-por-assedio-a-brother-no-bbb-2021-02-04', '601c00f4dc1a1.jpg', 'imagem', 'Foto / Google.', '<p>A participante foi repudiada pela assessoria do pr&oacute;prio brother, que diz que o que Karol fez &eacute; um comportamento invasivo e pode se concretizar como ass&eacute;dio sexual e moral. Conk&aacute; foi notada ap&oacute;s a tarde de ontem (4) quando deitou ao lado de Arcrebiano, participante do BBB, enquanto o mesmo dormia no jardim da casa.</p>\n\n<p>&ldquo;Ap&oacute;s os acontecimentos desta tarde, na casa onde &eacute; gravado o reality show Big Brother Brasil, da Rede Globo, n&oacute;s da MMM Estrat&eacute;gia de Imagem viemos esclarecer que repudiamos qualquer tipo de comportamento invasivo, que pode ser considerado, inclusive, como ass&eacute;dio moral e sexual&rdquo;. MMM Estrat&eacute;gia de Imagem.</p>\n\n<p>A situa&ccedil;&atilde;o aconteceu quando Karol Conk&aacute; ap&oacute;s o almo&ccedil;o afirmou que iria deitar ao lado do brother para Lumena, outra participante do BBB, a Rapper foi at&eacute; Bill e se deitou a seu lado, de conchinha, mostrando a situa&ccedil;&atilde;o para os outros brother, Bill no entanto reagiu at&eacute; que de acordo com a situa&ccedil;&atilde;o.</p>\n\n<p>O BBB &eacute; o reality show oficial da Rede Globo apresentado pelo apresentador Tiago Leifert.</p>\n', '2021-02-04 11:13:08', 1),
(7, 6, 7, 'Anitta lanÃ§a Loco, nova mÃºsica da cantora', 'Anitta lanÃ§ou a mÃºsica no dia 29 de janeiro, este Ã© o primeiro single da cantora em trÃªs anos, desde Veneno e NÃ£o perco meu tempo, ambos lanÃ§ados em 2018.', 'Anitta, Loco, MÃºsica, Brasil', 'anitta-lanca-loco-nova-musica-da-cantora-2021-02-06', '601f23587a6c1.jpg', 'imagem', 'Foto / Google.', '<p>Anitta lan&ccedil;ou a m&uacute;sica no dia <strong>29 de janeiro</strong>, este &eacute; o primeiro single da cantora em tr&ecirc;s anos, desde <em>Veneno </em>e<em> N&atilde;o perco meu tempo</em>, ambos lan&ccedil;ados em 2018. Loco &eacute; uma m&uacute;sica in&eacute;dita que foi filmada nos Estados Unidos, Aspen, cidade no Colorado.</p>\n\n<p>M&uacute;sica foi produzida por Ryan Tedder com participa&ccedil;&atilde;o de nomes como Andr&eacute; Torres e Maur&iacute;cio Rengifo. Escute a m&uacute;sica pelo link abaixo.</p>\n\n<p>Veja o videoclipe clicando <a href=\"https://www.youtube.com/watch?v=7LLKQhwazhI\">aqui!</a></p>\n', '2021-02-06 20:16:40', 1),
(8, 2, 1, 'Haddad se posiciona sobre candidatura em 2022 com apoio de Lula', 'Fernando Haddad â€” ex-ministro e ex-prefeito de SÃ£o Paulo disse que recebeu orientaÃ§Ãµes de Lula, Luiz InÃ¡cio da Silva, ex-presidente do Brasil, para se posicionar como candidato pelo PT (Partido dos Trabalhadores) em 2022, quando acontecerÃ£o as prÃ³ximas eleiÃ§Ãµes presidenciais. ', 'Haddad, Lula, PT, EleiÃ§Ãµes 2022', 'haddad-se-posiciona-sobre-candidatura-em-2022-com-apoio-de-lula-2021-02-07', '602018894a927.jpg', 'imagem', 'Foto / Google.', '<p>Fernando Haddad &mdash; ex-ministro e ex-prefeito de S&atilde;o Paulo disse que recebeu orienta&ccedil;&otilde;es de Lula, Luiz In&aacute;cio da Silva, ex-presidente do Brasil, para se posicionar como candidato pelo PT (Partido dos Trabalhadores) em 2022, quando acontecer&atilde;o as pr&oacute;ximas elei&ccedil;&otilde;es presidenciais. Lula n&atilde;o pode se eleger devido &agrave; lei &ldquo;Ficha Limpa&rdquo;.</p>\n\n<p>Em entrevista ao site <em>Brasil 247, </em>Haddad deixou bem claro a vontade de Lula para que ele se apresentasse como candidato &agrave; presid&ecirc;ncia pelo Partido dos Trabalhadores: &ldquo;O Lula me disse que n&atilde;o temos mais tempo para esperar&hellip; Ele me pediu para colocar o &lsquo;bloco na rua e eu aceitei&rsquo;&rdquo;.</p>\n\n<p>Lula n&atilde;o pode se candidatar ao cargo de presidente do Brasil depois de duas acusa&ccedil;&otilde;es pela Lava Jato por corrup&ccedil;&atilde;o passiva e lavagem de dinheiro ainda quando era presidente do pa&iacute;s.&nbsp;</p>\n\n<p>Lula, por&eacute;m, recorreu a sua Defesa Petista para que fosse reavaliado a autonomia de S&eacute;rgio Moro, juiz que condenou o ex-presidente, nos casos da Lava Jato, caso o STF (Supremo Tribunal Federal) reconhe&ccedil;a que Moro agiu com parcialidade, Lula pode ter seus direitos pol&iacute;ticos de volta.</p>\n\n<p>Haddad concorreu &agrave; presid&ecirc;ncia em 2018, quando foi para o segundo turno contra Bolsonaro e saiu derrotado, com pouco de 47 milh&otilde;es de votos. O petista declarou tamb&eacute;m que pretende fazer agendas para viagens, com o objetivo de aumentar o grau de conhecimento entre os eleitores.</p>\n', '2021-02-07 13:42:49', 1),
(9, 2, 1, 'Lula defende que SÃ©rgio Moro foi parcial em sua condenaÃ§Ã£o', 'A defesa do ex-presidente estava perto de utilizar mensagens hackeadas em aÃ§Ã£o contra Moro no STF, mensagens acusavam o juiz SÃ©rgio Moro de ter tomado decisÃµes parciais nos processos contra o ex-presidente Lula, pela operaÃ§Ã£o â€œLava Jatoâ€, Moro desconhece veracidade das informaÃ§Ãµes.', 'Lula, Lava jato, SÃ©rgio Moro, STF', 'lula-defende-que-sergio-moro-foi-parcial-em-sua-condenacao-2021-02-10', '602415a446bb2.jpg', 'imagem', 'Foto / Google.', '<p>A defesa do ex-presidente estava perto de utilizar mensagens hackeadas em a&ccedil;&atilde;o contra Moro no STF, mensagens acusavam o juiz S&eacute;rgio Moro de ter tomado decis&otilde;es parciais nos processos contra o ex-presidente Lula, pela opera&ccedil;&atilde;o <strong>&ldquo;Lava Jato&rdquo;</strong>, Moro desconhece veracidade das informa&ccedil;&otilde;es.</p>\n\n<p>Todo o caso foi motivado por uma decis&atilde;o de Lula sobre sua condena&ccedil;&atilde;o na Lava Jato (Nove anos de pris&atilde;o), Lula tomou o debate ap&oacute;s S&eacute;rgio Moro entrar na pol&iacute;tica, e segundo o ex-presidente isso mostra o qu&atilde;o Moro foi parcial no seu julgamento, caso seja verdade, o julgamento e uma nova an&aacute;lise devem levar mais tempo.</p>\n\n<p>Zanin Martins, advogado de Lula, afirmou que <em>&ldquo;j&aacute; existem provas mais que suficientes&rdquo;</em> para a defesa contra S&eacute;rgio Moro, e que o julgamento em 2018 deveria ter sido retomado o mais breve poss&iacute;vel, sem que houvesse novas discuss&otilde;es acerca do caso. As mensagens em quest&atilde;o, segundo Zanin, j&aacute; s&atilde;o utilizadas em outros processos, e por isso, tamb&eacute;m, resolveu &ldquo;encolher&rdquo; o assunto neste momento.</p>\n\n<p>Caso o STF reconhe&ccedil;a uma verdadeira decis&atilde;o parcial por parte de S&eacute;rgio Moro, as condena&ccedil;&otilde;es sobre Lula podem vir a cair. Lula &eacute; condenado em dois processos: o caso &ldquo;Tr&iacute;plex&rdquo; e o do &ldquo;S&iacute;tio&rdquo;, sendo assim, Lula poderia voltar a disputar as elei&ccedil;&otilde;es presidenciais, j&aacute; que ainda continua impedido de se candidatar, j&aacute; que a lei &ldquo;Ficha Limpa&rdquo; o restringe disso.</p>\n', '2021-02-10 14:19:32', 1),
(10, 4, 4, 'Nova variante do coronavÃ­rus pode infectar pessoas vacinadas', 'Segundo cientistas britÃ¢nicos, por meio de informaÃ§Ãµes divulgadas nesta quinta-feira (11), a nova variante do covid-19, chamada de Bristol, pode infectar pessoas que jÃ¡ foram vacinadas ou pessoas que jÃ¡ tiveram contÃ¡gio pela doenÃ§a.', 'Covid-19, CoronavÃ­rus, variante do coronavÃ­rus, cientistas britÃ¢nicos', 'nova-variante-do-coronavirus-pode-infectar-pessoas-vacinadas-2021-02-12', '6026b5753fe79.jpg', 'imagem', 'Foto / Google.', '<p>Segundo cientistas brit&acirc;nicos, por meio de informa&ccedil;&otilde;es divulgadas nesta quinta-feira (11), a nova variante do covid-19, chamada de Bristol, pode infectar pessoas que j&aacute; foram vacinadas ou pessoas que j&aacute; tiveram cont&aacute;gio pela doen&ccedil;a.</p>\n\n<p>Mesmo sem saber se a nova variante &eacute; mais agressiva que a anterior, tamb&eacute;m no Reino Unido, &eacute; quase certo que ela est&aacute; diretamente relacionada &agrave;s variantes encontradas na &Aacute;frica do Sul e no Brasil, mas que de acordo com o Ministro de Sa&uacute;de do Reino Unido, o pa&iacute;s est&aacute; completamente comprometido em rastrear infectados e monitorar a propaga&ccedil;&atilde;o dessa variante.</p>\n\n<ul>\n	<li><a href=\"https://g1.globo.com/mundo/noticia/2021/02/12/franca-detecta-mais-de-300-casos-de-covid-ligados-as-variantes-brasileira-e-sul-africana-do-coronavirus.ghtml\">Fran&ccedil;a detecta casos ligados a variante do covid-19 da &Aacute;frica do Sul e Brasil</a></li>\n</ul>\n\n<p>At&eacute; o momento os cientistas defendem que as variantes conseguem quebrar a imuniza&ccedil;&atilde;o pela vacina ou pelo cont&aacute;gio anterior a doen&ccedil;a, e que podem tamb&eacute;m reduzir pela metade a efic&aacute;cia da imuniza&ccedil;&atilde;o.</p>\n', '2021-02-12 14:05:57', 1),
(11, 2, 1, 'Bolsonaro e Joe Biden jÃ¡ tÃªm data de encontro, e queimadas na AmazÃ´nia deve ser assunto', 'ApÃ³s quatro anos de Trump no governo estadunidense e com boas relaÃ§Ãµes com Bolsonaro, Ã© a vez do presidente Jair Bolsonaro se encontrar com Joe Biden, novo presidente dos Estados Unidos, com data marcada para 22 de abril.', 'Jair Bolsonaro, Bolsonaro, Joe Biden, EUA', 'bolsonaro-e-joe-biden-ja-tem-data-de-encontro-e-queimadas-na-amazonia-deve-ser-assunto-2021-02-14', '60297cc66ffcc.jpg', 'imagem', 'Foto / Google.', '<p>Ap&oacute;s quatro anos de Trump no governo estadunidense e com boas rela&ccedil;&otilde;es com Bolsonaro, &eacute; a vez do presidente Jair Bolsonaro se encontrar com Joe Biden, novo presidente dos Estados Unidos, com data marcada para <strong>22 de abril</strong>. O tema n&atilde;o atrai nada a aten&ccedil;&atilde;o de Bolsonaro: <strong>queimadas na Amaz&ocirc;nia</strong>.</p>\n\n<p>O encontro deve ser virtual e com um tema bastante complicado, que o Brasil enfrentou mais agressivamente entre 2018 e 2020, as queimadas na Amaz&ocirc;nia. Bolsonaro por sua vez n&atilde;o declarou nada a respeito, mas este poder&aacute; ser seu primeiro encontro com o democrata Joe Biden, ap&oacute;s o presidente americano assumir a Casa Branca.</p>\n\n<p>Bolsonaro e Biden n&atilde;o conseguiram, ainda, se encaixar nos modelos um do outro, o presidente brasileiro ajudou e apoiou Donald Trump durante as elei&ccedil;&otilde;es estadunidenses, tamb&eacute;m muito estremecidas por uma intensa demora na apura&ccedil;&atilde;o dos votos e amea&ccedil;as de Trump a Biden, alegando que houve uma manipula&ccedil;&atilde;o de votos durante as apura&ccedil;&otilde;es.</p>\n\n<p>Para Jair Bolsonaro, <strong>os inc&ecirc;ndios florestais n&atilde;o devem ter interven&ccedil;&atilde;o de outros pa&iacute;ses</strong>, n&atilde;o s&oacute; neste caso, mas para parte dos bens brasileiros.&nbsp;</p>\n', '2021-02-14 16:40:54', 1),
(12, 5, 2, 'BBB: Caio pensa em deixar programa!', 'Caio Afiune conversarÃ¡ com a produÃ§Ã£o do reality e com a psicÃ³loga, alÃ©m de ter opiniÃµes do brother Sarah e Rodolfo, dependendo do que tire de conclusÃ£o ele deve sair do reality.', 'BBB, Caio BBB, TelevisÃ£o', 'bbb-caio-pensa-em-deixar-programa-2021-02-14', '602989e843f9d.jpg', 'imagem', 'Foto / Google.', '<p>Caio Afiune conversar&aacute; com a produ&ccedil;&atilde;o do reality e com a psic&oacute;loga, al&eacute;m de ter opini&otilde;es do brother Sarah e Rodolfo, dependendo do que tire de conclus&atilde;o ele deve sair do reality. Depois do almo&ccedil;o o brother fez suas malas e d&aacute; a entender de que pode sim estar deixando o programa.</p>\n\n<p>&quot;Minha fam&iacute;lia sempre foi o primeiro lugar na minha vida e sempre vai ser, n&atilde;o tem nada que vai mudar isso. Eu n&atilde;o me dou conta de ficar vivendo as coisas boas que isso nos traz sabendo que l&aacute; fora alguma coisa pode estar rolando. Podem me julgar, falar que eu fui frouxo, mas eu n&atilde;o estou nem a&iacute;.&quot;</p>\n\n<p>Tudo come&ccedil;ou quando Caio foi o anjo da semana, e pode ver sua fam&iacute;lia, por&eacute;m ele se demonstrou bastante preocupado com sua esposa, que parecia estranha, afirmando conhecer muito bem ela: &quot;Achei a Wal&eacute;ria estranha, isso &eacute; pira? Eu conhe&ccedil;o ela&quot;.</p>\n\n<p>Novas informa&ccedil;&otilde;es ser&atilde;o divulgadas logo.</p>\n', '2021-02-14 17:36:56', 1),
(13, 5, 2, 'FÃ³rmula 1 na Band, Globo abre mÃ£o apÃ³s 40 anos de parceria', 'A Band assume transmissÃ£o da FÃ³rmula 1 apÃ³s 40 de anos da Globo ser a principal transmissora no paÃ­s que tinha os direitos do esporte automobilÃ­stico.', 'FÃ³rmula 1, Band, Globo TV, TelevisÃ£o', 'formula-1-na-band-globo-abre-mao-apos-40-anos-de-parceria-2021-02-14', '60299e64dfd8a.jpg', 'imagem', 'Foto / Google.', '<p>A Band assume transmiss&atilde;o da F&oacute;rmula 1 ap&oacute;s 40 de anos da Globo ser a principal transmissora no pa&iacute;s que tinha os direitos do esporte automobil&iacute;stico. As corridas come&ccedil;am a ser transmitidas em mar&ccedil;o, al&eacute;m da emissora exibir a categoria mais importante do automobilismo, as provas ser&atilde;o exibidas tamb&eacute;m em um streaming pr&oacute;prio.</p>\n\n<h2>Band e F&oacute;rmula 1</h2>\n\n<p>A Band fez o an&uacute;ncio da compra dos direitos de transmiss&atilde;o da F&oacute;rmula 1 na ter&ccedil;a-feira (11), junto ao acordo, a previs&atilde;o de 23 corridas &eacute; certa e deve passar nos canais abertos, j&aacute; os treinos classificat&oacute;rios devem ser transmitidos pela canal pago BandSports, que tamb&eacute;m exibir&aacute; a F&oacute;rmula 2 e F&oacute;rmula 3.</p>\n\n<p>Reginaldo Leme ser&aacute; o comentarista e Mariana Becker ser&aacute; rep&oacute;rter, o narrador segue indefinido, mas Sergio Mauricio do SporTV &eacute; o nome cotado para o cargo. O primeiro grande pr&ecirc;mio de F&oacute;rmula 1 ser&aacute; disputado no dia 28 de mar&ccedil;o.</p>\n', '2021-02-14 19:04:20', 1),
(14, 2, 1, 'ApÃ³s audiÃªncia, Daniel Silveira segue preso!', 'Daniel Silveira segue preso apÃ³s decisÃ£o do juiz AÃ­rton Vieira, do STF (Supremo Tribunal Federal), nesta quinta-feira (18).', 'Caso Daniel Silveira, STF, CÃ¢mara dos Deputados.', 'apos-audiencia-daniel-silveira-segue-preso-2021-02-18', '602eee0ca52cd.jpg', 'imagem', 'Foto / Google.', '<p>Daniel Silveira segue preso ap&oacute;s decis&atilde;o do juiz A&iacute;rton Vieira, do STF (Supremo Tribunal Federal), nesta quinta-feira (18). Daniel foi preso na ter&ccedil;a-feira por fazer um v&iacute;deo de &oacute;dio e com apologia &agrave; ditadura militar, criticando tamb&eacute;m os integrantes da corte. Daniel deve esperar por uma palavra final da C&acirc;mara, que decidir&aacute; sobre seu futuro.</p>\n\n<p>Caber&aacute; aos deputados decidir se a pris&atilde;o ser&aacute; mantida ou n&atilde;o, que ser&aacute; tomada por maioria absoluta dos parlamentares. Com isto, Silveira ter&aacute; de esperar at&eacute; amanh&atilde; (19), &agrave;s 17 horas (hor&aacute;rio de Bras&iacute;lia), uma defini&ccedil;&atilde;o da C&acirc;mara dos Deputados. Ontem, a corte manteve por unanimidade a pris&atilde;o de Daniel.</p>\n\n<p>Silveira foi preso na noite de ter&ccedil;a-feira (16) por fazer amea&ccedil;as ao ministro do STF, com apologias &agrave; ditadura militar, citando o AI-5, o Ato Institucional que aumentou a repress&atilde;o da ditadura em 1968.</p>\n', '2021-02-18 19:45:32', 1),
(15, 10, 1, 'Bolsonaro: o maior aliado global do coronavÃ­rus', 'O Presidente da RepÃºblica nÃ£o se conserta e insiste em ser contra tudo que Ã© eficaz no combate Ã  pandemia', 'Bolsonaro, PolÃ­tica, Brasil', 'bolsonaro-o-maior-aliado-global-do-coronavirus-2021-02-26', '60398a61e6f0a.jpg', 'imagem', 'Fonte https://diariodonordeste.verdesmares.com.br/politica/bolsonaro-confirma-auxilio-emergencial-por-mais-alguns-meses-durante-visita-ao-ceara-1.3052828', '<p>O Presidente do Brasil, Jair Messias Bolsonaro, &eacute;, provavelmente, <strong>o maior &quot;negacionista&quot; da pandemia que o mundo conhece</strong>.</p>\n\n<p>Ele n&atilde;o se corrige, n&atilde;o se conserta e n&atilde;o evolui.</p>\n\n<p>N&atilde;o pode ver uma oportunidade, um boato ou uma &quot;opini&atilde;o&quot; sem qualquer base cient&iacute;fica que j&aacute; reproduz.</p>\n\n<p>Em seu universo dist&oacute;pico, a discuss&atilde;o sobre a efic&aacute;cia de medidas que visam evitar o cont&aacute;gio do coronav&iacute;rus &eacute; mera quest&atilde;o de &quot;gosto pessoal&quot;, de &quot;opini&atilde;o&quot;, demonstrando ser detentor de uma ignor&acirc;ncia &iacute;mpar e de uma completa falta de no&ccedil;&atilde;o de ao menos entender o que significa e para que serve o posto que ocupa.</p>\n\n<p>Exigir que ele saiba o que &eacute; e para que serve a ci&ecirc;ncia parece ser demais para sua limitad&iacute;ssima capacidade, j&aacute; que&nbsp;ele prefere ter a &quot;opini&atilde;o&quot; que lhe &eacute; mais conveniente.</p>\n\n<p>Com mais de 250 mil mortos por COVID-19 no Brasil, nosso pa&iacute;s tem lamentavelmente batido recorde di&aacute;rio de &oacute;bitos.</p>\n\n<p>E o que Bolsonaro faz?</p>\n\n<p>Resolve tomar vergonha na cara e buscar incansavelmente adquirir em larga escala vacinas necess&aacute;rias para imunizar em massa a popula&ccedil;&atilde;o brasileira?</p>\n\n<p>Obviamente que n&atilde;o, esse problema a&iacute; &eacute; com o &quot;especialista em log&iacute;stica&quot; do Minist&eacute;rio da Sa&uacute;de que confunde Amap&aacute; com Amazonas. Bolsonaro finge que n&atilde;o tem nada a ver com isso.</p>\n\n<p><strong>Se fosse para dar um palpite aleat&oacute;rio</strong>, eu diria que Bolsonaro provavelmente teria recomendando cloroquina/invermectica pela milion&eacute;sima vez, apesar de j&aacute; ser clara a inefic&aacute;cia desses medicamentos e do tal &quot;tratamento precoce&quot;, como atesta a <a href=\"https://www.poder360.com.br/coronavirus/sociedade-de-infectologia-contraindica-tratamento-precoce-para-covid-19/\" target=\"_blank\">Sociedade Brasileira de Infectologia</a>, a&nbsp;<a href=\"https://amb.org.br/noticias/amb/nota-relevante-orientacao-da-associacao-medica-brasileira-e-da-sociedade-brasileira-de-infectologia-sobre-vacinacao-e-tratamento-farmacologico-preventivo/\" target=\"_blank\">Associa&ccedil;&atilde;o M&eacute;dica Brasileira</a>&nbsp;e pela <a href=\"https://www.istoedinheiro.com.br/em-votos-anvisa-refuta-existencia-de-tratamento-precoce/\" target=\"_blank\">Anvisa</a>.</p>\n\n<p>Mas dessa vez a baboseira dita foi outra e foi em s&eacute;rie.</p>\n\n<p>Na quinta-feira (25/02), dia em que o Brasil bateu o recorde di&aacute;rio de mortes por Covid-19, Bolsonaro fez a sua tradicional&nbsp;<em>live </em>e&nbsp;<a href=\"https://noticias.uol.com.br/saude/ultimas-noticias/redacao/2021/02/25/no-dia-mais-letal-da-covid-19-bolsonaro-questiona-mascara-e-isolamento.htm\" target=\"_blank\">focou suas falas na cr&iacute;tica ao&nbsp;uso e &agrave;&nbsp;efic&aacute;cia das&nbsp;m&aacute;scaras</a>.</p>\n\n<p>Vacinas? N&atilde;o tenho nada a ver com isso, talkey?</p>\n\n<p>Para complementar, na sexta-feira (26/02), em visita ao Cear&aacute; - que est&aacute; no auge da segunda onda de cont&aacute;gio de Covid-19 -, Bolsonaro aglomerou, n&atilde;o usou m&aacute;scara&nbsp;e mandou uma &quot;lacra&ccedil;&atilde;o&quot; que deixa a popula&ccedil;&atilde;o com pensamento cr&iacute;tico descrente no futuro da humanidade, mas que faz os bolsonaristas delirarem: &quot;<a href=\"https://www.cnnbrasil.com.br/politica/2021/02/26/em-evento-no-ceara-bolsonaro-volta-a-defender-fim-das-medidas-restritivas\" target=\"_blank\">O povo n&atilde;o consegue mais ficar dentro de casa. O povo quer trabalhar. Esses que fecham tudo e fecham empregos est&atilde;o na contram&atilde;o daquilo que seu povo quer</a>&quot;.</p>\n\n<p>A fala lembrou bastante o discurso mais bizarro j&aacute; dado por Bolsonaro desde que a pandemia chegou ao Brasil, em que ele defendeu, em mar&ccedil;o/2020, a <a href=\"https://g1.globo.com/politica/noticia/2020/03/24/bolsonaro-pede-na-tv-volta-a-normalidade-e-fim-do-confinamento-em-massa.ghtml\" target=\"_blank\">&quot;volta &agrave; normalidade&quot; quando est&aacute;vamos come&ccedil;ando a primeira onda do coronav&iacute;rus</a>.</p>\n\n<p>Bolsonaro, como bom negacionista, fala como se n&atilde;o existisse a pandemia.</p>\n\n<p><strong>Defende o fim de qualquer medida de distanciamento social e, no lugar, n&atilde;o prop&otilde;e&nbsp;absolutamente nada</strong>.</p>\n\n<p>&Eacute; &oacute;bvio que as medidas de distanciamento prejudicam as rela&ccedil;&otilde;es econ&ocirc;micas e sociais e &eacute; &oacute;bvio que o ideal era efetivamente podermos voltar &agrave; normalidade.</p>\n\n<p>Mas essas provid&ecirc;ncias excepcionais s&atilde;o cientificamente eficazes (vide estudos que podem ser acessados <a href=\"https://www.uerj.br/noticia/11078/\" target=\"_blank\">AQUI</a>, <a href=\"https://www.scielo.br/scielo.php?pid=S0102-311X2020001005006&amp;script=sci_arttext\" target=\"_blank\">AQUI</a> e&nbsp;<a href=\"https://www.nature.com/articles/s41562-020-01009-0\" target=\"_blank\">AQUI</a>) e se justificam diante do quase exaurimento do nosso sistema de sa&uacute;de.</p>\n\n<p>N&atilde;o adianta nada pregar o retorno a uma normalidade que n&atilde;o existe.&nbsp;Ou ser&aacute; que Bolsonaro acha normal estarmos h&aacute; mais de 30 dias com m&eacute;dia m&oacute;vel superior a mil mortes di&aacute;rias por coronav&iacute;rus?</p>\n\n<p><strong>A incompet&ecirc;ncia do governo federal em adquirir vacinas na quantidade necess&aacute;ria para superarmos com a maior brevidade essa infeliz pandemia viabilizou a chegada da segunda onda de contamina&ccedil;&otilde;es e mortes. Por outro lado, a&nbsp;conduta pessoal de Bolsonaro de minimizar a gravidade da pandemia, vender a ideia de que h&aacute; cura para a doen&ccedil;a (e n&atilde;o h&aacute;), n&atilde;o usar m&aacute;scaras e aglomerar incentiva seus seguidores fan&aacute;ticos a reproduzirem as mesmas posturas e, posteriormente, acabar contaminando inocentes que nada tem a ver com essa ideologia t&atilde;o hostil &agrave; ci&ecirc;ncia e ao racioc&iacute;nio.</strong></p>\n\n<p>Naturalmente, isso n&atilde;o quer dizer que governos estaduais ou municipais n&atilde;o tenham falhado na gest&atilde;o dessa crise. Mas ficar reproduzindo discursos bolsonaristas gen&eacute;ricos que culpam uma corrup&ccedil;&atilde;o generalizada dos governos locais&nbsp;&eacute; de uma grande irresponsabilidade e, acima de tudo, falta de no&ccedil;&atilde;o da realidade.&nbsp;</p>\n\n<p>Ah, e se voc&ecirc; acha que o Bolsonaro n&atilde;o tem responsabilidade nenhuma pela pandemia porque&nbsp;o STF &quot;proibiu&quot; ele de agir&nbsp;&eacute; preciso se informar melhor (ver resumex <a href=\"https://www.nenoticias.com.br/wp-content/uploads/2021/01/stf-governo-covid-materia.jpg\" target=\"_blank\">AQUI</a>). Al&eacute;m disso, se&nbsp;a gest&atilde;o da pandemia tivesse ficado a cargo integralmente do governo federal, o que teria mudado?&nbsp;<strong>Ter&iacute;amos ainda mais mortes, j&aacute; que nenhuma medida de isolamento social teria sido adotada, uma vez que o Bolsonaro &eacute; contra todas elas</strong>.</p>\n\n<p>Cercado de apoiadores fan&aacute;ticos ou oportunistas, Bolsonaro &eacute; cegado pelo pr&oacute;prio c&acirc;ncer que criou: o bolsonarismo (uma mistura de ideias aleat&oacute;rias que defende&nbsp;armas, fam&iacute;lia Bolsonaro, cloroquina, coronav&iacute;rus, ultraliberalismo econ&ocirc;mico, militarismo, conservadorismo moral, terra plana e&nbsp;&oacute;dio &agrave; ci&ecirc;ncia). O homem m&eacute;dio que nada compreende de pol&iacute;tica agora se v&ecirc; habilitado a opinar sobre temas sobre os quais n&atilde;o tem nenhum dom&iacute;nio e &eacute; capaz de defender at&eacute; a morte a opini&atilde;o que ele teve depois de ver uma imagem em um grupo de Whatsapp.</p>\n\n<p>Tudo isso faz do negacionista Bolsonaro o maior aliado global do coronav&iacute;rus. E quem paga o pre&ccedil;o disso &eacute; o povo brasileiro.</p>\n', '2021-02-26 20:55:13', 1),
(16, 2, 1, 'MourÃ£o estÃ¡ insatisfeito com vacinaÃ§Ã£o contra o CoronavÃ­rus', 'Vice-presidente da repÃºblica ä¸€ Hamilton MourÃ£o ä¸€ Falou nesta terÃ§a-feira (2) que existem fatores importantes a respeito da vacinaÃ§Ã£o contra a covid-19: â€NÃ£o adianta impor medidasâ€, em relaÃ§Ã£o a Carta da Conass, que sugeriu medidas a serem tomadas durante o tratamento da pandemia no Brasil.', 'MourÃ£o, PolÃ­tica, Bolsonaro, COvid-19, SaÃºde.', 'mourao-esta-insatisfeito-com-vacinacao-contra-o-coronavirus-2021-03-02', '603ee07182548.jpg', 'imagem', 'Hamilton MourÃ£o, vice-presidente do Brasil, Foto / Google.', '<p>Vice-presidente da rep&uacute;blica ä¸€ Hamilton Mour&atilde;o ä¸€ Falou nesta ter&ccedil;a-feira <strong>(2)</strong> que existem fatores importantes a respeito da vacina&ccedil;&atilde;o contra a covid-19: &rdquo;N&atilde;o adianta impor medidas&rdquo;, em rela&ccedil;&atilde;o a <a href=\"https://www.conass.org.br/carta-dos-secretarios-estaduais-de-saude-a-nacao-brasileira/\">Carta da Conass</a>, que sugeriu medidas a serem tomadas durante o tratamento da pandemia no Brasil.</p>\n\n<ul>\n	<li><a href=\"https://www.politizeesocialize.com/home/noticia/bolsonaro-o-maior-aliado-global-do-coronavirus-2021-02-26\">Leia aqui a opini&atilde;o de Charles Bruxel sobre Bolsonaro de m&atilde;os dadas com a Covid-19.</a></li>\n</ul>\n\n<p>Mour&atilde;o n&atilde;o gostou da carta escrita pelo <strong>Conselho Nacional de Secret&aacute;rios de Sa&uacute;de</strong>, que sugeria mudan&ccedil;as imediatas a respeito do colapso das redes p&uacute;blicas e privadas de sa&uacute;de. Uma dessas medidas foi justamente um toque de recolher nacional das 20 horas da noite at&eacute; &agrave;s 6 horas da manh&atilde;.</p>\n\n<p>&ldquo;Cada popula&ccedil;&atilde;o tem sua caracter&iacute;stica, se voc&ecirc; analisar, o pa&iacute;s s&atilde;o cinco pa&iacute;ses em um s&oacute;, impor algo? N&atilde;o somos uma ditadura, se fosse uma seria muito f&aacute;cil, saia dando bangornada em todo mundo&rdquo;, disse Hamilton Mour&atilde;o em entrevista. Al&eacute;m disso, Mour&atilde;o segue afirmando que <a href=\"https://valorinveste.globo.com/mercados/brasil-e-politica/noticia/2021/03/02/vacinacao-em-massa-e-a-coisa-mais-importante-agora-diz-guedes.ghtml\">a vacina&ccedil;&atilde;o precisa ser em &ldquo;rebanho&rdquo;</a>.</p>\n\n<p>&ldquo;Acho que tem que haver uma campanha em todos os n&iacute;veis de conscientiza&ccedil;&atilde;o da popula&ccedil;&atilde;o. &Eacute; por a&iacute;, conseguir acelerar as vacinas. Acelerando as vacinas a coisa anda de forma boa&rdquo;, afirmou Mour&atilde;o.</p>\n', '2021-03-02 22:03:45', 1),
(17, 2, 1, 'ComplÃ´ de mandantes Ã© hipÃ³tese no assassinato de Marielle Franco', 'A possÃ­vel tese Ã© estudo do Departamento de HomicÃ­dios do Rio de Janeiro, segundo ela o assassinato da vereadora Marielle Franco e de seu motorista, Anderson Gomes, teria sido um grande complÃ´ que envolvia mandantes e intermiadiÃ¡rios.', 'Marielle Franco, PolÃ­tica, Anderson Gomes, Caso Marielle Franco', 'complo-de-mandantes-e-hipotese-no-assassinato-de-marielle-franco-2021-03-06', '604410a880242.jpg', 'imagem', 'Marielle Franco / Foto MÃ­dia Ninja', '<p>A poss&iacute;vel tese &eacute; estudo do <strong>Departamento de Homic&iacute;dios do Rio de Janeiro</strong>, segundo ela o assassinato da vereadora <strong>Marielle Franco</strong> e de seu motorista, <strong>Anderson Gomes</strong>, teria sido um grande compl&ocirc; que envolvia mandantes e intermedi&aacute;rios. Os assassinatos ocorreram no dia 14 de mar&ccedil;o de 2018 e foi ponto de muitas manifesta&ccedil;&otilde;es culturais e art&iacute;sticas no Brasil.&nbsp;</p>\n\n<p>O crime que j&aacute; vai completar tr&ecirc;s anos, ainda segue aberto e &eacute; classificado como um dos <strong>crimes mais complexos do pa&iacute;s</strong>, tem a hip&oacute;tese levada &agrave; pauta por motivos relacionados a uma vingan&ccedil;a contra o <strong>PSOL</strong> (Partido Socialismo e Liberdade). Marcelo Freixo, amigo de Marielle Franco, disse que seu assassinato foi fruto de uma &ldquo;vingan&ccedil;a que chegou sem amea&ccedil;as&rdquo;.</p>\n\n<p>&mdash; <strong>Marielle foi fruto de uma vingan&ccedil;a que chegou sem amea&ccedil;a</strong>. Uma vingan&ccedil;a brutal e inaceit&aacute;vel, uma interrup&ccedil;&atilde;o da democracia. S&oacute; que n&atilde;o sabiam quem era a Marielle e o mundo est&aacute; respondendo &mdash; afirmou Freixo.</p>\n\n<ul>\n	<li><a href=\"https://extra.globo.com/casos-de-policia/marielle-foi-fruto-de-uma-vinganca-brutal-que-chegou-sem-ameaca-diz-freixo-22508279.html\">Leia mais sobre a entrevista de Marcelo Freixo aqui.</a></li>\n</ul>\n\n<p>A pol&iacute;cia declara que o inqu&eacute;rito est&aacute; em est&aacute;gio avan&ccedil;ado, mas ainda n&atilde;o podem dar uma data precisa sobre quando os trabalhos se encerram. Os r&eacute;us at&eacute; o momento do caso s&atilde;o: <strong>Ronnie Lessa</strong>, sargento reformado da PM, conhecido por ser um ex&iacute;mio atirador e muito frio; e <strong>&Eacute;lcio Queiroz</strong>, ex-PM.&nbsp;</p>\n\n<p>Lessa foi incorporado em 1992 &agrave; Pol&iacute;cia Militar do Rio e at&eacute; o caso em espec&iacute;fico era Ficha Limpa, mas j&aacute; &eacute; sabido pelo Minist&eacute;rio P&uacute;blico que <strong>Ronnie era dedo no gatilho e possu&iacute;a muita frieza</strong> na realiza&ccedil;&atilde;o dos seus servi&ccedil;os prestados. &Eacute;lcio por outro lado, que foi acusado de dirigir o Cobalt prata usado na emboscada, j&aacute; tem problemas anteriores na justi&ccedil;a.&nbsp;</p>\n\n<p>&Eacute;lcio foi expulso da Pol&iacute;cia Militar por ter sido preso na chamada Opera&ccedil;&atilde;o Guilhotina. <strong>&Eacute;lcio foi levantado como suspeito por sua antiga profiss&atilde;o de escoltador de cargas</strong>.</p>\n\n<ul>\n	<li><a href=\"https://oglobo.globo.com/rio/pm-ronnie-lessa-preso-acusado-de-matar-marielle-conhecido-por-ser-eximio-atirador-por-sua-frieza-23514910\">Leia mais sobre &Eacute;lcio e Ronnie aqui</a></li>\n</ul>\n\n<p>Esta not&iacute;cia possui fortes inspira&ccedil;&otilde;es na mat&eacute;ria do site Veja. Leia seguindo <a href=\"https://veja.abril.com.br/politica/policia-trabalha-com-tese-de-complo-de-mandantes-na-morte-de-marielle/\">este link</a>.</p>\n', '2021-03-06 20:30:48', 1),
(18, 2, 1, 'AnulaÃ§Ã£o de condenaÃ§Ãµes de Lula pÃµe ex-presidente na briga pela presidÃªncia em 2022', 'Edson Fachin, na Ãºltima segunda-feira (8), tomou a decisÃ£o de devolver os direitos polÃ­ticos de Lula, condenado nos casos do sÃ­tio de Atibaia, no caso TrÃ­plex e Instituto Lula. Para Fachin, a 13a Vara Federal Criminal de Curitiba nÃ£o tem competÃªncia para julgar os processos do ex-presidente Lula, decretando a anulaÃ§Ã£o das suas condenaÃ§Ãµes.', 'Edson Fachin, STF, Lula, Bolsonaro, SÃ©rgio Moro, eleiÃ§Ãµes 2022.', 'anulacoes-de-condenacoes-de-lula-poe-ex-presidente-na-briga-pela-presidencia-em-2022-2021-03-13', '604cdd010168b.jpg', 'imagem', 'Luiz InÃ¡cio Lula da SIlva. Foto / Google. Sujeita a Copyright.', '<p><strong>Edson Fachin</strong>, na &uacute;ltima <strong>segunda-feira (8)</strong>, tomou a decis&atilde;o de devolver os direitos pol&iacute;ticos de <strong>Lula</strong>, condenado nos casos do s&iacute;tio de Atibaia, no caso Tr&iacute;plex e Instituto Lula. Para Fachin, a 13a Vara Federal Criminal de Curitiba n&atilde;o tem compet&ecirc;ncia para julgar os processos do ex-presidente Lula, decretando a anula&ccedil;&atilde;o das suas condena&ccedil;&otilde;es. Com isso, Lula pode pintar como candidato na disputa pela presid&ecirc;ncia do pa&iacute;s em 2022.</p>\n\n<p>Fachin refor&ccedil;ou a decis&atilde;o frente ao Plen&aacute;rio da Corte nesta <strong>sexta-feira (12)</strong> de anular as condena&ccedil;&otilde;es do ex-presidente Luiz In&aacute;cio Lula da Silva (presidente do Brasil em duas ocasi&otilde;es e envolvido em v&aacute;rios processos criminais que remetem ao tempo que o mesmo era presidente) e ressaltou a incapacidade da 13&ordf; Vara Federal Criminal do Paran&aacute; de tratar dos processos de Lula.</p>\n\n<p>&ldquo;A verdade &eacute; que, ao longo dos &uacute;ltimos anos, a Segunda Turma avan&ccedil;ou na jurisprud&ecirc;ncia que j&aacute; havia sido estabelecida pelo plen&aacute;rio e ampliou a redu&ccedil;&atilde;o da compet&ecirc;ncia n&atilde;o s&oacute; da 13&ordf; Vara, como tamb&eacute;m da Justi&ccedil;a Federal nos delitos em que, no entender da maioria, poderia haver conex&atilde;o com a Justi&ccedil;a Eleitoral&rdquo; ã…¡ Disse Edson Fachin em <strong>entrevista ao UOL.</strong></p>\n\n<ul>\n	<li><a href=\"https://noticias.uol.com.br/politica/ultimas-noticias/2021/03/12/nao-posso-negar-a-lula-tratamento-diferente-de-outros-politicos-diz-fachin.htm\">Leia mais sobre a entrevista de Fachin ao UOL.</a></li>\n</ul>\n\n<h2>Ataques a Fachin</h2>\n\n<p>Ap&oacute;s tomar a decis&atilde;o de anular as condena&ccedil;&otilde;es do ex-presidente e restaurar seus direitos pol&iacute;ticos, <strong>Edson Fachin ã…¡ ministro do Supremo ã…¡ foi alvo de manifesta&ccedil;&otilde;es em frente a sua casa</strong>, no Jardim Social, bairro nobre de Curitiba. Fachin n&atilde;o sofreu qualquer ataque f&iacute;sico e est&aacute; em seguran&ccedil;a refor&ccedil;ada pelo STF (Supremo Tribunal Federal).</p>\n\n<p>&quot;A Suprema Corte ressalta que &eacute; inaceit&aacute;vel qualquer ato de viol&ecirc;ncia por contrariedade a decis&otilde;es judiciais. A Constitui&ccedil;&atilde;o e as leis asseguram a independ&ecirc;ncia de todos os magistrados. E, no Estado Democr&aacute;tico de Direito, o questionamento &agrave;s decis&otilde;es devem se dar nas vias recursais pr&oacute;prias&rdquo; ã…¡ Declara&ccedil;&atilde;o do STF sobre ataques a Fachin.</p>\n\n<p>Alguns pol&iacute;ticos e amigos mostraram solidariedade ap&oacute;s ataques a Fachin nas redes sociais, um deles foi S&eacute;rgio Moro, que disse o seguinte em sua conta oficial do Twitter: &quot;Rep&uacute;dio &agrave;s ofensas e ataques pessoais ao Ministro Edson Fachin do STF, magistrado t&eacute;cnico e com atua&ccedil;&atilde;o destacada na Opera&ccedil;&atilde;o Lava Jato. Qualquer discord&acirc;ncia quanto &agrave; decis&atilde;o deve ser objeto de recurso, n&atilde;o de persegui&ccedil;&atilde;o&rdquo;.</p>\n\n<p>O STF afirmou que a medida de refor&ccedil;ar a seguran&ccedil;a foi motivada pelos poss&iacute;veis questionamentos quanto &agrave;s decis&otilde;es recentes do ministro do Supremo, a respeito das anula&ccedil;&otilde;es e decis&otilde;es sobre os processos do ex-presidente Lula.</p>\n\n<ul>\n	<li><a href=\"https://diariodopoder.com.br/brasil-e-regioes/supremo-aumenta-seguranca-de-fachin-apos-tentativas-de-intimidacao\">Leia mais sobre os ataques sofridos por Fachin</a></li>\n</ul>\n\n<h2>Lula na corrida presidencial</h2>\n\n<p>Com todas as decis&otilde;es recentes de Fachin, <strong>Lula tem um caminho limpo para disputar as elei&ccedil;&otilde;es presidenciais em 2022 </strong>e j&aacute; aparece em dados como poss&iacute;vel candidato a bater de frente com Bolsonaro, segundo pesquisas da <strong>consultoria Atlas,</strong> se as elei&ccedil;&otilde;es fossem hoje, Lula e Bolsonaro iriam para decidir no segundo turno a faixa de presidente do pa&iacute;s.</p>\n\n<p><strong>Bolsonaro</strong> aparece com 32,7% das inten&ccedil;&otilde;es de voto, contra 27,4% de Lula, formando o primeiro pelot&atilde;o isolado â€• o presidente oscilou para baixo e Lula subiu cinco pontos em rela&ccedil;&atilde;o &agrave; pesquisa de janeiro. S&eacute;rgio Moro tamb&eacute;m aparece com inten&ccedil;&atilde;o de 9,7% de votos, mesmo o juiz ainda n&atilde;o decidindo sobre seu futuro como pol&iacute;tico.</p>\n\n<p>Ademais, Bolsonaro tamb&eacute;m estaria em apuros no segundo turno, podendo, neste momento, perder para o ex-presidente Lula, que aparece com 44,9% contra 36,9% de Bolsonaro, 8 pontos de diferen&ccedil;a â€•a disputa com <strong>Haddad</strong> seria mais apertada (43% a 39,4%), mas o petista tamb&eacute;m ganharia.</p>\n\n<p>&ldquo;Com tantos candidatos vencendo Bolsonaro no segundo turno, diria que nunca foi mais prov&aacute;vel do que neste momento que o presidente perdesse em 2022. Mas a vida d&aacute; voltas. O Brasil pode sair da pandemia neste ano. Em 2022, o Governo pode fazer assist&ecirc;ncia social e Bolsonaro ainda pode se recuperar&rdquo;, afirma <strong>Andrei Roman, CEO da Atlas.</strong></p>\n\n<ul>\n	<li><a href=\"https://brasil.elpais.com/brasil/2021-03-11/lula-ciro-e-mandetta-bateriam-bolsonaro-no-segundo-turno-em-2022-mostra-pesquisa-atlas.html\">Leia mais sobre estes dados fornecidos pela Atlas e trabalhados na mat&eacute;ria do site El Pais.</a></li>\n</ul>\n\n<p>Cabe nos pr&oacute;ximos dias saber se a decis&atilde;o ser&aacute; continuada ou n&atilde;o, j&aacute; que a PGR (Procuradoria Geral da Rep&uacute;blica) quer que o plen&aacute;rio do Supremo reveja a decis&atilde;o do ministro Edson Fachin.</p>\n\n<ul>\n	<li><a href=\"https://g1.globo.com/politica/noticia/2021/03/12/pgr-recorre-de-decisao-que-anulou-condenacoes-do-ex-presidente-lula-na-lava-jato.ghtml\">Leia mais sobre o assunto</a></li>\n</ul>\n', '2021-03-13 12:40:49', 1),
(19, 2, 1, 'Ciro Gomes estÃ¡ sendo investigado por PF apÃ³s criticar Bolsonaro', 'InquÃ©rito foi motivado pelo ministro da justiÃ§a depois de Ciro Gomes, adversÃ¡rio de Bolsonaro nas eleiÃ§Ãµes de 2018, criticar o presidente chamando-o de â€œladrÃ£oâ€.', 'Ciro Gomes, Bolsonaro, AndrÃ© MendonÃ§a, polÃ­tica', 'ciro-gomes-esta-sendo-investigado-por-pf-apos-criticar-bolsonaro-2021-03-20', '605642b21b9db.mp4', 'video', 'VÃ­deo removido do canal oficial de Ciro Gomes.', '<p>Inqu&eacute;rito foi motivado pelo ministro da justi&ccedil;a depois de <strong>Ciro Gomes</strong>, advers&aacute;rio de <strong>Bolsonaro</strong> nas elei&ccedil;&otilde;es de 2018, criticar o presidente chamando-o de &ldquo;ladr&atilde;o&rdquo;.</p>\n\n<p>A PF diz que n&atilde;o ir&aacute; comentar sobre o caso conceituado como crime &agrave; honra de Jair Bolsonaro.</p>\n\n<p>O crime &eacute; tipificado no artigo 145 do c&oacute;digo penal, segundo o pr&oacute;prio artigo ele s&oacute; deve ser aberto pelo pr&oacute;prio ministro da justi&ccedil;a. Na ocasi&atilde;o, foi o ministro <strong>Andr&eacute; Mendon&ccedil;a</strong> quem pediu para que fosse aberto o inqu&eacute;rito sobre o crime supostamente cometido por Ciro Gomes.</p>\n\n<p>Ciro Gomes disse possivelmente isso em uma entrevista dada pelo mesmo em novembro do ano passado &agrave; <strong>r&aacute;dio Tupinamb&aacute; de Sobral no Cear&aacute;</strong>. Ciro chamou Bolsonaro de ladr&atilde;o e que n&atilde;o tinha capacidade de administrar a economia do pa&iacute;s. Lembrou tamb&eacute;m das rachadinhas e como o ex-juiz S&eacute;rgio Moro foi omisso na ocasi&atilde;o.</p>\n\n<ul>\n	<li><a href=\"https://www.youtube.com/watch?v=T6rMtIvILvY\">Veja o v&iacute;deo da entrevista aqui</a>.</li>\n</ul>\n\n<p>O Ministro Andr&eacute; Mendon&ccedil;a intermediou o pedido &agrave; <strong>Pol&iacute;cia Federal</strong> e o pr&oacute;prio presidente assinou o documento enviado ao ministro, j&aacute; que &eacute; previsto pela lei que pedidos contra crimes a honra do presidente cabe ao ministro da justi&ccedil;a.</p>\n\n<ul>\n	<li><a href=\"https://g1.globo.com/politica/noticia/2021/03/20/pf-abre-inquerito-para-investigar-ciro-gomes-por-crime-contra-a-honra-de-bolsonaro.ghtml\">Mat&eacute;ria baseada fortemente na not&iacute;cia do G1.</a></li>\n</ul>\n', '2021-03-20 15:45:06', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opinioes`
--

CREATE TABLE `opinioes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `tags` varchar(450) NOT NULL,
  `url` varchar(500) NOT NULL,
  `arquivo` varchar(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `legenda` text NOT NULL,
  `postagem` text NOT NULL,
  `data` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `opinioes`
--

INSERT INTO `opinioes` (`id`, `id_usuario`, `categoria_id`, `titulo`, `descricao`, `tags`, `url`, `arquivo`, `tipo`, `legenda`, `postagem`, `data`, `status`) VALUES
(1, 9, 3, 'RogÃ©rio Ceni vs Domenec: Quem Ã© pior?', 'RogÃ©rio Ceni Ã© o segundo tÃ©cnico que fica na sombra de Jorge Jesus, mas comparado a Domenec, ele Ã© ainda pior.', 'RogÃ©rio Ceni, Flamengo, BrasileirÃ£o', 'rogerio-ceni-vs-domenec-quem-e-pior-2021-01-29', '601461da089b2.jpg', 'imagem', 'Foto / Google.', '<p>Rog&eacute;rio Ceni &eacute; o segundo t&eacute;cnico que fica na sombra de Jorge Jesus, mas comparado a Domenec, ele &eacute; ainda pior. Para isso trouxemos um pequeno levantamento de Domenec Torrent e Rog&eacute;rio Ceni, vale lembrar que Ceni ainda comanda o clube do rio, logo, poder&aacute; mudar suas estat&iacute;sticas ao decorrer desta temporada.</p>\n\n<h2>Domenec Torrent (2020-2020)</h2>\n\n<p>Come&ccedil;amos pelo treinador espanhol Domenec Torrent, que n&atilde;o teve uma passagem longa pelo ninho do Urubu, e nem &eacute; bem lembrado por ela, o treinador foi o primeiro t&eacute;cnico a assumir o time do Flamengo ap&oacute;s a sa&iacute;da de Jorge Jesus.</p>\n\n<p>Destaques para o time ofensivo de Torrent, com Pedro matador e Everton Ribeiro liso, o Flamengo de Domenec no ataque parecia ser o time mais letal do campeonato brasileiro, mas mesmo com show de bola em muitos jogos a defesa deixava a desejar, foi o time que mais sofreu gols, junto com o S&atilde;o Paulo, e n&atilde;o conseguiu alcan&ccedil;ar a primeira posi&ccedil;&atilde;o do campeonato.</p>\n\n<p>Mas Torrent com certeza vai ser lembrado pelas goleadas sofridas, sim, sofreu muitas! A primeira, para o Independiente Del Valle, pela fase de grupos da Libertadores, o Flamengo foi massacrado jogando na altitude, e rendeu bons memes. Mas apanhou ainda mais, pelo Brasileiro perdeu duas vezes de forma desastrosa, uma contra o S&atilde;o Paulo, por 4 a 1, e outra para o galo, por 4 a 0.</p>\n\n<p>Mas mesmo com os resultados quase inconsistentes, o Flamengo voltou a se destacar, e chegou a uma fase de 12 vit&oacute;rias seguidas, se classificou para o mata-mata da Libertadores, estava vivo no brasileiro, e na copa do brasil estava nas quartas de final.</p>\n\n<h2>Rog&eacute;rio Ceni (2020-atualmente)</h2>\n\n<p>Rog&eacute;rio Ceni foi a resposta da diretoria do Flamengo ap&oacute;s a demiss&atilde;o do t&eacute;cnico espanhol, Domenec, aquela altura Rog&eacute;rio era o nome mais falado pela imprensa, chegando a ser tratado como o melhor t&eacute;cnico brasileiro, e segundo ele mesmo, quando o Flamengo chama &eacute; quase imposs&iacute;vel de recusar, o treinador abandona seus projetos no Fortaleza e chega ao ninho do urubu.</p>\n\n<p>E chegou bem, treinando a equipe um dia antes contra o jogo v&aacute;lido pelas quartas de final da Copa do Brasil contra o seu ex-time, quando era jogador, e &iacute;dolo, S&atilde;o Paulo, o Flamengo perdeu por 2 a 1 com ajuda bizarra de Hugo Souza mesmo o Flamengo tendo sido o melhor time em campo.</p>\n\n<p>Mas que come&ccedil;o duro, dessa derrota at&eacute; agora, Rog&eacute;rio acumula elimina&ccedil;&otilde;es, o t&eacute;cnico saiu da Copa do Brasil de modo horr&iacute;vel, perdendo no Morumbi por 3 a 0, e da Libertadores nos p&ecirc;naltis para o Racing, e o time de Rog&eacute;rio ainda briga por um t&iacute;tulo de brasileiro na reta final do Brasileir&atilde;o 2020/2021.</p>\n\n<p>Destaques ao time do Rog&eacute;rio &eacute; a defesa mais organizada e menos vazada do que a de Torrent, e o meio campo produtivo e uma queda de rendimento no ataque, com gols perdidos de formas absurdas pelos atacantes do Flamengo.&nbsp;</p>\n\n<p>Rog&eacute;rio luta pelo t&iacute;tulo brasileiro, que ainda est&aacute; vivo ap&oacute;s golear o Gr&ecirc;mio jogando fora por 4 a 2.</p>\n', '2021-01-29 16:28:26', 1),
(2, 9, 3, 'SÃ£o Paulo, devolva o Juanfran', 'Jogador do SÃ£o Paulo protagoniza lances bizarros contra o Coritiba e soma sÃ©rie de erros no brasileiro.', 'SÃ£o Paulo, BrasileirÃ£o, Juanfran', 'sao-paulo-devolva-o-juanfran-2021-01-29', '60146317a5eb4.mp4', 'video', 'Video / Youtube.', '<p>Jogador do S&atilde;o Paulo protagoniza lances bizarros contra o Coritiba e soma s&eacute;rie de erros no brasileiro.</p>\n\n<p>Parecia que o S&atilde;o Paulo ia se resolver com Juanfran na defesa, vixi! Passou foi longe, o jogador at&eacute; tenta, se esfor&ccedil;a para correr, mas no fim d&aacute; na mesma, morto em campo, errando tudo que &eacute; lance, sem consist&ecirc;ncia, os cofres do S&atilde;o Paulo choram ap&oacute;s perder tanto dinheiro em um jogador mediano como Juanfran vem se mostrando ser.</p>\n\n<p>Veja lances acima.</p>\n', '2021-01-29 16:33:43', 1),
(4, 9, 3, 'DemissÃ£o de Diniz Ã© mais problema que soluÃ§Ã£o', 'O treinador dÃ¡ adeus ao SÃ£o Paulo Futebol Clube depois de quase dois anos no cargo e no zero de sempre do SPFC, mas demissÃ£o de Diniz mostra ainda mais que SÃ£o Paulo Ã© um time quebrado e que tem muitos problemas para solucionar.', 'SÃ£o Paulo, BrasileirÃ£o, Diniz', 'demissao-de-diniz-e-mais-problema-que-solucao-2021-02-02', '601975772a329.jpg', 'imagem', 'Foto / Google.', '<p>O treinador d&aacute; adeus ao S&atilde;o Paulo Futebol Clube depois de quase dois anos no cargo e no zero de sempre do SPFC, mas demiss&atilde;o de Diniz mostra ainda mais que S&atilde;o Paulo &eacute; um time quebrado e que tem muitos problemas para solucionar, muito mais que apenas demitir um treinador com resultados inconsistentes.&nbsp;</p>\n\n<p>Ontem (1) o SPFC comunicou a demiss&atilde;o do treinador Diniz, que vinha tendo resultados horripilantes no cargo de t&eacute;cnico no clube, Diniz chegou a uma s&eacute;rie de derrotas e a press&atilde;o foi gigante, resultado na sua sa&iacute;da mais do que tarde do clube (deveria ter sido demitido ainda no paulist&atilde;o).</p>\n\n<h2>E quem disse que isso ajuda em alguma coisa?&nbsp;</h2>\n\n<p>Uma coisa &eacute; certa, sua demiss&atilde;o n&atilde;o deve ser comemorada, muito menos aplaudida, ele foi demitido tarde, teve resultados ruins, mas isso s&oacute; mostra o desespero do S&atilde;o Paulo em buscar resultados r&aacute;pidos com &ldquo;solu&ccedil;&otilde;es pequenas&rdquo;, certo, o treinador j&aacute; foi, o Ra&iacute; tamb&eacute;m se mandou, como proceder? Falta mandar alguns embora sim.</p>\n\n<p>Sim, os jogadores, n&atilde;o podemos mandar a culpa apenas para as costas de Diniz, j&aacute; que meia d&uacute;zia de jogadores do time titular n&atilde;o jogam como deveriam, n&eacute; Sr. Daniel Alvez? Pregui&ccedil;osos, n&atilde;o correm, sim, demitir Diniz foi um passo, Ra&iacute; tamb&eacute;m, mas e os perebas que continuam jogando todo dia?</p>\n\n<p>Casares, voc&ecirc; tem coragem de mandar 6 jogadores titulares embora? Tem coragem de subir mais da base? Esse &eacute; o momento de mostrar como vai ser seu tempo na presid&ecirc;ncia resumida em poucas semanas.</p>\n', '2021-02-02 12:53:27', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `social` varchar(550) DEFAULT NULL,
  `biografia` varchar(150) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `permissoes` varchar(550) DEFAULT NULL,
  `nivel` varchar(250) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `foto`, `social`, `biografia`, `email`, `senha`, `permissoes`, `nivel`, `categoria_id`, `status`) VALUES
(1, 'Victor Miguel ', 'victor.jpg', '{\"instagram\":\"\",\"facebook\":\"\",\"youtube\":\"\",\"linkedin\":\"\"}', 'O autista nÃ£o Ã© de um mundo a parte, e sim deste.', 'vmsa03@gmail.com', '963f30b9950bf6599e751e87caf65874', 'ADD,EDIT', 'adm', 1, 1),
(2, 'PolÃ­tica', '6012d98038035.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'O Brasil se desenvolve a noite, quando os polÃ­ticos estÃ£o dormindo.', 'suporte@politizeesocialize.com', '6d765184685ad1ca3849dd920eff3a61', 'ADD,EDIT', 'escritor', 1, 1),
(3, 'Economia', '6011fe2810b93.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'Com trabalho, inteligÃªncia e economia sÃ³ Ã© pobre quem nÃ£o quer ser rico.', 'suporte@politizeesocialize.com', '9e836ee6e498e1b713d4e370a8aa436f', 'ADD,EDIT', 'escritor', 5, 1),
(4, 'SaÃºde', '6012da432d958.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'O CoronavÃ­rus ensinou, que somos incapazes de sobreviver por mais 1000 anos.', 'suporte@politizeesocialize.com', '7469364eedf4dc103372023e71a5f34d', 'ADD,EDIT', 'escritor', 4, 1),
(5, 'TelevisÃ£o', '6012dbd07579d.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'A televisÃ£o nÃ£o Ã© retrocesso, Ã© o avanÃ§o mais precioso do sÃ©culo.', 'suporte@politizeesocialize.com', '1f305bd88c3f23f46e656ee5bf6e4663', 'ADD,EDIT', 'escritor', 2, 1),
(6, 'MÃºsica', '6012dc5b666ca.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'A mÃºsica Ã© a emoÃ§Ã£o expressa em letras e sons.', 'suporte@politizeesocialize.com', 'b450e07c1c30a9d17bb4c629b79377ab', 'ADD,EDIT', 'escritor', 7, 1),
(7, 'EducaÃ§Ã£o', '6012dce170c12.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'Por que o Brasil nÃ£o avanÃ§a? A resposta estÃ¡ na educaÃ§Ã£o.', 'suporte@politizeesocialize.com', 'a748fbadf1e4adb4e81e1ad1343631f8', 'ADD,EDIT', 'escritor', 8, 1),
(8, 'Games', '6012dd505547b.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'GTA V Ã© o melhor jogo do sÃ©culo atÃ© o momento.', 'suporte@politizeesocialize.com', 'a4e9c4b6c02323ee5685c7012ac8f165', 'ADD,EDIT', 'escritor', 6, 1),
(9, 'Esportes', '6012de6ebd604.png', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/politizeesocialize\\/\",\"facebook\":\"https:\\/\\/pt-br.facebook.com\\/pages\\/category\\/Community\\/Politize-e-socialize-748330938697380\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/channel\\/UCfgaSsfSpQQx-h-5qhMR7ag\",\"linkedin\":\"\"}', 'Quem nÃ£o faz leva, a bola pune.', 'suporte@politizeesocialize.com', '386dc845af859069d34045fa6d40183b', 'ADD,EDIT', 'escritor', 3, 1),
(10, 'Charles Bruxel', '60342ecdb75ea.jpeg', '{\"instagram\":\"https:\\/\\/www.instagram.com\\/charles.bruxel\\/\",\"facebook\":\"https:\\/\\/www.facebook.com\\/bruxelcharles\",\"youtube\":\"\",\"linkedin\":\"\"}', '', 'charles.bruxel@gmail.com', 'c9d3144c0aac01a6d4b6275e3afe319d', 'ADD,EDIT', 'escritor', 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `assinantes`
--
ALTER TABLE `assinantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `competicoes`
--
ALTER TABLE `competicoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `opinioes`
--
ALTER TABLE `opinioes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assinantes`
--
ALTER TABLE `assinantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `competicoes`
--
ALTER TABLE `competicoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `opinioes`
--
ALTER TABLE `opinioes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
