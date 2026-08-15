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
        'title' => 'Janitorial & Custodial',
        'icon'  => 'fa-broom',
        'image' => './assets/img/project/portfolio-1.jpg',
        'bullets' => [
            'Commercial & residential cleaning',
            'Floor care, carpet & window cleaning',
            'Disinfection & sanitization protocols',
            'Day porter & supply management'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Building Maintenance',
        'icon'  => 'fa-tools',
        'image' => './assets/img/project/portfolio-2.jpg',
        'bullets' => [
            'General repairs & handyman services',
            'Painting, drywall & ceiling repairs',
            'Door, lock & hardware maintenance',
            'Custom preventive maintenance programs'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Exterior Services',
        'icon'  => 'fa-leaf',
        'image' => './assets/img/project/portfolio-3.jpg',
        'bullets' => [
            'Snow plowing & ice management',
            'Landscaping & grounds maintenance',
            'Pressure washing & soft washing',
            'Seasonal property cleanups'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Mechanical & Facility Support',
        'icon'  => 'fa-wrench',
        'image' => './assets/img/project/portfolio-4.jpg',
        'bullets' => [
            'Plumbing, electrical & HVAC assistance',
            'Equipment & fixture installations',
            'Preventive routine maintenance',
            'Detailed facility inspections'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Specialized Services',
        'icon'  => 'fa-hard-hat',
        'image' => './assets/img/project/portfolio-6.jpg',
        'bullets' => [
            'Post-construction site cleanups',
            'Warehouse & industrial deep scrubbing',
            'High-reach dusting & power washing',
            'Customized facility programs'
        ],
        'link'  => 'contact.php'
    ],
    [
        'title' => 'Custom Facility Plans',
        'icon'  => 'fa-handshake',
        'image' => './assets/img/project/portfolio-5.jpg',
        'bullets' => [
            '24/7 urgent dispatch & response',
            'Tailored strata & multi-unit packages',
            'Single point-of-contact management',
            'Free on-site facility assessment'
        ],
        'link'  => 'contact.php',
        'highlight' => true
    ]
];

$secEyebrow = $servicesSectionEyebrow ?? 'Our Services';
$secTitle   = $servicesSectionTitle   ?? 'Complete Facility Solutions';
$secDesc    = $servicesSectionDesc    ?? 'One Partner. Every Service. We provide a full suite of services to ensure your property remains clean, safe, and fully operational.';
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

  </div>
</div>
<!-- Services End -->
