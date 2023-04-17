<?php
include('../connections/connection.php');
include('../connections/functions.php');
$collage_id = $_GET['collage_id'];
$query = mysqli_query($conn, "DELETE FROM `collage_data` WHERE collage_id = '$collage_id'");
if ($query) {
    Notifications("success", "Deleted", "Successfully!");
    echo "<meta http-equiv=\"refresh\" content=\"2; url=./collage_management.php\">";
} else {
    Notifications("danger", "Error", "Inserting Record!");
    echo "<meta http-equiv=\"refresh\" content=\"2; url=./collage_management.php\">";
}
