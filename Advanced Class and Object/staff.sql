-- Adminer 4.7.1 MySQL dumper

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
                        `staff_id` int(3) NOT NULL AUTO_INCREMENT COMMENT '主键',
                        `name` varchar(30) NOT NULL COMMENT '姓名',
                        `age` tinyint(3) unsigned NOT NULL DEFAULT '25' COMMENT '年龄',
                        `sex` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1:男0:女',
                        `position` varchar(20) NOT NULL COMMENT '职位',
                        `mobile` char(11) NOT NULL COMMENT '手机号',
                        `hiredate` int(10) unsigned NOT NULL COMMENT '入职时间',
                        PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `staff` (`staff_id`,`name`,`age`,`sex`,`position`,`mobile`,`hiredate`) VALUES
(1,'侯良平',   42,1,   '反贪局长', '13576543210',  851356800),
(2,'祁同伟',   46,1,   '公安厅长', '13023456110',  1420041600),
(3,'高育良',   57,1,   '政法书记', '15678789933',  981734400),
(4,'李达康',   51,1,   '市委书记', '13088856110',  1336838400),
(5,'沙瑞金',   56,1,   '省委书记', '18956490987',  1179158400),
(6,'赵东来',   41,1,   '公安局长', '15999999999',  1375891200),
(7,'高小琴',   36,0,   '山水庄园', '18967678877',  1452528000),
(8,'陈清泉',   48,1,   '外语学霸', '1302348766',   1320940800),
(9,'钟小艾',   38,0,   '反贪总局', '1357658833',   1318348800),
(10,'陆亦可',  35,0,   '调查处长', '13099996110',  1218297600);
