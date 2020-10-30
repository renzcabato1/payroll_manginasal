<br>
<br>
<br>
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
          <td width="1" height="30" align="left" bgcolor="#FFFFFF"><strong>PERIOD:</strong></td>
          <td align="left" bgcolor="#FFFFFF"><small> 
            
            <input name="datefrom" type="date" value="<?php echo"$from";?>"   size="10" maxlength="12" style="border:solid 1px #333333; text-align:center"> &nbsp;<strong>TO</strong>&nbsp;
            <input name="dateto" type="date" value="<?php echo"$to";?>"   size="10" maxlength="12" style="border:solid 1px #333333; text-align:center"></small></td>
        </tr>
        <tr>
          <td align="left" valign="bottom" bgcolor="#FFFFFF"><strong>EMPLOYEE: </strong></td>
          <td align="left" valign="bottom" bgcolor="#FFFFFF">
		   <?php
			include ("views/connect.php");	
			$id_employee = $_SESSION['user_id'];							
			
			$sql = "SELECT * FROM information where id='$id_employee' order by last_name asc";
			$result = $conn->query($sql);	
			echo'<select name="employee_id"  style="border:solid 1px #333333;" required>';		

       	
			while($row = $result->fetch_assoc()) {
				
			
          echo"<option value='$row[emp_id]'>$row[last_name], $row[first_name]</option>";
       
		  }
		   echo'</select>';
		  ?>
            <input name="Search" style="width:70px;height:30px;" type="submit"  value="SEARCH"></td>
        </tr>
</tbody>
</form></table>

<div id="listing" style="width:900px; margin:auto; border:#333333 solid 1px; margin-top:5px;  border-bottom-width:2px; border-right-width:2px; padding:5px; background-color:#FFFFFF;  ">	

<table style="color:black"  width="100%" border="0" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="40" colspan="9" align="center" bgcolor="#FFFFFF" style="font-size:16px"><strong>RAW IN / OUT TIMESHEET </strong></td>
  </tr>
  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th height="1" colspan="9" align="left"><div style="border-bottom:#333333 2px solid"></div></th>
  </tr>
  
  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>NAME </small></th>
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>DATE </small></th>
    <th align="center" bgcolor="#ffffff"><small>DAY</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>TIME IN</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>BREAK OUT</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>BREAK IN</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>TIME OUT	</small></th>
    <th align="center" bgcolor="#ffffff"><small>LOCATION</small></th>
  </tr>  
<?php
		
			$sql1 = "SELECT * FROM bio where emp_id='$employee_id' order by date_bio asc";
			$result1 = $conn->query($sql1);	
			while($row1 = $result1->fetch_assoc()) {
				//Our YYYY-MM-DD date string.
$date = "2002-12-02";
 

				$date_na=$row1['date_bio'];
				$check_in=$row1['check_in'];
				$break_out=$row1['break_out'];
				$break_in=$row1['break_in'];
				$check_out=$row1['check_out'];
				$location=$row1['location'];
				$emp_id=$row1['emp_id'];
				$sql2 = "SELECT * FROM information where emp_id ='$emp_id'";
			$result2 = $conn->query($sql2);	
			while($row2 = $result2->fetch_assoc()) {
				$first_name=$row2['first_name'];
				$last_name=$row2['last_name'];
				$whole_name="$first_name $last_name";
				
			}
				//Convert the date string into a unix timestamp.
$unixTimestamp = strtotime($date_na);
 
//Get the day of the week using PHP's date function.
$dayOfWeek = date("l", $unixTimestamp);
 
  echo'<tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>'.$whole_name.'</small></th>
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>'.$date_na.'</small></th>
    <th align="center" bgcolor="#ffffff"><small>'.$dayOfWeek.'</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>'.$check_in.'</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>'.$break_out.'</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>'.$break_in.'</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>'.$check_out.'</small></th>
    <th align="center" bgcolor="#ffffff"><small>'.$location.'</small></th>
  </tr>';
			}
  ?>
  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th height="1" colspan="9" align="left"><div style="border-bottom:#333333 1px solid"></div></th>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="1" colspan="9" align="center"></td>
  </tr>
  
  </tbody></table>	
	
 </div>
   <br> <br>
</div>

