<?php
include('../connections/connection.php');
include('../connections/functions.php');
$user_id = $_GET['user_id'];
$query = mysqli_query($conn, "DELETE FROM `user_data` WHERE id = '$user_id'");
if ($query) {
    Notifications("success", "Deleted", "Successfully!");
    echo "<meta http-equiv=\"refresh\" content=\"0; url=./user_management.php\">";
} else {
    Notifications("danger", "Error", "Inserting Record!");
    echo "<meta http-equiv=\"refresh\" content=\"0; url=./user_management.php\">";
}
