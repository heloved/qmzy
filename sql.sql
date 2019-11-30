
-- 创建资源标签表 18-12-12

DROP TABLE IF EXISTS `qmzy_res_tag`;
CREATE TABLE IF NOT EXISTS `qmzy_res_tag`(
	`res_id` INT(11) UNSIGNED NOT NULL COMMENT '资源id',
	`tag_id` INT(11) UNSIGNED NOT NULL COMMENT '标签id'
)ENGINE=InnoDB CHARSET=utf8 COMMENT '资源标签表';

-- 创建标签表 18-12-12
DROP TABLE IF EXISTS `qmzy_tag`;
CREATE TABLE IF NOT EXISTS `qmzy_tag`(
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COMMENT '标签名称',
	`flag` VARCHAR(50) NOT NULL COMMENT '标签分类标识',
	`status` TINYINT(1) DEFAULT 0 COMMENT '状态（0 正常 1 禁用）',
	`create_time` INT(11) UNSIGNED COMMENT '创建时间',
	`update_time` INT(11) UNSIGNED COMMENT '更新时间',
	`delete_time` INT(11) UNSIGNED COMMENT '删除时间',
	PRIMARY KEY(`id`)
)ENGINE=InnoDB CHARSET =utf8 COMMENT '标签表';

-- 创建资源分类表 18-12-12
DROP TABLE IF EXISTS `resource_label`;
CREATE TABLE IF NOT EXISTS `resource_label`(
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`sort` INT(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '排序',
	`title` VARCHAR(50) NOT NULL COMMENT '标题',
	`flag` VARCHAR(50) NOT NULL COMMENT '标签分类标识',
	`status` TINYINT(1) DEFAULT 0 COMMENT '状态（0 正常 1 禁用）',
	`is_destroy` TINYINT(1) DEFAULT 1 COMMENT '是否有效（0 无效，1有效）',
	`create_time` INT(11) UNSIGNED COMMENT '创建时间',
	`update_time` INT(11) UNSIGNED COMMENT '更新时间',
	`delete_time` INT(11) UNSIGNED COMMENT '删除时间',
	PRIMARY KEY(`id`)
)ENGINE=InnoDB CHARSET =utf8 COMMENT'资源分类表';


-- 创建资源信息表
DROP TABLE IF EXISTS `resource`;
CREATE TABLE IF NOT EXISTS `resource`(
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
	`title` VARCHAR(50) NOT NULL COMMENT '标题',
	`description` text NOT NULL COMMENT '描述',
	`content` text NOT NULL COMMENT '内容',
	`integral` INT(10) NOT NULL COMMENT '积分',
	`down_count` INT(10) NOT NULL COMMENT '下载统计',
	`demo_admin` VARCHAR(200) NOT NULL COMMENT '后台演示地址',
	`demo_index` VARCHAR(200) NOT NULL COMMENT '前台演示地址',
	`remark` text NOT NULL COMMENT '备注',
	`status` TINYINT(1) DEFAULT 1 COMMENT '状态（-1删除，1显示（默认），2隐藏）',
	`is_destroy` TINYINT(1) DEFAULT 1 COMMENT '是否有效（0 无效，1有效）',
	`create_time` INT(11) UNSIGNED COMMENT '创建时间',
	`update_time` INT(11) UNSIGNED COMMENT '更新时间',
	`delete_time` INT(11) UNSIGNED COMMENT '删除时间',
	PRIMARY KEY(`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '资源表';



-- 创建用户表
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS user(
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户表id',
	`name` VARCHAR(50) COMMENT '名称',
	`nickname` VARCHAR(255) COMMENT '昵称',
	`phone`	VARCHAR(11) COMMENT '手机',
	`sex` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '性别 0-未知、1-男、2-女',
	`age` INT(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '年龄',
	`rand` VARCHAR(20),
	`ip` VARCHAR(20),
	`invite` INT(11) COMMENT '邀请人id',
	`status` TINYINT(2) NOT NULL DEFAULT 2 COMMENT '1-启用、2-禁用、-1-删除',
	`isdestroy` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '1-有效、0-无效 默认1',
	`create_time` INT(11) COMMENT '创建时间',
	`update_time` INT(11) COMMENT '更新时间',
	`delete_time` INT(11) COMMENT '删除时间',
	PRIMARY KEY(`id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT '用户表';


-- 创建打印表
DROP TABLE IF EXISTS `qmzy_typing`;
CREATE TABLE IF NOT EXISTS `qmzy_typing`(
	`id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
	`author` VARCHAR(50) NOT NULL COMMENT '标题',
	`content` text NOT NULL COMMENT '内容',
	`status` TINYINT(1) DEFAULT 1 COMMENT '状态（-1删除，1显示（默认），2隐藏）',
	`is_destroy` TINYINT(1) DEFAULT 1 COMMENT '是否有效（0 无效，1有效）',
	`create_time` INT(11) UNSIGNED COMMENT '创建时间',
	`update_time` INT(11) UNSIGNED COMMENT '更新时间',
	`delete_time` INT(11) UNSIGNED COMMENT '删除时间',
	PRIMARY KEY(`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '打印表';


 