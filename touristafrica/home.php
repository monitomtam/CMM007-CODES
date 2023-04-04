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
        <li><a href ="login.php"> Upload</a></li>
        <li><a href ="Category.php"> Category</a></li>
    </ul>
    <a href="login.php" class="button">Signin</a>
    </header>

<main>
    
<img src="asset/images/Africabest.png" alt="Africabest" width="1200" style="width:100%">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65318087.964582466!2d23.59146645!3d2.265532400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10a06c0a948cf5d5%3A0x108270c99e90f0b3!2sAfrica!5e0!3m2!1sen!2suk!4v1680204650297!5m2!1sen!2suk" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
</main>
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