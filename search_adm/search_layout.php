<?php

$BASE_PATH= isset($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : './';
//echo "$BASE_PATH : $BASE_PATH >>";


use Elasticsearch\ClientBuilder;

require $BASE_PATH.'/vendor/autoload.php';
/**
$hosts = [
     [
        'host' => '192.168.56.101',
        'port' => '9200',
        'scheme' => 'https',
        'user' => 'username',
        'pass' => 'password!#$?*abc'
    ],
    '192.168.56.101:9200',  // IP + Port
    'localhost:9200'        // Domain + Port
];
**/
$hosts = [
    '192.168.56.101:9200',  // IP + Port
    'localhost:9200'        // Domain + Port
];


$connectionPool = '\Elasticsearch\ConnectionPool\StaticNoPingConnectionPool';

$clientBuilder = ClientBuilder::create();   // Instantiate a new ClientBuilder
$clientBuilder->setHosts($hosts);           // Set the hosts
$clientBuilder->setRetries(2);           // Set the hosts
$clientBuilder->setConnectionPool($connectionPool);           // Set the hosts
$client = $clientBuilder->build();    


$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id',
    'body' => ['testField' => 'abc']
];

$response = $client->index($params);
print_r($response);



?>
