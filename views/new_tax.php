<table align='center' width='50%' border='1' cellspacing='0'>
<form action=""  method="POST" enctype="multipart/form-data">
	
<tr >
<td align='center' style='color:black;' colspan='4'>
<h1>NEW TAX DATA
</h1>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
START: <input type="number" name="start"  step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true" required>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
END: <input type="number" name="end"  step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  required>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
AMOUNT: <input type="number" name="amount"  step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  required>
</td>
</tr>
<tr>
<td  align='center' style='color:black;' colspan='2'>
PERCENTAGE: <input type="number" style='width:50px'  step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="percentage" required> %
</td>
</tr>

<tr>
<td align='center' style='color:black;' colspan='2'>
 <input type="submit" value="Submit">
</td>
</tr>

</form>
</table>