<?php 

class AboutController{
	  public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
    
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

            $http->redirectTo("/about");   	
    }
}



?>
