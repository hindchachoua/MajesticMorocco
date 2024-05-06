<?php

// class Rectangle {
//     private $length;
//     private $width;

//     public function __construct($length, $width)
//     {
//         $this->length = $length;
//         $this->width = $width;
//     }

//     public function getArea(){
//         return $this->length * $this->width;
//     }
//     public function getPerimeter(){
//         return 2 * ($this->length + $this->width);
//     }
// }

// $rectangle = new Rectangle(10, 20);
// echo "Area:" . $rectangle->getArea();

// echo "<br>";

// echo "Perimeter:" . $rectangle->getPerimeter();



?>

<?php

class Circle {
    private $raduis;


    public function __construct($raduis){
        $this->raduis = $raduis;
    }

    public function getArea(){
        return pi() * $this->raduis * $this->raduis;
    }
    public function getCircumference(){
        return 2 * pi() * $this->raduis;
    }
}

?>


<?php

abstract class Shape{
    abstract public function calculateArea();
}

class Rectangle extends Shape{
    private $length;
    private $width;
    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea(){
        return $this->length * $this->width;
    }
}

class Triangle extends Shape{
    private $base;
    private $height;
    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }
    public function calculateArea(){
        return 0.5 * $this->base * $this->height;
    }
}

$triangle = new Triangle(5, 7);
echo "Triangle Area: " . $triangle->calculateArea() . "</br>";

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "</br>";
?>

<?php

interface Resizable {
    public function resize($percentage);
}

class Square implements Resizable {
    private $side;
    public function __construct($side){
        $this->side = $side;
    }
    public function resize($percentage){
        $this->side = $this->side + ($this->side * $percentage / 100);
    }
}

?>

<?php

    class Vehicle {
        private $brand;
        private $model;
        private $year;

        public function __construct($brand, $model, $year){
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }

        public function __toString(){
            return $this->brand . ' ' . $this->model . ' ' . $this->year;
        }
    }

    $vehicle = new Vehicle("Ford", "F-150", 2020);
    echo $vehicle;
?>

<?php

//     class Person {
//         private $name;
//         private $age;

//         public function __construct($name, $age){
//             $this->name = $name;
//             $this->age = $age;
//         }

//         public function __toString()
//         {
//             return $this->name . " " . $this->age;

//         }
//     }
// $person = new Person("hind", 18);

// echo $person;

?>

<?php

class Person {
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->name . " " . $this->age;

    }
}

class Employee extends Person {
    private $salary;
    private $position;

    public function __construct($name, $age, $salary, $position){
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function __toString(){
        return parent::__toString(). " ". $this->salary. " ". $this->position;
    }
}

$employee = new Employee("hind", 18, 1000, "developer");
echo $employee;

?>

<?php

interface Comparable {
    public function compareTo($other);
}

class Product implements Comparable{
    private $name;
    private $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function compareTo($other){
        if($this->price > $other->price){
            return 1;
            } else if($this->price < $other->price){
                return -1;
            } else {
                return 0;
            }
}
}
$product1 = new Product("Desktop", 1200);
$product2 = new Product("Laptop", 1000);

$result = $product1->compareTo($product2);


?>

<?php

class ShoppingCart {
    private $items;
    private $total;

    public function __construct()
    {
        $this->items = [];
        $this->total = 0;
    }

    public function getitems(){
        return $this->items;
    }

    public function getTotal(){
        return $this->total;
    }

    public function addItem($item, $price){
        $this->items[$item] = $price ;
        $this->total += $price;
    }

}



?>


<?php 

abstract class Employe {
    private $name;
    private $id;
    private $post;
    private $salary;

    public function __construct($name, $id, $post, $salary){
        $this->name = $name;
        $this->id = $id;
        $this->post = $post;
        $this->salary = $salary;
    }

    public function getName(){
        return $this->name;
    }
    public function getId(){
        return $this->id;
    }
    public function getPost(){
        return $this->post;
    }
    public function getSalary(){
        return $this->salary;
    }
    abstract public function calculateSalary();
}

class EmployeTempsPlein extends Employe {
    private $fixSalary;
    public function __construct($name, $id, $post, $salary){
        parent::__construct($name, $id, $post, $salary);
        $this->fixSalary = $salary;
    }

    public function calculateSalary(){
        return $this->fixSalary;
    }
}

class EmployeTempsPartiel extends Employe {
    private $hourlyRate;

    public function __construct($name, $id, $post, $salary, $hourlyRate){
        parent::__construct($name, $id, $post, $salary);
        $this->hourlyRate = $hourlyRate;
    }

    public function calculateSalary(){
        return $this->hourlyRate * 8;
    }   
}

class cadre extends Employe{
    private $bonus;
    private $salaire;

    public function __construct($name, $id, $post, $salary, $bonus){
        parent::__construct($name, $id, $post, $salary);
        $this->bonus = $bonus;
        $this->salaire = $salary;
    }

    public function calculateSalary(){
        return $this->salaire + $this->bonus;
    }
}
?>