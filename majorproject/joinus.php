<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="joinusstyle.css">
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
                <font color="White">Join Us with </font> <font color="orangered">Registration</font>
                <br>            
            </h1>
            
        </div>
    </section>

<!----------------- front page end-------------------->


<section>

<div class="frmcontainer">
    <form method="post" name="regiform" class="frm">

        <div class="ctrl">
            <h3 style="font-size:2rem">Email : </h3>
            <input type="text" name="mail" id= "mail" placeholder="Enter your email..." required>
        </div>

        <div class="ctrl">
            <h3 style="font-size:2rem">Address : </h3>
            <textarea name="adrs" id="adrs" cols="40" rows="6" placeholder="Enter your addres..." required></textarea>
        </div>

        <div class="ctrl" style="font-size:2rem">
            <h3 >Gender : </h3>
            <input type="radio" name="gen" id= "gen" value="male" style="margin: 10px 20px;" required> Male
            <input type="radio" name="gen" id= "gen" value="female" style="margin: 10px 20px;" required> Female
        </div>

        <div class="ctrl">
            <h3 style="font-size:2rem">Select Course : </h3>
            <select name="course" id="course" required>
                <option value="">----Select Your Course----</option>

                <option value="Basic Fitness">Basic Fitness</option>
                <option value="Advanced Muscle Course">Advanced Muscle Course</option>
                <option value="New Gym Training">New Gym Training</option>
                <option value="Basic Muscle Course">Basic Muscle Course</option>
                <option value="Yoga Training">Yoga Training</option>
                <option value="Body Building Course">Body Building Course</option>

            </select>
        </div>

        <div class="ctrl">
            <h3 style="font-size:2rem">Batch Time : </h3>
            <select name="course" id="course" required> 
                <option value="">----Select Batch Time----</option>
   
                <option value="8.00 AM - 11.00 AM">8.00 AM - 11.00 AM</option>
                <option value="1.00 Pm - 4.00 PM">1.00 Pm - 4.00 PM</option>
                <option value="5.00 PM - 8.00 PM">5.00 PM - 8.00 PM</option>

            </select>
        </div>

        <div class="ctrl">
            <h3 style="font-size:2rem">Joining Date : </h3>
            <input type="date" name="date" id= "date" placeholder="Pltase select joining Date..." required>
        </div>


        <div class="btnlogin">
            <div>
            <button name="btnsub" id="sub" type="submit">Join Now</button>
            </div>

            <div>
                <button name="btnsub" id="sub" type="reset">Reset</button>
            </div>
        </div>
        
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