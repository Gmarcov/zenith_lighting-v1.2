    <?php
    require_once('./login.php');
    ?>
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view-electro" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title product-title"><a href="shop-single-v2.html" data-bs-toggle="tooltip"
                            data-bs-placement="right" title="Allez à la page du produit">Smartwatch Youth Edition
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right fs-lg ms-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
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
                                    <div class="product-gallery-preview-item active" id="first"><img class="image-zoom"
                                            src="../src/img/shop/single/gallery/05.jpg"
                                            data-zoom="../src/img/shop/single/gallery/05.jpg" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                    <div class="product-gallery-preview-item" id="second"><img class="image-zoom"
                                            src="../src/img/shop/single/gallery/06.jpg"
                                            data-zoom="../src/img/shop/single/gallery/06.jpg" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                    <div class="product-gallery-preview-item" id="third"><img class="image-zoom"
                                            src="../src/img/shop/single/gallery/07.jpg"
                                            data-zoom="../src/img/shop/single/gallery/07.jpg" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                    <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom"
                                            src="../src/img/shop/single/gallery/08.jpg"
                                            data-zoom="../src/img/shop/single/gallery/08.jpg" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                </div>
                                <div class="product-gallery-thumblist order-sm-1"><a
                                        class="product-gallery-thumblist-item active" href="#first"><img
                                            src="../src/img/shop/single/gallery/th05.jpg" alt="Product thumb"></a><a
                                        class="product-gallery-thumblist-item" href="#second"><img
                                            src="../src/img/shop/single/gallery/06.jpg" alt="Product thumb"></a><a
                                        class="product-gallery-thumblist-item" href="#third"><img
                                            src="../src/img/shop/single/gallery/07.jpg" alt="Product thumb"></a><a
                                        class="product-gallery-thumblist-item" href="#fourth"><img
                                            src="../src/img/shop/single/gallery/08.jpg" alt="Product thumb"></a></div>
                            </div>
                        </div>
                        <!-- Product details-->
                        <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                            <div class="product-details ms-auto pb-3">
                                <div class="mb-2">
                                    <div class="star-rating">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill active star-rating-icon"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill active star-rating-icon"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill active star-rating-icon"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star-fill active star-rating-icon"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-star active star-rating-icon"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                        </svg>
                                    </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74
                                        Reviews</span>
                                </div>
                                <div class="h3 fw-normal text-accent mb-3 me-1">$124.<small>99</small></div>
                                <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">Color:</span><span
                                        class="text-muted" id="colorOptionText">Dark blue/Orange</span></div>
                                <div class="position-relative me-n4 mb-3">
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="color" id="color1"
                                            data-bs-label="colorOptionText" value="Dark blue/Orange" checked>
                                        <label class="form-option-label rounded-circle" for="color1"><span
                                                class="form-option-color rounded-circle"
                                                style="background-color: #f25540;"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="color" id="color2"
                                            data-bs-label="colorOptionText" value="Dark gray/Green">
                                        <label class="form-option-label rounded-circle" for="color2"><span
                                                class="form-option-color rounded-circle"
                                                style="background-color: #65805b;"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="color" id="color3"
                                            data-bs-label="colorOptionText" value="White">
                                        <label class="form-option-label rounded-circle" for="color3"><span
                                                class="form-option-color rounded-circle"
                                                style="background-color: #f5f5f5;"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="color" id="color4"
                                            data-bs-label="colorOptionText" value="Black">
                                        <label class="form-option-label rounded-circle" for="color4"><span
                                                class="form-option-color rounded-circle"
                                                style="background-color: #333;"></span></label>
                                    </div>
                                    <div class="product-badge product-available mt-n1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                            <path
                                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                        </svg>
                                        Produit disponible
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pt-2 pb-4">
                                    <select class="form-select me-3" style="width: 5rem;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <button class="btn btn-primary btn-shadow d-block w-100" type="button">Ajouter au
                                        panier</button>
                                </div>
                                <div class="d-flex mb-4">
                                    <div class="w-100 me-3">
                                        <button class="btn btn-secondary d-block w-100" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-heart fs-lg me-2" viewBox="0 0 16 16">
                                                <path
                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                            </svg>
                                            <span class='d-none d-sm-inline'>Ajouter à ma </span>liste</button>
                                    </div>
                                    <div class="w-100">
                                        <button class="btn btn-secondary d-block w-100"
                                            type="button"></i>Comparer</button>
                                    </div>
                                </div>
                                <h5 class="h6 mb-3 py-2 border-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-exclamation-circle text-muted fs-lg align-middle mt-n1 me-2"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                    </svg>
                                    Description du produit
                                </h5>
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
                <div class="container"><a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0"
                        href="../public/index.php"><img src="../src/img/logo-dark.png" width="142" alt="Zenith"></a><a
                        class="navbar-brand d-sm-none me-2" href="../public/index.html"><img
                            src="../src/img/logo-dark.png" width="100" alt="Zenith"></a>
                    <!-- Search-->
                    <div class="input-group d-none d-lg-flex flex-nowrap mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"
                            viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-tool navbar-stuck-toggler" href="#">
                            <span class="navbar-tool-tooltip">Menu</span>
                            <div class="navbar-tool-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-list navbar-tool-icon" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
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
                        <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="<?php echo $link; ?>"
                            data-bs-toggle="modal">
                            <div class="navbar-tool-icon-box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="navbar-tool-icon bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>

                            <div class="navbar-tool-text ms-n3"><small><?php echo $name; ?></small>Mon Compte</div>
                        </a>
                        <div class="navbar-tool dropdown ms-3">
                            <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html">
                                <span class="navbar-tool-label">4</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-cart2 navbar-tool-icon" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
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
                                            <button class="btn-close text-danger" type="button"
                                                aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                                    href="shop-single-v2.html"><img
                                                        src="../src/img/shop/cart/widget/05.jpg" width="64"
                                                        alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a
                                                            href="shop-single-v2.html">Bluetooth Headphones</a></h6>
                                                    <div class="widget-product-meta"><span
                                                            class="text-accent me-2">$259.<small>00</small></span><span
                                                            class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button"
                                                aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                                    href="shop-single-v2.html"><img
                                                        src="../src/img/shop/cart/widget/06.jpg" width="64"
                                                        alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud
                                                            Security Camera</a></h6>
                                                    <div class="widget-product-meta"><span
                                                            class="text-accent me-2">$122.<small>00</small></span><span
                                                            class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button"
                                                aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                                    href="shop-single-v2.html"><img
                                                        src="../src/img/shop/cart/widget/07.jpg" width="64"
                                                        alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a
                                                            href="shop-single-v2.html">Android Smartphone S10</a></h6>
                                                    <div class="widget-product-meta"><span
                                                            class="text-accent me-2">$799.<small>00</small></span><span
                                                            class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button"
                                                aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                                    href="shop-single-v2.html"><img
                                                        src="../src/img/shop/cart/widget/08.jpg" width="64"
                                                        alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a
                                                            href="shop-single-v2.html">Android Smart TV Box</a></h6>
                                                    <div class="widget-product-meta"><span
                                                            class="text-accent me-2">$67.<small>00</small></span><span
                                                            class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                        <div class="fs-sm me-2 py-2"><span class="text-muted">Total:</span><span
                                                class="text-accent fs-base ms-1">Dh1,247.<small>00</small></span></div>
                                        <a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">
                                            Details
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-chevron-right ms-1 me-n1"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-wallet2 me-2 fs-base align-middle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"
                                viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                            <input class="form-control rounded-start" type="text" placeholder="Trouvez un produits">
                        </div>
                        <!-- Departments menu-->
                        <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#"
                                    data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-list align-middle mt-n1 me-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    Catégories</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-laptop opacity-60 fs-lg mt-n1 me-2"></i>Computers &amp;
                                            Accessories</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Computers</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Laptops &amp;
                                                                    Tablets</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Desktop
                                                                    Computers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Computer External
                                                                    Components</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Computer Internal
                                                                    Components</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Networking
                                                                    Products (NAS)</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Single Board
                                                                    Computers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Desktop
                                                                    Barebones</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column py-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Accessories</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Monitors</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Bags, Cases &amp;
                                                                    Sleeves</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Batteries</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Charges &amp;
                                                                    Adapters</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Cooling Pads</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Mounts</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Replacement
                                                                    Screens</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Security Locks</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Stands</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/07.jpg"
                                                            alt="Computers &amp; Accessories"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$149.<small>80</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-mobile opacity-60 fs-lg mt-n1 me-2"></i>Smartphones &amp;
                                            Tablets</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links mb-3">
                                                        <h6 class="fs-base mb-3">Smartphones</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Apple iPhone</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Android
                                                                    Smartphones</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Phablets</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base">Tablets</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Apple iPad</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Android
                                                                    Tablets</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Tablets with
                                                                    Keyboard</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column py-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Accessories</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Accessory Kits</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Batteries &amp;
                                                                    Battery Packs</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Cables</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Car
                                                                    Accessories</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Charges &amp;
                                                                    Power Adapters</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">FM
                                                                    Transmitters</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Lens
                                                                    Attachments</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Mounts &amp;
                                                                    Stands</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Repair Kits</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Replacement
                                                                    Parts</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Styluses</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/09.jpg"
                                                            alt="Smartphones &amp; Tablets"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$127.<small>00</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-monitor opacity-60 fs-lg mt-n1 me-2"></i>TV, Video &amp;
                                            Audio</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Television &amp; Video</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">TV Sets</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Home Theater
                                                                    Systems</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">DVD Players &amp;
                                                                    Recorders</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Blue-ray Players
                                                                    &amp; Recorders</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">HD DVD Players
                                                                    &amp; Recorders</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">DVD-VCR Combos</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">DTV Converters</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">AV Receivers</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">AV Amplifiers</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Projectors</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Projection
                                                                    Screens</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Satelite
                                                                    Television</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column pt-0 pb-4 py-sm-4 px-3">
                                                    <div class="widget widget-links">
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">TV-DTD Combos</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Sound Systems</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Home Cinema
                                                                    Systems</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Streaming Media
                                                                    Players</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">VCRs</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Video Glasses</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Lens
                                                                    Attachments</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/08.jpg"
                                                            alt="TV, Video &amp; Audio"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$78.<small>00</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-camera opacity-60 fs-lg mt-n1 me-2"></i>Cameras, Photo &amp;
                                            Video</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Cameras &amp; Lenses</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Point &amp; Shoot
                                                                    Digital Cameras</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">DSLR Cameras</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Mirrorless
                                                                    Cameras</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Body Mounted
                                                                    Cameras</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Camcorders</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Camcorder
                                                                    Lenses</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Camera Lenses</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Macro &amp;
                                                                    Ringlight Flashes</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Shoe Mount
                                                                    Flashes</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Tripods &amp;
                                                                    Monopods</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Video Studio</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column py-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Accessories</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Bags &amp;
                                                                    Cases</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Binoculars &amp;
                                                                    Scopes</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Batteries &amp;
                                                                    Chargers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Cables &amp;
                                                                    Cords</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Camcorder
                                                                    Accessories</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Cleaning
                                                                    Equipment</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Protector
                                                                    Foils</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Filters &amp;
                                                                    Accessories</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Remote
                                                                    Controls</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Rain Covers</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Viewfinders</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/10.jpg"
                                                            alt="Cameras, Photo &amp; Video"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$210.<small>00</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-earphones opacity-60 fs-lg mt-n1 me-2"></i>Headphones</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Headphones</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Earbud
                                                                    Headphones</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Over-Ear
                                                                    Headphones</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">On-Ear
                                                                    Headphones</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Bluetooth
                                                                    Headphones</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Sports &amp;
                                                                    Fitness Headphones</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Noise-Cancelling
                                                                    Headphones</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column py-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Accessories</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Cases &amp;
                                                                    Sleeves</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Cables &amp;
                                                                    Cords</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Ear Pads</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Repair Kits</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Cleaning
                                                                    Equipment</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/11.jpg"
                                                            alt="Headphones"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$35.<small>99</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-watch opacity-60 fs-lg mt-n1 me-2"></i>Wearable
                                            Electronics</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column py-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Gadgets</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Smartwatches</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Fitness
                                                                    Trackers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Smart Glasses</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Rings</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Virtual
                                                                    Reality</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Clips, Arm &amp;
                                                                    Wristbands</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Accessories</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/12.jpg"
                                                            alt="Wearable Electronics"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$79.<small>50</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-printer opacity-60 fs-lg mt-n1 me-2"></i>Printers &amp;
                                            Ink</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links mb-3">
                                                        <h6 class="fs-base mb-3">By type</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">All-in-One</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Copying</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Faxing</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Photo Printing</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Printing Only</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Scanning</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Scanners</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Business Card
                                                                    Scanners</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Document
                                                                    Scanners</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Flatbed &amp;
                                                                    Photo Scanners</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Slide &amp;
                                                                    Negative Scanners</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column py-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base">Printers</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Dot Matrix
                                                                    Printers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Inkjet
                                                                    Printers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Label Printers</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Laser Printers</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Photo Printers</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Wide Format
                                                                    Printers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Plotter
                                                                    Printers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/13.jpg"
                                                            alt="Printers &amp; Ink"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$54.<small>00</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-joystick opacity-60 fs-lg mt-n1 me-2"></i>Video Games</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Games &amp; Hardware</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Video Games</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">PlayStation 4</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">PlayStation 3</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Xbox One</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Xbox 360</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Nintendo
                                                                    Switch</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Wii U</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Wii</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">PC</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Mac</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Nintendo 3DS &amp;
                                                                    2DS</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Nintendo DS</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column pt-0 pb-4 py-sm-4 px-3">
                                                    <div class="widget widget-links">
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">PlayStation
                                                                    Vita</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Sony PSP</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Retro Gaming</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Microconsoles</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Accessories</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Digital Games</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/14.jpg"
                                                            alt="Video Games"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$19.<small>00</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-speaker opacity-60 fs-lg mt-n1 me-2"></i>Speakers &amp; Home
                                            Music</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Speakers</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Bluetooth
                                                                    Speakers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Bookshelf
                                                                    Speakers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Ceiling &amp;
                                                                    In-Wall Speakers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Center-Channel
                                                                    Speakers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Floorstanding
                                                                    Speakers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Outdoor
                                                                    Speakers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Satellite
                                                                    Speakers</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Sound Bars</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Subwoofers</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Surround Sound
                                                                    Systems</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column py-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Home Audio</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Home Theater</a>
                                                            </li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Wireless &amp;
                                                                    Streaming Audio</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Stereo System
                                                                    Components</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Compact Radios
                                                                    &amp; Stereos</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Home Audio
                                                                    Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/16.jpg"
                                                            alt="Speakers &amp; Home Music"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$43.<small>00</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class="ci-server opacity-60 fs-lg mt-n1 me-2"></i>HDD/SSD Data
                                            Storage</a>
                                        <div class="dropdown-menu p-0">
                                            <div class="d-flex flex-wrap flex-md-nowrap px-2">
                                                <div class="mega-dropdown-column py-4 px-3">
                                                    <div class="widget widget-links">
                                                        <h6 class="fs-base mb-3">Data Storage</h6>
                                                        <ul class="widget-list">
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">External Hard
                                                                    Drives</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">External Solid
                                                                    State Drives</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">External Zip
                                                                    Drives</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Floppy &amp; Tape
                                                                    Drives</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Internal Hard
                                                                    Drives</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Internal Solid
                                                                    State Drives</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">Network Attached
                                                                    Storage</a></li>
                                                            <li class="widget-list-item pb-1"><a
                                                                    class="widget-list-link" href="#">USB Flash
                                                                    Drives</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                        class="d-block mb-2" href="#"><img
                                                            src="../src/img/shop/departments/15.jpg"
                                                            alt="HDD/SSD Data Storage"></a>
                                                    <div class="fs-sm mb-3">Starting from <span
                                                            class='fw-medium'>$21.<small>60</small></span></div><a
                                                        class="btn btn-primary btn-shadow btn-sm" href="#">See offers
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-chevron-right fs-xs ms-1"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
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
                            <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">Acceuil</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown position-static mb-0"><a
                                            class="dropdown-item py-2 border-bottom"
                                            href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion
                                                Store v.1</span><small class="d-block text-muted">Classic shop
                                                layout</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                                href="home-fashion-store-v1.html" style="width: 250px;"><img
                                                    src="img/home/preview/th01.jpg" alt="Fashion Store v.1"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a
                                            class="dropdown-item py-2 border-bottom"
                                            href="home-electronics-store.html"><span
                                                class="d-block text-heading">Electronics Store</span><small
                                                class="d-block text-muted">Slider + Promo banners</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                                href="home-electronics-store.html" style="width: 250px;"><img
                                                    src="img/home/preview/th03.jpg" alt="Electronics Store"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a
                                            class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span
                                                class="d-block text-heading">Marketplace</span><small
                                                class="d-block text-muted">Multi-vendor, digital goods</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                                href="home-marketplace.html" style="width: 250px;"><img
                                                    src="img/home/preview/th04.jpg" alt="Marketplace"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a
                                            class="dropdown-item py-2 border-bottom"
                                            href="home-grocery-store.html"><span class="d-block text-heading">Grocery
                                                Store</span><small class="d-block text-muted">Full width + Side
                                                menu</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                                href="home-grocery-store.html" style="width: 250px;"><img
                                                    src="img/home/preview/th06.jpg" alt="Grocery Store"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a
                                            class="dropdown-item py-2 border-bottom"
                                            href="home-food-delivery.html"><span class="d-block text-heading">Food
                                                Delivery Service</span><small class="d-block text-muted">Food &amp;
                                                Beverages delivery</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                                href="home-food-delivery.html" style="width: 250px;"><img
                                                    src="img/home/preview/th07.jpg" alt="Food Delivery Service"></a>
                                        </div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a
                                            class="dropdown-item py-2 border-bottom"
                                            href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion
                                                Store v.2</span><small class="d-block text-muted">Slider + Featured
                                                categories</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                                href="home-fashion-store-v2.html" style="width: 250px;"><img
                                                    src="img/home/preview/th02.jpg" alt="Fashion Store v.2"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2"
                                            href="home-single-store.html"><span class="d-block text-heading">Single
                                                Product Store</span><small class="d-block text-muted">Single product /
                                                mono brand</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                                href="home-single-store.html" style="width: 250px;"><img
                                                    src="img/home/preview/th05.jpg"
                                                    alt="Single Product / Brand Store"></a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">Promo</a>
                                <div class="dropdown-menu p-0">
                                    <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                            <div class="widget widget-links mb-4">
                                                <h6 class="fs-base mb-3">Shop layouts</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                                                </ul>
                                            </div>
                                            <div class="widget widget-links">
                                                <h6 class="fs-base mb-3">Marketplace</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="marketplace-category.html">Category Page</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="marketplace-single.html">Single Item Page</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="marketplace-vendor.html">Vendor Page</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="marketplace-cart.html">Cart</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="marketplace-checkout.html">Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                            <div class="widget widget-links">
                                                <h6 class="fs-base mb-3">Shop pages</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-categories.html">Shop Categories</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-single-v1.html">Product Page v.1</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-single-v2.html">Product Page v.2</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="shop-cart.html">Cart</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="checkout-details.html">Checkout - Details</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="checkout-shipping.html">Checkout - Shipping</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="checkout-payment.html">Checkout - Payment</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="checkout-review.html">Checkout - Review</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="checkout-complete.html">Checkout - Complete</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="order-tracking.html">Order Tracking</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="comparison.html">Product Comparison</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                            <div class="widget widget-links mb-4">
                                                <h6 class="fs-base mb-3">Grocery store</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="grocery-catalog.html">Product Catalog</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="grocery-single.html">Single Product Page</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="grocery-checkout.html">Checkout</a></li>
                                                </ul>
                                            </div>
                                            <div class="widget widget-links">
                                                <h6 class="fs-base mb-3">Food Delivery</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="food-delivery-category.html">Category Page</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="food-delivery-single.html">Single Item
                                                            (Restaurant)</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="food-delivery-cart.html">Cart (Your Order)</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="food-delivery-checkout.html">Checkout (Address &amp;
                                                            Payment)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">Nos services</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Shop User Account</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="account-orders.html">Orders History</a>
                                            </li>
                                            <li><a class="dropdown-item" href="account-profile.html">Profile
                                                    Settings</a></li>
                                            <li><a class="dropdown-item" href="account-address.html">Account
                                                    Addresses</a></li>
                                            <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a>
                                            </li>
                                            <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                                            <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                                            <li><a class="dropdown-item" href="account-single-ticket.html">Single
                                                    Ticket</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Vendor Dashboard</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a>
                                            </li>
                                            <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a>
                                            </li>
                                            <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a>
                                            </li>
                                            <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                                            <li><a class="dropdown-item" href="dashboard-products.html">Products</a>
                                            </li>
                                            <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New
                                                    Product</a></li>
                                            <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                                    <li><a class="dropdown-item" href="account-password-recovery.html">Password
                                            Recovery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">Support</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navbar
                                            Variants</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level
                                                    Light</a></li>
                                            <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level
                                                    Dark</a></li>
                                            <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level
                                                    Light</a></li>
                                            <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level
                                                    Dark</a></li>
                                            <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level
                                                    Light</a></li>
                                            <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level
                                                    Dark</a></li>
                                            <li><a class="dropdown-item" href="home-electronics-store.html">Electronics
                                                    Store</a></li>
                                            <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a>
                                            </li>
                                            <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu
                                                    (Grocery)</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">Help Center</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                                            <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a>
                                            </li>
                                            <li><a class="dropdown-item" href="help-submit-request.html">Submit a
                                                    Request</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                            data-bs-toggle="dropdown">404 Not Found</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a>
                                            </li>
                                            <li><a class="dropdown-item" href="404-illustration.html">404 -
                                                    Illustration</a></li>
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