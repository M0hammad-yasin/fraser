<!doctype html>
<html lang="en">

<head>
  <?php
  $pageTitle = "Services - Fraser Facility Services";
  $customCss = "./assets/css/service.css";
  include 'components/head.php';
  ?>
</head>

<body>
  <!-- Header Start -->
  <?php include 'components/header.php'; ?>
  <!-- Header End -->

  <!-- Page Header Start -->
  <?php
  $pageHeaderTitle = "Complete Facility Solutions";
  $pageHeaderEyebrow = "Our Services";
  $pageHeaderSubtitle = "One Partner. Every Service. Comprehensive property care engineered for excellence.";
  $pageHeaderBg = "./assets/img/home/carousel-2.jpg";
  $breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Services', 'url' => '']
  ];
  include 'components/page-header.php';
  ?>
  <!-- Page Header End -->

  <!-- Fraser Advantage (Sleek Service Pillars) Start -->
  <section class="container-fluid bg-white py-5 border-bottom fraser-compact-advantage">
    <div class="container py-2">
      <div class="row">
        <!-- Col 1: Integrated Management -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="compact-adv-item h-100 p-3 rounded">
            <div class="d-flex align-items-center mb-3">
              <div class="compact-adv-icon mr-3">
                <i class="fa fa-layer-group"></i>
              </div>
              <div>
                <h6 class="mb-0 font-weight-bold text-dark">One-Partner Care</h6>
                <small class="text-secondary font-weight-bold">End-to-End Solutions</small>
              </div>
            </div>
            <ul class="compact-adv-list list-unstyled mb-0">
              <li><i class="fa fa-check text-primary mr-2"></i>Janitorial & Day Porter</li>
              <li><i class="fa fa-check text-primary mr-2"></i>General Handyman Repairs</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Consolidated Invoicing</li>
            </ul>
          </div>
        </div>

        <!-- Col 2: Rapid Response & Grounds -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="compact-adv-item h-100 p-3 rounded">
            <div class="d-flex align-items-center mb-3">
              <div class="compact-adv-icon mr-3">
                <i class="fa fa-bolt"></i>
              </div>
              <div>
                <h6 class="mb-0 font-weight-bold text-dark">Rapid Dispatch</h6>
                <small class="text-secondary font-weight-bold">24/7 Lower Mainland</small>
              </div>
            </div>
            <ul class="compact-adv-list list-unstyled mb-0">
              <li><i class="fa fa-check text-primary mr-2"></i>Snow & Ice Management</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Urgent Maintenance Calls</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Priority Emergency Line</li>
            </ul>
          </div>
        </div>

        <!-- Col 3: Compliance & Mechanical -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="compact-adv-item h-100 p-3 rounded">
            <div class="d-flex align-items-center mb-3">
              <div class="compact-adv-icon mr-3">
                <i class="fa fa-shield-alt"></i>
              </div>
              <div>
                <h6 class="mb-0 font-weight-bold text-dark">Vetted & Insured</h6>
                <small class="text-secondary font-weight-bold">Safety & Compliance</small>
              </div>
            </div>
            <ul class="compact-adv-list list-unstyled mb-0">
              <li><i class="fa fa-check text-primary mr-2"></i>WorkSafeBC Certified</li>
              <li><i class="fa fa-check text-primary mr-2"></i>HVAC, Plumbing & Electrical</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Comprehensive Liability</li>
            </ul>
          </div>
        </div>

        <!-- Col 4: Quality Control & Specialized -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="compact-adv-item h-100 p-3 rounded">
            <div class="d-flex align-items-center mb-3">
              <div class="compact-adv-icon mr-3">
                <i class="fa fa-clipboard-check"></i>
              </div>
              <div>
                <h6 class="mb-0 font-weight-bold text-dark">Guaranteed Quality</h6>
                <small class="text-secondary font-weight-bold">Audits & Deep Cleans</small>
              </div>
            </div>
            <ul class="compact-adv-list list-unstyled mb-0">
              <li><i class="fa fa-check text-primary mr-2"></i>Digital Walkthrough Logs</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Pressure Washing & Floors</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Post-Construction Care</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fraser Advantage End -->

  <!-- Services Start -->
  <?php
  $servicesSectionEyebrow = "Our Services";
  $servicesSectionTitle = "Complete Facility Solutions";
  $servicesSectionDesc = "One Partner. Every Service. We provide a full suite of services to ensure your property remains clean, safe, and fully operational.";
  include 'components/services-section.php';
  ?>
  <!-- Services End -->
  <!-- Who We Serve Section (Stacked Beneath) Start -->
  <div class="container-fluid who-we-serve-bg py-5">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mb-5">
          <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3" style="letter-spacing: 2px;">Sectors & Industries</h6>
          <h1 class="mb-4 section-title">Who We Serve</h1>
          <p class="text-muted">Tailored facility care solutions engineered for commercial, residential, and industrial properties across the Lower Mainland.</p>
        </div>
      </div>

      <div class="row">
        <!-- 1. Office Buildings -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-building"></i>
            </div>
            <h4 class="serve-card-title">Office Buildings</h4>
            <p class="serve-card-desc">Corporate head offices, multi-tenant commercial towers, and professional business centers requiring immaculate presentation.</p>
          </div>
        </div>

        <!-- 2. Retail & Restaurants -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-store"></i>
            </div>
            <h4 class="serve-card-title">Retail & Restaurants</h4>
            <p class="serve-card-desc">High-traffic shopping complexes, dining establishments, and retail stores where cleanliness drives customer confidence.</p>
          </div>
        </div>

        <!-- 3. Medical & Dental Offices -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-clinic-medical"></i>
            </div>
            <h4 class="serve-card-title">Medical & Dental Offices</h4>
            <p class="serve-card-desc">Healthcare facilities and clinics adhering to rigorous sanitation standards, infection control, and spotless presentation.</p>
          </div>
        </div>

        <!-- 4. Strata & Multi-Family -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-city"></i>
            </div>
            <h4 class="serve-card-title">Strata & Multi-Family</h4>
            <p class="serve-card-desc">Condominiums, townhome communities, and apartment complexes needing dependable common area care and maintenance.</p>
          </div>
        </div>

        <!-- 5. Warehouses & Industrial -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-warehouse"></i>
            </div>
            <h4 class="serve-card-title">Warehouses & Industrial</h4>
            <p class="serve-card-desc">Manufacturing plants, logistics hubs, and storage facilities requiring heavy-duty maintenance and power sweeping.</p>
          </div>
        </div>

        <!-- 6. Property Management & Residential -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-user-tie"></i>
            </div>
            <h4 class="serve-card-title">Property Management & Residential</h4>
            <p class="serve-card-desc">Comprehensive single-vendor facility programs for asset managers, real estate developers, and homeowners.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Who We Serve End -->

  <!-- Contact Info / Value Props Start -->
  <div class="container-fluid py-5 contact-info">
    <div class="row">
      <div class="col-lg-4 p-0">
        <div
          class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
          <i class="fa fa-3x fa-shield-alt text-secondary mr-4"></i>
          <div class="">
            <h5 class="mb-2">Reliable Service</h5>
            <p class="m-0">We show up & follow through</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-0">
        <div
          class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
          <i class="fa fa-3x fa-user-tie text-primary mr-4"></i>
          <div class="">
            <h5 class="mb-2">Professional Team</h5>
            <p class="m-0">Skilled & committed</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 p-0">
        <div
          class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
          <i class="fa fa-3x fa-headset text-secondary mr-4"></i>
          <div class="">
            <h5 class="mb-2">Responsive Support</h5>
            <p class="m-0">Quick response times</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Info End -->
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