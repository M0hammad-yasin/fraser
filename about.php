<!doctype html>
<html lang="en">

<head>
  <?php
  $pageTitle = "About Us - Fraser Facility Services";
  include 'components/head.php';
  ?>
</head>

<body>
  <!-- Header Start -->
  <?php include 'components/header.php'; ?>
  <!-- Header End -->

  <!-- Page Header Start -->
  <?php 
  $pageHeaderTitle = "About Fraser Facility Services";
  $pageHeaderEyebrow = "Who We Are";
  $pageHeaderSubtitle = "Integrated facility solutions delivering excellence across the Lower Mainland.";
  $pageHeaderBg = "./assets/img/about_us/about.jpg";
  $breadcrumbs = [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'About Us', 'url' => '']
  ];
  include 'components/page-header.php'; 
  ?>
  <!-- Page Header End -->

  <!-- About Start -->
  <div class="container-fluid py-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div
            class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
            <i class="fa fa-5x fa-award text-primary mb-4"></i>
            <h1 class="display-2 text-white mb-2" data-toggle="counter-up">
              15
            </h1>
            <h2 class="text-white m-0 text-center">Years of EXPERIENCE</h2>
          </div>
        </div>
        <div class="col-lg-7 pt-5 pb-lg-5">
          <h6
            class="text-secondary font-weight-semi-bold text-uppercase mb-3">
            About Fraser Facility Services
          </h6>
          <h1 class="mb-4 section-title">
            One Partner. Complete Facility Solutions.
          </h1>
          <h5 class="text-muted font-weight-normal mb-3">
            Fraser Facility Services provides integrated solutions that keep your property clean, safe, and operating at its best.
          </h5>
          <p>
            One partner for commercial and residential facility needs across the Fraser region. We emphasize reliability, professionalism, and long-term partnership so you can focus on what matters most.
          </p>
          <div class="d-flex align-items-center pt-4">
            <a href="" class="btn btn-primary mr-5">Learn More</a>
            <button
              type="button"
              class="btn-play"
              data-toggle="modal"
              data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
              data-target="#videoModal">
              <span></span>
            </button>
            <h5
              class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">
              Play Video
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Video Modal Start -->
  <div
    class="modal fade"
    id="videoModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe
              class="embed-responsive-item"
              src=""
              id="video"
              allowscriptaccess="always"
              allow="autoplay"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Video Modal End -->

  <!-- Features Start -->
  <div class="container-fluid bg-light py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-7 pt-lg-5 pb-3">
          <h6
            class="text-secondary font-weight-semi-bold text-uppercase mb-3">
            Why Choose Us
          </h6>
          <h1 class="mb-4 section-title">
            Your Trusted Facility Partner
          </h1>
          <p class="mb-4">
            We provide a single point of contact for all your facility needs, ensuring peace of mind and exceptional results.
          </p>
          <div class="row">
            <div class="col-sm-6 mb-4">
              <h5 class="font-weight-semi-bold"><i class="fa fa-check text-primary mr-2"></i>Trusted & Reliable</h5>
              <p class="mb-0">We show up, follow through, and stand behind our work.</p>
            </div>
            <div class="col-sm-6 mb-4">
              <h5 class="font-weight-semi-bold"><i class="fa fa-check text-primary mr-2"></i>Experienced Team</h5>
              <p class="mb-0">Skilled professionals committed to quality and safety.</p>
            </div>
            <div class="col-sm-6 mb-4">
              <h5 class="font-weight-semi-bold"><i class="fa fa-check text-primary mr-2"></i>Responsive & Flexible</h5>
              <p class="mb-0">Quick response times and custom solutions that fit your needs.</p>
            </div>
            <div class="col-sm-6 mb-4">
              <h5 class="font-weight-semi-bold"><i class="fa fa-check text-primary mr-2"></i>Quality & Care</h5>
              <p class="mb-0">We treat your property like it's our own.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5" style="min-height: 400px">
          <div class="position-relative h-100 rounded overflow-hidden">
            <img
              class="position-absolute w-100 h-100"
              src="./assets/img/about_us/feature.jpg"
              style="object-fit: cover" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- CTA Estimation Section Start -->
  <div class="container-fluid py-5" style="background: linear-gradient(135deg, #0F2747 0%, #153761 100%);">
    <div class="container py-5">
      <div class="row justify-content-center text-center">
        <div class="col-lg-9">
          <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">Free Facility Consultation</span>
          <h1 class="display-4 font-weight-bold text-white mb-3">Ready to Elevate Your Property?</h1>
          <p class="lead text-white-50 mb-5 mx-auto" style="max-width: 650px; font-size: 1.05rem;">
            Get a comprehensive, itemized estimate tailored specifically to your building or strata facility. Fast turnaround with zero obligation.
          </p>

          <!-- 3 Quick Value Badges -->
          <div class="row justify-content-center mb-5 text-left">
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="d-flex align-items-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                <i class="fa fa-2x fa-stopwatch text-primary mr-3"></i>
                <div>
                  <h6 class="text-white mb-0 font-weight-bold">24h Turnaround</h6>
                  <small class="text-white-50">Fast, accurate proposals</small>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="d-flex align-items-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                <i class="fa fa-2x fa-clipboard-check text-primary mr-3"></i>
                <div>
                  <h6 class="text-white mb-0 font-weight-bold">Free Site Audit</h6>
                  <small class="text-white-50">Detailed property walkthrough</small>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex align-items-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                <i class="fa fa-2x fa-shield-alt text-primary mr-3"></i>
                <div>
                  <h6 class="text-white mb-0 font-weight-bold">100% Guaranteed</h6>
                  <small class="text-white-50">Consistent quality care</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <a href="contact.php" class="btn btn-primary py-3 px-5 font-weight-bold mr-sm-3 mb-3 mb-sm-0 shadow-sm" style="border-radius: 50px; font-size: 1rem;">
              Get a Free Estimate <i class="fa fa-arrow-right ml-2"></i>
            </a>
            <a href="tel:17788861491" class="btn btn-outline-light py-3 px-4 font-weight-bold" style="border-radius: 50px; font-size: 1rem;">
              <i class="fa fa-phone-alt text-primary mr-2"></i>+1 778-886-1491
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- CTA Estimation Section End -->

  <!-- Footer Start -->
  <?php include 'components/footer.php'; ?>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="./assets/js/main.js"></script>
</body>

</html>