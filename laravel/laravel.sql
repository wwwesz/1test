/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2018-04-13 09:50:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `power` int(10) DEFAULT '0',
  `issue` smallint(6) NOT NULL,
  `key` varchar(255) NOT NULL,
  `addtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('17', 'waawaa', '123', 'e10adc3949ba59abbe56e057f20f883e', '2', '0', '123456', '2018-04-12 16:33:03', '2018-04-12 16:33:03');
INSERT INTO `admin` VALUES ('30', 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2', '0', '1', '2018-04-12 16:52:10', '2018-04-12 16:52:10');
INSERT INTO `admin` VALUES ('31', 'wwwesz', '123456', 'e10adc3949ba59abbe56e057f20f883e', '0', '0', '123456', '2018-04-12 16:54:59', '2018-04-12 16:54:59');

-- ----------------------------
-- Table structure for build
-- ----------------------------
DROP TABLE IF EXISTS `build`;
CREATE TABLE `build` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `tidstr` varchar(255) NOT NULL,
  `area` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `metro` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of build
-- ----------------------------
INSERT INTO `build` VALUES ('12', 'admin', '1/15/16', '111', '1111', '光谷新世界', '111111111111111111111111111111111111111111111111111111111aaaa', '1号线', '武汉市多少多少号');
INSERT INTO `build` VALUES ('14', 'admin', '1/15/16', '3', '3', '大成路', '3', '1号线', '武汉市多少多少号');
INSERT INTO `build` VALUES ('17', 'admin', '1/15/16', '6', '6', '世纪广场', '6', '2号线', '武汉市多少多少号');
INSERT INTO `build` VALUES ('18', 'admin', '1/15/16', '7', '7', '世纪广场', '7', '3号线', '武汉市多少多少号');
INSERT INTO `build` VALUES ('19', 'admin', '1/15/16', '8', '8', '世纪广场', '8', '4号线', '武汉市多少多少号');
INSERT INTO `build` VALUES ('20', 'admin', '1/15/16', '11', '11', '世纪广场', '11', '5号线', '武汉市多少多少号');
INSERT INTO `build` VALUES ('21', 'admin', '1/15/16', '11', '11', '世纪广场', '111', '1号线', '武汉市多少多少号');
INSERT INTO `build` VALUES ('22', 'admin', '1/15/29', '11111', '11111111', '世纪广场', '44444', '1号线', '武汉市多少多少号');

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `bid` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('17', 'KPX5MQSR6UHmVaHtCAOIeqimOWSszruVZRPO3ZRa.jpeg', '14');
INSERT INTO `image` VALUES ('18', 'QSvIzmfx5QsQk8tlyoWjUfN5u8wQfKlGfDoL7Mlm.jpeg', '18');
INSERT INTO `image` VALUES ('19', 'vhJIwrkllgWDqZyl1ZNkjhUR7zOESLNKcekf9Tre.jpeg', '22');
INSERT INTO `image` VALUES ('20', 'Meo3Y5qM1jC1nLEc4xyBBsagWuYitLOxsdnr55Cm.jpeg', '22');
INSERT INTO `image` VALUES ('21', 'LzDjaartZqy499bIlRRRATfeZcYr3pfuy5bnsCfE.jpeg', '22');
INSERT INTO `image` VALUES ('22', 'FjlJJtm8Z9EwaSoIWmKXE7ia3D9aGwIOuMxrl9bg.jpeg', '22');
INSERT INTO `image` VALUES ('32', 'zqp0YDBdzD9obZA3ivGm3kuGwRmneNUKtFawtB1Q.jpeg', '12');
INSERT INTO `image` VALUES ('33', 'hS9LUIx7klVdA1SFjXvYdfDO3iKRo34Y3khwnjTj.jpeg', '12');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '汉口', '0');
INSERT INTO `type` VALUES ('2', '武昌', '0');
INSERT INTO `type` VALUES ('3', '汉阳', '0');
INSERT INTO `type` VALUES ('4', '江夏', '0');
INSERT INTO `type` VALUES ('5', '黄陂', '0');
INSERT INTO `type` VALUES ('6', '洪山', '0');
INSERT INTO `type` VALUES ('8', '汉南', '0');
INSERT INTO `type` VALUES ('9', '蔡甸', '0');
INSERT INTO `type` VALUES ('10', '东西湖', '0');
INSERT INTO `type` VALUES ('11', '新洲', '0');
INSERT INTO `type` VALUES ('12', '江岸', '0');
INSERT INTO `type` VALUES ('13', '江汉', '0');
INSERT INTO `type` VALUES ('14', '硚口', '0');
INSERT INTO `type` VALUES ('15', '循礼门', '1');
INSERT INTO `type` VALUES ('16', '江汉路', '15');
INSERT INTO `type` VALUES ('17', '步行街', '16');
INSERT INTO `type` VALUES ('18', '江滩', '1');
INSERT INTO `type` VALUES ('19', '江景房', '18');
INSERT INTO `type` VALUES ('20', '二七路', '1');
INSERT INTO `type` VALUES ('21', '二七中学', '20');
INSERT INTO `type` VALUES ('22', '后湖', '1');
INSERT INTO `type` VALUES ('23', '汉铁高中', '22');
INSERT INTO `type` VALUES ('24', '司门口', '2');
INSERT INTO `type` VALUES ('25', '大成路177号', '24');
INSERT INTO `type` VALUES ('26', '哈哈哈', '24');
INSERT INTO `type` VALUES ('27', '哈哈1', '24');
INSERT INTO `type` VALUES ('28', '哈哈2', '24');
INSERT INTO `type` VALUES ('29', '宝华街', '15');
INSERT INTO `type` VALUES ('30', '后湖大道', '12');
INSERT INTO `type` VALUES ('31', '幸福时代', '30');
INSERT INTO `type` VALUES ('32', '1', '15');
