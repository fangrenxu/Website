/*
 Navicat Premium Data Transfer

 Source Server         : 本地127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 80024
 Source Host           : localhost:3306
 Source Schema         : php

 Target Server Type    : MySQL
 Target Server Version : 80024
 File Encoding         : 65001

 Date: 19/05/2021 22:29:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `cate_id` int NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '栏目名称',
  `alias` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '栏目别名',
  PRIMARY KEY (`cate_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'gc', '国产好剧');
INSERT INTO `category` VALUES (2, 'om', '欧美猛片');
INSERT INTO `category` VALUES (3, 'rh', '日韩新片');

-- ----------------------------
-- Table structure for movies
-- ----------------------------
DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies`  (
  `mov_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '影视剧名',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `cate_id` int UNSIGNED NOT NULL COMMENT '所属栏目',
  PRIMARY KEY (`mov_id`) USING BTREE,
  INDEX `INDEX`(`cate_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of movies
-- ----------------------------
INSERT INTO `movies` VALUES (1, '倚天屠龙记', 'p2539428717.jpg', '元朝末年，群雄纷起，武林动荡。江湖传闻，得到屠龙刀倚天剑者，可以成为武林至尊，号令天下，莫敢不从。一时间风云四起，引发了武林中对屠龙刀倚天剑的争夺，几段姻缘和孽缘也由此产生。武当派张翠山与天鹰教殷素素因屠龙刀相遇相恋，最后亦因屠龙刀被正派人士所逼迫，双双自尽。他们的儿子张无忌长大成人后，机缘巧合下练成了绝世武功“九阳神功”和“乾坤大挪移”，成为了明教教主。张无忌与元朝郡主赵敏、峨嵋派周芷若、表妹殷离和婢女小昭都有着千丝万缕的爱意。然而，看似柔弱的周芷若，却是个十足的“腹黑女”，她为了获取倚天剑屠龙刀的秘密，不惜杀害殷离，陷害赵敏。张无忌虽看清了周芷若真实面目，但仍割舍不下她。其后，张无忌化解了武林种种恩怨，辞去教主之位，与赵敏寄迹蒙古。', 1);
INSERT INTO `movies` VALUES (2, '都挺好', 'p2549148229.jpg', '表面上无限风光的苏家，随着苏母的突然离世，瞬间分崩离析。意想不到的隐患层层显露，对毫无主见却又自私、小气的苏父的安置和后续生活问题，打破了远在国外的大哥与本城的二哥 、小妹三家的平静生活。父亲苏大强终于摆脱了妻子的铁腕，对几个孩子变本加厉，不断提出过分要求。在美国工作的老大苏明哲回到国内，一心要挑起家庭重担，却力不能及不堪重负，致使妻子孩子与其不断疏远。一直啃老的老二苏明成毫无悔改之心，贪慕虚荣一心发财，从而导致事业和家庭的双重惨败。最不受父母待见，十八岁起就和家里断绝经济往来的老小苏明玉，曾发誓与这个家庭划清界限，却因亲情牵绊，再次搅进了苏家的泥潭之中，在苏家的一次次危机中出手相助。最终，苏家人明白到，虽然有血脉相连，但是一家人彼此间的沟通也不能忽视，终于实现了亲情的回归。', 1);
INSERT INTO `movies` VALUES (3, '如果可以这样爱', 'p2299709543.jpg', '白考儿是一名电台主播，她曾经有过一段婚姻，但是丈夫不幸去世了。白考儿很久都没能够从丧夫之痛里走出来，直到有一天她邂逅了名叫耿墨池的钢琴家。起初，性格大相径庭的两人之间常常产生矛盾，但随着时间的推移，两人由恨转爱，渐渐产生了真挚的感情。这段来之不易的感情遭到了白考儿亡夫的哥哥祁树礼的强烈反对，为了破坏两人之间的关系，祁树礼想出了许多的损招。最终，白考儿和耿墨池在纷纷扰扰之中坚定了选择彼此的信念，可就在这个节骨眼上，耿墨池却被查出患有先天性心脏病，一对苦命鸳鸯这一次要面对的，有可能生离死别。', 1);
INSERT INTO `movies` VALUES (4, '复仇者联盟4', 'p2552058346.jpg', '一声响指，宇宙间半数生命灰飞烟灭。几近绝望的复仇者们在惊奇队长的帮助下找到灭霸归隐之处，却得知六颗无限宝石均被销毁，希望彻底破灭。如是过了五年，迷失在量子领域的蚁人意外回到现实世界，他的出现为幸存的复仇者们点燃了希望。与美国队长冰释前嫌的托尼找到了穿越时空的方法，星散各地的超级英雄再度集结，他们分别穿越不同的时代去搜集无限宝石。而在这一过程中，平行宇宙的灭霸察觉了他们的计划。', 2);
INSERT INTO `movies` VALUES (5, '波西米亚狂想曲', 'p2549558913.jpg', '弗雷迪·莫库里曾是希思罗机场的一名普通搬运工，对音乐满腔热血的他，与布莱恩·梅、罗杰·泰勒、约 翰·迪肯组成皇后乐队。这个殿堂级乐队的从无到有，从疏离到重聚，从低谷到巅峰，仿佛就是弗雷迪一生的缩影。在最后的日子里，弗雷迪做了生命中最重要的决定——在音乐史上最伟大的“拯救生命”大型摇滚乐演唱会上，将所有热血付诸于歌声。', 2);
INSERT INTO `movies` VALUES (6, '阿丽塔：战斗天使', 'p2544987866.jpg', '故事发生在遥远的26世纪，外科医生依德在垃圾场里捡到了只剩下头部的机械少女将她带回家中，给她装上了本来为自己已故的女儿所准备的义体，并取名阿丽塔。苏醒后的阿丽塔对这个五彩斑斓但却暴力而又残酷的世界产生了浓厚的兴趣，在结识了青年雨果后，阿丽塔开始接触名为机动球的运动，并在比赛中展现出了惊人的格斗天赋。', 2);
INSERT INTO `movies` VALUES (7, '情书', 'p2643002879.jpg', '日本神户某个飘雪的冬日，渡边博子在前未婚夫藤井树的三周年祭日上又一次悲痛到不能自已。正因为无法抑制住对已逝恋人的思念，渡边博子在其中学同学录里发现“藤井树” 在小樽市读书时的地址时，依循着寄发了一封本以为是发往天国的情书。', 3);
INSERT INTO `movies` VALUES (8, '天空之城', 'p1446261379.jpg', '古老帝国拉比达是一座漂浮在空中的巨大的机器岛，传说那里已经无人居住，蕴藏着巨大的财富。因此，无论军方还是海盗，都在找寻着这座传说中的飞行岛。矿工帕克这天偶遇拉比达继承人希达，两人一见如故。因为希达身上有找寻拉比达帝国的重要物件飞行石，军方和海盗两帮人马都在追杀希达。帕克带着希达一起逃亡，最终都没有逃出军方的手中，希达被军队掳走了。为救朋友，帕克只能选择与海盗合作。帕克与海盗成功救出了希达，同时，他们也发现了军方的邪恶计划。为了阻止军方邪恶计划的实施，他们和海盗一起踏上了寻找拉比达之旅。', 3);
INSERT INTO `movies` VALUES (9, '龙猫', 'p2540924496.jpg', '小月的母亲生病住院了，父亲带着她与四岁的妹妹小梅到乡间的居住。她们对那里的环境都感到十分新奇，也发现了很多有趣的事情。她们遇到了很多小精灵，她们来到属于她们的环境中，看到了她们世界中很多的奇怪事物，更与一只大大胖胖的龙猫成为了朋友。龙猫与小精灵们利用他们的神奇力量，为小月与妹妹带来了很多神奇的景观，令她们大开眼界。', 3);

-- ----------------------------
-- Table structure for system
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system`  (
  `sys_id` int NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '页面标题',
  `desc` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '页面描述',
  `key` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '关键字',
  `copy` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '版权',
  PRIMARY KEY (`sys_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO `system` VALUES (1, '私人影院', '收集全网最新最全的影视资源', '国产,欧美,日韩', 'php中文网');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT '用户名',
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT '邮箱账号',
  `password` char(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'admin@php.cn', '7c4a8d09ca3762af61e59520943dc26494f8941b');
INSERT INTO `user` VALUES (2, 'peter', 'peter@php.cn', '7c4a8d09ca3762af61e59520943dc26494f8941b');

SET FOREIGN_KEY_CHECKS = 1;
