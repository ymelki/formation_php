 <?php
include "header.php";
 ?>
    <?php
    // generer du html en affichant ce qu on a ecrit dans le echo 

    // ALGO

    /*
    1. VARIABLES
    2. LES CONDITIONS
    3. LES BOUCLES
    4. LES FONCTIONS ...
    
    */

    /**
     * EX AMAZON : IL VA CHERCHE DANS UNE B.D. LES INFO SUR UN PRODUIT DANS LA PAGE PRODUIT
     * 
     *1.  VARIABLE : SQL => NOM_PRODUIT =TROTINETTE 
     * LOCAL (FONCTION)
     * GLOBAL (PAGE)
     * SUPER GLOBAL (SESSION (FICHIER COTE SERVEUR) COOKIE (FICHIER COTE CLIENT)   GET (URL) POST (FORMULAIRE CACHE LES MDP) )
     * 
     *2.  CONDITION : CREER UNE INTERFACE ADAPTE SELON LES BESOIN : EX: utilisateur qui a prime on lui affiche ses avantages PRIME
     *
     * 3. Boucles : Pour travailler sur un ensemble d'information que l'on va deplier
     * 
     * 4. Les fonctions : Bout de code qui va s'encapsuler avec un nom
     * 
     * 
     */

     /**
      * 
      ***
      */


      $produit_nom="XIAOMI M365"; // chaine de caracterev: string
      $produit_prix=500; // nombre : prix : integer
      $produit_prix=$produit_prix   +100;

      $produit_prix_tva= $produit_prix * 1.2 ; 

      echo gettype($produit_nom);

      // concatener ?
      echo "  Nom de la trotinette :     ".$produit_nom." Prix : ".$produit_prix      ; 
?>
<hr>
<?php
      $produit1=["XIAOMI M365", 500 , 520, "Trotinette derniere generation! "];
      $user=["Yoel","Melki",35,true,false];

      // afficher un tableau en mode test ! 
      echo $produit1[0]." ".$produit1[1];

      // changer le prix 500 à 600
      $produit1[1]=($produit1[1])+100;
      var_dump($produit1);
      $age=14;


     $mystring = 'abc';
    $findme   = 'c';
    $pos = strpos($mystring, $findme);

    echo $pos;

      // si la variable produit nom contient xiaomi on ecrit "c'est la marque xiaomi ! si non autre que marque XIAOMI"

      
      if (  strtoupper($produit1[0])  == strtoupper("XIAOMI")  ){
        echo "OKKKKKKK ";
      }


      if (  $age >18   ) {
        echo "majeur ! ";
      } 
      else {
        echo "mineur ! ";
      }

      // Boucle

      // Afficher les nombre de 0 à 50
      // boucle FOR
      for (   $i=0;   $i<50;   $i=$i+1   ) { 

        echo "je suis yoel"; 
      }
      $user=["Yoel","Melki",35,true,false];


      for (   $i=0;   $i<count($user);   $i++  ) { 

        echo $user[$i];
      }

    /*  $i=0;

        while  (  $i<10      ){
            echo "bonjour";
             if ( $val==2  ){ $i++; }

        }
 */

      $arr = array(1, 2, 3, 4);
      var_dump($arr);
        foreach ($arr as $key=>$value) {
          echo $key.'=>'.$value;
        }


      // affiche moi le caractere * 50

      // 1. affiche moi la table de multiplication de 2 

      /**
       * Boucle Repetition de 10
       *   Affiche : Calcul 2 * 1   = resultat 1
       */

      // 2. affiche moi la table de multiplication de 8 

      /**
       * Table de 1
       * 1*1=..
       * 1*2=..
       * 
       * 
       * Table de 2
       * 
       * 
       * 
       * 
       * Table de 3
       * 
       * Table de 4 
       * 
       * ...
       * 
       * 
       * 
       * Boucle qui va afficher {
       * Table de $i 
       *    Boucle de la multipliaction $j
       * 
       * }
       * 
       * 
       * 
       */


/**
 * 
 * fonctions
 * 
 * afficher "hello world"
 * 
 * retourner une valeur
 */
// declaration de la fonction : CORP
function mafonction( $information  ){
  echo "voici l'info : ".$information;
}

mafonction(  "test"   );

function afficher()  {
    echo "Hello World !";
}
  
 function test4($prenom){
  $mavar="Bonjour Mr ".$prenom;
  return $mavar;
 }
 // 1. CREER UNE FONCTION QUI PREND EN PARAMETRE UN Chaine de carractere et qui affiche Bonjour suivi de la chaine de caractere
 // 2. CREER UNE FONCTION QUI PREND EN PARAMETRE UN Chaine de carractere et qui retourne Bonjour suivi de la chaine de caractere
 // 3.  CREER UNE FONCTION QUI PREND EN PARAMETRE UN nombre qui affiche le nombre
 // 3.  CREER UNE FONCTION QUI PREND EN PARAMETRE UN nombre qui retorune le nombre
  // 3.  CREER UNE FONCTION QUI PREND EN PARAMETRE UN nombre qui affiche si le nombre est > 18 ca ecrit majeur si non mineur
   // 3.  CREER UNE FONCTION QUI PREND EN PARAMETRE UN nombre qui affiche si le nombre est > 18 ca renvoie true ou false
 afficher();



 //compte(300);

    
     ?>
     <?php
$paramNb=5;
// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le resultat de 1+2+3+4+5 
// Retourner une valeur ?
// variable local et global
/*
$mavar="ce que je veux ! ";
function mafonction2(){
  $mavar="ce que je veux ! "; // VARIABLE LOCAL QUI EXISTE QUE DANS LA FONCTION
  return $mavar;
}
echo $mavar;
*/


function resultSomme($paramNb) {
    for($i=1; $i<6; $i++) {
        echo ($paramNb+$i) . '<br>';
    }
}
resultSomme(10);

 resultSomme($paramNb);
echo "-------------------------<br>";
// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le resultat de 1x2x3x4x5
function resultMulti($paramNb) {
    for($i=1; $i<6; $i++) {
        echo ($paramNb*$i) . '<br>';
    }
}
resultMulti($paramNb);
echo "-------------------------<br>";
// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le calcul et le resultat de 1+2+3+4+5
function calcResultSomme($paramNb) {
    for($i=1; $i<6; $i++) {
        echo $paramNb . '+' . $i . '=' . ($paramNb+$i) . '<br>';
    }
}
calcResultSomme($paramNb);
echo '-------------------------<br>';

// créer une fonction qui prend en parametre un nombre et qui retourne ex: 5 retourne le calcul et le resultat de 1x2x3x4x5
function calcResultMulti($paramNb) {
    for($i=1; $i<6; $i++) {
        echo $paramNb . 'x' . $i . '=' . ($paramNb*$i) . '<br>';
    }
}
calcResultMulti($paramNb);

    ?>
     
     
     <br />
----------------------------
----------------------------
     du html 

     <?php

     ?>

MON FOOTER NUMERO 2....
</body>
</html>