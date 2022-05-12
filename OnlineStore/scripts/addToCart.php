<?php
session_start();
if (isset($_POST['add'])) {
    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if (in_array($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        } else {

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;

            if (isset($_SESSION['id'])) {
                echo "loggin";
                $query = "INSERT INTO cart(
                    id,
                    user_id,
                    product_id
                )
                VALUES (
                    NULL,
                    '$_SESSION[id]',
                    '$_POST[product_id]'
                );";
                mysqli_query($conn, $query);
            }
        }
    } else {

        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        if (isset($_SESSION['id'])) {
            echo "loggin";
            $query = "INSERT INTO cart(
                id,
                user_id,
                product_id
            )
            VALUES (
                NULL,
                '$_SESSION[id]',
                '$_POST[product_id]'
            );";
            mysqli_query($conn, $query);
        }
    }
}
