<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $customCss = "./assets/css/index.css";
    $pageTitle = "Fraser ";
    include 'components/head.php';
    ?>
</head>

<body>
    <!-- Header Start -->
    <?php include 'components/header.php'; ?>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="./assets/img/home/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-3 p-md-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Fraser Facility Services</h5>
                            <h1 class="display-3 text-white mb-md-4">One Partner. Complete Facility Solutions.</h1>
                            <p class="text-white mb-4 d-none d-md-block" style="font-size: 1.2rem;">Fraser Facility Services provides integrated janitorial, maintenance, exterior, and mechanical solutions that keep your property clean, safe, and operating at its best.</p>
                            <a href="contact.php" class="btn btn-primary mr-2">Get A Quote</a>
                            <a href="service.php" class="btn btn-outline-light">Our Services</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./assets/img/home/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-3 p-md-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Fraser Facility Services</h5>
                            <h1 class="display-3 text-white mb-md-4">Commercial & Residential — One Trusted Team.</h1>
                            <p class="text-white mb-4 d-none d-md-block" style="font-size: 1.2rem;">From office towers to strata buildings, we deliver reliable, professional facility care across the Fraser region.</p>
                            <a href="contact.php" class="btn btn-primary mr-2">Get A Quote</a>
                            <a href="service.php" class="btn btn-outline-light">Our Services</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./assets/img/home/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-3 p-md-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Fraser Facility Services</h5>
                            <h1 class="display-3 text-white mb-md-4">Proudly Serving the Fraser Region.</h1>
                            <p class="text-white mb-4 d-none d-md-block" style="font-size: 1.2rem;">Lower Mainland-wide coverage, responsive scheduling, and a single point of contact for every service.</p>
                            <a href="contact.php" class="btn btn-primary mr-2">Get A Quote</a>
                            <a href="service.php" class="btn btn-outline-light">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid pb-5 contact-info">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-shield-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Reliable Service</h5>
                        <p class="m-0">We show up & follow through</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-user-tie text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Professional Team</h5>
                        <p class="m-0">Skilled & committed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
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


    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                        <i class="fa fa-5x fa-award text-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">15</h1>
                        <h2 class="text-white m-0">Years of EXPERIENCE</h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">About Fraser Facility Services</h6>
                    <h1 class="mb-4 section-title">One Partner. Complete Facility Solutions.</h1>
                    <h5 class="text-muted font-weight-normal mb-3">Fraser Facility Services provides integrated solutions that keep your property clean, safe, and operating at its best.</h5>
                    <p>One partner, every service — so you can focus on what matters most. We deliver reliable, professional facility care across the Fraser region.</p>
                    <div class="d-flex align-items-center pt-4">
                        <a href="about.php" class="btn btn-primary mr-5">Learn More</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <?php 
    $servicesSectionEyebrow = "Our Services";
    $servicesSectionTitle = "Complete Facility Solutions For You";
    $servicesSectionDesc = "One Partner. Every Service. We provide a full suite of services to ensure your property remains clean, safe, and fully operational.";
    include 'components/services-section.php'; 
    ?>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Why Choose Us</h6>
                    <h1 class="mb-4 section-title">Your Trusted Facility Partner</h1>
                    <p class="mb-4">We provide a single point of contact for all your facility needs, ensuring peace of mind and exceptional results.</p>
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
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="./assets/img/about_us/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Portfolio Start -->
    <!-- <div class="container-fluid bg-portfolio py-5">
        <div class="container py-5">
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/img/project/portfolio-1.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Office Buildings</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/project/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/img/project/portfolio-2.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Retail & Restaurants</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/img/project/portfolio-3.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Medical & Dental Offices</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/img/project/portfolio-4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Property Management</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/img/project/portfolio-5.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Warehouses & Industrial</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/img/project/portfolio-6.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Strata & Multi-Family</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> -->
    <!-- Portfolio End -->


    <!-- Team Start -->
    <div class="fraser-cta-section">

        <!-- Left: dark panel -->
        <div class="fraser-cta-left">
            <!-- Decorative dots -->
            <div class="fraser-cta-dots" aria-hidden="true"></div>

            <div class="fraser-cta-left-inner">
                <span class="fraser-cta-eyebrow">Ready to Get Started?</span>
                <h2 class="fraser-cta-headline">
                    One Call. <br>Every&nbsp;Facility&nbsp;Need<span class="fraser-cta-dot">.</span>
                </h2>
                <p class="fraser-cta-subtext">
                    Stop juggling multiple contractors. Fraser Facility Services is your single point of contact for janitorial, maintenance, exterior care, and more — serving the Lower Mainland since day&nbsp;one.
                </p>

                <!-- Primary CTA -->
                <a href="contact.php" class="fraser-cta-btn-primary" id="ctaEstimateBtn">
                    <span>Get a Free Estimate</span>
                    <i class="fa fa-arrow-right ml-2"></i>
                </a>

                <!-- Phone CTA -->
                <a href="tel:17788861491" class="fraser-cta-btn-phone">
                    <div class="fraser-cta-phone-icon">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div>
                        <small class="d-block" style="opacity:.7; font-size:.72rem; letter-spacing:1px;">CALL US DIRECTLY</small>
                        <strong style="font-size:1.05rem;">+1 778-886-1491</strong>
                    </div>
                </a>
            </div>
        </div>

        <!-- Right: gold stats panel -->
        <div class="fraser-cta-right">
            <div class="fraser-cta-stats-grid">
                <div class="fraser-cta-stat">
                    <div class="fraser-cta-stat-icon"><i class="fa fa-shield-alt"></i></div>
                    <div class="fraser-cta-stat-number">100%</div>
                    <div class="fraser-cta-stat-label">Satisfaction Guarantee</div>
                </div>
                <div class="fraser-cta-stat">
                    <div class="fraser-cta-stat-icon"><i class="fa fa-clock"></i></div>
                    <div class="fraser-cta-stat-number">24h</div>
                    <div class="fraser-cta-stat-label">Response Time</div>
                </div>
                <div class="fraser-cta-stat">
                    <div class="fraser-cta-stat-icon"><i class="fa fa-building"></i></div>
                    <div class="fraser-cta-stat-number">5+</div>
                    <div class="fraser-cta-stat-label">Service Categories</div>
                </div>
                <div class="fraser-cta-stat">
                    <div class="fraser-cta-stat-icon"><i class="fa fa-map-marker-alt"></i></div>
                    <div class="fraser-cta-stat-number">BC</div>
                    <div class="fraser-cta-stat-label">Lower Mainland Focused</div>
                </div>
            </div>
        </div>

    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Testimonial</h6>
                    <h1 class="section-title text-white mb-5">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="./assets/img/home/testimonial-1.jpg" alt="Michael Thompson">
                                <div class="ml-3">
                                    <h5 class="text-primary">Michael Thompson</h5>
                                    <i>Property Manager, Maple Ridge Strata</i>
                                </div>
                            </div>
                            <p>"Fraser Facility Services consistently delivers responsive, professional service. Their team handles everything from scheduled janitorial to urgent maintenance with care."</p>
                        </div>

                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="./assets/img/home/testimonial-2.jpg" alt="Jennifer Alvarez">
                                <div class="ml-3">
                                    <h5 class="text-primary">Jennifer Alvarez</h5>
                                    <i>Strata Council Chair, Northview Estates</i>
                                </div>
                            </div>
                            <p>"We've relied on Fraser for seasonal exterior work and building maintenance — their teams are reliable, courteous, and thorough."</p>
                        </div>

                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="./assets/img/home/testimonial-3.jpg" alt="Robert Stevens">
                                <div class="ml-3">
                                    <h5 class="text-primary">Robert Stevens</h5>
                                    <i>Commercial Property Manager, Pacific Towers</i>
                                </div>
                            </div>
                            <p>"Excellent coordination and communication. Their preventive maintenance program reduced our emergency repairs significantly."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="./assets/img/home/testimonial.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Facility Care Tips</h6>
                    <h1 class="section-title mb-3">News & Updates</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Stay up to date with the latest insights, maintenance checklists, and best practices for property care.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel blog-carousel position-relative">
                        <?php
                        // Pull in the blog data store
                        include 'data/blogs.php';

                        // Sort newest first
                        uasort($blogs, function ($a, $b) {
                            return strtotime($b['date']) <=> strtotime($a['date']);
                        });

                        foreach ($blogs as $slug => $post) :
                            $day   = date('d', strtotime($post['date']));
                            $month = date('M', strtotime($post['date']));
                        ?>
                            <div class="d-flex flex-column h-100 mb-5">
                                <div class="position-relative mb-4">
                                    <img class="img-fluid rounded w-100" src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" style="height: 250px; object-fit: cover;">
                                    <div class="blog-date">
                                        <h4 class="font-weight-bold mb-n1"><?php echo $day; ?></h4>
                                        <small class="text-white text-uppercase"><?php echo $month; ?></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <a class="text-secondary text-uppercase font-weight-medium" href="blog.php?slug=<?php echo urlencode($slug); ?>"><?php echo htmlspecialchars($post['author']); ?></a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-secondary text-uppercase font-weight-medium" href="blog.php?slug=<?php echo urlencode($slug); ?>"><?php echo htmlspecialchars($post['category']); ?></a>
                                </div>
                                <h5 class="font-weight-medium mb-2"><?php echo htmlspecialchars($post['title']); ?></h5>
                                <p class="mb-4"><?php echo htmlspecialchars(substr($post['excerpt'], 0, 80)) . '...'; ?></p>
                                <a class="btn btn-sm btn-primary py-2 mt-auto align-self-start" href="blog.php?slug=<?php echo urlencode($slug); ?>">Read More</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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