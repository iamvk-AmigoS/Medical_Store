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

    //$my_file = 'file.txt';
    //$handle = fopen("file.txt", "a") or die('Cannot open file:  '.$my_file);
    /*$data = 'This is the data';
    fwrite($handle, $nam);
    $newdata = "\t"."$bnam";
    fwrite($handle, $newdata);
    $newdata = "\t"."$quantit";
    fwrite($handle, $newdata);
    $newdata = "\t"."$pric";
    fwrite($handle, $newdata);
    $newdata = "\t"."$selle";
    fwrite($handle, $newdata);
    $newdata = "\t"."$contact";
    fwrite($handle, $newdata);
    fclose($handle);*/
    $sql="INSERT INTO $tbl_name3 (id, name, canme, quantity, price, sname, sno) VALUES (NULL,'$nam', '$bnam', '$quantit', '$pric', '$selle', '$scontact');";
    mysqli_query($conn,$sql);
    $sql1="INSERT INTO OUTFILE 'file.txt' (id, name, canme, quantity, price, sname, sno) VALUES (NULL,'$nam', '$bnam', '$quantit', '$pric', '$selle', '$scontact') FIELDS TERMINATED BY ',';";
    mysqli_query($conn,$sql1);
    if(!sql){
        echo "failed";
    }
    if(!sql1){
        echo "failed";
    }
    else{
        header("Location: ../admin.php");
    }
    mysqli_close($conn);
?>