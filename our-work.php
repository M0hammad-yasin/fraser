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
    $pageHeaderSubtitle = "Explore verified project results, facility upkeep, and completed commercial cleaning across the Lower Mainland.";
    $pageHeaderBg       = "./assets/img/home/carousel-2.jpg";
    $breadcrumbs        = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Our Work', 'url' => '']
    ];
    include 'components/page-header.php';
    ?>
    <!-- Page Header End -->

    <?php
    // Load portfolio projects and category data
    require_once 'data/our-work.php';
    ?>

    <!-- Portfolio Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-4">

            <!-- Section Title & Intro -->
            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-8">
                    <span class="badge badge-pill badge-primary text-uppercase font-weight-bold px-3 py-2 mb-3" style="letter-spacing: 2px; font-size: 0.8rem; background-color: #C9A14A; color: #0F2747;">
                        Verified Quality
                    </span>
                    <h1 class="section-title mb-3">Completed Facility Projects</h1>
                    <p class="text-muted">
                        Browse our completed work across commercial properties, corporate offices, and professional facilities. Click any category tab below to filter projects.
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
                                    data-filter="<?php echo ($filterKey === '*') ? ':not(.work-coming-soon)' : '.' . htmlspecialchars($filterKey); ?>">
                                    <?php echo htmlspecialchars($filterLabel); ?>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- =========================================================================
                 PREVIOUS BEFORE / AFTER LAYOUT (COMMENTED OUT FOR REFERENCE)
                 =========================================================================
            <div class="row work-grid" id="work-container-before-after-archived">
                <?php /*
                foreach ($portfolioItems as $item): ?>
                    <div class="col-lg-6 col-md-12 mb-5 work-item <?php echo htmlspecialchars($item['category']); ?>">
                        <div class="work-card">
                            <div class="work-comparison">
                                <div class="work-dual-grid">
                                    <div class="work-img-col before-col">
                                        <span class="work-badge work-badge-before">Before</span>
                                        <img src="<?php echo htmlspecialchars($item['before_img']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?> Before">
                                        <a href="<?php echo htmlspecialchars($item['before_img']); ?>" data-lightbox="gallery-<?php echo htmlspecialchars($item['id']); ?>" data-title="<?php echo htmlspecialchars($item['title']); ?> - Before" class="work-lightbox-btn" title="View Fullscreen Before Image">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="work-dual-divider">
                                        <div class="work-dual-divider-icon">
                                            <i class="fa fa-arrows-alt-h"></i>
                                        </div>
                                    </div>
                                    <div class="work-img-col after-col">
                                        <span class="work-badge work-badge-after">After</span>
                                        <img src="<?php echo htmlspecialchars($item['after_img']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?> After">
                                        <a href="<?php echo htmlspecialchars($item['after_img']); ?>" data-lightbox="gallery-<?php echo htmlspecialchars($item['id']); ?>" data-title="<?php echo htmlspecialchars($item['title']); ?> - After" class="work-lightbox-btn" title="View Fullscreen After Image">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                            <li><i class="fa fa-check-circle"></i><span><?php echo htmlspecialchars($highlight); ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="work-card-footer">
                                    <small class="text-muted"><strong>Scope:</strong> <?php echo htmlspecialchars($item['scope']); ?></small>
                                    <a href="contact.php" class="btn btn-sm btn-outline-primary ml-3 font-weight-bold" style="border-radius: 50px; white-space: nowrap;">Request Similar Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; */ ?>
            </div>
            ========================================================================== -->

            <!-- =========================================================================
                 NEW CLEANED PROJECT DISPLAY LAYOUT (ACTIVE PROJECTS + COMING SOON TABS)
                 ========================================================================= -->
            <div class="row work-grid" id="work-container">

                <!-- 1. Active Projects (e.g. Janitorial multi-photo showcase) -->
                <?php foreach ($portfolioProjects as $project): ?>
                    <div class="col-12 work-item work-active-project <?php echo htmlspecialchars($project['category']); ?>">
                        <div class="work-project-card">

                            <!-- Project Header -->
                            <div class="work-project-header">
                                <div class="row align-items-center">
                                    <div class="col-lg-8 mb-3 mb-lg-0">
                                        <span class="work-project-cat"><?php echo htmlspecialchars($project['category_name']); ?></span>
                                        <h2 class="work-project-title"><?php echo htmlspecialchars($project['title']); ?></h2>
                                        <div class="work-project-meta">
                                            <span><i class="fa fa-map-marker-alt"></i><?php echo htmlspecialchars($project['location']); ?></span>
                                            <span><i class="fa fa-clipboard-check"></i><?php echo htmlspecialchars($project['scope']); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-lg-right">
                                        <a href="contact.php" class="btn btn-primary font-weight-bold py-2 px-4 shadow-sm" style="border-radius: 50px;">
                                            Request This Service <i class="fa fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Multi-Photo Cleaned Gallery Grid -->
                            <div class="work-gallery-section">
                                <div class="work-gallery-heading">
                                    <h5><i class="fa fa-images text-primary mr-2"></i>Completed Work &amp; Facility Results</h5>
                                    <small class="text-muted"><i class="fa fa-search-plus mr-1"></i>Click any photo to view full size</small>
                                </div>

                                <div class="work-gallery-grid">
                                    <?php foreach ($project['gallery'] as $idx => $photo): ?>
                                        <div class="work-photo-card">
                                            <div class="work-photo-thumb-wrap">
                                                <span class="work-status-badge"><i class="fa fa-check-circle"></i>Cleaned</span>
                                                <img src="<?php echo htmlspecialchars($photo['src']); ?>" alt="<?php echo htmlspecialchars($photo['title']); ?>">
                                                <a
                                                    href="<?php echo htmlspecialchars($photo['src']); ?>"
                                                    data-lightbox="project-<?php echo htmlspecialchars($project['id']); ?>"
                                                    data-title="<?php echo htmlspecialchars($project['title']) . ' — ' . htmlspecialchars($photo['title']); ?>"
                                                    class="work-photo-overlay"
                                                    title="View Fullscreen Photo">
                                                    <div class="work-zoom-icon">
                                                        <i class="fa fa-search-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="work-photo-info">
                                                <h6 class="work-photo-title"><?php echo htmlspecialchars($photo['title']); ?></h6>
                                                <p class="work-photo-caption"><?php echo htmlspecialchars($photo['caption']); ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Project Details & Highlights -->
                            <div class="work-project-body">
                                <h5 class="text-dark font-weight-bold mb-2">Service Overview &amp; Execution</h5>
                                <p class="text-muted mb-4"><?php echo htmlspecialchars($project['description']); ?></p>

                                <?php if (!empty($project['highlights'])): ?>
                                    <h6 class="text-secondary font-weight-bold text-uppercase mb-2" style="letter-spacing: 1.5px; font-size: 0.8rem;">
                                        Key Standards Delivered
                                    </h6>
                                    <div class="work-highlights-grid">
                                        <?php foreach ($project['highlights'] as $highlight): ?>
                                            <div class="work-highlight-item">
                                                <i class="fa fa-check-circle"></i>
                                                <span><?php echo htmlspecialchars($highlight); ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Project Footer Strip -->
                            <div class="work-project-footer">
                                <div class="d-flex align-items-center text-muted small">
                                    <i class="fa fa-shield-alt text-primary mr-2" style="font-size: 1.1rem;"></i>
                                    <span>WorkSafeBC Registered &bull; WHMIS-Trained Personnel &bull; Commercially Insured</span>
                                </div>
                                <a href="contact.php" class="btn btn-sm btn-outline-primary font-weight-bold py-2 px-4" style="border-radius: 50px;">
                                    Get a Facility Quote
                                </a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($portfolioProjectsMedical as $project): ?>
                    <div class="col-12 work-item work-active-project <?php echo htmlspecialchars($project['category']); ?>">
                        <div class="work-project-card">

                            <!-- Project Header -->
                            <div class="work-project-header">
                                <div class="row align-items-center">
                                    <div class="col-lg-8 mb-3 mb-lg-0">
                                        <span class="work-project-cat"><?php echo htmlspecialchars($project['category_name']); ?></span>
                                        <h2 class="work-project-title"><?php echo htmlspecialchars($project['title']); ?></h2>
                                        <div class="work-project-meta">
                                            <span><i class="fa fa-map-marker-alt"></i><?php echo htmlspecialchars($project['location']); ?></span>
                                            <span><i class="fa fa-clipboard-check"></i><?php echo htmlspecialchars($project['scope']); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-lg-right">
                                        <a href="contact.php" class="btn btn-primary font-weight-bold py-2 px-4 shadow-sm" style="border-radius: 50px;">
                                            Request This Service <i class="fa fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Multi-Photo Cleaned Gallery Grid -->
                            <div class="work-gallery-section">
                                <div class="work-gallery-heading">
                                    <h5><i class="fa fa-images text-primary mr-2"></i>Completed Work &amp; Facility Results</h5>
                                    <small class="text-muted"><i class="fa fa-search-plus mr-1"></i>Click any photo to view full size</small>
                                </div>

                                <div class="work-gallery-grid">
                                    <?php foreach ($project['gallery'] as $idx => $photo): ?>
                                        <div class="work-photo-card">
                                            <div class="work-photo-thumb-wrap">
                                                <span class="work-status-badge"><i class="fa fa-check-circle"></i>Cleaned</span>
                                                <img src="<?php echo htmlspecialchars($photo['src']); ?>" alt="<?php echo htmlspecialchars($photo['title']); ?>">
                                                <a
                                                    href="<?php echo htmlspecialchars($photo['src']); ?>"
                                                    data-lightbox="project-<?php echo htmlspecialchars($project['id']); ?>"
                                                    data-title="<?php echo htmlspecialchars($project['title']) . ' — ' . htmlspecialchars($photo['title']); ?>"
                                                    class="work-photo-overlay"
                                                    title="View Fullscreen Photo">
                                                    <div class="work-zoom-icon">
                                                        <i class="fa fa-search-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="work-photo-info">
                                                <h6 class="work-photo-title"><?php echo htmlspecialchars($photo['title']); ?></h6>
                                                <p class="work-photo-caption"><?php echo htmlspecialchars($photo['caption']); ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Project Details & Highlights -->
                            <div class="work-project-body">
                                <h5 class="text-dark font-weight-bold mb-2">Service Overview &amp; Execution</h5>
                                <p class="text-muted mb-4"><?php echo htmlspecialchars($project['description']); ?></p>

                                <?php if (!empty($project['highlights'])): ?>
                                    <h6 class="text-secondary font-weight-bold text-uppercase mb-2" style="letter-spacing: 1.5px; font-size: 0.8rem;">
                                        Key Standards Delivered
                                    </h6>
                                    <div class="work-highlights-grid">
                                        <?php foreach ($project['highlights'] as $highlight): ?>
                                            <div class="work-highlight-item">
                                                <i class="fa fa-check-circle"></i>
                                                <span><?php echo htmlspecialchars($highlight); ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Project Footer Strip -->
                            <div class="work-project-footer">
                                <div class="d-flex align-items-center text-muted small">
                                    <i class="fa fa-shield-alt text-primary mr-2" style="font-size: 1.1rem;"></i>
                                    <span>WorkSafeBC Registered &bull; WHMIS-Trained Personnel &bull; Commercially Insured</span>
                                </div>
                                <a href="contact.php" class="btn btn-sm btn-outline-primary font-weight-bold py-2 px-4" style="border-radius: 50px;">
                                    Get a Facility Quote
                                </a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- 2. Coming Soon Sections (For categories currently in documentation) -->
                <?php foreach ($comingSoonCategories as $catSlug => $catData): ?>
                    <div class="col-12 work-item work-coming-soon <?php echo htmlspecialchars($catSlug); ?>">
                        <div class="work-coming-soon-card">
                            <div class="coming-soon-icon-box">
                                <i class="fa <?php echo htmlspecialchars($catData['icon']); ?>"></i>
                            </div>
                            <span class="coming-soon-badge">Documentation in Progress</span>
                            <h3 class="coming-soon-title"><?php echo htmlspecialchars($catData['title']); ?></h3>
                            <p class="coming-soon-desc">
                                <?php echo htmlspecialchars($catData['description']); ?>
                            </p>

                            <?php if (!empty($catData['points'])): ?>
                                <ul class="coming-soon-points">
                                    <?php foreach ($catData['points'] as $point): ?>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            <span><?php echo htmlspecialchars($point); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <div class="coming-soon-actions">
                                <a href="contact.php" class="btn btn-primary font-weight-bold py-2 px-4 shadow-sm" style="border-radius: 50px;">
                                    Request a Free Proposal <i class="fa fa-arrow-right ml-2"></i>
                                </a>
                                <a href="service.php" class="btn btn-outline-dark font-weight-bold py-2 px-4" style="border-radius: 50px;">
                                    View Service Details
                                </a>
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
                filter: ':not(.work-coming-soon)',
                transitionDuration: '0.4s'
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