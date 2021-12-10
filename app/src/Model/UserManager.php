<?php

namespace App\Model;

require_once './Model/BaseManager.php';


use PDO;

class UserManager extends BaseManager
{
    public function getAllUsers()
    {
        $query = $this->db->query('SELECT * FROM users');
        $query->execute();
        $tableauUsers = [];
        $tableauUsers['users'] = [];

        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $user = [
                "id" => $id,
                "password" => $password,
                "username" => $username,
                "admin" => $admin
            ];

            $tableauUsers['users'][] = $user;
        }

        return $tableauUsers;
    }

    public function getUserById($id)
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id=:id;');
        $query->bindParam(":id", $id);
        $query->execute();
        $user = [];
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $user = [
                "id" => $id,
                "password" => $password,
                "username" => $username,
                "admin" => $admin
            ];
        }

        return $user;
    }

    public function createUser(string $password,bool $admin=NULL,string $username)
    {
        $query = $this->db->prepare('INSERT INTO (password, admin, username) VALUES (:password, :admin, :username)');
        $query->execute(array(
            'password' => $password,
            'admin' => $admin,
            'username' => $username,
        ));

    }

    public function updateUser(string $email,string $password,bool $admin,string $username,int $phone = null)
    {
        $query = $this->db->prepare('UPDATE users SET password=:password, admin=:admin, username=:username');
        $query->execute(array(
            'password' => $password,
            'admin' => $admin,
            'username' => $username,
        ));
    }

    public function deleteUser($id_user)
    {
        $query = $this->db->prepare('DELETE FROM users WHERE id=:id');
        $query->bindParam(":id", $id_user);
        $query->execute();

    }
}