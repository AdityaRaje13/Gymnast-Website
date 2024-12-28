
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupstyle.css">
    <title>Signup Here</title>
</head>
<body>
<!----------------- front page start-------------------->

    <section class="hero">
        <nav class="navbar">
            <div class="logo">
            <h1 style="color:White; font-size:4.5rem"><font color="red">G</font>ymNast</h1>
            </div>

            <div class="tabs">

            <ul>
                <li style="background-color:red; padding:5px 15px; border-radius:15px;">
                      <a href="index.php">Home</a>
                </li>
            </ul>

            </div>
        </nav>

        <div class="header" >
        
            <h1 style="font-size:8rem;">
                <font color="White">Register</font> <font color="orangered">Here</font>
                <br>            
            </h1>
            
        </div>
    </section>

<!----------------- front page end-------------------->


<section>

<div class="frmcontainer">
    <form method="POST" name="regiform" class="frm">
        
        <h1 align="center" style="font-size:4rem; color:red">Signup</h1>

        <div class="ctrl">
            <h3 style="font-size:2rem">Name : </h3>
            <input type="text" name="nm" id= "nm" placeholder="Enter your Name..." required>
        </div>

        <div class="ctrl">
            <h3 style="font-size:2rem">Contact No : </h3>
            <input type="tel" name="cont" id= "cont" placeholder="Enter your contact..." required>
        </div>

        <div class="ctrl">
            <h3 style="font-size:2rem">Email : </h3>
            <input type="text" name="mail" id= "mail" placeholder="Enter your email..." required>
        </div>

        <div class="ctrl">
            <h3 style="font-size:2rem">Password : </h3>
            <input type="password" name="pass" id= "pass" placeholder="Enter your password..." required>
        </div>


        <div class="btnlogin">
            <div>
            <button name="btnsub" id="btnsub">Sign Up</button>
            </div>

            <div>
                <button name="btnres" id="btnres">Reset</button>
            </div>
        </div>
        
        <p style="font-size:2rem">If Already have an account please, <a href="login.php" style="color:blue;">Login</a></p>
        
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
        <li> <a href="index.php">Home</a> </li>
                
        <li> <a href="features.php">Our Courses</a> </li>

        <li> <a href="about.php">About Us</a> </li>

        <li> <a href="contact.php">Contact Us</a> </li>
    </ul>
</div>

<div>
    <h1>Popular Links</h1>
    <ul>
        <li> <a href="index.php">Home</a> </li>
                
        <li> <a href="features.php">Our Courses</a> </li>

        <li> <a href="about.php">About Us</a> </li>

        <li> <a href="contact.php">Contact Us</a> </li>
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

<?php 

    if(isset($_POST['btnsub']))
    {
        $nm = $_POST['nm'];
        $con = $_POST['cont'];
        $em = $_POST['mail'];
        $ps = $_POST['pass'];

        $cn = mysqli_connect("localhost", "root","");
        $db = mysqli_select_db($cn, "gymnast");

        $q2 = "SELECT * FROM `signup` ;";

        $res = mysqli_query($cn,$q2);

        while($a = mysqli_fetch_array($res))
        {
            $name = $a['name'];
            $contact = $a['contact'];
            $email = $a['email'];
            $password = $a['password'];

            if($nm == $name)
            {
                echo "<script> alert('The name is already registerd') </script>";
                echo "<script> window.location='signup.php' </script>";
                break;
            }

            else if($con == $contact)
            {
                echo "<script> alert('The contact is already registerd') </script>";
                echo "<script> window.location='signup.php' </script>";
            }

            else if($em == $email)
            {
                echo "<script> alert('The email is already registerd') </script>";
                echo "<script> window.location='signup.php' </script>";
            }

            else if($ps == $password)
            {
                echo "<script> alert('The password is already registerd') </script>";
                echo "<script> window.location='signup.php' </script>";
            }

            else
            {
                $q = "INSERT INTO `signup` (`name`, `contact`, `email`, `password`) VALUES ('$nm', '$con', '$em', '$ps');";
                $result = mysqli_query($cn,$q);

                if($result)
                {
                    echo "<script> alert('You are signin succesfully');</script>";
                    echo "<script> window.location='login.php' </script>";
                }

                else
                {
                    echo "<script> alert('Signin is unsuccesful'); </script>";
                }
            }

        }

        mysqli_close($cn);

    }

?>
