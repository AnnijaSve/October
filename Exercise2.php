<?php
require_once 'Point.php';

$points = [
$p1 = new Point(5, 2),
$p2 = new Point(-3, 6),
];

function swapPoints($p1, $p2)
{

    echo "(" . $p2->getX() . ", " . $p2->getY() . ")" ,PHP_EOL;
    echo "(" . $p1->getX() . ", " . $p1->getY() . ")";
    
}

echo swapPoints($p1, $p2);


