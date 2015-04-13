<?php

$conn= mysql_connect('localhost','root','', 'new');

mysql_select_db('new',$conn) or die("Unable to select database");

$sql= " SELECT * FROM `lovy` ";

$abc= mysql_query($sql);
$val= mysql_fetch_array($abc);
var_dump($val);


?>