<?php 

class BankAccount{
    protected $accountNumber, $accountHolderName, $balance;

    public function setAccountNumber($accountNumber){
        $this->accountNumber = $accountNumber;
    }
    public function getAccountNumber(){
        return $this->accountNumber;
    }
    public function setAccountHolderName($accountHolderName){
        $this->accountHolderName = $accountHolderName;
    }
    public function getAccountHolderName(){
        return $this->accountHolderName;
    }

    public function deposit($amount){
     $this->balance += $amount;   
    }
    public function widthdraw($amount=0){
        if ($this->balance > $amount){
            $this->balance -= $amount;
        }
        else{
            echo "You have insufficiant balance ";
        }
    }
    public function getBalance(){
        return $this->balance;
    }
}


$bankAccount1 = new BankAccount();
$bankAccount1->setAccountHolderName("Edem");
$bankAccount1->setAccountHolderName("243");
$bankAccount1->deposit(1000);
$bankAccount1->widthdraw(10);
echo "Bank account1 balance is: ". $bankAccount1->getBalance();

class SavingsAccount extends BankAccount{
    protected $interestRate;

    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }
    public function getInterestRate(){
        return $this->interestRate;
    }
    public function addInterest(){
         $this->balance += $this->interestRate * $this->balance;
    }
}

$savingsAccount1 = new SavingsAccount();
$savingsAccount1->setAccountNumber("545");
$savingsAccount1->setAccountHolderName("Edith");
$savingsAccount1->deposit(1000);
$savingsAccount1->setInterestRate(0.3);
$savingsAccount1->addInterest();
echo "<br><br>";
echo "savingsAccount1 balance: ". $savingsAccount1->getBalance();

class CheckingAccount extends BankAccount{
    protected $transactionFee;

    public function setTransactionFee($transactionFee){
        $this->transactionFee = $transactionFee;
    }
    public function getTransactionFee(){
        return $this->transactionFee;
    }
    public function widthdraw($amount=0){
        $this->balance -= $this->transactionFee;
    }
}

echo "<br><br>";
$checkingAccount = new CheckingAccount();
$checkingAccount->setAccountNumber("55");
$checkingAccount->setAccountHolderName("Joseph");
$checkingAccount->deposit(200);
$checkingAccount->setTransactionFee(20);
$checkingAccount->widthdraw();
echo "checkAccount1 transaction fee: " .$checkingAccount->getTransactionFee();
echo "<br><br>";
echo "checkAccount1 balance fee: " .$checkingAccount->getBalance();
?>