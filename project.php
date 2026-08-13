<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Projects - Fraser Facility Services";
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
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Projects & Properties We Serve</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Our Work</h6>
                    <h1 class="section-title mb-3">Properties & Clients We Serve</h1>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="list-inline mb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Commercial</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Residential</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Industrial</li>
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/project/portfolio-1.jpg" alt="">
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
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/project/portfolio-2.jpg" alt="">
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
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/project/portfolio-3.jpg" alt="">
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
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/project/portfolio-4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Strata & Multi-Family</h4>
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
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/project/portfolio-5.jpg" alt="">
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
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100" src="./assets/project/portfolio-6.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4 class="font-weight-bold mb-4">Property Management</h4>
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
    </div>
    <!-- Portfolio End -->


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