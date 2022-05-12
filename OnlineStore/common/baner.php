<?php
/*banner.php
This file handles the "banner display" of our Nature's Source
website, which includes the logo and welcome message. The logo
is just HTML. A PHP script displays a Welcome and the current
date and time, including a personal Welcome if the user has
logged in. And finally, a JavaScript script uses AJAX and a
second PHP script to update the date and time every 60 seconds.
*/
?>
<div id="welcome">
    <?php
    //Ensure that session_start() is called at the
    //beginning of any file that includes this script
    //and needs to make use of the $_SESSION array.
    //Also because logout.php destroys the session 
    //before its final display it is necessary here
    //to check that the $_SESSION values are actually
    //set and available before using them.
    $loggedIn = isset($_SESSION['id']) ? true : false;
    if (isset($_SESSION['customer_id']))
        $customerID = $_SESSION['id'];
    if (isset($_SESSION['first_name']))
        $customerFirstName = $_SESSION['first_name'];

    if (isset($_SESSION['last_name']))
        $customerLastName = $_SESSION['last_name'];
    if ($loggedIn) {
        echo "<div style = 'color:white'> $customerFirstName $customerLastName </div>";
        echo "<a class='LongerButton'
                href='logout.php'>
                log out</a>";
    }
    ?>
</div>