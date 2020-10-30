<form method='post' class="form-horizontal row-fluid">	
<table width="80%" border='1' cellspacing='0' align='center' >
<tr>
<td  align='center'>
		<h1 style="color:black;"><input type="text" style="width:500px" id="myInput"  name = 'search' placeholder='Search Anything...' required>
		</h1>
		</td> 
		<td align='center' style='color:black;width:10px'>
		<a href='index.php?page=new_employee'/><img src='views/images/icons/3.jpg' title='NEW EMPLOYEE'  style='height:50px;'/></a><br >NEW EMPLOYEE

		</td>
		</tr>
		<tr>
		<td width="50%" border='1' colspan='2'>
		<table id="customers" border='1' >
		<tr align='center' class="header">
    
		<th>Name</th>
		<th>Hire Class</th>
		<th>Type</th>
		<th>Employee ID</th>
		<th>ACTION</th>
		</tr>
		<?php
		include ("views/connect.php");	

		
		$sql = "SELECT * FROM information where account_type!='ADMIN' and (first_name like '%$search%' or middle_name like '%$search%' or last_name like '%$search%' or type like '%$search%' or emp_id like '%$search%' or hire_class like '%$search%' ) order by last_name asc";
		$result = $conn->query($sql);	
		
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$activate=$row['activate'];
		echo"	<tr >
        
		 
		<td >
		$row[first_name]
		$row[last_name]
        </td>
		<td   >
		$row[hire_class]
        </td>
		<td>
		$row[type]
        </td><td>
		$row[emp_id]
        </td>";
		if($activate==0){
		echo"
		<td  align='center'  >
		<a href='index.php?page=view&ID=".$row['id']."'  '/><img src='views/images/icons/4.png' title='VIEW' style='height:30px'/></a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='index.php?page=edit&ID=".$row['id']."'  '/><img src='views/images/icons/1.png' title='EDIT' style='height:30px'/></a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='index.php?page=deactivate&ID=".$row['id']." 'onclick='return confirm(\"Are you sure you want to deactivate ?\");'><img src='views/images/icons/2.png' title='DEACTIVATE' style='height:30px'/></a>	   </td>
		</tr>";
		}
		else{
			echo"
		<td  align='center'  >
		
		<a href='index.php?page=activate&ID=".$row['id']."'onclick='return confirm(\"Are you sure you want to deactivate ?\");'><img src='views/images/icons/10.png' title='ACTIVATE' style='height:30px'/></a></td>
		</tr>";
			
		}
	
		}
		
		}
		else
		{
			echo"<tr>
		<td colspan='9' align='center'>
		NO RECORD FOUND!
		</td>
		</tr>";
			
		}
		
	
		?>
  
  
</table>
</td>
 	</tr>


</table>
</form>
