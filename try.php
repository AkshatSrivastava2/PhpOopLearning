<?php 
class DatabaseException extends Exception {
public function showSpecific(){
	return  "Error on line : ".$this->getLine()." in ".$this->getFile();
}
}
class ServerException extends Exception{
public function showSpecific(){
	return  "Error on line : ".$this->getLine()." in ".$this->getFile();
}
}
try{
if(!@mysql_connect("localhost","akshat","")){
	throw new ServerException();
}
elseif (!@mysql_select_db("musicplayer1")){
	throw new DatabaseException();
}
else{
	echo "Connected ";
}
}
catch(ServerException $ex){
echo $ex->showSpecific();
}catch(DatabaseException $ex){
echo $ex->showSpecific();
}
?>