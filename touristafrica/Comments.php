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
    <a href="Login.html" class="button">Signin</a>
    </header>
    <main>
    <h2>Frequently Asked Questions</h2>
    <p>Why aren't images loading on the site?</p>
    You may be using an outdated browser. Storyline Online works best on the latest 
    versions of Firefox, Google Chrome, Safari, or Microsoft Edge. Internet Explorer is not supported.
    <p>How much does a Storyline Online subscription cost?</p>
    African tourist places stories is 100% free AND it is also ad-free.
    <p>Can I bookmark my preferred media player?</p>
    If your web browser accepts cookies, it will automatically remember your favorite player.
    <p>Do you have a question that was not asked/answered above?</p>
<h2>Have More Questions?</h2>
<h3>Please email us and we’ll post the most common ones here.</h3>

<form>
    <div>
        <label for="fname"> first name:</label>
        <input type="text" id="fname" placeholder=""
    </div>

    <br>
    <div>
       <label for="lname">last name:</label>
       <input type="text" id="lname" placeholder=""
    </div>

    <br>
    <div>
    <label for="email_address"> Email Address</label>
    <input type="text" id="email_address" placeholder=""
</div>
<br>
<div>
    <label for="subject"> Subject</label>
    <input type="text" id="email_address" placeholder="" 
</div>
<br>
<div>
    <label for="message"> Message</label>
    <input type="text" id="Message" placeholder="" 
</div>

<div>
    <input type="submit">
</div>
</form>
    </main>

    <footer>
        <div class="footer-content">
    <h2>Connect with us</h2>
    <ul class="socials">
        <li><a href="Comments.html">Comments/Questions</a></li>
        <li><a href="Privacy.html">PrivacyPolicy</a></li>
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