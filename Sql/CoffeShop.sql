
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `price` int(10) unsigned NOT NULL, 
  `weight` int(10) unsigned NOT NULL,
  `categories` varchar(100) NOT NULL,
  `Stock` int(10) unsigned NOT NULL,
  `created_on` datetime NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for `sales`
-- ----------------------------
DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_on` datetime NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales
-- ----------------------------

-- ----------------------------
-- Table structure for `realized_sales`
-- ----------------------------
DROP TABLE IF EXISTS `realized_sales`;
CREATE TABLE `realized_sales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sales_id` unsigned NOT NULL,
  `product_id` unsigned NOT NULL,
  `amount` unsigned NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`product_id`) REFERENCES products (`id`) ON DELETE CASCADE,
  FOREIGN KEY (`sales_id`) REFERENCES sales (`id`) ON DELETE CASCADE,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of realized_sales
-- ----------------------------
