<?php

class Movie {
    // Właściwości (cechy) klasy
    public $title;
    public $director;
    public $genre;
    public $releaseYear;

    // Konstruktor klasy
    public function __construct($title, $director, $genre, $releaseYear) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
    }

    // Metoda do pobierania informacji o filmie
    public function getMovieInfo() {
        return "Title: {$this->title}\nDirector: {$this->director}\nGenre: {$this->genre}\nRelease Year: {$this->releaseYear}\n";
    }
}