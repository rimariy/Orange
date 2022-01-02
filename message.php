<?php
include "include/init.php";
include "include/header.php";
include "include/nav.php";


?>



<div class="main-container">
    <div class="wrapper">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="car chat-app">
                    <div id="plist" class="people-list">
                    
                        <!------------------------------------old message--------------------------------------------->
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Ahmad</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                                </div>
                            </li> 
                            <li class="clearfix ">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">haneen</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">haneen</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>                                    
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">haneen</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">haneen</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">haneen</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">haneen</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">haneen</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">haneen</h6>
                                        <small>Last seen: 2 hours ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------------------chat space--------------------------------------------->
                        <div class="chat-history">
                            <ul class="">
                                <!---------------------message from other person ----------------------------->
                                <li class="clearfix">
                                
                                    <div class="message other-message float-right"> Hi</div>
                                </li>
                                <!---------------------message from me----------------------------->
                                <li class="clearfix">
                                    
                                    <div class="message my-message">bye</div>                                    
                                </li>   
                                <li class="clearfix">
                                    
                                    <div class="message other-message float-right"> Hi</div>
                                </li>  
                                <li class="clearfix">
                                    
                                    <div class="message my-message">bye</div>                                    
                                </li>     
                                <li class="clearfix">
                                
                                    <div class="message other-message float-right"> Hi</div>
                                </li>  
                                <li class="clearfix">
                                    
                                    <div class="message my-message">bye</div>                                    
                                </li>                    
                                
                            </ul>
                        </div>
                        <!---------------------box to write you'r message and uplode photo----------------------------->
                            <div class="chat-message clearfix">
                                    <div class="input-group mb-0">
                                        <input type="text" class="form-control" placeholder="Enter text here...">
                                        <label for="file-upload" class="custom-file-upload">
                                        <a  class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                        </label>
                                        <input id="file-upload" type="file"/>
                                        <button type="button" class="btn btn-secondary">Send</button>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-------------------------------------------end--------------------------------------------------------- -->
<?php include "include/footer.php"; ?>