
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
			$sql = "SELECT DISTINCT from_payroll,to_payroll FROM payroll where done=1 order by id";
			$result = $conn->query($sql);	
			echo'<select name="date"  style="border:solid 1px #333333;" required>';		
			echo"<option value=''>DATE</option>";
       	
			while($row = $result->fetch_assoc()) {
				
			
          echo"<option value='$row[from_payroll]'>$row[from_payroll] to $row[to_payroll]</option>";
       
		  }
		   echo'</select>';
		  ?>
		  </td>
		  <td align="left"  bgcolor="#FFFFFF"><strong>REPORT: </strong></td>
          <td align="left"  bgcolor="#FFFFFF">
		  <select name='report' required>
		  <option value=''>REPORT</option>
		  <option value='PAYROLL'>PAYROLL</option>
		  <option value='SALARIES AND WAGES'>SALARIES AND WAGES</option>
		  </select>
		  </td>
		  <td>
            <input style="width:70px;height:30px;" type="submit"  value="SEARCH"> <br >
		  </td>
        </tr>
</tbody>
</form></table>
   <br> <br>
</div>

	