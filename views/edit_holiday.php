<table align='center' width='50%' border='1' cellspacing='0'>
<form action=""  method="POST" enctype="multipart/form-data">
	
<tr >
<td align='center' style='color:black;' colspan='4'>
<h1>EDIT HOLIDAY
</h1>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
DATE: <input type="date" value='<?php echo"$date";?>' name="date_holiday" required>
</td>
</tr>
<tr>
<?php
if($type=="SPECIAL HOLIDAY")
{
echo"<td  align='center' style='color:black;' colspan='2'>
Type of Holiday: <select name='type' required>

<option value='SPECIAL HOLIDAY'>SPECIAL HOLIDAY (+30% pay)</option>
<option value='REGULAR HOLIDAY'>REGULAR HOLIDAY (2x pay)</option>
<select>
</td>";
}
else
{
	echo"<td  align='center' style='color:black;' colspan='2'>
Type of Holiday: <select name='type' required>
<option value='REGULAR HOLIDAY'>REGULAR HOLIDAY (2x pay)</option>
<option value='SPECIAL HOLIDAY'>SPECIAL HOLIDAY (+30% pay)</option>

<select>
</td>";
}
?>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
Remarks: <input type="text" name="remarks" value='<?php echo"$remarks";?>' required>
</td>
</tr>


<tr>
<td align='center' style='color:black;' colspan='2'>
 <input type="submit" value="Submit">
</td>
</tr>

</form>
</table>