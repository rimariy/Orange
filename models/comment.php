<?php 

include_once ("obj_project.php");

class Comment extends obj_project{

    public static $table_name = "comment";
    protected static $db_table_fields = array("body", "add_date", "post_id",  "user_id");
    public $body;
    public $add_date;
    public $post_id;
    public $user_id;
    
   


    
}







?>