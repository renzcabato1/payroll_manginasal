<div class="listing" style="color:black;">
		<table class="listing" align='center' border='1'>
			<tbody><tr>
				<th colspan="3" class="title">
					Schedule 
				</th>
			</tr>
			
			<tr>
				<td class="ta-center" valign="top">
					<table class="listing" style='height:500px'>
						<tbody>
						
						<tr>
						<form method='post' class="form-horizontal row-fluid">	
							
							<td class="value government" valign="top">
							<table class="title-value">
		<tbody>
	
		
		<tr>
			<td class="title">From:
			<input type="date" name="from"   required> </td>
	
			<td class="title" >To:<input type="date" name="to"  required> </td>
		
			<td class="title">Name:</td> 
			<td class="value"><?php
										include ("views/connect.php");	
										$id_employee = $_SESSION['user_id'];
										

										$sql = "SELECT * FROM information where id='$id_employee' ORDER BY first_name ASC";
										$result = $conn->query($sql);

														  
										echo "<select class='span8'  id='' name='name' onchange='document.getElementById('selected_text').value=this.options[this.selectedIndex].text' data-placement='top' required/>";
									  
									    while($row = $result->fetch_assoc()) {
										  echo	"<option value = '$row[emp_id]'>$row[first_name] $row[last_name]</option>";
									   }
										echo	"</select>";
										
								?></td>
		
	
		<td class="value">	<button type="submit" class="btn">Submit Form</button>
											
		</td>
		
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