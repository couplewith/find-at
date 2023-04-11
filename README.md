# find-at  (FIND@)

Requirement
 - Php
 - ElasticSearch for location data search
 - using google map api  (maps.googleapis.com)


#Structure (https://github.com/couplewith/find-at)
 - search_adm : create Elastic Search index layout
 - user_guide : CodeIgniter 3.1.3 documentation for search
 - geo_sample : sample page of GEO data at seoul with google map 
 - grid_sample: not using
 
 -_sys_init : create database initial scripts
 - make_index.sh : make index.html with html files wintin sub directories
 - system : database drivers
 - test : database connection test for data add
 
 
 # examples
 - "/geo_sample/geo_seoul_multi.html",
 - "/geo_sample/geo_seoul_bounce.html",
 - "/geo_sample/geo_seoul.html",
 - "/grid_sample/gridtest.html" 


# create database 
 - cr_es_poi_main.sql  : create ES POI data
 - cr_es_region.sql    : create Es region data
 - load_es_region.sql  : create DB region data 
 - php_composer.sh
