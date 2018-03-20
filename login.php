<?php
require "connection.php";
$myname = "Deon";
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from employee_data where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn, $mysql_qry);
if(mysqli_num_rows($result) > 0){
	
	echo "Login success";
}
else{yex5tybui
	echo $result;
}
?>
