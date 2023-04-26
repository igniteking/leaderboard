<?php
include('../connections/connection.php');
include('../connections/functions.php');
$match_id = $_GET['match_id'];
$query = mysqli_query($conn, "DELETE FROM `match_data` WHERE match_id = '$match_id'");
if ($query) {
    Notifications("success", "Deleted", "Successfully!");
    echo "<meta http-equiv=\"refresh\" content=\"0; url=./match_management.php\">";
} else {
    Notifications("danger", "Error", "Inserting Record!");
    echo "<meta http-equiv=\"refresh\" content=\"0; url=./match_management.php\">";
}
