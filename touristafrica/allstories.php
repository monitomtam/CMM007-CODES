<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Tourist Places in Africa</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
    </style>
    </head>
    <body>
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
      <a href="Login.php" class="button">Signin</a>
      </header>
        <main>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">


    <!-- Second Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
      <div class="w3-quarter">
        <img src="asset/images/kruger.png"  alt="Kruger National Park" style="width: 100%">
        <h3>Kruger National Park South Africa</h3>
        <p>The Kruger National Park in the North of the country is often the
            starting point for a superb trek down the coast toward Cape Town.</p>
            <a href ="Kruger.php" class id ="button"> Read More</a>
      </div>
      <div class="w3-quarter">
        <img src="asset/images/LionsHead.png" alt="Lion's Head CapeTown" style="width:100%">
        <h3>Lions Head, CapeTown</h3>
        <p>Cape Town is one of the top tourist destinations in the world, a colorful
            mix of people, cultures, tradition, history, nature, and food, is perhaps 
            the best way to define the Mother City.</p>
            <a href ="LionsHead.php">Read More</a>
      </div>
      <div class="w3-quarter">
        <img src="asset/images/Victoriafalls.png" alt="Victoria falls" style="width:100%">
        <h3>Victoria Falls Zimbabwe/Zambia</h3>
        <p>Victoria Falls is a jointly owned tourist attraction and can be viewed and 
            explored from either Zambia or Zimbabwe.</p>
            <a href ="victoriafall.php">Read More</a>
      </div>
      <div class="w3-quarter">
        <img src= "asset/images/klimanjaro.png" alt="Kilimanjaro Kenya"style="width:100%">
        <h3>Mount Kilimanjaro, Tanzania</h3>
        <p>Mount Kilimanjaro, or just “Kili” to many in the climbing fraternity, is a major
            tourist attraction in Africa. For those seeking an adventure holiday, a trek to 
            the peak of Mount Kilimanjaro is perhaps the epitome of such a vacation.</p>
            <a href ="Kilimanjaro.php">Read More</a>
      </div>
      <div class="w3-quarter">
        <img src= "asset/images/MaasaiMara.png" alt="Maasai Mara, Kenya" style="width:100%">
        <h3>The Maasai Mara National Reserve, Kenya</h3>
        <p>The Massai Mara is one of the top 10 tourist attractions in Africa, not just to see but
            experience the big 5</p>
            <a href ="Maasai.php">Read More</a>
      </div>
      <div class="w3-quarter">
        <img src="asset/images/zanzibar.png" alt="Beauty of Zanzibar"  style="width:100%">
        <h3>Zanzibar, Tanzania</h3>
        <p>With a vibrant history dating back to the 17th century, the destination
            has a magical blend of Arabic, Middle Eastern, Moorish, and Indian cultures and styles</p>
            <a href ="zanzibar.php">Read More</a>
      </div>
      <div class="w3-quarter">
        <img src= "asset/images/Six_pyramids.png" alt="The six pyramids of Giza"style="width:100%" height="200">
        <h3>Giza Necropolis, Egypt</h3>
        <p>In the Giza Necropolis, you will get to see the Great Pyramid of Giza, the Pyramid of Menkaure, 
            and the Pyramid of Khafre.</p>
            <a href ="Pyramids.php">Read More</a> 
      </div>
      <div class="w3-quarter">
        <img src="asset/images/Okavango.png" alt="Okavango Delta" width="300" height="200">
        <h3>Traverse the Okavango Delta in Botswana</h3>
        <p>Botswana, in southern Africa, is another legendary safari destination.</p>
        <a href ="Okavango.php">Read More</a>
      </div>
      <div class="w3-quarter">
        <img src="asset/images/Malawi.png" alt="lake Malawi" style="width:100%">
        <h3>Discover the Beauty of Lake Malawi</h3>
        <p>Spanning three countries, Malawi, Mozambique, and Tanzania, 
            Lake Malawi is the third-largest lake on the African continent 
            at 29,600 square kilometers. It's part of the African Great Lake system, 
            and its age is estimated at about one or two million years.</p>
            <a href ="Malawi.php">Read More</a>
      </div>
    </div>
  
    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
      <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
      </div>
    </div>

        </main>

        <footer>
            <div class="footer-content">
        <h2>Connect with us</h2>
        <ul class="socials">
            <li><a href="Comments.php">Comments/Questions</a></li>
            <li><a href="Privacy.php">PrivacyPolicy</a></li>
            <li><a href="https://www.facebook.com"><img src="asset/images/facebooklogo.png" alt="Facebook"width="85" height="100" ></a></li>
            <li><a href="https://www.twitter.com"><img src="asset/images/twitterlogo.png" alt="Twitter"></a></li>
            <li><a href="https://www.youtube.com"><img src="asset/images/youtubelogo.png" alt="YouTube"width="85" height="100" ></a></li>
            <li><a href="https://www.instagram"><img src="asset/images/instagramlogo.png" alt="Instagram" ></a></li>
        
        </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 RGU.designed by <span>Monisola</span></p>
        </div>
        </footer>
        </body>
        </html>