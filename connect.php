<?php
//Makes DB connection
$servername = "sql1.njit.edu";
$username = "";
$password = "";
$dbname = "";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
