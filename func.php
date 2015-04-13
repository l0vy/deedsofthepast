<?php

$name = "Victor"; // Variable can't be used inside any function
function my_car($first,$second)
	{
	  echo "My first car was a ".$first." and my second car was a ".$second;
	  //$name ="asdaf" // local variable
	  /*$_REUEST   //Super  
	  $_POST	 //global
	  $_GET	     //variables; can be used anywhere.
	   */

	}
my_car("Dodge","Mercedes");

echo $name;

?>