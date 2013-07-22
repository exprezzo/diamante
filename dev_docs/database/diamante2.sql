/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : diamante

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-07-22 12:30:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `administradores`
-- ----------------------------
DROP TABLE IF EXISTS `administradores`;
CREATE TABLE `administradores` (
  `AdminId` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(200) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `Email` char(255) DEFAULT NULL,
  `user` char(255) DEFAULT NULL,
  `password` text,
  PRIMARY KEY (`AdminId`),
  UNIQUE KEY `user` (`user`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of administradores
-- ----------------------------
INSERT INTO `administradores` VALUES ('1', 'Cesar', 'Octavio', 'email@cesar.com', 'zesar1', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `administradores` VALUES ('2', 'Jose ', 'Rodriguez', 'contacto@joseroriduez.com', 'jose', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `administradores` VALUES ('3', 'Sys', 'Admin', 'contacto@sistema.com', 'admin', '098f6bcd4621d373cade4e832627b4f6');

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
-- Table structure for `comisiones`
-- ----------------------------
DROP TABLE IF EXISTS `comisiones`;
CREATE TABLE `comisiones` (
  `ComisionId` varchar(6) NOT NULL,
  `SocioId` varchar(6) NOT NULL,
  `RecargaId` varchar(6) NOT NULL,
  `Importe` decimal(5,2) NOT NULL,
  `FechaGenerada` datetime NOT NULL,
  `PagoId` varchar(6) NOT NULL,
  `NivelId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comisiones
-- ----------------------------

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
-- Table structure for `depositos`
-- ----------------------------
DROP TABLE IF EXISTS `depositos`;
CREATE TABLE `depositos` (
  `DepositoId` int(6) NOT NULL AUTO_INCREMENT,
  `SocioId` varchar(6) NOT NULL,
  `RecargaId` varchar(6) NOT NULL,
  `FechaDeposito` datetime NOT NULL,
  `CuentaId` varchar(6) NOT NULL,
  `Ficha` char(255) DEFAULT NULL,
  `Importe` decimal(18,6) DEFAULT NULL,
  `Status` char(1) DEFAULT '1',
  PRIMARY KEY (`DepositoId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of depositos
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pagos
-- ----------------------------

-- ----------------------------
-- Table structure for `recargas`
-- ----------------------------
DROP TABLE IF EXISTS `recargas`;
CREATE TABLE `recargas` (
  `RecargaId` int(11) NOT NULL AUTO_INCREMENT,
  `SocioID` varchar(6) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Importe` decimal(5,2) NOT NULL,
  `DepositoId` varchar(6) NOT NULL,
  `AplicadaPor_usuarioid` varchar(6) NOT NULL,
  `FechaAplicada` datetime NOT NULL,
  `foliosistema` char(6) DEFAULT NULL,
  `status` char(1) DEFAULT '1',
  PRIMARY KEY (`RecargaId`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of recargas
-- ----------------------------

-- ----------------------------
-- Table structure for `system_catalogos`
-- ----------------------------
DROP TABLE IF EXISTS `system_catalogos`;
CREATE TABLE `system_catalogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_modulo` int(11) DEFAULT NULL,
  `nombre` char(255) DEFAULT NULL,
  `controlador` char(255) DEFAULT NULL,
  `modelo` char(255) DEFAULT NULL,
  `tabla` char(255) DEFAULT NULL,
  `pk_tabla` char(255) DEFAULT 'id',
  `icono` char(255) DEFAULT NULL,
  `titulo_nuevo` char(255) DEFAULT NULL,
  `titulo_edicion` char(255) DEFAULT NULL,
  `titulo_busqueda` char(255) DEFAULT NULL,
  `msg_creado` char(255) DEFAULT NULL,
  `msg_actualizado` char(255) DEFAULT NULL,
  `pregunta_eliminar` char(255) DEFAULT NULL,
  `msg_eliminado` char(255) DEFAULT NULL,
  `msg_cambios` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_catalogos
-- ----------------------------
INSERT INTO `system_catalogos` VALUES ('18', '1', 'Usuarios', 'usuarios', 'Usuario', 'system_users', 'id', 'http://png.findicons.com/files/icons/2332/super_mono/64/user_card.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('31', '1', 'Configuracion', 'config', 'config', 'system_config', 'id', 'http://png.findicons.com/files/icons/2645/super_mono_3d/64/super_mono_3d_part2_65.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('32', '1', 'Modulos', 'modulos', 'Modulo', 'system_modulos', 'id', 'http://png.findicons.com/files/icons/1681/siena/48/puzzle_yellow.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('33', '1', 'Catalogos', 'catalogos', 'Catalogo', 'system_catalogos', 'id', 'http://png.findicons.com/files/icons/577/refresh_cl/48/windows_view_icon.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('36', '1', 'seguridad', 'seguridad', 'Seguridad', 'system_acl', 'id', 'http://png.findicons.com/files/icons/1035/human_o2/48/keepassx.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('42', '1', 'Roles', 'roles', 'rol', 'system_rol', 'id', 'http://png.findicons.com/files/icons/2332/super_mono/48/user_card.png', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('60', '2', 'Asociados', 'asociados', 'asociado', 'asociados', 'SocioID', '', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('61', '2', 'Recargas', 'recargas', 'recarga', 'recargas', 'RecargaId', '', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('62', '2', 'CompaÃ±ias', 'companias', 'compania', 'companias', 'clave', '', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('63', '2', 'Pagos', 'pagos', 'pago', 'pagos', 'PagosId', '', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('64', '2', 'Cuenta', 'cuentas', 'cuenta', 'cuentas', 'CuentaID', '', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('65', '2', 'Bancos', 'banos', 'banco', 'bancos', 'BancoId', '', '', '', '', '', '', '', '', '');
INSERT INTO `system_catalogos` VALUES ('66', '2', 'Depositos', 'depositos', 'deposito', 'depositos', 'DepositoId', '', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `system_config`
-- ----------------------------
DROP TABLE IF EXISTS `system_config`;
CREATE TABLE `system_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) DEFAULT NULL,
  `tema` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_config
-- ----------------------------
INSERT INTO `system_config` VALUES ('1', '1', 'artic');
INSERT INTO `system_config` VALUES ('2', '20', 'artic');

-- ----------------------------
-- Table structure for `system_modulos`
-- ----------------------------
DROP TABLE IF EXISTS `system_modulos`;
CREATE TABLE `system_modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  `icono` char(255) DEFAULT NULL,
  `nombre_interno` char(255) DEFAULT NULL,
  `ruta_base` char(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_modulos
-- ----------------------------
INSERT INTO `system_modulos` VALUES ('1', 'Sistema', 'http://png.findicons.com/files/icons/1681/siena/48/puzzle_yellow.png', 'backend', '/modulos/', '0');
INSERT INTO `system_modulos` VALUES ('2', 'Diamond People', 'http://png-1.findicons.com/files/icons/2003/business/64/shopping_full.png', 'portal', '/', '0');

-- ----------------------------
-- Table structure for `system_rol`
-- ----------------------------
DROP TABLE IF EXISTS `system_rol`;
CREATE TABLE `system_rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_rol
-- ----------------------------
INSERT INTO `system_rol` VALUES ('1', 'Programador');
INSERT INTO `system_rol` VALUES ('2', 'Encargado');
INSERT INTO `system_rol` VALUES ('3', 'Trabajador');

-- ----------------------------
-- Table structure for `system_users`
-- ----------------------------
DROP TABLE IF EXISTS `system_users`;
CREATE TABLE `system_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` char(255) NOT NULL,
  `pass` blob,
  `email` char(255) NOT NULL,
  `rol` int(11) DEFAULT '1',
  `fbid` int(11) DEFAULT NULL,
  `name` char(255) NOT NULL DEFAULT '0',
  `picture` varchar(255) DEFAULT NULL,
  `originalName` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nick` (`nick`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_users
-- ----------------------------
INSERT INTO `system_users` VALUES ('1', 'zesar1', 0xABD7D98E5D348AB50FACBA163A26D398, 'cbibriesca@hotmail.com', '1', '0', 'Zesar Octavio', 'pic_1.jpg', 'retro_blue_background.jpg');
INSERT INTO `system_users` VALUES ('22', 'jose', 0xABD7D98E5D348AB50FACBA163A26D398, 'contacto@joseh.com', '1', null, 'Jose', null, null);
