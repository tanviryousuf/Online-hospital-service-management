<?php
  session_start();

 header('location:../Hospital_manager/hsptlbookingrequest.php');



  $con = mysqli_connect('localhost','root');

  mysqli_select_db($con,'hospitalservice');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }

  $serial = $_POST['serial'];

  $q = "select * from patientadmit WHERE serial = '$serial'";
  $data =  mysqli_query($con ,$q);
    while ($result = mysqli_fetch_assoc($data)) {
        $hpname =   $result['hospitalName'];
        $ptname = $result['patientName'];
        $ph = $result['phone'];
        $add = $result['address'];
        $bk = $result['booking'];


        $q1 =  "insert into bookingaccepted( hospitalName, patientName,booking,phoneNumber,address  )  values('$hpname','$ptname','$bk','$ph','$add')";
        if (mysqli_multi_query($con, $q1)) {
               echo "New records created successfully";
           } else {
               echo "Error: " . $q1 . "<br>" . mysqli_error($con);
           }
        $q2 = "Delete  from patientadmit WHERE serial = '$serial'";
        if (mysqli_multi_query($con, $q2)) {
               echo "New records created successfully";
           } else {
               echo "Error: " . $q1 . "<br>" . mysqli_error($con);
           }
    }


  ?>
