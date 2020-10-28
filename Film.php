<?php

class Film
{
    private int $filmKey;
    private string $title;
    private string $stock;
    private float $rating;
    private array $ratings;

    public function __construct(int $filmKey, string $title, string $stock, float $rating)
    {
        $this->filmKey = $filmKey;
        $this->title = $title;
        $this->stock = $stock;
        $this->rating = $rating;
    }

    public function getFilmKey(): int
    {
        return $this->filmKey;
    }

    public function getFilmTitle(): string
    {
        return $this->title;
    }

    public function getStock(): string
    {
        return $this->stock;
    }

    public function removeStock(): string
    {
        return $this->stock = "Checked out";;
    }

    public function addStock(): string
    {
        return $this->stock = "In stock";
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function addRating($rating): void
    {
        if ($rating == null) {
            $this->ratings[] = 0;
        } elseif ($rating >= 0) {
            $this->ratings[] = $rating;
        }
    }

    public function getAllRatings(): array
    {
        if ($this->ratings[] = null) {
            return $this->ratings[] = null;
        } else {
            return array_filter($this->ratings);
        }
    }

    public function getAVGRating(): float

    {
        if ($this->getAllRatings() == null) {
            return $this->rating;
        } else {
            return round(array_sum($this->getAllRatings()) / count($this->getAllRatings()), 2);
        }
    }
}