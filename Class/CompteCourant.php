<?php

class CompteCourant extends CompteBancaire
{   
    // déclaration des différentes variables demandées pour le CompteBancaire

    private $titulaire;
    private $solde;
    private $devise;
    private $premium;
    private $numeroDeCompte;


    
    // création du constructeur avec les variables d'au dessus

    public function __construct(string $titulaire, int $solde = 0, string $devise, bool $premium, int $numeroDeCompte)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->numeroDeCompte = $numeroDeCompte;

    }

    // création de tous les getters et setters

    public function setTitulaire($newtitulaire) {
        $this->titulaire = $newtitulaire;
    }
    public function getTitulaire() {
        return $this->titulaire;
    }

    protected function setSolde($newsolde) {
        $this->solde = $newsolde;
    }
    public function getSolde() {
        return $this->solde;
    }

    public function setDevise($newdevise) {
        $this->devise = $newdevise;
    }
    public function getDevise() {
        return $this->devise;
    }

    public function setPremium($newpremium) {
        $this->premium = $newpremium;
    }
    public function getPremium() {
        return $this->premium;
    }

    public function setNumeroDeCompte($newNumeroDeCompte) {
        $this->numeroDeCompte = $newNumeroDeCompte;
    }
    public function getNumeroDeCompte() {
        return $this->numeroDeCompte;
    }

    // création des différentes méthodes demandées

    public function deposerArgent($montant) {

        $this->solde = $this->solde + $montant;

    }
    
    public function retirerArgent($montant) {

        if ($this->solde > $montant ){

            $this->solde = $this->solde - $montant;

        } else{

            echo "</br> ERREUR. Solde insuffisant </br>";

    }

    }


    public function afficherSolde() {

        echo "Le solde du compte est de " . $this->solde ." ". $this->devise ."</br>";

    }

    public function transfererArgent($montant, $autreCompte) {

        if ($this->solde > $montant){

            $this->solde = $this->solde - $montant;
            $autreCompte->deposerArgent($montant);

        }
        else{

            echo "</br> ERREUR. Solde du compte source insufisant </br>";

        }
    }

}


?>