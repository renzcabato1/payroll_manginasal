<table align='center' width='50%' border='1' cellspacing='0'>
<form action=""  method="POST" enctype="multipart/form-data">
	
<tr >
<td align='center' style='color:black;' colspan='4'>
<h1>EDIT MANUAL ENCODE
</h1>
</td>
</tr>
<tr>
<td align='center' style='color:black;' colspan='2'>
<?php
			include ("views/connect.php");	
			$sql = "SELECT * FROM information where account_type!='ADMIN' and emp_id!='$emp_id' order by last_name asc";
			$result = $conn->query($sql);	
			echo'<select name="employee_id"  style="border:solid 1px #333333;" readonly>';		
			echo"<option value='$emp_id'>$last_name5, $first_name5</option>";
       	
			
		   echo'</select>';
		  ?>
		  </td>
		  </tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
DATE: <input type="date" style="border:solid 1px #333333;" value='<?php echo"$date_bio";?>' name="date_enter"  readonly>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
CHECK IN: <input type="text" name="check_in" value='<?php echo"$check_in";?>' placeholder='HH:MM' required>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
BREAK OUT: <input type="text"  name="break_out" value='<?php echo"$break_out";?>' placeholder='HH:MM' required>

</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
BREAK OUT: <input type="text" name="break_in"  value='<?php echo"$break_in";?>' placeholder='HH:MM' required>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
CHECK OUT: <input type="text" name="check_out" value='<?php echo"$check_out";?>' placeholder='HH:MM' required>
</td>
</tr>
<tr>
<td align='center' style='color:black;' colspan='2'>
 <input type="submit" value="Submit">
</td>
</tr>

</form>
</table>