<?php
            require_once('connection.php');  
                $dbobj=new dbconnect();
	            $con=$dbobj->getcon();
	   
			//Select Query to fetch all the records in a table
			$query = "SELECT * FROM users;";
		
			$exec = mysqli_query($con,$query);

			if($exec){
				$nor =  mysqli_num_rows($exec);//Get the number of matching records.
				if($nor>0)
				{	
					echo "<table id='tableUsersRole' border=1 width=100%>
						<tr>
							<th height=50px >User ID</th>   
							<th>NIC</th>
							<th>Group</th>
                            <th>Organizing Role</th>
                            
							
							
						</tr>";
					while($record = mysqli_fetch_array($exec))
					{

						echo "<tr>
							<td>".$record["userID"]."</td>
							<td>".$record["nic"]."</td>
							<td>".$record["userType"]."</td>
                            <td>".$record["organizingRole"]."</td>
                            
							
							
						</tr>";
					}
					echo "</table>";
				}
				else
				{
					echo "User DB Empty! ".mysqli_error($con);
				}
			}
			else{
				echo "User DB could not be Found! ".mysqli_error($con);
			}
			
			$dbobj->close();
		?>