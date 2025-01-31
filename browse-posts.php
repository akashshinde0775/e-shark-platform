<?php 
	require_once("lib/function.php");
	$db = new login_function();
	
	if(!isset($_SESSION['current_login_admin']))
	{
		header("Location:login.php");
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

<body style="background-color:#EFEFEF">
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
                <h4 class="inner-text-title font-weight-bold">Browse Businesses</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Browse Businesses</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- contact section -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:500px; margin-top:-50px;">
                <h3 class="title-style">Browse Businesses Ideas</h3>
            </div>
		
  <?php
      $registration_data=array();
      $registration_data=$db->get_all_registration_records();

      if(!empty($registration_data))
      {
        $counter=0; 
        foreach($registration_data as $row)
          {
            $id=$registration_data[$counter][0];
            $title = $registration_data[$counter][1];
            $short_desc = $registration_data[$counter][2];
            $long_desc = $registration_data[$counter][3];
            $vedio = $registration_data[$counter][4];
            $img = $registration_data[$counter][5];
            $ask=$registration_data[$counter][6];
            $equity=$registration_data[$counter][7];
            $loan=$registration_data[$counter][8];
            $loan_text=$registration_data[$counter][9];
            $cov_loan=$registration_data[$counter][10];
            $partnership=$registration_data[$counter][11];
            $part_text=$registration_data[$counter][12];
            $sales=$registration_data[$counter][13];
            $valuation=$registration_data[$counter][14];
            //$date=$registration_data[$counter][15];
           // $time=$registration_data[$counter][16];
    ?>
	
		<div style="background-color:#FFFFFF; padding:15px; width:85%; margin:auto;margin-top:25px; border-radius:10px; border:1px solid #DFDFDF;  line-height:
		30px; font-weight:bold; min-height:140px; font-family: 'Noto Sans JP', sans-serif;">
		
		<div style="float:right; position:relative; right:0px; top:0;">
			
			<a href="view-details.php?post_id=<?php echo $id; ?>" style="float:right; font-size:13px; color:purple; border:1px solid #DFDFDF; background-color:#FFF; text-align:center; width:120px;">View Details</a>
			<br />
			<a href="reply.php?reply_id=<?php echo $id; ?>" style="float:right; font-size:13px; color:green; border:1px solid #DFDFDF; background-color:#FFF; text-align:center; width:120px; margin-top:5px;">Reply</a><br />
						
			<a href="post-replies.php?post_id=<?php echo $id; ?>" style="float:right; font-size:13px; color:orangered; border:1px solid #DFDFDF; background-color:#FFF; text-align:center; margin-top:5px; width:120px;">Posts Replies</a><br />
			
			
		</div>
		
		<img src="images/<?php echo $img; ?>" style="float:left; height:100px; width:100px; border:1px solid #DFDFDF; padding:4px; margin-right:15px;" />
		
		<div style="color:green; font-weight:bold;">Title : <?php echo $title; ?></div>
		
		<div style="display:inline-table; font-size:13px;">Short Description : <?php echo $short_desc;?></div>
	</div>
	
    <!--<tr>
      <td scope="row"><?php echo $counter + 1;  ?></td>
      <td><?php echo $title; ?></td>
      <td><?php echo $short_desc; ?></td>
      <td><?php echo $long_desc; ?></td>
      <td><?php echo $vedio; ?></td>
      <td><?php echo $img; ?></td>
      <td><?php echo $ask; ?></td>
      <td><?php echo $equity; ?></td>
      <td><?php echo $loan; ?></td>
      <td><?php echo $loan_text; ?></td>
      <td><?php echo $cov_loan; ?></td>
      <td><?php echo $partnership; ?></td>
      <td><?php echo $part_text; ?></td>
      <td><?php echo $sales; ?></td>
      <td><?php echo $valuation; ?></td>
      <td><a href="edit.php?edit_id=<?php echo $id; ?>">Edit</a></td>
      <td><a href="report.php?delete_id=<?php echo $id; ?>">Delete</a></td>
    </tr>-->

  <?php
            $counter++;
          }
      }
  ?>
  </tbody>
</table>

		
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