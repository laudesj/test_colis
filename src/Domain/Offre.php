<?php

namespace Colis\Domain;

class Offre 
{
    
    private $id;
    private $user;
    private $depart;
    private $arrivee;
    private $date;
    private $heure;
    private $poids;
    private $volume;
    private $prix;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    // setters & getters
}