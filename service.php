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
    <div class="container-fluid bg-primary py-5 mb-5">
      <div class="container py-5">
        <div class="row align-items-center py-4">
          <div class="col-md-6 text-center text-md-left">
            <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">
              Services
            </h1>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="d-inline-flex align-items-center">
              <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
              <i class="fas fa-angle-double-right text-light mx-2"></i>
              <a class="btn btn-sm btn-outline-light disabled" href="service.php">Services</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Services Start -->
    <div class="container-fluid fraser-service-dark-bg py-5">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mb-5">
            <h6 class="text-primary font-weight-semi-bold text-uppercase mb-3" style="letter-spacing: 2px;">Our Services</h6>
            <h1 class="mb-4 section-title text-white">Complete Facility Solutions</h1>
            <p class="text-white-50">One Partner. Every Service. We provide a full suite of services to ensure your property remains clean, safe, and fully operational.</p>
          </div>
        </div>
        
        <!-- Services Card Grid (3 items per row) -->
        <div class="row">
          
          <!-- Service 1: Janitorial & Custodial -->
          <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <div class="fraser-service-card-v2">
              <div class="card-accent-bar"></div>
              <div class="fraser-service-icon-box">
                <i class="fa fa-broom"></i>
              </div>
              <h3 class="service-title">Janitorial & Custodial</h3>
              <ul class="fraser-service-list">
                <li><i class="fa fa-check-circle"></i><span>Commercial & residential cleaning</span></li>
                <li><i class="fa fa-check-circle"></i><span>Floor care, carpet & window cleaning</span></li>
                <li><i class="fa fa-check-circle"></i><span>Disinfection & sanitization</span></li>
                <li><i class="fa fa-check-circle"></i><span>Day porter & supply management</span></li>
              </ul>
              <div class="card-action">
                <a href="contact.php" class="fraser-service-btn">Request Service <i class="fa fa-arrow-right ml-2"></i></a>
              </div>
            </div>
          </div>

          <!-- Service 2: Building Maintenance -->
          <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <div class="fraser-service-card-v2">
              <div class="card-accent-bar"></div>
              <div class="fraser-service-icon-box">
                <i class="fa fa-tools"></i>
              </div>
              <h3 class="service-title">Building Maintenance</h3>
              <ul class="fraser-service-list">
                <li><i class="fa fa-check-circle"></i><span>General repairs & handyman services</span></li>
                <li><i class="fa fa-check-circle"></i><span>Painting, drywall & ceiling repairs</span></li>
                <li><i class="fa fa-check-circle"></i><span>Door, lock & hardware repairs</span></li>
                <li><i class="fa fa-check-circle"></i><span>Preventive maintenance programs</span></li>
              </ul>
              <div class="card-action">
                <a href="contact.php" class="fraser-service-btn">Request Service <i class="fa fa-arrow-right ml-2"></i></a>
              </div>
            </div>
          </div>

          <!-- Service 3: Exterior Services -->
          <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <div class="fraser-service-card-v2">
              <div class="card-accent-bar"></div>
              <div class="fraser-service-icon-box">
                <i class="fa fa-leaf"></i>
              </div>
              <h3 class="service-title">Exterior Services</h3>
              <ul class="fraser-service-list">
                <li><i class="fa fa-check-circle"></i><span>Snow plowing & ice management</span></li>
                <li><i class="fa fa-check-circle"></i><span>Landscaping & lawn care</span></li>
                <li><i class="fa fa-check-circle"></i><span>Pressure washing & soft washing</span></li>
                <li><i class="fa fa-check-circle"></i><span>Seasonal property cleanup</span></li>
              </ul>
              <div class="card-action">
                <a href="contact.php" class="fraser-service-btn">Request Service <i class="fa fa-arrow-right ml-2"></i></a>
              </div>
            </div>
          </div>

          <!-- Service 4: Mechanical & Facility Support -->
          <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <div class="fraser-service-card-v2">
              <div class="card-accent-bar"></div>
              <div class="fraser-service-icon-box">
                <i class="fa fa-wrench"></i>
              </div>
              <h3 class="service-title">Mechanical & Facility Support</h3>
              <ul class="fraser-service-list">
                <li><i class="fa fa-check-circle"></i><span>Plumbing, electrical & HVAC assistance</span></li>
                <li><i class="fa fa-check-circle"></i><span>Preventive maintenance programs</span></li>
                <li><i class="fa fa-check-circle"></i><span>Fixture installation & equipment repairs</span></li>
                <li><i class="fa fa-check-circle"></i><span>Routine facility inspections</span></li>
              </ul>
              <div class="card-action">
                <a href="contact.php" class="fraser-service-btn">Request Service <i class="fa fa-arrow-right ml-2"></i></a>
              </div>
            </div>
          </div>

          <!-- Service 5: Specialized Services -->
          <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <div class="fraser-service-card-v2">
              <div class="card-accent-bar"></div>
              <div class="fraser-service-icon-box">
                <i class="fa fa-hard-hat"></i>
              </div>
              <h3 class="service-title">Specialized Services</h3>
              <ul class="fraser-service-list">
                <li><i class="fa fa-check-circle"></i><span>Post-construction site cleanup</span></li>
                <li><i class="fa fa-check-circle"></i><span>Warehouse & industrial deep cleaning</span></li>
                <li><i class="fa fa-check-circle"></i><span>High-reach dusting & power washing</span></li>
                <li><i class="fa fa-check-circle"></i><span>Custom facility maintenance programs</span></li>
              </ul>
              <div class="card-action">
                <a href="contact.php" class="fraser-service-btn">Request Service <i class="fa fa-arrow-right ml-2"></i></a>
              </div>
            </div>
          </div>

          <!-- Service 6: Custom & Emergency Solutions -->
          <div class="col-lg-4 col-md-6 mb-4 d-flex">
            <div class="fraser-service-card-v2 custom-plan-card">
              <div class="card-accent-bar"></div>
              <div class="fraser-service-icon-box">
                <i class="fa fa-handshake"></i>
              </div>
              <h3 class="service-title">Custom Facility Plans</h3>
              <ul class="fraser-service-list">
                <li><i class="fa fa-check-circle"></i><span>24/7 urgent dispatch & response</span></li>
                <li><i class="fa fa-check-circle"></i><span>Tailored strata & multi-unit packages</span></li>
                <li><i class="fa fa-check-circle"></i><span>Single point-of-contact management</span></li>
                <li><i class="fa fa-check-circle"></i><span>Free on-site facility assessment</span></li>
              </ul>
              <div class="card-action">
                <a href="contact.php" class="fraser-service-btn text-white font-weight-bold">Get a Custom Quote <i class="fa fa-arrow-right ml-2 text-primary"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
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
            class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0"
          >
            <i class="fa fa-3x fa-shield-alt text-secondary mr-4"></i>
            <div class="">
              <h5 class="mb-2">Reliable Service</h5>
              <p class="m-0">We show up & follow through</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-0">
          <div
            class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0"
          >
            <i class="fa fa-3x fa-user-tie text-primary mr-4"></i>
            <div class="">
              <h5 class="mb-2">Professional Team</h5>
              <p class="m-0">Skilled & committed</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-0">
          <div
            class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0"
          >
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

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 pt-lg-5 pb-5">
            <h6
              class="text-secondary font-weight-semi-bold text-uppercase mb-3"
            >
              Testimonial
            </h6>
            <h1 class="section-title mb-5">What Our Clients Say</h1>
            <div class="owl-carousel testimonial-carousel position-relative">
              <div class="d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                  <img
                    class="img-fluid"
                    src="./assets/img/home/testimonial-1.jpg"
                    alt="Michael Thompson"
                  />
                  <div class="ml-3">
                    <h5 class="text-primary">Michael Thompson</h5>
                    <i>Property Manager, Maple Ridge Strata</i>
                  </div>
                </div>
                <p>
                  "Fraser Facility Services consistently delivers responsive, professional service. Their team handles everything from scheduled janitorial to urgent maintenance with care."
                </p>
              </div>
              <div class="d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                  <img
                    class="img-fluid"
                    src="./assets/img/home/testimonial-2.jpg"
                    alt="Jennifer Alvarez"
                  />
                  <div class="ml-3">
                    <h5 class="text-primary">Jennifer Alvarez</h5>
                    <i>Strata Council Chair, Northview Estates</i>
                  </div>
                </div>
                <p>
                  "We've relied on Fraser for seasonal exterior work and building maintenance — their teams are reliable, courteous, and thorough."
                </p>
              </div>
              <div class="d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                  <img
                    class="img-fluid"
                    src="./assets/img/home/testimonial-3.jpg"
                    alt="Robert Stevens"
                  />
                  <div class="ml-3">
                    <h5 class="text-primary">Robert Stevens</h5>
                    <i>Commercial Property Manager, Pacific Towers</i>
                  </div>
                </div>
                <p>
                  "Excellent coordination and communication. Their preventive maintenance program reduced our emergency repairs significantly."
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-5" style="min-height: 400px">
            <div class="position-relative h-100 rounded overflow-hidden">
              <img
                class="position-absolute w-100 h-100"
                src="./assets/img/testimonial.jpg"
                style="object-fit: cover"
                alt="Testimonial"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <?php include 'components/footer.php'; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

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

