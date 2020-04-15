<?php
  session_start();
  header('location:login.php');

  $con = mysqli_connect('localhost','root');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }
  mysqli_select_db($con,'hospitalservice');

  $username = $_POST['user'];
  $name = $_POST['name'];
  $pass = $_POST["pass"];
  $phone =$_POST['phone'];
  $type = 'user';
  $email  = $_POST['email'];
  $address = $_POST['address'];

  $q = "select * from registration where username = '$username' && password =  '$pass' ";

 $result =  mysqli_query($con , $q);
 $num = mysqli_num_rows($result);
 if($num ==1)
 {
 	echo "duplicate";
 }
 else{
 	
 	mysqli_query($con," insert into registration(username , name , password , type , phone , email , address) values('$username','$name','$pass', '$type' , '$phone' , '$email' , '$address') ");
 }

?>