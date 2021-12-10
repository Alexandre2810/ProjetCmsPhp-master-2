<?php
namespace App\Entity;


class User {
    private $id;
    private $password;
    private $username;
    private $admin;

    public function __construct()
    {
        // à continuer
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function isAdmin()
    {
        return $this->admin;
    }
}