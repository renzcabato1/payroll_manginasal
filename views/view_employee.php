<div class="listing" style="color:black;">
		<table class="listing" align='center' border='1'>
			<tbody><tr>
				<th colspan="3" class="title">
					ACCOUNT INFORMATION
				</th>
			</tr>
			
			<tr>
				<td class="ta-center" valign="top">
					<table class="listing">
						<tbody><tr>
							<td class="value" colspan="2">
								<strong>Account Information:</strong>&nbsp;&nbsp;&nbsp; <span style="font-style: italic"><?php echo"$name"?></span>
							</td>
						</tr>
						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td class="value government" valign="top">
								<form href="hris_admin_employee_account_info&amp;module=info&amp;action=government&amp;user_id=692" target="td.government" data-type="html" message="Please confirm to save changes."> 	<table class="title-value" style="width: 60% !important; margin: auto">
		<tbody>
		<tr>
			<td colspan="2" class="value"><strong>BASIC INFORMATION:</strong></td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td class="title">Employee ID:</td>
			<td class="value"><input type="text" name="philhealth" value="<?php echo"$emp_id";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title" style="width: 300px">First Name:</td>
			<td class="value"><input type="text" name="tin" value="<?php echo"$first_name";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">Middle Name:</td> 
			<td class="value"><input type="text" name="sss"value="<?php echo"$middle_name";?>" maxlength="10" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">last Name:</td>
			<td class="value"><input type="text" name="pagibig" value="<?php echo"$last_name";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">Hourly Rate :</td>
			<td class="value"><input type="text" name="philhealth" value="<?php echo"$hourly_pay&nbsp; &#8369;";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">Daily Rate :</td>
			<td class="value"><input type="text" name="philhealth" value="<?php echo"$daily_pay&nbsp; &#8369;";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">Monthly Rate :</td>
			<td class="value"><input type="text" name="philhealth" value="<?php echo"$monthly_pay&nbsp; &#8369;";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">Hire Class:</td>
			<td class="value"><input type="text" name="philhealth" value="<?php echo"$hire_class";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">Type:</td>
			<td class="value"><input type="text" name="philhealth" value="<?php echo"$type";?>" maxlength="12" disabled=""> </td>
		</tr>
		
		
		<!--tr>
			<td class='title'>Bank Account  No:</td>
			<td class='value'></td>
		</tr-->
			</tbody>
			</table>
						</td>
							<td class="value login" valign="top">
								<table class="title-value" style="width: 60% !important; margin: auto">
	<tbody><tbody>
		<tr>
			<td colspan="2" class="value"><strong>Government ID:</strong></td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td class="title"  style="width: 100px">Tin No:</td>
			<td class="value"><input type="text" name="tin" value="<?php echo"$tin_number";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title" >SSS  No:</td> 
			<td class="value" ><input type="text" name="sss"value="<?php echo"$sss_number";?>" maxlength="10" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">Pagibig  No:</td>
			<td class="value"><input type="text" name="pagibig" value="<?php echo"$pagibig_number";?>" maxlength="12" disabled=""> </td>
		</tr>
		<tr>
			<td class="title">Philhealth  No:</td>
			<td class="value"><input type="text" name="philhealth" value="<?php echo"$philhealt_number";?>" maxlength="12" disabled=""> </td>
		</tr>
		
		<!--tr>
			<td class='title'>Bank Account  No:</td>
			<td class='value'></td>
		</tr-->
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
		<td class="value"><?php echo"$username1";?><span class="lable"></span></td>
	</tr>
	
	<tr>
		<td class="title">Password:  <span class="lable"></td>
		<td style="width:300px"  class="value">********<span class="lable"> <?php echo"<a href='index.php?page=reset&ID=".$id."' onclick='return confirm(\"Are you sure you want to reset this account ?\");'onclick='return confirm(\"Are you sure you want to deactivate ?\");'>reset</a>"; ?></span> </td>
	
	</tr>
	<!--tr>
		<td class='title'>Reset Account:</td>
		<td class='value'>
			<form  href='hris_admin_employee_account_info&module=info&action=reset&user_id=692' target='.login'  data-type='html' message='Please confirm to reset password.'> 					<span class='lable'>This will generate new password which will be sent to the employee's email</span><br/>
					<input class='button btn-primary' type='submit' value='Reset Password'/>
			</form>
		</td>
	</tr-->
</tbody></table>							</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
		</tbody></table>
	</div>