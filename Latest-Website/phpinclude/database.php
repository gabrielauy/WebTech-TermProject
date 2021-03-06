<?php
class database{
	public $host="localhost:3306";
	public $username="root";
	public $pass="";
	public $db_name="finals";
	public $conn;
	public $topic;
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
	
	public function signup($data){
		$this->conn->query($data);
		return true;
	}
	
	public function user_profile($username){
		$query=$this->conn->query("Select * from loginsystem where username='$username'");
		$row=$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows > 0){
			$this->data[]=$row;
		}
		return $this->data;
	}
	
	public function topic_show(){
		$query=$this->conn->query("Select * from topics");
		while($row=$query->fetch_array(MYSQLI_ASSOC)){
			$this->topic[]=$row;
		}
		return $this->topic;
	}
	
	public function question($question){
		//echo $question;
		$query=$this->conn->query("Select * from questions where topic_id = '$question'
		ORDER BY
		rand() ");
		$resultcheck = mysqli_num_rows($query);
		
		if (!$resultcheck > 0){
				header("location:../quizzer.php");
		}else{
			while($row=$query->fetch_array(MYSQLI_ASSOC)){
				$this->question[]=$row;
			}
			return $this->question;
		}
	}
	
	public function answer($data){
		$ans=implode("",$data);
		$right=0;
		$wrong=0;
		$no_answer=0;
		$query=$this->conn->query("Select * from questions where topic_id = '".$_SESSION['topic']."'");
		while($qust=$query->fetch_array(MYSQLI_ASSOC)){
			if ($qust['ans']==$_POST[$qust['question_id']]){
				$right++;
			}elseif($_POST[$qust['question_id']]=="no_attempt"){
				$no_answer++;
			}else{
				$wrong++;
			}
		}
		$array=array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_answer']=$no_answer;
		return $array;
	}
	
	public function show_users(){
		$query=$this->conn->query("Select * from loginsystem ORDER BY 1 ASC");
		while($row=$query->fetch_array(MYSQLI_ASSOC)){
			$this->show_users[]=$row;
		}
		return $this->show_users;
	}
}
	