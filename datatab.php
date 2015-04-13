<html>
<head>
  <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>

    
</head>

<body>
  
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Country Code</th>
            <th>District</th>
            <th>Population</th>
            
        </tr>
    </thead>
 
    <tbody>
   <?php

    include('conn.php');
    
$query= mysqli_query($conn,"SELECT * FROM city");



while($row= mysqli_fetch_array($query))

{ 
    
 echo"<tr><td>" .$row['ID'] . "</td>" ."<td>" .$row['Name'] . "</td>" . "<td>" .$row['CountryCode'] . "</td>" . "<td>" .$row['District'] . "</td>" ."<td>" .$row['Population'] . "</td> </tr>";
    

}

?>  
        
    </tbody>
</table>
    <button>Print me</button>
    
    <script>
  
$(document).ready( function () {
    $('#example').DataTable();
} );
    
     
        function printData()                           //Button to Print (via. Jsfiddle)
{
   var divToPrint=document.getElementById("example");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})
      
</script>
    
    
    
</body>
</html>