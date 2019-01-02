<?php
    $servername = "localhost";
    $username = "hospice";
    $password = "mohit";
    $db_name="hospice";
    $tbl_name1="login";
    $tbl_name2="request";
    $tbl_name3="available";
    $conn = mysqli_connect($servername, $username, $password);
    $db_selected=mysqli_select_db($conn, $db_name);
?>