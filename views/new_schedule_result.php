<div class="listing" style="color:black;">
		<table class="listing" align='center' border='1'>
			<tbody><tr>
				<th colspan="3" class="title">
				New	Schedule 
				</th>
			</tr>
			
			<tr>
				<td class="ta-center" valign="top">
					<table class="listing" style='height:500px'>
						<tbody>
						
						<tr>
						<form method='post' action="index.php?page=submit_na" class="form-horizontal row-fluid">	
							
							<td class="value government" valign="top">
							<table class="title-value">
		<tbody>
	
		
		<tr>
			<td class="title">From:
			<input type="date" name="from" value='<?php echo"$from";?>'  readonly> </td>
	
			<td class="title" >To:<input type="date" name="to" value='<?php echo"$to";?>'    readonly> </td>
		
			<td class="title">Name:</td> 
			<td class="value"><?php
										include ("views/connect.php");	
										$sql = "SELECT * FROM information where emp_id='$name'";
										$result = $conn->query($sql);

														  
										echo "<select class='span8'  id='' name='name' onchange='document.getElementById('selected_text').value=this.options[this.selectedIndex].text' data-placement='top' required/>";
									   
									    while($row = $result->fetch_assoc()) {
										  echo	"<option value = '$name'>$row[first_name] $row[last_name]</option>";
									   }
										echo	"</select>";
										
								?></td>
		
	
		
		
	</tr>
	<tr>
		<?php
		
		
$start_date = strtotime($from);
$end_date = strtotime($to);
	
	echo"<table border=1 align='center'>
	<tr>
	<td>DATE</td>
	<td>AM START</td>
	<td>AM END</td>
	<td>PM START</td>
	<td>PM END</td>
	</tr>
	";
	
	
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
echo"<td width='180px'  style='background:white;color:red;' align='center'>".$months[(int)$renz1]."-$renz</td>";
$sql5 = "SELECT * FROM schedule where id_information='$name' and date='$royal_date'";
$result5 = $conn->query($sql5);
if ($result5->num_rows > 0) {
    while($row5 = $result5->fetch_assoc()) {
		$e = date('H:i', strtotime($row5['start_am']));
		$f = date('H:i', strtotime($row5['end_am']));
		$g = date('H:i', strtotime($row5['start_pm']));
		$h = date('H:i', strtotime($row5['end_pm']));
		echo"<td width='180px' style='background:white;color:red;' align='center'><input value='$e'  name='$a' type='time' placeholder='HH:MM'  ></td>";
		echo"<td width='180px' style='background:white;color:red;' align='center'><input value='$f' name='$b' type='time' placeholder='HH:MM'  ></td>";
		echo"<td width='180px' style='background:white;color:red;' align='center'><input value='$g' name='$c' type='time' placeholder='HH:MM'  ></td>";
		echo"<td width='180px' style='background:white;color:red;' align='center'><input  value='$h' name='$d' type='time' placeholder='HH:MM'  ></td>";

	}
	}
	else{
echo"<td width='180px' style='background:white;color:red;' align='center'><input  name='$a' type='time' placeholder='HH:MM'  ></td>";
echo"<td width='180px' style='background:white;color:red;' align='center'><input name='$b' type='time' placeholder='HH:MM'  ></td>";
echo"<td width='180px' style='background:white;color:red;' align='center'><input name='$c' type='time' placeholder='HH:MM'  ></td>";
echo"<td width='180px' style='background:white;color:red;' align='center'><input name='$d' type='time' placeholder='HH:MM'  ></td>";

	}


echo "</tr>";


}
echo'<tr>	<td class="value" colspan="5">	<button type="submit" class="btn">Submit Form</button>
											
		</td></tr>';
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