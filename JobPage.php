<?php
include "include/init.php";
include "include/header.php";
include "include/nav.php";
include "models/job.php";


?>
<div class="wrapper">
    <div class="container job-container">
        <div>
             <?php
                   $result=job::find_all_DESC();            
                   foreach($result as $row){
             ?>
            <div class="card mb-3 " style="max-width: 840px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <!--------------------------------company logo---------------------------------->
                        <img src="<?=$row->img?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body  ">
                            <!-----------------------------------Job title------------------------------>
                            <h5 class="card-title left-con"><?=$row->name_job?></h5>
                            <p class="card-text">
                                <div class="row">
                                    <!-------------------------icon with job info ---------------------->
                                    <div class="col">
                                        <p><small><i class="fas fa-building icon-job"></i><?=$row->company_name?></small></p>
                                        <p><small><i class="fas fa-globe-asia icon-job"></i><?=$row->city?></small></p>
                                    </div>
                                    <div class="col">
                                        <p><small><i class="fas fa-briefcase  icon-job"></i><?=$row->time?></small></p>
                                        <p><small class="text-muted"><?=$row->date?></small></p>
                                    </div>
                                </div>
                            </p>
                            <a type="button" href="JobInfo.php?id=<?=$row->id?>" class="btn btn-warning apply-btn">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
    </div>
    </div>
    
</div>
<?php include "include/footer.php"; ?>