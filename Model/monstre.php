<?php
class Monstre

{

    protected $idMonstre;
    protected $nom;
    protected $hp;
    protected $defense;
    protected $attaque;
    protected $vitesse;





    function __construct( $idMonstre,$nom,$hp,$defense,$vitesse)
    {
        $this->idMonstre = $idMonstre;
        $this->nom = $nom;
        $this->hp = $hp;
        $this->defense = $defense;
        $this->vitesse = $vitesse;
    }

//ID//
    public function getIdMonstre(){
        return $this->idMonstre;
    }

    public function setIdMonstre($idMonstre){
        $this->idMonstre= $idMonstre;
    }
//nom//
    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
//hp//
    public function getHp(){
        return $this->hp;
    }

    public function setHp($hp){
        $this->hp = $hp;
    }

//defense//
    public function getDefense(){
        return $this->defense;
    }

    public function setDefense($defense){
        $this->defense = $defense;
    }
//attaque//
    public function getAttaque(){
        return $this->attaque;
    }

    public function setAttaque($attaque){
        $this->attaque = $attaque;
    }


}