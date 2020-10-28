<?php

require_once 'Film.php';

$films = [
    new Film(0, 'The Matrix', 'In stock', 0),
    new Film(1, 'Godfather II', 'In stock', 0),
    new Film(2, 'TStar Wars Episode IV: A New Hope', 'In stock', 0),
];

while (true) {
    echo "Choose the operation you want to perform \n";
    echo "Choose 0 for EXIT\n";
    echo "Choose 1 to rent video (as user)\n";
    echo "Choose 2 to return video (as user)\n";
    echo "Choose 3 to list inventory\n";

    $command = (int)readline();

    switch ($command) {
        case 0:
            echo "Bye!";
            die;
        case 1:
            echo 'List of films:';
            echo PHP_EOL;
            foreach ($films as $film) {
                echo 'Key for film: ' . $film->getFilmKey() . ' ';
                echo ', Title :' . $film->getFilmTitle() . ' ';
                echo ', Film stock :' . $film->getStock() . ' ';
                echo ', Rating :' . $film->getAVGRating() . ' ';
                echo PHP_EOL;
            }
            $command2 = (int)readline('Enter key for film You want to rent');
            $film = $films[$command2];
            $film->removeStock();
            echo 'You rented ' . $film->getFilmTitle(), PHP_EOL;
            break;
        case 2:
            echo 'Enter key for film You wan to return: ';
            echo PHP_EOL;
            $rating = null;
            foreach ($films as $film) {
                echo 'Key for film: ' . $film->getFilmKey() . ' ';
                echo ', Title :' . $film->getFilmTitle() . ' ';
                echo PHP_EOL;
            }
            $command3 = (int)readline('Enter key for film You wan to return:');
            $film = $films[$command3];
            $film->addStock();
            echo 'You returned ' . $film->getFilmTitle(), PHP_EOL;
            $command4 = (int)readline('Please rate film from 1 to 5');
            $film->addRating($command4);
            break;
        case 3:
            echo 'Current stocks: ' . PHP_EOL;
            foreach ($films as $film) {
                echo 'Key for film: ' . $film->getFilmKey() . ' ';
                echo ', Title :' . $film->getFilmTitle() . ' ';
                echo ', Film stock :' . $film->getStock() . ' ';
                echo ', Rating :' . $film->getAVGRating() . ' ';
                echo PHP_EOL;
            }
            break;
        default:
            echo "Sorry, I don't understand you..";
    }
}

