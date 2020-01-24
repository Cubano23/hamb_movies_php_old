<?php 

class LoginController{
	  public function httpGetMethod(Http $http, array $queryFields)
    {
     
    
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    	$login = new UserModel();
        $user = $login->loginUser($formFields["email"], $formFields["password"]);
        
        if($user == ""){
                $http->redirectTo("/login");  
        }else{
                session_start();
                $_SESSION["id"] = $user["id"];
                $_SESSION["first_name"] = $user["first_name"];
                $_SESSION["last_name"] = $user["last_name"];        
                $http->redirectTo("/home"); 
        }    	
    }
}



?>
