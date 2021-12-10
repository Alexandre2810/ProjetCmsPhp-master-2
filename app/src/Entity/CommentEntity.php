<?php
namespace App\Entity;

use Model\CommentManager;
use Model\UserManager;

class Comment
{
    private $id;
    private $auteur;
    private $date_de_publication;
    private $contenu;
    private $post_id;
    private $user_id;

    public function __construct(int $post_id, int $user_id)
    {
        // à continuer
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function getDateDePublication()
    {
        return new \DateTime($this->date_de_publication);
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function getPostId()
    {
        return $this->post_id;
    }

    public function setId()
    {
        // à continuer
    }

    public function setAuteur()
    {
        // à continuer
    }

    public function setDateDePublication()
    {
        // à continuer
    }

    public function setContenu()
    {
        // à continuer
    }

    public function setPostId()
    {
        // à continuer
    }
}