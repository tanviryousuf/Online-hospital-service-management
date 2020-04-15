<?php
  session_start();
 header('location:../admin/hospitalinfo.php');


  $con = mysqli_connect('localhost','root');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }
  mysqli_select_db($con,'hospitalservice');
  $h = $_POST['hid'];

  $q1 =  "DELETE FROM cabinbook WHERE HospitalID = '$h'";
  if (mysqli_query($con, $q1)) {
         echo "New records deleted successfully";
     } else {
         echo "Error: " . $q1 . "<br>" . mysqli_error($con);
     }
   
?>
