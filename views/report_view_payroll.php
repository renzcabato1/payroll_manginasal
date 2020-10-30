

<?php

$lastday = date('t',strtotime('today'));
$year_today= date('Y');
$month_today= date('m');
$to = "$year_today-$month_today-$lastday";
$from = "$year_today-$month_today-01";
$date_asd= date("Y-m-d");
?>
<div class="main-view">
<table style="color:black" width="600" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF">
       <form action=""  method="POST" enctype="multipart/form-data">
	 
        <tbody><tr>
          <td  height="30" align="left" bgcolor="#FFFFFF"><strong>DATE:</strong></td>
		   <td align="left"  bgcolor="#FFFFFF">
		  <?php
			include ("views/connect.php");	
			$sql = "SELECT DISTINCT from_payroll,to_payroll FROM payroll where from_payroll!='$date' and done=1 order by id";
			$result = $conn->query($sql);	
			echo'<select name="date"  style="border:solid 1px #333333;" required>';		
			echo"<option value='$from_payroll'>$from_payroll to $to_payroll</option>";
       	
			while($row = $result->fetch_assoc()) {
				
			
          echo"<option value='$row[from_payroll]'>$row[from_payroll] to $row[to_payroll]</option>";
       
		  }
		   echo'</select>';
		  ?>
		  </td>
		  <td align="left"  bgcolor="#FFFFFF"><strong>REPORT: </strong></td>
          <td align="left"  bgcolor="#FFFFFF">
		  <select name='report' required>
		  
		  <option value='PAYROLL'>PAYROLL</option>
		  <option value='SALARIES AND WAGES'>SALARIES AND WAGES</option>
		  </select>
		  </td>
		  <td>
            <input style="width:70px;height:30px;" type="submit"  value="SEARCH"> <br >
		  </td>
        </tr>
		
</tbody>

		<table align='center' width="70%" border='1' cellspacing='0'>
<tr>
<td  align='center' style="color:black;">
<h1 style="color:black;">PAYROLL REPORT  <a href='payroll_print/payroll_report_view.php?from=<?php echo"$from_payroll";?>&to=<?php echo"$to_payroll";?>'  target='_blank'/>PRINT</a>
		  </h1> <h3>FROM:<?php echo"$from_payroll";?> TO <?php echo"$to_payroll";?></h3> 
</td> 

</tr>
<tr>
<td border='1' colspan='2'>
<table id="customers" border='1'  >
  <tr align='center'>
    <th>NAME</th>
    <th>NET PAY</th>
  </tr>
  <?php
		include ("views/connect.php");	
		
		$sql = "SELECT * FROM payroll where from_payroll='$from_payroll'";
		$result = $conn->query($sql);	
		
		if ($result->num_rows > 0) {
			$total_net_pay=0;
		while($row = $result->fetch_assoc()) {
			$emp_id=$row['emp_id'];
			$sql1 = "SELECT * FROM information where emp_id='$emp_id'";
		$result1 = $conn->query($sql1);	
		
		while($row1 = $result1->fetch_assoc()) {
			$first_name=$row1['first_name'];
			$last_name=$row1['last_name'];
			$type=$row1['type'];
			$whole_name="$last_name, $first_name";
			
			if($type=='CREW')
		{
			$to_payroll=$row['to_payroll'];
	  $payment_per_day=$row['payment_per_day'];
	  $no_of_hours=$row['no_of_hours'];
	  $reg_out=$row['reg_ot'];
	  $rd_sd_day=$row['rd_sd'];
	  $rd_sd_ot=$row['rd_sd_ot'];
	  $two_pay=$row['2x_pay'];
	  $two_pay_ot=$row['2_pay_ot'];
	  $nd=$row['nd'];
	  $transpo_allow=$row['transpo_allow'];
	  $regular_transpo_allow=$row['regular_transpo_allow'];
	  $grill_allow=$row['grill_allow'];
	  $cola=$row['cola'];
	  $meal_allow=$row['meal_allow'];
	  $oic_allow=$row['oic_allow'];
	  $sss=$row['sss'];
	  $phic=$row['phic'];
	  $hdmf=$row['hdmf'];
	  $sss_loan=$row['sss_loan'];
	  $hdmf_loan=$row['hdmf_loan'];
	  $hdmf_calamity_loan=$row['hdmf_calamity_loan'];
	  $salary_loan=$row['salary_loan'];
	  $late_charges=$row['late_charges'];
	  $tax=$row['tax'];
	  
	  $a = round(($payment_per_day*$no_of_hours),2);
	  $b = round(($payment_per_day*$reg_out)*1.25,2);
	  $c = round(($payment_per_day*$rd_sd_day)*.3,2);
	  $d = round(($payment_per_day*$rd_sd_ot)*.39,2);
	  $e = round(($payment_per_day*$two_pay)*1,2);
	  $f = round(($payment_per_day*$two_pay_ot)*.6,2);
	  $g = round(($payment_per_day*$nd)*.1,2);
	  $gross_pay=$a+$b+$c+$d+$e+$f+$g+$transpo_allow+$regular_transpo_allow+$grill_allow+$cola+$meal_allow+$oic_allow;
	 $new_late_charges=round((($payment_per_day/60)*$late_charges),2);
		$total_deduc=$sss+$phic+$hdmf+$sss_loan+$hdmf_loan+$hdmf_calamity_loan+$salary_loan+$new_late_charges+$tax;
	  $net_pay = $gross_pay - $total_deduc;
		
		}
		else
		{
			$daily_pay=$row['daily_pay'];
	  $monthly_pay=$row['monthly_pay'];
	  $no_of_hours=$row['no_of_hours'];
	  $reg_out=$row['reg_ot'];
	  $rd_sd_day=$row['rd_sd'];
	  $rd_sd_ot=$row['rd_sd_ot'];
	  $two_pay=$row['2x_pay'];
	  $two_pay_ot=$row['2_pay_ot'];
	  $nd=$row['nd'];
	  $transpo_allow=$row['transpo_allow'];
	  $regular_transpo_allow=$row['regular_transpo_allow'];
	  $grill_allow=$row['grill_allow'];
	  $cola=$row['cola'];
	  $meal_allow=$row['meal_allow'];
	  $oic_allow=$row['oic_allow'];
	  $sss=$row['sss'];
	  $phic=$row['phic'];
	  $hdmf=$row['hdmf'];
	  $sss_loan=$row['sss_loan'];
	  $hdmf_loan=$row['hdmf_loan'];
	  $hdmf_calamity_loan=$row['hdmf_calamity_loan'];
	  $salary_loan=$row['salary_loan'];
	  $late_charges=$row['late_charges'];
	  $tax=$row['tax'];
	  $absent=$row['absent'];
	  
	  $a=round(($monthly_pay/2),2);
	  $hourly_pay=round(($daily_pay/8),2);
	  $b = round(($hourly_pay*$reg_out)*1.25,2);
	  $c = round(($hourly_pay*$rd_sd_day)*.3,2);
	  $d = round(($hourly_pay*$rd_sd_ot)*.39,2);
	  $e = round(($hourly_pay*$two_pay)*1,2);
	  $f = round(($hourly_pay*$two_pay_ot)*.6,2);
	  $g = round(($hourly_pay*$nd)*.1,2);
	  $absent_deduct=round(($daily_pay*$absent),2);
	
		$gross_pay=$a+$b+$c+$d+$e+$f+$g+$transpo_allow+$regular_transpo_allow+$grill_allow+$cola+$meal_allow+$oic_allow-$absent_deduct;
		$new_late_charges=round((($hourly_pay/60)*$late_charges),2);
		$total_deduc=$sss+$phic+$hdmf+$sss_loan+$hdmf_loan+$hdmf_calamity_loan+$salary_loan+$new_late_charges+$tax;
		$net_pay = $gross_pay - $total_deduc;
			
		
		}
		
		$total_net_pay=$total_net_pay+$net_pay;
		
		
		}
		echo"<tr >
        <td>
		$whole_name
        </td> 
		<td>
		$net_pay
		</td>
		</tr>
		";
		
			
		}
		echo"<tr >
        <td assign='center'>
		TOTAL
        </td> 
		<td>
		$total_net_pay
		</td>
		</tr>
		";
		}
		else
		{
			echo"<tr >
		<td colspan='9' align='center' >
		NO RECORD FOUND!
		</td>
		</tr>";
			
		}
		
	
		?>
  
  
</table>
</td>
 	


</table>
</tbody>

</form>


</table>
   <br> <br>
</div>

	