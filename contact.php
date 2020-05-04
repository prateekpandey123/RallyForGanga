<!doctype html>
<html lang="en">
  <head>
    <title>Rally For Ganga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
      
      <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Theme Style -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Google Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
      <!-- Theme Style -->
      <link rel="stylesheet" href="css/style1.css">
      <link rel="icon" href="images/logo/mainlogo.png">
      <script>
        function validateForm() {
          var x = document.forms["contact"]["name"].value;
          if (x == "") {
            alert("Name must be filled out");
            return false;
          }
        }
      </script>
    </head>
    <body>
      <header role="banner">
        <nav class="navbar navbar-expand-lg bg-dark">
          <div class="container-fluid" style="background-color: green;">
            <!-- <a class="navbar-brand " href="index.php">
              <span>RallyFor</span><strong>Ganga</strong>
            </a> -->
            <a class="navbar-brand" href="index.php">
            <img src="images/logo/logorally-min.png" alt="" style="height: 75px; width: 75px; border-radius: 100px;">
          </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample05">
              <ul class="navbar-nav pl-md-5 ml-auto">
                <li class="nav-item">
                  <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="services.php" id="dropdown04" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Get Involved</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="team.php">Team Member</a>
                    <a class="dropdown-item" href="events.php">Join The Events</a>
                    <a class="dropdown-item" href="http://www.ncero.com/">Research & Development </a>
                    <a class="dropdown-item" href="#">Follow The Leaderboard</a>
                    <a class="dropdown-item" href="#">Volunteer</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="portfolio.php">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="contact.php">Contact</a>
                </li>
              </ul>
              <a href="Payment/index.php">
                <button type="button" class="glow-on-hover btn-default btn-lg blue-gradient btn-rounded">Donate Now</button>
              </a>
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->
      <div class="inner-page">
        <div class="slider-item overlay" style="background-image: url('images/walpaper/savetree.jpg'); height: 667px;"
          data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-lg-9 text-center col-sm-12 element-animate">
                <h1 class="mb-4">Rally For Ganga</h1>
                <p class="custom-breadcrumbs"><a href="index.php">Home</a> <span class="mx-3">/</span> Contact</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5 order-2">
              <form onsubmit="validateForm()" name="contact" action="#" method="post">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter Full Name" class="form-control" required="required">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" placeholder="Phone Number" class="form-control" required="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Email" class="form-control" required="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="message">Write Message</label>
                    <textarea name="message" name="message" placeholder="write Message....!" class="form-control " cols="30" rows="8" required="required"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" name="submit" value="Send Message" class="btn blue-gradient btn-primary px-3 py-3">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6 order-2 mb-5">
              <div class="row justify-content-right">
                <div class="col-md-8 mx-auto contact-form-contact-info">
                  <p class="d-flex">
                    <span class="ion-ios-location icon mr-5"></span>
                    <span>House No:- A/140, Baba Balak Nath Mandir,
                    Chander Vihar, New Delhi-110091</span>
                  </p>
                  
                  <p class="d-flex">
                    <span class="ion-ios-telephone icon mr-5"></span>
                    <span>+91-7598121941</span>
                  </p>
                  
                  <p class="d-flex">
                    <span class="ion-android-mail icon mr-5"></span>
                    <span>dhartifoundation.info@gmail.com</span>
                  </p>
                  <a href="https://www.google.com/maps/place/Chander+Vihar,+Mandawali,+Delhi,+110092/@28.6314238,77.293262,16z/data=!3m1!4b1!4m8!1m2!2m1!1sHouse+No:-+A%2F140,+Baba+Balak+Nath+Mandir,+Chander+Vihar,+New+Delhi-110091!3m4!1s0x390cfb52a8d898d3:0xcb5af128d0c8b0eb!8m2!3d28.6331132!4d77.2972601" class="glow-on-hover btn-default btn-lg blue-gradient btn-rounded"><i class="fas fa-map-marker-alt"></i>  Get Direction </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer class="site-footer" role="contentinfo">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4 mb-5">
              <h3 class="mb-4">About Us</h3>
              <p class="mb-5">The Ganga Water Rally is the first major water sporting events of its kind in the state. Here, the adventurous persons would be taken on a nerve rattling sojourn down the Ganga from Prayagraj to Varanasi through Mirzapur and Chunar.!</p>
            </div>
            <div class="col-md-5 mb-5 pl-md-5">
              <div class="mb-5">
                <h3 class="mb-4">Contact Info</h3>
                <ul class="list-unstyled footer-link">
                  <li class="d-block">
                    <span class="d-block">Address:</span>
                    <span class="text-white">House No:- A/140, Baba Balak Nath Mandir,
                    Chander Vihar, New Delhi-110091</span>
                  </li>
                  <li class="d-block">
                    <span class="d-block">Telephone:</span><span class="text-white">+91-7598121941</span>
                  </li>
                  <li class="d-block">
                    <span class="d-block">Email:</span><span class="text-white">dhartifoundation.info@gmail.com</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 mb-5">
              <h3>Quick Links</h3>
              <ul class="list-unstyled footer-link">
                <li><a href="about.php">About</a></li>
                <li><a href="http://www.ncero.com/">Get Involved</a></li>
                <li><a href="portfolio.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-3">
            </div>
          </div>
          
        </div>
      </footer>
      <!-- END footer -->

      <!-- Footer -->
<footer class="page-footer font-small" style="background-color: #333333; rgb(51,51,51);">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic" href="https://www.facebook.com/nishant.b.rajput">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" href="https://twitter.com/GangaRally">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Youtube +-->
          <a class="ins-ic mr-3" href="https://www.youtube.com/channel/UCpblaL_wwjaa0SlODsaWtdw">
            <i class="fab fa-youtube fa-lg mr-md-5 mr-3 fa-2x"></i>
          </a>
          <!--Linkedin -->
          <a class="li-ic" href="https://www.linkedin.com/in/nishant-bhardwaj-rajput-51530869/">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="https://www.instagram.com/kavinishantbhardwaj/">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> RallyForGanga</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

      <!-- loader -->
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
      stroke="#f4b214" /></svg></div>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/main.js"></script>
      <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

      <?php
        include 'layouts/link.php';
        $con=mysqli_connect("localhost","root","","rallyfortree") or die(mysqli_error());
        require 'MailSend/PHPMailer-master/PHPMailerAutoload.php';
        if((isset($_POST['submit'])))
        {
          $name = $con->real_escape_string($_POST['name']);
          $phone = $con->real_escape_string($_POST['phone']);
          $email = $con->real_escape_string($_POST['email']);
          $message = $con->real_escape_string($_POST['message']);
          $sql="INSERT INTO contact (name, phone, email, message) VALUES('".$name."','".$phone."', '".$email."', '".$message."')";
            $result = $con->query($sql);
            // $mailto = $_POST['mail_to'];
               // $mailSub = $_POST['mail_sub'];
               // $mailMsg = $_POST['mail_msg'];

               
               $mail = new PHPMailer();
               $mail ->IsSmtp();
               $mail ->SMTPDebug = 0;
               $mail ->SMTPAuth = true;
               $mail ->SMTPSecure = 'ssl';
               $mail ->Host = "smtp.gmail.com";
               $mail ->Port = 465; // or 578
               $mail ->IsHTML(true);
               $mail ->Username = "prateekpandey736@gmail.com";
               $mail ->Password = "Gold@8687"; // Gmail Password
               $mail ->SetFrom("prateekpandey736@gmail.com");
               $mail ->Subject = 'Message From Rally For Ganga';
               $mail ->Body = 'Thanku ';
               $mail ->AddAddress($email);
               $mail->send();

          if($result>0)
          {
            ?>
              <script>
                sweetAlert(
                {
                  title: "Thanks for Appreciating Your Interest..",
                  text: "Just wait for the second...",
                  type: "success"
                },
                function () {
                  window.location.href = 'contact.php';
                });
              </script>
            <?php
          }
          else
          {
            ?>
              <script>
                swal("Incorrect Code", "You clicked the button!", "error");
              </script>
            <?php
          }   
        }
      ?>

 <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+918687767493", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

    </body>
  </html>

