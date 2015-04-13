<Table border='8' id="mytable">
    
    
  <th><a href="sortz_d.php?colm_name=snod">Sr.No.</a></th>
<th><a href="sortz_d.php?colm_name=fnamed">First Name</a></th>
<th><a href="sortz_d.php?colm_name=lnamed">Last Name</a></th>
<th><a href="sortz_d.php?colm_name=aged">Age</a></th>
<th><a href="sortz_d.php?colm_name=genderd">Gender</a></th>
<th><a href="sortz_d.php?colm_name=addd">Address1</a></th>
<th><a href="sortz_d.php?colm_name=add">Address2</a></th>
<th><a href="sortz_d.php?colm_name=cityd">City</a></th>
<th><a href="sortz_d.php?colm_name=stated">State</a></th>
<th><a href="sortz_d.php?colm_name=zipd">Zip</a></th>
<?php

include('conn.php');
$a=$_GET['colm_name'];



switch ($a) {
    case "sno":
    
                 $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Sr. No.` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    

}
      
        break;
    
    case "fname":
        $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `First name` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    

}
        break;
    case "lname":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `last Name` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    

}
break;
case "age":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Age` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }
    
    break;
 case "gender":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Gender` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      } break;
    
    case "ad":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Address1` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }
    
    break;
    case "add":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Address2` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }
    break;
     case "city":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `City` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }
    break;
     case "state":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `State` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }break;
    
    
     case "zip":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Zip` DESC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
                      }
break;




}








    ?> 
      
</table>