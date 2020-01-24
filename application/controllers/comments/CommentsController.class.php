<?php 

class CommentsController{
	  public function httpGetMethod(Http $http, array $queryFields)
    {
         session_start();
    
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

        $comment = new CommentsModel();        
        $comment->insertComment($formFields);
    

    	$http->redirectTo("/posts");
    	
    }
}



?>