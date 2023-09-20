<?php

// Include the database connection file
include_once "connect.php"; 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $number = $_POST['number'];
    $pass = $_POST['pass'];

    // Inserting data into the database
    $insert_user = $conn->prepare("INSERT INTO `users` (number, email, password) VALUES (?, ?, ?)");

    // Check if the prepared statement was created successfully
    
    if ($insert_user) {
        // Bind parameters and execute the query
        $insert_user->bind_param("sss", $number, $email, $pass);

        if ($insert_user->execute()) {
          echo  '<p class="success-message">Registration successful.</p>';
        } else {
            echo '<div class="error-message">Something went wrong: ' . $insert_user->error . '</div>';
        }

        // Close the prepared statement
        $insert_user->close();
    } else {
        echo "Error!: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>process_signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="css?family=Roboto:100,400,400i,700,700i%7CPlayfair+Display:400,400i,700,700i%7CMaterial+Icons&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="css%20%281%29/vendor.css">
    <link rel="stylesheet" type="text/css" href="css%20%281%29/main.css">
    <link rel="apple-touch-icon" sizes="57x57" href="">
    <link rel="apple-touch-icon" sizes="60x60" href="">
    <link rel="apple-touch-icon" sizes="72x72" href="">
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="apple-touch-icon" sizes="114x114" href="">
    <link rel="apple-touch-icon" sizes="120x120" href="">
    <link rel="apple-touch-icon" sizes="144x144" href="">
    <link rel="apple-touch-icon" sizes="152x152" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="192x192" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="96x96" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="manifest" href="img/content/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">
    <!-- <link rel="icon" type="image/x-icon" href="img/fav.ico"> -->

    </head>







  <body class="signup-body">

  <section class="form-container">

  <form action="" method="post">
   <h3>create an account!</h3>
   <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
   <input type="number" name="number" required min="0" max="9999999999" maxlength="10" placeholder="enter your number" class="box">
   <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
   <!-- <input type="password" name="c_pass" required maxlength="20" placeholder="confirm your password" class="box"> -->
   <p>already have an account? <a href="login.php">login now</a></p>
   <input type="submit" value="register now" name="submit" class="btn">
      

</form>

</section>





    <div class="transition-curtain bg-dark-2">
      <canvas id="js-webgl"></canvas>
    </div>
    <!-- VENDOR SCRIPTS -->
    <script src="js/vendor.js"></script>
    <!-- - VENDOR SCRIPTS -->
    <!-- COMPONENTS -->
    <script src="js/components.js"></script>
    <!-- - COMPONENTS -->
    <script src="maps/api/js?key=AIzaSyDNq0ueciTt6V_9F8Uhce_15ReMqETLWtU" async=""></script>
    <!-- PAGE SCRIPTS-->
    <!-- - PAGE SCRIPTS-->
</body>
</html>
