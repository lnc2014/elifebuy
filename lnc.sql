/*
SQLyog Ultimate v11.27 (32 bit)
MySQL - 5.6.17 : Database - lnccms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lnccms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `lnccms`;

/*Table structure for table `lnc_ad` */

DROP TABLE IF EXISTS `lnc_ad`;

CREATE TABLE `lnc_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(50) NOT NULL COMMENT '广告名称',
  `title_alias` char(40) NOT NULL DEFAULT '' COMMENT '标识',
  `link_url` varchar(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `image_url` varchar(255) NOT NULL DEFAULT '' COMMENT '图片地址',
  `width` varchar(10) NOT NULL DEFAULT '' COMMENT '图片宽',
  `height` varchar(10) NOT NULL DEFAULT '' COMMENT '图片高',
  `intro` text COMMENT '广告描述',
  `click_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击数',
  `start_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `expired_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '过期时间',
  `attach_file` varchar(100) NOT NULL DEFAULT '' COMMENT '附件',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='广告';

/*Data for the table `lnc_ad` */

insert  into `lnc_ad`(`id`,`title`,`title_alias`,`link_url`,`image_url`,`width`,`height`,`intro`,`click_count`,`start_time`,`expired_time`,`attach_file`,`sort_order`,`status_is`,`create_time`) values (1,'首页banner','index_banner','http://www.bagecms.com','','','','',0,1379520000,1546272000,'uploads/201309/523a2c04a37a1.jpg',8,'Y',1379544068),(2,'首页banner','index_banner','','','','','',0,1379520000,1546272000,'uploads/201309/523a2c4baba12.jpg',9,'Y',1379544139),(3,'首页banner','index_banner','','','','','',0,1379520000,1379606400,'uploads/201309/523a2ca7b51ce.jpg',10,'Y',1379544231);

/*Table structure for table `lnc_admin` */

DROP TABLE IF EXISTS `lnc_admin`;

CREATE TABLE `lnc_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL COMMENT '用户',
  `password` char(32) NOT NULL COMMENT '密码',
  `realname` varchar(100) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `group_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '用户组',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `qq` varchar(15) NOT NULL DEFAULT '0' COMMENT 'QQ',
  `notebook` text COMMENT '备忘',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '电话',
  `telephone` varchar(20) NOT NULL DEFAULT '' COMMENT '手机',
  `last_login_ip` char(15) NOT NULL DEFAULT '127' COMMENT '最后登录ip',
  `last_login_time` int(10) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `login_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '用户状态',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员';

/*Data for the table `lnc_admin` */

insert  into `lnc_admin`(`id`,`username`,`password`,`realname`,`group_id`,`email`,`qq`,`notebook`,`mobile`,`telephone`,`last_login_ip`,`last_login_time`,`login_count`,`status_is`,`create_time`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','',1,'admin@lnctime.com','0','','','','127.0.0.1',1459342060,12,'Y',1457269128);

/*Table structure for table `lnc_admin_group` */

DROP TABLE IF EXISTS `lnc_admin_group`;

CREATE TABLE `lnc_admin_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) NOT NULL COMMENT '组名称',
  `acl` text NOT NULL COMMENT '权限',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员组';

/*Data for the table `lnc_admin_group` */

insert  into `lnc_admin_group`(`id`,`group_name`,`acl`,`status_is`,`create_time`) values (1,'超级管理','administrator','',0),(2,'禁用','administrator','Y',0);

/*Table structure for table `lnc_admin_logger` */

DROP TABLE IF EXISTS `lnc_admin_logger`;

CREATE TABLE `lnc_admin_logger` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `catalog` enum('login','create','update','delete','other','browse') NOT NULL DEFAULT 'other' COMMENT '类型',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT 'url',
  `intro` text COMMENT '操作',
  `ip` char(15) NOT NULL DEFAULT '127.0.0.1' COMMENT '操作ip',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='管理员日志';

/*Data for the table `lnc_admin_logger` */

insert  into `lnc_admin_logger`(`id`,`user_id`,`catalog`,`url`,`intro`,`ip`,`create_time`) values (1,0,'login','/lnccms/index.php?r=admini/public/login','登录失败，密码不正确:admin，使用密码：123456','127.0.0.1',1457269143),(2,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1457269148),(3,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1457319495),(4,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1457319495),(5,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1458464037),(6,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1458464037),(7,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1458467524),(8,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1458467524),(9,1,'update','/lnccms/index.php?r=admini/config/index','更新系统配置，模块：index','127.0.0.1',1458468080),(10,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1458468559),(11,1,'delete','/lnccms/index.php?r=admini/question/batch&command=delete&id=1','删除留言反馈，ID:1','127.0.0.1',1458476023),(12,1,'update','/lnccms/index.php?r=admini/config/index','更新系统配置，模块：index','127.0.0.1',1458476081),(13,1,'create','/lnccms/index.php?r=admini/post/create','录入内容,ID:19','127.0.0.1',1458525310),(14,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1458740898),(15,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1458740898),(16,1,'create','/lnccms/index.php?r=admini/post/create','录入内容,ID:20','127.0.0.1',1458742556),(17,1,'delete','/lnccms/index.php?r=admini/post/batch&command=delete&id=20','删除内容，ID:20','127.0.0.1',1458743350),(18,1,'delete','/lnccms/index.php?r=admini/post/batch&command=delete&id=19','删除内容，ID:19','127.0.0.1',1458743352),(19,1,'delete','/lnccms/index.php?r=admini/post/batch','删除内容，ID:18,17,16,15,14,13,12,11,10,9,8,7,6','127.0.0.1',1458743357),(20,1,'update','/lnccms/index.php?r=admini/post/update&id=5','编辑内容,ID:5','127.0.0.1',1458743372),(21,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1459342060),(22,1,'login','/lnccms/index.php?r=admini/public/login','用户登录成功:admin','127.0.0.1',1459342060),(23,1,'update','/lnccms/index.php?r=admini/post/update&id=5','编辑内容,ID:5','127.0.0.1',1459343472),(24,1,'update','/lnccms/index.php?r=admini/post/update&id=4','编辑内容,ID:4','127.0.0.1',1459343476),(25,1,'update','/lnccms/index.php?r=admini/post/update&id=5','编辑内容,ID:5','127.0.0.1',1459344554),(26,1,'delete','/lnccms/index.php?r=admini/post/batch&command=delete&id=4','删除内容，ID:4','127.0.0.1',1459344572),(27,1,'update','/lnccms/index.php?r=admini/post/update&id=3','编辑内容,ID:3','127.0.0.1',1459344604),(28,1,'update','/lnccms/index.php?r=admini/post/update&id=2','编辑内容,ID:2','127.0.0.1',1459344634),(29,1,'update','/lnccms/index.php?r=admini/post/update&id=1','编辑内容,ID:1','127.0.0.1',1459344717),(30,1,'update','/lnccms/index.php?r=admini/config/seo','更新系统配置，模块：seo','127.0.0.1',1459346648),(31,1,'update','/lnccms/index.php?r=admini/config/upload','更新系统配置，模块：upload','127.0.0.1',1459346659),(32,1,'update','/lnccms/index.php?r=admini/post/update&id=5','编辑内容,ID:5','127.0.0.1',1459347226),(33,1,'update','/lnccms/index.php?r=admini/post/update&id=5','编辑内容,ID:5','127.0.0.1',1459347245),(34,1,'update','/lnccms/index.php?r=admini/post/update&id=3','编辑内容,ID:3','127.0.0.1',1459348811),(35,1,'update','/lnccms/index.php?r=admini/post/update&id=1','编辑内容,ID:1','127.0.0.1',1459348987),(36,1,'update','/lnccms/index.php?r=admini/post/update&id=2','编辑内容,ID:2','127.0.0.1',1459349017),(37,1,'update','/lnccms/index.php?r=admini/post/update&id=5','编辑内容,ID:5','127.0.0.1',1459350164);

/*Table structure for table `lnc_attr` */

DROP TABLE IF EXISTS `lnc_attr`;

CREATE TABLE `lnc_attr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scope` enum('config','post','page') NOT NULL DEFAULT 'post' COMMENT '使用范围',
  `attr_name` varchar(50) NOT NULL COMMENT '字段名称',
  `attr_name_alias` char(50) NOT NULL DEFAULT '' COMMENT '字段别名',
  `catalog_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '所属栏目',
  `tips` varchar(255) NOT NULL DEFAULT '' COMMENT '说明',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `attr_type` enum('select','input','file','checkbox','textarea','radio') NOT NULL DEFAULT 'input' COMMENT '字段类型',
  `data_default` text COMMENT '字段默认数据',
  `max_lenght` int(11) NOT NULL DEFAULT '0' COMMENT '长度',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='扩展字段管理';

/*Data for the table `lnc_attr` */

insert  into `lnc_attr`(`id`,`scope`,`attr_name`,`attr_name_alias`,`catalog_id`,`tips`,`sort_order`,`attr_type`,`data_default`,`max_lenght`,`create_time`) values (1,'config','手机','mobile',0,'',0,'input','',0,1379553842),(2,'config','传真','fax',0,'',0,'input','',0,1379553920),(3,'config','电话','telephone',0,'',0,'input','',0,1379553920),(4,'config','400电话','telephone_400',0,'',0,'input','',0,1379553920),(5,'config','地址','address',0,'',0,'input','',0,1379553920);

/*Table structure for table `lnc_attr_val` */

DROP TABLE IF EXISTS `lnc_attr_val`;

CREATE TABLE `lnc_attr_val` (
  `val_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '内容编号',
  `attr_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '属性编号',
  `attr_name` varchar(60) NOT NULL DEFAULT '' COMMENT '属性名称',
  `attr_val` text COMMENT '属性内容',
  PRIMARY KEY (`val_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='属性内容';

/*Data for the table `lnc_attr_val` */

/*Table structure for table `lnc_catalog` */

DROP TABLE IF EXISTS `lnc_catalog`;

CREATE TABLE `lnc_catalog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类',
  `catalog_name` varchar(100) NOT NULL COMMENT '名称',
  `catalog_name_second` varchar(100) DEFAULT '' COMMENT '副名称',
  `catalog_name_alias` varchar(100) NOT NULL DEFAULT '' COMMENT '别名',
  `content` text COMMENT '详细介绍',
  `seo_title` varchar(100) NOT NULL DEFAULT '' COMMENT 'seo标题',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '' COMMENT 'seo关键字',
  `seo_description` text COMMENT 'seo描述',
  `attach_file` varchar(100) DEFAULT '' COMMENT '附件',
  `attach_thumb` varchar(100) DEFAULT '' COMMENT '缩略图',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `data_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '数据量',
  `page_size` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '每页显示数量',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '状态',
  `menu_is` enum('Y','N') DEFAULT 'N' COMMENT '是否导航显示',
  `redirect_url` varchar(255) NOT NULL DEFAULT '' COMMENT '跳转地址',
  `display_type` enum('page','list') NOT NULL DEFAULT 'list' COMMENT '显示方式',
  `template_list` varchar(100) NOT NULL DEFAULT '' COMMENT '列表模板',
  `template_page` varchar(100) NOT NULL DEFAULT '' COMMENT '单页模板',
  `template_show` varchar(100) NOT NULL DEFAULT '' COMMENT '内容页模板',
  `acl_browser` varchar(255) NOT NULL DEFAULT '' COMMENT '浏览权限',
  `acl_operate` varchar(255) NOT NULL DEFAULT '' COMMENT '操作权限',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='全局分类';

/*Data for the table `lnc_catalog` */

insert  into `lnc_catalog`(`id`,`parent_id`,`catalog_name`,`catalog_name_second`,`catalog_name_alias`,`content`,`seo_title`,`seo_keywords`,`seo_description`,`attach_file`,`attach_thumb`,`sort_order`,`data_count`,`page_size`,`status_is`,`menu_is`,`redirect_url`,`display_type`,`template_list`,`template_page`,`template_show`,`acl_browser`,`acl_operate`,`create_time`) values (1,0,'新闻','新闻','news','新闻栏目介绍','','','','','',0,0,0,'Y','N','','list','list_text','list_page','show_post','','',1379545020),(2,1,'公司动态','公司动态','company-news','公司动态栏目介绍','','','','','',0,0,0,'Y','N','','list','list_text','list_page','show_post','','',1379545199),(3,1,'行业新闻','行业新闻','industry-news','行业新闻栏目介绍','','','','','',0,0,0,'Y','N','','list','list_text','list_page','show_post','','',1379545248),(4,0,'产品','产品','goods','产品栏目介绍','','','','','',0,0,0,'Y','N','','list','list_goods','list_page','show_goods','','',1379545330),(5,4,'新品上市','新品上市','new-arrival','新品上市栏目介绍','','','','','',0,0,0,'Y','N','','list','list_goods','list_page','show_goods','','',1379545388),(6,4,'特价商品','特价商品','sales-goods','特价商品栏目介绍','','','','','',0,0,0,'Y','N','','list','list_goods','list_page','show_goods','','',1379545435);

/*Table structure for table `lnc_config` */

DROP TABLE IF EXISTS `lnc_config`;

CREATE TABLE `lnc_config` (
  `scope` char(20) NOT NULL DEFAULT '' COMMENT '范围',
  `variable` varchar(50) NOT NULL COMMENT '变量',
  `value` text COMMENT '值',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  PRIMARY KEY (`variable`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统配置';

/*Data for the table `lnc_config` */

insert  into `lnc_config`(`scope`,`variable`,`value`,`description`) values ('base','site_name','后台管理系统',''),('base','site_domain','http://www.lnctime.com',''),('base','admin_email','abc@qq.com',''),('base','site_icp','',''),('base','site_closed_summary','系统维护中，请稍候......',''),('base','site_stats','',''),('base','seo_title','印度神油-官方神兽',''),('base','seo_description','印度神油',''),('base','seo_keywords','印度;神油',''),('base','admin_telephone','18606712910',''),('base','site_status','open',''),('base','site_status_intro','网站升级中..........',''),('base','admin_logger','open',''),('base','user_status','open',''),('base','user_mail_verify','open',''),('base','site_copyright','COPYRIGHT © 2012 - 2016lncCMS. ALL RIGHTS RESERVED.八哥内容管理系统 版权所有',''),('base','upload_water_size','100x100',''),('base','upload_water_file','static/watermark.png',''),('base','upload_water_status','close',''),('base','upload_allow_ext','jpg,gif,bmp,jpeg,png,doc,zip,rar,7z,txt,sql,pdf',''),('base','upload_max_size','500',''),('base','upload_water_scope','100x100',''),('base','upload_water_position','5',''),('base','upload_water_padding','5',''),('base','upload_water_trans','30',''),('custom','_address','浙江省杭州市西湖区请填写详细地址',''),('custom','_fasdf','fasfcccccccccccc',''),('custom','_telephone','(+86 10) 5992 8888',''),('custom','_telephone_400','400 888 888',''),('custom','_fax','传真:(+86 10) 5992 0000',''),('custom','_mobile','18600000000','');

/*Table structure for table `lnc_goods` */

DROP TABLE IF EXISTS `lnc_goods`;

CREATE TABLE `lnc_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) DEFAULT NULL COMMENT '商品ID',
  `goods_title` varchar(100) DEFAULT NULL COMMENT '商品标题',
  `goods_sum` varchar(50) DEFAULT NULL COMMENT '商品的简介',
  `goods_intro` varchar(5000) DEFAULT NULL COMMENT '商品的介绍',
  `goods_pics` longtext COMMENT '商品图片介绍,以,隔开存储',
  `goods_price` int(11) DEFAULT NULL COMMENT '商品价格,按整型存储,拿出来的时候记得除以一百',
  `goods_thumb` varchar(255) DEFAULT NULL COMMENT '商品缩略图',
  `recommend` tinyint(4) DEFAULT '0' COMMENT '1为推荐,0为不推荐',
  `status` tinyint(4) DEFAULT NULL COMMENT '商品状态,1为正常,2为已经下架',
  `createtime` datetime DEFAULT NULL COMMENT '创建时间',
  `updatetime` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `lnc_goods` */

/*Table structure for table `lnc_goods_cate` */

DROP TABLE IF EXISTS `lnc_goods_cate`;

CREATE TABLE `lnc_goods_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(100) DEFAULT NULL COMMENT '商品分类名称',
  `pid` int(11) DEFAULT NULL COMMENT '保留字段,上级分类',
  `cate_intro` varchar(255) DEFAULT NULL COMMENT '分类简介',
  `create_time` datetime DEFAULT NULL COMMENT '分类创建时间',
  `upadate_time` datetime DEFAULT NULL COMMENT '分类更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `lnc_goods_cate` */

insert  into `lnc_goods_cate`(`id`,`cate_name`,`pid`,`cate_intro`,`create_time`,`upadate_time`) values (26,'印度皇帝油',NULL,'印度红油经典升级款-阿育吠陀皇帝油\n特点：比印度红油配方更好，效果更明显，\n该款是印度红油最新升级版。\n主要功能：延时+助勃+增大','2016-03-30 21:25:57','2016-03-30 21:25:57'),(27,'原装印度神油',NULL,'早泄克星、猛男必备神器、全网销量之王！\n特点：印度原装进口喷剂、纯植物提取、\n不麻木、抗过敏、无色无味。 \n主要功能：男性延时','2016-03-30 21:26:11','2016-03-30 21:26:11'),(28,'印度延时喷剂',NULL,'印度黑油延时喷剂\n特点：采用印度王室经典配方，由多种稀有\n的印度草本植物提取制成。\n主要功能：男性延时','2016-03-30 21:26:25','2016-03-30 21:26:25'),(29,'印度红油',NULL,'阿育吠陀草本按摩红油\n特点：采用印度王室经典配方，由多种稀有\n的印度草本植物提取制成。\n主要功能：延时+助勃+增大','2016-03-30 21:26:40','2016-03-30 21:26:40');

/*Table structure for table `lnc_link` */

DROP TABLE IF EXISTS `lnc_link`;

CREATE TABLE `lnc_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(100) NOT NULL COMMENT '名称',
  `site_url` varchar(255) NOT NULL COMMENT '链接地址',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `click_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `link_type` enum('image','txt') NOT NULL DEFAULT 'txt' COMMENT '链接类型',
  `attach_file` varchar(100) NOT NULL DEFAULT '' COMMENT '链接图片',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '显示状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接';

/*Data for the table `lnc_link` */

/*Table structure for table `lnc_page` */

DROP TABLE IF EXISTS `lnc_page`;

CREATE TABLE `lnc_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `title_second` varchar(100) NOT NULL DEFAULT '' COMMENT '副标题',
  `title_alias` char(40) NOT NULL COMMENT '标签',
  `html_path` varchar(100) NOT NULL DEFAULT '' COMMENT 'html路径',
  `html_file` varchar(100) NOT NULL DEFAULT '' COMMENT 'html文件',
  `intro` text COMMENT '简单描述',
  `content` mediumtext NOT NULL COMMENT '内容',
  `seo_title` varchar(255) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '' COMMENT 'SEO KEYWORDS',
  `seo_description` text COMMENT 'SEO DESCRIPTION',
  `template` varchar(30) NOT NULL DEFAULT '' COMMENT '模板',
  `attach_file` varchar(60) NOT NULL DEFAULT '' COMMENT '附件',
  `attach_thumb` varchar(60) NOT NULL DEFAULT '' COMMENT '附件小图',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `view_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '查看次数',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='单页';

/*Data for the table `lnc_page` */

insert  into `lnc_page`(`id`,`title`,`title_second`,`title_alias`,`html_path`,`html_file`,`intro`,`content`,`seo_title`,`seo_keywords`,`seo_description`,`template`,`attach_file`,`attach_thumb`,`sort_order`,`view_count`,`status_is`,`create_time`) values (1,'关于我们','','about','','','BageCms是一款基于php5+mysql5开发的多功能开源的网站内容管理系统。使用高性能的PHP5的web应用程序开发框架YII构建，具有操作简单、稳定、安全、高效、跨平台等特点。采用MVC设计模式，模板定制方便灵活，内置小挂工具，方便制作各类功能和效果，BageCms可用于企业建站、个人博客、资讯门户、图片站等各类型站点','<p>\r\n	BageCms是一款基于php5+mysql5开发的多功能开源的网站内容管理系统。使用高性能的PHP5的web应用程序开发框架YII构建，具有操作简单、稳定、安全、高效、跨平台等特点。采用MVC设计模式，模板定制方便灵活，内置小挂工具，方便制作各类功能和效果，BageCms可用于企业建站、个人博客、资讯门户、图片站等各类型站点。<br />\r\n<br />\r\n特点：<br />\r\n<br />\r\n1.开源免费<br />\r\n无论是个人还是企业展示型网站均可用本系统来完成<br />\r\n<br />\r\n2.数据调用方便快捷<br />\r\n自主研发的数据调用模块，能快速调用各类型数据，方便建站<br />\r\n<br />\r\n3.应用范围广<br />\r\n这套系统不是企业网站管理系统，也不是博客程序，更不是专业的图片管理系统，但它却具备大部分企业站、博客站、图片站的功能<br />\r\n<br />\r\n4.安全高性能<br />\r\n基于高性能的PHP5的web应用程序开发框架YII构建具有稳定、安全、高效、跨平台等特点<br />\r\n<br />\r\n5.URL自定义<br />\r\n系统支持自定义伪静态显示方式，良好的支持搜索引擎SEO。个性化设置每个栏目、内容的标题标签、描述标签、关键词标签<br />\r\n<br />\r\n6.自定义数据模型<br />\r\n系统可自定义数据模型满足各种表示形式和字段需求<br />\r\n<br />\r\n7.完善的后台权限控制<br />\r\n特有的管理员权限管理机制，可以灵活设置管理员的栏目管理权限、网站信息的添加、修改、删除权限等<br />\r\n<br />\r\n<br />\r\n系统运行环境：<br />\r\n数据库： mysql5+<br />\r\nPHP版本：php5.2.+<br />\r\n服务器：linux,unix,freebsd等<br />\r\n<br />\r\n官方网址：http://www.bagecms.com<br />\r\n下载地址：http://www.bagecms.com/download/bagecms<br />\r\n<br />\r\n演示地址：http://demo.bagecms.com<br />\r\n后台地址：http://demo.bagecms.com/admini<br />\r\n用户：bagecms<br />\r\n密码：bagecms\r\n</p>\r\n<p>\r\n	<br />\r\n</p>','','','','','uploads/201309/logo.jpg','uploads/201309/logo.jpg',0,0,'Y',1322999570),(2,'联系我们','','contact','','','','<p>\r\n	QQ:5565907\r\n</p>\r\n<p>\r\n	QQ群：139869141\r\n</p>\r\n<p>\r\n	BageCMS官方网站：<a href=\"http://www.bagecms.com\" target=\"_blank\">http://www.bagecms.com</a>\r\n</p>\r\n<p>\r\n	八哥软件官方网站：<a href=\"http://www.bagesoft.cn\" target=\"_blank\">http://www.bagesoft.cn</a>\r\n</p>','','','','','','',0,0,'Y',1322999588),(3,'企业文化','','cultural','','','企业文化是企业为解决生存和发展的问题的而树立形成的，被组织成员认为有效而共享，并共同遵循的基本信念和认知。 企业文化集中体现了一个企业经营管理的核心主张，以及由此产生的组织行为。','<div>\r\n	<div>\r\n		迪尔和肯尼迪把企业文化整个理论系统概述为5个要素，即企业环境、价值观、英雄人物、文化仪式和文化网络。\r\n	</div>\r\n	<div>\r\n		企业环境是指企业的性质、企业的经营方向、外部环境、企业的社会形象、与外界的联系等方面。它往往决定企业的行为。\r\n	</div>\r\n	<div>\r\n		价值观是指企业内成员对某个事件或某种行为好与坏、善与恶、正确与错误、是否值得仿效的一致认识。价值观是企业文化的核心，统一的价值观使企业内成员在判断自己行为时具有统一的标准，并以此来选择自己的行为。\r\n	</div>\r\n	<div>\r\n		英雄人物是指企业文化的核心人物或企业文化的人格化，其作用在于作为一种活的样板，给企业中其他员工提供可供仿效的榜样，对企业文化的形成和强化起着极为重要的作用。\r\n	</div>\r\n	<div>\r\n		文化仪式是指企业内的各种表彰、奖励活动、聚会以及文娱活动等，它可以把企业中发生的某些事情戏剧化和形象化，来生动的宣传和体现本企业的价值观，使人们通过这些生动活泼的活动来领会企业文化的内涵，使企业文化“寓教于乐”之中。\r\n	</div>\r\n	<div>\r\n		文化网络是指非正式的信息传递渠道，主要是传播文化信息。它是由某种非正式的组织和人群，以及某一特定场合所组成，它所传递出的信息往往能反映出职工的愿望和心态。\r\n	</div>\r\n	<h3>\r\n		产生\r\n	</h3>\r\n	<div>\r\n		企业领导者把文化的变化人的功能应用于企业，以解决现代企业管理中的问题，就有了企业文化。企业管理理论和企业文化管理理论都追求效益。但前者为追求效益而把人当作客体，后者为追求效益把文化概念自觉应用于企业，把具有丰富创造性的人作为管理理论的中心。这种指导思想反映到企业管理中去，就有了人们称之为企业文化的种种观念。\r\n	</div>\r\n	<h3>\r\n		认识\r\n	</h3>\r\n	<div>\r\n		从企业文化的现实出发，进行深入的调查研究，把握企业文化各种现象之间的本质联系。依据实践经验，从感认认识到理性认识，进行科学的概括、总结。\r\n	</div>\r\n	<h3>\r\n		意义\r\n	</h3>\r\n	<div>\r\n		一．企业文化能激发员工的使命感。不管是什么企业都有它的责任和使命，企业使命感是全体员工工作的目标和方向，是企业不断发展或前进的动力之源。\r\n	</div>\r\n	<div>\r\n		二．企业文化能凝聚员工的归属感。　企业文化的作用就是通过企业价值观的提炼和传播，让一群来自不同地方的人共同追求同一个梦想。\r\n	</div>\r\n	<div>\r\n		三．企业文化能加强员工的责任感。企业要通过大量的资料和文件宣传员工责任感的重要性，管理人员要给全体员工灌输责任意识，危机意识和团队意识，要让大家清楚地认识企业是全体员工共同的企业。\r\n	</div>\r\n	<div>\r\n		四．企业文化能赋予员工的荣誉感。每个人都要在自己的工作岗位，工作领域，多做贡献，多出成绩，多追求荣誉感。\r\n	</div>\r\n	<div>\r\n		五．企业文化能实现员工的成就感。一个企业的繁荣昌盛关系到每一个公司员工的生存，企业繁荣了，员工们就会引以为豪，会更积极努力的进取，荣耀越高，成就感就越大，越明显。\r\n	</div>\r\n</div>\r\n<div>\r\n</div>','','','','','','',0,0,'Y',1331877791),(4,'管理团队','','team','','','团队是现代企业管理中战斗的核心，几乎没有一家企业不谈团队，好象团队就是企业做大做强的灵丹妙药，只要抓紧团队建设就能有锦锈前程了。团队是个好东西，但怎样的团队才算一个好团队，怎样才能运作好一个团队呢？却是许多企业管理者不甚了然的，于是在企业团队建设的过程中就出现了许多弊病，例如从理论著作中生搬硬套到团队运作里面，是很难产生好团队的。','<div>\r\n	<div>\r\n		团队是现代企业管理中战斗的核心，几乎没有一家企业不谈团队，好象团队就是企业做大做强的灵丹妙药，只要抓紧团队建设就能有锦锈前程了。团队是个好东西，但怎样的团队才算一个好团队，怎样才能运作好一个团队呢？却是许多企业管理者不甚了然的，于是在企业团队建设的过程中就出现了许多弊病，例如从理论著作中生搬硬套到团队运作里面，是很难产生好团队的。任何理念都不能执着，执着生僵化，就会蜕变为形式主义，后果很糟糕。在如今企业管理者热火朝天进行的团队建设中就存在这个问题，将团队作为企业文化建设的至上准则是不恰当的，是不符合多元化的现实状况的。\r\n	</div>\r\n	<div>\r\n		一个优秀的企业管理者，应该怎样管理员工?道理也很简单，那就是要给员工创造一个充分利用自己的个性将工作干得最好的条件。不一定什么都要团队化，太死板了。虽然现在的企业也都提倡创新，但如果管理者过分强调团队精神，则员工的创新精神必然受到压抑。压抑个性就是压抑创新，没有个性哪来的创新?说得极端一点，企业管理者要谨防团队建设法西斯化。团队是需要的，企业管理者在团队建设的同时要遵循一个原则，不能压抑员工的个性。在团队内部，企业管理者要给员工充分的自由，少说几句少数服从多数，要知道，聪明的人在世界上还就占少数。\r\n	</div>\r\n	<div>\r\n		企业管理者应该解放思想，要有多元化的思维。不同的企业，团队的性质也不一样。要量体裁衣建设符合企业内在要求的团队，要灵活变化，别搞一刀切。如果该企业是劳动密集型企业，那你可以建设一支高度纪律性组织性的团队。如果该企业是知识密集型企业，那就要以自由主义来管理员工了，建立一支人尽其才的团队是最重要的，严格说算不上是团队，也没必要强调团队，更注重的应该是员工的个人创造力，千万别让团队束缚住员工的头脑，当然应该有的纪律和合作也是不可少的。如果企业既有创造型员工也有操作型员工，那可将团队建设重点放到操作型员工身上。需要注意的一点是，越聪明的人越倾向个人主义，这个情况，企业管理者要注意有的放矢。\r\n	</div>\r\n</div>\r\n<div>\r\n</div>','','','','','','',0,0,'Y',1379392484);

/*Table structure for table `lnc_post` */

DROP TABLE IF EXISTS `lnc_post`;

CREATE TABLE `lnc_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '用户',
  `nickname` varchar(30) NOT NULL DEFAULT '' COMMENT '用户名',
  `author` varchar(100) NOT NULL DEFAULT '' COMMENT '作者',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `title_second` varchar(255) NOT NULL DEFAULT '' COMMENT '副标题',
  `title_alias` char(50) NOT NULL DEFAULT '' COMMENT '别名 ',
  `title_style` varchar(255) NOT NULL DEFAULT '' COMMENT '标题样式',
  `title_style_serialize` varchar(255) NOT NULL DEFAULT '' COMMENT '标题样式序列化',
  `html_path` varchar(100) NOT NULL DEFAULT '' COMMENT 'html路径',
  `html_file` varchar(100) NOT NULL DEFAULT '' COMMENT 'html文件名',
  `template` varchar(60) NOT NULL DEFAULT '' COMMENT '模板',
  `catalog_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类',
  `special_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '专题编号',
  `intro` text COMMENT '摘要',
  `image_list` text COMMENT '组图',
  `seo_title` varchar(255) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `seo_description` text COMMENT 'SEO描述',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '' COMMENT 'SEO关键字',
  `content` mediumtext NOT NULL COMMENT '内容',
  `copy_from` varchar(100) NOT NULL DEFAULT '' COMMENT '来源',
  `copy_url` varchar(255) NOT NULL DEFAULT '' COMMENT '来源url',
  `redirect_url` varchar(255) NOT NULL DEFAULT '' COMMENT '跳转URL',
  `tags` varchar(255) NOT NULL DEFAULT '' COMMENT 'tags',
  `view_count` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '查看次数',
  `commend` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '推荐',
  `attach_status` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '是否上传附件',
  `attach_file` varchar(255) NOT NULL DEFAULT '' COMMENT '附件名称',
  `attach_thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '附件缩略图',
  `favorite_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '收藏数量',
  `attention_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关注次数',
  `top_line` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '头条',
  `last_update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后更新时间',
  `reply_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回复次数',
  `reply_allow` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '允许评论',
  `sort_desc` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `acl` varchar(100) NOT NULL DEFAULT 'Y' COMMENT '权限检测',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '新闻状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='内容管理';

/*Data for the table `lnc_post` */

insert  into `lnc_post`(`id`,`user_id`,`nickname`,`author`,`title`,`title_second`,`title_alias`,`title_style`,`title_style_serialize`,`html_path`,`html_file`,`template`,`catalog_id`,`special_id`,`intro`,`image_list`,`seo_title`,`seo_description`,`seo_keywords`,`content`,`copy_from`,`copy_url`,`redirect_url`,`tags`,`view_count`,`commend`,`attach_status`,`attach_file`,`attach_thumb`,`favorite_count`,`attention_count`,`top_line`,`last_update_time`,`reply_count`,`reply_allow`,`sort_desc`,`acl`,`status_is`,`create_time`) values (1,1,'','','阿育吠陀-印度红油','','','','','','','',27,0,'早泄克星、猛男必备神器、全网销量之王！\r\n特点：印度原装进口喷剂、纯植物提取、\r\n不麻木、抗过敏、无色无味。 \r\n主要功能：男性延时','','','','','<img src=\"/lnccms/uploads/201603/014bcc41eadaa3700c9fb28a8067f0f5.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/0805dcdbf1ba8d6af9272e010f01658f.jpg\" alt=\"\" />','','','','',5,'N','Y','uploads/201603/dc4c2baa03867bb92042e70e892f3c0c.jpg','uploads/201603/thumb_dc4c2baa03867bb92042e70e892f3c0c.jpg',0,0,'N',1459348987,0,'Y',0,'','Y',1379545825),(2,1,'','','阿育吠陀-印度延时喷剂','','','','','','','',28,2,'阿育吠陀草本按摩红油\r\n特点：采用印度王室经典配方，由多种稀有\r\n的印度草本植物提取制成。\r\n主要功能：延时+助勃+增大','','','','','<h2>\r\n	<img src=\"/lnccms/uploads/201603/1257d605fdf6a85a750f224c92355e1d.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/ca51951a879d9074f426e7be7c601b8e.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/6babd9b978a8a3c6446011ae2ea7d141.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/66b0251576cc521021360cb89a6df30a.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/1c4d4d9c4b86a447540b17758da61ea6.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/c591f628b167c7f5fe694209e465df94.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/fe2f73cb40e789f4ce9f2985e0506198.jpg\" alt=\"\" /><br />\r\n</h2>','','','','',1,'N','Y','uploads/201603/ea8c1e08ea94170385bd48ee5308cb07.jpg','uploads/201603/thumb_ea8c1e08ea94170385bd48ee5308cb07.jpg',0,0,'N',1459349017,0,'Y',0,'','Y',1379545932),(3,1,'','','原装印度神油','','','','','','','',27,1,'印度红油经典升级款-阿育吠陀皇帝油\r\n特点：比印度红油配方更好，效果更明显，\r\n该款是印度红油最新升级版。\r\n主要功能：延时+助勃+增大','','','','','<img src=\"/lnccms/uploads/201603/5e7391fa3def4c73ea2dca8cb2dfc2bd.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/89943994e083ea499750fcad175a444d.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/7243b8b2e31e6c1ab38c0118fa6914c4.jpg\" alt=\"\" /><br />','','','','',1,'N','Y','uploads/201603/57601d6ca288bfaeb3e4f9e08795093d.jpg','uploads/201603/thumb_57601d6ca288bfaeb3e4f9e08795093d.jpg',0,0,'N',1459348810,0,'Y',0,'','Y',1379546042),(5,1,'','','阿育吠陀-印度皇帝油','','','','','','','',26,2,'','','','','','<h2>\r\n	<img src=\"/lnccms/uploads/201603/08910156a2c47dba4f53a97a2d893735.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/c3821a52062309cd5d3b4f4d5f819225.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/f953a622a582ee971b60736b498d9e14.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/b25a63f2847c887b9857fed1725ceb27.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/1ad8444ced290e2bb22afe942a2d1d6e.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/6867808aed8ec09938144c4b826d6918.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/a5f8385ed5f721f2c872a5743cf3e8bb.jpg\" alt=\"\" /><br />\r\n</h2>\r\n<p>\r\n	<img src=\"/lnccms/uploads/201603/0c6fef5a0d61d21aa9d040a8b90b4c6a.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/95afe0017a25a5b9feef027ba49547fe.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/4150c067d381359bee7f1575ccdec435.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/1fb6e0662fb96fa2e512a35e0643d68a.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/db9ff06bfbc5f86dd25b4cdf6c754088.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/8b2e45e00249f8c48ed469a292da8df9.jpg\" alt=\"\" /><img src=\"/lnccms/uploads/201603/f0b6fff3a9996173021d0e8019b6e7e0.jpg\" alt=\"\" />\r\n</p>','','','','',6,'N','Y','uploads/201603/54614a701346fb608e5db93af45c90b9.jpg','uploads/201603/thumb_54614a701346fb608e5db93af45c90b9.jpg',0,0,'N',1459350164,0,'Y',0,'','Y',1379546197);

/*Table structure for table `lnc_post_2tags` */

DROP TABLE IF EXISTS `lnc_post_2tags`;

CREATE TABLE `lnc_post_2tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '标题ID',
  `tag_name` char(30) NOT NULL COMMENT '标签名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='内容关联标签';

/*Data for the table `lnc_post_2tags` */

/*Table structure for table `lnc_post_album` */

DROP TABLE IF EXISTS `lnc_post_album`;

CREATE TABLE `lnc_post_album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户名',
  `content_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '内容编号',
  `catalog` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '类别',
  `folder` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '文件夹',
  `real_name` varchar(255) NOT NULL DEFAULT '' COMMENT '原始文件名称',
  `file_name` char(100) NOT NULL DEFAULT '' COMMENT '带路径文件名',
  `thumb_name` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `save_path` varchar(100) NOT NULL DEFAULT '' COMMENT '保存路径',
  `save_name` varchar(100) NOT NULL DEFAULT '' COMMENT '保存文件名不带路径',
  `hash` char(32) NOT NULL DEFAULT '' COMMENT 'hash',
  `file_ext` char(5) NOT NULL DEFAULT 'jpg' COMMENT '扩展名称',
  `file_mime` varchar(50) NOT NULL DEFAULT '' COMMENT '文件头信息',
  `file_size` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小',
  `down_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '下载次数',
  `access` varchar(255) NOT NULL DEFAULT '' COMMENT '权限控制',
  `sort_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上传时间',
  PRIMARY KEY (`id`),
  KEY `album` (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片相册';

/*Data for the table `lnc_post_album` */

/*Table structure for table `lnc_post_comment` */

DROP TABLE IF EXISTS `lnc_post_comment`;

CREATE TABLE `lnc_post_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `post_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '标题id',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `nickname` varchar(60) NOT NULL DEFAULT 'guest' COMMENT '用户名',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `content` text NOT NULL COMMENT '评论内容',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '状态',
  `status_answer` enum('Y','N') NOT NULL DEFAULT 'N',
  `answer_content` text COMMENT '回复内容',
  `client_ip` char(5) NOT NULL DEFAULT '127' COMMENT '评论ip',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻评论';

/*Data for the table `lnc_post_comment` */

/*Table structure for table `lnc_post_tags` */

DROP TABLE IF EXISTS `lnc_post_tags`;

CREATE TABLE `lnc_post_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catalog_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分类',
  `tag_name` char(30) NOT NULL COMMENT 'tag名称',
  `data_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '数据总数',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '录入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='新闻标签';

/*Data for the table `lnc_post_tags` */

insert  into `lnc_post_tags`(`id`,`catalog_id`,`tag_name`,`data_count`,`create_time`) values (1,5,'贵族养生',1,1379546108),(2,5,'休闲放松',1,1379546108),(3,5,'麦乐迪',1,1379546248),(4,5,'KTV',1,1379546248),(5,2,'iOS7',1,1379546869),(6,2,'普通用户',1,1379546869),(7,2,'全新图标设计',1,1379546869),(8,3,'甲骨文',1,1379547034),(9,3,'净利润',1,1379547034),(10,2,'谷歌',1,1379554258),(11,2,'追踪工具',1,1379554258),(12,2,'AdID',1,1379554258),(13,2,'洗牌',1,1379554258),(14,2,'微软',1,1379554317),(15,2,'Windows8.1',1,1379554317),(16,2,'基本版售价',1,1379554317),(17,2,'三星',1,1379554397),(18,2,'智能手表',1,1379554397),(19,2,'二代产品',1,1379554397),(20,2,'App',1,1379554460),(21,2,'Annie',1,1379554460),(22,2,'美元投资',1,1379554460),(23,2,'国际业务',1,1379554460),(24,2,'美国',1,1379554552),(25,2,'禁止运营商',1,1379554552),(26,2,'锁定手机',1,1379554552),(27,2,'Facebook',1,1379554636),(28,2,'高管',1,1379554636),(29,2,'离职',1,1379554636),(30,2,'投奔',1,1379554636),(31,2,'阿里巴巴',1,1379554636),(32,2,'诺基亚',1,1379554696),(33,2,'宣布',1,1379554696),(34,2,'Lumia1520',1,1379554696);

/*Table structure for table `lnc_question` */

DROP TABLE IF EXISTS `lnc_question`;

CREATE TABLE `lnc_question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户',
  `scope` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '所属分类',
  `username` varchar(100) NOT NULL DEFAULT '' COMMENT '用户名',
  `realname` varchar(50) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `email` varchar(60) NOT NULL DEFAULT '' COMMENT '邮箱',
  `telephone` varchar(20) NOT NULL DEFAULT '' COMMENT '电话',
  `question` text NOT NULL COMMENT '内容',
  `contact_other` varchar(100) NOT NULL DEFAULT '' COMMENT '其它联系方式',
  `answer_status` enum('Y','N') NOT NULL DEFAULT 'N' COMMENT '回复状态',
  `answer_content` text COMMENT '回复内容',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发送时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='客服';

/*Data for the table `lnc_question` */

/*Table structure for table `lnc_special` */

DROP TABLE IF EXISTS `lnc_special`;

CREATE TABLE `lnc_special` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `title_alias` varchar(255) NOT NULL DEFAULT '' COMMENT '标题别名',
  `intro` text COMMENT '描述',
  `content` text COMMENT '详细介绍',
  `attach_thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '附件缩略图',
  `attach_file` varchar(255) NOT NULL DEFAULT '' COMMENT '附件名称',
  `seo_title` varchar(255) NOT NULL DEFAULT '' COMMENT 'seo标题',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '' COMMENT 'seo关键字',
  `seo_description` varchar(255) NOT NULL DEFAULT '' COMMENT 'seo描述',
  `template` varchar(50) NOT NULL DEFAULT '' COMMENT '模板',
  `status_is` enum('Y','N') NOT NULL DEFAULT 'Y' COMMENT '状态',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `view_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入库时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='专题';

/*Data for the table `lnc_special` */

insert  into `lnc_special`(`id`,`title`,`title_alias`,`intro`,`content`,`attach_thumb`,`attach_file`,`seo_title`,`seo_keywords`,`seo_description`,`template`,`status_is`,`sort_order`,`view_count`,`create_time`) values (1,'特斯拉将在三年内推出自动驾驶汽车','test1','美国特斯拉电动汽车公司（Tesla Motors）首席执行官艾伦•马斯克（Elon Musk）周二表示，该公司力争在未来三年里推出能够“自动驾驶”的汽车，从而正式加入到拥有谷歌(微博)和多家汽车厂商的无人驾驶汽车市场的争夺之中','<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	美国特斯拉电动汽车公司（Tesla Motors）首席执行官艾伦•马斯克（Elon Musk）周二表示，该公司力争在未来三年里推出能够“自动驾驶”的汽车，从而正式加入到拥有<a class=\"a-tips-Article-QQ\" href=\"http://stockhtm.finance.qq.com/astock/ggcx/GOOG.OQ.htm\" target=\"_blank\">谷歌</a>(<a href=\"http://t.qq.com/googlechina#pref=qqcom.keyword\" target=\"_blank\">微博</a>)和多家汽车厂商的无人驾驶汽车市场的争夺之中。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	马斯克在接受英国《金融时报》的采访时表示，特斯拉自动驾驶汽车将会让司机把90%的驾驶权转交给汽车的电脑系统，而全自动无人驾驶汽车则需要更长的研发时间。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	马斯克指出，特斯拉的自动驾驶汽车将由该公司采用自有技术进行内部研发，并不会外包给其他公司。这一点也得到了该公司一位新闻发言人的证实。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	特斯拉官网近日发布了一个招聘“高级驾驶员辅助系统控制工程师”的启示，负责帮助“特斯拉成为自动驾驶汽车市场的领导者”。\r\n</p>','uploads/201309/thumb_523a37e62e9a8.jpg','uploads/201309/523a37e62e9a8.jpg','','','','','Y',0,4,1379547110),(2,'美国餐厅如何利用桌面服务系统扩大销售额？','test2','','<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	随着移动科技的不断发展，人们生活的方方面面都感受到了新科技所带来的巨大影响，餐饮领域自然也不例外。无论是在餐馆的餐桌上放置平板电脑、还是推出可互动的点菜、买单应用都是餐饮企业为进一步促进消费者来店消费所想出的妙招。其中，美国知名餐厅运营商Brinker International.Inc旗下Chili\'s Grill &amp; Bar最近做出的动作便是移动化大潮来袭下的一个最好示范。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	<img src=\"/cms/uploads/201309/523a380d1d4c0.jpg\" alt=\"\" />\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	目前，该公司已经在旗下部分餐厅中测试由Ziosk研发的桌面服务系统，该系统可以使消费者在无需服务员出现的情况完成点菜、买单等操作，甚至还可以利用该系统玩游戏。对此，Chili\'s Grill &amp; Bar品牌战略高级副总裁表示，“由于消费者更倾向于在配备了这类桌面系统的餐厅花费更多金钱，因此这一科技可以帮助公司有效提高销售额。”\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	事实上，由于桌面服务系统会时不时的显示一些甜品的图片，Chili\'s Grill &amp; Bar餐厅的甜品销量已经迎来了大约20%的提升。因此我们不难想象，如果Chili\'s Grill &amp; Bar未来将这一图片展示的范围扩大到酒精类饮品和其他拥有更大利润率的菜品时能够取得怎样的效果。\r\n</p>\r\n<p style=\"font-size:16px;color:#333333;font-family:微软雅黑, Tahoma, Verdana, 宋体;background-color:#FFFFFF;text-indent:2em;\">\r\n	与此同时，桌面服务设备中自带的那些看似不起眼的小游戏也有望为餐厅带来额外收入。比如，Chili\'s Grill &amp; Bar会向每位需要使用游戏服务的消费者收取0.99美元的费用，其中Chili\'s Grill &amp; Bar将可以拿到50%的分成，而另一半则由Ziosk收取。考虑到Chili\'s Grill &amp; Bar目前仅仅是从Ziosk处以租赁的形式拿到这些设备的这一事实，这样的分成比例还算比较公平。\r\n</p>','uploads/201309/thumb_523a381039dc7.jpg','uploads/201309/523a381039dc7.jpg','','','','','Y',0,23,1379547152);

/*Table structure for table `lnc_upload` */

DROP TABLE IF EXISTS `lnc_upload`;

CREATE TABLE `lnc_upload` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户名',
  `scope` enum('content','image') NOT NULL DEFAULT 'content' COMMENT '范围',
  `folder` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '文件夹',
  `real_name` varchar(255) NOT NULL DEFAULT '' COMMENT '原始文件名称',
  `file_name` char(100) NOT NULL DEFAULT '' COMMENT '带路径文件名',
  `thumb_name` varbinary(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `save_path` varchar(100) NOT NULL DEFAULT '' COMMENT '保存路径',
  `save_name` varchar(100) NOT NULL DEFAULT '' COMMENT '保存文件名不带路径',
  `hash` char(32) NOT NULL DEFAULT '' COMMENT 'hash',
  `file_ext` char(5) NOT NULL DEFAULT 'jpg' COMMENT '扩展名称',
  `file_mime` varchar(50) NOT NULL DEFAULT '' COMMENT '文件头信息',
  `file_size` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小',
  `down_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '下载次数',
  `access` varchar(255) NOT NULL DEFAULT '' COMMENT '权限控制',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COMMENT='附件';

/*Data for the table `lnc_upload` */

insert  into `lnc_upload`(`id`,`user_id`,`scope`,`folder`,`real_name`,`file_name`,`thumb_name`,`save_path`,`save_name`,`hash`,`file_ext`,`file_mime`,`file_size`,`down_count`,`access`,`create_time`) values (1,0,'content',0,'1f178a82b9014a90244a438dab773912b31bee8e.jpg','uploads/201309/523a32fdf1f07.jpg','','uploads/201309/','523a32fdf1f07.jpg','d0dcf27f87ec506ee9000740455782b3','jpg','image/jpeg',399821,0,'',1379545854),(2,0,'content',0,'QQ截图20130919070700.jpg','uploads/201309/523a374c27077.jpg','','uploads/201309/','523a374c27077.jpg','377780c977f89e6ef9b571eb0cc28925','jpg','image/jpeg',45836,0,'',1379546956),(3,0,'content',0,'QQ截图20130919070700.jpg','uploads/201309/523a3780beb37.jpg','','uploads/201309/','523a3780beb37.jpg','3ee5075e0b22e43c779138733c84da76','jpg','image/jpeg',74073,0,'',1379547008),(4,0,'content',0,'QQ截图20130919070700.jpg','uploads/201309/523a380d1d4c0.jpg','','uploads/201309/','523a380d1d4c0.jpg','b5977602ec0d3f902ffec8520f88bbde','jpg','image/jpeg',40911,0,'',1379547149),(5,0,'content',0,'QQ截图20130919070700.jpg','uploads/201309/523a53bd105ee.jpg','','uploads/201309/','523a53bd105ee.jpg','eff9746a7d60f290070df3e30f493d98','jpg','image/jpeg',25761,0,'',1379554237),(6,0,'content',0,'情商.jpg','uploads/201603/1371155d727c41a02f55b8f107e14cc6.jpg','','uploads/201603/','1371155d727c41a02f55b8f107e14cc6.jpg','2d006911229ff4feab0c0a4fa9ecce7f','jpg','application/octet-stream',45052,0,'',1458525295),(7,0,'content',0,'人生.jpg','uploads/201603/2037960ef0e9921b10d1a0df9cfa7e32.jpg','','uploads/201603/','2037960ef0e9921b10d1a0df9cfa7e32.jpg','f8be5cf1aca235adc4d1a61a54881aee','jpg','application/octet-stream',92471,0,'',1458525295),(8,0,'content',0,'人生2.jpg','uploads/201603/c1ae8817de074961df06e0616e52300e.jpg','','uploads/201603/','c1ae8817de074961df06e0616e52300e.jpg','12ab110d128861d04ca65a891b8709cf','jpg','application/octet-stream',10878,0,'',1458525295),(9,0,'content',0,'产品5.png','uploads/201603/a84d8ba5753b7fcfedbc4131834253d0.png','','uploads/201603/','a84d8ba5753b7fcfedbc4131834253d0.png','e2c9aa9607afb8680b986f5ce3c86307','png','application/octet-stream',67728,0,'',1458525814),(10,0,'content',0,'产品8.jpg','uploads/201603/c67354a7e271a6e8d434807327780574.jpg','','uploads/201603/','c67354a7e271a6e8d434807327780574.jpg','498440974b23d6db78bc279b85ab8f73','jpg','application/octet-stream',111392,0,'',1458525832),(11,0,'content',0,'产品5.png','uploads/201603/468e82e59dd7ac254d7ed7cafb1eca31.png','','uploads/201603/','468e82e59dd7ac254d7ed7cafb1eca31.png','e2c9aa9607afb8680b986f5ce3c86307','png','application/octet-stream',67728,0,'',1458525853),(12,0,'content',0,'产品6.png','uploads/201603/a1892c2b099da27e3e30d19eac999ae7.png','','uploads/201603/','a1892c2b099da27e3e30d19eac999ae7.png','bea0e6fbd0fcea0aa8174d7c43a7ff4d','png','application/octet-stream',188888,0,'',1458525857),(13,0,'content',0,'产品8.jpg','uploads/201603/35b2832097ac3ae4b0a361764355a20b.jpg','','uploads/201603/','35b2832097ac3ae4b0a361764355a20b.jpg','498440974b23d6db78bc279b85ab8f73','jpg','application/octet-stream',111392,0,'',1458527505),(14,0,'content',0,'产品7.jpg','uploads/201603/6cc5fb7c251c71062912ce3ffe2d9a53.jpg','','uploads/201603/','6cc5fb7c251c71062912ce3ffe2d9a53.jpg','ba47527de83c445575a2891ab212d5fd','jpg','image/jpeg',126675,0,'',1458527628),(15,0,'content',0,'产品8.jpg','uploads/201603/b39171ab93f067d875bb45f676ed7d5d.jpg','','uploads/201603/','b39171ab93f067d875bb45f676ed7d5d.jpg','498440974b23d6db78bc279b85ab8f73','jpg','application/octet-stream',111392,0,'',1458527635),(16,0,'content',0,'产品11.png','uploads/201603/49684e167e405a15602ccd7894b630e8.png','','uploads/201603/','49684e167e405a15602ccd7894b630e8.png','c8aacd8edfe460ec2523e6cf1211edbe','png','application/octet-stream',138373,0,'',1458527635),(17,0,'content',0,'产品7.jpg','uploads/201603/99c7842aa149f57d4b0b709bfd1b8d89.jpg','','uploads/201603/','99c7842aa149f57d4b0b709bfd1b8d89.jpg','ba47527de83c445575a2891ab212d5fd','jpg','application/octet-stream',126675,0,'',1458528696),(18,0,'content',0,'产品5.png','uploads/201603/0523271c1cc8a9001ee6da8234965941.png','','uploads/201603/','0523271c1cc8a9001ee6da8234965941.png','e2c9aa9607afb8680b986f5ce3c86307','png','application/octet-stream',67728,0,'',1458528702),(19,0,'content',0,'产品11.png','uploads/201603/c9db2250e5d988243fdf580380ad4b39.png','','uploads/201603/','c9db2250e5d988243fdf580380ad4b39.png','c8aacd8edfe460ec2523e6cf1211edbe','png','image/png',138373,0,'',1458742470),(20,0,'content',0,'redis.jpg','uploads/201603/c3ad0d41cd3c4b78ecd9e2d7fe2b0784.jpg','','uploads/201603/','c3ad0d41cd3c4b78ecd9e2d7fe2b0784.jpg','4be0768437d886105d9299a76ca48829','jpg','application/octet-stream',10530,0,'',1458742485),(21,0,'content',0,'产品1.png','uploads/201603/7ac9434d7be0ca7ebe44327a20d55f6a.png','','uploads/201603/','7ac9434d7be0ca7ebe44327a20d55f6a.png','41342a551df74fd6f10e2cc9482007fb','png','application/octet-stream',119899,0,'',1458742485),(22,0,'content',0,'产品2.png','uploads/201603/bebc9b3fa2396e33ab9b49a42d968336.png','','uploads/201603/','bebc9b3fa2396e33ab9b49a42d968336.png','5b6665616cf45a1e328c35b582cd2635','png','application/octet-stream',175203,0,'',1458742485),(23,0,'content',0,'产品3.png','uploads/201603/971536418716143774dc732fd8d34e65.png','','uploads/201603/','971536418716143774dc732fd8d34e65.png','d712b9e7d0f8757a8427bd6eea958854','png','application/octet-stream',150614,0,'',1458742486),(24,0,'content',0,'产品4.png','uploads/201603/4f549861979cf4cfb611f4b9a7b0b02c.png','','uploads/201603/','4f549861979cf4cfb611f4b9a7b0b02c.png','978b0dd7467f98af03eadd907827f381','png','application/octet-stream',118468,0,'',1458742486),(25,0,'content',0,'产品6.png','uploads/201603/e3387633076e525276fb5ea5e7de5b0d.png','','uploads/201603/','e3387633076e525276fb5ea5e7de5b0d.png','bea0e6fbd0fcea0aa8174d7c43a7ff4d','png','application/octet-stream',188888,0,'',1458742486),(26,0,'content',0,'产品7.jpg','uploads/201603/4f549861979cf4cfb611f4b9a7b0b02c.jpg','','uploads/201603/','4f549861979cf4cfb611f4b9a7b0b02c.jpg','ba47527de83c445575a2891ab212d5fd','jpg','application/octet-stream',126675,0,'',1458742486),(27,0,'content',0,'产品8.jpg','uploads/201603/22bdc66240881340120c157a52de6eb1.jpg','','uploads/201603/','22bdc66240881340120c157a52de6eb1.jpg','498440974b23d6db78bc279b85ab8f73','jpg','application/octet-stream',111392,0,'',1458742486),(28,0,'content',0,'产品5.png','uploads/201603/f12d08ea4ddeb2d734117f89f6a15c9d.png','','uploads/201603/','f12d08ea4ddeb2d734117f89f6a15c9d.png','e2c9aa9607afb8680b986f5ce3c86307','png','application/octet-stream',67728,0,'',1458742496),(29,0,'content',0,'产品6.png','uploads/201603/9dba70b8ae56d383c79653f9aa699938.png','','uploads/201603/','9dba70b8ae56d383c79653f9aa699938.png','bea0e6fbd0fcea0aa8174d7c43a7ff4d','png','application/octet-stream',188888,0,'',1458742497),(30,0,'content',0,'产品7.jpg','uploads/201603/a63085529a1eaa03beabc64316d08612.jpg','','uploads/201603/','a63085529a1eaa03beabc64316d08612.jpg','ba47527de83c445575a2891ab212d5fd','jpg','application/octet-stream',126675,0,'',1458742497),(31,0,'content',0,'产品8.jpg','uploads/201603/a287ecf60c84ad96c92a58ce77fc6235.jpg','','uploads/201603/','a287ecf60c84ad96c92a58ce77fc6235.jpg','498440974b23d6db78bc279b85ab8f73','jpg','application/octet-stream',111392,0,'',1458742540),(32,0,'content',0,'互联网思维.jpg','uploads/201603/b4f6a1eb452f2a7eba27992e06e8ae1c.jpg','','uploads/201603/','b4f6a1eb452f2a7eba27992e06e8ae1c.jpg','e7468cc737eb652d64ef500b6719a420','jpg','application/octet-stream',25640,0,'',1458742541),(33,0,'content',0,'张泉灵.jpg','uploads/201603/0d6182b7ffe210d46a8c787387f8b24e.jpg','','uploads/201603/','0d6182b7ffe210d46a8c787387f8b24e.jpg','b019185b9865d689e5b74129830a5967','jpg','application/octet-stream',109835,0,'',1458742552),(34,0,'content',0,'7.jpg','uploads/201603/08910156a2c47dba4f53a97a2d893735.jpg','','uploads/201603/','08910156a2c47dba4f53a97a2d893735.jpg','5169d1d0eff60b6649d34711cdc73abf','jpg','application/octet-stream',135325,0,'',1459344536),(35,0,'content',0,'8.jpg','uploads/201603/c3821a52062309cd5d3b4f4d5f819225.jpg','','uploads/201603/','c3821a52062309cd5d3b4f4d5f819225.jpg','5ff084140f33e46d2aa12c9875c35f47','jpg','application/octet-stream',67248,0,'',1459344536),(36,0,'content',0,'11.jpg','uploads/201603/f953a622a582ee971b60736b498d9e14.jpg','','uploads/201603/','f953a622a582ee971b60736b498d9e14.jpg','a7a0e6ab4e7cc70f76ad6f6ec3f7c3fe','jpg','application/octet-stream',127549,0,'',1459344537),(37,0,'content',0,'12.jpg','uploads/201603/b25a63f2847c887b9857fed1725ceb27.jpg','','uploads/201603/','b25a63f2847c887b9857fed1725ceb27.jpg','390a29971af72e94a1a5845c04b51c0f','jpg','application/octet-stream',179876,0,'',1459344537),(38,0,'content',0,'14.jpg','uploads/201603/1ad8444ced290e2bb22afe942a2d1d6e.jpg','','uploads/201603/','1ad8444ced290e2bb22afe942a2d1d6e.jpg','04569bdb3f364f621242e38bf4423be5','jpg','application/octet-stream',189892,0,'',1459344537),(39,0,'content',0,'15.jpg','uploads/201603/6867808aed8ec09938144c4b826d6918.jpg','','uploads/201603/','6867808aed8ec09938144c4b826d6918.jpg','dc184e7bd6373dceb1f7d4725bca2d9c','jpg','application/octet-stream',145939,0,'',1459344537),(40,0,'content',0,'20.jpg','uploads/201603/a5f8385ed5f721f2c872a5743cf3e8bb.jpg','','uploads/201603/','a5f8385ed5f721f2c872a5743cf3e8bb.jpg','4496a7af8016ca6f8ab8126e2cb947bc','jpg','application/octet-stream',118464,0,'',1459344537),(41,0,'content',0,'hd_05.jpg','uploads/201603/5e7391fa3def4c73ea2dca8cb2dfc2bd.jpg','','uploads/201603/','5e7391fa3def4c73ea2dca8cb2dfc2bd.jpg','b8212bb2ecac94a19396696b83651cc1','jpg','application/octet-stream',109372,0,'',1459344594),(42,0,'content',0,'hd_08.jpg','uploads/201603/89943994e083ea499750fcad175a444d.jpg','','uploads/201603/','89943994e083ea499750fcad175a444d.jpg','f4c37d301a5e7edeaaaca037355a9f35','jpg','application/octet-stream',202319,0,'',1459344594),(43,0,'content',0,'hd_11.jpg','uploads/201603/7243b8b2e31e6c1ab38c0118fa6914c4.jpg','','uploads/201603/','7243b8b2e31e6c1ab38c0118fa6914c4.jpg','d5725610ee1d607eda66f785effb4480','jpg','application/octet-stream',138865,0,'',1459344595),(44,0,'content',0,'3.jpg','uploads/201603/1257d605fdf6a85a750f224c92355e1d.jpg','','uploads/201603/','1257d605fdf6a85a750f224c92355e1d.jpg','ecb87db6101c5651d61414f94a50d719','jpg','application/octet-stream',91357,0,'',1459344628),(45,0,'content',0,'5.jpg','uploads/201603/ca51951a879d9074f426e7be7c601b8e.jpg','','uploads/201603/','ca51951a879d9074f426e7be7c601b8e.jpg','67ccb8e948711c1d6c61c953a0f70b54','jpg','application/octet-stream',170730,0,'',1459344629),(46,0,'content',0,'6.jpg','uploads/201603/6babd9b978a8a3c6446011ae2ea7d141.jpg','','uploads/201603/','6babd9b978a8a3c6446011ae2ea7d141.jpg','3e75e6e945006eb91d30519e0a1201e5','jpg','application/octet-stream',148368,0,'',1459344629),(47,0,'content',0,'7.jpg','uploads/201603/66b0251576cc521021360cb89a6df30a.jpg','','uploads/201603/','66b0251576cc521021360cb89a6df30a.jpg','5169d1d0eff60b6649d34711cdc73abf','jpg','application/octet-stream',135325,0,'',1459344629),(48,0,'content',0,'8.jpg','uploads/201603/1c4d4d9c4b86a447540b17758da61ea6.jpg','','uploads/201603/','1c4d4d9c4b86a447540b17758da61ea6.jpg','5ff084140f33e46d2aa12c9875c35f47','jpg','application/octet-stream',67248,0,'',1459344629),(49,0,'content',0,'12.jpg','uploads/201603/c591f628b167c7f5fe694209e465df94.jpg','','uploads/201603/','c591f628b167c7f5fe694209e465df94.jpg','390a29971af72e94a1a5845c04b51c0f','jpg','application/octet-stream',179876,0,'',1459344630),(50,0,'content',0,'14.jpg','uploads/201603/fe2f73cb40e789f4ce9f2985e0506198.jpg','','uploads/201603/','fe2f73cb40e789f4ce9f2985e0506198.jpg','04569bdb3f364f621242e38bf4423be5','jpg','application/octet-stream',189892,0,'',1459344630),(51,0,'content',0,'5.jpg','uploads/201603/014bcc41eadaa3700c9fb28a8067f0f5.jpg','','uploads/201603/','014bcc41eadaa3700c9fb28a8067f0f5.jpg','e24302c9cdb81f310ca529b468d02c49','jpg','application/octet-stream',166550,0,'',1459344700),(52,0,'content',0,'3.jpg','uploads/201603/0805dcdbf1ba8d6af9272e010f01658f.jpg','','uploads/201603/','0805dcdbf1ba8d6af9272e010f01658f.jpg','b042dcc2cde856c6c9f97575f5210b90','jpg','image/jpeg',119629,0,'',1459344714),(53,0,'content',0,'3.jpg','uploads/201603/0c6fef5a0d61d21aa9d040a8b90b4c6a.jpg','','uploads/201603/','0c6fef5a0d61d21aa9d040a8b90b4c6a.jpg','b042dcc2cde856c6c9f97575f5210b90','jpg','application/octet-stream',119629,0,'',1459350153),(54,0,'content',0,'4.jpg','uploads/201603/95afe0017a25a5b9feef027ba49547fe.jpg','','uploads/201603/','95afe0017a25a5b9feef027ba49547fe.jpg','8629aa9393704c473af7bf3cacd55b4a','jpg','application/octet-stream',169553,0,'',1459350153),(55,0,'content',0,'9.jpg','uploads/201603/4150c067d381359bee7f1575ccdec435.jpg','','uploads/201603/','4150c067d381359bee7f1575ccdec435.jpg','c86f88594a12bf0c49c67e6a1c818c9c','jpg','application/octet-stream',77815,0,'',1459350153),(56,0,'content',0,'11.jpg','uploads/201603/1fb6e0662fb96fa2e512a35e0643d68a.jpg','','uploads/201603/','1fb6e0662fb96fa2e512a35e0643d68a.jpg','7c23b2e3fc9f0424da828dae53b4532d','jpg','application/octet-stream',406742,0,'',1459350154),(57,0,'content',0,'12.jpg','uploads/201603/db9ff06bfbc5f86dd25b4cdf6c754088.jpg','','uploads/201603/','db9ff06bfbc5f86dd25b4cdf6c754088.jpg','afdbb9ec64254e98e257bd73a1d751cd','jpg','application/octet-stream',80086,0,'',1459350154),(58,0,'content',0,'14.jpg','uploads/201603/8b2e45e00249f8c48ed469a292da8df9.jpg','','uploads/201603/','8b2e45e00249f8c48ed469a292da8df9.jpg','a000cf5d0c7c90c9904f752a26a4c531','jpg','application/octet-stream',49923,0,'',1459350154),(59,0,'content',0,'15.jpg','uploads/201603/f0b6fff3a9996173021d0e8019b6e7e0.jpg','','uploads/201603/','f0b6fff3a9996173021d0e8019b6e7e0.jpg','54dc132a41d595eb870a5199fef1eca3','jpg','application/octet-stream',93247,0,'',1459350154);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
