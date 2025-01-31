<?php
require_once('lib/function.php');
$db = new login_function();

if(isset($_GET['delete_id']))
{
  $var_delete = $_GET['delete_id'];
  $db->delete_all_by_id($var_delete);
}
?>

<html>
<head>
<title>report</title>
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
<?php require_once('header.php');?>
    </div>
    <div class="row">
    <div class="col">
    <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr.No</th>
      <th scope="col">Title</th>
      <th scope="col">Short Description</th>
      <th scope="col">Long Description</th>
      <th scope="col">Vedio</th>
      <th scope="col">Image</th>
      <th scope="col">Ask</th>
      <th scope="col">Equity</th>

      <th scope="col">Loan</th>
      <th scope="col">Loan Description</th>
      <th scope="col">Covered Loan</th>
      <th scope="col">Partnership</th>
      <th scope="col">Partnership Description</th>
      <th scope="col">Sales</th>
      <th scope="col">Valuation</th>
      
    </tr>
  </thead>
  <tbody class="table-group-divider">
  
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
    <tr>
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
    </tr>

  <?php
            $counter++;
          }
      }
  ?>
  </tbody>
</table>
    
  </div>
</div>
</body>
</html>