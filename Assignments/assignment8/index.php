<?php 

class StudentRegistration{
    private $studentName;
    private $registrationDate;

    public function setStudentName($name){
        $this->studentName = $name;
    }
    public function getStudentName(){
        return $this->studentName;
    }

    public function setRegistrationDate($date){
        $this->registrationDate = $date;
    }
    public function getRegistrationDate(){
        return $this->registrationDate;
    }

    public function daysSinceRegistration(){
        $dateStamp = time();
        $from_date = strtotime($this->registrationDate);
        $daysSinceRegistration = $dateStamp - $from_date;
        echo floor($daysSinceRegistration/ (60 * 60 * 24));
    }
}

$student = new StudentRegistration();
$student->setStudentName("Router");
$student->setRegistrationDate("2023-3-1");
echo $student->getStudentName() . "<br/>"; 
echo $student->getRegistrationDate() . "<br/>";
echo $student->daysSinceRegistration() . "days";
?>