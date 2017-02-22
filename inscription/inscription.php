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
            <form action="inscription_traitement.php" method="post">
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
                    </div>
                <div class="form-group">
                    <label for="nom">nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="prenom">prenom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                <div class="form-group">
                    <label for="descriptif">Comment:</label>
                    <textarea class="form-control" rows="5" name="descriptif"></textarea>
                </div>
                <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                    <button type="submit" class="btn btn-default" value="Sign In">Submit</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>