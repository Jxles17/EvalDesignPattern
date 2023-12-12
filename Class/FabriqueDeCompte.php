<?php

class FabriqueDeCompte
{
    public static function creerCompte(string $titulaire, $solde, string $devise, bool $premium, int $numeroDeCompte)
    {
        // création d'une instance comptebancaire
        return new CompteBancaire($titulaire, 0, $devise, false, $numeroDeCompte);
    }
}

?>