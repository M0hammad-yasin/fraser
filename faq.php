<?php
$pageTitle = "FAQ - Fraser Facility Services";
include 'components/head.php';
?>

<body>
  <!-- Header Start -->
  <?php include 'components/header.php'; ?>
  <!-- Header End -->

  <!-- Page Header Start -->
  <?php
  $pageHeaderTitle = "Frequently Asked Questions";
  $pageHeaderEyebrow = "Help & FAQ";
  $pageHeaderSubtitle = "Find clear answers to common questions about our property maintenance and facility services.";
  $pageHeaderBg = "./assets/img/home/carousel-1.jpg";
  $breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'FAQs', 'url' => '']
  ];
  include 'components/page-header.php';
  ?>
  <!-- Page Header End -->

  <!-- FAQ Section Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="text-center mb-5">
            <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Questions & Answers</h6>
            <h1 class="section-title">How Can We Help You?</h1>
          </div>

          <div class="accordion" id="faqAccordion">

            <!-- Question 1 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    What services does Fraser Facility Services provide?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  We provide facility solutions across 6 standardized categories: (1) <strong>Janitorial &amp; Custodial Services</strong>, (2) <strong>Floor &amp; Carpet Care</strong>, (3) <strong>Property Maintenance &amp; Facility Support</strong> (including trade coordination), (4) <strong>Window &amp; Exterior Cleaning</strong>, (5) <strong>Specialty Cleaning &amp; Facility Support</strong>, and (6) <strong>Snow &amp; Ice Management</strong>.
                </div>
              </div>
            </div>

            <!-- Question 2 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    Do you offer urgent maintenance and cleanup support?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Yes, we provide responsive support for our contracted commercial and strata clients. When urgent maintenance needs, spill cleanups, or weather-related issues arise, our team coordinates prompt action to protect your property and minimize downtime.
                </div>
              </div>
            </div>

            <!-- Question 3 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    What safety credentials and insurance coverage do you hold?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Fraser Facility Services operates with verified credentials: we are <strong>WorkSafeBC Registered</strong>, carry comprehensive <strong>Commercial Liability Insurance</strong>, and our staff are <strong>WHMIS-Trained</strong> in chemical handling, proper dilution, and workplace health and safety.
                </div>
              </div>
            </div>

            <!-- Question 4 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    How do you ensure consistent quality control?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  We maintain quality through site-specific scopes of work, regular supervisory checklists, routine walkthroughs, and clear, direct communication with property managers to address any feedback immediately.
                </div>
              </div>
            </div>

            <!-- Question 5 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    How do I get a proposal or estimate for my property?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Getting started is simple. You can call us at <a href="tel:17788861491" class="font-weight-bold text-dark">+1 778-886-1491</a>, email <a href="mailto:info@fraserfacilityservices.ca" class="font-weight-bold text-dark">info@fraserfacilityservices.ca</a>, or submit your property details via our <a href="contact.php" class="text-primary font-weight-bold">Contact Form</a>. Following an on-site property assessment, we provide a detailed proposal outlining the recommended scope of work, service frequency and pricing.
                </div>
              </div>
            </div>

            <!-- Question 6 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingSix">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    What geographic areas across British Columbia do you serve?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  We proudly service 17 municipalities throughout the Lower Mainland and Fraser Valley: <strong>Vancouver, Burnaby, New Westminster, Richmond, Delta, Surrey, White Rock, West Vancouver, Chilliwack, Langley, Coquitlam, Port Coquitlam, Port Moody, Maple Ridge, Pitt Meadows, North Vancouver, and Abbotsford</strong>. If your municipality isn't listed, contact us to confirm service availability for your site.
                </div>
              </div>
            </div>

            <!-- Question 7 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingSeven">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    Do you provide eco-friendly and green cleaning solutions?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Yes, upon request we utilize certified non-toxic, biodegradable cleaning solutions along with HEPA-filtered equipment and microfiber cleaning protocols to maintain clean indoor environments safely.
                </div>
              </div>
            </div>

            <!-- Question 8 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingEight">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    Can you customize maintenance schedules for our building or strata council?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Absolutely. We offer flexible scheduling designed around your building's unique requirements and peak hours: daily day-porter services, after-hours commercial cleaning, routine common area upkeep, and seasonal property support.
                </div>
              </div>
            </div>

            <!-- Question 9 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingNine">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    Do you provide bundled multi-service contracts with a single point of contact?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Yes. Clients benefit from a <strong>Dedicated Point of Contact</strong> who oversees your janitorial, exterior washing, snow removal, and property maintenance under one consolidated agreement with clear, itemized invoicing.
                </div>
              </div>
            </div>

            <!-- Question 10 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingTen">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    What is your onboarding process for new properties?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Our onboarding process includes an initial on-site property walkthrough, customized scope of work definition, staff site orientation, and clear communication channels to ensure a smooth transition without disruption to your daily operations.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQ Section End -->

  <!-- CTA Banner Start -->
  <div class="container-fluid py-5 bg-dark">
    <div class="container py-5 text-center">
      <h2 class="text-white mb-4">Still have questions?</h2>
      <p class="text-white-50 mb-4 mx-auto" style="max-width: 600px;">Our team is ready to discuss your specific property requirements and how we can tailor our services to meet your needs.</p>
      <a href="contact.php" class="btn btn-primary py-3 px-5">Contact Us Today</a>
    </div>
  </div>
  <!-- CTA Banner End -->

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

  <script>
    // Rotate the caret icon on collapse/expand
    $('.collapse').on('show.bs.collapse', function() {
      $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");
    }).on('hide.bs.collapse', function() {
      $(this).parent().find(".fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");
    });
  </script>

  <!-- Template Javascript -->
  <script src="./assets/js/main.js"></script>
</body>

</html>