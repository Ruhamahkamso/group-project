<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>process_cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="css?family=Roboto:100,400,400i,700,700i%7CPlayfair+Display:400,400i,700,700i%7CMaterial+Icons&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="css%20%281%29/menustyle.css">
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

<style>
    /* cart page */
     .cart-body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
	background-image: url('././img/assets/projects/dining-6.jpg'); /* Set the background image URL */
	background-size: cover; /* Cover the entire viewport */
	background-repeat: no-repeat; /* Prevent image repetition */
	background-attachment: fixed; /* Fixed background image */
}

   .cart-container {
   
	max-width: 800px;
	margin: 0 auto;
	padding: 20px;
	background-color: transparent; /* Semi-transparent white background */
	box-shadow: 0 0 10px black; /* Add a subtle shadow */
	margin-top: 30px; 
	margin-bottom: 50px; 
}

  h1 {
	color: white;
}

  .cart-item {
	border: 1px solid #cccccc;
	padding: 10px;
	margin-bottom: 10px;
	background-color: #628ab2; /* Set background color for each item */
}

   .cart-item h2 {
	margin: 0;
}

   .cart-item button {
	background-color: #837567;
	color: white;
	border: none;
	padding: 5px 10px;
	cursor: pointer;
}

  .cart-item button:hover {
	background-color: #999999;
}

.total {
	margin-top: 20px;
	font-weight: bold;
}

  /* Styling for the checkout button */
  .checkout-button {
	background-color: #837567; /* Custom color for the button */
	color: white;
	border: none;
	padding: 10px 20px;
	font-size: 18px;
	cursor: pointer;
	border-radius: 5px;
}

.checkout-button:hover {
	background-color:  #628ab2; /* Darker shade on hover */
}
 </style>

</head>

<body class="cart-body">

    <div class="cart-container">
        <h1>Your Cart</h1>
        <div class="cart-item">
            <h2>Oxtail - <span style="color: #cccccc;">5,000</span></h2>
            <button>Remove</button>
        </div>
        <div class="cart-item">
            <h2>Fresh fish - <span style="color: #cccccc;">4,000</span></h2>
            <button>Remove</button>
        </div>
        <div class="cart-item">
            <h2>Goat meat - <span style="color: #cccccc;">3,900</span></h2>
            <button>Remove</button>
        </div>
        <div class="cart-item">
            <h2>Chicken - <span style="color: #cccccc;">3,400</span></h2>
            <button>Remove</button>
        </div>
        <div class="cart-item">
            <h2>Smoked fish - <span style="color: #cccccc;">4,500</span></h2>
            <button>Remove</button>
        </div>
        <div class="total">
            Total: <span style="color: #black;">20,800</span>
        </div>
        <button class="checkout-button">Checkout</button>
    </div>

    <div class="transition-curtain bg-dark-2"></div>
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
