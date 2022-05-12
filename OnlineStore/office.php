<?php
session_start();
include("scripts/connectToDatabase.php");
include("scripts/functions.php");
include("common/document-head.html");
?>

<body>
    <script src="script.js"></script>

    <?php
    include("common/nav-bar.php");
    ?>
    <div class="container">
        <div class="row text-center py-5">
            <?php
            $sql = "SELECT * FROM product WHERE category_id = 7";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                displayProduct("office.php", $row['name'], $row['price'], $row['image_url'], $row['id']);
            }
            ?>
        </div>
    </div>

    <?php
    include("common/footer.html");
    ?>


</body>

</html>