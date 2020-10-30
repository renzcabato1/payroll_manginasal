

<script>

function calc(){
	
	 var x = parseFloat(document.getElementById("a").value);
	var y = parseFloat(document.getElementById("b").value);
  
	var c = (x * y).toFixed(2);
	 var xx = parseFloat(document.getElementById("a").value);
  var yy = parseFloat(document.getElementById("bb").value);
  
  var cc = ((xx * yy)*1.25).toFixed(2); 
  var xxx = parseFloat(document.getElementById("a").value);
  var yyy = parseFloat(document.getElementById("bbb").value);
  
  var ccc = ((xxx * yyy)*.3).toFixed(2);

  var xxxx = parseFloat(document.getElementById("a").value);
  var yyyy = parseFloat(document.getElementById("bbbb").value);
  
  var cccc = ((xxxx * yyyy)*.39).toFixed(2); 
  var xxxxx = parseFloat(document.getElementById("a").value);
  var yyyyy = parseFloat(document.getElementById("bbbbb").value);
  
  var ccccc = (xxxxx * yyyyy).toFixed(2);
 
  var xxxxxx = parseFloat(document.getElementById("a").value);
  var yyyyyy = parseFloat(document.getElementById("bbbbbb").value);
  var cccccc = ((xxxxxx * yyyyyy)*.6).toFixed(2);
	 
  var xxxxxxx = parseFloat(document.getElementById("a").value);
  var yyyyyyy = parseFloat(document.getElementById("bbbbbbb").value);
  var ccccccc = ((xxxxxxx * yyyyyyy)*.1).toFixed(2);
	
	 document.getElementById("ccccccc").value = ccccccc ;
	 document.getElementById("cccccc").value = cccccc ;
	  document.getElementById("ccccc").value = ccccc ;
	  document.getElementById("cccc").value = cccc ;
	  document.getElementById("ccc").value = ccc ;
	  document.getElementById("cc").value = cc ;
	  document.getElementById("c").value = c ;
	var textValue1 = parseFloat(document.getElementById('c').value);
	var textValue2 = parseFloat(document.getElementById('cc').value);
	var textValue3 = parseFloat(document.getElementById('ccc').value);
	var textValue4 = parseFloat(document.getElementById('cccc').value);
	var textValue5 = parseFloat(document.getElementById('ccccc').value);
	var textValue6 = parseFloat(document.getElementById('cccccc').value);
	var textValue7 = parseFloat(document.getElementById('ccccccc').value);
	var output = textValue1+textValue2+textValue3+textValue4+textValue5+textValue6+textValue7;
	
	$("#output").html(output.toFixed(2));
	
	
	var sss = parseFloat(document.getElementById('sss').value);
	var pag_ibig = parseFloat(document.getElementById('pag_ibig').value);
	var hdmf_loan = parseFloat(document.getElementById('hdmf_loan').value);
	var philhealth = parseFloat(document.getElementById('philhealth').value);
	var tax = parseFloat(document.getElementById('tax').value);
	var sss_loan = parseFloat(document.getElementById('sss_loan').value);
	var calamity_loan = parseFloat(document.getElementById('calamity_loan').value);
	var salary_loan = parseFloat(document.getElementById('salary_loan').value);
	
	var sum = sss+pag_ibig+hdmf_loan+philhealth+tax+sss_loan+calamity_loan+salary_loan;
	$("#sum").html(sum.toFixed(2));
	
	var cola = parseFloat(document.getElementById('cola').value);
	var tranpo_allow = parseFloat(document.getElementById('tranpo_allow').value);
	var grill_allow = parseFloat(document.getElementById('grill_allow').value);
	var meal_allow = parseFloat(document.getElementById('meal_allow').value);
	var oic_allow = parseFloat(document.getElementById('oic_allow').value);
	var sum1 = cola+tranpo_allow+grill_allow+meal_allow+oic_allow;
	var net_pay = output+sum1-sum;
	
	$("#sum1").html(sum1.toFixed(2));
	 $("#net_pay").html(net_pay.toFixed(2));
	 
	 }
</script>


						
						
						<form action="index.php?page=submit_payroll"  method="POST" enctype="multipart/form-data">
	 	<br /><table style='color:black;background-color:#d6d6c2;' border='1' align='center' width='80%' cellspacing='0'>
<tr><th colspan='6' >
					<h3>PAYROLL  FROM: <?php echo"$date_from";?> TO: <?php echo"$dateto";?> <a href="javascript: void(0)" onClick="calc()">Press Me!</a></h3></th></tr>
					<tr><td colspan='6'>ID:<?php echo"$employee_id";?></td>
			<input type="hidden" name="emp_id" value="<?php echo"$employee_id";?>" maxlength="12" readonly>
			<input type="hidden" name="from" value="<?php echo"$date_from";?>" maxlength="12" readonly>
			<input type="hidden" name="to" value="<?php echo"$dateto";?>" maxlength="12" readonly>
			</tr>
			<tr><td colspan='6'> 
			NAME:<?php echo"$first_name";?></td></tr><tr>
			<input type="hidden" name="name" value="<?php echo"$first_name";?>" maxlength="12" readonly> 
			<td colspan='6'>PER HOUR PAY : <?php echo"$hourly_pay";?></td></tr>
			<input type="hidden" id="a" name="per_hour_pay" value="<?php echo"$hourly_pay";?>" maxlength="12" readonly>
	
			<tr><td colspan='6'>LAST GROSS PAY: <?php echo"$gross_pay";?></td></tr>
			<input type="hidden" name="last_pay"  value="<?php echo"$gross_pay";?>" maxlength="12" readonly> 
			</td></tr>	<?php
	
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
				$holiday=0;
				$holiday_ot=0;
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
				$rd_sd=$rd_sd;
				$rd_sd_ot=$rd_sd_ot;
				$holiday=0;
				$holiday_ot=0;
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

$bbb=round(($bb*$hourly_pay),2) ;
$ccc=round(($cc*$hourly_pay*1.25),2) ;
$ddd=round(($dd*$hourly_pay*.3),2) ;
$eee=round(($ee*$hourly_pay*.39),2) ;
$fff=round(($ff*$hourly_pay),2) ;
$ggg=round(($gg*$hourly_pay*.6),2) ;

$whole_pay=$bbb+$ccc+$ddd+$eee+$fff+$ggg+$gross_pay;

$sql1 = "SELECT * FROM pag_ibig_cont";
			$result1 = $conn->query($sql1);	
			while($row1 = $result1->fetch_assoc()) {
				$pagibig_cont=$row1['percent']/100;
			}
		$sql2 = "SELECT * FROM phil_health";
			$result2 = $conn->query($sql2);	
			while($row2 = $result2->fetch_assoc()) {
				$phil_health=$row2['percent']/100;
			}
		$sql3 = "SELECT * FROM sss_cont WHERE start<='$whole_pay' order by start desc limit 1";
			$result3 = $conn->query($sql3);	
			while($row3 = $result3->fetch_assoc()) {
				$sss=round($row3['total_contribution'],2);
			}
		$sql4 = "SELECT * FROM tax_cont WHERE start<='$whole_pay' order by start desc limit 1";
			$result4 = $conn->query($sql4);	
			while($row4 = $result4->fetch_assoc()) {
				$tax_total_cont=round($row4['total_contribution'],2);
				$start=round($row4['start'],2);
				$percent_tax=round($row4['percent'],2);
				$wh_tax=round((($percent_tax/100)*($whole_pay-$start)),2)+$tax_total_cont;
			}
		$hdmf=round(($whole_pay*$pagibig_cont),2);
		$phic=round(($whole_pay*$phil_health),2);
?>
	<tr>
	<td>Regular Hours:</td>
	<td><input style="width:100px" id="b" onkeyup="multiply()" name="reg_hours"  type="number" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  value="<?php echo"$bb";?>"  readonly></td>
	<td> SSS:</td>
	<td><input id='sss' name='sss' style="width:100px" type="number" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"   value='<?php echo"$sss";?>'  readonly> </td>
	<td>Cola:</td>
	<td><input style="width:100px" type="number" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="cola" value='0' id='cola'   required>  </td></tr>
	<tr>
	<td>Overtime Hour/s:</td>
	<td><input  type="number" id="bb" onkeyup="multiplya()"  step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"   style="width:100px"  name="ot_hours"  value="<?php echo"$cc";?>"  readonly> </td>
	<td>Pag-ibig:</td>
	<td><input id='pag_ibig' name='hdmf' type="number" id="pagibig" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px" value='<?php echo"$hdmf";?>'   readonly></td>
	<td>Transportation Allowance:</td>
	<td><input style="width:100px"  name='transpo_allow' type="number" id='tranpo_allow' step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true" name="transpo_allow" value='0' required></td></tr>
	<tr>
	<td>RD/SD:</td>
	<td><input type="number" id="bbb" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px" name="rd_sd"   value="<?php echo"$dd";?>"   maxlength="12" readonly></td>
	<td>Philhealth:</td>
	<td><input id='philhealth' name='phic' type="number" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px"  value='<?php echo"$phic";?>'   readonly></td>
	<td>Grill Allowance:</td>
	<td><input style="width:100px" id='grill_allow' type="number" class="texta" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="grill_allow" value='0'  maxlength="12" required></td></tr>
	<tr><td>RD/SD OT:</td>
	<td><input type="number" id="bbbb" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px" name="rd_sd_ot"  value="<?php echo"$ee";?>"  maxlength="12" readonly></td>
	<td>Tax:</td>
	<td><input id='tax' name='wh_tax'  type="number" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px"  value='<?php echo"$wh_tax";?>'   readonly></td>
	<td>Meal Allowance:</td>
	<td><input style="width:100px" id='meal_allow' type="number" class="texta" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="meal_allow" value='0'  maxlength="12" required></td></td></tr>
	<tr>
	<td>Double Pay:</td>
	<td><input type="number" id="bbbbb" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px" name="two_pay"  value="<?php echo"$ff";?>"  maxlength="12" readonly></td>
	<td>SSS LOAN :</td>
	<td><input id='sss_loan' style="width:100px" type="number" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="sss_loan" value="0" maxlength="12"    required> </td>
	<td>Oic Allowance :</td>
	<td><input style="width:100px" id='oic_allow' type="number" class="texta" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px" name="oic_allow" value='0'  maxlength="12"  required> </td>
	</tr>
	<tr>
	<td>Double Pay OT:</td>
	<td><input type="number" id="bbbbbb" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px" name="two_pay_ot"  value="<?php echo"$gg";?>"   maxlength="12" readonly></td>
	<td>HDMF Loan :</td>
	<td><input id='hdmf_loan' style="width:100px" type="number" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="hdmf_loan" value="0" maxlength="12"   required></td>
	<td align='right'>TOTAL:</td>
	<td align='center'><h2><span id="sum1">0.00</span></h2></td>
	</tr>
	<tr>
	<td>Night Diff:</td>
	<td><input type="number" id="bbbbbbb" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px" name="nd" value='0'  maxlength="12" required></td>
	<td>HDMF Calamity Loan :</td>
	<td><input id='calamity_loan' type="number" step="0.01"  onkeydown="javascript: return event.keyCode == 69 ? false : true"  style="width:100px" name="hdmf_calamity" value="0" maxlength="12"   required> </td>
	<td>-</td>
	<td>-</td>
	</tr>
	<tr>
	<td><input type="hidden" id="c" value='0' name='gross' class="gross" style="width:100px"  >
	<input type="hidden" id="cc" value='0' name='gross' class="gross" style="width:100px"  >
	<input type="hidden" id="ccc" value='0' name='gross' class="gross" style="width:100px"  >
	<input type="hidden" id="cccc" value='0' name='gross' class="gross" style="width:100px"  >
	<input type="hidden" id="ccccc" value='0' name='gross' class="gross" style="width:100px"  ></td>
	<input type="hidden" id="cccccc" value='0' name='gross' class="gross" style="width:100px"  ></td>
	<input type="hidden" id="ccccccc" value='0' name='gross' class="gross" style="width:100px"  ></td>
	<td></td>
	<td>Salary Loan :  </td>
	<td><input id='salary_loan' type="text" style="width:100px" name="salary_loan" value="0" maxlength="12"   required></td>
	<td>-</td>
	<td>-</td>
	</tr>
	<tr>
	<td colspan='2' align='center'><h2>Gross Pay:  &#8369; <span id="output">0.00</span></h2></td>
	<td colspan='2' align='center'><h2>Total Deduction:  &#8369; <span id="sum">0.00</span></h2></td>
	<td colspan='2' align='center'><h2>Net Pay: &#8369; <span id="net_pay">0.00</span></h2></td>
	</tr>
	<tr><td colspan='6' align='center'>
		<input name="submit" style="width:70px;height:30px;" type="submit"  value="SUBMIT">
		</td>
		</tr>
	</table>

	</form>
			