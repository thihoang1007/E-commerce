<?php
/*registrationFormProcess.php
//Calls these functions (defined below):
//emailAlreadyExists()
//getUniqueID()
Enters the customer's information from the registration
form into the database. Fails if the user does not have
an e-mail address that is unique in the database. The
login name requested by the user does not have to be 
unique, but if this is not the case, the script choses
a modified login name (based on the user's requested
login name) that is unique.
*/

//========== main script begins here
session_start();
include "scripts/connectToDatabase.php";

if (emailAlreadyExists($conn, $_POST['email'])) {
    echo "<h3>Sorry, but your e-mail
          address is already registered.</h3>";
} else {

    $query = "INSERT INTO user(
        id,
        password,
        email,
        first_name,
        last_name
    )
    VALUES (
        NULL,
        '$_POST[password]',
        '$_POST[email]',
        '$_POST[validationFirstName]',
        '$_POST[validationLastName]'
    );";
    $success = mysqli_query($conn, $query);
    if ($success) {
        echo "<div class= 'partner'>
        <h3>Thank you for registering with our e-store.</h3></div>";
        echo "<h3>To log in and start shopping please
     <a href='index.php'
        class='NoDecoration'>click here</a>.</h3>";
    }
}
mysqli_close($db);
//========== main script ends here

/*emailAlreadyExists()
Determines if the e-mail address supplied by the customer
upon registration is already in the database.
*/
function emailAlreadyExists($conn, $email)
{
    $query =
        "SELECT *
      FROM user 
      WHERE email = '$email'";
    $customers = mysqli_query($conn, $query);
    $numRecords = mysqli_num_rows($customers);
    return ($numRecords > 0) ? true : false;
}

/*getUniqueID()
Assigns a unique login name to the customer upon registration.
If the login name requested by the customer is already in use,
the customer will be assigned the login name which is formed
by taking the requested login name and appending the lowest
positive integer that makes the result unique in the database.
*/
// function getUniqueID($db, $loginName)
// {
//     $unique_login = $loginName;
//     $query =
//       "SELECT *
//       FROM Customers
//       WHERE login_name = '$unique_login'";
//     $customers = mysqli_query($db, $query);
//     $numRecords = mysqli_num_rows($customers);
//     if ($numRecords != 0)
//     {
//         //Try appending non-negative integers 0, 1, 2 ...
//         //till you get a unique login name
//         $i = -1;
//         do
//         {
//             $i++;
//             $unique_login = $loginName.$i;
//             $query =
//               "SELECT *
//               FROM Customers
//               WHERE login_name = '$unique_login'";
//             $customers = mysqli_query($db, $query);
//             $numRecords = mysqli_num_rows($customers);
//         }
//         while ($numRecords != 0);
//     }
//     return $unique_login;
// }
