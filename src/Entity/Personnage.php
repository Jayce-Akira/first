<?php

namespace App\Entity;
class Personnage {
    public $name;
    public $age;
    public $sexe;
    public $stats = [];

    public static $personnes = [];

    public function __construct($name, $age, $sexe, $stats) {
        $this->name = $name;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->stats = $stats;

        self::$personnes[] = $this; // On créé une fonction qui s'apelle elle même
    }

    public static function createPerson() {
        $sp1 = new Personnage("Marco", 24, true, ["force"=> 3, "agi"=> 1, "intel"=> 3]);
        $sp2 = new Personnage("Johnny", 24, true, ["force"=> 4, "agi"=> 4, "intel"=> 2]);
        $sp3 = new Personnage("Martine", 24, false, ["force"=> 2, "agi"=> 2, "intel"=> 5]);
    }
}

