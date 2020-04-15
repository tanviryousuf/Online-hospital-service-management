<?php
 
 session_start();
 header('location:../Medical_store/storage.php');

  $con = mysqli_connect('localhost','root');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }
  mysqli_select_db($con,'hospitalservice');
   $m = $_SESSION['usern'];
  
  $mname = $_POST['mnam'];
  $com = $_POST['pbuy'];
  $dis = $_POST['psell'];
  
  $q1 =  "insert into medicine( managerName,name, price_buy,price  )
  values('$m','$mname','$com','$dis')";
  if (mysqli_query($con, $q1)) {
         echo "New records created successfully";
     } else {
         echo "Error: " . $q1 . "<br>" . mysqli_error($con);
     }
   
?>
