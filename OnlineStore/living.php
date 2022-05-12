<?php
session_start();
include("scripts/functions.php");
include("common/document-head.html");
include("scripts/connectToDatabase.php");
?>

<body>
    <script src="script.js"></script>

    <?php
    include("common/nav-bar.php");
    ?>
    <div class="container">
        <div class="row text-center py-5">
            <?php
            $sql = "SELECT * FROM product WHERE category_id = 8";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                displayProduct("living.php",$row['name'], $row['price'], $row['image_url'], $row['id']);
            }
            ?>
        </div>
    </div>

    <?php
    include("common/footer.html");
    ?>


</body>

</html>