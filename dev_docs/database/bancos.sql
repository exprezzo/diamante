/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : diamante

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-07-15 18:49:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `bancos`
-- ----------------------------
DROP TABLE IF EXISTS `bancos`;
CREATE TABLE `bancos` (
  `BancoId` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`BancoId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bancos
-- ----------------------------
INSERT INTO `bancos` VALUES ('1', 'Banamex');
INSERT INTO `bancos` VALUES ('2', 'Bancomer');
INSERT INTO `bancos` VALUES ('3', 'Banorte');

-- ----------------------------
-- Table structure for `cuentas`
-- ----------------------------
DROP TABLE IF EXISTS `cuentas`;
CREATE TABLE `cuentas` (
  `CuentaID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `NumeroCuenta` varchar(25) NOT NULL,
  `BancoId` varchar(6) NOT NULL,
  PRIMARY KEY (`CuentaID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cuentas
-- ----------------------------
INSERT INTO `cuentas` VALUES ('1', 'cuenta1', '00001', '1');
INSERT INTO `cuentas` VALUES ('2', 'cuenta 002', '00002', '2');
INSERT INTO `cuentas` VALUES ('3', 'cuenta 3', '0003', '3');

-- ----------------------------
-- Table structure for `pagos`
-- ----------------------------
DROP TABLE IF EXISTS `pagos`;
CREATE TABLE `pagos` (
  `PagosId` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` datetime NOT NULL,
  `Importe` decimal(5,2) NOT NULL,
  `CuentaId` varchar(6) NOT NULL,
  `AplicadoPor_usuarioid` varchar(6) NOT NULL,
  `RecargaId` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`PagosId`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pagos
-- ----------------------------
INSERT INTO `pagos` VALUES ('11', '2013-07-15 00:00:00', '0.00', '3', '9501', '27');
INSERT INTO `pagos` VALUES ('10', '2013-07-14 00:00:00', '90.00', '1', '9501', '25');
