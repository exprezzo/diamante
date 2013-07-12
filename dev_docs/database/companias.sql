/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : diamante

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-07-12 01:51:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `companias`
-- ----------------------------
DROP TABLE IF EXISTS `companias`;
CREATE TABLE `companias` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of companias
-- ----------------------------
INSERT INTO `companias` VALUES ('1', 'Telcel');
INSERT INTO `companias` VALUES ('2', 'Movistar');
INSERT INTO `companias` VALUES ('3', 'Iusacell');
