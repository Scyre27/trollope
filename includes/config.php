<?php

function connect()
{
  try {
    $username = "root";
    $password = "Asare4ster...";
    $dbn = new PDO('mysql:host=localhost;dbname=trolopee_prop', $username, $password);
    return $dbn;
  } catch (PDOException $e) {
    echo $e;
  }
}

$dbConnect = connect();
