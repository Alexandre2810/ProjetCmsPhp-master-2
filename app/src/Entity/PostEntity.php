<?php
namespace App\Entity;


class Post {
    private $id;
    private $titre;
    private $contenu;
    private $auteur;
    private $date_de_publication;
    private $date_de_modification;

    public function __construct()
    {
        // à continuer
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function getDateDePublication()
    {
        return $this->date_de_publication;
    }

    public function getDateDeModification()
    {
        return $this->date_de_modification;
    }

    public function setId()
    {
        // à continuer
    }

    public function setTitre()
    {
        // à continuer
    }

    public function setContenu()
    {
        // à continuer
    }

    public function setAuteur(){
        // à continuer
    }

    public function setDateDePublication()
    {
        // à continuer
    }

    public function setDateDeModification()
    {
        // à continuer
    }

}