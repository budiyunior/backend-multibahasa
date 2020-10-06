/*
Navicat MySQL Data Transfer

Source Server         : SERVER_LARAGON
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : db_profile

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2020-10-02 15:05:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_setup
-- ----------------------------
DROP TABLE IF EXISTS `t_setup`;
CREATE TABLE `t_setup` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fc_param` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fc_kode` char(3) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fc_isi_id` char(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `fc_isi_en` char(200) DEFAULT NULL,
  `fc_isi_jp` text CHARACTER SET cp932,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of t_setup
-- ----------------------------
INSERT INTO `t_setup` VALUES ('1', 'Menu1', 'A', 'Beranda', 'Home', 'ホームページ');
INSERT INTO `t_setup` VALUES ('2', 'Menu2', 'A', 'Profil', 'Profile', 'プロフィール');
INSERT INTO `t_setup` VALUES ('3', 'Menu3', 'A', 'Foto', 'Gallery', '写真');
INSERT INTO `t_setup` VALUES ('4', 'Menu4', 'A', 'Kontak', 'Contact', 'お問い合わせ');
