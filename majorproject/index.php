<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Home Page</title>
</head>
<body>

<!----------------- front page start-------------------->

    <section class="hero">
        <nav class="navbar">
            <div class="logo">
                 <h1 style="color:White; font-size:4.5rem"><font color="red">G</font>ym<font color="Black">N</font>ast</h1>
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
            
            <h1 style="color:red; font-size:3.5rem";>
                Gym & Fitness Center
            </h1>
        
            <h1 style="font-size:8rem;">
                <font color="White">Easy With Our</font> <font color="orangered">Gym</font>
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


<!--------------- feature cards start------------------>

    <section class="info">
        <div style="background-color:Black; padding:30px 0%;">
            <h1 align="center" style="color:red; font-size:3rem;">Why Choosing Us?</h1>
        </div>

        <h1 align="center" style="color:gray; font-size:6rem; padding:20px 0%;">
            Benefits Of Joining Us
        </h1>

        <div class="cards">

             <div class="row">
                <div class="card">

                    <div>
                        <img src="images/feature-1.jpg" width="220px" height="200px">
                    </div>

                    <div>
                        <h1>Video Instructions</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Facilis molestiae animi sit, recusandae aspernatur mollitia voluptates quo,
                        eaque quae suscipit aliquid soluta sapiente sed placeat quibusdam nostrum, odit fugit 
                        vitae!</p>
                    </div>

                </div>

                <div class="card">

                    <div>
                        <img src="images/feature-2.jpg" width="220px" height="200px">
                    </div>

                    <div>
                        <h1>Training Calender</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Facilis molestiae animi sit, recusandae aspernatur mollitia voluptates quo,
                        eaque quae suscipit aliquid soluta sapiente sed placeat quibusdam nostrum, odit fugit 
                        vitae!</p>
                    </div>

                </div>               
             </div>

             <div class="row">
                <div class="card">

                    <div>
                        <img src="images/feature-3.jpg" width="220px" height="200px">
                    </div>

                    <div>
                        <h1>Free Apps & wifi</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Facilis molestiae animi sit, recusandae aspernatur mollitia voluptates quo,
                        eaque quae suscipit aliquid soluta sapiente sed placeat quibusdam nostrum, odit fugit 
                        vitae!</p>
                    </div>

                </div>

                <div class="card">

                    <div>
                        <img src="images/feature-4.jpg" width="220px" height="200px">
                    </div>

                    <div>
                        <h1>Community Support</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Facilis molestiae animi sit, recusandae aspernatur mollitia voluptates quo,
                        eaque quae suscipit aliquid soluta sapiente sed placeat quibusdam nostrum, odit fugit 
                        vitae!</p>
                    </div>

                </div>
             </div>
            
        </div>
    </section>
<!----------------- feature cards end-------------------->


<!----------------- middle section start-------------------->
    <section class="middle">

         <div>        
                
             <div>
                <h1 style="color:white; font-size:6rem; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                    Don't<font color="orangered"> Think ,</font> Begin <font color="orangered">Today</font>
                </h1>
             </div>

             <center>
                <div>
                <button onclick="btnpress();"> Become Member </button>
                </div>

            </center>

         </div>

    </section>

    <section class="infocards">

         <div class="infocard">
            <div>
                <h1  style="color:white; font-size:3rem; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                    Progression
                </h1>
            </div>

            <div>
                <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ut voluptatem,
                     repellat ea assumenda dignissimos, similique dolores blanditiis culpa corrupti ipsa, 
                     delectus laborum tempora unde placeat! Sed sequi mollitia unde iure, doloribus nobis 
                     temporibus quo?
                </p>
            </div>
         </div>

         <div class="infocard" style="background-color:black;">
            <div>
                <h1  style="color:white; font-size:3rem; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                    Training
                </h1>
            </div>

            <div>
                <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ut voluptatem,
                     repellat ea assumenda dignissimos, similique dolores blanditiis culpa corrupti ipsa, 
                     delectus laborum tempora unde placeat! Sed sequi mollitia unde iure, doloribus nobis 
                     temporibus quo?
                </p>
            </div>
         </div>

         <div class="infocard">
            <div>
                <h1  style="color:white; font-size:3rem; font-family:Verdana, Geneva, Tahoma, sans-serif;">
                    Nutrition
                </h1>
            </div>

            <div>
                <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ut voluptatem,
                     repellat ea assumenda dignissimos, similique dolores blanditiis culpa corrupti ipsa, 
                     delectus laborum tempora unde placeat! Sed sequi mollitia unde iure, doloribus nobis 
                     temporibus quo?
                </p>
            </div>
         </div>
        
    </section>
    
<!----------------- middle section end-------------------->


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

<script>
    lines = document.querySelector(".lines");

    lines.onclick = function() 
    {
        tabs =  document.querySelector(".tabs");
        tabs.classList.toggle("active");
    }
</script>

</body>
</html>
