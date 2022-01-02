<?php

include ("obj_project.php");

class User extends obj_project {

    public static $table_name = "users";
    protected static $db_table_fields = array("username", "email", "password", "first_name", "last_name", "Skills","about_me",  "linkedin", "github", "type_user", "status", "phone_number","birthDate", "commuinty_id");
    public $id;
    public $username;
    public $email;
    public $password;
    public $first_name;
    public $last_name;
    public $phone_number;
    public $Skills;
    public $about_me;
    public $birthDate;
    public $linkedin;
    public $github;
    public $status = "Ofline";
    public $type_user = "student";
    public $commuinty_id;
    // public $image = USERS_MAIN_PHOTOS_PATH;



    public static function verify_user($email,$password){

        global $database;

        $email= $database->escape_string($email);
        $password = $database->escape_string($password);


        $sql = "SELECT * FROM ". self::$table_name. " WHERE ";
        $sql.= "email = '{$email}'";
        $sql.= "AND password = '{$password}'";
        $sql.="LIMIT 1";

        $the_result_array = self::find_by_query($sql);


        return !empty($the_result_array) ? array_shift($the_result_array) : false;

    }



}







