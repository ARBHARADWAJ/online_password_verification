<?php
session_start();

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
        <label for="c">New Password: </label><input type="number" name="pa1" id="pa1" require><br><br>
        <label for="c">Re-type new Password: </label><input  type="number" name="pa2" id="pa2" require><br><br>
        <input type="submit" name="s" id="s">   
</form>
<?php
if(isset($_REQUEST["s"])){
if($_REQUEST["pa1"]==$_REQUEST["pa2"]){
    $con=mysqli_connect("localhost","root","","test");
    if(!$con){
        echo "Eroor at databadw connection";
    }
    else{
        $a=$_REQUEST['pa1'];
        $b=$_SESSION['email'];
        $sq="UPDATE register_php SET Password='$a' where Email='$b' ";
        if(mysqli_query($con,$sq)){
            echo "password changed";
            header("Location:index.html");

        }
    }

}
else{
    echo "check the password";
}
}
?>
</body>
</html>

