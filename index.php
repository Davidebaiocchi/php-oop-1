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

// create 1 film
$harry_potter_e_la_pietra_filosofale = new Movie('Harry Potter e La pietra filosofale');
$harry_potter_e_la_pietra_filosofale->genre = 'Fantasy';
$harry_potter_e_la_pietra_filosofale->yearDrop = '2001';
$harry_potter_e_la_pietra_filosofale->cast = 'Daniel Radcliffe, Rupert Grint, Emma Watson, Richard Harris';

// create 2 film
$harry_potter_e_la_camera_dei_segreti = new Movie('Harry Potter e La camera dei segreti');
$harry_potter_e_la_camera_dei_segreti->genre = 'Fantasy';
$harry_potter_e_la_camera_dei_segreti->yearDrop = '2002';
$harry_potter_e_la_camera_dei_segreti->cast = 'Daniel Radcliffe, Rupert Grint, Emma Watson, Richard Harris';

// create 3 film
$harry_potter_e_il_prigioniero_di_azkaban = new Movie('Harry Potter e Il prigioniero di Azkaban');
$harry_potter_e_il_prigioniero_di_azkaban->genre = 'Fantasy';
$harry_potter_e_il_prigioniero_di_azkaban->yearDrop = '2004';
$harry_potter_e_il_prigioniero_di_azkaban->cast = 'Daniel Radcliffe, Rupert Grint, Emma Watson, Richard Harris';

// drop film
var_dump($harry_potter_e_la_pietra_filosofale);
var_dump($harry_potter_e_la_camera_dei_segreti);
var_dump($harry_potter_e_il_prigioniero_di_azkaban);