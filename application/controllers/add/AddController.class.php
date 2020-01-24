<?php 

class AddController{
	  public function httpGetMethod(Http $http, array $queryFields)
    {
         session_start();
    
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    	$user = new PostsModel();
    	$user->insertPost($formFields);
    	$http->redirectTo("/posts");
    	
    }
}



?>