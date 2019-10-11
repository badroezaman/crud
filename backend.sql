/*
 Navicat Premium Data Transfer

 Source Server         : PAIJAN
 Source Server Type    : MySQL
 Source Server Version : 50144
 Source Host           : localhost
 Source Database       : backend

 Target Server Type    : MySQL
 Target Server Version : 50144
 File Encoding         : utf-8

 Date: 10/01/2019 18:37:41 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` text,
  `status` int(1) DEFAULT NULL,
  `id_penduduk` varchar(50) DEFAULT NULL,
  `akses` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `id_level` int(7) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `admin`
-- ----------------------------
BEGIN;
INSERT INTO `admin` VALUES ('4', 'zakki', '57e0f81f2932f6a4d34c4487d9262c5f', '1', '897980798', '1', 'M. Zakki Abdillah', '1'), ('5', 'paijan', '90bbcda26475720d1265c106ef2eed19', null, null, null, 'Paijan Indehoi', '2');
COMMIT;

-- ----------------------------
--  Table structure for `agama`
-- ----------------------------
DROP TABLE IF EXISTS `agama`;
CREATE TABLE `agama` (
  `id_agama` varchar(10) NOT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `agama`
-- ----------------------------
BEGIN;
INSERT INTO `agama` VALUES ('000000001', 'Islam', '1'), ('000000002', 'Kristen', '1'), ('000000003', 'Katholik', '1'), ('000000004', 'Hindu', '1'), ('000000005', 'Budha', '1'), ('000000006', 'Khonghucu', '1');
COMMIT;

-- ----------------------------
--  Table structure for `karyawan`
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `karyawan`
-- ----------------------------
BEGIN;
INSERT INTO `karyawan` VALUES ('1', 'Paijan', 'Semarang', 'Direktur'), ('2', 'Indehoi', 'Kendal', 'Manager'), ('4', 'test', 'tttteee23434343', 'eetetetetet234343'), ('5', 'a', 'a', 'a'), ('6', 'b', 'b', 'b'), ('7', 'c', 'c', 'c'), ('8', 'd', 'd', 'd'), ('9', 'e', 'e', 'e'), ('10', 'f', 'f', 'f'), ('11', 'g', 'gdd', 'gdd'), ('12', 'h', 'h', 'h');
COMMIT;

-- ----------------------------
--  Table structure for `level`
-- ----------------------------
DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `id_level` int(7) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `level`
-- ----------------------------
BEGIN;
INSERT INTO `level` VALUES ('1', 'Super Administrator'), ('2', 'Admin');
COMMIT;

-- ----------------------------
--  Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(7) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) DEFAULT NULL,
  `menu_aktif` varchar(100) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `submenu` enum('Y','N') DEFAULT NULL,
  `id_level` int(7) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `menu`
-- ----------------------------
BEGIN;
INSERT INTO `menu` VALUES ('1', 'Master Sistem', 'q', '#', 'icon-stack2', 'Y', '1'), ('2', 'Karyawan', 'karyawan', 'Karyawan', 'icon-user-tie', 'N', '2');
COMMIT;

-- ----------------------------
--  Table structure for `submenu`
-- ----------------------------
DROP TABLE IF EXISTS `submenu`;
CREATE TABLE `submenu` (
  `id_submenu` int(7) NOT NULL AUTO_INCREMENT,
  `nama_submenu` varchar(100) DEFAULT NULL,
  `submenu_aktif` varchar(100) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `id_menu` int(7) DEFAULT NULL,
  PRIMARY KEY (`id_submenu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `submenu`
-- ----------------------------
BEGIN;
INSERT INTO `submenu` VALUES ('1', 'Level', 'level', 'Level', 'icon-tree7', '1'), ('2', 'Pengguna', 'pengguna', 'Pengguna', 'icon-users', '1'), ('3', 'Menu', 'menu', 'Menu', 'icon-menu10', '1'), ('4', 'Sub Menu', 'submenu', 'Submenu', 'icon-menu2', '1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
