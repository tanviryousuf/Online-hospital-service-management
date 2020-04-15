
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

  $q = "select * from Patientadmit";

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
    <link rel="stylesheet" href="../css/hsptlbookingrequest.css">
    <style type="text/css">

    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search2.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
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
  <div class="">
    <div class="" style="display:flex;margin-top:20px;">
      <form class="" action="../Hospital_manager/hsptlbookreq.php" method="post">
        <h3 style="color: white; font-family: 'Avro';margin-left:40px;">Serial</h3>
          <input type="number"  placeholder="Enter name" name="serial" style="margin-left: 60px;background-color: transparent;border: none;
        border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;">
        <button type="submit" name="add" style="margin-left:20px;">Accept</button>
        <button type="button" name="add" style="margin-left:20px;">delete</button>
      </form>
      <script type="text/javascript">

      </script>
    
    </div>

    </div>
  </div>
  <h2  style="color: #212b25;">Booking Request</h2>
  <div class="table-wrapper">
      <table class="fl-table">
          <thead>
          <tr>
              <th>Serial id</th>
              <th>Hospital Name</th>
              <th>Patient name</th>
              <th>Age</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Booking</th>
              
          </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
              echo "<tr>
              <td>".$result['serial']."</td>
              <td>".$result['hospitalName']."</td>
              <td>".$result['patientName']."</td>
              <td>".$result['age']."</td>
              <td>".$result['phone']."</td>
              <td>".$result['address']."</td>
              <td>".$result['booking']."</td>
              

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
