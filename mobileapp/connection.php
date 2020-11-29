<?php      
    $host = "localhost";  
    $username = "root";  
    $password = '';  
    $db_name = "myapp";  
      
    $con = mysqli_connect($host, $username, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
       
    } 
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if ($row['usernamr'] == $username && $row['password'] == $password )
    {
        echo "<script> window.location.assign('home.php'); </script>";
    }
    else{
        echo " Info Is not right";
    }
?>  
