<?php
require_once __DIR__ . '/Genre.php';

class Movie
{
    public $title;
    public $length;
    public $poster;
    public $genre;

    public function __construct($title, $length, $poster, Genre $genre)
    {
        $this->title = $title;
        $this->length = $length;
        $this->poster = $poster;
        $this->genre = $genre;
    }

    public function getDetails()
    {
        // Creo una variabile per non sporcare troppo il codice
        $genre_name = $this->genre->name;
        return "Titolo:  $this->title - Genere: $genre_name - Durata:  $this->length";
    }
}
