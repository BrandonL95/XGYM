<?php
require "connection.php";
$myname = "Deon";
$ran = mysql_query("SELECT name FROM employee_data WHERE name = '$myname'");
$user_name = $_POST["username"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from employee_data where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn, $mysql_qry);
if(mysqli_num_rows($result) > 0){
	
	echo "Login success";
}
else{
	$row = mysqli_fetch_assoc($result);
	$name =$row["name"];
	echo $myname;
}
?>
