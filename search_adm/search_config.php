<?php

$WEB_ROOT=realpath("../");
$BASE_PATH = !empty($_SERVER['DOCUMENT_ROOT']) ? "${_SERVER['DOCUMENT_ROOT']}" : "${WEB_ROOT}";

use Elasticsearch\ClientBuilder;

require $BASE_PATH.'/vendor/autoload.php';
$hosts = [
    '192.168.56.101:9200',  // IP + Port
];


$connectionPool = '\Elasticsearch\ConnectionPool\StaticNoPingConnectionPool';

$clientBuilder = ClientBuilder::create();   // Instantiate a new ClientBuilder
$clientBuilder->setHosts($hosts);           // Set the hosts
$clientBuilder->setRetries(2);           // Set the hosts
$clientBuilder->setConnectionPool($connectionPool);           // Set the hosts
$client = $clientBuilder->build();    

?>
