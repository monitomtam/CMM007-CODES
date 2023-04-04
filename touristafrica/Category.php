<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Tourist Places In Africa</title>
        <meta name="viewport" content="width-device-width, initial-scale =1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit........."></script>
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
         <main>  
        <div class="main-container">
            <h2>Sort by categories</h2>
            <div class="filter-container">
                <div class="category-head">
                    <ul>
                        <div class="category-title" id="all">
                            <li><a href="allstories.php">All</a></li>
                            <span><i class="fas fa-border-all"></i></span>
                        </div>
                        <div class="category-title" id="Location">
                            <li><a href="kruger.php">Location</a></li>
                            <span><i class="fas fa-landmark"></i></span>
                        </div>
                        <div class="category-title" id="Culture">
                            <li><a href="Malawi.php">Culture</a></li>
                            <span><i class="fas fa-chart-area"></i></span>
                        </div>
                        <div class="category-title" id="Language">
                            <li><a href="Maasai.php">Language</a></li>
                            <span><i class="fas fa-talk"></i></span>
                        </div>
                        <div class="category-title" id="Climate">
                            <li><a href="Kilimanjaro.php">Climate</a> </li>
                            <span><i class="fas fa-weather"></i></span>
                        </div>
                        <div class="category-title" id="Currency">
                            <li><a href="Okavango.php">Currency</a></li>
                            <span><i class="fas fa-border-all"></i></span>
                        </div>
                    </ul>
                </div>

            </div>

        </div>
         </main>
        <footer>
            <div class="footer-content">
        <h2>Connect with us</h2>
        <ul class="socials">
            <li><a href="Comments.html">Comments/Questions</a></li>
            <li><a href="Privacy.html">PrivacyPolicy</a></li>
            <li><a href="https://www.facebook.com"><img src="asset/images/facebooklogo.png" alt="Facebook"width="85" height="100" ></a></li>
            <li><a href="https://www.twitter.com"><img src="asset/images/twitterlogo.png" alt="Twitter"></a></li>
            <li><a href="https://www.youtube.com"><img src="asset/images/youtubelogo.png" alt="YouTube" width="85" height="100"></a></li>
            <li><a href="https://www.instagram"><img src="asset/images/instagramlogo.png" alt="Instagram"width="85" height="100" ></a></li>
        
        </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 RGU.designed by <span>Monisola</span></p>
        </div>
        </footer>
    </body>

</html>
