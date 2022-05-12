<?php
session_start();
include("scripts/functions.php");
include("scripts/connectToDatabase.php");
include("common/document-head.html");
include("common/nav-bar.html");
include("scripts/addToCart.php");
include("scripts/removeCart.php");

?>

<body>
    <?php
    include("common/nav-bar.php");
    ?>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>
                    <hr>

                    <?php

                    $total = 0;
                    if ((isset($_SESSION['id']))) {
                        $sql = "SELECT p.id, p.name, p.price, p.image_url
                        From product p 
                        INNER JOIN cart c on p.id = c.product_id";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            cartElement($row['name'], $row['price'], $row['image_url'], $row['id']);
                            $total = $total + (int)$row['price'];
                        }
                    } else if ((isset($_SESSION['cart']))  && (count($_SESSION['cart']) != 0)) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $sql = "SELECT * FROM product";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['id'] == $id) {
                                    cartElement($row['name'], $row['price'], $row['image_url'], $row['id']);
                                    $total = $total + (int)$row['price'];
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            } else {
                                echo "<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Total Price</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total; ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>$<?php
                                    echo $total;
                                    ?></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
    include("common/footer.html");
    ?>

</body>

</html>