<?php
class db{
	private $hostname="localhost";
	private $username="it58160253";
	private $password="CHSU#2785";
	private $dbname="it58160253";
	public $link;
	public $result;

	function connect(){
		if($this->link=mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname)){
			mysqli_query($this->link,"SET CHARACTER SET UTF-8");
			echo "Connected";
			return true;
		}else{
			echo "Can't connect to the database";
			return false;
		}
         
	}
	function query($sql){
		if ($this->result=mysqli_query($this->link,$sql)){
			return true;
		}else{
			return false;
		}

	}
	function close(){
		mysqli_close($this->link);
	}
}
?>