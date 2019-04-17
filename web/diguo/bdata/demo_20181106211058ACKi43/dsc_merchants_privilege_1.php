<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_privilege`;");
E_C("CREATE TABLE `dsc_merchants_privilege` (
  `action_list` text NOT NULL,
  `grade_id` tinyint(10) unsigned NOT NULL,
  KEY `grade_id` (`grade_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_privilege` values(0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c666565646261636b5f707269762c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c746f7069635f6d616e6167652c736e617463685f6d616e6167652c61645f6d616e6167652c676966745f6d616e6167652c626f6e75735f6d616e6167652c61756374696f6e2c67726f75705f62792c6661766f757261626c652c77686f6c655f73616c652c7061636b6167655f6d616e6167652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f74686572,'0');");
E_D("replace into `dsc_merchants_privilege` values(0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c666565646261636b5f707269762c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f74686572,'10');");
E_D("replace into `dsc_merchants_privilege` values(0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c666565646261636b5f707269762c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f74686572,'12');");
E_D("replace into `dsc_merchants_privilege` values(0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c666565646261636b5f707269762c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f74686572,'13');");
E_D("replace into `dsc_merchants_privilege` values(0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c666565646261636b5f707269762c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c7a635f70726f6a6563745f6d616e6167652c7a635f63617465676f72795f6d616e6167652c7a635f696e69746961746f725f6d616e616765,'14');");

require("../../inc/footer.php");
?>