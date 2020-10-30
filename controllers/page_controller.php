<?php
if (isset($_GET['page'])) {
	if($_GET['page'] == "account")
	{
	}
	else if($_GET['page'] == "employee")
	{	

		if( $_SERVER['REQUEST_METHOD']=='POST' )
		employee_list_na();
		else
		include ("views/employee_list.php");
	
	}
	else if($_GET['page'] == "home")
	{	
		include ("views/home.php");
	
	}
	else if($_GET['page'] == "deactivate")
	{	
		deactivate();
	
	}
	else if($_GET['page'] == "delete_tax")
	{
		delete_tax();
	
	}
	else if($_GET['page'] == "done_payroll")
	{	
		done_payroll();
	
	}
	else if($_GET['page'] == "delete_sss")
	{	
		delete_sss();
	
	}
	else if($_GET['page'] == "delete_payroll")
	{	
		delete_payroll();
	
	}
	else if($_GET['page'] == "activate")
	{	
		activate();
	
	}
	else if($_GET['page'] == "reset")
	{	
		reset_account();
	
	}
	else if($_GET['page'] == "phil_pagibig")
	{	
		include ("views/phil_pagibig.php");
	
	}
	else if($_GET['page'] == "tax_table")
	{	
		include ("views/tax_table_list.php");
	
	}
	else if($_GET['page'] == "sss_table")
	{	
		include ("views/sss_table_list.php");
	
	}
	else if($_GET['page'] == "new_employee")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		new_employee();
		else	
		include ("views/new_employee.php");
	
	}
	else if($_GET['page'] == "view")
	{	
	view_employee();
		
	}
	else if($_GET['page'] == "new_tax")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		new_tax();
		else	
		include ("views/new_tax.php");
	
	}
	else if($_GET['page'] == "new_holiday")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		new_holiday();
		else	
		include ("views/new_holiday.php");
	
	}
	else if($_GET['page'] == "new_sss")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		new_sss();
		else	
		include ("views/new_sss.php");
	
	}
	else if($_GET['page'] == "edit")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_employee();
		else	
		edit_employee();
	
	}
	else if($_GET['page'] == "edit_tax")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_tax();
		else	
		edit_tax();
	
	}
	else if($_GET['page'] == "edit_phil_health")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_phil_health();
		else	
		edit_phil_health();
	
	}
	else if($_GET['page'] == "edit_pagibig")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_pagibig();
		else	
		edit_pagibig();
	
	}
	else if($_GET['page'] == "edit_sss")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_sss();
		else	
		edit_sss();
	}
	else if($_GET['page'] == "edit_payroll")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_payroll();
		else	
		edit_payroll();
	}
	else if($_GET['page'] == "edit_payroll_manager")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_payroll_manager();
		else	
		edit_payroll_manager();
	}
	else if($_GET['page'] == "edit_holiday")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_holiday();
		else	
		edit_holiday();
	}
	else if($_GET['page'] == "edit_manual_encode")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_edit_manual_encode();
		else	
		edit_manual_encode();
	}
	else if($_GET['page'] == "delete_entry")
	{	
		
		delete_entry();
	
	}
	else if($_GET['page'] == "delete_holiday")
	{	
		
		delete_holiday();
	
	}
	else if($_GET['page'] == "dtr")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		dtr_view();
		else	
		include ("views/dtr.php");
	
	}
	else if($_GET['page'] == "dtr_2")
	{
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		dtr_view_2();
		else	
		include ("views/dtr_2.php");
	
	}
	else if($_GET['page'] == "manual_entry")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		manual_entry();
		else	
		include ("views/manual_entry.php");
	
	}
	else if($_GET['page'] == "new_schedule")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		new_schedule();
		else	
		include ("views/new_schedule.php");
	
	}
	else if($_GET['page'] == "change_password")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		save_password();
		else	
		include ("views/password.php");
	
	}
	else if($_GET['page'] == "payroll")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		payroll();
		else	
		include ("views/payroll.php");
	
	}
	else if($_GET['page'] == "schedule")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		schedule();
		else	
		include ("views/schedule.php");
	
	}
	else if($_GET['page'] == "submit_payroll")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
			submit_payroll();
		else	
		submit_payroll();
	}
	else if($_GET['page'] == "submit_payroll_manager")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
			submit_payroll_manager();
		else	
		submit_payroll_manager();
	}
	else if($_GET['page'] == "submit_na")
	{	
			
		submit_na();
	}
	else if($_GET['page'] == "employee_secret")
	{	
view_employee_secret();
	
	}
	else if($_GET['page'] == "schedule_secret")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		schedule_secret();
		else	
		include ("views/schedule_secret.php");
	
	}
	else if($_GET['page'] == "manual_encode")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		manual_encode();
		else	
		include ("views/manual_encode.php");
	
	}
	else if($_GET['page'] == "time_record")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		time_record();
		else	
		include ("views/time_record.php");
	}
	else if($_GET['page'] == "holiday")
	{
		include ("views/holiday.php");
	}
	else if($_GET['page'] == "payslip")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		view_payslip();
		else	
		include ("views/payslip.php");
	
	}
	else if($_GET['page'] == "payslip_employee")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		view_payslip_employee();
		else	
		include ("views/payslip_employee.php");
	
	}
	else if($_GET['page'] == "report")
	{	
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		report();
		else	
		include ("views/report.php");
	
	}
	else if($_GET['page'] == "upload")
	{	
		
		include ("views/upload_bio.php");
	
	}
	}
else
{
	include ("views/home.php");
}

function new_employee(){
	$emp_id=$_POST['emp_id'];
	$first_name=$_POST['first_name'];
	$middle_name=$_POST['middle_name'];
	$last_name=$_POST['last_name'];
	$basic_pay=$_POST['basic_pay'];
	$daily_pay=$_POST['daily_pay'];
	$monthly_pay=$_POST['monthly_pay'];
	$hire_class=$_POST['hire_class'];
	$type=$_POST['type'];
	$tin1=$_POST['tin1'];
	$tin2=$_POST['tin2'];
	$tin3=$_POST['tin3'];
	$tin4=$_POST['tin4'];
	$tin=$tin1."-".$tin2."-".$tin3."-".$tin4;
	$sss1=$_POST['sss1'];
	$sss2=$_POST['sss2'];
	$sss3=$_POST['sss3'];
	$sss=$sss1."-".$sss2."-".$sss3;
	$pagibig1=$_POST['pagibig1'];
	$pagibig2=$_POST['pagibig2'];
	$pagibig3=$_POST['pagibig3'];
	$pagibig=$pagibig1."-".$pagibig2."-".$pagibig3;
	$philhealth1=$_POST['philhealth1'];
	$philhealth2=$_POST['philhealth2'];
	$philhealth3=$_POST['philhealth3'];
	$philhealth=$philhealth1."-".$philhealth2."-".$philhealth3;
	$username=$_POST['username'];
	$account_type=$_POST['account_type'];
	$date_today=date('Y-m-d');

		
	
include ("views/connect.php");	
$sql = "INSERT INTO information (emp_id,first_name,middle_name,last_name,hire_class,tin_number,sss_number,pagibig_number,philhealt_number,hourly_pay,date_encoded,username,type,account_type,password,daily_pay,monthly_pay)
VALUES (\"$emp_id\",\"$first_name\",\"$middle_name\",\"$last_name\",\"$hire_class\",\"$tin\",\"$sss\",\"$pagibig\",\"$philhealth\",\"$basic_pay\",\"$date_today\",\"$username\",\"$type\",\"$account_type\",'123456',\"$daily_pay\",\"$monthly_pay\")";
if ($conn->query($sql) === TRUE) {
 

   header("Location: index.php?page=employee");

}
else{
echo ' <script type="text/javascript">
             alert("DUPLICATE OF EMPLOYEE ID")
			</script>';
			header("refresh: .1;");}
	
}
function new_tax(){
	$start=$_POST['start'];
	$end=$_POST['end'];
	$amount=$_POST['amount'];
	$percentage=$_POST['percentage'];
	
	
		
	
include ("views/connect.php");	
$sql = "INSERT INTO tax_cont (start,end,total_contribution,percent)
VALUES (\"$start\",\"$end\",\"$amount\",\"$percentage\")";
if ($conn->query($sql) === TRUE) {
  
   header("Location: index.php?page=tax_table");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}
	
}
function edit_employee(){
$id=$_GET['ID'];
include ("views/connect.php");	

$sql = "SELECT * FROM information where id='$id'";
$result = $conn->query($sql);	

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
	$id= $row['id'];
	$emp_id= $row['emp_id'];
	$first_name= $row['first_name'];
	$middle_name=  $row['middle_name'];
	$last_name=  $row['last_name'];
	$hire_class=  $row['hire_class'];
	$date_hired=  $row['date_hired'];
	$tin_number=  $row['tin_number'];
	$sss_number=  $row['sss_number'];
	$pagibig_number=  $row['pagibig_number'];
	$philhealt_number=  $row['philhealt_number'];
	$hourly_pay=  $row['hourly_pay'];
	$daily_pay=  $row['daily_pay'];
	$monthly_pay=  $row['monthly_pay'];
	$name="$first_name $last_name";
	$username1= $row['username'];
	$type= $row['type'];
	
	}
include "views/edit_data.php";
}
}
function view_employee(){
$id=$_GET['ID'];
include ("views/connect.php");	

$sql = "SELECT * FROM information where id='$id'";
$result = $conn->query($sql);	

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
	 $id= $row['id'];
	 $emp_id= $row['emp_id'];
	 $first_name= $row['first_name'];
	$middle_name=  $row['middle_name'];
	$last_name=  $row['last_name'];
	$hire_class=  $row['hire_class'];
	$date_hired=  $row['date_hired'];
	$tin_number=  $row['tin_number'];
	$sss_number=  $row['sss_number'];
	$pagibig_number=  $row['pagibig_number'];
	$philhealt_number=  $row['philhealt_number'];
	$hourly_pay=  $row['hourly_pay'];
	$daily_pay=  $row['daily_pay'];
	$monthly_pay=  $row['monthly_pay'];
	$name="$first_name $last_name";
	$username1= $row['username'];
	$type= $row['type'];
	}
	


include "views/view_employee.php";
}
}
function save_edit_employee(){
	
	$id=$_GET['ID'];
	$emp_id=$_POST['emp_id'];
	$first_name=$_POST['first_name'];
	$middle_name=$_POST['middle_name'];
	$last_name=$_POST['last_name'];
	$basic_pay=$_POST['basic_pay'];
	$daily_pay=$_POST['daily_pay'];
	$monthly_pay=$_POST['monthly_pay'];
	$hire_class=$_POST['hire_class'];
	$type=$_POST['type'];
	$tin=$_POST['tin'];
	$sss=$_POST['sss'];
	$pagibig=$_POST['pagibig'];
	$philhealth=$_POST['philhealth'];
	$username=$_POST['username'];
	
	include ("views/connect.php");	
$sql = "UPDATE  information set emp_id=\"$emp_id\",first_name=\"$first_name\",middle_name=\"$middle_name\",last_name=\"$last_name\",hire_class=\"$hire_class\",tin_number=\"$tin\",sss_number=\"$sss\",pagibig_number=\"$pagibig\",philhealt_number=\"$philhealth\",hourly_pay=\"$basic_pay\",daily_pay=\"$daily_pay\",monthly_pay=\"$monthly_pay\",username=\"$username\",type=\"$type\"
where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=employee");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
}
function new_sss(){
	$start=$_POST['start'];
	$end=$_POST['end'];
	$amount=$_POST['amount'];
	
	
	
		
	include ("views/connect.php");	
$sql = "INSERT INTO sss_cont (start,end,total_contribution)
VALUES (\"$start\",\"$end\",\"$amount\")";
if ($conn->query($sql) === TRUE) {
  
   header("Location: index.php?page=sss_table");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}
	
}
function dtr_view(){
	
	$employee_id=$_POST['employee_id'];
	$datefrom=$_POST['datefrom'];
	$dateto=$_POST['dateto'];
include ("views/connect.php");	
			$sql = "SELECT * FROM information where emp_id ='$employee_id'";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
		$last_name5=$row['last_name'];
		$first_name=$row['first_name'];
		}
				
	include ("views/dtr_1.php");
			
	
	
}
function manual_entry(){

	$employee_id=$_POST['employee_id'];
	
	$datefrom=$_POST['datefrom'];
	$dateto=$_POST['dateto'];
	

			include ("views/connect.php");	
$sql1 = "SELECT * FROM information where emp_id=".$employee_id;
$result1 = $conn->query($sql1);

 while($row1 = $result1->fetch_assoc()) {
        $first_name1 = $row1["first_name"];
        $last_name1 = $row1["last_name"];
       
       
	}			
				
	include ("views/manual_entry_1.php");

}
function payroll(){
	$date_from = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$employee_id = $_POST['employee_id'];
	$new_date = strtotime($dateto);
		$day = date("d", $new_date);
		
include ("views/connect.php");	
$sql = "SELECT * FROM information where emp_id='$employee_id'";
$result = $conn->query($sql);	

  while($row = $result->fetch_assoc()) {
	  $first_name=$row['first_name'];
	  $last_name=$row['last_name'];
	  $first_name="$first_name $last_name";
	  $daily_pay1=number_format($row['daily_pay'],2);
	  $monthly_pay1=number_format($row['monthly_pay'],2);
	  $hourly_pay=$row['hourly_pay'];
	  $daily_pay=$row['daily_pay'];
	  $monthly_pay=$row['monthly_pay'];
	  $basic_pay_na=round(($monthly_pay/2),2);
	  $type=$row['type'];
	  
  }
$sql1 = "SELECT * FROM payroll where emp_id='$employee_id' order by from_payroll desc limit 1";
$result1 = $conn->query($sql1);	
$gross_pay=0;
$gross_pay_manager=0;

  while($row1 = $result1->fetch_assoc()) {
	  $from_payroll=$row1['from_payroll'];
	  $to_payroll=$row1['to_payroll'];
	  $payment_per_day=$row1['payment_per_day'];
	  $no_of_hours=$row1['no_of_hours'];
	  $reg_out=$row1['reg_ot'];
	  $rd_sd_day=$row1['rd_sd'];
	  $rd_sd_ot=$row1['rd_sd_ot'];
	  $two_pay=$row1['2x_pay'];
	  $two_pay_ot=$row1['2_pay_ot'];
	  $nd=$row1['nd'];
	  $transpo_allow=$row1['transpo_allow'];
	  $regular_transpo_allow=$row1['regular_transpo_allow'];
	  $grill_allow=$row1['grill_allow'];
	  $cola=$row1['cola'];
	  $meal_allow=$row1['meal_allow'];
	  $oic_allow=$row1['oic_allow'];
	  $sss=$row1['sss'];
	  $phic=$row1['phic'];
	  $hdmf=$row1['hdmf'];
	  $sss_loan=$row1['sss_loan'];
	  $hdmf_loan=$row1['hdmf_loan'];
	  $hdmf_calamity_loan=$row1['hdmf_calamity_loan'];
	  $salary_loan=$row1['salary_loan'];
	  $late_charges=$row1['late_charges'];
	  $tax=$row1['tax'];
	  $absent=$row1['absent'];
	  
	  $a = round(($payment_per_day*$no_of_hours),2);
	  $b = round(($payment_per_day*$reg_out)*1.25,2);
	  $c = round(($payment_per_day*$rd_sd_day)*.3,2);
	  $d = round(($payment_per_day*$rd_sd_ot)*.39,2);
	  $e = round(($payment_per_day*$two_pay)*1,2);
	  $f = round(($payment_per_day*$two_pay_ot)*.6,2);
	  $g = round(($payment_per_day*$nd)*.1,2);
	  $absent_deduct=round(($daily_pay*$absent),2);
		$hourly_pay_sayo=round($daily_pay/8,2);
		$late_charges_na=round($hourly_pay_sayo*$late_charges,2);
	  $gross_pay=$a+$b+$c+$d+$e+$f+$g;
	  $gross_pay_manager=$b+$c+$d+$e+$f+$g+$basic_pay_na-$absent_deduct-$late_charges_na;
	 
	
 }
  if($day==23){
	if($type=='CREW')
	{
		include ("views/payroll_engage_kaltas.php");
	}
	else
	{
		include ("views/payroll_engage_manager_kaltas.php");
	}
  }
  else{
	  if($type=='CREW')
	{
		include ("views/payroll_engage.php");
	}
	else
	{
		include ("views/payroll_engage_manager.php");
	}
  }

}
function submit_payroll(){
	
	include ("views/connect.php");	
	$emp_id=$_POST['emp_id'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$new_date = strtotime($to);
	$day = date("d", $new_date);
	if($day==23){
	$per_hour_pay=$_POST['per_hour_pay'];
	$reg_hours=$_POST['reg_hours'];
	$ot_hours=$_POST['ot_hours'];
	$rd_sd=$_POST['rd_sd'];
	$rd_sd_ot=$_POST['rd_sd_ot'];
	$two_pay=$_POST['two_pay'];
	$two_pay_ot=$_POST['two_pay_ot'];
	$nd=$_POST['nd'];
	$regular_transpo_allow=$_POST['regular_transpo_allow'];
	$cola=$_POST['cola'];
	$transpo_allow=$_POST['transpo_allow'];
	$grill_allow=$_POST['grill_allow'];
	$meal_allow=$_POST['meal_allow'];
	$oic_allow=$_POST['oic_allow'];

	$sss_loan=$_POST['sss_loan'];
	$hdmf_loan=$_POST['hdmf_loan'];
	$hdmf_calamity=$_POST['hdmf_calamity'];
	$salary_loan=$_POST['salary_loan'];
	$late_charges=$_POST['late_charges'];
	$last_pay=$_POST['last_pay'];
	
	
	  $a = round(($per_hour_pay*$reg_hours),2);
	  $b = round(($per_hour_pay*$ot_hours)*1.25,2);
	  $c = round(($per_hour_pay*$rd_sd)*.3,2);
	  $d = round(($per_hour_pay*$rd_sd_ot)*.39,2);
	  $e = round(($per_hour_pay*$two_pay)*1,2);
	  $f = round(($per_hour_pay*$two_pay_ot)*.6,2);
	  $g = round(($per_hour_pay*$nd)*.1,2);
	  $gross_pay=$a+$b+$c+$d+$e+$f+$g+$transpo_allow+$regular_transpo_allow+$grill_allow+$cola+$meal_allow+$oic_allow;
	  $whole_pay=round(($gross_pay+$last_pay),2);
	  
	  	
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
	  
	}
	else
	{
	$per_hour_pay=$_POST['per_hour_pay'];
	$reg_hours=$_POST['reg_hours'];
	$ot_hours=$_POST['ot_hours'];
	$rd_sd=$_POST['rd_sd'];
	$rd_sd_ot=$_POST['rd_sd_ot'];
	$two_pay=$_POST['two_pay'];
	$two_pay_ot=$_POST['two_pay_ot'];
	$nd=$_POST['nd'];
	$regular_transpo_allow=0;
	$cola=$_POST['cola'];
	$transpo_allow=$_POST['transpo_allow'];
	$grill_allow=$_POST['grill_allow'];
	$meal_allow=$_POST['meal_allow'];
	$oic_allow=$_POST['oic_allow'];
	$sss=$_POST['sss'];
	$phic=$_POST['phic'];
	$hdmf=$_POST['hdmf'];
	$wh_tax=$_POST['wh_tax'];
	$sss_loan=$_POST['sss_loan'];
	$hdmf_loan=$_POST['hdmf_loan'];
	$hdmf_calamity=$_POST['hdmf_calamity'];
	$salary_loan=$_POST['salary_loan'];
	$late_charges=0;
	$last_pay=$_POST['last_pay'];
		
	}

$sql = "INSERT INTO payroll (emp_id,payment_per_day,no_of_hours,reg_ot,rd_sd,rd_sd_ot,2x_pay,2_pay_ot,nd,transpo_allow,regular_transpo_allow,grill_allow,cola,meal_allow,oic_allow,sss,phic,hdmf,sss_loan,hdmf_loan,hdmf_calamity_loan,salary_loan,late_charges,tax,from_payroll,to_payroll,last_pay)
VALUES (\"$emp_id\",\"$per_hour_pay\",\"$reg_hours\",\"$ot_hours\",\"$rd_sd\",\"$rd_sd_ot\",\"$two_pay\",\"$two_pay_ot\",\"$nd\",\"$transpo_allow\",\"$regular_transpo_allow\",\"$grill_allow\",\"$cola\",\"$meal_allow\",\"$oic_allow\",\"$sss\",\"$phic\",\"$hdmf\",\"$sss_loan\",\"$hdmf_loan\",\"$hdmf_calamity\",\"$salary_loan\",\"$late_charges\",\"$wh_tax\",\"$from\",\"$to\",\"$last_pay\")";
if ($conn->query($sql) === TRUE) {
 $sql1 = "UPDATE  information set payroll=\"1\" where emp_id = '$emp_id'";

if ($conn->query($sql1) === TRUE) {
   header("Location: index.php?page=payroll");
}
else{

		 echo "Error Inserting record1: " . mysqli_error($conn);

		
}

}
else{

		 echo "Error Inserting record2: " . mysqli_error($conn);

		
}

}
function submit_payroll_manager(){
	include ("views/connect.php");	
	$emp_id=$_POST['emp_id'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$new_date = strtotime($to);
	$day = date("d", $new_date);
	if($day==23){
	$daily_pay=$_POST['daily_pay'];
	$monthly_pay=$_POST['monthly_pay'];
	$absent=$_POST['absent'];
	$ot_hours=$_POST['ot_hours'];
	$rd_sd=$_POST['rd_sd'];
	$rd_sd_ot=$_POST['rd_sd_ot'];
	$two_pay=$_POST['two_pay'];
	$two_pay_ot=$_POST['two_pay_ot'];
	$nd=$_POST['nd'];
	$regular_transpo_allow=$_POST['regular_transpo_allow'];
	$cola=$_POST['cola'];
	$transpo_allow=$_POST['transpo_allow'];
	$grill_allow=$_POST['grill_allow'];
	$meal_allow=$_POST['meal_allow'];
	$oic_allow=$_POST['oic_allow'];
	$sss_loan=$_POST['sss_loan'];
	$hdmf_loan=$_POST['hdmf_loan'];
	$hdmf_calamity=$_POST['hdmf_calamity'];
	$salary_loan=$_POST['salary_loan'];
	$late_charges=$_POST['late_charges'];
	$last_pay=$_POST['last_pay'];
	$a=round(($monthly_pay/2),2);
	  $hourly_pay=round(($daily_pay/8),2);
	  $b = round(($hourly_pay*$ot_hours)*1.25,2);
	  $c = round(($hourly_pay*$rd_sd)*.3,2);
	  $d = round(($hourly_pay*$rd_sd_ot)*.39,2);
	  $e = round(($hourly_pay*$two_pay)*1,2);
	  $f = round(($hourly_pay*$two_pay_ot)*.6,2);
	  $g = round(($hourly_pay*$nd)*.1,2);
	  $absent_deduct=round(($daily_pay*$absent),2);
		$late_charges_na=round($hourly_pay_sayo*$late_charges,2);
	  
	  $gross_pay=$a+$b+$c+$d+$e+$f+$g-$absent_deduct-$late_charges_na;
		$whole_pay=round(($gross_pay+$last_pay),2);
	  
	  	
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
	
	
	}
	else{
	$daily_pay=$_POST['daily_pay'];
	$monthly_pay=$_POST['monthly_pay'];
	$absent=$_POST['absent'];
	$ot_hours=$_POST['ot_hours'];
	$rd_sd=$_POST['rd_sd'];
	$rd_sd_ot=$_POST['rd_sd_ot'];
	$two_pay=$_POST['two_pay'];
	$two_pay_ot=$_POST['two_pay_ot'];
	$nd=$_POST['nd'];
	$cola=$_POST['cola'];
	$transpo_allow=$_POST['transpo_allow'];
	$grill_allow=$_POST['grill_allow'];
	$meal_allow=$_POST['meal_allow'];
	$oic_allow=$_POST['oic_allow'];
	$sss=$_POST['sss'];
	$phic=$_POST['phic'];
	$hdmf=$_POST['hdmf'];
	$sss_loan=$_POST['sss_loan'];
	$hdmf_loan=$_POST['hdmf_loan'];
	$hdmf_calamity=$_POST['hdmf_calamity'];
	$salary_loan=$_POST['salary_loan'];
	$late_charges=$_POST['late_charges'];
	$wh_tax=$_POST['wh_tax'];
	$last_pay=$_POST['last_pay'];
	}

$sql = "INSERT INTO payroll (emp_id,daily_pay,monthly_pay,absent,reg_ot,rd_sd,rd_sd_ot,2x_pay,2_pay_ot,nd,transpo_allow,regular_transpo_allow,grill_allow,cola,meal_allow,oic_allow,sss,phic,hdmf,sss_loan,hdmf_loan,hdmf_calamity_loan,salary_loan,late_charges,tax,from_payroll,to_payroll,last_pay)
VALUES (\"$emp_id\",\"$daily_pay\",\"$monthly_pay\",\"$absent\",\"$ot_hours\",\"$rd_sd\",\"$rd_sd_ot\",\"$two_pay\",\"$two_pay_ot\",\"$nd\",\"$transpo_allow\",\"$regular_transpo_allow\",\"$grill_allow\",\"$cola\",\"$meal_allow\",\"$oic_allow\",\"$sss\",\"$phic\",\"$hdmf\",\"$sss_loan\",\"$hdmf_loan\",\"$hdmf_calamity\",\"$salary_loan\",\"$late_charges\",\"$wh_tax\",\"$from\",\"$to\",\"$last_pay\")";
if ($conn->query($sql) === TRUE) {
 $sql1 = "UPDATE  information set payroll=\"1\" where emp_id = '$emp_id'";

if ($conn->query($sql1) === TRUE) {
   header("Location: index.php?page=payroll");
}
else{

		 echo "Error Inserting record: " . mysqli_error($conn);

		
}

}
else{

		 echo "Error Inserting record: " . mysqli_error($conn);

		
}

}
function save_password(){
	$current_password=$_POST['current_password'];
	$new_password=$_POST['new_password'];
	$renz = $_SESSION['user_id'];
	include ("views/connect.php");	
	$sql = "SELECT * FROM information where id=".$renz;
	$result = $conn->query($sql);

	 while($row = $result->fetch_assoc()) {
		$password = $row["password"];
	}
	
	
	if("$current_password"=="$password")
	{
	$sql = "update information set password=\"$new_password\" where id='$renz'";
if ($conn->query($sql) === TRUE) {
   header("Location: index.php?page=home");	
}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}
	}
	
	else
	{
		echo ' <script type="text/javascript">
             alert("INVALID CURRENT PASSWORD!")
			</script>';
			header("refresh: .1;");
		
}
	
}
function deactivate(){
		
	$id = $_GET['ID'];
include ("views/connect.php");	
$sql = "Update information set activate = 1 where id ='$id'";
if ($conn->query($sql) === TRUE) {
   header("Location: index.php?page=employee");	
}
else{
	echo "Error Inserting Record: " . mysqli_error($conn);
}
}
function activate(){
		
	$id = $_GET['ID'];
include ("views/connect.php");	

$sql = "Update information set activate = '0' where id ='$id'";
if ($conn->query($sql) === TRUE) {
   header("Location: index.php?page=employee");	
}
else{
	echo "Error Inserting Record: " . mysqli_error($conn);
}
}
function reset_account(){
		
	$id = $_GET['ID'];
include ("views/connect.php");	
$sql = "Update information set password = '1233456' where id ='$id'";
if ($conn->query($sql) === TRUE) {
   header("Location: index.php?page=employee");	
}
else{
	echo "Error Inserting Record: " . mysqli_error($conn);
}
}
function delete_entry(){
$id=$_GET['ID'];
include ("views/connect.php");	
$sql = "Delete from bio where id='$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=manual_entry");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}
}
function schedule(){
	$from=$_POST['from'];
	$to=$_POST['to'];
	$name=$_POST['name'];
	
	
	if($name=='ALL'){
		
		include ("views/schedule_result_all.php");
	
	}
	else
	{
			include ("views/schedule_result_employee.php");
	
	}
	
	
	
}
function new_schedule(){
	$from=$_POST['from'];
	$to=$_POST['to'];
	$name=$_POST['name'];
	
	
	
		
		include ("views/new_schedule_result.php");
	
	
	
	
}
function submit_na(){
$name=$_POST['name'];
$from=$_POST['from'];
$to=$_POST['to'];

$start_date = strtotime($from);
$end_date = strtotime($to);
	
	
	
	for ($i=$start_date;$i<=$end_date;$i+=86400)
{
				$renz1=date('m',$i); 
				$renz=date('d',$i); 
				$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
$renz1=date('m',$i); 
	$renz=date('d',$i); 
	$year=date('Y',$i); 
	$royal_date="$year$renz1$renz";
	$a="".$royal_date."am_start";
	$b="".$royal_date."am_end";
	$c="".$royal_date."pm_start";
	$d="".$royal_date."pm_end";
	
$aa=$_POST["$a"];
$bb=$_POST["$b"];
$cc=$_POST["$c"];
$dd=$_POST["$d"];
if(($aa!='')or($bb!='')or($cc!='')or($dd!=''))
{
include ("views/connect.php");	
$sql2 = "SELECT * FROM schedule where id_information='$name' and date='$royal_date'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
	$sql3 = "update schedule set start_am='$aa',start_pm='$cc',end_am='$bb',end_pm='$dd' where id_information='$name' and date='$royal_date'";
if ($conn->query($sql3) === TRUE) {
	 header("Location: index.php?page=new_schedule");
	
}

else{
 echo "Error Insert record1s: " . mysqli_error($conn);
	
			}
}
else{
$sql = "INSERT INTO schedule (date,start_am,start_pm,end_am,end_pm,id_information)
VALUES ('$royal_date','$aa','$cc','$bb','$dd','$name')";
if ($conn->query($sql) === TRUE) {
  header("Location: index.php?page=new_schedule");
}
else{
	 echo "Error Insert record1: " . mysqli_error($conn);
			}
}
}
else
{
	
}
	
	}





}
function edit_tax(){
$id=$_GET['ID'];
include ("views/connect.php");	

$sql = "SELECT * FROM tax_cont where id='$id'";
$result = $conn->query($sql);	



  while($row = $result->fetch_assoc()) {
	 $start=  round($row['start'],2);
	$end =  round($row['end'],2);
	 $total_contribution =   round($row['total_contribution'],2);
	 $percent =   round($row['percent'],2);
	}
include "views/edit_tax.php";



}
function save_edit_tax(){
	
	$id=$_GET['ID'];
	
	$start=$_POST['start'];
	$end=$_POST['end'];
	$amount=$_POST['amount'];
	$percentage=$_POST['percentage'];
	
	
	
include ("views/connect.php");	
$sql = "UPDATE  tax_cont set start=\"$start\",end=\"$end\",total_contribution=\"$amount\",percent=\"$percentage\" where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=tax_table");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
	
}
function delete_tax(){
	$id=$_GET['ID'];
	include ("views/connect.php");	
$sql = "delete from tax_cont where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=tax_table");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
}
function edit_sss(){
$id=$_GET['ID'];
include ("views/connect.php");	
$sql = "SELECT * FROM sss_cont where id='$id'";
$result = $conn->query($sql);	



  while($row = $result->fetch_assoc()) {
	 $start=   round($row['start'],2);
	$end =   round($row['end'],2);
	 $total_contribution =  round($row['total_contribution'],2);
	
	}
include "views/edit_sss.php";



}
function save_edit_sss(){
	
	$id=$_GET['ID'];
	
	$start=$_POST['start'];
	$end=$_POST['end'];
	$amount=$_POST['amount'];
	
	
	
	
include ("views/connect.php");	
$sql = "UPDATE  sss_cont set start=\"$start\",end=\"$end\",total_contribution=\"$amount\" where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=sss_table");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
	
}
function delete_sss(){
	$id=$_GET['ID'];
include ("views/connect.php");	
$sql = "delete from sss_cont where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=sss_table");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
}
function edit_phil_health(){
$id=$_GET['ID'];
include ("views/connect.php");	

$sql = "SELECT * FROM phil_health where id='$id'";
$result = $conn->query($sql);	



  while($row = $result->fetch_assoc()) {
	 $percent=  $row['percent'];
	
	
	}
include "views/edit_philhealth.php";



}
function save_edit_phil_health(){
	
	$id=$_GET['ID'];
	
	$percent=$_POST['percent'];

	
	
	include ("views/connect.php");	
$sql = "UPDATE  phil_health set percent='$percent' where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=phil_pagibig");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
	
}
function edit_pagibig(){
$id=$_GET['ID'];
include ("views/connect.php");	

$sql = "SELECT * FROM pag_ibig_cont where id='$id'";
$result = $conn->query($sql);	



  while($row = $result->fetch_assoc()) {
	 $percent=  $row['percent'];
	
	
	}
include "views/edit_pagibig.php";



}
function save_edit_pagibig(){
	
	$id=$_GET['ID'];
	
	$percent=$_POST['percent'];

	
	
	
	
include ("views/connect.php");	
$sql = "UPDATE  pag_ibig_cont set percent='$percent' where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=phil_pagibig");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
	
}
function view_employee_secret(){

$id= $_SESSION['user_id'];
include ("views/connect.php");	
$sql = "SELECT * FROM information where id='$id'";
$result = $conn->query($sql);	

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
	 $id= $row['id'];
	 $emp_id= $row['emp_id'];
	 $first_name= $row['first_name'];
	$middle_name=  $row['middle_name'];
	$last_name=  $row['last_name'];
	$hire_class=  $row['hire_class'];
	$date_hired=  $row['date_hired'];
	$tin_number=  $row['tin_number'];
	$sss_number=  $row['sss_number'];
	$pagibig_number=  $row['pagibig_number'];
	$philhealt_number=  $row['philhealt_number'];
	$hourly_pay=  $row['hourly_pay'];
	$daily_pay=  $row['daily_pay'];
	$monthly_pay=  $row['monthly_pay'];
	$name="$first_name $last_name";
	$username1= $row['username'];
	$type= $row['type'];
	}
	


include "views/view_employee_secret.php";
}
}
function schedule_secret(){
	$from=$_POST['from'];
	$to=$_POST['to'];
	$name=$_POST['name'];
	
	
	
		
		include ("views/view_schedule_secret.php");
	
	
	
	
}
function dtr_view_2(){
	
	$employee_id=$_POST['employee_id'];
	$datefrom=$_POST['datefrom'];
	$dateto=$_POST['dateto'];
		include ("views/connect.php");	
			$sql = "SELECT * FROM information where emp_id ='$employee_id'";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
		$last_name5=$row['last_name'];
		$first_name=$row['first_name'];
		}
				
	include ("views/dtr_3.php");
			
	
	
}
function manual_encode(){
	
	
	$check_in=$_POST['check_in'];
	$employee_id=$_POST['employee_id'];
	$date_enter=$_POST['date_enter'];
	$break_out=$_POST['break_out'];
	$break_in=$_POST['break_in'];
	$check_out=$_POST['check_out'];
	$date_today=date('Y-m-d');
	
	
	include ("views/connect.php");	
	$sql1 = "SELECT * FROM bio where date_bio='$date_enter' and emp_id='$employee_id' ";
	$result1 = $conn->query($sql1);	
	if ($result1->num_rows > 0) {
		
			echo ' <script type="text/javascript">
             alert("DUPLICATE OF ENTRY")
			</script>';
			header("refresh: .1;");

	
	}
	else{
		$sql = "INSERT INTO bio (date_entered,check_in,emp_id,date_bio,location,break_out,break_in,check_out)
VALUES (\"$date_today\",\"$check_in\",\"$employee_id\",\"$date_enter\",\"ENCODE\",\"$break_out\",\"$break_in\",\"$check_out\")";
if ($conn->query($sql) === TRUE) {
  
   header("Location: index.php?page=manual_entry");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}
	
	}
}
function edit_manual_encode(){
	$id=$_GET['ID'];
include ("views/connect.php");	

$sql = "SELECT * FROM bio where id='$id'";
$result = $conn->query($sql);	



  while($row = $result->fetch_assoc()) {
	$emp_id=  $row['emp_id'];
	$date_bio=  $row['date_bio'];
	$break_out=  $row['break_out'];
	$break_in=  $row['break_in'];
	$check_in=  $row['check_in'];
	$check_out=  $row['check_out'];
	$sql5 = "SELECT * FROM information where emp_id ='$emp_id'";
			$result5 = $conn->query($sql5);	
			while($row5= $result5->fetch_assoc()) {
		$last_name5=$row5['last_name'];
		$first_name5=$row5['first_name'];
		}
	
}
include "views/edit_manual_encode.php";

}
function save_edit_manual_encode(){
$id=$_GET['ID'];
	
	$check_in=$_POST['check_in'];
	$employee_id=$_POST['employee_id'];
	$date_enter=$_POST['date_enter'];
	$break_out=$_POST['break_out'];
	$break_in=$_POST['break_in'];
	$check_out=$_POST['check_out'];
	$date_today=date('Y-m-d');
include ("views/connect.php");	
$sql = "UPDATE  bio set check_in=\"$check_in\",emp_id=\"$employee_id\",date_bio=\"$date_enter\",break_out=\"$break_out\",break_in=\"$break_in\",check_out=\"$check_out\" where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=manual_entry");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	

}
function time_record(){
	$employee_id=$_POST['employee_id'];
	$datefrom=$_POST['datefrom'];
	$dateto=$_POST['dateto'];
		include ("views/connect.php");	
			$sql = "SELECT * FROM information where emp_id ='$employee_id'";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
		$last_name5=$row['last_name'];
		$first_name=$row['first_name'];
		}
				
	include ("views/time_record_view.php");
}
function employee_list_na(){
	$search=$_POST['search'];
	
	include ("views/employee_list_search.php");
}		
function holiday(){
	
}
function new_holiday(){

	$date_holiday=$_POST['date_holiday'];
	$type=$_POST['type'];
	$remarks=$_POST['remarks'];
	$date_today=date('Y-m-d');
	
	
		
	include ("views/connect.php");	
$sql = "INSERT INTO holiday (date,type_of_holiday,remarks,date_encode)
VALUES (\"$date_holiday\",\"$type\",\"$remarks\",\"$date_today\")";
if ($conn->query($sql) === TRUE) {
  
   header("Location: index.php?page=holiday");

}
else{
echo ' <script type="text/javascript">
             alert("DUPLICATE OF DATE")
			</script>';
			header("refresh: .1;");

}


}
function delete_holiday(){
$id=$_GET['ID'];
include ("views/connect.php");	
$sql = "Delete from holiday where id='$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=holiday");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}
}
function edit_holiday(){
$id=$_GET['ID'];
include ("views/connect.php");	
$sql = "SELECT * FROM holiday where id='$id'";
$result = $conn->query($sql);	



  while($row = $result->fetch_assoc()) {
	 $date=  $row['date'];
	$remarks =  $row['remarks'];
	 $type =   $row['type_of_holiday'];

	}
include "views/edit_holiday.php";



}
function save_edit_holiday(){
	
	$id=$_GET['ID'];
	
	$date=$_POST['date_holiday'];
	$type=$_POST['type'];
	$remarks=$_POST['remarks'];
	
	
	
	

include ("views/connect.php");	 
$sql = "UPDATE  holiday set date=\"$date\",type_of_holiday=\"$type\",remarks=\"$remarks\" where id = '$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=holiday");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
	
}
function delete_payroll(){
$id=$_GET['ID'];
include ("views/connect.php");	
$sql2 = "SELECT * FROM payroll where id='$id'";
			$result2 = $conn->query($sql2);		
			while($row2 = $result2->fetch_assoc()) {
				$emp_id=$row2['emp_id'];
			}
			
			 $sql1 = "UPDATE  information set payroll=\"0\" where emp_id = '$emp_id'";


if ($conn->query($sql1) === TRUE) {
  $sql = "Delete from payroll where id='$id'";
  if ($conn->query($sql) === TRUE) {
   header("Location: index.php?page=payroll");
  }
  else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}
}
function edit_payroll(){
$id=$_GET['ID'];
include ("views/connect.php");	

$sql = "SELECT * FROM payroll where id='$id'";
$result = $conn->query($sql);	



  while($row = $result->fetch_assoc()) {
	  $employee_id=$row['emp_id'];
	$date_from=$row['from_payroll'];
	$dateto=$row['from_payroll'];
	$per_hour_pay=$row['payment_per_day'];
	$reg_hours=$row['no_of_hours'];
	$reg_ot=$row['reg_ot'];
	$rd_sd=$row['rd_sd'];
	$rd_sd_ot=$row['rd_sd_ot'];
	$two_pay=$row['2x_pay'];
	$two_pay_ot=$row['2_pay_ot'];
	$nd=$row['nd'];
	$regular_transpo_allow=$row['regular_transpo_allow'];
	$cola=$row['cola'];
	$transpo_allow=$row['transpo_allow'];
	$grill_allow=$row['grill_allow'];
	$meal_allow=$row['meal_allow'];
	$oic_allow=$row['oic_allow'];
	$sss=$row['sss'];
	$phic=$row['phic'];
	$hdmf=$row['hdmf'];
	$sss_loan=$row['sss_loan'];
	$hdmf_loan=$row['hdmf_loan'];
	$hdmf_calamity=$row['hdmf_calamity_loan'];
	$salary_loan=$row['salary_loan'];
	$late_charges=$row['late_charges'];
	$wh_tax=$row['tax'];
	
$sql1 = "SELECT * FROM information where emp_id='$employee_id'";
$result1 = $conn->query($sql1);	


  while($row1 = $result1->fetch_assoc()) {
	  $first_name=$row1['first_name'];
	  $last_name=$row1['last_name'];
	  $hourly_pay=$row1['hourly_pay'];
	  
  }
	
	}
include "views/edit_payroll.php";



}
function save_edit_payroll(){

	$id=$_GET['ID'];
	
	$reg_hours=$_POST['reg_hours'];
	$ot_hours=$_POST['ot_hours'];
	$rd_sd=$_POST['rd_sd'];
	$rd_sd_ot=$_POST['rd_sd_ot'];
	$two_pay=$_POST['two_pay'];
	$two_pay_ot=$_POST['two_pay_ot'];
	$nd=$_POST['nd'];
	$regular_transpo_allow=$_POST['regular_transpo_allow'];
	$cola=$_POST['cola'];
	$transpo_allow=$_POST['transpo_allow'];
	$grill_allow=$_POST['grill_allow'];
	$meal_allow=$_POST['meal_allow'];
	$oic_allow=$_POST['oic_allow'];
	$sss=$_POST['sss'];
	$phic=$_POST['phic'];
	$hdmf=$_POST['hdmf'];
	$sss_loan=$_POST['sss_loan'];
	$hdmf_loan=$_POST['hdmf_loan'];
	$hdmf_calamity=$_POST['hdmf_calamity'];
	$salary_loan=$_POST['salary_loan'];
	$late_charges=$_POST['late_charges'];
	$wh_tax=$_POST['wh_tax'];
	
	
	
include ("views/connect.php");	
$sql = "update  payroll  set no_of_hours=\"$reg_hours\",reg_ot=\"$ot_hours\",rd_sd=\"$rd_sd\",rd_sd_ot=\"$rd_sd_ot\",2x_pay=\"$two_pay\",2_pay_ot=\"$two_pay_ot\",nd=\"$nd\",transpo_allow=\"$transpo_allow\",regular_transpo_allow=\"$regular_transpo_allow\",grill_allow=\"$grill_allow\",cola=\"$cola\",meal_allow=\"$meal_allow\",oic_allow=\"$oic_allow\",sss=\"$sss\",phic=\"$phic\",hdmf=\"$hdmf\",sss_loan=\"$sss_loan\",hdmf_loan=\"$hdmf_loan\",hdmf_calamity_loan=\"$hdmf_calamity\",salary_loan=\"$salary_loan\",late_charges=\"$late_charges\",tax=\"$wh_tax\" where id='$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=payroll");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
}
function done_payroll(){
include ("views/connect.php");	
$sql = "update  payroll  set done=1";
if ($conn->query($sql) === TRUE) {
   
			 $sql1 = "UPDATE  information set payroll=\"0\" ";


if ($conn->query($sql1) === TRUE) {
header("Location: index.php?page=payroll");}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
		
}
function view_payslip(){
	$payroll=$_POST['date'];
	$emp_id=$_POST['employee_id'];
	include ("views/connect.php");	
			$sql = "SELECT * FROM information where emp_id ='$emp_id'";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
		$last_name5=$row['last_name'];
		$first_name=$row['first_name'];
		$type=$row['type'];
		}
		$sql1 = "SELECT * FROM payroll where emp_id ='$emp_id' and from_payroll='$payroll'";
			$result1 = $conn->query($sql1);	
			while($row1 = $result1->fetch_assoc()) {
		$payroll_id=$row1['id'];
		$from_payroll=$row1['from_payroll'];
		$to_payroll=$row1['to_payroll'];
		}
		include ("views/payslip_view.php");
	
}
function edit_payroll_manager(){
$id=$_GET['ID'];
include ("views/connect.php");	

$sql = "SELECT * FROM payroll where id='$id'";
$result = $conn->query($sql);	



  while($row = $result->fetch_assoc()) {
	  $employee_id=$row['emp_id'];
	$date_from=$row['from_payroll'];
	$dateto=$row['from_payroll'];
	$monthly_pay=$row['monthly_pay'];
	$daily_pay=$row['daily_pay'];
	$absent=$row['absent'];
	$reg_ot=$row['reg_ot'];
	$rd_sd=$row['rd_sd'];
	$rd_sd_ot=$row['rd_sd_ot'];
	$two_pay=$row['2x_pay'];
	$two_pay_ot=$row['2_pay_ot'];
	$nd=$row['nd'];
	$regular_transpo_allow=$row['regular_transpo_allow'];
	$cola=$row['cola'];
	$transpo_allow=$row['transpo_allow'];
	$grill_allow=$row['grill_allow'];
	$meal_allow=$row['meal_allow'];
	$oic_allow=$row['oic_allow'];
	$sss=$row['sss'];
	$phic=$row['phic'];
	$hdmf=$row['hdmf'];
	$sss_loan=$row['sss_loan'];
	$hdmf_loan=$row['hdmf_loan'];
	$hdmf_calamity=$row['hdmf_calamity_loan'];
	$salary_loan=$row['salary_loan'];
	$late_charges=$row['late_charges'];
	$wh_tax=$row['tax'];
	
$sql1 = "SELECT * FROM information where emp_id='$employee_id'";
$result1 = $conn->query($sql1);	


  while($row1 = $result1->fetch_assoc()) {
	  $first_name=$row1['first_name'];
	  $last_name=$row1['last_name'];
	  $daily_pay=$row1['daily_pay'];
	  $monthly_pay=$row1['monthly_pay'];
	  
  }
	
	}
include "views/edit_payroll_manager.php";



}
function save_edit_payroll_manager(){

	$id=$_GET['ID'];
	$absent=$row['absent'];
	$ot_hours=$_POST['ot_hours'];
	$rd_sd=$_POST['rd_sd'];
	$rd_sd_ot=$_POST['rd_sd_ot'];
	$two_pay=$_POST['two_pay'];
	$two_pay_ot=$_POST['two_pay_ot'];
	$nd=$_POST['nd'];
	$regular_transpo_allow=$_POST['regular_transpo_allow'];
	$cola=$_POST['cola'];
	$transpo_allow=$_POST['transpo_allow'];
	$grill_allow=$_POST['grill_allow'];
	$meal_allow=$_POST['meal_allow'];
	$oic_allow=$_POST['oic_allow'];
	$sss=$_POST['sss'];
	$phic=$_POST['phic'];
	$hdmf=$_POST['hdmf'];
	$sss_loan=$_POST['sss_loan'];
	$hdmf_loan=$_POST['hdmf_loan'];
	$hdmf_calamity=$_POST['hdmf_calamity'];
	$salary_loan=$_POST['salary_loan'];
	$late_charges=$_POST['late_charges'];
	$wh_tax=$_POST['wh_tax'];
	
	
	
include ("views/connect.php");	

$sql = "update  payroll  set absent=\"$absent\",reg_ot=\"$ot_hours\",rd_sd=\"$rd_sd\",rd_sd_ot=\"$rd_sd_ot\",2x_pay=\"$two_pay\",2_pay_ot=\"$two_pay_ot\",nd=\"$nd\",transpo_allow=\"$transpo_allow\",regular_transpo_allow=\"$regular_transpo_allow\",grill_allow=\"$grill_allow\",cola=\"$cola\",meal_allow=\"$meal_allow\",oic_allow=\"$oic_allow\",sss=\"$sss\",phic=\"$phic\",hdmf=\"$hdmf\",sss_loan=\"$sss_loan\",hdmf_loan=\"$hdmf_loan\",hdmf_calamity_loan=\"$hdmf_calamity\",salary_loan=\"$salary_loan\",late_charges=\"$late_charges\",tax=\"$wh_tax\" where id='$id'";
if ($conn->query($sql) === TRUE) {
   
   header("Location: index.php?page=payroll");

}
else{
	 echo "Error Inserting record: " . mysqli_error($conn);
}	
	
}
function report(){
	$date=$_POST['date'];
	$report=$_POST['report'];
	include ("views/connect.php");	
			
		$sql1 = "SELECT * FROM payroll where from_payroll='$date'";
			$result1 = $conn->query($sql1);	
			while($row1 = $result1->fetch_assoc()) {
		$payroll_id=$row1['id'];
		$from_payroll=$row1['from_payroll'];
		$to_payroll=$row1['to_payroll'];
		$emp_id=$row1['emp_id'];
		}
		$sql = "SELECT * FROM information where emp_id ='$emp_id'";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
		$last_name5=$row['last_name'];
		$first_name=$row['first_name'];
		$type=$row['type'];
		}
		
	if($report=="PAYROLL"){
	include ("views/report_view_payroll.php");
	}
	else
	{
		include ("views/salaries_wages.php");
	}






}
function view_payslip_employee(){
	$payroll=$_POST['date'];
	$emp_id=$_POST['employee_id'];
	include ("views/connect.php");	
			$sql = "SELECT * FROM information where emp_id ='$emp_id'";
			$result = $conn->query($sql);	
			while($row = $result->fetch_assoc()) {
		$last_name5=$row['last_name'];
		$first_name=$row['first_name'];
		$type=$row['type'];
		}
		$sql1 = "SELECT * FROM payroll where emp_id ='$emp_id' and from_payroll='$payroll'";
			$result1 = $conn->query($sql1);	
			while($row1 = $result1->fetch_assoc()) {
		$payroll_id=$row1['id'];
		$from_payroll=$row1['from_payroll'];
		$to_payroll=$row1['to_payroll'];
		}
		include ("views/payslip_view_employee.php");
	
}
	
?>