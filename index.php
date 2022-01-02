<?php

include "include/init.php";
include "include/header.php";
include "include/nav.php";
include "models/post.php";
include "models/comment.php";
include "models/commuinty.php"


?>

<?php

if ( isset($_POST['submit']) && isset($_POST['body'])) {

$post1=new Post();


  $post1->body=$_POST['body'];
  $post1->add_date= date("Y-m-d H:i:s");
  // $post1->media=$_POST['image_uploads'];
  // $post1->media=$_POST['video_uploads'];
  $post1->privacy=$_POST['private'];
  $post1->user_id=1;
  $post1->commuinty_id=1;
  $post1->start_upload($_FILES['uplode']);
  $post1->create();


}
?>

<?php

if ( isset($_POST['submit2']) && isset($_POST['body2'])) 
  {
        $comm=new Comment();  

    $comm->body=$_POST['body2'];
    $comm->add_date= date("Y-m-d H:i:s");
    $comm->user_id=1;
    $comm->post_id=$_POST['post_id'];
    $comm->create();
  }
  



?>



<div class="wrapper">
<div class="container home-container ">
  <div class="row ">
  
    <!---------------------------------------person card------------------------------------------------>
    <div class="col person-col ">
      <div class=" person-card mb-3 card-person" style="width: 15rem;">
        <img src="image/user.png" class="card-img-top person-card-img" alt="...">
        <div class="card-body">
         <h5 class="card-title">Rima Riyad</h5>
          <p class="card-text"> Orange coding school</p>
          <br>
          <a href="#" class="btn btn-primary hide-small">Log Out</a>
        </div>
      </div>
    </div>
    <!------------------------------------post card----------------------------------------------------->
    <div class="col-6 col-sm-12 post-col">
      <!------------------------------------add post---------------------------------------------------->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">good morning Rima</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class=" text-end"> 
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Start a Post</button>  
          </div>
        </div>
      </div>
      <br> 
      <!---------------------------------------- posts ----------------------------------------------->
          <?php
            

            $result=false;
            // Enter a value through which we filter the values in the table
            if (isset($_GET['search'])) {
              $valueToSearch = $_GET['valueToSearch'];
              $result6=Commuinty::find_all();
              $commuinty_id=false;
              foreach($result6 as $row){
                if($row->name == $valueToSearch){
                  $commuinty_id=$row->id;
                }
              }
              if(!is_numeric($commuinty_id)){
                echo "<h5> This community doesn't exist! </h5>";
              }else{
              $result=Post::find_all_DESC_by_community($commuinty_id);}
            } 
            //Get all values if no value is entered for the filter
            else {
              if($result==false){
              $result=Post::find_all_DESC(); }
            }
            if($result==false){
              $result=Post::find_all_DESC(); }
            // var_dump($result);
            
            foreach($result as $row){
              if($row->privacy ==='public'){
            $dropId="".$row->id."id";
          ?>
      <div class="card">
        <div class="card-body">
          <div class="row g-0">
            <div class="col-2">
              <img src="image/user.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-6 left-contect ">
              <div class="card-body left-contect">
                <h6 class="card-title">Haneen Al-Khalili</h6>
                <p class="card-text user-type">Orange coding school</p>
              </div>
            </div>
          <!---------------------------------------------------------------------------------> 
         
          <!--------------------------------------------------------------------------------->
          <!-- pre tag for line break -->
          <p class="card-text"><pre><?=$row->body?></pre></p>
          <p class="card-text"><small class="text-muted"><?=$row->add_date?></small></p>
        </div>
        <?php
        if($row->media!=null){
          if($row->type()=="mp4"){
        ?>
          <video controls>
          <source src="<?=$row->image_path_placeholder();?>" type="video/mp4">
          </video>
        <?php
        }
        else{
          ?>
        <img src="<?=$row->image_path_placeholder();?>" class="card-img-bottom" alt="...">

        <?php
        }}
        ?>
        <div class="like-cont">
          <p class="p-likes"><i class="far fa-thumbs-up"></i> 55</p> 
          <?php
              $C=0; 
              $resulta=Comment::find_all();
              foreach($resulta as $rowa){
              if($rowa->post_id == $row->id){
                $C++;
              }
            }
          ?>
          <p class="p-comment"><i class="far fa-comment-dots"></i><?=$C;?></p>
        </div>
        <!--------------------------------------post like & comment-------------------------------------->
        <div class="btn-group">
          <button type="button" class="btn btn-outline-secondary">
            <i class="far fa-thumbs-up"></i>
            Like 
          </button>
          <a type="button" class="btn btn-outline-secondary"  onclick="showComment(<?=$row->id?>)"  >
           <i class="far fa-comment-dots"></i>
            comment 
          </a>
        </div>
        <!---------------------------------------------------------------------------------------------->
        <div class="hide" id="<?=$row->id?>">
          <form method="post" autocomplete="off">
          <div class="input-group mb-3">
            <input name="post_id" type="hidden" value="<?=$row->id?>">
            <input type="text" class="form-control" placeholder="add a comment" aria-label="Recipient's username" aria-describedby="button-addon2" name="body2" >
              <button class="btn btn-outline-secondary"  type="submit" id="button-addon2" name="submit2" > 
                <i class="fas fa-arrow-down"></i>
              </button>
          </div>
          </form>
          <!-------------------------------------------------------------------------------------------->
          <!-------------Information of the user who added the comment & the comment-------------------->
          <div> 
            <?php
            $result=Comment::find_all_DESC();
            foreach($result as $row2){
              if($row2->post_id === $row->id){
            ?>
            <div class="card mb-3 comment-card " style="max-width: 600px;">
              <div class="row g-0">
                <div class="col-2">
                  <img src="image/user.png" class="img-fluid rounded-start comment-user" alt="...">
                </div>
                <div class="col-10 title-col">
                  <div class="card-body">
                    <h6 class="card-title comment-title" >Haneen Al-Khalili</h6>
                    <p class="card-text fw-lighter comment-type">Orange coding school</p>
                  </div>
                  <div><?=$row2->body?></div>
                  <p class="card-text"><small class="text-muted comment-type"><?=$row2->add_date?></small></p>

               </div>
              </div>
            </div>
            <?php
              }}
            ?>
          </div>
          <!------------------------------here we add new comment -------------------------------------->
          <a href="#" class="link-dark comment-link">show more</a> 
        </div>
      </div>
      <?php 
             } }
      // kkk
      ?>
    </div>
    <!------------------------------------online users-------------------------------------------------->
    <div class="col col-sm-0 online-col home-container">
      <div class="card mb-3" style="max-width: 235px;  ">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/user.png" class="img-fluid rounded-start online-card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="card-title">Haneen Al-Khalili</h6>
              <p class="card-text user-type">Orange coding school</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!----------------------------------------------- Modal ------------------------------------------------>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create a post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!---------------------------------------------------------------------------------------------->
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/user.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="card-title">Haneen Al-Khalili</h6>
              <p class="card-text user-type">
              <select class="form-select" aria-label="Default select example" name="private">
                <option selected value="private"> private</option>
                <option value="public">public</option>
              </select>
              </p>
            </div>
          </div>
        </div>
        <!-----------------------------------------add img--------------------------------------------->
        <textarea class="form-control" placeholder="What do you want to talk about?" id="floatingTextarea" name="body"></textarea>
        <div>
          <label for="image_uploads" class="custom-file-upload">
            <i class="fas fa-images"></i>          
          </label>
          <input type="file" id="image_uploads" name="uplode"  multiple>
          <!-- <label for="image_uploads" class="custom-file-upload">
            <i class="fas fa-video"></i>
          </label>
          <input type="file" id="image_uploads" name="uplode" multiple>       -->
        </div>
        <!---------------------------------------------------------------------------------------------->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary" >Post</button>
      </div>
    </div>
    </form>
  </div>
</div>
<!--------------------------------------end Modal------------------------------------------------------->

<!-- does not resend comment on refresh -->
<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
  </script>



<?php include "include/footer.php"; ?>
