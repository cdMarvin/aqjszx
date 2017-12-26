/*
Navicat MySQL Data Transfer

Source Server         : localhost_3336
Source Server Version : 50525
Source Host           : localhost:3336
Source Database       : anquan

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2016-03-20 22:40:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `aq_friendlink`
-- ----------------------------
DROP TABLE IF EXISTS `aq_friendlink`;
CREATE TABLE `aq_friendlink` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned DEFAULT '0' COMMENT '分类',
  `show_name` varchar(60) NOT NULL DEFAULT '',
  `show_link` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL,
  `sort` tinyint(1) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aq_friendlink
-- ----------------------------
INSERT INTO `aq_friendlink` VALUES ('21', '3', '3', 'http://www.sina.com', 'pc', '50');
INSERT INTO `aq_friendlink` VALUES ('20', '2', '2', 'http://www.qq.com', 'pc', '50');
INSERT INTO `aq_friendlink` VALUES ('19', '1', '1', 'http://www.baidu.com', 'pc', '3');
