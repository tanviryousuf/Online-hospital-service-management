<?php
  session_start();
  header('location:Medical_store/managerview.php');
  $noticeName = $_POST['noticeName'];
  $notice = $_POST['notice'];
  $time = date('Y-m-d H:i:s');




  $conn = mysqli_connect('localhost','root','','hospitalservice');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO notices (noticeName , notice , time )
VALUES ( '$noticeName', '$notice' , '$time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();








?>
