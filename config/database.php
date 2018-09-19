<?php

$cleardb_url      = parse_url(getenv("mysql://bb0d02f5291e7b:08e0da38@us-cdbr-iron-east-01.cleardb.net/heroku_97b8078c6c2dcde?reconnect=true"));
$cleardb_server   = $cleardb_url["us-cdbr-iron-east-01.cleardb.net"];
$cleardb_username = $cleardb_url["bb0d02f5291e7b"];
$cleardb_password = $cleardb_url["08e0da38"];
$cleardb_db       = substr($cleardb_url["heroku_97b8078c6c2dcde"],1);

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => $cleardb_server,
    'username' => $cleardb_username,
    'password' => $cleardb_password,
    'database' => $cleardb_db,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
