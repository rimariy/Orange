<?php
include "include/init.php";
include "include/header.php";
// include "top_and_side.php";
include "../models/user.php";
// include "../models/obj_project.php";
?>


<?php



$user = new User();

if(isset($_POST['create'])){

if($user){

        $user->username=$_POST['username'];
        $user->first_name=$_POST['first_name'];
        $user->last_name=$_POST['last_name'];
        $user->password=$_POST['password'];
        $user->Skills=$_POST['Skills'];
        $user->about_me=$_POST['about_me'];
        $user->phone_number=$_POST['phone_number'];
        $user->birth_date= $_POST['birth_date'];
        $user->email=$_POST['email'];
        $user->linkedin=$_POST['linkedin'];
        $user->github=$_POST['github'];
        $user->type_user=$_POST['type_user'];
        $user->status=$_POST['status'];
        $user->commuinty_id=$_POST['commuinty_id'];
        // $user->set_file($_FILES['image']);

        // var_dump($user);die;
        $user->create();
}


}
?>
<div id="page-wrapper">
        <div class="container-fluid">

<!-- Page Heading -->
        <div class="row">
<div class="col-lg-12">
        <h1 class="page-header">
        users
        <small>Subheading</small>
        </h1>
        <form action="#" method="post" enctype="multipart/form-data">
        
        <div class="col-md-6 col-md-offset-3">

        

        <!-- <div class="form-group">

                <input type="file" name="image">


                </div> -->

                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control"  value="<?php echo $user->username ;?>">


                </div>

        

        <div class="form-group">

                <label for="first_name">First Name</label>

                <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name ;?>">


        </div>

        <div class="form-group">

                <label for="last_name">Last Name</label>

                <input type="text" name="last_name" class="form-control"  value="<?php echo $user->last_name ;?>">


        </div> 

        <div class="form-group">

                <label for="password">Password</label>

                <input type="password" name="password" class="form-control" value="<?php echo $user->password ;?>">


        </div> 
        <div class="form-group">
                <label for="Skills">Skills</label>
                <input type="text" name="Skills" class="form-control"  value="<?php echo $user->Skills ;?>">


                </div>
                <div class="form-group">
                <label for="about_me">about_me</label>
                <input type="text" name="about_me" class="form-control"  value="<?php echo $user->about_me ;?>">


                </div>
                <div class="form-group">
                <label for="username">phone_number</label>
                <input type="text" name="phone_number" class="form-control"  value="<?php echo $user->phone_number ;?>">


                </div>
                <div class="form-group">
                <label for="birthDate">birthDate</label>
                <input type="date" name="birth_date" class="form-control"  value="<?php echo $user->birth_date ;?>">


                </div>
                <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" class="form-control"  value="<?php echo $user->email ;?>">


                </div>
                <div class="form-group">
                <label for="linkedin">linkedin</label>
                <input type="text" name="linkedin" class="form-control"  value="<?php echo $user->linkedin ;?>">


                </div>
                <div class="form-group">
                <label for="username">github</label>
                <input type="text" name="github" class="form-control"  value="<?php echo $user->github ;?>">


                </div>
                <div class="form-group">
                <label for="type_user">type_user</label>
                <input type="text" name="type_user" class="form-control"  value="<?php echo $user->type_user ;?>">


                </div>
                <div class="form-group">
                <label for="status">status</label>
                <input type="text" name="status" class="form-control"  value="<?php echo $user->status ;?>">


                </div>
                <div class="form-group">
                <label for="commuinty_id">commuinty_id</label>
                <input type="text" name="commuinty_id" class="form-control"  value="<?php echo $user->commuinty_id ;?>">


                </div>
        
                        <div class="form-group">

                <input type="submit" name="create" class="btn btn-primary pull-right" value="create">


                </div> 

                

        </div>

        


                </form>


        </div>
        

</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->


        </div>



<?php include "include/footer.php"; ?>
