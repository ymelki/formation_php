<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    session_start();
    // Variable global


    // SESSION STOCKER DES DONNEES SUR TOUTES LES PAGES TANT QUE JE NE LES AI PAS SUPPRIME
    // CREER UN FICHIER SUR LE SERVEUR QUI DIT JE RECONNAIS L ORDINATEUR QUI A ENREGISTRER TEL DONNE ET JE L ENREGISTRE

    // COOKIE STOCKER DES DONNEES SUR TOUTES LES PAGES TANT QUE JE NE LES AI PAS SUPPRIME
    // CREER UN FICHIER SUR LE POSTE DE L UTILISATEUR QUI DIT JE RECONNAIS L ORDINATEUR QUI A ENREGISTRER TEL DONNE ET JE L ENREGISTRE


    // variable local

    unset($_SESSION['user']);

    var_dump($_SESSION);


    // variable super global
    // GET
    // POST

    var_dump($GLOBALS);
    // http://localhost:3000/page.php?mot_recherche=trotinnette&page=1&trie=croissant

    // GET [ mot_recherche => trotinnete ,  page = 1 , trie = croissant     ]

    // afficher les nombre de 1 à 10 et faire que l'orsque on clique sur 1 cela affiche page 1 
     //                                                                   2                  2


    var_dump($_GET);


    echo $_GET['mot_recherche'];
    $motcle="trotineete";


    echo "<a href=page.php?mavaleur=$motcle>ma page</a>";

    echo $_GET['mavaleur'];
    
    ?>

    <form action="page.php" method="POST">
        <input type="text" name="recherche">
        <input type="submit" value="GO !">
    </form>

    
</body>
</html>