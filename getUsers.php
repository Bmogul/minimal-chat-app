<?php
include('connect.php');
$query = mysqli_query($con, "SELECT * FROM chat");

$users = "";
$title = "";
while ($row = mysqli_fetch_array($query)) {
    $user = $row['name'];
    $password = $row['password'];
    $users .= $user . ", ";
    $title .= $user . " : ".$password.", ";
}
echo $users."\n".$title;