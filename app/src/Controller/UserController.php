<?php

namespace App\Controller;

use App\Model\UserManager;

class UserController extends BaseController
{
    public function executeIndex()
    {
        include './View/connexion.php';
    }

    public function executeShowUsers(){
        $manager = new UserManager();
        $content = $manager->getAllUsers();

        $this->renderJson($content);

        echo 'Hello';
    }

    public function executeLoginUser()
    {
        $user = (new UserManager($this->getDB()))->getUserById($_POST['username']);

        if(password_verify($_GET['password'], $user->getPassword())){
            $createUser = $this->UserManager->creatUser ;

            include '../View/admin.php';
        }
    }
}


        //$create_user = $user->createUser(); 
