

<?php
$homepage = file_get_contents('user_info.txt', true);
echo ("Your Previus Balance is :- ");
echo $homepage ;
if(isset($_POST['submit']))  
{  
$number1 = $_POST['deposit'];
$number2 = $homepage;
$sum =  $number1+$number2;  

        echo "Your new Balance Is ".$sum;  	

}
if(isset($_POST['submit2']))  
{  
$oldb = $_POST['withdraw'];
$number3 = $homepage;
if($oldb<$number3)
{
    $total =  $oldb-$number3;  

        echo "Your new Balance Is ".$total;
}
else{
    echo " Do not have Money";
}
}

	



?>
	<form method="post">
	<table border="1" align="center">
    <table>
<tr>
<td>You want to add Some Money :</td>
<td> <input type="number" name="deposit" placeholder="Please Enter Your Amount"> </td>
</tr>
<tr>
                    <td>
                        <input type="submit" name=" submit" value="submit">
                    </td>
                </tr>
<tr>
<td>you want to withdrow some money :</td>
<td> <input type="text" name="withdraw" placeholder="Please Enter Your Amount"> </td>

</tr>
<tr>
                    <td>
                        <input type="submit" name=" submit2" value="submit">
                    </td>
                </tr>
<tr>
</table>
