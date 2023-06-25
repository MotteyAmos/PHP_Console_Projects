<?php 
class Person{
    protected $firstName, $lastName, $age;

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastname(){
        return $this->lastName;
    }
    public function getAge(){
        return $this->age;
    }
}

$person1 = new Person();
$person1->setFirstName("Router");
$person1->setLastName("Mottey");
$person1->setAge(21);

echo "Person1 firstName: ". $person1->getFirstName();
echo "<br><br>";
echo "Person1 LastName: ". $person1->getLastname();
echo "<br><br>";
echo "Person1 Age: ". $person1->getAge();
echo "<br><br>";

class Student extends Person{
    protected $gradeLevel, $gpa;

    public function setGradelevel($gradeLevel){
        $this->gradeLevel = $gradeLevel;
    }
    public function setGpa($gpa){
        $this->gpa = $gpa;
    }
    public function getGradeLevel(){
        return $this->gradeLevel;
    }
    public function getGpa(){
        return $this->gpa;
    }
}

$student1 = new Student();
$student1->setFirstName("Mottey");
$student1->setLastName("Edith");
$student1->setAge(20);
$student1->setGradelevel(200);
$student1->setGpa(3.89);


echo "student1 first name: ". $student1->getFirstName();
echo "<br><br>";
echo "Student1 last name: ". $student1->getLastname();
echo "<br><br>";
echo "Student1 age: ". $student1->getAge();
echo "<br><br>";
echo "Stuent1 grade level: ". $student1->getGradeLevel();
echo "<br><br>";
echo "Student1 gpa: ". $student1->getGpa();
echo "<br><br>";

class Teacher extends Person{
    protected $subject, $yearTeaching;
    public function setSubject($subject){
        $this->subject = $subject;
    }
    public function setYearTeaching($yearsTeaching){
        $this->yearTeaching = $yearsTeaching;
    }
    public function getSubject(){
        return $this->subject;
    }
    public function getYearTeaching(){
        return $this->yearTeaching;
    }
}

$teacher1 = new Teacher();
$teacher1->setFirstName("Tokoli");
$teacher1->setLastName("Joseph");
$teacher1->setAge(26);
$teacher1->setSubject("Programming1");
$teacher1->setYearTeaching(2);

echo "Teacher1 first name: ". $teacher1->getFirstName();
echo "<br><br>";
echo "Teacher1 last name: ". $teacher1->getLastname();
echo "<br><br>";
echo "Teacher1 age: ". $teacher1->getAge();
echo "<br><br>";
echo "Teacher1 subject of teaching: ". $teacher1->getSubject();
echo "<br><br>";
echo "Teacher1 year of teaching: ". $teacher1->getYearTeaching();
?>