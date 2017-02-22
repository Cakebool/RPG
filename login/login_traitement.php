<?php
session_start();
require_once ("../db.php");

if (
        isset($_POST["email"])
        and isset($_POST["pseudo"])
){
    $email= htmlspecialchars($_POST["email"]);
    $pseudo= htmlspecialchars($_POST["pseudo"]);


    $request = $db->prepare("SELECT idJoueur, email, pseudo FROM joueur WHERE pseudo LIKE :pseudo AND email = :email");
    $request->execute(
        array(
            "pseudo" => $pseudo,
            "email" => $email,
        )
    );


    $members = $request->fetchAll();
    if(sizeof($members) > 0){
        $id_members = $members[0]["idJoueur"];
        $_SESSION["id_members"] = $id_members;
        header('Location: ../dashboard.php');

    }
    else{
        header ('location: ../index.php');

    }
}
else{
    header ('location: ../index.php');

}
