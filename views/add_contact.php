<?php include '../helpers/authenticated.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Create Contact </title>
  <link href="../statics/css/bootstrap.min.css" rel="stylesheet">
  <script src="../statics/js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="col-6">
      <div class="row">
        <p class="display-5 fw-bold">Create Contact</p>
      </div>
      <div class="row">
        <form class="form" action="../handlers/add_contact_handler.php" method="POST">
          <div class="my-3">
          <label>Name</label>
          <input class="form-control" type="text" name="name" required />
          </div>
          <div class="my-3">
          <label>Email</label>
          <input class="form-control" type="email" name="email" required />
          </div>
          <div class="my-3">
          <label>Phone</label>
            <input class="form-control" type="text" name="phone" required />
          </div>
          <div class="my-3">
            <button type="submit" class="btn btn-outline-dark">Create Contact&nbsp;<i class="fa-solid fa-plus"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
