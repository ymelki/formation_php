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
    // Variable global
    // variable local


    // variable super global
    // GET
    // POST

    var_dump($GLOBALS);
    // http://localhost:3000/page.php?mot_recherche=trotinnette&page=1&trie=croissant

    // GET [ mot_recherche => trotinnete ,  page = 1 , trie = croissant     ]


    var_dump($_GET);


    echo $_GET['mot_recherche'];


    
    ?>
</body>
</html>