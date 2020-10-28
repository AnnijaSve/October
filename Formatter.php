<?php
class Formatter
{

    public static function price(float $price): string
    {
        return number_format($price, 2, '.', '.') . ' EUR, ' ;
    }

    public static function amount(int $amount): string
    {
        return $amount . ' units';
    }

    public static function name (string $name ): string
    {
        return '"' . $name . '", ';
    }
}
