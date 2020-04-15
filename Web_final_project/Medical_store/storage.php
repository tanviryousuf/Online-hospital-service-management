
<?php
  session_start();

  if(!isset($_SESSION['usern']))
header('location: ../login.php');


  $con = mysqli_connect('localhost','root');
 if($con){
  echo "Success";
 }
 else{
  echo "unsuccessfull";
 }

  mysqli_select_db($con,'hospitalservice');
  $mname = $_SESSION['usern'];

  $q = "select * from medicine WHERE managerName = '$mname'";

 $data =  mysqli_query($con ,$q);
 $total = mysqli_num_rows($data);
 if($total != 0 )
{
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medicine Storage</title>
    <link rel="stylesheet" href="../css/storagestyle.css">
    <style media="screen">
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
 
   var inputVal = $(this).val();
   var resultDropdown = $(this).siblings(".result");
   if(inputVal.length){
       $.get("searchmedicine.php", {term: inputVal}).done(function(data){
         
           resultDropdown.html(data);
       });
   } else{
       resultDropdown.empty();
   }
});


$(document).on("click", ".result p", function(){
   $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
   $(this).parent(".result").empty();
});
});

/////////

  </script>
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
  <h2  style="color: #212b25;">Medicine storage</h2>
  
  
  
  <div class="" align="center"  style="background-color:#56dbab;text-align:left;margin-right: 30px;margin-left:30px;margin-top: -40px;height: 300px ">
       <div class="" style="margin-top:20px;margin-left:20px;">
         <center><h2><u>Add Medicine</u></h2></center>
         <form class="" action="../Medical_store/addmedicine.php" method="post" >
          <div style="display: flex;">
             <label style="margin-top: 60px;margin-left: 50px" >Medicine Name :</label>
           <input type="text" autocomplete="off" placeholder="hospital name..." name="mnam" style="margin-left:0px;background-color: transparent;border: none;
           border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;margin-top: 30px"/>
           <label style="margin-top: 60px;margin-left: 350px">Price Buy :</label>
           <input type="text" autocomplete="off" placeholder="Manager name..." name="pbuy" style="margin-left:0px;background-color: transparent;border: none;
           border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;margin-top: 30px"/>
          </div>
          <br><br>
            <div style="display: flex;">
             <label style="margin-top: ;margin-left: 50px" >Price Sell :</label>
           <input type="text" autocomplete="off" placeholder="Comission..." name="psell" style="margin-left:0px;background-color: transparent;border: none;
           border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;margin-top: "/>
           
     
           
           
             <button type="submit" class="button" name="button" style="margin-left: 200px;background-color: #4CAF50; border: none;  color: white;  padding: 10px 20px;  text-align: center; text-decorationnone; display: inline-block;  font-size: 16px;  cursor: pointer;">Add</button>
           </div>
         </form>
       </div>
  </div>
  

  <div class="table-wrapper">
      <table class="fl-table">
          <thead>
          <tr>
              <th>Medicine id</th>

              <th>Medicine Name</th>
              <th>price Buy</th>
              <th>price sell</th>
              
          </tr>
          </thead>
          <tbody>
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
              echo "<tr>
              <td>".$result['medicineID']."</td>
            
              <td>".$result['name']."</td>
              <td>".$result['price_buy']."</td>
              <td>".$result['price']."</td>
              

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
