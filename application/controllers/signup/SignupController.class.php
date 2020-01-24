<?php 

class SignupController{
	  public function httpGetMethod(Http $http, array $queryFields)
    {
     
    
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

        $user = new UserModel();
        
      
        if($formFields["first_name"] == "" || $formFields["last_name"] == "" || $formFields["email"] == "" || $formFields["password"] == "")
        {
            $http->redirectTo("/signup");

        }
        else
        {
            $user->insertUser($formFields);
            $http->redirectTo("/");
            

        }
            	
    }
}



?>
