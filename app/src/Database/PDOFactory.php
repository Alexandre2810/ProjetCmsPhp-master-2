<?php

namespace App\Database;

use Exception;
use PDO;

class PDOFactory
{
    public static function getMysqlConnexion()
    {
        try{
            $bdd = new PDO('mysql:host=db;dbname=blog_cms', 'root', 'jordan');
            return $bdd;
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
}
