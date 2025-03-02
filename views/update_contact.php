<?php
include '../database/database.php';
include '../helpers/authenticated.php';

try {
  $id = $_GET['id'];

  $stmt = $conn->prepare("SELECT * FROM contacts WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $result->num_rows > 0) {
    $contact = $result->fetch_assoc();  // Changed variable name
  } else {
    die("Contact not found");
  }
  $stmt->close();
} catch (\Exception $e) {
  echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Update Contact </title>
  <link href="../statics/css/bootstrap.min.css" rel="stylesheet">
  <script src="../statics/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="col-6">
      <div class="row">
        <p class="display-5 fw-bold">Edit Contact</p>
      </div>
      <div class="row">
        <form class="form" action="../handlers/update_contact_handler.php" method="POST">
          <input name="id" value="<?= $contact['id'] ?>" hidden />
          <div class="my-3">
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="<?= $contact['name'] ?>" required />
          </div>
          <div class="my-3">
            <label>Email</label>
            <input class="form-control" type="text" name="email" value="<?= $contact['email'] ?>" required />
          </div>
          <div class="my-3">
            <label>Phone</label>
            <input class="form-control" type="text" name="phone" value="<?= $contact['phone'] ?>" required />
          </div>

          <div class="my-3">
            <button type="submit" class="btn btn-outline-dark">Save Contact&nbsp;<i class="fa-solid fa-floppy-disk"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
