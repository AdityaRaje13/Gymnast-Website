<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactstyle.css">
    <title>Contact Us</title>
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

                <li> <a href="about.php">About Us</a> </li>

                <li> <a href="contact.php">Contact Us</a> </li>

                <li style="background-color:red; padding:5px 15px; border-radius:15px;">
                      <a href="signup.php">Signup</a>
                </li>
            </ul>

            </div>
        </nav>

        <div class="header" >
        
            <h1 style="font-size:8rem;">
                <font color="White">Contact</font> <font color="orangered">Us</font>
                <br>            
            </h1>

            <button onclick="btnpress();">Join Us Now</button>

            <script>
                function btnpress()
                {
                    var ans = confirm("Please Sign-up and login to continue..! ");

                    if(ans)
                    {
                        window.location = "signup.php";
                    }

                    else
                    {
                        window.location="#";
                    }
                }
            </script>
            
        </div>
    </section>

<!----------------- front page end-------------------->


    <h3 align="center" style="color: brown; margin: 30px 0px; font-size: 3rem;">
        You can Contact us for your any query via Email or our Customer support
    </h3>

<section class="main">

    <div class="contact">
        <h1>* Address : </h1>
        <h2>123, Powai Naka, Satara. Near Z.P Bank, 415524</h2>
    </div>

    <div class="contact">
        <h1>* Contact : </h1>
        <h2>+91-8754389072   or   +91-1234-78659</h2>
    </div>

    <div class="contact">
        <h1>* Email id : </h1>
        <h2>medstoresatara123@gmail.com</h2>
    </div>

    <div class="contact">
        <h1>* Helpline No / Community Support : </h1>
        <h2>+91-1234-78659   or   Mail us on Email</h2>
    </div>

</section>

    <h3 align="center" style="color: red; margin: 30px 0px; font-size: 3rem;">
        Get In Touch
    </h3>   
    
    <h1 align="center" style="color: rgb(48, 47, 47); margin: 30px 0px; font-size: 5rem;">
        Email Us For Any Query
    </h1>   

    <div class="options">

       <div>
          <img src="images/address.png">
       </div>

       <div>
          <img src="images/phone.png">
       </div>

       <div>
          <img src="images/mail.png">
       </div>

    </div>

<section class="msg">

     <div class="msg-img">
        <img src="images/feature-1.jpg" width="350px" height="350px">
     </div>

     <div>
        <form method="post" class="frm">

            <div>
                <input type="email" name="mail" id="mail" placeholder="Enter your Email...." required>
            </div>

            <div>
                <input type="tel" name="contact" id="contact" placeholder="Enter your contact...." required>
            </div>

            <div>
                <textarea name="message" id="message" cols="40" rows="7" placeholder="Send us your message" required></textarea>
            </div>

            <div>
                <input type="submit" value="Send Message" name="subbtn" id="subbtn">
            </div>

        </form>
     </div>

</section>


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
 
     if(isset($_POST['subbtn']))
     {
        $em = $_POST['mail'];
        $con = $_POST['contact'];
        $msg = $_POST['message'];

        $cn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($cn, "gymnast");

        $q = "INSERT INTO `message`(`email`, `contact`, `message`) VALUES ('$em', '$con', '$msg')";

        $result = mysqli_query($cn , $q);

        if($result)
        {
            echo "<script> alert('Your Message is submitted successfully') </script>";
        }

        else
        {
            echo "<script> alert('Your Message is not submitted, Please Try Again ! ') </script>";
        }

        mysqli_close($cn);
     }

?>