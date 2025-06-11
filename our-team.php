<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if (isset($_POST['submit'])) {
  $error = array();
  $name = $_REQUEST['name'];
  if (empty($name)) {
    $error['name'] = "<span class='error'>Name field is required</span>";
  }
  $phone = $_REQUEST['phone'];
  if (empty($phone)) {
    $error['phone'] = "<span class='error'>Phone field is required</span>";
  }
  $email = $_REQUEST['email'];
  if (empty($email)) {
    $error['email'] = "<span class='error'>Email Id field is required</span>";
  }
  $message = $_REQUEST['message'];
  if (empty($message)) {
    $error['message'] = "<span class='error'>Message field is required</span>";
  }
  /*	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
        $secretKey="6LdQPHIpAAAAAFs8JNLbq6CPkkyZKKwVawTTA5QN";
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            $responseData = json_decode($verifyResponse); 
             
            if($responseData->success){ 
                
            }else{
              $error['recaptcha_message']="<span class='error'>Robot verification failed, please try again.</span>"; 
            }
	}else{
	    $error['recaptcha_message']="<span class='error'>Please check the reCAPTCHA checkbox.</span>"; 
	}*/
  if (count($error) == 0) {







    $mail = new PHPMailer(true);
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@bellsnss.com.au';
    $mail->Password = 'isrxjqivbptsebsz';
    $mail->SMTPSecure = 'TLS'; //PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 587;
    $mail->setFrom('info@bellsnss.com.au', "BELL'S");
    $mail->addAddress('info@bellsnss.com.au');
    $mail->addReplyTo($email);
    //$mail->addBCC('bidhi.saklani@gmail.com');
    $mail->IsHTML(true);
    $mail->Body = "<p><strong>Name</strong> : $name<br/><strong>Mobile</strong> : $phone <br/><strong>Email</strong> : $email<br/><strong>Message</strong> : $message</p>";
    $mail->Subject = "Our Team Form Submitted By : " . $name . "";
    if ($mail->Send()) {
      echo "<script>window.location='our-team.php?sent=1'</script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>BELL'S SPECIALISED NURSING & SUPPORT SERVICE - NDIS Registered Provider in Melbourne, VIC, Australia</title>
  <meta name="description" content="BELL’S NSS is established to assist and service people with disability to overcome challenges they face in their everyday life. To provide tailored and dedicated service to ensure we meet or exceed your requirements.NDIS Registered Provider in Melbourne, VIC, Australia " />
  <meta name="keywords" content="BELL'S SPECIALISED NURSING & SUPPORT SERVICE BELL'S SPECIALISED NURSING & SUPPORT SERVICE near me, NDIS Registered Provider in Melbourne, VIC, Australia, NDIS Support Provider in Melbourne, VIC, Australia, NDIS Registered Provider, NDIS Registered Provider near me, NDIS Support Provider, NDIS Support Provider near me, Community Nursing Care, Daily Personal Care, Assistance with Travel, Household Tasks, Participate in Social Activities, Community Nursing Care near me, Daily Personal Care near me, Assistance with Travel near me, Household Tasks near me, Participate in Social Activities near me, Community Nursing Care Services Provider in Melbourne, VIC Australia, Daily Personal Care Services Provider in Melbourne, VIC, Australia, Assistance with Travel Services Provider in Melbourne, VIC, Australia, Household Tasks Services Provider in Melbourne, VIC, Australia, Participate in Social Activities Services Provider in Melbourne, VIC, Australia, Community Nursing Care Services in Melbourne, VIC, Australia, Daily Personal Care Services in Melbourne, VIC, Australia, Assistance with Travel Services in Melbourne, VIC, Australia, Household Tasks Services in Melbourne, VIC, Australia, Participate in Social Activities Services in Melbourne, VIC, Australia " />
  <meta name="robots" content="all" />
  <meta name="resource-type" content="document" />
  <meta name="page-topic" content="NDIS Services" />
  <meta name="clientbase" content="Global" />
  <meta name="distribution" content="World Wide Web" />
  <meta name="audience" content="all" />
  <link rel="canonical" href="https://www.bellsnss.com.au/" />
  <meta name="rating" content="general" />
  <meta id="googlebot" name="googlebot" content="index, follow">
  <meta name="expires" content="never" />
  <meta name="bingbot" content=" index, follow " />
  <meta name="revisit-after" content="Daily" />
  <meta name="author" content="BELL'S SPECIALISED NURSING & SUPPORT SERVICE">
  <meta name="HandheldFriendly" content="True" />
  <meta name="YahooSeeker" content="Index,Follow" />
  <meta name="geo.region" content="AU" />
  <meta name="State" content="Australia" />
  <meta name="City" content="Melbourne" />
  <meta name="subject" content="Rated #1 BELL'S SPECIALISED NURSING & SUPPORT SERVICE - NDIS Registered Provider in Melbourne, VIC, Australia" />

  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
  <link rel="icon" href="images/favicon.png" type="image/x-icon" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>
  <div class="page-wrapper">




    <!-- Header -->
    <?php include("includes/header.php"); ?>
    <!-- End Header -->





    <!--Start Bread Creum -->
    <section class="page-title" style="background-image: url(images/banner-5.jpg); background-attachment: fixed; background-size: cover; background-position: center center;">
      <div class="auto-container">
        <div class="title-outer text-center">
          <ul class="page-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Our Team</li>
          </ul>
          <h1 class="title">Our Team</h1>
        </div>
      </div>
    </section>
    <!--End Bread Creum -->



    <!-- Page Starting -->
    <section class="about-section" style="background-image: url(images/web1.png); background-repeat: repeat;">
      <div class="auto-container">
        <?php if (isset($_REQUEST['sent']) && $_REQUEST['sent'] == 1) { ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thank You!</strong> Your information submitted successfully.

              </div>



            </div>
          </div>
        <?php } ?>
        <div class="row">
          <div class="content-column col-lg-6 wow fadeInLeft">
            <div class="inner-column aboutt jkl">







              <div class="text">


                <h2 class="title jkl">Working At Bell's NSS </h2>
                <p>The team at Bell’s NSS is fun and passionate, and the work we do is rewarding. We provide a positive and caring environment for our team members as well as our clients.<br>

                  We believe in providing the best quality in-home care through personality and personalisation. We do that by finding the right people and developing their skills.</p>
              </div>
              <div class="text">


                <h2 class="title jkl">Who Do We Look For </h2>
                <p>We value diversity and the unique community experience that you can bring to your role. In fact, we’re passionate about matching NDIS participants with disability support workers who understand their social, cultural and community needs. Whether you’re an experienced Support Worker or looking to start an exciting journey in disability care, we want to hear from you.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 wow fadeInRight">
            <div class="formm">
              <div class="sec-title"><!--  <span class="sub-title">Need any help?</span> -->
                <h2 class="title jklll text-center">Apply Now</h2>
              </div>
              <form id="contact_form" name="team_form" action="https://api.web3forms.com/submit" method="post">
                <input type="hidden" name="access_key" value="45478263-773d-4673-8cf6-acdc27016892">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="input-group">
                        <input name="name" type="text" class="form-control" placeholder="First Name *" value="<?php if (isset($name)) {
                                                                                                                echo $name;
                                                                                                              } ?>">
                        <?php if (isset($error['name'])) {
                          echo $error['name'];
                        } ?>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="input-group">
                        <input name="email" type="email" class="form-control" placeholder="Email *" value="<?php if (isset($email)) {
                                                                                                              echo $email;
                                                                                                            } ?>">
                        <?php if (isset($error['email'])) {
                          echo $error['email'];
                        } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="input-group">
                        <input name="phone" type="tel" class="form-control" placeholder="Phone Number *" value="<?php if (isset($phone)) {
                                                                                                                  echo $phone;
                                                                                                                } ?>">
                        <?php if (isset($error['phone'])) {
                          echo $error['phone'];
                        } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="input-group">
                        <textarea name="message" rows="4" class="form-control" placeholder="Message *"><?php if (isset($message)) {
                                                                                                          echo $message;
                                                                                                        } ?>
</textarea>
                        <?php if (isset($error['message'])) {
                          echo $error['message'];
                        } ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <input name="submit" type="submit" class="theme-btn btn-style-one" value="Submit">
                  </div>
                </div>
              </form>
            </div>


          </div>
        </div>
      </div>
    </section>

    <!--End Page  -->






    <!-- Header -->
    <?php include("includes/footer.php"); ?>
    <!-- End Header -->





  </div>

  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/slick-animation.min.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/progress-bar.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/appear.js"></script>
  <script src="js/mixitup.js"></script>
  <script src="js/script.js"></script>
</body>

</html>