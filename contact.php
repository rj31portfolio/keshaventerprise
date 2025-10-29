<?php require_once('includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('includes/head.php');?>
</head>

<body>
<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->
<?php require_once('includes/preloader.php');?>
<!-- preloader end -->

<!--header start-->
<?php require_once('includes/header.php');?>
<!--header end-->
<section class="page-title" data-bg-img="images/bg/02.webp" style="background-image: url(&quot;images/bg/02.webp&quot;);">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1>
          Contact Us
        </h1>
      </div>
    </div>
  </div>
</section>

<div class="page-content">

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-12">
        <div class="contact-media text-center">
          <img class="img-fluid" src="images/location-bg.jpg" alt="Image">
          <div class="contact-info">
            <i class="flaticon flaticon-pin-1"></i>
            <h4>Our Address</h4>
            <p class="mb-0"> H-141, Sector-1, DSIIDC Industrial Area Bawana, New Delhi- 110039 (INDIA)</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="contact-media text-center">
          <img class="img-fluid" src="images/Service-Inquiry.png" alt="Image">
          <div class="contact-info">
            <i class="flaticon flaticon-telephone"></i>
            <h4>Mr. Surendra Kumar Sharma</h4>
            <a href="tel:+91-9873673917">+91-9873673917</a>
            <a href="tel:+91-9312521806">+91-9312521806</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="contact-media text-center">
          <img class="img-fluid" src="images/Service-Inquiry.png" alt="Image">
          <div class="contact-info">
            <i class="flaticon flaticon-telephone"></i>
            <h4>Mr. Abhishek Shandilya</h4>
            <a href="tel:+91-9999186881">+91-9999186881</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="contact-media text-center">
          <img class="img-fluid" src="images/mail-bg.jpg" alt="Image">
          <div class="contact-info">
            <i class="flaticon flaticon-mail"></i>
            <h4>Email Address</h4>
            <a href="mailto:info@keshaventerprises.com">info@keshaventerprises.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-12 ps-lg-10 order-1">
        <div class="theme-title">
          <h6>Get in Touch</h6>
          <h2 class="text-anime-style">Drop Us a Line ! </h2>
          <div class="title-divider">
            <span class="title-divider-separator"></span>
          </div>
        </div>
        <form id="contact-form" method="post" action="">
          <div class="messages"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter Your Name" required="required" data-error="Name is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter Email Address" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Enter Phone number" required="required" data-error="Phone is required">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control form-select" aria-label="Default select example">
                  <option selected>Select Service</option>
                  <option value="1">Industry</option>
                  <option value="2">Construction</option>
                  <option value="3">Factory</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea id="form_message" name="message" class="form-control" placeholder="Write Your Message Here..." rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <button class="themeht-btn primary-btn"  type="submit">
                <span>Send Message</span>
                <i class="flaticon flaticon-double-chevron"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 col-md-12 mt-6 mt-lg-0">
        <div class="map iframe-h-2">
          <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Keshav Enterprises&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!--footer start-->
<?php require_once('includes/footer.php');?>
