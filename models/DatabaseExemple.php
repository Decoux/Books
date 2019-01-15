<?php 

class Database
{
    //connecting setting

    const HOST = "",
        DBNAME = "",
        LOGIN = "",
        PWD = "";

    static public function DB()
    {
        try {
            $db = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DBNAME, self::LOGIN, self::PWD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

    }

}