<?php
require "connection.php";
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from employee11 where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn, $mysql_qry);
if(mysqli_num_rows($result) > 0){
	
	echo "Login success";
}
else{
	$row = mysqli_fetch_assoc($result);
	$name =$row["name"];
	echo "Login not successfullll ". $name;
}
?>
