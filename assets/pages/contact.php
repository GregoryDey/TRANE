<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/style.css">

<style>
.con{

  background-color:#ffffff;
  height:100vh;
}
/* test */
/* i can push now  */

#page-container {
  position: relative;
  min-height: 100vh;
}

#content-wrap {
  padding-bottom: 8.5rem;    /* Footer height */
}

#footer {
  position: relative;
  bottom: 0;
  width: 100%;
  height: 8.5rem;
  background-color: red;          /* Footer height */
}

  </style>
  <title>Trane Guyana</title>
</head>
<body>


  <nav class="navbar navbar-expand-md navbar-dark bg-dark nav-h-style">

<img src="../img/tranelogo.png" width="120" height="auto" class="d-inline-block align-top" alt="">

<img src="../img/mitlogo.png" width="120" height="auto" class="d-inline-block align-top" hspace="12"alt="">

    <img src="../img/flaglogo.png" width="40" height="auto" class="d-inline-block align-top"   alt="">



    <a class="navbar-brand" href="#">




    </a>



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon "></span>
     </button>




    <div class="collapse navbar-collapse nav-link text-right" id="navbarNav">


      <ul class="navbar-nav mx-auto nav-link mt-lg font-style-nav" id="pad-right" >



        <li class="nav-item">

          <a class="nav-link nav-link-ltr" href="#">About</a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link nav-link-ltr" href="#"> Why Trane  <span class="sr-only"> (current) </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="#">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="#">Contact</a>
        </li>
      </ul>
        <ul class="navbar-nav ml-auto nav-link mt-lg fa-ul font-style-nav" >

    <li><span class="fa-li"><i class="fas fa-user" style="padding-top: 6px; padding-left: 15px; color : red"></i></span>
      <a class="nav-link" href="#">Login</a></li>

      </li>
        <li class="nav-item">
          <a class="nav-link nav-link-ltr" href="#">Register</a>
        </li>


      </ul>
    </div>
  </nav>


 <div id="page-container">
    <div id="content-wrap">

  <div class="container ">

    <!-- contact form here -->

    
    <div class="form-container">
        <form name="frmContact" id= "frmContact" method="post"
            action="send_contact_mail.php" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>


</div>
<!-- first image row -->

<div class="row">
  <div class="col-sm-3">
   <img src="../assets/img/1.png" alt="" class="src">
</div>

<div class="col-sm-3">
 <img src="../assets/img/2.png" alt="" class="src">
</div>

<div class="col-sm-3">
 <img src="../assets/img/3.png" alt="" class="src">
</div>
<div class="col-sm-3">
 <img src="../assets/img/3.png" alt="" class="src">
</div>

</div>

<!-- second row -->
<div class="row">
  <div class="col-sm-3">
   <img src="../assets/img/5.png" alt="" class="src">
</div>


</div>
<!-- end of second row -->


</div>




<footer id="footer">



  <footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-6">
          <!--Column1-->
          <div class="footer-pad">
            <h4>Useful Links</h4>
            <ul class="list-unstyled">
              <li><a href="" class="nav-link-ltr"></a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Why Trane </a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Contractors</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <!--Column1-->
          <div class="footer-pad">
            <h4>Contact</h4>
            <ul class="list-unstyled">


              <li> <a href="#"> Lorem ipsum dolor sit amet. </a></li><br>
              <li>  <a href="#">  Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li><br>
              <li> <a href="#"> Lorem ipsum dolor sit amet, consectetur.</a></li><br>
              <li> <a href="#">   Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li><br>
              <li> <a href="#">   Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!--Column1-->
          <div class="footer-pad">
              <ul class="list-unstyled">
          <li> <a href="#"> <img src="assets/img/footerlogo.png" width="200px" height="auto" alt=""> </a> </li><br>

          <li> <a href="#"> <img src="assets/img/mitlogo.png" width="200px" height="auto" alt=""> </a> </li><br>


          </div>
        </div>
      	<div class="col-md-3">
      		<h4>Follow Us</h4>
              <!-- <ul class="social-network social-circle">
               <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul> -->
  		</div>
      </div>
  	<div class="row">
  		<div class="col-md-12 copy">
  			<p class="text-center">&copy; Copyright 2019 - Trane Guyana.  All rights reserved.</p>
  		</div>
  	</div>


    </div>

  </footer>



</footer>




</div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether-theme-basic.min.css" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
