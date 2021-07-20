<?php
require_once "../private/models/Tokens.php";
session_start();
// unset($_SESSION['name']);
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
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab"
                                data-bs-toggle="tab" role="tab" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="me-2 mt-n1 bi bi-unlock" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z" />
                                </svg>
                                S'identifier</a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab"
                                role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    class="me-2 mt-n1 bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                                Créer un compte</a>
                        </li>
                    </ul>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form action="../private/controllers/Signin-up_Validation.php" method="POST"
                        class="needs-validation tab-pane fade show active" autocomplete="off" novalidate
                        id="signin-tab">
                        <span id="result-in"></span>
                        <div class="mb-3">
                            <label class="form-label" for="si-email">Address email</label>
                            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com"
                                required>
                            <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="si-password">Mot de passe</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye password-toggle-indicator" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-wrap justify-content-between">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="si-remember" id="checkLabel">
                                <label class="form-check-label" for="si-remember">Se
                                    souvenir</label>

                            </div><a class="fs-sm" href="#">Mot de passe oublié?</a>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit" id="signin"
                            name="signin">Se
                            connecter</button>
                    </form>
                    <!-- JQuery AJAX signin  -->
                    <script>
                    $(document).ready(function() {
                        $('#signin').on('click', function(event) {
                            event.preventDefault();
                            var email = $('#si-email').val();
                            var password = $('#si-password').val();
                            var signin = $('#signin').val();
                            var csrf = $('#csrf_token').val();
                            var souv = $('#checkLabel').val();
                            console.log(csrf);
                            $.ajax({
                                url: '../private/controllers/Signin-up_Validation.php',
                                method: 'POST',
                                dataType: 'json',
                                data: {
                                    'email': email,
                                    'password': password,
                                    'signin': signin
                                },
                                success: function(response) {
                                    var result = eval(response);
                                    if (result.length > 0) {
                                        var err = "";
                                        for (var index in result) {
                                            // you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
                                            err = err + result[index] + "<br>";
                                            $('#result-in').html(err);
                                            $('#si-name').val('');
                                            $('#si-email').val('');
                                            $('#si-password').val('');
                                        }
                                    } else {
                                        location.reload();
                                    }
                                }

                            })
                        })
                    })
                    </script>
                    <!-- Form Sign up -->
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                        <span id="result"></span>
                        <div class="mb-3">
                            <label class="form-label" for="su-name">Votre nom</label>
                            <input class="form-control" type="text" id="su-name" placeholder="Nom Prénom" required
                                name="fullName">
                            <div class="invalid-feedback">Veuillez entrez votre nom.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-email">Adresse email</label>
                            <input class="form-control" type="email" id="su-email" placeholder="i.e@example.com"
                                required name="email">
                            <div class="invalid-feedback">Veuillez entrez votre adresse email.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password">Mot de passe</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" required name="password">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye password-toggle-indicator" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password-confirm">Confirmez votre mot de passe</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm" required
                                    name="confirm-password">
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye password-toggle-indicator" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit" name="signup"
                            id="signup">S'enregistrer</button>
                    </form>
                    <!--JQuery AJAX scrip  -->
                    <script>
                    $(document).ready(function() {
                        $('#signup').on('click', function(event) {
                            event.preventDefault();
                            var name = $('#su-name').val();
                            var email = $('#su-email').val();
                            var password = $('#su-password').val();
                            var confirm = $('#su-password-confirm').val();
                            var signup = $('#signup').val();
                            var csrf = $('#csrf_token').val();
                            $.ajax({
                                url: '../private/controllers/Signin-up_Validation.php',
                                method: 'POST',
                                dataType: 'json',
                                data: {
                                    'fullName': name,
                                    'email': email,
                                    'password': password,
                                    'confirm-password': confirm,
                                    'signup': signup
                                },
                                success: function(response) {
                                    var result = eval(response);
                                    var err = "";
                                    for (var index in result) {
                                        // you can show both index and value to know how the array is indexed in javascript (but it should be the same way it was in the php script)
                                        err = err + result[index] + "<br>";
                                        $('#result').html(err);
                                        $('#su-name').val('');
                                        $('#su-email').val('');
                                        $('#su-password').val('');
                                        $('#su-password-confirm').val('');
                                        // alert("index:" + index + "\n value" + result[index]);
                                    }
                                }

                            })
                        })
                    })
                    </script>
                </div>
            </div>
        </div>
    </div>
    <main class="page-wrapper">
      <!-- Quick View Modal-->
      <div class="modal-quick-view modal fade" id="quick-view-electro" tabindex="-1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title product-title"><a href="shop-single-v2.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Allez à la page du produit">Smartwatch Youth Edition
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-lg ms-2" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </a></h4>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <!-- Product gallery-->
                <div class="col-lg-7 pe-lg-0">
                  <div class="product-gallery">
                    <div class="product-gallery-preview order-sm-2">
                      <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="../src/img/shop/single/gallery/05.jpg" data-zoom="../src/img/shop/single/gallery/05.jpg" alt="Product image">
                        <div class="image-zoom-pane"></div>
                      </div>
                      <div class="product-gallery-preview-item" id="second"><img class="image-zoom" src="../src/img/shop/single/gallery/06.jpg" data-zoom="../src/img/shop/single/gallery/06.jpg" alt="Product image">
                        <div class="image-zoom-pane"></div>
                      </div>
                      <div class="product-gallery-preview-item" id="third"><img class="image-zoom" src="../src/img/shop/single/gallery/07.jpg" data-zoom="../src/img/shop/single/gallery/07.jpg" alt="Product image">
                        <div class="image-zoom-pane"></div>
                      </div>
                      <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom" src="../src/img/shop/single/gallery/08.jpg" data-zoom="../src/img/shop/single/gallery/08.jpg" alt="Product image">
                        <div class="image-zoom-pane"></div>
                      </div>
                    </div>
                    <div class="product-gallery-thumblist order-sm-1"><a class="product-gallery-thumblist-item active" href="#first"><img src="../src/img/shop/single/gallery/th05.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#second"><img src="../src/img/shop/single/gallery/06.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#third"><img src="../src/img/shop/single/gallery/07.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#fourth"><img src="../src/img/shop/single/gallery/08.jpg" alt="Product thumb"></a></div>
                  </div>
                </div>
                <!-- Product details-->
                <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                  <div class="product-details ms-auto pb-3">
                    <div class="mb-2">
                      <div class="star-rating">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star active star-rating-icon" viewBox="0 0 16 16">
                          <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                      </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 Reviews</span>
                    </div>
                    <div class="h3 fw-normal text-accent mb-3 me-1">$124.<small>99</small></div>
                    <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">Color:</span><span class="text-muted" id="colorOptionText">Dark blue/Orange</span></div>
                    <div class="position-relative me-n4 mb-3">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color" id="color1" data-bs-label="colorOptionText" value="Dark blue/Orange" checked>
                        <label class="form-option-label rounded-circle" for="color1"><span class="form-option-color rounded-circle" style="background-color: #f25540;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color" id="color2" data-bs-label="colorOptionText" value="Dark gray/Green">
                        <label class="form-option-label rounded-circle" for="color2"><span class="form-option-color rounded-circle" style="background-color: #65805b;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color" id="color3" data-bs-label="colorOptionText" value="White">
                        <label class="form-option-label rounded-circle" for="color3"><span class="form-option-color rounded-circle" style="background-color: #f5f5f5;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color" id="color4" data-bs-label="colorOptionText" value="Black">
                        <label class="form-option-label rounded-circle" for="color4"><span class="form-option-color rounded-circle" style="background-color: #333;"></span></label>
                      </div>
                      <div class="product-badge product-available mt-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                          <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                          <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                        </svg> 
                      Produit disponible</div>
                    </div>
                    <div class="d-flex align-items-center pt-2 pb-4">
                      <select class="form-select me-3" style="width: 5rem;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                      <button class="btn btn-primary btn-shadow d-block w-100" type="button">Ajouter au panier</button>
                    </div>
                    <div class="d-flex mb-4">
                      <div class="w-100 me-3">
                        <button class="btn btn-secondary d-block w-100" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart fs-lg me-2" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                          </svg>  
                        <span class='d-none d-sm-inline'>Ajouter à ma </span>liste</button>
                      </div>
                      <div class="w-100">
                        <button class="btn btn-secondary d-block w-100" type="button"></i>Comparer</button>
                      </div>
                    </div>
                    <h5 class="h6 mb-3 py-2 border-bottom">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle text-muted fs-lg align-middle mt-n1 me-2" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                      </svg>  
                    Description du produit</h5>
                    <h6 class="fs-sm mb-2">General</h6>
                    <ul class="fs-sm pb-2">
                      <li><span class="text-muted">Model: </span>Amazfit Smartwatch</li>
                      <li><span class="text-muted">Gender: </span>Unisex</li>
                      <li><span class="text-muted">OS campitibility: </span>Android / iOS</li>
                    </ul>
                    <h6 class="fs-sm mb-2">Physical specs</h6>
                    <ul class="fs-sm pb-2">
                      <li><span class="text-muted">Shape: </span>Rectangular</li>
                      <li><span class="text-muted">Body material: </span>Plastics / Ceramics</li>
                      <li><span class="text-muted">Band material: </span>Silicone</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar -->
      <header class="shadow-sm">
        <div class="navbar-sticky bg-light">
          <div class="navbar navbar-expand-lg navbar-light">
            <div class="container"><a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="../public/index.php"><img src="../src/img/logo-dark.png" width="142" alt="Zenith"></a><a class="navbar-brand d-sm-none me-2" href="../public/index.html"><img src="../src/img/logo-dark.png" width="100" alt="Zenith"></a>
              <!-- Search-->
              <div class="input-group d-none d-lg-flex flex-nowrap mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <input class="form-control rounded-start w-100" type="text" placeholder="Trouvez un produit">
                <select class="form-select flex-shrink-0" style="width: 10.5rem;">
                  <option>Catégories</option>
                  <option>Computers</option>
                  <option>Smartphones</option>
                  <option>TV, Video, Audio</option>
                  <option>Cameras</option>
                  <option>Headphones</option>
                  <option>Wearables</option>
                  <option>Printers</option>
                  <option>Video Games</option>
                  <option>Home Music</option>
                  <option>Data Storage</option>
                </select>
              </div>
              <!-- Toolbar-->
              <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-tool navbar-stuck-toggler" href="#">
                    <span class="navbar-tool-tooltip">Menu</span>
                    <div class="navbar-tool-icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list navbar-tool-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                                <?php
                                if (isset($_SESSION['name'])) {
                                    $name = $_SESSION['name'];
                                    $link = '#';
                                } else {
                                    $name = 'Identifiez-vous';
                                    $link = '#signin-modal';
                                }
                                ?>
                </a>
                <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="<?php echo $link; ?>" data-bs-toggle="modal">
                    <div class="navbar-tool-icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="navbar-tool-icon bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </div>

                    <div class="navbar-tool-text ms-n3"><small><?php echo $name; ?></small>Mon Compte</div>
                </a>
                <div class="navbar-tool dropdown ms-3">
                    <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html">
                        <span class="navbar-tool-label">4</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2 navbar-tool-icon" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </a>
                    <a class="navbar-tool-text" href="shop-cart.html">
                        <small>Mon Panier</small>Dh1,247.00
                    </a>
                  <!-- Cart dropdown-->
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                      <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                        <div class="widget-cart-item pb-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/cart/widget/05.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v2.html">Bluetooth Headphones</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$259.<small>00</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="widget-cart-item py-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/cart/widget/06.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud Security Camera</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$122.<small>00</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="widget-cart-item py-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/cart/widget/07.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S10</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$799.<small>00</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="widget-cart-item py-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/cart/widget/08.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smart TV Box</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$67.<small>00</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                        <div class="fs-sm me-2 py-2"><span class="text-muted">Total:</span><span class="text-accent fs-base ms-1">Dh1,247.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">
                          Details
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-1 me-n1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                          </a>
                      </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2 me-2 fs-base align-middle" viewBox="0 0 16 16">
                          <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                        </svg>
                        Passez à l'achat</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Search-->
                <div class="input-group d-lg-none my-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                  <input class="form-control rounded-start" type="text" placeholder="Trouvez un produits">
                </div>
                <!-- Departments menu-->
                <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list align-middle mt-n1 me-1" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    Catégories</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-laptop opacity-60 fs-lg mt-n1 me-2"></i>Computers &amp; Accessories</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Computers</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Laptops &amp; Tablets</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Desktop Computers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Computer External Components</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Computer Internal Components</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Networking Products (NAS)</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Single Board Computers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Desktop Barebones</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Accessories</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Monitors</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bags, Cases &amp; Sleeves</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Charges &amp; Adapters</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cooling Pads</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mounts</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Replacement Screens</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Security Locks</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stands</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/07.jpg" alt="Computers &amp; Accessories"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$149.<small>80</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-mobile opacity-60 fs-lg mt-n1 me-2"></i>Smartphones &amp; Tablets</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                              <div class="widget widget-links mb-3">
                                <h6 class="fs-base mb-3">Smartphones</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple iPhone</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Android Smartphones</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Phablets</a></li>
                                </ul>
                              </div>
                              <div class="widget widget-links">
                                <h6 class="fs-base">Tablets</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple iPad</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Android Tablets</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Tablets with Keyboard</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Accessories</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessory Kits</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries &amp; Battery Packs</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Car Accessories</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Charges &amp; Power Adapters</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">FM Transmitters</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lens Attachments</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mounts &amp; Stands</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Repair Kits</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Replacement Parts</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Styluses</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/09.jpg" alt="Smartphones &amp; Tablets"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$127.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-monitor opacity-60 fs-lg mt-n1 me-2"></i>TV, Video &amp; Audio</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Television &amp; Video</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">TV Sets</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Theater Systems</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DVD Players &amp; Recorders</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Blue-ray Players &amp; Recorders</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">HD DVD Players &amp; Recorders</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DVD-VCR Combos</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DTV Converters</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">AV Receivers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">AV Amplifiers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Projectors</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Projection Screens</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Satelite Television</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column pt-0 pb-4 py-sm-4 px-3">
                              <div class="widget widget-links">
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">TV-DTD Combos</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sound Systems</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Cinema Systems</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Streaming Media Players</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">VCRs</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Glasses</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lens Attachments</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/08.jpg" alt="TV, Video &amp; Audio"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$78.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-camera opacity-60 fs-lg mt-n1 me-2"></i>Cameras, Photo &amp; Video</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Cameras &amp; Lenses</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Point &amp; Shoot Digital Cameras</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DSLR Cameras</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mirrorless Cameras</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Body Mounted Cameras</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorders</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorder Lenses</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camera Lenses</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Macro &amp; Ringlight Flashes</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Shoe Mount Flashes</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Tripods &amp; Monopods</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Studio</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Accessories</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bags &amp; Cases</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Binoculars &amp; Scopes</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries &amp; Chargers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables &amp; Cords</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorder Accessories</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cleaning Equipment</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Protector Foils</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Filters &amp; Accessories</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Remote Controls</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Rain Covers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Viewfinders</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/10.jpg" alt="Cameras, Photo &amp; Video"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$210.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-earphones opacity-60 fs-lg mt-n1 me-2"></i>Headphones</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Headphones</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Earbud Headphones</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Over-Ear Headphones</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">On-Ear Headphones</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bluetooth Headphones</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sports &amp; Fitness Headphones</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Noise-Cancelling Headphones</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Accessories</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cases &amp; Sleeves</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables &amp; Cords</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Ear Pads</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Repair Kits</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cleaning Equipment</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/11.jpg" alt="Headphones"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$35.<small>99</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-watch opacity-60 fs-lg mt-n1 me-2"></i>Wearable Electronics</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Gadgets</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Smartwatches</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Fitness Trackers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Smart Glasses</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Rings</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Virtual Reality</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Clips, Arm &amp; Wristbands</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessories</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/12.jpg" alt="Wearable Electronics"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$79.<small>50</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-printer opacity-60 fs-lg mt-n1 me-2"></i>Printers &amp; Ink</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                              <div class="widget widget-links mb-3">
                                <h6 class="fs-base mb-3">By type</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">All-in-One</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Copying</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Faxing</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Photo Printing</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Printing Only</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Scanning</a></li>
                                </ul>
                              </div>
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Scanners</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Business Card Scanners</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Document Scanners</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Flatbed &amp; Photo Scanners</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Slide &amp; Negative Scanners</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base">Printers</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Dot Matrix Printers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Inkjet Printers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Label Printers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Laser Printers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Photo Printers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wide Format Printers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Plotter Printers</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/13.jpg" alt="Printers &amp; Ink"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$54.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-joystick opacity-60 fs-lg mt-n1 me-2"></i>Video Games</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Games &amp; Hardware</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Games</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation 4</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation 3</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Xbox One</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Xbox 360</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo Switch</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wii U</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wii</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PC</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mac</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo 3DS &amp; 2DS</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo DS</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column pt-0 pb-4 py-sm-4 px-3">
                              <div class="widget widget-links">
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation Vita</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sony PSP</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Retro Gaming</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Microconsoles</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessories</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Digital Games</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/14.jpg" alt="Video Games"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$19.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-speaker opacity-60 fs-lg mt-n1 me-2"></i>Speakers &amp; Home Music</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Speakers</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bluetooth Speakers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bookshelf Speakers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Ceiling &amp; In-Wall Speakers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Center-Channel Speakers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Floorstanding Speakers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Outdoor Speakers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Satellite Speakers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sound Bars</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Subwoofers</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Surround Sound Systems</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Home Audio</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Theater</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wireless &amp; Streaming Audio</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stereo System Components</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Compact Radios &amp; Stereos</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Audio Accessories</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/16.jpg" alt="Speakers &amp; Home Music"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$43.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="ci-server opacity-60 fs-lg mt-n1 me-2"></i>HDD/SSD Data Storage</a>
                        <div class="dropdown-menu p-0">
                          <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            <div class="mega-dropdown-column py-4 px-3">
                              <div class="widget widget-links">
                                <h6 class="fs-base mb-3">Data Storage</h6>
                                <ul class="widget-list">
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Hard Drives</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Solid State Drives</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Zip Drives</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Floppy &amp; Tape Drives</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Internal Hard Drives</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Internal Solid State Drives</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Network Attached Storage</a></li>
                                  <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">USB Flash Drives</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="../src/img/shop/departments/15.jpg" alt="HDD/SSD Data Storage"></a>
                              <div class="fs-sm mb-3">Starting from <span class='fw-medium'>$21.<small>60</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
                <!-- Primary menu-->
                <ul class="navbar-nav">
                  <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Acceuil</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion Store v.1</span><small class="d-block text-muted">Classic shop layout</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-fashion-store-v1.html" style="width: 250px;"><img src="img/home/preview/th01.jpg" alt="Fashion Store v.1"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-electronics-store.html"><span class="d-block text-heading">Electronics Store</span><small class="d-block text-muted">Slider + Promo banners</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-electronics-store.html" style="width: 250px;"><img src="img/home/preview/th03.jpg" alt="Electronics Store"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span class="d-block text-heading">Marketplace</span><small class="d-block text-muted">Multi-vendor, digital goods</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-marketplace.html" style="width: 250px;"><img src="img/home/preview/th04.jpg" alt="Marketplace"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-grocery-store.html"><span class="d-block text-heading">Grocery Store</span><small class="d-block text-muted">Full width + Side menu</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-grocery-store.html" style="width: 250px;"><img src="img/home/preview/th06.jpg" alt="Grocery Store"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-food-delivery.html"><span class="d-block text-heading">Food Delivery Service</span><small class="d-block text-muted">Food &amp; Beverages delivery</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-food-delivery.html" style="width: 250px;"><img src="img/home/preview/th07.jpg" alt="Food Delivery Service"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion Store v.2</span><small class="d-block text-muted">Slider + Featured categories</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-fashion-store-v2.html" style="width: 250px;"><img src="img/home/preview/th02.jpg" alt="Fashion Store v.2"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2" href="home-single-store.html"><span class="d-block text-heading">Single Product Store</span><small class="d-block text-muted">Single product / mono brand</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-single-store.html" style="width: 250px;"><img src="img/home/preview/th05.jpg" alt="Single Product / Brand Store"></a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Promo</a>
                    <div class="dropdown-menu p-0">
                      <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                          <div class="widget widget-links mb-4">
                            <h6 class="fs-base mb-3">Shop layouts</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                            </ul>
                          </div>
                          <div class="widget widget-links">
                            <h6 class="fs-base mb-3">Marketplace</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-category.html">Category Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-single.html">Single Item Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-vendor.html">Vendor Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-cart.html">Cart</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                          <div class="widget widget-links">
                            <h6 class="fs-base mb-3">Shop pages</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-categories.html">Shop Categories</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v1.html">Product Page v.1</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v2.html">Product Page v.2</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-cart.html">Cart</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-details.html">Checkout - Details</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Shipping</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-payment.html">Checkout - Payment</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-review.html">Checkout - Review</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-complete.html">Checkout - Complete</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="order-tracking.html">Order Tracking</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="comparison.html">Product Comparison</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                          <div class="widget widget-links mb-4">
                            <h6 class="fs-base mb-3">Grocery store</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="grocery-catalog.html">Product Catalog</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="grocery-single.html">Single Product Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="grocery-checkout.html">Checkout</a></li>
                            </ul>
                          </div>
                          <div class="widget widget-links">
                            <h6 class="fs-base mb-3">Food Delivery</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-category.html">Category Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-single.html">Single Item (Restaurant)</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-cart.html">Cart (Your Order)</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-checkout.html">Checkout (Address &amp; Payment)</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Nos services</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop User Account</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                          <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                          <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                          <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                          <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                          <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                          <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Vendor Dashboard</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a></li>
                          <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a></li>
                          <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                          <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                          <li><a class="dropdown-item" href="dashboard-products.html">Products</a></li>
                          <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New Product</a></li>
                          <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                      <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Support</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navbar Variants</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                          <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                          <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                          <li><a class="dropdown-item" href="home-electronics-store.html">Electronics Store</a></li>
                          <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a></li>
                          <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu (Grocery)</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="about.html">About Us</a></li>
                      <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Help Center</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                          <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                          <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">404 Not Found</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                          <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="sticky-footer.html">Sticky Footer Demo</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Hero (Banners + Slider)-->
      <section class="bg-secondary py-4 pt-md-5">
        <div class="container py-xl-2">
          <div class="row">
            <!-- Slider     -->
            <div class="col-xl-9 pt-xl-4 order-xl-2">
              <div class="tns-carousel">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;loop&quot;: false}">
                  <div>
                    <div class="row align-items-center">
                      <div class="col-md-6 order-md-2"><img class="d-block mx-auto" src="../src/img/home/hero-slider/05.jpg" alt="VR Collection"></div>
                      <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                        <h2 class="fw-light pb-1 from-bottom">World of music with</h2>
                        <h1 class="display-4 from-bottom delay-1">Headphones</h1>
                        <h5 class="fw-light pb-3 from-bottom delay-2">Choose between top brands</h5>
                        <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-2 me-n1" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="row align-items-center">
                      <div class="col-md-6 order-md-2"><img class="d-block mx-auto" src="../src/img/home/hero-slider/04.jpg" alt="VR Collection"></div>
                      <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                        <h2 class="fw-light pb-1 from-start">Explore the best</h2>
                        <h1 class="display-4 from-start delay-1">VR Collection</h1>
                        <h5 class="fw-light pb-3 from-start delay-2">on the market</h5>
                        <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-2 me-n1" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="row align-items-center">
                      <div class="col-md-6 order-md-2"><img class="d-block mx-auto" src="../src/img/home/hero-slider/06.jpg" alt="VR Collection"></div>
                      <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">
                        <h2 class="fw-light pb-1 scale-up">Check our huge</h2>
                        <h1 class="display-4 scale-up delay-1">Smartphones</h1>
                        <h5 class="fw-light pb-3 scale-up delay-2">&amp; Accessories collection</h5>
                        <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-2 me-n1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
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
                <div class="d-flex d-xl-block"><a class="d-flex align-items-center bg-faded-info rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0" href="#" style="min-width: 16rem;"><img src="../src/img/home/banners/banner-sm01.png" width="125" alt="Banner">
                    <div class="py-4 px-2">
                      <h5 class="mb-2"><span class="fw-light">Next Gen</span><br>Video <span class="fw-light">with</span><br>360 Cam</h5>
                      <div class="text-info fs-sm">Shop now
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </div>
                    </div></a><a class="d-flex align-items-center bg-faded-warning rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0" href="#" style="min-width: 16rem;"><img src="../src/img/home/banners/banner-sm02.png" width="125" alt="Banner">
                    <div class="py-4 px-2">
                      <h5 class="mb-2"><span class="fw-light">Top Rated</span><br>Gadgets<br><span class="fw-light">are on </span>Sale</h5>
                      <div class="text-warning fs-sm">Shop now
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </div>
                    </div></a><a class="d-flex align-items-center bg-faded-success rounded-3 pt-2 ps-2 mb-4" href="#" style="min-width: 16rem;"><img src="../src/img/home/banners/banner-sm03.png" width="125" alt="Banner">
                    <div class="py-4 px-2">
                      <h5 class="mb-2"><span class="fw-light">Catch Big</span><br>Deals <span class="fw-light">on</span><br>Earbuds</h5>
                      <div class="text-success fs-sm">Shop now
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right fs-xs ms-1" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                      </div>
                    </div></a></div>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-1 me-n1" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </a></div>
        </div>
        <!-- Grid-->
        <div class="row pt-2 mx-n2">
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Ajouter à ma liste">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                  </svg>
                </button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="../src/img/shop/catalog/58.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Headphones</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$198.<small>00</small></span></div>
                  <div class="star-rating">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star active star-rating-icon" viewBox="0 0 16 16">
                      <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button">
                  Ajouter au panier
                </button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-eye align-middle me-1" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                  </svg>  
                  Details</a>
                </div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card"><span class="badge bg-danger badge-shadow">Promo</span>
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="../src/img/shop/catalog/59.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Computers</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">AirPort Extreme Base Station</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$98.<small>50</small></span>
                    <del class="fs-sm text-muted">$149.<small>99</small></del>
                  </div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="../src/img/shop/catalog/60.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">TV, Video &amp; Audio</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">Smart TV LED 49’’ Ultra HD</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-muted fs-sm">Out of stock</span></div>
                </div>
              </div>
              <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm d-block w-100 mb-2" href="shop-single-v2.html">View details</a>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="../src/img/shop/catalog/61.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Smart Home</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">Smart Speaker with Voice Control</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$49.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="../src/img/shop/catalog/62.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Wearable Electronics</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">Fitness GPS Smart Watch</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$317.<small>40</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="../src/img/shop/catalog/63.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Smartphones</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">Popular Smartphone 128GB</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$965.<small>00</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card"><span class="badge bg-info badge-shadow">Nouveau</span>
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="../src/img/shop/catalog/64.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Wearable Electronics</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">Smart Watch Series 5, Aluminium</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$349.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2">
            <div class="card product-card">
              <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>Compare</a>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
              </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="../src/img/shop/catalog/65.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Computers</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v2.html">Convertible 2-in-1 HD Laptop</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$412.<small>00</small></span></div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Promo banner-->
      <section class="container mt-4 mb-grid-gutter">
        <div class="bg-faded-info rounded-3 py-4">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Limited Offer</span>
                <h3 class="mt-4 mb-1 text-body fw-light">All new</h3>
                <h2 class="mb-1">Last Gen iPad Pro</h2>
                <p class="h5 text-body fw-light">at discounted price. Hurry up!</p>
                <div class="countdown py-2 h4" data-countdown="07/01/2021 07:00:00 PM">
                  <div class="countdown-days"><span class="countdown-value"></span><span class="countdown-label text-muted">d</span></div>
                  <div class="countdown-hours"><span class="countdown-value"></span><span class="countdown-label text-muted">h</span></div>
                  <div class="countdown-minutes"><span class="countdown-value"></span><span class="countdown-label text-muted">m</span></div>
                  <div class="countdown-seconds"><span class="countdown-value"></span><span class="countdown-label text-muted">s</span></div>
                </div><a class="btn btn-accent" href="#">View offers<i class="ci-arrow-right fs-ms ms-1"></i></a>
              </div>
            </div>
            <div class="col-md-7"><img src="../src/img/home/banners/offer.jpg" alt="iPad Pro Offer"></div>
          </div>
        </div>
      </section>
      <!-- Brands carousel-->
      <section class="container mb-5">
        <div class="tns-carousel border-end">
          <div class="tns-carousel-inner" data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="../src/img/shop/brands/13.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="../src/img/shop/brands/14.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="../src/img/shop/brands/17.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="../src/img/shop/brands/16.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="../src/img/shop/brands/15.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="../src/img/shop/brands/18.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="../src/img/shop/brands/19.png" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="../src/img/shop/brands/20.png" style="width: 165px;" alt="Brand"></a></div>
          </div>
        </div>
      </section>
      <!-- Product widgets-->
      <section class="container pb-4 pb-md-5">
        <div class="row">
          <!-- Bestsellers-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Bestsellers</h3>
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/cart/widget/05.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$259.<small>00</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/cart/widget/06.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud Security Camera</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$122.<small>00</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/cart/widget/07.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S10</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$799.<small>00</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/cart/widget/08.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smart TV Box</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$67.<small>00</small></span>
                    <del class="text-muted fs-xs">$90.<small>43</small></del>
                  </div>
                </div>
              </div>
              <p class="mb-0">...</p><a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
          <!-- New arrivals-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">New arrivals</h3>
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/widget/06.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Monoblock Desktop PC</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$1,949.<small>00</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/widget/07.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Laserjet Printer All-in-One</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/widget/08.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Console Controller Charger</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$14.<small>97</small></span>
                    <del class="text-muted fs-xs">$16.<small>47</small></del>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/widget/09.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Smart Watch Series 5, Aluminium</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$349.<small>99</small></span></div>
                </div>
              </div>
              <p class="mb-0">...</p><a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
          <!-- Top rated-->
          <div class="col-md-4 col-sm-6 mb-2 py-3">
            <div class="widget">
              <h3 class="widget-title">Top rated</h3>
              <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/widget/10.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S9</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$749.<small>99</small></span>
                    <del class="text-muted fs-xs">$859.<small>99</small></del>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/widget/11.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/widget/12.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">360 Degrees Camera</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$98.<small>75</small></span></div>
                </div>
              </div>
              <div class="d-flex align-items-center py-2"><a class="d-block flex-shrink-0" href="shop-single-v2.html"><img src="../src/img/shop/widget/13.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="shop-single-v2.html">Digital Camera 40MP</a></h6>
                  <div class="widget-product-meta"><span class="text-accent">$210.<small>00</small></span>
                    <del class="text-muted fs-xs">$249.<small>00</small></del>
                  </div>
                </div>
              </div>
              <p class="mb-0">...</p><a class="fs-sm" href="shop-grid-ls.html">View more<i class="ci-arrow-right fs-xs ms-1"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!-- LinkedIn + Instagram info cards-->
      <section class="container-fluid px-0">
        <div class="row g-0">
          <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
              <div class="card-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="pink" class="bi bi-linkedin h3 mt-2 mb-4 text-primary" viewBox="0 0 16 16">
                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg>
                <h3 class="h5 mb-1">Suivez nous sur LinkedIn</h3>
                <p class="text-muted fs-sm">Toutes les nouveautés sur notre magasin</p>
              </div></a></div>
          <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
              <div class="card-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram h3 mt-2 mb-4 text-accent" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
                <h3 class="h5 mb-1">Rejoignez nous sur Instagram</h3>
                <p class="text-muted fs-sm">#ZenithLighting.ma</p>
              </div></a></div>
        </div>
      </section>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope position-absolute top-50 translate-middle-y text-muted fs-base ms-3" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                  </svg>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Votre email" required>
                  <button class="btn btn-primary" type="submit" name="subscribe">S'inscrire</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Télécharger notre App</h3>
              <div class="d-flex flex-wrap">
                <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-truck text-primary" style="font-size: 2.25rem;"" viewBox="0 0 16 16">
                  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-coin text-primary" viewBox="0 0 16 16">
                  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path fill-rule="evenodd" d="M8 13.5a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                </svg>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-headset text-primary" viewBox="0 0 16 16">
                  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                </svg>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-shield-check text-primary" viewBox="0 0 16 16">
                  <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                  <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                </svg>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light mb-5">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-start mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="../src/img/footer-logo-light.png" width="117" alt="Zenith"></a>
                </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-end mb-4">
              <div class="mb-3">
                <img class="d-inline-block" src="../src/img/cards-alt.png" width="187" alt="Payment methods">
            </div>
          </div>
          <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© tous les droits sont réservés 2021. Crée par <a class="text-light" href="https://marcsox.com" target="_blank" rel="noopener">masterlys</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
              <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
          </span>
          <span class="handheld-toolbar-label">Ma listes</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)">
          <span class="handheld-toolbar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
            </svg>
          </span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item" href="shop-cart.html">
          <span class="handheld-toolbar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg>
            <span class="badge bg-primary rounded-pill ms-1">4</span>
          </span>
          <span class="handheld-toolbar-label">Dh265.00</span></a></div>
    </div> 
    <!-- Back To Top Button-->
    <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-up btn-scroll-top-icon mt-1" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
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
