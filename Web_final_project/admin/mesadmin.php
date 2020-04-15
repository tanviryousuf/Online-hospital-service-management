
<?php
  session_start();

  if(!isset($_SESSION['usern']))
header('location: ../login.php');


  $con = mysqli_connect('localhost','root');

  mysqli_select_db($con,'hospitalservice');

  $q = "select * from message order by serial DESC ";

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
  <h3 style="color: white; font-family: 'Avro';margin-left:0px;">Message</h3>
            <form action="../admin/validadminmessage.php" method="POST">
              <input type="text"  placeholder="Message" name="message" style="margin-left: 0px;background-color: transparent;border: none;
          border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;"> 
          <input type="text"  placeholder="receiver name" name="receiver" style="margin-left: 0px;background-color: transparent;border: none;
          border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;"> 
          <button type="submit">Send</button>
        </form>
        <h2  style="color: #212b25;">Messages</h2>
  

  <div class="table-wrapper">
      <table class="fl-table">
          <thead>
          <tr>
              <th>sender</th>
              <th>receiver</th>
              <th>message</th>
              
          </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
              echo "<tr>
              <td>".$result['sender']."</td>
              <td>".$result['receiver']."</td>
              <td>".$result['message']."</td>

              
              

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
