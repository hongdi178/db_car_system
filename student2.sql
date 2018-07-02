/*
Navicat MySQL Data Transfer

Source Server         : student2
Source Server Version : 50549
Source Host           : 101.200.125.126:3306
Source Database       : student2

Target Server Type    : MYSQL
Target Server Version : 50549
File Encoding         : 65001

Date: 2018-07-02 18:16:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_admin
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(20) DEFAULT NULL COMMENT '登陆账号名',
  `password` varchar(20) DEFAULT NULL COMMENT '密码',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  `delete_time` datetime DEFAULT NULL COMMENT '删除时间',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态 0表示被删除',
  `role_id` int(11) DEFAULT NULL COMMENT '外键 角色id',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `t_admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `t_role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of t_admin
-- ----------------------------
INSERT INTO `t_admin` VALUES ('1', 'hongdi', '777', null, null, null, null, '28');
INSERT INTO `t_admin` VALUES ('11', 'jiujie', '888', null, null, null, null, '24');
INSERT INTO `t_admin` VALUES ('17', '555', '555', '2018-06-26 17:22:46', '2018-06-27 08:58:17', null, null, '24');

-- ----------------------------
-- Table structure for t_log
-- ----------------------------
DROP TABLE IF EXISTS `t_log`;
CREATE TABLE `t_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '管理员名字',
  `log` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '内容',
  `create_time` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=utf8 COMMENT='操作日志';

-- ----------------------------
-- Records of t_log
-- ----------------------------
INSERT INTO `t_log` VALUES ('1', 'hongdi', '修改了：小min 的管理员', '2018-06-02 14:06:12');
INSERT INTO `t_log` VALUES ('2', 'hongdi', '修改了：小虎 的管理员', '2018-06-02 14:11:28');
INSERT INTO `t_log` VALUES ('3', 'hongdi', '修改了：五五开 的管理员', '2018-06-02 14:11:48');
INSERT INTO `t_log` VALUES ('4', 'hongdi', '删除了：11 管理员', '2018-06-02 14:14:14');
INSERT INTO `t_log` VALUES ('5', 'hongdi', '更新了id：jieke544 管理员', '2018-06-02 14:22:21');
INSERT INTO `t_log` VALUES ('6', 'hongdi', '增加了：8484 的管理员', '2018-06-02 14:23:43');
INSERT INTO `t_log` VALUES ('7', 'hongdi', '增加了：888 类型的油', '2018-06-02 14:27:03');
INSERT INTO `t_log` VALUES ('8', 'hongdi', '删除了：18 油', '2018-06-02 14:38:14');
INSERT INTO `t_log` VALUES ('9', 'hongdi', '更新了：4苯 油', '2018-06-02 14:38:35');
INSERT INTO `t_log` VALUES ('10', 'hongdi', '删除了排第：3 队列', '2018-06-02 14:45:58');
INSERT INTO `t_log` VALUES ('11', 'hongdi', '删除了排第：2 队列', '2018-06-02 14:46:25');
INSERT INTO `t_log` VALUES ('12', 'hongdi', '更新了角色： 队列', '2018-06-02 15:03:34');
INSERT INTO `t_log` VALUES ('13', 'hongdi', '更新了角色： 队列', '2018-06-02 15:04:22');
INSERT INTO `t_log` VALUES ('14', 'hongdi', '更新了id:10 角色 ', '2018-06-02 15:06:00');
INSERT INTO `t_log` VALUES ('15', 'hongdi', '删除了角色，id为：11', '2018-06-02 15:22:17');
INSERT INTO `t_log` VALUES ('16', 'hongdi', '更新了id:10 角色 ', '2018-06-02 15:22:53');
INSERT INTO `t_log` VALUES ('17', 'hongdi', '更新了公告:周末休息', '2018-06-02 15:24:22');
INSERT INTO `t_log` VALUES ('18', 'hongdi', '暂停了 队列', '2018-06-11 09:39:35');
INSERT INTO `t_log` VALUES ('19', 'hongdi', '取消暂停了 队列', '2018-06-11 09:39:42');
INSERT INTO `t_log` VALUES ('20', 'hongdi', '完成了： 队列', '2018-06-11 09:39:54');
INSERT INTO `t_log` VALUES ('21', 'hongdi', '完成了： 队列', '2018-06-11 09:40:01');
INSERT INTO `t_log` VALUES ('22', 'hongdi', '暂停了 队列', '2018-06-11 09:40:13');
INSERT INTO `t_log` VALUES ('23', 'hongdi', '取消暂停了 队列', '2018-06-11 09:47:06');
INSERT INTO `t_log` VALUES ('24', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:05:56');
INSERT INTO `t_log` VALUES ('25', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:07:50');
INSERT INTO `t_log` VALUES ('26', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:09:34');
INSERT INTO `t_log` VALUES ('27', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:14:21');
INSERT INTO `t_log` VALUES ('28', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:26:02');
INSERT INTO `t_log` VALUES ('29', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:33:01');
INSERT INTO `t_log` VALUES ('30', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:34:57');
INSERT INTO `t_log` VALUES ('31', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:35:48');
INSERT INTO `t_log` VALUES ('32', 'hongdi', '更新了：hongdi 管理员', '2018-06-11 10:39:32');
INSERT INTO `t_log` VALUES ('33', 'hongdi', '更新了：999 管理员', '2018-06-11 10:47:19');
INSERT INTO `t_log` VALUES ('34', 'hongdi', '暂停了 队列', '2018-06-11 11:03:38');
INSERT INTO `t_log` VALUES ('35', 'hongdi', '取消暂停了 队列', '2018-06-11 11:03:44');
INSERT INTO `t_log` VALUES ('36', 'hongdi', '完成了： 队列', '2018-06-11 11:07:34');
INSERT INTO `t_log` VALUES ('37', 'hongdi', '完成了： 队列', '2018-06-11 11:07:39');
INSERT INTO `t_log` VALUES ('38', 'hongdi', '暂停了 队列', '2018-06-11 11:07:45');
INSERT INTO `t_log` VALUES ('39', 'hongdi', '取消暂停了 队列', '2018-06-11 11:08:00');
INSERT INTO `t_log` VALUES ('40', 'hongdi', '完成了： 队列', '2018-06-11 11:08:30');
INSERT INTO `t_log` VALUES ('41', 'hongdi', '完成了： 队列', '2018-06-11 11:08:36');
INSERT INTO `t_log` VALUES ('42', 'hongdi', '暂停了 队列', '2018-06-11 11:09:25');
INSERT INTO `t_log` VALUES ('43', 'hongdi', '取消暂停了 队列', '2018-06-11 11:12:00');
INSERT INTO `t_log` VALUES ('44', 'hongdi', '暂停了 队列', '2018-06-11 11:12:26');
INSERT INTO `t_log` VALUES ('45', 'hongdi', '取消暂停了 队列', '2018-06-11 11:12:33');
INSERT INTO `t_log` VALUES ('46', 'hongdi', '完成了： 队列', '2018-06-11 11:15:11');
INSERT INTO `t_log` VALUES ('47', 'hongdi', '完成了： 队列', '2018-06-11 11:15:15');
INSERT INTO `t_log` VALUES ('48', 'hongdi', '暂停了 队列', '2018-06-11 11:15:20');
INSERT INTO `t_log` VALUES ('49', 'hongdi', '完成了： 队列', '2018-06-11 11:15:57');
INSERT INTO `t_log` VALUES ('50', 'hongdi', '完成了： 队列', '2018-06-11 11:18:45');
INSERT INTO `t_log` VALUES ('51', 'hongdi', '完成了： 队列', '2018-06-11 11:22:00');
INSERT INTO `t_log` VALUES ('52', 'hongdi', '暂停了 队列', '2018-06-11 11:24:10');
INSERT INTO `t_log` VALUES ('53', 'hongdi', '暂停了 队列', '2018-06-11 11:24:16');
INSERT INTO `t_log` VALUES ('54', 'hongdi', '暂停了 队列', '2018-06-11 11:25:26');
INSERT INTO `t_log` VALUES ('55', 'hongdi', '暂停了 队列', '2018-06-11 11:26:27');
INSERT INTO `t_log` VALUES ('56', 'hongdi', '取消暂停了 队列', '2018-06-11 11:26:32');
INSERT INTO `t_log` VALUES ('57', 'hongdi', '完成了： 队列', '2018-06-11 11:26:36');
INSERT INTO `t_log` VALUES ('58', 'hongdi', '暂停了 队列', '2018-06-11 11:26:41');
INSERT INTO `t_log` VALUES ('59', 'hongdi', '暂停了 队列', '2018-06-11 11:29:26');
INSERT INTO `t_log` VALUES ('60', 'hongdi', '取消暂停了 队列', '2018-06-11 11:29:30');
INSERT INTO `t_log` VALUES ('61', 'hongdi', '完成了： 队列', '2018-06-11 11:29:34');
INSERT INTO `t_log` VALUES ('62', 'hongdi', '取消暂停了 队列', '2018-06-11 11:30:08');
INSERT INTO `t_log` VALUES ('63', 'hongdi', '取消暂停了 队列', '2018-06-11 11:30:33');
INSERT INTO `t_log` VALUES ('64', 'hongdi', '暂停了 队列', '2018-06-11 11:31:54');
INSERT INTO `t_log` VALUES ('65', 'hongdi', '取消暂停了 队列', '2018-06-11 11:32:00');
INSERT INTO `t_log` VALUES ('66', 'hongdi', '取消暂停了 队列', '2018-06-11 11:34:18');
INSERT INTO `t_log` VALUES ('67', 'hongdi', '暂停了 队列', '2018-06-11 11:34:34');
INSERT INTO `t_log` VALUES ('68', 'hongdi', '暂停了 队列', '2018-06-11 11:34:38');
INSERT INTO `t_log` VALUES ('69', 'hongdi', '暂停了 队列', '2018-06-11 11:35:41');
INSERT INTO `t_log` VALUES ('70', 'hongdi', '暂停了 队列', '2018-06-11 11:36:38');
INSERT INTO `t_log` VALUES ('71', 'hongdi', '取消暂停了 队列', '2018-06-11 11:36:46');
INSERT INTO `t_log` VALUES ('72', 'hongdi', '暂停了 队列', '2018-06-11 11:36:52');
INSERT INTO `t_log` VALUES ('73', 'hongdi', '取消暂停了 队列', '2018-06-11 11:36:56');
INSERT INTO `t_log` VALUES ('74', 'hongdi', '完成了： 队列', '2018-06-11 11:37:00');
INSERT INTO `t_log` VALUES ('75', 'hongdi', '暂停了 队列', '2018-06-11 11:37:07');
INSERT INTO `t_log` VALUES ('76', 'hongdi', '暂停了 队列', '2018-06-11 11:43:04');
INSERT INTO `t_log` VALUES ('77', 'hongdi', '取消暂停了 队列', '2018-06-11 11:43:09');
INSERT INTO `t_log` VALUES ('78', 'hongdi', '取消暂停了 队列', '2018-06-11 11:43:25');
INSERT INTO `t_log` VALUES ('79', 'hongdi', '暂停了 队列', '2018-06-11 11:43:55');
INSERT INTO `t_log` VALUES ('80', 'hongdi', '取消暂停了 队列', '2018-06-11 11:43:59');
INSERT INTO `t_log` VALUES ('81', 'hongdi', '暂停了 队列', '2018-06-11 11:45:46');
INSERT INTO `t_log` VALUES ('82', 'hongdi', '暂停了 队列', '2018-06-11 11:45:51');
INSERT INTO `t_log` VALUES ('83', 'hongdi', '暂停了 队列', '2018-06-11 11:49:38');
INSERT INTO `t_log` VALUES ('84', 'hongdi', '暂停了 队列', '2018-06-11 11:50:19');
INSERT INTO `t_log` VALUES ('85', 'hongdi', '暂停了 队列', '2018-06-11 11:51:21');
INSERT INTO `t_log` VALUES ('86', 'hongdi', '取消暂停了 队列', '2018-06-11 11:51:26');
INSERT INTO `t_log` VALUES ('87', 'hongdi', '暂停了 队列', '2018-06-11 11:51:38');
INSERT INTO `t_log` VALUES ('88', 'hongdi', '取消暂停了 队列', '2018-06-11 11:52:09');
INSERT INTO `t_log` VALUES ('89', 'hongdi', '完成了： 队列', '2018-06-11 11:52:14');
INSERT INTO `t_log` VALUES ('90', 'hongdi', '暂停了 队列', '2018-06-11 11:52:19');
INSERT INTO `t_log` VALUES ('91', 'hongdi', '暂停了 队列', '2018-06-11 11:52:52');
INSERT INTO `t_log` VALUES ('92', 'hongdi', '取消暂停了 队列', '2018-06-11 11:54:27');
INSERT INTO `t_log` VALUES ('93', 'hongdi', '完成了： 队列', '2018-06-11 11:54:46');
INSERT INTO `t_log` VALUES ('94', 'hongdi', '暂停了 队列', '2018-06-11 11:54:51');
INSERT INTO `t_log` VALUES ('95', 'hongdi', '取消暂停了 队列', '2018-06-11 11:54:56');
INSERT INTO `t_log` VALUES ('96', 'hongdi', '完成了： 队列', '2018-06-11 11:55:20');
INSERT INTO `t_log` VALUES ('97', 'hongdi', '暂停了 队列', '2018-06-11 11:55:28');
INSERT INTO `t_log` VALUES ('98', 'hongdi', '取消暂停了 队列', '2018-06-11 11:55:33');
INSERT INTO `t_log` VALUES ('99', 'hongdi', '取消暂停了 队列', '2018-06-11 19:53:09');
INSERT INTO `t_log` VALUES ('100', 'hongdi', '取消暂停了 队列', '2018-06-11 19:53:15');
INSERT INTO `t_log` VALUES ('101', 'hongdi', '暂停了 队列', '2018-06-11 19:53:52');
INSERT INTO `t_log` VALUES ('102', 'hongdi', '取消暂停了 队列', '2018-06-11 19:53:57');
INSERT INTO `t_log` VALUES ('103', 'hongdi', '修改了：红底 的管理员', '2018-06-11 20:01:34');
INSERT INTO `t_log` VALUES ('104', 'hongdi', '删除了id：12 管理员', '2018-06-11 20:04:02');
INSERT INTO `t_log` VALUES ('105', 'hongdi', '更新了：jieke544 管理员', '2018-06-11 20:04:17');
INSERT INTO `t_log` VALUES ('106', 'hongdi', '删除了：16 油', '2018-06-11 20:21:20');
INSERT INTO `t_log` VALUES ('107', 'hongdi', '更新了：二甲苯 油', '2018-06-11 20:21:35');
INSERT INTO `t_log` VALUES ('108', 'hongdi', '增加了：化工类3 类型的油', '2018-06-11 20:22:05');
INSERT INTO `t_log` VALUES ('109', 'hongdi', '增加了：丁烯 油', '2018-06-11 20:22:32');
INSERT INTO `t_log` VALUES ('110', 'hongdi', '暂停了 队列', '2018-06-11 20:24:43');
INSERT INTO `t_log` VALUES ('111', 'hongdi', '取消暂停了 队列', '2018-06-11 20:24:49');
INSERT INTO `t_log` VALUES ('112', 'hongdi', '删除了角色，id为：10', '2018-06-11 20:25:47');
INSERT INTO `t_log` VALUES ('113', 'hongdi', '更新了id:9 角色 ', '2018-06-11 20:25:56');
INSERT INTO `t_log` VALUES ('114', 'hongdi', '更新了公告:国庆放假', '2018-06-11 20:26:42');
INSERT INTO `t_log` VALUES ('115', 'hongdi', '取消暂停了 队列', '2018-06-11 20:27:21');
INSERT INTO `t_log` VALUES ('116', 'hongdi', '暂停了 队列', '2018-06-11 20:30:47');
INSERT INTO `t_log` VALUES ('117', 'hongdi', '取消暂停了 队列', '2018-06-11 20:32:49');
INSERT INTO `t_log` VALUES ('118', 'hongdi', '取消暂停了 队列', '2018-06-11 20:33:25');
INSERT INTO `t_log` VALUES ('119', 'hongdi', '取消暂停了 队列', '2018-06-11 20:33:36');
INSERT INTO `t_log` VALUES ('120', 'hongdi', '取消暂停了 队列', '2018-06-11 20:35:19');
INSERT INTO `t_log` VALUES ('121', 'hongdi', '取消暂停了 队列', '2018-06-11 20:35:24');
INSERT INTO `t_log` VALUES ('122', 'hongdi', '暂停了 队列', '2018-06-11 20:35:36');
INSERT INTO `t_log` VALUES ('123', 'hongdi', '取消暂停了 队列', '2018-06-11 20:35:41');
INSERT INTO `t_log` VALUES ('124', 'hongdi', '暂停了 队列', '2018-06-11 20:35:46');
INSERT INTO `t_log` VALUES ('125', 'hongdi', '取消暂停了 队列', '2018-06-11 20:35:50');
INSERT INTO `t_log` VALUES ('126', 'hongdi', '完成了： 队列', '2018-06-11 20:35:55');
INSERT INTO `t_log` VALUES ('127', 'hongdi', '暂停了 队列', '2018-06-11 20:36:00');
INSERT INTO `t_log` VALUES ('128', 'hongdi', '取消暂停了 队列', '2018-06-11 20:36:04');
INSERT INTO `t_log` VALUES ('129', 'hongdi', '暂停了 队列', '2018-06-11 20:37:00');
INSERT INTO `t_log` VALUES ('130', 'hongdi', '取消暂停了 队列', '2018-06-11 20:40:32');
INSERT INTO `t_log` VALUES ('131', 'hongdi', '取消暂停了 队列', '2018-06-11 20:40:52');
INSERT INTO `t_log` VALUES ('132', 'hongdi', '取消暂停了 队列', '2018-06-11 20:41:06');
INSERT INTO `t_log` VALUES ('133', 'hongdi', '取消暂停了 队列', '2018-06-11 20:41:20');
INSERT INTO `t_log` VALUES ('134', 'hongdi', '取消暂停了 队列', '2018-06-11 20:41:25');
INSERT INTO `t_log` VALUES ('135', 'hongdi', '取消暂停了 队列', '2018-06-11 20:41:30');
INSERT INTO `t_log` VALUES ('136', 'hongdi', '暂停了 队列', '2018-06-11 20:46:22');
INSERT INTO `t_log` VALUES ('137', 'hongdi', '取消暂停了 队列', '2018-06-11 20:46:31');
INSERT INTO `t_log` VALUES ('138', 'hongdi', '取消暂停了 队列', '2018-06-11 20:47:02');
INSERT INTO `t_log` VALUES ('139', 'hongdi', '取消暂停了 队列', '2018-06-11 20:50:01');
INSERT INTO `t_log` VALUES ('140', 'hongdi', '暂停了 队列', '2018-06-11 20:52:32');
INSERT INTO `t_log` VALUES ('141', 'hongdi', '暂停了 队列', '2018-06-11 20:59:25');
INSERT INTO `t_log` VALUES ('142', 'hongdi', '取消暂停了 队列', '2018-06-11 20:59:30');
INSERT INTO `t_log` VALUES ('143', 'hongdi', '暂停了 队列', '2018-06-11 21:04:55');
INSERT INTO `t_log` VALUES ('144', 'hongdi', '取消暂停了 队列', '2018-06-11 21:05:06');
INSERT INTO `t_log` VALUES ('145', 'hongdi', '暂停了 队列', '2018-06-11 21:05:11');
INSERT INTO `t_log` VALUES ('146', 'hongdi', '取消暂停了 队列', '2018-06-11 21:05:16');
INSERT INTO `t_log` VALUES ('147', 'hongdi', '完成了： 队列', '2018-06-11 21:05:25');
INSERT INTO `t_log` VALUES ('148', 'hongdi', '完成了： 队列', '2018-06-11 21:05:31');
INSERT INTO `t_log` VALUES ('149', 'hongdi', '暂停了 队列', '2018-06-11 21:05:36');
INSERT INTO `t_log` VALUES ('150', 'hongdi', '取消暂停了 队列', '2018-06-11 21:05:41');
INSERT INTO `t_log` VALUES ('151', 'hongdi', '暂停了 队列', '2018-06-11 21:21:01');
INSERT INTO `t_log` VALUES ('152', 'hongdi', '修改了：红底 的管理员', '2018-06-12 20:19:32');
INSERT INTO `t_log` VALUES ('153', 'hongdi', '完成了： 队列', '2018-06-12 20:19:48');
INSERT INTO `t_log` VALUES ('154', 'hongdi', '暂停了 队列', '2018-06-12 20:19:52');
INSERT INTO `t_log` VALUES ('155', 'hongdi', '取消暂停了 队列', '2018-06-12 20:28:48');
INSERT INTO `t_log` VALUES ('156', 'hongdi', '暂停了 队列', '2018-06-12 20:28:52');
INSERT INTO `t_log` VALUES ('157', 'hongdi', '取消暂停了 队列', '2018-06-12 20:30:57');
INSERT INTO `t_log` VALUES ('158', 'hongdi', '取消暂停了 队列', '2018-06-12 20:32:59');
INSERT INTO `t_log` VALUES ('159', 'hongdi', '取消暂停了 队列', '2018-06-12 20:41:16');
INSERT INTO `t_log` VALUES ('160', 'hongdi', '取消暂停了 队列', '2018-06-12 20:41:57');
INSERT INTO `t_log` VALUES ('161', 'hongdi', '取消暂停了 队列', '2018-06-12 20:43:36');
INSERT INTO `t_log` VALUES ('162', 'hongdi', '取消暂停了 队列', '2018-06-12 20:45:25');
INSERT INTO `t_log` VALUES ('163', 'hongdi', '取消暂停了 队列', '2018-06-12 20:48:12');
INSERT INTO `t_log` VALUES ('164', 'hongdi', '取消暂停了 队列', '2018-06-12 20:52:49');
INSERT INTO `t_log` VALUES ('165', 'hongdi', '取消暂停了 队列', '2018-06-12 20:54:25');
INSERT INTO `t_log` VALUES ('166', 'hongdi', '取消暂停了 队列', '2018-06-12 20:55:38');
INSERT INTO `t_log` VALUES ('167', 'hongdi', '取消暂停了 队列', '2018-06-12 20:56:46');
INSERT INTO `t_log` VALUES ('168', 'hongdi', '取消暂停了 队列', '2018-06-12 20:57:49');
INSERT INTO `t_log` VALUES ('169', 'hongdi', '取消暂停了 队列', '2018-06-12 20:59:40');
INSERT INTO `t_log` VALUES ('170', 'hongdi', '取消暂停了 队列', '2018-06-12 21:00:31');
INSERT INTO `t_log` VALUES ('171', 'hongdi', '取消暂停了 队列', '2018-06-12 21:01:56');
INSERT INTO `t_log` VALUES ('172', 'hongdi', '取消暂停了 队列', '2018-06-12 21:02:59');
INSERT INTO `t_log` VALUES ('173', 'hongdi', '取消暂停了 队列', '2018-06-12 21:07:57');
INSERT INTO `t_log` VALUES ('174', 'hongdi', '取消暂停了 队列', '2018-06-12 21:12:54');
INSERT INTO `t_log` VALUES ('175', 'hongdi', '增加了角色：', '2018-06-12 21:23:38');
INSERT INTO `t_log` VALUES ('176', 'hongdi', '更新了公告:', '2018-06-25 16:04:56');
INSERT INTO `t_log` VALUES ('177', 'hongdi', '更新了公告:周日放假', '2018-06-25 16:07:51');
INSERT INTO `t_log` VALUES ('178', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:12:38');
INSERT INTO `t_log` VALUES ('179', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:13:03');
INSERT INTO `t_log` VALUES ('180', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:13:14');
INSERT INTO `t_log` VALUES ('181', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:13:53');
INSERT INTO `t_log` VALUES ('182', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:15:45');
INSERT INTO `t_log` VALUES ('183', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:18:30');
INSERT INTO `t_log` VALUES ('184', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:18:58');
INSERT INTO `t_log` VALUES ('185', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:20:06');
INSERT INTO `t_log` VALUES ('186', 'hongdi', '修改了： 的管理员', '2018-06-25 19:21:19');
INSERT INTO `t_log` VALUES ('187', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:23:03');
INSERT INTO `t_log` VALUES ('188', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:27:02');
INSERT INTO `t_log` VALUES ('189', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:36:58');
INSERT INTO `t_log` VALUES ('190', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:37:22');
INSERT INTO `t_log` VALUES ('191', 'hongdi', '修改了：谈雨 的管理员', '2018-06-25 19:37:59');
INSERT INTO `t_log` VALUES ('192', 'hongdi', '修改了：谈雨松是 的管理员', '2018-06-25 19:38:29');
INSERT INTO `t_log` VALUES ('193', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:41:23');
INSERT INTO `t_log` VALUES ('194', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:41:24');
INSERT INTO `t_log` VALUES ('195', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:44:31');
INSERT INTO `t_log` VALUES ('196', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:44:36');
INSERT INTO `t_log` VALUES ('197', 'hongdi', '修改了：谈雨松 的管理员', '2018-06-25 19:51:50');
INSERT INTO `t_log` VALUES ('198', 'hongdi', '取消暂停了 队列', '2018-06-25 19:56:53');
INSERT INTO `t_log` VALUES ('199', 'hongdi', '删除了角色，id为：12', '2018-06-25 19:58:23');
INSERT INTO `t_log` VALUES ('200', 'hongdi', '增加了角色：', '2018-06-25 20:21:30');
INSERT INTO `t_log` VALUES ('201', 'hongdi', '增加了角色：扫地', '2018-06-25 20:34:56');
INSERT INTO `t_log` VALUES ('202', 'hongdi', '增加了角色：扫地', '2018-06-25 20:35:08');
INSERT INTO `t_log` VALUES ('203', 'hongdi', '增加了角色：', '2018-06-25 20:35:31');
INSERT INTO `t_log` VALUES ('204', 'hongdi', '增加了角色：无视', '2018-06-25 20:38:52');
INSERT INTO `t_log` VALUES ('205', 'hongdi', '增加了角色：大', '2018-06-25 20:40:32');
INSERT INTO `t_log` VALUES ('206', 'hongdi', '增加了角色：', '2018-06-25 20:48:03');
INSERT INTO `t_log` VALUES ('207', 'hongdi', '增加了角色：', '2018-06-25 20:53:33');
INSERT INTO `t_log` VALUES ('208', 'hongdi', '增加了角色：厨师', '2018-06-25 21:22:04');
INSERT INTO `t_log` VALUES ('209', 'hongdi', '增加了角色：警察', '2018-06-25 21:27:20');
INSERT INTO `t_log` VALUES ('210', 'hongdi', '增加了角色：老师', '2018-06-25 21:28:47');
INSERT INTO `t_log` VALUES ('211', 'hongdi', '增加了角色：教授', '2018-06-25 21:34:41');
INSERT INTO `t_log` VALUES ('212', 'hongdi', '增加了角色：厨师', '2018-06-25 21:34:52');
INSERT INTO `t_log` VALUES ('213', 'hongdi', '删除了角色，id为：25', '2018-06-26 09:42:44');
INSERT INTO `t_log` VALUES ('214', 'hongdi', '增加了角色：', '2018-06-26 09:47:20');
INSERT INTO `t_log` VALUES ('215', 'hongdi', '增加了角色：红', '2018-06-26 10:01:38');
INSERT INTO `t_log` VALUES ('216', 'hongdi', '删除了角色，id为：26', '2018-06-26 10:08:59');
INSERT INTO `t_log` VALUES ('217', 'hongdi', '更新了id:27 角色 ', '2018-06-26 10:13:11');
INSERT INTO `t_log` VALUES ('218', 'hongdi', '更新了id:24 角色 ', '2018-06-26 10:13:28');
INSERT INTO `t_log` VALUES ('219', 'hongdi', '更新了id:24 角色 ', '2018-06-26 10:14:41');
INSERT INTO `t_log` VALUES ('220', 'hongdi', '更新了id:23 角色 ', '2018-06-26 10:14:51');
INSERT INTO `t_log` VALUES ('221', 'hongdi', '更新了id:23 角色 ', '2018-06-26 10:15:21');
INSERT INTO `t_log` VALUES ('222', 'hongdi', '更新了id:27 角色 ', '2018-06-26 10:15:30');
INSERT INTO `t_log` VALUES ('223', 'hongdi', '更新了id:27 角色 ', '2018-06-26 10:15:41');
INSERT INTO `t_log` VALUES ('224', 'hongdi', '增加了角色：超级管理员', '2018-06-26 10:16:24');
INSERT INTO `t_log` VALUES ('225', 'hongdi', '删除了id：10 管理员', '2018-06-26 10:46:39');
INSERT INTO `t_log` VALUES ('226', 'hongdi', '删除了id： 管理员', '2018-06-26 10:53:52');
INSERT INTO `t_log` VALUES ('227', 'hongdi', '增加了：jiujie 的管理员', '2018-06-26 10:58:52');
INSERT INTO `t_log` VALUES ('228', 'hongdi', '更新了：jiujie 管理员', '2018-06-26 11:28:44');
INSERT INTO `t_log` VALUES ('229', 'hongdi', '增加了角色：管理员', '2018-06-26 14:42:44');
INSERT INTO `t_log` VALUES ('230', 'hongdi', '增加了角色：管理员', '2018-06-26 14:43:30');
INSERT INTO `t_log` VALUES ('231', 'hongdi', '增加了角色：红', '2018-06-26 14:45:53');
INSERT INTO `t_log` VALUES ('232', 'hongdi', '删除了角色，id为：30', '2018-06-26 14:46:00');
INSERT INTO `t_log` VALUES ('233', 'hongdi', '增加了角色：红', '2018-06-26 14:46:12');
INSERT INTO `t_log` VALUES ('234', 'hongdi', '增加了角色：谈', '2018-06-26 14:55:32');
INSERT INTO `t_log` VALUES ('235', 'hongdi', '更新了id:28 角色 ', '2018-06-26 15:08:08');
INSERT INTO `t_log` VALUES ('236', 'hongdi', '更新了id:23 角色 ', '2018-06-26 15:08:52');
INSERT INTO `t_log` VALUES ('237', 'hongdi', '更新了id:24 角色 ', '2018-06-26 15:09:47');
INSERT INTO `t_log` VALUES ('238', 'hongdi', '更新了id:28 角色 ', '2018-06-26 15:10:18');
INSERT INTO `t_log` VALUES ('239', 'hongdi', '删除了角色，id为：29', '2018-06-26 15:10:28');
INSERT INTO `t_log` VALUES ('240', 'hongdi', '删除了角色，id为：31', '2018-06-26 15:10:35');
INSERT INTO `t_log` VALUES ('241', 'hongdi', '删除了角色，id为：32', '2018-06-26 15:10:41');
INSERT INTO `t_log` VALUES ('242', 'hongdi', '删除了角色，id为：33', '2018-06-26 15:10:48');
INSERT INTO `t_log` VALUES ('243', 'hongdi', '修改了：莫至瑞 的信息', '2018-06-26 15:26:34');
INSERT INTO `t_log` VALUES ('244', 'hongdi', '增加了：huizhou 的管理员', '2018-06-26 15:31:43');
INSERT INTO `t_log` VALUES ('245', 'hongdi', '增加了：555 的管理员', '2018-06-26 15:36:36');
INSERT INTO `t_log` VALUES ('246', 'hongdi', '删除了id： 管理员', '2018-06-26 15:36:43');
INSERT INTO `t_log` VALUES ('247', 'hongdi', '删除了id： 管理员', '2018-06-26 15:36:46');
INSERT INTO `t_log` VALUES ('248', 'hongdi', '增加了：admin 的管理员', '2018-06-26 15:37:01');
INSERT INTO `t_log` VALUES ('249', 'hongdi', '增加了：444 的管理员', '2018-06-26 15:38:29');
INSERT INTO `t_log` VALUES ('250', 'hongdi', '更新了公告:周六房价', '2018-06-26 15:50:46');
INSERT INTO `t_log` VALUES ('251', 'hongdi', '增加了：444 的管理员', '2018-06-26 17:20:18');
INSERT INTO `t_log` VALUES ('252', 'hongdi', '更新了：444 管理员', '2018-06-26 17:20:59');
INSERT INTO `t_log` VALUES ('253', 'hongdi', '删除了id： 管理员', '2018-06-26 17:21:40');
INSERT INTO `t_log` VALUES ('254', 'hongdi', '增加了：555 的管理员', '2018-06-26 17:22:46');
INSERT INTO `t_log` VALUES ('255', 'hongdi', '更新了：555 管理员', '2018-06-26 17:22:58');
INSERT INTO `t_log` VALUES ('256', 'hongdi', '增加了：4甲苯 油', '2018-06-26 17:37:47');
INSERT INTO `t_log` VALUES ('257', 'hongdi', '更新了：555 管理员', '2018-06-27 08:58:17');
INSERT INTO `t_log` VALUES ('258', 'hongdi', '增加了： 类型的油', '2018-06-27 09:02:36');
INSERT INTO `t_log` VALUES ('259', 'hongdi', '删除了：22 油', '2018-06-27 09:02:41');
INSERT INTO `t_log` VALUES ('260', 'hongdi', '增加了： 类型的油', '2018-06-27 09:13:40');
INSERT INTO `t_log` VALUES ('261', 'hongdi', '删除了：23 油', '2018-06-27 09:13:44');
INSERT INTO `t_log` VALUES ('262', 'hongdi', '增加了： 类型的油', '2018-06-27 09:13:58');
INSERT INTO `t_log` VALUES ('263', 'hongdi', '增加了： 类型的油', '2018-06-27 09:15:03');
INSERT INTO `t_log` VALUES ('264', 'hongdi', '删除了：25 油', '2018-06-27 09:15:09');
INSERT INTO `t_log` VALUES ('265', 'hongdi', '删除了：24 油', '2018-06-27 09:15:13');
INSERT INTO `t_log` VALUES ('266', 'hongdi', '增加了：汽油 类型的油', '2018-06-27 09:27:50');
INSERT INTO `t_log` VALUES ('267', 'hongdi', '修改了：莫至瑞 的信息', '2018-06-27 10:00:13');
INSERT INTO `t_log` VALUES ('268', 'hongdi', '修改了：莫至瑞 的信息', '2018-06-27 10:07:49');
INSERT INTO `t_log` VALUES ('269', 'hongdi', '修改了：莫至瑞 的信息', '2018-06-27 10:14:59');
INSERT INTO `t_log` VALUES ('270', 'hongdi', '修改了：莫至瑞 的信息', '2018-06-27 10:17:00');
INSERT INTO `t_log` VALUES ('271', 'hongdi', '修改了：莫至瑞 的信息', '2018-06-27 10:17:16');
INSERT INTO `t_log` VALUES ('272', 'hongdi', '增加了：hongdi777 的管理员', '2018-06-27 10:28:43');
INSERT INTO `t_log` VALUES ('273', 'hongdi', '更新了：hongdi777 管理员', '2018-06-27 10:30:23');
INSERT INTO `t_log` VALUES ('274', 'hongdi', '删除了id： 管理员', '2018-06-27 10:31:22');
INSERT INTO `t_log` VALUES ('275', 'hongdi', '增加了角色：教导主任', '2018-06-27 10:32:14');
INSERT INTO `t_log` VALUES ('276', 'hongdi', '更新了id:34 角色 ', '2018-06-27 10:32:24');
INSERT INTO `t_log` VALUES ('277', 'hongdi', '更新了公告:', '2018-06-27 10:32:59');
INSERT INTO `t_log` VALUES ('278', 'hongdi', '更新了公告:国庆放假', '2018-06-27 10:34:04');
INSERT INTO `t_log` VALUES ('279', 'hongdi', '取消暂停了 队列', '2018-06-27 10:34:48');
INSERT INTO `t_log` VALUES ('280', 'hongdi', '取消暂停了 队列', '2018-06-27 10:38:09');
INSERT INTO `t_log` VALUES ('281', 'hongdi', '取消暂停了 队列', '2018-06-27 10:39:12');
INSERT INTO `t_log` VALUES ('282', 'hongdi', '暂停了 队列', '2018-06-27 10:43:56');
INSERT INTO `t_log` VALUES ('283', 'hongdi', '暂停了 队列', '2018-06-27 10:44:05');
INSERT INTO `t_log` VALUES ('284', 'hongdi', '暂停了 队列', '2018-06-27 10:44:39');
INSERT INTO `t_log` VALUES ('285', 'hongdi', '取消暂停了 队列', '2018-06-27 10:44:42');
INSERT INTO `t_log` VALUES ('286', 'hongdi', '暂停了 队列', '2018-06-27 10:44:49');
INSERT INTO `t_log` VALUES ('287', 'hongdi', '取消暂停了 队列', '2018-06-27 10:44:52');
INSERT INTO `t_log` VALUES ('288', 'hongdi', '完成了： 队列', '2018-06-27 10:44:56');
INSERT INTO `t_log` VALUES ('289', 'hongdi', '暂停了 队列', '2018-06-27 10:45:03');
INSERT INTO `t_log` VALUES ('290', 'hongdi', '取消暂停了 队列', '2018-06-27 10:45:06');
INSERT INTO `t_log` VALUES ('291', 'hongdi', '暂停了 队列', '2018-06-27 10:45:10');
INSERT INTO `t_log` VALUES ('292', 'hongdi', '取消暂停了 队列', '2018-06-27 10:45:13');
INSERT INTO `t_log` VALUES ('293', 'hongdi', '修改了了排第：1 队列', '2018-06-27 10:45:43');
INSERT INTO `t_log` VALUES ('294', 'hongdi', '修改了了排第：1 队列', '2018-06-27 10:45:55');
INSERT INTO `t_log` VALUES ('295', 'hongdi', '修改了了排第：2 队列', '2018-06-27 10:47:27');
INSERT INTO `t_log` VALUES ('296', 'hongdi', '修改了了排第：2 队列', '2018-06-27 10:47:49');
INSERT INTO `t_log` VALUES ('297', 'hongdi', '修改了了排第：2 队列', '2018-06-27 10:48:00');
INSERT INTO `t_log` VALUES ('298', 'hongdi', '修改了了排第：2 队列', '2018-06-27 10:48:28');
INSERT INTO `t_log` VALUES ('299', 'hongdi', '修改了了排第：2 队列', '2018-06-27 10:56:52');
INSERT INTO `t_log` VALUES ('300', 'hongdi', '修改了了排第：2 队列', '2018-06-27 10:57:02');
INSERT INTO `t_log` VALUES ('301', 'hongdi', '暂停了 队列', '2018-06-27 10:58:52');
INSERT INTO `t_log` VALUES ('302', 'hongdi', '取消暂停了 队列', '2018-06-27 10:58:55');
INSERT INTO `t_log` VALUES ('303', 'hongdi', '完成了： 队列', '2018-06-27 10:59:50');
INSERT INTO `t_log` VALUES ('304', 'hongdi', '完成了： 队列', '2018-06-27 10:59:53');
INSERT INTO `t_log` VALUES ('305', 'hongdi', '完成了： 队列', '2018-06-29 09:23:31');
INSERT INTO `t_log` VALUES ('306', 'hongdi', '完成了： 队列', '2018-06-29 09:23:34');
INSERT INTO `t_log` VALUES ('307', 'hongdi', '完成了： 队列', '2018-06-29 10:11:17');
INSERT INTO `t_log` VALUES ('308', 'hongdi', '完成了： 队列', '2018-06-29 10:20:11');
INSERT INTO `t_log` VALUES ('309', 'hongdi', '完成了： 队列', '2018-06-29 10:45:04');
INSERT INTO `t_log` VALUES ('310', 'hongdi', '完成了： 队列', '2018-06-29 10:53:32');
INSERT INTO `t_log` VALUES ('311', 'hongdi', '完成了： 队列', '2018-06-29 10:54:20');
INSERT INTO `t_log` VALUES ('312', 'hongdi', '暂停了 队列', '2018-06-29 10:58:22');
INSERT INTO `t_log` VALUES ('313', 'hongdi', '取消暂停了 队列', '2018-06-29 10:58:25');
INSERT INTO `t_log` VALUES ('314', 'hongdi', '暂停了 队列', '2018-06-29 10:58:33');
INSERT INTO `t_log` VALUES ('315', 'hongdi', '取消暂停了 队列', '2018-06-29 10:59:38');
INSERT INTO `t_log` VALUES ('316', 'hongdi', '暂停了 队列', '2018-06-29 10:59:42');
INSERT INTO `t_log` VALUES ('317', 'hongdi', '取消暂停了 队列', '2018-06-29 10:59:44');
INSERT INTO `t_log` VALUES ('318', 'hongdi', '修改了了排第：1 队列', '2018-06-29 11:00:25');
INSERT INTO `t_log` VALUES ('319', 'hongdi', '修改了了排第：1 队列', '2018-06-29 11:00:43');
INSERT INTO `t_log` VALUES ('320', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:01:26');
INSERT INTO `t_log` VALUES ('321', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:01:36');
INSERT INTO `t_log` VALUES ('322', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:01:47');
INSERT INTO `t_log` VALUES ('323', 'hongdi', '暂停了 队列', '2018-06-29 11:04:41');
INSERT INTO `t_log` VALUES ('324', 'hongdi', '取消暂停了 队列', '2018-06-29 11:04:45');
INSERT INTO `t_log` VALUES ('325', 'hongdi', '暂停了 队列', '2018-06-29 11:09:18');
INSERT INTO `t_log` VALUES ('326', 'hongdi', '取消暂停了 队列', '2018-06-29 11:09:21');
INSERT INTO `t_log` VALUES ('327', 'hongdi', '完成了： 队列', '2018-06-29 11:10:44');
INSERT INTO `t_log` VALUES ('328', 'hongdi', '完成了： 队列', '2018-06-29 11:10:47');
INSERT INTO `t_log` VALUES ('329', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:22:45');
INSERT INTO `t_log` VALUES ('330', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:22:55');
INSERT INTO `t_log` VALUES ('331', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:25:52');
INSERT INTO `t_log` VALUES ('332', 'hongdi', '修改了了排第：1 队列', '2018-06-29 11:29:16');
INSERT INTO `t_log` VALUES ('333', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:29:34');
INSERT INTO `t_log` VALUES ('334', 'hongdi', '修改了了排第：1 队列', '2018-06-29 11:29:47');
INSERT INTO `t_log` VALUES ('335', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:30:05');
INSERT INTO `t_log` VALUES ('336', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:30:33');
INSERT INTO `t_log` VALUES ('337', 'hongdi', '修改了了排第：2 队列', '2018-06-29 11:30:44');
INSERT INTO `t_log` VALUES ('338', 'hongdi', '修改了了排第：1 队列', '2018-06-29 11:32:15');
INSERT INTO `t_log` VALUES ('339', 'hongdi', '修改了了排第：1 队列', '2018-06-29 11:32:23');
INSERT INTO `t_log` VALUES ('340', 'hongdi', '修改了了排第：1 队列', '2018-06-29 11:32:34');
INSERT INTO `t_log` VALUES ('341', null, '修改了了排第：3 队列', '2018-06-29 14:44:50');
INSERT INTO `t_log` VALUES ('342', null, '修改了了排第：3 队列', '2018-06-29 14:45:02');
INSERT INTO `t_log` VALUES ('343', null, '修改了了排第：3 队列', '2018-06-29 14:45:18');
INSERT INTO `t_log` VALUES ('344', null, '修改了了排第：3 队列', '2018-06-29 14:45:25');
INSERT INTO `t_log` VALUES ('345', null, '修改了了排第：3 队列', '2018-06-29 14:48:09');
INSERT INTO `t_log` VALUES ('346', null, '修改了了排第：2 队列', '2018-06-29 14:48:14');
INSERT INTO `t_log` VALUES ('347', null, '修改了了排第：2 队列', '2018-06-29 14:54:42');
INSERT INTO `t_log` VALUES ('348', null, '修改了了排第：2 队列', '2018-06-29 14:54:48');
INSERT INTO `t_log` VALUES ('349', null, '修改了了排第：2 队列', '2018-06-29 14:54:54');
INSERT INTO `t_log` VALUES ('350', null, '修改了了排第：2 队列', '2018-06-29 14:55:00');
INSERT INTO `t_log` VALUES ('351', null, '修改了了排第：2 队列', '2018-06-29 14:55:07');
INSERT INTO `t_log` VALUES ('352', null, '修改了了排第：2 队列', '2018-06-29 14:55:14');
INSERT INTO `t_log` VALUES ('353', null, '修改了了排第：3 队列', '2018-06-29 14:55:27');
INSERT INTO `t_log` VALUES ('354', null, '修改了了排第：2 队列', '2018-06-29 14:57:38');
INSERT INTO `t_log` VALUES ('355', null, '暂停了 队列', '2018-06-29 14:57:45');
INSERT INTO `t_log` VALUES ('356', null, '取消暂停了 队列', '2018-06-29 14:57:48');
INSERT INTO `t_log` VALUES ('357', null, '完成了： 队列', '2018-06-29 14:58:11');
INSERT INTO `t_log` VALUES ('358', null, '完成了： 队列', '2018-06-29 14:58:14');
INSERT INTO `t_log` VALUES ('359', null, '完成了： 队列', '2018-06-29 14:58:17');
INSERT INTO `t_log` VALUES ('360', 'hongdi', '增加了：f 类型的油', '2018-06-29 15:04:24');
INSERT INTO `t_log` VALUES ('361', 'hongdi', '删除了：27 油', '2018-06-29 15:06:29');
INSERT INTO `t_log` VALUES ('362', 'hongdi', '增加了：油品类5 类型的油', '2018-06-29 15:15:24');
INSERT INTO `t_log` VALUES ('363', 'hongdi', '删除了：28 油', '2018-06-29 15:33:32');
INSERT INTO `t_log` VALUES ('364', 'hongdi', '增加了：油品类5 类型的油', '2018-06-29 15:36:13');
INSERT INTO `t_log` VALUES ('365', 'hongdi', '删除了：29 油', '2018-06-29 15:36:17');
INSERT INTO `t_log` VALUES ('366', 'hongdi', '增加了：油品类6 类型的油', '2018-06-29 15:39:59');
INSERT INTO `t_log` VALUES ('367', 'hongdi', '删除了：30 油', '2018-06-29 15:40:02');
INSERT INTO `t_log` VALUES ('368', 'hongdi', '增加了：化工类4 类型的油', '2018-06-29 15:48:57');
INSERT INTO `t_log` VALUES ('369', 'hongdi', '更新了：油品类88 油', '2018-06-29 16:25:42');
INSERT INTO `t_log` VALUES ('370', 'hongdi', '增加了：油品4 类型的油', '2018-06-29 16:40:00');
INSERT INTO `t_log` VALUES ('371', 'hongdi', '删除了： 油', '2018-06-29 16:44:57');
INSERT INTO `t_log` VALUES ('372', 'hongdi', '增加了：油品6 类型的油', '2018-06-29 16:45:20');
INSERT INTO `t_log` VALUES ('373', 'hongdi', '删除了： 油', '2018-06-29 16:45:24');
INSERT INTO `t_log` VALUES ('374', 'hongdi', '增加了：油品类7 类型的油', '2018-06-29 16:48:36');
INSERT INTO `t_log` VALUES ('375', 'hongdi', '删除了： 油', '2018-06-29 16:50:32');
INSERT INTO `t_log` VALUES ('376', 'hongdi', '增加了：油品类8 类型的油', '2018-06-29 16:50:45');
INSERT INTO `t_log` VALUES ('377', 'hongdi', '更新了：油品类88 油', '2018-06-29 17:13:59');
INSERT INTO `t_log` VALUES ('378', 'hongdi', '增加了：液态油 油', '2018-06-29 17:52:01');
INSERT INTO `t_log` VALUES ('379', 'hongdi', '更新了：油品类8 油', '2018-06-29 17:52:16');
INSERT INTO `t_log` VALUES ('380', 'hongdi', '增加了：液态油2 油', '2018-06-29 18:02:47');
INSERT INTO `t_log` VALUES ('381', 'hongdi', '删除了油品类型id为:35', '2018-06-29 18:13:19');
INSERT INTO `t_log` VALUES ('382', 'hongdi', '增加了：油品类87 类型的油', '2018-06-29 18:13:31');
INSERT INTO `t_log` VALUES ('383', 'hongdi', '增加了：液态油44 油', '2018-06-29 18:13:52');
INSERT INTO `t_log` VALUES ('384', 'hongdi', '删除了油品类型id为:39', '2018-06-29 18:22:07');
INSERT INTO `t_log` VALUES ('385', 'hongdi', '增加了：液态油8 油', '2018-06-29 18:22:19');
INSERT INTO `t_log` VALUES ('386', 'hongdi', '增加了：液态油454 油', '2018-06-29 18:22:37');
INSERT INTO `t_log` VALUES ('387', 'hongdi', '更新了：液态油666 油', '2018-06-29 18:31:26');
INSERT INTO `t_log` VALUES ('388', 'hongdi', '更新了：液态油88 油', '2018-06-29 18:31:44');
INSERT INTO `t_log` VALUES ('389', 'hongdi', '修改了：谈雨松 的信息', '2018-06-30 09:15:19');
INSERT INTO `t_log` VALUES ('390', 'hongdi', '删除了油品类型id为:40', '2018-06-30 09:20:22');
INSERT INTO `t_log` VALUES ('391', 'hongdi', '删除了油品类型id为:38', '2018-06-30 09:20:25');
INSERT INTO `t_log` VALUES ('392', 'hongdi', '删除了油品类型id为:31', '2018-06-30 09:20:39');
INSERT INTO `t_log` VALUES ('393', 'hongdi', '增加了角色：美女', '2018-06-30 10:32:40');
INSERT INTO `t_log` VALUES ('394', 'hongdi', '增加了角色：保安', '2018-06-30 10:33:36');
INSERT INTO `t_log` VALUES ('395', 'hongdi', '删除了角色，id为：35', '2018-06-30 10:33:43');
INSERT INTO `t_log` VALUES ('396', 'hongdi', '更新了id:34 角色 ', '2018-06-30 10:35:15');
INSERT INTO `t_log` VALUES ('397', 'hongdi', '更新了id:28 角色 ', '2018-06-30 10:35:28');
INSERT INTO `t_log` VALUES ('398', 'hongdi', '更新了id:24 角色 ', '2018-06-30 10:35:39');
INSERT INTO `t_log` VALUES ('399', 'hongdi', '更新了id:23 角色 ', '2018-06-30 10:35:48');
INSERT INTO `t_log` VALUES ('400', 'hongdi', '更新了id:28 角色 ', '2018-06-30 10:46:46');
INSERT INTO `t_log` VALUES ('401', 'hongdi', '更新了id:28 角色 ', '2018-06-30 11:11:02');

-- ----------------------------
-- Table structure for t_notice
-- ----------------------------
DROP TABLE IF EXISTS `t_notice`;
CREATE TABLE `t_notice` (
  `id` int(11) NOT NULL COMMENT '主键',
  `message` varchar(255) DEFAULT NULL COMMENT '内容',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='公告内容';

-- ----------------------------
-- Records of t_notice
-- ----------------------------
INSERT INTO `t_notice` VALUES ('1', '国庆放假', null, null);

-- ----------------------------
-- Table structure for t_oil
-- ----------------------------
DROP TABLE IF EXISTS `t_oil`;
CREATE TABLE `t_oil` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(10) DEFAULT NULL COMMENT '油品名',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  `delete_time` datetime DEFAULT NULL COMMENT '删除时间',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态',
  `father_id` int(11) DEFAULT NULL COMMENT '油品父类id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COMMENT='油品类型表';

-- ----------------------------
-- Records of t_oil
-- ----------------------------
INSERT INTO `t_oil` VALUES ('1', '油品类1', '2018-05-14 09:48:29', '2018-05-14 09:48:32', '2018-05-14 09:48:36', null, '0');
INSERT INTO `t_oil` VALUES ('2', '二甲苯', '2018-05-09 09:48:47', '2018-05-18 09:48:50', '2018-05-25 09:48:56', null, '1');
INSERT INTO `t_oil` VALUES ('3', '三甲苯', '2018-05-24 09:49:01', '2018-05-16 09:49:04', '2018-05-17 09:49:07', null, '1');
INSERT INTO `t_oil` VALUES ('4', '化工类2', '2018-05-18 09:49:11', '2018-05-26 09:49:14', '2018-05-14 09:49:16', null, '0');
INSERT INTO `t_oil` VALUES ('5', '乙烯', '2018-05-14 09:49:19', '2018-05-25 09:49:21', '2018-05-02 09:49:23', null, '4');
INSERT INTO `t_oil` VALUES ('6', '丙烯', '2018-05-17 09:49:26', '2018-05-26 09:49:30', '2018-05-28 09:49:32', null, '4');
INSERT INTO `t_oil` VALUES ('17', '30本', '2018-06-02 10:49:52', null, null, null, '16');
INSERT INTO `t_oil` VALUES ('19', '化工类3', '2018-06-11 20:22:05', null, null, null, '0');
INSERT INTO `t_oil` VALUES ('20', '丁烯', '2018-06-11 20:22:32', null, null, null, '19');
INSERT INTO `t_oil` VALUES ('21', '4甲苯', '2018-06-26 17:37:47', null, null, null, '1');
INSERT INTO `t_oil` VALUES ('36', '液态油', '2018-06-29 17:52:01', null, null, null, '35');
INSERT INTO `t_oil` VALUES ('37', '液态油2', '2018-06-29 18:02:47', null, null, null, '35');
INSERT INTO `t_oil` VALUES ('41', '液态油666', '2018-06-29 18:22:37', null, null, null, '40');

-- ----------------------------
-- Table structure for t_order
-- ----------------------------
DROP TABLE IF EXISTS `t_order`;
CREATE TABLE `t_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `order_number` int(11) DEFAULT NULL COMMENT '订单编号',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态',
  `plate_number` varchar(20) DEFAULT NULL COMMENT '车牌号',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  `delete_time` datetime DEFAULT NULL COMMENT '删除时间',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id 外键',
  `rank` int(11) DEFAULT NULL COMMENT '排名',
  `stop` tinyint(1) DEFAULT NULL COMMENT '暂停  1表示暂停',
  `oil_id` int(11) DEFAULT NULL COMMENT '汽油id 外键',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `oil_id` (`oil_id`),
  CONSTRAINT `t_order_ibfk_2` FOREIGN KEY (`oil_id`) REFERENCES `t_oil` (`id`),
  CONSTRAINT `t_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of t_order
-- ----------------------------
INSERT INTO `t_order` VALUES ('148', '2147483647', null, '45682', '2018-06-13 09:46:17', null, null, '36', '1', '0', '2');
INSERT INTO `t_order` VALUES ('149', '2147483647', null, '54454', '2018-06-25 14:40:00', null, null, '37', '2', '0', '2');
INSERT INTO `t_order` VALUES ('162', '2147483647', null, '京B54848', '2018-06-30 10:05:16', null, null, '41', '3', '0', '2');

-- ----------------------------
-- Table structure for t_permission
-- ----------------------------
DROP TABLE IF EXISTS `t_permission`;
CREATE TABLE `t_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permission` varchar(10) DEFAULT NULL,
  `create_time` varchar(20) DEFAULT NULL,
  `update_time` varchar(20) DEFAULT NULL,
  `delete_time` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of t_permission
-- ----------------------------
INSERT INTO `t_permission` VALUES ('1', '用户管理', null, null, null, null);
INSERT INTO `t_permission` VALUES ('2', '密码管理', null, null, null, null);
INSERT INTO `t_permission` VALUES ('3', '日志管理', null, null, null, null);
INSERT INTO `t_permission` VALUES ('4', '管理员管理', null, null, null, null);
INSERT INTO `t_permission` VALUES ('5', '油品管理', null, null, null, null);
INSERT INTO `t_permission` VALUES ('6', '车辆管理', null, null, null, null);
INSERT INTO `t_permission` VALUES ('7', '权限管理', null, null, null, null);
INSERT INTO `t_permission` VALUES ('8', '公告管理', null, null, null, null);

-- ----------------------------
-- Table structure for t_role
-- ----------------------------
DROP TABLE IF EXISTS `t_role`;
CREATE TABLE `t_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(10) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `delete_time` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COMMENT='角色表';

-- ----------------------------
-- Records of t_role
-- ----------------------------
INSERT INTO `t_role` VALUES ('23', '老师', '2018-06-25 21:28:47', '2018-06-30 10:35:48', null, '1', '1;2;5;6;7;');
INSERT INTO `t_role` VALUES ('24', '教授', '2018-06-25 21:34:41', '2018-06-30 10:35:39', null, '1', '1;5;6;8;');
INSERT INTO `t_role` VALUES ('25', '厨师', '2018-06-25 21:34:52', null, '2018-06-26 09:42:44', '0', '2,4,5,');
INSERT INTO `t_role` VALUES ('28', '超级管理员', '2018-06-26 10:16:24', '2018-06-30 11:11:02', null, '1', '1;2;3;4;5;6;7;8;');
INSERT INTO `t_role` VALUES ('29', '管理员', '2018-06-26 14:42:44', null, '2018-06-26 15:10:28', '0', '1,2,3,4,5,6,7,');
INSERT INTO `t_role` VALUES ('30', '管理员', '2018-06-26 14:43:30', null, '2018-06-26 14:46:00', '0', '1,2,3,4,5,6,7,');
INSERT INTO `t_role` VALUES ('31', '红', '2018-06-26 14:45:53', null, '2018-06-26 15:10:35', '0', '2,');
INSERT INTO `t_role` VALUES ('32', '红', '2018-06-26 14:46:12', null, '2018-06-26 15:10:40', '0', '1,2,3,4,5,6,7,8,');
INSERT INTO `t_role` VALUES ('33', '谈', '2018-06-26 14:55:32', null, '2018-06-26 15:10:47', '0', '1,2,0,0,5,0,0,8,');
INSERT INTO `t_role` VALUES ('34', '教导主任', '2018-06-27 10:32:14', '2018-06-30 10:35:15', null, '1', '1;2;6;8;');
INSERT INTO `t_role` VALUES ('35', '美女', '2018-06-30 10:32:40', null, '2018-06-30 10:33:43', '0', '1,5,8,');
INSERT INTO `t_role` VALUES ('36', '保安', '2018-06-30 10:33:36', null, null, '1', '1;2;3;8;');

-- ----------------------------
-- Table structure for t_token
-- ----------------------------
DROP TABLE IF EXISTS `t_token`;
CREATE TABLE `t_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(100) DEFAULT NULL,
  `access_token` varchar(512) DEFAULT NULL,
  `time` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of t_token
-- ----------------------------
INSERT INTO `t_token` VALUES ('1', 'wxb36891e3cb914461', '11_r3d0MarpqPpG7ZZGH2Eoglki4YJEdExKXDFlZdzT9FxxhHi58Qx3fDCseL_u5kOZc_0BMjC8jgTAafhHP-F7LNJYzobx4S7DcpxmHQf__dBo7wtNzf-naHBgCere6isAo9dXdOBiGcUpi4FmBFCcABAEIF', '2018-06-29 14:57:44');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `number` varchar(20) DEFAULT NULL COMMENT '司机编号',
  `name` varchar(10) DEFAULT NULL COMMENT '真实姓名',
  `phone` varchar(11) DEFAULT NULL COMMENT '电话号码',
  `company` varchar(10) DEFAULT NULL COMMENT '公司名',
  `nickname` varchar(10) DEFAULT NULL COMMENT '微信名',
  `head_img` varchar(255) DEFAULT NULL COMMENT '头像存储',
  `openid` varchar(100) NOT NULL COMMENT '微信识别id',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  `delete_time` datetime DEFAULT NULL COMMENT '删除时间',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态',
  `plate_number` varchar(11) DEFAULT '' COMMENT '车牌号',
  `oil_id` int(11) DEFAULT NULL COMMENT '油品id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('36', null, '莫至瑞', '13548451285', '一匠科技', 'MZR', 'http://thirdwx.qlogo.cn/mmopen/vi_32/FMrT2lyJhJtF8FvAC5IrveadBK8ibeicmFQxtTsjr0ZriahYzwJTtZR3temOnAh6gdOPQtQQ4TmEPKbIDw4zDnWTw/132', 'o5UzE0y8yRpO689ab8T2eVSjjwok', null, '2018-06-27 10:17:16', null, null, '粤A15488', null);
INSERT INTO `t_user` VALUES ('37', null, '楚特', '544554454', '一酱', 'Carpe Diem', 'http://thirdwx.qlogo.cn/mmopen/vi_32/bNQ1xdysiatMnMYpibXw70cvicEvdkagvL8yymOwibjaVM3n0n9DV15KtC5QcJZuekQmKibiaZ5Gl6ictakQiaNgJRWJYA/132', 'o5UzE09O6EwSrcD7p5a8h-Y3jWsM', null, null, null, null, '粤F54262', null);
INSERT INTO `t_user` VALUES ('41', null, '谈雨松', '13075206491', '一匠', '红底', 'http://thirdwx.qlogo.cn/mmopen/vi_32/uXTGPAvrvhCYbKOYpJiahaEC0LOdKILRn8iaRkdqAkmSG15VyIRNiaVZoWliamvX2urG5iarvn01OzGL34DNeyYVwsg/132', 'o5UzE0wSTH8eTapMxyh7PxPjs08Y', null, '2018-06-30 09:15:19', null, null, '京B54848', null);

-- ----------------------------
-- View structure for t_list
-- ----------------------------
DROP VIEW IF EXISTS `t_list`;
CREATE ALGORITHM=UNDEFINED DEFINER=`student2`@`%` SQL SECURITY DEFINER VIEW `t_list` AS select `t_order`.`rank` AS `rank`,`t_user`.`name` AS `name`,`t_user`.`phone` AS `phone`,`t_user`.`company` AS `company`,`t_user`.`nickname` AS `nickname`,`t_user`.`openid` AS `openid`,`t_order`.`stop` AS `stop`,`t_user`.`plate_number` AS `plate_number`,`t_order`.`oil_id` AS `oil_id`,`t_user`.`head_img` AS `head_img`,`t_oil`.`name` AS `oilName`,`t_order`.`create_time` AS `create_time`,`t_order`.`order_number` AS `order_number` from ((`t_user` join `t_order`) join `t_oil`) where ((`t_order`.`user_id` = `t_user`.`id`) and (`t_order`.`oil_id` = `t_oil`.`id`)) ;

-- ----------------------------
-- View structure for t_role_name
-- ----------------------------
DROP VIEW IF EXISTS `t_role_name`;
CREATE ALGORITHM=UNDEFINED DEFINER=`student2`@`%` SQL SECURITY DEFINER VIEW `t_role_name` AS select `t_admin`.`id` AS `id`,`t_admin`.`name` AS `name`,`t_admin`.`password` AS `password`,`t_admin`.`create_time` AS `create_time`,`t_admin`.`update_time` AS `update_time`,`t_admin`.`delete_time` AS `delete_time`,`t_admin`.`status` AS `status`,`t_admin`.`role_id` AS `role_id`,`t_role`.`id` AS `roleId`,`t_role`.`name` AS `roleName` from (`t_admin` join `t_role`) where (`t_admin`.`role_id` = `t_role`.`id`) ;
