<?php

class Web
{
    public static function webInit()
    {
        global $config_web;
        $config_path = __DIR__."../../../configs/getconnections.json";
        $config_web = file_get_contents($config_path);
        Database::mkConnection();
    }
}