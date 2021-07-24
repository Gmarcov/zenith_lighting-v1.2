<?php
require_once "../private/models/Tokens.php";
session_start();
// unset($_SESSION['name']);
// unset($_SESSION['user_id']);
// unset($_SESSION['mycart']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zenith Lighting</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Zenith Lighting - Vente des materiels electrique">
    <meta name="keywords" content="Zenith, boutique, e-commerce, market, nouveau, electrique,  materiel,">
    <meta name="author" content="marcsox">
    <!-- CSRF Token -->
    <meta name="csrf_token" content="<?php echo createToken(); ?>" id="csrf_token" />
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../src/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../src/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../src/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../src/img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="../src/vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="../src/vendor/tiny-slider/dist/tiny-slider.css" />
    <link rel="stylesheet" media="screen" href="../src/vendor/drift-zoom/dist/drift-basic.min.css" />
    <link rel="stylesheet" media="screen" href="../src/vendor/lightgallery.js/dist/css/lightgallery.min.css" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="../src/css/theme.min.css">
    <!-- Google Tag Manager-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- JQuery script -->
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
    })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
    </script>
</head>
<!-- Body-->

<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <?php
require_once './components/quickView.php';
require_once './components/header.php';
?>


    <!-- Hero (Banners + Slider)-->
    <!-- <main> -->
    <section class="bg-secondary py-4 pt-md-5">
        <div class="container py-xl-2">
            <div class="row">
                <!-- Slider     -->
                <div class="col-xl-9 pt-xl-4 order-xl-2">
                    <div class="tns-carousel">
                        <div class="tns-carousel-inner"
                            data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;loop&quot;: false}">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2"><img class="d-block mx-auto"
                                            src="../src/img/home/hero-slider/07.png" alt="VR Collection"></div>
                                    <div
                                        class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                                        <h2 class="fw-light pb-1 from-bottom">Allumer votre monde</h2>
                                        <h1 class="display-4 from-bottom delay-1">Une Lampe</h1>
                                        <h5 class="fw-light pb-3 from-bottom delay-2">modern, lux et de qualité</h5>
                                        <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                                class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Découvrir
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-chevron-right ms-2 me-n1"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2"><img class="d-block mx-auto"
                                            src="../src/img/home/hero-slider/04.jpg" alt="VR Collection"></div>
                                    <div
                                        class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                                        <h2 class="fw-light pb-1 from-start">Explore the best</h2>
                                        <h1 class="display-4 from-start delay-1">VR Collection</h1>
                                        <h5 class="fw-light pb-3 from-start delay-2">on the market</h5>
                                        <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                                class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-chevron-right ms-2 me-n1"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2"><img class="d-block mx-auto"
                                            src="../src/img/home/hero-slider/06.jpg" alt="VR Collection"></div>
                                    <div
                                        class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                                        <h2 class="fw-light pb-1 scale-up">Check our huge</h2>
                                        <h1 class="display-4 scale-up delay-1">Smartphones</h1>
                                        <h5 class="fw-light pb-3 scale-up delay-2">&amp; Accessories collection</h5>
                                        <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                                class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-chevron-right ms-2 me-n1"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner group-->
                <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
                    <div class="table-responsive" data-simplebar>
                        <div class="d-flex d-xl-block"><a
                                class="d-flex align-items-center bg-faded-info rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0"
                                href="#" style="min-width: 16rem;"><img src="../src/img/home/banners/banner-sm04.png"
                                    width="125" alt="Banner">
                                <div class="py-4 px-2">
                                    <h5 class="mb-2"><span class="fw-light">Next Gen</span><br>Lamp <span
                                            class="fw-light">with</span><br>360 CLV</h5>
                                    <div class="text-info fs-sm">Acheter
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a><a
                                class="d-flex align-items-center bg-faded-warning rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0"
                                href="#" style="min-width: 16rem;"><img src="../src/img/home/banners/banner-sm05.png"
                                    width="125" alt="Banner">
                                <div class="py-4 px-2">
                                    <h5 class="mb-2"><span class="fw-light">Top Rated</span><br>Gadgets<br><span
                                            class="fw-light">are on </span>Sale</h5>
                                    <div class="text-warning fs-sm">Acheter
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a><a class="d-flex align-items-center bg-faded-success rounded-3 pt-2 ps-2 mb-4" href="#"
                                style="min-width: 16rem;"><img src="../src/img/home/banners/banner-sm07.png" width="125"
                                    alt="Banner">
                                <div class="py-4 px-2">
                                    <h5 class="mb-2"><span class="fw-light">Catch Big</span><br>Deals <span
                                            class="fw-light">on</span><br>Lighting</h5>
                                    <div class="text-success fs-sm">Acheter
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products grid (Trending products)-->
    <section class="container pt-5">
        <!-- Heading-->
        <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
            <h2 class="h3 mb-0 pt-3 me-2">Bons Plans</h2>
            <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="shop-grid-ls.html">Tout afficher
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right ms-1 me-n1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </a></div>
        </div>
        <!-- Grid-->
        <div class="row pt-2 mx-n2">

            <!-- Product-->
            <?php
require_once './components/product.php';
?>
            <!-- Promo banner-->
            <section class="container mt-4 mb-grid-gutter">
                <div class="bg-faded-info rounded-3 py-4">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Offre limité</span>
                                <h3 class="mt-4 mb-1 text-body fw-light">Toute Nouvelle</h3>
                                <h2 class="mb-1">Lamp de Lux</h2>
                                <p class="h5 text-body fw-light">avec un prix imbattable. A ne pas ratez!</p>
                                <div class="countdown py-2 h4" data-countdown="07/01/2021 07:00:00 PM">
                                    <div class="countdown-days"><span class="countdown-value">13</span><span
                                            class="countdown-label text-muted">j</span></div>
                                    <div class="countdown-hours"><span class="countdown-value">2</span><span
                                            class="countdown-label text-muted">h</span></div>
                                    <div class="countdown-minutes"><span class="countdown-value">45</span><span
                                            class="countdown-label text-muted">m</span></div>
                                    <div class="countdown-seconds"><span class="countdown-value">10</span><span
                                            class="countdown-label text-muted">s</span></div>
                                </div><a class="btn btn-accent" href="#">Voir l'offre
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chevron-right fs-ms ms-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7"><img src="../src/img/home/banners/offer1.png" alt="iPad Pro Offer">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Brands carousel-->
            <section class="container mb-5">
                <div class="tns-carousel border-end">
                    <div class="tns-carousel-inner"
                        data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
                        <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#"
                                style="margin-right: -.0625rem;"><img class="d-block mx-auto"
                                    src="../src/img/shop/brands/13.png" style="width: 165px;" alt="Brand"></a></div>
                        <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#"
                                style="margin-right: -.0625rem;"><img class="d-block mx-auto"
                                    src="../src/img/shop/brands/14.png" style="width: 165px;" alt="Brand"></a></div>
                        <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#"
                                style="margin-right: -.0625rem;"><img class="d-block mx-auto"
                                    src="../src/img/shop/brands/17.png" style="width: 165px;" alt="Brand"></a></div>
                        <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#"
                                style="margin-right: -.0625rem;"><img class="d-block mx-auto"
                                    src="../src/img/shop/brands/16.png" style="width: 165px;" alt="Brand"></a></div>
                        <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#"
                                style="margin-right: -.0625rem;"><img class="d-block mx-auto"
                                    src="../src/img/shop/brands/15.png" style="width: 165px;" alt="Brand"></a></div>
                        <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#"
                                style="margin-right: -.0625rem;"><img class="d-block mx-auto"
                                    src="../src/img/shop/brands/18.png" style="width: 165px;" alt="Brand"></a></div>
                        <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#"
                                style="margin-right: -.0625rem;"><img class="d-block mx-auto"
                                    src="../src/img/shop/brands/19.png" style="width: 165px;" alt="Brand"></a></div>
                        <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#"
                                style="margin-right: -.0625rem;"><img class="d-block mx-auto"
                                    src="../src/img/shop/brands/20.png" style="width: 165px;" alt="Brand"></a></div>
                    </div>
                </div>
            </section>

            <!-- Product widgets -->
            <section class="container pb-4 pb-md-5">
                <div class="row">
                    <!-- Bestsellers -->
                    <div class="col-md-4 col-sm-6 mb-2 py-3">
                        <div class="widget">
                            <h3 class="widget-title">Meilleur Vente</h3>
                            <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/6.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless
                                            Bluetooth
                                            Headphones</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$259.<small>00</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/2.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud Security
                                            Camera</a>
                                    </h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$122.<small>00</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/7.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Android
                                            Smartphone
                                            S10</a>
                                    </h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$799.<small>00</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/5.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smart TV
                                            Box</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$67.<small>00</small></span>
                                        <del class="text-muted fs-xs">$90.<small>43</small></del>
                                    </div>
                                </div>
                            </div>
                            <a class="fs-sm" href="shop-grid-ls.html">Voir plus
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- New arrivals -->
                    <div class="col-md-4 col-sm-6 mb-2 py-3">
                        <div class="widget">
                            <h3 class="widget-title">Nouvelle arrivées</h3>
                            <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/3.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Monoblock Desktop
                                            PC</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$1,949.<small>00</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/4.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Laserjet Printer
                                            All-in-One</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$428.<small>60</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/2.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Console
                                            Controller
                                            Charger</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$14.<small>97</small></span>
                                        <del class="text-muted fs-xs">$16.<small>47</small></del>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/1.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Smart Watch
                                            Series 5,
                                            Aluminium</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$349.<small>99</small></span>
                                    </div>
                                </div>
                            </div>
                            <a class="fs-sm" href="shop-grid-ls.html">Voir plus
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Top rated -->
                    <div class="col-md-4 col-sm-6 mb-2 py-3">
                        <div class="widget">
                            <h3 class="widget-title">Nos recommendation</h3>
                            <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/8.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Android
                                            Smartphone
                                            S9</a>
                                    </h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$749.<small>99</small></span>
                                        <del class="text-muted fs-xs">$859.<small>99</small></del>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/6.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless
                                            Bluetooth
                                            Headphones</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$428.<small>60</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/7.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">360 Degrees
                                            Camera</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$98.<small>75</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0"
                                    href="shop-single-v2.html"><img src="../src/img/shop/catalog/5.png" width="64"
                                        alt="Product"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Digital Camera
                                            40MP</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent">$210.<small>00</small></span>
                                        <del class="text-muted fs-xs">$249.<small>00</small></del>
                                    </div>
                                </div>
                            </div>
                            <a class="fs-sm" href="shop-grid-ls.html">Voir plus
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- LinkedIn + Instagram info cards-->
            <section class="container-fluid px-0">
                <div class="row g-0">
                    <div class="col-md-6"><a
                            class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary"
                            href="blog-list-sidebar.html">
                            <div class="card-body text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="pink"
                                    class="bi bi-linkedin h3 mt-2 mb-4 text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>
                                <h3 class="h5 mb-1">Suivez nous sur LinkedIn</h3>
                                <p class="text-muted fs-sm">Toutes les nouveautés sur notre magasin</p>
                            </div>
                        </a></div>
                    <div class="col-md-6"><a
                            class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
                            <div class="card-body text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-instagram h3 mt-2 mb-4 text-accent" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                                <h3 class="h5 mb-1">Rejoignez nous sur Instagram</h3>
                                <p class="text-muted fs-sm">#ZenithLighting.ma</p>
                            </div>
                        </a></div>
                </div>
            </section>
            </main>
            <!-- Footer-->
            <?php
require_once './components/footer.php';
?>
            <!-- Toolbar for handheld devices (Default)-->
            <div class="handheld-toolbar">
                <div class="d-table table-layout-fixed w-100">
                    <a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span
                            class="handheld-toolbar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>
                        </span>
                        <span class="handheld-toolbar-label">Ma listes</span>
                    </a>
                    <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)">
                        <span class="handheld-toolbar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                            </svg>
                        </span>
                        <span class="handheld-toolbar-label">Menu</span>
                    </a>
                    <a class="d-table-cell handheld-toolbar-item" href="shop-cart.html">
                        <span class="handheld-toolbar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart2" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                            <span class="badge bg-primary rounded-pill ms-1">4</span>
                        </span>
                        <span class="handheld-toolbar-label">Dh265.00</span></a>
                </div>
            </div>
            <!-- Back To Top Button-->
            <a class="btn-scroll-top" href="#top" data-scroll><span
                    class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-chevron-up btn-scroll-top-icon mt-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                </svg>
            </a>
            <!-- Vendor scrits: js libraries and plugins-->
            <script src="../src/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../src/vendor/simplebar/dist/simplebar.min.js"></script>
            <script src="../src/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
            <script src="../src/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
            <script src="../src/vendor/drift-zoom/dist/Drift.min.js"></script>
            <script src="../src/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
            <script src="../src/vendor/lg-video.js/dist/lg-video.min.js"></script>
            <!-- Main theme script-->
            <script src="../src/js/theme.min.js"></script>
</body>

</html>