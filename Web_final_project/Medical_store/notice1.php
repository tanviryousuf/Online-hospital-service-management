


<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
      body{
      height: 120%;
       }
        body{


            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .div1{
            position: relative;
            margin-left: 450px;
            margin-top: 150px;
            height: 350px;
            width: 250px;
        }
        .h{

            color:#f5547a;;
            font-size: 20px;
            padding-top: 44px;
            padding-left: 70px;

        }
        h3{
          color: white; font-family: 'Avro';margin-left:0px;
        }
    </style>
</head>
    <body style="background-color:rgb(47, 48, 47);">





    <div class="div1" style="margin-left:40%;">
        <i class="fas fa-user-circle fa-5x" style="position: absolute; margin-top: -50px;margin-left: 85px; color: red;"></i>
        <h1 class="h">Update Notice</h1>
        <form class="" action="../Medical_store/notice2.php" method="post">

          <h3 style="">Notice Name</h3>
            <input type="text"  placeholder="Enter notice name" name="noticeName" style="margin-left: 0px;background-color: transparent;border: none;
          border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;">
          <h3 style="">Notice</h3>
            <input type="text"  placeholder="Enter notice" name="notice" style="margin-left:0px;background-color: transparent;border: none;
          border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;width:290px;">


            <br><br><br>

            <button type="submit" style="background-color: red;padding-right: 60px;padding-left: 60px;padding-top:5px;
            padding-bottom: 5px;;margin-left: 40px; text-align: center;border-top-left-radius: 35%;border-top-right-radius: 35%;
            border-bottom-left-radius: 35%;border-bottom-right-radius: 35%;border-bottom: none;border-top: none;border-left: none;
            border-right: none;">Update</button>

        </form>

    </div>

</body>
</html>
