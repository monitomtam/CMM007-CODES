$africonn

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Tourist Places In Africa</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/unsemantic-grid-responsive-tablet.css">
</head>
<body>
    <?php  
 include ("db_connect.php");
?>
    <header>
        <img src="asset/images/Tourist.png" alt="Tourist Places in Africa" width="60" height="60">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href ="allstories.php"> All Stories</a></li>
            <li><a href ="Subscribe.php">Subscribe </a></li>
            <li><a href ="aboutus.php"> About us</a></li>
            <li><a href ="Upload.php"> Upload</a></li>
            <li><a href ="Category.php"> Category</a></li>
        </ul>
        <a href="Login.phps" class="button">Signin</a>
        </header>  
<body>
<?php
    require('db_connect.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($africonn, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($africonn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($africonn, $password);
        $created_at = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, created_at)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$created_at')";
        $result   = mysqli_query($africonn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Thank you for registering.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <div>
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required /><br><br>
        <input type="text" class="login-input" name="email" placeholder="Email Adress"><br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"><br><br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </div>
    </form>
<?php
    }
?>
<footer>
    <div class="footer-content">
<h2>Connect with us</h2>
<ul class="socials">
    <li><a href="Comments.php">Comments/Questions</a></li>
    <li><a href="Privacy.php">PrivacyPolicy</a></li>
    <li><a href="https://www.facebook.com"><img src="asset/images/facebooklogo.png" alt="Facebook" width="85" height="100"></a></li>
    <li><a href="https://www.twitter.com"><img src="asset/images/twitterlogo.png" alt="Twitter"></a></li>
    <li><a href="https://www.youtube.com"><img src="asset/images/youtubelogo.png" alt="YouTube" width="85" height="100"></a></li>
    <li><a href="https://www.instagram"><img src="asset/images/instagramlogo.png" alt="Instagram" width="85" height="100"></a></li>
</ul>
</div>
<div class="footer-bottom">
    <p>copyright &copy;2023 RGU.designed by <span>Monisola</span></p>
</div>
<div class="cookie-container">
    <p>This Website uses cookies to ensure you get the best experience on our website. <a href="">More Info</a></p>
    
    <button class="cookie-btn">
       OK
    </button>
    </div>
</footer>
</body>
</html>

