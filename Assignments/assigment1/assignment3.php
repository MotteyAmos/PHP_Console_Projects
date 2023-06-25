<?php

use Shape as GlobalShape;

interface ShapeInterfce{
    public function calculateArea();
}

abstract class Shape implements ShapeInterfce{
    private $name;
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

class Circle extends Shape{
    public $radius;

    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function calculateArea(){
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape{
    public $length;
    public $width;

    public function setLength($length){
        $this->length = $length;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function getLenth(){
        return $this->length;
    }
    public function getWidth(){
        return $this->width;
    }
    public function calculateArea(){
        return $this->length * $this->width;
    }
}

$circle1 = new Circle();
$circle1->setRadius(7);
$circle1->setName("circle1");
echo  $circle1->getName() ." area is: ". $circle1->calculateArea();
echo "<br><br><br>";

$rectangle1 = new Rectangle();
$rectangle1->setName("Rectangle1");
$rectangle1->setLength(4);
$rectangle1->setWidth(7);
echo $rectangle1->getName() . " area is: ". $rectangle1->calculateArea();

?>