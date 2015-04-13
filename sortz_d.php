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
$a=$_GET['colm_name'];



switch ($a) {
    case "snod":
    
                 $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Sr. No.` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    

}
      
        break;
    
    case "fnamed":
        $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `First name` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    

}
        break;
    case "lnamed":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `last Name` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    

}
break;
case "aged":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Age` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }
    
    break;
 case "genderd":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Gender` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      } break;
    
    case "addd":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Address1` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }
    
    break;
    case "add":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Address2` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }
    break;
     case "cityd":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `City` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }
    break;
     case "stated":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `State` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
    
    
    
                      }break;
    
    
     case "zipd":
        
         $b=mysqli_query($conn,"SELECT * FROM `employees` ORDER BY `Zip` ASC");
    
                      while($row= mysqli_fetch_array($b))

{ 
    
 echo"<tr><td>" .$row['Sr. No.'] . "</td>" ."<td>" .$row['First Name'] . "</td>" . "<td>" .$row['last Name'] . "</td>" . "<td>" .$row['Age'] . "</td>" ."<td>" .$row['Gender'] . "</td> <td>" .$row['Address1'] ."</td><td>" . $row['Address2'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] . "</td> <td>" . $row['Zip'] . "</td></tr>";
    
                      }
break;




}








    ?> 
      
</table>