<?php 
class BankAccount {
	var $_Tbalance=3500;
	public function DisplayBalance(){
		return $this->balance;
	}
}
$alex=new BankAccount;
echo $alex->_Tbalance;

?>

