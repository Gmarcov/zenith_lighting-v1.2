<?php
require_once "../private/models/Tokens.php";
session_start();
// unset($_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Zenith | Mon compte</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Zenith Lighting - Vente des materiels electrique">
    <meta name="keywords" content="Zenith, boutique, e-commerce, market, nouveau, electrique,  materiel,">
    <meta name="author" content="marcsox">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf_token" content="<?php echo createToken(); ?>" id="csrf_token" />
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../src/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../src/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../src/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../src/img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="../src/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="../src/vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="../src/css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <main class="page-wrapper">

      <!-- Navbar-->
        <?php
        require_once('./components/orderDetail.php');
        require_once('./components/header.php');
        ?>
      <!-- Page Title-->
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-house mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                    Acceuil</a>
                </li>
                <li class="text-nowrap ms-3""><a style="color: white!important" href="shop-grid-ls.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    Mon compte</a>
                </li>
                <li class="text-nowrap active ms-3" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    Mes ordres</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Mes ordres</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <!-- Sidebar-->
          <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
            <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
              <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                <div class="d-md-flex align-items-center">
                  <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 6.375rem;"><img class="rounded-circle" src="../src/img/shop/account/avatar.png" alt="Susan Gardner"></div>
                  <div class="ps-md-3">
                    <h3 class="fs-base mb-0">Jonas Tesla</h3><span class="text-accent fs-sm">Jonas@tesla.com</span>
                  </div>
                </div><a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu" data-bs-toggle="collapse" aria-expanded="false"><i class="ci-menu me-2"></i>Account menu</a>
              </div>
              <div class="d-lg-block collapse" id="account-menu">
                <div class="bg-secondary px-4 py-3">
                  <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
                </div>
                <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="account-orders.html"><i class="ci-bag opacity-60 me-2"></i>Orders<span class="fs-sm text-muted ms-auto">1</span></a></li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-wishlist.html"><i class="ci-heart opacity-60 me-2"></i>Wishlist<span class="fs-sm text-muted ms-auto">3</span></a></li>
                  <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-tickets.html"><i class="ci-help opacity-60 me-2"></i>Support tickets<span class="fs-sm text-muted ms-auto">1</span></a></li>
                </ul>
                <div class="bg-secondary px-4 py-3">
                  <h3 class="fs-sm mb-0 text-muted">Account settings</h3>
                </div>
                <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-profile.html"><i class="ci-user opacity-60 me-2"></i>Profile info</a></li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-address.html"><i class="ci-location opacity-60 me-2"></i>Addresses</a></li>
                  <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-payment.html"><i class="ci-card opacity-60 me-2"></i>Payment methods</a></li>
                  <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left opacity-60 me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                  </i>Se deconnecter</a></li>
                </ul>
              </div>
            </div>
          </aside>
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
              <div class="d-flex align-items-center">
                <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="order-sort">Sort orders:</label>
                <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="order-sort">Sort orders:</label>
                <select class="form-select" id="order-sort">
                  <option>All</option>
                  <option>Delivered</option>
                  <option>In Progress</option>
                  <option>Delayed</option>
                  <option>Canceled</option>
                </select>
              </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left me-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
              Se deconnecter</a>
            </div>
            <!-- Orders list-->
            <div class="table-responsive fs-md mb-4">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th>Order #</th>
                    <th>Date Purchased</th>
                    <th>Status</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">34VB5540K83</a></td>
                    <td class="py-3">May 21, 2019</td>
                    <td class="py-3"><span class="badge bg-info m-0">In Progress</span></td>
                    <td class="py-3">$358.75</td>
                  </tr>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">78A643CD409</a></td>
                    <td class="py-3">December 09, 2018</td>
                    <td class="py-3"><span class="badge bg-danger m-0">Canceled</span></td>
                    <td class="py-3"><span>$760.50</span></td>
                  </tr>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">112P45A90V2</a></td>
                    <td class="py-3">October 15, 2018</td>
                    <td class="py-3"><span class="badge bg-warning m-0">Delayed</span></td>
                    <td class="py-3">$1,264.00</td>
                  </tr>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">28BA67U0981</a></td>
                    <td class="py-3">July 19, 2018</td>
                    <td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
                    <td class="py-3">$198.35</td>
                  </tr>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">502TR872W2</a></td>
                    <td class="py-3">April 04, 2018</td>
                    <td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
                    <td class="py-3">$2,133.90</td>
                  </tr>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium fs-sm" href="#order-details" data-bs-toggle="modal">47H76G09F33</a></td>
                    <td class="py-3">March 30, 2018</td>
                    <td class="py-3"><span class="badge bg-success m-0">Delivered</span></td>
                    <td class="py-3">$86.40</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Pagination-->
            <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
              </ul>
              <ul class="pagination">
                <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
              </ul>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
              </ul>
            </nav>
          </section>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <?php
    require_once('./components/footer.php');
    
    // Toolbar for handheld devices (Default)
    require_once('./components/toolbar.php')
    ?>
    <!-- Back To Top Button-->
    <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-up btn-scroll-top-icon mt-2" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
        </svg>
    </a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="../src/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../src/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="../src/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="../src/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="../src/js/theme.min.js"></script>
  </body>
</html>