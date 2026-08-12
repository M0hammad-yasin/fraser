<meta charset="utf-8">
<title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Klean - Cleaning Services Website Template'; ?></title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Free HTML Templates" name="keywords">
<meta content="Free HTML Templates" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="./assets/css/style.css" rel="stylesheet">

<?php if(isset($customCss)): ?>
    <?php if(is_array($customCss)): ?>
        <?php foreach($customCss as $css): ?>
            <link href="<?php echo htmlspecialchars($css); ?>" rel="stylesheet">
        <?php endforeach; ?>
    <?php else: ?>
        <link href="<?php echo htmlspecialchars($customCss); ?>" rel="stylesheet">
    <?php endif; ?>
<?php endif; ?>

<?php if(isset($customJs)): ?>
    <?php if(is_array($customJs)): ?>
        <?php foreach($customJs as $js): ?>
            <script src="<?php echo htmlspecialchars($js); ?>"></script>
        <?php endforeach; ?>
    <?php else: ?>
        <script src="<?php echo htmlspecialchars($customJs); ?>"></script>
    <?php endif; ?>
<?php endif; ?>
