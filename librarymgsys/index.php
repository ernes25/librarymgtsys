<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title> Login||</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
      <style>
         body {

            background-color: #ADABAB;
         }
         
         
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
  
   <body>
 
       


   <div class="box">
    <div class="container" style="background-color: #67ff00; padding: 22px; ">

        <div class="top">
            
            <center><header>Kindly Login to continue</header></center>
             
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
        
               if ($_POST['username'] == 'Admin' && 
                  $_POST['password'] == 'Admin123') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Admin';

                  header('location:dos');
               }
               else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>

        </div><br>
       <table>
        <form role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
               <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <div class="input-field">
            Username:<input type="text" class="input" name="username" placeholder="Username" id="username" required>
     
        </div>
        <br>

        <div class="input-field">
            Password: <input type="Password" name="password" class="input"  placeholder="Password" id="password" required>
     
        </div>
        <h4 style="color: white; padding: 2px;" id="login_message"> <center> </h4 style="color: white;">
        <div class="input-field">
          <center>   <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button></center>
        </div>
    </form>
</table>
   
    </div>
</div>   
   </body>
</html>