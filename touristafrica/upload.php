<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>upload</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/unsemantic-grid-responsive-tablet.css">
</head>
<body>
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
    <main>
         <h1>Upload Your Stories</h1>
<form method="post" action="upload.php" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title"><br><br>

    <label for="author">Author:</label>
    <input type="text" name="author" id="author"><br><br>

    <label for="category">Category:</label>
    <input type="text" name="category" id="category"><br><br>

    <label for="content">Content:</label>
    <textarea name="content" id="content" cols="80" rows="30"></textarea><br><br>

    <label for="image">Upload image</label>
    <input type="file" name="image" id="image"><br>

    <input type="submit" name = "upload" value="Upload">
    
</form>



<?php
    require_once 'db_connect.php';
    // When form submitted, insert values into the database.
    if (isset($_POST['upload'])) {
        // removes backslashes
        $title = stripslashes($_REQUEST['title']);
        //escapes special characters in a string
        $title2 = mysqli_real_escape_string($africonn, $title);
        $author   = stripslashes($_REQUEST['author']);
        $author2   = mysqli_real_escape_string($africonn, $author);
        $category    = stripslashes($_REQUEST['category']);
        $category2    = mysqli_real_escape_string($africonn, $category);
        $content    = stripslashes($_REQUEST['content']);
        $content2   = mysqli_real_escape_string($africonn, $content);
        $filename = $_FILES['image']["name"];
        $tempname = $_FILES['image']["tmp_name"];
       $folder= "./myimage/" . $filename;

        $query    = "INSERT into stories (title, author, category, content, image_name)
                     VALUES ('$title2', '$author2', '$category2', '$content2', '$filename')";
        $result   = mysqli_query($africonn, $query);
        if ($result) {
            echo "<script type ='text/javascript'>alert('Story submitted sucessfully')</script>";
            //echo "<div class='form'>
                  //<h3>Story submitted sucessfully</h3><br/>
                  
                  //</div>";
        } else {
            echo "<div class='form'>
                  <h3>Upload not successful</h3><br/>
                  <p class='link'>Click here to <a href='upload.php'>upload</a> again.</p>
                  </div>";
        }
    if(move_uploaded_file ($tempname, $folder)){
        echo "image uploaded";
    }else{
        echo "image not uploaded";
    }
    }
?>

</main>
</header>
<footer>
    <div class="footer-content">
<h2>Connect with us</h2>
<ul class="socials">
    <li><a href="Comments.html">Comments/Questions</a></li>
    <li><a href="Privacy.html">PrivacyPolicy</a></li>
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