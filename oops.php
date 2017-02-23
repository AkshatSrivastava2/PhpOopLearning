<?php  
class BankAccount{
public $balance=10;
public function DisplayBalance(){
	return "Balance : ".$this->balance.'<br>';
}
public function Withdraw($amount){
	if($this->balance<$amount){
		echo "Not enough funds<br>";
	}
	else 
	$this->balance=$this->balance-$amount;

}
}

$akshat=new BankAccount;
$akshat->Withdraw(12);
echo $akshat->DisplayBalance();
class SavingAccount extends BankAccount{

}
$akshat_savings=new SavingAccount;
$akshat_savings->Withdraw(5);
echo $akshat_savings->DisplayBalance();
?>