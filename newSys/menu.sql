-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: menu
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `daily`
--

DROP TABLE IF EXISTS `daily`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daily` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(255) DEFAULT NULL,
  `meal` varchar(255) DEFAULT NULL,
  `chefs` varchar(255) DEFAULT NULL,
  `main` varchar(255) DEFAULT NULL,
  `veg` varchar(255) DEFAULT NULL,
  `piz` varchar(255) DEFAULT NULL,
  `grill` varchar(255) DEFAULT NULL,
  `deli` varchar(255) DEFAULT NULL,
  `soup` varchar(255) DEFAULT NULL,
  `soup2` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daily`
--

LOCK TABLES `daily` WRITE;
/*!40000 ALTER TABLE `daily` DISABLE KEYS */;
INSERT INTO `daily` VALUES (1,'Monday','Breakfast','Blueberry Pancakes','Sausage Links','Tri Hashbrown Potatoes','Farmers Egg Breakfast Bowl','-','','','','Pancakes'),(2,'Tuesday','Breakfast','French Toast','Bacon','Red Bliss Potatoes','Egg & Cheese English Muffin','','','','','Waffles'),(3,'Wednesday','Breakfast','Chocolate Chip Pancakes','Sausage Links','Tater Tots','Breakfast Chorizo Flatbread','','','','','Sausages'),(4,'Thursday','Breakfast','Cinnamon Doughnut French Toast','Corned Beef Hash','Shredded Hash Browns','Breakfast Pizza','','','','','Egg & Cheese Bagels'),(5,'Friday','Breakfast','Banana Walnut Pancakes','Maple Frizzled Ham','Diced Potatoes','Egg, Potato, Sausage & Cheese Bowls','','','','','Bagels with Cream Cheese'),(6,'Saturday','Breakfast','Buttermilk Pancakes','Sausage Patties','Fried Tater Tots','','','','','','Overnight Fondue'),(7,'Sunday','Breakfast','French Toast','Canadian Bacon','Lyonnaise Potatoes','','','','','','Scones'),(8,'Monday','Lunch','Pineapple Brown Sugar Glazed Ham','BBQ Chicken Quarters','Eggplant Parmesan','Mac N Cheese Pizza','Pulled Chicken Sandwiches','Corned Beef Banh Mi Biggie','Cabbage, Potatoes, and Bean Soup','Shrimp Gumbo',NULL),(9,'Tuesday','Lunch','Chicken Nugget Bar','Broccoli Pesto Penne','Spinach Fettuccine w/Marinara','Tandoori Chicken Pizza','Tuna Melt','Roasted Veggie Biggie','Creamy Turkey Wild Rice Soup','Southwest Three Bean Barley Soup',NULL),(10,'Wednesday','Lunch','Herb Grilled Chicken Thighs','Ground Turkey Tacos','Vegetarian Nacho Station','Greek Pizza','Chicken Tenders','Chimmichurri Chicken Biggie','Potato Chorizo Soup w/Spinach','Curried Carrot Soup',NULL),(11,'Thursday','Lunch','Beef Fajitas','Fried Catfish w/Remoulade Sauce','Vegetable Fajitas w/Rice & Black Beans','Tostado Pizza','Turkey Burgers','Greek Tuna Biggie','Smokey Navy Bean Soup','Chucky Vegetable Orzo Soup',NULL),(12,'Friday','Lunch','Fettuccine w/Alfredo or Marinara','Hot Dog Bar','Fried Tofu Steak w/Ginger Sauce & Rice','Sicilian Pizza','Sloppy Joes','Thai Chicken Biggie','Chicken & Andouille Sausage Gumbo','Potato Leek Soup',NULL),(13,'Saturday','Lunch','Open Faced Turkey Sandwich w/Gravy','Italian Sausages w/Bell Peppers & Onions','Three Bean Vegan Stew','-','-','-','Potato Leek','-',NULL),(14,'Sunday','Lunch','Mexican Chicken Cassarole','Braised Beef Tips w/Gravy','Cauliflower Tofu Stir Fry','Sausage Pizza','-','-','Three Bean Barley','-',NULL),(15,'Monday','Dinner','Taco Bar/ Chili Mac','Pork Shnitzel','Vegetarian Mac n Cheese','Mac N Cheese Pizza','Pulled Chicken Sandwiches','Corned Beef Banh Mi Biggie','Cabbage, Potatoes, and Bean Soup','Shrimp Gumbo',NULL),(16,'Tuesday','Dinner','Diablo Chicken','Yankee Pot Roast','Vegetarian Chili','Tandoori Chicken Pizza','Tuna Melt','Roasted Veggie Biggie','Creamy Turkey Wild Rice Soup','Southwest Three Bean Barley Soup',NULL),(17,'Wednesday','Dinner','Orange Chicken','Sloppy Chicago Sandwich','Vegetarian Chicken Tacos','Greek Pizza','Chicken Tenders','Chimmichurri Chicken Biggie','Potato Chorizo Soup w/Spinach','Curried Carrot Soup',NULL),(18,'Thursday','Dinner','Seafood Linguini','Nacho Bar ','Falafel w/Sides','Tostado Pizza','Turkey Burgers','Greek Tuna Biggie','Smokey Navy Bean Soup','Chucky Vegetable Orzo Soup',NULL),(19,'Friday','Dinner','Smorgasbord','Smorgasbord','Closed','Assorted Calzones','Closed','Closed','Bean & Bacon','Tomato Soup',NULL),(20,'Saturday','Dinner','Baked Salmon Filets','Honey Balsamic Pork Chops','Vegan Three Bean Chili','Chicken Cordon Bleu ','-','-','Roasted Tomato Tortilla','-',NULL),(21,'Sunday','Dinner','Creole Shrimp','Bangers and Mash','Asian Vegan Chicken Stir Fry','Supreme Pizza','-','-','Vegetarian Split Pea Soup','-',NULL),(22,'Saturday','Brunch','Buttermilk Pancakes','Sausage Patties','Scrambled Eggs','Chicken Parmesan','Marinara Sauce','Broccoli','Closed','Closed',NULL),(23,'Sunday','Brunch','Buttermilk Pancakes','Canadian Bacon','Tater Tots','cheese Ravioli W/ Meaty Mainara & Alfredo ','Cheese Ravioli & Marinara','','Three Bean Barley','-',NULL);
/*!40000 ALTER TABLE `daily` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `ID` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-27 23:49:18
