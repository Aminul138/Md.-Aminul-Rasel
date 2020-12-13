

<?php
include("connection.php");
?>
<?php

$username = $_GET['username'];
$password = $_GET['password'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$birth = $_GET['birth'];

$query = "INSERT INTO FASTCODE (username, password, gender, email, birth) VALUES ('$username','$password','$gender','$email','$birth')";
$data = mysqli_query($conn, $query);

if($conn->query($query) === TRUE){
    header("Location: display.php");
}
else{
    echo "Error: " . $query . "<br>" . $conn->error;
}

?>

