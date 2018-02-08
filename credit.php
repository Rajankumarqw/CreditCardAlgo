<?php
include 'credit_cardValidate.php';
?>
<form action="" method="post">
<table width="50%" border="0">
<tr>
<td><h3>Credit Card</h3></td>
</tr>
<tr>
	<td>Credit Card No</td>
<td><input type="text" name="credit_card_no" required min="16" max="16"></td>
</tr>
</table>
<input type="submit" value="Validate" name="s">
</form>
<?php

if($_POST){

	$card_number = str_replace(" ",'', $_POST['credit_card_no']);

    $obj = new credit_card();
	$res=$obj ->validateCard($card_number);
	
   if($res)
   {
	   echo "Valid Card";
   }
else
{
	echo "Invalid Card";
}

   
}
?>