<?php

namespace App;

abstract class Movie
{
    public abstract function getTitle(): string;

    public abstract function getStudio(): string;

    public abstract function getRating(): string;

}