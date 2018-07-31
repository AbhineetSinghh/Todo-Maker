<?php 
	include_once 'class.database.php';

	class ManageUsers{
		public $link;

		function __construct(){
			$db_connection = new dbConnection();
			$this->link = $db_connection->connect();
			return $this->link;
		}

		function registerUsers($username,$email,$password,$ip_address,$reg_time,$reg_date){
			$query = $this->link->prepare("INSERT INTO users(username,email,password,ip_address,reg_time,reg_date) VALUES(?,?,?,?,?,?)");
			$values = array($username,$email,$password,$ip_address,$reg_time,$reg_date);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts;
		}

		function loginUsers($username,$password){
			$query = $this->link->prepare("SELECT * FROM users WHERE username='$username' AND password='$password'");
			$query->execute();
			$rowcount = $query->rowCount();
			return $rowcount;
		}

		function getUserInfo($username){
			$query = $this->link->prepare("SELECT * FROM users WHERE username='$username'");
			$query->execute();
			$rowcount = $query->rowCount();
			if ($rowcount==1) {
				$result = $query->fetchAll();
				return $result;
			} else{
				return $rowcount;
			}
		}

	}

?>