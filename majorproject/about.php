<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutstyle.css">
    <title>About us</title>
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
                <font color="White">About</font> <font color="orangered">Us</font>
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

<section class="her">
        
        <div class="heroimg">

            <img src="images/about.jpg" height="500px" width="500px" style="border-radius: 20px;">
            
        </div>

        <div class="heroinfo" >

           <div>
              <h1 align="left" style="font-size: 6rem; font-family: Arial, Helvetica, sans-serif;">
                  10 Years <br> of Experience
              </h1>
           </div>

           <div>
             <p>We have an 10 years of experience in this field. Our team is work
                for you to provide better and beter and quality services for you and your family</p>
           </div>
            
           <div class="info">

              <div class="div1">
                <div>
                   <img src="images/logo2.png" width="120px" height="120px">
                </div>

                <div>
                    <p>we have an certified team and proffesionals for taking care your health and hygine.</p>
                </div>
              </div>

              <div class="div2">
                <div>
                   <img src="images/logo3.png" width="120px" height="120px">
                </div>

                <div>
                    <p>Awarded many people trust Government Of India for the one of the best online medical services.</p>
                </div>
              </div>            
           </div>

           <div>
             <button>Learn More</button>
           </div>

        </div>

</section>


    <div class="trainer-title">
        <h1 align=center>Meet Our Expert Trainers</h1>
    </div>
<section class="trainer">
   
    <div class="expert">
    
        <div>
            <img src="images/team-1.jpg" width=300px heigjy=600px>
        </div>

        <div style="background-color:rgb(48, 47, 47); color: orangered; padding: 15px 0px;">
            <h1 align=center style="font-size:2.6rem;">
                Trainer Name
            </h1>

            <h1 align=center style="font-size:1.6rem; margin-top:20px;">
                Trainer 
            </h1>
        </div>

    </div>

    <div class="expert">
        
        <div>
            <img src="images/team-2.jpg" width=300px heigjy=600px>
        </div>

        <div style="background-color:rgb(48, 47, 47); color: orangered; padding: 15px 0px;">
            <h1 align=center style="font-size:2.6rem;">
                Trainer Name
            </h1>

            <h1 align=center style="font-size:1.6rem; margin-top:20px;">
                Trainer 
            </h1>
        </div>

    </div>

    <div class="expert">
        
        <div>
            <img src="images/team-3.jpg" width=300px heigjy=600px>
        </div>

        <div style="background-color:rgb(48, 47, 47); color: orangered; padding: 15px 0px;">
            <h1 align=center style="font-size:2.6rem;">
                Trainer Name
            </h1>

            <h1 align=center style="font-size:1.6rem; margin-top:20px;">
                Trainer 
            </h1>
        </div>

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