-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: test7
-- ------------------------------------------------------
-- Server version	5.6.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productquant` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (72,1,11,3),(74,1,10,1),(75,1,3,7);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'catalog','Каталог'),(2,'reviews','Отзывы');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addr` text NOT NULL,
  `name` text NOT NULL,
  `width` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'artifice.jpg','Карты Artifice Tundra NEW',740,16,'Дизайнерская студия Ellusionist, из под чьего пера&quot; в 2011 году впервые вышла колода Artifice, продолжает радовать фокусников, кардистов и коллекционеров новыми редакциями этой великолепнейшей разработки, каждый раз привнося в серию что-то необычайно интересное. После потрясающе успешных Artifice v2, Emerald и Purple, и просто чумовых Artifice Red и Black Club Edition, дизайнеры решили отойти от концепции колоды с черной рубашкой и выпустили нечто совершенно иное. Встречайте, Artifice Tundra - леденяще-белоснежная рубашка и холодные, обесцвеченные лица. ',100),(2,'blue.png','Колода Blue White WTF',740,13,'Описание скоро будет',200),(3,'cardistry.png','Колода Art of Cardistry',740,60,'Колода Art of Cardistry отдает дань уважения искусству манипулирования картами. Дизайн каждой карты пересматривался свыше 50 раз, дабы найти тот идеальный рисунок, что смог бы отразить изящество и эффектность кардистри-культуры. Впервые эти карты продемонстрировали на международной конференции фокусников в Блэкпуле, и уже тогда за ними выстроилась огромная очередь. Карты напечатаны компанией USPCC, разработаны компанией BOCOPO. Рубашка карт создана для невероятных вееров и головокружительных пируэтов карт. Мозаика, собранная из разных оттенков, смотрится очень эффектно. Лица карт имеют лишь очертания, что придает особый стиль колоде. Туз Пик – самая яркая карта. На Джокерах изображена мозаичная корона. Карты напечатаны на бумаге высшего качества, мягкие и приятные на ощупь. Карты с красной рубашкой выпущены ограниченной серией. <p>Колода Art of Cardistry отлично подойдет для фокусов и кардистри. </p>',300),(4,'cobra.png','Игральные карты Cobra',740,29,'Кобра – одна из самых опасных змей в мире, символ грации, скорости и силы. Собранная из кристаллов, она стала символом колоды. Кристальная фиолетово-голубая рубашка завораживает взгляд. Яркие переливы и стильный дизайн. Карты разложены в особом порядке “Мнемоника”. Также в колоде есть две гафф-карты. Crystal Cobra отлично подойдет для фокусов и кардистри! ',400),(5,'copag.png','Карты Copag',740,5,'Колода Copag 310 находилась в разработке 2 года. Было создано более 300 прототипов, задействовано множество фокусников, кардистов и игроков в покер. Все для того, чтобы получить самую совершенную по качеству колоду. Copag 310 – это революционные карты, созданные по абсолютно новой технологии В9. Карты стали прочнее, тоньше и мягче. Невероятное качество, которое по достоинству оценят профессионалы и все любители игральных карт. ',500),(6,'deer.png','Игральные карты Deer',740,24,'Описание будет добавлено в ближайшее время.',600),(7,'evolution.png','Карты Evolution Blue',740,5,'Футуристическая колода «Bicycle Evolution» словно послание из далекого будущего! Непривычное оформление с множеством мелких деталей и нотками космических технологий! Взяв колоду в первый раз, задаешься вопросом, а из нашего ли мира этот шедевр? Коробочка и сами карты отливают металлом! Качество на высоте, а покрытие Custom Finish позволяет с легкостью выполнять сложнейшие элементы! Ограниченный тираж «Bicycle Evolution» – вызов для каждого коллекционера! Уникальная колода для необычных людей! ',700),(8,'hyperspace.jpg','Карты Saturn Hyperspace',740,4,'«Хьюстон, прием!» Карты Saturn hyperspace проделали путь в несколько световых лет ради того чтобы стать первой космической колодой карт на планете Земля. На темно-серой матовой рубашке расположились плавно расходящиеся в стороны круги. Первая во Вселенной колода с прерывистой окантовкой гарантирует космический уровень веерам и флоришам. Лица карт стандартные лица Bicycle с измененной цветовой палитрой. Джокеры выполнены в космическом стиле. Элегантный Туз Пик дополняет атмосферу бесконечного космоса. На создание карт авторов вдохновили минимализм и качество классических колод для казино. Также в колоде есть карта с двойной рубашкой и карта с пустым лицом. Коробочка карт продолжает космическую тематику. На ней выложена хромированной фольгой эмблема колоды – расходящиеся круги, по бокам выгравированы красные и белые линии. На нижней стороне коробочке красуется роспись автора колоды - Фрэнка Моралиса. Забавный факт: Изначально карты назывались Space Jam, и на всех настоящих колодах сбоку имеется надпись «Space Jam», в отличие от подделок на которых написано «Hyperspace». Карты были в разработке около двух лет, за это время дизайн менялся несколько раз, от супер-космического до более реалистичного. Карты выпущены ограниченным тиражом, всего 10 000 колод. ',800),(9,'memento.jpg','Колода Memento Mori',740,4,'Смерть является таким же неотъемлемым явлением нашего мира, как и сама Жизнь. Об этом хорошо знали в Древнем Риме, поэтому фраза \"Memento Mori\" (лат. \"Помни о Смерти\") была в то время очень популярна. Не утратила своего смысла эта фраза и в наше время. Несмотря на технический прогресс и сумасшедший ритм жизни мы все смертны. Многие историки считают, что игральные карты имеют огромное эзотерическое значение. 4 масти - это 4 времени года, 13 карт каждой масти - 13 фаз луны, 52 карты в колоде - 52 недели в году, а вся колода - это один год жизни. Украшением этой потрясающей колоды стал один из символов смерти - Череп. Как ни странно, но даже такой, казалось бы, стандартный предмет, дизайнеры смогли сделать оригинальным - череп \"собран\" из полигонов разных цветов и выглядит очень современно и стильно. Такие же черепа изображены и на каждой рубашке, а рисунки старших карт как будто специально обезличены. Cмерти всё равно, кого забирать. Memento Mori - колода в минималистичном стиле, она станет отличным подарком фокусникам, кардистам и коллекционерам. Тираж ограничен. ',900),(10,'noc.jpg','Колода NOC',740,101,'Серия колод NOC не изменяет себе и продолжает удивлять. Яркий и насыщенный цвет рубашки заряжает энергией. Туз Пик не подвергся изменениям, авторы только сузили белую полосу, пересекающую масть. Фирменные звездочки на джокерах радуют взгляд. В колоде также есть карта с пустым лицом и карта с двойной рубашкой для фокусов с изменением цвета колоды. NOC sport – яркая лимитированная серия. Карты напечатаны компанией USPCC, отлично подойдут для фокусов и кардистри. ',1000),(11,'ultra.png','Игральные карты Ultra',740,13,'Описание будет добавлено в ближайшее время.',1100),(12,'wasteland.png','Карты Wasteland',740,3,'Описание будет добавлено в ближайшее время.',1200);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `author` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (2,'Магазин супер! Всё просто огонь! Вот так вот! Буду еще заказывать! Обязательно!','Петя'),(3,'Купил здесь карты и считаю это своей лучшей инвестицией в завтрашний день. Доставили так быстро, что я даже не успел выйти в магазин за пивом. Консультанты вообще огонь, помогли выбрать и оформить заказ через сайт. Всем советую, кароч.','Игорь Карапетян'),(33,'Карты клёвые, обязательно куплю еще раз!','Николай'),(34,'Спасибо за всё, всё понравилось','Константин');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `realname` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test','test','Василий'),(2,'test2','test2','Петр'),(3,'test3','test3','Сергей'),(4,'test4','test4','Николай'),(5,'test5','test5','Константин'),(6,'test6','test6','Мария'),(7,'test7','test7','Ирина');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-22 15:04:48
