<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="login-signup.css">
	</head>
	<body>
            <div class="header">
                    <div class="inner-header">
                        <div class="logo" style="color: #fff;">
                            <a href="Index_page.php" style="color: #fff; text-decoration: none;">Lifestyle Store</a>
                        </div>
                        <div class="header-link">
                            <a href="signup.php" style="color: #fff; text-decoration: none;">Sign up</a>
                        </div>
                        <div class="header-link">
                                <a href="Login.php" style="color: #fff; text-decoration: none;">Login</a>
                        </div>
                    </div>
        
                </div>
                
                    <div class="banner-image">
                        <div class="inner-banner-image">
                    
                    
        <form action="phplogin.php" method="post" style="background-color:rgba(255,255,255,0.5);">
            
		    <h1>LOGIN</h1>
		<div style="padding-left: 15px;">
		    <h3 style="color:rgba(0,0,0,0.7)">Login to make purchase</h3>
		    <input type="text" placeholder="Email" name="email" required><br/>
		    <input type="password" placeholder="Enter Password" name="password" required><br/>
		    <button type="submit" value="submit" name="submit">Login</button><br/>
          <label>
              <input type="checkbox" checked="checked" name="remember" ><b style="color: rgba(0,0,0,0.7)">Remember me</b>
          </label><br/><br/><br/>
           <p style="color:rgba(0,0,0,0.7)">Don't have an account ?  
           <a href="signup.php" style="text-decoration: none;"><b>Register</b></a></p>
         </div>
            
        </form>
                
               
                </div>
                </div><br>
        <footer class="header">
                <center>
                    <div>
                        <p>Copyright@Lifestyle Store. All rights Researved|Contact Us:+91 7505473456</p>
                    </div>
                </center>
            </footer>

	</body>
</html>