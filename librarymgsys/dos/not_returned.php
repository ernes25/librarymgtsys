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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<!-- Add the following lines to the <head> section of your HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="styles.css" />
    <script type="" src="https://kit."></script>
    <title>Library management</title>
</head>
<div id="loader" class="center"></div>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div  id="sidebar-wrapper" style="background-color: #040814 !important;">
           <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" style="background-color: white;"><h4 style="color: #142d87; font-size: 18px; font-weight: 700;">NESTWAVE<br> LIBRARY</h4>
               </div>




            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fas fa-chart-bar me-2"></i>Dashboard</a>

           

 

<a href="index.php"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
  Library</a>

<a href="books.php"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                 Books</a>
<a href="taken.php"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    </i>Taken</a>   
<a href="returned.php"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    </i>Returned</a> 

  <a href="" style="cursor: pointer; color: black; background-color: white !important;" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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
                    <h6 style="font-size: 16px!important;" class="fs-2 m-0">Not returned</h6>
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

if (isset($_POST['taken'])) {
  
   $date = $_POST['date'];
    $time = $_POST['time'];
    $bk_name = $_POST['bk_name'];
    $qty = $_POST['qty'];
    $name = $_POST['name'];
    $qty_taken = $_POST['qty_taken'];
    $status = $_POST['status'];
 

    $zam = "INSERT INTO `taken`(`date`, `time`, `book`, `quantity_available`, `taken_by`, `quantity_taken`, `status`) VALUES ('$date','$time','$bk_name','$qty','$name','$qty_taken','$status')";
    

    $kiza = mysqli_query($gift,$zam);
    if ($kiza) {
    ?><script type="text/javascript">alert("details added succesfuly");</script> <?php
   
    }
    


}




?>
            <div class="container-fluid px-4" style="">
               <!---row content---- start--->

               <p></p>
               <div class="row">
                <div class="col-md-9">
                   
               </div>
               <div class="col-md-3">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  ADD NEW
</button> <button class="btn btn-secondary" id="refreshButton" onclick=" location.reload();">Refresh</button></div></div>
                
         
                 <div class="row g-3 my-2">

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                 
                              

                             <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM books ";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?><h6 class="fs-2"></h6>
 <p class="fs-5" style="font-size: 11px !important; font-weight: bold;">TOTAL BOOKS
                            </div>
                           
                        </div>
                    </div>

    <div class="col-md-4" style="">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                       
                                
                                    <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM taken where status='returned'";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?><h3 class="fs-2"></h3>
  <p class="fs-5" style="font-size: 11px !important; font-weight: bold;">RETURNED
                            </div>
                         
                        </div>
                    </div>

                   <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                
                      
                            <?php
                            require '../dbcon.php';
                        
                        $querry = "SELECT id FROM taken where status='not_returned'";
                        $querry_run = mysqli_query($gift, $querry);
                        $row = mysqli_num_rows($querry_run);
                        echo '<h5>'.$row.'</>';

                 ?> <h3 class="fs-2"></h3>
<p class="fs-5" style="font-size: 11px !important; font-weight: bold;">NOT RETURNED 
                            </div>
                            
                        </div>
                    </div>


                

                </div>

     

   
        </div> 

<div class="container-fluid px-4" style="background-color: white; padding: 12px; margin: 10px;" >



    <h4>Details</h4>



<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
    <th>date</th>
    <th>time</th>
 <th>book</th>
  <th>Quantity available</th>
 <th>Taken by</th>
  <th>Quantity taken</th>
   <th>Status</th>
<th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php

 $get = "SELECT * from taken where status='not_returned' order by id desc";
$res = mysqli_query($gift,$get);
        
            while ($info=$res->fetch_assoc()) {
               ?>
            <tr>
                <td><?php echo "{$info['date']}"; ?></td>
                 <td><?php echo "{$info['time']}"; ?></td>
                <td><?php echo "{$info['book']}"; ?></td>
                <td><?php echo "{$info['quantity_available']}"; ?></td>
            
                     <td><?php echo "{$info['taken_by']}"; ?></td>
                        <td><?php echo "{$info['quantity_taken']}"; ?></td>
                           <td style="background-color: red; color: white;"><?php echo "{$info['status']}"; ?></td>
                <td style="font-weight: bold;"><?php echo "<a style='color: black;' class='' href='del_taken.php?petty_id={$info['id']}'>delete";?></td>
                
                  
            </tr>
        <?php }?>
        </tfoot>
    </table>








<!-- The modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal header -->
      <div class="modal-header">
        <h5 class="modal-title">Add new </h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
     <form action="" method="POST">
    
<div id="conten" style="">
      <div class="form-group">
            <label>Date</label>
       <input type="date" name="date" class="form-control" id="" placeholder="">
</div>
     <div class="form-group">
            <label>Time</label>
       <input type="time" name="time" class="form-control" id="" placeholder="">
</div>
           <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label name="bk_name"  required>Book Name</label>
                    <select name="bk_name" id="std_name" onchange="fetchstd()" >
                <?php
          $sqll ="SELECT * from books ORDER BY book_name";
$resu = mysqli_query($gift,$sqll);

                        
           while ($rows = mysqli_fetch_array($resu)) {
            ?>
                            
 <option> <?php echo $rows['book_name']; ?></option>;

<?php
                            // code...
                        }
                         ?>
                        </select>
                 </div>
        </div></div>
         <div class="form-group">
            <label>Quantity Available</label>
       <input type="number" name="qty" class="form-control" id="" placeholder="">
</div>
  <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label name="name"  required>Taken by</label>
                    <select name="name" id="std_name2" onchange="fetchstd2()" >
                <?php
          $sqll ="SELECT * from lib_users ORDER BY name";
$resu = mysqli_query($gift,$sqll);

                        
           while ($rows = mysqli_fetch_array($resu)) {
            ?>
                            
 <option> <?php echo $rows['name']; ?></option>;

<?php
                            // code...
                        }
                         ?>
                        </select>
                 </div>
        </div></div>

  <div class="form-group">
            <label>Quantity taken</label>
       <input type="number" name="qty_taken" class="form-control" id="" placeholder="">
</div>
    <div class="form-group">
            <label>Status</label>
      <select name="status" id="" required>
                <option value="returned">returned</option>
                <option value="not_returned">not returned</option>
            </select>
</div>
       
      <div class="modal-footer">
   
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="taken" class="btn btn-success">Add</button></form>
      </div>

  </div>


      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
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
<script>
  const kgInput = document.getElementById('kgInput');
  const tonneOutput = document.getElementById('tonneOutput');

  kgInput.addEventListener('input', function() {
    const kgValue = parseFloat(kgInput.value);
    
    // Convert to tonnes
    const tonneValue = kgValue / 1000;
    tonneOutput.textContent = tonneValue.toFixed(2);
  });
</script>


<script>
  const kgInput2 = document.getElementById('kgInput2');
  const tonneOutput2 = document.getElementById('tonneOutput2');

  kgInput2.addEventListener('input', function() {
    const kgValue2 = parseFloat(kgInput2.value);
    
    // Convert to tonnes
    const tonneValue2 = kgValue2 / 1000;
    tonneOutput2.textContent = tonneValue2.toFixed(2);
  });
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

<script type="text/javascript">
    

    function showHideContent() {
  var selectElement = document.getElementById("mySelect");
  var selectedOption = selectElement.value;

  var content1 = document.getElementById("content1");
  var content2 = document.getElementById("content2");

  // Hide all content divs
  content1.style.display = "none";
  content2.style.display = "none";

  // Show the selected content div
  if (selectedOption === "posho" || selectedOption === "rice" || selectedOption === "beans" || selectedOption === "sugar") {
    content1.style.display = "block";
  } else if (selectedOption === "oil") {
    content2.style.display = "block";
  }
}

</script>
<script>
    function fetchstd(){
    var id = document.getElementById("std_name").value;
    
    $.ajax({
        url:"hh.php",
        method: "POST",
        data:{
            x : id

        },
        dataType: "JSON",
        success: function(data){
            document.getElementById("class").value = dat.class;
        }
    })
    }
  </script>

  <script>
    function fetchstd2(){
    var id = document.getElementById("std_name2").value;
    
    $.ajax({
        url:"hh5.php",
        method: "POST",
        data:{
            x : id

        },
        dataType: "JSON",
        success: function(data){
            document.getElementById("class").value = dat.class;
        }
    })
    }
  </script>
</body>

</html>