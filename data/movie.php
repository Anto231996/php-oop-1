<?php
class Movie{
    public $title;
    public $language;
    public $genre;
    public $year;


    function __construct($title, $language, $genre, $year){
        $this->title = $title;
        $this->language = $language;
        $this->genre = $genre;
        $this->setYear($year);
    }

    function setYear($year){
        if (is_numeric($year)){
            $this->year = $year;
        }
    }
}
$firstMovie = new Movie('movie1', 'inglese', 'thriller', 2020);
$secondMovie = new Movie('movie2', 'francese', 'fantascienza', 1945);