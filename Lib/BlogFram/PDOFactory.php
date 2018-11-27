<?php
namespace BlogFram;

class PDOFactory
{
    public static function getMysqlConnexion()
    {
        $db = new \PDO('mysql:host=webnicolflnico.mysql.db;dbname=webnicolflnico;charset=utf8','webnicolflnico','Tekken2311');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}