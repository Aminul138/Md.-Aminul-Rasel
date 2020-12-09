
<?php
include("connection.php");

$query = "select * from FASTCODE";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo "Id :- ";
echo  $result['id']. '<br />';
echo "User Name :- ";
echo  $result['username']. '<br />';
echo "Password :- ";
echo  $result['password']. '<br />';
echo "Gender :- ";
echo  $result['gender']. '<br />';
echo "E-mail:- ";
echo  $result['email']. '<br />';
echo "Date Of Birth :- ";
echo  $result['birth']. '<br />';

    
?>