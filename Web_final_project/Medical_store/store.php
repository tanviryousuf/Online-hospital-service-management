<?php
  session_start();

  if(!isset($_SESSION['usern']))
header('location: ../login.php');


  $con = mysqli_connect('localhost','root');
  if($con){
    echo "successfull";
  }
  else{
    echo "no connection";
  }
  mysqli_select_db($con,'hospitalservice');

  $q = "select * from store";

 $data =  mysqli_query($con ,$q);
 $total = mysqli_num_rows($data);
 if($total != 0 )
{
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Store information</title>
    <link rel="stylesheet" href="../css/ambulanceinfostyle.css">
  </head>
  <body >
    <section class="nav-bar">
    <div class="nav-container">
      <div class="brand">
        <a href="https://webdevtrick.com/"> <img src="../images/logo.png" alt=""> </a>

      </div>
      <nav>
        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
        <ul class="nav-list">
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">Admin Profile </a>
          </li>
          <li>
            <a href="#">Informations</a>
            <ul class="nav-dropdown">
              <li>
                <a href="admin/hospitalinfo.php">Hospital</a>
              </li>
              <li>
                <a href="user/userinfo">Users</a>
              </li>
              <li>
                <a href="Medical_sotre/store.php">Medical Stores</a>
              </li>
            </ul>
          </li>

          
          <li>
            <a href="#">About</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <center><h2  style="color: #212b25;">Medical Store Information</h2></center>
  <div class="table-wrapper">
      <table class="fl-table">
          <thead>
          <tr>
              <th>Store ID</th>
              <th>Store Name</th>
              <th>Manager name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Area Cover</th>
              <th>Comission</th>
              <th>Discount</th>
             
          </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
              echo "<tr>
              <td>".$result['storeID']."</td>
              <td>".$result['name']."</td>
              <td>".$result['managerName']."</td>
              <td>".$result['address']."</td>
              <td>".$result['phone']."</td>
              <td>".$result['email']."</td>
              <td>".$result['areaCover']."</td>
              <td>".$result['comission']."</td>
              <td>".$result['discount']."</td>
              
             

          </tr> ";
            }
          }

            ?>

          <tbody>
      </table>
  </div>



    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script  src="../js/main.js"></script>
  </body>
</html>
