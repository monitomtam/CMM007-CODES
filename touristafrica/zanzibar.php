<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Home</title>
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
    <h3>Zanzibar, Tanzania</h3>
    <img src="asset/images/zanzibar.png" alt="Beauty of Zanzibar" style="width: 100%;">
    <p>Just off the coast is an exotic archipelago with pristine beaches and warm oceans.
         This fantastic location is one of the top tourist destinations in Africa because, 
         for some, it is the ideal place for the perfect, relaxing beach holiday.
         With a vibrant history dating back to the 17th century, the destination has a
          magical blend of Arabic, Middle Eastern, Moorish, and Indian cultures and styles,
           making it unique like no other place in Africa.

         Best time to visit: June to October </p>
</main>
<footer>
    <div class="footer-content">
<h2>Connect with us</h2>
<ul class="socials">
    <li><a href="comments.php">Comments/Questions</a></li>
    <li><a href="privacy.php">PrivacyPolicy</a></li>
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