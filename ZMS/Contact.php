<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
  $message = $_SESSION['message'];


  echo "<script type='text/javascript'>
  alert('$message');
  </script>";
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Form</title>
    <link rel="stylesheet" href="style7.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    
    <div class="contact-section">
      <div class="contact-info">
    <div><i class="fas fa-map-marker-alt"></i>Lalbaug Flyover,Mumbai, India</div>
     <div><i class="fas fa-envelope"></i>sachintrishul@gmail.com</div>
     <div><i class="fas fa-phone"></i>+91 8861963605</div>
     <div><i class="fas fa-clock"></i>Sun - Fri 9:00 AM to 6:00 PM</div>
      </div>
      <div class="contact-form">
      <h2>Contact Us</h2>
     <form class="contact" action="data_check.php" method="POST">
      <input type="text" name="name" class="text-box" placeholder="Your Name" >
       <input type="email" name="email" class="text-box" placeholder="Your Email" >
       
        <textarea name="message" rows="5" placeholder="Your Message" ></textarea>
        <input type="submit" href="Contact.php" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
  </body>
</html>