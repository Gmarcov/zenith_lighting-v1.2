<?php
session_start();
require_once('../Model/Fonction_fetch_produits.inc.php');


if (isset($_POST['cart'])) {
    $id = $_POST['id_produit'];
    $indexprod = array_search($id, $_SESSION['produit']);
    $trouve_produit = in_array($id, $_SESSION['produit']);
    if (!$trouve_produit) {
        array_push($_SESSION['produit'], $_POST['id_produit']);
        array_push($_SESSION['qty'], $_POST['qty']);
    } elseif ($_SESSION['qty'][$indexprod] != $_POST['qty']) {
        $_SESSION['qty'][$indexprod] = $_POST['qty'];
    } else {
        // print_r('Already exist');
    }
    if (empty($_SESSION['produit'])) {

        echo "<button class=\"btn btn-dark\" id=\"reset\" disabled title=\"Clear Photos\">Panier Vide</button>";
    } else {
        $qty = 0;
        foreach ($_SESSION['produit'] as $produit) {
            $rep = fetch_produits_id($produit);
            $indexprod = array_search($produit, $_SESSION['produit']);

?>
<li class="list-group-item d-flex justify-content-between lh-condensed">
    <img src="<?php echo $rep['url_image']; ?>" alt="..." width="20%" height="">
    <div>

        <h6 class="my-0"><?php echo $rep['nom']; ?></h6>
        <small class="text-muted">Quantité x <?php echo $_SESSION['qty'][$indexprod]; ?></small>
    </div>
    <span class="text-muted">$<?php echo $rep['prix'] * $_SESSION['qty'][$indexprod]; ?></span>
    <form action="../Controller/Cart.php" method="POST">
        <input class="btn btn-warning btn-sm p-1" type="submit" value="X" name="suppr">
        <input type="hidden" value="<?php echo $rep['id']; ?>" name="id_produit">
        <input type="hidden" value="<?php echo $rep['id'] ?>" name="id_fiche">
    </form>
</li>
<?php
        }
        ?>
<form action="./checkOut.html.php" method="get">
    <!-- <input type="submit" name="add" class="btn btn-warning my-3" value="Check Out"><i
                        class="fas fa-shopping-cart"></i> -->
    <!-- <input type="submit" name="add" class="btn btn-warning my-3" value="Check Out"><i class="fas fa-shopping-cart"></i> -->
    <button class="my-3 btn btn-warning" type="submit" name="add">Passer la commande</button>
</form>
<?php
    }
    // $link = "../View/Fiche_Produit.html.php?idproduit=$_POST[id_produit]";
    // echo "$link";
    // header("Location: $link");
} elseif (isset($_POST['suppr'])) {
    $id = $_POST['id_produit'];
    $indexprod = array_search($id, $_SESSION['produit']);
    unset($_SESSION['produit'][$indexprod]);
    unset($_SESSION['qty'][$indexprod]);
    $link = "../View/Fiche_Produit.html.php?idproduit=$_POST[id_fiche]";
    header("Location: $link");
} else {
    header('Location: ../index.php');
}