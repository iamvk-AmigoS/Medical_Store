<?php
    session_start();
    include_once 'db1.php';
    $err = false;
    if (!$conn) {
        die("Login failed: " . mysqli_connect_error());
    }
    if (!$db_selected)  {
        die("Connection failed: " . mysqli_connect_error());
    }
    $myusername=$_POST['usr'];
    $mypassword=$_POST['pwd'];
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $hpwd = md5($mypassword);
    $sql="select * from $tbl_name1 where paswd='$hpwd' AND uname='$myusername';";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1)	{
        $_SESSION['login_usr']=$myusername;
        header("Location: ../admin.php");
    }
    else	{
        $err =true;
        header("Location: ../login.php");
    }
    mysqli_close($conn);
?>