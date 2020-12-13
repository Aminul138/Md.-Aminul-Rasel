<?php
include ("connection.php");

$id = $_GET['id'];
$query = "DELETE FROM FASTCODE WHERE ID ='id' ";
$data = mysqli_query($conn , $query);

if($data)
{
    echo"Successfull";
}
else
{
    echo"not  ";
}
?>