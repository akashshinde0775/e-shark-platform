/<?php
require_once('lib/function.php');
$db=new login_function();

if(isset($_GET['edit_id']))
{
  $var_edit_id = $_GET['edit_id'];
  $_SESSION['edit_id']  = $var_edit_id;
}
$var_edit_id =  $_SESSION['edit_id'];

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
    $pro_vedio=$_POST['vedio'];
    $pro_img=$_POST['img'];
    $pro_ask=$_POST['ask'];
    $pro_equity=$_POST['equity'];
    $pro_loan =$_POST['loan'];    //
    $pro_loan_text=$_POST['loan_text'];
    $pro_cov_loan=$_POST['cov_loan'];
    $pro_partnership=$_POST['partnership']; //
    $pro_part_text=$_POST['part_text'];
    $pro_sales=$_POST['sales'];
    $pro_valuation=$_POST['valuation'];

    if($db->update_registration_record($pro_title,$pro_short,$pro_long,$pro_vedio,$pro_img,$pro_ask,$pro_equity,$pro_loan,$pro_loan_text,$pro_cov_loan,$pro_partnership,$pro_part_text,$pro_sales,$pro_valuation,$var_edit_id))
    {
       echo "Record Updated Successfully";
    }
}


$loan="";
$partnership="";

$registration_data = array();
$registration_data = $db->get_all_registration_data_from_id($var_edit_id);

if(!empty($registration_data))
{
            
            $title = $registration_data[1];
            $short_desc = $registration_data[2];
            $long_desc = $registration_data[3];
            $vedio = $registration_data[4];
            $img = $registration_data[5];
            $ask=$registration_data[6];
            $equity=$registration_data[7];
            $loan=$registration_data[8];
            $loan_text=$registration_data[9];
            $cov_loan=$registration_data[10];
            $partnership=$registration_data[11];
            $part_text=$registration_data[12];
            $sales=$registration_data[13];
            $valuation=$registration_data[14];
            
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.shark
{
    width:100%;
}
.a
{
    text-align:center;
  
}

</style>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-grid.css" />
<link rel="stylesheet" href="css/bootstrap-utilities.css" />

<!--Import/Include JS/Jquery files-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <title>Edit Business</title>
</head>
<body>

<form action="edit.php" method="POST">

<h1 class="a">
Edit Business Details 
</h1>
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">

    
    <div class="form-floating mb-3">
  <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Enter Full Name" value="<?php echo $title; ?>" />
  <label for="floatingInput">Title</label>
</div>

<div class="form-floating">
  <textarea class="form-control" name="short_desc" placeholder="Leave a comment here" id="floatingTextarea" value="<?php echo $short_desc; ?>"></textarea>
  <label for="floatingTextarea">Short Description </label>
</div></br>


  

<div class="form-floating">
  <textarea class="form-control" name="long_desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" value="<?php echo $long_desc; ?>" ></textarea>
  <label for="floatingTextarea2">Long Description</label>
</div></br>


<label for="formFileMultiple"  class="form-label">Select Video</label>
<input type="file" name="vedio" id="myFile">
  <input type="submit" value="Upload">
</br></br>


<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Select Multiple Images</label>
  <input class="form-control"  name="img" type="file" id="formFileMultiple" multiple>
</div>

<div class="form-floating mb-3">
  <input type="text" name="ask" class="form-control" id="floatingInput" placeholder="Enter Full Name" value="<?php echo $ask; ?>" />
  <label for="floatingInput">Required Investmnet Amount (Ask)</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="equity" class="form-control" id="floatingInput" placeholder="Enter Full Name" value="<?php echo $equity; ?>" />
  <label for="floatingInput">Equity</label>
</div>
<!--LOAN-->
<label for="floatingInput">Loan Taken</label>
<div class="form-check form-check-inline" >
  <input class="form-check-input" type="radio" name="loan" id="inlineRadio1" value="y" <?php if($loan == "y"){ echo "checked";}?> />
  <label class="form-check-label" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="loan" id="inlineRadio2" value="n" <?php if($loan=="n"){ echo "checked";}?> />
  <label class="form-check-label" for="inlineRadio2">No</label>
</div></br></br>
<strong>Note: If Yes then mention Amount</strong>
<div class="form-floating">
  <textarea class="form-control" name="loan_text" placeholder="Leave a comment here" id="floatingTextarea" value="<?php echo $loan_text; ?>" ></textarea>
</div></br>

<div class="form-floating mb-3">
  <input type="text" name="cov_loan" class="form-control" id="floatingInput" placeholder="Enter Full Name" value="<?php echo $cov_loan; ?>" />
  <label for="floatingInput">Covered Loan Amount</label>
</div>

<!--Partnership-->
<label for="floatingInput">Business in Partnership</label>
<div class="form-check form-check-inline" >
  <input class="form-check-input" type="radio" name="partnership" id="inlineRadio1" value="y" value="<?php if($partnership=="y"){ echo "checked";} ?>" />
  <label class="form-check-label" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="partnership" id="inlineRadio2" value="n" value="<?php if($partnership=="n"){ echo "checked";} ?>" />
  <label class="form-check-label" for="inlineRadio2">No</label>
</div></br></br>
<strong>Note: If Yes then mention detail</strong>
<div class="form-floating">
  <textarea class="form-control" name="part_text" placeholder="Leave a comment here" id="floatingTextarea" value="<?php echo $part_text; ?>"></textarea>
  <label for="floatingTextarea">Short Description </label>
</div></br>

<div class="form-floating mb-3">
  <input type="text" name="sales" class="form-control" id="floatingInput" placeholder="Enter Full Name" value="<?php echo $sales; ?>" />
  <label for="floatingInput">Annual Sales</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="valuation" class="form-control" id="floatingInput" placeholder="Enter Full Name" value="<?php echo $valuation; ?>" />
  <label for="floatingInput">Company Valuation</label>
</div>


<div class="form-floating">
<input type="Submit" name="submit_btn" class="btn btn-primary shark" value="Update"/>
</div>

</form>

    </div>
    <div class="col">
      
    </div>
  </div>
</div>

</body>
</html>