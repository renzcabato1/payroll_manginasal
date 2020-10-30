<div class="listing" style="color:black;">
		<table class="listing" align='center' border='1'>
			<tbody><tr>
				<th colspan="3" class="title">
					Edit Information
				</th>
			</tr>
			
			<tr>
				<td class="ta-center" valign="top">
					<table class="listing">
						<tbody>
						
						<tr>
						<form method='post' class="form-horizontal row-fluid">	
							
							<td class="value government" valign="top">
							<table class="title-value" style="width: 60% !important; margin: auto">
		<tbody>
		<tr>
			<td colspan="2" class="value"><strong>BASIC INFORMATION:</strong></td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td class="title">Employee ID:</td>
			<td class="value"><input type="text" name="emp_id" value='<?php echo"$emp_id";?>' autocomplete="off" id="txtIdNum" onkeypress="return AllowOnlyNumbers(event);"   required> </td>
		</tr>
		<tr>
			<td class="title" style="width: 300px">First Name:</td>
			<td class="value"><input type="text" name="first_name" value='<?php echo"$first_name";?>' pattern="[A-Za-z ]*" title="Letters Only"  required> </td>
		</tr>
		<tr>
			<td class="title">Middle Name:</td> 
			<td class="value"><input type="text" name="middle_name" value='<?php echo"$middle_name";?>' pattern="[A-Za-z ]*" title="Letters Only" required> </td>
		</tr>
		<tr>
			<td class="title">Last Name:</td>
			<td class="value"><input type="text" name="last_name" value='<?php echo"$last_name";?>' pattern="[A-Za-z ]*" title="Letters Only" required> </td>
		</tr>
		<tr>
			<td class="title">Hourly Rate:<label style='font-size:10px;'>(for Crew Only)</label></td>
			<td class="value"><input type="number" step="0.01" name="basic_pay" onkeydown="javascript: return event.keyCode == 69 ? false : true"   value='<?php echo"$hourly_pay";?>'  > </td>
		</tr>
		<tr>
			<td class="title">Daily Rate:<label style='font-size:9px;'>(for Manager Only)</label></td>
			<td class="value"><input type="number" step="0.01" name="daily_pay" onkeydown="javascript: return event.keyCode == 69 ? false : true" value='<?php echo"$daily_pay";?>'> </td>
		</tr>
		<tr>
			<td class="title">Monthly Rate:<label style='font-size:8px;'>(for Manager Only)</label></td>
			<td class="value"><input type="number" step="0.01" name="monthly_pay" onkeydown="javascript: return event.keyCode == 69 ? false : true" value='<?php echo"$monthly_pay";?>'> </td>
		</tr>
		<?php
		if($hire_class=='TRAINEE'){
		echo"<tr>
			<td class='title'>Hire Class:</td>
			<td class='value'><select name='hire_class' required>
			<option value='TRAINEE'>TRAINEE</option>
			<option value='CONTRACTUAL'>CONTRACTUAL</option>
			<option value='REGULAR'>REGULAR</option>
			</select>
		</td>
		</tr>";
		}
		else if($hire_class=='CONTRACTUAL')
		{
			echo"<tr>
			<td class='title'>Hire Class:</td>
			<td class='value'><select name='hire_class' required>
			<option value='CONTRACTUAL'>CONTRACTUAL</option>
			<option value='TRAINEE'>TRAINEE</option>
			<option value='REGULAR'>REGULAR</option>
			</select>
		</td>
		</tr>";
		}
		else if($hire_class=='REGULAR')
		{
			
			
			echo"<tr>
			<td class='title'>Hire Class:</td>
			<td class='value'><select name='hire_class' required>
			<option value='REGULAR'>REGULAR</option>
			<option value='CONTRACTUAL'>CONTRACTUAL</option>
			<option value='TRAINEE'>TRAINEE</option>
			
			</select>
		</td>
		</tr>";
		}
		?>
		
		<?php
		if($type=='CREW'){
		echo"<tr>
			<td class='title'>Type:</td>
			<td class='value'><select name='type' required>
			
			<option value='CREW'>CREW</option>
			<option value='MANAGER'>MANAGER</option>
			</select>
		</td>
		</tr>";
		}
		else if($type=='MANAGER')
		{
			
			
			echo"<tr>
			<td class='title'>Type:</td>
			<td class='value'><select name='type' required>
			
			
			<option value='MANAGER'>MANAGER</option>
			<option value='CREW'>CREW</option>  
			</select>
		</td>
		</tr>";
		}
		
		
		?>
		
		
			</tbody>
			</table>
						</td>
							<td class="value login" valign="top">
								<table class="title-value" style="width: 60% !important; margin: auto">
	<tbody>
		<tr>
			<td colspan="2" class="value"><strong>Government ID:</strong></td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td class="title"  style="width: 100px">Tin No:</td>
			<td class="value"><input type="text" name="tin"  value='<?php echo"$tin_number";?>' required> </td>
		</tr>
		<tr>
			<td class="title" >SSS  No:</td> 
			<td class="value" ><input type="text" name="sss"  value='<?php echo"$sss_number";?>'  required> </td>
		</tr>
		<tr>
			<td class="title">Pagibig  No:</td>
			<td class="value"><input type="text" name="pagibig"  value='<?php echo"$pagibig_number";?>'  required> </td>
		</tr>
		<tr>
			<td class="title">Philhealth  No:</td>
			<td class="value"><input type="text" name="philhealth" value='<?php echo"$philhealt_number";?>' required> </td>
		</tr>
		
		
			</tbody>
			</table>
						</td>
							<td class="value login" valign="top">
								<table class="title-value" style="width: 60% !important; margin: auto">
	<tbody>
	<tr>
		<td colspan="2" class="value"><strong>Login Information:</strong></td>
	</tr>
	<tr>
		<td colspan="2"><hr></td>
	</tr>
	<tr  style="width:1000px">
		<td class="title">Username:</td>
		<td class="value"><input type="text"  value='<?php echo"$username1";?>' name="username" required></td>
	</tr>
	
	<tr>
		<td class="title"></td>
		<td class="value">	<button type="submit" class="btn">Submit Form</button>
											
		</td>
		
	</tr>
	
</tbody>
</table>
		</td>
						</form>
						</tr>
					</tbody>
					</table>
				</td>
			</tr>
		</tbody>
		</table>
	</div>