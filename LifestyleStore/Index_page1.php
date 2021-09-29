<!DOCTYPE>
<html>
    <head>
    <title>Lifestyle Store</title>
    <link href="index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="header">
            <div class="inner-header">
                <div class="logo">
                    <a href="Index_page.php">Lifestyle Store</a>
                </div>
                <div class="header-link">
                    <a href="signup.php">Sign up</a>
                </div>
                <div class="header-link">
                        <a href="Login.php">Login</a>
                </div>
            </div>

        </div>
        <div class="content">
            <div class="banner-image">
                <marquee style="font-size: 40px; color: rgba(9, 15, 15, 0.8); font-family: lucida calligraphy;">Welcome to lifestyle store!</marquee>
                <div class="inner-banner-image">
                    
                    <div class="banner_content">
                        <h1>Sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="explore.php" target="_blank">
                            <button class="button">Shop Now</button>
                        </a>

                    </div>
                
                </div>
            </div>

        </div>
        <div class="container">
            <div class="items">
                <a href="camera.php" target="_blank">
                    <img class="thumbnail" src="camera.jpg">
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </a>
            </div>
            <div class="items">
                    <a href="watch.php" target="_blank">
                        <img class="thumbnail" src="watch.jpg">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands.</p>
                        </div>
                    </a>
            </div>
            <div class="items">
                    <a href="shirt.php" target="_blank">
                        <img class="thumbnail" src="shirt.jpg">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                    </a>
            </div>
        </div><br><br><br><br>
        <footer class="header">
            <center>
                <div>
                    <p>Copyright@Lifestyle Store. All rights Researved|Contact Us:+91 7505473456</p>
                </div>
            </center>
        </footer>
        
    </body>
</html>
<?php
   $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $conn=mysqli_connect('localhost','root','','lifestylestore');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $check= mysqli_query($conn,"SELECT uname FROM users WHERE email ='$email'");
        if($check)
		{	echo "<script>alert('!! Email Already Registered')</script>";
				
        }
        else
        {
            $stmt = "INSERT INTO `users`(`uname`, `email`, `password`, `contact`, `city`, `address`) VALUES ('$name','$email','$password','$contact','$city','$address',)";
            //$stmt ="INSERT INTO users( uname, email, password, contact, city, address) VALUES ('$name','$email','$password','$contact','$city','$address')";
            $run=mysqli_query($conn,$stmt);
            if ($run){
                echo "<script>alert('Registration Successfully Done, Now login to purchase')</script>";
            }
        }
    }

 
?>