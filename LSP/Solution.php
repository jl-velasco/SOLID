<?php
declare(strict_types = 1);

abstract class Shape
{
    abstract public function area(): float|int;
}

class Rectangle extends Shape
{
    public function __construct(
        protected int $width,
        protected int $height,
    )
    {
    }

    public function area(): float|int
    {
        return $this->width * $this->height;
    }
}

class Square extends Shape
{
    public function __construct(
        protected int $width
    )
    {
    }

    public function area(): float|int
    {
        return $this->width * $this->width;
    }
}

$width = 5;
$height = 4;
$rectangle = new Rectangle($width, $height);
echo $rectangle->area() . "\n";

$square = new Square($width);
echo $square->area() . "\n";