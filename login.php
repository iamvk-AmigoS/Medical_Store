
<!DOCTYPE html>
<html>
	<head>
        <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Admin Login</title>
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
        <script type="text/javascript">
        function validate()  {
            var error = "";
            var name = document.getElementById("username_of_user");
            var password = document.getElementById("password_of_user");
            
            //username
            if( name.value.length == 0 ) {
                    error = " Username Cannot be Empty ";
                    document.getElementById( "e1" ).innerText = error;
                    name.focus();
                    return false;
            }
            
            //password
            if( password.value.length == 0 ) {
                    error = " Password Cannot be Empty ";
                    document.getElementById( "e2" ).innerText = error;
                    document.getElementById( "e1" ).innerText = "";
                    password.focus();
                    return false;
            }
            else{
                return true;
            }
        }
        </script>
        <style>
            small   {color: red;}
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
        	
        <section class="home_banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="col-lg-12">
                        <form action="logindb.php" method="post" onsubmit='return validate()'>
						
                            <h3 style="color: #000000;">Username</h3>
                            <input type="text" class="form-control" name="usr" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" id="username_of_user" style="width:400px;">
                        <small id="e1"></small><br><br>
                        <h3 style="color: #000000;">Password</h3>
                        <input type="password" class="form-control" name="pwd" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" id="password_of_user" style="width:400px;">
                        <small id="e2"></small><br><br>
                        <div class="text confirm_btn_box">
								<input class="main_btn text-uppercase" type="submit" value="LOGIN">
							</div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
        
        <?php if($err){ ?>
        <div class="err"> There was an issue with the form"</div>
        <?php } $error = false;?>
    
    </body>
</html>