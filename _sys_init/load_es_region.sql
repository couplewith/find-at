

INSERT INTO es_region (gid, NAME, sido, addr )
   (SELECT region_gid, region_name, region_sido,region_addr FROM es_poi_main)
  ON DUPLICATE KEY
    UPDATE  STATUS = 1;

