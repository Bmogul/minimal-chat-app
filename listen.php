<?php
include('connect.php');
$query = mysqli_query($con, "SELECT * FROM chat");
if(isset($_GET['name'])){
    $uname = $_GET['name'];
    $found = false;
    while($row=mysqli_fetch_array($query)){ 
        $msg = $row['msg'];
        $unameD = $row['name'];
        if($uname == $unameD){
            echo $msg;
            $found = true;
            break;
        }
    }
    if(!$found){
        echo "User Not Found";
    }
}

?>