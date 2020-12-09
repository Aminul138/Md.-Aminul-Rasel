
<?php
include("connection.php");
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Person Info</title>
</head>
<body>
  
<form action="action.php" method="GET">
  <center>

     Name : 
     <input type="text" name="username" required> <br>
    
    <br>
     Password : 
     <input type="password" name="password" required> <br>
    <br>
    
     Gender : 
     
     <input type="text" placeholder="Mail/Femail" name="gender" required> <br>
     
    
    <br>
     Email : 
     <input type="email" placeholder="abcd@abd.abc" name="email" required> <br><br>
     
    
     Date of Birth : 
     <input type="text" placeholder="dd/MM/YYYY" name="birth" required> <br><br>
    
    <tr>
      <td>

      <input type="submit" value="Submit">
      </td>
    </tr>
     
    
</form>

</center>
</body>
</html>
