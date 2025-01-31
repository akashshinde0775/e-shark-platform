<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Sharks</title>
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
                <h4 class="inner-text-title font-weight-bold">Terms-Conditions</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Terms-Conditions</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

  <!-- image with content section -->
    <section class="w3l-content-4 py-5">
        <div class="content-4-main py-md-5 py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class=" col-lg-6">
                        <img src="assets/images/ab3.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <div class="content4-right-info mb-4 pb-2">
                            <h6><a href="#url">
                                    1. Marketing Services</a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                consectetur
                                adipisicing.</p>
                        </div>
                        <div class="content4-right-info mb-4 pb-2">
                            <h6><a href="#url">
                                    2. 24/7 Call Center Service</a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                consectetur
                                adipisicing.</p>
                        </div>
                        <div class="content4-right-info">
                            <h6><a href="#url">
                                    3. Social Media Marketing</a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                consectetur
                                adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //image with content section -->

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

    <!-- counter for stats -->
    <script src="assets/js/counter.js"></script>
    <!-- //counter for stats -->

   

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