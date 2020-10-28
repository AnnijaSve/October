<?php

require_once 'Product.php';
require_once 'Formatter.php';

$product = new Product('Banana', 1.1, 13);

function print_product($product) {

    return $product->getName() . ', '. 'price '. $product->getPrice() . ', amount ' . $product->getAmount() ;
}
echo print_product($product);
echo PHP_EOL;


$products = [
    new Product('Logitech mouse', 70, 14),
    new Product('iPhone 5s', 999.99, 3),
    new Product('Epson EB-U05', 440.46, 1),
];

foreach ($products as $key => $product) {
    echo Formatter::name($product->getName());
    echo Formatter::price($product->getPrice());
    echo Formatter::amount($product->getAmount());
    echo PHP_EOL;
}