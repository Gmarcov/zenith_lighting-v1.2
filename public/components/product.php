<!-- Product-->
<?php
require_once '../private/models/Database_Connection.php';
require_once '../private/models/Functions_products.php';
$con = connect();
fetch_all_products($con, 'SELECT * FROM product');
?>
<script>
$(document).ready(function() {
    $('.addToCart').on('click', function(event) {
        event.preventDefault();
        var id = $(this).attr("id");
        var img = $('#imgCart' + id).attr("src");
        var name = $('#nameCart' + id).val();
        var qty = $('#qty' + id + '').val();
        var price = $('#price' + id + '').val();
        var action = 'addToCart';
        // console.log(price);
        $.ajax({
            url: '../private/controllers/Cart.php',
            method: 'POST',
            dataType: 'json',
            data: {
                'prod_id': id,
                'img': img,
                'name': name,
                'price': price,
                'qty': qty,
                'action': action
            },
            success: function(response) {
                var result = eval(response);
                // console.log(result);
                // console.log(location.href + '#shoppingCart');
                $("#shoppingCart").load(location.href + ' #shoppingCart');
            }
        })
    })
})
</script>