<?php
// LOGIN PAGE
function matchUser($email, $password)
{
  global $dbConnect;
  $sql = "SELECT * FROM users WHERE email= ?  and password= ? ";
  $stmt = $dbConnect->prepare($sql);
  $exec = $stmt->execute([$email, $password]);
  if ($exec) {
    $result = $stmt->rowCount();
    if ($result == 1) {
      return $stmt->fetch();
    }
    return 'notfound';
  }
}

function fetchCookie($email)
{
  global $dbConnect;
  $sql = "SELECT cookie FROM users WHERE email= ?";
  $stmt = $dbConnect->prepare($sql);
  $exec = $stmt->execute([$email]);
  if ($exec) {
    return $stmt->fetch()['cookie'];
  }
}
