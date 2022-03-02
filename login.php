<?php
$con=mysqli_connect("localhost","root","","test");
if(!$con){
	echo "Eroor at databadw connection";
}
/*if(isset($_REQUEST["ue"])){ 

$unam=$_REQUEST['una'];
$pas=$_REQUEST['pa'];
$squ="select Username,Password from register_php;";
$res=mysqli_query($con,$squ);
$case=0;
if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			if($row["Username"]==$unam && $row['Password']==$pas){
				header("Location:done.php");
		}
		else{
	echo "kindly get register\n";
	}
}}
else{
	echo "404 :error in page";
}
}*/
if(isset($_REQUEST['ue'])){
	$unam=$_REQUEST['ue'];
	$pas=$_REQUEST['pa'];
	$squ="select Email,Password from register_php;";
	$res=mysqli_query($con,$squ);
	$case=0;
	if(mysqli_num_rows($res)>0){
			while($row=mysqli_fetch_assoc($res)){
				if($row["Email"]==$unam && $row['Password']==$pas){
					header("Location:done.php");
			}
			else{
		echo "kindly get register\n";
		}
	}}
	else{
		echo "404 :error in page";
	}
}


//echo "jai shree ram";
?>