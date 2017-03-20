CREATE TABLE `es_region` (
  `gseq` int(11) NOT NULL DEFAULT '0' COMMENT '시컨스',
  `gid` varchar(100) DEFAULT NULL COMMENT '지역그룹명',
  `name` varchar(100) DEFAULT NULL COMMENT '지역명',
  `zip_code` varchar(10) DEFAULT NULL COMMENT '우편번호',
  `sido` varchar(100) DEFAULT NULL COMMENT '시도명',
  `addr` varchar(500) DEFAULT NULL COMMENT '세부주소',
  `reg_date` datetime DEFAULT NULL COMMENT '등록일',
  `status` int(11) DEFAULT '0' COMMENT '상태 0:off 1:on 9:del',
  PRIMARY KEY (`gseq`),
  UNIQUE KEY `region_uk` (`gid`)
) ENGINE=Aria DEFAULT CHARSET=utf8 PAGE_CHECKSUM=1;

-- ALTER TABLE es_region CONVERT TO CHARACTER SET utf8;
