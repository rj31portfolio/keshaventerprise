<?php require_once('../includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('../includes/head.php');?>
</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->
<?php require_once('../includes/preloader.php');?>
<!-- preloader end -->

<!-- preloader end -->


<!--header start-->
<?php require_once('../includes/header.php');?>
<!--header end-->
<section class="page-title" data-bg-img="images/bg/02.webp" style="background-image: url(&quot;images/bg/02.webp&quot;);">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <!-- Breadcrumb Links -->
        
        <!-- Page Title -->
        <h1>
          NC Press Brake
        </h1>
        <p class="text-white">
          <a  href="index.php">Home</a> | <a  href="#">NC Press Brake</a>
        </p>
      </div>
    </div>
  </div>
</section>
 <!--product start-->
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-6">
            <img class="img-fluid w-100" src="images/service/nc_system.png" alt="" />
          </div>
          <div class="col-lg-7 col-md-6 mt-5 mt-md-0 ps-lg-5">
            <div class="product-details">
              <h3>NC Press Brake</h3>
              <div class="product-price my-4">
                <span class="product-price text-black">
                  <span class="text-theme">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </span>
              </div>
              <ul class="list-unstyled mb-4">
                <li class="mb-2">
                  <span class="text-black"> Availibility: </span> In Stock
                </li>
                <li>
                  <span class="text-black"> Categories :</span> Equipment
                </li>
              </ul>
              <p>High-performance NC Press Brake machines designed for precision metal bending. Ideal for sheet metal fabrication with user-friendly controls and reliable accuracy.</p>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                </div>
              </div>
              <div class="product-link d-flex align-items-center mt-5">
                  <button class="themeht-btn primary-btn me-3" type="button" data-bs-toggle="modal" data-bs-target="#enquiryModal">
              <span>Enquiry Now</span>
              <i class="bi bi-person-lines-fill"></i>
            </button>
                <button class="themeht-btn dark-btn" type="button"><span>WhatsApp</span><i
                    class="bi bi-whatsapp"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
       <!-- =================== MODAL =================== -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" style="margin-top: 100px; z-index: 1080;">
    <div class="modal-content position-relative">

      <!-- Close Button -->
      <button type="button" class="btn-close position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>

      <div class="modal-body p-0">
        <!-- Form Starts -->
        <div class="col-12">
          <div class="primary-bg p-5 form-border">
            <div class="theme-title text-white">
              <h6>Get In Touch</h6>
              <h2 class="text-anime-style">Enquiry For Machines</h2>
              <div class="title-divider">
                <span class="title-divider-separator"></span>
              </div>
            </div>
            <form id="contact-form" method="post" action="submit.php">
              <div class="messages"></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter Your Name" required data-error="Name is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter Email Address" required data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Enter Phone number" required data-error="Phone is required">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control form-select" name="service" required>
                      <option selected disabled>Select Service</option>
                      <option value="Industry">Industry</option>
                      <option value="Construction">Construction</option>
                      <option value="Factory">Factory</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Write Your Message Here..." rows="4" required data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <button type="submit" class="themeht-btn dark-alt w-100">
                    <span>Send Message</span>
                    <i class="flaticon flaticon-double-chevron"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <!-- Form Ends -->
      </div>
    </div>
  </div>
</div>
<div class="tab-content p-0 pt-0 p-5">
  <!-- Product Description Tab -->
  <div role="tabpanel" class="tab-pane fade show active container" id="tab3-1">
    <h5 class="mb-3">Product Description</h5>
    <p class="mb-4">
      The NC Press Brake is a high-performance metal bending machine built for precision and productivity. It features a robust H-frame structure, hydraulic power, and a CYBELEC controller from Switzerland. The machine supports advanced X and Y-axis control, enabling accurate back gauge positioning and bending angles with ±0.1mm accuracy. It offers fast setup, programmable operations, and can store up to 200 programs and 50 tool configurations, making it ideal for both batch and custom jobs.
    </p>

    <!-- NC System Info -->
    <h5 class="mb-3">NC System for X-Axis or X & Y-Axis</h5>
    <ul class="mb-4 list-unstyled">
      <li><i class="bi bi-star-fill text-theme me-2"></i><strong>Cybelec Controller</strong></li>
      <li><i class="bi bi-star-fill text-theme me-2"></i><strong>Ball screw Backgauge & Servomotor</strong></li>
      <li><i class="bi bi-star-fill text-theme me-2"></i><strong>Timing Belt – Pulley System</strong></li>
    </ul>

    <!-- Advantages Section -->
    <h5 class="mb-3">Advantages of NC System</h5>
    <ul class="list-unstyled">
      <li><i class="bi bi-star-fill text-theme me-2"></i>Touch screen Press Brake controller from CYBELEC Switzerland.</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>Quick changeover for sample and mass production.</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>High-speed back gauge movement by AC servo drive.</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>Programmable angle correction & back gauge correction.</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>User-friendly color touch screen for easy programming.</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>Two-axis automatic control – Y-Axis (bending) & X-Axis (back gauge).</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>Multiple bends with programmable back gauge positions.</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>200 programs & 24 bends with individual back gauge positions per program.</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>Storage for 50 different punches and dies.</li>
      <li><i class="bi bi-star-fill text-theme me-2"></i>±0.1 mm back gauge positioning accuracy.</li>
    </ul>
  </div>
<div class="container my-5">
  <div class="row g-4 justify-content-center">
    
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="border border-danger rounded p-3 text-center">
        <img src="images/service/Back_gauge-fingers.png" class="img-fluid mb-3" alt="Back Gauge Fingers">
        <h5>Back Gauge Fingers</h5>
        <div class="d-flex justify-content-around mt-3">
          <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#enquiryModal">ENQUIRY</a>
          <a href="https://wa.me/919873673917" class="btn btn-outline-danger">WHATSAPP</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="border border-danger rounded p-3 text-center">
        <img src="images/service/diepunch.png" class="img-fluid mb-3" alt="Die Punch">
        <h5>Die Punch</h5>
        <div class="d-flex justify-content-around mt-3">
          <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#enquiryModal">ENQUIRY</a>
          <a href="https://wa.me/919873673917" class="btn btn-outline-danger">WHATSAPP</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="border border-danger rounded p-3 text-center">
        <img src="images/service/Schneider_electrical_components.png" class="img-fluid mb-3" alt="Schneider Electrical Components">
        <h5>Schneider Electrical Components</h5>
        <div class="d-flex justify-content-around mt-3">
          <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#enquiryModal">ENQUIRY</a>
          <a href="https://wa.me/919873673917" class="btn btn-outline-danger">WHATSAPP</a>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="container my-4">
  <div class="equipment-section border p-4">
    <div class="equipment-heading bg-danger text-white px-4 py-2 mb-3 d-inline-block fw-bold">
      STANDARD EQUIPMENT
    </div>
    <ul class="list-unstyled mb-0">
      <li><i class="bi bi-check2-circle text-success me-2"></i>Front Cylinder Mounted Design</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>Powered Depth Y-axis & Back gauge X-axis</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>Servo motor controlled back gauge</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>HIWIN Ball screws & Polished rod with 0.01 mm accuracy</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>Plate Support Arms</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>Germany Bosch-Rexroth Hydraulic</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>Schneider Electrics</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>Hydraulic & Electrical overload protection</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>Top and Bottom Tooling(86°, R0.6mm)</li>
      <li><i class="bi bi-check2-circle text-success me-2"></i>Giovenzana, Italy Electronic Foot Switch and limit switches</li>
    </ul>
  </div>
</div>
</div>
<!--body content end--> 

<!--footer start-->
<?php require_once('../includes/footer.php');?>