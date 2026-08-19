<?php
$currentScript = basename($_SERVER['PHP_SELF']);
function isActiveNav($pages, $currentScript)
{
    if (is_array($pages)) {
        return in_array($currentScript, $pages) ? 'active' : '';
    }
    return ($currentScript === $pages || ($pages === 'index.php' && ($currentScript === '' || $currentScript === 'index.php'))) ? 'active' : '';
}
?>
<div id="header" class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 d-none d-lg-block">
            <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <img src="./assets/img/logo-primary.png" alt="logo" class="img-fluid" style="height: 120px;">
            </a>
        </div>
        <div class="col-lg-10">
            <div class="row bg-dark d-none d-lg-flex">
                <div class="col-lg-7 text-left text-white">
                    <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small><a href="mailto:info@fraserfacilityservices.ca" class="text-white">info@fraserfacilityservices.ca</a></small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small><a href="tel:17788861491" class="text-white">+1 778-886-1491</a></small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center pr-2">
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary p-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-5 text-primary">Fraser Facility <br> Services</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?php echo isActiveNav('index.php', $currentScript); ?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?php echo isActiveNav('about.php', $currentScript); ?>">About</a>
                        <a href="service.php" class="nav-item nav-link <?php echo isActiveNav('service.php', $currentScript); ?>">Services</a>
                        <a href="blogs.php" class="nav-item nav-link <?php echo isActiveNav(['blogs.php', 'blog.php', 'single.php'], $currentScript); ?>">Blog</a>
                        <a href="faq.php" class="nav-item nav-link <?php echo isActiveNav('faq.php', $currentScript); ?>">FAQ</a>
                        <a href="contact.php" class="nav-item nav-link <?php echo isActiveNav('contact.php', $currentScript); ?>">Contact</a>
                    </div>
                    <a href="contact.php" class="btn btn-primary ml-auto d-none d-lg-block">Get A Quote</a>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Narrow Navbar (Hidden by default, shown on scroll) -->
<div id="narrow-header" class="shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a href="index.php" class="navbar-brand d-block d-lg-none pl-4">
            <h1 class="m-0 display-5 text-primary">Fraser Facility <br> Services</h1>
        </a>
        <button type="button" class="navbar-toggler mr-4 my-2" data-toggle="collapse" data-target="#narrowNavbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="narrowNavbarCollapse">
            <div class="navbar-nav py-0">
                <a href="index.php" class="nav-item nav-link <?php echo isActiveNav('index.php', $currentScript); ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?php echo isActiveNav('about.php', $currentScript); ?>">About</a>
                <a href="service.php" class="nav-item nav-link <?php echo isActiveNav('service.php', $currentScript); ?>">Services</a>
                <a href="blogs.php" class="nav-item nav-link <?php echo isActiveNav(['blogs.php', 'blog.php', 'single.php'], $currentScript); ?>">Blog</a>
                <a href="faq.php" class="nav-item nav-link <?php echo isActiveNav('faq.php', $currentScript); ?>">FAQ</a>
                <a href="contact.php" class="nav-item nav-link <?php echo isActiveNav('contact.php', $currentScript); ?>">Contact</a>
            </div>
        </div>
    </nav>
</div>

<style>
    #header {
        position: sticky;
        top: 0;
        z-index: 1020;
        transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    #header.hide {
        transform: translateY(-100%);
    }

    #narrow-header {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translate(-50%, -150px) scale(0.9);
        z-index: 1030;
        width: 90%;
        max-width: 800px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55), opacity 0.5s ease;
        opacity: 0;
        pointer-events: none;
    }

    #narrow-header.show {
        transform: translate(-50%, 0) scale(1);
        opacity: 1;
        pointer-events: auto;
    }

    #narrow-header .navbar-nav .nav-link {
        padding: 12px 25px;
        font-weight: 500;
        transition: color 0.2s ease;
    }

    #narrow-header .navbar-nav .nav-link:hover,
    #narrow-header .navbar-nav .nav-link.active {
        color: #3F6B45 !important;
        font-weight: 600;
    }

    @media (max-width: 992px) {
        #header .navbar-collapse {
            background: #fff;
            padding: 15px 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            border-top: 1px solid #f0f0f0;
        }

        #header .navbar-nav .nav-link {
            padding: 10px 0;
        }

        #narrow-header {
            top: 10px;
            border-radius: 25px;
        }

        #narrow-header .navbar-collapse {
            background: #fff;
            border-radius: 15px;
            padding: 10px;
            margin-top: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    }
</style>

<script src="./assets/js/header.js"></script>