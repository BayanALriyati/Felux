<?php
    $dsn ='localhost'; //data sourse name
    $user= 'root'; 
    $pass ='';
    $dbas='felux';
    
        $con = mysqli_connect($dsn ,$user ,$pass,$dbas);//start new connection 
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
          }
          echo "Connected successfully";
          
        // echo 'YOU ARE CONNECTED';
        echo '<br>';
        
    
    
    $sqlimage  = "SELECT  `category_img` FROM `categories` ";
    $imageresult1 = mysqli_query($con , $sqlimage);
    
    while($rows=mysqli_fetch_assoc($imageresult1))
    {
        $image = $rows['image'];
        echo "<img src='$image' >";
        echo "<br>";
    } 
    
    ?>