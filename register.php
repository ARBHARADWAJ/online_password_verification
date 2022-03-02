<?php
$con=mysqli_connect("localhost","root","","test");
if(!$con){
	echo "Eroor at databadw connection";
}
$fnam=$_REQUEST["fname"];
$lnam=$_REQUEST["lname"];
$ema=$_REQUEST["ea"];
$unam=$_REQUEST["uname"];
$pas=$_REQUEST["pass"];
$ge=$_REQUEST["gen"];
$ph=$_REQUEST["phno"];
$in=$_REQUEST["iname"];
$ye=$_REQUEST["year"];
$se=$_REQUEST["sem"];
$squ=" insert into register_php value('$fnam','$lnam','$unam','$pas','$ge','$ph','$in','$ye','$se','$ema');";
if(mysqli_query($con,$squ)){
	echo "<script language='javascript'>alert('Register Successful :)') </script>";
	echo "<a href='index.html' >Click here to go back to main page</a>";

}

else{
echo "<script language='javascript'>alert('Error connection')</script>";
}



?>