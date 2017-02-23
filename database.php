<?php
class DatabaseConnect{
	public function __construct($db_host,$db_user,$db_password){
	if($this->Connect($db_host,$db_user,$db_password)){
		echo "Connected";
	}
	else if(!$this->Connect($db_host,$db_user,$db_password)){
		echo "Cannot Connect";
	}
	}

public function Connect($db_host,$db_user,$db_password){
return true;
}
}
$conn=new DatabaseConnect('localhost','root','');
?>