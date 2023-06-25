<?php 

class Person{
    protected $name, $gender;
    protected $age;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }

}

class Employee extends Person{
    protected $id, $postion, $salary;

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setPosition($position){
        $this->position = $position;
    }
    public function getPosition(){
        return $this->position;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
}

class Manager extends Employee{
    protected $bonus;
    public function setBonus($bonus){
        $this->bonus = $bonus;
    }
    public function getBounus(){
        return $this->bonus;
    }
}

abstract class Shape{
    protected $name;
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        $this->name;
    }
    abstract public function calculateArea(){}
}

class Circle extends Shape{
    protected $radius;

    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getRadius(){
        $this->radius;
    }
    public function calculateArea(){
        return pi() * $this->radius * 2;
    }
}

class Rectangle extends Shape{
    protected $length, $width;

    public function setLength($length){
        $this->length = $length;
    }
    public function getLength(){
        return $this->length;
    }
    public function setWidth($width){
        $this->width= $width;
    }
    public function getWidth(){
        return $this->width;
    }
    public function calculateArea(){
        return $this->length * $this->width;
    }
}

interface ShapeInterface{
    public function calculateArea();

}
abstract class  Shape1 implements ShapeInterface{
    protected $name;
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

class Circle1 extends Shape1{
    protected $radius;

    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function calculateArea(){
        return pi() * $this->radius * 2;
    }
}

class User{
    protected $name, $email;
    
}
?>