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
                  We offer a comprehensive range of facility services across the Lower Mainland, including complete janitorial and custodial care, building maintenance, exterior services (like landscaping and pressure washing), and mechanical support. We serve commercial offices, strata & multi-family properties, and industrial sites.
                </div>
              </div>
            </div>

            <!-- Question 2 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    Do you offer emergency response services?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Yes, we provide 24/7 emergency response for our contracted clients. Whether it's sudden water damage, emergency cleanup, or urgent mechanical issues, our team is ready to respond swiftly to protect your property and minimize downtime.
                </div>
              </div>
            </div>

            <!-- Question 3 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    Are your staff trained and insured?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Absolutely. Every member of our team is fully vetted, highly trained, and WCB insured. We carry comprehensive liability insurance, giving property managers and owners complete peace of mind while we are on site.
                </div>
              </div>
            </div>

            <!-- Question 4 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    How do you ensure quality control?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  We implement a rigorous Quality Assurance program that includes regular site inspections by dedicated supervisors, continuous staff training, and transparent communication with our clients. We use modern reporting software so you are always updated on your property's status.
                </div>
              </div>
            </div>

            <!-- Question 5 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    How do I get a quote for my property?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  Getting a quote is easy. You can call us directly at <a href="tel:17788861491" class="font-weight-bold text-dark">+1 778-886-1491</a>, email <a href="mailto:operations@fraserfacilityservices.ca" class="font-weight-bold text-dark">operations@fraserfacilityservices.ca</a>, or use the form on our <a href="contact.php" class="text-primary font-weight-bold">Contact Us</a> page. We will schedule a free on-site assessment and provide a customized, detailed proposal with 24-hour turnaround.
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
                  We proudly service the entire Lower Mainland and Fraser Valley region, including Vancouver, Burnaby, Richmond, Surrey, Langley, Coquitlam, Delta, New Westminster, Abbotsford, and surrounding municipalities. If you manage properties in multiple locations, we can service all your sites under a single streamlined contract.
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
                  Yes, we are committed to environmental sustainability. Upon request, we utilize certified non-toxic, biodegradable, and EcoLogo-approved cleaning solutions along with HEPA-filtered vacuum systems and microfiber technology to improve indoor air quality while safeguarding building occupants and pets.
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
                  Absolutely. We offer flexible scheduling designed around your building's unique requirements and peak traffic hours. Options include daily day-porter services, after-hours commercial cleaning, weekly common area upkeep, and monthly or quarterly preventive maintenance inspections tailored specifically for strata councils and property managers.
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
                  Yes! One of our core value propositions is eliminating the headache of juggling multiple vendors. You receive a dedicated Account Manager who oversees your janitorial, exterior landscaping, pressure washing, and general maintenance under one consolidated agreement with clear, itemized invoicing.
                </div>
              </div>
            </div>

            <!-- Question 10 -->
            <div class="card border-0 mb-3 shadow-sm rounded">
              <div class="card-header bg-white p-0 border-0" id="headingTen">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left text-dark font-weight-bold p-4 collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen" style="font-size: 1.1rem; outline: none; box-shadow: none;">
                    What is your contract flexibility and onboarding process?
                    <i class="fa fa-angle-down float-right text-primary mt-1"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#faqAccordion">
                <div class="card-body text-muted px-4 pb-4 pt-0">
                  We provide flexible terms ranging from one-off specialized project work to long-term service agreements. Our seamless onboarding process includes a comprehensive site audit, custom Standard Operating Procedures (SOPs), staff site orientation, and immediate integration without any disruption to your day-to-day operations.
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