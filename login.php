<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
html>
    <head>
        <title>Create simple login page with PHP and MySQL</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Login</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


<!doctype html>

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">

  <title>Leeds Food 4 thought </title>
  <meta name="description" content="food for thought">
  <meta name="author" content="Katy Dean">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="styles.css">
  <script src="./topnav.js"></script>
</head>

<body>
    
    <!-- Copy this to all pages -->
     
      <a href="./login.html">log in</a>
    
      </a>
    </div>
    <!-- Copy this to all pages -->

<center> <h1> username: </h1> </center>
<center> <center> <input type="text" name="fullname" /> </center>
<center> <h1> password: </h1> </center>
<center> <input type="text" name="fullname" /> </center>
<center> <button> log in </button> </center>
