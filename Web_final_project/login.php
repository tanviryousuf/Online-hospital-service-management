
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        body{

            background-image: url(image/ccup.jpg);
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
    </style>
</head>
    <body style="background-color:rgb(47, 48, 47);">



    <div class="div1" style="margin-left:40%;">
        <i class="fas fa-user-circle fa-5x" style="position: absolute; margin-top: -50px;margin-left: 85px; color: red;"></i>
        <h1 class="h">Login Here</h1>
        <form action="validation.php" method="POST">
          <h3 style="color: white; font-family: 'Avro';margin-left:25px">Username</h3>
            <input type="text"  placeholder="Enter username" name="user" style="margin-left: 25px;background-color: transparent;border: none;
          border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;">
          <h3 style="color: white;margin-left:25px">Password</h3>
          <input type="password"  placeholder="Enter password" name="pass" style="margin-left: 25px;background-color: transparent;border: none;
          border-bottom: 1px solid #CCC;color: #555;font-family: 'Arvo';font-size: 15px;">
          <h3 style="color: white;margin-left:25px">Type</h3>
          <select class="" name="type" style="margin-left:30px;">
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="hospital">hospital</option>
            <option value="ambulance">Ambulance</option>
            <option value="store">Medical_store</option>
          </select>
            <br><br><br>

            <button type="submit" value="login" name="login" style="background-color: red;padding-right: 60px;padding-left: 60px;padding-top:5px;padding-bottom: 5px;
            margin-left: 40px; text-align: center;border-top-left-radius: 35%;border-top-right-radius: 35%;border-bottom-left-radius: 35%;
            border-bottom-right-radius: 35%;border-bottom: none;border-top: none;border-left: none;border-right: none;">Login</button>
            <br>
            <br>
            <a href="#" style="color: white;font-size: 10;margin-left: 25px;text-decoration-line: none;">Lost your password?</a><br><br>
            <a href="#" style="color: white;font-size: 10;margin-left: 25px;text-decoration-line: none;">Don't have any account?</a>
        </form>

    </div>

</body>
</html>
