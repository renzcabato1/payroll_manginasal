<table align='center' width="70%" border='1' cellspacing='0'>
<tr>
<td  align='center'>
<h1 style="color:black;">HOLIDAY</h1>
</td> 
<td align='center' style='color:black;width:100px'>
<a href='index.php?page=new_holiday'/>
<img  src='views/images/icons/3.png' title='NEW HOLIDAY'  style='height:50px;'/></a><br >

</td>
</tr>
<tr>
<td border='1' colspan='2'>
<table id="customers" border='1'  >
  <tr align='center'>
    <th>Date</th>
    <th>Type of HOLIDAY</th>
   
   <th>Remarks</th>
   <th>Action</th>
  </tr>
  <?php
		include ("views/connect.php");	
		$sql = "SELECT * FROM holiday order by date asc";
		$result = $conn->query($sql);	
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
		echo"	<tr >
        <td>
		$row[date] 
        </td><td>
		$row[type_of_holiday] 
        </td><td  >
		$row[remarks] 
        </td> 
		
		<td  align='center'  >
		  <a href='index.php?page=edit_holiday&ID=".$row['id']."'  '/><img src='views/images/icons/1.png' title='EDIT' style='height:30px'/></a>
		|
		<a href='index.php?page=delete_holiday&ID=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete this item ?\");' /><img src='views/images/icons/2.png'  title='DELETE' style='height:30px'/></a></td>
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