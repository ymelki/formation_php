<?php

/*
$tableau= [ 12,34,34  ];
echo $tableau[2];
$tableau[2]="toto";
$tabbleau[]="tRET";
*/

function resultSomme($paramNb) {
    $tab=array(); // initialiser un tableau
    $info=0;   //initialiser une variable stockant l evolution de i

    var_dump($tab);
    for($i=1; $i<=$paramNb  ; $i++) {

        $info=$i + $info;


        $tab[]=$info;
        var_dump($tab);
        echo ($paramNb+$i) . '<br>';
    }

    return $tab[count($tab)-1];




}



function resultSomme_s($paramNb) {
    $info=0;   //initialiser une variable stockant l evolution de i

    for($i=1; $i<=$paramNb  ; $i++) {

        $info=$i + $info;


    }

    return $info;


}

echo resultSomme(5);


// RECUPER UNE INFORMATION : UNE VARIABLE $result reçoit la derniere info
// return $result
// return $tab[$paramNb] $tab$tab.count()
// 1 + 2 +3 +4 +5
// BOUCLE
//   vARIBLE RESULTAT STOCKE <= l evolution de i 
?>
