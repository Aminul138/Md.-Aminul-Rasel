<?php

if(isset($_POST['submit'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];

 if($user == "admin" && $pass=="admin"){
     echo "<script> window.location.assign('home.php'); </script>";
 }
 else{
     echo(" Invalide Information ");
 }





}



?>

