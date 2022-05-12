<?php
session_start();
include("common/document-head.html");
?>

<body>
    <script src="script.js"></script>


    <?php
    include("common/nav-bar.php");
    ?>

        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Log In</h5>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email address" required>
                            <div class="invalid-feedback">
                                Please enter your email.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*********" required>
                            <div class="invalid-feedback">
                                Please enter your password.
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary">Log in</button>
                        </div>
                    </form>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me?</label>
                    </div>


                </div>
            </div>
    </div>

    <?php
    include("common/footer.html");
    ?>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
</body>

</html>