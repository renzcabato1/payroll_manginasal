<br>
<br>
<br>

<div class="main-view">
<table style="color:black" width="600" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF">
       <form action=""  method="POST" enctype="multipart/form-data">
	 
        <tbody><tr>
		<?php
			include ("views/connect.php");	
			$sql = "SELECT distinct from_payroll,to_payroll,done FROM payroll order by from_payroll desc limit 1";
			$result = $conn->query($sql);	
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
			
		$done=$row['done'];
		$from_payroll=$row['from_payroll'];
		$to_payroll=$row['to_payroll'];
		$new_date = strtotime($to_payroll);
		$month = date("m", $new_date);
		$year = date("Y", $new_date);
		$day = date("d", $new_date);
		if($day==23){
		$new_month=$month+1;
		$renz=$new_month/10;
		$new_from_payroll="$year-$month-24";
		if($renz<10){
		$new_to_payroll="$year-0$new_month-08";
		}
		else{
			$new_to_payroll="$year-$new_month-08";
		}
		}
		else
		{
		$new_month=$month+1;
		$renz=$new_month/10;
		
		
		$new_from_payroll="$year-$month-09";
		$new_to_payroll="$year-$month-23";
		
		
		}
		if($done==0){
			echo'<td width="1" height="30" align="left" bgcolor="#FFFFFF"><strong>PERIOD:</strong></td>
          <td align="left" bgcolor="#FFFFFF"><small> 
            
            <input name="datefrom" type="date" value='.$from_payroll.' size="10" maxlength="12" style="border:solid 1px #333333; text-align:center" readonly> &nbsp;<strong>TO</strong>&nbsp;
            <input name="dateto" type="date"  value='.$to_payroll.'  size="10" maxlength="12" style="border:solid 1px #333333; text-align:center" readonly></small></td>
        </tr>';
		}
		else
		{
			echo'<td width="1" height="30" align="left" bgcolor="#FFFFFF"><strong>PERIOD:</strong></td>
          <td align="left" bgcolor="#FFFFFF"><small> 
            
            <input name="datefrom" type="date"  value='.$new_from_payroll.' size="10" maxlength="12" style="border:solid 1px #333333; text-align:center" readonly> &nbsp;<strong>TO</strong>&nbsp;
            <input name="dateto" type="date"  value='.$new_to_payroll.'   size="10" maxlength="12" style="border:solid 1px #333333; text-align:center" readonly></small></td>
        </tr>';
		}
				}
			}
			else
			{
				echo'<td width="1" height="30" align="left" bgcolor="#FFFFFF"><strong>PERIOD:</strong></td>
          <td align="left" bgcolor="#FFFFFF"><small> 
            
            <input name="datefrom" type="date"   size="10" maxlength="12" style="border:solid 1px #333333; text-align:center" required> &nbsp;<strong>TO</strong>&nbsp;
            <input name="dateto" type="date"    size="10" maxlength="12" style="border:solid 1px #333333; text-align:center" required></small></td>
        </tr>';
			}
?>
          
        <tr>
          <td align="left" valign="bottom" bgcolor="#FFFFFF"><strong>EMPLOYEE: </strong></td>
          <td align="left" valign="bottom" bgcolor="#FFFFFF">
		  <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "payroll";								
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			$sql = "SELECT * FROM information where account_type='EMPLOYEE' and payroll=0 and activate=0 order by last_name asc";
			$result = $conn->query($sql);	
			echo'<select name="employee_id"  style="border:solid 1px #333333;" required>';		
			echo"<option value=''></option>";
       	
			while($row = $result->fetch_assoc()) {
				
			
          echo"<option value='$row[emp_id]'>$row[last_name], $row[first_name]</option>";
       
		  }
		   echo'</select>';
		  ?>
            <input name="submit" style="width:70px;height:30px;" type="submit"  value="SUBMIT"></td>
        </tr>
</tbody>
</form>

	<table style="color:black;align:center"  align='center' width="80%" border="0" cellpadding="0" cellspacing="0">
	  <tbody><tr>
		<td height="40" colspan="5" align="center" bgcolor="#FFFFFF" style="font-size:16px"><strong>PAYROLL </strong> &nbsp;&nbsp;&nbsp;<a style='width: 50%;
		background-color: #ff704d;
		color: white;
		padding: 8px 10px;
		margin: 8px 0;
		border: none;
		border-radius: 2px;
		cursor: pointer;' href='index.php?page=done_payroll'/>DONE</a><br ></td>
	  </tr>
	  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
		<th height="1" colspan="5" align="left"><div style="border-bottom:#333333 2px solid"></div></th>
	  </tr>
	  
	  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
		<th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>EMP ID</small></th>
		<th align="center" bgcolor="#ffffff"><small>NAME</small></th>
		<th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>FROM </small></th>
		<th align="center" bgcolor="#ffffff"><small>TO</small></th>
		<th align="center" bgcolor="#ffffff"><small>ACTION</small></th>
	  </tr>
	  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
		<th height="1" colspan="5" align="left"><div style="border-bottom:#333333 1px solid"></div></th>
	  </tr>
	  <?php
		
			$sql1 = "SELECT * FROM payroll where done='0'  order by emp_id";
			$result1 = $conn->query($sql1);	
			while($row1 = $result1->fetch_assoc()) {
			
			$emp_id=$row1['emp_id'];
			$from_payroll=$row1['from_payroll'];
			$to_payroll=$row1['to_payroll'];
			$sql2 = "SELECT * FROM information where emp_id='$emp_id'";
			$result2 = $conn->query($sql2);		
			while($row2 = $result2->fetch_assoc()) {
				$first_name = $row2['first_name'];
				$last_name = $row2['last_name'];
				$type = $row2['type'];
				$whole_name = "$last_name, $first_name";
			}
			echo'<tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>'.$emp_id.'</small></th>
    <th align="center" bgcolor="#ffffff"><small>'.$whole_name.'</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>'.$from_payroll.'</small></th>
    <th align="center" bgcolor="#ffffff"><small>'.$to_payroll.'</small></th>';
	if($type=="CREW"){
	echo'
    <th align="center" bgcolor="#ffffff"><a href="payroll_print/payroll_view.php?id='.$row1['id'].'"  target="_blank"/>PRINT</a> | <a href="index.php?page=delete_payroll&ID='.$row1['id'].'">DELETE</a></th>
	</tr>';}
	else if($type=="MANAGER"){
	echo'
    <th align="center" bgcolor="#ffffff"><a href="payroll_print/payroll_view_manager.php?id='.$row1['id'].'"  target="_blank"/>PRINT</a> | <a href="index.php?page=delete_payroll&ID='.$row1['id'].'">DELETE</a></th>
	</tr>';}
	 
			}
  ?>
	  
	  
	  </tbody>
	  </table>	
		
	 </div>
	   <br> <br>

</table>
</div>
