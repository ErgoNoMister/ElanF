<?php

namespace Controller;
use Model\Connect;

class CinemaController{

    public function listFilms(){
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
            SELECT titre, annee_sortie
            FROM film
        ");
        require "view/listFilms.php";
    }
}