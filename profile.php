<?php   
    include "include/init.php";
    include "include/header.php";
    include "include/nav.php";
?>

<div class="wrapper">
    <div class="main-container">
        <div class="box-profile-information">
            <div class="image-back mb-2">
                <img src="image/backprofile.jpg" alt="">
            </div>
            <div class="contant row px-lg-5">
                <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="profile-image">
                        <img src="image/user.png" alt="">
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-12 box-information-responce">
                    <strong class="name-user">Loai Abd-elqader</strong>
                    <span class="status"><i class="fas fa-check-circle"></i></span>
                    <a href="#" class="edit"><i class="fas fa-pen"></i> Edit</a>

                    <div class="row mt-4 mb-3">
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="row general-information">
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-2"><i class="far fa-calendar"></i> <strong>Joined Sep 07,2014</strong></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-2"><i class="far fa-clock"></i> <strong>Last Visit: 2 hrs</strong></div>
                                <div class="col-12 mb-2"><i class="fas fa-phone-alt"></i> <strong>Phone: +962771234567</strong></div>
                                <div class="col-12 mb-2"><i class="far fa-envelope"></i> <strong>Email: Loai@gmail.com</strong></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 sochal-media">
                            <a href="#" class="px-3"><i class="fab fa-linkedin-in"></i> Linkedin</a>
                            <a href="#"><i class="fab fa-github"></i> Github</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-about-my mt-3">
            <div class="row responcive-row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>About Loai</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero natus nisi corrupti iste qui nihil tempore laudantium, perferendis possimus culpa commodi non eos excepturi soluta, incidunt accusantium eum, illum adipisci.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>Skills</h4>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JS</li>
                        <li>PHP</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box-profile-post mt-3">
            <h4>Posts</h4>
        </div>
    </div>
</div>


<?php include "include/footer.php"; ?>