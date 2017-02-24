<?php
require_once('../db.php');
require_once('Entity.php');

class Hero extends Entity
{

    protected $idHeros   = null;
    protected $nom      ='';
    protected $type     =0;
    protected $hp       =0;
    protected $defense  =0;
    protected $vitesse  =0;
    protected $attaque  =0;
    protected $magie    =0;
    protected $fortune  =0;

    function __construct()
    {

    }

    public function save()
    {
        global $db;
        if ($this->idHeros == null){
        $request = $db->prepare("INSERT INTO heros (nom, type, hp, defense, vitesse, attaque, magie, fortune)
                                    VALUES (:nom, :type, :hp, :defense, :vitesse, :attaque, :magie, 0)");
        $request->execute(
            array(
                "nom" => $this->nom,
                "type" => $this->type,
                "hp" => $this->hp,
                "defense" => $this->defense,
                "vitesse" => $this->vitesse,
                "attaque" => $this->attaque,
                "magie" => $this->magie,
            )
        );
         $this->idHero = $db->lastInsertId();

        }
        else{
            $request = $db->prepare("UPDATE heros SET nom = 'nom', type = 'type', hp = 'hp', defense = 'defense', vitesse ='vitesse', attaque = 'attaque', magie= 'magie', fortune='fortune' WHERE idHeros = $this->idHero)");
            $request->execute(
                array(
                    "nom" => $this->nom,
                    "type" => $this->type,
                    "hp" => $this->hp,
                    "defense" => $this->defense,
                    "vitesse" => $this->vitesse,
                    "attaque" => $this->attaque,
                    "magie" => $this->magie,
                )
            );
        }

    }

    public function find()
    {
        // TODO: Implement find() method.
    }

//NOM
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

//CLASSE
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

//HP
    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }

//DEFENSE
    public function getDefense()
    {
        return $this->nom;
    }

    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

//VITESSE
    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

//ATTAQUE
    public function getAttaque()
    {
        return $this->attaque;
    }

    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
    }

//MAGIE
    public function getMagie()
    {
        return $this->magie;
    }

    public function setMagie($magie)
    {
        $this->magie = $magie;
    }

//FORTUNE
    public function getFortune()
    {
        return $this->fortune;
    }

    public function setFortune($fortune)
    {
        $this->fortune = $fortune;
    }

//CRUD
//public function create(Request $request){
//    'nom'=>$request->nom;
//    'classe'=>$request->classe;
//    'hp'=>$request->hp;
//    'defense'=>$request->defense;
//    'vitesse'=>$request->vitesse;
//    'attaque'=>$request->attaque;
//    'magie'=>$request->magie;
//    'fortune'=>$request->fortune;
//}

    public function read($idHero)
    {
        $hero = Hero::find($idHero);
        return $this->hero = $hero;
    }

    public function update(Request $request, $idHero)
    {
        Hero::find($idHero)->update([
            'hp' => $request->hp,
            'defense' => $request->defense,
            'vitesse' => $request->vitesse,
            'attaque' => $request->attaque,
            'magie' => $request->magie,
            'fortune' => $request->fortune,
        ]);
    }

    public function delete($idHero)
    {
        $hero = Hero::find($idHero);

        $hero->delete();

    }


    static public function create_hero($nom, $type)
    {
        $h= new Hero();

        $h->setNom($nom);

        if ($type == "paladin") {
            $h->setType(1);
            $h->setHp(100);
            $h->setDefense(3);
            $h->setAttaque(20);
            $h->setVitesse(60);
            $h->setMagie(80);

        } elseif ($type == "mage") {

            $h->setType(2);
            $h->setHp(70);
            $h->setDefense(1);
            $h->setAttaque(60);
            $h->setVitesse(60);
            $h->setMagie(200);


        } elseif ($type == "barbare") {

            $h->setType(3);
            $h->setHp(200);
            $h->setDefense(4);
            $h->setAttaque(60);
            $h->setVitesse(40);
            $h->setMagie(0);

        } else {
            // type de heros inconnu
            header('location: ../404.php');
        }


        return $h;
    }


}