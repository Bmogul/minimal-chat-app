<?php
include('connect.php');
$query = mysqli_query($con, "SELECT * FROM chat");
if(isset($_GET['name']) && isset($_GET['password'])){
    // echo 'name is '. $_GET['name'];
    $match = false;
    $msg = $_GET['msg'];
    $uname = $_GET['name'];
    $psswd = $_GET['password'];
    while($row=mysqli_fetch_array($query)){ 
        $unameD = $row["name"];
        $password = $row["password"];
        // $msg = $row["msg"];
        if($unameD == $uname && $password == $psswd){
            // echo 'db: '.$uname;
            $match = true;
            break;
        }
    }
    if($match){

        $update = "UPDATE `chat` SET `msg`=\"$msg\" WHERE `name`=\"$uname\" and `password`=\"$psswd\";";
        if(mysqli_query($con, $update)){
            echo "UPDATED";
        }else{
            echo "ERROR: " . mysqli_error($con);
        }
    }else{
        echo 'INVALID';
    }
}else{
    echo 'INVALID';
}
?>