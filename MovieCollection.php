<?php

namespace App;

class MovieCollection
{
    private $movies = [];
    public function add(Movie $movie): void
    {
        $this->movies[] = $movie;
    }

    public function all(): array
    {
        return $this->movies;
    }

}