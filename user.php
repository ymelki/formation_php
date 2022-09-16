<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br />LISTE DES MAIL DES USERS
    <?php

    //https://phpdelusions.net/pdo_examples/select

    // liste des users 


    // 1 . Connecter à la BD
    $bdd=new PDO('mysql:host=localhost;dbname=ted_php', 'root','');

    // var_dump($bdd);


    // 2. REQUETE SQL qui recupere les données de la table user
    // select all users
    $stmt = $bdd->query("SELECT * FROM user");

   // var_dump($stmt);






    while ($row = $stmt->fetch()) {
        echo "<br />".$row['id']." ".$row['email']."\n";
    }


    // 3. On les affiche

    // EXO : Lorsqu on clique sur un des user => on va avoir une nouvelle page 
    // qui affiche la page utilisateur correspondante

    // une nouvelle page PHP qui va effectivement recevoir des donnée POST / GET
    // TU DOIS AFFICHER LA BASE TOUTE LES INFOS SUR LE USER 

    ?>
</body>
</html>