<?php
class level{

    protected $idlevel;
    protected $salles;
    protected $coffres;
    protected $monstres;
    protected $heros;
    protected $portes;

    function __construct( $idlevel,$salles,$coffres,$monstres,$heros,$portes)
    {
        $this->idlevel = $idlevel;
        $this->salles = $salles;
        $this->coffres = $coffres;
        $this->monstres = $monstres;
        $this->heros = $heros;
        $this->portes = $portes;

    }

//NOM//
    public function getIdlevel(){
        return $this->idlevel;
    }

    public function setIdlevel($idlevel){
        $this->idlevel = $idlevel;
    }
//prenom//
    public function getSalles(){
        return $this->salles;
    }

    public function setSalles($salles){
        $this->salles = $salles;
    }
//pseudo//
    public function getCoffres(){
        return $this->coffres;
    }

    public function setCoffres($coffres){
        $this->coffres = $coffres;
    }

//descriptif//
    public function getMonstre(){
        return $this->monstres;
    }

    public function setMonstre($monstre){
        $this->monstre = $monstre;
    }
//email
    public function getHeros(){
        return $this->heros;
    }

    public function setHeros($heros){
        $this->heros = $heros;
    }

    public function getPortes(){
        return $this->portes;
    }
    public function setPortes($portes){
        $this->portes = $portes;
    }
}