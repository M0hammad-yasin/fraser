<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $customCss = [
        "./assets/css/service.css",
        "./assets/css/index.css"
    ];
    $pageTitle = "Fraser ";
    include 'components/head.php';
    ?>
</head>

<body>
    <!-- Header Start -->
    <?php include 'components/header.php'; ?>
    <!-- Header End -->


    <!-- 1. Hero / Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!-- Slide 1 (Flagship) -->
                <div class="carousel-item active">
                    <img class="img-fluid" src="./assets/img/home/carousel-1.jpg" alt="Commercial Facility Services">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-3 p-md-5" style="width: 100%; max-width: 900px;">
                            <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">One Partner. Complete Facility Solutions.</span>
                            <h1 class="display-4 font-weight-bold text-white mb-md-4">Commercial Facility Services Across the Lower Mainland</h1>
                            <p class="text-white mb-4 d-none d-md-block" style="font-size: 1.15rem;">Commercial cleaning, property maintenance, exterior services and seasonal facility support for businesses, strata properties and professional facilities.</p>
                            <div class="mb-4 text-white-50 font-weight-medium small d-none d-sm-block">
                                Janitorial &bull; Floor Care &bull; Property Maintenance &bull; Exterior Cleaning &bull; Snow &amp; Ice
                            </div>
                            <div>
                                <a href="contact.php" class="btn btn-primary mr-2 py-2 px-4 font-weight-bold">Request a Free Quote</a>
                                <a href="service.php" class="btn btn-outline-light py-2 px-4 font-weight-bold">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img class="img-fluid" src="./assets/img/home/carousel-2.jpg" alt="Janitorial and Maintenance">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-3 p-md-5" style="width: 100%; max-width: 900px;">
                            <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">Single Point of Contact</span>
                            <h1 class="display-4 font-weight-bold text-white mb-md-4">Commercial &amp; Strata Facility Solutions</h1>
                            <p class="text-white mb-4 d-none d-md-block" style="font-size: 1.15rem;">From routine custodial care and floor refinishing to building maintenance and exterior power washing, we keep your property operating at its best.</p>
                            <div class="mb-4 text-white-50 font-weight-medium small d-none d-sm-block">
                                Janitorial &bull; Floor Care &bull; Property Maintenance &bull; Exterior Cleaning &bull; Snow &amp; Ice
                            </div>
                            <div>
                                <a href="contact.php" class="btn btn-primary mr-2 py-2 px-4 font-weight-bold">Request a Free Quote</a>
                                <a href="service.php" class="btn btn-outline-light py-2 px-4 font-weight-bold">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img class="img-fluid" src="./assets/img/home/carousel-3.jpg" alt="Snow and Ice Management">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-3 p-md-5" style="width: 100%; max-width: 900px;">
                            <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">Regional Coverage</span>
                            <h1 class="display-4 font-weight-bold text-white mb-md-4">Serving the Lower Mainland &amp; Fraser Valley</h1>
                            <p class="text-white mb-4 d-none d-md-block" style="font-size: 1.15rem;">Responsive scheduling, verified safety standards, and dedicated facility support across 17 regional municipalities.</p>
                            <div class="mb-4 text-white-50 font-weight-medium small d-none d-sm-block">
                                Janitorial &bull; Floor Care &bull; Property Maintenance &bull; Exterior Cleaning &bull; Snow &amp; Ice
                            </div>
                            <div>
                                <a href="contact.php" class="btn btn-primary mr-2 py-2 px-4 font-weight-bold">Request a Free Quote</a>
                                <a href="service.php" class="btn btn-outline-light py-2 px-4 font-weight-bold">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 1. Hero End -->


    <!-- 2. Trust & Credentials Bar Start -->
    <div class="container-fluid py-4" style="background-color: #0F2747; border-bottom: 2px solid #C9A14A;">
        <div class="container">
            <div class="row text-center text-md-left">
                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 d-flex align-items-center justify-content-center justify-content-md-start">
                    <i class="fa fa-shield-alt text-primary mr-3" style="font-size: 1.75rem;"></i>
                    <div>
                        <h6 class="text-white mb-0 font-weight-bold">WorkSafeBC Registered</h6>
                        <small class="text-white-50">Provincial Safety Standards</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 d-flex align-items-center justify-content-center justify-content-md-start">
                    <i class="fa fa-file-contract text-primary mr-3" style="font-size: 1.75rem;"></i>
                    <div>
                        <h6 class="text-white mb-0 font-weight-bold">Commercially Insured</h6>
                        <small class="text-white-50">Comprehensive Liability</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 d-flex align-items-center justify-content-center justify-content-md-start">
                    <i class="fa fa-user-graduate text-primary mr-3" style="font-size: 1.75rem;"></i>
                    <div>
                        <h6 class="text-white mb-0 font-weight-bold">WHMIS-Trained</h6>
                        <small class="text-white-50">Safety-Certified Personnel</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-flex align-items-center justify-content-center justify-content-md-start">
                    <i class="fa fa-map-marked-alt text-primary mr-3" style="font-size: 1.75rem;"></i>
                    <div>
                        <h6 class="text-white mb-0 font-weight-bold">Regional Coverage</h6>
                        <small class="text-white-50">Lower Mainland &amp; Fraser Valley</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 2. Trust & Credentials Bar End -->


    <!-- 3. Short About Fraser Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="position-relative rounded overflow-hidden shadow-sm" style="min-height: 380px;">
                        <img class="w-100 h-100 position-absolute" src="./assets/img/about_us/about.jpg" alt="About Fraser Facility Services" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-2" style="letter-spacing: 2px;">About Fraser Facility Services</h6>
                    <h1 class="mb-4 section-title">Your Local Facility Partner</h1>
                    <p class="text-muted mb-3">
                        Fraser Facility Services is a family-owned and locally operated company providing dependable commercial cleaning, property maintenance, and facility solutions to businesses, strata properties, and facilities across the Lower Mainland and Fraser Valley.
                    </p>
                    <p class="text-muted mb-4">
                        We believe that good service is built on consistency, accountability, and clear communication. By serving as a single point of contact for routine janitorial, floor care, exterior cleaning, and seasonal property support, we help property managers and business owners keep their facilities clean, safe, and well-maintained.
                    </p>
                    <div class="d-flex align-items-center">
                        <a href="about.php" class="btn btn-primary py-2 px-4 font-weight-bold mr-3" style="border-radius: 50px;">Learn More About Us</a>
                        <a href="contact.php" class="btn btn-outline-secondary py-2 px-4 font-weight-bold" style="border-radius: 50px;">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 3. About End -->


    <!-- 4. Core Services Section Start -->
    <?php
    $servicesSectionEyebrow = "Our Services";
    $servicesSectionTitle = "Complete Facility Solutions";
    $servicesSectionDesc = "One Partner. Complete Facility Solutions. Standardized, professional facility care tailored for commercial properties, strata councils, and business facilities.";
    include 'components/services-section.php';
    ?>
    <!-- 4. Core Services End -->


    <!-- 5. Markets We Serve Section Start -->
    <div class="container-fluid markets-bg py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3" style="letter-spacing: 2px;">Industries &amp; Clients</h6>
                    <h1 class="mb-4 section-title">Markets We Serve</h1>
                    <p class="text-muted">Structured facility care programs designed for commercial properties, strata communities, and facilities across the region.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- 1. Commercial Properties & Offices -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="market-card w-100">
                        <span class="market-card-num">01</span>
                        <div class="market-card-icon"><i class="fa fa-building"></i></div>
                        <h4 class="market-card-title">Commercial Properties &amp; Offices</h4>
                        <p class="market-card-desc">Office towers, multi-tenant corporate buildings, and professional office suites requiring dependable daily or scheduled custodial upkeep.</p>
                    </div>
                </div>

                <!-- 2. Strata & Multi-Unit Residential -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="market-card w-100">
                        <span class="market-card-num">02</span>
                        <div class="market-card-icon"><i class="fa fa-city"></i></div>
                        <h4 class="market-card-title">Strata &amp; Multi-Unit Residential</h4>
                        <p class="market-card-desc">Condominiums and townhome communities needing consistent common-area cleaning, hallway maintenance, parkade washing, and entrance care.</p>
                    </div>
                </div>

                <!-- 3. Property Management Companies -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="market-card w-100">
                        <span class="market-card-num">03</span>
                        <div class="market-card-icon"><i class="fa fa-user-tie"></i></div>
                        <h4 class="market-card-title">Property Management Companies</h4>
                        <p class="market-card-desc">Single-vendor service agreements with clear communication and consolidated invoicing across diverse real estate portfolios.</p>
                    </div>
                </div>

                <!-- 4. Retail Properties -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="market-card w-100">
                        <span class="market-card-num">04</span>
                        <div class="market-card-icon"><i class="fa fa-store"></i></div>
                        <h4 class="market-card-title">Retail Properties</h4>
                        <p class="market-card-desc">Retail storefronts, plazas, and customer-facing commercial spaces where spotless presentation directly impacts patron confidence.</p>
                    </div>
                </div>

                <!-- 5. Medical, Dental & Professional Offices -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="market-card w-100">
                        <span class="market-card-num">05</span>
                        <div class="market-card-icon"><i class="fa fa-clinic-medical"></i></div>
                        <h4 class="market-card-title">Medical, Dental &amp; Professional Offices</h4>
                        <p class="market-card-desc">Healthcare practices and professional suites adhering to detailed sanitization, high-touch disinfection, and spotless cleanliness.</p>
                    </div>
                </div>

                <!-- 6. Construction & Renovation Projects -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="market-card w-100">
                        <span class="market-card-num">06</span>
                        <div class="market-card-icon"><i class="fa fa-hard-hat"></i></div>
                        <h4 class="market-card-title">Construction &amp; Renovation Projects</h4>
                        <p class="market-card-desc">Rough and final post-construction cleanups, turnover detailing, and floor preparation for general contractors and builders.</p>
                    </div>
                </div>

                <!-- 7. Residential Properties (Last per client requirement) -->
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="market-card market-card--residential w-100">
                        <span class="market-card-num">07</span>
                        <div class="market-card-icon"><i class="fa fa-home"></i></div>
                        <h4 class="market-card-title">Residential Properties</h4>
                        <p class="market-card-desc">Move-in/move-out deep cleaning, window cleaning, pressure washing, and seasonal property support for private residences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 5. Markets We Serve End -->


    <!-- 6. Why Choose Fraser (Safety, Training & Credentials) Start -->
    <div class="container-fluid py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 pt-lg-3 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3" style="letter-spacing: 2px;">Safety, Training &amp; Credentials</h6>
                    <h1 class="mb-4 section-title">One Partner. Complete Facility Solutions.</h1>
                    <p class="mb-4 text-muted">We provide a direct, accountable point of contact for complete facility solutions, ensuring consistent standards, workplace safety, and dependable service across every site.</p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <h5 class="font-weight-semi-bold"><i class="fa fa-shield-alt text-primary mr-2"></i>WorkSafeBC Registered</h5>
                            <p class="mb-0 text-muted">Operating in full accordance with provincial workplace health and safety requirements.</p>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h5 class="font-weight-semi-bold"><i class="fa fa-file-contract text-primary mr-2"></i>Commercially Insured</h5>
                            <p class="mb-0 text-muted">Comprehensive commercial liability coverage protecting your property on every visit.</p>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h5 class="font-weight-semi-bold"><i class="fa fa-user-graduate text-primary mr-2"></i>WHMIS-Trained Personnel</h5>
                            <p class="mb-0 text-muted">Personnel trained in chemical handling, proper dilution, and safety protocols.</p>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h5 class="font-weight-semi-bold"><i class="fa fa-handshake text-primary mr-2"></i>Dedicated Point of Contact</h5>
                            <p class="mb-0 text-muted">One reliable partner managing janitorial, maintenance, and seasonal facility needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 mt-4 mt-lg-0" style="min-height: 380px;">
                    <div class="position-relative h-100 rounded overflow-hidden shadow-sm" style="min-height: 380px;">
                        <img class="position-absolute w-100 h-100" src="./assets/img/about_us/feature.jpg" alt="Safety and Quality" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 6. Why Choose Fraser End -->


    <!-- 7. Service Area Section Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-4">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">Service Area</span>
                    <h1 class="mb-3 section-title d-inline-block">Serving the Lower Mainland &amp; Fraser Valley</h1>
                    <p class="text-muted mb-4 mx-auto" style="max-width: 750px;">
                        Proudly providing facility support and commercial cleaning services across 17 regional municipalities:
                    </p>

                    <!-- 17 Municipalities from Brochure -->
                    <div class="d-flex flex-wrap justify-content-center align-items-center mb-4" style="gap: 8px;">
                        <?php
                        $homeAreas = [
                            'Vancouver',
                            'Burnaby',
                            'New Westminster',
                            'Richmond',
                            'Delta',
                            'Surrey',
                            'White Rock',
                            'West Vancouver',
                            'Chilliwack',
                            'Langley',
                            'Coquitlam',
                            'Port Coquitlam',
                            'Port Moody',
                            'Maple Ridge',
                            'Pitt Meadows',
                            'North Vancouver',
                            'Abbotsford'
                        ];
                        foreach ($homeAreas as $area): ?>
                            <span class="badge badge-white px-3 py-2 font-weight-bold shadow-sm" style="font-size: 0.9rem; border: 1px solid #dee2e6; color: #0F2747; background: #fff;">
                                <i class="fa fa-map-marker-alt text-primary mr-1"></i> <?php echo htmlspecialchars($area); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>

                    <p class="text-muted small mb-0">
                        <em>Don't see your area listed? <a href="contact.php" class="text-secondary font-weight-bold">Contact us</a> to confirm service availability for your property.</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- 7. Service Area End -->


    <!-- 8. Our Service Commitment Section Start (Replaces artificial testimonials) -->
    <div class="container-fluid py-5" style="background-color: #0F2747;">
        <div class="container py-5">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">Service Principles</span>
                    <h1 class="section-title text-white mb-3 d-inline-block">Our Service Commitment</h1>
                    <p class="text-white-50">How we deliver consistent, dependable facility care to every client.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 d-flex">
                    <div class="p-4 rounded h-100 w-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                        <div class="mb-3 text-primary" style="font-size: 2rem;"><i class="fa fa-calendar-check"></i></div>
                        <h5 class="text-white font-weight-bold mb-2">Reliable Scheduling</h5>
                        <p class="text-white-50 small mb-0">Service plans built around each property's operational requirements and traffic patterns.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 d-flex">
                    <div class="p-4 rounded h-100 w-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                        <div class="mb-3 text-primary" style="font-size: 2rem;"><i class="fa fa-clipboard-list"></i></div>
                        <h5 class="text-white font-weight-bold mb-2">Consistent Standards</h5>
                        <p class="text-white-50 small mb-0">Site-specific scopes of work and routine supervisory checklists help maintain consistent quality.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 d-flex">
                    <div class="p-4 rounded h-100 w-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                        <div class="mb-3 text-primary" style="font-size: 2rem;"><i class="fa fa-comments"></i></div>
                        <h5 class="text-white font-weight-bold mb-2">Clear Communication</h5>
                        <p class="text-white-50 small mb-0">Clients have a direct point of contact for service requests, updates, and fast follow-through.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 d-flex">
                    <div class="p-4 rounded h-100 w-100" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(201,161,74,0.3);">
                        <div class="mb-3 text-primary" style="font-size: 2rem;"><i class="fa fa-sliders-h"></i></div>
                        <h5 class="text-white font-weight-bold mb-2">Flexible Solutions</h5>
                        <p class="text-white-50 small mb-0">Service frequency, staffing, and scopes can be adapted as your facility requirements evolve.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 8. Service Commitment End -->


    <!-- 9. Request a Site Assessment CTA Start -->
    <div class="container-fluid py-5 bg-white border-top">
        <div class="container py-4 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-2" style="letter-spacing: 2px;">Get in Touch</h6>
                    <h1 class="display-4 font-weight-bold text-dark mb-3">Request a Site Assessment</h1>
                    <p class="lead text-muted mb-4 mx-auto" style="max-width: 680px; font-size: 1.1rem;">
                        Following a site assessment, we provide a detailed proposal outlining the recommended scope of work, service frequency and pricing.
                    </p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                        <a href="contact.php" class="btn btn-primary py-3 px-5 font-weight-bold mr-sm-3 mb-3 mb-sm-0 shadow-sm" style="border-radius: 50px; font-size: 1rem;">
                            Request a Free Proposal <i class="fa fa-arrow-right ml-2"></i>
                        </a>
                        <a href="tel:17788861491" class="btn btn-outline-dark py-3 px-4 font-weight-bold" style="border-radius: 50px; font-size: 1rem;">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>+1 778-886-1491
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 9. CTA End -->


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
                            <div class="d-flex flex-column h-100 pb-auto mb-5">
                                <div class="position-relative mb-4">
                                    <img class="img-fluid rounded w-100" src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" style="height: 250px; object-fit: cover;">
                                    <div class="blog-date">
                                        <h4 class="font-weight-bold mb-n1"><?php echo $day; ?></h4>
                                        <small class="text-white text-uppercase"><?php echo $month; ?></small>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-between h-100 mb-auto">
                                    <div class="d-flex mb-2">
                                        <a class="text-secondary text-uppercase font-weight-medium" href="blog.php?slug=<?php echo urlencode($slug); ?>"><?php echo htmlspecialchars($post['author']); ?></a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-secondary text-uppercase font-weight-medium" href="blog.php?slug=<?php echo urlencode($slug); ?>"><?php echo htmlspecialchars($post['category']); ?></a>
                                    </div>
                                    <h5 class="font-weight-medium mb-2"><?php echo htmlspecialchars($post['title']); ?></h5>
                                    <p class="mb-4"><?php echo htmlspecialchars(substr($post['excerpt'], 0, 80)) . '...'; ?></p>
                                    <a class="btn btn-sm btn-primary py-2 mt-auto align-self-start" href="blog.php?slug=<?php echo urlencode($slug); ?>">Read More</a>
                                </div>
                            </div><?php endforeach; ?>
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