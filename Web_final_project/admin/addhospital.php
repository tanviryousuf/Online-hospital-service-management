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

  $hname = $_POST['hnam'];
  $mname = $_POST['mnam'];
  $com = $_POST['comission'];
  $dis = $_POST['discount'];
  $cab = $_POST['cabin'];
  $ward = $_POST['ward'];
  $phone = $_POST['phone'];
  $q1 =  "insert into cabinbook( HospitalName, managerName,comission,discount,CabinNo,ward,phone  )
  values('$hname','$mname','$com','$dis','$cab','$ward','$phone')";
  if (mysqli_query($con, $q1)) {
         echo "New records created successfully";
     } else {
         echo "Error: " . $q1 . "<br>" . mysqli_error($con);
     }
   
?>
