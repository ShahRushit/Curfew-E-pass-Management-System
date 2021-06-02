<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


 $fname=$_POST['fullname'];
$cnum=$_POST['cnumber'];
$email=$_POST['email'];
$itype=$_POST['identitytype'];
$icnum=$_POST['icnum'];
$cat=$_POST['category'];
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$passnum=mt_rand(100000000, 999999999);
$sql="insert into tblpass(PassNumber,FullName,ContactNumber,Email,IdentityType,IdentityCardno,Category,FromDate,ToDate)values(:passnum,:fname,:cnum,:email,:itype,:icnum,:cat,:fdate,:tdate)";
$query=$dbh->prepare($sql);
$query->bindParam(':passnum',$passnum,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':cnum',$cnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':itype',$itype,PDO::PARAM_STR);
$query->bindParam(':icnum',$icnum,PDO::PARAM_STR);
$query->bindParam(':cat',$cat,PDO::PARAM_STR);
$query->bindParam(':fdate',$fdate,PDO::PARAM_STR);
$query->bindParam(':tdate',$tdate,PDO::PARAM_STR);

 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Pass detail has been added.")</script>';
echo "<script>window.location.href ='add-pass.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  

}
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Curfew Pass Management System | Add Pass</title>
    <!-- Core CSS - Include with every page -->
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
        <div class="col-md-7 col-lg-10 pl-2 pl-xl-5">
          <h3 style="margin-bottom: 20px;">Requesting Pass</h3>
      <form method="post" enctype="multipart/form-data">                                 
          <div class="form-group"> <b><label for="exampleInputEmail1">Full Name</label></b> <input type="text" name="fullname" value="" class="form-control" required='true' style="border-radius: 30px;"> </div>
          <div class="form-group"><b> <label for="exampleInputEmail1">Contact Number</label> </b><input type="text" name="cnumber" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+" style="border-radius: 30px;"> </div>
          <div class="form-group"> <b><label for="exampleInputEmail1">Email Address</label></b> <input type="email" name="email" value="" class="form-control" required='true' style="border-radius: 30px;"> </div>
          <div class="form-group"> <b><label for="exampleInputEmail1">Identity Type</label></b><select type="text" name="identitytype" value="" class="form-control" required='true' style="border-radius: 30px;">
          <option value="">Choose Identity Type</option>
          <option value="Voter Card">Voter Card</option>
          <option value="PAN Card">PAN Card</option>
          <option value="Adhar Card">Adhar Card</option>
          <option value="Driving License">Driving License</option>
          <option value="Passport">Passport</option>
           </select></div>
          <div class="form-group"><b> <label for="exampleInputEmail1">Identity Card No.</label> </b><input type="text" name="icnum" value="" class="form-control" required='true' style="border-radius: 30px;"> </div>
           <div class="form-group"> <b><label for="exampleInputEmail1">Category</label></b><select type="text" name="category" value="" class="form-control" required='true' style="border-radius: 30px;">
      <?php 

      $sql2 = "SELECT * from   tblcategory";
      $query2 = $dbh -> prepare($sql2);
      $query2->execute();
      $result2=$query2->fetchAll(PDO::FETCH_OBJ);

      foreach($result2 as $row)
      {          
          ?>  
      <option value="<?php echo htmlentities($row->CategoryName);?>"><?php echo htmlentities($row->CategoryName);?></option>
       <?php } ?>
           </select></div>
      <div class="form-group"><b> <label for="exampleInputEmail1">From Date</label></b> <input type="date" name="fromdate" value="" class="form-control" required='true'> </div>
      <div class="form-group"><b> <label for="exampleInputEmail1">To Date</label></b> <input type="date" name="todate" value="" class="form-control" required='true'> </div>

           <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Add</button></p> 
      </form>
    </div>
    </div>
  </div>
</section>
  <!-- ================ start footer Area ================= -->
   <?php include_once('includes/footer.php');?>
  <!-- ================ End footer Area ================= -->
<style type="text/css">
  input{
    border-radius: 30px;
  }
</style>

    <!-- Core Scripts - Include with every page -->
<!--     <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script> -->

   <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
<?php }  ?>