<table align='center' width="70%" border='1' cellspacing='0'>
<tr>
<td  align='center'>
<h1 style="color:black;">SSS TABLE LIST</h1>
</td> 
<td align='center' style='color:black;width:100px'>
<a href='index.php?page=new_sss'/>
<img  src='views/images/icons/3.png' title='NEW EMPLOYEE'  style='height:50px;'/></a><br >

</td>
</tr>
<tr>
<td border='1' colspan='2'>
<table id="customers" border='1'  >
  <tr align='center'>
    <th>FROM</th>
    <th>TO</th>
    <th>AMOUNT</th>
   <th >ACTION</th>
  </tr>
  <?php
		

		include ("views/connect.php");	
		$sql = "SELECT * FROM sss_cont order by start asc";
		$result = $conn->query($sql);	
		
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$start=$row['start'];
			$start=number_format($start,2);
			$end=$row['end'];
			$end=number_format($end,2);
			$total_contribution=$row['total_contribution'];
			$total_contribution=number_format($total_contribution,2);
			
		echo"	<tr >
        <td  >
		&#8369; $start
        </td> 
		<td >
		&#8369; $end
        </td> 
		<td   >
		&#8369; $total_contribution
        </td>
		
		<td  align='center'  >
		  <a href='index.php?page=edit_sss&ID=".$row['id']."'  '/><img src='views/images/icons/1.png' title='EDIT' style='height:30px'/></a>
		|
		<a href='index.php?page=delete_sss&ID=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete this item ?\");' /><img src='views/images/icons/2.png' title='DELETE' style='height:30px'/></a>	   </td>
		</tr>";
			
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