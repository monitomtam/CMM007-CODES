<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Tourist places in Africa</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/unsemantic-grid-responsive-tablet.css">
</head>
<body>
    <?php  
 include ("db_connect.php");
?>
    <!--HEADER START-->
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
    <a href="Login.php" class="button">Signin</a>
    </header>
<main>
    <h3>Discover the Beauty of Lake Malawi</h3>
    <img src="asset/images/Malawi.png" alt="lake Malawi" style="width:100%">
    <p>Spanning three countries, Malawi, Mozambique, and Tanzania, 
        Lake Malawi is the third-largest lake on the African continent 
        at 29,600 square kilometers. It's part of the African Great Lake system, 
        and its age is estimated at about one or two million years.
        The majority of tourists visit the Malawi side of the lake,
         which is called Lake Nyasa in Tanzania and Lago Niassa in Mozambique.

        One interesting fact about Lake Malawi is that it is home to more kinds of
         fish than any other lake on Earth! Needless to say, fishing is very popular here.
        
        You can also swim and snorkel in the warm, clear water, but you'll want to take a 
        short course of a fast-acting antibiotic after doing so to protect yourself from bilharzia, 
        which is found here. </p>
</main>

<footer>
    <div class="footer-content">
<h2>Connect with us</h2>
<ul class="socials">
    <li><a href="Comments.php">Comments/Questions</a></li>
    <li><a href="Privacy.php">PrivacyPolicy</a></li>
    <li><a href="https://www.facebook.com"><img src="asset/images/facebooklogo.png" alt="Facebook" width="85" height="100"></a></li>
    <li><a href="https://www.twitter.com"><img src="asset/images/twitterlogo.png" alt="Twitter" ></a></li>
    <li><a href="https://www.youtube.com"><img src="asset/images/youtubelogo.png" alt="YouTube" width="85" height="100"></a></li>
    <li><a href="https://www.instagram"><img src="asset/images/instagramlogo.png" alt="Instagram" width="85" height="100"></a></li>

</ul>
</div>
<div class="footer-bottom">
    <p>copyright &copy;2023 RGU.designed by <span>Monisola</span></p>
</div>
</footer>
</body>
</html>