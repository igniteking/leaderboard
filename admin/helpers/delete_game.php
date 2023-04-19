<?php
include('../connections/connection.php');
include('../connections/functions.php');
$game_id = $_GET['game_id'];
$query = mysqli_query($conn, "DELETE FROM `game_data` WHERE game_id = '$game_id'");
if ($query) {
    Notifications("success", "Deleted", "Successfully!");
    echo "<meta http-equiv=\"refresh\" content=\"0; url=./game_management.php\">";
} else {
    Notifications("danger", "Error", "Inserting Record!");
    echo "<meta http-equiv=\"refresh\" content=\"0; url=./game_management.php\">";
}
