<?php
$renz = $_SESSION['user_id'];
include ("views/connect.php");	
$sql = "SELECT * FROM information where id=".$renz;
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()) {
        $renz1 = $row["first_name"];
       
       ;
	}
	?>

<div id="container" >
	
	<img src="views/images/logo1.png" style='height:50px'>
    
	<div style="font-size: 13px;float:right; margin-right:10px; text-align:center; border:0; text-align:right;line-height: 20px;"> <strong>Welcome</strong>, 
  			<?php echo"$renz1";?>
				
					<small>
					<a href="index.php?page=change_password" style="color:#FF0000">Change Password</a>
					</small> |
						<small>
					<a href="controllers/logout.php" style="color:#FF0000">Logout</a>
					</small> 
	</div>
	
	</div>
	<div id="description" >
				<small>TIMEKEEPING &amp; PAYROLL SYSTEM</small>
			
			</div>
	
<div class="navbar">
 <a href="index.php?page=home">HOME</a>
  <a href="index.php?page=employee">EMPLOYEE INFORMATION</a>
  <div class="dropdown">
    <button class="dropbtn">SCHEDULE 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php?page=new_schedule">NEW SCHEDULE</a>
      <a href="index.php?page=schedule">VIEW SCHEDULE</a>
      
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">ACCOUNTING 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php?page=payroll">PAYROLL</a>
      <a href="index.php?page=tax_table">TAX TABLE</a>
      <a href="index.php?page=sss_table">SSS TABLE</a>
      <a href="index.php?page=phil_pagibig">PHIL HEALTH/ PAGIBIG</a>
      <a href="index.php?page=holiday">HOLIDAY</a>
    </div>
  </div> 
  <a href="index.php?page=dtr">DAILY TIME RECORD</a>
  <a href="index.php?page=time_record">TIME RECORD</a>
  <a href="index.php?page=payslip">PAYSLIP</a>
  <a href="index.php?page=manual_entry">MANUAL ENTRY</a>
  <a href="index.php?page=report">REPORT</a>
  <a href="index.php?page=upload">UPLOAD</a>
  
</div>

