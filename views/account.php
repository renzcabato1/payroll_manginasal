
		<table class='table'  width='100%' height='550px' bgcolor="#093c71"  >
		<tr >
		<td>
		<div style='width:100%; height:500px; overflow:auto;'>
			<form method='post'>
		<table style='border: 0; text-align:left;' width='100%'>
		<tr style='background-color: rgba(0, 0, 0, 0.5);'>
		<td>
		<div style='width:650px; height:450px; overflow:auto;'>
		<table   cellspacing='0' border='1' width='100%' >
		<tr style='background:#093c71;'>
        <td  align='center'  >
        ID
        </td> 
		<td  align='center'  >
		NAME
        </td>
		<td  align='center'  >
        USERNAME
        </td>
		<td  align='center'  >
        PASSWORD
        </td><td  align='center'  >
        DEPARTMENT
        </td><td  align='center'  >
        SECTION
        </td><td  align='center'  >
		TYPE
        </td>
		</tr>
		<?php
		include ("views/connect.php");	 
		$sql = "SELECT * FROM account";
		$result = $conn->query($sql);	
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo"<tr>
		<td align='center'>".$row["id"]."</td>
		<td align='center'>".$row["name"]."</td>
		<td align='center'>".$row["username"]."</td>
		<td align='center'>*********</td>
		
		<td align='center'>".$row["department"]."</td>
		<td align='center'>".$row["section"]."</td>
		<td align='center'>".$row["type"]."</td>
		</tr>
		";
			}
		}
		?>
		
		</table>
		</div>
		</td><td>
		<div style='width:650px; height:450px; overflow:auto;'>
	
		<form method='post'><table   cellspacing='0' border='1' width='100%' style='padding:30px'>
		<tr>
		<td colspan='3' align = 'center' >
		<h1>
		NEW ACCOUNT
		</h1>
		</td > 
		</tr>
		<tr class='renz' style='background:#093c71;'>
        <td colspan='3' align = 'center' >
        <input  style='width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box' type='text'  name='name' data-placement='top' autofocus='autofocus' title='name' placeholder='NAME' required/>
        </td > 
		</tr>
		<tr class='renz' style='background:#093c71;'>
        <td colspan='3' align = 'center' >
        <input  style='width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box' type='text'  name='username' data-placement='top' autofocus='autofocus' title='name' placeholder='USERNAME' required/>
        </td > 
		</tr>
		<tr class='renz' style='background:#093c71;'>
        <td colspan='3' align = 'center' >
        <input  style='width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box' type='password'  name='password' data-placement='top' autofocus='autofocus' title='name' placeholder='PASSWORD' required/>
        </td > 
		</tr>
		<tr class='renz' style='background:#093c71;'>
		<td>
		  <input  style='width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box' type='text'  name='dept' data-placement='top' autofocus='autofocus' title='name' placeholder='DEPARTMENT' required/>
        
			</td> 
		</tr>
		<tr class='renz' style='background:#093c71;'>
		<td>
		  <input  style='width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box' type='text'  name='section' data-placement='top' autofocus='autofocus' title='name' placeholder='SECTION' >
        
			</td> 
		</tr>
		<tr class='renz' style='background:#093c71;'>
        <td colspan='3' align = 'center' >
         <select style='width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box' id='' name='type' autofocus='autofocus' onchange='document.getElementById('selected_text').value=this.options[this.selectedIndex].text' data-placement='top' required/>
      <option value=''>TYPE</option>
      <option value='ADMIN'>ADMIN</option>
      <option value='USER'>USER</option>
  
      
	  </select>
	  </td > 
		</tr>
		
		
		<tr>
		<td colspan='3' align = 'center' >
        <input  style=' width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;'type="submit" value="Submit"/>
        </td > 
		</tr>
		</form>
</table>
</div>
</td>
</tr>
</body>