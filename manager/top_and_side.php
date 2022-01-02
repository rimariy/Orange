<?php
include "include/init.php";
include "include/header.php";


?>

<nav class="navbar navbar-light bg-light"id="mid" >
  <div class="container"id="top">
    
  <a class="navbar-brand" href="#">
    <img src="image/Color-Orange-Logo.jpg" alt="" width="30" height="24" id="logo">
    </a>
      <ul class="top-list" id="top-style">
          <li class="nav-item dropdown" id="down">
                                    
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="image/download.png" width="40" height="40"> 
                        me
              </a>
                        <ul class="dropdown-menu" id="drop2"  aria-labelledby="navbarScrollingDropdown">
                                            
                                <li>
                                      <a class="dropdown-item" href="#">
                                      <i class="fas fa-sign-out-alt"></i>
                                          <span>Logout</span>
                                      </a>
                              </li> 
                                            <li><hr class="dropdown-divider">
                                                  
                                            </li>
                      </ul>
          </li>
                      
      </ul>  
                                                  
  </div>
  
</nav>

  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
            <ul class="nav flex-column text-white w-100">
                                      
                          <li class="nav-link" id="w">
                            <a href="#"id="linkk">Home</a>
                      </li>

                            <li class="nav-link"id="w">
                              <a href="../table.php"id="linkk">User</a>
                          </li>

                            <li class="nav-link"id="w">
                                  <a href="#" id="linkk">Contact</a>
                                          
                                </li>

            </ul>

  </div>

                <!-- Main Wrapper -->
                <div class="p-1 my-container active-cont">
                  
                        <!-- Top Nav -->
                        <nav class="navbar top-navbar px-5">
                          <a class="btn border-0" id="menu-btn"><i class="fas fa-bars"></i></a>
                        </nav>
                
                </div>


<?php include "include/footer.php"; ?>