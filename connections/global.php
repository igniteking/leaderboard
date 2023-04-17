<?php
if (isset($_SESSION['email'])) {

  $fetch_all_query = "SELECT * FROM user_data WHERE email = '" . $_SESSION['email'] . "'";
  $result = mysqli_query($conn, $fetch_all_query);

  while ($rows = mysqli_fetch_assoc($result)) {
    $user_id = $rows['id'];
    $username = $rows['username'];
    $email = $rows['email'];
    $user_type = $rows['user_type'];
  }
}
