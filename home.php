<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}



?>

<html>
    <head>
        <title>Home page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="homestyle.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
    <body>
    
        <div class="contain">
            <div class="logout" >
                <a text-align:right href="logout.php"> LOGOUT </a>
            </div>
            <div class="logo">
               <img src="images/logo.png" width="250px" height="100px">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Enhance your beauty<br>with our Products!</h1>
                    <a href="products.html" class="btn"> Let's Explore &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/logo2.png">
                </div>
            </div>
        
        </div>
        
        
            
        
    
    
    </body>
</html>