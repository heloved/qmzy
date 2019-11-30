/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : qimozuoye_new

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-11-30 11:48:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for qmzy_resource
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_resource`;
CREATE TABLE `qmzy_resource` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `board_id` int(11) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `tag_id` char(100) DEFAULT NULL,
  `title` varchar(50) NOT NULL COMMENT '标题',
  `description` text NOT NULL COMMENT '描述',
  `content` text NOT NULL COMMENT '内容',
  `money` int(10) NOT NULL DEFAULT '10' COMMENT '积分',
  `pv` int(11) DEFAULT NULL,
  `down_count` int(10) NOT NULL DEFAULT '0' COMMENT '下载统计',
  `url` varchar(200) NOT NULL COMMENT '演示地址',
  `img` varchar(200) NOT NULL COMMENT '大图',
  `remark` text NOT NULL COMMENT '备注',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态（-1删除，1显示（默认），2隐藏）',
  `is_destroy` tinyint(1) DEFAULT '1' COMMENT '是否有效（0 无效，1有效）',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) unsigned DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='资源表';

-- ----------------------------
-- Records of qmzy_resource
-- ----------------------------
INSERT INTO `qmzy_resource` VALUES ('1', '1', '12', '1,2', '消防装备管理系统(源码+ER图)', '角色：管理员、员工、用户 功能：个人信息管理、用户信息管理、分类信息管理、装备信息管理、出入库信息管理', '', '400', null, '1', 'http://47.106.86.207/18_10_20/login.php', 'resource/181020.png', '', '1', '1', '1539273600', null, null);
INSERT INTO `qmzy_resource` VALUES ('2', '1', '1', '1,2', '留言板（源码）', '前台：普通用户登录注册、商品分类显示以及商品详情显示\r\n\r\n后台：\r\n    1、管理员登录\r\n    2、商品增删改查\r\n    3、用户增删改查\r\n    4、新品上市增删改查', '', '150', null, '1', '', '', '', '1', '1', '1540742400', null, null);
INSERT INTO `qmzy_resource` VALUES ('3', '1', '7', '1,2', '新闻网站（源码）', '前台：普通用户登录注册、商品分类显示以及商品详情显示\r\n\r\n后台：\r\n    1、管理员登录\r\n    2、商品增删改查\r\n    3、用户增删改查\r\n    4、新品上市增删改查', '', '150', null, '1', 'http://47.106.86.207/18_10_31_news/pages/user/index.php', 'resource/181031.png', '', '1', '1', '1540915200', null, null);
INSERT INTO `qmzy_resource` VALUES ('4', '1', '3', '1,2', '小米电子设备商城(源码)', '前台：普通用户登录注册、商品分类显示以及商品详情显示\r\n\r\n后台：\r\n    1、管理员登录\r\n    2、商品增删改查\r\n    3、用户增删改查\r\n    4、新品上市增删改查', '', '150', null, '1', 'http://47.106.86.207/18_10_20/login.php', 'resource/181103.png', '', '1', '1', '1541174400', null, null);

-- ----------------------------
-- Table structure for qmzy_resource_board
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_resource_board`;
CREATE TABLE `qmzy_resource_board` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `cate_id` varchar(50) DEFAULT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-正常',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qmzy_resource_board
-- ----------------------------
INSERT INTO `qmzy_resource_board` VALUES ('1', 'PHP', '1,2,3,4,5,6,7,8,9,11,12', null, '1', null, null, null);
INSERT INTO `qmzy_resource_board` VALUES ('2', 'ThinkPHP3', '1,2,3,4,5,6,7', null, '1', null, null, null);
INSERT INTO `qmzy_resource_board` VALUES ('3', 'ThinkPHP5', '1,2,3,4,5,6,7,8', null, '1', null, null, null);
INSERT INTO `qmzy_resource_board` VALUES ('4', 'MySQL', '1,2,5,6', null, '1', null, null, null);
INSERT INTO `qmzy_resource_board` VALUES ('5', 'Web前端', '10', null, '1', null, null, null);

-- ----------------------------
-- Table structure for qmzy_resource_cate
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_resource_cate`;
CREATE TABLE `qmzy_resource_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-正常',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qmzy_resource_cate
-- ----------------------------
INSERT INTO `qmzy_resource_cate` VALUES ('1', '留言板系统', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('2', '用户管理系统', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('3', '商城系统', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('4', '论坛系统', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('5', '博客系统', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('6', '学生管理系统', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('7', '新闻系统', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('8', '文章系统', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('9', '登录注册', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('10', '个人网站', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('11', '期末作业', null, '0', '1', null, null, null);
INSERT INTO `qmzy_resource_cate` VALUES ('12', '毕业设计', null, '0', '1', null, null, null);

-- ----------------------------
-- Table structure for qmzy_resource_label
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_resource_label`;
CREATE TABLE `qmzy_resource_label` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sort` int(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `flag` varchar(50) NOT NULL COMMENT '标签分类标识',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态（0 正常 1 禁用）',
  `is_destroy` tinyint(1) DEFAULT '1' COMMENT '是否有效（0 无效，1有效）',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) unsigned DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='资源分类表';

-- ----------------------------
-- Records of qmzy_resource_label
-- ----------------------------

-- ----------------------------
-- Table structure for qmzy_resource_order
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_resource_order`;
CREATE TABLE `qmzy_resource_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `res_id` int(11) DEFAULT NULL COMMENT '资源ID',
  `user_id` int(11) DEFAULT NULL,
  `money` int(10) NOT NULL DEFAULT '10' COMMENT '积分',
  `status` tinyint(1) DEFAULT '1' COMMENT '订单状态（1-完成，2-待支付）',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) unsigned DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qmzy_resource_order
-- ----------------------------
INSERT INTO `qmzy_resource_order` VALUES ('1', '1', null, '450', '1', '1539273600', null, null);
INSERT INTO `qmzy_resource_order` VALUES ('2', '2', null, '120', '1', '1541174400', null, null);
INSERT INTO `qmzy_resource_order` VALUES ('3', '3', null, '150', '1', '1541174400', null, null);
INSERT INTO `qmzy_resource_order` VALUES ('4', '4', null, '450', '1', '1541174400', null, null);

-- ----------------------------
-- Table structure for qmzy_resource_tag
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_resource_tag`;
CREATE TABLE `qmzy_resource_tag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT '标签id',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='资源标签表';

-- ----------------------------
-- Records of qmzy_resource_tag
-- ----------------------------
INSERT INTO `qmzy_resource_tag` VALUES ('1', 'PHP', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('2', 'MySQLi', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('3', 'ThinkPHP3.2', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('4', 'ThinkPHP5.0', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('5', 'ThinkPHP5.1', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('6', 'PDO', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('7', 'Bootstrap', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('8', '分页类', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('9', '小案例', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('10', '登录注册', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('11', '许愿墙', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('12', 'SESSION', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('13', 'COOKIE', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('14', '文件与目录操作', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('15', 'PDO', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('16', '文件上传', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('17', 'GD库函数使用', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('18', '验证码', '1');
INSERT INTO `qmzy_resource_tag` VALUES ('19', '', '1');

-- ----------------------------
-- Table structure for qmzy_tag
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_tag`;
CREATE TABLE `qmzy_tag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '标签名称',
  `flag` varchar(50) NOT NULL COMMENT '标签分类标识',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态（0 正常 1 禁用）',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) unsigned DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='标签表';

-- ----------------------------
-- Records of qmzy_tag
-- ----------------------------

-- ----------------------------
-- Table structure for qmzy_typing
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_typing`;
CREATE TABLE `qmzy_typing` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `author` varchar(50) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态（-1删除，1显示（默认），2隐藏）',
  `is_destroy` tinyint(1) DEFAULT '1' COMMENT '是否有效（0 无效，1有效）',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) unsigned DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) unsigned DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='打印表';

-- ----------------------------
-- Records of qmzy_typing
-- ----------------------------

-- ----------------------------
-- Table structure for qmzy_user
-- ----------------------------
DROP TABLE IF EXISTS `qmzy_user`;
CREATE TABLE `qmzy_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户表id',
  `name` varchar(50) DEFAULT NULL COMMENT '名称',
  `nickname` varchar(255) DEFAULT NULL COMMENT '昵称',
  `phone` varchar(11) DEFAULT NULL COMMENT '手机',
  `sex` tinyint(1) NOT NULL DEFAULT '0' COMMENT '性别 0-未知、1-男、2-女',
  `age` int(3) unsigned NOT NULL DEFAULT '0' COMMENT '年龄',
  `rand` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `invite` int(11) DEFAULT NULL COMMENT '邀请人id',
  `status` tinyint(2) NOT NULL DEFAULT '2' COMMENT '1-启用、2-禁用、-1-删除',
  `isdestroy` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-有效、0-无效 默认1',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of qmzy_user
-- ----------------------------
