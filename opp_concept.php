<?php
// Class Object
echo "Class Object<br/>";

class Car
{
  public $model;
  public $color;
  private $price;
  public function __construct($model, $color, $price)
  {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
  }

  public function display()
  {
    echo "Model: " . $this->model . "<br>";
    echo "Color: " . $this->color . "<br>";
    echo "Price: " . $this->price . "<br>";
  }
}

$car_object = new Car('BMW', 'Black', 1000000);
// can not access private property
// echo $car_object->price;
echo "<br>";
$car_object->display();

// Inheritance
echo "<br/><br/>Inheritance<br/><br/>";
class ElctricCar extends Car
{
  public $battery_capacity;
  public function __construct($model, $color, $price, $battery_capacity)
  {
    parent::__construct($model, $color, $price);
    $this->battery_capacity = $battery_capacity;
  }

  public function display()
  {
    parent::display();
    echo "Battery Capacity: " . $this->battery_capacity . "<br>";
  }
}
$elctric_car = new ElctricCar('Tesla', 'White', 5000000, '1000mAh');
$elctric_car->display();

// Abstraction 
echo "<br/><br/>Abstraction<br/><br/>";
abstract class Shape
{
  abstract public function area();
}
class Circle extends Shape
{
  public $radius;
  public function __construct($radius)
  {
    $this->radius = $radius;
  }
  public function area()
  {
    return 3.1416 * $this->radius * $this->radius;
  }
}

$circleObj = new Circle(10);
echo "Circle Area: " . $circleObj->area();

// Polymorphism
echo "<br/><br/>Polymorphism<br/><br/>";
class Animal
{
  public function sound()
  {
    echo "Animal Sound";
  }
}
class Dog extends
Animal
{
  public function sound()
  {
    echo "Dog Bark";
  }
}
class Cat extends
Animal
{
  public function sound()
  {
    echo "Cat Meow";
  }
}

$animalObj = new Animal();
$animalObj->sound();
$dogObj = new Dog();
$dogObj->sound();
$catObj = new Cat();
$catObj->sound();
?>
