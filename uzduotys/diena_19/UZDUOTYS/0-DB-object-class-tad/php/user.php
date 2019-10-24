<?php 
 class user{
	 public $id;
	 public $username;
	 public $password;
	 
	 public function __construct($id){
		$this->$id;
	 }
	 
	 public function getUser(){
		$qry = "SELECT * FROM users WHERE id = $this->id";
        $resultai = mysqli_query(getPrisijungimas(),     $qry);
        $resultataiArray = mysqli_fetch_row($resultai);
		
		$this->id = $resultataiArray[0];
		$this->username = $resultataiArray[1];
		$this->password = $resultataiArray[2];
	 }
	 
	 public function createUser($vardas, $password){
	 }
	 
	 public function deleteUser($id){
	 }
	 
	 
 }



?>