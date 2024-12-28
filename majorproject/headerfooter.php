<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="featurestyle.css">
    <title>Our Features</title>
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
                
                <li> <a href="features.php">Our Features</a> </li>

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
                <font color="White">Our</font> <font color="orangered">Features</font>
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