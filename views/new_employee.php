<div class="listing" style="color:black;">
		<table class="listing" align='center' border='1'>
			<tbody><tr>
				<th colspan="3" class="title">
					New Employee
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
			<td class="value"><input type="text" name="emp_id" autocomplete="off" id="txtIdNum" onkeypress="return AllowOnlyNumbers(event);" required/> </td>
		</tr>
		<tr>
			<td class="title" style="width: 300px">First Name:</td>
			<td class="value"><input type="text" pattern="[A-Za-z ]*" title="Letters Only" name="first_name"  required> </td>
		</tr>
		<tr>
			<td class="title">Middle Name:</td> 
			<td class="value"><input type="text" pattern="[A-Za-z ]*" title="Letters Only" name="middle_name"  required> </td>
		</tr>
		<tr>
			<td class="title">Last Name:</td>
			<td class="value"><input type="text" pattern="[A-Za-z ]*" title="Letters Only" name="last_name" required> </td>
		</tr>
		<tr>
			<td class="title">Hourly Rate:<label style='font-size:10px;'>(for Crew Only)</label></td>
			<td class="value"><input type="number" name="basic_pay" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  > </td>
		</tr>
		<tr>
			<td class="title">Daily Rate:<label style='font-size:9px;'>(for Manager Only)</label></td>
			<td class="value"><input type="number" step="0.01" name="daily_pay" onkeydown="javascript: return event.keyCode == 69 ? false : true"> </td>
		</tr>
		<tr>
			<td class="title">Monthly Rate:<label style='font-size:8px;'>(for Manager Only)</label></td>
			<td class="value"><input type="number" step="0.01" name="monthly_pay" onkeydown="javascript: return event.keyCode == 69 ? false : true"> </td>
		</tr>
		<tr>
			<td class="title">Hire Class:</td>
			<td class="value"><select name='hire_class' required>
			<option value=''>Hire Class</option>
			<option value='TRAINEE'>TRAINEE</option>
			<option value='CONTRACTUAL'>CONTRACTUAL</option>
			<option value='REGULAR'>REGULAR</option>
			</select>
		</td>
		</tr>
		<tr>
			<td class="title" width='600px'>Type:</td>
			<td class="value"><select name='type' required>
			<option value=''>Type</option>
			<option value='CREW'>CREW</option>
			<option value='MANAGER'>MANAGER</option>
		
			</select>
		</td>
		</tr>
		
		
			</tbody>
			</table>
						</td>
							<td class="value login" valign="top">
								<table class="title-value" style="width: 60% !important; margin: auto">
	<tbody>
		<tr  align='center'>
			<td colspan="2" class="value" ><strong>Government ID:</strong></td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td class="title"  width='20%'>Tin No:</td>
			<td class="value" ><input style="width:20%;" type="number" class="inputs" data-maxlength="3" name="tin1" onkeydown="javascript: return event.keyCode == 69 ? false : true"   required>-<input onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:20%;" type="number" class="inputs" data-maxlength="3" name="tin2"  required>-<input onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:20%;" onkeydown="javascript: return event.keyCode == 69 ? false : true"  type="number" class="inputs" data-maxlength="3" name="tin3"  required>-<input style="width:20%;" type="number" class="inputs" data-maxlength="3" name="tin4"  required></td></tr>
		
		<tr>
			<td class="title" >SSS  No:</td> 
			<td class="value" ><input onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:15%;"  type="number" class="inputs1" data-maxlength="2" name="sss1"  required>-<input style="width:30%;" type="number" class="inputs1" data-maxlength="7" onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="sss2"  required>-<input style="width:15%;" type="number" class="inputs1" onkeydown="javascript: return event.keyCode == 69 ? false : true"  data-maxlength="1" name="sss3"  required> </td>
		</tr>
		<tr>
			<td class="title">Pagibig  No:</td>
			<td class="value"><input onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:22%;" type="number" class="inputs2" data-maxlength="4" name="pagibig1"  required>-<input style="width:22%;" onkeydown="javascript: return event.keyCode == 69 ? false : true"  type="number" class="inputs2" data-maxlength="4" name="pagibig2"  required>-<input style="width:22%;" onkeydown="javascript: return event.keyCode == 69 ? false : true"  type="number" class="inputs2" data-maxlength="4" name="pagibig3"  required></td>
		</tr>
		<tr>
			<td class="title">Philhealth  No:</td>
			<td class="value"><input onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:15%;" type="number" class="inputs1" data-maxlength="2" name="philhealth1"  required>-<input style="width:37%;" type="number" class="inputs1" data-maxlength="9" onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="philhealth2"  required>-<input style="width:15%;" type="number" class="inputs1" data-maxlength="1" onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="philhealth3"  required> </td>
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
		<td class="value"><input type="text" name="username" required></td>
	</tr>
	
	<tr>
		<td class="title">Account Type:  </td>
		<td class="value"><select name='account_type' required>
			<option value=''>Account Type</option>
			<option value='ADMIN'>ADMIN</option>
			<option value='EMPLOYEE'>EMPLOYEE</option>
		
			</select>
		</td>
		
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