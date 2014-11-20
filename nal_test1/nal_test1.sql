SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `fullname` varchar(200) NOT NULL,
  `is_active` tinyint(4) DEFAULT '0',
  `level` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

insert into `tbl_user` values('1','admin','21232f297a57a5a743894a0e4a801fc3','Administrator','0','1');

SET FOREIGN_KEY_CHECKS = 1;
