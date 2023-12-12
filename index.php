<?php 
// appeler les fichier des classes
require_once('./Class/CompteBancaire.php');
require_once('./Class/CompteCourant.php');
require_once('./Class/FabriqueDeCompte.php');
require_once('./Class/CompteEpargne.php');
require_once('./Class/CompteInvestissement.php');

// déclaration de 2 objet CompteBancaire 
// $cb1 = new CompteBancaire('Jules', 0, 'Euros', false, 1);
// $cb2 = new CompteBancaire('Herve', 0, 'Euros', false, 2);

    
    // fonction numéro 1 deposerArgent

    // $cb1->deposerArgent(100);

    // var_dump($cb1);

    // fonction numéro 2 retirerArgent

    // $cb1->retirerArgent(101);

    // var_dump($cb1);

    // fonction numéro 3 afficherSolde

    // $cb1->afficherSolde();

    // var_dump($cb1); 

    // fonction numéro 4 transferArgent (j'ajoute de l'argent grace a la fonction précédente)

    // $cb1->deposerArgent(220);
    // $cb1->transfererArgent(200, $cb2);

    // var_dump($cb1);
    // var_dump($cb2);


    // var_dump($cb1);
    // echo "</br>";
    // var_dump($cb2);
    // echo "</br>";
    // $cb3 = CompteBancaire::obtenirCompte(2);

    // var_dump($cb3);

    // Exemple d'utilisation de la fabrique
$cb1 = FabriqueDeCompte::creerCompte('Jules', 0, 'Euros', false, 1);
$cb2 = FabriqueDeCompte::creerCompte('Herve', 0, 'Euros', false, 2);

var_dump($cb1);
echo "</br>";
var_dump($cb2);

?>
