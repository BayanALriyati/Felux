<?php
session_start();
require('../config.php');
require('../functions/myfunctions.php');

if (isset ($_POST['add-category-btn']))
{
    $NameCtg= $_POST['name'];
    $NameImg= $_FILES['image']['name'];
    
    $path ="./uploads";
    $image_ext =pathinfo($NameImg, PATHINFO_EXTENSION);
    $filename=time().'.'.$image_ext ;
}
$sql = "INSERT INTO  categories (category_name,category_img) VALUES ('$NameCtg','$NameImg')";

if ($con->query($sql))
{
    move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
    redirect("add-category.php" , "Category Added Successfully");
    // echo "Category Added Successfully" ;
}else 
{
    redirect("add-category,php" , "something went wrong");
}
 
?>