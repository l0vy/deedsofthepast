<?php

$conn= mysql_connect('localhost','root','');

mysql_select_db('new',$conn);

$abc= 'SELECT * FROM `lovy` ';
$a= mysql_query($abc);

while($row = mysql_fetch_array($a))
{
	echo $row['First Name']. " - ". $row['Email'];
	echo "<br />";

    

    
}

?>