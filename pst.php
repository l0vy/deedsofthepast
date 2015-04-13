<?php

/*
$nam= $_REQUEST['name'];
$email= $_REQUEST['email'];

echo $nam;
echo $email;*/
$conn= mysql_connect('localhost','root','');

mysql_select_db('new',$conn);
$sql= 'INSERT INTO `lovy` SET `First Name`= "'.$_REQUEST['name'].'", `Email`="' .$_REQUEST['email'].'",`Roll No`="'. $_REQUEST['roll'].'"';
$abc= mysql_query($sql);


?>