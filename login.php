<?php
require "connection.php";
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from emp_data where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn, $mysql_qry);
if (mysqli_num_rows($result) > 0) {
	echo "Login Successful";
}
else
	echo "Login Unsuccessful";
?>