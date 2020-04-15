<?php
  session_start();
 header('location:../admin/mesadmin.php');


  $con = mysqli_connect('localhost','root');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }
  mysqli_select_db($con,'hospitalservice');

  

  $hname = $_POST['message'];
  
  $rcv = $_POST['receiver'];
  $q1 =  "insert into message( sender, message,receiver)
  values('admin','$hname','$rcv')";
  if (mysqli_query($con, $q1)) {
         echo "New records created successfully";
     } else {
         echo "Error: " . $q1 . "<br>" . mysqli_error($con);
     }
   
?>
