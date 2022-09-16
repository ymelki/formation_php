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


// EXO : Une fonction qui prend en parametre un tableau de valeur et qui renvoie la somme de ces valeurs
// INPUT => [12,34,54  ]  => OUTPUT => VARIABLE NUMERIQUE

// appel
$tab=[12,34,54,34];

//     0  1  2   3
// TAB 0
//     34 
// EXO 1: Une fonction qui prend en parametre un tableau de valeur et qui renvoie la moyenne de ces valeurs
// EXO 2: Une fonction qui prend en parametre un tableau de valeur et qui renvoie la tableau inversé
// [12,34,54,34] => [34, 54, 34,12]
for ($i=count($tab); $i>=0;$i--){

}
// EXO : // EXO 3: Une fonction qui prend en parametre un tableau de valeur et qui renvoie la valeur max
// PARAMETRE TABLEAU
// SORTIE NOMBRE


function mafonction2($tab){
    $nombre=9999999999;
    for ($i=0; $i < count($tab); $i++)  {
       if ($tab[$i] > $i     ){
        $nombre=$tab[$i];
       }
    }

    // TAB [10,34,45,34,2] => 45
    return $nombre;
}



// EXO : // EXO 3: Une fonction qui prend en parametre un tableau de valeur et qui renvoie la valeur min
// EXO : // EXO 3: Une fonction qui prend en parametre un tableau de valeur et qui renvoie un tableau avec la valeur max et la valeur min

function minmax($tab){ // prend en parametre un tableau[12,34,54,34]
    $montab=array(); // creation du tableau
    // mettre la valeur max dans la premiere case du tableau
    $montab[] = tmin($tab);
    $montab[]=  tmax($tab);
    // retourne un tableau
    return $montab;
}




?>
