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

  $q = "select * from medicinelist ";

 $data =  mysqli_query($con ,$q);
 $total = mysqli_num_rows($data);
 if($total != 0 )
{
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hospital information</title>
    <link rel="stylesheet" href="../css/hospitalinfostyle.css">
  </head>
  <body >
    <section class="nav-bar">
    <div class="nav-container">
      <div class="brand">
        <a href=""> <img src="../images/logo.png" alt=""> </a>

      </div>
      <nav>
        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
        <ul class="nav-list">
          <li>
            <a href="../store_manager/managerview.php">Home</a>
          </li>
          <li>
            <a href="../User/userprofile.php">Profile </a>
          </li>
          <li>
            <a href="#">Informations</a>
            <ul class="nav-dropdown">
              <li>
                <a href="#">Ambulance</a>
              </li>
              <li>
                <a href="#">Users</a>
              </li>
              <li>
                <a href="#">Medical Stores</a>
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
  <h2  style="color: #212b25;">Delivary Request</h2>
  <div class="">
    <div class="" style="display:flex;margin-top:20px;">
      <form class="" action="../Medical_store/confmedicine.php" method="post">
        <h3 style="color: white; font-family: 'Avro';margin-left:40px;">ID</h3>
          <input type="number"  placeholder="Enter id" name="id" style="margin-left: 60px;background-color: transparent;border: none;
        border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;">
        <button type="submit" name="add" style="margin-left:20px;">Accept</button>
        <button type="button" name="add" style="margin-left:20px;">delete</button>
      </form>
      <script type="text/javascript">

      </script>
    
    </div>

    </div>
  </div>
  <div class="table-wrapper">
      <table class="fl-table">
          <thead>
          <tr>
              <th>id</th>
              <th>Client Name</th>
              <th>Medicine name</th>
              <th>price</th>
              <th>phone</th>

          </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
              echo "<tr>
              <td>".$result['id']."</td>
              <td>".$result['client']."</td>
              <td>".$result['medicine']."</td>
              <td>".$result['price']."</td>
              <td>".$result['phone']."</td>
             

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
