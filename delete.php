<?php
session_start();
include_once 'db1.php';
if (!$conn) {
    die("Registration failed: " . mysqli_connect_error());
}
if (!$db_selected)  {
    die("Connection failed: " . mysqli_connect_error());
}
$del=$_SESSION['dname'];

$sql="Delete from $tbl_name2 where name = '$del';";
		mysqli_query($conn,$sql);
if(!sql){
    echo("failed");
}
else{
    header("Location: ../admin.php");
}
mysqli_close($conn);
?>