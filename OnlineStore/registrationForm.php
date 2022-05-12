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
                    <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" action="registration.php" method="post" novalidate>
                        <div class="form-group">
                            <label for="validationFirstName">First Name</label>
                            <input type="text" class="form-control" id="validationFirstName" name="validationFirstName" placeholder="Enter your first name" required>
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="validationLastName">Last Name</label>
                            <input type="text" class="form-control" id="validationLastName" name="validationLastName" placeholder="Enter your last name" required>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email address" required>
                            <div id="email-validation" class="invalid-feedback">
                                Please enter your email.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            <div class="invalid-feedback"> Please enter your password.</div>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-password" name="password" placeholder="Please confirm your password" required>
                            <div class="invalid-feedback"> Please confirm your password.</div>
                            <p class="msg" id="messg"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" onclick="checkPasswords()" class="btn btn-secondary">Sign Up</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    <?php
    include("common/footer.html");
    ?>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
</body>

</html>