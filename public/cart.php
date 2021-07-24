<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Zenith | Mon Panier</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Zenith Lighting - Vente des materiels electrique">
    <meta name="keywords" content="Zenith, boutique, e-commerce, market, nouveau, electrique,  materiel,">
    <meta name="author" content="marcsox">
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
    <?php
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
                    Shop</a>
                </li>
                <li class="text-nowrap active ms-3" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    Panier</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Votre Panier</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <!-- List of items-->
          <section class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
              <h2 class="h6 text-light mb-0">Produits</h2><a class="btn btn-outline-primary btn-sm ps-2" href="shop-grid-ls.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
              Continuer le shopping</a>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
              <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="../src/img/shop/catalog/3.png" width="160" alt="Product"></a>
                <div class="pt-2">
                  <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
                  <div class="fs-sm"><span class="text-muted me-2">Size:</span>8.5</div>
                  <div class="fs-sm"><span class="text-muted me-2">Color:</span>White &amp; Blue</div>
                  <div class="fs-lg text-accent pt-2">Dh154.<small>00</small></div>
                </div>
              </div>
              <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
                <label class="form-label" for="quantity1">Quantity</label>
                <input class="form-control" type="number" id="quantity1" min="1" value="1">
                <button class="btn btn-link px-0 text-danger" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle me-2" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>    
                    <span class="fs-sm">Supprimer</span>
                </button>
                </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
              <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="../src/img/shop/catalog/4.png" width="160" alt="Product"></a>
                <div class="pt-2">
                  <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                  <div class="fs-sm"><span class="text-muted me-2">Brand:</span>Tommy Hilfiger</div>
                  <div class="fs-sm"><span class="text-muted me-2">Color:</span>Khaki</div>
                  <div class="fs-lg text-accent pt-2">Dh79.<small>50</small></div>
                </div>
              </div>
              <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
                <label class="form-label" for="quantity2">Quantity</label>
                <input class="form-control" type="number" id="quantity2" min="1" value="1">
                <button class="btn btn-link px-0 text-danger" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle me-2" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>    
                    <span class="fs-sm">Supprimer</span>
                </button>
                </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
              <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="../src/img/shop/catalog/2.png" width="160" alt="Product"></a>
                <div class="pt-2">
                  <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                  <div class="fs-sm"><span class="text-muted me-2">Brand:</span>The North Face</div>
                  <div class="fs-sm"><span class="text-muted me-2">Color:</span>Pink / Beige / Dark blue</div>
                  <div class="fs-lg text-accent pt-2">Dh22.<small>50</small></div>
                </div>
              </div>
              <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
                <label class="form-label" for="quantity3">Quantity</label>
                <input class="form-control" type="number" id="quantity3" min="1" value="1">
                <button class="btn btn-link px-0 text-danger" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle me-2" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>    
                    <span class="fs-sm">Supprimer</span>
                </button>
                </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
              <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="../src/img/shop/catalog/5.png" width="160" alt="Product"></a>
                <div class="pt-2">
                  <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h3>
                  <div class="fs-sm"><span class="text-muted me-2">Size:</span>42</div>
                  <div class="fs-sm"><span class="text-muted me-2">Color:</span>Light blue</div>
                  <div class="fs-lg text-accent pt-2">Dh9.<small>00</small></div>
                </div>
              </div>
              <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
                <label class="form-label" for="quantity4">Quantity</label>
                <input class="form-control" type="number" id="quantity4" min="1" value="1">
                <button class="btn btn-link px-0 text-danger" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle me-2" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>    
                    <span class="fs-sm">Supprimer</span>
                </button>
              </div>
            </div>
            <button class="btn btn-outline-accent d-block w-100 mt-4" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat fs-base me-2" viewBox="0 0 16 16">
                <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                </svg>    
                Update cart</button>
          </section>
          <!-- Sidebar-->
          <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
            <div class="bg-white rounded-3 shadow-lg p-4">
              <div class="py-2 px-xl-2">
                <div class="text-center mb-4 pb-3 border-bottom">
                  <h2 class="h6 mb-3 pb-1">Le prix total</h2>
                  <h3 class="fw-normal">Dh1265.<small>00</small></h3>
                </div>
                <div class="mb-3 mb-4">
                  <label class="form-label mb-3" for="order-comments"><span class="badge bg-info fs-xs me-2">Note</span><span class="fw-medium">Commentaire (optionnel)</span></label>
                  <textarea class="form-control" rows="6" id="order-comments"></textarea>
                </div>
                <div class="accordion" id="order-options">
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button" href="#promo-code" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="promo-code">Code promo</a></h3>
                    <div class="accordion-collapse collapse show" id="promo-code" data-bs-parent="#order-options">
                      <form class="accordion-body needs-validation" method="post" novalidate>
                        <div class="mb-3">
                          <input class="form-control" type="text" placeholder="Promo code" required>
                          <div class="invalid-feedback">Please provide promo code.</div>
                        </div>
                        <button class="btn btn-outline-primary d-block w-100" type="submit">Appliquer</button>
                      </form>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shipping-estimates" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shipping-estimates">Prix de livraison</a></h3>
                    <div class="accordion-collapse collapse" id="shipping-estimates" data-bs-parent="#order-options">
                      <div class="accordion-body">
                        <form class="needs-validation" novalidate>
                          <div class="mb-3">
                            <select class="form-select" required>
                              <option value="">Choisir votre pays</option>
                              <option value="Australia">Maroc</option>
                            </select>
                            <div class="invalid-feedback">Veuillez choisir votre pays!</div>
                          </div>
                          <div class="mb-3">
                            <select class="form-select" required>
                              <option value="">Choisir votre ville</option>
                              <option value="Rabat">Agadir</option>
                              <option value="Casablanca">Casablanca</option>
                              <option value="Canberra">Fes</option>
                              <option value="Helsinki">Kenitra</option>
                              <option value="Mexico City">Meknes</option>
                              <option value="Ottawa">Rabat</option>
                              <option value="Washington D.C.">Sale</option>
                              <option value="Wellington">Tanger</option>
                            </select>
                            <div class="invalid-feedback">Veuillez choisir une ville!</div>
                          </div>
                          <div class="mb-3">
                            <input class="form-control" type="text" placeholder="ZIP / Code postal" required>
                            <div class="invalid-feedback">Please provide a valid zip!</div>
                          </div>
                          <button class="btn btn-outline-primary d-block w-100" type="submit">Calculer la livraison</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div><a class="btn btn-primary btn-shadow d-block w-100 mt-4" href="checkout-details.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back fs-lg me-2" viewBox="0 0 16 16">
                    <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                    <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                    </svg>
                    Procéder au paiement</a>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <?php
    require_once('./components/footer.php');
    ?>
    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
    </div>
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