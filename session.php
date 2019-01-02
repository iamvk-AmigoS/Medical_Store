<?php
    session_start();
    include_once 'db1.php';
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    if (!$db_selected)  {
        die("Connection Failed: " . mysqli_connect_error());
    }
    $user_check=$_SESSION['login_usr'];
    $sql1=mysqli_query($conn,"select * from pat where email = '$user_check';");
    $row = mysqli_fetch_assoc($sql1);
    $session_name =$row['name'];
    $session_sex =$row['sex'];
    $session_age =$row['age'];
    $session_addr =$row['address'];
    $session_no =$row['contact_no'];
    $session_rel =$row['rel_relation'];
    $session_rel_name =$row['rel_name'];
    $session_rel_addr =$row['rel_address'];
    $session_rel_no =$row['rel_no'];
    if(!isset($session_name)){
        mysqli_close($conn); // Closing Connection
        header('Location: ../index.php'); // Redirecting To Home Page
    }
?>