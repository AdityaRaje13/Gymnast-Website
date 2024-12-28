<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login Here</title>
</head>
<body>
<!----------------- front page start-------------------->

    <section class="hero">
        <nav class="navbar">
            <div class="logo">
            <h1 style="color:White; font-size:4.5rem"><font color="red">G</font>ymNast</h1>
            </div>

            
        </nav>

        <div class="header" >
        
            <h1 style="font-size:8rem;">
                <font color="White">Login</font> <font color="orangered">Here</font>
                <br>            
            </h1>
            
        </div>
    </section>

<!----------------- front page end-------------------->


<!----------- form section start-------- --> 

<section>

<div class="frmcontainer">
    <form method="post" name="regiform" class="frm">
        
        <h1 align="center" style="font-size:4rem; color:red">Login</h1>

        <div class="ctrl">
            <h3 style="font-size:2rem">Email : </h3>
            <input type="text" name="email" id= "email" placeholder="Enter your email..." required>
        </div>

        <div class="ctrl">
            <h3 style="font-size:2rem">Password : </h3>
            <input type="password" name="pass" id= "pass" placeholder="Enter your password..." required>
        </div>


        <div class="btnlogin">
            <div>
            <button name="btnsub" id="btnsub">Login</button>
            </div>
        </div>

        <?php

            if(isset($_POST['btnsub']))
            {

                $user = $_POST['email'];
                $ps = $_POST['pass'];

                $cn = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($cn, "gymnast");

                $q1 = "SELECT * FROM `signup` where email='$user' and password='$ps'; ";

                $result = mysqli_query($cn,$q1);

                if($a=mysqli_fetch_array($result))
                {
                    $_SESSION['email']=$user;
                    echo "<script> window.location='user/index.php'; </script>";
                }
                else
                echo "<font color=red style='display:flex; justify-content:center; align-items:center; font-size:2rem;'>
                incorrect username or password</font>";

                mysqli_close($cn);

            }

        ?>

        <p style="font-size:2rem">If New user please, <a href="signup.php" style="color:blue;">Sign up</a></p>
        
    </form>

</div>

</section>

<!----------- form section end-------- --> 


<!----------------- footer section start-------------------->

<section class="footer">

<div>
    <h1>Get In Touch</h1>
    <ul>
        <li>123 Street, Satara </li>
        <li>+012 345 67890</li>
        <li>info@example.com</li>
    </ul>
</div>

<div>
    <h1>Quick Links</h1>
    <ul>
        <li> <a href="#">Home</a> </li>
                
        <li> <a href="#">Our Courses</a> </li>

        <li> <a href="#">About Us</a> </li>

        <li> <a href="#">Contact Us</a> </li>
    </ul>
</div>

<div>
    <h1>Popular Links</h1>
    <ul>
        <li> <a href="#">Home</a> </li>
                
        <li> <a href="#">Our Courses</a> </li>

        <li> <a href="#">About Us</a> </li>

        <li> <a href="#">Contact Us</a> </li>
    </ul>
</div>

<div>
    <h1>Opening Hours</h1>

    <h2>Monday - Friday</h2>
    <p>8.00 AM - 8.00 PM</p>

    <h2>Saturday - Sunday</h2>
    <p>2.00 PM - 8.00 PM</p>
</div>

</section>

<section class="endfooter">
<center>
<h1 style="color:white; font-size:2rem; font-family:Verdana, Geneva, Tahoma, sans-serif;">
    @ All Rights Reserved. Designed by Aditya Raje
</h1>
</center>
</section>

<!----------------- footer section end-------------------->

</body>
</html>

