<?php
session_start();
$id=isset($_GET['id'])?$_GET['id']:' ';
if((isset($_REQUEST["su"]))){
    if($_SESSION["pass"]==$_REQUEST["mun"]){
        header("Location:pasch.php");
    }
	else{
	    echo "hhh";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="la">Enter the 6-digit code for verification:</label> <input type="number" name="mun" id="mun" require>
        <br><br>
        <input type="submit" name="su" id="su">
    </form>
</body>
</html>
