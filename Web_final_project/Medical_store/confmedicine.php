<?php
  session_start();

 header('location:../Medical_store/medicineconfirm.php');



  $con = mysqli_connect('localhost','root');

  mysqli_select_db($con,'hospitalservice');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }

  $id = $_POST['id'];

  $q = "select * from medicnelist WHERE id = '$id'";
  $data =  mysqli_query($con ,$q);
    while ($result = mysqli_fetch_assoc($data)) {
        $hpname =   $result['clinet'];
        $ptname = $result['medicine'];
        $ph = $result['price'];
        $add = $result['phone'];
   


        $q1 =  "insert into medicineconfirm( client, medicine,price,phone  )  values('$hpname','$ptname','$ph','$add')";
        if (mysqli_multi_query($con, $q1)) {
               echo "New records created successfully";
           } else {
               echo "Error: " . $q1 . "<br>" . mysqli_error($con);
           }
        $q2 = "Delete  from medicinelist WHERE id = '$id'";
        if (mysqli_multi_query($con, $q2)) {
               echo "New records created successfully";
           } else {
               echo "Error: " . $q1 . "<br>" . mysqli_error($con);
           }
    }


  ?>
