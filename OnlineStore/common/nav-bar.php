<!-- nav-bar.html -->
<?php
include("./scripts/addToCart.php");
?>

<div id="header">
    <div class="menu-bar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img class="logo" src="asset/nebraska.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-tabs text-nowrap flex-row mx-md-auto order-1 order-md-2">
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" href="home.php">All</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link " href="office.php">Office</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" href="living.php">Living</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" href="kids.php">Kids</a>
                    </li>
                </ul>

            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-tabs text-nowrap flex-row mx-md-auto order-1 order-md-2">
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">
                            <i class="fas fa-shopping-cart"></i>
                            <?php
                            if (isset($_SESSION['id'])) {
                                $sql = "SELECT * FROM cart";
                                $result = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($result);
                                echo "<span id=\"cart_count\">$count</span>";
                            } else if (isset($_SESSION['cart'])) {
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\">$count</span>";
                            } else {
                                echo "<span id=\"cart_count\">0</span>";
                            }

                            ?>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <?php
                        $loggedIn = isset($_SESSION['id']) ? true : false;
                        if (!$loggedIn) {
                            include("common/login_dropdown.html");
                        }
                        ?>
                    </li>

                    <li>
                        <?php
                        include("common/baner.php");
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>