<table align='center' width='50%' border='1' cellspacing='0'>
<form action=""  method="POST" enctype="multipart/form-data">
	
<tr >
<td align='center' style='color:black;' colspan='4'>
<h1>MANUAL ENCODE
</h1>
</td>
</tr>
<tr>
<td align='center' style='color:black;' colspan='2'>
<?php
			include ("views/connect.php");	
			$sql = "SELECT * FROM information where account_type!='ADMIN' order by last_name asc";
			$result = $conn->query($sql);	
			echo'<select name="employee_id"  style="border:solid 1px #333333;" required>';		
			echo"<option value=''>EMPLOYEE</option>";
       	
			while($row = $result->fetch_assoc()) {
				
			
          echo"<option value='$row[emp_id]'>$row[last_name], $row[first_name]</option>";
       
		  }
		   echo'</select>';
		  ?>
		  </td>
		  </tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
DATE: <input type="date" style="border:solid 1px #333333;" name="date_enter"  required>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
CHECK IN: <input type="time" name="check_in" placeholder='HH:MM' required>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
BREAK OUT: <input type="time"  name="break_out" placeholder='HH:MM' required>

</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
BREAK IN: <input type="time" name="break_in" placeholder='HH:MM' required>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
CHECK OUT: <input type="time" name="check_out" placeholder='HH:MM' required>
</td>
</tr>
<tr>
<td align='center' style='color:black;' colspan='2'>
 <input type="submit" value="Submit">
</td>
</tr>

</form>
</table>