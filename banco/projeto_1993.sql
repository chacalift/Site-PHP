-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Ago-2022 às 01:38
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_1993`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `banner`) VALUES
(1, 'banner1.jpg'),
(2, 'banner2.jpg'),
(3, 'banner3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `produto` varchar(200) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(100) COLLATE utf8_bin NOT NULL,
  `tamanho` varchar(2) COLLATE utf8_bin NOT NULL,
  `valor` float NOT NULL,
  `descri` mediumtext COLLATE utf8_bin NOT NULL,
  `foto` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `categoria`, `tamanho`, `valor`, `descri`, `foto`) VALUES
(11, 'Vestido Preto', 'Normal', 'G', 656.56, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla suscipit porta. Maecenas aliquam ullamcorper euismod. Nulla quis interdum tellus. Duis congue sollicitudin lacus non vehicula. Maecenas sagittis pulvinar risus eu vehicula. Praesent ligula arcu, maximus non lorem quis, eleifend efficitur enim. Cras sed fringilla risus. Vivamus sed rutrum tortor, quis convallis eros. Ut finibus consequat ullamcorper. Donec gravida arcu et tortor placerat auctor. Vivamus ac convallis sem. Morbi bibendum sollicitudin pellentesque. Vivamus leo augue, pharetra a tristique ac, bibendum nec elit. Suspendisse sit amet ipsum dapibus, malesuada eros quis, euismod elit. Praesent vel arcu a neque porta ultricies ac tincidunt diam. Sed luctus augue nec ultrices consectetur.\r\n\r\nCras sapien eros, lacinia in efficitur id, sollicitudin a purus. Cras ultrices tincidunt ex sed posuere. Maecenas suscipit sit amet eros vitae eleifend. In pharetra velit non ante sollicitudin, a posuere elit pharetra. Sed neque est, tempor quis luctus id, vestibulum tincidunt neque. Suspendisse convallis enim at quam venenatis, vel cursus turpis dignissim. Duis rhoncus, metus quis consectetur sagittis, nibh odio blandit massa, sed eleifend lorem velit ut nisi. Integer ullamcorper turpis eget ligula posuere rhoncus. Fusce eu feugiat nunc.', 'princess-model-486c60bc57c9b0fdcc88a0e13e3ba001.jpg'),
(12, 'Vestido Azul', 'Lançamento', 'M', 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean metus tortor, feugiat in tellus id, dictum tincidunt augue. Vivamus malesuada augue sit amet ipsum vestibulum congue. Sed vestibulum metus id orci aliquam convallis. Donec sollicitudin eros quis nibh dapibus mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras consequat pulvinar ipsum, eu dignissim nisi placerat eget. Sed magna purus, ultricies at vulputate in, mollis ut sapien.\r\n\r\nFusce neque sem, sagittis ac dictum eu, gravida vulputate mauris. Nullam at sapien dictum mauris lacinia efficitur ut vel ex. Aliquam faucibus felis eget lectus pretium tincidunt eget ac mi. Aliquam lacinia purus lacus, efficitur lacinia erat luctus non. Ut aliquam consectetur eros, eget placerat odio mollis nec. Donec efficitur facilisis urna eu aliquet. Nulla lacinia augue metus, id consequat nunc vulputate ac. Sed consectetur sed mauris et placerat. Nam rhoncus venenatis libero nec efficitur. Pellentesque lacus erat, lacinia non dui et, gravida commodo purus. Quisque molestie, metus vitae finibus auctor, lectus magna tincidunt diam, et commodo mi elit at turpis. Ut a tortor tristique, egestas arcu sit amet, vulputate ex.', 'princess-model-dae834dc83f6d3f3b936533d767fd874.jpg'),
(13, 'Vestido Coração', 'Outlet', 'P', 1515.54, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam lectus rhoncus orci elementum mollis. Curabitur sagittis in lectus nec sagittis. Nam quam augue, blandit in tincidunt ac, tincidunt vitae justo. Proin fermentum mauris et arcu ullamcorper sodales. Phasellus sollicitudin nulla lorem, tempor mollis turpis faucibus sed. Ut commodo tortor eget posuere convallis. Pellentesque commodo in felis quis pellentesque.', 'princess-model-a40795c17ce6d9a188f998b3f8a63f7c.jpg'),
(14, 'Vestido Verde', 'Normal', 'GG', 6516.51, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus id urna at faucibus. Suspendisse quis commodo lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi ornare lorem ut fermentum sodales. Quisque tristique odio elit, vel molestie lectus consectetur eget. Aliquam tincidunt tellus egestas ex gravida congue. Sed a posuere turpis. Nulla blandit, nulla at sodales commodo, elit justo interdum elit, et hendrerit magna sapien sed dui. Phasellus ac eros pellentesque, semper ligula nec, accumsan lorem.', 'princess-model-0d7df047c4b609ed432ec0e1316b8002.jpg'),
(15, 'Conjunto Inverno', 'Outlet', 'M', 984.56, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie sit amet justo non eleifend. Suspendisse pharetra imperdiet ex, vitae tempus nunc porta fringilla. Duis facilisis nunc augue, scelerisque molestie urna sagittis et. Duis pellentesque neque id nunc luctus, id commodo quam bibendum. Maecenas imperdiet tincidunt porttitor. Donec ullamcorper nisl a vehicula blandit. Cras non lorem quis lorem condimentum aliquam nec in enim. Nunc efficitur dapibus enim consectetur auctor. Sed viverra vestibulum bibendum. Etiam quis imperdiet lorem. Donec eu tincidunt ipsum. Nunc tempor dui non nibh vestibulum tristique. Pellentesque bibendum nibh imperdiet elit viverra maximus. Donec scelerisque aliquet eros.', 'princess-model-f58219ac5938539e022ee7370f6f257f.jpg'),
(16, 'Vestido Vinho', 'Normal', 'M', 6516.57, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel enim dignissim, fringilla enim et, condimentum lacus. Curabitur facilisis urna gravida leo porttitor, consequat molestie metus iaculis. Curabitur vitae sollicitudin nibh. Morbi sed luctus leo, vitae imperdiet erat. Nullam in purus id tortor congue hendrerit ac in nisl. Sed dignissim maximus nisi, a rutrum mi dictum ac. Nulla eget sodales lacus. Maecenas et dapibus dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet ac odio id tempor. Donec tempus facilisis metus. Fusce fermentum fringilla nisl sit amet scelerisque.', 'princess-model-7e2830f3fda96eea571712106e4080a3.jpg'),
(17, 'Pijama', 'Outlet', 'G', 944.56, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ullamcorper dui at lorem imperdiet, ut finibus odio elementum. Maecenas vitae urna malesuada, lobortis purus sit amet, cursus arcu. Phasellus molestie gravida sem id tincidunt. Donec congue augue at consequat malesuada. Vivamus finibus sit amet sapien sit amet congue. Duis interdum eu arcu id lacinia. Donec mattis sit amet eros vulputate ornare. Donec aliquam tellus nibh, at sollicitudin felis venenatis ut. Vivamus ut dapibus erat. Pellentesque non metus blandit lorem porttitor luctus. Sed purus diam, molestie maximus tempus a, sollicitudin eu ante. Fusce ornare, orci non dapibus volutpat, velit eros pharetra leo, fringilla consequat felis felis in lacus. Integer elit elit, ullamcorper eget pellentesque eu, elementum eu nunc. Duis condimentum blandit congue. Nullam dignissim velit non molestie euismod.', 'princess-model-5457c6c61a08ebb3d3ba9012088f7ebf.jpg'),
(18, 'Vestido Flor', 'Lançamento', 'GG', 1657.45, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas elementum quis ante eget pulvinar. Nam in risus velit. Pellentesque ac mi in dolor mollis tristique eu vel purus. Duis aliquet sem vel nunc dapibus, quis imperdiet libero fermentum. Curabitur non nisl vitae felis tristique sodales. In pellentesque erat eget iaculis accumsan. Maecenas bibendum felis sapien, nec egestas sem dictum eu. Nam gravida erat ultrices finibus sagittis. Aliquam a ante sit amet nulla faucibus interdum quis a neque. In eu turpis in ante porta sollicitudin. Mauris a eros sed urna tincidunt egestas sit amet ac enim. Nunc in ipsum magna. Cras nec mauris finibus, tempus ex eu, congue elit.', 'princess-model-5b1bc6cab45a390553735292bf4cfbdb.jpg'),
(19, 'Conjunto Simpsons', 'Outlet', 'M', 655.74, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis libero arcu, laoreet eu pellentesque id, accumsan sit amet tortor. Morbi porta neque ut dictum varius. Nullam purus orci, porta sed ligula eget, euismod fringilla erat. Maecenas dapibus, lectus id interdum faucibus, ligula dui rhoncus odio, nec volutpat massa diam in eros. Nulla et mattis sapien. Donec vel lacus neque. Maecenas nec commodo mi.', 'princess-model-9d4cd697c7cee61fe8bab5322e511ba7.jpg'),
(20, 'Vestido Água marinha', 'Outlet', 'P', 400.55, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut velit eget mi vehicula maximus. Integer varius commodo pulvinar. Aliquam eleifend ultrices maximus. Integer a velit eu diam feugiat vehicula quis vel enim. Curabitur egestas bibendum lectus, nec interdum lorem interdum a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut sollicitudin bibendum maximus. Nullam accumsan magna vitae libero eleifend, at faucibus nisl bibendum. Nam vitae fringilla lectus, ac interdum neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eu tempus ex, nec fringilla sem.', 'princess-model-c0b01a22b47bb4e06b842737c1b9c798.jpg'),
(21, 'Conjunto Pro', 'Outlet', 'G', 805.56, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc semper enim vel quam vehicula tempor. Cras pulvinar mattis turpis in condimentum. Cras vel dolor mollis, cursus dui vitae, eleifend erat. Quisque sodales, augue vitae mattis laoreet, sem lacus aliquam erat, a mollis justo odio ac dui. Ut consequat et mauris sit amet maximus. Mauris id lacinia leo. Nulla molestie tortor nec enim tincidunt molestie. Suspendisse pulvinar quam sit amet lectus semper, id condimentum ex porta. Donec leo nibh, sollicitudin vel venenatis a, tempor sed mauris. Duis dictum orci eget risus facilisis, at sollicitudin enim facilisis. Aenean viverra est ex, pretium rutrum mi volutpat a. Morbi rhoncus in libero non sollicitudin. Ut sed condimentum ipsum. Fusce lobortis dui eu tellus aliquam consequat. Donec et nunc quis dui porta dictum. Cras ut dolor vulputate lectus pellentesque vulputate.', 'princess-model-0abfe88cc388071937a8892341cee0e7.jpg'),
(22, 'Velho Oeste ', 'Lançamento', 'M', 905.54, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id elementum nunc. Mauris consectetur purus et mollis egestas. Nulla vel ipsum vitae sem ultricies pharetra sed quis felis. Curabitur est purus, suscipit vitae ipsum ut, efficitur ornare nulla. Praesent fringilla elementum eros, sit amet accumsan massa euismod at. Phasellus non rutrum tellus, eget condimentum eros. Pellentesque id sollicitudin ipsum, eget mollis justo. Sed blandit, nibh a gravida vehicula, leo nisi tristique justo, ut ullamcorper enim ligula a quam. Proin at aliquam magna. Suspendisse sagittis ipsum tempus augue finibus consequat. Donec sed metus ex. Phasellus ac dolor tincidunt, sodales lorem vitae, mollis nisl. Fusce ipsum felis, malesuada vitae risus vitae, mattis aliquet elit. In eu velit in est lobortis blandit. Suspendisse non lobortis lectus, vitae consectetur ligula.', 'princess-model-a394c8f9acec613a7e2c9e3cbe2b13bd.jpg'),
(23, 'Dark Dress', 'Outlet', 'G', 496.56, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pretium aliquet mauris, nec laoreet augue viverra tempor. Pellentesque efficitur luctus dui eu eleifend. Nulla dui tellus, laoreet et metus ut, tempor egestas felis. Duis et arcu malesuada, pharetra mauris ac, condimentum erat. Nulla hendrerit pulvinar enim, vitae consequat odio molestie nec. Vestibulum vitae nulla eget magna euismod condimentum gravida sit amet sapien. Mauris dignissim ultricies odio, ut fringilla eros malesuada in. Nunc imperdiet et neque sit amet vulputate. Sed fermentum elit lacinia tristique laoreet. Nam sed ante id ipsum fermentum ultrices. Cras tristique tempus sapien eu laoreet. Duis tristique quam a quam suscipit, eget semper ex molestie. Vivamus vel erat nisl. Integer fringilla, justo id mattis tempus, arcu ligula tincidunt eros, at accumsan mi ipsum ac urna. Duis vehicula magna consequat eros mattis pharetra.', 'princess-model-938b5a912e7fc08c060f97f619e5d2bd.jpg'),
(24, 'Vestido Salmão ', 'Normal', 'P', 955.85, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices dictum accumsan. Aenean eget fermentum lorem, vitae iaculis sem. Donec sed porttitor elit. Fusce non nisi a felis blandit commodo. Aenean at malesuada magna, eget viverra quam. Ut bibendum rutrum pellentesque. Sed nec dui sed lacus fermentum malesuada eu eget sapien. Donec malesuada fermentum pharetra. Aenean ornare justo nec dapibus commodo. Ut justo nisi, dignissim at nibh et, iaculis molestie eros.', 'princess-model-3c1febb02d921df6eacf3d081a792162.jpg'),
(25, 'Vestido com Listras ', 'Outlet', 'G', 777.77, '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non placerat elit. Nam quis lacus in turpis ornare convallis id eget eros. Proin feugiat hendrerit hendrerit. Aenean faucibus elementum metus, vitae consequat mi pulvinar et. In lectus ante, pellentesque eu dignissim et, ultricies vitae felis. In condimentum, ligula eget consequat facilisis, lorem arcu vehicula nunc, ultricies sollicitudin justo nunc eu augue. Vivamus sodales sollicitudin dui, eu blandit ante efficitur nec. Donec sodales tempus tincidunt. Praesent eget pellentesque velit. Sed ac odio sapien.', 'princess-model-5439e7fde1c71653632d0045b9a5aa72.jpg'),
(26, 'Conjunto Flash', 'Normal', 'P', 897.85, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus quis velit at convallis. Curabitur hendrerit tempor tortor, sed mattis felis. Cras sem elit, malesuada et mauris ut, suscipit varius diam. Nulla facilisi. Mauris in mi ac ex lobortis blandit. Donec tristique convallis tellus sit amet dignissim. Morbi dignissim accumsan sapien ut hendrerit.', 'princess-model-0b83b34ea243f6f082b8c47915c0e1d8.jpg'),
(27, 'Conjunto Praia', 'Lançamento', 'P', 6598.75, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae arcu vitae nisl luctus rhoncus. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla dapibus lacinia cursus. Pellentesque nec tristique ante, cursus vulputate magna. Sed velit sapien, hendrerit quis egestas vel, condimentum vitae erat. Duis vel nisl ut dui fermentum tincidunt. Donec pretium dictum nunc eget lacinia. Duis arcu purus, sagittis non dignissim eu, maximus a lectus. Duis at blandit turpis. Nulla et velit id erat luctus varius non in justo. Quisque odio enim, egestas ultrices felis vel, varius volutpat sem. Phasellus ut justo eu augue venenatis scelerisque. In non lorem luctus tellus faucibus hendrerit in eu ante.', 'princess-model-17425cc29919d8c823bd02f355e08501.jpg'),
(28, 'Vestido Azul Piscina', 'Outlet', 'M', 978.64, '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel convallis erat, in imperdiet diam. Pellentesque hendrerit, magna at vulputate vulputate, dolor lacus suscipit nisl, nec fermentum dui sapien at velit. Donec ac lectus quis magna lacinia viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent ornare cursus lacus. Sed sed eros ut neque dictum bibendum. Nulla at luctus lacus. Praesent id felis vel lectus pellentesque dapibus vel eu justo. Nunc vel ex congue, ornare nisl sed, convallis sapien. Praesent vitae volutpat tortor. Quisque eu nunc at nunc malesuada efficitur. Ut pretium diam et enim fringilla, non placerat urna ullamcorper. Etiam ac dolor et nisi scelerisque luctus at a quam. Suspendisse mattis vehicula efficitur. Proin et euismod nisl.', 'princess-model-e164bef9b253dc2fdf1d57bfa833bf2a.jpg'),
(29, 'Vestido Estampado ', 'Outlet', 'GG', 468.54, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac metus sed ante iaculis ornare. Proin sed lorem vel mauris imperdiet malesuada sit amet at erat. Aenean porta urna non dolor pretium tristique. Maecenas eleifend nibh finibus, ultrices diam eu, mollis magna. Cras viverra cursus congue. Donec quis elementum sapien. In hac habitasse platea dictumst. Etiam congue nec diam vel porttitor. Donec id quam feugiat, varius arcu mollis, tempor augue. Nunc aliquam placerat nibh ac rutrum. Vestibulum euismod arcu non rhoncus sollicitudin. Donec auctor sed elit nec bibendum. Phasellus consectetur volutpat nibh, et fringilla purus cursus sit amet. Suspendisse potenti.', 'princess-model-42bc0051110a9b4ed59bc20c91411539.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `user` varchar(100) COLLATE utf8_bin NOT NULL,
  `pass` varchar(100) COLLATE utf8_bin NOT NULL,
  `nivel` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `user`, `pass`, `nivel`) VALUES
(1, 'Rodrigo', 'rodrigo@princessmodel.com', 'master', 'master', 'admin'),
(2, 'Mário', 'mario@princessmodel.com', 'mario', '123', 'editor'),
(4, 'macaco fdfdsds', 'macaco@gmail.com', 'macaco', '123', 'editor'),
(6, 'macacos amigoss s', 'macacoss@gmail.com', 'macacos', '123', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
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
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
