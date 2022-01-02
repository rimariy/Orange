<?php
include "include/init.php";

include "../models/user.php";

?>

<?php

if(empty($_GET['id'])){

    echo "done";

    
}

$user = User::find_by_id(($_GET['id']));

if($user){

    $user->delete();

    echo"done";

    }else{

            echo "error";
        }

?>