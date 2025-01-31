<?php 
	require_once('lib/function.php');
	$db=new login_function();


	if(!isset($_SESSION['current_login_admin']))
	{
		header("Location:login.php");
	}
	
	$current_login_user = $_SESSION['current_login_admin'];

	$success_flag = 0;
    $pro_title="";
    $pro_short="";
    $pro_long="";
    $pro_vedio="";
    $pro_img="";
    $pro_ask="";
    $pro_equity="";
    $pro_loan="";
    $pro_loan_text="";
    $pro_cov_loan="";
    $pro_partnership="";
    $pro_part_text="";
    $pro_valuation="";
if(isset($_POST['submit_btn']))
{
    $pro_title=$_POST['title'];
    $pro_short=$_POST['short_desc'];
    $pro_long=$_POST['long_desc'];
    //$pro_vedio=$_POST['vedio'];
    //$pro_img=$_POST['img'];
    $pro_ask=$_POST['ask'];
    $pro_equity=$_POST['equity'];
    $pro_loan =$_POST['loan'];  //
    $pro_loan_text=$_POST['loan_text'];
    $pro_cov_loan=$_POST['cov_loan'];
    $pro_partnership=$_POST['partnership']; //
    $pro_part_text=$_POST['part_text'];
    $pro_sales=$_POST['sales'];
    $pro_valuation=$_POST['valuation'];
	
	$img2	=	"";
	$img3	=	"";
	$img4	=	"";
	
function generateRandomString4($length = 10) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) 
			{
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}

$valid_formats = array("jpg","png","gif","bmp","jpeg","pdf","JPEG","JPG","BMP","PNG","GIF","PDF","mp4","MP4");

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{	
$name 				= 	$_FILES['img1']['name'];
$size 				= 	$_FILES['img1']['size'];

if(strlen($name))
{				
list($txt, $ext) = explode(".", $name);

if(in_array($ext,$valid_formats))
{
$files	=	array();
$current_random_string = generateRandomString4();

$pro_img = $current_random_string.".".strtolower($ext);						

$tmp = $_FILES['img1']['tmp_name'];

$img_Dir = "images/";

if(!file_exists($img_Dir))
{
mkdir($img_Dir);
}

if(move_uploaded_file($tmp,$img_Dir.$pro_img))
{

}
else
{
$image_error4	=	"failed" ;
$flag				=	1;
}	
}
else
{
$image_error4	= "Invalid file format";
?>
<script>
alert("Invalid file format for Banner Photo");
</script>
<?php
$flag				=	1;	
}	
}	
}

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{	
$name 				= 	$_FILES['img2']['name'];
$size 				= 	$_FILES['img2']['size'];

if(strlen($name))
{				
list($txt, $ext) = explode(".", $name);

if(in_array($ext,$valid_formats))
{
$files	=	array();
$current_random_string = generateRandomString4();

$img2 = $current_random_string.".".strtolower($ext);						

$tmp = $_FILES['img2']['tmp_name'];

$img_Dir = "images/";

if(!file_exists($img_Dir))
{
mkdir($img_Dir);
}

if(move_uploaded_file($tmp,$img_Dir.$img2))
{

}
else
{
$image_error4	=	"failed" ;
$flag				=	1;
}	
}
else
{
$image_error4	= "Invalid file format";
?>
<script>
alert("Invalid file format for Banner Photo");
</script>
<?php
$flag				=	1;	
}	
}	
}


if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{	
$name 				= 	$_FILES['img3']['name'];
$size 				= 	$_FILES['img3']['size'];

if(strlen($name))
{				
list($txt, $ext) = explode(".", $name);

if(in_array($ext,$valid_formats))
{
$files	=	array();
$current_random_string = generateRandomString4();

$img3 = $current_random_string.".".strtolower($ext);						

$tmp = $_FILES['img3']['tmp_name'];

$img_Dir = "images/";

if(!file_exists($img_Dir))
{
mkdir($img_Dir);
}

if(move_uploaded_file($tmp,$img_Dir.$img3))
{

}
else
{
$image_error4	=	"failed" ;
$flag				=	1;
}	
}
else
{
$image_error4	= "Invalid file format";
?>
<script>
alert("Invalid file format for Banner Photo");
</script>
<?php
$flag				=	1;	
}	
}	
}

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{	
$name 				= 	$_FILES['img4']['name'];
$size 				= 	$_FILES['img4']['size'];

if(strlen($name))
{				
list($txt, $ext) = explode(".", $name);

if(in_array($ext,$valid_formats))
{
$files	=	array();
$current_random_string = generateRandomString4();

$img4 = $current_random_string.".".strtolower($ext);						

$tmp = $_FILES['img4']['tmp_name'];

$img_Dir = "images/";

if(!file_exists($img_Dir))
{
mkdir($img_Dir);
}

if(move_uploaded_file($tmp,$img_Dir.$img4))
{

}
else
{
$image_error4	=	"failed" ;
$flag				=	1;
}	
}
else
{
$image_error4	= "Invalid file format";
?>
<script>
alert("Invalid file format for Banner Photo");
</script>
<?php
$flag				=	1;	
}	
}	
}

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{	
$name 				= 	$_FILES['vdo']['name'];
$size 				= 	$_FILES['vdo']['size'];

if(strlen($name))
{				
list($txt, $ext) = explode(".", $name);

if(in_array($ext,$valid_formats))
{
$files	=	array();
$current_random_string = generateRandomString4();

$pro_vedio = $current_random_string.".".strtolower($ext);						

$tmp = $_FILES['vdo']['tmp_name'];

$img_Dir = "images/";

if(!file_exists($img_Dir))
{
mkdir($img_Dir);
}

if(move_uploaded_file($tmp,$img_Dir.$pro_vedio))
{

}
else
{
$image_error4	=	"failed" ;
$flag				=	1;
}	
}
else
{
$image_error4	= "Invalid file format";
?>
<script>
alert("Invalid file format for VDO File");
</script>
<?php
$flag				=	1;	
}	
}	
}		
	
  if($db->add_new_entry($pro_title,$pro_short,$pro_long,$pro_vedio,$pro_img,$pro_ask,$pro_equity,$pro_loan,$pro_loan_text,$pro_cov_loan,$pro_partnership,$pro_part_text,$pro_sales,$pro_valuation,$img2,$img3,$img4,$current_login_user))
  {
	  $success_flag = 1;
	  ?>
	  <script>
		alert("Your Investment Post Added Successfully");
	  </script>
	  <?php
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
                <h4 class="inner-text-title font-weight-bold">Post Your Investment Idea</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Post Your Investment Idea</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- contact section -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:500px;">
                <h3 class="title-style">Post Your Investment <span>Idea</span></h3>
            </div>
			
				<?php
					if($success_flag==1)
					{
					?>
					<div class="alert alert-success">
						Congratulations.. Your Business Idea Is posted successfully.. Now Seat Relax And Wait For Investor Interest.
						</div>
					<?php
					}
					?>
					
					<?php
					
					
					// if($succ_flag == 1)
					// {
					?>
					<!-- <div class="alert alert-success">

						Yeehhh.. Registration Successful. You Can Now Login To Account.
						</div> -->
					<?php
					//}
					?>
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-7 contact-right">
                        <form action="prod_register.php" method="post" class="signin-form" enctype="multipart/form-data">
                            
                            <div class="input-grids">
                         
                                <input type="text" name="title" id="w3lName" placeholder="Enter Business/Idea Title" class="contact-input" required="" />

								<textarea id="w3lName" class="contact-input" name="short_desc" placeholder="Short Description" ></textarea>
                                
                                <textarea  id="w3lName" class="contact-input" name="long_desc" placeholder="Long Description" ></textarea>
                               
                                <label for="formFileMultiple"  class="form-label">Select Video</label>
                                <input type="file" class="contact-input"  id="w3lName" name="vdo">

                                <label>Select Images 1</label>
                                <input name="img1" class="contact-input"  id="w3lName" type="file" required>
								
								 <label>Select Images 2</label>
                                <input name="img2" class="contact-input"  id="w3lName" type="file" required>
								
								
								 <label>Select Images 3</label>
                                <input name="img3" class="contact-input"  id="w3lName" type="file" required>
								
								 <label>Select Images 4</label>
                                <input name="img4" class="contact-input"  id="w3lName" type="file" required>
								

                                <input type="text" name="ask" id="w3lName" placeholder="Required Investmnet Amount (Ask)" class="contact-input" required="" />

                                <input type="text" name="equity" id="w3lName" placeholder="Enter equity" class="contact-input" required="" />

                                <label for="floatingInput">Loan Taken</label>
                                <select name="loan" class="form-check form-check-inline" style="width:100%; border:1px solid #DFDFDF; padding:12px; border-radius:5px;" >
									<option value="Select">Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
                                
                               </br></br>
                                <strong>Note: If Yes then mention Amount</strong>
                                <div class="form-floating">
                                <textarea class="form-control" name="loan_text" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                </div></br>

                                <input type="text" name="cov_loan" id="w3lSender" placeholder="Coverd Loan" class="contact-input" required="" />

								  <label for="floatingInput">Business in Partnership</label>
                                <select name="partnership" class="form-check form-check-inline" style="width:100%; border:1px solid #DFDFDF; padding:12px; border-radius:5px;" >
									<option value="Select">Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
								
                                </br></br>
                                <strong>Note: If Yes then mention detail</strong>
                                <div class="form-floating">
                                <textarea class="form-control" name="part_text" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                
                                </div></br>

                                <input type="number" name="sales" id="w3lSender" placeholder="Annual sales" class="contact-input" required="" />

								<input type="number" name="valuation" id="w3lSubect" placeholder="valuation*" class="contact-input" required="" />	

                    </div>
                            <div class="text-right">
                                <button name="submit_btn" type="Submit" class="btn btn-style">Submit</button>
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