<?php
  session_start();
 header('location:../Medical_store/message.php');


  $con = mysqli_connect('localhost','root');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }
  mysqli_select_db($con,'hospitalservice');

  $p = $_SESSION['usern'];

  $hname = $_POST['message'];
  
  
  $q1 =  "insert into message( sender, message,receiver)
  values('$p','$hname','admin')";
  if (mysqli_query($con, $q1)) {
         echo "New records created successfully";
     } else {
         echo "Error: " . $q1 . "<br>" . mysqli_error($con);
     }
   
?>
