<?php
// ── Load blog data ────────────────────────────────────────────────────────
require_once 'data/blogs.php';   // provides $blogs[]

// ── Resolve slug from query string ────────────────────────────────────────
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = isset($blogs[$slug]) ? $blogs[$slug] : null;

// ── Page-level vars ───────────────────────────────────────────────────────
if ($post) {
    $pageTitle = htmlspecialchars($post['title']) . ' - Fraser Facility Services';
    $postDate  = date('F j, Y', strtotime($post['date']));
} else {
    $pageTitle = '404 – Post Not Found - Fraser Facility Services';
}

// ── Sidebar: newest posts (excluding current) ─────────────────────────────
uasort($blogs, fn($a, $b) => strtotime($b['date']) <=> strtotime($a['date']));
$recentPosts = array_slice(
    array_filter($blogs, fn($s) => $s !== $slug, ARRAY_FILTER_USE_KEY),
    0, 4, true
);

// ── Sidebar: categories with post counts ─────────────────────────────────
$categories = [];
foreach ($blogs as $b) {
    $categories[$b['category']] = ($categories[$b['category']] ?? 0) + 1;
}

// ── Sidebar: unique tag cloud ─────────────────────────────────────────────
$allTags = [];
foreach ($blogs as $b) {
    foreach ($b['tags'] as $t) { $allTags[$t] = true; }
}
$allTags = array_keys($allTags);
?>
<!doctype html>
<html lang="en">

<head>
  <?php include 'components/head.php'; ?>
</head>

<body>

  <!-- Header -->
  <?php include 'components/header.php'; ?>

  <!-- Page Header -->
  <?php 
  if ($post) {
      $pageHeaderTitle = "Facility Care Tips";
      $pageHeaderEyebrow = $post['category'];
      $pageHeaderSubtitle = $post['title'];
      $pageHeaderBg = !empty($post['image']) ? $post['image'] : "./assets/img/home/carousel-3.jpg";
      $breadcrumbs = [
          ['label' => 'Home', 'url' => 'index.php'],
          ['label' => 'Blog', 'url' => 'blogs.php'],
          ['label' => $post['category'], 'url' => '']
      ];
  } else {
      $pageHeaderTitle = "Post Not Found";
      $pageHeaderBg = "./assets/img/home/carousel-1.jpg";
      $breadcrumbs = [
          ['label' => 'Home', 'url' => 'index.php'],
          ['label' => 'Blog', 'url' => 'blogs.php'],
          ['label' => '404', 'url' => '']
      ];
  }
  include 'components/page-header.php'; 
  ?>

  <!-- Main Content -->
  <div class="container-fluid py-5">
    <div class="container">

      <?php if (!$post): ?>
      <!-- 404 fallback -->
      <div class="row justify-content-center text-center py-5">
        <div class="col-lg-6">
          <i class="fa fa-4x fa-newspaper text-primary mb-4"></i>
          <h2 class="mb-3">Post Not Found</h2>
          <p class="text-muted mb-4">
            The article you're looking for doesn't exist or may have been moved.
          </p>
          <a href="blogs.php" class="btn btn-primary py-2 px-5">
            <i class="fa fa-arrow-left mr-2"></i>Back to Blog
          </a>
        </div>
      </div>

      <?php else: ?>
      <div class="row">

        <!-- ── Article ─────────────────────────────────────────────────── -->
        <div class="col-lg-8">

          <!-- Meta -->
          <div class="d-flex flex-wrap align-items-center mb-3">
            <span class="badge badge-primary mr-2 mb-1">
              <?php echo htmlspecialchars($post['category']); ?>
            </span>
            <small class="text-muted mr-3 mb-1">
              <i class="fa fa-user-circle mr-1"></i>
              <?php echo htmlspecialchars($post['author']); ?>
            </small>
            <small class="text-muted mb-1">
              <i class="fa fa-calendar-alt mr-1"></i>
              <?php echo $postDate; ?>
            </small>
          </div>

          <!-- Title -->
          <h1 class="section-title mb-4">
            <?php echo htmlspecialchars($post['title']); ?>
          </h1>

          <!-- Hero image -->
          <img
            class="img-fluid rounded w-100 mb-4"
            src="<?php echo htmlspecialchars($post['image']); ?>"
            alt="<?php echo htmlspecialchars($post['title']); ?>" />

          <!-- Post body (HTML from data store) -->
          <div class="post-body mb-5">
            <?php echo $post['content']; ?>
          </div>

          <!-- Tags -->
          <?php if (!empty($post['tags'])): ?>
          <div class="mb-4">
            <strong class="mr-2 text-dark">
              <i class="fa fa-tags text-secondary mr-1"></i>Tags:
            </strong>
            <?php foreach ($post['tags'] as $tag): ?>
              <a href="blogs.php" class="btn btn-sm btn-outline-secondary mr-1 mb-1">
                <?php echo htmlspecialchars($tag); ?>
              </a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <!-- Back -->
          <a href="blogs.php" class="btn btn-primary py-2 px-4 mb-5">
            <i class="fa fa-arrow-left mr-2"></i>All Posts
          </a>

          <!-- CTA banner -->
          <div class="d-flex align-items-center bg-dark rounded p-4 mb-5">
            <div class="mr-4 d-none d-sm-block">
              <i class="fa fa-3x fa-handshake text-primary"></i>
            </div>
            <div class="flex-grow-1">
              <h5 class="text-white mb-1">One Partner. Complete Facility Solutions.</h5>
              <p class="text-white-50 mb-0 small">
                Commercial cleaning, property maintenance &amp; seasonal facility support — serving the Lower Mainland from a single point of contact.
              </p>
            </div>
            <a href="contact.php" class="btn btn-primary ml-4 flex-shrink-0">
              Get a Quote
            </a>
          </div>

        </div>

        <!-- ── Sidebar ──────────────────────────────────────────────────── -->
        <div class="col-lg-4 mt-5 mt-lg-0">

          <!-- Recent Posts -->
          <?php if (!empty($recentPosts)): ?>
          <div class="mb-5">
            <h4 class="section-title mb-4">Recent Posts</h4>
            <?php $keys = array_keys($recentPosts); ?>
            <?php foreach ($recentPosts as $rSlug => $rPost): ?>
            <div class="d-flex align-items-start <?php echo end($keys) !== $rSlug ? 'border-bottom mb-3 pb-3' : ''; ?>">
              <img
                class="rounded flex-shrink-0 mr-3"
                src="<?php echo htmlspecialchars($rPost['image']); ?>"
                style="width:72px;height:72px;object-fit:cover;"
                alt="<?php echo htmlspecialchars($rPost['title']); ?>" />
              <div>
                <a class="text-dark font-weight-medium d-block mb-1 small"
                   href="blog.php?slug=<?php echo urlencode($rSlug); ?>">
                  <?php echo htmlspecialchars($rPost['title']); ?>
                </a>
                <small class="text-muted">
                  <i class="fa fa-calendar-alt mr-1"></i>
                  <?php echo date('M j, Y', strtotime($rPost['date'])); ?>
                </small>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <!-- Categories -->
          <div class="mb-5">
            <h4 class="section-title mb-4">Categories</h4>
            <ul class="list-unstyled m-0">
              <?php foreach ($categories as $cat => $count): ?>
              <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center rounded">
                <a class="text-dark" href="blogs.php">
                  <i class="fa fa-angle-right text-secondary mr-2"></i>
                  <?php echo htmlspecialchars($cat); ?>
                </a>
                <span class="badge badge-primary badge-pill"><?php echo $count; ?></span>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- Tag Cloud -->
          <div class="mb-5">
            <h4 class="section-title mb-4">Tags</h4>
            <div class="d-flex flex-wrap m-n1">
              <?php foreach ($allTags as $tag): ?>
                <a href="blogs.php" class="btn btn-sm btn-outline-secondary m-1">
                  <?php echo htmlspecialchars($tag); ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Contact CTA card -->
          <div class="rounded text-white text-center p-4" style="background:linear-gradient(135deg,#0a1026 0%,#101e3f 100%);">
            <i class="fa fa-3x fa-phone-alt text-primary mb-3"></i>
            <h5 class="mb-2">Ready to talk?</h5>
            <p class="text-white-50 small mb-3">
              Get a free estimate for your property today.
            </p>
            <a href="tel:17788861491" class="btn btn-primary btn-block mb-2">
              <i class="fa fa-phone-alt mr-2"></i>+1 778-886-1491
            </a>
            <a href="contact.php" class="btn btn-outline-light btn-block">
              <i class="fa fa-envelope mr-2"></i>Send a Message
            </a>
          </div>

        </div>

      </div>
      <?php endif; ?>

    </div>
  </div>

  <!-- Footer -->
  <?php include 'components/footer.php'; ?>

  <a href="#" class="btn btn-primary px-3 back-to-top">
    <i class="fa fa-angle-double-up"></i>
  </a>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="./assets/js/main.js"></script>

</body>
</html>