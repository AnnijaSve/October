<?php

namespace App\Movies;


use App\Movie;

class Movie1 extends Movie
{
    public function getTitle(): string
    {
        return 'Casino Royale';
    }

    public function getStudio(): string
    {
        return 'Eon Productions';
    }

    public function getRating(): string
    {
        return 'PG13';
    }
}