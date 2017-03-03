<?php

require_once ("../Model/monstre.php");
if (isset($_POST["type"])) {
    $type = htmlspecialchars($_POST["type"]);
    $monstre = Monstre::create_monstre($type);
    $monstre->save();

}