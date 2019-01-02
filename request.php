<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Request</title>
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
            <form action="addreq.php" method="post">
                <br><h3 style="color: aliceblue;">Request for a New Medicine</h3><br>
                <input type="text" name="name" placeholder="Name of Medicine" id="name_of_med" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name of Medicine'" style="text-align: center; width: 400px;" required><br><br>
                <input type="text" name="bname" placeholder="Name of brand of Medicine (Optional)" id="brand_of_med" style="text-align: center; width: 400px;" optional><br><br>
                <input type="number" name="quantity" placeholder="Quantity (Packs)" id="quantity_of_med" style="text-align: center; width: 400px;" required><br><br>
                <input type="text" name="buyer" placeholder="Buyer's Name" id="sel_name" style="text-align: center; width: 400px;" required><br><br>
                <input type="number" name="bcontact_no" placeholder="Buyer's Contact No." id="sel_no" style="text-align: center; width: 400px;" required><br><br>
                <center>
                    <input style="text-align: center; width: 200px; border: none; background-color: #0081c7; color: aliceblue;" type="submit" value="REQUEST" />
                </center><br>
            </form>
        </div>
    </body>
</html>