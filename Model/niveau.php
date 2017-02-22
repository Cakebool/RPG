<?php
class level{

    protected $nom;
    protected $prenom;
    protected $pseudo;
    protected $descriptif;
    protected $email;

    function __construct( $nom,$prenom,$pseudo,$descriptif,$email)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pseudo = $pseudo;
        $this->descriptif = $descriptif;
        $this->email = $email;
    }

//NOM//
    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
//prenom//
    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
//pseudo//
    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }

//descriptif//
    public function getDescriptif(){
        return $this->descriptif;
    }

    public function setDescriptif($descriptif){
        $this->descriptif = $descriptif;
    }
//email
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}