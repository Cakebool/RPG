<?php
session_start();
require_once ("../db.php");
require "../model/Joueur.php";


if (

    isset($_POST["nom"])
    and isset($_POST["prenom"])
    and isset($_POST["email"])
    and isset($_POST["pseudo"])
    and isset($_POST["descriptif"])
){
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $descriptif = htmlspecialchars($_POST["descriptif"]);

    if(Joueur::isAvailable($pseudo,$email))
    {
        $request = $db->prepare("
                        INSERT INTO joueur (pseudo, email, nom, prenom, descriptif)
						VALUES (:pseudo, :email, :nom, :prenom, :descriptif)");
        $request->execute(
            array(
                "pseudo" => $pseudo,
                "email" => $email,
                "prenom"=> $prenom,
                "nom" => $nom,
                "descriptif" => $descriptif
            )
        );
    }
   header('Location: ../success.php');
}else{
    echo" Error : this member already exists";
}

?>