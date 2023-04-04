<?php

 $africonn = mysqli_connect("localhost:3306", "root", "", "touristafrica");

 

    if(mysqli_connect_errno()){
      echo ("connection failed: " . mysqli_connect_error());
    } else {
     echo "connection sucessful";
    } 
    
?>