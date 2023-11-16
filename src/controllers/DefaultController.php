<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Movie.php';

class DefaultController extends AppController{
    public function login(){

       # include __DIR__.'/../views/login.html';

        $this->render("login");

    }

    public function dashboard(){

        $title = "Movies";

        $movies = [
            new Movie("Inception", "Christopher Nolan", "Sci-Fi", 2010),
            new Movie("The Shawshank Redemption", "Frank Darabont", "Drama", 1994),
            new Movie("The Godfather", "Francis Ford Coppola", "Crime", 1972),
            new Movie("Pulp Fiction", "Quentin Tarantino", "Crime", 1994),
            new Movie("The Dark Knight", "Christopher Nolan", "Action", 2008),
        ];

       # include __DIR__.'/../views/dashboard.html';
        $this->render("dashboard", ["title" => $title, "movies" => $movies]);
    }

}