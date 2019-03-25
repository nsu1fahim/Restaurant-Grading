<?php
session_start();
$db = mysqli_connect("localhost","root","","authentication");
if(isset($_POST['register_btn'])){
    session_start();
    $email = mysqli_real_escape_string($_POST['email']);
    $password = mysqli_real_escape_string($_POST['password']);
}
?>


<!DOCTYPE>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/stylesheets/SignUp.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400">
</head>
<body>
<header class="primary-header container group">
    <h1 class="logo">
        <a href="LandingPage.html">Restaurant<br>Grading</a>
    </h1>
    <h3 class="tagline">Welcome to the land of foodies . . . </h3>
    <nav class="nav primary-nav">
        <ul>
            <li><a href="LandingPage.html">Home</a></li><!--
     --><li><a href="SignUp.html">SignUp</a></li><!--
     --><li><a href="Login.html">Login</a></li><!--
     --><li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
</header>

<section class="row-alt">
    <div class="lead container">


    </div>
</section>

<!-- Main content -->

<form action="Bookingpage.html" method="post">

    <h1>Login</h1>

    <fieldset>


        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password" required>


        <button type="submit">Login</button>
</form>

</section>

</body>
</html>
