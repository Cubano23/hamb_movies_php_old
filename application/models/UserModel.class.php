<?php
class UserModel{

	function insertUser($formFields){

		$database = new Database();

		$query = "INSERT INTO users (first_name, last_name, email, password, date_create, date_update) VALUES (?,?,?,?,NOW(),NOW())";


		return $database->executeSql($query,[$formFields["first_name"],$formFields["last_name"],$formFields["email"],$formFields["password"]]
			);

	}

	function loginUser($email, $password){
		$database = new Database();

		$query = "SELECT * FROM users WHERE email = ? and password = ?";


		return $database->queryOne($query, [$email, $password]);
	}

	function getUser(){
		$database = new Database();

		$query = "SELECT last_name FROM users WHERE id in (SELECT id_user FROM comments)";


		return $database->query($query);
	}


	
} 

?>