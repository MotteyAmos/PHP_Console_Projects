<?php 

abstract class Shape{
    private $name;

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    abstract function calculateArea();

}

class Circle extends Shape{
    private $radius;

    function setRadius($radius){
        $this->radius = $radius;
    }
    function getRadius(){
        return $this->radius;
    }

    function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape{
    private $length;
    private $width;

    public function setLength($length){
        $this->length = $length;
    }
    public function setWidth($width){
        $this->width = $width;
    }

    public function getWidth(){
        return $this->width;
    }
    public function getLength(){
        return $this->length;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}

$circle1 =new Circle();
$circle1->setRadius(7.5);
echo "Area of circle1 is: " .$circle1->calculateArea();
echo "<br><br><br>";

$rectangle1 = new Rectangle();
$rectangle1->setLength(7);
$rectangle1->setWidth(12);
echo "Area of rectangle1 is: ". $rectangle1->calculateArea();





?>