<?php
return array(
    'ENVIRON' => 'PRODUCTION',
    'DB'      => array(
        'MAIN' => array(
            'dsn'      => 'pgsql:host=xxx.xxx.xxx.xxx;port=5432;dbname=prod_dbname',
            'username' => 'prod_username',
            'password' => 'prod_password',
            'options'  => array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
            )
        )
    )
);