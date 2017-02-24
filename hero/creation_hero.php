<?php
include ('../db.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-12 text-center"><h1>Inscription</h1></div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <form action="hero_traitement.php" method="post">

                <select class="selectpicker" name="classe">
                    <option value="paladin">paladin</option>
                    <option value="mage">mage</option>
                    <option value="barbare">barbare</option>
                </select>

                <div class="form-group">
                    <label for="nom">nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                </div>

                <button type="submit" class="btn btn-default" value="Sign In">Submit</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>