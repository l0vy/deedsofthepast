<!DOCTYPE HTML>
<html>

<head>
<title> </title>
</head>


<body>
<table>
    <form action="pst.php" method="POST">

	 <tr><td><p>Name: <input type="text" name= "name" size="20" maxlength="40" /></p></td> </tr>
	 <tr><td><p>Email: <input type="text" name="email" size= "20" maxlength="60" /> </p></td> </tr>
	 <tr><td><p>Gender: <input type="radio" name="gender" value="M" />Male
         <input type="radio" name="gender" value="F" />Female </p> </td></tr>
	<tr><td> <p> Roll No: <input type="text" name="roll" /> </p> </td></tr>
	 <tr><td><p>Comments:<textarea name="comments" rows="3" cols="40"></textarea></p></td> </tr>
        
        <tr><td><p><input type="submit" name="submit" value="Submit" /></p> </td></tr>
    <tr> <td><p> <input type="reset" name="reset" value="Reset"></p> </td></tr>
    	 
	 </form>
    </table>
    </body>

</html>