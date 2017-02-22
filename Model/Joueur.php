<?php

class Joueur
{
    static public function isAvailable($p,$f)
    {
        require "../db.php";
        $request = $db->prepare("SELECT idJoueur FROM joueur WHERE pseudo LIKE :pseudo OR email LIKE :email");
        $request->execute(
            array(
                "pseudo" => $p,
                "email" => $f
            )
        );
        $members = $request->fetchAll();
         return (sizeof($members) == 0);



    }
}