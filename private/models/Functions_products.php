<?php

function get_product_images($con, $query, $id)
{
    $stmt = $con->prepare($query);

    $images = [];
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        while ($data = $res->fetch_assoc()) {
            $images[] = $data['image_url'];
        }
        return $images;
    }
    $stmt->close();
    return false;
}

function fetch_all_products($con, $query)
{
    $stmt = $con->prepare($query);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        while ($data = $res->fetch_assoc()) {
            $images = get_product_images($con, 'SELECT * FROM product_images WHERE product_id=?', $data['product_id']);
            // print_r($images);
            ?>
<div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
    <!-- /////////////////////////Id Product//////////////////////// -->
    <input type="hidden" value="<?php echo $data['product_id'] ?>" id="prod_id">
    <div class=" card product-card">
        <div class="product-card-actions d-flex align-items-center">
            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left"
                title="Ajouter à ma liste">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                    viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                </svg>
            </button>
        </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img
                src="<?php echo $images[0]; ?>" alt="Product" id="<?php echo 'imgCart' . $data['product_id']; ?>"></a>
        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                href="#"><?php echo $data['product_name']; ?> <input type="hidden"
                    value="<?php echo $data['product_name']; ?>" id="<?php echo 'nameCart' . $data['product_id']; ?>">
            </a>
            <h3 class="product-title fs-sm"><a href="shop-single-v2.html"><?php echo $data['Categorie']; ?></a>
            </h3>
            <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">
                        <?php $n = $data['price'];
            $whole = floor($n); // 1
            $fraction = $n - $whole; // .25
            echo '$' . $whole;?>.<small><?php echo $fraction; ?></small></span>
                    <input type="hidden" value="<?php echo $data['price'] ?>"
                        id="<?php echo 'price' . $data['product_id']; ?>">
                </div>
                <div class="star-rating">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="card-body card-body-hidden">
            <button class="btn btn-primary btn-sm d-block w-100 mb-2 addToCart" type="button"
                id="<?php echo $data['product_id']; ?>">
                Ajouter au panier
            </button>
            <div class="text-center"><a class="nav-link-style fs-ms"
                    href="<?php echo '#quickView' . $data['product_id'] . $data['product_name'] ?>"
                    data-bs-toggle="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-eye align-middle me-1" viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                    Details</a>
            </div>
        </div>
    </div>
    <hr class="d-sm-none">
</div>


<?php

        }
    }
    $stmt->close();
    return false;
}

function quickView($con, $query)
{
    $stmt = $con->prepare($query);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        while ($data = $res->fetch_assoc()) {
            $images = get_product_images($con, 'SELECT * FROM product_images WHERE product_id=?', $data['product_id']);
            // print_r($images);
            // echo $images[0];
            // echo count($images);
            ?>
<div class="modal-quick-view modal fade" id="<?php echo 'quickView' . $data['product_id'] . $data['product_name']; ?>"
    tabindex="-1">
    <!-- /////////////////////////Id Product//////////////////////// -->
    <input type="hidden" value="<?php echo $data['product_id'] ?>">
    <div class=" modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title product-title"><a href="shop-single-v2.html" data-bs-toggle="tooltip"
                        data-bs-placement="right"
                        title="Allez à la page du produit"><?php echo $data['product_name']; ?>
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
                                <!-- First Item -->
                                <div class="product-gallery-preview-item active" id="<?php echo 'image' . 0; ?>"><img
                                        class="image-zoom" src="<?php echo $images[0]; ?>"
                                        data-zoom="<?php echo $images[0]; ?>" alt="Product image">
                                    <div class="image-zoom-pane"></div>
                                </div>
                                <?php
$i = 1;
            while ($i < count($images)) {
                ?>
                                <div class="product-gallery-preview-item" id="<?php echo 'image' . $i; ?>"><img
                                        class="image-zoom" src="<?php echo $images[$i]; ?>"
                                        data-zoom="<?php echo $images[$i]; ?>" alt="Product image">
                                    <div class="image-zoom-pane"></div>
                                </div>
                                <?php
$i = $i + 1;
            }
            ?>
                            </div>


                            <div class="product-gallery-thumblist order-sm-1">
                                <?php
$i = 0;
            while ($i < count($images)) {
                ?>
                                <a class="product-gallery-thumblist-item active"
                                    href="#<?php echo 'image' . $i; ?>"><img src="<?php echo $images[$i]; ?>"
                                        alt="Product thumb"></a>
                                <?php
$i = $i + 1;
            }
            ?>
                            </div>
                        </div>
                    </div>
                    <!-- Product details-->
                    <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                        <div class="product-details ms-auto pb-3">
                            <div class="mb-2">
                                <div class="star-rating">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-star active star-rating-icon" viewBox="0 0 16 16">
                                        <path
                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                    </svg>
                                </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74
                                    Reviews</span>
                            </div>
                            <div class="h3 fw-normal text-accent mb-3 me-1">
                                <?php $n = $data['price'];
            $whole = floor($n); // 1
            $fraction = $n - $whole; // .25
            echo '$' . $whole;?>.<small><?php echo $fraction; ?></small></span></div>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                        <path
                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                    </svg>
                                    Produit disponible
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2 pb-4">
                                <select class="form-select me-3" style="width: 5rem;"
                                    id="<?php echo 'qty' . $data['product_id']; ?>">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <button class="btn btn-primary btn-shadow d-block w-100 addToCart" type="button"
                                    id="<?php echo $data['product_id'] ?>">Ajouter au panier</button>
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
                                    <button class="btn btn-secondary d-block w-100" type="button"></i>Comparer</button>
                                </div>
                            </div>
                            <h5 class="h6 mb-3 py-2 border-bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-exclamation-circle text-muted fs-lg align-middle mt-n1 me-2"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                </svg>
                                Description du produit
                            </h5>
                            <p>
                                <?php
echo $data['prod_Desc'];
            ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

        }
    }
    $stmt->close();
    return false;
}





/****** Carousel ******/

function fetch_all_products_carousel($con, $query)
{
    $stmt = $con->prepare($query);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        while ($data = $res->fetch_assoc()) {
            $images = get_product_images($con, 'SELECT * FROM product_images WHERE product_id=?', $data['product_id']);
            // print_r($images);
            ?>
<div class="item">
    <div class="work">
    <!-- /////////////////////////Id Product//////////////////////// -->
    <input type="hidden" value="<?php echo $data['product_id'] ?>" id="prod_id">
    <div class=" card product-card">
        <div class="product-card-actions d-flex align-items-center">
            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left"
                title="Ajouter à ma liste">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                    viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                </svg>
            </button>
        </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img
                src="<?php echo $images[0]; ?>" alt="Product" id="<?php echo 'imgCart' . $data['product_id']; ?>"></a>
        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                href="#"><?php echo $data['product_name']; ?> <input type="hidden"
                    value="<?php echo $data['product_name']; ?>" id="<?php echo 'nameCart' . $data['product_id']; ?>">
            </a>
            <h3 class="product-title fs-sm"><a href="shop-single-v2.html"><?php echo $data['Categorie']; ?></a>
            </h3>
            <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">
                        <?php $n = $data['price'];
            $whole = floor($n); // 1
            $fraction = $n - $whole; // .25
            echo '$' . $whole;?>.<small><?php echo $fraction; ?></small></span>
                    <input type="hidden" value="<?php echo $data['price'] ?>"
                        id="<?php echo 'price' . $data['product_id']; ?>">
                </div>
                <div class="star-rating">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star-fill active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-star active star-rating-icon" viewBox="0 0 16 16">
                        <path
                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="card-body card-body-hidden">
            <button class="btn btn-primary btn-sm d-block w-100 mb-2 addToCart" type="button"
                id="<?php echo $data['product_id']; ?>">
                Ajouter au panier
            </button>
            <div class="text-center"><a class="nav-link-style fs-ms"
                    href="<?php echo '#quickView' . $data['product_id'] . $data['product_name'] ?>"
                    data-bs-toggle="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                        class="bi bi-eye align-middle me-1" viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                    Details</a>
            </div>
        </div>
    </div>
    <hr class="d-sm-none">
</div>
</div>


<?php

        }
    }
    $stmt->close();
    return false;
}