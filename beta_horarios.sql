-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: beta_horarios
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ambiente`
--

DROP TABLE IF EXISTS `ambiente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ambiente` (
  `id_A` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_ambiente` varchar(100) NOT NULL,
  `Capacidad_ambiente` varchar(100) NOT NULL,
  `No_equipos` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  PRIMARY KEY (`id_A`),
  KEY `relacion_sede` (`id_sede`),
  CONSTRAINT `relacion_sede` FOREIGN KEY (`id_sede`) REFERENCES `sede` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ambiente`
--

LOCK TABLES `ambiente` WRITE;
/*!40000 ALTER TABLE `ambiente` DISABLE KEYS */;
INSERT INTO `ambiente` VALUES (11,'ADSI 301 ','30',30,7),(12,'302 ','20',20,7),(13,'304','25',25,7),(14,'305 ','40',40,7);
/*!40000 ALTER TABLE `ambiente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dias`
--

DROP TABLE IF EXISTS `dias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dia_s` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dia_s` (`dia_s`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dias`
--

LOCK TABLES `dias` WRITE;
/*!40000 ALTER TABLE `dias` DISABLE KEYS */;
INSERT INTO `dias` VALUES (1,'Lunes'),(2,'Martes'),(3,'Miercoles'),(4,'Jueves'),(5,'Viernes'),(6,'Sabado');
/*!40000 ALTER TABLE `dias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ficha`
--

DROP TABLE IF EXISTS `ficha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ficha` (
  `ID_F` int(11) NOT NULL AUTO_INCREMENT,
  `Nº ficha` varchar(11) NOT NULL,
  `fc_cant_aprend` int(11) NOT NULL,
  `fc_jornada` varchar(45) NOT NULL,
  `fc_tipo_formacion` varchar(45) NOT NULL,
  `fic_date_I` date NOT NULL,
  `fic_date_F` date NOT NULL,
  `fc_id_programa` int(11) NOT NULL,
  `estatus_trim` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID_F`),
  KEY `relacion_prog` (`fc_id_programa`),
  CONSTRAINT `relacion_prog` FOREIGN KEY (`fc_id_programa`) REFERENCES `programa` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ficha`
--

LOCK TABLES `ficha` WRITE;
/*!40000 ALTER TABLE `ficha` DISABLE KEYS */;
INSERT INTO `ficha` VALUES (36,'145236',23,'Diurna','Presencial','2020-08-02','2022-08-02',88524469,1);
/*!40000 ALTER TABLE `ficha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horarios` (
  `id_hora` int(11) NOT NULL AUTO_INCREMENT,
  `dia` int(11) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL,
  `hora` int(11) DEFAULT NULL,
  `id_ambiente` int(11) DEFAULT NULL,
  `horas_instructor` int(11) NOT NULL DEFAULT 2,
  `id_trim_fch` int(11) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_hora`),
  KEY `dia` (`dia`) USING BTREE,
  KEY `ficha` (`ficha`),
  KEY `instructor` (`instructor`),
  KEY `hora` (`hora`),
  KEY `R` (`id_ambiente`),
  KEY `Prueba_relacion` (`id_trim_fch`),
  CONSTRAINT `Prueba_relacion` FOREIGN KEY (`id_trim_fch`) REFERENCES `tb_trimestre` (`id_T`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `relacion_H1` FOREIGN KEY (`dia`) REFERENCES `dias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `relacion_H2` FOREIGN KEY (`ficha`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `relacion_H3` FOREIGN KEY (`hora`) REFERENCES `horas` (`id_h`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `relacion_H4` FOREIGN KEY (`instructor`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=307 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarios`
--

LOCK TABLES `horarios` WRITE;
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
INSERT INTO `horarios` VALUES (295,1,36,21,1,12,2,79,'Inglés'),(296,1,36,22,2,13,2,79,'Comunicación'),(297,1,36,23,3,11,2,79,'Inge Software'),(298,2,36,24,2,11,2,79,'Algoritmos 1'),(299,2,36,23,3,11,2,79,'Inge Software'),(300,3,36,24,3,11,2,79,'Algoritmos 1'),(301,3,36,25,2,14,2,79,'Emprendimiento'),(302,4,36,23,1,11,2,79,'Inge Software'),(303,4,36,24,3,11,2,79,'Algoritmos 1'),(304,5,36,26,2,12,2,79,'Cultura'),(305,6,36,24,1,11,2,79,'Algoritmos 1'),(306,6,36,23,3,11,2,79,'Inge Software');
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horas`
--

DROP TABLE IF EXISTS `horas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horas` (
  `id_h` int(11) NOT NULL AUTO_INCREMENT,
  `hora` varchar(100) NOT NULL,
  PRIMARY KEY (`id_h`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horas`
--

LOCK TABLES `horas` WRITE;
/*!40000 ALTER TABLE `horas` DISABLE KEYS */;
INSERT INTO `horas` VALUES (1,'6:00-7:40'),(2,'8:00-9:40'),(3,'10:00-11:40'),(4,'12:00-13:40'),(5,'14:20-16:00'),(6,'16:20-18:00'),(7,'18:15-19:45'),(8,'20:00-21:40');
/*!40000 ALTER TABLE `horas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `horas_inst` int(11) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`),
  KEY `relacion_rol` (`rol`),
  CONSTRAINT `relacion_rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES (2,'Giovany','Ortiz','gio@gmail.com','d6581d542c7eaf801284f084478b5fcc',20,1,NULL),
(21,'Dora ','Torres','dora@gmail.com','6786f3c62fbf9021694f6e51cc07fe3c',20,2,'bc576b486902ebd5264bf594047b1b93'),
(22,'Carlos','Sánchez','carlos@gmail.com','e1021d43911ca2c1845910d84f40aeae',20,2,'70e31fbd240b8b1f90ccb12e8029adcf'),
(23,'William','Ospina','jacaon81@misena.edu.co','e1021d43911ca2c1845910d84f40aeae',40,2,'923e29bf7308f27b985570cc3ec20ad9'),
(24,'Andrés','Rubiano','andres@gmail.com','0c74b7f78409a4022a2c4c5a5ca3ee19',40,2,'89e8fe3e7d3424fe5f2732802279ea5f'),
(25,'Arnulfo','Bolivar','arnulfo@gmail.com','e1021d43911ca2c1845910d84f40aeae',20,2,'9549920ec9d7817c38ca994d2b215306'),
(26,'Camilo','Castillo','camilo@gmail.com','743c41a921516b04afde48bb48e28ce6',20,2,'cd3dea29e269e926fef27df1b7078022');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_program` varchar(100) NOT NULL,
  `nivel_form` varchar(45) NOT NULL,
  `competencias` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_program`)
) ENGINE=InnoDB AUTO_INCREMENT=88524470 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
INSERT INTO `programa` VALUES (88524459,'Encuadernación ','Técnico','informática\r\n'),(88524460,'Ingles ','Técnico','0'),(88524463,'Fotografía ','Técnico','Comunicación\r\ncultura física  '),(88524464,'ADSI-Análisis y desarrollo de sistemas de información ','Tecnólogo','Matemáticas '),(88524465,'Impresión offset ','Tecnólogo','...'),(88524466,'Animación 3D ','Tecnólogo','......'),(88524467,'Animación 4D','Tecnólogo','.'),(88524468,'Lingüística','Técnico',''),(88524469,'ADSI','Tecnólogo','');
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(20) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'ADMIN'),(2,'Instructor');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sede`
--

DROP TABLE IF EXISTS `sede`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sede` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sede` varchar(100) NOT NULL,
  `direccion_sede` varchar(200) DEFAULT NULL,
  `telefono_sede` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sede`
--

LOCK TABLES `sede` WRITE;
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
INSERT INTO `sede` VALUES (7,'Centro de servicios financieros','Calle 42 C # 79D 65 sur',2147483647);
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_trimestre`
--

DROP TABLE IF EXISTS `tb_trimestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_trimestre` (
  `id_T` int(11) NOT NULL AUTO_INCREMENT,
  `Trim_date_Inc` date DEFAULT NULL,
  `Trim_date_fin` date DEFAULT NULL,
  `Trimestre` varchar(20) DEFAULT NULL,
  `id_fch` int(11) NOT NULL,
  `estatus_trim_H` int(11) NOT NULL DEFAULT 1,
  `instructor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_T`),
  KEY `fk_TFCH` (`id_fch`),
  CONSTRAINT `relacion_instructor` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`ID`),
  CONSTRAINT `fk_TFCH` FOREIGN KEY (`id_fch`) REFERENCES `ficha` (`ID_F`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_trimestre`
--

LOCK TABLES `tb_trimestre` WRITE;
/*!40000 ALTER TABLE `tb_trimestre` DISABLE KEYS */;
INSERT INTO `tb_trimestre` VALUES (79,'2020-08-02','2020-10-02','I Trimestre',36,0,22),
(80,'2020-10-02','2020-12-02','II Trimestre',36,1,23),
(81,'2021-01-02','2021-03-02','III Trimestre',36,1,24),
(82,'2021-03-02','2021-06-02','IV Trimestre',36,1,2),
(83,'2021-06-02','2021-09-02','V Trimestre',36,1,25),
(84,'2021-09-02','2021-12-02','VI Trimestre',36,1,21);
/*!40000 ALTER TABLE `tb_trimestre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-02 10:51:56
