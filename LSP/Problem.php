<?php
declare(strict_types = 1);

class Rectangle
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

class Square extends Rectangle
{
    public function __construct(
        protected int $width
    )
    {
        parent::__construct($width, $width);
    }
}

$width = 5;
$height = 4;
$rectangle = new Rectangle($width, $height);
echo $rectangle->area() . "\n";

$square = new Square($width);
echo $square->area() . "\n";
