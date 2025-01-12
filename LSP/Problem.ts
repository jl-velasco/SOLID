class Vehicle {
    public startEngine(): void {
        console.log("Motor encendido.");
    }

    public drive(): void {
        console.log("El vehículo está en movimiento.");
    }
}

class Car extends Vehicle {
    // Funciona perfectamente, ya que un coche tiene motor y se mueve
}

class Bicycle extends Vehicle {
    public startEngine(): void {
        throw new Error("Una bicicleta no tiene motor.");
    }

    public drive(): void {
        console.log("La bicicleta está siendo pedaleada.");
    }
}

function operateVehicle(vehicle: Vehicle): void {
    try {
        vehicle.startEngine();
        vehicle.drive();
    } catch (error) {
        if (error instanceof Error) {
            console.error(error.message);
        }
    }
}

const car = new Car();
operateVehicle(car);

const bicycle = new Bicycle();
operateVehicle(bicycle);