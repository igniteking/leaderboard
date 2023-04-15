<?php
include('../connections/connection.php');
include('../connections/global.php');
$website = @$_GET['website'];
$twitter = @$_GET['twitter'];
$facebook = @$_GET['facebook'];
$github = @$_GET['github'];
$instagram = @$_GET['instagram'];

if ($website) {
    $sql = mysqli_query($conn, "UPDATE `user_data` SET `website`='$website' WHERE email = '$email'");
} else if ($github) {
    $sql = mysqli_query($conn, "UPDATE `user_data` SET `github`='$github' WHERE email = '$email'");
} else if ($twitter) {
    $sql = mysqli_query($conn, "UPDATE `user_data` SET `twitter`='$twitter' WHERE email = '$email'");
} else if ($facebook) {
    $sql = mysqli_query($conn, "UPDATE `user_data` SET `facebook`='$facebook' WHERE email = '$email'");
} else if ($instagram) {
    $sql = mysqli_query($conn, "UPDATE `user_data` SET `instagram`='$instagram' WHERE email = '$email'");
}

echo '<div class="col-md-12 btn btn-success text-white">
    <h6 class="mt-2">Updated!</h6>
</div>';
