<?php
    $servername = "localhost";
    $username = "username_of_user";
    $password = "pssword_for_username";
    $db_name="databasename_in_mysql";
    $tbl_name1="Login_User";
    $tbl_name2="Requested_Medicines";
    $tbl_name3="Available_Medicines";
    $conn = mysqli_connect($servername, $username, $password);
    $db_selected=mysqli_select_db($conn, $db_name);
?>
