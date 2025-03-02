<?php

include "../database/database.php";

try {

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id = $_POST['id'];

        $stmt = $conn->prepare("UPDATE contacts SET name = ?, email = ? , phone = ? WHERE id = ?");

        $stmt->bind_param("sssi", $name, $email, $phone, $id);

        if ($stmt->execute()) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "operation failed";
        }
    }

} catch (\Exception $e) {
    echo "Error: ".$e;
}
