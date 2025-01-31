<?php 
	require_once("lib/function.php");
	$db = new login_function();
	
	$email_error	=	"";
	$email			=	"";
	$password_error	=	"";
	$flag 			=	0; 
	
	if(isset($_GET['logout']))
	{
		unset($_SESSION['current_login_admin']);	
	}
	if(isset($_SESSION['current_login_admin']))
	{
		header("Location:dashboard.php");
	}
	
	if(isset($_POST['add']))
	{
		$email			=		$_POST['primary_contact'];
		$password		=		$_POST['password'];
		
		if($email=="")
		{
			$email_error = "Please enter user name";
			$flag = 1;
		}
		if($password=="")
		{
			$password_error = "Please enter password";
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
					if($password==$result_password)
					{
						$_SESSION['current_login_admin'] = $email;
						
						header("Location:dashboard.php");
						$success_flag = "Login Successfully";
					}
					else
					{
						$password_error = "Incorrect password";
					}
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
                <h4 class="inner-text-title font-weight-bold">Login</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- contact section -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:500px;">
                <h3 class="title-style">Login To Your  <span>Account</span></h3>
            </div>
					<?php
					if($password_error ==1)
					{
					?>
						<div class="alert alert-danger">
						<span class="alert-link">Please!</span> Enter Correct Password.
						</div>
					<?php
					}
					?>	
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-7 contact-right">
                        <form action="login.php" method="post" class="signin-form" enctype="multipart/form-data">
                            <div class="input-grids">
                                <input type="number" name="primary_contact" id="w3lSubect" placeholder="Mobile No"
                                    class="contact-input" required="" />	
									<label style="color:red;"><?php echo $email_error; ?></label>
                                <input type="password" name="password" id="w3lWebsite" placeholder="Password"
                                    class="contact-input" required="" />	
									<label style="color:red;"><?php echo $password_error; ?></label>
									
									<a href="forgot-password.php">Forgot Password?</a>
                            </div>
							
							
                            <div class="text-right">
                                <button name="add" class="btn btn-style">Login To Account</button>
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
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>