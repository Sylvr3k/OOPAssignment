<?php

// Abstract class
// Abstract classes are classes that cannot be instantiated on their own and are intended to be subclassed.
//When to Use Abstract Classes:

   // When you have a base class that should not be instantiated directly.
   // When you want to provide common functionality to multiple related classes.
   // When you need to define a contract for subclasses while also providing some default behavior.

   abstract class Vehicle {
    protected $make;
    protected $model;

    public function __construct($make, $model) {
        $this->make  = $make;
        $this->model = $model;
    }

    // Concrete method with common functionality
    public function getDetails() {
        return "{$this->make} {$this->model}";
    }

    // Abstract method to be implemented by subclasses
    abstract public function startEngine();
}

// Subclass Car implementing the abstract method
class Car extends Vehicle {
    public function startEngine() {
        echo "Starting the car engine: {$this->make} {$this->model}.\n";
        echo "<br><br>";
    }
}

// Subclass Truck implementing the abstract method
class Truck extends Vehicle {
    public function startEngine() {
        echo "Starting the truck engine: {$this->make} {$this->model}.\n";
        echo "<br><br>";    
    }
}

// Subclass Motorcycle implementing the abstract method
class Motorcycle extends Vehicle {
    public function startEngine() {
        echo "Starting the motorcycle engine: {$this->make} {$this->model}.\n";
        echo "<br><br>";
    }
}

// Usage
$car = new Car("Toyota", "Corolla");
echo $car->getDetails() . "\n";
$car->startEngine();

$truck = new Truck("Ford", "F-150");
echo $truck->getDetails() . "\n";
$truck->startEngine();

$motorcycle = new Motorcycle("Harley-Davidson", "Sportster");
echo $motorcycle->getDetails() . "\n";
$motorcycle->startEngine();

?>
