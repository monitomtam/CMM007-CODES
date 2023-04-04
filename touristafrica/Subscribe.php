<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Subscribe</title>
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
            <li><a href ="login.php"> Upload</a></li>
            <li><a href ="Category.php"> Category</a></li>
        </ul>
        <a href="login.php" class="button">Signin</a>
        </header> 

<body>
<div class="subscribe-box">
    <h1>Subscribe Now</h1>
    <span>Get notified about the next update</span><br><br>
    <hr>
    <form action="#">
            <input type="email" name="email_address" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
    </form>   
</div>
<footer>
    <div class="footer-content">
<h2>Connect with us</h2>
<ul class="socials">
    <li><a href="Comments.php">Comments/Questions</a></li>
    <li><a href="Privacy.php">PrivacyPolicy</a></li>
    <li><a href="https://www.facebook.com"><img src="asset/images/facebooklogo.png" alt="Facebook"width="85" height="100" ></a></li>
    <li><a href="https://www.twitter.com"><img src="asset/images/twitterlogo.png" alt="Twitter"></a></li>
    <li><a href="https://www.youtube.com"><img src="asset/images/youtubelogo.png" alt="YouTube"width="85" height="100" ></a></li>
    <li><a href="https://www.instagram"><img src="asset/images/instagramlogo.png" alt="Instagram"width="85" height="100" ></a></li>

</ul>
</div>
<div class="footer-bottom">
    <p>copyright &copy;2023 RGU.designed by <span>Monisola</span></p>
</div>
</footer>

</body>
</html>