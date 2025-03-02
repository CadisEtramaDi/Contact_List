<?php

include "../database/database.php";

try {

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone) VALUES (?, ?, ?)");

    $stmt->bind_param("sss", $name, $email, $phone);

    if ($stmt->execute()) {
      header("Location: ../index.php");
      exit;
    } else {
      echo "operation failed";
    }
  }
} catch (\Exception $e) {
  echo "Error: " . $e;
}
