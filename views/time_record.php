
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
          <td  height="30" align="left" bgcolor="#FFFFFF"><strong>FROM:</strong></td>
          <td align="left" bgcolor="#FFFFFF">
            
            <input name="datefrom" type="date" style="border:solid 1px #333333; text-align:center" required></td>
			<td> &nbsp;<strong> TO:</strong>&nbsp;</td>
			<td>
            <input name="dateto" width='100px' type="date"   style="border:solid 1px #333333; text-align:center;" required></td>
       
          <td align="left"  bgcolor="#FFFFFF"><strong>EMPLOYEE: </strong></td>
          <td align="left"  bgcolor="#FFFFFF">
		  <?php
			include ("views/connect.php");	
			$sql = "SELECT * FROM information where account_type!='ADMIN' order by last_name asc";
			$result = $conn->query($sql);	
			echo'<select name="employee_id"  style="border:solid 1px #333333;" required>';		
			echo"<option value=''>EMPLOYEE</option>";
       	
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
</tbody>
</form></table>

<div id="listing" style="width:1200px; margin:auto; border:#333333 solid 1px; margin-top:5px;  border-bottom-width:2px; border-right-width:2px; padding:5px; background-color:#FFFFFF;  ">	

<table style="color:black"  width="100%" border="1" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="40" colspan="9" align="center" bgcolor="#FFFFFF" style="font-size:16px"><strong>TIME RECORD </strong></td>
  </tr>
  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th height="1" colspan="9" align="left"><div style="border-bottom:#333333 2px solid"></div></th>
  </tr>
  
  <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small> </small></th>
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small> </small></th>
    <th align="center" bgcolor="#ffffff"><small></small></th>
    <th height="1" align="center"  colspan='2' bgcolor="#ffffff">&nbsp;<small>SCHEDULE</small></th>
    <th height="1" align="center"  colspan='2' bgcolor="#ffffff">&nbsp;<small>BIO</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>LATE</small></th>
    <th height="1" align="center"  colspan='1' rowspan='2'  bgcolor="#ffffff">&nbsp;<small>OT</small></th>
    
 </tr>
 <tr bgcolor="#ffffff" valign="bottom" style="color:#333333 ">
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>NAME </small></th>
    <th align="center" valign="middle" bgcolor="#ffffff">&nbsp;<small>DATE </small></th>
    <th align="center" bgcolor="#ffffff"><small>DAY</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>AM</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>PM</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>AM</small></th>
    <th height="1" align="center" bgcolor="#ffffff">&nbsp;<small>PM	</small></th>
 </tr>  
  
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

	