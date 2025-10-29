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
    <section class="page-title" data-bg-img="images/bg/02.webp"
      style="background-image: url(&quot;images/bg/02.webp&quot;);">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- Breadcrumb Links -->

            <!-- Page Title -->
            <h1>
              Over Crank Shearing Machine
            </h1>
            <p class="text-white">
              <a href="index.php">Home</a> | <a href="#">Over Crank Shearing Machine</a>
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
            <img class="img-fluid w-100" src="images/service/Over-Crank-Shearing-Machine.png" alt="" />
          </div>
          <div class="col-lg-7 col-md-6 mt-5 mt-md-0 ps-lg-5">
            <div class="product-details">
              <h3>Over Crank Shearing Machine</h3>
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
              <p>Over Crank Shearing Machine ensures high operational efficiency, minimal maintenance, and long-lasting
                performance. Equipped with modern control systems, our machinery offers user-friendly interfaces,
                programmable operations, and quick setup for various production requirements.</p>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                </div>
              </div>
              <div class="product-link d-flex align-items-center mt-5">
                <button class="themeht-btn primary-btn me-3" type="button" data-bs-toggle="modal"
                  data-bs-target="#enquiryModal">
                  <span>Enquiry Now</span>
                  <i class="bi bi-person-lines-fill"></i>
                </button>
                        <!-- WhatsApp Button -->
<a class="themeht-btn dark-btn" 
   href="https://wa.me/919873673917" 
   target="_blank">
  <span>WhatsApp</span> <i class="bi bi-whatsapp py-4"></i>
</a>

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
          <button type="button" class="btn-close position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal"
            aria-label="Close"></button>

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
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter Your Name"
                          required data-error="Name is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input id="form_email" type="email" name="email" class="form-control"
                          placeholder="Enter Email Address" required data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input id="form_phone" type="tel" name="phone" class="form-control"
                          placeholder="Enter Phone number" required data-error="Phone is required">
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
                        <textarea id="form_message" name="message" class="form-control"
                          placeholder="Write Your Message Here..." rows="4" required
                          data-error="Please, leave us a message."></textarea>
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
                  <p>
                    Looking for best <b>Over Crank Shearing Machine</b>? Backed by skilled professionals and advanced
                    technologies, our organization is engaged in manufacturing and supplying high-performance <b>Over
                      Crank Shearing Machine</b> designed for precision, durability, and maximum productivity.
                    Engineered with the latest innovations, our machines are well-suited for both sample and mass
                    production and are trusted across diverse industrial applications.
                  </p>

                  <p>
                    Built using top-grade materials and adhering to strict industry standards, this <b>Over Crank
                      Shearing Machine</b> ensures high operational efficiency, minimal maintenance, and long-lasting
                    performance. Equipped with modern control systems, our machinery offers user-friendly interfaces,
                    programmable operations, and quick setup for various production requirements.
                  </p>

                  <p>
                    Whether you're looking for accuracy in operation, quick changeovers, or safety-enhanced features,
                    our <b>Over Crank Shearing Machine</b> stands out in reliability and innovation. Every unit
                    undergoes multiple quality checks to deliver a flawless range to our clients.
                  </p>

                </div>

                <div role="tabpanel" class="tab-pane fade" id="tab3-2">
                  <h5 class="mb-3">Additional information</h5>
                  <table class="table table-bordered mb-0">
                    <tbody>
                      <tr>
                        <td>Max Force / Load</td>
                        <td>0-30 Ton</td>
                      </tr>
                      <tr>
                        <td>Control Type</td>
                        <td>CNC</td>
                      </tr>
                      <tr>
                        <td>Condition</td>
                        <td>New</td>
                      </tr>
                      <tr>
                        <td>Material</td>
                        <td>Steel</td>
                      </tr>
                      <tr>
                        <td>Automatic Grade</td>
                        <td>Automatic</td>
                      </tr>
                      <tr>
                        <td>Application</td>
                        <td>Industrial</td>
                      </tr>
                      <tr>
                        <td>Power Source</td>
                        <td>Hydraulic</td>
                      </tr>
                      <tr>
                        <td>Categories</td>
                        <td>Bending Machine</td>
                      </tr>
                      <tr>
                        <td>Type</td>
                        <td>H Frame</td>
                      </tr>
                      <tr>
                        <td>Load (Ton)</td>
                        <td>30-60 Ton</td>
                      </tr>
                      <tr>
                        <td>Color</td>
                        <td>Blue</td>
                      </tr>
                      <tr>
                        <td>Type of Press</td>
                        <td>H-Frame Press</td>
                      </tr>
                    </tbody>
                  </table>
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
                            <p>I had a hydraulic machine that needed repair. Keshav Enterprises was able to fix it
                              quickly
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