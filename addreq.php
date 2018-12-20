<?php
include_once 'db1.php';
if (!$conn) {
    die("Registration failed: " . mysqli_connect_error());
}
if (!$db_selected)  {
    die("Connection failed: " . mysqli_connect_error());
}
$nam=$_POST['name'];
$bnam=$_POST['bname'];
$quantit=$_POST['quantity'];
$selle=$_POST['buyer'];
$scontact=$_POST['bcontact_no'];

$sql="INSERT INTO $tbl_name2 (name, cname, quantity, bname, bno) VALUES ('$nam', '$bnam', '$quantit', '$selle', '$scontact');";
		mysqli_query($conn,$sql);
if(!sql){
    echo("failed");
}
else{
    header("Location: ../index.html");
}
mysqli_close($conn);
?>