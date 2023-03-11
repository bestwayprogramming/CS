<?php 
session_start ();
if(!isset($_SESSION["login"]))

	header("location:login.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scoreboard main page</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <?php include('pages/header.php'); ?>
  <div class="main1">
    <h3>manage your own sports</h3>

  </div>
  <div class="main2">
    <h3>Sports</h3>
    <div class="layout1">
      <div class="part1"><img src="images/logo.png" alt="cricket"></div>
    </div>
  </div>
  <div class="main3">
    <h3>features</h3>
    <div class="features">
      <div class="feature1">

      </div>
      <div class="feature2"></div>
      <div class="feature3"></div>
      <div class="feature4"></div>
      <div class="feature5"></div>
    </div>
  </div>
  <footer>
    <p>&copy; CustomSports Ltd. All rights reserved.</p>
  </footer>
</body>

</html>