<?php

class Vehicle
{
    public function startEngine()
    {
        echo "Motor encendido.\n";
    }

    public function drive()
    {
        echo "El vehículo está en movimiento.\n";
    }
}

class Car extends Vehicle
{
    // Funciona perfectamente, ya que un coche tiene motor y se mueve
}

class Bicycle extends Vehicle
{
    public function startEngine()
    {
        throw new Exception("Una bicicleta no tiene motor.");
    }

    public function drive()
    {
        echo "La bicicleta está siendo pedaleada.\n";
    }
}

// Uso
function operateVehicle(Vehicle $vehicle)
{
    $vehicle->startEngine();
    $vehicle->drive();
}

// Prueba
$car = new Car();
operateVehicle($car); // Funciona correctamente: "Motor encendido" y "El vehículo está en movimiento."

$bicycle = new Bicycle();
operateVehicle($bicycle); // Error: Comportamiento inesperado ("Una bicicleta no tiene motor.")
