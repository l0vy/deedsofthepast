
<html>

<head>
</head>

<body>
<h1> Hi this is my first php file</h1>

code output: <br/><br/>
<!-- Comments -->

<?php
/*
(indexed array)
VALUES		KEY
John		 0
Juan		 1
Jamie		 2
Chris 		 3
Joe			 4
*/

$names = array("John","Joe","Juan","Jamie","Chris");

echo $names[2].",".$names[4];

foreach ($names as $key => $value)
{
	echo "the name is ".$value."<br/>";
echo $key."".$value."<br/>";
}
$name = "lovy";
$string = "John";
$name .= $string;

/* Associative Array

VALUES		KEY
John		 A
Juan		 B
Jamie		 C
Chris 		 D
Joe			 E
*/

$namez = array("A"=>"John","B"=>"Juan");
echo $namez["A"];

define('USERNAME', 'lOVY kUTAULA');
echo "hi my name is ".$name."!";

$num = 7830.854;
$result = round($num);
echo $result;
echo USERNAME;

# Comment 1
# Comment 2

// Comment 3
// Comment 4

/* Comment 5 COntinued commentong
as long as i want 
fdvfdj*
dksf
dfnsdjn
*/

//Multi dimensional arrays

$names = array("Victor", "alex", "john");
$cities = array("Miami", "Madrid", "Paris");

$data = array("names" => $names, "cities" => $cities);
echo $data["cities"][1];
$data2 = array("data" => $data);


	if(3 == 4){
	
	    //do something here

	   echo"it works!";
} else {

echo "Condition is not true";

}
?>
</body>
</html>