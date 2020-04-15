
<?php
  session_start();

  if(!isset($_SESSION['usern']))
header('location: ../login.php');


  $con = mysqli_connect('localhost','root');

  mysqli_select_db($con,'hospitalservice');


  $q = "SELECT * FROM notices ORDER BY noticeID DESC ";

 $data =  mysqli_query($con ,$q) ;
 $total = mysqli_num_rows($data) ;
 if($total != 0 )
{
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Notice Board</title>
    <link rel="stylesheet" href="css/noticeviewstyle.css">
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
  <h2  style="color: #212b25;">Notice Board</h2>
  <div class="table-wrapper">
      <table class="fl-table">
          <thead>
          <tr>
              <th>Notice ID</th>
              <th>NOtice Name</th>
              <th>Notice Date</th>
              <th>Notice</th>

          </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
              echo "<tr>
              <td>".$result['noticeID']."</td>
              <td>".$result['noticeName']."</td>
              <td>".$result['time']."</td>
                <td>".$result['notice']."</td>

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
