<?php
   session_start(); ///get userlogin
         require('../dbcon.php');
if (isset($_SESSION['username'])) {

        $username = $_SESSION['username'];
      
        if ($username == "Admin") {
        $xl = "welcome";
     }
        
        }else{
            header("Location: ../index.php");
         exit;
        }




?>
<style>
    #loader {
        border: 12px solid #f3f3f3;
        border-radius: 50%;
        border-top: 12px solid #444444;
        width: 70px;
        height: 70px;
        animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
        100% {
            transform: rotate(360deg);
        }
    }
    
    .center {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="styles.css" />
    <script type="" src="https://kit."></script>
    <title>Library Management</title>
</head>
<div id="loader" class="center"></div>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div  id="sidebar-wrapper" style="background-color: #040814 !important;">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" style="background-color: white;"><h4 style="color: #142d87; font-size: 18px; font-weight: 700;">NESTWAVE<br>LIBRARY  </h4>
              </div>




            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text" ><i
                        class="fas fa-chart-bar me-2"></i>Dashboard</a>



 

<a href="index.php" style="cursor: pointer; color: black; background-color: white !important;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
  Library</a>

<a href="books.php" style="cursor: pointer; color: white;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                 Books</a>
<a href="taken.php" style="cursor: pointer; color: white;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    </i>Taken</a>   
<a href="returned.php" style="cursor: pointer; color: white;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    </i>Returned</a> 
               <a href="not_returned.php" style="cursor: pointer; color: white;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    </i>Not Returned</a>      
<a href="users.php" style="cursor: pointer; color: white;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    </i>Users</a> 

                <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4" style="border-bottom: 2px solid #bbf1e1; background-color: #3a6605 !important; color: white !important;">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bars primary-text fs-4 me-3" style="color: white !important;" id="menu-toggle"></i>
                    <h6 style="font-size: 16px !important;" class="fs-2 m-0">Dashboard</h6>
                </div>

                <button class="navbar-toggler" style="color: white !important;" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" ></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a style="color: white;" class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $username; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        <br>
<!---main content start--->
            <div class="container-fluid px-4" style="background-color: #ecf6e6;">
               <!---row content---- start--->

    <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                               <span style="font-size: 9px; font-weight: bold;"></span>
                                <h3 class="fs-2">
                                    
                                <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM books where old_new='old'";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?>  </h3>
                                <p class="fs-5" style="font-size: 16px !important; font-weight: bold;">Old Books
                            </div>
      
                        </div>
                    </div>


                     <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: red !important; color: white;">
                            <div>
                               <span style="font-size: 12px; font-weight: bold;"></span>
                                <h3 class="fs-2">
                               <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM books where old_new='new'";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?></h3>
                                <p class="fs-5" style="font-size: 16px !important; font-weight: bold;">New Books
                            </div>
      
                        </div>
                    </div>

 <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                               <span style="font-size: 9px; font-weight: bold;"></span>
                                <h3 class="fs-2">
                                    
                                <h3 class="fs-2">
                               <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM lib_users";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?> </h3>
                                <p class="fs-5" style="font-size: 16px !important; font-weight: bold;">Users
                            </div>
      
                        </div>
                    </div>
                   
                </div>  

    

 <div class="row g-3 my-2">
   <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: navajowhite !important;">
                            <div>
                               <span style="font-size: 9px; font-weight: bold;"></span>
                                <h3 class="fs-2">
                                    
                            <h3 class="fs-2">
                               <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM taken";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?>  </h3>
                                <p class="fs-5" style="font-size: 14px !important; font-weight: bold;">Taken
                            </div>
      
                        </div>
                    </div>
                      <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #00cfa4 !important; color: white;">
                            <div>
                               <span style="font-size: 9px; font-weight: bold;"></span>
                                <h3 class="fs-2">
                                    
                             <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM taken where status='returned'";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?> 
                                </h3>
                                <p class="fs-5" style="font-size: 14px !important; font-weight: bold;">Returned
                            </div>
      
                        </div>
                    </div>
                      <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #ffadad !important;">
                            <div>
                               <span style="font-size: 9px; font-weight: bold;"></span>
                                <h3 class="fs-2">
                                    
                                <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM taken where status='not_returned'";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?> 
                                </h3>
                                <p class="fs-5" style="font-size: 14px !important; font-weight: bold;">Not yet returned
                            </div>
      
                        </div>
                    </div>
                      <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                               <span style="font-size: 9px; font-weight: bold;"></span>
                                <h3 class="fs-2">
                                    
                               <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM books";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?>    </h3>
                                <p class="fs-5" style="font-size: 14px !important; font-weight: bold;">All books
                            </div>
      
                        </div>
                    </div>
 </div>   
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="j.js" ></script>
<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector(
            "body").style.visibility = "hidden";
            document.querySelector(
            "#loader").style.visibility = "visible";
        } else {
            document.querySelector(
            "#loader").style.display = "none";
            document.querySelector(
            "body").style.visibility = "visible";
        }
    };
</script>

   <script>
    $('#class').click(function(){
        $('#page-content-wrapper').load('papa.php');

    });
     $('#sales').click(function(){
        $('#page-content-wrapper').load('sales.php');

    });
      $('#budget').click(function(){
        $('#page-content-wrapper').load('budget.php');

    });
      $('#shortages').click(function(){
        $('#page-content-wrapper').load('shortages.php');

    });
      $('#finance').click(function(){
        $('#page-content-wrapper').load('finance.php');

    });
       $('#items').click(function(){
        $('#page-content-wrapper').load('items.php');

    });
       $('#hr').click(function(){
        $('#page-content-wrapper').load('hr.php');

    });
        $('#parents').click(function(){
        $('#page-content-wrapper').load('net.php');

    });
         $('#petty').click(function(){
        $('#page-content-wrapper').load('petty.php');

    });
</script>

     
 <!----seeting active sect---> 
<script>
        var btnContainer = document.getElementById("sidebar");
        var  btns = btnContainer.getElementsByClassName("dropdown");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace("active", "");
                this.className += " active";
            });
        }
     </script>
     


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>



</body>

</html>