<?php

include_once 'scripts/Database.php';
include_once 'scripts/Web.php';

$web = new Web;

function getConfig($key, $default=null)
{
    global $con_web;
    $arr = json_decode($con_web, true);
    if (isset($arr[$key])) {
        return $arr[$key];
    } else {
        return $default;
    }
}

function load_temp($name)
{
    return $_SERVER['DOCUMENT_ROOT'] . getConfig('root_path') . "_templates/$name.php";
}