<?php
session_start();
require('config.php');

if(isset($_POST['Submit'])){
  $_SESSION['validate']=false;
  $user_email=$_POST['email'];
  $user_password=$_POST['password'];
  $error="";
  $sql="SELECT * FROM users WHERE  user_email =:email  and user_password =:password ";

   $statement =  $con->prepare($sql); //سرعه بالقراءه و سكيور , بدون تنفيذ
 //binding : bind Varible with query
   $statement->bindValue(':email' , $user_email);
   $statement->bindValue(':password' ,$user_password);
   $statement-> execute();    //بتنفذ كود 
   
   $S =  $statement->fetch(PDO::FETCH_ASSOC);    //بجيب الداتا  // fetch as array
  
  if(!empty($_POST['email']) && !empty($_POST['password']) && ($_SERVER['REQUEST_METHOD'] === 'POST')){
    
        if($S){
        $_SESSION['id']=$S["id"];
        $_SESSION['username']=$S["user_name"];
        $_SESSION['email']=$S["user_email"];
        $_SESSION['password']=$S["user_password"];
        $_SESSION['role']=$S["Role"];
        
        $_SESSION['validate']=true;
          }

        else{
           $error= "Make sure that you are registere!";
          }
      
        }
  else{
    $error ="error";
  }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>
<body>
  <div class="wel">
    <h1>login</h1>
    <p>welcome back Login </p>
</div>
<form action="" method="POST">
  <div class="mb-3 ">

    <input type="text"  class="form-control" name="email" placeholder="Email">
  </div>
  <div class="mb-3">
    
    <input type="password" class="form-control" name="password" placeholder=" Password" >
    </div>
    <?php 
    if( !empty ($error) ){
        echo "<p>$error</p>";
    }
    ?>
  <input class="btn btn-primary col-3 mx-auto icon"  type="Submit" name="Submit" value="Login" >
  <br>
  <p class="wel">Don't have an account ?<a href="SignUp.php">Sign Up</a> </p>
</form>
</body>
</html>