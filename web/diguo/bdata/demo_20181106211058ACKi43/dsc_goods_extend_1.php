<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_extend`;");
E_C("CREATE TABLE `dsc_goods_extend` (
  `extend_id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `is_reality` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否是正品0否1是',
  `is_return` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持包退服务0否1是',
  `is_fast` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否闪速送货0否1是',
  `width` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `depth` varchar(50) NOT NULL,
  `origincountry` varchar(50) NOT NULL,
  `originplace` varchar(50) NOT NULL,
  `assemblycountry` varchar(50) NOT NULL,
  `barcodetype` varchar(50) NOT NULL,
  `catena` varchar(50) NOT NULL,
  `isbasicunit` varchar(50) NOT NULL,
  `packagetype` varchar(50) NOT NULL,
  `grossweight` varchar(50) NOT NULL,
  `netweight` varchar(50) NOT NULL,
  `netcontent` varchar(50) NOT NULL,
  `licensenum` varchar(50) NOT NULL,
  `healthpermitnum` varchar(50) NOT NULL,
  PRIMARY KEY (`extend_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_reality` (`is_reality`),
  KEY `is_return` (`is_return`),
  KEY `is_fast` (`is_fast`)
) ENGINE=MyISAM AUTO_INCREMENT=357 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_extend` values('1','685','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('2','684','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('3','683','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('4','682','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('5','681','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('6','680','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('7','679','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('8','678','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('9','677','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('10','676','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('11','675','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('12','674','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('13','673','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('14','672','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('15','671','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('16','670','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('17','669','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('18','668','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('19','667','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('20','666','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('21','665','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('22','664','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('23','663','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('24','662','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('25','661','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('26','660','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('27','659','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('28','658','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('29','657','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('30','656','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('31','655','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('32','654','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('33','653','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('34','652','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('35','651','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('36','650','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('37','649','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('38','648','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('39','647','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('40','646','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('41','645','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('42','644','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('43','643','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('44','642','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('45','641','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('46','640','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('47','639','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('48','638','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('49','637','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('50','636','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('51','635','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('52','634','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('53','633','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('54','632','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('55','631','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('56','629','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('57','628','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('58','630','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('59','627','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('60','626','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('61','624','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('62','623','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('63','622','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('64','621','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('65','620','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('66','619','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('67','618','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('68','617','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('69','616','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('70','615','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('71','687','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('72','688','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('73','689','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('74','690','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('75','691','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('76','692','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('77','693','1','1','1','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('78','694','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('79','695','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('80','696','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('81','697','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('82','698','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('83','625','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('84','699','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('85','700','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('86','701','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('87','702','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('88','703','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('89','704','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('90','705','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('91','706','1','1','1','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('92','707','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('93','708','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('94','709','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('95','710','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('96','711','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('97','712','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('98','713','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('99','714','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('100','715','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('101','716','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('102','717','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('103','718','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('104','719','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('105','720','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('106','721','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('107','722','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('108','723','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('109','724','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('110','725','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('111','726','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('112','727','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('113','728','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('114','729','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('115','730','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('116','731','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('117','732','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('118','733','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('119','734','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('120','735','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('121','736','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('122','737','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('123','738','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('124','739','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('125','740','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('126','741','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('127','742','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('128','743','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('129','744','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('130','745','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('131','746','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('132','747','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('133','748','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('134','749','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('135','750','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('136','751','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('137','752','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('138','753','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('139','754','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('140','755','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('141','756','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('142','757','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('143','758','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('144','759','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('145','760','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('146','761','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('147','762','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('148','763','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('149','764','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('150','765','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('151','766','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('152','767','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('153','768','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('154','769','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('155','770','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('156','771','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('157','772','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('158','773','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('159','774','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('160','775','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('161','776','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('162','777','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('163','778','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('164','779','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('165','780','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('166','781','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('167','782','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('168','783','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('169','784','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('170','785','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('171','786','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('172','787','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('173','788','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('174','789','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('175','790','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('176','791','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('177','792','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('178','793','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('179','794','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('180','795','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('181','796','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('182','797','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('183','798','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('184','799','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('185','800','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('186','801','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('187','802','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('188','803','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('189','804','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('190','805','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('191','806','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('192','807','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('193','808','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('194','809','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('195','810','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('196','811','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('197','812','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('198','813','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('199','814','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('200','815','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('201','816','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('202','817','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('203','818','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('204','819','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('205','820','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('206','821','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('207','822','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('208','823','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('209','824','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('210','825','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('211','826','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('212','827','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('213','828','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('214','829','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('215','830','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('216','831','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('217','832','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('218','833','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('219','834','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('220','835','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('221','836','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('222','837','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('223','838','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('224','839','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('225','840','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('226','841','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('227','842','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('228','843','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('229','844','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('230','845','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('231','846','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('232','847','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('233','848','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('234','849','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('235','850','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('236','851','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('237','852','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('238','853','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('239','854','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('240','855','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('241','856','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('242','857','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('243','858','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('244','859','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('245','860','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('246','861','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('247','862','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('248','863','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('249','864','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('250','865','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('251','866','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('252','867','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('253','868','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('254','869','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('255','870','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('256','871','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('257','872','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('258','873','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('259','874','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('260','875','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('261','876','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('262','877','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('263','878','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('264','879','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('265','880','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('266','881','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('267','882','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('268','883','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('269','884','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('270','885','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('271','886','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('272','887','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('273','888','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('274','889','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('275','890','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('276','891','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('277','892','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('278','893','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('279','894','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('280','895','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('281','896','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('282','897','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('283','898','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('284','899','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('285','900','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('287','902','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('288','903','1','1','1','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('346','904','1','1','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('347','905','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('348','906','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('349','907','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('350','908','1','1','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('351','909','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('352','910','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('353','911','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('354','912','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('355','913','0','0','0','','','','','','','','','0','','','','','','');");
E_D("replace into `dsc_goods_extend` values('356','914','0','0','0','','','','','','','','','0','','','','','','');");

require("../../inc/footer.php");
?>