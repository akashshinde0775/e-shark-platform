<?php 
	require_once("lib/function.php");
	$db = new login_function();
	
	if(!isset($_SESSION['current_login_admin']))
	{
		header("Location:login.php");
	}
	
	$login_user = $_SESSION['current_login_admin'];
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
                <h4 class="inner-text-title font-weight-bold">Dashboard</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- contact section -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:500px; margin-top:-50px;">
                <h3 class="title-style" style="font-size:22px;color:green;font-style:italic;">"Invest & Increase The Money"</h3>
            </div>
			
			
			<?php			
				$registration_data=array();
				$registration_data=$db->get_all_self_posted_details($login_user);
			
				$post_id_data	=	"";
				if(!empty($registration_data))
				{
					$counter=0; 
					foreach($registration_data as $row)
					{
						$id=$registration_data[$counter][0];
						if($post_id_data=="")
						{
							$post_id_data	=	"'$id'";
						}
						else
						{
							$post_id_data	=	$post_id_data.","."'$id'";
						}
						
						$counter++;
					}
				}

			
				$notification_count	= 0;
				$notification_count = $db->get_total_all_notification_count($login_user,$post_id_data);
				if($notification_count>0)
				{
			?>
				<div class="alert alert-warning">
				<span class="alert-link">Alerts!..</span> You have <?php echo $notification_count; ?> unread proposals.
				<a href="post-report.php" style="color:red;">Check Now</a>
				</div>
				<br />
				<br />
			<?php
				}
			?>	
					
            <div class="mx-auto" style="max-width:1000px;">
                <div class="row contact-block" style="text-align:center;">
                    
					
					<div class="col-md-3 contact-left pl-lg-3 mt-md-0 mt-3" style="text-align:center;">
					<a href="prod_register.php" style="color:#B708BA !important; font-weight:bold;">
						<img src="post.png" alt="" style="height:150px; border:1px solid #DFDFDF; margin-bottom:15px;"><br />
						Post Your Idea
						</a>
					</div>
					
					
					
					<div class="col-md-3 contact-left pl-lg-3 mt-md-0 mt-3" style="text-align:center;">
						<a href="post-report.php" style="color:#B708BA !important; font-weight:bold;">
						<img src="investment1.png" alt="" class="img-fluid"style="height:150px; border:1px solid #DFDFDF; margin-bottom:15px;"><br />
						My Business Report
						</a>
					</div>
					
					<div class="col-md-3 contact-left pl-lg-3 mt-md-0 mt-3" style="text-align:center;">
					<a href="browse-posts.php" style="color:#B708BA !important; font-weight:bold;">
						<img src="business-idea.png" alt="" class="img-fluid"style="height:150px; border:1px solid #DFDFDF; margin-bottom:15px;"><br />
						Browse Businesses
						</a>
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