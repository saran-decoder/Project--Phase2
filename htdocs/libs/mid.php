<?php

include_once 'scripts/Database.php';

function getConfig($key, $default=null)
{
    global $config_web;
    $config_path = __DIR__."../../../configs/getconnections.json";
    $config_web = file_get_contents($config_path);
    $arr = json_decode($config_web, true);
    if (isset($arr[$key])) {
        return $arr[$key];
    } else {
        return $default;
    }
}

function load_temp($name)
{
    $script = $_SERVER['DOCUMENT_ROOT'] . getConfig('root_path') . "_templates/$name.php";
    include $script;
}