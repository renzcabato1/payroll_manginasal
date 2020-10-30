<div class="listing" style="color:black;">
		<table class="listing" align='center' border='1'>
			<tbody><tr>
				<th colspan="3" class="title">
					Schedule 
				</th>
			</tr>
			
			<tr>
				<td class="ta-center" valign="top">
					<table class="listing" style='height:500px' border='1'>
						<tbody>
						
						<tr>
						<form method='post' class="form-horizontal row-fluid">	
							
							<td class="value government" valign="top">
							<table class="title-value">
		<tbody>
	
		
		<tr>
			<td class="title">From:
			<input type="date" name="from" value='<?php echo"$from";?>'  required> </td>
	
			<td class="title" >To:<input type="date" name="to" value='<?php echo"$to";?>' required> </td>
		
			<td class="title">Name:</td> 
			<td class="value"><?php
										include ("views/connect.php");	

										$sql = "SELECT * FROM information where account_type!='ADMIN' ORDER BY first_name ASC";
										$result = $conn->query($sql);

														  
										echo "<select class='span8'  id='' name='name' onchange='document.getElementById('selected_text').value=this.options[this.selectedIndex].text' data-placement='top' required/>";
									    echo "<option value='ALL'>All</option>";
									    while($row = $result->fetch_assoc()) {
										  echo	"<option value = '$row[emp_id]'>$row[first_name] $row[last_name]</option>";
									   }
										echo	"</select>";
										
								?></td>
		
	
		<td class="value">	<button type="submit" class="btn">Submit Form</button>
											
		</td>
		
	</tr>

	<tr>
		<?php
	
$start_date = strtotime($from);
$end_date = strtotime($to);
	
	echo"<table border=1>
	<tr>
	";
	
	echo"<td width='200px'>DATE
	</td>";
	for ($i=$start_date;$i<=$end_date;$i+=86400)
{
				$renz1=date('m',$i); 
				$renz=date('d',$i); 
				$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');

echo"<td width='180px' colspan='2' style='background:white;color:red;' align='center'>".$months[(int)$renz1]."-$renz</td>";

}

	
	
	echo"</tr>";
	echo"<tr ><td width='500px'>NAME
	</td>";
	for ($i=$start_date;$i<=$end_date;$i+=86400)
{
				$renz1=date('m',$i); 
				$renz=date('d',$i); 
				$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');

echo"<td width='200px'  align='center'>AM</td><td width='200px'  align='center'>PM</td>";
	$renz1=date('m',$i); 
	$renz=date('d',$i); 
	$year=date('Y',$i); 
	$royal_date="$year$renz1$renz";
}

echo"</tr>";
$sql5 = "SELECT * FROM information where account_type!='ADMIN' ORDER BY first_name ASC";
$result5 = $conn->query($sql5);
    while($row5 = $result5->fetch_assoc()) {
		$emp_id=$row5['emp_id'];
	echo"<tr>
	<td>$row5[first_name] $row5[last_name] </td>";
	
for ($i=$start_date;$i<=$end_date;$i+=86400)
{
				$renz1=date('m',$i); 
				$renz=date('d',$i); 
				$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');


	$renz1=date('m',$i); 
	$renz=date('d',$i); 
	$year=date('Y',$i); 
	$royal_date="$year$renz1$renz";
	$sql6 = "SELECT * FROM schedule where id_information='$emp_id' and date='$royal_date'";
	$result6 = $conn->query($sql6);
	if ($result6->num_rows > 0) {
	while($row6 = $result6->fetch_assoc()) {
		$e = date('H:i', strtotime($row6['start_am']));
		$f = date('H:i', strtotime($row6['end_am']));
		$g = date('H:i', strtotime($row6['start_pm']));
		$h = date('H:i', strtotime($row6['end_pm']));
	echo"<td width='200px'  align='center'>$e - $f</td><td width='200px'  align='center'>$g - $h</td>";
	}
	}
	else
	{
		echo"<td width='200px'  align='center' colspan='2'>REST DAY</td>";
	
	}
}
}
echo"</tr>";

							

	echo"</table>";
	?>
	
	
	</tr>
		
		
			</tbody>
			</table>
						</td>
						
						</form>
						</tr>
						
					</tbody>
					</table>
				</td>
			</tr>
		</tbody>
		</table>
	</div>