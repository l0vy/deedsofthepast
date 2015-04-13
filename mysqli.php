<?php
$conn= mysqli_connect('localhost','root','');
mysqli_select_db($conn,'new');
$qr= mysqli_query($conn,"SELECT * FROM lovy");
$arr=mysqli_fetch_array($qr);

print_r($arr);
?>