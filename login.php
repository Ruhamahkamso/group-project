<?php
 // Start a PHP session for storing user data
session_start();

// Include the database connection file
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Fetch the user's data from the database based on their email
    $select_user = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $select_user->bind_param("s", $email);
    $select_user->execute();
    $result = $select_user->get_result();

    if ($result->num_rows === 1) {
        $user_data = $result->fetch_assoc();

        // Verify the entered password against the hashed password in the database
        if (password_verify($password, $user_data["password"])) {
            // Password is correct; set session variables for user authentication
            $_SESSION["user_id"] = $user_data["id"];
            $_SESSION["user_email"] = $user_data["email"];

            // Redirect to a secure page after successful login
            header("Location: menu.php");
            exit();
        } else {
            echo  '<p class="error-message">Incorrect password! please try again.</p>';
        }
        
    } 

    // Close the prepared statement
    $select_user->close();
}

// Close the database connection
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>process_login</title>
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

    
    


<body class="login-body">


<section class="form-container">

<form action="" method="post">
   <h3>welcome back!</h3>
   <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
   <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
   <p>don't have an account? <a href="signup.php">register new</a></p>
   <a href="index.php"><input type="submit" value="login now" name="submit" class="btn"></a>
</form>
</section>
</body>
</html>
