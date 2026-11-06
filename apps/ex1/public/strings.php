<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>strings</title>
  <?php include_once("../includes/styles.php"); ?>

</head>
</head>

<body>
  <h1 class="blue">strings</h1>
  <a href="index.php">home</a>

  <?php
  $name = "Favour Onyemali";
  $Campus = "Moncton";
  $course = "Software Development";
  $message = "My name is " . $name . " and i am a " . $course . " studemt at nbcc " . $Campus;
  $messagestringinterpolation = "My name is $name and i am a $course studnet at NBCC $Campus";
  ?>
  <h1>using string concatenation with the dot operator</h1>
  <h2 class="green"><?php echo $message ?></h2>

  <h1>using string interpolation</h1>
  <h2 class="blue"><?= $messagestringinterpolation ?></h2>
</body>

</html>