<?php
   session_start(); ///get userlogin
         require('../dbcon.php');
if (isset($_SESSION['username'])) {

        $username = $_SESSION['username'];
      
        if ($username == "Okia Paul") {
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<!-- Add the following lines to the <head> section of your HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="styles.css" />
    <script type="" src="https://kit."></script>
    <title>Northridge Junior School || management</title>
</head>
<div id="loader" class="center"></div>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div  id="sidebar-wrapper" style="background-color: #040814 !important;">
           <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" style="background-color: white;"><h4 style="color: #142d87; font-size: 18px; font-weight: 700;">NORTHRIDGE JUNIOR<br> SCHOOL BOMBO</h4>
                <h6>ACADEMICS DEPARTMENT</h6></div>




            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fas fa-chart-bar me-2"></i>Dashboard</a>

           

 

<a href="library.php"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
  Library</a>

<a href="books.php"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                 Books</a>
<a href="taken.php" style="cursor: pointer; color: black; background-color: white !important;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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
                    <h6 style="font-size: 16px!important;" class="fs-2 m-0">Taken</h6>
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

<?php
require '../dbcon.php';
 $id = $_GET['petty_id'];
if (isset($_POST['utaken'])) {
  
   $date = $_POST['date'];
    $time = $_POST['time'];
    
    $qty = $_POST['qty'];
    
    $qty_taken = $_POST['qty_taken'];
    $status = $_POST['status'];
 

    $zam = "UPDATE `taken` SET date='$date', time='$time', quantity_available='$qty', quantity_taken='$qty_taken', status='$status' where id='$id'";
    

    $kiza = mysqli_query($gift,$zam);
    if ($kiza) {
    ?><script type="text/javascript">alert("details have been updated succesfuly");

window.location.href = "taken.php";

    </script> <?php
   
    }
    


}




?>

 <?php

 $get = "SELECT * from taken where id='$id'";
$res = mysqli_query($gift,$get);
        
            while ($info=$res->fetch_assoc()) {
               ?>
       

            <div class="container-fluid px-4" style="">
               <!---row content---- start--->

               <p></p>
               <div class="row">
                <div class="col-md-9">
                   
               </div>
               <div class="col-md-3">
<button class="btn btn-secondary" id="refreshButton" onclick=" location.reload();">Refresh</button></div></div>
                
       <h4>Edit</h4>  
              

<div class="container-fluid px-4" style="background-color: white; padding: 12px; margin: 10px;" >

<div class="col-md-12">
 <form action="" method="POST">
    
<div id="conten" style="">
      <div class="form-group">
            <label>Date</label>
       <input type="date" name="date" value="<?php echo "{$info['date']}"; ?>" class="form-control" id="" placeholder="">
</div>
     <div class="form-group">
            <label>Time</label>
       <input type="time" name="time" value="<?php echo "{$info['time']}"; ?>" class="form-control" id="" placeholder="">
</div>
           <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label name="bk_name"  required>Book Name</label>
                    <input type="text" name="bk_name" value="<?php echo "{$info['book']}"; ?>" class="form-control"  id="" placeholder="" readonly>
                  
                 </div>
        </div></div>
         <div class="form-group">
            <label>Quantity Available</label>
       <input type="number" name="qty" value="<?php echo "{$info['quantity_available']}"; ?>" class="form-control" id="" placeholder="">
</div>
  <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label name="name"  required>Taken by</label>
                  <input type="text" name="name" value="<?php echo "{$info['taken_by']}"; ?>" class="form-control" id="" placeholder="" readonly>
                 </div>
        </div></div>

  <div class="form-group">
            <label>Quantity taken</label>
       <input type="number" name="qty_taken" value="<?php echo "{$info['quantity_taken']}"; ?>" class="form-control" id="" placeholder="">
</div>
    <div class="form-group">
            <label>Status</label>
      <select name="status" id="" required>
                <option value="returned">returned</option>
                <option value="not_returned">not returned</option>
            </select>
</div>
       
      <div class="modal-footer">
   
        <button type="submit" name="utaken" class="btn btn-success">UPDATE</button></form>


<?php } ?>
</div>

</div>



<script>
    function validateInput(input) {
  var regex = /^[0-9]+$/; // Regex pattern to match numbers only

  if (regex.test(input)) {
    console.log("Valid input: Numbers only");
  } else {
    console.log("Invalid input: Numbers only are allowed");
  }
}

</script>

       
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>




<script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

</body>

</html>