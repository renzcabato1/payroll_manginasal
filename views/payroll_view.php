
<?php

?>
<div class="main-view">
<table style="color:black" width="600" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF">
       <form action=""  method="POST" enctype="multipart/form-data">
	 
        <tbody><tr>
          <td  height="30" align="left" bgcolor="#FFFFFF"><strong>FROM:</strong></td>
          <td align="left" bgcolor="#FFFFFF">
            
            <input name="datefrom" value='<?php echo"$datefrom";?>' type="date" style="border:solid 1px #333333; text-align:center" required></td>
			<td> &nbsp;<strong> TO:</strong>&nbsp;</td>
			<td>
            <input name="dateto" width='100px' type="date"   value='<?php echo"$dateto";?>'  style="border:solid 1px #333333; text-align:center;" required></td>
       
          <td align="left"  bgcolor="#FFFFFF"><strong>EMPLOYEE: </strong></td>
          <td align="left"  bgcolor="#FFFFFF">
		  <?php
			include ("views/connect.php");	
			$sql = "SELECT * FROM information where account_type!='ADMIN' and emp_id!='$employee_id' order by last_name asc";
			$result = $conn->query($sql);	
			echo'<select name="employee_id"  style="border:solid 1px #333333;" required>';		
			echo"<option value='$employee_id'>$last_name5, $first_name</option>";
       	
			while($row = $result->fetch_assoc()) {
				
			
          echo"<option value='$row[emp_id]'>$row[last_name], $row[first_name]</option>";
       
		  }
		   echo'</select>';
		  ?>
		  </td>
		  <td>
            <input style="width:70px;height:30px;" type="submit"  value="SEARCH"> <br >
</td>
        </tr>
</tbody>
</form></table>

<div id="listing" style="width:100%; margin:auto; border:#333333 solid 1px; margin-top:5px;  border-bottom-width:2px; border-right-width:2px; padding:5px; background-color:#FFFFFF;  ">	

<table style="color:black"  width="100%" border="1" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="40" colspan="15" align="center" bgcolor="#FFFFFF" style="font-size:16px"><strong>TIME RECORD </strong></td>
  </tr>
  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th height="1" colspan="15" align="left"><div style="border-bottom:#333333 2px solid"></div></th>
  </tr>
  
  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small> </small></th>
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small> </small></th>
    <th align="center" bgcolor="#ffffff"><small></small></th>
    <th height="1" align="center"  colspan='2' bgcolor="#ffffff">&nbsp;<small>SCHEDULE</small></th>
    <th height="1" align="center"  colspan='2' bgcolor="#ffffff">&nbsp;<small>BIO</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>LATE</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>REG</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>REG OT</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>RD/SD</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>RD/SD OT</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>2x PAY</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>2x OT PAY</small></th>
    
 </tr>
 <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>NAME </small></th>
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>DATE </small></th>
    <th align="center" bgcolor="#ffffff"><small>DAY</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>AM</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>PM</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>AM</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>PM	</small></th>
 </tr>  
  <?php
	
$start_date = strtotime($datefrom);
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
	echo"<tr>
	<td>$row5[first_name] $row5[last_name] </td>";

}
				
$renz1=date('m',$i); 
	$renz=date('d',$i); 
	$year=date('Y',$i); 
	$royal_date="$year$renz1$renz";
	//Convert the date string into a unix timestamp.
$unixTimestamp = strtotime($royal_date);
 
//Get the day of the week using PHP's date function.
$dayOfWeek = date("l", $unixTimestamp);
echo"<td  colspan='1' style='background:white;color:black;' align='center'>".$months[(int)$renz1]."-$renz</td>
<td>$dayOfWeek</td>";

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
	echo"<td  align='center'>$e - $f</td><td  align='center'>$g - $h</td>";
	}
	}
	else
	{
		echo"<td width='200px'  align='center' colspan='2'>REST DAY</td>";
	
	}
	
	if ($result7->num_rows > 0) {
	while($row7 = $result7->fetch_assoc()) {
		$check_in = date('H:i', strtotime($row7['check_in']));
		$break_out = date('H:i', strtotime($row7['break_out']));
		$break_in = date('H:i', strtotime($row7['break_in']));
		$check_out= date('H:i', strtotime($row7['check_out']));
	echo"<td  align='center'>$check_in - $break_out</td><td  align='center'>$break_in - $check_out</td>";
	
	}
	}
	else
	{
		echo"<td   align='center' colspan='2'>NO RECORD</td>";
	
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
			
echo"<td align='center'>$total_late_hours</td>";
echo"<td align='center'>$reg_hours</td>";
echo"<td align='center'>$reg_ot</td>";
echo"<td align='center'>$rd_sd</td>";
echo"<td align='center'>$rd_sd_ot</td>";
echo"<td align='center'>$holiday</td>";
echo"<td align='center'>$holiday_ot</td></tr>";
$aa= $aa+$total_late_hours;
$bb= $bb+$reg_hours;
$cc= $cc+$reg_ot;
$dd= $dd+$rd_sd;
$ee= $ee+$rd_sd_ot;
$ff= $ff+$holiday;
$gg= $gg+$holiday_ot;
}
echo"<tr><td colspan='6'></td><td align='center'>TOTAL</td>
<td align='center'>$aa</td>";
echo"<td align='center'>$bb</td>";
echo"<td align='center'>$cc</td>";
echo"<td align='center'>$dd</td>";
echo"<td align='center'>$ee</td>";
echo"<td align='center'>$ff</td>";
echo"<td align='center'>$gg</td></tr>";

	
	



							

	echo"</table>";
	?>
  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th height="1" colspan="15" align="left"><div style="border-bottom:#333333 1px solid"></div></th>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="1" colspan="15" align="center"></td>
  </tr>
  
  </tbody></table>	
	
 </div>
   <br> <br>
</div>

	