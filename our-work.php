<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Our Work - Fraser Facility Services";
    $customCss = "./assets/css/our-work.css";
    include 'components/head.php';
    ?>
</head>

<body>
    <!-- Header Start -->
    <?php include 'components/header.php'; ?>
    <!-- Header End -->

    <!-- Page Header Start -->
    <?php
    $pageHeaderTitle    = "Our Work & Portfolio";
    $pageHeaderEyebrow  = "Project Gallery";
    $pageHeaderSubtitle = "Explore verified project results, facility upkeep, and before-and-after transformations across the Lower Mainland.";
    $pageHeaderBg       = "./assets/img/home/carousel-2.jpg";
    $breadcrumbs        = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Our Work', 'url' => '']
    ];
    include 'components/page-header.php';
    ?>
    <!-- Page Header End -->

    <?php
    // Load portfolio projects data
    require_once 'data/our-work.php';
    ?>

    <!-- Portfolio Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-4">

            <!-- Section Title & Intro -->
            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-8">
                    <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">
                        Proven Results
                    </span>
                    <h1 class="section-title mb-3">Completed Facility Projects</h1>
                    <p class="text-muted">
                        Browse our recent work across commercial properties, strata communities, healthcare clinics, and business facilities. Click any category tab below to filter projects.
                    </p>
                </div>
            </div>

            <!-- Category Filter Tabs -->
            <div class="row">
                <div class="col-12 work-filter-wrapper text-center">
                    <ul class="work-filter-nav" id="work-filters">
                        <?php foreach ($portfolioCategories as $filterKey => $filterLabel): ?>
                            <li>
                                <button
                                    type="button"
                                    class="work-filter-btn <?php echo ($filterKey === '*') ? 'active' : ''; ?>"
                                    data-filter="<?php echo ($filterKey === '*') ? '*' : '.' . htmlspecialchars($filterKey); ?>">
                                    <?php echo htmlspecialchars($filterLabel); ?>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Portfolio Grid Items -->
            <div class="row work-grid" id="work-container">
                <?php foreach ($portfolioItems as $item): ?>
                    <div class="col-lg-6 col-md-12 mb-5 work-item <?php echo htmlspecialchars($item['category']); ?>">
                        <div class="work-card">

                            <!-- Before / After Dual Image Container -->
                            <div class="work-comparison">
                                <div class="work-dual-grid">

                                    <!-- Before Side -->
                                    <div class="work-img-col before-col">
                                        <span class="work-badge work-badge-before">Before</span>
                                        <img src="<?php echo htmlspecialchars($item['before_img']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?> Before">
                                        <a href="<?php echo htmlspecialchars($item['before_img']); ?>" data-lightbox="gallery-<?php echo htmlspecialchars($item['id']); ?>" data-title="<?php echo htmlspecialchars($item['title']); ?> - Before" class="work-lightbox-btn" title="View Fullscreen Before Image">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>

                                    <!-- Divider with Icon -->
                                    <div class="work-dual-divider">
                                        <div class="work-dual-divider-icon">
                                            <i class="fa fa-arrows-alt-h"></i>
                                        </div>
                                    </div>

                                    <!-- After Side -->
                                    <div class="work-img-col after-col">
                                        <span class="work-badge work-badge-after">After</span>
                                        <img src="<?php echo htmlspecialchars($item['after_img']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?> After">
                                        <a href="<?php echo htmlspecialchars($item['after_img']); ?>" data-lightbox="gallery-<?php echo htmlspecialchars($item['id']); ?>" data-title="<?php echo htmlspecialchars($item['title']); ?> - After" class="work-lightbox-btn" title="View Fullscreen After Image">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- Card Body Info -->
                            <div class="work-card-body">
                                <span class="work-card-cat"><?php echo htmlspecialchars($item['category_name']); ?></span>
                                <h3 class="work-card-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                                <div class="work-card-loc">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span><?php echo htmlspecialchars($item['location']); ?></span>
                                </div>
                                <p class="work-card-desc"><?php echo htmlspecialchars($item['description']); ?></p>

                                <?php if (!empty($item['highlights'])): ?>
                                    <ul class="work-highlights">
                                        <?php foreach ($item['highlights'] as $highlight): ?>
                                            <li>
                                                <i class="fa fa-check-circle"></i>
                                                <span><?php echo htmlspecialchars($highlight); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <div class="work-card-footer">
                                    <small class="text-muted">
                                        <strong>Scope:</strong> <?php echo htmlspecialchars($item['scope']); ?>
                                    </small>
                                    <a href="contact.php" class="btn btn-sm btn-outline-primary ml-3 font-weight-bold" style="border-radius: 50px; white-space: nowrap;">
                                        Request Similar Service
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
    <!-- Portfolio Section End -->

    <!-- Proposal CTA Section Start -->
    <div class="container-fluid py-5" style="background: linear-gradient(135deg, #0F2747 0%, #153761 100%);">
        <div class="container py-4 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">
                        Ready For A Fresh Standard?
                    </span>
                    <h2 class="display-4 font-weight-bold text-white mb-3">Let's Upgrade Your Property</h2>
                    <p class="lead text-white-50 mb-4 mx-auto" style="max-width: 680px; font-size: 1.05rem;">
                        Contact us today to schedule an on-site assessment. We provide detailed scopes of work, transparent pricing, and dependable ongoing facility care.
                    </p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                        <a href="contact.php" class="btn btn-primary py-3 px-5 font-weight-bold mr-sm-3 mb-3 mb-sm-0 shadow-sm" style="border-radius: 50px; font-size: 1rem;">
                            Request Free Proposal <i class="fa fa-arrow-right ml-2"></i>
                        </a>
                        <a href="tel:17788861491" class="btn btn-outline-light py-3 px-4 font-weight-bold" style="border-radius: 50px; font-size: 1rem;">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>+1 778-886-1491
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Proposal CTA Section End -->

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

    <!-- Template Javascript -->
    <script src="./assets/js/main.js"></script>

    <!-- Isotope Filtering Initialization -->
    <script>
        $(document).ready(function() {
            var $grid = $('#work-container').isotope({
                itemSelector: '.work-item',
                layoutMode: 'fitRows',
                transitionDuration: '0.45s'
            });

            // Filter items on button click
            $('#work-filters').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
                $('#work-filters button').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>

</html>