<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Pyramids</title>
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
    <h3>Giza Necropolis, Egypt</h3>
    <img src= "asset/images/Six_pyramids.png" alt="The six pyramids of Giza"style="width:100%">
    <p>A lot of people do not think of Egypt as being in Africa. In the Giza Necropolis, 
        you will get to see the Great Pyramid of Giza, the Pyramid of Menkaure, and the 
        Pyramid of Khafre.Still, it is, and the Giza Necropolis has to be something on 
        many travel bucket lists. The ancient Egyptian civilizations are brought back to life 
        along the river Nile through pyramids and tombs. Not the Africa everyone immediately thinks 
        of but certainly a part of Africa everyone should indeed visit.

        Best times to visit: October to April when temperatures are cooler</p>
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
</footer>
</body>
</html>