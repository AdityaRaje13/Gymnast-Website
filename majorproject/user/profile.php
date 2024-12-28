<?php
    session_start();
?>

<?php
    
    $cn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($cn, "gymnast");

    $u = $_SESSION['email'];

    $q = "SELECT * from signup WHERE email='$u'";

    $result = mysqli_query($cn, $q);

    if($a = mysqli_fetch_array($result))
    {
        $nm = $a['name'];
        $con = $a['contact'];
    } 

    $q2 = "SELECT * From registration WHERE email='$u'";

    $res = mysqli_query($cn,$q2);

    if($b = mysqli_fetch_array($res))
    {
        $em = $b['email'];
        $ad = $b['address'];
        $gen = $b['gender'];
        $course = $b['course'];
        $time = $b['time'];
        $date = $b['date'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profilestyle.css">
    <title>Your Profile</title>
</head>
<body>
<!----------------- front page start-------------------->

    <section class="hero">
        <nav class="navbar">
            <div class="logo">
            <h1 style="color:White; font-size:4.5rem"><font color="red">G</font>ymNast</h1>
            </div>

            <div class="lines">
                <div><hr width="30px" color="white"></div>
                <div><hr width="30px" color="white"></div>
                <div><hr width="30px" color="white"></div>
            </div>

            <div class="tabs">

            <ul>
                <li> <a href="index.php">Home</a> </li>
                
                <li> <a href="features.php">Our Courses</a> </li>

                <li> <a href="contact.php">Contact Us</a> </li>

                <li style="background-color:white; padding:5px 15px; border-radius:15px;"> 
                    <a href="Profile.php" style="color:black;">Profile</a> 
                </li>


                <li style="background-color:red; padding:5px 15px; border-radius:15px;">
                <a href="logout.php">Logout</a>
                </li>
            </ul>

            </div>
        </nav>

        <div class="header" >
        
            <h1 style="font-size:7rem;">
                <font color="White">Welcome</font> <font color="orangered"> <?php echo $nm; ?> </font>
                <br>            
            </h1>

            
            
        </div>
    </section>

<!----------------- front page end-------------------->


<?php
   {
        error_reporting(0);
        if($u == $em)
        {
            echo "<section class='main'>

            <div class='data'>
                <h1>* Name : </h1>
                <h2>$nm</h2>
            </div>
        
            <div class='data'>
                <h1>* Contact : </h1>
                <h2>$con</h2>
            </div>
        
            <div class='data'>
                <h1>* Email id : </h1>
                <h2>$u</h2>
            </div>
        
            <div class='data'>
                <h1>* Address : </h1>
                <h2>$ad</h2>
            </div>

            <div class='data'>
                <h1>* Gender : </h1>
                <h2>$gen</h2>
            </div>

            <div class='data'>
                <h1>* Joined Course : </h1>
                <h2>$course</h2>
            </div>

            <div class='data'>
                <h1>* Batch Time : </h1>
                <h2>$time</h2>
            </div>

            <div class='data'>
                <h1>* Joining Date : </h1>
                <h2>$date</h2>
            </div>
        
        </section>";
        }
   

        else
        {
            echo "<section class='main'>
             
            <div class='data'>
            <h1>* Name : </h1>
            <h2>$nm</h2>
            </div>
            
            <div class='data'>
                <h1>* Contact : </h1>
                <h2>$con</h2>
            </div>

            <div class='data'>
                <h1>* Email : </h1>
                <h2>$u</h2>
            </div>

            <div class='data'>
                <h1>* Not Registered For Any Course Yet !!!</h1>
            </div>

            </section>";
        }
    }
?>



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

        <li> <a href="profile.php">Profile</a> </li>

        <li> <a href="contact.php">Contact Us</a> </li>
    </ul>
</div>

<div>
    <h1>Popular Links</h1>
    <ul>
        <li> <a href="index.php">Home</a> </li>
                
        <li> <a href="features.php">Our Courses</a> </li>

        <li> <a href="profile.php">Profile</a> </li>

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
    @ All Rights Reserved. Designed by Aditya 
</h1>
</center>
</section>

<!----------------- footer section end-------------------->

</body>
</html>