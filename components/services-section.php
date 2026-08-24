<?php

/**
 * Reusable Services Section Component
 * 
 * Configurable Variables:
 * - $servicesSectionEyebrow (string) : Optional eyebrow label (default: 'Our Services')
 * - $servicesSectionTitle   (string) : Main title (default: 'Complete Facility Solutions')
 * - $servicesSectionDesc    (string) : Subtitle/description
 */

$serviceItems = [
    [
        'title' => 'Janitorial & Custodial Services',
        'icon'  => 'fa-broom',
        'image' => './assets/img/project/portfolio-1.jpg',
        'bullets' => [
            'Commercial & office cleaning',
            'Strata & multi-unit common-area cleaning',
            'Medical, dental & professional office cleaning',
            'Routine janitorial & sanitization',
            'Deep cleaning',
            'Move-in, move-out & post-construction cleaning',
            'Day porter services'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Floor & Carpet Care',
        'icon'  => 'fa-layer-group',
        'image' => './assets/img/project/portfolio-2.jpg',
        'bullets' => [
            'Carpet cleaning & extraction',
            'Floor stripping & refinishing',
            'Floor polishing',
            'Tile & grout cleaning',
            'Hard-floor maintenance & stain treatment'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Property Maintenance & Facility Support',
        'icon'  => 'fa-tools',
        'image' => './assets/img/project/portfolio-4.jpg',
        'bullets' => [
            'General property & common-area upkeep',
            'Minor repairs & maintenance',
            'Preventive property maintenance',
            'Fixture & hardware maintenance',
            'Vendor & trade coordination*'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Window & Exterior Cleaning',
        'icon'  => 'fa-spray-can',
        'image' => './assets/img/project/portfolio-3.jpg',
        'bullets' => [
            'Interior & exterior window cleaning',
            'Glass & entrance cleaning',
            'Pressure washing',
            'Sidewalk & walkway cleaning',
            'Exterior common-area cleaning'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Specialty Cleaning & Facility Support',
        'icon'  => 'fa-shield-alt',
        'image' => './assets/img/project/portfolio-6.jpg',
        'bullets' => [
            'Post-construction & turnover cleaning',
            'Janitorial supply monitoring & restocking',
            'Garbage room & parkade cleaning',
            'High-touch surface disinfection',
            'Event & post-event cleanup'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Snow & Ice Management',
        'icon'  => 'fa-snowflake',
        'image' => './assets/img/project/portfolio-5.jpg',
        'bullets' => [
            'Snow clearing & removal',
            'Sidewalk, walkway & entrance clearing',
            'Parking-area snow management',
            'Salting & de-icing',
            'Seasonal snow & ice programs'
        ],
        'link'  => 'contact.php',
        'highlight' => true
    ]
];

$secEyebrow = $servicesSectionEyebrow ?? 'Our Services';
$secTitle   = $servicesSectionTitle   ?? 'Complete Facility Solutions';
$secDesc    = $servicesSectionDesc    ?? 'One Partner. Complete Facility Solutions. We provide a full suite of services to ensure your property remains clean, safe, and fully operational.';
?>

<!-- Services Start -->
<div class="container-fluid fraser-services-section-bg py-5">
  <div class="container py-5">

    <!-- Section Header -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h6 class="text-primary font-weight-semi-bold text-uppercase mb-3" style="letter-spacing: 2px;"><?php echo htmlspecialchars($secEyebrow); ?></h6>
        <h1 class="mb-4 section-title text-white"><?php echo htmlspecialchars($secTitle); ?></h1>
        <p class="text-white-50 mx-auto mb-0" style="max-width: 680px;"><?php echo htmlspecialchars($secDesc); ?></p>
      </div>
    </div>

    <!-- 2-Column Grid (Left Content + Right Image Cards) -->
    <div class="row">
      <?php foreach ($serviceItems as $item): ?>
        <div class="col-lg-6 col-12 mb-4 d-flex">
          <div class="fraser-h-service-card <?php echo !empty($item['highlight']) ? 'highlight-card' : ''; ?>">
            <div class="fraser-h-accent-bar"></div>

            <!-- Left Section: Content -->
            <div class="fraser-h-content">
              <div class="d-flex align-items-center mb-3">
                <div class="fraser-h-icon mr-3">
                  <i class="fa <?php echo htmlspecialchars($item['icon']); ?>"></i>
                </div>
                <h4 class="fraser-h-title mb-0"><?php echo htmlspecialchars($item['title']); ?></h4>
              </div>

              <ul class="fraser-h-bullets list-unstyled mb-4">
                <?php foreach ($item['bullets'] as $bullet): ?>
                  <li><i class="fa fa-check-circle"></i><span><?php echo htmlspecialchars($bullet); ?></span></li>
                <?php endforeach; ?>
              </ul>

              <div class="fraser-h-action mt-auto">
                <a href="<?php echo htmlspecialchars($item['link']); ?>" class="fraser-h-btn">
                  Request Service <i class="fa fa-arrow-right ml-2"></i>
                </a>
              </div>
            </div>

            <!-- Right Section: Image -->
            <div class="fraser-h-image-wrap">
              <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="fraser-h-img">
              <div class="fraser-h-image-overlay"></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Trade Coordination Disclaimer -->
    <div class="row mt-3">
      <div class="col-12 text-center">
        <p class="text-white-50 small mb-0 font-italic">
          *Specialized trade services (plumbing, HVAC, electrical) are coordinated through qualified, licensed subcontractors where certification is required, providing clients with a single point of contact.
        </p>
      </div>
    </div>

  </div>
</div>
<!-- Services End -->