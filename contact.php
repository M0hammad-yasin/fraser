<!doctype html>
<html lang="en">
  <head>
    <?php 
    $pageTitle = "Contact Us - Fraser Facility Services";
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
              Contact Us
            </h1>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="d-inline-flex align-items-center">
              <a class="btn btn-sm btn-outline-light" href="">Home</a>
              <i class="fas fa-angle-double-right text-light mx-2"></i>
              <a class="btn btn-sm btn-outline-light disabled" href=""
                >Contact</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-end mb-4">
          <div class="col-lg-6">
            <h6
              class="text-secondary font-weight-semi-bold text-uppercase mb-3"
            >
              Contact Us
            </h6>
            <h1 class="section-title mb-3">Get In Touch For A Quote</h1>
          </div>
          <div class="col-lg-6">
            <h4 class="font-weight-normal text-muted mb-3">
              Get in touch for a quote — one partner for every facility need. Proudly serving the Lower Mainland, BC and surrounding areas.
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
              <div id="success"></div>
              <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="form-row">
                  <div class="col-sm-6 control-group">
                    <input
                      type="text"
                      class="form-control p-4"
                      id="name"
                      placeholder="Your Name"
                      required="required"
                      data-validation-required-message="Please enter your name"
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="col-sm-6 control-group">
                    <input
                      type="email"
                      class="form-control p-4"
                      id="email"
                      placeholder="Your Email"
                      required="required"
                      data-validation-required-message="Please enter your email"
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control p-4"
                    id="subject"
                    placeholder="Subject"
                    required="required"
                    data-validation-required-message="Please enter a subject"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control p-4"
                    rows="6"
                    id="message"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Please enter your message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <button
                    class="btn btn-primary btn-block py-3 px-5"
                    type="submit"
                    id="sendMessageButton"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5" style="min-height: 400px">
            <div class="position-relative h-100 rounded overflow-hidden">
              <!-- Map centred on Lower Mainland, BC -->
              <iframe
                style="width: 100%; height: 100%; min-height: 400px; object-fit: cover; border: 0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d661547.7993019937!2d-123.3272376!3d49.2577143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673d45a4c375b%3A0x9d7f0e9dced3cf67!2sLower%20Mainland%2C%20BC!5e0!3m2!1sen!2sca!4v1691000000000!5m2!1sen!2sca"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
        </div>
        <!-- Contact details strip -->
        <div class="row mt-5 pt-3">
          <div class="col-md-4 text-center mb-4">
            <i class="fa fa-3x fa-phone-alt text-primary mb-3"></i>
            <h5 class="font-weight-semi-bold">Phone</h5>
            <p><a href="tel:6041234567" class="text-dark">604-123-4567</a></p>
          </div>
          <div class="col-md-4 text-center mb-4">
            <i class="fa fa-3x fa-envelope text-primary mb-3"></i>
            <h5 class="font-weight-semi-bold">Email</h5>
            <p><a href="mailto:info@fraserfacilityservices.ca" class="text-dark">info@fraserfacilityservices.ca</a></p>
          </div>
          <div class="col-md-4 text-center mb-4">
            <i class="fa fa-3x fa-map-marker-alt text-primary mb-3"></i>
            <h5 class="font-weight-semi-bold">Service Area</h5>
            <p>Serving the Lower Mainland, BC and surrounding areas</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

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
