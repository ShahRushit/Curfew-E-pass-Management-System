<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Curfew e-Pass Management System - Home</title>

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
 <?php include_once('includes/header.php');?>
  <!--================Header Menu Area =================-->


  <!--================ Banner Section start =================-->
  <section class="hero-banner text-center">
    <div class="container">
      <h1>Curfew e-Pass Management System</h1>
 
    </div>
  </section>
  <!--================ Banner Section end =================-->


  <!--================ Domain Search section start =================-->
  <section class="bg-gray domain-search">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-5 col-lg-2 text-center text-md-left mb-3 mb-md-0">
          <h3>Search Your Pass!</h3>
        </div>
        <div class="col-md-7 col-lg-10 pl-2 pl-xl-5">
          <form class="form-inline flex-nowrap form-domainSearch" method="post">
            <div class="form-group">
              <label for="staticDomainSearch" class="sr-only">Search</label>
              <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" placeholder="Enter Your Pass ID/Mobile Number" style="border-radius: 30px; border-color: black;"> 
            </div>
            <button type="submit" class="button rounded-0" name="search" id="submit">Search</button>
          </form>

           <?php
if(isset($_POST['search']))
{ 
$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>

     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <?php
// $sql="SELECT * from tblpass where PassNumber like '%$sdata%'";
$sql="SELECT * from tblpass where PassNumber like '$sdata%'|| ContactNumber like '$sdata%'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
      <tr align="center">
<td colspan="6" style="font-size:20px;color:blue">
 Pass ID: <?php  echo ($row->PassNumber);?></td></tr>

  <tr>
    <th scope>Full Name</th>
    <td><b><?php  echo ($row->FullName);?></b></td>
    <th scope>Mobile Number</th>
    <td><b><?php  echo ($row->ContactNumber);?></b></td>
    <th scope>Email</th>
    <td><b><?php  echo ($row->Email);?></b></td>
  </tr>
<tr>
    <th scope>Identity Type</th>
    <td><b><?php  echo ($row->IdentityType);?></b></td>
    <th scope>Identity Card Number</th>
    <td><b><?php  echo ($row->IdentityCardno);?></b></td>
    <th scope>Category</th>
    <td><b><?php  echo ($row->Category);?></b></td>
  </tr>
<tr>
    <th scope>From Date</th>
    <td><b><?php  echo ($row->FromDate);?></b></td>
    <th scope>To Date</th>
    <td><b><?php  echo ($row->ToDate);?></b></td>
    <th scope>Pass Creation Date</th>
    <td><b><?php  echo ($row->PasscreationDate);?></b></td>
  </tr>
                                    
    <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?> 
     </table>

        </div>
      </div>
        <center><button type="submit" class="button rounded-0" name="request_pass"><a href="add-pass.php">Request for Pass</a></button></center>
    </div>
  </section>
  <!--================ Domain Search section end =================-->





  <!-- ================ start footer Area ================= -->
   <?php include_once('includes/footer.php');?>
  <!-- ================ End footer Area ================= -->

<style>
  th{
    color:black;
    color:#8500ff;

  }
  td{
    color:black;
    font-style: italic;
  }
  a:link {
    color: white;
  }
  a:visited{
    color: white;
  }
  a:hover{
    color:white;
  }
  a:active{
    color:white;
  }
  /*tr{
    color:#8500ff;
    font-style: bold;
  }*/
</style>


  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>