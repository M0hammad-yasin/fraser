<!doctype html>
<html lang="en">

<head>
  <?php
  $customCss = ["./assets/css/index.css"];
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
  $pageHeaderSubtitle = "Locally owned and operated commercial cleaning and facility solutions across the Lower Mainland.";
  $pageHeaderBg = "./assets/img/about_us/about.jfif";
  $breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'About Us', 'url' => '']
  ];
  include 'components/page-header.php';
  ?>
  <!-- Page Header End -->

  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 col-md-10 mb-4 mb-lg-0">
          <div class="position-relative rounded overflow-hidden shadow-sm" style="min-height: 420px;">
            <img class="w-100 h-100 position-absolute" src="./assets/img/about_us/about.jfif" alt="About Fraser Facility Services" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-7 pl-lg-5">
          <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3" style="letter-spacing: 2px;">
            About Fraser Facility Services
          </h6>
          <h1 class="mb-4 section-title">
            Dependable Facility Solutions Grounded in Local Accountability
          </h1>
          <p class="text-muted mb-3">
            Fraser Facility Services is a family-owned and locally operated company providing dependable commercial cleaning, property maintenance, and seasonal facility care to businesses, strata properties, and facilities across the Lower Mainland and Fraser Valley.
          </p>
          <p class="text-muted mb-3">
            We started with a simple belief: good service is built on trust, consistency, and taking genuine pride in the work we deliver. Every facility we care for represents someone’s business, investment, or community, and we treat that responsibility with seriousness and attention to detail.
          </p>
          <p class="text-muted mb-4">
            By acting as a single point of contact for commercial janitorial, floor care, exterior cleaning, and seasonal property support, we streamline facility operations for property managers and business owners with clear communication, reliable scheduling, and verified safety standards.
          </p>
          <div class="d-flex align-items-center pt-2">
            <a href="service.php" class="btn btn-primary py-2 px-4 font-weight-bold mr-3" style="border-radius: 50px;">Our Services</a>
            <a href="contact.php" class="btn btn-outline-secondary py-2 px-4 font-weight-bold" style="border-radius: 50px;">Get in Touch</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Mission Statement Start -->
  <div class="container-fluid fraser-mission-section py-5">
    <div class="container py-4">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10">
          <span class="fraser-mission-badge">Our Mission</span>
          <h2 class="fraser-mission-title">Service You Can Rely On. Standards You Can Trust.</h2>
          <p class="fraser-mission-lead">
            Our mission is to provide reliable, high-quality facility services that make the properties entrusted to us cleaner, safer, and easier to manage. We are committed to building lasting client relationships through consistent service, clear communication, accountability, and a standard of work our clients can depend on.
          </p>

          <!-- 3 Mission Pillars -->
          <div class="row pt-2 text-left justify-content-center">
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="fraser-mission-card">
                <div class="fraser-mission-card-icon">
                  <i class="fa fa-shield-alt"></i>
                </div>
                <div>
                  <h6 class="fraser-mission-card-title">Cleaner &amp; Safer</h6>
                  <p class="fraser-mission-card-desc">Properties easier to manage every day</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="fraser-mission-card">
                <div class="fraser-mission-card-icon">
                  <i class="fa fa-handshake"></i>
                </div>
                <div>
                  <h6 class="fraser-mission-card-title">Lasting Partnerships</h6>
                  <p class="fraser-mission-card-desc">Consistent service &amp; clear communication</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="fraser-mission-card">
                <div class="fraser-mission-card-icon">
                  <i class="fa fa-check-circle"></i>
                </div>
                <div>
                  <h6 class="fraser-mission-card-title">Dependable Standards</h6>
                  <p class="fraser-mission-card-desc">High-caliber work you can count on</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Mission Statement End -->

  <!-- Founder Bio & Message Start -->
  <div class="container-fluid fraser-founder-section py-5">
    <div class="container py-4">
      <div class="row align-items-center justify-content-center">
        <!-- Founder Photo Column -->
        <div class="col-lg-5 col-md-9 mb-4 mb-lg-0">
          <div class="fraser-founder-photo-wrap">
            <img class="fraser-founder-img" src="./assets/img/about_us/ceo.jpeg" alt="Rukhsar Omeri, BSc, RDH - Founder &amp; Director">
            <div class="fraser-founder-caption">
              <h5 class="fraser-founder-name">Rukhsar Omeri, BSc, RDH</h5>
              <div class="fraser-founder-role">Founder &amp; Director</div>
              <div class="fraser-founder-company">Fraser Facility Services</div>
            </div>
          </div>
        </div>

        <!-- Founder Message Column -->
        <div class="col-lg-7 pl-lg-5">
          <h6 class="fraser-founder-eyebrow">A Message from Our Founder</h6>
          <h2 class="fraser-founder-title section-title">Built on Care. Driven by Standards.</h2>
          <p class="fraser-founder-text">
            My professional background in healthcare has shaped my understanding of the importance of clean, safe, and well-maintained environments. It has also instilled in me a strong commitment to attention to detail, accountability, consistency, and a genuine responsibility for the spaces and people we serve.
          </p>
          <p class="fraser-founder-text">
            I founded Fraser Facility Services (FFS) with the goal of creating a company that clients can trust to care for their properties with the same level of professionalism and attention that I have always expected in my own work. To me, exceptional service is more than simply completing a task. It means being dependable, communicating effectively, taking pride in our work, and consistently delivering on our commitments.
          </p>
          <p class="fraser-founder-text">
            As Founder and Director, I remain personally invested in the standards we uphold and the relationships we build. My vision for FFS is to build a company recognized for the quality of its work, the strength of its partnerships, and the trust it earns, while continuing to grow without compromising the values on which it was founded: integrity, reliability, quality, and care.
          </p>
          
          <div class="fraser-founder-signoff">
            <div>
              <h5 class="fraser-founder-sign-name">Rukhsar Omeri, <span class="fraser-founder-sign-cred">BSc, RDH</span></h5>
              <p class="fraser-founder-sign-title">Founder &amp; Director</p>
              <small class="fraser-founder-sign-org">Fraser Facility Services</small>
            </div>
            <div>
              <span class="fraser-founder-badge-pill">
                <i class="fa fa-heartbeat"></i> Healthcare-Informed Standards
              </span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Founder Bio & Message End -->

  <!-- Features (Safety, Training & Credentials) Start -->
  <div class="container-fluid bg-light py-5">
    <div class="container py-5">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-7 pt-lg-3 pb-3">
          <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3" style="letter-spacing: 2px;">
            Safety, Training &amp; Credentials
          </h6>
          <h1 class="mb-4 section-title">
            One Partner. Complete Facility Solutions.
          </h1>
          <p class="mb-4 text-muted">
            We provide a single point of contact for complete facility solutions, ensuring quality, safety, and accountability across every property we serve.
          </p>
          <div class="row">
            <div class="col-sm-6 mb-4">
              <h5 class="font-weight-semi-bold"><i class="fa fa-shield-alt text-primary mr-2"></i>WorkSafeBC Registered</h5>
              <p class="mb-0 text-muted">Registered with WorkSafeBC and committed to established workplace health and safety standards.</p>
            </div>
            <div class="col-sm-6 mb-4">
              <h5 class="font-weight-semi-bold"><i class="fa fa-file-contract text-primary mr-2"></i>Commercially Insured</h5>
              <p class="mb-0 text-muted">Comprehensive commercial liability coverage for complete property protection.</p>
            </div>
            <div class="col-sm-6 mb-4">
              <h5 class="font-weight-semi-bold"><i class="fa fa-user-graduate text-primary mr-2"></i>WHMIS-Trained Personnel</h5>
              <p class="mb-0 text-muted">Personnel trained in proper chemical handling, dilution, and workplace safety.</p>
            </div>
            <div class="col-sm-6 mb-4">
              <h5 class="font-weight-semi-bold"><i class="fa fa-handshake text-primary mr-2"></i>Dedicated Point of Contact</h5>
              <p class="mb-0 text-muted">One reliable partner managing janitorial, maintenance, and seasonal services.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-10 mt-4 mt-lg-0" style="min-height: 380px;">
          <div class="position-relative h-100 rounded overflow-hidden shadow-sm" style="min-height: 380px;">
            <img class="position-absolute w-100 h-100" src="./assets/img/about_us/feature.jpg" alt="Safety and Standards" style="object-fit: cover;" />
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
          <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">Request a Proposal</span>
          <h1 class="display-4 font-weight-bold text-white mb-3">Ready to Discuss Your Facility Needs?</h1>
          <p class="lead text-white-50 mb-5 mx-auto" style="max-width: 680px; font-size: 1.05rem;">
            Following a site assessment, we provide a detailed proposal outlining the recommended scope of work, service frequency and pricing tailored to your property.
          </p>

          <!-- 3 Quick Value Badges -->
          <div class="row justify-content-center mb-5 text-left">
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="d-flex align-items-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                <i class="fa fa-2x fa-clipboard-list text-primary mr-3"></i>
                <div>
                  <h6 class="text-white mb-0 font-weight-bold">Detailed Proposal</h6>
                  <small class="text-white-50">Clear scopes &amp; pricing</small>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="d-flex align-items-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                <i class="fa fa-2x fa-search-location text-primary mr-3"></i>
                <div>
                  <h6 class="text-white mb-0 font-weight-bold">Site Audit</h6>
                  <small class="text-white-50">On-site property walkthrough</small>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex align-items-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                <i class="fa fa-2x fa-handshake text-primary mr-3"></i>
                <div>
                  <h6 class="text-white mb-0 font-weight-bold">Single Contact</h6>
                  <small class="text-white-50">Direct accountability</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <a href="contact.php" class="btn btn-primary py-3 px-5 font-weight-bold mr-sm-3 mb-3 mb-sm-0 shadow-sm" style="border-radius: 50px; font-size: 1rem;">
              Request a Free Proposal <i class="fa fa-arrow-right ml-2"></i>
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
  <script src="library/easing/easing.min.js"></script>
  <script src="library/waypoints/waypoints.min.js"></script>
  <script src="library/counterup/counterup.min.js"></script>
  <script src="library/owlcarousel/owl.carousel.min.js"></script>
  <script src="library/isotope/isotope.pkgd.min.js"></script>
  <script src="library/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="./assets/js/main.js"></script>
</body>

</html>