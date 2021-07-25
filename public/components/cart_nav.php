<div class="navbar-tool dropdown ms-3" id="shoppingCart">
    <?php

if (isset($_SESSION['mycart'])) {

    $total = 0;

    $nbItems = count($_SESSION['mycart']);
} else {
    $nbItems = 0;
    $total = 0;
}

?>
    <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html">
        <span class="navbar-tool-label"><?php echo $nbItems; ?></span>
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
                <?php
if (!empty($_SESSION['mycart'])) {
    require_once '../private/models/Functions_cart.php';
    if (isset($_SESSION['mycart'])) {
        foreach ($_SESSION['mycart'] as $key => $value) {
            ?>
                <div class="widget-cart-item py-2 border-bottom">
                    <button class="btn-close text-danger removeFromCart" type="button" aria-label="Remove"
                        id="<?php echo 'delete' . $_SESSION['mycart'][$key]['prod_id']; ?>"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                            href="shop-single-v2.html"><img src="<?php echo $_SESSION['mycart'][$key]['img']; ?>"
                                width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a
                                    href="shop-single-v2.html"><?php echo $_SESSION['mycart'][$key]['name']; ?></a></h6>
                            <div class="widget-product-meta"><span class="text-accent me-2">
                                    <?php $n = floatval($_SESSION['mycart'][$key]['price']);
            $whole = floor($n);
            $fraction = $n - $whole;
            echo '$' . $whole;?>.<small><?php echo $fraction ?></small></span><span class="text-muted">x
                                    <?php echo $_SESSION['mycart'][$key]['qty'] ?></span></div>
                        </div>
                    </div>
                </div>
                <?php
}
    }
} else {
    echo "<div class=\"widget-cart-item py-2 border-bottom\"> Panier Vide</div>";
}
?>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                <div class="fs-sm me-2 py-2"><span class="text-muted">Total:</span><span
                        class="text-accent fs-base ms-1">Dh1,247.<small>00</small></span></div>
                <a class="btn btn-outline-secondary btn-sm" href="cart.php">
                    Details
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right ms-1 me-n1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </a>
            </div>
            <a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-wallet2 me-2 fs-base align-middle" viewBox="0 0 16 16">
                    <path
                        d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                </svg>
                Procéder au paiement
            </a>
        </div>
    </div>
</div>