<?php
return [
    'backend' => [
        'frontName' => 'admin_5hc36c'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'NKramjYLlZWtPKsKWjHSti48KrfoRKLS'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '030_'
            ],
            'page_cache' => [
                'id_prefix' => '030_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '7d032aa2b056af0c6bd06113c4ff3b5d'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'hockt',
                'username' => 'hockt',
                'password' => 'hockt',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'hockt-test.simi'
    ],
    'install' => [
        'date' => 'Thu, 07 Dec 2023 07:27:59 +0000'
    ],
    'system' => [
        'default' => [
            'catalog' => [
                'search' => [
                    'engine' => 'elasticsearch8',
                    'elasticsearch8_server_hostname' => 'localhost',
                    'elasticsearch8_server_port' => '9200'
                ]
            ]
        ]
    ]
];
