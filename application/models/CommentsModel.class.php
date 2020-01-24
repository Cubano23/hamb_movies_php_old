<?php

class CommentsModel{
 public $id_post;

    function insertComment($formFields){

        $database = new Database();

        $query = "INSERT INTO comments (id_user,id_post,description,recordstatus,date_create)  VALUES (?,?,?,?,NOW())";
        $this->id_post = $formFields["id_post"];
        session_start();
        return $database->executeSql($query,[$_SESSION["id"],$formFields["id_post"],$formFields["comment"],0]
			);
    }
    function getCommentsById(){

        $database = new Database();

        $sql = 'SELECT id,id_user,description,date_create 
                FROM comments';
             
          

        // Récupération de tous les articles.
        return $database->query($sql);
        
    }

  




}
?>
