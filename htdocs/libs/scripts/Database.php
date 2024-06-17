<?php

class Database
{
    public static $conn = null;

    public static function mkConnection()
    {
        if (Database::$conn == null)
        {
            $server = getConfig('server');
            $username = getConfig('user');
            $password = getConfig('pass');
            $DBN = getConfig('db');

            $connection = new mysqli($server, $username, $password, $DBN);

            if ($connection->connect_error)
            {
                die("Connection Faild: " . $connection->connect_error);
            } else {
                Database::$conn = $connection;
                return Database::$conn;
            }
        } else {
            return Database::$conn;
        }
    }
}