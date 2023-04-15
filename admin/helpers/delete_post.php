<?php
include('../connections/connection.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM `assignment` WHERE assignment_id = '$id'");
if ($query) {
    echo '<div class="btn btn-success col-md-12 text-white">Success!</div>';
}
