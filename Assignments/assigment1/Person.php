<?php 
class Person{
    protected $name;
    protected $age;
    protected $gender;

    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }
}


class Employee extends Person{
    protected $id;
    protected $position;
    protected  $salary;

    public function setId($id){
        $this->id = $id;
    }
    public function setPosition($position){
        $this->position = $position;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function getId(){
        return $this->id;
    }
    public function getPosition(){
        return $this->position;
    }

}

class Manager extends Employee{
    private $bonus;

    public function setBonus($bonus){
        $this->bonus = $bonus;
    }
    public function getBonus(){
        return $this->bonus;
    }
}

function textMethods($objectName, $objectType, $name, $age, $gender, $id, $position, $salary, $bonus=0){
    if($objectType === "manager" ){
        ${$objectName} = new Manager();
        ${$objectName}->setBonus($bonus);
        echo $objectName." bonus: " . ${$objectName}->getBonus();
        echo "<br>";
    }else{
        ${$objectName} = new Employee();
    }

    ${$objectName}->setName($name);
    ${$objectName}->setAge($age);
    ${$objectName}->setGender($gender);
    ${$objectName}->setId($id);
    ${$objectName}->setPosition($position);
    ${$objectName}->setSalary($salary);

    echo "$objectName Name: " . ${$objectName}->getName();
    echo "<br>";
    echo "$objectName Age: " . ${$objectName}->getAge();
    echo "<br>";
    echo "$objectName Gender: " .${$objectName}->getGender();
    echo "<br>";
    echo "$objectName Id: " .${$objectName}->getId();
    echo "<br>";
    echo "$objectName position: " .${$objectName}->getPosition();
    echo "<br>";
    echo "$objectName salary: " .${$objectName}->getSalary();
    echo "<br><br><br>";

}

textMethods("employee1","employee","Router",20,"male", 1,"Head of Cybersecurity Team", 30050.50);
textMethods("employee2","employee","Mottey Amos Kojo Ababio",21,"male", 2,"Head of Software develop Team", 25050.50);

textMethods("manager1","manager","Yaw Obroni",21,"male", 1,"Manager of Software develop Team", 55050.50, 5000.00);
textMethods("manager2","manager","Mottey Edith",18,"female", 2,"Manager of UI Researchers  Team", 35050.50, 25000);
?>