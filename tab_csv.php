<Table border='8' id="mytable">

<th><a href="sortz.php?colm_name=sno">Sr.No.</a></th>
<th><a href="sortz.php?colm_name=fname">First Name</a></th>
<th><a href="sortz.php?colm_name=lname">Last Name</a></th>
<th><a href="sortz.php?colm_name=age">Age</a></th>
<th><a href="sortz.php?colm_name=gender">Gender</a></th>
<th><a href="sortz.php?colm_name=ad">Address1</a></th>
<th><a href="sortz.php?colm_name=add">Address2</a></th>
<th><a href="sortz.php?colm_name=city">City</a></th>
<th><a href="sortz.php?colm_name=state">State</a></th>
<th><a href="sortz.php?colm_name=zip">Zip</a></th>
<?php
include('conn.php');

Echo"Report";
$query= mysqli_query($conn,"SELECT * FROM employees");



while($row= mysqli_fetch_array($query))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    

}

?>
    

); 
      
</table>
<a href="export.php"> Export the database report </a>