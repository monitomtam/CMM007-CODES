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
        <a href="Login.php" class="button">Signin</a>
        </header>  
    
    

<body>
<?php
    require('db_connect.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($africonn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($africonn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($africonn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Tourist Africa<BR>Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Signup Now</a></p>
        <p class="link">Upload your story after signing in <a href="upload.php">Upload Now</a></p>
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

    </button>
    </div>
</footer>
</body>
</html>
</body>
</html>

