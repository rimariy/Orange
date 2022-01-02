<?php

include "include/init.php";
include "include/header.php";
include "models/user.php";

?>

<?php

$users=new User();
if(isset($_POST['submit'])){
$email = trim($_POST['email']);
$password= trim($_POST['password']);
$user_found = User::verify_user($email,$password);
if ($user_found){

  header("location:index.php");
}
else {
  $the_message="your password or email are incorrect";
}


}






?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src=image/Color-Orange-Logo.jpg " alt="" width="200px"" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">

    <div class="col-md-5" id="coll-5">
    <form method="post">
        <div class="write">
        <h3>Welcome to your professional community </h3>
</div>

  <div class="mb-3" id="controll">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3"id="controll">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="submit" id="button" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-md-7" id="coll-7">
    <img src="image/2.png" class="img">
    </div>
</div>
</div>

<?php include "include/footer.php"; ?>