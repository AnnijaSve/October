<?php

namespace App\Movies;

use App\Movie;

class Movie2 extends Movie
{

    public function getTitle(): string
    {
        return 'Glass';
    }

    public function getStudio(): string
    {
        return 'Buena Vista International';
    }

    public function getRating(): string
    {
        return 'PG13';
    }
}