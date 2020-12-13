

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
    <th>Id :</th>
    <th>User Name :</th>
    <th>Password :</th>
    <th>Gender :</th>
    <th>E-mail:</th>
    <th>Date Of Birth :</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
        
    
    <?php
include 'connection.php';
$selectquery = " select * from fastcode ";

$query = mysqli_query($conn , $selectquery);

$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query)){

?>
<tr>
<td> <?php  echo $res['id']; ?> </td>
<td> <?php  echo $res['username']; ?> </td>
<td> <?php  echo $res['password']; ?> </td>
<td> <?php  echo $res['gender']; ?> </td>
<td> <?php  echo $res['email']; ?> </td>
<td> <?php  echo $res['birth']; ?> </td>
<td> <a href="#">Delect</a> </td>



</tr>

<?php
}
?>
</tbody>
   </table> 
</body>
</html>