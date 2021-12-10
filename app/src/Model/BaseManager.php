<?php
namespace App\Model;
require_once './Database/PDOFactory.php';
use App\Database\PDOFactory;


abstract class BaseManager
{
    protected $db;

    public function __construct()
    {
        $this->db = PDOFactory::getMysqlConnexion();
    }
}