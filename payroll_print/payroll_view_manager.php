<?php

require('../payroll_print/fpdf.php');  

$id=$_GET['id'];

$pdf=new fpdf();

$pdf->Addpage();

$pdf->SetFont("Arial","B","10");
		$pdf->Image('../assets/ico/asd.jpg',70,10,15,10);
	$pdf->Cell(38,3,"",0,1,"");
	$pdf->SetFont("Arial","","6");
	
include ("../views/connect.php");	
$sql = "SELECT * FROM payroll where id='$id'";
$result = $conn->query($sql);	

  while($row = $result->fetch_assoc()) {
	  $emp_id=$row['emp_id'];
	  $from_payroll=$row['from_payroll'];
	  $to_payroll=$row['to_payroll'];
	  $daily_pay=$row['daily_pay'];
	  $hourly_pay_sayo=round($daily_pay/8,2);
	  $monthly_pay=$row['monthly_pay'];
	  $no_of_hours=$row['no_of_hours'];
	  $absent=$row['absent'];
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
	   $payment_per_day=round($daily_pay/8,2);
	  $a = round(($monthly_pay/2),2);
	  $b = round(($payment_per_day*$reg_out)*1.25,2);
	  $c = round(($payment_per_day*$rd_sd_day)*.3,2);
	  $d = round(($payment_per_day*$rd_sd_ot)*.39,2);
	  $e = round(($payment_per_day*$two_pay)*1,2);
	  $f = round(($payment_per_day*$two_pay_ot)*.6,2);
	  $g = round(($payment_per_day*$nd)*.1,2);
	  $absent_deduct=round(($daily_pay*$absent),2);
		$late_charges_na=round($hourly_pay_sayo*$late_charges,2);
	  $gross_pay=$a+$b+$c+$d+$e+$f+$g-$absent_deduct-$late_charges_na;
	  $allowances=$transpo_allow+$transpo_allow+$grill_allow+$cola+$meal_allow+$oic_allow;
		$new_late_charges=round((($payment_per_day/60)*$late_charges),2);
		$total_deduc=$sss+$phic+$hdmf+$sss_loan+$hdmf_loan+$hdmf_calamity_loan+$salary_loan+$tax;
	  $net_pay = $gross_pay - $total_deduc;
	  $sql1 = "SELECT * FROM information where emp_id='$emp_id'";
$result1 = $conn->query($sql1);	
while($row1 = $result1->fetch_assoc()) {
	$first_name=$row1['first_name'];
	$last_name=$row1['last_name'];
	$whole_name="$last_name, $first_name";
}
}
	$pdf->Cell(38,3,"EMP ID:       $emp_id",0,1,"");
	$pdf->Cell(38,3,"NAME: $whole_name",0,1,"");
	$pdf->Cell(38,3,"FROM: $from_payroll        TO: $to_payroll",0,1,"");
	$pdf->Cell(38,3,"",0,1,"");
	$pdf->Cell(38,3,"EARNINGS",1,0,"L");
	$pdf->Cell(38,3,"AMOUNT",1,1,"R");
	
	$pdf->Cell(38,3,"BASIC PAY",1,0,"L");
	$pdf->Cell(38,3,"$a",1,1,"R");
	
	$pdf->Cell(38,3,"REGULAR OT PAY",1,0,"L");
	$pdf->Cell(38,3,"$b",1,1,"R");
	
	$pdf->Cell(38,3,"RD/SD PAY",1,0,"L");
	$pdf->Cell(38,3,"$c",1,1,"R");

	$pdf->Cell(38,3,"RD/SD OT PAY",1,0,"L");
	$pdf->Cell(38,3,"$d",1,1,"R");

	$pdf->Cell(38,3,"DOUBLE PAY",1,0,"L");
	$pdf->Cell(38,3,"$e",1,1,"R");
	
	$pdf->Cell(38,3,"DOUBLE PAY OT",1,0,"L");
	$pdf->Cell(38,3,"$f",1,1,"R");

	$pdf->Cell(38,3,"ND",1,0,"L");
	$pdf->Cell(38,3,"$g",1,1,"R");
	$pdf->Cell(38,3,"LATE",1,0,"L");
	$pdf->Cell(38,3,"$late_charges_na",1,1,"R");
	$pdf->Cell(38,3,"ABSENT",1,0,"L");
	$pdf->Cell(38,3,"$absent_deduct",1,1,"R");
	
	$pdf->Cell(38,3,"",0,0,"L");
	$pdf->Cell(10,3,"GROSS PAY:",0,0,"L");
	$pdf->Cell(28,3,"$gross_pay",0,0,"R");
	$pdf->Cell(38,3,"",0,1,"L");
	$pdf->Cell(38,3,"DEDUCTIONS",1,0,"L");
	$pdf->Cell(38,3,"AMOUNT",1,1,"R");
	$pdf->Cell(38,3,"SSS",1,0,"L");
	$pdf->Cell(38,3,"$sss",1,1,"R");
	$pdf->Cell(38,3,"PHIC",1,0,"L");
	$pdf->Cell(38,3,"$phic",1,1,"R");	
	$pdf->Cell(38,3,"HDMF",1,0,"L");
	$pdf->Cell(38,3,"$hdmf",1,1,"R");
	$pdf->Cell(38,3,"TAX",1,0,"L");
	$pdf->Cell(38,3,"$tax",1,1,"R");	
	$pdf->Cell(38,3,"SSS LOAN",1,0,"L");
	$pdf->Cell(38,3,"$sss_loan",1,1,"R");	
	$pdf->Cell(38,3,"HDMF LOAN",1,0,"L");
	$pdf->Cell(38,3,"$hdmf_loan",1,1,"R");
	$pdf->Cell(38,3,"HDMF CALAMITY",1,0,"L");
	$pdf->Cell(38,3,"$hdmf_calamity_loan",1,1,"R");
	$pdf->Cell(38,3,"SALARY LOAN",1,0,"L");
	$pdf->Cell(38,3,"$salary_loan",1,1,"R");
	$pdf->Cell(38,3,"",0,0,"L");
	$pdf->Cell(10,3,"TOTAL DEDUCTION:",0,0,"L");
	$pdf->Cell(28,3,"$total_deduc",0,1,"R");
	$pdf->Cell(38,3,"Allowances",1,0,"L");
	$pdf->Cell(38,3,"AMOUNT",1,1,"R");
	
	
	$pdf->Cell(38,3,"TRANSPO ALLOW",1,0,"L");
	$pdf->Cell(38,3,"$transpo_allow",1,1,"R");
	

	
	$pdf->Cell(38,3,"GRILL ALLOW",1,0,"L");
	$pdf->Cell(38,3,"$grill_allow",1,0,"R");
	$pdf->Cell(38,3,"",0,0,"L");
	$pdf->Cell(38,3,"",0,1,"R");
	$pdf->Cell(38,3,"COLA",1,0,"L");
	$pdf->Cell(38,3,"$cola",1,0,"R");
	$pdf->Cell(38,3,"",0,0,"L");
	$pdf->Cell(38,3,"",0,1,"R");
	$pdf->Cell(38,3,"MEAL ALLOW",1,0,"L");
	$pdf->Cell(38,3,"$meal_allow",1,0,"R");
	$pdf->Cell(38,3,"",0,0,"L");
	$pdf->Cell(38,3,"",0,1,"R");
	$pdf->Cell(38,3,"OIC ALLOW",1,0,"L");
	$pdf->Cell(38,3,"$oic_allow",1,0,"R");
	$pdf->Cell(38,3,"",0,1,"L");
	$pdf->Cell(38,3,"",0,0,"L");
	$pdf->Cell(10,3,"Total Allowances:",0,0,"L");
	$pdf->Cell(28,3,"$allowances",0,1,"R");
	$pdf->Cell(38,3,"",0,0,"L");
	$pdf->Cell(10,3,"",0,0,"L");
	$pdf->Cell(28,3,"NET PAY : $net_pay",1,1,"R");
		
	
$pdf->Output();
?>
