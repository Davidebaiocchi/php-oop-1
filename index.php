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

    // costruttore
    function __construct($_title) {
        $this->title = $_title;
    }
}

?>