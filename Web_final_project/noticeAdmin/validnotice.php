<?php
  session_start();
  header('location:../noticeAdmin/notice.php');

  $con = mysqli_connect('localhost','root');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }
  mysqli_select_db($con,'hospitalservice');

  $noticename = $_POST['noticeName'];
  $notice = $_POST['notice'];
  $date = $_POST["date"];
  $time =$_POST['time'];

  $q = "select * from notices";

 $result =  mysqli_query($con , $q);
 $num = mysqli_num_rows($result);
 if($num ==1)
 {
 	echo "duplicate";
 }
 else{

 	mysqli_query($con," insert into notices(date , noticeName , notice , time ,) values('$date','$noticename','$notice','$time') ");
 }

?>
