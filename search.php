<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Search</title>
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
                width: 50%;
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
            p   {
                color: aliceblue;
                font-size: 15px;
            }
        </style>
	</head>
	<body>
        <header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="img/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
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
										<a class="nav-link" href="index.html">Home</a>
									</li>
                                    </ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <div style="margin-top: 120px; background-color: #00a8ff; text-align: center;">
        <center>
            <table>
                <tr>
                <th>Name</th>
                <th>Brand's Name</th>
                <th>Quantity</th>
                <th>Price</th>
                </tr>
            <?php
                include_once 'db1.php';
                if (!$conn) {
                    die("Login failed: " . mysqli_connect_error());
                }
                if (!$db_selected)  {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $search=$_POST['query'];
                $sql1 = "select name,canme,quantity,price from $tbl_name3 where name like '%$search%';";
                $result1=mysqli_query($conn,$sql1);
                //$count = mysql_fetch_array($result1);
                $count = mysqli_num_rows($result1);
                if($count >0)  {
                    while($row = mysqli_fetch_assoc($result1))   {
                        echo "<tr><td>". $row["name"] ."</td><td>". $row["canme"] ."</td><td>". $row["quantity"] ."</td><td>". $row["price"] ."</td></tr>";
                        //echo nl2br("\n");
                    }
                    echo "</table>";
                }
                else    {
                    //echo "<tr><td>". "" ."</td><td>". "" ."</td></tr>";
                    echo "<p>". "No results Found But You Can". "<a href=request.php style = 'color: blueviolet;'>" . " Request " ."</a>". "It" ."</p>";
                }
                mysqli_close($conn);
            ?>
                </table>
            </center>
        </div>
    </body>
</html>