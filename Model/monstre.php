<?php
require_once('../db.php');
require_once('Entity.php');
class Monstre extends Entity

{

    protected $idMonstre = null;
    protected $nom      =0;
    protected $hp       =0;
    protected $defense  =0;
    protected $vitesse  =0;
    protected $attaque  =0;

    function save()
    {
        global $db;
        if ($this->idMonstre == null){
            $request = $db->prepare("INSERT INTO monstre (nom, hp, defense, vitesse, attaque)
                                    VALUES (:nom, :hp, :defense, :vitesse, :attaque)");
            $request->execute(
                array(
                    "nom" => $this->nom,
                    "hp" => $this->hp,
                    "defense" => $this->defense,
                    "vitesse" => $this->vitesse,
                    "attaque" => $this->attaque,
                )
            );
            $this->idMonstre = $db->lastInsertId();

        }
        else{
            $request = $db->prepare("UPDATE monstre SET nom = 'nom', type = 'type', hp = 'hp', defense = 'defense', vitesse ='vitesse', attaque = 'attaque', magie= 'magie', fortune='fortune' WHERE idMonstre = $this->idMonstre)");
            $request->execute(
                array(
                    "nom" => $this->nom,
                    "type" => $this->type,
                    "hp" => $this->hp,
                    "defense" => $this->defense,
                    "vitesse" => $this->vitesse,
                    "attaque" => $this->attaque,
                )
            );
        }
    }

    function find()
    {
        // TODO: Implement find() method.
    }


    function __construct()
    {

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
//vitesse//
    public function getVitesse(){
        return $this->vitesse;
    }

    public function setVitesse($vitesse){
        $this->vitesse = $vitesse;
    }
//attaque//
    public function getAttaque(){
        return $this->attaque;
    }

    public function setAttaque($attaque){
        $this->attaque = $attaque;
    }
    public function read($idMonstre)
    {
        $monstre = Monstre::find($idMonstre);
        return $this->monstre = $monstre;
    }

    public function update(Request $request, $idMonstre)
    {
        Monstre::find($idMonstre)->update([
            'hp' => $request->hp,
            'defense' => $request->defense,
            'vitesse' => $request->vitesse,
            'attaque' => $request->attaque,
        ]);
    }

    public function delete($idMonstre)
    {
        $monstre = Monstre::find($idMonstre);

        $monstre->delete();

    }


    static public function create_monstre($nom)
    {
        $m= new Monstre();

        $m->setNom($nom);

        if ($nom == "gobelin") {
            $m->setNom(1);
            $m->setHp(15);
            $m->setDefense(1);
            $m->setAttaque(5);
            $m->setVitesse(80);

        } elseif ($nom == "warlock") {

            $m->setNom(2);
            $m->setHp(70);
            $m->setDefense(3);
            $m->setAttaque(20);
            $m->setVitesse(60);


        } elseif ($nom == "dragon") {

            $m->setNom(3);
            $m->setHp(200);
            $m->setDefense(5);
            $m->setAttaque(50);
            $m->setVitesse(10);

        } else {
            // type de heros inconnu
            header('location: ../404.php');
        }


        return $m;
    }


}