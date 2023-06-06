<?php
declare(strict_types = 1);

class Car
{
    public function __construct(
        private readonly Engine $engine,
    )
    {
    }

    public function environmentalLabel(): string
    {
        $pollution = $this->engine->powerPollution();
        //Logica para calcula la etiqueta medio ambiental
        return 'AAA';
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

    public function powerPollution(): float
    {
        return $this->power->pollution();
    }
}

class Power
{
    const POLLUTION_RATE = 1.2;

    public function __construct(private readonly int $power)
    {
    }

    public function value(): int
    {
        return $this->power;
    }

    public function pollution(): float
    {
        //Logica para calcular la contaminacion
        return $this->power * self::POLLUTION_RATE;
    }
}
