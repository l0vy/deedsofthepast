<?php

$myfile = fopen("name.txt" , "r") or die(" Unable to open the file! File not found  ! ");

echo fread($myfile,filesize("name.txt"));

fclose($myfile);

?>