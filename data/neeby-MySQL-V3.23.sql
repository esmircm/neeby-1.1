/*
Navicat MySQL Data Transfer

Source Server         : prueba
Source Server Version : 50549
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 32399
File Encoding         : 65001

Date: 2016-08-02 15:46:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for easyii_admins
-- ----------------------------
DROP TABLE IF EXISTS `easyii_admins`;
CREATE TABLE `easyii_admins` (
`admin_id`  int(11) NOT NULL AUTO_INCREMENT ,
`username`  varchar(32) NOT NULL ,
`password`  varchar(64) NOT NULL ,
`auth_key`  varchar(128) NOT NULL ,
`access_token`  varchar(128) NULL DEFAULT NULL ,
PRIMARY KEY (`admin_id`),
UNIQUE INDEX `access_token` (`access_token`)
)
TYPE=MyISAM
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of easyii_admins
-- ----------------------------
BEGIN;
INSERT INTO `easyii_admins` VALUES ('2', 'usuario', '7b41e77b72c9e317909ca4845d13766edd3dfef8', '7kWm1E5WZxvFoPybpeC4RDt8VqenLYI_', null), ('3', 'esmircm', 'd995d6f41b203062ef0ea6489a4943a75920bf9f', 'R-D03JNnZsY7zp4WxzsbZdUoL1J0ptci', null);
COMMIT;

-- ----------------------------
-- Table structure for easyii_article_categories
-- ----------------------------
DROP TABLE IF EXISTS `easyii_article_categories`;
CREATE TABLE `easyii_article_categories` (
`category_id`  int(11) NOT NULL AUTO_INCREMENT ,
`title`  varchar(128) NOT NULL ,
`image`  varchar(128) NULL DEFAULT NULL ,
`order_num`  int(11) NULL DEFAULT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
`tree`  int(11) NULL DEFAULT NULL ,
`lft`  int(11) NULL DEFAULT NULL ,
`rgt`  int(11) NULL DEFAULT NULL ,
`depth`  int(11) NULL DEFAULT NULL ,
`status`  tinyint(1) NULL DEFAULT 1 ,
PRIMARY KEY (`category_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of easyii_article_categories
-- ----------------------------
BEGIN;
INSERT INTO `easyii_article_categories` VALUES ('1', 'Articles category 1', null, '2', 'articles-category-1', '1', '1', '2', '0', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_article_items
-- ----------------------------
DROP TABLE IF EXISTS `easyii_article_items`;
CREATE TABLE `easyii_article_items` (
`item_id`  int(11) NOT NULL AUTO_INCREMENT ,
`category_id`  int(11) NULL DEFAULT NULL ,
`title`  varchar(128) NOT NULL ,
`image`  varchar(128) NULL DEFAULT NULL ,
`short`  varchar(1024) NULL DEFAULT NULL ,
`text`  text NOT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
`time`  int(11) NULL DEFAULT 0 ,
`views`  int(11) NULL DEFAULT 0 ,
`status`  tinyint(1) NULL DEFAULT 1 ,
PRIMARY KEY (`item_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of easyii_article_items
-- ----------------------------
BEGIN;
INSERT INTO `easyii_article_items` VALUES ('4', '1', 'PPPPPPPP', '', 'SASA', '<p>SASAS</p>', 'pppppppp', '1462935234', '4', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_carousel
-- ----------------------------
DROP TABLE IF EXISTS `easyii_carousel`;
CREATE TABLE `easyii_carousel` (
`carousel_id`  int(11) NOT NULL AUTO_INCREMENT ,
`image`  varchar(128) NOT NULL ,
`link`  varchar(255) NOT NULL ,
`title`  varchar(128) NULL DEFAULT NULL ,
`text`  text NULL ,
`order_num`  int(11) NULL DEFAULT NULL ,
`status`  tinyint(1) NULL DEFAULT 1 ,
PRIMARY KEY (`carousel_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=26

;

-- ----------------------------
-- Records of easyii_carousel
-- ----------------------------
BEGIN;
INSERT INTO `easyii_carousel` VALUES ('24', '/uploads/carousel/1366x768_php-source-code.jpg', '', '', 'Programación PHP, YII', '1', '1'), ('25', '/uploads/carousel/anonymous-art.jpg', '', 'Desarrolladores Anonimos', 'Esto es un texto de prueba', '2', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_catalog_categories
-- ----------------------------
DROP TABLE IF EXISTS `easyii_catalog_categories`;
CREATE TABLE `easyii_catalog_categories` (
`category_id`  int(11) NOT NULL AUTO_INCREMENT ,
`title`  varchar(128) NOT NULL ,
`image`  varchar(128) NULL DEFAULT NULL ,
`fields`  text NOT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
`tree`  int(11) NULL DEFAULT NULL ,
`lft`  int(11) NULL DEFAULT NULL ,
`rgt`  int(11) NULL DEFAULT NULL ,
`depth`  int(11) NULL DEFAULT NULL ,
`order_num`  int(11) NULL DEFAULT NULL ,
`status`  tinyint(1) NULL DEFAULT 1 ,
PRIMARY KEY (`category_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of easyii_catalog_categories
-- ----------------------------
BEGIN;
INSERT INTO `easyii_catalog_categories` VALUES ('1', 'Gadgets', null, '[{\"name\":\"brand\",\"title\":\"Brand\",\"type\":\"select\",\"options\":[\"Samsung\",\"Apple\",\"Nokia\"]},{\"name\":\"storage\",\"title\":\"Storage\",\"type\":\"string\",\"options\":\"\"},{\"name\":\"touchscreen\",\"title\":\"Touchscreen\",\"type\":\"boolean\",\"options\":\"\"},{\"name\":\"cpu\",\"title\":\"CPU cores\",\"type\":\"select\",\"options\":[\"1\",\"2\",\"4\",\"8\"]},{\"name\":\"features\",\"title\":\"Features\",\"type\":\"checkbox\",\"options\":[\"Wi-fi\",\"4G\",\"GPS\"]},{\"name\":\"color\",\"title\":\"Color\",\"type\":\"checkbox\",\"options\":[\"White\",\"Black\",\"Red\",\"Blue\"]}]', 'gadgets', '1', '1', '6', '0', null, '1'), ('2', 'Smartphones', null, '[{\"name\":\"brand\",\"title\":\"Brand\",\"type\":\"select\",\"options\":[\"Samsung\",\"Apple\",\"Nokia\"]},{\"name\":\"storage\",\"title\":\"Storage\",\"type\":\"string\",\"options\":\"\"},{\"name\":\"touchscreen\",\"title\":\"Touchscreen\",\"type\":\"boolean\",\"options\":\"\"},{\"name\":\"cpu\",\"title\":\"CPU cores\",\"type\":\"select\",\"options\":[\"1\",\"2\",\"4\",\"8\"]},{\"name\":\"features\",\"title\":\"Features\",\"type\":\"checkbox\",\"options\":[\"Wi-fi\",\"4G\",\"GPS\"]},{\"name\":\"color\",\"title\":\"Color\",\"type\":\"checkbox\",\"options\":[\"White\",\"Black\",\"Red\",\"Blue\"]}]', 'smartphones', '1', '2', '3', '1', null, '1'), ('3', 'Tablets', null, '[{\"name\":\"brand\",\"title\":\"Brand\",\"type\":\"select\",\"options\":[\"Samsung\",\"Apple\",\"Nokia\"]},{\"name\":\"storage\",\"title\":\"Storage\",\"type\":\"string\",\"options\":\"\"},{\"name\":\"touchscreen\",\"title\":\"Touchscreen\",\"type\":\"boolean\",\"options\":\"\"},{\"name\":\"cpu\",\"title\":\"CPU cores\",\"type\":\"select\",\"options\":[\"1\",\"2\",\"4\",\"8\"]},{\"name\":\"features\",\"title\":\"Features\",\"type\":\"checkbox\",\"options\":[\"Wi-fi\",\"4G\",\"GPS\"]},{\"name\":\"color\",\"title\":\"Color\",\"type\":\"checkbox\",\"options\":[\"White\",\"Black\",\"Red\",\"Blue\"]}]', 'tablets', '1', '4', '5', '1', null, '1'), ('4', 'Monos', '/uploads/catalog/php-39bcb2656a.png', '[]', 'monos', '4', '1', '2', '0', '1', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_catalog_item_data
-- ----------------------------
DROP TABLE IF EXISTS `easyii_catalog_item_data`;
CREATE TABLE `easyii_catalog_item_data` (
`data_id`  int(11) NOT NULL AUTO_INCREMENT ,
`item_id`  int(11) NULL DEFAULT NULL ,
`name`  varchar(128) NOT NULL ,
`value`  varchar(1024) NULL DEFAULT NULL ,
PRIMARY KEY (`data_id`),
INDEX `item_id_name` (`item_id`, `name`),
INDEX `value` (`value`(300))
)
TYPE=MyISAM
AUTO_INCREMENT=28

;

-- ----------------------------
-- Records of easyii_catalog_item_data
-- ----------------------------
BEGIN;
INSERT INTO `easyii_catalog_item_data` VALUES ('1', '1', 'brand', 'Nokia'), ('2', '1', 'storage', '1'), ('3', '1', 'touchscreen', '0'), ('4', '1', 'cpu', '1'), ('5', '1', 'color', 'White'), ('6', '1', 'color', 'Red'), ('7', '1', 'color', 'Blue'), ('25', '2', 'features', 'Wi-fi'), ('22', '2', 'storage', '32'), ('21', '2', 'brand', 'Samsung'), ('24', '2', 'cpu', '8'), ('23', '2', 'touchscreen', '1'), ('14', '3', 'brand', 'Apple'), ('15', '3', 'storage', '64'), ('16', '3', 'touchscreen', '1'), ('17', '3', 'cpu', '4'), ('18', '3', 'features', 'Wi-fi'), ('19', '3', 'features', '4G'), ('20', '3', 'features', 'GPS'), ('26', '2', 'features', '4G'), ('27', '2', 'features', 'GPS');
COMMIT;

-- ----------------------------
-- Table structure for easyii_catalog_items
-- ----------------------------
DROP TABLE IF EXISTS `easyii_catalog_items`;
CREATE TABLE `easyii_catalog_items` (
`item_id`  int(11) NOT NULL AUTO_INCREMENT ,
`category_id`  int(11) NULL DEFAULT NULL ,
`title`  varchar(128) NOT NULL ,
`description`  text NULL ,
`available`  int(11) NULL DEFAULT 1 ,
`price`  float NULL DEFAULT 0 ,
`discount`  int(11) NULL DEFAULT 0 ,
`data`  text NOT NULL ,
`image`  varchar(128) NULL DEFAULT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
`time`  int(11) NULL DEFAULT 0 ,
`status`  tinyint(1) NULL DEFAULT 1 ,
PRIMARY KEY (`item_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of easyii_catalog_items
-- ----------------------------
BEGIN;
INSERT INTO `easyii_catalog_items` VALUES ('1', '2', 'Nokia 3310', '<h3>The legend</h3><p>The Nokia 3310 is a GSMmobile phone announced on September 1, 2000, and released in the fourth quarter of the year, replacing the popular Nokia 3210. The phone sold extremely well, being one of the most successful phones with 126 million units sold worldwide.&nbsp;The phone has since received a cult status and is still widely acclaimed today.</p><p>The 3310 was developed at the Copenhagen Nokia site in Denmark. It is a compact and sturdy phone featuring an 84 × 48 pixel pure monochrome display. It has a lighter 115 g battery variant which has fewer features; for example the 133 g battery version has the start-up image of two hands touching while the 115 g version does not. It is a slightly rounded rectangular unit that is typically held in the palm of a hand, with the buttons operated with the thumb. The blue button is the main button for selecting options, with \"C\" button as a \"back\" or \"undo\" button. Up and down buttons are used for navigation purposes. The on/off/profile button is a stiff black button located on the top of the phone.</p>', '5', '100', '0', '{\"brand\":\"Nokia\",\"storage\":\"1\",\"touchscreen\":\"0\",\"cpu\":1,\"color\":[\"White\",\"Red\",\"Blue\"]}', '/uploads/catalog/3310.jpg', 'nokia-3310', '1462934178', '1'), ('2', '2', 'Galaxy S6', '<h3>Next is beautifully crafted</h3><p>With their slim, seamless, full metal and glass construction, the sleek, ultra thin edged Galaxy S6 and unique, dual curved Galaxy S6 edge are crafted from the finest materials.</p><p>And while they may be the thinnest smartphones we`ve ever created, when it comes to cutting-edge technology and flagship Galaxy experience, these 5.1\" QHD Super AMOLED smartphones are certainly no lightweights.</p>', '1', '1000', '10', '{\"brand\":\"Samsung\",\"storage\":\"32\",\"touchscreen\":\"1\",\"cpu\":\"8\",\"features\":[\"Wi-fi\",\"4G\",\"GPS\"]}', '/uploads/catalog/galaxy.jpg', 'galaxy-s6', '1462847778', '1'), ('3', '2', 'Iphone 6', '<h3>Next is beautifully crafted</h3><p>With their slim, seamless, full metal and glass construction, the sleek, ultra thin edged Galaxy S6 and unique, dual curved Galaxy S6 edge are crafted from the finest materials.</p><p>And while they may be the thinnest smartphones we`ve ever created, when it comes to cutting-edge technology and flagship Galaxy experience, these 5.1\" QHD Super AMOLED smartphones are certainly no lightweights.</p>', '0', '1100', '10', '{\"brand\":\"Apple\",\"storage\":\"64\",\"touchscreen\":\"1\",\"cpu\":4,\"features\":[\"Wi-fi\",\"4G\",\"GPS\"]}', '/uploads/catalog/iphone.jpg', 'iphone-6', '1462761378', '1'), ('4', '4', 'mono adidas', '<p>sadasdasd</p>', '30', '6500', '1', '{}', '/uploads/catalog/diagrama-de-clases-d552c5b21c.jpg', 'mono-adidas', '1462936620', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_faq
-- ----------------------------
DROP TABLE IF EXISTS `easyii_faq`;
CREATE TABLE `easyii_faq` (
`faq_id`  int(11) NOT NULL AUTO_INCREMENT ,
`question`  text NOT NULL ,
`answer`  text NOT NULL ,
`order_num`  int(11) NULL DEFAULT NULL ,
`status`  tinyint(1) NULL DEFAULT 1 ,
PRIMARY KEY (`faq_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of easyii_faq
-- ----------------------------
BEGIN;
INSERT INTO `easyii_faq` VALUES ('1', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?', 'But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure', '1', '1'), ('2', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum?', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta <a href=\"http://easyiicms.com/\">sunt explicabo</a>.', '2', '1'), ('3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 't enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '3', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_feedback
-- ----------------------------
DROP TABLE IF EXISTS `easyii_feedback`;
CREATE TABLE `easyii_feedback` (
`feedback_id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(64) NOT NULL ,
`email`  varchar(128) NOT NULL ,
`phone`  varchar(64) NULL DEFAULT NULL ,
`title`  varchar(128) NULL DEFAULT NULL ,
`text`  text NOT NULL ,
`answer_subject`  varchar(128) NULL DEFAULT NULL ,
`answer_text`  text NULL ,
`time`  int(11) NULL DEFAULT 0 ,
`ip`  varchar(16) NOT NULL ,
`status`  tinyint(1) NULL DEFAULT 0 ,
PRIMARY KEY (`feedback_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of easyii_feedback
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for easyii_files
-- ----------------------------
DROP TABLE IF EXISTS `easyii_files`;
CREATE TABLE `easyii_files` (
`file_id`  int(11) NOT NULL AUTO_INCREMENT ,
`title`  varchar(128) NOT NULL ,
`file`  varchar(255) NOT NULL ,
`size`  int(11) NOT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
`downloads`  int(11) NULL DEFAULT 0 ,
`time`  int(11) NULL DEFAULT 0 ,
`order_num`  int(11) NULL DEFAULT NULL ,
PRIMARY KEY (`file_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of easyii_files
-- ----------------------------
BEGIN;
INSERT INTO `easyii_files` VALUES ('1', 'Price list', '/uploads/files/example.csv', '104', 'price-list', '0', '1462934179', '1'), ('2', 'dsds', '/uploads/files/captura-de-pantalla-de-2016-03-1.png', '581990', 'dsds', '0', '1463677033', '2');
COMMIT;

-- ----------------------------
-- Table structure for easyii_gallery_categories
-- ----------------------------
DROP TABLE IF EXISTS `easyii_gallery_categories`;
CREATE TABLE `easyii_gallery_categories` (
`category_id`  int(11) NOT NULL AUTO_INCREMENT ,
`title`  varchar(128) NOT NULL ,
`image`  varchar(128) NULL DEFAULT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
`tree`  int(11) NULL DEFAULT NULL ,
`lft`  int(11) NULL DEFAULT NULL ,
`rgt`  int(11) NULL DEFAULT NULL ,
`depth`  int(11) NULL DEFAULT NULL ,
`order_num`  int(11) NULL DEFAULT NULL ,
`status`  tinyint(1) NULL DEFAULT 1 ,
PRIMARY KEY (`category_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of easyii_gallery_categories
-- ----------------------------
BEGIN;
INSERT INTO `easyii_gallery_categories` VALUES ('1', 'Album 1', '/uploads/gallery/album-1.jpg', 'album-1', '1', '1', '2', '0', '2', '1'), ('2', 'Album 2', '/uploads/gallery/album-2.jpg', 'album-2', '2', '1', '2', '0', '1', '1'), ('4', 'CAtegoria de prueba', '/uploads/gallery/puertas-y-rejas-de-seguridad-caracas-11523-MLV20045064905_022014-F.jpg', 'categoria-de-prueba', '4', '1', '2', '0', '3', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_guestbook
-- ----------------------------
DROP TABLE IF EXISTS `easyii_guestbook`;
CREATE TABLE `easyii_guestbook` (
`guestbook_id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(128) NOT NULL ,
`title`  varchar(128) NULL DEFAULT NULL ,
`text`  text NOT NULL ,
`answer`  text NULL ,
`email`  varchar(128) NULL DEFAULT NULL ,
`time`  int(11) NULL DEFAULT 0 ,
`ip`  varchar(16) NOT NULL ,
`new`  tinyint(1) NULL DEFAULT 0 ,
`status`  tinyint(1) NULL DEFAULT 0 ,
PRIMARY KEY (`guestbook_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of easyii_guestbook
-- ----------------------------
BEGIN;
INSERT INTO `easyii_guestbook` VALUES ('1', 'First user', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'CLARO VALEE', null, '1462934179', '::1', '0', '1'), ('2', 'Second user', '', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', null, '1462934179', '::1', '0', '1'), ('3', 'Third user', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'asasSSSSSSSSSSSSSSSSSSSSSSSSSSSS', null, '1462934179', '::1', '0', '0'), ('4', 'ESMIR', '', 'pero por queeeeeeeeeeeeeeeeee', 'por que siiiiiiii', 'esmircm@hotmail.com', '1462936179', '::1', '0', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_loginform
-- ----------------------------
DROP TABLE IF EXISTS `easyii_loginform`;
CREATE TABLE `easyii_loginform` (
`log_id`  int(11) NOT NULL AUTO_INCREMENT ,
`username`  varchar(128) NOT NULL ,
`password`  varchar(128) NOT NULL ,
`ip`  varchar(16) NOT NULL ,
`user_agent`  varchar(1024) NOT NULL ,
`time`  int(11) NULL DEFAULT 0 ,
`success`  tinyint(1) NULL DEFAULT 0 ,
PRIMARY KEY (`log_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=112

;

-- ----------------------------
-- Records of easyii_loginform
-- ----------------------------
BEGIN;
INSERT INTO `easyii_loginform` VALUES ('1', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1462934178', '1'), ('2', 'esmircm@gmail.com', 'cabreramartinez', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1462934485', '0'), ('3', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1462934494', '1'), ('4', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1462934582', '1'), ('5', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1462934943', '1'), ('6', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1462936285', '1'), ('7', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1462936331', '1'), ('8', 'root', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1462936361', '0'), ('9', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1462936370', '1'), ('10', 'usuario', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1462936415', '1'), ('11', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1463527006', '1'), ('12', 'root', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463528520', '0'), ('13', 'root', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463528526', '0'), ('14', 'root', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463528539', '0'), ('15', 'root', 'inter', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463528544', '0'), ('16', 'root', 'intercampeon', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463528549', '0'), ('17', 'root', 'intercampeon2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463528553', '0'), ('18', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463529291', '1'), ('19', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463529852', '1'), ('20', 'root', 'intercampeon2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463536096', '0'), ('21', 'root', 'interdelmilan', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463536108', '0'), ('22', 'root', 'interdelmilan2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463536112', '0'), ('23', 'root', 'root', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463536117', '0'), ('24', 'root', '/img/01.jpg', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463536148', '0'), ('25', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1463536152', '1'), ('26', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463536452', '1'), ('27', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463536805', '1'), ('28', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463540378', '1'), ('29', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '1463540954', '1'), ('30', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463540990', '1'), ('31', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463541333', '1'), ('32', 'usuario', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463541353', '0'), ('33', 'usuario', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463541361', '1'), ('34', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463586196', '1'), ('35', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463613959', '1'), ('36', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463664632', '1'), ('37', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1463673802', '1'), ('38', 'root', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104079', '0'), ('39', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104085', '1'), ('40', 'root', '123456', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104104', '0'), ('41', 'root', '12345', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104108', '0'), ('42', 'root', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104119', '0'), ('43', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104126', '1'), ('44', 'root', '12345', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104282', '0'), ('45', 'root', '123456', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104287', '0'), ('46', 'root', '2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104814', '0'), ('47', 'root', 'root', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464104819', '0'), ('48', 'root', '30b3c36464187a4aa04610d316665bd242dbbda7', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464105135', '0'), ('49', 'root', '12345', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.7.0', '1464105169', '0'), ('50', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464365535', '1'), ('51', 'admin', '123456', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464379534', '0'), ('52', 'root', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464379551', '0'), ('53', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464379556', '1'), ('54', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464635944', '1'), ('55', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464637035', '1'), ('56', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.63 Safari/537.36', '1464637274', '1'), ('57', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464637478', '1'), ('58', 'root', '2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464637626', '0'), ('59', 'root', 'intercampeon2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464637637', '0'), ('60', 'root', 'intercampeon', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464637642', '0'), ('61', 'root', 'interdelmilan', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464637647', '0'), ('62', 'root', 'interdelmilan2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1464637654', '0'), ('63', 'usuario', 'inter2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.63 Safari/537.36', '1464637688', '0'), ('64', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.63 Safari/537.36', '1464638620', '1'), ('65', 'admin', '123456', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468528490', '0'), ('66', 'esmircm', '123456', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468528495', '0'), ('67', 'admin', 'admin', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468528501', '0'), ('68', 'esmircm', 'intercampeon2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468528511', '0'), ('69', 'admin', 'intercampeon2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468528523', '0'), ('70', 'esmircm', 'interdelmilan', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468528532', '0'), ('71', 'root', 'intercampeon2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468529356', '0'), ('72', 'root', 'interdelmilan', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468529363', '0'), ('73', 'esmircm', 'interdelmilan', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468529374', '0'), ('74', 'esmir', 'interdelmilan', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468529512', '0'), ('75', 'esmir', '123456', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468529516', '0'), ('76', 'esmir', 'intercampeon2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468529522', '0'), ('77', 'esmir', 'cabreramartinez', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530129', '0'), ('78', 'esmir', '123456789', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530198', '0'), ('79', 'esmir', 'intercampeon', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530244', '0'), ('80', 'esmir', 'interdelmilan2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530314', '0'), ('81', 'esmir', '12345', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530329', '0'), ('82', 'esmir', 'cabreramartinez2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530356', '0'), ('83', 'esmir', 'admin', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530695', '0'), ('84', 'esmir', 'esmir', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530702', '0'), ('85', 'esmir', 'admin123456', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530716', '0'), ('86', 'esmir', 'inter', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468530818', '0'), ('87', 'esmir', 'inter_2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468591845', '0'), ('88', 'esmir', '0707_inter', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468591850', '0'), ('89', 'esmir', '2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468591876', '0'), ('90', 'esmir', 'intermilan', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468591894', '0'), ('91', 'root', 'root', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468591912', '0'), ('92', 'root', 'ROOT', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468592053', '0'), ('93', 'esmir', 'inter_2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468592443', '0'), ('94', 'esmir', 'intercampeon_2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468592461', '0'), ('95', 'esmir', 'interdelmilan_2712', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468592467', '0'), ('96', 'esmir', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36', '1468592487', '1'), ('97', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36', '1468592517', '1'), ('98', 'esmircm', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468592654', '1'), ('99', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36', '1468592779', '1'), ('100', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36', '1468592828', '1');
INSERT INTO `easyii_loginform` VALUES ('101', 'esmircm', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468592884', '1'), ('102', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:38.0) Gecko/20100101 Firefox/38.0 Iceweasel/38.8.0', '1468592998', '1'), ('103', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0', '1468849594', '1'), ('104', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0', '1469804464', '1'), ('105', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0', '1469807010', '1'), ('106', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0', '1469836753', '1'), ('107', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0', '1470059208', '1'), ('108', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36', '1470060084', '1'), ('109', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36', '1470083688', '1'), ('110', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0', '1470083717', '1'), ('111', 'root', '******', '::1', 'Mozilla/5.0 (X11; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0', '1470149956', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_migration
-- ----------------------------
DROP TABLE IF EXISTS `easyii_migration`;
CREATE TABLE `easyii_migration` (
`version`  varchar(180) NOT NULL ,
`apply_time`  int(11) NULL DEFAULT NULL ,
PRIMARY KEY (`version`)
)
TYPE=InnoDB

;

-- ----------------------------
-- Records of easyii_migration
-- ----------------------------
BEGIN;
INSERT INTO `easyii_migration` VALUES ('m000000_000000_base', '1462934176'), ('m000000_000000_install', '1462934178');
COMMIT;

-- ----------------------------
-- Table structure for easyii_modules
-- ----------------------------
DROP TABLE IF EXISTS `easyii_modules`;
CREATE TABLE `easyii_modules` (
`module_id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(64) NOT NULL ,
`class`  varchar(128) NOT NULL ,
`title`  varchar(128) NOT NULL ,
`icon`  varchar(32) NOT NULL ,
`settings`  text NOT NULL ,
`notice`  int(11) NULL DEFAULT 0 ,
`order_num`  int(11) NULL DEFAULT NULL ,
`status`  tinyint(1) NULL DEFAULT 0 ,
PRIMARY KEY (`module_id`),
UNIQUE INDEX `name` (`name`)
)
TYPE=MyISAM
AUTO_INCREMENT=14

;

-- ----------------------------
-- Records of easyii_modules
-- ----------------------------
BEGIN;
INSERT INTO `easyii_modules` VALUES ('1', 'article', 'yii\\easyii\\modules\\article\\ArticleModule', 'Artículos', 'pencil', '{\"categoryThumb\":true,\"articleThumb\":true,\"enablePhotos\":true,\"enableShort\":true,\"shortMaxLength\":255,\"enableTags\":true,\"itemsInFolder\":false}', '0', '65', '1'), ('2', 'carousel', 'yii\\easyii\\modules\\carousel\\CarouselModule', 'Carousel', 'picture', '{\"enableTitle\":true,\"enableText\":true}', '0', '40', '1'), ('3', 'catalog', 'yii\\easyii\\modules\\catalog\\CatalogModule', 'Catalogo', 'list-alt', '{\"categoryThumb\":true,\"itemsInFolder\":false,\"itemThumb\":true,\"itemPhotos\":true,\"itemDescription\":true,\"itemSale\":true}', '0', '100', '1'), ('4', 'faq', 'yii\\easyii\\modules\\faq\\FaqModule', 'FAQ', 'question-sign', '[]', '0', '45', '1'), ('5', 'feedback', 'yii\\easyii\\modules\\feedback\\FeedbackModule', 'Feedback', 'earphone', '{\"mailAdminOnNewFeedback\":true,\"subjectOnNewFeedback\":\"New feedback\",\"templateOnNewFeedback\":\"@easyii\\/modules\\/feedback\\/mail\\/en\\/new_feedback\",\"answerTemplate\":\"@easyii\\/modules\\/feedback\\/mail\\/en\\/answer\",\"answerSubject\":\"Answer on your feedback message\",\"answerHeader\":\"Hello,\",\"answerFooter\":\"Best regards.\",\"enableTitle\":false,\"enablePhone\":true,\"enableCaptcha\":false}', '0', '60', '1'), ('6', 'file', 'yii\\easyii\\modules\\file\\FileModule', 'Archivos', 'floppy-disk', '[]', '0', '30', '1'), ('7', 'gallery', 'yii\\easyii\\modules\\gallery\\GalleryModule', 'Galería', 'camera', '{\"categoryThumb\":true,\"itemsInFolder\":false}', '0', '90', '1'), ('8', 'guestbook', 'yii\\easyii\\modules\\guestbook\\GuestbookModule', 'Libro de Visitas', 'book', '{\"enableTitle\":false,\"enableEmail\":true,\"preModerate\":false,\"enableCaptcha\":false,\"mailAdminOnNewPost\":true,\"subjectOnNewPost\":\"New message in the guestbook.\",\"templateOnNewPost\":\"@easyii\\/modules\\/guestbook\\/mail\\/en\\/new_post\",\"frontendGuestbookRoute\":\"\\/guestbook\",\"subjectNotifyUser\":\"Your post in the guestbook answered\",\"templateNotifyUser\":\"@easyii\\/modules\\/guestbook\\/mail\\/en\\/notify_user\"}', '0', '80', '1'), ('9', 'news', 'yii\\easyii\\modules\\news\\NewsModule', 'Noticias', 'bullhorn', '{\"enableThumb\":true,\"enablePhotos\":true,\"enableShort\":true,\"shortMaxLength\":256,\"enableTags\":true}', '0', '70', '1'), ('10', 'page', 'yii\\easyii\\modules\\page\\PageModule', 'Páginas', 'file', '[]', '0', '50', '1'), ('11', 'shopcart', 'yii\\easyii\\modules\\shopcart\\ShopcartModule', 'Ordenes', 'shopping-cart', '{\"mailAdminOnNewOrder\":true,\"subjectOnNewOrder\":\"New order\",\"templateOnNewOrder\":\"@easyii\\/modules\\/shopcart\\/mail\\/en\\/new_order\",\"subjectNotifyUser\":\"Your order status changed\",\"templateNotifyUser\":\"@easyii\\/modules\\/shopcart\\/mail\\/en\\/notify_user\",\"frontendShopcartRoute\":\"\\/shopcart\\/order\",\"enablePhone\":true,\"enableEmail\":true}', '0', '120', '1'), ('12', 'subscribe', 'yii\\easyii\\modules\\subscribe\\SubscribeModule', 'E-mail suscriptos', 'envelope', '[]', '0', '10', '1'), ('13', 'text', 'yii\\easyii\\modules\\text\\TextModule', 'Bloques de Texto', 'font', '[]', '0', '20', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_news
-- ----------------------------
DROP TABLE IF EXISTS `easyii_news`;
CREATE TABLE `easyii_news` (
`news_id`  int(11) NOT NULL AUTO_INCREMENT ,
`title`  varchar(128) NOT NULL ,
`image`  varchar(128) NULL DEFAULT NULL ,
`short`  varchar(1024) NULL DEFAULT NULL ,
`text`  text NOT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
`time`  int(11) NULL DEFAULT 0 ,
`views`  int(11) NULL DEFAULT 0 ,
`status`  tinyint(1) NULL DEFAULT 1 ,
PRIMARY KEY (`news_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=6

;

-- ----------------------------
-- Records of easyii_news
-- ----------------------------
BEGIN;
INSERT INTO `easyii_news` VALUES ('5', 'aksdnalskdn', '/uploads/news/slide-05.jpg', 'a.djañwdoj', '<p>esqwelwadmadasmd</p><iframe src=\"//www.youtube.com/embed/w74Zjj47HzI\" allowfullscreen=\"\" frameborder=\"0\" height=\"281\" width=\"500\"></iframe>', 'aksdnalskdn', '1469836942', '0', '1'), ('4', 'SOY ESMIR', '', 'NOOOOOOOOOOOOOOOOO', '<p>JAJAJAAAAAAAA</p>', 'soy-esmir', '1462935158', '0', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_pages
-- ----------------------------
DROP TABLE IF EXISTS `easyii_pages`;
CREATE TABLE `easyii_pages` (
`page_id`  int(11) NOT NULL AUTO_INCREMENT ,
`title`  varchar(128) NOT NULL ,
`text`  text NOT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
PRIMARY KEY (`page_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=12

;

-- ----------------------------
-- Records of easyii_pages
-- ----------------------------
BEGIN;
INSERT INTO `easyii_pages` VALUES ('1', 'Inicio', '<p>BIenvenidos al demo</p>', 'page-index'), ('2', 'Shop', '', 'page-shop'), ('3', 'Shop search', '', 'page-shop-search'), ('4', 'Shopping cart', '', 'page-shopcart'), ('5', 'Order created', '<p>Your order successfully created. Our manager will contact you as soon as possible.</p>', 'page-shopcart-success'), ('6', 'News', '', 'page-news'), ('7', 'Articles', '', 'page-articles'), ('8', 'Galería', '', 'page-gallery'), ('9', 'Guestbook', '', 'page-guestbook'), ('10', 'FAQ', '', 'page-faq'), ('11', 'Contacto', '<p><strong>Address</strong>: Dominican republic, Santo Domingo, Some street 123</p><p><strong>ZIP</strong>: 123456</p><p><strong>Phone</strong>: +1 234 56-78</p><p><strong>E-mail</strong>: demo@example.com</p>', 'page-contact');
COMMIT;

-- ----------------------------
-- Table structure for easyii_photos
-- ----------------------------
DROP TABLE IF EXISTS `easyii_photos`;
CREATE TABLE `easyii_photos` (
`photo_id`  int(11) NOT NULL AUTO_INCREMENT ,
`class`  varchar(128) NOT NULL ,
`item_id`  int(11) NOT NULL ,
`image`  varchar(128) NOT NULL ,
`description`  varchar(1024) NOT NULL ,
`order_num`  int(11) NOT NULL ,
PRIMARY KEY (`photo_id`),
INDEX `model_item` (`class`, `item_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=43

;

-- ----------------------------
-- Records of easyii_photos
-- ----------------------------
BEGIN;
INSERT INTO `easyii_photos` VALUES ('1', 'yii\\easyii\\modules\\catalog\\models\\Item', '1', '/uploads/photos/3310-1.jpg', '', '1'), ('2', 'yii\\easyii\\modules\\catalog\\models\\Item', '1', '/uploads/photos/3310-2.jpg', '', '2'), ('3', 'yii\\easyii\\modules\\catalog\\models\\Item', '2', '/uploads/photos/galaxy-1.jpg', '', '3'), ('4', 'yii\\easyii\\modules\\catalog\\models\\Item', '2', '/uploads/photos/galaxy-2.jpg', '', '4'), ('5', 'yii\\easyii\\modules\\catalog\\models\\Item', '2', '/uploads/photos/galaxy-3.jpg', '', '5'), ('6', 'yii\\easyii\\modules\\catalog\\models\\Item', '2', '/uploads/photos/galaxy-4.jpg', '', '6'), ('7', 'yii\\easyii\\modules\\catalog\\models\\Item', '3', '/uploads/photos/iphone-1.jpg', '', '7'), ('8', 'yii\\easyii\\modules\\catalog\\models\\Item', '3', '/uploads/photos/iphone-2.jpg', '', '8'), ('9', 'yii\\easyii\\modules\\catalog\\models\\Item', '3', '/uploads/photos/iphone-3.jpg', '', '9'), ('10', 'yii\\easyii\\modules\\catalog\\models\\Item', '3', '/uploads/photos/iphone-4.jpg', '', '10'), ('28', 'yii\\easyii\\modules\\article\\models\\Item', '4', '/uploads/photos/puertas-y-rejas-de-seguridad-car-e13f319b66.jpg', 'SDS', '28'), ('29', 'yii\\easyii\\modules\\catalog\\models\\Item', '4', '/uploads/photos/captura-de-pantalla-de-2016-03-1-7cc08eb92d.png', 'dasdasd', '29'), ('42', 'yii\\easyii\\modules\\gallery\\models\\Category', '1', '/uploads/photos/MONTAJE MATRIZ DE OPINION SOBRE SAQUEOS.jpg', '', '34'), ('39', 'yii\\easyii\\modules\\gallery\\models\\Category', '1', '/uploads/photos/base@2x.png', 'esta', '31'), ('41', 'yii\\easyii\\modules\\gallery\\models\\Category', '4', '/uploads/photos/Captura de pantalla de 2016-07-14 14:20:37.png', 'prueba de descripcion', '33'), ('40', 'yii\\easyii\\modules\\gallery\\models\\Category', '2', '/uploads/photos/puertas-y-rejas-de-seguridad-caracas-11518-MLV20045064991_022014-F.jpg', 'sii', '32');
COMMIT;

-- ----------------------------
-- Table structure for easyii_seotext
-- ----------------------------
DROP TABLE IF EXISTS `easyii_seotext`;
CREATE TABLE `easyii_seotext` (
`seotext_id`  int(11) NOT NULL AUTO_INCREMENT ,
`class`  varchar(128) NOT NULL ,
`item_id`  int(11) NOT NULL ,
`h1`  varchar(128) NULL DEFAULT NULL ,
`title`  varchar(128) NULL DEFAULT NULL ,
`keywords`  varchar(128) NULL DEFAULT NULL ,
`description`  varchar(128) NULL DEFAULT NULL ,
PRIMARY KEY (`seotext_id`),
UNIQUE INDEX `model_item` (`class`, `item_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=28

;

-- ----------------------------
-- Records of easyii_seotext
-- ----------------------------
BEGIN;
INSERT INTO `easyii_seotext` VALUES ('1', 'yii\\easyii\\modules\\page\\models\\Page', '1', '', 'EasyiiCMS demo', '', 'yii2, easyii, admin'), ('2', 'yii\\easyii\\modules\\page\\models\\Page', '2', 'Shop categories', 'Extended shop title', '', ''), ('3', 'yii\\easyii\\modules\\page\\models\\Page', '3', 'Shop search results', 'Extended shop search title', '', ''), ('4', 'yii\\easyii\\modules\\page\\models\\Page', '4', 'Shopping cart H1', 'Extended shopping cart title', '', ''), ('5', 'yii\\easyii\\modules\\page\\models\\Page', '5', 'Success', 'Extended order success title', '', ''), ('6', 'yii\\easyii\\modules\\page\\models\\Page', '6', 'News H1', 'Extended news title', '', ''), ('7', 'yii\\easyii\\modules\\page\\models\\Page', '7', 'Articles H1', 'Extended articles title', '', ''), ('8', 'yii\\easyii\\modules\\page\\models\\Page', '8', 'Photo gallery', 'Extended gallery title', '', ''), ('9', 'yii\\easyii\\modules\\page\\models\\Page', '9', 'Guestbook H1', 'Extended guestbook title', '', ''), ('10', 'yii\\easyii\\modules\\page\\models\\Page', '10', 'Frequently Asked Question', 'Extended faq title', '', ''), ('11', 'yii\\easyii\\modules\\page\\models\\Page', '11', 'Contact us', 'Extended contact title', '', ''), ('12', 'yii\\easyii\\modules\\catalog\\models\\Category', '2', 'Smartphones H1', 'Extended smartphones title', '', ''), ('13', 'yii\\easyii\\modules\\catalog\\models\\Category', '3', 'Tablets H1', 'Extended tablets title', '', ''), ('14', 'yii\\easyii\\modules\\catalog\\models\\Item', '1', 'Nokia 3310', '', '', ''), ('15', 'yii\\easyii\\modules\\catalog\\models\\Item', '2', 'Samsung Galaxy S6', '', '', ''), ('16', 'yii\\easyii\\modules\\catalog\\models\\Item', '3', 'Apple Iphone 6', '', '', ''), ('20', 'yii\\easyii\\modules\\article\\models\\Category', '1', 'Articles category 1 H1', 'Extended category 1 title', '', ''), ('26', 'yii\\easyii\\modules\\gallery\\models\\Category', '1', 'Album 1 H1', 'Extended Album 1 title', '', ''), ('27', 'yii\\easyii\\modules\\gallery\\models\\Category', '2', 'Album 2 H1', 'Extended Album 2 title', '', '');
COMMIT;

-- ----------------------------
-- Table structure for easyii_settings
-- ----------------------------
DROP TABLE IF EXISTS `easyii_settings`;
CREATE TABLE `easyii_settings` (
`setting_id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(64) NOT NULL ,
`title`  varchar(128) NOT NULL ,
`value`  varchar(1024) NOT NULL ,
`visibility`  tinyint(1) NULL DEFAULT 0 ,
PRIMARY KEY (`setting_id`),
UNIQUE INDEX `name` (`name`)
)
TYPE=MyISAM
AUTO_INCREMENT=11

;

-- ----------------------------
-- Records of easyii_settings
-- ----------------------------
BEGIN;
INSERT INTO `easyii_settings` VALUES ('1', 'easyii_version', 'EasyiiCMS version', '0.9', '0'), ('2', 'recaptcha_key', 'ReCaptcha key', '6LcDlx8TAAAAAO9ZfjFSBX-ifFvkpMCrG2F-Q3Ne', '1'), ('3', 'password_salt', 'Password salt', 'Jm7r_kEBbpccYKANXTewj7uNNYSUwrgO', '0'), ('4', 'root_auth_key', 'Root authorization key', '1yI0zBG2k9inOGQx02pk85Z-siiczYvl', '0'), ('5', 'root_password', 'Root password', '30b3c36464187a4aa04610d316665bd242dbbda7', '1'), ('6', 'auth_time', 'Auth time', '86400', '1'), ('7', 'robot_email', 'Robot E-mail', 'esmircm@gmail.com', '1'), ('8', 'admin_email', 'Admin E-mail', 'esmircm@gmail.com', '2'), ('9', 'recaptcha_secret', 'ReCaptcha secret', '6LcDlx8TAAAAAIc1K-pgE-0Uc-srkbqbCbiS8eDW', '1'), ('10', 'toolbar_position', 'Frontend toolbar position (\"top\" or \"bottom\")', 'top', '1');
COMMIT;

-- ----------------------------
-- Table structure for easyii_shopcart_goods
-- ----------------------------
DROP TABLE IF EXISTS `easyii_shopcart_goods`;
CREATE TABLE `easyii_shopcart_goods` (
`good_id`  int(11) NOT NULL AUTO_INCREMENT ,
`order_id`  int(11) NULL DEFAULT NULL ,
`item_id`  int(11) NULL DEFAULT NULL ,
`count`  int(11) NULL DEFAULT NULL ,
`options`  varchar(255) NOT NULL ,
`price`  float NULL DEFAULT 0 ,
`discount`  int(11) NULL DEFAULT 0 ,
PRIMARY KEY (`good_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of easyii_shopcart_goods
-- ----------------------------
BEGIN;
INSERT INTO `easyii_shopcart_goods` VALUES ('2', '2', '1', '1', 'White', '100', '0');
COMMIT;

-- ----------------------------
-- Table structure for easyii_shopcart_orders
-- ----------------------------
DROP TABLE IF EXISTS `easyii_shopcart_orders`;
CREATE TABLE `easyii_shopcart_orders` (
`order_id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(64) NOT NULL ,
`address`  varchar(255) NOT NULL ,
`phone`  varchar(64) NOT NULL ,
`email`  varchar(128) NOT NULL ,
`comment`  varchar(1024) NOT NULL ,
`remark`  varchar(1024) NOT NULL ,
`access_token`  varchar(32) NOT NULL ,
`ip`  varchar(16) NOT NULL ,
`time`  int(11) NULL DEFAULT 0 ,
`new`  tinyint(1) NULL DEFAULT 0 ,
`status`  tinyint(1) NULL DEFAULT 0 ,
PRIMARY KEY (`order_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of easyii_shopcart_orders
-- ----------------------------
BEGIN;
INSERT INTO `easyii_shopcart_orders` VALUES ('2', 'esmir', 'caracas', '04129985218', 'esmircm@gmail.com', 'lo deseeeo', 'claro que sii', 'eApQzwKIfdFdmP6gR6aDIi88UU8bYFBe', '::1', '1462936434', '0', '7');
COMMIT;

-- ----------------------------
-- Table structure for easyii_subscribe_history
-- ----------------------------
DROP TABLE IF EXISTS `easyii_subscribe_history`;
CREATE TABLE `easyii_subscribe_history` (
`history_id`  int(11) NOT NULL AUTO_INCREMENT ,
`subject`  varchar(128) NOT NULL ,
`body`  text NOT NULL ,
`sent`  int(11) NULL DEFAULT 0 ,
`time`  int(11) NULL DEFAULT 0 ,
PRIMARY KEY (`history_id`)
)
TYPE=MyISAM
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of easyii_subscribe_history
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for easyii_subscribe_subscribers
-- ----------------------------
DROP TABLE IF EXISTS `easyii_subscribe_subscribers`;
CREATE TABLE `easyii_subscribe_subscribers` (
`subscriber_id`  int(11) NOT NULL AUTO_INCREMENT ,
`email`  varchar(128) NOT NULL ,
`ip`  varchar(16) NOT NULL ,
`time`  int(11) NULL DEFAULT 0 ,
PRIMARY KEY (`subscriber_id`),
UNIQUE INDEX `email` (`email`)
)
TYPE=MyISAM
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of easyii_subscribe_subscribers
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for easyii_tags
-- ----------------------------
DROP TABLE IF EXISTS `easyii_tags`;
CREATE TABLE `easyii_tags` (
`tag_id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(128) NOT NULL ,
`frequency`  int(11) NULL DEFAULT 0 ,
PRIMARY KEY (`tag_id`),
UNIQUE INDEX `name` (`name`)
)
TYPE=MyISAM
AUTO_INCREMENT=14

;

-- ----------------------------
-- Records of easyii_tags
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for easyii_tags_assign
-- ----------------------------
DROP TABLE IF EXISTS `easyii_tags_assign`;
CREATE TABLE `easyii_tags_assign` (
`class`  varchar(128) NOT NULL ,
`item_id`  int(11) NOT NULL ,
`tag_id`  int(11) NOT NULL ,
INDEX `class` (`class`),
INDEX `item_tag` (`item_id`, `tag_id`)
)
TYPE=MyISAM

;

-- ----------------------------
-- Records of easyii_tags_assign
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for easyii_texts
-- ----------------------------
DROP TABLE IF EXISTS `easyii_texts`;
CREATE TABLE `easyii_texts` (
`text_id`  int(11) NOT NULL AUTO_INCREMENT ,
`text`  text NOT NULL ,
`slug`  varchar(128) NULL DEFAULT NULL ,
PRIMARY KEY (`text_id`),
UNIQUE INDEX `slug` (`slug`)
)
TYPE=MyISAM
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of easyii_texts
-- ----------------------------
BEGIN;
INSERT INTO `easyii_texts` VALUES ('1', 'Bienvenidos a', 'index-welcome-title'), ('2', 'NEEBY', 'neeby'), ('3', 'SS', 'texto'), ('4', 'Desarrolladores web con <strong> años de experiencia</strong> y con <strong>gente extraordinaria</strong>', 'mensaje-index');
COMMIT;

-- ----------------------------
-- Auto increment value for easyii_admins
-- ----------------------------
ALTER TABLE `easyii_admins` AUTO_INCREMENT=4;

-- ----------------------------
-- Auto increment value for easyii_article_categories
-- ----------------------------
ALTER TABLE `easyii_article_categories` AUTO_INCREMENT=5;

-- ----------------------------
-- Auto increment value for easyii_article_items
-- ----------------------------
ALTER TABLE `easyii_article_items` AUTO_INCREMENT=5;

-- ----------------------------
-- Auto increment value for easyii_carousel
-- ----------------------------
ALTER TABLE `easyii_carousel` AUTO_INCREMENT=26;

-- ----------------------------
-- Auto increment value for easyii_catalog_categories
-- ----------------------------
ALTER TABLE `easyii_catalog_categories` AUTO_INCREMENT=5;

-- ----------------------------
-- Auto increment value for easyii_catalog_item_data
-- ----------------------------
ALTER TABLE `easyii_catalog_item_data` AUTO_INCREMENT=28;

-- ----------------------------
-- Auto increment value for easyii_catalog_items
-- ----------------------------
ALTER TABLE `easyii_catalog_items` AUTO_INCREMENT=5;

-- ----------------------------
-- Auto increment value for easyii_faq
-- ----------------------------
ALTER TABLE `easyii_faq` AUTO_INCREMENT=4;

-- ----------------------------
-- Auto increment value for easyii_feedback
-- ----------------------------
ALTER TABLE `easyii_feedback` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for easyii_files
-- ----------------------------
ALTER TABLE `easyii_files` AUTO_INCREMENT=3;

-- ----------------------------
-- Auto increment value for easyii_gallery_categories
-- ----------------------------
ALTER TABLE `easyii_gallery_categories` AUTO_INCREMENT=5;

-- ----------------------------
-- Auto increment value for easyii_guestbook
-- ----------------------------
ALTER TABLE `easyii_guestbook` AUTO_INCREMENT=5;

-- ----------------------------
-- Auto increment value for easyii_loginform
-- ----------------------------
ALTER TABLE `easyii_loginform` AUTO_INCREMENT=112;

-- ----------------------------
-- Auto increment value for easyii_modules
-- ----------------------------
ALTER TABLE `easyii_modules` AUTO_INCREMENT=14;

-- ----------------------------
-- Auto increment value for easyii_news
-- ----------------------------
ALTER TABLE `easyii_news` AUTO_INCREMENT=6;

-- ----------------------------
-- Auto increment value for easyii_pages
-- ----------------------------
ALTER TABLE `easyii_pages` AUTO_INCREMENT=12;

-- ----------------------------
-- Auto increment value for easyii_photos
-- ----------------------------
ALTER TABLE `easyii_photos` AUTO_INCREMENT=43;

-- ----------------------------
-- Auto increment value for easyii_seotext
-- ----------------------------
ALTER TABLE `easyii_seotext` AUTO_INCREMENT=28;

-- ----------------------------
-- Auto increment value for easyii_settings
-- ----------------------------
ALTER TABLE `easyii_settings` AUTO_INCREMENT=11;

-- ----------------------------
-- Auto increment value for easyii_shopcart_goods
-- ----------------------------
ALTER TABLE `easyii_shopcart_goods` AUTO_INCREMENT=3;

-- ----------------------------
-- Auto increment value for easyii_shopcart_orders
-- ----------------------------
ALTER TABLE `easyii_shopcart_orders` AUTO_INCREMENT=3;

-- ----------------------------
-- Auto increment value for easyii_subscribe_history
-- ----------------------------
ALTER TABLE `easyii_subscribe_history` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for easyii_subscribe_subscribers
-- ----------------------------
ALTER TABLE `easyii_subscribe_subscribers` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for easyii_tags
-- ----------------------------
ALTER TABLE `easyii_tags` AUTO_INCREMENT=14;

-- ----------------------------
-- Auto increment value for easyii_texts
-- ----------------------------
ALTER TABLE `easyii_texts` AUTO_INCREMENT=5;
