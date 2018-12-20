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
$pric=$_POST['price'];
$selle=$_POST['seller'];
$scontact=$_POST['scontact_no'];

$sql="INSERT INTO $tbl_name3 (id, name, canme, quantity, price, sname, sno) VALUES (NULL,'$nam', '$bnam', '$quantit', '$pric', '$selle', '$scontact');";
mysqli_query($conn,$sql);
if(!sql){
    echo "failed";
}
else{
    header("Location: ../admin.php");
}
mysqli_close($conn);
?>