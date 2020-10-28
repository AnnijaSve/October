<?php
require_once __DIR__ . '/app/Movie.php';
require_once __DIR__ . '/app/MovieCollection.php';
require_once __DIR__ . '/app/PgInterface.php';
require_once __DIR__ . '/app/Formatter.php';
require_once __DIR__ . '/app/Movies/Movie1.php';
require_once __DIR__ . '/app/Movies/Movie2.php';
require_once __DIR__ . '/app/Movies/Movie3.php';

use \App\Movie;
use \App\MovieCollection;
use \App\PgInterface;
use \App\Formatter;
use \App\Movies\Movie1;
use \App\Movies\Movie2;
use \App\Movies\Movie3;



$movies = new MovieCollection();
$movies->add(new Movie1());
$movies->add(new Movie2());
$movies->add(new Movie3());

foreach ($movies->all() as $movie){
    /** @var  Movie $movie */
    echo Formatter::title($movie->getTitle()) . ', ';
    echo Formatter::studio($movie->getStudio()) . ', ';
    echo Formatter::rating($movie->getRating()) ;
    echo PHP_EOL;
}

echo 'Only PG rated:' . PHP_EOL;

foreach ($movies->all() as $movie) {
    /** @var  Movie $movie */
    if ($movie instanceof PgInterface) {
        echo Formatter::title($movie->getTitle()) . ', ';
        echo Formatter::studio($movie->getStudio()) . ', ';
        echo Formatter::rating($movie->getRating()) ;
        echo PHP_EOL;
    }
}
