

<?php
//processing form values


if($_SERVER['REQUEST_METHOD'] =='POST')
 
{
    
$name= $_POST['name'];
$email= $_POST['email'];
$roll= $_POST['roll'];
$comments= $_POST['comments'];

if(isset($name,$email,$roll,$comments))
{

include('conn.php');
}
else{
    
    
echo"Please fill all the values of the form";

}



}

?>