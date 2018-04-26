<?php
class database{
	public $host="localhost:3308";
	public $username="root";
	public $pass="root";
	public $db_name="finals";
	public $conn;
	public $data;
	
	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno){
			die ("database connection failed".$this->conn->connect_errno);
		}
		
	}
	
	public function url($url){
		header("location:".$url);
	}
	
	public function login($data){
		$this->conn->query($data);
		return true;
	}
	
	
	public function user_profile($username){
		$query=$this->conn->query("Select * from student where student_id='$username'");
		$row=$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows > 0){
			$this->data[]=$row;
		}
		return $this->data;
	}
	
}
	
	