<?php

require('../payroll_print/fpdf.php');  

$from=$_GET['from'];
$to=$_GET['to'];

$pdf=new fpdf();

$pdf->Addpage();

$pdf->SetFont("Arial","B","14");
	

	$pdf->Cell(38,9,"MANG INASAL:(KIAORA FOOD)",0,1,"");
	$pdf->SetFont("Arial","","12");
	$pdf->Cell(38,7,"PAYROLL",0,1,"");
	$pdf->Cell(38,7,"PAYROLL FOR THE PERIOD $from - $to",0,1,"");
	$pdf->SetFont("Arial","","8");
	
include ("views/connect.php");	
// Create connection

$pdf->Cell(38,10,"",0,1,"");
$pdf->Cell(90,5,"NAME OF EMPLOYEE",1,0,"L");
$pdf->Cell(38,5,"NET PAY",1,0,"C");
$pdf->Cell(52,5,"SIGNATURE",1,1,"C");
  
	
		
		$sql = "SELECT * FROM payroll where from_payroll='$from'";
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
		
		$pdf->Cell(90,7,"$whole_name",1,0,"L");
		$pdf->Cell(38,7,"$net_pay",1,0,"C");
		$pdf->Cell(52,7,"",1,1,"C");
		
			
		}
			
		$pdf->Cell(90,7,"TOTAL",1,0,"L");
		$pdf->Cell(38,7,"$total_net_pay",1,0,"C");
		$pdf->Cell(52,7,"",1,1,"C");
		
		}
		
		
	
	

$pdf->Output();
?>
