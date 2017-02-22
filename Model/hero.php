<?php

class Hero extends Entity{

    protected $idHero;
    protected $nom;
    protected $classe;
    protected $hp;
    protected $defense;
    protected $vitesse;
    protected $attaque;
    protected $magie;
    protected $fortune;

    function __construct($idHero, $nom,$classe,$hp,$defense,$vitesse,$attaque,$magie,$fortune)
    {
        $this->idHero = null;
        $this->nom = $nom;
        $this->classe = $classe;
        $this->hp = $hp;
        $this->defense = $defense;
        $this->vitesse = $vitesse;
        $this->attaque = $attaque;
        $this->magie = $magie;
        $this->fortune = $fortune;
    }
//NOM
    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
//CLASSE
public function getClasse(){
    return $this->classe;
}

public function setClasse($classe){
    $this->classe = $classe;
}
//HP
public function getHp(){
    return $this->hp;
}

public function setHp($hp){
    $this->hp = $hp;
}
//DEFENSE
public function getDefense(){
    return $this->nom;
}

public function setDefense($defense){
    $this->defense = $defense;
}
//VITESSE
public function getVitesse(){
    return $this->vitesse;
}

public function setNom($vitesse){
    $this->vitesse = $vitesse;
}
//ATTAQUE
public function getAttaque(){
    return $this->attaque;
}

public function setMagie($attaque){
    $this->attaque = $attaque;
}
//MAGIE
public function getMagie(){
    return $this->magie;
}

public function setMagie($magie){
    $this->magie = $magie;
}
//FORTUNE
public function getFortune(){
    return $this->fortune;
}

public function setFortune($fortune){
    $this->fortune = $fortune;
}

//CRUD
public function create(Request $request){
    'nom'=>$request->nom;
    'classe'=>$request->classe;
    'hp'=>$request->hp;
    'defense'=>$request->defense;
    'vitesse'=>$request->vitesse;
    'attaque'=>$request->attaque;
    'magie'=>$request->magie;
    'fortune'=>$request->fortune;
}

public function read($idHero){
    $hero = Hero::find($idHero);
    return $this->hero = $hero;
}

public function update(Request $request,$idHero){
    Hero::find($idHero)->update([
        'hp'=>$request->hp;
        'defense'=>$request->defense;
        'vitesse'=>$request->vitesse;
        'attaque'=>$request->attaque;
        'magie'=>$request->magie;
        'fortune'=>$request->fortune;
    ]);
}

public function delete($idHero){
    $hero = Hero::find($idHero);

    $hero->delete();

}

public function type(){

}
}