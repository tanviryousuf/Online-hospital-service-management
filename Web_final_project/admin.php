<?php

session_start();
if(!isset($_SESSION['usern']))
header('location: login.php');


?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Adminpage</title>
    <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  </head>
  <body>
    <header>
     <nav>
       <div class="row clearfix">
           <img src="images/logo.png" alt="" class="logo">
       </div>
       <ul class="main-nav animated slideInDown" id="check-class">
         <li><a href="admin/hospitalinfo.php">Hospital Info</a></li>
         <li><a href="Ambulance/ambulanceinfo1.php">Ambulance Info</a></li>
         <li><a href="User/userinfo.php">Users info</a></li>
         <li><a href="admin/mesadmin.php">Message</a></li>
         <li><a href="logout.php" style="margin-right:50px;">Log out</a></li>

       </ul>
       <a href="#" class="mobile-icon"  onclick="slideshow()"><i class="fa fa-bars"></i></a>
     </nav>
   <div class="main-content-header">
     <h1>Welcome to <span class="colorchange">Sunshine Medical Service</span>.<br>
       We try to serve you best services.</h1>
       <a href="notice.php" class="btn btn-full">Update Notice</a>
       <a href="Medical_store/store.php" class="btn btn-nav">Medicine Store</a>
   </div>
   </header>
   <script type="text/javascript">
     function slideshow(){
       var x = document.getElementById('check-class');
       if(x.style.display === "none"){
         x.style.display = "block";
       }
       else{
         x.style.display = "none";
       }
     }
   </script>
</body>
  </body>
</html>
