<?php
require('../config.php');

// function getAll($table)
// {
// global $con; I
// $sql = "SELECT * FROM $table";
// return $query_run = mysqli_query($con, $sql);
// }

function redirect( $url , $message)
{
$_SESSION['message']=$message;
header ('Location: ' . $url );
exit();

}

?>