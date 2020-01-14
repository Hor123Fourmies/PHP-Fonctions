<?php


#PHP - Les fonctions
##Exercice 1 Faire une fonction qui retourne true.

function exercice1(){
    echo "true";
};
exercice1();

echo "<br>";

##Exercice 2
##Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

function exercice2($texte) {
    echo $texte;
}
exercice2("Bonjour tout le monde !");

echo "<br>";

##Exercice 3
##Faire une fonction qui prend en paramètre deux chaines de caractères
##et qui renvoit la concaténation de ces deux chaines

function exercice3($texte1, $texte2) {
    echo $texte1.$texte2;
}
exercice3("Bonjour", " tout le monde !");

echo "<br>";
echo "<br>";


##Exercice 4
##Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

##Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
##Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
##Les deux nombres sont identiques si les deux nombres sont égaux

function comparaison($nb1=2, $nb2=4) {

    echo "Voici 2 chiffres : ".$nb1." "."et ".$nb2."<br>";
    echo "Comparons-les : ";

    if ($nb1===$nb2){
        echo "les deux chiffres sont identiques";
    }
    else if ($nb1 > $nb2){
        echo "le premier chiffre est plus grand";
    }
    else if ($nb1 < $nb2){
        echo "le premier chiffre est plus petit";
    }
}
comparaison();

echo "<br>";


##Exercice 5
##Faire une fonction qui prend en paramètre un nombre et une chaine de caractères
##et qui renvoit la concaténation de ces deux paramètres.

function exercice5($nb3, $texteA){
    echo $nb3.", ".$texteA;
}
exercice5(5, "Rue Arlette Corrente");

echo "<br>";

##Exercice 6
##Faire une fonction qui prend trois paramètres : nom, prenom et age.
##Elle doit renvoyer une chaine de la forme :
/*
"Bonjour" + nom + prenom + ",tu as" + age + "ans".
*/

function troisParam($nom, $prenom, $age){
    echo "Bonjour " .$nom." ".$prenom.", tu as ".$age." ans"." ";
}
troisParam("Dupont", "Jean", 50);

echo "<br>";

##Exercice 7
##Faire une fonction qui prend deux paramètres : age et genre.
##Le paramètre genre peut prendre comme valeur :
/*
Homme
    Femme

La fonction doit renvoyer en fonction des paramètres :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.
*/

function exercice7($age=18, $genre="homme"){
    //echo $age." ".$genre;
    if ($age >= 18 && $genre === "homme"){
        echo "Vous êtes un homme et vous êtes majeur";
    }
    else if ($age < 18 && $genre === "homme"){
        echo "Vous êtes un homme et vous êtes mineur";
    }
    else if ($age >= 18 && $genre !== "homme"){
        echo "Vous êtes une femme et vous êtes majeure";
    }
    else if ($age < 18 && $genre !== "homme"){
        echo "Vous êtes une femme et vous êtes mineure";
    }
}
exercice7(12, " ");

echo "<br>";

##Exercice 8
##Faire une fonction qui prend en paramètres trois nombres et qui renvoie la somme de ces nombres.
##Tous les paramètres doivent avoir une valeur par défaut.

function exercice8($nbA, $nbB, $nbC){
    echo $somme = $nbA+$nbB+$nbC;
}
exercice8(4, 5, 6);

