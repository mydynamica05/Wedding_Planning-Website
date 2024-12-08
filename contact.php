
<?php

$conn= mysqli_connect('localhost','root','','wedding_db');
if(isset($_POST['send'])){
    $name = $_POST['fname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $plan = $_POST['plan'];
    $address = $_POST['address'];
    $message = $_POST['message'];
   
    

 

    $insert = "INSERT INTO `contact_form`( `name`, `email`, `number`, `plan`, `address`, `message`)
     VALUES (' $name', '$email','$number','$plan',' $address','$message ')";

        
     mysqli_query($conn, $insert);
    header('contact.php');
    
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
<!--font awsome cdn link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<!-- swiper css link -->
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
 <!-- custom css file-->
 <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">
<?php  @include 'header.php';?>

<selection class="contact">
    <h1 class="heading">contact us</h1>
    <form action="" method="post">

        <div class="flex">
            <div class="inputbox">
                <span>Your Name</span>
                <input type="text" placeholder="Enter your name" name="fname" required> 
            </div>
            
            <div class="inputbox">
                <span>Your Email</span>
                <input type="text" placeholder="Enter your email" name="email" required> 
            </div>

            <div class="inputbox">
                <span>Your Number</span>
                <input type="number" placeholder="Enter your number" name="number" required> 
            </div>

            <div class="inputbox">
                <span>Choose Your Plan</span>
                <select name="plan" id="">
                    <option value="basic">Basic Plan</option>
                    <option value="premium">Premium Plan</option>
                    <option value="ultimate">Ultimate Plan</option>
                </select>
               
            </div>
            <div class="inputbox">
                <span>Your Address</span>
                <textarea name="address" placeholder="Enter your adddress" required cols="30" row="10"></textarea>
            </div>

            <div class="inputbox">
                <span>Your Message</span>
                <textarea name="message" placeholder="Enter your message" required cols="30" row="10"></textarea>
            </div>

        </div>
        <input type="submit" value="send message" name="send" class="btn">

    </form>
</selection>



<?php  @include 'footer.php';?>
</div>


<!-- swiper j.s link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--custom js file link-->
<script src="js/script.js"></script>

</body>
</html>