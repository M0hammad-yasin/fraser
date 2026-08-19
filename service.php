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
                <h6 class="mb-0 font-weight-bold text-dark">One Partner Care</h6>
                <small class="text-secondary font-weight-bold">Every Service</small>
              </div>
            </div>
            <ul class="compact-adv-list list-unstyled mb-0">
              <li><i class="fa fa-check text-primary mr-2"></i>Complete Facility Solutions</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Single Point of Contact</li>
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
                <small class="text-secondary font-weight-bold">Lower Mainland</small>
              </div>
            </div>
            <ul class="compact-adv-list list-unstyled mb-0">
              <li><i class="fa fa-check text-primary mr-2"></i>Snow & Ice Management</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Urgent Maintenance Calls</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Flexible Custom Schedules</li>
            </ul>
          </div>
        </div>

        <!-- Col 3: Compliance & Credentials -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="compact-adv-item h-100 p-3 rounded">
            <div class="d-flex align-items-center mb-3">
              <div class="compact-adv-icon mr-3">
                <i class="fa fa-shield-alt"></i>
              </div>
              <div>
                <h6 class="mb-0 font-weight-bold text-dark">Fully Certified</h6>
                <small class="text-secondary font-weight-bold">Safety & Compliance</small>
              </div>
            </div>
            <ul class="compact-adv-list list-unstyled mb-0">
              <li><i class="fa fa-check text-primary mr-2"></i>Fully Insured</li>
              <li><i class="fa fa-check text-primary mr-2"></i>WHMIS Trained</li>
              <li><i class="fa fa-check text-primary mr-2"></i>WorkSafeBC Registered</li>
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
                <small class="text-secondary font-weight-bold">Audits & Inspections</small>
              </div>
            </div>
            <ul class="compact-adv-list list-unstyled mb-0">
              <li><i class="fa fa-check text-primary mr-2"></i>Routine Site Inspections</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Eco-Friendly Products</li>
              <li><i class="fa fa-check text-primary mr-2"></i>Standard Operating SOPs</li>
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

  <!-- Markets We Serve Section Start -->
  <div class="container-fluid who-we-serve-bg py-5">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mb-5">
          <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3" style="letter-spacing: 2px;">Industries & Clients</h6>
          <h1 class="mb-4 section-title">Markets We Serve</h1>
          <p class="text-muted">Comprehensive facility solutions engineered for businesses, property managers, and communities across BC.</p>
        </div>
      </div>

      <div class="row">
        <!-- 1. Commercial Properties & Offices -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-building"></i>
            </div>
            <h4 class="serve-card-title">Commercial Properties & Offices</h4>
            <p class="serve-card-desc">Corporate head offices, multi-tenant commercial towers, and professional business centers requiring immaculate presentation.</p>
          </div>
        </div>

        <!-- 2. Healthcare & Professional Facilities -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-clinic-medical"></i>
            </div>
            <h4 class="serve-card-title">Healthcare & Professional Facilities</h4>
            <p class="serve-card-desc">Medical centers, clinics, and professional practices adhering to strict sanitation standards, infection control, and spotless presentation.</p>
          </div>
        </div>

        <!-- 3. Retail -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-store"></i>
            </div>
            <h4 class="serve-card-title">Retail</h4>
            <p class="serve-card-desc">High-traffic retail storefronts, shopping plazas, and customer-facing businesses where cleanliness drives buyer confidence.</p>
          </div>
        </div>

        <!-- 4. Strata & Multi-Unit Residential -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-city"></i>
            </div>
            <h4 class="serve-card-title">Strata & Multi-Unit Residential</h4>
            <p class="serve-card-desc">Condominiums, townhome complexes, and residential communities needing dependable common area care, janitorial, and maintenance.</p>
          </div>
        </div>

        <!-- 5. Property Management -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-user-tie"></i>
            </div>
            <h4 class="serve-card-title">Property Management</h4>
            <p class="serve-card-desc">Single-vendor consolidated facility programs for asset managers, landlords, and real estate developers with simplified reporting.</p>
          </div>
        </div>

        <!-- 6. Residential Properties -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex">
          <div class="serve-card w-100">
            <div class="serve-card-icon">
              <i class="fa fa-home"></i>
            </div>
            <h4 class="serve-card-title">Residential Properties</h4>
            <p class="serve-card-desc">Move-in/move-out deep cleans, seasonal exterior washing, window cleaning, and property maintenance for private homeowners.</p>
          </div>
        </div>

        <!-- 7. Construction & Renovation Projects (Centered / Full-width) -->
        <div class="col-lg-4 col-md-6 mb-4 d-flex mx-auto">
          <div class="serve-card w-100" style="border-top-color: #3F6B45;">
            <div class="serve-card-icon" style="background: rgba(63, 107, 69, 0.1); color: #3F6B45;">
              <i class="fa fa-hard-hat"></i>
            </div>
            <h4 class="serve-card-title">Construction & Renovation Projects</h4>
            <p class="serve-card-desc">Rough & final post-construction cleanup, debris removal, floor prep, and handover-ready detailing for general contractors.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Markets We Serve End -->

  <!-- Areas We Serve Section (Direct from Brochure) Start -->
  <div class="container-fluid bg-white py-5">
    <div class="container py-5">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10">
          <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">Regional Coverage</span>
          <h1 class="mb-4 section-title d-inline-block">Areas We Serve</h1>
          <p class="lead text-muted mb-4 mx-auto" style="max-width: 750px;">
            Proudly serving businesses and residential clients throughout the Lower Mainland and Fraser Valley.
          </p>

          <!-- 17 Municipalities from Brochure -->
          <div class="d-flex flex-wrap justify-content-center align-items-center mb-4" style="gap: 10px;">
            <?php
            $brochureAreas = [
              'Vancouver', 'Burnaby', 'New Westminster', 'Richmond', 'Delta', 'Surrey',
              'White Rock', 'West Vancouver', 'Chilliwack', 'Langley', 'Coquitlam',
              'Port Coquitlam', 'Port Moody', 'Maple Ridge', 'Pitt Meadows', 'North Vancouver', 'Abbotsford'
            ];
            foreach ($brochureAreas as $area): ?>
              <span class="badge badge-light px-3 py-2 font-weight-bold" style="font-size: 0.95rem; border: 1px solid #e0e4e8; color: #0F2747; background: #F3F5F7;">
                <i class="fa fa-map-marker-alt text-primary mr-1"></i> <?php echo htmlspecialchars($area); ?>
              </span>
            <?php endforeach; ?>
          </div>

          <!-- Availability Note from Brochure -->
          <div class="p-4 rounded mt-4" style="background: linear-gradient(135deg, #0F2747 0%, #173b63 100%); color: #fff;">
            <h5 class="text-white mb-2 font-weight-bold">Don't see your area listed?</h5>
            <p class="text-white-50 mb-3">Contact us to confirm service availability for your specific property or regional portfolio.</p>
            <a href="contact.php" class="btn btn-primary py-2 px-4 font-weight-bold" style="border-radius: 50px;">
              Contact Us <i class="fa fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Areas We Serve End -->

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