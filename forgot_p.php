<?php
session_start();
function chcek($word){
    $con=mysqli_connect("localhost","root","","test");
    if(!$con){
        echo "Eroor at database connection";
    }
    $r="select Email from register_php";
    $res=mysqli_query($con,$r);
    if(mysqli_num_rows($res)>0){
        while($a=mysqli_fetch_assoc($res)){
            if($a["Email"]==$word){
                return True;
            }
        }
    }
    return False;
}

if(isset($_REQUEST["submit"])){
    if(chcek($_REQUEST["mail"])){     
        $_SESSION["email"]=$_REQUEST["mail"];
        $mm=$_REQUEST["mail"];
        $a=rand(100000,999999);
		$_SESSION["pass"]=$a;
        if(mail($mm,"Emailverification",$a,"From:karthikayabharadwaj@gmail.com")){
            header("Location:verifi.php");
        }
        else{
            echo "404:error";
        }
    	}
	else{
		header("Location:Nr.html");
	}
}
?>
<html>
<head></head>
<body>
<form method="post" action="">
    <label for="name">Enter the mail for the verification:</label><input type="mail"name="mail" id="mail" placeholder="example@gmail.com" required>
    <br><br>
    <input type="submit" name="submit" id="submit">


</form>

</body>
</html>
