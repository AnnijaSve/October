<?php

namespace App;

class Formatter
{
    public static function title(string $title): string
    {
        return '"' . $title . '"';
    }

    public static function studio(string $studio): string
    {
        return '"' . $studio . '"';
    }

    public static function rating(string $rating): string
    {
        return '"' . $rating . '"';
    }
}