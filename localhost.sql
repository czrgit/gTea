-- Adminers 1.0.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `company` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `company`;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `admin_name` varchar(50) DEFAULT NULL COMMENT '管理员账号',
  `admin_pass` varchar(50) DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(2,	'admin',	'root'),
(3,	'陈志荣',	'root');

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(50) DEFAULT NULL COMMENT '文章标题',
  `comefrom` varchar(20) DEFAULT NULL COMMENT '来源',
  `pubdate` varchar(20) DEFAULT NULL COMMENT '发布日期',
  `keywords` text COMMENT '关键字',
  `description` text COMMENT '描述',
  `content` text COMMENT '内容',
  `posid` varchar(50) DEFAULT NULL COMMENT '推荐位',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `article` (`id`, `title`, `comefrom`, `pubdate`, `keywords`, `description`, `content`, `posid`) VALUES
(9,	'科普贴：绿茶可以分为几类？',	'本站',	'2017年12月12日',	'',	'',	'<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	无论是生产量还是出口量，绿茶都绝对有资格称得上茶叶家族中的大户。而说到中国的绿茶品种，那更是庞大，分类的方式也很多，今天我们依照绿茶的制作方式来一一为大家介绍。\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	<strong>晒青绿茶</strong>\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	指的是鲜叶经过杀青、揉捻后利用太阳光晒干的绿茶，通常日光干燥的茶叶含水量会略高于其他干燥方式的茶叶。\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	晒青绿茶大部分会就地销售，部分再加工成压制茶后内销、边销或侨销，常见的有滇青、川青、黔青等。\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>蒸青绿茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		以蒸汽将茶鲜叶蒸软，然后揉捻、干燥而成的绿茶被称为蒸青绿茶。蒸青的绿茶通常有三绿——“色绿、汤绿、叶绿”。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		蒸青绿茶在唐宋时比较盛行，当时蒸青制法还经佛教途径传入日本，而日本目前仍沿用这种制茶方法，比如日本盛行的抹茶便是蒸青绿茶中的一种。国内比较出名的蒸青绿茶当数湖北的恩施玉露。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>炒青绿茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		指鲜叶经过杀青、揉捻，再通过炒制干燥的绿茶。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		炒青的过程，其实很像不加油盐地炒菜，这菜便是茶鲜叶。将锅烧得很热，然后投放一定量的鲜叶，手掌当锅铲，通过各种“翻、抖、抛、压…”等手法，使茶叶干燥、为茶叶固形。不同的手法，能塑造不同的茶叶外形。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		炒青绿茶通常外形光滑、紧结，香气高扬明显。大家所热爱的西湖龙井就是常见的炒青绿茶。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>烘青绿茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		指鲜叶经过杀青、揉捻，再烘干的绿茶。烘青的绿茶因为不像炒青要不停翻动，因此茶叶的条索保持完整，色泽多为绿润。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		常见的烘青绿茶有黄山毛峰、六安瓜片、太平猴魁、太湖翠竹等，另外烘青绿茶也常用于制作茉莉花茶。\r\n	</p>\r\n</p>',	'setindex,settop'),
(10,	'手把手教你如何用碗泡茶',	'本站',	'2017年12月12日',	'',	'',	'<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	你知道吗?碗除了装饭盛汤外，还可以用来泡茶，称为碗泡法，并且还有一套专门的冲泡体系。\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	说到碗泡法，首先得说说茶碗。这种碗状的茶具在宋代达到使用的顶峰，为了追求点茶的视觉极致，宋代人开始研究烧制各式各样的茶碗，保存到今日的都价值连城。但事实上，如果你愿意，甚至可以用家里普通的碗来泡茶，等你练熟了手，再收一两个自己中意的茶碗放在家里面，时不时泡上一大碗和家人、朋友一起喝。\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	碗泡法对器具需求不高，主要靠的是一碗、一勺、一双筷。大致泡法是先将适量的茶叶放入茶碗中，添汤，待茶，再用茶勺分杯饮用。看似简单，不过要泡好也并不容易，下面这两点就难住了不少人。\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		因为茶碗开口比较大，散热又快，茶汤的质量完全得靠经验把握，而这个经验就是时间与温度的拿捏，全靠自己勤学苦练。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		不过这里有个小窍门可以分享，每次分茶之后用香筷按住茶叶，将余汤滤干净后再重新添水，以免茶汤变浓变涩。当然如果你对茶的把握程度非常高，那么可以不用滤出余汤，相反每次余留三分之一或四分之一的茶汤在碗里，直接加热水浸泡下一泡，这样泡茶的动作会行云流水一气呵成。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n			即便到了分汤的时候，茶汤也是在热水中不停的浸泡着，手脚太慢的话会让第一泡和最后一泡变成两个味道，手脚太快又容易搅浑茶汤。再来分汤是要靠茶勺一瓢一瓢地舀进去，如果执勺之手不稳，不停抖动，桌子上都会溅满茶汤，实在不雅。\r\n		</p>\r\n		<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n			为了避免这样尴尬的场面，第一是要用到合适的茶勺，二是分汤过程中尽量手臂保持水平，用手腕的力气将茶汤“转”进杯子里，三是茶勺里茶汤不要太满，出碗时可以在碗口轻轻撇一下，防止茶勺底部沾着摇摇欲坠的水滴。\r\n		</p>\r\n		<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n			盖碗泡茶技术难度大，紫砂壶泡很容易将茶叶闷坏，碗泡法操作相对简单，不易闷馊，还可以很直观地欣赏茶叶舒展以及观察茶汤。由于碗的空间开放，茶叶在碗中比盖碗或者紫砂壶能更好展开，在自由空间中形成的茶汤会显得更加柔顺自然。\r\n		</p>\r\n		<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n			但碗泡法也有缺点，出汤慢，水温下降快，茶气容易散失，外形细碎，不耐久浸的茶类就不适合这种泡法，例如红碎茶。一般碗泡法里常常会用到的乌龙茶，它在热水中慢慢舒展的样子极其符合碗泡的观赏性。泡完之后，可以用香筷把叶底夹出来，细细观赏，别有乐趣。\r\n		</p>\r\n&nbsp;\r\n	</p>\r\n</p>',	'setindex'),
(11,	'七种错误的饮茶方式 你中招了吗？',	'本站',	'2017年12月12日',	'',	'',	'<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	茶虽是健康饮料，但也并不是万能的，并且如果错误地饮茶，依然会影响到身体的健康。\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	<strong>饮久泡茶</strong>\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	任何品类的茶叶都不宜放在水中浸泡过久。因为久泡后的茶汤浓度过高，或者有一些不易溶于水的物质也会浸出，对身体产生不好的影响。所以，就算是再好的茶，泡茶时也最好即泡即饮，且茶汤应与茶叶分开。\r\n</p>\r\n<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>饮隔夜茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		其实这个问题就像“隔夜饭能不能吃”一样，就算能吃，滋味也不会如人意。冲泡过的茶叶久置后多半滋生、繁殖大量的细菌，如同腐坏的食物一样对肠胃会造成刺激，引发炎症。 确切来说，放置了一段时间的茶都不建议喝。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>饮串味茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		串味茶是指茶叶在存放时混入了其他的味道。茶叶的气味吸附很强，在有异味的环境里容易吸附异味，这样的茶叶本身品饮价值就不大，尤其是在吸附了有毒的气味之后，比如油漆、樟脑、冰箱综合味等，长期饮用会对呼吸道造成伤害，还会让身体有一些过敏反应。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		所以，饮茶之前一定要仔细检查茶样是否有串味迹象。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>饮冷茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		茶宜温热而饮，冷茶有滞寒、聚痰之弊，长期饮用会降低肠胃免疫力，激发湿寒等症。尤其是有风湿骨痛、生理痛、痛风、消化道慢性疾病、胃炎、肠炎、偏头痛、咽炎或免疫力低下的就千万别喝冷茶。另外，对于体质较差的女性同胞们来说，更要注意。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>饮浓茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		浓茶含有大量有刺激性的咖啡因、茶碱等，饮量过多会可导致失眠、头痛、耳鸣、心脏不适并伤及肠胃。我国民间流传的《饮茶诀》中也谈到了“淡茶温饮最养人”。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		茶圈中有不少就爱喝浓茶的“重口味”茶客，若不是身体足够硬朗，还是少喝为妙。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>饮烫茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		太烫的茶水对人的口腔、咽喉、食道和胃刺激较强，而茶一般都是用高温的水冲泡的，并且很多老茶客还特别偏爱这一口“烫茶”。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		据国外研究显示，入口的饮品若是超过62℃水，较易损伤胃壁，还会进而导致出现胃病的病症，甚至有可能导致口底癌的发生。所以，以后还是静心等待茶水温度稍稍冷却一些再饮用吧。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		<strong>空腹饮茶</strong>\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		空腹饮茶会影响肺腑，刺激脾胃，进而使人食欲不振，消化不良。尤其是平时不常喝茶的人，如果空腹饮用过多、过浓的茶，很容易引起“茶醉”，即心慌、头昏、手脚无力、心神恍惚等不良症状。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		如果出现茶醉，一定要马上吃东西、含糖果或喝糖水，能起到缓解作用。\r\n	</p>\r\n	<p style=\"font-family:Verdana, Arial;text-indent:2em;color:#333333;font-size:14px;background-color:#FFFFFF;\">\r\n		但凡食品类目，终归都是要讲究一个“度”的。茶是健康饮料，但既不包治百病，也不是谁都能喝的，比如有严重神经衰弱、胃溃疡胃炎的患者或者孕妇还是不要喝茶。\r\n	</p>\r\n</p>',	'setindex');

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(50) DEFAULT NULL COMMENT '网站标题rn',
  `site_url` varchar(50) DEFAULT NULL COMMENT '网站地址',
  `site_logo` varchar(100) DEFAULT NULL,
  `site_keywords` text COMMENT '网站关键字',
  `site_description` text COMMENT '网站描述',
  `site_copyright` varchar(100) DEFAULT NULL COMMENT '版权信息',
  `company_name` varchar(50) DEFAULT NULL COMMENT '公司名称',
  `company_phone` varchar(20) DEFAULT NULL COMMENT '公司联系电话',
  `company_fax` varchar(20) DEFAULT NULL,
  `company_email` varchar(30) DEFAULT NULL COMMENT '公司电子邮箱',
  `company_weixin` varchar(30) DEFAULT NULL COMMENT '微信',
  `company_ewm` varchar(100) DEFAULT NULL COMMENT '公司二维码',
  `company_address` varchar(50) DEFAULT NULL COMMENT '公司地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `config` (`id`, `site_title`, `site_url`, `site_logo`, `site_keywords`, `site_description`, `site_copyright`, `company_name`, `company_phone`, `company_fax`, `company_email`, `company_weixin`, `company_ewm`, `company_address`) VALUES
(1,	'古道茶香',	'http://www.gdcx.com',	'/web/admin/kindeditor/attached/image/20171206/20171206064125_58378.png',	'sfdfddfsfdsa',	'fdsdsdfdsa',	'Copyright &copy;陈志荣 2017-2018 All Rights Reserved.',	'广东创新科技公司',	'110-110-110-110',	'131413141314',	'1350488130@qq.com',	'13692478981',	'/web/admin/kindeditor/attached/image/20171206/20171206064139_54953.png',	'东莞市厚街镇学府路');

DROP TABLE IF EXISTS `friend`;
CREATE TABLE `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL COMMENT '标题',
  `url` varchar(50) DEFAULT NULL COMMENT '链接地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `friend` (`id`, `title`, `url`) VALUES
(1,	'国学文章网',	'www.gxwz.com');

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '留言标题',
  `pubdate` varchar(50) DEFAULT NULL COMMENT '留言时间',
  `name` varchar(30) DEFAULT NULL COMMENT '称呼',
  `tel` varchar(20) DEFAULT NULL COMMENT '手机号码',
  `qq` varchar(15) CHARACTER SET utf32 DEFAULT NULL COMMENT 'qq',
  `email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `content` text COMMENT '留言内容',
  `deal` varchar(5) DEFAULT '否' COMMENT '是否处理',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `guestbook` (`id`, `title`, `pubdate`, `name`, `tel`, `qq`, `email`, `content`, `deal`) VALUES
(9,	'fdsfd',	'2017-12-06',	'sdfds',	'fdsfs',	'dfdsfs',	'fsfs',	'dfsf',	'是');

DROP TABLE IF EXISTS `produce`;
CREATE TABLE `produce` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(50) DEFAULT NULL COMMENT '产品标题',
  `comefrom` varchar(20) DEFAULT NULL COMMENT '来源',
  `pubdate` varchar(20) DEFAULT NULL COMMENT '发布日期',
  `thumbnail` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `keywords` text COMMENT '关键字',
  `description` text COMMENT '描述',
  `content` text COMMENT '内容',
  `posid` varchar(50) DEFAULT NULL COMMENT '推荐位',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `produce` (`id`, `title`, `comefrom`, `pubdate`, `thumbnail`, `keywords`, `description`, `content`, `posid`) VALUES
(3,	'231',	'本站',	'2017年12月03日',	'/web/admin/kindeditor/attached/image/20171205/20171205115335_95424.jpg',	'23',	'323',	'322',	'setindex'),
(4,	'sfsa',	'本站',	'2017年12月06日',	'/web/admin/kindeditor/attached/image/20171205/20171205135717_37155.jpg',	'fsfsa',	'fsasaaaaaaaaaaaaa',	'sfasf',	'setindex');

DROP TABLE IF EXISTS `qq`;
CREATE TABLE `qq` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(30) DEFAULT NULL COMMENT '标题',
  `qqnum` varchar(15) DEFAULT NULL COMMENT 'QQ号码',
  `truename` varchar(20) DEFAULT NULL COMMENT '客服姓名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `qq` (`id`, `title`, `qqnum`, `truename`) VALUES
(3,	'小羽',	'134546498888',	'小羽'),
(4,	'小陆',	'121234546666',	'小陆');

DROP TABLE IF EXISTS `single`;
CREATE TABLE `single` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `comefrom` varchar(20) DEFAULT NULL COMMENT '来源',
  `pubdate` varchar(20) DEFAULT NULL COMMENT '发布日期',
  `keywords` text COMMENT '关键字',
  `description` text COMMENT '描述',
  `content` text COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `single` (`id`, `title`, `comefrom`, `pubdate`, `keywords`, `description`, `content`) VALUES
(4,	'sfsf',	'本站',	'2017年11月30日',	'sfda',	'safasdfads',	'safddddddddddddd'),
(5,	'45546',	'本站',	'2017年11月30日',	'',	'',	''),
(6,	'999999',	'本站',	'2017年11月30日',	'',	'',	''),
(7,	'00000000',	'本站',	'2017年11月30日',	'',	'',	''),
(8,	'r324224',	'本站',	'2017年12月01日',	'',	'',	''),
(9,	'2234',	'本站',	'2017年12月01日',	'rtttttty',	'rrrrrrrrrrrrrrrrrrrr',	'rrrrrrrrrrrrrrrrrrrrrt');

DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `slide` (`id`, `title`, `thumbnail`, `link`, `orderid`) VALUES
(2,	'1',	'/web/admin/kindeditor/attached/image/20171203/20171203125239_28259.jpg',	'111',	11),
(3,	'12',	'/web/admin/kindeditor/attached/image/20171203/20171203124804_90590.jpg',	'',	2);

-- 2017-12-12 05:58:27
