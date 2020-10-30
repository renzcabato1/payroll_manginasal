						<form action=""  method="POST" enctype="multipart/form-data">
	 	
<div class="listing" style="color:black;">
		<table class="listing" align='center' border='1'>
			<tbody><tr>
				<th colspan="3" class="title">
					PAYROLL  FROM: <?php echo"$date_from";?> TO: <?php echo"$dateto";?>
				</th>
			</tr>
			
			<tr>
				<td class="ta-center" valign="top">
					<table class="listing">
						<tbody><tr>
							<td class="value" colspan="2">
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
		<table class="title-value" style="width: 60% !important; margin: auto">
		<tbody>
		<tr>
			<td colspan="2" class="value"><strong>BASIC INFORMATION:</strong></td>
		</tr>
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td class="title">EMPLOYEE ID:</td>
			<td class="value">
			<input type="text" name="emp_id" value="<?php echo"$employee_id";?>" maxlength="12" readonly> </td>
			<input type="hidden" name="from" value="<?php echo"$date_from";?>" maxlength="12" readonly> </td>
			<input type="hidden" name="to" value="<?php echo"$dateto";?>" maxlength="12" readonly> </td>
		</tr>
		<tr>
			<td class="title">NAME:</td>
			<td class="value"><input type="text" name="name" value="<?php echo"$first_name";?>" maxlength="12" readonly> </td>
		</tr>
		
		<tr>
			<td class="title">PER HOUR PAY :</td>
			<td class="value"><input type="text" name="per_hour_pay" value="<?php echo"$hourly_pay";?>" maxlength="12" readonly> </td>
		</tr>
		

			</tbody>
			</table>
						</td>
							<td class="value login" valign="top">
	
	<table class="title-value" style="width: 60% !important; margin: auto">
	<td>
	<tbody>
	
	


		<tr>
			<td colspan="2"><hr></td>
		</tr>
				
		<tr>
			<td class="title" >REG HOURS:</td>
			<td class="value"><input type="text" name="reg_hours" value="<?php echo"$reg_hours";?>" maxlength="12" > </td>
		</tr>
		<tr>
			<td class="title" >OT Hrs:</td> 
			<td class="value" ><input type="text" name="ot_hours"  value="<?php echo"$reg_ot";?>" maxlength="10"> </td>
		</tr>
		<tr>
			<td class="title">RD/SD:</td>
			<td class="value"><input type="text" name="rd_sd"   value="<?php echo"$rd_sd";?>"   maxlength="12"> </td>
		</tr>
		<tr>
			<td class="title">RD/SD OT:</td>
			<td class="value"><input type="text" name="rd_sd_ot"  value="<?php echo"$rd_sd_ot";?>"  maxlength="12"> </td>
		</tr>
		<tr>
			<td class="title">2x pay:</td>
			<td class="value"><input type="text" name="two_pay"  value="<?php echo"$two_pay";?>"  maxlength="12" > </td>
		</tr>
		<tr>
			<td class="title">2x pay OT:</td>
			<td class="value"><input type="text" name="two_pay_ot"  value="<?php echo"$two_pay_ot";?>"   maxlength="12"> </td>
		</tr><tr>
			<td class="title">ND:</td>
			<td class="value"><input type="text" name="nd" value="<?php echo"$nd";?>"  maxlength="12" > </td>
		</tr><tr>
			<td class="title">REGULAR TRANSPO ALLOW:</td>
			<td class="value"><input type="text" name="regular_transpo_allow" value="<?php echo"$regular_transpo_allow";?>"  maxlength="12" > </td>
		</tr><tr>
			<td class="title">COLA:</td>
			<td class="value"><input type="text" name="cola" value="<?php echo"$cola";?>"  maxlength="12" > </td>
		</tr>
		<tr>
			<td class="title">TRANSPO ALLOW:</td>
			<td class="value"><input type="text" name="transpo_allow" value="<?php echo"$transpo_allow";?>"  maxlength="12"> </td>
		</tr><tr>
			<td class="title">GRILL ALLOW:</td>
			<td class="value"><input type="text" name="grill_allow" value="<?php echo"$grill_allow";?>" maxlength="12" > </td>
		</tr><tr>
			<td class="title">MEAL ALLOW:</td>
			<td class="value"><input type="text" name="meal_allow" value="<?php echo"$meal_allow";?>"  maxlength="12"> </td>
		</tr><tr>
			<td class="title">OIC ALLOW:</td>
			<td class="value"><input type="text" name="oic_allow" value="<?php echo"$oic_allow";?>"  maxlength="12" > </td>
		</tr>
		
		<!--tr>
			<td class='title'>Bank Account  No:</td>
			<td class='value'></td>
		</tr-->
			</tbody>
			</td></table>
			
							<td class="value login" valign="top">
								<table class="title-value" style="width: 60% !important; margin: auto">
	<tbody>
	<tr>
		<td colspan="2" class="value"><strong>DEDUCTION:</strong></td>
	</tr>
	<tr>
		<td colspan="2"><hr></td>
	</tr>
	<tr  style="width:1000px">
		<td class="title">SSS :</td>
			<td class="value"><input type="text" name="sss" value="<?php echo"$sss";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">PHIC :</td>
			<td class="value"><input type="text" name="phic" value="<?php echo"$phic";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">HDMF :</td>
			<td class="value"><input type="text" name="hdmf" value="<?php echo"$hdmf";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">SSS LOAN :</td>
			<td class="value"><input type="text" name="sss_loan" value="<?php echo"$sss_loan";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">HDMF LOAN :</td>
			<td class="value"><input type="text" name="hdmf_loan" value="<?php echo"$hdmf_loan";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">HDMF CALAMITY LOAN :</td>
			<td class="value"><input type="text" name="hdmf_calamity" value="<?php echo"$hdmf_calamity";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">SALARY LOAN :</td>
			<td class="value"><input type="text" name="salary_loan" value="<?php echo"$salary_loan";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">LATE CHARGES :</td>
			<td class="value"><input type="text" name="late_charges" value="<?php echo"$late_charges";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">W/H TAX :</td>
			<td class="value"><input type="text" name="wh_tax" value="<?php echo"$wh_tax";?>" maxlength="12" > </td>
		</tr><tr colspan='2' >
		<td><input name="submit" style="width:70px;height:30px;" type="submit"  value="SUBMIT"></td></tr>
	
	
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
	</form>
			