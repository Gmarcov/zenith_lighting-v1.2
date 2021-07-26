<section class="ftco-section">
    <div class="container">
        <div class="row">
            <!-- Heading-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                <h2 class="h3 mb-0 pt-3 me-2">Meilleurs Ventes</h2>
                <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="shop-grid-ls.html">Tout afficher
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-1 me-n1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a></div>
            </div>

            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <?php
                    require_once '../private/models/Database_Connection.php';
                    require_once '../private/models/Functions_products.php';
                    $con = connect();
                    fetch_all_products_carousel($con, 'SELECT * FROM product');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <!-- Heading-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                <h2 class="h3 mb-0 pt-3 me-2">Nouvelles Arrivées</h2>
                <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="shop-grid-ls.html">Tout afficher
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-1 me-n1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a></div>
            </div>

            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <?php
                    require_once '../private/models/Database_Connection.php';
                    require_once '../private/models/Functions_products.php';
                    $con = connect();
                    fetch_all_products_carousel($con, 'SELECT * FROM product');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <!-- Heading-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                <h2 class="h3 mb-0 pt-3 me-2">Nos Recommendations</h2>
                <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="shop-grid-ls.html">Tout afficher
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right ms-1 me-n1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a></div>
            </div>

            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <?php
                    require_once '../private/models/Database_Connection.php';
                    require_once '../private/models/Functions_products.php';
                    $con = connect();
                    fetch_all_products_carousel($con, 'SELECT * FROM product');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>