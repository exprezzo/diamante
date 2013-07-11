/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : diamante

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2013-07-10 17:52:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `asociados`
-- ----------------------------
DROP TABLE IF EXISTS `asociados`;
CREATE TABLE `asociados` (
  `SocioID` int(6) NOT NULL,
  `Nombres` varchar(200) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `FechaNac` date NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Colonia` varchar(30) NOT NULL,
  `Ciudad` varchar(20) NOT NULL,
  `EstadoId` varchar(6) NOT NULL,
  `CodigoPostal` varchar(6) NOT NULL,
  `Celular` varchar(10) NOT NULL,
  `CompaniaId` varchar(6) NOT NULL,
  `CotitularNombre` varchar(300) NOT NULL,
  `CotitularFechaNac` date NOT NULL,
  `CLABE` varchar(20) NOT NULL,
  `BancoID` varchar(6) NOT NULL,
  `InvitadoPor_SocioId` int(11) DEFAULT NULL,
  `password` text,
  PRIMARY KEY (`SocioID`),
  UNIQUE KEY `socioId` (`SocioID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of asociados
-- ----------------------------
INSERT INTO `asociados` VALUES ('9501', 'Cesar Octavio', 'Bibriesca Alapizco', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0', null);
INSERT INTO `asociados` VALUES ('9502', 'Raaul ', 'Gonsales', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9501', null);
INSERT INTO `asociados` VALUES ('9503', 'Gabriel', 'Leyva', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9502', null);
INSERT INTO `asociados` VALUES ('9504', 'Martin', 'Gonsalez', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9503', null);
INSERT INTO `asociados` VALUES ('9505', 'Gabriel ', 'Urrea', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9504', null);
INSERT INTO `asociados` VALUES ('9506', 'Carlos', 'Escutia', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9505', null);
INSERT INTO `asociados` VALUES ('9507', 'Juan', 'Gabriel', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9503', null);
INSERT INTO `asociados` VALUES ('9508', 'RamÃ³n ', 'Martinez', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9503', null);
INSERT INTO `asociados` VALUES ('9509', 'Gabriela', 'Mistral', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9501', null);
INSERT INTO `asociados` VALUES ('9510', 'Michelle', 'Arellanos', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9506', null);
INSERT INTO `asociados` VALUES ('9513', 'Claudia', 'Aragon', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9504', null);
INSERT INTO `asociados` VALUES ('9514', 'Marcela', 'Villacencio', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9504', null);
INSERT INTO `asociados` VALUES ('9515', 'Monica', 'Villegas', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9504', null);
INSERT INTO `asociados` VALUES ('9516', 'Diana', 'Mendez', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9507', null);
INSERT INTO `asociados` VALUES ('9520', 'Aracelli', 'Arellano', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9508', '1234');
INSERT INTO `asociados` VALUES ('9521', 'Samuel', 'Acota', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9510', null);
INSERT INTO `asociados` VALUES ('9522', 'Angelica', 'Vale', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9513', '1234');
INSERT INTO `asociados` VALUES ('9523', 'ASDF', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9510', '1234');
INSERT INTO `asociados` VALUES ('9524', 'Cesar', 'Augusto', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9510', '1234');
INSERT INTO `asociados` VALUES ('9525', 'Daniel', 'Torres', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9515', '1234');
INSERT INTO `asociados` VALUES ('9526', 'Queta', 'Dominquez', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9510', '4444');
INSERT INTO `asociados` VALUES ('9527', 'Javier', 'Arellano', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '9515', '4321');

-- ----------------------------
-- Table structure for `bancos`
-- ----------------------------
DROP TABLE IF EXISTS `bancos`;
CREATE TABLE `bancos` (
  `BancoId` varchar(6) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bancos
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of companias
-- ----------------------------

-- ----------------------------
-- Table structure for `cuentas`
-- ----------------------------
DROP TABLE IF EXISTS `cuentas`;
CREATE TABLE `cuentas` (
  `CuentaID` varchar(6) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `NumeroCuenta` varchar(25) NOT NULL,
  `BancoId` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cuentas
-- ----------------------------

-- ----------------------------
-- Table structure for `depositos`
-- ----------------------------
DROP TABLE IF EXISTS `depositos`;
CREATE TABLE `depositos` (
  `DepositoId` varchar(6) NOT NULL,
  `SocioId` varchar(6) NOT NULL,
  `RecargaId` varchar(6) NOT NULL,
  `FechaDeposito` datetime NOT NULL,
  `CuentaId` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of depositos
-- ----------------------------

-- ----------------------------
-- Table structure for `pagos`
-- ----------------------------
DROP TABLE IF EXISTS `pagos`;
CREATE TABLE `pagos` (
  `PagosId` varchar(6) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Importe` decimal(5,2) NOT NULL,
  `CuentaId` varchar(6) NOT NULL,
  `AplicadorPor_usuarioid` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`RecargaId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of recargas
-- ----------------------------
INSERT INTO `recargas` VALUES ('1', '', '0000-00-00 00:00:00', '999.99', '', '', '0000-00-00 00:00:00');
INSERT INTO `recargas` VALUES ('2', '', '0000-00-00 00:00:00', '999.99', '', '', '0000-00-00 00:00:00');
INSERT INTO `recargas` VALUES ('3', '9501', '0000-00-00 00:00:00', '999.99', '', '', '0000-00-00 00:00:00');
INSERT INTO `recargas` VALUES ('4', '9526', '0000-00-00 00:00:00', '999.99', '', '', '0000-00-00 00:00:00');
INSERT INTO `recargas` VALUES ('5', '9527', '0000-00-00 00:00:00', '420.00', '', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

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
