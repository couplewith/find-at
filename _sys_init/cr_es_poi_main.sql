

CREATE TABLE `es_poi_main` (
  `pid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `region_gid` varchar(20) DEFAULT NULL COMMENT '지역그룹명',
  `region_name` varchar(50) DEFAULT NULL COMMENT '지역명',
  `region_sido` varchar(200) DEFAULT NULL COMMENT '시도명',
  `region_addr` varchar(300) DEFAULT NULL COMMENT '세부주소',
  `poi_name` varchar(100) DEFAULT NULL COMMENT '지점명',
  `poi_desc` varchar(500) DEFAULT NULL COMMENT '지점 설명',
  `poi_link` varchar(500) DEFAULT NULL COMMENT 'URL link',
  `map_type` int(11) DEFAULT '1' COMMENT '구글지도 1 다음지도 2',
  `map_id` int(11) DEFAULT '0' COMMENT '사용자지도',
  `map_level` int(11) DEFAULT '15' COMMENT '지도 확대 크기 0~10',
  `geo_lat` float DEFAULT NULL COMMENT 'WGS84 Latitude',
  `geo_long` float DEFAULT NULL COMMENT 'WGS84 Longitude',
  `reg_date` timestamp NULL DEFAULT NULL COMMENT '등록일',
  `mod_date` timestamp NULL DEFAULT NULL COMMENT '수정일',
  `status` int(11) DEFAULT NULL COMMENT '상태',
  PRIMARY KEY (`pid`)
) ENGINE=Aria AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 PAGE_CHECKSUM=1;

-- ALTER TABLE es_poi_main CONVERT TO CHARACTER SET utf8;
