<?php
session_start();
if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
                if (isset($_SESSION['id'])) {
                    $id = $_GET['id'];
                    $query = "DELETE FROM `cart` WHERE product_id = $id";
                    mysqli_query($conn, $query);
                }
            }

        }
    }
}
