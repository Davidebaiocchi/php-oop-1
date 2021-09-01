<!-- create un file index.php in cui:
è definita una classe ‘Movie’ 
=> all'interno della classe sono dichiarate delle variabili d'istanza 
=> all'interno della classe è definito un costruttore 
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie {

    public $title;
    public $genre;
    public $cast;
    public $yearDrop;
    public $ageForWatch = 0;

    // __construct
    function __construct($_title) {
        $this->title = $_title;
    }

    // create methods
    public function setAge($age) {
        if($age >= 18) {
            $this->ageForWatch = 'Vietato ai minori di 18';
        }
        else {
            $this->ageForWatch = 'Visibile a qualunque età';
        }
    }

    public function getAge(){
        return $this->ageForWatch;
    }
}

// create 1 film
$hp_1 = new Movie('Harry Potter e La pietra filosofale');
$hp_1->genre = 'Fantasy';
$hp_1->yearDrop = '2001';
$hp_1->cast = 'Daniel Radcliffe, Rupert Grint, Emma Watson, Richard Harris';
$hp_1->setAge(3);

// create 2 film
$hp_2 = new Movie('Harry Potter e La camera dei segreti');
$hp_2->genre = 'Fantasy';
$hp_2->yearDrop = '2002';
$hp_2->cast = 'Daniel Radcliffe, Rupert Grint, Emma Watson, Richard Harris';
$hp_2->setAge(18);

// create 3 film
$hp_3 = new Movie('Harry Potter e Il prigioniero di Azkaban');
$hp_3->genre = 'Fantasy';
$hp_3->yearDrop = '2004';
$hp_3->cast = 'Daniel Radcliffe, Rupert Grint, Emma Watson, Richard Harris';
$hp_3->setAge(3);

// drop film
var_dump($hp_1);
var_dump($hp_2);
var_dump($hp_3);