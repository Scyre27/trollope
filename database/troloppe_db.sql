-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for trolopee_prop
DROP DATABASE IF EXISTS `trolopee_prop`;
CREATE DATABASE IF NOT EXISTS `trolopee_prop` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `trolopee_prop`;


-- Dumping structure for table trolopee_prop.builder_detail
DROP TABLE IF EXISTS `builder_detail`;
CREATE TABLE IF NOT EXISTS `builder_detail` (
  `BuilderId` int(11) NOT NULL AUTO_INCREMENT,
  `Builder_Name` varchar(555) NOT NULL DEFAULT '',
  `Developer` varchar(555) NOT NULL DEFAULT '',
  `Mechnical` varchar(555) NOT NULL DEFAULT '',
  `Electrical` varchar(555) NOT NULL DEFAULT '',
  `Plumbing` varchar(555) NOT NULL DEFAULT '',
  `Struct_Eng` varchar(555) NOT NULL DEFAULT '',
  `Architect` varchar(555) NOT NULL DEFAULT '',
  `Project_Manager` varchar(555) NOT NULL DEFAULT '',
  `Elevator` varchar(555) NOT NULL DEFAULT '',
  `AddedBy` varchar(255) NOT NULL DEFAULT '',
  `AddedOn` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) NOT NULL DEFAULT '',
  `ModifiedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`BuilderId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table trolopee_prop.builder_detail: ~1 rows (approximately)
DELETE FROM `builder_detail`;
INSERT INTO `builder_detail` (`BuilderId`, `Builder_Name`, `Developer`, `Mechnical`, `Electrical`, `Plumbing`, `Struct_Eng`, `Architect`, `Project_Manager`, `Elevator`, `AddedBy`, `AddedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
	(1, 'Cappa and D’Alberto Plc.', 'Cobblestone Properties and Estate Limited', '', '', '', '', '', '', '', '', '2022-05-25 15:50:46', '', '2022-05-25 15:50:44');

-- Dumping structure for table trolopee_prop.contact_us
DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL DEFAULT '0',
  `Email` varchar(255) NOT NULL DEFAULT '0',
  `Mobile_No` varchar(255) NOT NULL DEFAULT '0',
  `AddedBy` varchar(255) NOT NULL DEFAULT '0',
  `AddedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table trolopee_prop.contact_us: ~0 rows (approximately)
DELETE FROM `contact_us`;
INSERT INTO `contact_us` (`Id`, `Name`, `Email`, `Mobile_No`, `AddedBy`, `AddedOn`) VALUES
	(1, 'Bhavneet Kumar', 'admin@demo.com', '9999999999', 'BKUMAR', '2022-05-25 19:20:48');

-- Dumping structure for table trolopee_prop.property_detail
DROP TABLE IF EXISTS `property_detail`;
CREATE TABLE IF NOT EXISTS `property_detail` (
  `PropertyId` int(11) NOT NULL AUTO_INCREMENT,
  `Property_Name` varchar(500) NOT NULL,
  `Property_Code` varchar(255) NOT NULL,
  `Property_Address` varchar(500) DEFAULT NULL,
  `Property_Location` varchar(500) DEFAULT NULL,
  `Property_Grade` varchar(5) DEFAULT NULL,
  `Developer` varchar(255) DEFAULT NULL,
  `Year_Built` varchar(5) DEFAULT NULL,
  `Contractor_Id` int(11) NOT NULL DEFAULT 0,
  `Facilities_Manager` varchar(255) DEFAULT NULL,
  `ListedBy` varchar(255) DEFAULT NULL,
  `ListedOn` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `ModifiedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`PropertyId`),
  KEY `Contractor_Id` (`Contractor_Id`),
  CONSTRAINT `FK_Property_Builder` FOREIGN KEY (`Contractor_Id`) REFERENCES `builder_detail` (`BuilderId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table trolopee_prop.property_detail: ~1 rows (approximately)
DELETE FROM `property_detail`;
INSERT INTO `property_detail` (`PropertyId`, `Property_Name`, `Property_Code`, `Property_Address`, `Property_Location`, `Property_Grade`, `Developer`, `Year_Built`, `Contractor_Id`, `Facilities_Manager`, `ListedBy`, `ListedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
	(1, 'IKY/IKY1/BDL/001/A', 'IKY/IKY1/BDL/001/A', 'Bourdillon Road, Ikoyi', 'Island', 'B+', 'Cobblestone Properties and Estate Limited', '2019', 1, NULL, 'BKUMAR', '2022-05-25 16:19:28', NULL, NULL);

-- Dumping structure for table trolopee_prop.property_type
DROP TABLE IF EXISTS `property_type`;
CREATE TABLE IF NOT EXISTS `property_type` (
  `TypeId` int(11) NOT NULL AUTO_INCREMENT,
  `TypeCode` varchar(5) NOT NULL DEFAULT '0',
  `Type` varchar(55) NOT NULL DEFAULT '0',
  `Sub_Type` varchar(55) NOT NULL DEFAULT '0',
  `Sector` varchar(55) NOT NULL DEFAULT '0',
  `AddedBy` varchar(55) NOT NULL DEFAULT '0',
  `AddedOn` datetime DEFAULT NULL,
  `ModifiedBy` varchar(55) NOT NULL DEFAULT '0',
  `ModifiedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`TypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table trolopee_prop.property_type: ~2 rows (approximately)
DELETE FROM `property_type`;
INSERT INTO `property_type` (`TypeId`, `TypeCode`, `Type`, `Sub_Type`, `Sector`, `AddedBy`, `AddedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
	(1, 'APART', 'Apartment', 'Apartment', 'Residential', 'BKumar', '2022-05-25 15:57:46', '0', NULL),
	(2, 'APENT', 'Apartment', 'Penthouse', 'Residential', 'BKumar', '2022-05-25 15:59:09', '0', NULL);

-- Dumping structure for table trolopee_prop.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(55) NOT NULL DEFAULT '0',
  `Last_Name` varchar(55) NOT NULL DEFAULT '0',
  `Email` varchar(55) NOT NULL DEFAULT '0',
  `UPassword` varchar(255) NOT NULL DEFAULT '0',
  `Is_Admin` bit(1) DEFAULT NULL,
  `Is_Active` bit(1) DEFAULT NULL,
  `CreatedBy` varchar(55) DEFAULT NULL,
  `CreatedOn` datetime DEFAULT NULL,
  `ModifiedBy` varchar(55) DEFAULT NULL,
  `ModifiedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table trolopee_prop.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`UserId`, `First_Name`, `Last_Name`, `Email`, `UPassword`, `Is_Admin`, `Is_Active`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
	(1, 'Demo', 'User', 'demo@demo.com', 'demo@123', b'1', b'1', 'BKUMAR', '2022-05-25 18:36:32', NULL, NULL);

-- Dumping structure for table trolopee_prop.accomodation_detail
DROP TABLE IF EXISTS `accomodation_detail`;
CREATE TABLE IF NOT EXISTS `accomodation_detail` (
  `AccomodationId` int(11) NOT NULL AUTO_INCREMENT,
  `PropertyId` int(11) NOT NULL,
  `TypeId` int(11) NOT NULL,
  `Total_Units` int(11) DEFAULT NULL,
  `Available_Units` int(11) DEFAULT NULL,
  `No_Of_Bed` int(11) DEFAULT NULL,
  `Sale_Price` double DEFAULT NULL,
  `Lease_Price` double DEFAULT NULL,
  `Service_Charge` double DEFAULT NULL,
  `AddedBy` varchar(255) NOT NULL DEFAULT '0',
  `AddedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`AccomodationId`),
  KEY `PropertyId` (`PropertyId`),
  KEY `TypeId` (`TypeId`),
  CONSTRAINT `FK_Accomodation_Property` FOREIGN KEY (`PropertyId`) REFERENCES `property_detail` (`PropertyId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Accomodation_Type` FOREIGN KEY (`TypeId`) REFERENCES `property_type` (`TypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table trolopee_prop.accomodation_detail: ~2 rows (approximately)
DELETE FROM `accomodation_detail`;
INSERT INTO `accomodation_detail` (`AccomodationId`, `PropertyId`, `TypeId`, `Total_Units`, `Available_Units`, `No_Of_Bed`, `Sale_Price`, `Lease_Price`, `Service_Charge`, `AddedBy`, `AddedOn`) VALUES
	(1, 1, 1, 20, 18, 3, NULL, NULL, NULL, 'BKUMAR', '2022-05-25 16:23:48'),
	(2, 1, 2, 20, 0, 3, NULL, NULL, NULL, 'BKUMAR', '2022-05-25 16:23:58'),
	(3, 1, 1, 20, 18, 4, NULL, NULL, NULL, 'BKUMAR', '2022-05-25 16:24:46');

-- Dumping structure for table trolopee_prop.property_amenities
DROP TABLE IF EXISTS `property_amenities`;
CREATE TABLE IF NOT EXISTS `property_amenities` (
  `AmenityId` int(11) NOT NULL AUTO_INCREMENT,
  `PropertyId` int(11) NOT NULL DEFAULT 0,
  `Swimming_Pool` varchar(255) DEFAULT NULL,
  `Gymnasium` varchar(255) DEFAULT NULL,
  `Sports` varchar(255) DEFAULT NULL,
  `Generators` varchar(255) DEFAULT NULL,
  `Servent_Quarters` varchar(255) DEFAULT NULL,
  `Elevator` varchar(255) DEFAULT NULL,
  `AddedBy` varchar(255) DEFAULT NULL,
  `AddedOn` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `ModifiedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`AmenityId`),
  KEY `PropertyId` (`PropertyId`),
  CONSTRAINT `FK_Amenity_Property` FOREIGN KEY (`PropertyId`) REFERENCES `property_detail` (`PropertyId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table trolopee_prop.property_amenities: ~0 rows (approximately)
DELETE FROM `property_amenities`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
