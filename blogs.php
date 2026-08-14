<!doctype html>
<html lang="en">

<head>
  <?php
  $pageTitle = "Facility Care Tips - Fraser Facility Services";
  include 'components/head.php';
  ?>
</head>

<body>
  <!-- Header Start -->
  <?php include 'components/header.php'; ?>
  <!-- Header End -->

  <!-- Page Header Start -->
  <?php 
  $pageHeaderTitle = "Facility Care Tips";
  $pageHeaderEyebrow = "News & Insights";
  $pageHeaderSubtitle = "Stay up to date with the latest maintenance checklists, seasonal guides, and property care best practices.";
  $pageHeaderBg = "./assets/img/home/carousel-3.jpg";
  $breadcrumbs = [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Blog', 'url' => '']
  ];
  include 'components/page-header.php'; 
  ?>
  <!-- Page Header End -->

  <!-- Blog Start -->
  <div class="container-fluid py-5">
    <div class="container">

      <?php
      // Pull in the blog data store ($blogs, keyed by slug)
      include 'data/blogs.php';

      // Newest first
      uasort($blogs, function ($a, $b) {
        return strtotime($b['date']) <=> strtotime($a['date']);
      });

      // Simple pagination
      $postsPerPage = 4;
      $totalPosts   = count($blogs);
      $totalPages   = max(1, ceil($totalPosts / $postsPerPage));
      $currentPage  = isset($_GET['page']) ? max(1, min($totalPages, (int) $_GET['page'])) : 1;

      $slugs        = array_keys($blogs);
      $pageSlugs    = array_slice($slugs, ($currentPage - 1) * $postsPerPage, $postsPerPage);
      ?>

      <div class="row align-items-end mb-4">
        <div class="col-lg-6">
          <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">
            Facility Care Tips
          </h6>
          <h1 class="section-title mb-3">
            News & Updates
          </h1>
        </div>
        <div class="col-lg-6">
          <h4 class="font-weight-normal text-muted mb-3">
            Stay up to date with the latest insights, maintenance checklists, and best practices for property care.
          </h4>
        </div>
      </div>

      <div class="row">
        <?php if (empty($pageSlugs)) : ?>
          <div class="col-12 text-center py-5">
            <p class="text-muted mb-0">No posts yet — check back soon.</p>
          </div>
        <?php endif; ?>

        <?php foreach ($pageSlugs as $slug) :
          $post = $blogs[$slug];
          $day   = date('d', strtotime($post['date']));
          $month = date('M', strtotime($post['date']));
        ?>
          <div class="col-lg-6 col-md-6 mb-5 d-flex flex-column h-100">
            <div class="position-relative mb-4">
              <img
                class="img-fluid rounded w-100"
                src="<?php echo htmlspecialchars($post['image']); ?>"
                alt="<?php echo htmlspecialchars($post['title']); ?>" />
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
            <p class="mb-4"><?php echo htmlspecialchars($post['excerpt']); ?></p>
            <a class="btn btn-sm btn-primary py-2 mt-auto align-self-start" href="blog.php?slug=<?php echo urlencode($slug); ?>">Read More</a>
          </div>
        <?php endforeach; ?>

        <?php if ($totalPages > 1) : ?>
          <div class="col-12">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-lg justify-content-center mb-0">
                <li class="page-item <?php echo $currentPage <= 1 ? 'disabled' : ''; ?>">
                  <a class="page-link" href="blogs.php?page=<?php echo max(1, $currentPage - 1); ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                  <li class="page-item <?php echo $i === $currentPage ? 'active' : ''; ?>">
                    <a class="page-link" href="blogs.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                  </li>
                <?php endfor; ?>
                <li class="page-item <?php echo $currentPage >= $totalPages ? 'disabled' : ''; ?>">
                  <a class="page-link" href="blogs.php?page=<?php echo min($totalPages, $currentPage + 1); ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        <?php endif; ?>
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