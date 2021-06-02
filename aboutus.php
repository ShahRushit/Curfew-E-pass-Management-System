

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About us</title>
	  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/owl-carouselowl.theme.default.min.css">
	  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	  <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css"> -->
      <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");
          *{
            padding: 0;
            margin: 0;
          }
          body
          {
            background-color: #12172b; 
            font-family: "Poppins", sans-serif;
          }
          .container{
            margin: 20px 40px;
            color: white;
          }
          .heading
          {
            font-size: 60px;
            color: white;
          }
          .heading span{
            font-style: italic;
            font-size: 30px; 
          }
          .profiles{
            display: flex;
            justify-content: space-around;
            margin: 20px 80px;
          }
          .profile{
            flex-basis: 260px;
          }
          .profile .profile-img{
            height: 260px;
            width: 260px;
            border-radius: 50%
            filter: grayscale(100%);
            cursor: pointer;
            transition: 400ms;
          }
          .profile:hover .profile-img{
            filter: grayscale(0);
          }
          .user-name{
            margin-top: 30px;
            font-size: 35px;
          }
          .profile h5{
            font-size: 18px;
            font-weight: 100;
            letter-spacing: 3px;
            color:#ccc;
          }
          .profile p{
            font-size: 16px;
            margin-top: 20px;
            text-align: justify;
          }
          @media only screen and (max-width: 1150px){
            .profiles{
                flex-direction: column;
            }
            .profile{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .profile p{
                text-align: center;
                margin: 20px 60px 80px 60px;
                font-size: 20px;
            }
          }
          @media only screen and(max-width: 900px){
            .heading{
                        font-size: 40px;
                        color: white;
                        text-align: center;
                    }
            .heading span {
                font-size: 15px;
            }
            .profiles{
                margin: 20px 0;
            }
            .profiles p{
                margin: 20px 10px 80px 10px;
            } 
          }
          .fa {
                  padding: 5px;
                  font-size: 20px;
                  width: 30px;
                  text-align: center;
                  text-decoration: none;
                  margin: 7px 10px;
                  border-radius: 50%;
              }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
          background: #3B5998;
          color: white;
        }

        .fa-twitter {
          background: #55ACEE;
          color: white;
        }

        .fa-linkedin {
          background: #007bb5;
          color: white;
        }

        .fa-instagram {
          background: #125688;
          color: white;
        }

      </style>
	</head>
	<body style="background-color: #12172b;">  
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
    <!-- <div class="container"> -->
        <center><h2 style="margin-bottom: 50px;">Our Teams</h2></center>
            <div class="profiles">
                <div class="profile">
                    <img src="img/nishu.jpeg" class="profile-image"style="border-radius: 50%;">
                    <a href="https://www.linkedin.com/in/nishu-bhardwaj-38bb39a3/" target="_blank">
                        <h3 class="user-name" align="center">Nishu Bhardwaj</h3>
                    </a>
                    <!-- <h5> Content Director</h5> -->
                    <p>
                      Master of computer Application <br> L.D. College of Engineering<br>
                        <a href="https://www.facebook.com/nisholics" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://twitter.com/nisholics" class="fa fa-twitter" target="_blank"></a>
                        <a href="https://www.linkedin.com/in/nishu-bhardwaj-38bb39a3" class="fa fa-linkedin" target="_blank"></a>
                        <a href="https://www.instagram.com/nisholics/" class="fa fa-instagram" target="_blank"></a>
                    </p>
                </div>
                <div class="profile">
                    <img src="img/rushit.jpeg" class="profile-image" style="border-radius: 50%;">
                    <a href="https://www.linkedin.com/in/rushit-shah-88a017195/" target="_blank">
                        <h3 class="user-name" align="center">Rushit Shah</h3>
                    </a>
                    <!-- <h5> Content Director</h5> -->
                    <p>
                       Master of computer Application <br> L.D. College of Engineering<br>
                        <a href="https://www.facebook.com/rushit.shah.165" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://twitter.com/RushitKShah" class="fa fa-twitter" target="_blank"></a>
                        <a href="https://www.linkedin.com/in/rushit-shah-88a017195/" class="fa fa-linkedin" target="_blank"></a>
                        <a href="https://www.instagram.com/rushit_shah_99/" class="fa fa-instagram" target="_blank"></a>
                    </p>

                </div>
                <div class="profile">
                    <img src="img/chirag.jpeg" class="profile-image" style="border-radius: 50%;">
                    <a href="https://www.linkedin.com/mwlite/in/chirag-parmar-14b04a184" target="_blank">
                        <h3 class="user-name" align="center">Chirag Parmar</h3>
                    </a>
                    <!-- <h5> Content Director</h5> -->
                    <p>
                        Master of computer Application <br> L.D. College of Engineering<br>
                        <a href="https://www.facebook.com/chirag.parmar.378199" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://www.instagram.com/chirag.i.g/" class="fa fa-twitter" target="_blank"></a>
                        <a href="https://www.linkedin.com/mwlite/in/chirag-parmar-14b04a184" class="fa fa-linkedin" target="_blank"></a>
                        <a href="https://www.instagram.com/chirag.i.g/" class="fa fa-instagram" target="_blank"></a>
                    </p>
                </div>

			</div>

    <!-- </div> -->
  </section>
  <!--================ Domain Search section end =================-->



<!-- ================ start footer Area ================= -->
   <?php include_once('includes/footer.php');?>
<!-- ================ End footer Area ================= -->
	<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>
</html>