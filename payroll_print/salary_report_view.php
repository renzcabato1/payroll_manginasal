<?php

require('../payroll_print/fpdf.php');  

$from=$_GET['from'];
$to=$_GET['to'];

$pdf=new fpdf();

$pdf->Addpage();

$pdf->SetFont("Arial","B","14");
	

	$pdf->Cell(38,9,"MANG INASAL:(KIAORA FOOD)",0,1,"");
	$pdf->SetFont("Arial","","12");
	$pdf->Cell(38,7,"SALARIES AND WAGES REPORT",0,1,"");
	$pdf->Cell(38,7," PERIOD $from - $to",0,1,"");
	$pdf->SetFont("Arial","","8");
	

$pdf->Cell(38,10,"",0,1,"");
$pdf->Cell(104,5,"ENTREY",1,0,"L");
$pdf->Cell(38,5,"AMOUNT",1,0,"C");
$pdf->Cell(38,5,"AMOUNT",1,1,"C");
  
		include ("../views/connect.php");	

		
		$sql = "SELECT * FROM payroll where from_payroll='$from'";
		$result = $conn->query($sql);	
		$sql1 = "SELECT SUM(sss),SUM(phic),SUM(hdmf),SUM(sss_loan),SUM(hdmf_loan),SUM(salary_loan),SUM(tax) FROM payroll where from_payroll='$from'";
		$result1 = $conn->query($sql1);	
		while($row1 = $result1->fetch_assoc()) {
		$total_sss=round($row1['SUM(sss)'],2);
		$total_phic=round($row1['SUM(phic)'],2);
		$total_hdmf=round($row1['SUM(hdmf)'],2);
		$sss_loan=round($row1['SUM(sss_loan)'],2);
		$hdmf_loan=round($row1['SUM(hdmf_loan)'],2);
		$salary_loan=round($row1['SUM(salary_loan)'],2);
		$tax=round($row1['SUM(tax)'],2);
		}
		
		if ($result->num_rows > 0) {
			$total_net_pay=0;
			$total_grosspay_daily=0;
			$total_grosspay_monthly=0;
			$gross_pay_daily=0;
			$total_late_charges=0;
			
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
		$gross_pay_daily=$a+$b+$c+$d+$e+$f+$g+$transpo_allow+$regular_transpo_allow+$grill_allow+$cola+$meal_allow+$oic_allow;
		$new_late_charges=round((($payment_per_day/60)*$late_charges),2);
		$total_deduc=$sss+$phic+$hdmf+$sss_loan+$hdmf_loan+$hdmf_calamity_loan+$salary_loan+$new_late_charges+$tax;
		$net_pay = $gross_pay_daily - $total_deduc;
		
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
	
		$gross_pay_monthly=$a+$b+$c+$d+$e+$f+$g+$transpo_allow+$regular_transpo_allow+$grill_allow+$cola+$meal_allow+$oic_allow-$absent_deduct;
		$new_late_charges=round((($hourly_pay/60)*$late_charges),2);
		$total_deduc=$sss+$phic+$hdmf+$sss_loan+$hdmf_loan+$hdmf_calamity_loan+$salary_loan+$new_late_charges+$tax;
		$net_pay =$gross_pay_monthly - $total_deduc;
			
		
		}
		
		$total_net_pay=$total_net_pay+$net_pay;
		$total_late_charges=$total_late_charges+$new_late_charges;
		
		
		
		}
		
			
		}
		$total_grosspay_daily=$total_grosspay_daily+$gross_pay_daily;
		
		$total_grosspay_monthly=$total_grosspay_monthly+$gross_pay_monthly;
		$total_mo=$total_grosspay_daily+$total_grosspay_monthly;
		
		$pdf->Cell(104,5,"SALARIES & WAGES-DAILIES",1,0,"L");
		$pdf->Cell(38,5,"$total_grosspay_daily",1,0,"C");
		$pdf->Cell(38,5,"",1,1,"C");
  
		
		$pdf->Cell(104,5,"SALARIES & WAGES-MONTHLIES",1,0,"L");
		$pdf->Cell(38,5,"$total_grosspay_monthly",1,0,"C");
		$pdf->Cell(38,5,"",1,1,"C");
  
		
		$pdf->Cell(104,5,"SSS PAYABLE",1,0,"L");
		$pdf->Cell(38,5,"",1,0,"C");
		$pdf->Cell(38,5,"$total_sss",1,1,"C");
  
		
		$pdf->Cell(104,5,"PHIC PAYABLE",1,0,"L");
		$pdf->Cell(38,5,"",1,0,"C");
		$pdf->Cell(38,5,"$total_phic",1,1,"C");
  
	
		$pdf->Cell(104,5,"HDMF PAYABLE",1,0,"L");
		$pdf->Cell(38,5,"",1,0,"C");
		$pdf->Cell(38,5,"$total_hdmf",1,1,"C");
  
		
		$pdf->Cell(104,5,"SALARY LOAN",1,0,"L");
		$pdf->Cell(38,5,"",1,0,"C");
		$pdf->Cell(38,5,"$salary_loan",1,1,"C");
  
		
		$pdf->Cell(104,5,"W/HOLDING TAX",1,0,"L");
		$pdf->Cell(38,5,"",1,0,"C");
		$pdf->Cell(38,5,"$tax",1,1,"C");
  
		
		$pdf->Cell(104,5,"LATE CHARGES",1,0,"L");
		$pdf->Cell(38,5,"",1,0,"C");
		$pdf->Cell(38,5,"$total_late_charges",1,1,"C");
  
		
		$pdf->Cell(104,5,"CASH",1,0,"L");
		$pdf->Cell(38,5,"",1,0,"C");
		$pdf->Cell(38,5,"$total_net_pay",1,1,"C");
  
		$total_mo1=$total_net_pay+$total_late_charges+$tax+$salary_loan+$total_hdmf+$total_phic+$total_sss;
		
		
		$pdf->Cell(104,5,"TOTAL",1,0,"L");
		$pdf->Cell(38,5,"$total_mo",1,0,"C");
		$pdf->Cell(38,5,"$total_mo1",1,1,"C");
  
		}
	
		
		
		
	
	

$pdf->Output();
?>
