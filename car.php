<?php
class Car {
    public $make;
    public $model;
    public $year;
    public function __construct($make, $model, $year) {
      $this->make = $make;
      $this->model = $model;
      $this->year = $year;
    }
    public function drive() {
      echo "The car is driving.<br>";
    }
    public function stop() {
      echo "The car has stopped.<br>";
    }
  }
  $car = new Car("Toyota", "Camry", 2018);
  $car->drive();
  $car->stop();
?>
