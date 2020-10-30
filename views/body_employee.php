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
  <a href="index.php?page=employee_secret">EMPLOYEE INFORMATION</a>
<a href="index.php?page=schedule_secret">VIEW SCHEDULE</a>
      
 
  
 
  <a href="index.php?page=dtr_2">DAILY TIME RECORD</a>
  <a href="index.php?page=payslip_employee">PAYSLIP</a>
  
</div>

