             <?php
// include('includes/dbconnection.php');
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "cpms";
    $connect = mysqli_connect($hostname,$username,$password,$database_name);
    $fname = $_POST['name'];
    $mail = $_POST['email'];
    $msg = $_POST['message'];
    // $fname = $_GET['name'];
    // $mail = $_GET['email'];
    // $msg = $_GET['message'];
    $query = "INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ($fname,$mail,$msg)";
    $result = mysqli_query($connect,$query);
    if($connect)
    {
      echo "<script>alert('Your Feedback is submitted')</script>";
    }
    if($result)
    {
      echo "<script>alert('Your Feedback is submitted')</script>";
    }
    else
    {
      // echo "<script>alert('Your Feedback is not submitted')</script>";
    }
    // mysqli_free_result($result);
    mysqli_query($connect,$query);
    // mysqli_free_result($result);
    // mysqli_query($connect);
  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact us</title>
	  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	  <link rel="stylesheet" href="vendors/owl-carouselowl.theme.default.min.css">
	  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
	</head>
	<body style="color: #888;
    font-family: Arial-Nova;
    /*font-size: 20px;*/
    font-weight: ;
    line-height: ;">  
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


<section class="bg-gray domain-search">
    <div class="container">
        <center><h2>Contact us</h2></center>
        <form method="POST" action="contactus.php">
         			<table align="center">
         				<tr>
         					<td><label><b>Name:</b></label></td>
         					<td><input type="text" name="name" placeholder="Enter your Name" required="yes"></td>
         				</tr>
         				<tr>
         					<td><label><b>Email:</b></label></td>
         					<td><input type="email" name="email" placeholder="Enter your Mail" required="yes" style="border-radius: 30px;"></td>
         				</tr>
         				<tr>
         					<td><label><b>Message:</b></label></td>
         					<td>
                  <!--   <input type="text" name="name" placeholder="Enter Message" required="yes"> -->
                  <textarea placeholder="Enter your Message" name="message" required="yes"></textarea>
                  </td>
         				</tr>
         				&nbsp;
         				<tr>
         					<td></td>
         					<td>
         						<center><button type="submit" class="button button-outline button-small" style=" background-color:#6900ff;" name="submit">Click Here</button></center>
       
         					</td>
         				</tr>
         				
         			</table>
         		</form>     
    </div>
</section>



<section class="text-gray-700 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="yes" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Ahmedabad+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(0) contrast(1.5) opacity(4);">
    </iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
      <!-- <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
       -->
    </div>
  </div>
</section>
  <!--================ Domain Search section end =================-->



<!-- ================ start footer Area ================= -->
   <?php include_once('includes/footer.php');?>
<!-- ================ End footer Area ================= -->
<style type="text/css">
    input
    {
      color:#1e1859;
      font-size: 20px;
      border-radius: 20px;
      border-color: black;
      margin: 0px 20px 20px 0px;
      width:100%;
    }
    textarea{
      font-size: 20px;
      color:#1e1859;
      border-radius: 10px;
      border-color: black; 
      margin: 0px 20px 20px 0px;
      width: 100%;
      /*border-color: rgb(black,bg-white);*/
    }
    button{
     margin: 0px 10px 10px 0px;
      /*width: 500px; */
    }
    label{
      color: #1e1859;
      font-size: 20px;
    }
</style>
	<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>
</html>