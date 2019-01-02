<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Admin</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
    <style>
        table   {
            border-collapse: collapse;
            width: 70%;
            color: #588c7e;
            font-family: monospace;
            font-size: 15px;
            text-align: center;
        }
        th{
            background-color: #588c7e;
            color: white;
        }
        tr:nth-child(even)  {background-color: #f2f2f2;}
        tr:nth-child(odd)  {background-color: #F9E79F;}    
    </style>
	</head>
	<body>
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html">
                            <img src="img/favicon.png" alt=""><p style="color: cadetblue;">XYZ Medical Store</p>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <div class="row ml-0 w-100">
                                <div class="col-lg-12 pr-0">
                                    <ul class="nav navbar-nav center_nav pull-right">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="logout.php">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
	   </header>     
        <div class="row" style="margin-top: 120px; background-color: #00a8ff;">
            <div class="col-lg-3 col-md-6">
                <form action="addmed.php" method="post" style=" margin-left: 160px;">
                    <br><h3 style="color: aliceblue; width:500px; margin-left:90px;">Add a New Medicine</h3><br>
                    <input type="text" name="name" placeholder="Name of Medicine" id="name_of_med"  style="text-align: center; width: 400px;" required><br><br>
                    <input type="text" name="bname" placeholder="Name of brand of Medicine" id="brand_of_med" style="text-align: center; width: 400px;" required><br><br>
                    <input type="number" name="quantity" placeholder="Quantity" id="quantity_of_med" style="text-align: center; width: 400px;" required><br><br>
                    <input type="number" name="price" placeholder="Price per Pack" id="price_of_med" style="text-align: center; width: 400px;" required><br><br>
                    <input type="text" name="seller" placeholder="Seller's Name" id="sel_name" style="text-align: center; width: 400px;" required><br><br>
                    <input type="number" name="scontact_no" placeholder="Seller's Contact No." id="sel_no" style="text-align: center; width: 400px;" required><br><br>
                    <input style="text-align: center; width: 200px; border: none; background-color: #0081c7; color: aliceblue; margin-left: 90px;" type="submit" value="ADD" /><br><br>
                </form>   		
            </div>
            <div class="col-lg-3 col-md-6" style="margin-left: 430px; margin-top: 200px;">
                <form action="http://localhost/phpmyadmin/">
                    <input class="main_btn text-uppercase" style="color:cadetblue; margin-left:110px; width:200px; height:50px; font-size:20px; background-color:white;" type="submit" value="Live Stock">
                </form>	            
            </div>
        </div>
        <div style="height: 60px;"></div>
        <div style="background-color: #00a8ff; text-align: center;">
            <h3 style="color: aliceblue;">New Requests</h3>
            <center>
                <table>
                    <tr>
                    <th>Name</th>
                    <th>Brand's Name</th>
                    <th>Quantity (Packs)</th>
                    <th>Buyer's Name</th>
                    <th>Buyer's No.</th>
                    <th>Delete</th>
                    </tr>
                    <?php
                        session_start();
                        include_once 'db1.php';
                        if (!$conn) {
                            die("Login failed: " . mysqli_connect_error());
                        }
                        if (!$db_selected)  {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql1 = "select name,cname,quantity,bname,bno from $tbl_name2;";
                        $result1=mysqli_query($conn,$sql1);
                        //$count = mysql_fetch_array($result1);
                        $count = mysqli_num_rows($result1);
                        if($count >0)  {
                            while($row = mysqli_fetch_assoc($result1))   {
                                $_SESSION['dname']=$row["name"];
                                echo "<tr><td>". $row["name"] ."</td><td>". $row["cname"] ."</td><td>". $row["quantity"] ."</td><td>". $row["bname"] ."</td><td>". $row["bno"] ."</td><td>". "<a href=delete.php>" . " Added " ."</a>" ."</td></tr>";
                            }
                            echo "</table>";
                        }
                        else    {
                            echo '<span style="color:green; font-size:20px;">Congrats No New Requests !!</span> ';
                        }
                        mysqli_close($conn);
                    ?>
                </table>
            </center>
        </div>
    </body>
</html>