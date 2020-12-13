<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=  <center>

Name : 
<input type="text" name="username" required> <br>

<br>





<br>
Email : 
<input type="email" placeholder="abcd@abd.abc" name="email" required> <br><br>




<tr>
 <td>

 <input type="submit" value="Submit">
 </td>
</tr>




</center>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
if ($_GET['SUBMIT'])
{

    $username = $_GET['username'];

     $email = $_GET['email'];
     $query = "UPDATE FASTCODE SET username = '$username',email ='$email ' WHERE id = '' ";

     $data = mysqli_query($conn , $query);
     if($data)
     {
         echo"successfull";

     }
     else {
         echo "Not";
     }

}

?>