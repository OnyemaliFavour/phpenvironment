<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dates</title>
  <?php include_once("../includes/styles.php"); ?>

</head>

<body>
  <h1 class="blue">dates</h1>
  <div><a href="index.php">home</a>
  </div>
  <?php
  date_default_timezone_set("America/Moncton");
  $now = time(); // get current date time as EPOCH Seconds/UNIX TIMESTAMP
  
  $date = strtotime("2026-10-4 14:35:05");
  ?>
  <h1>Now epoch seconds : <?= $now ?></h1>
  <h2>Now formatted date: <?= date("Y-m-d H:i:s", $now) ?></h2>
  <h1>epoch seconds of our constructed date : <?= $date ?></h1>
  <h2>formatted date <?= date("Y-m-d H:i:s", $date) ?></h2>
</body>

</html>