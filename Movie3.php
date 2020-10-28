<?php

namespace App\Movies;

use App\Movie;
use App\PgInterface;

class Movie3 extends Movie implements PgInterface
{

    public function getTitle(): string
    {
        return 'Spider-Man: Into the Spider-Verse';
    }

    public function getStudio(): string
    {
        return 'Columbia Pictures';
    }

    public function getRating(): string
    {
        return 'PG';
    }
}