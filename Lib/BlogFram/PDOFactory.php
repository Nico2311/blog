<?php
namespace BlogFram;

class PDOFactory
{
    public static function getMysqlConnexion()
    {
        $db = new \PDO('mysql:host=db737563455.db.1and1.com;dbname=db737563455;charset=utf8','dbo737563455','Tekken$2311');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}