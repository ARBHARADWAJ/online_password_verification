<?php
if(isset($_REQUEST["sno"])){
session_destroy();
session_unset();
header("Location:index.html");
}
	
	

?>
<html>
<h1>JAI SHREE RAM</h1>
<form>
<input type="submit" value="signout" id="sno" name="sno">

</form>


</html>