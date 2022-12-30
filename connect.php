<?php 
$dsn ='mysql:host=localhost;dbname=shop_db'; //data sourse name
$user= 'root'; 
$pass ='';

try{
    $conn = new PDO($dsn ,$user ,$pass);//start new connection 
    $conn ->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);// set the PDO error mode to exception 
    echo 'YOU ARE CONNECTED';
    echo '<br>';

}

catch (PDOException $s) {
    echo 'FAILED' . $s->getMessage();
}


?>

