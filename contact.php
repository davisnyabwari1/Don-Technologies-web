<?php

$con = mysqli_connect("localhost","root","","Don_Technologies");

if(!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

// CODE TO CREATE DATABASE

// if (mysqli_query($con,"CREATE DATABASE Don_Technologies"))
// {
// echo "Database created";
// }
// else{
// echo "Error creating database:".mysqli_error($con);
// }

// CODE TO CREATE TABLE

// $sql='CREATE TABLE Contacts(
//     id INT AUTO_INCREMENT NOT NULL,
//     User VARCHAR(32),
//     Email VARCHAR(30),
//     Title VARCHAR(50),
//     User_message VARCHAR(255),
//     Primary key(id)

// )';
// if(mysqli_query($con,$sql)){
//     echo'Table created';
// }
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don Technologies</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="shortcut icon" type="image/png" href="images/slider/fav.png">
    <script src="https://kit.fontawesome.com/432c77947d.js" crossorigin="anonymous"></script>
    <script src='js/alert.js' type='text/javascript'></script>
</head>
<body>
<header>
    <div class="container">
    <nav>
    <h1 class="logo"><span>Don</span> Technologies</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="Portfolio.php">Portfolio</a></li>
            <li><a class='active' href="contact.html">Contact us</a></li>
        </ul>
        </nav>
    
</header>
<div class="contacts">
    <h1>Contacts</h1>
    <div class="contact-showcase">
        <div>
            <i id='map' class="fas fa-map-marker-alt"></i>
            <p>
            Location: Nyanchwa street<br>Gusii plaza,Kisii Town
            </p>
        </div>   
        <div>
            <i id='mobile' class="fas fa-mobile-alt"></i>
            <p>
            Mobile: +254702598123<br>
            Monday-Friday(8am 9am-5pm)
            </p>
        </div>
        <div>  
            <i id='envelope' class="far fa-envelope"></i>
            <p>
            Email: DonTechnologies@info.com<br> 
            Website: DonTechnologies.org
            </p>
        </div> 
        <div class="contact-container">
            <form action="" method="POST">
                <div>
                <input type="text" Name='fname' placeholder="Your Name" required>
                </div>
                <div>
                <input type="email" Name='email' placeholder="Your Email" multiple required>
                </div>
                <div>
                <input type="text" Name='head' placeholder="Subject" required>
                 </div>
                 <div>
                 <textarea name='user_data' id="msg" placeholder="Message" rows='5' columns='50' ></textarea>
                </div>
            <button Name='submit' type="submit" onclick="alert('Data has been sent to database')";>Send message</button>
            </form>
            <div class="location">
                <iframe src="https://www.google.com/maps?q=kisii%20gusii%20mwalimu%20plz&z=14&t=&ie=UTF8&output=embed" 
                 width="500" height="420">
                </iframe>  
        </div> 
    </div>
    </div>
    <?php
    if(isset($_POST["submit"])){
    // CREATE CONNECTION
   $con = mysqli_connect("localhost","root","","Don_Technologies");
    // CHEECK CONNECTION
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql="INSERT INTO Contacts(User,Email,Title,User_message)
    VALUES('$_POST[fname]','$_POST[email]','$_POST[head]','$_POST[user_data]')";
  
    if(!mysqli_query($con,$sql)){
        die('Error'.mysqli_error($con));
    }
    
    mysqli_close($con);
    }
?>


<footer>
    <div class="footerinfo">
       &copy;Copyright <b>Don Technologies</b>.All rights Reserved<br>
        Designed by Davis Nyabwari
    </div>
</footer> 
</body>
</html>
