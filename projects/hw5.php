<html>
<body>

Input <br>
<?php 
$username = $_GET["userName"]; 
$userzip = $_GET["userZip"];
switch ($username) {
	case NULL:
		echo"User Name must be entered";
		break;
		default:
			echo "Name: $username";
		}
?>
<br>
<?php 
$useraddress = $_GET["userAddress"];
switch ($useraddress) {
	case NULL:
		echo"Address must be entered";
		break;
		default:
			echo "Address: $useraddress";
		}
?>
<br>
<?php
$userzip = $_GET["userZip"];
		if (is_numeric($userzip)) {
			echo "Zipcode: $userzip";
		} else {
			echo "Zipcode must be numeric";
}
?>
</body>
</html> 
