<?php
include "include/init.php";
include "include/header.php";
include "include/nav.php";
include "models/job.php";

?>
        <?php
        // $id=$_GET['id'];
        $result = job::find_by_id($_GET['id']);
        
         
        
        
        ?>
<div class="wrapper">
    <div class="container jobinfo-container ">
   
        <div class="card card-job-info" style="width: 100rem;">
            <div class="row">
                <div class="col-lg-4 col-md-4 job-img-info col-sm-12">
                    <!----------------------------------company logo------------------------------------->
                    <img src="image/post-img.jpg" class="card-img-top job-img-info" alt="...">
                </div>
                <div class="col-lg-8 col-md-8 jobinfo-sub col-sm-12">
                    <!---------------------------------------Job title----------------------------------->
                    <h5 class="card-title"><?=$result->name_job; ?></h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <!-------------------------icon with job info ------------------------------->
                            <p><small><i class="fas fa-building icon-job"></i><?=$result->city?></small></p>
                            <p><small><i class="fas fa-globe-asia icon-job"></i><?=$result->city?></small></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <p><small><i class="fas fa-briefcase  icon-job"></i><?=$result->time?></small></p>
                            <p><small class="text-muted"><?=$result->date?></small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!----------------------------- Job describe --------------------------------------->
                    <p class="card-text card-text-pa"><?=$result->job_discribtion?></p>
                </div>
              
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-warning apply-btn">Go somewhere</a>
            </div>
        </div>
    </div>
 
</div>

<?php include "include/footer.php"; ?>