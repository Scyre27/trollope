<?php
include "./includes/config.php";
if (isset($_COOKIE['logUser'])) {
  $cookie = $_COOKIE['logUser'];
  $loggedInfo = fetchUserWithCookie($cookie);
}

function fetchUserWithCookie($cookie)
{
  global $dbConnect;
  $sql = "SELECT firstname, lastname, user_id, email , admin FROM users WHERE cookie = ?";
  $stmt = $dbConnect->prepare($sql);
  $stmt->execute([$cookie]);
  if ($stmt->rowCount() == 1) {
    return $stmt->fetch();
  }
  setcookie('logUser', "", time() - (3600 * 24 * 30), "/");
  return;
}
