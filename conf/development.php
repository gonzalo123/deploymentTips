<?php
return array(
    'ENVIRON' => 'DEVELOPMENT',
    'DB'      => array(
        'MAIN' => array(
            'dsn'      => 'pgsql:host=127.0.0.1;port=5432;dbname=dev_dbname',
            'username' => 'devel_username',
            'password' => 'devel_password',
            'options'  => array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
            )
        )
    )
);