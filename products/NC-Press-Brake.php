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
<section class="page-title" data-bg-img="images/bg/02.jpg" style="background-image: url('images/bg/02.jpg');">
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
            <img class="img-fluid w-100" src="images/service/dframe.png" alt="" />
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
  <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
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
<!--tab start-->
    <section class="pt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="tab">
              <!-- Nav tabs -->
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active ms-0" id="nav-tab1" data-bs-toggle="tab" href="#tab3-1" role="tab"
                    aria-selected="true">Description</a>
                  <a class="nav-item nav-link" id="nav-tab2" data-bs-toggle="tab" href="#tab3-2" role="tab"
                    aria-selected="false">Additional information</a>
                  <a class="nav-item nav-link" id="nav-tab3" data-bs-toggle="tab" href="#tab3-3" role="tab"
                    aria-selected="false">Reviews (4)</a>
                </div>
              </nav>
              <!-- Tab panes -->
              <div class="tab-content p-0 pt-5">
                <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
                  <h5 class="mb-3">Product Description</h5>
                  <p class="mb-0">The NC Press Brake is a powerful and efficient machine used for precise sheet metal bending in industrial and fabrication environments. With numerical control technology, it offers enhanced accuracy, repeatability, and ease of operation for bending tasks of various complexities. Built with a strong frame and equipped with user-friendly controls, the NC Press Brake is ideal for manufacturers looking to improve productivity while maintaining high-quality standards. Whether you're working with steel, aluminum, or other metals, this machine delivers consistent results and long-term reliability.</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab3-3">
                  <div class="row total-rating align-items-center">
                    <div class="col-md-6">
                      <div class="dark-bg text-center p-5">
                        <h5 class="text-white">Overall</h5>
                        <h4 class="text-white">4.0</h4>
                        <h6 class="text-white">(04 Reviews)</h6>
                      </div>
                    </div>
                    <div class="col-md-6 mt-3 mt-lg-0">
                      <div class="rating-list">
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3">5 Star</div>
                          <div class="w-100">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <span class="text-grey ms-3">90%</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3">4 Star</div>
                          <div class="w-100">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <span class="text-grey ms-3">60%</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3">3 Star</div>
                          <div class="w-100">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 40%;"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <span class="text-grey ms-3">40%</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3">2 Star</div>
                          <div class="w-100">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <span class="text-grey ms-3">20%</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3">1 Star</div>
                          <div class="w-100">
                            <div class="progress" style="height: 5px;">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <span class="text-grey ms-3">10%</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-5">
                    <div class="col-md-7">
                      <div class="review-list border border-light p-5">

                        <!-- Review 1 -->
                        <div class="row border-bottom border-light pb-5 mb-5">
                          <div class="mb-4 mb-md-0 col-md-auto">
                            <img class="img-fluid" alt="image" src="https://randomuser.me/api/portraits/men/45.jpg">
                          </div>
                          <div class="col-md">
                            <h6 class="mb-2">Ravi Sharma (New Delhi)</h6>
                            <p>Keshav Enterprises truly stands out when it comes to machine services. Their team was
                              professional, prompt, and ensured our production line was running smoothly. Highly
                              recommended!</p>
                            <span class="text-theme">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                            </span>
                          </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="row border-bottom border-light pb-5 mb-5">
                          <div class="mb-4 mb-md-0 col-md-auto">
                            <img class="img-fluid" alt="image" src="https://randomuser.me/api/portraits/women/76.jpg">
                          </div>
                          <div class="col-md">
                            <h6 class="mb-2">Priya Verma (New Delhi)</h6>
                            <p>I ordered a power press machine from Keshav Enterprises. The delivery was on time and the
                              after-sales support was excellent. The machine is working perfectly. Very satisfied with
                              their service!</p>
                            <span class="text-theme">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                            </span>
                          </div>
                        </div>

                        <div class="row border-bottom border-light pb-5 mb-5">
                          <div class="mb-4 mb-md-0 col-md-auto">
                            <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="" class="img-fluid">
                          </div>
                          <div class="col-md">
                            <h6>Rahul Kumar (New Delhi)</h6>
                            <p>I had a hydraulic machine that needed repair. Keshav Enterprises was able to fix it quickly
                              and at a reasonable price. Highly recommended!</p>
                              <span class="text-theme">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                              </span>
                          </div>
                        </div>

                        <!-- Review 3 -->
                        <div class="row">
                          <div class="mb-4 mb-md-0 col-md-auto">
                            <img class="img-fluid" alt="image" src="https://randomuser.me/api/portraits/men/69.jpg">
                          </div>
                          <div class="col-md">
                            <h6 class="mb-2">Amit Tiwari (New Delhi)</h6>
                            <p>Impressed with their quick turnaround and technical knowledge. They repaired my hydraulic
                              machine efficiently and it's running like new. One of the best machine service providers
                              in Delhi!</p>
                            <span class="text-theme">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--tab end-->




</div>

<!--body content end--> 

<!--footer start-->
<?php require_once('../includes/footer.php');?>