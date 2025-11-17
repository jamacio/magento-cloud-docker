<?php
return [
    'remote_storage' => [
        'driver' => 'file'
    ],
    'backend' => [
        'frontName' => 'admin'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'db' => [
        'connection' => [
            'default' => [
                'host' => 'db.magento2.docker',
                'dbname' => 'magento2',
                'username' => 'magento2',
                'password' => 'magento2',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => 'base64RLvt94/TFdjXeg3MNOXnZO0Zi/HboeBJbZQ+7d8c+y4='
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'redis.magento2.docker',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '2',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '4',
            'max_concurrency' => '50',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000'
        ]
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'bt30uF491VC1JTIVz9E63IDcISdoNUr3'
        ],
        'frontend' => [
            'default' => [
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'redis.magento2.docker',
                    'database' => '0',
                    'port' => '6379'
                ],
                'id_prefix' => 'f53_'
            ],
            'page_cache' => [
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'redis.magento2.docker',
                    'port' => '6379',
                    'database' => '1',
                    'compress_data' => '0'
                ],
                'id_prefix' => 'f53_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'config' => [
        'async' => 0
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
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'localhost',
    ],
    'install' => [
        'date' => 'Mon, 17 Nov 2025 02:33:10 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'graphql' => [
                    'cors_allowed_origins' => '*',
                    'cors_allowed_methods' => 'GET, POST, OPTIONS',
                    'cors_allowed_headers' => '*',
                    'cors_max_age' => '86400',
                    'cors_allow_credentials' => 1
                ],
                'unsecure' => [
                    'base_url' => 'http://localhost/',
                    'base_media_url' => 'http://localhost/media/'
                ],
                'secure' => [
                    'base_url' => 'https://localhost/',
                    'base_media_url' => 'https://localhost/media/',
                    'use_in_frontend' => '1',
                    'use_in_adminhtml' => '1',
                ],
                'cookie' => [
                    'cookie_domain' => 'localhost'
                ]
            ],
            'catalog' => [
                'search' => [
                    'engine' => 'opensearch',
                    'opensearch_server_hostname' => 'opensearch.magento2.docker',
                    'opensearch_server_port' => '9200',
                    'opensearch_index_prefix' => 'magento2',
                    'opensearch_enable_auth' => '0',
                    'opensearch_server_timeout' => '15'
                ]
            ]
        ]
    ],
    'http_cache_hosts' =>
    [
        'host' => 'localhost',
        'port' => '80'
    ]
];
