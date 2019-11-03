<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>
</head>

<body>
  <?php
  session_start();

  ?>
  <h1>Welcome <?php echo ($_SESSION['name']); ?></h1>

  <a href="StudentHome.php" style="color:MediumSeaGreen;"><b>Back</b></a>

  <p>ID : <?php echo ($_SESSION['id']); ?></p>
  <p>Name : <?php echo ($_SESSION['name']); ?></p>
  <p>Gender : <?php echo ($_SESSION['Gender']); ?></p>
  <p>Email : <?php echo ($_SESSION['email']); ?></p>
  <p>Account Type : <?php echo ($_SESSION['type']); ?></p>

  <a href="edit.php" style="color:MediumSeaGreen;"><b>Edit</b></a>


</body>

</html>