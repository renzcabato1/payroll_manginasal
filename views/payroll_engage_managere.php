						<form action="index.php?page=submit_payroll"  method="POST" enctype="multipart/form-data">
	 	
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
				<?php
	
$start_date = strtotime($date_from);
$end_date = strtotime($dateto);
	

$aa=0;
$bb=0;
$cc=0;
$dd=0;
$ee=0;
$ff=0;
$gg=0;
	for ($i=$start_date;$i<=$end_date;$i+=86400)
{
				$renz1=date('m',$i); 
				$renz=date('d',$i); 
				$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
$sql5 = "SELECT * FROM information where emp_id='$employee_id' ORDER BY first_name ASC";
$result5 = $conn->query($sql5);
    while($row5 = $result5->fetch_assoc()) {
		$emp_id=$row5['emp_id'];
	

}
				
$renz1=date('m',$i); 
	$renz=date('d',$i); 
	$year=date('Y',$i); 
	$royal_date="$year$renz1$renz";
	//Convert the date string into a unix timestamp.
$unixTimestamp = strtotime($royal_date);
 
//Get the day of the week using PHP's date function.
$dayOfWeek = date("l", $unixTimestamp);


	$sql6 = "SELECT * FROM schedule where id_information='$emp_id' and date='$royal_date'";
	$result6 = $conn->query($sql6);
	$sql7 = "SELECT * FROM bio where emp_id='$emp_id' and date_bio='$royal_date'";
	$result7 = $conn->query($sql7);
	$sql8 = "SELECT * FROM holiday where date='$royal_date'";
	$result8 = $conn->query($sql8);
	if ($result6->num_rows > 0) {
	while($row6 = $result6->fetch_assoc()) {
		$e = date('H:i', strtotime($row6['start_am']));
		$f = date('H:i', strtotime($row6['end_am']));
		$g = date('H:i', strtotime($row6['start_pm']));
		$h = date('H:i', strtotime($row6['end_pm']));
	}
	}
	else
	{
	
	}
	
	if ($result7->num_rows > 0) {
	while($row7 = $result7->fetch_assoc()) {
		$check_in = date('H:i', strtotime($row7['check_in']));
		$break_out = date('H:i', strtotime($row7['break_out']));
		$break_in = date('H:i', strtotime($row7['break_in']));
		$check_out= date('H:i', strtotime($row7['check_out']));
	
	}
	}
	else
	{
		
	}
	if (($result6->num_rows > 0)&&($result7->num_rows > 0)) {
	$total_late_hours = round(((strtotime($check_in) - strtotime($e)) / 3600),2);
			if($total_late_hours<=0){
				$total_late_hours=0;
				$reg_hoursa = round(((strtotime($break_out) - strtotime($e)) / 3600),2);
			
			}
			else
			{
				$reg_hoursa = round(((strtotime($break_out) - strtotime($check_in)) / 3600),2);
				$total_late_hours = round($total_late_hours,2);
			}
			$reg_hoursb = round(((strtotime($check_out) - strtotime($break_in)) / 3600),2);
			
			$reg_hours=$reg_hoursa+$reg_hoursb;
			if($reg_hours>=8)
			{
				$reg_ot=round(($reg_hours-8),2);
				$renz=intval($reg_ot);
				if(round($reg_ot)!=$renz)
				{
					$reg_ot= $renz + .5;
				}
				else 
				{
					$reg_ot=$renz;
				}
				$reg_hours=8;
			}
			else if($reg_hours<=8)
			{
				$reg_ot=0;
				$reg_hours=$reg_hours;
			}
			if ($result8->num_rows > 0) {
					while($row8 = $result8->fetch_assoc()) {
						$type=$row8['type_of_holiday'];
					}
					if($type=="REGULAR HOLIDAY"){
					$rd_sd=0;
					$rd_sd_ot=0;
					$holiday=$reg_hours;
					$holiday_ot=$reg_ot;
					}
					else{
					$rd_sd=$reg_hours;
					$rd_sd_ot=$reg_ot;
					$holiday=0;
					$holiday_ot=0;
					}
			}
			else
			{
				$rd_sd=0;
				$rd_sd_ot=0;
			}
				
	}
	else if(($result6->num_rows == 0)&&($result7->num_rows == 0))
	{
		$total_late_hours=0;
			$reg_hours = 0;
			$reg_ot=0;
			$rd_sd=0;
			$rd_sd_ot=0;
			$holiday=0;
			$holiday_ot=0;
	}
	else if(($result6->num_rows > 0)&&($result7->num_rows == 0))
	{
			$total_late_hours=0;
			$reg_late_hours = 0;
			$reg_hours = 0;
			$reg_ot=0;
			$rd_sd=0;
			$rd_sd_ot=0;
			$holiday=0;
			$holiday_ot=0;
	}
	else if(($result6->num_rows == 0)&&($result7->num_rows > 0))
	{
		$total_late_hours=0;
			$reg_hours=0;
			$reg_ot=0;
			$rd_sd1 = round(((strtotime($break_out) - strtotime($check_in)) / 3600),2);
			$rd_sd2 = round(((strtotime($check_out) - strtotime($break_in)) / 3600),2);
			$rd_sd=$rd_sd1+$rd_sd2;
			if($rd_sd>8)
			{
				$rd_sd_ot=round(($rd_sd-8),2);
				$renz1=intval($rd_sd_ot);
				if(round($rd_sd_ot)!=$renz1)
				{
					$rd_sd_ot= $renz1 + .5;
				}
				else 
				{
					$rd_sd_ot=$renz1;
				}
				$rd_sd=8;
			}
			else if($reg_hours<=8)
			{
				$rd_sd_ot=0;
				$rd_sd=$rd_sd;
			}
			if ($result8->num_rows > 0) {
					while($row8 = $result8->fetch_assoc()) {
						$type=$row8['type_of_holiday'];
					}
					if($type=="REGULAR HOLIDAY"){
					$rd_sd=$rd_sd;
					$rd_sd_ot=$rd_sd_ot;
					$holiday=$rd_sd;
					$holiday_ot=$rd_sd_ot;
					}
					else{
					$rd_sd=$rd_sd*2;
					$rd_sd_ot=$rd_sd_ot*2;
					$holiday=0;
					$holiday_ot=0;
					}
			}
			else
			{
				$rd_sd=0;
				$rd_sd_ot=0;
			}
			
	}
			

$aa= round($aa+$total_late_hours*60);
$bb= $bb+$reg_hours;
$cc= $cc+$reg_ot;
$dd= $dd+$rd_sd;
$ee= $ee+$rd_sd_ot;
$ff= $ff+$holiday;
$gg= $gg+$holiday_ot;
}

	?>
		<tr>
			<td class="title" >REG HOURS:</td>
			<td class="value"><input type="text" name="reg_hours" value="<?php echo"$bb";?>" maxlength="12" > </td>
		</tr>
		<tr>
			<td class="title" >OT Hrs:</td> 
			<td class="value" ><input type="text" name="ot_hours"  value="<?php echo"$cc";?>" maxlength="10"> </td>
		</tr>
		<tr>
			<td class="title">RD/SD:</td>
			<td class="value"><input type="text" name="rd_sd"   value="<?php echo"$dd";?>"   maxlength="12"> </td>
		</tr>
		<tr>
			<td class="title">RD/SD OT:</td>
			<td class="value"><input type="text" name="rd_sd_ot"  value="<?php echo"$ee";?>"  maxlength="12"> </td>
		</tr>
		<tr>
			<td class="title">2x pay:</td>
			<td class="value"><input type="text" name="two_pay"  value="<?php echo"$ff";?>"  maxlength="12" > </td>
		</tr>
		<tr>
			<td class="title">2x pay OT:</td>
			<td class="value"><input type="text" name="two_pay_ot"  value="<?php echo"$gg";?>"   maxlength="12"> </td>
		</tr><tr>
			<td class="title">ND:</td>
			<td class="value"><input type="text" name="nd" value='0'  maxlength="12" > </td>
		</tr><tr>
			<td class="title">REGULAR TRANSPO ALLOW:</td>
			<td class="value"><input type="text" name="regular_transpo_allow" value='0'  maxlength="12" > </td>
		</tr><tr>
			<td class="title">COLA:</td>
			<td class="value"><input type="text" name="cola" value='0'  maxlength="12" > </td>
		</tr>
		<tr>
			<td class="title">TRANSPO ALLOW:</td>
			<td class="value"><input type="text" name="transpo_allow" value='0'  maxlength="12"> </td>
		</tr><tr>
			<td class="title">GRILL ALLOW:</td>
			<td class="value"><input type="text" name="grill_allow" value='0'  maxlength="12" > </td>
		</tr><tr>
			<td class="title">COLA:</td>
			<td class="value"><input type="text" name="meal_allow" value='0'  maxlength="12"> </td>
		</tr><tr>
			<td class="title">OIC ALLOW:</td>
			<td class="value"><input type="text" name="oic_allow" value='0'  maxlength="12" > </td>
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
			<td class="value"><input type="text" name="sss" value="0" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">PHIC :</td>
			<td class="value"><input type="text" name="phic" value="0" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">HDMF :</td>
			<td class="value"><input type="text" name="hdmf" value="0" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">SSS LOAN :</td>
			<td class="value"><input type="text" name="sss_loan" value="0" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">HDMF LOAN :</td>
			<td class="value"><input type="text" name="hdmf_loan" value="0" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">HDMF CALAMITY LOAN :</td>
			<td class="value"><input type="text" name="hdmf_calamity" value="0" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">SALARY LOAN :</td>
			<td class="value"><input type="text" name="salary_loan" value="0" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">LATE CHARGES :</td>
			<td class="value"><input type="text" name="late_charges"  value="<?php echo"$aa";?>" maxlength="12" > </td>
		</tr><tr  style="width:1000px">
		<td class="title">W/H TAX :</td>
			<td class="value"><input type="text" name="wh_tax" value="0" maxlength="12" > </td>
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
			