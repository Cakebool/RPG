<?php

require_once ("../Model/hero.php");
if (isset($_POST["nom"]) and isset($_POST["classe"])) {
    $nom = htmlspecialchars($_POST["nom"]);
    $classe = htmlspecialchars($_POST["classe"]);
    $hero = Hero::create_hero($nom, $classe);
    $hero->save();

}