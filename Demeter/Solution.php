<?php
declare(strict_types = 1);

class Car
{
    public function __construct(
        private readonly Engine $engine,
    )
    {
    }

    public function power(): int
    {
        return $this->engine->powerValue();
    }
}

class Engine
{
    public function __construct(private readonly Power $power)
    {
    }

    public function power(): Power
    {
        return $this->power;
    }

    public function powerValue(): int
    {
        return $this->power->value();
    }
}

class Power
{
    public function __construct(private readonly int $power)
    {
    }

    public function value(): int
    {
        return $this->power;
    }
}
