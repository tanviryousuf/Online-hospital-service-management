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

  $q = "select * from ambulance";

 $data =  mysqli_query($con ,$q);
 $total = mysqli_num_rows($data);
 if($total != 0 )
{
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ambulance information</title>
    <link rel="stylesheet" href="../css/hospitalinfostyle.css">
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
                <a href="../Ambulance/ambulanceinfo.php">Ambulance</a>
              </li>
              <li>
                <a href="../User/userinfo.php">Users</a>
              </li>
              <li>
                <a href="../Medical_store/store.php">Medical Stores</a>
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
  <h2  style="color: #212b25;">Ambulance Information</h2>
  <div class="table-wrapper">
      <table class="fl-table">
          <thead>
          <tr>
            <th>Ambulance ID</th>
            <th>Ambulance Name</th>
            <th>Driver name</th>
            <th>Owner name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Area</th>
            <th>Comission</th>
            <th>Discount</th>
            <th>Status</th>

            <th> Action</th>
          </tr>
          </thead>
          <tbody>
            <?php
              while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                <td>".$result['ambulanceID']."</td>
                <td>".$result['name']."</td>
                <td>".$result['driverName']."</td>
                <td>".$result['owner']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['email']."</td>
                <td>".$result['area']."</td>
                 <td>".$result['comission']."</td>
                 <td>".$result['discount']."</td>
                <td>".$result['status']."</td>

                <td>
                  <button name='edit' class='ed' >Edit</button>
                  <button name='delete' class='ed' >delete</button>

                </td>

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
