
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
			$sql = "SELECT DISTINCT from_payroll,to_payroll FROM payroll where from_payroll!='$payroll' and done=1 order by id";
			$result = $conn->query($sql);	
			echo'<select name="date"  style="border:solid 1px #333333;" required>';		
			echo"<option value='$payroll'>$from_payroll to $to_payroll</option>";
       	
			while($row = $result->fetch_assoc()) {
				
			
          echo"<option value='$row[from_payroll]'>$row[from_payroll] to $row[to_payroll]</option>";
       
		  }
		   echo'</select>';
		  ?>
		  </td>
       
          <td align="left"  bgcolor="#FFFFFF"><strong>EMPLOYEE: </strong></td>
          <td align="left"  bgcolor="#FFFFFF">
		  <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "payroll";								
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			$sql = "SELECT * FROM information where account_type!='ADMIN' and emp_id!='$emp_id' order by last_name asc";
			$result = $conn->query($sql);	
			echo'<select name="employee_id"  style="border:solid 1px #333333;" required>';		
			echo"<option value='$emp_id'>$last_name5, $first_name</option>";
       	
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
		
		<table align='center' width="70%" border='1' cellspacing='0'>
<tr>
<td  align='center'>
<h1 style="color:black;">PAYSLIP </h1>
</td> 

</tr>
<tr>
<td border='1' colspan='2'>
<table id="customers" border='1'  >
  <tr align='center'>
    <th>NAME</th>
    <th>FROM</th>
    <th>TO</th>
   <th >ACTION</th>
  </tr>
  <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "payroll";
		
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		
		$sql = "SELECT * FROM payroll where id='$payroll_id'";
		$result = $conn->query($sql);	
		
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
		echo"	<tr >
        
		<td  >
		$last_name5, $first_name
        </td> 
		<td >
		$from_payroll
        </td> 
		<td   >
		$to_payroll
        </td>";
		if($type=='CREW')
		{
		echo"
		
		
		<td  align='center'  >
		  <a href='payroll_print/payroll_view.php?id=".$payroll_id."'  target='_blank'/>PRINT</a>
		  </td>
		</tr>";
		}
		else
		{
			
		echo"<td  align='center'  >
		  <a href='payroll_print/payroll_view_manager.php?id=".$payroll_id."'  target='_blank'/>PRINT</a>
		  </td>
		</tr>";
		}
			
		}
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
</form></table>
   <br> <br>
</div>

	