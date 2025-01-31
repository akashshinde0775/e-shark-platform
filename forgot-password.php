<?php 
	require_once("lib/function.php");
	$db = new login_function();
	
	$email_error	=	"";
	$email			=	"";
	$password_error	=	"";
	$flag 			=	0; 
	$succ_flag = 0;
	
	if(isset($_POST['add']))
	{
		$email			=		$_POST['primary_contact'];
	
		if($email=="")
		{
			$email_error = "Please enter user name";
			$flag = 1;
		}
		if($flag==0)
		{
			$result_password = "";

			$result_password = $db->get_password_from_user_name_customer($email);
		
				if($result_password=="")
				{
					$email_error = "This user is not registered or not verified.";
				}
				else
				{
					
					$success_flag = "Login Successfully";
					$succ_flag = 1;
				}
		}
	}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Shark</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
				<?php
					require_once('header.php');
			   ?>
		</div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold">Request Password</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Request Password</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- contact section -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:500px;">
                <h3 class="title-style">Request Password - <span>Account</span></h3>
            </div>
					<?php
					if($succ_flag == 1)
					{
					?>
					<div class="alert alert-success">
						Yeehhh.. Password sent on email
					</div>
					<?php
					}
					?>	
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-7 contact-right">
                        <form action="forgot-password.php" method="post" class="signin-form" enctype="multipart/form-data">
                            <div class="input-grids">
                                <input type="number" name="primary_contact" id="w3lSubect" placeholder="Mobile No"
                                    class="contact-input" required="" />	
									<label style="color:red;"><?php echo $email_error; ?></label>
									
									<a href="login.php" style="color:green;">Know Password? Login To Account</a>
                            </div>
							
							
                            <div class="text-right">
                                <button name="add" class="btn btn-style">Send Password</button>
                            </div>
                        </form>
                    </div>
					<div class="col-md-5 contact-left pl-lg-5 mt-md-0 mt-5">
						<img src="assets/images/ab3.png" alt="" class="img-fluid">
					</div>
                 </div>
            </div>
        </div>
    </section>

   <?php
		require_once('footer.php');
   ?>

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>