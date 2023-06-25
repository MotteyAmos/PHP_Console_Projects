<?php 

class Vehicle{
    private $make, $model, $year, $color, $engine;

    public function setMaker($make){
        $this->make = $make;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function setYear($year){
        $this->year = $year;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function setEngine($engine){
        $this->engine = $engine;
    }
    public function getMake(){
        return $this->make;
    }
    public function getModel(){
        return $this->model;
    }
    public function getYear(){
        return $this->year;
    }
    public function getColor(){
        return $this->color;
    }
    public function getEngine(){
        return $this->engine;
    }
}

class Engine{
    private $type, $displacement, $horsepower;

    public function setType($type){
        $this->type = $type;
    }
    public function setDisplacement($displacement){
        $this->displacement = $displacement;
    }
    public function setHorsepower($horsepower){
        $this->horsepower = $horsepower;
    }
    public function getType(){
        return $this->type;
    }
    public function  getDisplacement(){
        return $this->displacement;
    }
    public function getHorsepower(){
        return $this->horsepower;
    }
}

$vehicle1 = new Vehicle();
$vehicle1->setMaker("Yaw Okumo");
$vehicle1->setModel("Model5");
$vehicle1->setYear(2022);
$vehicle1->setColor("Ash");

$engine1 = new Engine();
$engine1->setType("V8-gPlus");
$engine1->setDisplacement(10);
$engine1->setHorsepower(5000);

$vehicle1->setEngine($engine1);

echo "vehicle1 maker: " . $vehicle1->getMake();
echo "<br><br>";
echo "vehicle1 mode: " . $vehicle1->getModel();
echo "<br><br>";
echo "vehicle1 year: " . $vehicle1->getYear();
echo "<br><br>";
echo "vehicle1 color: " . $vehicle1->getYear();
echo "<br><br>";
echo "vehicle1 color: ".$vehicle1->getColor();
echo "<br><br>";
echo "vehicle1 engine type: ".$vehicle1->getEngine()->getType();
echo "<br><br>";
echo "vehicle1 engine displacement: " .$vehicle1->getEngine()->getDisplacement();
echo "<br><br>";
echo "vehicle1 engine hoursepower: " .$vehicle1->getEngine()->getHorsepower();

?>