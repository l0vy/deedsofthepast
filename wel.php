<?php

$conn = mysql_connect('localhost','root','');

if (!mysql_select_db('new',$conn)) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$qwe= " SELECT * FROM `lovy` ";

$sed=mysql_query($qwe);
$values= mysql_fetch_array($sed);
var_dump($values);

//$sql= "UPDATE lovy SET 

?>