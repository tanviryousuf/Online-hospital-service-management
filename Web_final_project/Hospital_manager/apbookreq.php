<?php
  session_start();
 header('location:../Hospital_manager/appointmentreq.php');




  $con = mysqli_connect('localhost','root');

  mysqli_select_db($con,'hospitalservice');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }

  $serial = $_POST['serial'];

  $q = "select * from appointmentconfirm WHERE serial = '$serial'";
  $data =  mysqli_query($con ,$q);
    while ($result = mysqli_fetch_assoc($data)) {
        $hpname = $result['hospital'];
        $ptname = $result['Patient'];
        $ph = $result['phone'];
        $doc = $result['doctor'];
        echo "$hpname";
     $q1 =  "insert into doctorconfirm( hospital, patient,phone,doctor  )  values('$hpname','$ptname','$ph','$doc')";
        if (mysqli_multi_query($con, $q1)) {
               echo "New records created successfully";
           } else {
               echo "Error: " . $q1 . "<br>" . mysqli_error($con);
           }
        $q2 = "Delete  from appointmentconfirm WHERE serial = '$serial'";
        if (mysqli_multi_query($con, $q2)) {
               echo "New records created successfully";
           } else {
               echo "Error: " . $q1 . "<br>" . mysqli_error($con);
           }
    }


  ?>
