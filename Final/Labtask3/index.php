<!DOCTYPE HTML>
<html>
<head>
  <title>Person Info</title>
</head>
<body>
 <form action="insert.php" method="POST">
  <table>
    
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="Male" required>Male
     <input type="radio" name="gender" value="Femail" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Date of Birth :</td>
    <td><input type="text" name="Birth" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>