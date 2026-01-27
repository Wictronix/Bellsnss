<!-- Add Bootstrap CSS in your <head> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<header class="main-header header-style-three">
    <div class="container-fluid py-2 border-bottom bg-light">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a href="mailto:info@bellsnss.com.au" class="mr-3 text-primary">
                    <i class="fa fa-envelope"></i> info@bellsnss.com.au
                </a>
            </div>
            <div>
                <a href="https://www.facebook.com/share/19fzBMuixm/" class="text-blue mr-2"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/bells.nss?igsh=MjAzczh6emtjd2Zr" class="text-blue"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Tronis" style="height:60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo ' active'; ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'about-company.php') echo ' active'; ?>">
                        <a class="nav-link" href="about-company.php">About Us</a>
                    </li>
                    <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'our-services.php') echo ' active'; ?>">
                        <a class="nav-link" href="our-services.php">Our Services</a>
                    </li>
                    <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'our-team.php') echo ' active'; ?>">
                        <a class="nav-link" href="our-team.php">Our Team</a>
                    </li>
                    <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'blog.php') echo ' active'; ?>">
                        <a class="nav-link" href="blog.php">Blogs</a>
                    </li>
                    <!-- <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'article.php') echo ' active'; ?>">
                        <a class="nav-link" href="article.php">Articles</a>
                    </li> -->
                    <li class="nav-item<?php if (basename($_SERVER['PHP_SELF']) == 'contact-us.php') echo ' active'; ?>">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
                <style>
                    /* Light blue and dark blue theme */
                    .navbar-nav .nav-link {
                        color: #0b3a86;
                        /* Light blue */
                        transition: color 0.2s, border-bottom 0.2s;
                        border-bottom: 2px solid transparent;
                    }

                    .navbar-nav .nav-link:hover,
                    .navbar-nav .nav-item.active .nav-link {
                        color: #003366;
                        /* Dark blue */
                        border-bottom: 2px solid #003366;
                        background: none;
                    }
                </style>
                <div class="d-flex align-items-center">
                    <a href="index.php" class="mr-3">
                        <img src="images/logo-2.png" alt="ndis" style="height:64px;">
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=+61430147281" class="mr-3">
                        <img src="images/whatsapp.png" alt="WhatsApp" style="height:32px;">
                    </a>
                    <a href="tel:+61430147281" class="mr-3">
                        <img src="images/call.png" alt="Call" style="height:32px;">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Floating WhatsApp Button -->
<a href="https://api.whatsapp.com/send?phone=+61430147281" class="whatsapp-float" target="_blank">
    <img src="images/whatsapp.png" alt="WhatsApp">
</a>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HK5LK2BNRK"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-HK5LK2BNRK');
</script>

<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PGGNC3QT');
</script>
<!-- End Google Tag Manager -->

<!-- Add Bootstrap JS at the end of body -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>