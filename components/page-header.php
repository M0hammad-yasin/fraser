<?php

/**
 * Reusable Dynamic Page Header Banner Component
 * 
 * Accepted Variables:
 * - $pageHeaderTitle    (string) : Main banner heading (e.g. "About Us", "Our Services")
 * - $pageHeaderEyebrow  (string) : Optional small gold pill/label (e.g. "WHO WE ARE", "FACILITY CARE")
 * - $pageHeaderSubtitle (string) : Optional short descriptive lead text
 * - $pageHeaderBg       (string) : Path to background image (e.g. "./assets/img/about_us/about.jpg")
 * - $breadcrumbs        (array)  : Array of ['label' => '...', 'url' => '...']
 */

$title    = $pageHeaderTitle    ?? (isset($pageTitle) ? trim(str_replace('- Fraser Facility Services', '', $pageTitle)) : 'Fraser Facility Services');
$eyebrow  = $pageHeaderEyebrow  ?? '';
$subtitle = $pageHeaderSubtitle ?? '';
$bgImage  = !empty($pageHeaderBg) ? $pageHeaderBg : './assets/img/home/carousel-1.jpg';

// Build breadcrumbs if not provided
if (!isset($breadcrumbs) || !is_array($breadcrumbs)) {
  $breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => $title, 'url' => '']
  ];
}
?>

<div class="container-fluid fraser-page-header  py-5" style="background-image: url('<?php echo htmlspecialchars($bgImage); ?>');">
  <div class="container py-3 position-relative" style="z-index: 2;">

    <!-- Top-Left Breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-3">
      <ol class="fraser-breadcrumb list-inline mb-0">
        <?php foreach ($breadcrumbs as $index => $crumb):
          $isLast = ($index === count($breadcrumbs) - 1) || empty($crumb['url']);
        ?>
          <li class="list-inline-item <?php echo $isLast ? 'text-white font-weight-bold active' : ''; ?>">
            <?php if (!$isLast && !empty($crumb['url'])): ?>
              <a href="<?php echo htmlspecialchars($crumb['url']); ?>" class="fraser-breadcrumb-link">
                <?php if ($index === 0): ?><i class="fa fa-home mr-1"></i><?php endif; ?>
                <?php echo htmlspecialchars($crumb['label']); ?>
              </a>
              <span class="fraser-breadcrumb-separator mx-2 text-primary font-weight-bold">/</span>
            <?php else: ?>
              <?php echo htmlspecialchars($crumb['label']); ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ol>
    </nav>

    <!-- Centered Heading & Subtitle -->
    <div class="row justify-content-center text-center">
      <div class="col-lg-10 col-md-11">
        <?php if (!empty($eyebrow)): ?>
          <div class="mb-3">
            <span class="fraser-banner-eyebrow text-uppercase">
              <?php echo htmlspecialchars($eyebrow); ?>
            </span>
          </div>
        <?php endif; ?>

        <h1 class="display-4 font-weight-bold text-white text-uppercase tracking-wider mb-2 fraser-banner-title">
          <?php echo htmlspecialchars($title); ?>
        </h1>

        <?php if (!empty($subtitle)): ?>
          <p class="lead text-white-50 mx-auto mb-0" style="max-width: 680px; font-size: 1.05rem;">
            <?php echo htmlspecialchars($subtitle); ?>
          </p>
        <?php endif; ?>
      </div>
    </div>

  </div>
</div>