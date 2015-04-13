<?php

include('conn.php');

$output = "";
$sql = mysqli_query($conn, "Select * from employees");
$columns_total = mysqli_num_fields($sql);

while($row = mysqli_fetch_array($sql)) 
{
for($i = 0; $i < $columns_total; $i++) 
{  
    $output .='"'.$row["$i"].'",';

}
    
$output .="\n";


}

// Download the file

$filename = "myFil.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
echo $output;
exit;

?>