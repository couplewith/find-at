<?php

require_once "search_config.php";


function create_index($client, $index_name){
     $params = [
         'index' => "$index_name"
     ];
     print_r($params);
     // Create the index
     // $response = $client->indices()->delete($params);
     $response = $client->indices()->create($params);

     return $response;
}

function create_mapping($client, $mappings){
    $params = [
        'index' => "$index_name",
        'body' => [
            'mappings' => [
                'my_type' => [
                    '_source' => [
                        'enabled' => true
                    ],
                    'properties' => [
                        'region_gid' => [
                            'type' => 'string',
                            'analyzer' => 'not_analyzed'
                        ],
                        'region_name' => [
                            'type' => 'string',
                            'analyzer' => 'standard'
                        ],
                        'region_sido' => [
                            'type' => 'string',
                            'analyzer' => 'standard'
                        ],
                        'region_addr' => [
                            'type' => 'string',
                            'analyzer' => 'standard'
                        ],
                        'poi_name' => [
                            'type' => 'string',
                            'analyzer' => 'standard'
                        ],
                        'poi_desc' => [
                            'type' => 'string',
                            'analyzer' => 'standard'
                        ],
                        'geo_lat' => [
                            'type' => 'string',
                            'analyzer' => 'standard'
                        ],
                        'geo_long' => [
                            'type' => 'string',
                            'analyzer' => 'standard'
                        ],
                        'mod_date' => [
                            'type' => 'string',
                            'analyzer' => 'not_analyzed',
                        ],
                        'reg_date' => [
                            'type' => 'string',
                            'analyzer' => 'not_analyzed'
                        ],
                        'status' => [
                            'type' => 'string',
                            'analyzer' => 'not_analyzed'
                        ],
                    ]
                ]
            ]
        ]
    ];

     // Create the index
     $response = $client->indices()->create($params);

     return $response;
}

function search_data($client,$index_name){
     $params = [
         'index' => 'my_index'
     ];

     // Create the index
     $response = $client->indices()->create($indexParams);

     return $response;
}

$response = create_index($client,"test_idx1");
print_r($response);

?>
