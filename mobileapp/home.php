

<?php
$homepage = file_get_contents('user_info.txt', true);
echo ("Your Previus Balance is :- ");
echo $homepage ;
if(isset($_POST['submit']))  
{  
$oldb = $_POST['deposit'];

extract($_POST);
if(isset($save))
{
	switch($choice)
	{
		case '1':
        $res=$oldb+$homepage;
        echo $res;
		break;
		

		

		
	}
	
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
<td>you want to withdrow some money :</td>
<td> <input type="text" name="withdraw" placeholder="Please Enter Your Amount"> </td>
</tr>
<p>If you want to deposit please select 1</p><br>
<p>If you want to withdraw please select 2</p><br>
<tr>
				<th>Select Your Choice</th>
				<th>
				<select name="choice">
					<option>1</option>
					<option>2</option>
				</select>
				</th>
			</tr>
			<tr>
            <tr>
				
				<th colspan="2">
				<input type="submit" 
				name="save" value="Show Result">
				</th>
			</tr>
</table>
