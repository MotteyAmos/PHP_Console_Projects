<?php 
class User{
    private $name;
    private $email;

    public function __construct($name="", $email="")
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function setName($name){
       $this->name = $name; 
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
}


$users = array();

class Admin extends User{

    public function deleteUser($user){
        foreach($GLOBALS['users'] as $value){
            if($user->getEmail() === $value->getEmail()){
                unset($GLOBALS['users'][$value]);
            }
        }
       
    }

    public function createUser($name,$email ){
        $user = new parent($name, $email);
        array_push($GLOBALS['users'],$user);
    }

    public function updataUser($user, $name, $email){
        for ($i=0; $i< count($GLOBALS['users'])-1; $i++){
           
            if($user->getEmail() === $GLOBALS['users'][$i]->getEmail()){
                $GLOBALS['users'][$i]->setName($name);
                $GLOBALS['users'][$i]->setEmail($email);
            }
        }
    }

}

$admin1 = new Admin();
$admin1->createUser("Router","akamottey@st.ug.edu.gh");
$admin1->createUser("Yaa Kumi","yaakumi@st.ug.edu.gh");
$admin1->createUser("Awuku Paul","awukupaul@st.ug.edu.gh");
$admin1->createUser("Mottey Amos","motteyamos@st.ug.edu.gh");
$admin1->createUser("Koj Ababio","kojoababio@st.ug.edu.gh");
$admin1->createUser("Kofi","akakofi@st.ug.edu.gh");


$updataUser = new User("Yaa Kumi", "yaakumi@st.ug.edu.gh");
$admin1->updataUser($updataUser, "updatadName", "updatedName@st.ug.edu.gh");


$deleteUser = new User("Kofi","akakofi@st.ug.edu.gh");
$admin1->deleteUser($deleteUser);

foreach($users as $user){
    echo $user;
}


?>