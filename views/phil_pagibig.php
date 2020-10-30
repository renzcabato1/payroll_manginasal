<table align='center' width="70%" border='1' cellspacing='0'>
<tr>
<td  align='center'>
<h1 style="color:black;">PHIL HEALTH</h1>
</td> 

</tr>
<tr>
<td border='1' colspan='2'>
<table id="customers" border='1'  >
  <tr align='center'>
    <th>CONTRIBUTION</th>
   
   <th>ACTION</th>
  </tr>
  <?php
		include ("views/connect.php");	
		$sql = "SELECT * FROM phil_health order by id asc";
		$result = $conn->query($sql);	
		
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
		echo"	<tr >
        
		<td  >
		$row[percent] %
        </td> 
		
		<td  align='center'  >
		  <a href='index.php?page=edit_phil_health&ID=".$row['id']."'  '/><img src='views/images/icons/1.png' title='EDIT' style='height:30px'/></a>
		   </td>
		</tr>";
			
		}
		}
		else
		{
		echo"<tr>
		<td colspan='9' align='center' >
		NO RECORD FOUND!
		</td>
		</tr>";
		}
		
	
		?>
  
  
</table>
</td>
 	
</tr><tr>
<td  align='center'>
<h1 style="color:black;">PAG-IBIG</h1>
</td> 

</tr>
<tr>
<td border='1' colspan='2'>
<table id="customers" border='1'  >
  <tr align='center'>
    <th>CONTRIBUTION</th>
   
   <th>ACTION</th>
  </tr>
  <?php
		include ("views/connect.php");	
		$sql = "SELECT * FROM pag_ibig_cont order by id asc";
		$result = $conn->query($sql);	
		
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
		echo"	<tr >
        
		<td  >
		$row[percent] %
        </td> 
		
		<td  align='center'  >
		  <a href='index.php?page=edit_pagibig&ID=".$row['id']."'  '/><img src='views/images/icons/1.png' title='EDIT' style='height:30px'/></a>
		   </td>
		</tr>";
			
		}
		}
		else
		{
		echo"<tr>
		<td colspan='9' align='center' >
		NO RECORD FOUND!
		</td>
		</tr>";
		}
		
	
		?>
  
  
</table>
</td>
 	
</tr>

</table>